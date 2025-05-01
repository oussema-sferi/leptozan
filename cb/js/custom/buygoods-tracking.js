// Add Buygoods tracking
var mysrc = "https://tracking.buygoods.com/track/?a=10880&firstcookie=0"+
    "&tracking_redirect=&referrer="+encodeURIComponent(document.referrer)+
    "&sessid2="+ReadCookie('sessid2')+
    "&product=lep3u&vid1=&vid2=&vid3="+  // Note: adjust the product code based on the page
    "&caller_url="+encodeURIComponent(window.location.href);

if(typeof add_to_cart !== 'undefined') {
    mysrc = mysrc+'&add_to_cart='+add_to_cart;
}

var newScript = document.createElement('script');
newScript.type = 'text/javascript';
newScript.defer = true;
newScript.src = mysrc;
var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(newScript, s);

// Add iframe tracking (will run after page loads)
setTimeout(function () {
    var i = document.createElement("iframe");
    i.async = true;
    i.style="display:none";
    i.setAttribute("src", "https://buygoods.com/affiliates/go/conversion/iframe/bg?a=10880&t=1333b2ded8f71e19ef21ce4846548c75&s="+ReadCookie('sessid2'));
    document.body.appendChild(i);
}, 1000);

// Helper for debugging
console.log("Buygoods tracking initialized with sessid2:", ReadCookie('sessid2'));