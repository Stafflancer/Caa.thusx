<div class="result-item">
  <a href="<?php the_permalink();?>">
    <div class="result-img">
      <?php the_post_thumbnail('', array('alt' => get_the_title(), 'title' => get_the_title()));?>
    </div>
    <div class="result-intro">
      <h4><?php the_title(); ?></h4>
      <div class="des">
          <?php echo pods_field_display('projects', $post->ID, 'project_desciption'); ?>
      </div>
    </div>
  </a>
</div>