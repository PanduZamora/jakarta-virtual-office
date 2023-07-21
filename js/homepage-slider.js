// Testimonial Slider
$(document).ready(function () {
    $("#testimonial-slider").owlCarousel({
        items: 1,
        itemsDesktop: [1000, 1],
        itemsDesktopSmall: [979, 1],
        itemsTablet: [768, 1],
        pagination: true,
        navigation: true,
        navigationText: ["", ""],
        slideSpeed: 1000,
        autoPlay: true
    });
});

// Card Service Slider
$(document).ready(function () {
    $(".card-service-slider").owlCarousel({
        center: true,
        autoWidth: false,
        responsiveClass: true,
        items: 1,
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        navText: [
            '<i class="fa-solid fa-circle-arrow-left"></i>',
            '<i class="fa-solid fa-circle-arrow-right"></i>'
        ],
        responsive: {
            600: {
                items: 1
            }
        }
    });
});


// Owl Carousel Default
$('.owl-carousel').owlCarousel({
    items: 8,
    margin: 20,
    loop: true,
    nav: false,
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
$('#pause-button').click(function () {
    $('#youtube-video')[0].contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*');
});
$(window).on('load', function () {
    $('#popup2').modal('show');
});

// Swiper Caruosel
new Swiper('.swiper-container', {
    // Optional parameters
    loop: true,
    pagination: '.swiper-pagination',
    paginationClickable: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    autoplay: true,
    observer: true,
    observeParents: true,
    centeredSlides: true,
    slidesPerView: 'auto',
    initialSlide: 3,
    slideToClickedSlide: true,
});


