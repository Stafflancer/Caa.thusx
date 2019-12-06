<div class="result-item">
  <a href="<?php the_permalink();?>">
    <div class="result-img">
      <?php the_post_thumbnail('', array('alt' => get_the_title(), 'title' => get_the_title()));?>
    </div>
    <div class="result-intro">
      <h4><?php the_title(); ?></h4>
      <p><?php echo wp_trim_words( get_the_content(), 180 ); ?></p>
    </div>
  </a>
</div>