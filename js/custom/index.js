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
            let offset = 90; // Adjust this value based on the navbar height to not cover the section
            $('html, body').animate({
                scrollTop: $(targetId).offset().top -offset
            }, 200)
            // ✅ Close the navbar (only if it's expanded)
            if ($('.navbar-collapse').hasClass('show')) {
                $('.navbar-toggler').click(); // Triggers Bootstrap's collapse
            }
        }

    })

    document.querySelector('.navbar-toggler').addEventListener('click', function() {
        this.classList.toggle('open'); // Toggles the class to change the icon
    });

    // Function to append sessid2 to buy links
    function updateBuyLinks() {
        var sessid2 = ReadCookie('sessid2');
        if (!sessid2) return;

        // Get all buy buttons
        var buyButtons = document.querySelectorAll('.offers-btn a[href*="buygoods.com"]');

        // Update each button's href with session ID
        buyButtons.forEach(function(button) {
            var href = button.getAttribute('href');
            // Only append if not already in the URL
            if (href.indexOf('sessid2=') === -1) {
                var separator = href.indexOf('?') !== -1 ? '&' : '?';
                button.setAttribute('href', href + separator + 'sessid2=' + sessid2);
            }
        });
    }

    // Run the function
    updateBuyLinks();

})