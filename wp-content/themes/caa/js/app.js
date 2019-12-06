// BackgroundCheck
// document.addEventListener("DOMContentLoaded", function() {
//     BackgroundCheck.init({
//         targets: ".sidebar"
//     });
// });

$(function() {
    $("#menu").click(function() {
        $(this).toggleClass("active");
        $(".header,.sidebar").toggleClass("active");
        // 判断 Contact 弹窗是否显示
        if ($("#contactModal").hasClass("in")) {
            if ($(".header").hasClass("active")) {
                $(".sidebar").removeClass("white");
            } else {
                $(".sidebar").addClass("white");
            }
        }
    });

    $(".social-media a").each(function() {
        var socialMediaHref = $(this).attr("data-href");
        if (
            typeof socialMediaHref !== typeof undefined &&
            socialMediaHref !== false
        ) {
            $(this).attr("href", socialMediaHref);
            $(this).attr("target", "_blank");
        }
    });

    var projesctBigSlide = new Swiper(".project-big-slide", {
        slidesPerView: 1,
        pagination: {
            el: ".project-big-slide .swiper-pagination"
        },
        navigation: {
            nextEl: ".project-big-slide .swiper-button-next",
            prevEl: ".project-big-slide .swiper-button-prev"
        }
    });

    var projesctSmallSlide = new Swiper(".project-small-slide", {
        slidesPerView: 1,
        pagination: {
            el: ".project-small-slide .swiper-pagination",
            type: "fraction"
        },
        navigation: {
            nextEl: ".project-small-slide .swiper-button-next",
            prevEl: ".project-small-slide .swiper-button-prev"
        }
    });

    $(".swiper-container").each(function() {
        if ($(this).find(".swiper-slide").length == 1)
            $(this).addClass("hidePagination");
    });

    var relatedSlide = new Swiper("#relatedSlide", {
        slidesPerView: 3,
        spaceBetween: 40,
        navigation: {
            nextEl: "#relatedSlide .swiper-button-next",
            prevEl: "#relatedSlide .swiper-button-prev"
        }
    });

    var peopleSlide = new Swiper("#peopleSlide", {
        slidesPerView: 3,
        spaceBetween: 40,
        navigation: {
            nextEl: "#peopleSlide .swiper-button-next",
            prevEl: "#peopleSlide .swiper-button-prev"
        },
        breakpoints: {
            768: {
                slidesPerView: "auto",
                spaceBetween: 20
            }
        }
    });

    $(".search").click(function() {
        $(this)
            .parent()
            .toggleClass("open");
    });

    $("#contactModal").on("show.bs.modal", function(e) {
        $(".sidebar").addClass("white");
        $(".header-mobile").addClass("black-bg");
    });

    $("#contactModal").on("hide.bs.modal", function(e) {
        $(".sidebar").removeClass("white");
        $(".header-mobile").removeClass("black-bg");
    });

    if (window.location.hash == "#jobs") {
        $("#jobsModal").modal("show");
    }

    if ($("body").hasClass("page-template-page-about")) {
        $(".people-detail-modal .close").click(function() {
            setTimeout(() => {
                $("body").addClass("modal-open");
            }, 500);
        });
    }

    if (
        /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
            navigator.userAgent
        )
    ) {
        $(".about .page-nav-m li.active").click(function() {
            $(".about .page-top-sticky").hide();
            $(".about-m").show();
            return false;
        });

        $("#about-taggle-menu").click(function() {
            $(".about .page-top-sticky").show();
            $(".about-m").hide();
            return false;
        });
    } else {
        $(".page-top-sticky").stick_in_parent();
        // $(document).scroll(function() {
        //     // var getDiv_md01 = $(".modal-body-content");
        //     var getDiv_md02 = $(".update-warp");
        //     // var offSet01 = getDiv_md01.offset().top - 69;
        //     var offSet02 = getDiv_md02.offset().top - 69;
        //     // if ($(window).scrollTop() > offSet01) {
        //     //     $('.about .page-top-sticky').addClass('active');
        //     // } else {
        //     //     $('.about .page-top-sticky').removeClass('active');
        //     // }
        //     if ($(window).scrollTop() > offSet02) {
        //         $(".update .page-title a").css({
        //             fontSize: 22
        //         });
        //     } else {
        //         $(".update .page-title a").css({
        //             fontSize: 65
        //         });
        //     }
        // });
    }



    $(".category-filter select")
        .chosen({ disable_search_threshold: 100 })
        .change(function(event) {
            if (event.target == this) {
                window.location.replace($(this).val());
            }
        });
});

    function updateNav() {
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
              fontSize: 22
            });
          } else {
            $(".update .page-title a").css({
              fontSize: 65
            });
        }
    });
    }
}



    function projectNav() {
      if (
        /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
          navigator.userAgent
        )
      ) {
      } else {
        $(document).scroll(function() {
          var getDiv_md02 = $(".projects-warp");
          var offSet02 = getDiv_md02.offset().top - 69;
          if ($(window).scrollTop() > offSet02) {
            $(".projects .page-title a").css({
              fontSize: 22
            });
          } else {
            $(".projects .page-title a").css({
              fontSize: 65
            });
          }
        });
      }
    }

    function aboutNav() {
      if (
        /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
          navigator.userAgent
        )
      ) {
      } else {
        $(document).scroll(function() {
          var getDiv_md01 = $(".modal-body-content");
          var offSet01 = getDiv_md01.offset().top - 69;
          if ($(window).scrollTop() > offSet01) {
            $(".about .page-top-sticky").addClass("active");
          } else {
            $(".about .page-top-sticky").removeClass("active");
          }
        });
      }
    }