$(document).ready(function() {
    console.log("discovery page")
    // Store reference to hidden sections
    var hiddenSections = $('section.offers-wrp, section.guarantee-wrp, section.faq-wrp, div.references-wrp');

    console.log("Found hidden sections:", hiddenSections.length);

    // Wait for 5 seconds after page load
    setTimeout(function() {
        console.log("Attempting to show sections now");

        // Making sure display is set to none (in case inline style is interfering)
        hiddenSections.css('display', 'none');

        // Now show each section one by one
        hiddenSections.each(function(index) {
            var section = $(this);
            var delay = index * 300;

            setTimeout(function() {
                console.log("Showing section", index);
                section.slideDown(1500, function() {
                    console.log("Section", index, "animation complete");
                });
            }, delay);
        });
    }, 5000); // 5000ms = 5 seconds
});