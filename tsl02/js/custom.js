$(document).ready(function () {


    /* **** scrollIt ***** */
    $(function () {
        $.scrollIt({
            upKey: 38,
            downKey: 40,
            easing: "linear",
            scrollTime: 600,
            activeClass: "active",
            onPageChange: null,
            topOffset: -80,
        });
    });
    /* **** End scrollIt ***** */

    /* **** Navigation Toggle Start **** */
    $(".navbar-collapse a").click(function () {
        $(".navbar-collapse").collapse("hide");
    });

    $(".navbar-toggler").on("click", function () {
        $("body").toggleClass("add-fix");
    });
    /* **** Navigation Toggle End **** */

    /* **** sticky **** */
    $(window).scroll(function () {
        if ($(this).scrollTop() > 150) {
            $("header").addClass("nav-new");
        } else {
            $("header").removeClass("nav-new");
        }
    });
    /* **** sticky **** */

    /* **** AOS **** */
    AOS.init({
        duration: 1000,
    });
    /* **** End AOS **** */


    /* **** About Slider ***** */
    $(".about-slider").slick({
        arrows: false,
        loop: true,
        dots: true,
        autoplay: true,
        autoplaySpeed: 5000,
        speed: 1500,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        responsive: [
            {
                breakpoint: 1600,
                settings: {
                    slidesToShow: 3,
                },
            },
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 3,
                },
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 447,
                settings: {
                    slidesToShow: 1,
                },
            },
        ],
    });
    /* ***** End About Slider **** */

    /* ***** Testimonial Slider **** */
    $(".testimonial-slider").slick({
        arrows: true,
        loop: true,
        dots: false,
        autoplay: false,
        autoplaySpeed: 1500,
        speed: 1000,
        vertical:true,
        infinite: true,
        appendArrows: $(".hero__arrows"),
        prevArrow: '<div class="hero__arrow hero__arrow_left"><i class="far fa-angle-up fa-fw"></i></div>',
        nextArrow: '<div class="hero__arrow hero__arrow_right"><i class="far fa-angle-down fa-fw"></i></div>',
        slidesToShow: 1,
        slidesToScroll: 1,
    });
    /* ***** End Testimonial Slider **** */    
});
