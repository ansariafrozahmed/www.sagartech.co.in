<?php
header("Access-Control-Allow-Origin: *");
include "include/config.php";

?>
<!doctype html>
<html lang="en">

<head>
    <title>Best Bulk WhatsApp Message Sender In Mumbai</title>
    <!--<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="As the best bulk SMS service provider in India, we also provide WhatsApp bulk messages, which help businesses gain new clients and communicate with existing clients.">
    <meta name="keywords" content="Bulk WhatsApp Message Sender In Mumbai, WhatsApp Bulk Message Provider">

    <meta property="og:type" content="website">
    <meta property="og:title" content="Best Bulk WhatsApp Message Sender In Mumbai">
    <meta property="og:url" content="https://sagartech.co.in/bulk-sms-service-provider-in-mumbai">
    <meta property="og:image" content="https://sagartech.co.in/images/bg/bulk-sms-logo.png">
    <meta property="og:description"
        content="As the best bulk SMS service provider in India, we also provide WhatsApp bulk messages, which help businesses gain new clients and communicate with existing clients.">
    <!-- Favicon -->
    <link rel="canonical" href="https://sagartech.co.in/bulk-sms-service-provider-in-mumbai" />
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
        font-size: 40px;
        font-weight: 600;
        padding: 15px 0px;
    }

    /* Second Section */

    .newsecondsection {
        padding: 50px 60px;
        display: flex;
        gap: 50px;
        align-items: center;
        justify-content: start;
        padding-bottom: 0px;
    }

    .newsecondsection .left {
        width: 50%;
    }

    .newsecondsection .left h2 {
        font-size: 30px;
        font-weight: 600;
    }

    .newsecondsection .left h3 {
        font-size: 20px;
        font-weight: 500;
    }

    .newsecondsection .right {
        width: 50%;
    }

    .newsecondsection .right img {
        height: 100%;
        width: 100%;
    }

    @media only screen and (max-width: 767px) {
        .newsecondsection {
            padding: 50px 20px;
            display: flex;
            flex-direction: column-reverse;
            gap: 20px;
            align-items: center;
            justify-content: start;
        }

        .newsecondsection .left {
            width: 100%;
        }

        .newsecondsection .left h2 {
            font-size: 30px;
            font-weight: 600;
        }

        .newsecondsection .left h3 {
            font-size: 20px;
            font-weight: 500;
        }

        .newsecondsection .right {
            width: 100%;
        }

        .newsecondsection .right img {
            height: 100%;
            width: 100%;
        }
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

    <style>
        .newsecondsection {
            padding: 50px 60px;
            display: flex;
            gap: 50px;
            align-items: center;
            justify-content: start;
        }

        .newsecondsection .left {
            width: 50%;
        }

        .newsecondsection .left h2 {
            font-size: 30px;
            font-weight: 600;
        }

        .newsecondsection .left h3 {
            font-size: 20px;
            font-weight: 500;
        }

        .newsecondsection .right {
            width: 50%;
        }

        .newsecondsection .right img {
            height: 100%;
            width: 100%;
        }

        @media only screen and (max-width: 767px) {
            .dsanjkdhw0qp {
                height: auto !important;
            }

            .newsecondsection {
                padding: 50px 20px;
                display: flex;
                flex-direction: column-reverse;
                gap: 20px;
                align-items: center;
                justify-content: start;
            }

            .newsecondsection .left {
                width: 100%;
            }

            .newsecondsection .left h2 {
                font-size: 30px;
                font-weight: 600;
            }

            .newsecondsection .left h3 {
                font-size: 20px;
                font-weight: 500;
            }

            .newsecondsection .right {
                width: 100%;
            }

            .newsecondsection .right img {
                height: 100%;
                width: 100%;
            }
        }

        /* .right img {
            transform: scale(0.5);
            animation: scaleUp 1s forwards;
        }

        @keyframes scaleUp {
            100% {
                transform: scale(1);
            }
        } */
    </style>
    <div style="background: radial-gradient(ellipse at center, #ff2828 0%, #000000 130%);" class="newsecondsection">
        <div class="left">
            <h2 style="line-height:40px;color:white">Best Bulk WhatsApp Message Sender in Mumbai</h2>
            <ul style="color:white" class="herobreadrumb">
                <li>Home</li>
                <li>/</li>
                <li>Bulk WhatsApp Message Sender</li>
            </ul>
            <p style="color:white">
                Are you looking to instantly connect with your customers through WhatsApp? At
                <a style="color: #000000;" href="https://sagartech.co.in/">Sagar Tech Technical Solutions</a>, we offer a
                powerful <strong>Bulk WhatsApp Message Sender</strong> service tailored for businesses in Mumbai. Whether it's promotional messages, alerts, updates, or customer support, our platform helps you reach thousands of users with just one click.
                As a trusted
                <a style="color: #000000;" href="https://www.indiamart.com/sagartech-technicalsolutions/bulk-mobile-sms-service.html" target="_blank">Bulk SMS & WhatsApp Marketing Provider</a>,
                we deliver scalable, secure, and result-oriented communication tools to grow your business efficiently.
            </p>
            <br>
            <div class="herobuttonsnew">
                <a href="#open-modal" class="quote-button" style="color:white">Quick Enquiry</a>
                <a href="contact" class="quote-button" style="color:white">Contact Now!</a>
            </div>
        </div>
        <div class="right">
            <img style="width: 90%;margin: auto;display: block;" src="https://getitsms.com/wp-content/uploads/1.webp" alt="Bulk WhatsApp Message Service">
        </div>
    </div>




    <div class="newsecondsection">
        <div class="left">
            <h2 style="line-height:40px;margin-bottom: 10px;">Why use Wonestop for Bulk WhatsApp Message?</h2>
            <!-- <h3>Subtitle</h3> -->
            <p>At Sagar Tech Technical Solutions, we deliver cutting-edge bulk SMS services designed to enhance your business communication. As a leading service provider in Mumbai, we help you connect with your audience instantly and effectively. Our reliable, cost-efficient, and customizable solutions ensure your messages reach the right people at the right time, driving better engagement and results. Whether it's promotional campaigns, transactional alerts, or reminders, our services are tailored to meet your needs. With robust API integration and multilingual support, we empower you to communicate seamlessly. Our real-time reporting tools help you track performance, ensuring maximum ROI. Choose us to experience unmatched reliability and round-the-clock support for all your bulk SMS needs.</p>

            <div class="herobuttonsnew">
                <!-- <a href="#">Quick Enquiry</a> -->
                <a href="https://wonestop.com/" class="button">Explore Now</a>
            </div>
        </div>
        <div class="right">
            <!-- <iframe width="100%" height="300" src="https://www.youtube.com/embed/Ve9DnA63ayk?si=911bbfp1QVkcpL7n"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> -->
            <img style="width: 80%;margin: auto;display: block;" src="./images/bulk-whatsapp-messages-services.png" alt="Web Development">
        </div>
    </div>



    <!-- Why Sagartech -->

    <div class="why-content">
        <h2>Benefits of using Wonestop</h2>
        <p class="pp">
            Elevate your communication strategy with Sagar Tech's advanced bulk SMS and WhatsApp messaging services. Leveraging platforms like Wonestop, we provide efficient, reliable, and scalable solutions tailored to your business needs. As a leading <a class="interlink" href="web-development-company-in-mumbai">Web Development</a> and <a class="interlink" href="digital-marketing-company-in-mumbai">Digital Marketing</a> company in Mumbai, we're here to enhance your messaging strategy.
        </p>
        <div class="why-list">
            <div class="listt">
                <span>
                    <img src="https://cdn-icons-png.freepik.com/256/11443/11443005.png" height="80" alt="Reliable Messaging">
                    <h4>Reliable Delivery</h4>
                </span>
                <p>Ensure timely and dependable message delivery across SMS and WhatsApp platforms.</p>
            </div>
            <div class="listt">
                <span>
                    <img src="https://cdn-icons-png.flaticon.com/512/4639/4639117.png" height="80" alt="Automation Tools">
                    <h4>Smart Automation</h4>
                </span>
                <p>Utilize automation features like scheduling, auto-replies, and webhooks to streamline your communication processes.</p>
            </div>
            <div class="listt">
                <span>
                    <img src="https://cdn-icons-png.flaticon.com/512/1865/1865697.png" height="80" alt="Personalized Messaging">
                    <h4>Personalized Messaging</h4>
                </span>
                <p>Send tailored messages using approved templates for marketing, utility, and authentication purposes.</p>
            </div>
            <div class="listt">
                <span>
                    <img src="https://cdn-icons-png.flaticon.com/256/3212/3212197.png" height="80" alt="API Integration">
                    <h4>Seamless Integration</h4>
                </span>
                <p>Integrate effortlessly with CRMs, websites, and third-party applications through robust API support.</p>
            </div>
            <div class="listt">
                <span>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSA5HgOFslAOv7C1wP1_0DyzPWANx0VjLLsQ&s" height="80" alt="Analytics Dashboard">
                    <h4>Insightful Analytics</h4>
                </span>
                <p>Gain valuable insights with real-time analytics to monitor and optimize your messaging campaigns.</p>
            </div>
            <div class="listt">
                <span>
                    <img src="https://cdn-icons-png.flaticon.com/512/4252/4252365.png" height="80" alt="Compliance and Security">
                    <h4>Compliance & Security</h4>
                </span>
                <p>Adhere to industry regulations and ensure data security with our compliant messaging solutions.</p>
            </div>
        </div>
    </div>


    <h3 class="faq-headinggg">FAQs</h3>
    <div class="accordion">
        <div class="accordion-item">
            <h2>What is Wonestop?</h2>
            <div class="accordion-content">
                <p>Wonestop is a WhatsApp-based messaging platform that helps businesses communicate with their customers efficiently through automation and marketing tools.</p>
            </div>
        </div>

        <div class="accordion-item">
            <h2>How does Wonestop pricing work?</h2>
            <div class="accordion-content">
                <p>We offer pay-as-you-go pricing based on the number of messages sent, along with different packages tailored to marketing, utility, and authentication needs.</p>
            </div>
        </div>

        <div class="accordion-item">
            <h2>Do I need technical skills to use Wonestop?</h2>
            <div class="accordion-content">
                <p>Not at all! Our platform is user-friendly and designed for both technical and non-technical users. You can easily create campaigns and track conversations from your dashboard.</p>
            </div>
        </div>

        <div class="accordion-item">
            <h2>Can I integrate Wonestop with other tools?</h2>
            <div class="accordion-content">
                <p>Yes, Wonestop supports API integration for connecting with CRMs, websites, and third-party applications for seamless workflows.</p>
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

    <div style="background:radial-gradient(ellipse at center, #ff2828 0%, #000000 130%)" class="newsecondsection">
        <div class="left">
            <h2 style="line-height:40px;color:white;margin-bottom:15px">Best Bulk WhatsApp Message Sender In Mumbai</h2>
            <!-- <h3>Subtitle</h3> -->
            <p style="color:white;">In today’s digital age, small businesses must establish a solid digital marketing strategy to succeed. A well-thought-out digital marketing strategy may help small businesses compete with larger competitors, reach their target audience effectively, and meet their business objectives. You can choose Best Digital Marketing Company in Mumbai for...

            </p>
            <br>
            <div class="herobuttonsnew">
                <!-- <a href="#">Quick Enquiry</a> -->
                <a href="/blog/digital-marketing-strategy" class="button">READ BLOG POST</a>
            </div>
        </div>
        <div class="right">
            <!-- <iframe width="100%" height="300" src="https://www.youtube.com/embed/BVqMoA9C4Qo?si=9QxprkBltCyTP_Q7"
        title="YouTube video player" frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> -->
            <div class="dsanjkdhw0qp" style="height:400px">
                <img style="object-fit: cover;box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;" src="https://www.webmaxy.co/blog/wp-content/uploads/2024/08/send-bulk-whatsapp-messages.webp" alt="Web Development">
            </div>
        </div>
    </div>
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
