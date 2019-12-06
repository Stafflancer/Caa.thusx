<?php get_header(); ?>

<div class="content project-detail" id="top">
    <?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
    <div class="section-img full-height">
        <div class="swiper-container project-big-slide">
            <div class="swiper-button-prev swiper-button"></div>
            <div class="swiper-button-next swiper-button"></div>
            <div class="swiper-pagination"></div>
            <div class="swiper-wrapper">
                <?php
                        $images =get_post_meta($post->ID, 'projetc_top_banner');
                        foreach ( $images as $image )
                        {   
                            echo '<div class="swiper-slide">';
                            echo pods_image( $image, 'original' );
                            echo '</div>';
                        }
                    ?>
            </div>
            <div class="tip">scroll down for more information</div>
        </div>
    </div>
    <div class="section-intro">
        <div class="section-content">
            <div class="container">
                <h1><?php the_title(); ?></h1>
                <div class="intro-detail">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>
                                PROJECT INFORMATION
                            </h4>
                            <?php echo pods_field_display('projects', $post->ID, 'project_information'); ?>
                            <br>
                            <h4>
                                DESIGN TEAM
                            </h4>
                            <?php echo pods_field_display('projects', $post->ID, 'design_team'); ?>
                            <br>
                            <h4>
                                COLLABORATORS
                            </h4>
                            <div class="c_black_burger"></div>
                            <?php echo pods_field_display('projects', $post->ID, 'collaborators'); ?>
                        </div>
                        <div class="col-md-6">
                            <h4>
                                PROJECT DESCIPTION
                            </h4>
                            <?php echo pods_field_display('projects', $post->ID, 'project_desciption'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-detial">
        <div class="section-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="full-img">
                            <div class="swiper-container project-small-slide">
                                <div class="swiper-button-prev swiper-button"></div>
                                <div class="swiper-button-next swiper-button"></div>
                                <div class="swiper-pagination"></div>
                                <div class="swiper-wrapper">
                                    <?php
                                        $images =get_post_meta($post->ID, 'project_images01');
                                        foreach ( $images as $image )
                                        {   
                                            echo '<div class="swiper-slide">';
                                            echo '<a href="'. pods_image_url( $image, 'original' ).'" data-lightbox="project_images01">';
                                            echo pods_image( $image, 'original' );
                                            echo '</a></div>';
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="swiper-container project-small-slide">
                            <div class="swiper-button-prev swiper-button"></div>
                            <div class="swiper-button-next swiper-button"></div>
                            <div class="swiper-pagination"></div>
                            <div class="swiper-wrapper">
                                <?php
                                        $images =get_post_meta($post->ID, 'project_images02');
                                        foreach ( $images as $image )
                                        {   
                                            echo '<div class="swiper-slide">';
                                            echo '<a href="'. pods_image_url( $image, 'original' ).'" data-lightbox="project_images02">';
                                            echo pods_image( $image, 'original' );
                                            echo '</a></div>';
                                        }
                                    ?>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="swiper-container project-small-slide">
                            <div class="swiper-button-prev swiper-button"></div>
                            <div class="swiper-button-next swiper-button"></div>
                            <div class="swiper-pagination"></div>
                            <div class="swiper-wrapper">
                                <?php
                                        $images =get_post_meta($post->ID, 'project_images03');
                                        foreach ( $images as $image )
                                        {   
                                            echo '<div class="swiper-slide">';
                                            echo '<a href="'. pods_image_url( $image, 'original' ).'" data-lightbox="project_images03">';
                                            echo pods_image( $image, 'original' );
                                            echo '</a></div>';
                                        }
                                    ?>
                            </div>
                        </div>
                        <div class="swiper-container project-small-slide">
                            <div class="swiper-button-prev swiper-button"></div>
                            <div class="swiper-button-next swiper-button"></div>
                            <div class="swiper-pagination"></div>
                            <div class="swiper-wrapper">
                                <?php
                                        $images =get_post_meta($post->ID, 'project_images04');
                                        foreach ( $images as $image )
                                        {   
                                            echo '<div class="swiper-slide">';
                                            echo '<a href="'. pods_image_url( $image, 'original' ).'" data-lightbox="project_images04">';
                                            echo pods_image( $image, 'original' );
                                            echo '</a></div>';
                                        }
                                    ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="full-img">
                            <div class="swiper-container project-small-slide">
                                <div class="swiper-button-prev swiper-button"></div>
                                <div class="swiper-button-next swiper-button"></div>
                                <div class="swiper-pagination"></div>
                                <div class="swiper-wrapper">
                                    <?php
                                        $images =get_post_meta($post->ID, 'project_images05');
                                        foreach ( $images as $image )
                                        {   
                                            echo '<div class="swiper-slide">';
                                            echo '<a href="'. pods_image_url( $image, 'original' ).'" data-lightbox="project_images05">';
                                            echo pods_image( $image, 'original' );
                                            echo '</a></div>';
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="swiper-container project-small-slide">
                            <div class="swiper-button-prev swiper-button"></div>
                            <div class="swiper-button-next swiper-button"></div>
                            <div class="swiper-pagination"></div>
                            <div class="swiper-wrapper">
                                <?php
                                        $images =get_post_meta($post->ID, 'project_images06');
                                        foreach ( $images as $image )
                                        {   
                                            echo '<div class="swiper-slide">';
                                            echo '<a href="'. pods_image_url( $image, 'original' ).'" data-lightbox="project_images06">';
                                            echo pods_image( $image, 'original' );
                                            echo '</a></div>';
                                        }
                                    ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="swiper-container project-small-slide">
                            <div class="swiper-button-prev swiper-button"></div>
                            <div class="swiper-button-next swiper-button"></div>
                            <div class="swiper-pagination"></div>
                            <div class="swiper-wrapper">
                                <?php
                                        $images =get_post_meta($post->ID, 'project_images07');
                                        foreach ( $images as $image )
                                        {   
                                            echo '<div class="swiper-slide">';
                                            echo '<a href="'. pods_image_url( $image, 'original' ).'" data-lightbox="project_images07">';
                                            echo pods_image( $image, 'original' );
                                            echo '</a></div>';
                                        }
                                    ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="swiper-container project-small-slide">
                            <div class="swiper-button-prev swiper-button"></div>
                            <div class="swiper-button-next swiper-button"></div>
                            <div class="swiper-pagination"></div>
                            <div class="swiper-wrapper">
                                <?php
                                        $images =get_post_meta($post->ID, 'project_images08');
                                        foreach ( $images as $image )
                                        {   
                                            echo '<div class="swiper-slide">';
                                            echo '<a href="'. pods_image_url( $image, 'original' ).'" data-lightbox="project_images08">';
                                            echo pods_image( $image, 'original' );
                                            echo '</a></div>';
                                        }
                                    ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endwhile; endif; ?>
    <div class="section-update">
        <div class="section-content">
            <div class="container">
                <div class="update-list">
                    <?php query_posts('showposts=9&category_name=update'); ?>
                    <?php while ( have_posts() ) : the_post(); ?>
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
                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="section-related-project">
        <div class="section-content">
            <div class="container">
                <h3>RELATED PROJECTS</h3>
                <div class="related-slide">
                    <div class="swiper-container" id="relatedSlide">
                        <div class="swiper-button-prev swiper-button"></div>
                        <div class="swiper-button-next swiper-button"></div>
                        <div class="swiper-wrapper">
                            <?php query_posts('showposts=12&post_type=projects');?>
                            <?php while (have_posts()): the_post();?>
                            <div class="related-item swiper-slide">
                                <a class="project-item" href="<?php the_permalink();?>">
                                    <?php the_post_thumbnail('', array('alt' => get_the_title(), 'title' => get_the_title()));?>
                                    <h4><?php the_title();?></h4>
                                </a>
                            </div>
                            <?php endwhile;?>
                            <?php wp_reset_query();?>
                        </div>
                    </div>
                </div>
                <a href="#top" class="gotop"></a>
            </div>
        </div>
    </div>
    <div class="project-footer">
        <div class="section-content">
            <div class="container">
                <hr>
                <a href="#top" class="gotop"></a>
            </div>
        </div>
    </div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
<script src="<?php bloginfo('template_url'); ?>/js/lib/lightbox-plus-jquery.min.js"></script>
<script src="">
    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true
    })
</script>
