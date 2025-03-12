$(document).ready(function() {
    // Function to get URL parameters
    function getUrlParameter(name) {
        name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
        const regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
        const results = regex.exec(location.search);
        return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
    }

    // Define pricing configuration for different SKUs
    const pricingConfig = {
        'lepto-us-01': {
            startPrice: 177,
            endPrice: 98,
            videoId: '67a3c49bc43fde44118b1dec' // First video ID
        },
        'lepto-us-03': {
            startPrice: 294,
            endPrice: 117,
            videoId: '67a3c49092df4b5c128b3be6' // Second video ID
        },
        'lepto-us-06': {
            startPrice: 261,
            endPrice: 114,
            videoId: '67a3c486d801a08f708d0b2a' // Default to first video
        },
        // Add more SKU pricing configurations as needed
        'default': {
            startPrice: 177,
            endPrice: 98,
            videoId: '67a3c49bc43fde44118b1dec' // Default video ID
        }
    };

    // Get the SKU from the URL
    const sku = getUrlParameter('sku');
    console.log("sky is ", sku)

    // Set prices and video ID based on the SKU (use default if SKU not found in config)
    const { startPrice, endPrice, videoId } = pricingConfig[sku] || pricingConfig['default'];

    console.log(`SKU: ${sku}`);
    console.log(`Start Price: $${startPrice}`);
    console.log(`End Price: $${endPrice}`);
    console.log(`Video ID: ${videoId}`);

    let scrollsCounter = 0;
    let priceAnimationTriggered = false; // Flag to track if animation has run
    const upsellContent = $('.vsl-banner-wrp, .upsell-special-deal-section');
    const noThanksContent = $('.banner-upsell, .no-thanks-special-deal-section');

    function startPriceAnimation() {
        console.log(scrollsCounter);
        /*if (scrollsCounter !== 4) return;*/
        /*if (priceAnimationTriggered) return;*/ // Prevent running animation multiple times
        priceAnimationTriggered = true; // Mark animation as triggered
        // Animate the total price from startPrice to endPrice
        const totalPriceElementOne = noThanksContent.find(".right-details .saving-details span"); // Target the span containing price
        const totalPriceElementTwo = noThanksContent.find(".btn-contain .btn-orange .price"); // Target the span containing price
        const totalDuration = 3000; // Total animation duration in milliseconds
        const stepTime = 50; // Time between updates in milliseconds

        let currentPrice = startPrice;
        totalPriceElementOne.text(startPrice)
        totalPriceElementTwo.text(startPrice)
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
    }

    console.log("I am in upsell webpage");

    // Simple interval-based time tracking approach
    let isTimeTrapTriggered = false;
    const actionTime = 5; // Show the special deal after 5 seconds
    const upsellSpecialDealSection = $(".upsell-special-deal-section, .official-page");

    // Handle "No Thanks" click
    $(".no-thanks-link").on("click", function(evt) {
        evt.preventDefault();
        console.log("No thanks link clicked!");

        // Try to pause the video if player exists
        try {
            // Using the global function to access the player
            if (window.smartplayer) {
                const playerElement = document.getElementById(`vid_${videoId}`);
                if (playerElement && playerElement.smartplayer) {
                    playerElement.smartplayer.pause();
                } else if (window.smartplayer.instances && window.smartplayer.instances[videoId]) {
                    window.smartplayer.instances[videoId].pause();
                }
            }
        } catch (e) {
            console.log("Could not pause video: ", e);
        }

        // Hide current content and show new content
        upsellContent.hide();
        noThanksContent.show();
        $('html, body').animate({ scrollTop: 0 }, 10);
    });

    // Direct DOM method for detecting video playback
    // This approach doesn't rely on the player's API
    let videoStartTime = null;
    const videoElement = document.getElementById(`vid_${videoId}`);

    // Check if video is playing every second
    const videoPlaybackInterval = setInterval(() => {
        // If the action has already been triggered, stop checking
        if (isTimeTrapTriggered) {
            clearInterval(videoPlaybackInterval);
            return;
        }

        // Try to determine if the video is playing
        const isVideoPlaying = document.querySelectorAll('video').length > 0;

        if (isVideoPlaying) {
            console.log("Video detected as playing");

            // If this is the first time we detect video playing, record start time
            if (videoStartTime === null) {
                videoStartTime = new Date().getTime();
                console.log("Video start time recorded:", videoStartTime);
            }

            // Calculate how long the video has been playing
            const currentTime = new Date().getTime();
            const elapsedSeconds = (currentTime - videoStartTime) / 1000;
            console.log("Video playback elapsed seconds:", elapsedSeconds);

            // If elapsed time meets or exceeds the action time, trigger the content
            if (elapsedSeconds >= actionTime) {
                isTimeTrapTriggered = true;
                console.log('Video has been playing for at least 5 seconds - showing content');
                upsellSpecialDealSection.slideDown(1500);
                clearInterval(videoPlaybackInterval);
            }
        }
    }, 1000);

    // Backup approach using a fixed timer from page load
    // This will show content after 15 seconds regardless of video state
    // as a fallback mechanism
    setTimeout(() => {
        if (!isTimeTrapTriggered) {
            console.log('Fallback timer triggered - showing content after delay');
            isTimeTrapTriggered = true;
            upsellSpecialDealSection.slideDown(1500);
        }
    }, 15000);

    // Additional approach - track mutations on the video container
    // This may catch when the player becomes interactive
    const observer = new MutationObserver((mutations) => {
        for (const mutation of mutations) {
            if (mutation.type === 'childList' && !isTimeTrapTriggered) {
                // Look for video elements
                const videoElements = mutation.target.querySelectorAll('video');
                if (videoElements.length > 0) {
                    console.log("Video element added to DOM");

                    // Add direct event listeners to the video element
                    videoElements.forEach(video => {
                        video.addEventListener('timeupdate', () => {
                            if (isTimeTrapTriggered) return;

                            if (video.currentTime >= actionTime) {
                                isTimeTrapTriggered = true;
                                console.log('Video timeupdate event: Current time =', video.currentTime);
                                upsellSpecialDealSection.slideDown(1500);
                            }
                        });
                    });
                }
            }
        }
    });

    // Start observing the video container for changes
    if (videoElement) {
        observer.observe(videoElement, { childList: true, subtree: true });
    }

    // blink effect on price & buying box title (No Thanks page)
    const elementsToObserve = document.querySelectorAll(".price-blink, .title-blink"); // Select both elements

    if (elementsToObserve.length > 0) {
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("fade-blink-animation");
                    startPriceAnimation();
                    scrollsCounter++;
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
});