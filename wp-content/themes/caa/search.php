<?php get_header(); ?>

    <div class="content search-page">
        <div class="container">
            <div class="search-head">
                <form action="">
                    <i class="icon-search"></i>
                    <input type="text" name="s" id="s" value="<?php the_search_query(); ?>" placeholder="KEYWORDS">
                </form>
            </div>
            <div class="search-result">
            <?php if(have_posts()) : ?>
                <?php
                    $last_type = "";
                    $typecount = 0;
                    while ( have_posts() ) : the_post();
                ?>
                    <?php
                        if ($last_type != $post->post_type){
                            $typecount = $typecount + 1;
                            if ($typecount > 1){
                                echo '</div>'; //close type container
                            }

                            // save the post type.
                            $last_type = $post->post_type;

                            //open type container
                            switch ($post->post_type) {
                                case 'projects':
                                    echo "<div class=\"projects-container result-cell\"><h3>";
                                    _e('PROJECT', '');
                                    echo "</h3>";
                                break;

                                case 'post':
                                    echo "<div class=\"posts-container result-cell\"><h3>";
                                    _e('UPDATE', '');
                                    echo "</h3>";
                                break;

                                case 'people':
                                    echo "<div class=\"posts-container result-cell\"><h3>";
                                    _e('PEOPLE', '');
                                    echo "</h3>";
                                break;
                            }
                        }
                    ?>
                    <?php if('post' == get_post_type()) : ?>

                        <?php get_template_part('template-parts/search-update-content', 'loop'); ?>

                    <?php elseif('projects' == get_post_type()) : ?>

                        <?php get_template_part('template-parts/search-project-content', 'loop'); ?>

                    <?php elseif('people' == get_post_type()) : ?>

                        <?php get_template_part('template-parts/search-people-content', 'loop'); ?>

                    <?php endif; ?>

                <?php endwhile;  ?>
            <?php else: //If no posts are present ?>
                <div class="entry nothing-found">
                    <h3><?php _e('Sorry, there is no 100% ', 'caa') . " " . the_search_query() . " " . _e(' yet.') ?></h3>
                    <p><?php _e('But there are loads of other 100% destinations available. Try again in the searchfield below.', 'caa'); ?>
                </div>
            <?php endif; ?>
            </div>
        </div>
    </div>

    <?php get_footer(); ?>