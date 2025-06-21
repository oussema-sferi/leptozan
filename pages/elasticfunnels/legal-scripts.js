// Load BuyGoods disclaimer script manually
const s1 = document.createElement('script');
s1.src = "https://display.buygoods.com/v1/disclaimer?id=disclaimer&account_id=10880";
s1.async = true;
document.body.appendChild(s1);

// Load current year
const yearSpan = document.getElementById("year");
if (yearSpan) {
    yearSpan.textContent = new Date().getFullYear();
}

// Load other JS scripts
const loadScripts = [
    "https://leptozan.com/js/jquery-3.7.1.min.js",
    "https://leptozan.com/js/bootstrap.bundle.min.js",
    "https://leptozan.com/js/slick.min.js",
    "https://leptozan.com/js/all.min.js",
    "https://leptozan.com/js/ofi.min.js",
    "https://leptozan.com/js/script.js",
];

loadScripts.forEach(function (src) {
    const s = document.createElement('script');
    s.src = src;
    s.async = false;
    document.body.appendChild(s);
});