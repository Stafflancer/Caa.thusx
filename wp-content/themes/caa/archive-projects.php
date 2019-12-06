<?php get_header(); ?>

<div class="content update projects archive-projects" id="top">
    <div class="page-top page-top-sticky">
        <div class="container">
            <div class="page-head">
                <div class="page-title milka"><a href="<?php bloginfo('url'); ?>/projects">PROJECTS</a></div>
                <div class="category-filter">
                    <ul>
                        <li>
                            <select data-placeholder="Category" tabindex="1" id="selectCategory">
                                <option value=""></option>
                                <?php
                                        $terms = get_terms(
                                            array(
                                                'taxonomy' => 'p_category',
                                                'hide_empty' => false,
                                            )
                                        );
                                        // Check if any term exists
                                        if (!empty($terms) && is_array($terms)) {
                                            // Run a loop and print them all
                                            foreach ($terms as $term) {?>
                                            <option value="<?php echo esc_url(get_term_link($term)) ?>">
                                                <?php echo $term->name; ?>
                                            </option><?php
                                        }
                                        }
                                    ?>
                            </select>
                        </li>
                        <li>
                            <select data-placeholder="Status" tabindex="1" id="selectStatus">
                                <option value=""></option>
                                <?php
                                        $terms = get_terms(
                                            array(
                                                'taxonomy' => 'p_status',
                                                'hide_empty' => false,
                                            )
                                        );
                                        // Check if any term exists
                                        if (!empty($terms) && is_array($terms)) {
                                            // Run a loop and print them all
                                            foreach ($terms as $term) {?>
                                            <option value="<?php echo esc_url(get_term_link($term)) ?>">
                                                <?php echo $term->name; ?>
                                            </option><?php
                                        }
                                        }
                                    ?>
                            </select>
                        </li>
                        <li>
                            <select data-placeholder="Location" tabindex="1" id="selectLocation">
                                <option value=""></option>
                                <?php
                                        $terms = get_terms(
                                            array(
                                                'taxonomy' => 'p_location',
                                                'hide_empty' => false,
                                            )
                                        );
                                        // Check if any term exists
                                        if (!empty($terms) && is_array($terms)) {
                                            // Run a loop and print them all
                                            foreach ($terms as $term) {?>
                                            <option value="<?php echo esc_url(get_term_link($term)) ?>">
                                                <?php echo $term->name; ?>
                                            </option><?php
                                        }
                                        }
                                    ?>
                            </select>
                        </li>
                        <li>
                            
                            <select data-placeholder="Year" tabindex="1" id="selectYear">
                                <option value=""></option>
                                    <?php
                                        $terms = get_terms(
                                            array(
                                                'taxonomy' => 'p_year',
                                                'hide_empty' => false,
                                            )
                                        );
                                        // Check if any term exists
                                        if (!empty($terms) && is_array($terms)) {
                                            // Run a loop and print them all
                                            foreach ($terms as $term) {?>
                                            <option value="<?php echo esc_url(get_term_link($term)) ?>">
                                                <?php echo $term->name; ?>
                                            </option><?php
                                        }
                                        }
                                    ?>
                            </select>
                        </li>
                    </ul>
                </div>
            </div>
            <h2 class="category-name"><?php echo $current_term->name; ?></h2>
        </div>
    </div>
    <div class="projects-warp">
        <div class="container">
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
        <div class="project-footer">
            <div class="container">
                <hr>
                <a href="#top" class="gotop"></a>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
<script>
    projectNav()
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


var orgElementTop = $('.project-detail').offset().top + 600;

$(window).scroll(function() {
    if ($(document).scrollTop() > orgElementTop) {
        $('.menu a').css({
            'filter': 'blur(0px)',
            '-webkit-filter': 'blur(0px)',
            '-moz-filter': 'blur(0px)',
            '-o-filter': 'blur(0px)',
            '-ms-filter': 'blur(0px)'
        });
    }
    else {
        $('.menu a').css({
            'filter': 'invert(100%) sepia(100%) saturate(0) hue-rotate(0) brightness(99%) contrast(100%)'
        });
    }
});



const hasVerticalIntersection = (elementA, elementB) => {
    const {top:topA, bottom:bottomA, left:leftA, right: rightA}  = elementA.getBoundingClientRect();
  const {top:topB, bottom:bottomB, left:leftB, right: rightB}  = elementB.getBoundingClientRect();
  return ((topA >= topB && topA <= bottomB) || (bottomA >= topB && bottomA <= bottomB) );
}

const hamburger = document.querySelector('#menu a');
const invertedBlock = document.querySelector('.section-intro');
window.addEventListener('scroll', event => {
    hamburger.classList.toggle('hamburger_inverted', hasVerticalIntersection(hamburger, invertedBlock))

})


</script>