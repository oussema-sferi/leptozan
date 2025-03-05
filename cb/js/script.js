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
