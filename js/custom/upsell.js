$(document).ready(function() {
    console.log("i am in upsell webpage");
    // Listen for click event on the play icon
    const upsellSpecialDealSection = $(".upsell-special-deal-section, .official-page")
    /*$('.play-icon').on('click', function (e) {
        e.preventDefault(); // Prevent default link behavior if it's an anchor tag

        // Log to the console after 3 seconds
        setTimeout(function () {
            console.log("Video play clicked. Logging this after 3 seconds!");
            specialDealSection.slideDown(1500)
        }, 5000);
    });*/

    // Initialize Vidalytics Instance + binding time update event
    /*const EMBED_ID = 'vidalytics_embed_tUiR3D3NTucP8aJ1';*/
    const EMBED_ID = 'vidalytics_embed_oo86lpbKzHm8_r2O';
    !function(v,a,p,i){
        v.getVidalyticsPlayer=n=>{v[a]=v[a]||{},v[a][p]=v[a][p]||{};let d=v[a][p][n]=v[a][p][n]||{};
            return new Promise((e=>{if(d[i])return void e(d[i]);let t;
                Object.defineProperty(d,i,{get:()=>t,set(i){t=i,e(i)}})}))}
    }(window,'_vidalytics','embeds','player');

    getVidalyticsPlayer(EMBED_ID).then(player => {
        if (!player) return;
        // Do something related to current video playback time (Events related To Vidalytics Player)
        // Detect if the user is on mobile
        function isMobile() {
            return window.innerWidth <= 768; // Adjust breakpoint if needed
        }
        player.on('play', () => {
            console.log('Player was played.');
            if (isMobile()) {
                $(".banner-order-steps").slideUp(1000);
            }

        });
        /*player.on('play', () => {
            console.log('Player was played.');
        });

        player.on('pause', () => {
            console.log('Player was paused.');
        });

        player.on('ended', () => {
            console.log('Player playback has ended.');
        });*/

        // do something after 5s of playback
        let isTimeTrapTriggered = false;
        const actionTime = 5;
        player.on('timeupdate', () => {
            if (isTimeTrapTriggered) return;
            const currentTime = Math.floor(player.currentTime());
            if (currentTime === actionTime) {
                isTimeTrapTriggered = true;
                /*console.log('Player playback reached 5 seconds.', player);*/
                upsellSpecialDealSection.slideDown(1500)
            }
        });
    });

    // no-thanks link action
    $("#no-thanks-link").click("on", function(evt) {
        evt.preventDefault();
        const upsellContent = $('.vsl-banner-wrp, .upsell-special-deal-section');
        const noThanksContent = $('.banner-upsell, .no-thanks-special-deal-section');
        console.log("no thanks link clicked!");
        // Pause the video when the user clicks "No, Thanks"
        getVidalyticsPlayer(EMBED_ID).then(player => {
            if (!player) return;
          player.pause();
        });
        // Hide current content and show new content
        upsellContent.hide();
        noThanksContent.show();
        $('html, body').animate({ scrollTop: 0 }, 10); // Adjust 'slow' or specify time in milliseconds


        // Wait 1 second before starting the price animation
        setTimeout(() => {
            // Animate the total price from 79 to 58
            const totalPriceElementOne = noThanksContent.find(".right-details .saving-details span"); // Target the span containing 79
            const totalPriceElementTwo = noThanksContent.find(".btn-contain .btn-orange .price"); // Target the span containing 79
            const startPrice = 177;
            const endPrice = 98;
            const totalDuration = 3000; // Total animation duration in milliseconds
            const stepTime = 50; // Time between updates in milliseconds

            let currentPrice = startPrice;
            const totalSteps = totalDuration / stepTime; // Counting the total number of steps
            let stepCount = 0;

            // Easing logic: slow at first, then faster
            const easingFunction = (t) => t * t; // Quadratic easing (t^2) for acceleration

            const priceInterval = setInterval(() => {
                stepCount++;
                const progress = stepCount / totalSteps; // Progress from 0 to 1
                const easedProgress = easingFunction(progress); // Apply easing function
                currentPrice = startPrice - (startPrice - endPrice) * easedProgress; // Calculate new price
                /*console.log(currentPrice);*/
                // Update the price in the span
                totalPriceElementOne.text(Math.ceil(currentPrice));
                totalPriceElementTwo.text(Math.ceil(currentPrice));

                // Stop the interval when the target is reached
                if (progress >= 1) {
                    clearInterval(priceInterval);
                    totalPriceElementOne.text(endPrice); // Ensure it ends exactly at the target
                    totalPriceElementTwo.text(endPrice); // Ensure it ends exactly at the target
                }
            }, stepTime);
        }, 1000); // Delay of 1 second before starting
    })

    // blink effect on price & buying box title (No Thanks page)

    const elementsToObserve = document.querySelectorAll(".price-blink, .title-blink"); // Select both elements

    if (elementsToObserve.length > 0) {
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("fade-blink-animation");

                    // Remove the animation class after 5 blinks (7.5s duration)
                    setTimeout(() => {
                        entry.target.classList.remove("fade-blink-animation");
                    }, 7.5 * 1000);
                }
            });
        }, { threshold: 0.5 });

        // Observe each element
        elementsToObserve.forEach(element => observer.observe(element));
    }

})