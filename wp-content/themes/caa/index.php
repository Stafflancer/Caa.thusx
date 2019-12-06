<?php get_header('home');?>
<div class="content landing" id="top">

    <div class="kendev_clear"></div>

    <section class="kendevFixed">
        <div>
            <div class="section-intro section-img section-one section-scroll full-height">
                <div class="logo-line"></div>
                <img src="<?php the_field('first_section_background', 195); ?>" alt="" class="section-img-bg">
                <!-- <img src="<?php bloginfo('template_url'); ?>/images/index01-m.png" alt="" class="section-img-bg bg-m"> -->
                <div class="fullscreen-bg">
                    <video preload="auto" loop muted playsinline autoplay poster="#" class="fullscreen-bg__video">
                        <source src="#" type="video/webm">
                            <source src="<?php bloginfo('template_url'); ?>/images/bg.mp4" type="video/mp4">
                                </video>
                </div>
            </div>
        </div>
    </section>

    

    <section class="kendev">
        <div>
            <div class="section-intro section-two section-scroll section-img full-height bgb">
                <div class="section-content">
                    <div class="container">
                        <div class="intro-content">
                            <h3><?php the_field('second_section_title', 195); ?></h3>
                            <?php the_field('second_section_content', 195); ?>              
                        </div>
                    </div>
                </div>
                <img src="<?php bloginfo('template_url'); ?>/images/black-bg.svg" alt="" class="section-img-bg">
            </div>
        </div>
    </section>

    <div class="kendev_clear pageFour"></div>

    <section class="kendev pagedora">
        <div>
            <div class="section-img section-scroll full-height">
                <img src="<?php the_field('third_section_background', 195); ?>" alt="" class="section-img-bg">
            </div>
        </div>
    </section>

    <section class="kendev pageFive">
    	<div>
    		<div class="section-intro full-height gray-bg">
    			<div class="section-content">
    				<div class="container">
    					<div class="intro-content">
    						<h3><?php the_field('sixth_section_title', 195); ?></h3>
    						<?php the_field('sixth_section_content', 195); ?>               
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <div class="kendev_clear"></div>

    <div class="pageSlider pageSix">
    	<section class="kendev blackblock">
    		<div class="container">
    			<div class="black_image">
    				<img src="<?php bloginfo('template_url'); ?>/images/salivan.jpg" alt="">
                    <p>Caption: CAA completes "Continuum" space for contemporary.</p>
    			</div>
    		</div>
    	</section>
    </div>

    <section class="kendev bg-grey">
        <div>
            <div class="section-intro section-scroll full-height gray-bg">
                <div class="section-content">
                    <div class="container">
                        <div class="intro-content">
                            <h3><?php the_field('fourth_section_title', 195); ?></h3>
                            <?php the_field('fourth_section_content', 195); ?>              
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="kendev_clear"></div>

    <div class="kendev slider_page_this">
        <div class="bgc_slider">
            <div class="bgc_position"></div>
            <div class="slide_maind">
                <?php query_posts('showposts=4&post_type=projects');?>
                <?php while (have_posts()): the_post();?>
                    <section class="cd-ss landing-project-item" id="project-<?php the_ID(); ?>">
                        <div>
                            <div class="fullpage-items">
                                <div class="section-img full-height">
                                    <div class="section-content">
                                        <div class="container">
                                            <h3 class="project-title"><a href="<?php the_permalink();?>">
                                                <?php the_title();?>
                                            </a></h3>
                                        </div>
                                    </div>
                                    <?php the_post_thumbnail('', array('class' => 'section-img-bg', 'alt' => get_the_title(), 'title' => get_the_title()));?>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php endwhile;?>
                <?php wp_reset_query();?>
            </div>

        </div>
    </div>

    <div class="section-update pageUpdate">
        <div class="section-content">
            <div class="container">
                <h3 class="section-title">Update</h3>
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

    <section class="kendev">
        <div>
            <div class="section-intro full-height green-bg">
                <div class="section-content">
                    <div class="container">
                        <div class="intro-content">
                            <h3><?php the_field('eighth_section_title', 195); ?></h3>
                            <?php the_field('eighth_section_content', 195); ?>        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="kendev_clear"></div>

    <section class="kendev pagePeople">
        <div>
            <div class="section-people full-height">
                <div class="section-content">
                    <div class="container">
                        <h3 class="section-title"><a href="/people">PEOPLE</a></h3>
                        <div class="people-slide">
                            <div class="swiper-container" id="peopleSlide">
                                <div class="swiper-button-prev swiper-button"></div>
                                <div class="swiper-button-next swiper-button"></div>
                                <div class="swiper-wrapper">
                                    <?php query_posts('post_type=people');?>
                                    <?php while (have_posts()): the_post();?>
                                    <div class="swiper-slide">
                                        <a href="javascript:;" data-toggle="modal" data-target="#peopleDetailModal<?php the_ID();?>">
                                            <div class="pic"><?php the_post_thumbnail('', array('alt' => get_the_title(), 'title' => get_the_title()));?></div>
                                            <div class="name"><?php the_title();?></div>
                                            <div class="position"><?php echo pods_field_display('people', $post->ID, 'position'); ?></div>
                                        </a>
                                    </div>
                                    <?php endwhile;?>
                                    <?php wp_reset_query();?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <section class="kendev sect_join" style="height:338px;">
        <div>
            <div class="section-intro section-join green-bg">
                <div class="section-content">
                    <div class="container">
                        <h3 class="jouin-title"><a href="<?php bloginfo('url'); ?>/jobs">join us!</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="section-about bg-black section-img">
        <div class="section-content">
            <div class="container">
                <h4 class="page-title">CONTACT</h4>
                <div class="row">
                    <div class="col-md-6 addr_cont">
                        <?php the_field('contact_left', 7); ?>
                    </div>
                    <div class="col-md-6 addr_email">
                        <?php the_field('contact_right', 7); ?>
                    </div>
                </div>
                <h4 class="page-title visito">VISIT</h4>
                <div class="row">
                    <div class="col-md-4">
                        <div class="hidden-xs">
                            <?php the_field('visit_text', 7); ?>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div id="map_canvas">
                            <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://ditu.google.cn/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=%E9%85%92%E4%BB%99%E6%A1%A5%E8%B7%AF10%E5%8F%B7+%E6%81%92%E9%80%9A%E5%95%86%E5%8A%A1%E5%9B%ADB36%E5%8F%B7%E6%A5%BCC301&amp;aq=&amp;sll=39.902494,116.473274&amp;sspn=0.054716,0.111494&amp;brcurrent=3,0x35f1ac819c28d8fd:0xed5b9c10be73edc5,0,0x35f05137c865ad63:0xd348af83c67dc389%3B5,0,0&amp;ie=UTF8&amp;hq=%E9%85%92%E4%BB%99%E6%A1%A5%E8%B7%AF10%E5%8F%B7+%E6%81%92%E9%80%9A%E5%95%86%E5%8A%A1%E5%9B%ADB36%E5%8F%B7%E6%A5%BCC301&amp;t=m&amp;cid=3195084957041175797&amp;hnear=&amp;ll=39.984881,116.492243&amp;spn=0.026306,0.034246&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="<?php bloginfo('template_url'); ?>/images/black-bg.svg" alt="" class="section-img-bg">
    </div>


    <div class="kendev_clear"></div>

    <div class="lolipop">
        <div class="section-img footer_image">

        </div>
    </div>

    <div class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo hidden-xs">
                    <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/footer-logo.svg" alt=""></a>
                </div>
                <div class="footer-contact">
                    <div class="newsletter-form">
                        <h4>Subscribe to Our Newsletter <button>send</button></h4>
                        <input type="text" placeholder="Your e-mail address">
                    </div>
                    <div class="follow-box">
                        <h4>Follow us</h4>
                        <ul class="follow-list">
                            <li>
                                <a href="<?php the_field('instagram_link', 195); ?>">
                                    <img src="<?php bloginfo('template_url'); ?>/images/icon-instagram.svg">
                                </a>
                            </li>
                            <li>
                                <a href="<?php the_field('weibo_link', 195); ?>">
                                    <img src="<?php bloginfo('template_url'); ?>/images/icon-weibo.svg">
                                </a>
                            </li>
                            <li>
                                <a href="<?php the_field('wechat_link', 195); ?>">
                                    <img src="<?php bloginfo('template_url'); ?>/images/icon-wechat.svg">
                                </a>
                            </li>
                            <li>
                                <a href="<?php the_field('facebook_link', 195); ?>">
                                    <img src="<?php bloginfo('template_url'); ?>/images/icon-facebook.svg">
                                </a>
                            </li>
                            <li>
                                <a href="<?php the_field('twitter_link', 195); ?>">
                                    <img src="<?php bloginfo('template_url'); ?>/images/icon-twitter.svg">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="footer-intro">
                    <?php the_field('footer_right_text', 195); ?>
                </div>
                <div class="footer-logo m-logo">
                    <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/footer-logo.svg" alt=""></a>
                </div>
            </div>
            <a href="#top" class="gotop"></a>
        </div>
    </div>
</div>

<?php get_footer(); ?>