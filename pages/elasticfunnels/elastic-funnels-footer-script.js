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