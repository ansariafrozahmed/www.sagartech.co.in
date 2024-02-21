<?php
header("Access-Control-Allow-Origin: *");
include "include/config.php";

?>
<!doctype html>
<html lang="en">

<head>
    <title>India’s No. 1 Bulk SMS Service Provider and WhatsApp Bulk Message Provider</title>
    <!--<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="As the best bulk SMS service provider in India, we also provide WhatsApp bulk messages, which help businesses gain new clients and communicate with existing clients.">
    <meta name="keywords" content="bulk sms service provider">

    <meta property="og:type" content="website">
    <meta property="og:title" content="India’s No. 1 Bulk SMS Service Provider and WhatsApp Bulk Message Provider">
    <meta property="og:url" content="https://sagartech.co.in/bulk-sms-service">
    <meta property="og:image" content="https://sagartech.co.in/images/bg/bulk-sms-logo.png">
    <meta property="og:description" content="As the best bulk SMS service provider in India, we also provide WhatsApp bulk messages, which help businesses gain new clients and communicate with existing clients.">
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/logoonly.jpg" />
    <!-- bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- main style -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!-- responsive -->
    <link href="css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="css/newcssresponsive.css" rel="stylesheet" type="text/css" />
    <!-- custom -->
    <link href="css/custom.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/index.css" type="text/css">
    <link rel="stylesheet" href="css/bulk-service.css">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-156939866-1"></script>
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
    .herosectionnew {
        position: relative;
        padding: 70px 60px;
        overflow: hidden;
        /* background-image: url("images/bg/bulksms-slider-img.jpg"); */
        background-position: left;
        background-repeat: no-repeat;
        background-size: cover;
        color: white;
    }

    .herosectionnew h1 {
        width: 50%;
        line-height: normal;
        font-size: 30px;
        color: white;
        font-weight: 600;
    }

    .herobreadrumb {
        display: flex;
        font-weight: 600;
        gap: 5px;
        margin: 5px 0px;
        align-items: center;
    }

    .herosectionpara {
        width: 40%;
        color: white;
        margin-top: 10px;
    }

    .herobuttonsnew {
        display: flex;
        gap: 10px;
        align-items: center;
        justify-content: start;
    }

    .button {
        background-color: red;
        color: white;
        padding: 8px 30px;
        border-radius: 10px;
        border: 1px solid red;
    }

    .button:hover {
        background-color: white;
        color: red !important;
        border: 1px solid red;
    }

    @media only screen and (min-width: 768px) and (max-width: 1024px) {
        .herosectionpara {
            width: 100%;
            line-height: normal;
            font-size: 13px;
            margin-top: 10px;
        }

        .herosectionnew h1 {
            font-size: 25px;
            width: 100%;
            line-height: normal;
            font-weight: 600;
        }
    }

    @media only screen and (max-width: 767px) {
        .herosectionnew {
            padding: 60px 20px;
        }

        .herosectionnew h1 {
            font-size: 25px;
            width: 100%;
            line-height: normal;
            font-weight: 600;
        }

        .herobreadrumb {
            font-size: 13px;
        }

        .herosectionpara {
            width: 100%;
            line-height: normal;
            font-size: 13px;
            margin-top: 10px;
        }

        .herobuttonsnew {
            display: flex;
            gap: 5px;
            align-items: center;
            justify-content: start;
        }

        .button {
            background-color: red;
            color: white;
            padding: 8px 20px;
            border-radius: 10px;
            border: 1px solid red;
        }

        .button:hover {
            background-color: white;
            color: red;
            border: 1px solid red;
        }
    }

    /*-------------Accordian-----------------*/

    h3 {
        text-align: center;
        margin: 1em 0;
        font-weight: 700;
        font-size: 50px;
        color: #212121;
    }

    .accordion {
        max-width: 70%;
        margin: 0 auto;
        padding-bottom: 50px;
    }

    .accordion-item {
        border-top: 1px solid #c5c5c5;
        color: #333;
    }

    .accordion-item h2 {
        padding: 15px;
        font-size: 20px;
        line-height: normal;
        font-weight: 500;
        margin: 0;
        cursor: pointer;
    }

    .accordion-content {
        max-height: 0;
        /* Set a default max-height, but don't display it */
        overflow: hidden;
        /* Hide the content */
        transition: max-height 0.4s ease-out;
        /* Add a transition effect when sliding down (and up) the content */
        padding: 0 1em;
    }

    .accordion-content p {
        padding: 1em 0;
        font-size: 16px;
        color: gray;
        margin: 0;
    }

    /* Add this class to .accordion-content when the accordion item is active/open */
    .accordion-content.active {
        max-height: auto;
        /* Adjust as needed */
    }

    /*adding the + and - signs*/
    .accordion-item h2 {
        position: relative;
        padding-right: 30px;
        /* Adjust as needed */
    }

    .accordion-item h2::before {
        content: "+";
        color: #8f060f;
        position: absolute;
        right: 10px;
        /* Adjust as needed */
    }

    .accordion-item.active h2::before {
        content: "-";
    }

    /* For mobile screens */
    @media (max-width: 767px) {
        .accordion {
            max-width: 100vw;
            margin: 0 auto;
        }

        .accordion-item h2 {
            padding: 20px;
            font-size: 16px;
            line-height: normal;
            margin: 0;
            cursor: pointer;
        }

        .accordion-content p {
            padding: 1em 0;
            font-size: 15px;
            margin: 0;
            line-height: normal;
        }
    }

    /* Main-Content */

    .main-content {
        display: flex;
        padding: 50px;
        gap: 100px;
        width: 100%;
    }

    .main-content .left {
        width: 75%;
    }

    .left-content {
        padding: 30px;
    }

    .left-content h2 {
        font-size: 35px;
        font-weight: 600;
    }

    .left-content h4 {
        font-size: 20px;
        margin-top: 10px;
        font-weight: 600;
    }

    .left-content ul {
        list-style: disc !important;
    }

    .left-content ul {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .left-content ul li {
        display: flex;
        gap: 5px;
    }

    .main-content .right {
        width: 25%;
    }

    .right-content {
        background-color: rgb(241, 241, 241);
        padding: 20px;
        border-radius: 10px;
        position: sticky;
        top: 20px;
    }

    .right-content h2 {
        font-size: 22px;
        font-weight: 500;
    }

    .linkkss ul {
        display: flex;
        flex-direction: column;
        gap: 5px;
    }

    .linkkss ul li {
        display: flex;
        align-items: center;
        /* gap: 3px; */
    }

    .linkkss ul li:hover {
        color: red;
    }

    .why-content {
        padding: 50px;
        text-align: center;
        background-color: rgb(241, 241, 241);
    }

    .why-content .pp {
        text-align: center;
        padding: 5px 150px;
    }

    .why-content h2 {
        font-size: 35px;
        font-weight: 600;
    }

    .why-list {
        padding: 50px;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        gap: 50px;
    }

    .listt {
        text-align: left;
    }

    .listt h4 {
        font-size: 22px;
        font-weight: 600;
        border-bottom: 1px solid red;
    }

    @media only screen and (min-width: 768px) and (max-width: 1024px) {
        .main-content {
            display: flex;
            flex-direction: column;
            padding: 40px;
            gap: 100px;
            width: 100%;
        }

        .why-content .pp {
            text-align: center;
            padding: 5px 50px;
        }

        .main-content .left {
            width: 100%;
        }

        .main-content .right {
            width: 100%;
        }

        .why-list {
            padding: 50px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
        }

        .linkkss ul {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 5px;
        }

    }

    @media (max-width: 767px) {
        .main-content {
            display: flex;
            flex-direction: column;
            padding: 10px;
            gap: 50px;
            width: 100%;
        }

        .main-content .left {
            width: 100%;
        }

        .left-content {
            padding: 10px;
        }

        .left-content h2 {
            font-size: 30px;
            font-weight: 600;
            line-height: normal;
        }

        .left-content h4 {
            font-size: 22px;
            margin-top: 20px;
            font-weight: 600;
        }

        .left-content p {
            text-align: left;
        }

        .left-content ul {
            list-style: disc !important;
        }

        .left-content ul {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .left-content ul li {
            display: flex;
            gap: 5px;
        }

        .main-content .right {
            width: 100%;
        }

        .right-content {
            background-color: rgb(241, 241, 241);
            padding: 20px;
            border-radius: 10px;
            position: sticky;
            top: 20px;
        }

        .right-content h2 {
            font-size: 22px;
            font-weight: 500;
        }

        .linkkss ul {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .linkkss ul li {
            display: flex;
            align-items: center;
            /* gap: 3px; */
        }

        .linkkss ul li:hover {
            color: red;
        }

        .why-content {
            padding: 20px;
            text-align: center;
            background-color: rgb(241, 241, 241);
        }

        .why-content .pp {
            text-align: center;
            padding: 5px;
        }

        .why-content h2 {
            font-size: 35px;
            font-weight: 600;
        }

        .why-list {
            padding: 20px;
            display: grid;
            grid-template-columns: 1fr;
            gap: 20px;
        }

        .listt {
            text-align: left;
        }

        .listt h4 {
            font-size: 22px;
            font-weight: 600;
            border-bottom: 1px solid red;
        }
    }
    .faq-headinggg {
        font-size:40px;
        font-weight:600;
        padding:15px 0px;
    }
</style>

<body>
    <!-- loading -->
    <div id="loading">
        <div id="loading-center">
            <img src="images/logoonly.jpg" alt="loder">
        </div>
    </div>
    <!-- loading End -->
    <!-- HEADER  -->
    <?php
    $page = 'services';
    // include("include/trialh.php");
    include 'include/newHeader.php';
    //include('include/header1.php');
    ?>
    <!-- /HEADER END -->


    <div class="herosectionnew" style="background-image: url('portfolio-images/bulk-sms-banner.jpg')">
        <h1>India’s No. 1 Bulk SMS Service Provider and WhatsApp Bulk Message Provider</h1>
        <ul class="herobreadrumb">
            <li>Home</li>
            <li>/</li>
            <li>Web design company in mumbai</li>
        </ul>
        <p class="herosectionpara">
            In today's fast-paced digital world, effective communication is more critical than ever. At <a class="interlink" href="https://sagartech.co.in/">Sagar Tech Techincal Solutions</a>, we take pride in being your ultimate partner for state-of-the-art communication solutions. Whether you're seeking the expertise of a Bulk SMS Service Provider or in need of a reliable WhatsApp Bulk Message service, rest assured, we've got your back.
        </p>
        <div class="herobuttonsnew">
            <!-- <a href="#" class="button">Quick Enquiry</a> -->
            <?php include 'include/quote.php' ?>
            <!-- <a href="portfolio_old" class="button">View Portfolio</a> -->
        </div>
    </div>


    <div class="main-content">
        <div class="left">
            <div class="left-content">
                <h2>Empowering Your Communication Strategy</h2>
                <h4>1. Bulk SMS Service Provider:</h4>
                <p>Imagine the power of reaching your audience instantly with a simple text message. Sagar Tech, your trusted Bulk SMS Service Provider, turns this into reality. Whether you're running promotions, sending important updates, or actively engaging with your clients, our services ensure that your messages are not only delivered promptly but also make a lasting impact.</p>
                <h4>Why Choose Sagar Tech for Bulk SMS:</h4>
                <ul>
                    <li><img width="25" height="25" src="https://img.icons8.com/fluency/48/checkmark--v1.png" alt="checkmark--v1" />Instant Delivery: Reach your audience in a matter of seconds.</li>
                    <li><img width="25" height="25" src="https://img.icons8.com/fluency/48/checkmark--v1.png" alt="checkmark--v1" />Customizable Sender IDs: Add a personal touch to your messages.</li>
                    <li><img width="25" height="25" src="https://img.icons8.com/fluency/48/checkmark--v1.png" alt="checkmark--v1" />Detailed Analytics: Effortlessly monitor delivery and engagement.</li>
                    <li><img width="25" height="25" src="https://img.icons8.com/fluency/48/checkmark--v1.png" alt="checkmark--v1" />Two-Way Messaging: Foster real-time, interactive communication.</li>
                </ul>
            </div>
            <hr>
            <div class="left-content">
                <h4>2. WhatsApp Bulk Message:</h4>
                <p>Engaging with your audience on a personal level has never been this straightforward. As your dedicated WhatsApp Bulk Message provider, Sagar Tech offers a user-friendly interface, personalized messaging options, scheduling capabilities, and real-time analytics. Connect with your customers where they are most active – on WhatsApp.</p>
                <h4>Why Choose Sagar Tech for WhatsApp Bulk Message:</h4>
                <ul>
                    <li><img width="25" height="25" src="https://img.icons8.com/fluency/48/checkmark--v1.png" alt="checkmark--v1" />Instant Delivery: Reach your audience in a matter of seconds.</li>
                    <li><img width="25" height="25" src="https://img.icons8.com/fluency/48/checkmark--v1.png" alt="checkmark--v1" />Customizable Sender IDs: Add a personal touch to your messages.</li>
                    <li><img width="25" height="25" src="https://img.icons8.com/fluency/48/checkmark--v1.png" alt="checkmark--v1" />Detailed Analytics: Effortlessly monitor delivery and engagement.</li>
                    <li><img width="25" height="25" src="https://img.icons8.com/fluency/48/checkmark--v1.png" alt="checkmark--v1" />Two-Way Messaging: Foster real-time, interactive communication.</li>
                </ul>
            </div>
        </div>
        <div class="right">
            <div class="right-content">
                <h2>Quicks Links</h2>
                <div class="linkkss">
                    <ul>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                            <a href="web-development-company">Web Development</a>
                        </li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                            <a href="mobile-app-development-company">App Development</a>
                        </li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                            <a href="graphic-design-services">Graphic Designing</a>
                        </li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                            <a href="digital-marketing-company">Digital Marketing</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Why Sagartech -->

    <div class="why-content">
        <h2>Why Sagar Tech for Bulk Message?</h2>
        <P class="pp">Transform your communication strategy with Sagar Tech's bulk SMS and WhatsApp bulk message services. Experience the power of effective, reliable, and scalable communication solutions. We are leading <a class="interlink" href="web-development-company">Web Development</a> & <a class="interlink" href="digital-marketing-company">Digital Marketing</a> Company in Mumbai. Get in touch with us today, and let's elevate your messaging strategy together!
        </P>
        <div class="why-list">
            <div class="listt">
                <span>
                    <img src="./images/reliability.png" height="50" alt="bulk sms service provider">
                    <h4>Reliability</h4>
                </span>
                <p>Count on us for dependable and on-time message delivery, be it through SMS or WhatsApp.</p>
            </div>
            <div class="listt">
                <span>
                    <img src="./images/innovation.png" height="50" alt="bulk sms service provider">
                    <h4>Innovation</h4>
                </span>
                <p>Stay ahead in your communication game with our innovative and tailored solutions.</p>
            </div>
            <div class="listt">
                <span>
                    <img src="./images/develop.png" height="50" alt="bulk sms service provider">
                    <h4>Customer-Centric Approach</h4>
                </span>
                <p>Your satisfaction is our top priority. Our dedicated customer support team is here to assist you at every step.</p>
            </div>
            <div class="listt">
                <span>
                    <img src="./images/shield.png" height="50" alt="bulk sms service provider">
                    <h4>Security and Compliance</h4>
                </span>
                <p>Your data's security is paramount to us. We adhere to strict security measures and industry regulations to protect your information.</p>
            </div>
            <div class="listt">
                <span>
                    <img src="./images/scalable.png" height="50" alt="bulk sms service provider">
                    <h4>Scalability</h4>
                </span>
                <p>Whether you're a startup or an enterprise, our services scale to meet your growing communication needs.</p>
            </div>
        </div>
    </div>

    <h3 class="faq-headinggg">FAQs</h3>
    <div class="accordion">
        <div class="accordion-item">
            <h2>What makes Sagar Tech's WhatsApp bulk message sender service unique?</h2>
            <div class="accordion-content">
                <p>Sagar Tech's WhatsApp bulk message sender service stands out for its user-friendly interface, personalized messaging features, and real-time analytics. It provides businesses with a comprehensive solution for effective communication on the widely used WhatsApp platform.
            </div>
        </div>

        <div class="accordion-item">
            <h2>How does Sagar Tech distinguish itself as a bulk SMS service provider?</h2>
            <div class="accordion-content">
                <p>As a bulk SMS service provider, Sagar Tech stands out with its commitment to reliability, scalability, and innovative solutions. Our user-friendly platform and personalized messaging options make us a preferred choice for businesses of all sizes.
            </div>
        </div>

        <div class="accordion-item">
            <h2>Can you elaborate on the term "bulk message services ?</h2>
            <div class="accordion-content">
                <p>Bulk message services" refer to the capability of sending a large volume of messages simultaneously. Sagar Tech's bulk message services cater to various messaging formats, ensuring efficient communication for promotional campaigns, updates, and announcements
            </div>
        </div>

        <div class="accordion-item">
            <h2>How do Sagar Tech's bulk message services benefit businesses</h2>
            <div class="accordion-content">
                <p>Sagar Tech's bulk message services benefit businesses by offering a cost-effective solution for efficient communication. Whether for marketing promotions, transactional updates, or personalized interactions, our services ensure impactful and timely messaging.
            </div>
        </div>

        <div class="accordion-item">
            <h2>Can Sagar Tech's bulk SMS service be personalized for individual users?</h2>
            <div class="accordion-content">
                <p>Absolutely. Sagar Tech's bulk SMS service supports personalized messaging, allowing businesses to customize messages for more engaging and meaningful communication with their audience.
            </div>
        </div>

        <div class="accordion-item">
            <h2>How does Sagar Tech's WhatsApp bulk message sender service contribute to effective marketing?</h2>
            <div class="accordion-content">
                <p>Sagar Tech's WhatsApp bulk message sender service contributes to effective marketing by enabling businesses to engage with their audience on a widely-used platform directly. With personalized messaging and real-time analytics, it becomes a powerful tool for impactful marketing campaigns.
            </div>
        </div>

        <div class="accordion-item">
            <h2>. How can businesses get started with Sagar Tech's bulk SMS and WhatsApp bulk message services?</h2>
            <div class="accordion-content">
                <p>Initiating services with Sagar Tech is simple. Businesses can reach out to our team, and we will guide them through the process, helping them choose the right service for their needs and providing any necessary assistance to set up effective campaigns.
            </div>
        </div>

        <div class="accordion-item">
            <h2>Do you provide ongoing website analytics and performance tracking?</h2>
            <div class="accordion-content">
                <p>We can integrate analytics tools such as Google Analytics to track website performance, user behavior, and other key metrics, providing insights for continuous improvement.
            </div>
        </div>

        <div class="accordion-item">
            <h2>Can you assist with domain registration and hosting services?</h2>
            <div class="accordion-content">
                <p>While our primary focus is on web development, we can provide guidance on domain registration and recommend reliable hosting services to suit your needs.
            </div>
        </div>
    </div>
    <script>
        document.querySelectorAll('.accordion-item h2').forEach((accordionToggle) => {
            accordionToggle.addEventListener('click', () => {
                const accordionItem = accordionToggle.parentNode;
                const accordionContent = accordionToggle.nextElementSibling;

                // If this accordion item is already open, close it.
                if (accordionContent.style.maxHeight) {
                    accordionContent.style.maxHeight = null;
                    accordionItem.classList.remove('active');
                } else {
                    accordionContent.style.maxHeight = accordionContent.scrollHeight + 'px';
                    accordionItem.classList.add('active');
                }
            });
        });
    </script>


    <?php
    include('blogSectionHome.php')
    ?>

    <!--======= Breadcrumb Left With BG Image =======-->
    <!-- <section class="overview-block-ptb iq-over-black-70 jarallax iq-breadcrumb3 text-left iq-font-white" style="background-image: url('images/bg/bulksms-slider-img.jpg'); background-position: center center; background-repeat: no-repeat; background-size: cover;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-12">
                    <h1 class="iq-font-white" style="font-weight: bold;text-align: left;">Bulk SMS Service</h1>
                    <ol class="breadcrumb" style="margin-left: -10px;margin-top: 10px;">
                        <li class="breadcrumb-item"><a href="index"><i class="ion-android-home"></i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Bulk SMS</li>
                    </ol>
                </div>
            </div>
        </div>
    </section> -->
    <!--======= Breadcrumb Left With BG Image =======-->
    <!--=================================
MAIN CONTENT -->
    <!-- <div class="main-content">

        <section class="iq-action-blog pt-2 pb-4  particles-bg" style="margin: 30px 0px 30px 0px;">
            <div class="container">
                <div class="row"> -->
    <!--<div class="col-md-5 col-md-push-7 order-md-12 text-center wow slideInRight" data-wow-duration="1.0s" style="margin-bottom: 40px;">-->
    <!--<img src="images/bulkmap.png" class="img-fluid">-->
    <!--</div>-->
    <!-- <div class="col-md-12 col-md-pull-5 order-md-1 pt-5 wow slideInLeft" data-wow-duration="1.0s">

                        <div class="web-design-heading">
                            <div class="seo-services">
                                <h2 class="iq-tw-6 small-title iq-font-dark">Bulk SMS Service providers in Mumbai</h2>
                                <p> OTP SMS, Transactional SMS, Promotional SMS, Enterprise SMS, Bulk SMS API available at best pricing with Free DLT Registration.
                                    Bulk sms helps you to create a bunch of customize sms to reach out to customers.
                                    The bulk web to SMS service enables you to directly interact with your existing and targeted customers,
                                    and deliver valuable information in the form of an SMS.
                                    The SMSs are among the best online tools for propagating the information,
                                    and have a very high readability rate.
                                    Thus, there are very high chances that when you send a business SMS to your customers, they will get the information.</p> -->

    <!--<p><strong>98% of all texts messages are read. 95% of all texts are read within 3 minutes</strong></p>-->
    <!-- </div> -->
    <!--sms api button disable
                    <h3>Try SMS service</h3>
                    <br>
                    <div class="text-center">
                    <div class="dynamic-button text-center ml-5 wow bounce"  data-wow-duration="1.0s">
                    
                    <a href="#" data-toggle="modal" data-target="#largeModal">Try Me <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                    </div>-->
    <!-- </div>
                    </div>
                    <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content text-center">
                                <div class="modal-header text-center">
                                    <h4 class="modal-title" id="myModalLabel">Sagar Tech SMS Service</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body tex-center">
                                    <h3>Try Now !!!</h3>
                                    <form autocomplete="off" method="POST" action="" class="form form_sent" id="form_sent" name="formLogin" role="form">
                                        <div class="row">
                                            <div class="col-md-8 mx-auto">
                                                <div class="form-group">
                                                    <label for="uname1" class="" style="color:black;">Mobile Number</label>
                                                    <input class="form-control" id="ph_no" placeholder="Enter Mobile Number" name="ph_no" required type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row text-center">
                                            <div class="col-md-10 mx-auto">
                                                <div class="form-group">
                                                    <label style="color:black;">Customize Message</label>
                                                    <input class="form-control" placeholder="Enter Customized Message" id="msg_1" required type="text">
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" id="btn_send" class="btn btn-primary">Send</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade bd-example-modal-sm text-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm text-center">
                            <div class="modal-content text-center">
                                <div class="modal-header text-center">
                                    <h4 class="modal-title" id="myModalLabel">SMS STATUS</h4>
                                </div>
                                <div class="modal-body tex-center">
                                    <h5>Message Sent</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </div>
    </section>
    <section class="iq-action-blog pt-2  particles-bg" style="margin: 0px 0px 70px 0px;">
        <div class="container faqcont">
            <div class="row max-width ">
                <div class="col-md-3 text-center">
                    <div class="row ">
                        <i class="fa fa-paper-plane fa-5x m-auto text-red"></i>
                    </div>
                    <div class="row">
                        <h5 class="m-auto p-3 iq-font-black">PROMOTIONAL <br>BULK SMS</h5> -->
    <!--<p class="m-2">Yes we do have design templates for various domains. We can design your Website using the design templates or make Customized Design as per your requirement, <a href="portfolio">click</a> to see our work.</p>-->
    <!-- </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="row ">
                        <i class="fa fa-code fa-5x m-auto text-red"></i>
                    </div>
                    <div class="row">
                        <h5 class="m-auto p-3 iq-font-black">TRANSACTIONAL <br> BULK SMS</h5> -->
    <!--<p class="m-2">Yes we do have design templates for various domains. We can design your Website using the design templates or make Customized Design as per your requirement, <a href="portfolio">click</a> to see our work.</p>-->
    <!-- </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="row ">
                        <i class="fa fa-window-maximize fa-5x m-auto text-red"></i>
                    </div>
                    <div class="row">
                        <h5 class="m-auto p-3 iq-font-black">PREMIUM OTP SMS<br> BULK SMS</h5> -->
    <!--<p class="m-2">Yes we do have design templates for various domains. We can design your Website using the design templates or make Customized Design as per your requirement, <a href="portfolio">click</a> to see our work.</p>-->
    <!-- </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="row ">
                        <i class="fa fa-code-fork fa-5x m-auto text-red"></i>
                    </div>
                    <div class="row">
                        <h5 class="m-auto p-3 iq-font-black">SMS API <br>SERVICE</h5> -->
    <!--<p class="m-2">Yes we do have design templates for various domains. We can design your Website using the design templates or make Customized Design as per your requirement, <a href="portfolio">click</a> to see our work.</p>-->
    <!-- </div>
                </div>
            </div>
        </div>
    </section>
    <section class="iq-action-blog particles-bg iq-pb-100">

        <div class="container mr-0">
            <div class="row align-items-center">
                <div class="col-lg-10 col-md-9 iq-font-white">
                    <h2 class="iq-font-black iq-fw-4 iq-pb-10 text-center" style="font-weight: 500;">Already using our Bulk SMS Service?<strong class="iq-font-black"></strong></h2>
                    <div align="justify">
                        <div class="text-center m-auto">
                            <a href="http://bulk.sagartech.co.in/" target="_blank" rel="hover-shadow" class="button hover-shadow">Login</a>
                        </div>
                    </div>

                </div> -->
    <!-- <div class="col-lg-2 col-md-3 text-right"><a href="about.html" class="button white grey iq-re-4-mt30 iq-mr-0">Read More</a> </div> -->
    <!-- </div>
        </div>
    </section> -->
    <!--=================================
Action Box -->
    <!-- </div>
    </section> -->
    <!--================================
Main content -->
    <!--=================================
Footer -->
    <?php
    //  include("include/faqaccordian.html"); 
    ?>
    <?php include("include/footer.php"); ?>

    <!-- Footer -->
    <!-- back-to-top -->
    <div id="back-to-top">
        <a class="top" id="top" href="#top"> <i class="ion-ios-arrow-up"></i> </a>
    </div>
    <!-- back-to-top End -->
    <!--================ Jquery =================-->
    <!-- Jquery  -->
    <script src="js/jquery.min.js"></script>
    <!-- popper  -->
    <script src="js/popper.min.js"></script>
    <!--  bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Google captcha code Js -->
    <script src='../../../../www.google.com/recaptcha/api.js'></script>
    <!-- Mega Menu -->
    <script src="js/mega-menu/mega_menu.js"></script>
    <!-- Main -->
    <script src="js/main.js"></script>

    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <!-- price_range_script -->
    <script src="js/price_range_script.js"></script>
    <!-- modernizr.custom -->
    <script src="js/modernizr.custom.js"></script>
    <!-- jquerypp.custom -->
    <script src="js/jquerypp.custom.js"></script>
    <!-- bookblock -->
    <script src="js/jquery.bookblock.js"></script>
    <!-- style-customizer-->
    <script src="js/style-customizer.js"></script>
    <!-- Custom -->
    <script src="js/custom.js"></script>
    <!-- WhatsHelp.io widget -->
    <script src="js/notcopyable.js"></script>
    <script>
        $(document).ready(function() {

            $('.form_sent').submit(function(e) {
                e.preventDefault();
                var num = $('#ph_no').val();
                var text = $('#msg_1').val();
                console.log(num + " " + text);

                $.ajax({
                    url: "include/send_sms.php",
                    method: "GET",
                    data: {
                        number: num,
                        text: text
                    },
                    success: function(data) {
                        if (data.includes('workingmsg-id')) {
                            $('#largeModal').modal('hide')
                            setTimeout(
                                $('.bd-example-modal-sm').modal('show'), 3000);
                        }
                    }
                })
                // fetch('http://bulk.sagartech.co.in/http-tokenkeyapi.php?authentic-key=383062756c6b73616761723334371578141741&senderid=SGRTCH&route=2&number=7021251630&message=hello',{ mode: 'no-cors' })
                //   .then(
                //     function(response) {
                //       if (response.status !== 200) {
                //         console.log('Looks like there was a problem. Status Code: ' +
                //           response.status);
                //         return;
                //       }

                //       // Examine the text in the response
                //       response.json().then(function(data) {
                //         console.log(data);
                //       });
                //     }
                //   )
                //   .catch(function(err) {
                //     console.log('Fetch Error :-S', err);
                //   });

            })
        })
    </script>

    <script type="text/javascript">
        (function() {
            var options = {
                //whatsapp: "+919820133303", // WhatsApp number
                email: "info@sagartech.co.in",
                call_to_action: "Message us", // Call to action
                position: "left", // Position may be 'right' or 'left'
            };
            var proto = document.location.protocol,
                host = "getbutton.io",
                url = proto + "//static." + host;
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = url + '/widget-send-button/js/init.js';
            s.onload = function() {
                WhWidgetSendButton.init(host, proto, options);
            };
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        })();
    </script>
    <!-- /WhatsHelp.io widget -->
    <!--Login-->
    <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <div class="modal-dialog  modal-md">
            <div class="modal-content text-center">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Request a quote</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal add_mainarea_form" action="sendmail.php" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fname">Full Name</label>
                                    <input type="text" class="form-control" name="fname" id="fname" aria-describedby="emailHelp" placeholder="Enter full name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email1">Email address</label>
                                    <input type="email" class="form-control" id="email1" name="email1" aria-describedby="emailHelp" placeholder="Enter email">
                                    <small id="emailHelp" class="form-text text-muted">Your information is safe with
                                        us.</small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="mobile">Contact Number</label>
                                    <input type="text" class="form-control" name="mobile" id="mobile" max-length="10" aria-describedby="emailHelp" placeholder="Enter Contact Number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="services">Requested Service</label>
                                    <input name="service" id="services" list="service"> <datalist id="service">
                                        <option>Website Development</option>
                                        <option>Digital Marketing</option>
                                        <option>Bulk SMS</option>
                                        <option>Graphic Design</option>
                                    </datalist>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="service">Adittional Words</label>
                                    <textarea class="form-control" rows="5" id="words" name="addwords"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer border-top-0 d-flex justify-content-center">
                            <button type="submit" name="quote_submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
    <script>
        $(function() {
            var myform = $(".add_mainarea_form");
            var completed = '0%';
            $(myform).ajaxForm({

                complete: function() {
                    $('#largeModal').modal('hide')
                    setTimeout(
                        $('.bd-example-modal-sm').modal('show'), 3000);
                }
            });


        });
        $(document).ready(function() {

            $('body').bind('cut copy paste', function(e) {
                e.preventDefault();
            });

            function doAnimation() {
                $("#buttonbounce").effect("bounce", {
                    times: 3
                }, 1000, doAnimation);
            }

            doAnimation();

        });
    </script>
    <div class="modal fade bd-example-modal-sm text-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm text-center">
            <div class="modal-content text-center">
                <div class="modal-header text-center">
                    <h4 class="modal-title" id="myModalLabel">SAGAR TECH</h4>
                </div>
                <div class="modal-body tex-center">
                    <h5>Request submitted</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade iq-login-from" tabindex="-1" role="dialog" id="form" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title iq-tw-5">Login</h4>
                    <a class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times; </span>
                    </a>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" id="recipient-name" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="recipient-password" placeholder="Password">
                        </div>
                        <a class="button iq-mtb-10" href="#">Login</a>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input">Remember Me</label>
                                </div>
                            </div>
                            <div class="col-sm-6 text-right">
                                <a href="#">Forgot Password</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer text-center">
                    <div> Don't Have an Account? <a href="#" class="iq-font-yellow">Register Now</a></div>
                    <ul class="iq-media-blog iq-mt-20">
                        <li><a href="https://twitter.com/Sagar Tech2"><i class="fa fa-twitter "></i></a></li>
                        <li><a href="https://www.facebook.com/Sagar-Tech-223839251868625/"><i class="fa fa-facebook "></i></a></li>
                        <li><a href="https://www.linkedin.com/in/sagar-tech-151800177/"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="# "><i class="fa fa-github "></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>

</html>