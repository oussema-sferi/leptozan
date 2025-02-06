$(document).ready(function() {

    const noThanksButton = $("#no-thanks-button");
    const noThanksSection = $(".glucozan-no-thanks-section");
    const homePageSection = $(".glucozan-home-page-section");
    console.log(noThanksSection);
    // no-thanks link action
    noThanksButton.click("on", function(event) {
        event.preventDefault();
        // Hide home page content and show no, thanks content
        homePageSection.hide();
        noThanksSection.show();
        $('html, body').animate({ scrollTop: 0 }, 10);
    })

})