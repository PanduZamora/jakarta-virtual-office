// Testimonial Slider
// $(document).ready(function () {
//   $("#testimonial-slider").owlCarousel({
//     items: 1,
//     itemsDesktop: [1000, 1],
//     itemsDesktopSmall: [979, 1],
//     itemsTablet: [768, 1],
//     pagination: true,
//     navigation: true,
//     navigationText: ["", ""],
//     slideSpeed: 1000,
//     autoPlay: true,
//   });
// });

// Card Service Slider
// $(document).ready(function () {
//   $(".card-service-slider").owlCarousel({
//     center: true,
//     autoWidth: false,
//     responsiveClass: true,
//     items: 1,
//     loop: true,
//     margin: 10,
//     autoplay: true,
//     autoplayTimeout: 3000,
//     autoplayHoverPause: true,
//     navText: [
//       '<i class="fa-solid fa-circle-arrow-left"></i>',
//       '<i class="fa-solid fa-circle-arrow-right"></i>',
//     ],
//     responsive: {
//       600: {
//         items: 1,
//       },
//     },
//   });
// });

// Swiper Caruosel
new Swiper(".swiper-container", {
  // Optional parameters
  loop: true,
  pagination: ".swiper-pagination",
  paginationClickable: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  autoplay: true,
  observer: true,
  observeParents: true,
  centeredSlides: true,
  slidesPerView: "auto",
  initialSlide: 3,
  slideToClickedSlide: true,
});

$('.center-tour').slick({
  centerMode: true,
  autoplay: true,
  centerPadding: '60px',
  prevArrow: '<button class="slide-arrow prev-arrow"></button>',
  nextArrow: '<button class="slide-arrow next-arrow"></button>',
  dots: false,
  arrows: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [{
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: true,
        dots: false,
        centerMode: false,
        centerPadding: '40px',
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});

// slider location
$('.js-slick-carousel').slick({
  arrows: true,
  autoplay: true,
  dots: false,
  autoplaySpeed: 4000,
  infinite: true,
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
        nextArrow: '<button class="slide-arrow next-arrow"></button>',
      },
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2.1,
        slidesToScroll: 2,
        prevArrow: '<button class="slide-arrow prev-arrow"></button>',
        nextArrow: '<button class="slide-arrow next-arrow"></button>',
      },
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        dots: false,
        arrows: true,
        prevArrow: '<button class="slide-arrow prev-arrow"></button>',
        nextArrow: '<button class="slide-arrow next-arrow"></button>',
      },
    },
    {
      breakpoint: 420,
      settings: {
        infinite: false,
        slidesToShow: 1.3,
        slidesToScroll: 1,
        autoplay: false,
        dots: false,
        arrows: false,
        prevArrow: '<button class="slide-arrow prev-arrow"></button>',
        nextArrow: '<button class="slide-arrow next-arrow"></button>',
      },
    },
  ],
});



$('.testimonial-slick').slick({
  infinite: true,
  slidesToShow: 1,
  dots: true,
  slidesToScroll: 1
});