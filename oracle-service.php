<?php
header("Access-Control-Allow-Origin: *");
include "include/config.php";

?>
<!doctype html>
<html lang="en">

<head>
    <title>Best Oracle Services In Mumbai</title>
    <!--<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="As the best Oracle Service provider in India, we also provide Oracle Services, which help businesses gain new clients and communicate with existing clients.">
    <meta name="keywords" content="Oracle Services In Mumbai, Oracle Services Provider">

    <meta property="og:type" content="website">
    <meta property="og:title" content="Best Oracle Services In Mumbai">
    <meta property="og:url" content="https://sagartech.co.in/oracle-service">
    <meta property="og:image" content="https://sagartech.co.in/images/bg/bulk-sms-logo.png">
    <meta property="og:description"
        content="As the best Oracle Service provider in India, we also provide Oracle Services, which help businesses gain new clients and communicate with existing clients.">
    <!-- Favicon -->
    <link rel="canonical" href="https://sagartech.co.in/oracle-service" />
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
            <h2 data-aos="fade-left" style="line-height:40px;color:white">Enterprise-Grade Oracle Services to Power Your Business</h2>
            <ul style="color:white" class="herobreadrumb">
                <li>Home</li>
                <li>/</li>
                <li>Best Oracle Services In Mumbai</li>
            </ul>
            <p style="color:white">
                From database setup to ERP implementation, we deliver end-to-end Oracle-based solutions with seamless integration and powerful analytics.

            </p>
            <br>
            <div class="herobuttonsnew">
                <a href="#open-modal" class="quote-button" style="color:white">Quick Enquiry</a>
                <a href="contact" class="quote-button" style="color:white">Contact Now!</a>
            </div>
        </div>
        <div class="right">
            <img style="width: 90%;margin: auto;display: block;" src="./image/oracle.png" alt="Bulk WhatsApp Message Service">
        </div>
    </div>



    <style>
        .oracle-section {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            gap: 40px;
            padding: 80px 20px;
            max-width: 1200px;
            margin: 0 auto;
            /* background: #f9fafc;
            border-radius: 16px; */
            /* box-shadow: 0 10px 30px rgba(0, 0, 0, 0.06); */
        }

        .oracle-left {
            flex: 1 1 500px;
        }

        .oracle-left h2 {
            font-size: 32px;
            line-height: 1.4;
            margin-bottom: 30px;
            color: #1f2937;
            font-weight: 700;
        }

        .oracle-left h2 span {
            color: #ff2828;
        }

        .oracle-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .oracle-list li {
            font-size: 18px;
            color: #374151;
            margin-bottom: 16px;
            display: flex;
            align-items: flex-start;
        }

        .oracle-check-icon {
            color: #ff2828;
            font-weight: bold;
            font-size: 22px;
            margin-right: 12px;
            flex-shrink: 0;
            line-height: 1;
        }

        .oracle-right {
            flex: 1 1 400px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .oracle-right img {
            width: 100%;
            max-width: 450px;
            border-radius: 12px;
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease;
        }

        .oracle-right img:hover {
            transform: scale(1.03);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .oracle-section {
                flex-direction: column;
                padding: 40px 16px;
                text-align: center;
            }

            .oracle-left h2 {
                font-size: 28px;
            }

            .oracle-list li {
                justify-content: center;
            }

            .oracle-right {
                margin-top: 30px;
            }
        }
    </style>

    <div class="oracle-section">
        <div class="oracle-left">
            <h2>Why Choose <span>Sagar Tech</span> for Oracle Solutions?</h2>
            <ul class="oracle-list">
                <li><i class="oracle-check-icon">✓</i> 15+ Years of Enterprise IT Experience</li>
                <li><i class="oracle-check-icon">✓</i> Certified Oracle Professionals</li>
                <li><i class="oracle-check-icon">✓</i> Seamless Integration with ERP & BI Tools</li>
                <li><i class="oracle-check-icon">✓</i> Scalable, Secure, and Custom-Built Solutions</li>
            </ul>
        </div>
        <div class="oracle-right">
            <img src="./image/Oracle-Service-Cloud-CTI-connector-Banner.png" alt="Oracle Solutions">
        </div>
    </div>



    <div style="position: relative;">
        <?php include "./oracleservice/oracleservice.html" ?>
    </div>

    <!-- <style>
        .oracle-tech-section {
            background: linear-gradient(to right, #f8fbff, #eef4fa);
            padding: 60px 20px;
            font-family: "Segoe UI", sans-serif;
        }

        .oracle-container {
            max-width: 1100px;
            margin: 0 auto;
            background: #fff;
            padding: 50px 40px;
            border-radius: 16px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
            animation: fadeInUp 1s ease;
        }

        .oracle-heading {
            font-size: 28px;
            font-weight: 700;
            color: #1f2d3d;
            margin-bottom: 30px;
            border-left: 5px solid #ff5733;
            padding-left: 15px;
        }

        .oracle-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px 30px;
        }

        .oracle-item {
            background: #f7f9fc;
            padding: 15px 20px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.04);
            font-size: 16px;
            color: #2c3e50;
            position: relative;
            transition: transform 0.3s ease;
        }

        .oracle-item:hover {
            transform: translateY(-5px);
        }

        .check-icon {
            color: #27ae60;
            margin-right: 10px;
            font-weight: bold;
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .oracle-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
    <div class="container">
        <div class="oracle-tech-section">
            <div class="oracle-container">
                <div class="oracle-section">
                    <h2 class="oracle-heading">Technologies & Tools We Use</h2>
                    <div class="oracle-grid">
                        <div class="oracle-item"><i class="check-icon">✓</i> Oracle 11g / 12c / 19c</div>
                        <div class="oracle-item"><i class="check-icon">✓</i> Oracle Forms & Reports 6i, 10g, 11g</div>
                        <div class="oracle-item"><i class="check-icon">✓</i> Oracle Apex (on request)</div>
                        <div class="oracle-item"><i class="check-icon">✓</i> Power BI, Excel, Visual Basic</div>
                        <div class="oracle-item"><i class="check-icon">✓</i> RMAN, Data Pump, Shell Scripts</div>
                    </div>
                </div>

                <div class="oracle-section">
                    <h2 class="oracle-heading">Engagement Models</h2>
                    <div class="oracle-grid">
                        <div class="oracle-item"><i class="check-icon">✓</i> One-Time Implementation</div>
                        <div class="oracle-item"><i class="check-icon">✓</i> Monthly Support Plans</div>
                        <div class="oracle-item"><i class="check-icon">✓</i> Staff Augmentation / Dedicated DBA / Developer</div>
                        <div class="oracle-item"><i class="check-icon">✓</i> AMC with Quarterly Audits</div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->


    <h3 class="faq-headinggg">FAQs</h3>
    <div class="accordion">
        <div class="accordion-item">
            <h2>Can you migrate my existing database to Oracle?</h2>
            <div class="accordion-content">
                <p>Yes, we offer full migration support from MySQL, MS SQL Server, PostgreSQL, or other RDBMS to Oracle with minimal downtime and data integrity assurance.</p>
            </div>
        </div>

        <div class="accordion-item">
            <h2>Do you offer AMC or ongoing support?</h2>
            <div class="accordion-content">
                <p>Yes, our Annual Maintenance Contract (AMC) covers system monitoring, troubleshooting, patch management, and periodic performance tuning for Oracle environments.</p>
            </div>
        </div>

        <div class="accordion-item">
            <h2>Can I use Power BI with Oracle?</h2>
            <div class="accordion-content">
                <p>Absolutely. We specialize in connecting Oracle databases with Power BI to create real-time KPI dashboards, interactive reports, and advanced data visualizations.</p>
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

    <!-- <div style="background:radial-gradient(ellipse at center, #ff2828 0%, #000000 130%)" class="newsecondsection">
        <div class="left">
            <h2 style="line-height:40px;color:white;margin-bottom:15px">Best Oracle Service In Mumbai</h2>

            <p style="color:white;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident recusandae asperiores maxime, dolorum accusamus cupiditate minus molestias doloremque architecto animi beatae corrupti nihil sunt quibusdam dolorem quae fugit nam error Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque dicta excepturi exercitationem nesciunt nostrum fugiat accusamus laudantium itaque at expedita, qui quibusdam eius eligendi modi nemo quidem doloribus earum quis.

            </p>
            <br>
            <div class="herobuttonsnew">

                <a href="#" class="button">READ BLOG POST</a>
            </div>
        </div>
        <div class="right">

            <div class="dsanjkdhw0qp" style="height:400px">
                <img style="object-fit: cover;box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;" src="https://sennovate.com/wp-content/uploads/2023/07/IMG_1442.png" alt="Web Development">
            </div>
        </div>
    </div> -->
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