$(document).ready(function() {

    /*const noThanksButton = $("#no-thanks-button");
    const noThanksSection = $(".glucozan-no-thanks-section");
    const homePageSection = $(".glucozan-home-page-section");
    // no-thanks link action
    noThanksButton.click("on", function(event) {
        event.preventDefault();
        // Hide home page content and show no, thanks content
        homePageSection.hide();
        noThanksSection.show();
        $('html, body').animate({ scrollTop: 0 }, 10);
    })*/

    // Open lightbox when clicking the banner image
    $('.banner-popup-trigger').on('click', function(e) {
        e.preventDefault();
        $('#banner-lightbox').fadeIn(300);
        $('body').css('overflow', 'hidden'); // Prevent scrolling
    });

    // Close lightbox when clicking the close button
    $('.lightbox-close').on('click', function() {
        $('#banner-lightbox').fadeOut(300);
        $('body').css('overflow', 'auto'); // Re-enable scrolling
    });

    // Close lightbox when clicking outside the image
    $('#banner-lightbox').on('click', function(e) {
        if (e.target === this) {
            $(this).fadeOut(300);
            $('body').css('overflow', 'auto'); // Re-enable scrolling
        }
    });

    // Close on escape key
    $(document).on('keydown', function(e) {
        if (e.key === 'Escape' && $('#banner-lightbox').is(':visible')) {
            $('#banner-lightbox').fadeOut(300);
            $('body').css('overflow', 'auto'); // Re-enable scrolling
        }
    });

})