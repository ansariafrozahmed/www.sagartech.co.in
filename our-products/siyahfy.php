<?php include "../include/config.php"; ?>
<!doctype html>
<html lang="en">


<head>
    <title>Products - Sagar Tech Technical Solutions</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sagar Tech Technical Solutions is a trusted provider of mobile app development services, specializing in delivering high-quality, user-centric solutions for iOS and Android platforms to enhance business performance and digital engagement.">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="keywords" content="Mobile app development, iOS app development, Android app development, custom software solutions, app development company, digital transformation, mobile solutions, business apps, technology solutions, Sagar Tech Technical Solutions.">
    <!-- Favicon -->
    <link rel="shortcut icon" href="../images/logoonly.jpg" />
    <link rel="canonical" href="https://sagartech.co.in/our-products">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="About - Sagar Tech Technical Solutions">
    <meta property="og:description"
        content="Sagar Tech Technical Solutions is a trusted provider of mobile app development services, specializing in delivering high-quality, user-centric solutions for iOS and Android platforms to enhance business performance and digital engagement.">
    <meta property="og:url" content="https://sagartech.co.in/our-products">
    <meta property="og:site_name" content="Sagar Tech - Technical Solution">
    <meta property="og:image" content="https://sagartech.co.in/images/sagartech1.webp">
    <!-- bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- main style -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!-- responsive -->
    <link href="css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="css/newcssresponsive.css" rel="stylesheet" type="text/css" />
    <!-- custom -->
    <link href="css/custom.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-156939866-1"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-156939866-1">
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-156939866-1');
    </script>
</head>



<style>
    /* Variables */
    :root {
        --primary-green: #8bc34a;
        --dark-green: #689f38;
        --light-green: #aed581;
        --text-light: #ffffff;
        --text-dark: #333333;
        --button-dark: #b3000f;
    }


    .product-section {
        display: flex;
        align-items: center;
        padding: 40px 5%;
        position: relative;
        overflow: hidden;
        background:
            repeating-linear-gradient(0deg,
                #1a1a1a,
                #1a1a1a 2px,
                #111 2px,
                #111 4px),
            linear-gradient(to right, #f3f1e7 0%, #e9e6da 100%);
        background-blend-mode: multiply;
        background: linear-gradient(190deg, #000000, #222222);

    }


    .product-section::after {
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        width: 50%;
        height: 100%;
        background:
            repeating-linear-gradient(0deg,
                #1a1a1a,
                #1a1a1a 2px,
                #111 2px,
                #111 4px),
            linear-gradient(to right, #f3f1e7, #e9e6da);
        clip-path: polygon(0 0, 100% 0%, 100% 100%, 0% 100%);
        z-index: 1;
        pointer-events: none;

    }






    .product-content {
        display: flex;
        width: 100%;
        height: 100%;
        max-width: 1200px;
        margin: 0 auto;
        align-items: center;
        justify-content: space-between;
        gap: 30px;
    }

    .product-info {
        flex: 1;
        color: var(--text-light);
        max-width: 500px;
    }

    .product-subtitle {
        font-size: 24px;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 10px;
        opacity: 0.9;
    }

    .product-title {
        font-size: 45px;
        font-weight: 500;
        line-height: 1.2;
        margin-bottom: 20px;
        color: #ffffff;
    }

    .product-description {
        font-size: 16px;
        margin-bottom: 30px;
        opacity: 0.7;
        max-width: 450px;
        font-weight: 400;
    }

    .product-buttons {
        display: flex;
        gap: 15px;
    }

    .btn {
        padding: 10px 24px !important;
        font-size: 14px;
        font-weight: 600;
        text-transform: uppercase;
        cursor: pointer;
        transition: all 0.3s ease;
        border: none;
        border-radius: 4px !important;
        z-index: 1;
        overflow: hidden;
        position: relative;
    }

    .btn::before {
        content: "";
        position: absolute;
        top: 0;
        left: -100%;
        height: 100%;
        width: 100%;
        background: linear-gradient(120deg, transparent, rgba(255, 255, 255, 0.8), transparent);
        animation: shine-effect 4s ease-in-out infinite;
        z-index: 2;
    }

    @keyframes shine-effect {
        0% {
            left: -100%;
            opacity: 1;
        }

        12% {
            left: 100%;
            opacity: 0.4;
        }

        100% {
            left: 100%;
            opacity: 0;
        }
    }



    .btn-primary {
        background-color: var(--button-dark) !important;
        color: var(--text-light);
    }

    .btn-primary:hover {
        background-color: #000;
    }

    .btn-secondary {
        background-color: transparent;
        color: var(--button-dark) !important;
        border: 1px solid var(--text-light);
    }

    .btn-secondary:hover {
        background-color: rgba(255, 255, 255, 0.1);
    }

    .product-image {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        /* border: 1px solid wheat; */


    }

    .product-image img {
        max-width: 100%;
        height: 100%;
        border-radius: 10px;
        filter: drop-shadow(0 10px 15px rgba(0, 0, 0, 0.1));
        z-index: 4;
    }

    /* Responsive styles */
    @media (max-width: 768px) {
        .product-content {
            flex-direction: column;
            text-align: center;
        }

        .product-info {
            order: 1;
            z-index: 4;
        }

        .product-image {
            order: 0;
            margin-bottom: 30px;
        }

        .product-title {
            font-size: 28px;
        }

        .product-buttons {
            justify-content: center;
        }

        .product-description {
            margin-left: auto;
            margin-right: auto;
        }
    }

    @media (max-width: 480px) {
        .product-section {
            padding: 30px 20px;
        }

        .product-title {
            font-size: 24px;
        }

        .product-buttons {
            flex-direction: column;
            width: 100%;
            max-width: 200px;
            margin: 0 auto;
        }

        .product-image img {
            max-height: 250px;
        }
    }


    .benefits-section {
        width: 100%;
        padding: 60px 20px;
        /* background: linear-gradient(135deg, #000000, #222222); */
    }

    .benefit-container {
        max-width: 1200px;
        margin: 0 auto;
    }

    /* Header */
    .benefit-header {
        text-align: center;
        margin-bottom: 50px;
    }

    .benefit-header h2 {
        font-size: 32px;
        font-weight: 700;
        margin-bottom: 10px;
        color: black;
    }

    .benefit-header p {
        font-size: 16px;
        color: black;
        max-width: 700px;
        margin: 0 auto;
    }

    /* Benefits Container */
    .benefits-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: center;
    }

    /* Benefits Columns */
    .benefits-column {
        flex: 1;
        min-width: 280px;
    }

    /* Product Image */
    .product-image2 {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px;
        width: 100%;
    }

    .product-image2 img {
        max-width: 100%;
        width: 100%;
        height: 100%;
        border-radius: 10px;
    }

    /* Benefit Item */
    .benefit-item {
        display: flex;
        align-items: flex-start;
        margin-bottom: 30px;
    }

    .check-icon {
        flex-shrink: 0;
        width: 24px;
        height: 24px;
        margin-right: 12px;
        margin-top: 3px;
    }

    .check-icon i {
        color: var(--button-dark);
        /* Emerald green color */
        font-size: 18px;
    }

    .benefit-content h3 {
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 5px;
        color: #3b3b3b;
    }

    .benefit-content p {
        font-size: 14px;
        color: #525252;
    }

    /* Responsive Styles */
    @media (max-width: 992px) {
        .benefits-container {
            flex-direction: column;
        }

        .benefits-column {
            width: 100%;
            margin-bottom: 30px;
        }

        .left-column {
            order: 2;
        }

        .product-image2 {
            order: 1;
            /* margin-bottom: 40px; */
        }

        .right-column {
            order: 3;
        }

        .benefit-item {
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
        }
    }

    @media (max-width: 576px) {
        .benefit-header h2 {
            font-size: 24px;
        }

        .benefit-header p {
            font-size: 14px;
        }

        .benefit-content h3 {
            font-size: 16px;
        }

        .benefit-content p {
            font-size: 13px;
        }

        .benefits-section {
            padding: 40px 15px;
        }
    }
</style>



<body>
    <!-- <div id="loading">
        <div id="loading-center">
            <img src="../images/logoonly.jpg" alt="loder">
        </div>
    </div> -->
    <?php
    $page = 'portfolio';
    include("../include/newHeader.php");
    ?>

    <section class="product-section">
        <div class="product-content">
            <div class="product-info">
                <!-- <p class="product-subtitle">#1</p> -->
                <h1 class="product-title">Siyahfy Software One Ecommerce Solution</h1>
                <p class="product-description">
                    Siyahfy is a modern digital publishing platform built to empower creators, educators, and businesses. Whether you're sharing articles, research, or educational content, Siyafy provides the tools you need to create, manage, and publish effortlessly.

                </p>
                <div class="product-buttons">
                    <button class="btn btn-primary" onclick="window.open('https://siyahfy.com/', '_blank')">Explore Now</button>


                    <button class="btn btn-secondary" onclick="window.open('https://sagartech.co.in/contact', '_blank')">Contact Us</button>

                </div>
            </div>
            <div class="product-image">
                <img src="../product-images/image51.png" alt="main_image1">
            </div>
        </div>
    </section>


    <section class="benefits-section">
        <div class="benefit-container">
            <div class="benefit-header">
                <h2>Why Businesses Choose Siyahfy</h2>
                <p>Empower your online store with the tools, flexibility, and performance you need to grow without limits.</p>

            </div>

            <div class="benefits-container">
                <!-- Left Benefits Column -->
                <div class="benefits-column left-column">
                    <div class="benefit-item">
                        <div class="check-icon">
                            <i class="fa-solid fa-check"></i>
                        </div>
                        <div class="benefit-content">
                            <h3>Easy Store Setup</h3>
                            <p>Launch your store in minutes with intuitive tools and zero coding required</p>
                        </div>
                    </div>

                    <div class="benefit-item">
                        <div class="check-icon">
                            <i class="fa-solid fa-check"></i>
                        </div>
                        <div class="benefit-content">
                            <h3>Customizable Design</h3>
                            <p>Tailor every part of your store to match your brand’s unique identity</p>
                        </div>
                    </div>

                    <div class="benefit-item">
                        <div class="check-icon">
                            <i class="fa-solid fa-check"></i>
                        </div>
                        <div class="benefit-content">
                            <h3>Built-in Marketing</h3>
                            <p>Boost your reach with integrated SEO, email campaigns, and analytics</p>
                        </div>
                    </div>
                </div>

                <!-- Product Image - Center -->
                <div class="product-image2">
                    <img src="../product-images/image1.png" alt="Natural Hair Shampoo Bottles">
                </div>

                <!-- Right Benefits Column -->
                <div class="benefits-column right-column">
                    <div class="benefit-item">
                        <div class="check-icon">
                            <i class="fa-solid fa-check"></i>
                        </div>
                        <div class="benefit-content">
                            <h3>Secure & Scalable</h3>
                            <p>Enterprise-grade security and performance you can count on</p>
                        </div>
                    </div>

                    <div class="benefit-item">
                        <div class="check-icon">
                            <i class="fa-solid fa-check"></i>
                        </div>
                        <div class="benefit-content">
                            <h3>Multi-Channel Selling</h3>
                            <p>Sell on your website, social media, and marketplaces — all from one place</p>
                        </div>
                    </div>

                    <div class="benefit-item">
                        <div class="check-icon">
                            <i class="fa-solid fa-check"></i>
                        </div>
                        <div class="benefit-content">
                            <h3>24/7 Support</h3>
                            <p>Our expert team is always here to help, whenever you need us</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <?php
    include("../include/footer.php");
    ?>

    <div id="back-to-top">
        <a class="top" id="top" href="#top"> <i class="ion-ios-arrow-up"></i> </a>
    </div>


</body>






</html>