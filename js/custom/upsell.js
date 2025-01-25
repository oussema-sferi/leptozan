$(document).ready(function() {

    console.log("i am in upsell");
    // Listen for click event on the play icon
    const specialDealSection = $(".special-deal-section")
    $('.play-icon').on('click', function (e) {
        e.preventDefault(); // Prevent default link behavior if it's an anchor tag

        // Log to the console after 3 seconds
        setTimeout(function () {
            console.log("Video play clicked. Logging this after 3 seconds!");
            specialDealSection.slideDown(1500)
        }, 5000);
    });

})