<!DOCTYPE html>
<html lang="en">
<head>

    <!-- header start -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/components/header.php'; ?>
    <!-- header end -->

    <title>Home</title>
</head>
<body>


<!-- Sticky Navbar -->
<nav class="navbar navbar-expand-md fixed-navbar">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="/images/logo.png" alt="logo" class="img-fluid">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#stickyNavbar"
                aria-controls="stickyNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="stickyNavbar">
            <ul class="navbar-nav m-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#banner-section">Origin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#leptozan-ingredients">Formula</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#leptozan-faq">FAQ</a>
                </li>
            </ul>
            <div class="header-btn">
                <a href="#buy-now" class="btn btn-orange">BUY NOW</a>
            </div>
        </div>
    </div>
</nav>
<!-- desktop header end -->

<!-- content start -->
<div class="content">

    <!-- Banner Start -->
    <section id="banner-section" class="banner-wrp">
        <div class="banner-main">
            <div class="container">
                <div class="banner-row d-none d-md-block">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="banner-content">
                                <div class="main-title">
                                    <h1>Discover How <span>Leptozan</span> Can Support <span> Healthy Weight Loss</span></h1>
                                </div>
                                <div class="large-detail">
                                    <p>Finally, The Easiest Way To Achieve Your Dream Body</p>
                                </div>
                                <a href="#buy-now" class="btn btn-orange">BUY NOW</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="banner-img">
                                <figure>
                                    <img src="/images/new/Product.png" alt="Product" class="img-fluid">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ✅ Mobile Version (Only shown in mobile) -->
                <div class="banner-row d-block d-md-none">
                    <div class="row align-items-center">

                        <!-- Left Column: Title Only -->
                        <div class="col-5">
                            <div class="banner-content">
                                <div class="main-title">
                                    <h1>Discover How <span>Leptozan</span> Can Support <span>Healthy Weight Loss</span></h1>
                                </div>
                            </div>
                        </div>

                        <!-- ✅ Right Column: Image + Button (Stacked Vertically) -->
                        <div class="col-7 text-center d-flex flex-column align-items-center">
                            <div class="banner-img">
                                <figure>
                                    <img src="/images/new/Product.png" alt="Product" class="img-fluid">
                                </figure>
                                <a href="#buy-now" class="btn btn-orange">BUY NOW</a>
                            </div>
                        </div>

                        <!-- Full Width Below: Paragraph -->
                        <div class="col-12">
                            <div class="large-detail text-center">
                                <p>Finally, The Easiest Way To Achieve Your Dream Body</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <!--<a href="#scroll-bottom" class="scroll-down">
            <figure>
                <img src="images/scroll-down.svg" alt="scroll-down" class="img-fluid">
            </figure>
        </a>-->
    </section>
    <!-- Banner End -->

    <!-- Healthy Start -->
    <section class="healthy-wrp" id="scroll-bottom">
        <div class="container">
            <div class="healthy-main">
                <div class="healthy-title">
                    <div class="section-title">
                        <!--<h2>Natural <span>Weight Loss</span> Designed For Your Body</h2>-->
                        <!--<h2>Activate Your Natural <br> And Healthy <span>Weight Control</span></h2>-->
                        <h2>
                            Activate Your Natural <br>
                            <span class="force-break">And Healthy</span>
                            <span>Weight Control</span>
                        </h2>
                    </div>
                    <div class="detail">
                        <!--<p>Use <span class="make-bold">Leptozan</span> to kickstart your fat-burning processes in a healthy, natural way.</p>-->
                        <p>LEPTOZAN is the powerful formula that works with your body to burn fat efficiently and naturally.</p>
                    </div>
                </div>
                <div class="healthy-section">
                    <!-- Features Grid -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="feature-box light-bg">
                                <h4 style="font-size: 32px;">Enhances Fat Burning</h4>
                                <p>Focuses on stubborn fat areas, including the belly, hips, and thighs.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="feature-box orange-bg">
                                <h4>Speeds Up Your Metabolism</h4>
                                <p>Allows you to burn extra calories, even while at rest.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="feature-box light-bg">
                                <h4>Suppresses Your Appetite</h4>
                                <p>Controls cravings and helps you stay fuller for longer.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="feature-box orange-bg">
                                <h4>Delivers Consistent Energy</h4>
                                <p>Eliminates fatigue, keeping you active and motivated all day.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="feature-box light-bg">
                                <h4>Promotes Smooth Digestion</h4>
                                <p>Supports gut health, aiding in overall weight management.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="feature-box orange-bg">
                                <h4>Completely Natural and Safe</h4>
                                <p>Crafted with ingredients your body knows and utilizes efficiently, free from harsh chemicals.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Healthy End -->

    <!-- Fat Loss Ingredients Start -->
    <!--<section id="leptozan-ingredients" class="ingredients-wrp">
        <div class="container">
            <div class="ingredients-main">

                <div class="ingredients-title">
                    <div class="section-title">
                        <h2>Unleash the Power of Science-Backed <span>Ingredients for Fat Loss</span></h2>
                    </div>
                    <div class="detail">
                        <p>The formula of LEPTOZAN blends advanced ingredients that work to enhance your metabolism.</p>
                    </div>
                </div>

                <div class="ingredients-logos-main">
                    <div class="ingredients-logos">
                        <figure>
                            <img src="/images/logo-1.png" alt="logo" class="img-fluid">
                        </figure>
                    </div>
                    <div class="ingredients-logos">
                        <figure>
                            <img src="/images/logo-2.png" alt="logo" class="img-fluid">
                        </figure>
                    </div>
                    <div class="ingredients-logos">
                        <figure>
                            <img src="/images/logo-3.png" alt="logo" class="img-fluid">
                        </figure>
                    </div>
                    <div class="ingredients-logos">
                        <figure>
                            <img src="/images/logo-4.png" alt="logo" class="img-fluid">
                        </figure>
                    </div>
                    <div class="ingredients-logos">
                        <figure>
                            <img src="/images/logo-5.png" alt="logo" class="img-fluid">
                        </figure>
                    </div>
                </div>

                <div class="ingredients-section">
                    <div class="row">

                        <div class="col-md-6 d-flex flex-column">
                            <div class="ingredients-block row align-items-center flex-md-row flex-column">
                                <div class="col-12 col-md-5">
                                    <div class="ingredients-img">
                                        <figure>
                                            <img src="/images/ingredients-img-1.jpg" alt="ingredients-img" class="img-fluid">
                                        </figure>
                                    </div>
                                </div>
                                <div class="col-12 col-md-7">
                                    <div class="ingredients-content">
                                        <div class="small-title">
                                            <h3>Magnesium Beta Hydroxybutyrate (BHB)</h3>
                                        </div>
                                        <div class="common-detail">
                                            <p>Helps convert food into clean energy and supports metabolic health.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ingredients-block row align-items-center flex-md-row flex-column">
                                <div class="col-12 col-md-5">
                                    <div class="ingredients-img">
                                        <figure>
                                            <img src="/images/ingredients-img-1.jpg" alt="ingredients-img" class="img-fluid">
                                        </figure>
                                    </div>
                                </div>
                                <div class="col-12 col-md-7">
                                    <div class="ingredients-content">
                                        <div class="small-title">
                                            <h3>Magnesium Beta Hydroxybutyrate (BHB)</h3>
                                        </div>
                                        <div class="common-detail">
                                            <p>Helps convert food into clean energy and supports metabolic health.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6  d-flex flex-column">
                            <div class="ingredients-block row align-items-center flex-md-row flex-column">
                                <div class="ingredients-img">
                                    <figure>
                                        <img src="/images/ingredients-img-2.jpg" alt="ingredients-img" class="img-fluid">
                                    </figure>
                                </div>
                                <div class="ingredients-content">
                                    <div class="small-title">
                                        <h3>Calcium Beta Hydroxybutyrate (BHB)</h3>
                                    </div>
                                    <div class="common-detail">
                                        <p>Supports fat burning and helps the body get rid of fat more easily.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <!--<section id="leptozan-ingredients" class="ingredients-wrp">
        <div class="container">
            <div class="ingredients-main">
                <div class="ingredients-logos-main">
                    <div class="ingredients-logos">
                        <figure>
                            <img src="/images/logo-1.png" alt="logo" class="img-fluid">
                        </figure>
                    </div>
                    <div class="ingredients-logos">
                        <figure>
                            <img src="/images/logo-2.png" alt="logo" class="img-fluid">
                        </figure>
                    </div>
                    <div class="ingredients-logos">
                        <figure>
                            <img src="/images/logo-3.png" alt="logo" class="img-fluid">
                        </figure>
                    </div>
                    <div class="ingredients-logos">
                        <figure>
                            <img src="/images/logo-4.png" alt="logo" class="img-fluid">
                        </figure>
                    </div>
                    <div class="ingredients-logos">
                        <figure>
                            <img src="/images/logo-5.png" alt="logo" class="img-fluid">
                        </figure>
                    </div>
                </div>
                <div class="ingredients-title">
                    <div class="section-title">
                        <h2>Harness The Power Of These Research-Backed <span>Dead Sea Minerals</span></h2>
                    </div>
                    <div class="detail">
                        <p>With Leptozan, you have a formula that combines ancient minerals proven by science to accelerate your metabolism.</p>
                    </div>
                </div>
                <div class="ingredients-section">
                    <div class="row">
                        <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                            <div class="ingredients-block">
                                <div class="ingredients-img">
                                    <figure>
                                        <img src="/images/ingredients-img-1.jpg" alt="ingredients-img" class="img-fluid">
                                    </figure>
                                </div>
                                <div class="ingredients-content">
                                    <div class="small-title">
                                        <h3>Magnesium Beta Hydroxybutyrate (BHB)</h3>
                                    </div>
                                    <div class="common-detail">
                                        <p>Helps convert food into clean energy and supports metabolic health.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                            <div class="ingredients-block">
                                <div class="ingredients-img">
                                    <figure>
                                        <img src="/images/ingredients-img-2.jpg" alt="ingredients-img" class="img-fluid">
                                    </figure>
                                </div>
                                <div class="ingredients-content">
                                    <div class="small-title">
                                        <h3>Calcium Beta Hydroxybutyrate (BHB)</h3>
                                    </div>
                                    <div class="common-detail">
                                        <p>Supports fat burning and helps the body get rid of fat more easily.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                            <div class="ingredients-block">
                                <div class="ingredients-img">
                                    <figure>
                                        <img src="/images/ingredients-img-3.jpg" alt="ingredients-img" class="img-fluid">
                                    </figure>
                                </div>
                                <div class="ingredients-content">
                                    <div class="small-title">
                                        <h3>Sodium Beta Hydroxybutyrate (BHB)</h3>
                                    </div>
                                    <div class="common-detail">
                                        <p>Boosts energy levels to help burn more calories all day long.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <!-- Fat Loss Ingredients End -->

    <section id="leptozan-ingredients" class="ingredients-wrp">
        <div class="container">
            <div class="ingredients-main">
                <div class="ingredients-title">
                    <div class="section-title">
                        <h2>Unleash the Power of Science-Backed <span>Ingredients for Fat Loss</span></h2>
                    </div>
                    <div class="detail">
                        <p>The formula of LEPTOZAN blends advanced ingredients that work to enhance your metabolism.</p>
                    </div>
                </div>

                <div class="ingredients-logos-main">
                    <div class="ingredients-logos">
                        <figure>
                            <img src="/images/leptozan-new-logos/ingredients/logo-1.png" alt="logo" class="img-fluid">
                        </figure>
                    </div>
                    <div class="ingredients-logos">
                        <figure>
                            <img src="/images/leptozan-new-logos/ingredients/logo-2.png" alt="logo" class="img-fluid">
                        </figure>
                    </div>
                    <div class="ingredients-logos">
                        <figure>
                            <img src="/images/leptozan-new-logos/ingredients/logo-3.png" alt="logo" class="img-fluid">
                        </figure>
                    </div>
                    <div class="ingredients-logos">
                        <figure>
                            <img src="/images/leptozan-new-logos/ingredients/logo-4.png" alt="logo" class="img-fluid">
                        </figure>
                    </div>
                    <div class="ingredients-logos">
                        <figure>
                            <img src="/images/leptozan-new-logos/ingredients/logo-5.png" alt="logo" class="img-fluid">
                        </figure>
                    </div>
                </div>

                <!-- Modified ingredients section -->
                <div class="ingredients-section">
                    <div class="row">
                        <!-- Left column with 2 boxes -->
                        <div class="col-lg-7">
                            <!-- First ingredient box -->
                            <div class="ingredients-block horizontal">
                                <div class="ingredients-block-inner">
                                    <div class="ingredients-img">
                                        <figure>
                                            <img src="/images/leptozan-new-ingredients/ingredients-img-1.png" alt="ingredients-img" class="img-fluid">
                                        </figure>
                                    </div>
                                    <div class="ingredients-content">
                                        <div class="small-title">
                                            <h3>Calcium Beta Hydroxybutyrate (BHB)</h3>
                                        </div>
                                        <div class="common-detail">
                                            <p>Assists in the fat-burning process, making it easier for your body to shed pounds.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Second ingredient box -->
                            <div class="ingredients-block horizontal">
                                <div class="ingredients-block-inner">
                                    <div class="ingredients-img">
                                        <figure>
                                            <img src="/images/leptozan-new-ingredients/ingredients-img-2.png" alt="ingredients-img" class="img-fluid">
                                        </figure>
                                    </div>
                                    <div class="ingredients-content">
                                        <div class="small-title">
                                            <h3>Sodium Beta Hydroxybutyrate (BHB)</h3>
                                        </div>
                                        <div class="common-detail">
                                            <p>Supports fat burning and helps the body get rid of fat more easily.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Right column with 1 box -->
                        <div class="col-lg-5">
                            <div class="ingredients-block vertical">
                                <div class="ingredients-img">
                                    <figure>
                                        <img src="/images/leptozan-new-ingredients/ingredients-img-3.png" alt="ingredients-img" class="img-fluid">
                                    </figure>
                                </div>
                                <div class="ingredients-content">
                                    <div class="small-title">
                                        <h3>Magnesium Beta Hydroxybutyrate (BHB)</h3>
                                    </div>
                                    <div class="common-detail">
                                        <p>Provides clean energy and supports your body in burning fat instead of carbs.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Offers Start -->
    <section id="buy-now" class="offers-wrp" style="background-color: var(--sky);">
        <div class="container">
            <div class="offers-main">
                <div class="section-title">
                    <h2>Claim Your Discounted <span>LEPTOZAN</span> Now <span>While Supplies Last!</span></h2>
                </div>
                <div class="offers-section">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-4 order-3 order-md-1">
                            <!-- Desktop Structure -->
                            <div class="offers-block desktop-view">
                                <div class="offers-block-title">
                                    <div class="section-title">
                                        <h2>2 for You</h2>
                                    </div>
                                    <div class="large-detail">
                                        <p>60 Days, 2 Bottles</p>
                                    </div>
                                </div>
                                <div class="offers-inner">
                                    <div class="offers-product-img">
                                        <figure>
                                            <img src="/images/offers-img-1.png" alt="offers-img" class="img-fluid">
                                        </figure>
                                    </div>
                                    <div class="offers-product-price">
                                        <h3><b>$</b><span>79</span><small>Per Bottle</small></h3>
                                    </div>
                                    <div class="common-list">
                                        <ul>
                                            <li>You save $200!</li>
                                            <li>180 Days Guarantee</li>
                                        </ul>
                                    </div>
                                    <div class="offers-btn">
                                        <a href="/upsell-oto-01/?sku=lepto-us-01" class="btn btn-yellow">BUY NOW <span>Basic Offer!</span></a>
                                    </div>
                                    <div class="payments-block">
                                        <ul>
                                            <li>
                                                <figure>
                                                    <img src="/images/Mastercard.svg" alt="Mastercard" class="img-fluid">
                                                </figure>
                                            </li>
                                            <li>
                                                <figure>
                                                    <img src="/images/visa-logo.svg" alt="visa" class="img-fluid">
                                                </figure>
                                            </li>
                                            <li>
                                                <figure>
                                                    <img src="/images/amex.svg" alt="amex" class="img-fluid">
                                                </figure>
                                            </li>
                                            <li>
                                                <figure>
                                                    <img src="/images/discover.svg" alt="discover" class="img-fluid">
                                                </figure>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="offers-total">
                                        <p>TOTAL: <span>$358</span> <strong>$158</strong></p>
                                        <p>+ 9.95 Shipping</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-4 order-1 order-md-2">
                            <div class="offers-block best-offer-block">
                                <div class="offers-block-title">
                                    <div class="section-title">
                                        <h2>Best Offer!</h2>
                                    </div>
                                    <div class="large-detail">
                                        <p>180 Days, 6 Bottles</p>
                                    </div>
                                </div>
                                <div class="offers-inner">
                                    <div class="offers-product-img">
                                        <figure>
                                            <img src="/images/offers-img-2.png" alt="offers-img" class="img-fluid">
                                        </figure>
                                    </div>
                                    <div class="offers-product-price">
                                        <h3><b>$</b><span>49</span><small>Per Bottle</small></h3>
                                    </div>
                                    <div class="common-list">
                                        <ul>
                                            <li>You save $780!</li>
                                            <li>Biggest Discount</li>
                                            <li>180 Days Guarantee</li>
                                        </ul>
                                    </div>
                                    <div class="offers-btn">
                                        <a href="#buy-now" class="btn btn-orange">BUY NOW <span>Best Offer!</span></a>
                                    </div>
                                    <div class="payments-block">
                                        <ul>
                                            <li>
                                                <figure>
                                                    <img src="/images/Mastercard.svg" alt="Mastercard" class="img-fluid">
                                                </figure>
                                            </li>
                                            <li>
                                                <figure>
                                                    <img src="/images/visa-logo.svg" alt="visa" class="img-fluid">
                                                </figure>
                                            </li>
                                            <li>
                                                <figure>
                                                    <img src="/images/amex.svg" alt="amex" class="img-fluid">
                                                </figure>
                                            </li>
                                            <li>
                                                <figure>
                                                    <img src="/images/discover.svg" alt="discover" class="img-fluid">
                                                </figure>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="offers-total">
                                        <p>TOTAL: <span>$1074</span> <strong>$294</strong></p>
                                        <p><span class="free-shipping">Free</span> Shipping</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-4 order-2 order-md-3">
                            <div class="offers-block">
                                <div class="offers-block-title">
                                    <div class="section-title">
                                        <h2>3 for You</h2>
                                    </div>
                                    <div class="large-detail">
                                        <p>90 Days, 3 Bottles</p>
                                    </div>
                                </div>
                                <div class="offers-inner">
                                    <div class="offers-product-img">
                                        <figure>
                                            <img src="/images/offers-img-3-new.png" alt="offers-img" class="img-fluid">
                                        </figure>
                                    </div>
                                    <div class="offers-product-price">
                                        <h3><b>$</b><span>69</span><small>Per Bottle</small></h3>
                                    </div>
                                    <div class="common-list">
                                        <ul>
                                            <li>You save $360!</li>
                                            <li>180 Days Guarantee</li>
                                        </ul>
                                    </div>
                                    <div class="offers-btn">
                                        <a href="#buy-now" class="btn btn-yellow">BUY NOW <span>Good Offer!</span></a>
                                    </div>
                                    <div class="payments-block">
                                        <ul>
                                            <li>
                                                <figure>
                                                    <img src="/images/Mastercard.svg" alt="Mastercard" class="img-fluid">
                                                </figure>
                                            </li>
                                            <li>
                                                <figure>
                                                    <img src="/images/visa-logo.svg" alt="visa" class="img-fluid">
                                                </figure>
                                            </li>
                                            <li>
                                                <figure>
                                                    <img src="/images/amex.svg" alt="amex" class="img-fluid">
                                                </figure>
                                            </li>
                                            <li>
                                                <figure>
                                                    <img src="/images/discover.svg" alt="discover" class="img-fluid">
                                                </figure>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="offers-total">
                                        <p>TOTAL: <span>$537</span> <strong>$207</strong></p>
                                        <p><span class="free-shipping">Free</span> Shipping</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Offers End -->

    <!-- Guarantee Start -->
    <section class="guarantee-wrp">
        <div class="container">
            <div class="guarantee-main">
                <div class="badge-img">
                    <figure>
                        <img src="/images/badge.png" alt="badge" class="img-fluid">
                    </figure>
                </div>
                <div class="section-title">
                    <!--<h2>Your Leptozan Guarantee</h2>-->
                    <h2>100% Satisfaction or Your Money Back 180-Day Guarantee</h2>
                </div>
                <div class="detail">
                    <!--<p>We’re so confident you’ll see big changes with your body, energy, and health, you get a 180-day money-back guarantee when you try Leptozan.</p>
                    <p>Start using Leptozan once it arrives on your doorstep. As other customers have reported, taking it daily is the best way to experience the benefits such as more energy, a new lightness, and watching a “new you” appear in the mirror.</p>
                    <p>If you’re not completely satisfied with the results, simply contact our team using the links in the footer to get a full refund. Leptozan puts the power of your metabolic health back in your hands.</p>-->
                    <p>We're so confident you'll achieve incredible results that we back LEPTOZAN with a 100% satisfaction guarantee for 180 days.</p>
                    <p>Start using it as soon as it arrives, and within days, you may notice an increase in energy, a clearer mind, and reduced cravings. As you continue your journey, you could start to see gradual weight loss and a reduction in stubborn fat, making it the perfect time to track your progress. If after several weeks or even months you're not completely satisfied, we'll refund your money in full. With LEPTOZAN, you're truly in control of your weight loss journey.</p>

                </div>
                <div class="guarantee-logos-main">
                    <div class="guarantee-logos">
                        <figure>
                            <img src="/images/leptozan-new-logos/guarantee/logo-1.png" alt="logo" class="img-fluid">
                        </figure>
                    </div>
                    <div class="guarantee-logos">
                        <figure>
                            <img src="/images/leptozan-new-logos/guarantee/logo-2.png" alt="logo" class="img-fluid">
                        </figure>
                    </div>
                    <div class="guarantee-logos">
                        <figure>
                            <img src="/images/leptozan-new-logos/guarantee/logo-3.png" alt="logo" class="img-fluid">
                        </figure>
                    </div>
                    <div class="guarantee-logos">
                        <figure>
                            <img src="/images/leptozan-new-logos/guarantee/logo-4.png" alt="logo" class="img-fluid">
                        </figure>
                    </div>
                    <div class="guarantee-logos">
                        <figure>
                            <img src="/images/leptozan-new-logos/guarantee/logo-5.png" alt="logo" class="img-fluid">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Guarantee End -->

    <!-- Faq Start -->
    <section id="leptozan-faq" class="faq-wrp">
        <div class="container">
            <div class="faq-main">
                <div class="section-title">
                    <h2>Frequently Asked Questions</h2>
                </div>
                <div class="faq-section">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item active">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                    <div class="small-title">
                                        <h3>Do I need to change my lifestyle to see results?</h3>
                                    </div>
                                </button>
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="detail">
                                        <p>No, you don’t have to commit to intense exercise or restrictive dieting. However, incorporating a balanced diet and light physical activity can enhance your results if you choose to do so.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    <div class="small-title">
                                        <h3>Is Leptozan safe for daily use?</h3>
                                    </div>
                                </button>
                            </h2>
                            <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="detail">
                                        <p>Yes! Leptozan is made with natural ingredients and produced in an FDA-registered facility. That said, we always recommend consulting your healthcare provider before starting any new supplement.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    <div class="small-title">
                                        <h3>When can I expect to notice changes?</h3>
                                    </div>
                                </button>
                            </h2>
                            <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="detail">
                                        <p>Many customers begin noticing changes within the first few weeks of using Leptozan. However, for optimal results, we recommend taking it daily for at least three months, as weight loss is a gradual process.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                    <div class="small-title">
                                        <h3>Can Leptozan be taken alongside my current diet plan?</h3>
                                    </div>
                                </button>
                            </h2>
                            <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="detail">
                                        <p>Absolutely! Leptozan is designed to complement various eating habits, whether you're following keto, low-carb, or a balanced diet.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                    <div class="small-title">
                                        <h3>How much Leptozan should I buy for the best results?</h3>
                                    </div>
                                </button>
                            </h2>
                            <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="detail">
                                        <p>For the best experience and most noticeable transformation, we suggest purchasing a 3- or 6-month supply. This ensures consistency and allows you to get the best savings.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                    <div class="small-title">
                                        <h3>What if I don’t get the results I was hoping for?</h3>
                                    </div>
                                </button>
                            </h2>
                            <div id="collapse6" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="detail">
                                        <p>We offer a 180-day money-back guarantee, so you can try Leptozan risk-free. If you’re not satisfied for any reason, just reach out, and we’ll provide a full refund—no questions asked.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                    <div class="small-title">
                                        <h3>How long does shipping take?</h3>
                                    </div>
                                </button>
                            </h2>
                            <div id="collapse7" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="detail">
                                        <p>Delivery times depend on your location, but most orders arrive within a few business days. Once your order ships, you'll receive a tracking link to follow its progress.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                    <div class="small-title">
                                        <h3>How should I take Leptozan for maximum effectiveness?</h3>
                                    </div>
                                </button>
                            </h2>
                            <div id="collapse8" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="detail">
                                        <p>For the best results, take the recommended dosage daily, preferably with water. Consistency is key to seeing optimal benefits.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Faq End -->

    <!-- Offers Start -->
    <section class="offers-wrp" style="background-color: var(--sky);">
        <div class="container">
            <div class="offers-main">
                <div class="section-title">
                    <h2>Claim Your Discounted <span>LEPTOZAN</span> Now <span>While Supplies Last!</span></h2>
                </div>
                <div class="offers-section">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-4 order-3 order-md-1">
                            <div class="offers-block">
                                <div class="offers-block-title">
                                    <div class="section-title">
                                        <h2>2 for You</h2>
                                    </div>
                                    <div class="large-detail">
                                        <p>60 Days, 2 Bottles</p>
                                    </div>
                                </div>
                                <div class="offers-inner">
                                    <div class="offers-product-img">
                                        <figure>
                                            <img src="/images/offers-img-1.png" alt="offers-img" class="img-fluid">
                                        </figure>
                                    </div>
                                    <div class="offers-product-price">
                                        <h3><b>$</b><span>79</span><small>Per Bottle</small></h3>
                                    </div>
                                    <div class="common-list">
                                        <ul>
                                            <li>You save $200!</li>
                                            <li>180 Days Guarantee</li>
                                        </ul>
                                    </div>
                                    <div class="offers-btn">
                                        <a href="/upsell-oto-01/?sku=lepto-us-01" class="btn btn-yellow">BUY NOW <span>Basic Offer!</span></a>
                                    </div>
                                    <div class="payments-block">
                                        <ul>
                                            <li>
                                                <figure>
                                                    <img src="/images/Mastercard.svg" alt="Mastercard" class="img-fluid">
                                                </figure>
                                            </li>
                                            <li>
                                                <figure>
                                                    <img src="/images/visa-logo.svg" alt="visa" class="img-fluid">
                                                </figure>
                                            </li>
                                            <li>
                                                <figure>
                                                    <img src="/images/amex.svg" alt="amex" class="img-fluid">
                                                </figure>
                                            </li>
                                            <li>
                                                <figure>
                                                    <img src="/images/discover.svg" alt="discover" class="img-fluid">
                                                </figure>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="offers-total">
                                        <p>TOTAL: <span>$358</span> <strong>$158</strong></p>
                                        <p>+ 9.95 Shipping</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-4 order-1 order-md-2">
                            <div class="offers-block best-offer-block">
                                <div class="offers-block-title">
                                    <div class="section-title">
                                        <h2>Best Offer!</h2>
                                    </div>
                                    <div class="large-detail">
                                        <p>180 Days, 6 Bottles</p>
                                    </div>
                                </div>
                                <div class="offers-inner">
                                    <div class="offers-product-img">
                                        <figure>
                                            <img src="/images/offers-img-2.png" alt="offers-img" class="img-fluid">
                                        </figure>
                                    </div>
                                    <div class="offers-product-price">
                                        <h3><b>$</b><span>49</span><small>Per Bottle</small></h3>
                                    </div>
                                    <div class="common-list">
                                        <ul>
                                            <li>You save $780!</li>
                                            <li>Biggest Discount</li>
                                            <li>180 Days Guarantee</li>
                                        </ul>
                                    </div>
                                    <div class="offers-btn">
                                        <a href="#" class="btn btn-orange">BUY NOW <span>Best Offer!</span></a>
                                    </div>
                                    <div class="payments-block">
                                        <ul>
                                            <li>
                                                <figure>
                                                    <img src="/images/Mastercard.svg" alt="Mastercard" class="img-fluid">
                                                </figure>
                                            </li>
                                            <li>
                                                <figure>
                                                    <img src="/images/visa-logo.svg" alt="visa" class="img-fluid">
                                                </figure>
                                            </li>
                                            <li>
                                                <figure>
                                                    <img src="/images/amex.svg" alt="amex" class="img-fluid">
                                                </figure>
                                            </li>
                                            <li>
                                                <figure>
                                                    <img src="/images/discover.svg" alt="discover" class="img-fluid">
                                                </figure>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="offers-total">
                                        <p>TOTAL: <span>$1074</span> <strong>$294</strong></p>
                                        <p><span class="free-shipping">Free</span> Shipping</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-4 order-2 order-md-3">
                            <div class="offers-block">
                                <div class="offers-block-title">
                                    <div class="section-title">
                                        <h2>3 for You</h2>
                                    </div>
                                    <div class="large-detail">
                                        <p>90 Days, 3 Bottles</p>
                                    </div>
                                </div>
                                <div class="offers-inner">
                                    <div class="offers-product-img">
                                        <figure>
                                            <img src="/images/offers-img-3.png" alt="offers-img" class="img-fluid">
                                        </figure>
                                    </div>
                                    <div class="offers-product-price">
                                        <h3><b>$</b><span>69</span><small>Per Bottle</small></h3>
                                    </div>
                                    <div class="common-list">
                                        <ul>
                                            <li>You save $360!</li>
                                            <li>180 Days Guarantee</li>
                                        </ul>
                                    </div>
                                    <div class="offers-btn">
                                        <a href="#" class="btn btn-yellow">BUY NOW <span>Good Offer!</span></a>
                                    </div>
                                    <div class="payments-block">
                                        <ul>
                                            <li>
                                                <figure>
                                                    <img src="/images/Mastercard.svg" alt="Mastercard" class="img-fluid">
                                                </figure>
                                            </li>
                                            <li>
                                                <figure>
                                                    <img src="/images/visa-logo.svg" alt="visa" class="img-fluid">
                                                </figure>
                                            </li>
                                            <li>
                                                <figure>
                                                    <img src="/images/amex.svg" alt="amex" class="img-fluid">
                                                </figure>
                                            </li>
                                            <li>
                                                <figure>
                                                    <img src="/images/discover.svg" alt="discover" class="img-fluid">
                                                </figure>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="offers-total">
                                        <p>TOTAL: <span>$537</span> <strong>$207</strong></p>
                                        <p><span class="free-shipping">Free</span> Shipping</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Offers End -->

    <!-- References Start -->
    <section class="references-wrp">
        <div class="container">
            <div class="references-main">
                <div class="row">
                    <div class="col-lg-6 col-xl-6 col-xxl-6">
                        <div class="references-img">
                            <figure>
                                <img src="/images/new/Product.png" alt="reference-img" class="img-fluid">
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6 col-xxl-6">
                        <div class="references-right">
                            <div class="section-title">
                                <h2>Scientific References</h2>
                            </div>
                            <div class="references-slider">
                                <div class="references-item">
                                    <div class="references-details">
                                        <p>1. Sun, X., et al. (2016). <span>The effects of Magnesium on lipid metabolism and body weight in overweight adults. European Journal of Clinical Nutrition, 70(4), 514-518.</span></p>
                                    </div>
                                    <div class="references-details">
                                        <p>2. Goedecke, J. H., et al. (2001). <span>Sodium intake and fat metabolism during low-carb diets. The American Journal of Clinical Nutrition, 73(4), 664-672.</span></p>
                                    </div>
                                    <div class="references-details">
                                        <p>3. El-Khateeb, M. (2020). <span>Determination of metals’ contents in the Dead Sea’s water, mud, and sediments. International Journal of Energy and Water Resources, 4(2), 205–212.</span></p>
                                    </div>
                                    <div class="references-details">
                                        <p>4. Douris, N., et al. (2015). <span>The impact of Calcium and Magnesium on body weight and metabolism. Nature Metabolism, 1(4), 369-378.</span></p>
                                    </div>
                                    <div class="references-details">
                                        <p>5. Portugal-Cohen, M., et al. (2015). <span>Dead Sea Minerals-Induced Positive Stress as an Innovative Resource for Skincare Actives. Journal of Cosmetics, Dermatological Sciences and Applications, 5(1), 11–21.</span></p>
                                    </div>
                                    <div class="references-details">
                                        <p>6. Tremblay, A., et al. (1992). <span>Calcium supplementation and fat oxidation in overweight individuals. International Journal of Obesity, 16(9), 733-738.</span></p>
                                    </div>
                                </div>
                                <div class="references-item">
                                    <div class="references-details">
                                        <p>7. Garcia, D., et al. (2017). <span>The impact of Sodium and Potassium balance on weight control. Journal of Human Nutrition and Dietetics, 30(3), 340-348.</span></p>
                                    </div>
                                    <div class="references-details">
                                        <p>8. Mirmiran, P., et al. (2019). <span>Dietary intake of calcium and weight management: A systematic review. Nutrition Reviews, 77(3), 193-207.</span></p>
                                    </div>
                                    <div class="references-details">
                                        <p>9. Nielsen, F. H., et al. (2004). <span>Magnesium deficiency and its association with obesity-related inflammation. Current Opinion in Lipidology, 15(1), 1-6.</span></p>
                                    </div>
                                    <div class="references-details">
                                        <p>10. Shani, J., et al. (1991). <span>Skin penetration of minerals from the Dead Sea. International Journal of Dermatology, 30(8), 582–586.</span></p>
                                    </div>
                                    <div class="references-details">
                                        <p>11. Carbajo-Pescador, S., et al. (2014). <span>BHB and metabolic regulation: Effects on energy balance. Endocrine Metabolism Journal, 18(1), 29-42.</span></p>
                                    </div>
                                    <div class="references-details">
                                        <p>12. Resnick, L. M., et al. (1993). <span>Intracellular Magnesium and insulin resistance in obesity. Hypertension, 21(5), 619-626.</span></p>
                                    </div>
                                </div>

                                <div class="references-item">
                                    <div class="references-details">
                                        <p>13. Wu, T., et al. (2019). <span>The role of Magnesium in adipose tissue regulation and thermogenesis. Molecular Metabolism, 22, 91-100.</span></p>
                                    </div>
                                    <div class="references-details">
                                        <p>14. Proksch, E., et al. (2005). <span>The effects of Dead Sea mineral baths on skin barrier function and hydration. International Journal of Dermatology, 44(2), 151-157.</span></p>
                                    </div>
                                    <div class="references-details">
                                        <p>15. Costill, D. L., et al. (1988). <span>Sodium and fluid balance in endurance sports: Impact on metabolism. Journal of Applied Physiology, 64(1), 125-132.</span></p>
                                    </div>
                                    <div class="references-details">
                                        <p>16. Soares, M. J., et al. (2012). <span>Calcium and weight regulation: How does it work? Obesity Reviews, 13(1), 7-16.</span></p>
                                    </div>
                                    <div class="references-details">
                                        <p>17. Alam, S., et al. (2015). <span>The role of Magnesium in obesity and metabolic syndrome. Journal of Obesity & Weight Loss Therapy, 5(1), 100-117.</span></p>
                                    </div>
                                    <div class="references-details">
                                        <p>18. Ma’or, Z., et al. (2006). <span>Anti-inflammatory effects of Dead Sea minerals on human skin cells. Skin Pharmacology and Physiology, 19(4), 217-225.</span></p>
                                    </div>
                                </div>
                                <div class="references-item">
                                    <div class="references-details">
                                        <p>19. Newell, C., et al. (2016). <span>Exogenous ketones in metabolic diseases: Effects on weight and insulin sensitivity. Frontiers in Physiology, 7, 345.</span></p>
                                    </div>
                                    <div class="references-details">
                                        <p>20. Olesen, J., et al. (2013). <span>The effects of exogenous ketones on weight loss and metabolism. Metabolism: Clinical and Experimental, 62(8), 1183-1189.</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- References End -->

</div>
<!-- content end -->

<!-- footer start -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/components/footer.php'; ?>
<!-- footer end -->

<!-- scripts start -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/components/scripts.php'; ?>
<script src="/js/custom/index.js?v=<?php echo time(); ?>"></script>
<!-- scripts end -->

</body>
</html>