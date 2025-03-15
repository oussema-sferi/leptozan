// Function to read cookies (make it globally available)
function ReadCookie(name) {
    name += '=';
    var parts = document.cookie.split(/;\s*/);
    for (var i = 0; i < parts.length; i++) {
        var part = parts[i];
        if (part.indexOf(name) == 0) return part.substring(name.length);
    }
    return '';
}

// Function to append session ID to buy links
function updateBuyLinks() {
    var sessid2 = ReadCookie('sessid2');
    if (!sessid2) {
        /*console.log("No sessid2 cookie found");*/
        return;
    }

    /*console.log("Found sessid2:", sessid2);*/

    // Get all buy buttons - target multiple selectors
    var buyButtons = document.querySelectorAll([
        '.offers-btn a[href*="buygoods.com"]',    // Original landing page buttons
        '.btn-contain a[href*="buygoods.com"]',   // Upsell page buttons
        'a[href*="buygoods.com"]',            // Any button with class 'btn'
        '.no-thanks-special-deal-section a[href*="buygoods.com"]' // No-thanks section buttons
    ].join(', '));

    /*console.log("Found buttons:", buyButtons.length);*/

    // Update each button's href with session ID
    buyButtons.forEach(function(button) {
        var href = button.getAttribute('href');
        /*console.log("Processing button with href:", href);*/
        // Only append if not already in the URL
        if (href.indexOf('sessid2=') === -1) {
            var separator = href.indexOf('?') !== -1 ? '&' : '?';
            button.setAttribute('href', href + separator + 'sessid2=' + sessid2);
            /*console.log("Updated href:", button.getAttribute('href'));*/
        }
    });
}

// Run when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    console.log("DOM loaded, running initial update");
    updateBuyLinks();

    // Set up periodic checking for new buttons
    setInterval(updateBuyLinks, 3000);
});

// Track when the upsell content becomes visible
document.addEventListener('DOMContentLoaded', function() {
    // Monitor for visibility changes in upsell sections
    var upsellSections = [
        '.upsell-special-deal-section',
        '.no-thanks-special-deal-section',
        '.official-page'
    ];

    // Check if MutationObserver is supported
    if (window.MutationObserver) {
        var observer = new MutationObserver(function(mutations) {
            mutations.forEach(function(mutation) {
                if (mutation.attributeName === 'style') {
                    var element = mutation.target;
                    var displayStyle = window.getComputedStyle(element).display;

                    if (displayStyle !== 'none') {
                        console.log("Upsell section now visible, updating buy links");
                        // Section is now visible, update buy links
                        setTimeout(updateBuyLinks, 500);
                    }
                }
            });
        });

        // Observe each section
        upsellSections.forEach(function(selector) {
            var elements = document.querySelectorAll(selector);
            elements.forEach(function(el) {
                observer.observe(el, { attributes: true, attributeFilter: ['style'] });
            });
        });
    }

    // Also hook into your existing video time trigger
    // This works specifically with your upsell.js implementation
    var originalSetTimeout = window.setTimeout;
    window.setTimeout = function(callback, time) {
        var wrappedCallback = function() {
            var result = callback();

            // If the timeout matches our target time (5 seconds), update buy links
            if (time === 5000 || time === 15000) {
                console.log("Video timer triggered, updating buy links soon");
                originalSetTimeout(updateBuyLinks, 1000);
            }

            return result;
        };

        return originalSetTimeout(wrappedCallback, time);
    };
});