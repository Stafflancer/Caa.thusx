<?php get_header(); ?>
<style>
.project-footer {
    display: block;
    margin: 45px 0;
}
.project-footer hr {
    border-top: 1px solid #000;
}

</style>

    <div class="content update">
        <div class="page-top page-top-sticky">
            <div class="container">
                <div class="page-head">
                    <div class="page-title"><a href="<?php bloginfo('url'); ?>/update">UPDATE</a></div>
                    <nav class="page-nav">
                        <ul>
                            <?php
                            $parent_id = get_category_root_id($cat);
                            if (get_category_children($parent_id) != "") {
                                echo wp_list_categories('child_of=' .$parent_id. '&depth=1&hide_empty=0&title_li=&orderby=id&order=ASC');
                            }else{
                            }
                            ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="update-warp">
            <h2 class="category-name"><?php single_cat_title(); ?></h2>
            <div class="container">
                <div class="update-list">
                    <?php if (have_posts()): while (have_posts()): the_post();?>
                        <div class="update-item <?php echo pods_field_display('post', $post->ID, 'update_style'); ?> <?php $post_id = get_the_ID(); // or use the post id if you already have it
                            $category_object = get_the_category($post_id);
                            $category_name = $category_object[0]->slug;
                            echo $category_name ;
                            ?>">
                            <a href="<?php the_permalink();?>" data-href="<?php echo pods_field_display('post', $post->ID, 'social_media_link'); ?>" class="item">
                                <div class="pic">
                                    <?php the_post_thumbnail('', array('alt' => get_the_title(), 'title' => get_the_title()));?>
                                </div>
                                <div class="item-content">
                                    <div class="meta-news">
                                        <div class="time"><?php echo get_the_date( 'd-n-Y' ); ?></div>
                                        <div class="title"><?php the_title(); ?></div>
                                        <div class="intro"><?php echo pods_field_display('post', $post->ID, 'update_description'); ?></div>
                                        <div class="read-more">Read More</div>
                                    </div>
                                    <div class="meat-social">
                                        <div class="intro"><?php echo pods_field_display('post', $post->ID, 'social_media_description'); ?></div>
                                        <span class="author"><?php echo pods_field_display('post', $post->ID, 'social_media_author'); ?></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endwhile;endif;?>
                </div>
    
            </div>
        </div>
    </div>

        <div class="project-footer">
            <div class="container">
                <hr>
                <a href="#top" class="gotop"></a>
            </div>
        </div>



<?php get_footer(); ?>
<script>
    updateNav()
</script>