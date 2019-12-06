<?php/*Template Name: Contact*/?>
<?php get_header(); ?>

<div class="content contact">
        <div class="about" id="contactModal">
            <div class="modal-content">
                <div class="container">
                    <div class="modal-header page-head">
                        <h4 class="page-title" id="myModalLabel">CONTACT</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 addr_cont">
                                <?php the_field('contact_left'); ?>
                            </div>
                            <div class="col-md-6 addr_email">
                                <?php the_field('contact_right'); ?>
                            </div>
                        </div>
                        <div class="margincontact">
                             <h4 class="page-title">VISIT</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="hidden-xs">
                                    <?php the_field('visit_text'); ?>
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
            </div>
    </div>
    </div>
    <?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
    <!-- Contact Modal -->
    

    <?php endwhile; ?>
    <?php endif; ?>

<?php get_footer(); ?>