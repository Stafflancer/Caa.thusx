<?php get_header(); ?>

    <div class="content update projects">
        <div class="container">
            <div class="page-head">
                <h1 class="page-title"><a href="<?php bloginfo('url'); ?>/projects">PROJECTS</a></h1>
                <div class="category-filter">
                    <?php echo do_shortcode( '[searchandfilter id="16"]' ); ?>
                </div>
            </div>
            <ul class="project-list">
                <?php if (have_posts()): while (have_posts()): the_post();?>
                    <li>
                        <a class="project-item" href="<?php the_permalink();?>">
                            <?php the_post_thumbnail('', array('alt' => get_the_title(), 'title' => get_the_title()));?>
                            <h4><?php the_title(); ?></h4>
                        </a>
                    </li>
                <?php endwhile;endif;?>
                <li>
            </ul>
        </div>
    </div>

<?php get_footer(); ?>