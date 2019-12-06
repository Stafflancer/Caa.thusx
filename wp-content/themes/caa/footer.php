        <!-- PEOPLE Detail Modal -->
        <?php query_posts('post_type=people');?>
        <?php while (have_posts()): the_post();?>
        <div class="modal fade people-detail-modal" id="peopleDetailModal<?php the_ID(); ?>" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="container">
                        <div class="modal-header page-head">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><img src="<?php bloginfo('template_url'); ?>/images/icon-close.svg" alt=""></button>
                        </div>
                        <div class="modal-body">
                            <div class="people-detail">
                                <div class="people-img">
                                    <?php the_post_thumbnail('', array('alt' => get_the_title(), 'title' => get_the_title()));?>
                                </div>
                                <div class="people-intro">
                                    <div class="name">
                                        <?php the_title(); ?> <br>
                                        <?php echo pods_field_display('people', $post->ID, 'position'); ?>
                                    </div>
                                    <div class="intro">
                                        <p>
                                            Bio: <?php echo pods_field_display('people', $post->ID, 'bio'); ?>
                                        </p>
                                    </div>
                                    <div class="intro-contact">
                                        Contact:<?php echo pods_field_display('people', $post->ID, 'contact'); ?><br>
                                        Following on Social media:<?php echo pods_field_display('people', $post->ID, 'following_on_social_media'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile;?>
    <?php wp_reset_query();?>
    <!-- footer -->
    <script src="<?php bloginfo('template_url'); ?>/js/lib/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/lib/background-check.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/lib/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/lib/swiper.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/lib/jquery.sticky-kit.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/lib/chosen.jquery.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/lib/modernizr.js"></script>


    <script src="<?php bloginfo('template_url'); ?>/js/app.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/slick.min.js"></script>
  <?php wp_footer(); ?>

<script>
$('.arrow_backtoback').click(function() {
	$('.header').toggleClass('active');
	$('.sidebar').toggleClass('active');
});

$('.link_mate').click(function() {
	$('.people_hide').addClass().show();
});
$('.close_people').click(function() {
	$('.people_hide').hide();
});



if( $('.prev').is(':empty')) {
    $('.prev').html('<a class="nolink" title="Previous"><img src="http://golden.fashionweek.uz/wp-content/themes/caa/images/icon-prev.svg">Previous</a>');
}

if( $('.next').is(':empty')) {
    $('.next').html('<a class="nolink" title="Next">Next<img src="http://golden.fashionweek.uz/wp-content/themes/caa/images/icon-next.svg"></a>');
}
</script>

  <script>
    $('.slide_maind').slick({
        slidesToShow: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: true,
        dots: true,/*
        prevArrow:"<img class='a-left control-c prev slick-prev' src='<?php echo get_template_directory_uri();?>/images/slider-left-arrow_white.svg'>",
        nextArrow:"<img class='a-right control-c next slick-next' src='<?php echo get_template_directory_uri();?>/images/slider-right-arrow_white.svg'>",*/
        responsive: [
        {
            breakpoint: 769,
            settings: {
                arrows: false,
                slidesToShow: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                arrows: true,
                slidesToShow: 1
            }
        }
        ]
    });




    let target = $('.pageFour');
    let targetPos = target.offset().top;
    let winHeight = $(window).height();
    let scrollToElem = targetPos - winHeight;

    $(window).scroll(function(){
      let winScrollTop = $(this).scrollTop();
      if(winScrollTop >= scrollToElem){
        $('.pagedora').addClass('kendevFixed');
    }
    else {
      $('.pagedora').removeClass('kendevFixed');
  }

});



    let targetF = $('.pageFive');
    let targetPosF = targetF.offset().top;
    let winHeightF = $(window).height();
    let scrollToElemF = targetPosF - winHeightF;

    $(window).scroll(function(){
      let winScrollTopF = $(this).scrollTop();
      if(winScrollTopF >= scrollToElemF) {
        $('.pageSlider').addClass('kendevFixedTwo');
    }
    else {
      $('.pageSlider').removeClass('kendevFixedTwo');
  }

});



    let targetSix = $('.pageSix');
    let targetPosSix = targetSix.offset().top;
    let winHeightSix = $(window).height();
    let scrollToElemSix = targetPosSix - winHeightSix;

    $(window).scroll(function(){
      let winScrollTopSix = $(this).scrollTop();
      if(winScrollTopSix >= scrollToElemSix) {
        $('.slider_page_this').addClass('kendevFixedFour');
    }
    else {
      $('.slider_page_this').removeClass('kendevFixedFour');
  }

});


    let targetUpdate = $('.pageUpdate');
    let targetPosUpdate = targetUpdate.offset().top - 1600;
    let winHeightUpdate = $(window).height();
    let scrollToElemUpdate = targetPosUpdate - winHeightUpdate;

    $(window).scroll(function(){
      let winScrollTopUpdate = $(this).scrollTop();
      if(winScrollTopUpdate > scrollToElemUpdate) {
        $('.pagePeople').addClass('kendevFixedThree');
    }
    else {
        $('.pagePeople').removeClass('kendevFixedThree');
  }

});

    let targetImg = $('.sect_join');
    let targetPosImg = targetImg.offset().top - 3000;
    let winHeightImg = $(window).height();
    let scrollToElemImg = targetPosImg - winHeightImg;

    $(window).scroll(function(){
      let winScrollTopImg = $(this).scrollTop();
      if(winScrollTopImg > scrollToElemImg) {
        $('.lolipop').addClass('kendevFixedFive');
    }
    else {
        $('.lolipop').removeClass('kendevFixedFive');
  }

});




</script>

<script>
$(document).ready(function() {   
    $(window).scroll(function () {
        if ($(this).scrollTop() > 0) {
            $('.gotop').fadeIn();
        } else {
            $('.gotop').fadeOut();
        }
    });
    $('.gotop').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 900);
        return false;
    });
});


const hasVerticalIntersection = (elementA, elementB) => {
	const {top:topA, bottom:bottomA, left:leftA, right: rightA}  = elementA.getBoundingClientRect();
  const {top:topB, bottom:bottomB, left:leftB, right: rightB}  = elementB.getBoundingClientRect();
  return ((topA >= topB && topA <= bottomB) || (bottomA >= topB && bottomA <= bottomB) );
}

const hamburger = document.querySelector('.sidebar-title a');
const invertedBlock = document.querySelector('.lolipop');
window.addEventListener('scroll', event => {
	hamburger.classList.toggle('hamburger_inverted', hasVerticalIntersection(hamburger, invertedBlock))

});


var block_show = null;
 
function scrollTracking(){
    var wt = $(window).scrollTop();
    var wh = $(window).height();
    var et = $('.c_black_burger').offset().top;
    var eh = $('.c_black_burger').outerHeight();
 
    if (wt + wh >= et && wt + wh - eh * 2 <= et + (wh - eh)){
        if (block_show == null || block_show == false) {
            $('.menu').addClass('visible');
        }
        block_show = true;
    } else {
        if (block_show == null || block_show == true) {
            $('.menu').removeClass('visible');
        }
        block_show = false;
    }
}
 
$(window).scroll(function(){
    scrollTracking();
});
    
$(document).ready(function(){ 
    scrollTracking();
});


</script>




</body>

</html>