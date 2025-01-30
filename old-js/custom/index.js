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
            let offset = 64; // Adjust this value based on the navbar height to not cover the section
            $('html, body').animate({
                scrollTop: $(targetId).offset().top -offset
            }, 200)
        }

    })

    // Shrink navbar logo on scroll down
    const navbarLogo = document.querySelector(".navbar-logo");
    window.addEventListener("scroll", function () {
        if (window.scrollY > 50) { // Adjust the value as needed
            navbarLogo.classList.add("shrink");
        } else {
            navbarLogo.classList.remove("shrink");
        }
    });


})