(function($) {
    "use strict";
    $(document).ready(function() {
        $('#main-menu').meanmenu( {
            meanScreenWidth: "767", meanMenuContainer: '.mobile-nav-menu',
        }
        );
        $(".why-choose-all").owlCarousel( {
            autoplay:true, pagination:false, nav:true, dots:true, margin:30, items:3, navText:["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"], responsive: {
                0: {
                    items: 1
                }
                , 600: {
                    items: 1
                }
                , 768: {
                    items: 2
                }
                , 992: {
                    items: 3
                }
            }
        }
        );
        $(".all-recently-added").owlCarousel( {
            autoplay:true, pagination:false, nav:true, dots:false, margin:20, items:4, navText:["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"], responsive: {
                0: {
                    items: 3
                }
                , 600: {
                    items: 4
                }
                , 768: {
                    items: 6
                }
                , 992: {
                    items: 4
                }
            }
        }
        );
        $(".all-course").owlCarousel( {
            autoplay:true, pagination:false, nav:true, dots:true, items:3, navText:["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"], responsive: {
                0: {
                    items: 1
                }
                , 600: {
                    items: 1
                }
                , 768: {
                    items: 2
                }
                , 992: {
                    items: 3
                }
            }
        }
        );
        $(".all-instructor").owlCarousel( {
            autoplay:true, pagination:false, nav:true, dots:true, margin:30, items:4, navText:["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"], responsive: {
                0: {
                    items: 1
                }
                , 600: {
                    items: 1
                }
                , 768: {
                    items: 3
                }
                , 992: {
                    items: 4
                }
            }
        }
        );
        $(".all-latest-news").owlCarousel( {
            autoplay:true, pagination:false, nav:true, dots:false, margin:30, items:3, navText:["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"], responsive: {
                0: {
                    items: 1
                }
                , 600: {
                    items: 1
                }
                , 768: {
                    items: 2
                }
                , 992: {
                    items: 3
                }
            }
        }
        );
        $(".all-testimonial").owlCarousel( {
            autoplay:true, pagination:false, nav:true, navText:["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"], dots:false, items:1, responsive: {
                0: {
                    items: 1
                }
                , 600: {
                    items: 1
                }
                , 768: {
                    items: 1
                }
                , 1000: {
                    items: 1
                }
            }
        }
        );
        $(".all-testimonial-v3").owlCarousel( {
            autoplay:true, pagination:false, nav:true, navText:["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"], dots:false, items:3, responsive: {
                0: {
                    items: 1
                }
                , 600: {
                    items: 2
                }
                , 768: {
                    items: 2
                }
                , 1000: {
                    items: 3
                }
            }
        }
        );
        $(".all-slide").owlCarousel( {
            items: 1, nav: true, dots: true, autoplay: false, loop: true, navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"], mouseDrag: false, touchDrag: false,
        }
        );
        $(".all-slide").on("translate.owl.carousel", function() {
            $(".slider-text h1").removeClass("animated fadeInUp").css("opacity", "0");
            $(".slider-text p").removeClass("animated fadeInDown").css("opacity", "0");
            $(".slider-text ul").removeClass("animated fadeInDown").css("opacity", "0");
        }
        );
        $(".all-slide").on("translated.owl.carousel", function() {
            $(".slider-text h1").addClass("animated fadeInUp").css("opacity", "1");
            $(".slider-text p").addClass("animated fadeInDown").css("opacity", "1");
            $(".slider-text ul").addClass("animated fadeInDown").css("opacity", "1");
        }
        );
        $.scrollUp( {
            scrollText: '<i class="fa fa-long-arrow-up"></i>', easingType: 'linear', scrollSpeed: 900, animation: 'fade'
        }
        );
        $('.counter').counterUp( {
            delay: 10, time: 1000
        }
        );
        $('.gallery-photo').magnificPopup( {
            type:'image', gallery: {
                enabled: true
            }
            ,
        }
        );
        jQuery('.gallery-container').imagesLoaded(function() {
            $(".gallery-container").isotope( {
                itemSelector: '.filtr-item', layoutMode: 'fitRows',
            }
            );
            $("ul.simplefilter li").on("click", function() {
                $("ul.simplefilter li").removeClass("active");
                $(this).addClass("active");
                var selector=$(this).attr('data-filter');
                $(".gallery-container").isotope( {
                    filter:selector, animationOptions: {
                        duration: 750, easing: 'linear', queue: false,
                    }
                }
                );
                return false;
            }
            );
        }
        );
        $(window).on("load", function() {
            $('#preloader').fadeOut();
            $('body').delay(200).css( {
                'overflow-x': 'hidden'
            }
            );
        }
        );
    }
    );
}

)(jQuery);