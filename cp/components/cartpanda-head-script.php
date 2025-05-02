<script src="https://assets.mycartpanda.com/cartx-ecomm-ui-assets/js/libs/ocu-external.js">
</script>

<script>
    new OcuExternal();
</script>

<!--<script src="https://assets.mycartpanda.com/cartx-ecomm-ui-assets/js/libs/ocu-external.js" defer></script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        if (typeof crypto.randomUUID === "function") {
            try {
                new OcuExternal();
            } catch (e) {
                console.error("OCU initialization failed:", e);
                restoreNormalLinks();
            }
        } else {
            console.warn("crypto.randomUUID not supported. Falling back to normal link behavior.");
            restoreNormalLinks();
        }

        function restoreNormalLinks() {
            // Remove spinners or loading classes if any
            document.querySelectorAll('a.btn, a[href*="cartpanda.com"]').forEach(btn => {
                btn.classList.remove('ocu-disabled'); // if CartPanda added any disabling class
                btn.style.pointerEvents = 'auto';
                btn.style.opacity = 1;
                btn.style.cursor = 'pointer';
                btn.addEventListener('click', function (e) {
                    // ensure normal redirect happens
                    window.location.href = btn.href;
                });
            });
        }
    });
</script>-->
