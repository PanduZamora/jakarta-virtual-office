$(document).ready(function(){


 	$(window).load(function() {

 		// Preloader
		$('#status').fadeOut();
		$('#preloader').delay(350).fadeOut('slow');


		// Isotope Filter
		var $container = $('#portfolio-container');
		$container.imagesLoaded( function() {
			$container.isotope({
				isOriginLeft: true
			});
			$container.isotope();
		});

		// filter items on button click
		$('.portfolio-filter').on( 'click', 'a', function(e) {
			e.preventDefault();
			var filterValue = $(this).attr('data-filter');
			$container.isotope({ filter: filterValue });

			$('.portfolio-filter a').removeClass('active');
			$(this).closest('a').addClass('active');

		});


		// Flexslider / Masonry
		$('.flexslider').flexslider({
		    animation: "slide",
		    directionNav: false,
		    touch: true,
		    start: function(){
		    	var $container = $('.masonry');
                $container.imagesLoaded( function() {
                	$container.isotope({
                		itemSelector: '.masonry-item',
						layoutMode: 'masonry'
					});
				});
			}
		});

	});



});









