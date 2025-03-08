$(document).ready(function() {
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