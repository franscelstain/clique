/**
 * WEBSITE: https://themefisher.com
 * TWITTER: https://twitter.com/themefisher
 * FACEBOOK: https://www.facebook.com/themefisher
 * GITHUB: https://github.com/themefisher/
 */

(function ($) {
	'use strict';

	/* ========================================================================= */
	/*	Page Preloader
	/* ========================================================================= */

	$(window).on('load', function () {
		// preloader
		// $('.preloader').fadeOut(700);

		// Portfolio Filtering
		var containerEl = document.querySelector('.filtr-container');
		var filterizd;
		if (containerEl) {
			filterizd = $('.filtr-container').filterizr({});
		}
		//Active changer
		$('.portfolio-filter button').on('click', function () {
			$('.portfolio-filter button').removeClass('active');
			$(this).addClass('active');
		});
		stickyHeader();
		navActive();
	});

	/* ========================================================================= */
	/*	Post image slider
	/* ========================================================================= */
	$('#post-thumb, #gallery-post').slick({
		infinite: true,
		arrows: false,
		autoplay: true,
		autoplaySpeed: 4000

	});
	$('#features').slick({
		infinite: true,
		arrows: false,
		autoplay: true,
		autoplaySpeed: 4000
	});


	/* ========================================================================= */
	/*	Magnific popup
	/* =========================================================================  */
	$('.image-popup').magnificPopup({
		type: 'image',
		removalDelay: 160, //delay removal by X to allow out-animation
		callbacks: {
			beforeOpen: function () {
				// just a hack that adds mfp-anim class to markup
				this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
				this.st.mainClass = this.st.el.attr('data-effect');
			}
		},
		closeOnContentClick: true,
		midClick: true,
		fixedContentPos: false,
		fixedBgPos: true
	});


	// counterUp
	function counter() {
		var oTop;
		if ($('.jsCounter').length !== 0) {
			oTop = $('.jsCounter').offset().top - window.innerHeight;
		}
		if ($(window).scrollTop() > oTop) {
			$('.jsCounter').each(function () {
				var $this = $(this),
					countTo = $this.attr('data-count');
				$({
					countNum: $this.text()
				}).animate({
					countNum: countTo
				}, {
					duration: 500,
					easing: 'swing',
					step: function () {
						$this.text(Math.floor(this.countNum));
					},
					complete: function () {
						$this.text(this.countNum);
					}
				});
			});
		}
	}

	function stickyHeader() {
		if (window.pageYOffset > document.getElementById('main-wrapper').offsetTop) {
			document.getElementById('header-landing').classList.add('sticky');
			document.getElementById('nav-logo').classList.add('sticky');
		} else {
			document.getElementById('header-landing').classList.remove('sticky');
			document.getElementById('nav-logo').classList.remove('sticky');
		}
	}

	function navActive() {
		var scrollPosition = window.scrollY;
		var section2 = document.getElementById('about').offsetTop;
		var section3 = document.getElementById('services').offsetTop;
		var section4 = document.getElementById('portfolio').offsetTop;
		var section5 = document.getElementById('our-team').offsetTop;
		var section6 = document.getElementById('pricing').offsetTop;
		var section7 = document.getElementById('blog').offsetTop;
		var section8 = document.getElementById('contact-us').offsetTop;

		var navLinks = document.querySelectorAll('#header-landing ul li a');

		navLinks.forEach(function(link) {
			link.classList.remove('active');
		});

		if (scrollPosition < section2) {
			navLinks[0].classList.add('active');
		} else if (scrollPosition >= section2 && scrollPosition < section3) {
			navLinks[1].classList.add('active');
		} else if (scrollPosition >= section3 && scrollPosition < section4) {
			navLinks[2].classList.add('active');
		} else if (scrollPosition >= section4 && scrollPosition < section5) {
			navLinks[3].classList.add('active');
		} else if (scrollPosition >= section5 && scrollPosition < section6) {
			navLinks[4].classList.add('active');
		} else if (scrollPosition >= section6 && scrollPosition < section7) {
			navLinks[5].classList.add('active');
		} else if (scrollPosition >= section7 && scrollPosition < section8) {
			navLinks[6].classList.add('active');
		} else {
			navLinks[7].classList.add('active');
		}
	}

	$(window).on('scroll', function () {
		counter();
		stickyHeader();
		navActive();
	});



	//   magnific popup video
	$('.popup-video').magnificPopup({
		disableOn: 700,
		type: 'iframe',
		mainClass: 'mfp-zoom-in',
		removalDelay: 160,
		preloader: false,
		fixedContentPos: true
	});

	/* ========================================================================= */
	/*	Testimonial Carousel
	/* =========================================================================  */
	//Init the carousel
	$('#testimonials').slick({
		infinite: true,
		arrows: false,
		autoplay: true,
		autoplaySpeed: 4000
	});


	/* ========================================================================= */
	/*	Smooth Scroll
	/* ========================================================================= */
	$('a.nav-link, .smooth-scroll').click(function (e) {
		if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
			if (target.length) {
				e.preventDefault();
				$('html, body').animate({
					scrollTop: target.offset().top
				}, 1000, function () {
					var $target = $(target);
					$target.focus();
					if ($target.is(':focus')) {
						return false;
					} else {
						$target.attr('tabindex', '-1');
						$target.focus();
					}
				});
			}
		}
	});


})(jQuery);
// End Jquery Function


/* ========================================================================= */
/*	Animated section
/* ========================================================================= */

var wow = new WOW({
	offset: 100, // distance to the element when triggering the animation (default is 0)
	mobile: false // trigger animations on mobile devices (default is true)
});
wow.init();