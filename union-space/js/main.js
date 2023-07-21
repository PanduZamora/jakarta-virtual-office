(function($) {
    /** change value here to adjust parallax level */
    var parallax = -0.5;

    var $bg_images = $(".parallax");
    var offset_tops = [];
    $bg_images.each(function(i, el) {
        offset_tops.push($(el).offset().top);
    });

    $(window).scroll(function() {
        var dy = $(this).scrollTop();
        $bg_images.each(function(i, el) {
            var ot = offset_tops[i];
            $(el).css("background-position", "50% " + (dy - ot) * parallax + "px");
            $(el).css("background-size", "cover");
        });
    });
})(jQuery);

$(document).ready(function() {
    
    $('.englishButton').click(function(event){
        event.preventDefault();
        const URL = window.location.href;
        let result = URL.replace('izin.co.id/', 'izin.co.id/en/');
        window.location = result;
    })

    $('.indonesianButton').click(function(event){
        event.preventDefault();
        const URL = window.location.href;
        let result = URL.replace('izin.co.id/en/', 'izin.co.id/');
        window.location = result;
    })
    
    $("#notifications-close").click(function() {
        $("#notifications").slideUp();
    });
    setTimeout(function() {
        if ($(window).width() > 900) {
            $("#notifications").slideDown();
        }
    }, 10000);
});

//change float WhatsApp Button Depends on url
$(document).ready(function() {

    if (window.location.href.indexOf("?sem") > -1) {
        $('#floatButton').attr("href", "http://bit.ly/sem-izin");
    } else if (window.location.href.indexOf("?fbig") > -1) {
        $('#floatButton').attr("href", "https://bit.ly/fbigads-izin");
    } 

});

//auto Select from when click minta proposal
function changeSelect(e) {
    document.getElementById('selectService').value = e;
}


//Lazy Loading Image
document.addEventListener("DOMContentLoaded", function() {
    var lazyImages = [].slice.call(document.querySelectorAll("img.lazy"));
    var active = false;

    const lazyLoad = function() {
        if (active === false) {
            active = true;

            setTimeout(function() {
                lazyImages.forEach(function(lazyImage) {
                    if ((lazyImage.getBoundingClientRect().top <= window.innerHeight && lazyImage.getBoundingClientRect().bottom >= 0) && getComputedStyle(lazyImage).display !== "none") {
                        lazyImage.src = lazyImage.dataset.src;
                        lazyImage.srcset = lazyImage.dataset.srcset;
                        lazyImage.classList.remove("lazy");

                        lazyImages = lazyImages.filter(function(image) {
                            return image !== lazyImage;
                        });

                        if (lazyImages.length === 0) {
                            document.removeEventListener("scroll", lazyLoad);
                            window.removeEventListener("resize", lazyLoad);
                            window.removeEventListener("orientationchange", lazyLoad);
                        }
                    }
                });

                active = false;
            }, 200);
        }
    };

    document.addEventListener("scroll", lazyLoad);
    window.addEventListener("resize", lazyLoad);
    window.addEventListener("orientationchange", lazyLoad);
});


(function($) {
    "use strict";


    //Show and hide list of services
    function showList(e) { $(e.getAttribute('data-target')).slideDown('slow'); }

    function hideList(e) { $(e.getAttribute('data-target')).slideUp(); }

    function transform(e) { $(e).toggleClass('changed'); }

    //Open service menu

    $("#menu").click(function(event) {
        event.preventDefault();
        $("#serviceMenu").slideToggle();
        $("body").toggleClass('service-menu-open');
        $("#menu").toggleClass('menu-active');
        if ($("#header").offset().top < 43) {
            $("#header").css('marginTop', '-42px');
            $("#header").css('zIndex', '999');
        }
        if ($("#closeMenu").hasClass('hidden')) {
            setTimeout(function() {
                $("#closeMenu").toggleClass('hidden');
            }, 500)
        } else {
            $("#closeMenu").toggleClass('hidden');
        }
    });


    //Close Service Menu
    $("#closeMenu").click(function(event) {
        $("#serviceMenu").slideToggle();
        $("body").toggleClass('service-menu-open');
        $("#menu").toggleClass('menu-active');
        $("#closeMenu").toggleClass('hidden');
    });

    // Initiate the wowjs animation library
    new WOW().init();

    //intro Carousel
    $(".intro-carousel").owlCarousel({
        animateOut: 'fadeOut',
        animateIn: 'fadeInRight',
        autoplay: true,
        loop: true,
        smartSpeed: 450,
        autoplayTimeout: 8000,
        // dots: true,
        // nav: true,
        // navText: ["<i class='fas fa-angle-left fa-5x left-nav hidden-xs'>", "<i class='fas fa-angle-right fa-5x right-nav hidden-xs'>"],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

    // Top Menu carousel (uses the Owl Carousel library)
    $(".top-menu-carousel").owlCarousel({
        autoplay: false,
        dots: false,
        margin: 20,
        responsive: {
            0: {
                loop: false,
                items: 2,
                stagePadding: 30
            },
            768: {
                loop: false,
                items: 3,
                stagePadding: 50
            },
            900: {
                loop: false,
                nav: true,
                navText: ["<i class='fas fa-angle-left left-nav hidden-xs'>", "<i class='fas fa-angle-right right-nav'>"],
                items: 5,
                stagePadding: 30,
            }
        }
    });

    // Top Menu carousel (uses the Owl Carousel library)
    $(".tools-carousel").owlCarousel({
        autoplay: false,
        dots: false,
        margin: 20,
        loop: false,
        responsive: {
            0: {
                items: 1,
                stagePadding: 80
            },
            768: {
                items: 3,
                stagePadding: 50
            },
            900: {
                items: 4,
                stagePadding: 30,
            }
        }
    });

    // Testimonials carousel (uses the Owl Carousel library)
    $(".testimonials-carousel").owlCarousel({
        autoplay: true,
        dots: false,
        loop: true,
        responsive: { 0: { items: 1 }, 768: { items: 2 }, 900: { items: 3 } }
    });

    // Clients carousel (uses the Owl Carousel library)
    $(".clients-carousel").owlCarousel({
        autoplay: true,
        dots: false,
        loop: true,
        responsive: {
            0: { items: 2 },
            768: { items: 4 },
            900: { items: 6 }
        }
    });

    $(document).on('click', '.main-nav .drop-down > a', function(e) {
        e.preventDefault();
        $(this).next().slideToggle(200);
        $(this).parent().toggleClass('active');
    });

    // Gallery carousel (uses the Owl Carousel library)
    $(".gallery-carousel").owlCarousel({
        autoplay: true,
        dots: false,
        loop: true,
        responsive: {
            0: {
                margin: 20,
                stagePadding: 0,
                items: 2
            },
            768: {
                margin: 40,
                stagePadding: 100,
                items: 1
            },
            900: {
                margin: 40,
                stagePadding: 100,
                items: 2
            }
        }
    });

    // Service carousel (uses the Owl Carousel library)
    $(".service-carousel").owlCarousel({
        autoplay: false,
        loop: false,
        navText: ["<i class='fas fa-angle-left left-nav hidden-xs'>", "<i class='fas fa-angle-right right-nav'>"],
        responsive: {
            0: {
                margin: 20,
                nav: false,
                stagePadding: 50,
                items: 1
            },
            768: {
                margin: 20,
                nav: false,
                stagePadding: 50,
                items: 2
            },
            900: {
                margin: 30,
                nav: true,
                stagePadding: 80,
                items: 3
            }
        }
    });

    $(window).on('load', function() {
        $('#popup2').modal('show');
    });

})(jQuery);