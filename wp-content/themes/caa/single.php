<?php get_header(); ?>

<div class="content update">
    <div class="page-top page-top-sticky">
        <div class="container">
            <div class="page-head">
                <div class="page-title"><a href="<?php bloginfo('url'); ?>/update">UPDATE</a></div>
                <nav class="page-nav">
                    <ul>
                        <li><a href="<?php bloginfo('url'); ?>/category/update/news" title=""><span>News</span></a></li>
                        <li><a href="<?php bloginfo('url'); ?>/category/update/social-media" title=""><span>Social Media</span></a></li>
                        <li><a href="<?php bloginfo('url'); ?>/category/update/publications" title=""><span>Publications</span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="update-warp">
        <div class="container">
            <div class="article">
                <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
                <div class="article-warp">
                    <span class="time m-meta"><?php echo get_the_date( 'd-n-Y' ); ?></span>
                    <h1 class="article-title"><?php the_title(); ?></h1>
                    <div class="meta hidden-xs">
                        <span class="time"><?php echo get_the_date( 'd-n-Y' ); ?></span>
                        <span class="author"><?php the_author(); ?></span>
                    </div>
                    <div class="thum">
                        <?php the_post_thumbnail('', array('alt' => get_the_title(), 'title' => get_the_title()));?>
                    </div>
                    <span class="author m-meta"><?php the_author(); ?></span>
                    <div class="article-content">
                        <?php the_content(); ?>
                    </div>
                </div>
                <?php endwhile; endif; ?>
            </div>
    
            <div class="page-navi">
                <?php
                        $prev_post = get_previous_post(true,'3','category');
                        echo '<div class="prev">';
                        if (!empty($prev_post)): ?>
                            <a href="<?php echo get_permalink($prev_post->ID); ?>" title="Previous"><img src="<?php bloginfo('template_url'); ?>/images/icon-prev.svg">Previous</a>
                <?php endif;
                        echo '</div>';
                        ?>
    
                <?php
                        $next_post = get_next_post(true,'3','category');
                        echo '<div class="next">';
                        if (!empty($next_post)): ?>
                            <a href="<?php echo get_permalink($next_post->ID); ?>" title="Next">Next<img src="<?php bloginfo('template_url'); ?>/images/icon-next.svg"></a>
                <?php endif;
                    echo '</div>';
                    ?>
            </div>
    
        </div>
    </div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

<script>
function updateNavSingle() {
  if (
    /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
      navigator.userAgent
      )
    ) {
  } else {
    $(document).scroll(function() {
        var getDiv_md02 = $(".update-warp");
      var offSet02 = getDiv_md02.offset().top - 69;
      if ($(window).scrollTop() > offSet02) {
        $(".update .page-title a").css({
          fontSize: 26
      });
    } else {
        $(".update .page-title a").css({
          fontSize: 65
      });
    }
});
}
}

updateNavSingle();

</script>