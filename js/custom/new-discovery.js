$(document).ready(function() {
    // Store reference to hidden sections
    var hiddenSections = $('section.offers-wrp, section.guarantee-wrp, section.faq-wrp');

    // Add temporary classes to override styles
    $('<style>')
        .prop('type', 'text/css')
        .html(`
            .references-wrp-temp-override { padding-top: 0 !important; }
            .vsl-banner-temp-override { margin-bottom: 30px !important; }
        `)
        .appendTo('head');

    // Apply the temporary classes
    $('.references-wrp').addClass('references-wrp-temp-override');
    $('.vsl-banner-wrp2').addClass('vsl-banner-temp-override');

    console.log("Found hidden sections:", hiddenSections.length);

    // Wait for 5 seconds after page load
    setTimeout(function() {
        console.log("Attempting to show sections now");

        // First make sure display is set to none for hidden sections
        hiddenSections.css('display', 'none');

        // Now show each section one by one
        hiddenSections.each(function(index) {
            var section = $(this);
            var delay = index * 300;

            setTimeout(function() {
                console.log("Showing section", index);
                section.slideDown(1500);
            }, delay);
        });

        // Get total animation time (last section's delay + animation duration)
        var lastSectionDelay = (hiddenSections.length - 1) * 300;
        var totalAnimationTime = lastSectionDelay + 1500;

        // After all sections are shown, restore the original styles
        setTimeout(function() {
            console.log("Restoring original styles");

            // Animate the padding transition for references section
            $('.references-wrp').animate({
                'padding-top': '68px'
            }, 500, function() {
                // After animation is complete, remove the override class
                $('.references-wrp').removeClass('references-wrp-temp-override');
            });

            // Animate the margin transition for vsl banner
            $('.vsl-banner-wrp2').animate({
                'margin-bottom': '60px'
            }, 500, function() {
                // After animation is complete, remove the override class
                $('.vsl-banner-wrp2').removeClass('vsl-banner-temp-override');
            });

        }, totalAnimationTime);

    }, 1050000); // 5000ms = 5 seconds
});
