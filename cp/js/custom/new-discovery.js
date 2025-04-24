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
    var SHOW_DELAY = 1050000; // 1,050 seconds (17.5 minutes)
    var RELOAD_LIMIT = 4;
    var storageKey = "videoWatched";
    var reloadKey = "pageReloadCount";

    // Check if "content=yes" is in the URL
    var urlParams = new URLSearchParams(window.location.search);
    if (urlParams.get("content") === "yes") {
        showContent();
        return;
    }

    // Track page reloads
    var reloadCount = localStorage.getItem(reloadKey) || 0;
    reloadCount = parseInt(reloadCount, 10) + 1;
    localStorage.setItem(reloadKey, reloadCount);
    console.log(reloadCount)

    // Check conditions for showing content
    if (localStorage.getItem(storageKey) === "true" || reloadCount >= RELOAD_LIMIT) {
        showContent();
        return;
    }

    // Wait for 1,050 seconds to show the content
    setTimeout(function () {
        showContent();
        localStorage.setItem(storageKey, "true"); // Mark video as watched
    }, SHOW_DELAY);

    function showContent() {
        hiddenSections.css('display', 'none');
        hiddenSections.each(function (index) {
            var section = $(this);
            var delay = index * 300;
            setTimeout(function () {
                section.slideDown(1500);
            }, delay);
        });

        // Restore styles after all sections are shown
        var totalAnimationTime = (hiddenSections.length - 1) * 300 + 1500;
        setTimeout(function () {
            $('.references-wrp').animate({ 'padding-top': '68px' }, 500, function () {
                $('.references-wrp').removeClass('references-wrp-temp-override');
            });

            $('.vsl-banner-wrp2').animate({ 'margin-bottom': '60px' }, 500, function () {
                $('.vsl-banner-wrp2').removeClass('vsl-banner-temp-override');
            });
        }, totalAnimationTime);
    }

});
