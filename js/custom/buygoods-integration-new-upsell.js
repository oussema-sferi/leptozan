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
    console.log("tessssssssssssst");
    var sessid2 = ReadCookie('sessid2');
    if (!sessid2) {
        /*console.log("No sessid2 cookie found");*/
        return;
    }

    console.log("Found sessid2:", sessid2);

    // Get all buy buttons - target multiple selectors
    var buyButtons = document.querySelectorAll('a[href*="buygoods.com"]');

    console.log("Found buttons:", buyButtons);

    buyButtons.forEach(function(button) {
        var href = button.getAttribute('href');

        // Remove existing sessid2 if present
        href = href.replace(/([?&])sessid2=[^&]*(&)?/, function(_, sep, trailing) {
            return trailing ? sep : '';
        });

        // Clean any trailing & or ?
        href = href.replace(/[&?]+$/, '');

        // Append sessid2
        var separator = href.includes('?') ? '&' : '?';
        href += separator + 'sessid2=' + sessid2;

        // Update the href
        button.setAttribute('href', href);
    });

}

// Track when the upsell content becomes visible
document.addEventListener('DOMContentLoaded', function() {
    updateBuyLinks()
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
    /*var originalSetTimeout = window.setTimeout;
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
    };*/
});