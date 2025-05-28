<?php include "../include/config.php"; ?>
<!doctype html>
<html lang="en">


<head>
    <title>Chillinote: Best Project & Task Management Software</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="Your user-friendly project management tool is Chillinote. Organize work, effectively manage projects, and increase team output. An excellent tool for project management.">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="keywords"
        content="Mobile app development, iOS app development, Android app development, custom software solutions, app development company, digital transformation, mobile solutions, business apps, technology solutions, Sagar Tech Technical Solutions.">
    <!-- Favicon -->
    <link rel="shortcut icon" href="../images/logoonly.jpg" />
    <link rel="canonical" href="https://sagartech.co.in/our-products/project-management-software-in-india">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Chillinote: Best Project & Task Management Software">
    <meta property="og:description"
        content="Your user-friendly project management tool is Chillinote. Organize work, effectively manage projects, and increase team output. An excellent tool for project management.">
    <meta property="og:url" content="https://sagartech.co.in/our-products/project-management-software-in-india">
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
    :root {
        --chill-primary: #b3000f;
        --chill-secondary: #0056b3;
        --chill-bg: #f5f5f5;
        --chill-white: #ffffff;
        --chill-dark: #333333;
    }

    .chillinote-section {
        display: flex;
        width: 100%;
        height: 80vh;
        align-items: center;
        padding: 40px 5%;
        position: relative;
        overflow: hidden;
        background:
            repeating-linear-gradient(0deg,
                #f3f3f3,
                #f2f2f2 2px,
                #f3f3f3 2px,
                #f2f2f2 4px),
            linear-gradient(to right, #f3f1e7 0%, #e9e6da 100%);
        background-blend-mode: multiply;
        /* background: linear-gradient(60deg, #f2f2f2, #f9f9f9); */
    }


    .chillinote-section::after {
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        width: 50%;
        height: 100%;
        background:
            repeating-linear-gradient(0deg,
                #f3f3f3,
                #f2f2f2 2px,
                #f3f3f3 2px,
                #f2f2f2 4px),
            linear-gradient(to right, #f3f1e7, #d2ceba);
        clip-path: polygon(0 0, 100% 0%, 100% 100%, 0% 100%);
        z-index: 1;
        pointer-events: none;

    }



    .chillinote-content {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        flex-wrap: wrap;
        gap: 30px;

    }

    .chillinote-info {
        flex: 1;
        max-width: 500px;
    }

    .chillinote-subtitle {
        text-transform: uppercase;
        color: #000;
        font-weight: 700;
        font-size: 24px;
        opacity: 0.9;
        letter-spacing: 1px;

        margin-bottom: 10px;
    }

    .chillinote-title {
        font-size: 45px;
        font-weight: 500;
        line-height: 1.2;
        margin-bottom: 20px;
        color: #000;
    }

    .chillinote-description {
        font-size: 16px;
        color: #555;
        margin-bottom: 30px;
    }

    .chillinote-buttons {
        display: flex;
        gap: 15px;
    }

    .chill-btn {
        padding: 10px 20px;
        font-size: 14px;
        font-weight: 600;
        border-radius: 4px !important;
        border: none;
        cursor: pointer;
        transition: all 0.3s;
        z-index: 1;
        overflow: hidden;
        position: relative;
        text-transform: uppercase;

    }

    .chill-btn::before {
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


    .chill-primary {
        background: var(--chill-primary);
        color: var(--chill-white);
    }

    .chill-primary:hover {
        background: var(--chill-secondary);
    }

    .chill-secondary {
        background: transparent;
        border: 1px solid var(--chill-dark);
        color: var(--chill-dark);
    }

    .chill-secondary:hover {
        background: rgba(0, 0, 0, 0.05);
    }

    .chillinote-image {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
    }

    .chillinote-image img {
        max-width: 100%;
        height: 100%;
        border-radius: 10px;
        filter: drop-shadow(0 10px 15px rgba(0, 0, 0, 0.1));
        z-index: 4;
    }

    /* Benefits Section */
    .chillinote-benefits {
        background: var(--chill-white);
        padding: 80px 5%;
    }

    .chillinote-benefit-wrapper {
        max-width: 1200px;
        margin: auto;
    }

    .chillinote-benefit-header {
        text-align: center;
        margin-bottom: 50px;
    }

    .chillinote-benefit-header h2 {
        font-size: 32px;
        color: var(--chill-dark);
        margin-bottom: 10px;
        font-weight: 600;
    }

    .chillinote-benefit-header p {
        font-size: 16px;
        color: #666;
    }

    .chillinote-benefit-columns {
        display: flex;
        justify-content: space-between;
        gap: 30px;
        flex-wrap: wrap;
    }

    .chillinote-column {
        flex: 1;
        min-width: 280px;
    }

    .chillinote-benefit {
        display: flex;
        align-items: flex-start;
        margin-bottom: 30px;
        gap: 12px;
    }

    .icon-circle {
        color: var(--chill-primary);
        font-size: 18px;
        margin-top: 5px;
    }

    .chillinote-benefit h3 {
        font-size: 18px;
        color: var(--chill-dark);
        font-weight: 600;

        margin-bottom: 5px;
    }

    .chillinote-benefit p {
        font-size: 14px;
        color: #666;
    }

    .chillinote-image2 {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px;
        padding: 20px;
    }

    .chillinote-image2 img {
        width: 100%;
        max-width: 100%;
        border-radius: 10px;
    }

    @media (max-width: 768px) {

        .chillinote-section {
            padding: 30px 20px;
            height: 100%;
        }

        .chillinote-content {
            flex-direction: column;
            text-align: center;

        }

        .chillinote-info {
            order: 1;
            z-index: 4;
        }

        .chillinote-image {
            order: 0;
            margin-bottom: 30px;
        }

        .chillinote-image img {
            max-height: 250px;
        }

        .chillinote-title {
            font-size: 28px;
        }

        .chillinote-buttons {

            justify-content: center;
        }

        .chillinote-description {
            margin-left: auto;
            margin-right: auto;
        }

        .chillinote-benefit-columns {
            flex-direction: column;
            align-items: center;
        }
    }

    /* sticky social icons css */
    .stickysocialicon {
        position: fixed;
        top: 50%;
        right: 0;
        transform: translateY(-50%);
        z-index: 9999;
        background-color: white;
        /* Optional: Add background for contrast */
        padding: 5px;
        border-radius: 8px 0 0 8px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
    }

    .stickysocialicon ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .stickysocialicon ul li {
        margin: 10px 0;
        text-align: center;
    }

    .stickysocialicon ul li a svg {
        color: #000;
        /* Change as needed */
        transition: transform 0.2s ease, color 0.2s ease;
    }

    .stickysocialicon ul li a:hover svg {
        transform: scale(1.2);
        color: #007bff;
        /* Optional hover color */
    }

    /* Optional: Adjust size for mobile */
    @media (max-width: 600px) {
        .stickysocialicon {
            top: auto;
            bottom: 35%;
            right: 0px;
            transform: none;
        }

        .stickysocialicon ul li {
            margin: 8px 0;
        }

        .stickysocialicon ul li a svg {
            width: 20px;
            height: 20px;
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

    <section class="chillinote-section">
        <div class="chillinote-content">
            <div class="chillinote-info">
                <!-- <p class="chillinote-subtitle">#2</p> -->
                <h1 class="chillinote-title">Chillinote: Your Sanity-Saver for Projects and Tasks</h1>
                <p class="chillinote-description">
                    Feeling overwhelmed by sticky notes, scattered ideas, and endless to-do lists? Imagine a world where
                    clarity reigns, deadlines are met with a smile, and your team is effortlessly in sync. Welcome to
                    Chillinote by Sagar Tech—the refreshingly simple project management software designed to bring calm
                    and control back to your work.
                </p>
                <div class="chillinote-buttons">
                    <button class="chill-btn chill-primary"
                        onclick="window.open('https://chillinote.com/', '_blank')">Explore Now</button>
                    <button class="chill-btn chill-secondary "
                        onclick="window.open('https://sagartech.co.in/contact', '_blank')">Contact Us</button>
                </div>
            </div>
            <div class="chillinote-image">
                <img src="../product-images/chillinote-mockup.png" alt="main_image1">
            </div>
        </div>
    </section>

    <section class="chillinote-benefits">
        <div class="chillinote-benefit-wrapper">
            <div class="chillinote-benefit-header">
                <h2>Why Chillinote Could Be Your Best Project Management Tool </h2>
                <p>We've put a lot of effort into developing project management software that genuinely recognizes your
                    requirements. Chillinote differentiates itself by emphasizing what really counts: facilitating the
                    smooth operation of your business.
                </p>
            </div>

            <div class="chillinote-benefit-columns">
                <div class="chillinote-column">
                    <div class="chillinote-benefit">
                        <div class="icon-circle"><i class="fa-solid fa-check"></i></div>
                        <div>
                            <h3>Effortless Task Management</h3>
                            <p>Easily create, assign, and track tasks with a clear, visual interface for quick
                                oversight.</p>
                        </div>
                    </div>
                    <div class="chillinote-benefit">
                        <div class="icon-circle"><i class="fa-solid fa-check"></i></div>
                        <div>
                            <h3>Centralized Clarity</h3>
                            <p>All project details, files, and communications are in one organized hub.</p>
                        </div>
                    </div>
                    <div class="chillinote-benefit">
                        <div class="icon-circle"><i class="fa-solid fa-check"></i></div>
                        <div>
                            <h3>Collaborate with Ease</h3>
                            <p>Seamlessly share updates and feedback to keep everyone on the same page.</p>
                        </div>
                    </div>
                </div>

                <div class="chillinote-image2">
                    <img src="../product-images/image31.png" alt="Chillinote UI Screens">
                </div>

                <div class="chillinote-column">
                    <div class="chillinote-benefit">
                        <div class="icon-circle"><i class="fa-solid fa-check"></i></div>
                        <div>
                            <h3>Intuitive & User-Friendly</h3>
                            <p>Simple design lets anyone jump in and start organizing projects in minutes.</p>
                        </div>
                    </div>
                    <div class="chillinote-benefit">
                        <div class="icon-circle"><i class="fa-solid fa-check"></i></div>
                        <div>
                            <h3>Scalable for All Needs</h3>
                            <p>Adapts flexibly from personal projects to complex team initiatives with the best project
                                management software.</p>
                        </div>
                    </div>
                    <div class="chillinote-benefit">
                        <div class="icon-circle"><i class="fa-solid fa-check"></i></div>
                        <div>
                            <h3>Save Time & Boost Productivity</h3>
                            <p>Streamline workflows to focus more on work and less on task management.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="stickysocialicon">
        <ul>
            <li>
                <a href="https://www.facebook.com/sagartechwebdevelopersmumbai" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="#FF0808"
                        stroke="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-facebook">
                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                    </svg>
                </a>
            </li>
            <li>
                <a href="https://www.instagram.com/chilli_note?igsh=bGtsanNjYjhyamRk" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                        stroke="#FF0808" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-instagram">
                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5" />
                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                        <line x1="17.5" x2="17.51" y1="6.5" y2="6.5" />
                    </svg>
                </a>
            </li>
            <li>
                <a href="https://www.linkedin.com/company/sagar-tech-technical-solutions" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="#FF0808"
                        stroke="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-linkedin">
                        <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" />
                        <rect width="4" height="12" x="2" y="9" />
                        <circle cx="4" cy="4" r="2" />
                    </svg>
                </a>
            </li>
            <li>
                <a href="https://www.youtube.com/channel/UCRVxoCbFJAQdqo6U5bgFxog" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="#FF0808" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-youtube">
                        <path
                            d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17" />
                        <path d="m10 15 5-3-5-3z" />
                    </svg>
                </a>
            </li>
        </ul>
    </div>

    <?php
    include("../include/footer.php");
    ?>

    <div id="back-to-top">
        <a class="top" id="top" href="#top"> <i class="ion-ios-arrow-up"></i> </a>
    </div>


</body>






</html>