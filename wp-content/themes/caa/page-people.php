<?php/*Template Name: People*/?>
<?php get_header();?>

<div class="content about">
    <div class="page-top page-top-sticky hide-m">
        <div class="container">
            <div class="page-head">
               
                <nav class="page-nav about-nav">
                    <ul>
                        <li><a href="<?php bloginfo('url');?>/about">about</a></li>
                        <li><a href="http://caalab.com/" target="_blank">caa-lab</a></li>
                        <li class="active"><a href="<?php bloginfo('url');?>/people">people</a></li>
                        <li><a href="<?php bloginfo('url');?>/jobs">jobs</a></li>
                        <li><a href="<?php bloginfo('url');?>/awards">awards</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <div class="people-modal about-m">
         <div class="container">
             <div class="modal-header page-head">
                    <a class="close" href="<?php bloginfo('url');?>/about"><img src="<?php bloginfo('template_url'); ?>/images/icon-close-white.svg" alt=""></a>
                    <h4 class="page-title" id="myModalLabel">people</h4>
                </div>
                <div class="modal-body">
                     <div class="page-title"><a href="<?php bloginfo('url');?>/people">people</a></div>
                    <div class="modal-body-content">
                        <ul class="people-list people_mob">
                            <?php 
                            $args = array(
                            'post_type' => 'people',
                            'tax_query' => array(
                                'relation' => 'AND',
                                array(
                                    'taxonomy' => 'people_cat',
                                    'field'    => 'slug',
                                    'terms'    => array( 'ceo' ), 
                                ),
                            ));
                            query_posts($args);?>
                            <?php while (have_posts()): the_post();?>
                                    <li>
                                        <a href="javascript:;" class="link_mate link_mate_mob" data-toggle="modal" data-target="#peopleDetailModal<?php the_ID();?>">
                                            <div class="pic"><?php the_post_thumbnail('', array('alt' => get_the_title(), 'title' => get_the_title()));?></div>
                                            <div class="name"><?php the_title();?></div>
                                            <div class="position"><?php echo pods_field_display('people', $post->ID, 'position'); ?></div>
                                        </a>
                                        <a class="link_mate">
                                            <div class="pic"><?php the_post_thumbnail('', array('alt' => get_the_title(), 'title' => get_the_title()));?></div>
                                            <div class="name"><?php the_title();?></div>
                                            <div class="position"><?php echo pods_field_display('people', $post->ID, 'position'); ?></div>
                                        </a>
                                    </li>
                                    <div class="people-intro people_zvika people_hide">
                                        <div class="name">
                                            <?php the_title(); ?> <br>
                                            <?php echo pods_field_display('people', $post->ID, 'position'); ?>
                                        </div>
                                        <div class="intro">
                                            <p>
                                                Bio: <?php echo pods_field_display('people', $post->ID, 'bio'); ?>
                                            </p>
                                        </div>
                                        <div class="intro-contact">
                                            Contact:<?php echo pods_field_display('people', $post->ID, 'contact'); ?><br>
                                            Following on Social media:<?php echo pods_field_display('people', $post->ID, 'following_on_social_media'); ?>
                                        </div>
                                        <div class="close close_people" data-dismiss="modal" aria-label="Close"><img src="<?php bloginfo('template_url'); ?>/images/icon-close.svg" alt=""></div>
                                    </div>
                                    <?php endwhile;?>
                            <?php wp_reset_query();?>
                        </ul>
                        <ul class="people-list">
                            <?php 
                            $args = array(
                                'post_type' => 'people',
                                'tax_query' => array(
                                    'relation' => 'AND',
                                    array(
                                        'taxonomy' => 'people_cat',
                                        'field'    => 'slug',
                                        'terms'    => array( 'ceo' ), 
                                        'operator' => 'NOT EXISTS'
                                    ),
                                )
                            );
                            query_posts($args);?>
                            <?php while (have_posts()): the_post();?>
                                    <li>
                                        <a href="javascript:;" data-toggle="modal" data-target="#peopleDetailModal<?php the_ID();?>">
                                            <div class="pic"><?php the_post_thumbnail('', array('alt' => get_the_title(), 'title' => get_the_title()));?></div>
                                            <div class="name"><?php the_title();?></div>
                                            <div class="position"><?php echo pods_field_display('people', $post->ID, 'position'); ?></div>
                                        </a>
                                    </li>
                                    <?php endwhile;?>
                            <?php wp_reset_query();?>
                        </ul>
                    </div>
                </div>
            </div>
    </div>
   
</div>

<!-- About Modal -->
<div class="modal fade about-modal" id="aboutModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="container">
                <div class="modal-header page-head">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><img src="<?php bloginfo('template_url');?>/images/icon-close.svg" alt=""></button>
                    <h4 class="page-title" id="myModalLabel">ABOUT</h4>
                </div>
                <div class="modal-body">
                    <div class="article-content">
                        <?php if (have_posts()): ?>
                        <?php while (have_posts()): the_post();?>
                                <?php the_content();?>
                            <?php endwhile;?>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- AWARDS Modal -->
<div class="modal fade awards-modal" id="awardsModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="container">
                <div class="modal-header page-head">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><img src="<?php bloginfo('template_url');?>/images/icon-close.svg" alt=""></button>
                    <h4 class="page-title" id="myModalLabel">AWARDS</h4>
                </div>
                <div class="modal-body">
                    <ul class="awards-list">
                        <?php query_posts('post_type=awards');?>
                        <?php while (have_posts()): the_post();?>
                            <li>
                                <div class="time"><?php echo pods_field_display('awards', $post->ID, 'year'); ?></div>
                                <div class="intro"><?php the_title();?></div>
                            </li>
                            <?php endwhile;?>
                        <?php wp_reset_query();?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- PEOPLE Modal -->
<div class="modal fade  people-modal" id="peopleModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="container">
                <div class="modal-header page-head">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><img src="<?php bloginfo('template_url');?>/images/icon-close.svg" alt=""></button>
                    <h4 class="page-title" id="myModalLabel">PEOPLE</h4>
                </div>
                <div class="modal-body">
                    <ul class="people-list">
                        <?php 
                        $args = array(
                        'post_type' => 'people',
                        'tax_query' => array(
                            'relation' => 'AND',
                            array(
                                'taxonomy' => 'people_cat',
                                'field'    => 'slug',
                                'terms'    => array( 'ceo' ), 
                            ),
                        ));
                        query_posts($args);?>
                        <?php while (have_posts()): the_post();?>
                                <li>
                                    <a href="javascript:;" data-toggle="modal" data-target="#peopleDetailModal<?php the_ID();?>">
                                        <div class="pic"><?php the_post_thumbnail('', array('alt' => get_the_title(), 'title' => get_the_title()));?></div>
                                        <div class="name"><?php the_title();?></div>
                                        <div class="position"><?php echo pods_field_display('people', $post->ID, 'position'); ?></div>
                                    </a>
                                </li>
                                <?php endwhile;?>
                        <?php wp_reset_query();?>
                    </ul>
                    <ul class="people-list">
                        <?php 
                        $args = array(
                            'post_type' => 'people',
                            'tax_query' => array(
                                'relation' => 'AND',
                                array(
                                    'taxonomy' => 'people_cat',
                                    'field'    => 'slug',
                                    'terms'    => array( 'ceo' ), 
                                    'operator' => 'NOT EXISTS'
                                ),
                            )
                        );
                        query_posts($args);?>
                        <?php while (have_posts()): the_post();?>
                                <li>
                                    <a href="javascript:;" data-toggle="modal" data-target="#peopleDetailModal<?php the_ID();?>">
                                        <div class="pic"><?php the_post_thumbnail('', array('alt' => get_the_title(), 'title' => get_the_title()));?></div>
                                        <div class="name"><?php the_title();?></div>
                                        <div class="position"><?php echo pods_field_display('people', $post->ID, 'position'); ?></div>
                                    </a>
                                </li>
                                <?php endwhile;?>
                        <?php wp_reset_query();?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>



<?php get_footer();?>
<script>
    aboutNav()
</script>