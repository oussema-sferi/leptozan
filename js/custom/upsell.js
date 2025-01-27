$(document).ready(function() {

    console.log("i am in upsell");
    // Listen for click event on the play icon
    const specialDealSection = $(".upsell-special-deal-section")
    /*$('.play-icon').on('click', function (e) {
        e.preventDefault(); // Prevent default link behavior if it's an anchor tag

        // Log to the console after 3 seconds
        setTimeout(function () {
            console.log("Video play clicked. Logging this after 3 seconds!");
            specialDealSection.slideDown(1500)
        }, 5000);
    });*/

    //////
    const EMBED_ID = 'vidalytics_embed_tUiR3D3NTucP8aJ1';
    const actionTime = 3;
    !function(v,a,p,i){
        v.getVidalyticsPlayer=n=>{v[a]=v[a]||{},v[a][p]=v[a][p]||{};let d=v[a][p][n]=v[a][p][n]||{};
            return new Promise((e=>{if(d[i])return void e(d[i]);let t;
                Object.defineProperty(d,i,{get:()=>t,set(i){t=i,e(i)}})}))}
    }(window,'_vidalytics','embeds','player');

    getVidalyticsPlayer(EMBED_ID).then(player => {
        if (!player) return;

        // Do something related to current video playback time (Events related To Vidalytics Player)

        player.on('play', () => {
            console.log('Player was played.');
        });

        player.on('pause', () => {
            console.log('Player was paused.');
        });

        player.on('ended', () => {
            console.log('Player playback has ended.');
        });

        // do something after 5s of playback

        let isTimeTrapTriggered = false;

        player.on('timeupdate', () => {
            if (isTimeTrapTriggered) return;
            const currentTime = Math.floor(player.currentTime());
            if (currentTime === actionTime) {
                isTimeTrapTriggered = true;
                console.log('Player playback reached 5 seconds.', player);
                specialDealSection.slideDown(1500)
            }
        });

        // do something upon play gate submission

        player.on('playgate:submit', (id, data) => {
            console.log('Playgate was submitted.', id, data);
        });

        // do something when CTA is shown/hidden

        player.on('cta:show', (cta) => {
            console.log('CTA was shown.', cta);
        });

        player.on('cta:hide', (cta) => {
            console.log('CTA was hidden.', cta);
        });

        // do something when viewer enters or exits fullscreen mode

        player.on('enterfullscreen', () => {
            console.log('Player entered fullscreen.');
        });

        player.on('exitfullscreen', () => {
            console.log('Player exited fullscreen.');
        });
    });

    ///////
    $("#no-thanks-link").click("on", function(evt) {
        evt.preventDefault();
        const upsellContent = $('.vsl-banner-wrp, .upsell-special-deal-section');
        const noThanksContent = $('.banner-upsell, .no-thanks-special-deal-section');
        console.log("no thanks link");
        upsellContent.hide();
        noThanksContent.show();
        $('html, body').animate({ scrollTop: 0 }, 10); // Adjust 'slow' or specify time in milliseconds
    })

})