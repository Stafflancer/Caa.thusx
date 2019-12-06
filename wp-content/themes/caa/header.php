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
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>">
    <title><?php wp_title(' '); ?><?php if(wp_title(' ', false)) { echo ' - '; } ?><?php echo _e(apply_filters(' ', bloginfo( 'name' ))); ?></title>
    <?php wp_head(); ?>
</head>

<style>
.update-list .item {
    border: none;
}
.update-list .author {
    -webkit-background-size: 14px;
    background-size: 14px;
}


.page-title.milka {
    margin-top: 10px;
}
.projects .page-head .category-filter .chosen-container .chosen-drop {
	right: -80px;
}
div#selectStatus_chosen .chosen-drop {
    right: -138px;
}
div#selectLocation_chosen .chosen-drop {
    right: -117px;
}
div#selectYear_chosen .chosen-drop {
    right: -114px;
}
.link_mate_mob {
	display: none;
}

@media only screen and (max-width : 320px) {
	.landing .section-intro h3, .landing .section-intro h3 p {
		font-size: 38px;
	}
	.header.active {
		padding-bottom: 0;
	}
	.addr_cont {
		margin-top: 20px;
	}
	.addr_email {
		margin-top: 3em;
	}
	.addr_email p {
		line-height: 1.3;
	}


}




.header.active {
    padding-top: 50px;
    padding-bottom: 55px;
    overflow: hidden;
}
.header form>ul {
    height: 80vh;
}


h2.howcat {
    text-align: center;
    margin-top: 26px;
    padding-bottom: 37px;
    font-size: 46px;
}
.projects .projects-warp {
    padding-top: 0;
}
.project-detail .project-small-slide .swiper-button {
    width: 49%;
}
.project-detail .project-big-slide .swiper-button {
    width: 48%;
}
.update-list .item:hover {
    background-color: #4F4F4F;
    color: #fff;
    transition: 0.5s;
}
.header.active {
    padding-top: 55px;
}
.article {
    padding-top: 37px;
}
h1.article-title {
    margin-bottom: 68px;
}
.article .meta {
    margin-bottom: 56px;
}
.prev a:hover, .next a:hover {
    transition: 0.3s;
}
.projects .project-footer {
    margin-top: 180px;
    margin-bottom: 72px;
}
li.active-result {
    font-size: 18px !important;
}
.chosen-container {
    width: auto !important;
}
.page-head .category-filter>ul li {
    padding-right: 17px;
}


@media only screen and (max-width : 480px) {
div#selectYear_chosen .chosen-drop {
    right: 0;
}
.landing .section-intro .intro-content {
    width: auto;
    max-width: none;
    margin: 30px;
    padding-left: 15px;
}
.menu.visible a {
    filter: invert(0%) sepia(100%) saturate(0) hue-rotate(0) brightness(99%) contrast(100%) !important;
}
.link_mate {
	display: none;
}
.link_mate_mob {
	display: block;
}

.landing .section-intro.green-bg {
    padding: 0;
}
.projects .page-head .category-filter .chosen-container .chosen-results li {
    line-height: 22px;
}
.projects .page-head .category-filter .chosen-container-single .chosen-single {
    font-size: 18px;
}
.update .page-head .category-filter {
	width: 100%;
}
.page-head .category-filter>ul {
	justify-content: space-between;
	width: 100%;
}


.people-modal.about-m a.close {
    margin-top: 13px !important;
}
.update .page-nav li.current-cat:after {
	bottom: 0;
}
    .addr_cont {
        margin-top: 20px;
    }
    .addr_cont p {
        font-size: 20px;
    }
    .addr_email {
        margin-top: 3em;
        margin-right: 40px;
    }
    .addr_email p {
        line-height: 1.3;
        font-size: 20px;
    }

.sidebar .menu a {
    background-size: 22px auto;
}
.header .title a {
    font-size: 26px !important;
}
.header.active {
    padding-top: 5px;
}

.header-mobile .title a {
    font-size: 26px !important;
}
.about .modal-header .page-title {
    font-size: 26px;
}
.update .page-head .page-title, .update .page-head .page-title a {
    font-size: 26px;
}
h2.howcat {
    font-size: 26px;
    text-transform: uppercase;
}
	.projects .page-head .category-filter .chosen-container .chosen-results {
		width: 123px !important;
	}
	ul.people-list.people_mob img {
		width: 100%;
	}
	.people_mob {
		display: flex;
		flex-direction: column;
	}
	.people_mob.people-intro.name {
    display: none !important;
}
.people_zvika {
    position: unset !important;
    padding: 30px 7px;
    padding-top: 0;
}
.people_mob li {
    width: 80%;
}
.page-title {
    margin-top: 14px;
}
	.chosen-drop {
		margin-top: 18px !important;
	}
	#selectLocation_chosen .chosen-results {
		width: 143px !important;
	}
	.projects .page-head .category-filter .chosen-container .chosen-results {
		padding: 0;
	}
	.category-filter li:last-child {
		padding-right: 0 !important;
	}
	.category-filter {
		float: right;
	}
	.category-filter {
		margin-top: 0 !important;
	}
	.project-detail .project-big-slide .swiper-pagination .swiper-pagination-bullet {
		width: 30px;
		height: 2px;

	}
	.swiper-button-prev.swiper-button, .swiper-button-next.swiper-button {
		display: none;
	}
	.project-detail .project-big-slide .tip {
		display: none;
	}
	.project-detail .project-big-slide .swiper-pagination {
		bottom: 25px;
	}
	.single-projects .sidebar .menu a {
		filter: invert(100%) sepia(100%) saturate(0) hue-rotate(0) brightness(99%) contrast(100%);
	}
	.single-projects #lightbox {
		display: none !important;
	}
	.single-projects #lightboxOverlay {
		display: none !important;
	}
    .header-mobile .title, .header-mobile .title a {
        height: 55px;
    }
    .modal-header.page-head {
        margin-top: 14px;
    }
    .modal-header .close {
        margin-top: 14px !important;
    }
    .people-detail .people-img {
        padding-top: 2em;
    }
    .page-template-page-people-php .close {
    	margin-top: 0 !important;
    }

    .arrow_backtoback {
    	background-image: url(<?php bloginfo('template_url'); ?>/images/previous-arrow-black.svg);
    	width: 120px;
    	height: 70px;
    	background-repeat: no-repeat;
    	background-position: center;
    	background-size: 35px auto;
    	margin: auto;
    	z-index: 11;
    }
    .search-box.open .search-input {
    	border-radius: unset;
    }

}



.people-intro.people_hide {
    display: none;
    position: relative;
}
.close_people {
    position: absolute;
    top: 0;
    right: 0;
}
.close_people {
    opacity: unset;
}
.search-box.open .search-input {
    border-radius: unset;
}
.page-nav-m li a {
    text-transform: uppercase;
}
.margincontact {
    margin-top: 70px;
}
a.nolink {
    color: #737373;
    cursor: auto;
}
a.nolink:hover {
    color: #737373;
}
a.nolink img {
    filter: opacity(0.5);
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

    <div class="sidebar">
        <div class="sidebar-inner">
            <div class="menu"><a href="javascript:;" id="menu"></a></div>
            <div class="sidebar-title"><a href="<?php bloginfo('url'); ?>">CAA ARCHITECTS</a></div>
        </div>
    </div>
    <!-- header -->
