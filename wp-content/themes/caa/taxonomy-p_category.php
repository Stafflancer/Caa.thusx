<?php
$current_term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
get_header(); ?>

<div class="content update projects">
    <div class="page-top page-top-sticky">
        <div class="container">
            <div class="page-head">
                <div class="page-title"><a href="<?php bloginfo('url'); ?>/projects">PROJECTS</a></div>
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

                                        $actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

                                        // Check if any term exists
                                        if (!empty($terms) && is_array($terms)) {
                                            // Run a loop and print them all
                                            foreach ($terms as $term) {?>
                                            <option value="<?php echo esc_url(get_term_link($term)) ?>" <?php if ($actual_link == get_term_link($term)) { echo "selected"; } ?>>
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
        </div>
    </div>

    <h2 class="howcat"><?php echo $current_term->name; ?></h2>

    <div class="projects-warp">
        <div class="container">
            <ul class="project-list">
                <?php
                $args = array(
                    'post_type'=>'projects',
                    'tax_query'=>array(
                        array(
                            'taxonomy'=>'p_category', //自定义分类法
                            'terms'=>$current_term,  //分类ID
                        )
                    ),
                );
                query_posts($args);
                if(have_posts()) : while(have_posts()) : the_post(); ?>
                <li>
                    <a class="project-item" href="<?php the_permalink();?>">
                        <?php the_post_thumbnail('', array('alt' => get_the_title(), 'title' => get_the_title()));?>
                        <h4><?php the_title(); ?></h4>
                    </a>
                </li>
                <?php endwhile; wp_reset_query(); endif; ?>
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
</script>