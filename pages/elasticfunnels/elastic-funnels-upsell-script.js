const loadScripts = [
    "https://leptozan.com/js/jquery-3.7.1.min.js",
    "https://leptozan.com/js/custom/buygoods-integration.js",
    "https://leptozan.com/js/custom/buygoods-tracking.js",
    "https://leptozan.com/js/slick.min.js",
    "https://leptozan.com/js/bootstrap.bundle.min.js",
    "https://leptozan.com/js/all.min.js",
    "https://leptozan.com/js/ofi.min.js",
    "https://leptozan.com/pages/elasticfunnels/elastic-funnels-footer-script.js",
    "https://leptozan.com/js/script.js",
    "https://leptozan.com/js/EF/upsell-6.js",
];
loadScripts.forEach(function (src) {
        const s = document.createElement('script');
        s.src = src;
        s.async = false;
        document.body.appendChild(s);
    }
);
var container = document.querySelector('.vsl-video');
if (container) {
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.id = 'scr_67d338d1b7ef8e55f55f0bbb';
    script.src = 'https://scripts.converteai.net/2d86efbf-e9a0-49b5-8604-c3045db2ac7e/players/67d338d1b7ef8e55f55f0bbb/player.js';
    script.async = true;
    container.appendChild(script);
}
else {
    console.warn('No element found with class .vsl-video');
}
