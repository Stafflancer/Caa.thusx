<?php/*Template Name: JObs*/?>
<?php get_header(); ?>

<div class="content about">
    <div class="page-top page-top-sticky hide-m">
        <div class="container">
            <div class="page-head">
                <nav class="page-nav about-nav">
                    <ul>
                        <li><a href="<?php bloginfo('url');?>/about">about</a></li>
                        <li><a href="http://caalab.com/" target="_blank">caa-lab</a></li>
                        <li><a href="<?php bloginfo('url');?>/people">people</a></li>
                        <li class='active'><a href="<?php bloginfo('url');?>/jobs">jobs</a></li>
                        <li><a href="<?php bloginfo('url');?>/awards">awards</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
    <div class="jobs about-m">
        <div class="modal-content">
            <div class="container">
                <div class="modal-header page-head">
                    <a class="close" href="<?php bloginfo('url');?>/about"><img src="<?php bloginfo('template_url'); ?>/images/icon-close-white.svg" alt=""></a>
                    <h4 class="page-title" id="myModalLabel">jobs</h4>
                </div>
                <div class="modal-body">
                    <div class="page-title"><a href="<?php bloginfo('url');?>/jobs">jobs</a></div>
                    <div class="modal-body-content">
                        <div class="article-content min-cont">
                            <?php the_content(''); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>

</div>

<?php get_footer(); ?>
<script>
    aboutNav()
</script>