// JavaScript Document
$(document).ready(function() {

	// Menu Start
	$(".header .navbar-toggler").click(function(){
		$("html").toggleClass("overflow-hidden");
	});
	// Menu End

	// Reference Slider Start
	$(".references-slider").slick({
		slidesToShow: 1,
  		slidesToScroll: 1,
		arrows: false,
		dots: true,
		autoplay: true,
		autoplaySpeed: 10000,
	});
	// Reference Slider End

	// Reviews Slider Start
	$(".reviews-slider").slick({
		slidesToShow: 3,
  		slidesToScroll: 1,
		arrows: false,
		dots: true,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
				}
			},
			{
				breakpoint: 576,
				settings: {
					slidesToShow: 1,
				}
			},
		]
	});
	// Reviews Slider End

	// OFI Browser
	objectFitImages();

	//////////////////////////////////////// Custom JS/jQuery START ///////////////////////////
	// Buy Now button redirection to according section in index.html (for pages other than index.html)
	// Save in session when clicked
	let disclaimerBuyNow = document.getElementById('buy-now-button');
	if(disclaimerBuyNow)
	{
		disclaimerBuyNow.addEventListener('click', function (e) {
			e.preventDefault();
			sessionStorage.setItem('scrollToBuyNowSection', 'buy-now');
			window.location.href = '/';
		});
	}

	// Check sessionStorage for target section
	let targetSection = sessionStorage.getItem('scrollToBuyNowSection');
	if (targetSection) {
		let offset = 64; // Adjust based on the navbar height
		$('html, body').animate({
			scrollTop: $('#' + targetSection).offset().top - offset
		}, 200);
		sessionStorage.removeItem('scrollToBuyNowSection'); // Clear the sessionStorage
	}

	// Nav Anchor Links Scrolling (index.html)
	$('nav .collapse a, .offers-section a, .banner-wrp a').on('click', function(e) {
		let targetId = $(this).attr('href');
		/*console.log(targetId);*/
		if(targetId.includes("#"))
		{
			e.preventDefault();
			let offset = 64; // Adjust this value based on the navbar height to not cover the section
			$('html, body').animate({
				scrollTop: $(targetId).offset().top -offset
			}, 200)
		}

	})
// Adjust page content when navbar expands
	/*document.addEventListener('DOMContentLoaded', () => {
		const navbarCollapse = document.querySelector('.navbar-collapse');
		const content = document.querySelector('.content'); // Adjust to your main content wrapper

		navbarCollapse.addEventListener('show.bs.collapse', () => {
			content.style.marginTop = `${navbarCollapse.scrollHeight}px`;
		});

		navbarCollapse.addEventListener('hidden.bs.collapse', () => {
			content.style.marginTop = '0';
		});
	});*/
	const navbarLogo = document.querySelector(".navbar-logo");
	const header = document.querySelector(".header");

	window.addEventListener("scroll", function () {
		if (window.scrollY > 50) { // Adjust the value as needed
			navbarLogo.classList.add("shrink");
		} else {
			navbarLogo.classList.remove("shrink");
		}
	});

	//////////////////////////////////////// Custom JS/jQuery END ///////////////////////////
});

document.addEventListener('DOMContentLoaded', () => {
	const accordionItems = document.querySelectorAll('.accordion-item');
  
	accordionItems.forEach(item => {
		const collapse = item.querySelector('.accordion-collapse');
	
		// Add an event listener for when the collapse state changes
		collapse.addEventListener('show.bs.collapse', () => {
			item.classList.add('active');
		});
	
		collapse.addEventListener('hide.bs.collapse', () => {
			item.classList.remove('active');
		});
	});
});
  
document.addEventListener('DOMContentLoaded', () => {
    const video = document.querySelector('.video');
    const playPauseIcon = document.querySelector('.play-icon');

    // Ensure both elements exist before adding event listeners
    if (video && playPauseIcon) {
        const playIconSrc = 'images/play-icon.svg';
        const pauseIconSrc = 'images/pause-icon.svg';

        playPauseIcon.addEventListener('click', (e) => {
            e.preventDefault();
            if (video.paused) {
                video.play();
                playPauseIcon.querySelector('img').src = pauseIconSrc;
            } else {
                video.pause();
                playPauseIcon.querySelector('img').src = playIconSrc;
            }
        });
    }
});
