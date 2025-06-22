// Load your other JS scripts
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
    /*"https://leptozan.com/js/custom/upsell.js",*/
];

loadScripts.forEach(function (src) {
    const s = document.createElement('script');
    s.src = src;
    s.async = false;
    document.body.appendChild(s);
});