<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style/lib/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style/lib/lightbox.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style/lib/chosen.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style/lib/parallax.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/slick.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>">
    <title><?php wp_title(' '); ?><?php if(wp_title(' ', false)) { echo ' - '; } ?><?php echo _e(apply_filters(' ', bloginfo( 'name' ))); ?></title>
    <?php wp_head(); ?>
</head>

<style>
a.hamburger_inverted {
    color: #000 !important;
}

.section-img.footer_image {
    height: 100vh;
    background-image: url(<?php the_field('last_section_background', 195); ?>);
    background-position: center 80%;
    background-size: cover;
}
.slick-prev, .slick-next {
    height: 100%;
    background-repeat: no-repeat;
    top: 90%;
}
.black_image p {
    width: 20%;
}

.section-people .people-slide .swiper-button-prev {
    cursor: url(<?php echo get_template_directory_uri();?>/images/icon-prev.svg), auto;
}
.section-people .people-slide .swiper-button-next {
    cursor: url(<?php echo get_template_directory_uri();?>/images/icon-next.svg), auto;
}


.slick-prev:hover {
    opacity: 1 !important;
    cursor: url(<?php echo get_template_directory_uri();?>/images/btn-prev-w.svg),auto;
}
.slick-next:hover {
    opacity: 1 !important;
    cursor: url(<?php echo get_template_directory_uri();?>/images/btn-next-w.svg),auto;
}


.slick-prev:hover {
    background-repeat: no-repeat;
}
.slick-next:hover {
    background-repeat: no-repeat;
    background-position: top right;
}
.slick-prev:before, .slick-next:before {
    display: none;
}
.slick-next {
    opacity: 0;
    right: 70px;
    background-image: url(<?php echo get_template_directory_uri();?>/images/btn-next-w.svg);
    z-index: 111;
    background-repeat: no-repeat;
    width: 40%;
    height: 100%;
    background-position: top right;
}
.slick-prev {
    opacity: 0;
    left: 70px;
    background-image: url(<?php echo get_template_directory_uri();?>/images/btn-prev-w.svg);
    z-index: 111;
    background-repeat: no-repeat;
    width: 40%;
    height: 100%;
    z-index: 111;
}
    .header.active {
     padding-top: 50px;
     padding-bottom: 55px;
     overflow: hidden;
 }
 .header form>ul {
     height: 80vh;
 }

 .black_image p {
    color: #fff;
    text-align: center;
    margin-top: 20px;
}


li.active-result {
    font-size: 18px !important;
}
.page-title.milka a {
    font-size: 25px;
}
.sidebar-title {
    bottom: 40px;
}

.slide_maind {
    overflow: hidden;
}
ul.slick-dots {
    z-index: 9999;
    bottom: 0;
    position: absolute;
    width: 100%;
    height: 50px;
    left: 0;
    right: 0;
    margin: auto;
}
.slick-dots li button:before {
    content: "";
    width: 50px;
    height: 4px;
    background-color: #d2dde9;
}
.slick-dots li {
    width: 50px;
    margin: 0;
}

.slick-dotted.slick-slider {
    margin-bottom: 0;
}

.kendev {
    position: relative;
    z-index: 40;
    height: 100vh;
}

.kendevFixed {
    position: fixed;
    left: 0;
    right: 0;
    height: 100vh;
    width: 100%;
    z-index: 0;
    top: 0;
}
.kendevFixedTwo {
    position: fixed;
    left: 0;
    right: 0;
    height: 100vh;
    width: 100%;
    z-index: 1;
    top: 0;
}
.kendevFixedThree {
    position: fixed;
    left: 0;
    right: 0;
    height: 100vh;
    width: 100%;
    z-index: 3;
    top: 0;
}
.kendevFixedFour {
    position: fixed;
    left: 0;
    right: 0;
    height: 100vh;
    width: 100%;
    z-index: 2;
    top: 0;
}
.kendevFixedFive {
    position: fixed;
    left: 0;
    right: 0;
    height: 100vh;
    width: 100%;
    z-index: 4;
    top: 0;
}

.section-update {
    z-index: 7 !important;
    position: relative;
}
.kendev_clear {
  height: 100vh;
  padding: 100px;
  z-index: 1;
}
.landing .section-img {
    position: relative;
    z-index: 6;
}
.footer {
    z-index: 6;
}
.visito {
    margin-top: 70px;
}

.update-list .item:hover {
    background-color: #4F4F4F;
    color: #fff;
    transition: 0.5s;
}
.pageSlider {
    background-color: #000;
}
.black_image {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    margin: auto;
    height: 100vh;
}
.black_image img {
    width: 20%;
    height: 60% !important;
}
.section-about {
    padding-bottom: 15px;
}
.fullscreen-bg {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    overflow: hidden;
    z-index: 0;
}

.fullscreen-bg__video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
.margincontact {
    margin-top: 70px;
}

@media only screen and (max-width : 320px) {
 .landing .section-intro h3, .landing .section-intro h3 p {
  font-size: 38px;
}
.header.active {
    padding-bottom: 0;
}

}

@media only screen and (max-width : 480px) {
    .landing .section-intro.green-bg {
        padding: 0;
    }
    body .landing .bg-black {
    	height: auto;
    	padding-bottom: 1em;
}

.landing .section-intro .intro-content {
    width: auto;
    max-width: none;
    margin: 30px;
    padding-left: 15px;
}
    section.kendev.sect_join .container {
        padding: 0;
    }
    .landing .section-join h3.jouin-title a {
        height: 70px;
        line-height: 65px;
    }
    .black_image img {
        width: 60%;
    }
    .black_image p {
        color: #fff;
        width: 65%;
        text-align: left;
        margin-top: 20px;
        margin-left: 20px;
    }
.slick-next {
    right: 20px;
}
.slick-prev {
    left: 20px;
    z-index: 111;
}



    .pageSlider.pageSix.kendevFixedTwo {
        position: relative !important;
    }
    .kendev.slider_page_this.kendevFixedFour {
        position: relative;
    }
    .addr_cont {
        margin-top: 20px;
    }
    .addr_cont p {
        font-size: 20px !important;
    }
    .addr_email {
        margin-top: 3em;
        margin-right: 40px;
    }
    .addr_email p {
        line-height: 1.3;
        font-size: 20px !important;
    }
    .sidebar .menu a {
        background-size: 22px auto;
    }
    .header-mobile .title a {
        font-size: 26px !important;
    }
    .header.active {
        padding-top: 5px;
    }
    .header .title a {
        font-size: 26px !important;
    }
    .about .modal-header .page-title {
        font-size: 26px;
    }
    .header.active {
        padding-top: 0;
    }
    .kendev_clear {
        display: none;
    }

    .kendevFixed {
        position: relative !important;
    }
    .kendevFixedTwo {
       position: relative !important;
   }
   .pageSlider.kendevFixedTwo {
       height: 60%;
   }

   .black_image {
       padding: 40px 0;
   }
   .kendevFixedThree {
       position: relative !important;
   }
   .landing .section-intro {
       height: 100vh;
   }
   .kendevFixedThree {
       height: auto !important;
   }
   .section-join {
    height: auto !important;
}
section.kendev.sect_join {
    height: auto !important;
}

.landing .people-slide .swiper-button-prev {
    background: url(<?php echo get_template_directory_uri();?>/images/slider-left-arrow_white.svg);
    width: 25px;
    height: 50px;
    background-repeat: no-repeat;
    left: 5px;
}
.landing .people-slide .swiper-button-next {
    background: url(<?php echo get_template_directory_uri();?>/images/slider-right-arrow_white.svg);
    width: 25px;
    height: 50px;
    background-repeat: no-repeat;
    right: 5px;
}



}
/* and 480 device */


/* Small Devices, Tablets */
@media only screen and (max-width : 768px) {
    .landing .section-img {
        height: 100vh;
    }
    .section-intro.full-height.gray-bg {
        height: 100vh;
    }
    .landing .section-people.full-height {
        height: 100vh;
    }
    section.kendev.sect_join {
        height: auto !important;
    }
}

</style>

<body <?php body_class(); ?>>
     <header class="header">
        <div class="title">
            <a href="<?php bloginfo('url'); ?>">CAA</a>
        </div>
        <nav>
             <form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <ul>
                    <li><a href="<?php bloginfo('url'); ?>/about" title=""><span>about</span></a></li>
                    <li><a href="<?php bloginfo('url'); ?>/projects" title=""><span>projects</span></a></li>
                    <li><a href="<?php bloginfo('url'); ?>/update" title=""><span>update</span></a></li>
                    <li><a href="<?php bloginfo('url'); ?>/contact" title=""><span>contact</span></a></li>
                    <li class="search-box">
                            <a href="javascript:;" title="" class="search"></a>
                            <input type="text" name="s" id="s" placeholder="<?php esc_attr_e( '', '' ); ?>" class="search-input"/>
                    </li>
                    <li><?php echo qtranxf_generateLanguageSelectCode(''); ?></li>
                </ul>
            </form>
        </nav>
    </header>

    <div class="header-mobile">
        <div class="container">
            <div class="title">
                <a href="<?php bloginfo('url'); ?>">CAA</a>
            </div>
        </div>
    </div>

    <div class="sidebar background--dark">
        <div class="sidebar-inner">
            <div class="menu"><a href="javascript:;" id="menu"></a></div>
            <div class="sidebar-title"><a href="<?php bloginfo('url'); ?>">CAA ARCHITECTS</a></div>
        </div>
    </div>
    <!-- header -->
