$(document).ready(function() {

    // Buy Now button redirection to according section in index.html (for pages other than index.html)
    // Save in session when clicked
    const buyNow = document.getElementById('buy-now-button');
    if(buyNow)
    {
        buyNow.addEventListener('click', function (e) {
            e.preventDefault();
            sessionStorage.setItem('scrollToBuyNowSection', 'buy-now');
            window.location.href = '/';
        });
    }



})