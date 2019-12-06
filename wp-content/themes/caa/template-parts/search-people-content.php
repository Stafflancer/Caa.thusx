<div class="result-item">
  <a href="<?php the_permalink();?>">
    <div class="result-img">
      <?php the_post_thumbnail('', array('alt' => get_the_title(), 'title' => get_the_title()));?>
    </div>
    <div class="result-intro">
      <h4><?php the_title(); ?></h4>
      <div class="des">
          <?php echo pods_field_display('people', $post->ID, 'bio'); ?>
      </div>
    </div>
  </a>
</div>