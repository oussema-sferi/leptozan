$(document).ready(function() {

    // Check sessionStorage for target section
    /*let targetSection = sessionStorage.getItem('scrollToBuyNowSection');
    console.log(targetSection);
    if (targetSection) {
        let offset = 64; // Adjust based on the navbar height
        $('html, body').animate({
            scrollTop: $('#' + targetSection).offset().top - offset
        }, 200);
        sessionStorage.removeItem('scrollToBuyNowSection'); // Clear the sessionStorage
    }*/

    // Nav Anchor Links Scrolling (index.html)
    $('nav .collapse a, .offers-section a, .banner-wrp a').on('click', function(e) {
        let targetId = $(this).attr('href');
        /*console.log(targetId);*/
        if(targetId.includes("#"))
        {
            e.preventDefault();
            let offset = 0; // Adjust this value based on the navbar height to not cover the section
            $('html, body').animate({
                scrollTop: $(targetId).offset().top -offset
            }, 200)
        }

    })

    document.querySelector('.navbar-toggler').addEventListener('click', function() {
        this.classList.toggle('open'); // Toggles the class to change the icon
    });

})