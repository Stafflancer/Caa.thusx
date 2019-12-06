<?php

/*______________________________________ 优化 ______________________________________*/



// 删掉emoji
function disable_emojis() {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
    add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
}
add_action( 'init', 'disable_emojis' );

/**
 * 删除编辑器中的emoji扩展
 */
function disable_emojis_tinymce( $plugins ) {
    return array_diff( $plugins, array( 'wpemoji' ) );
}


// 使用经典编辑器
add_filter('use_block_editor_for_post_type', '__return_false');

// 删除古腾堡编辑器
function wps_deregister_styles()
{
    wp_dequeue_style('wp-block-library');
}
add_action('wp_print_styles', 'wps_deregister_styles', 100);


//清除 <head> 中无用链接
add_action( 'init', 'mx_head_cleanup', 10 );
function mx_head_cleanup() {
  remove_action('wp_head', 'feed_links', 2);
  remove_action('wp_head', 'feed_links_extra', 3);
  remove_action('wp_head', 'rsd_link');
  remove_action('wp_head', 'wlwmanifest_link');
  remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
  remove_action('wp_head', 'wp_generator');
  remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
}

//去掉顶部菜单栏
show_admin_bar(false);
//清除版本号
add_filter( 'the_generator', 'mx_remove_version' );
function mx_remove_version() {
    return '';
}

/*_____________________________ 基本WordPress theme架构代码 ____________________________*/

// 特色图像
add_theme_support( 'post-thumbnails' );

//图片默认连接到媒体文件(原始链接)
update_option('image_default_link_type', 'none');

// 菜单
if(function_exists('register_nav_menus')){
    register_nav_menus( array(
        'header-menu' => __( '头部导航' ),
        'footer-menu' => __( '底部导航' )
    ));
}

function remove_submenu() {
    // 删除"设置"下面的子菜单"隐私"
    remove_submenu_page( 'themes.php', 'widgets.php' );

    // 删除"外观"下面的子菜单"编辑"
    remove_submenu_page( 'themes.php', 'theme-editor.php' );
}

if ( is_admin() ) {
    // 删除左侧菜单
    add_action('admin_menu', 'remove_menus');
    add_action('admin_init','remove_submenu');
}

//更改后台登录logo
add_action('login_head', 'login_logo');
function login_logo() {
   echo '
      <style type="text/css">
         .login h1 a { background-image: url('.get_bloginfo('template_directory').'/images/logo.png) !important; }
      </style>
   ';
}

/*______________________________________ 常用函数 ______________________________________*/

// 获取根分类的ID
function get_category_root_id($cat) {
    $this_category = get_category($cat); // 取得当前分类
    while($this_category->category_parent) // 若当前分类有上级分类时，循环
    {
        $this_category = get_category($this_category->category_parent); // 将当前分类设为上级分类（往上爬）
    }
    return $this_category->term_id; // 返回根分类的id号
}

// 获取所属分类ID
function get_article_category_ID() {
    $category = get_the_category();
    return $category[0]->cat_ID;
}

// 分页导航菜单
function par_pagenavi($range = 9){
    global $paged, $wp_query;
    if ( !$max_page ) {$max_page = $wp_query->max_num_pages;}
    if($max_page > 1){
        if(!$paged){$paged = 1;}
            previous_posts_link(' 上一页 ');
        if($max_page > $range){
            if($paged < $range){
                for($i = 1; $i <= ($range + 1); $i++){echo "<a href='" . get_pagenum_link($i) ."'";
                if($i==$paged)echo " class='current'";echo ">$i</a>";}
            }
            elseif($paged >= ($max_page - ceil(($range/2)))){
                for($i = $max_page - $range; $i <= $max_page; $i++){echo "<a href='" . get_pagenum_link($i) ."'";
                if($i==$paged)echo " class='current'";echo ">$i</a>";}
            }
        elseif($paged >= $range && $paged < ($max_page - ceil(($range/2)))){
            for($i = ($paged - ceil($range/2)); $i <= ($paged + ceil(($range/2))); $i++){echo "<a href='" . get_pagenum_link($i) ."'";if($i==$paged) echo " class='current'";echo ">$i</a>";}}
        }
        else{for($i = 1; $i <= $max_page; $i++){echo "<a href='" . get_pagenum_link($i) ."'";
        if($i==$paged)echo " class='current'";echo ">$i</a>";}}
        next_posts_link(' 下一页 ');
    }
}

//让搜索支持自定义文章类型

add_filter('posts_orderby', 'group_by_post_type', 10, 2, 22, 141, 11);
function group_by_post_type($orderby, $query) {
    global $wpdb;
    if ($query->is_search) {
        return $wpdb->posts . '.post_type DESC';
    }
    // provide a default fallback return if the above condition is not true
    return $orderby;
}

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Landing Settings',
		'menu_title'	=> 'Website Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'About Settings',
		'menu_title'	=> 'About',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Contact Settings',
		'menu_title'	=> 'Contact',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}
?>
