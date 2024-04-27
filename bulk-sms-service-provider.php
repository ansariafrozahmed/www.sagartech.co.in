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
    // include('blogSectionHome.php')
    ?>

    <?php include("include/footer.php"); ?>

    <script src="js/custom.js"></script>
    <script type="text/javascript">
        (function() {
            var options = {
                whatsapp: "+919820133303", // WhatsApp number
                email: "info@sagartech.co.in", // Email
                call_to_action: "Contact Us", // Call to action
                button_color: "#FF0808", // Color of button
                position: "left", // Position may be 'right' or 'left'
                order: "whatsapp,email", // Order of buttons
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
</body>
</html>