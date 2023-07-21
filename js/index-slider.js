new Swiper(".swiper-container", {
        loop: !0,
        pagination: ".swiper-pagination",
        paginationClickable: !0,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        },
        autoplay: !0,
        observer: !0,
        observeParents: !0,
        centeredSlides: !0,
        slidesPerView: "auto",
        initialSlide: 3,
        slideToClickedSlide: !0
    }),
    $(".center-tour").slick({
        centerMode: !0,
        autoplay: !0,
        centerPadding: "60px",
        prevArrow: '<button class="slide-arrow prev-arrow"></button>',
        nextArrow: '<button class="slide-arrow next-arrow"></button>',
        dots: !1,
        arrows: !0,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [{
            breakpoint: 768,
            settings: {
                arrows: !1,
                centerMode: !0,
                centerPadding: "40px",
                slidesToShow: 3
            }
        }, {
            breakpoint: 480,
            settings: {
                arrows: !0,
                dots: !1,
                centerMode: !1,
                centerPadding: "40px",
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
    }),
    $(".js-slick-carousel").slick({
        arrows: !0,
        autoplay: !0,
        dots: !1,
        autoplaySpeed: 4e3,
        infinite: !1,
        slidesToShow: 4,
        slidesToScroll: 1,
        margin: 10,
        prevArrow: '<button class="slide-arrow prev-arrow"></button>',
        nextArrow: '<button class="slide-arrow next-arrow"></button>',
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3.1,
                slidesToScroll: 3,
                prevArrow: '<button class="slide-arrow prev-arrow"></button>',
                nextArrow: '<button class="slide-arrow next-arrow"></button>'
            }
        }, {
            breakpoint: 992,
            settings: {
                slidesToShow: 2.1,
                slidesToScroll: 2,
                prevArrow: '<button class="slide-arrow prev-arrow"></button>',
                nextArrow: '<button class="slide-arrow next-arrow"></button>'
            }
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: !0,
                dots: !0,
                arrows: !0,
                prevArrow: '<button class="slide-arrow prev-arrow"></button>',
                nextArrow: '<button class="slide-arrow next-arrow"></button>'
            }
        }, {
            breakpoint: 420,
            settings: {
                infinite: !1,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: !1,
                dots: !0,
                arrows: !0,
                prevArrow: '<button class="slide-arrow prev-arrow"></button>',
                nextArrow: '<button class="slide-arrow next-arrow"></button>'
            }
        }, ]
    }),
    $(".testimonial-slick").slick({
        infinite: !0,
        slidesToShow: 1,
        dots: !0,
        slidesToScroll: 1
    });