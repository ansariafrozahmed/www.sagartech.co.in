<!doctype html>
<html lang="en">

<head>
    <title>Flutter Services</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="Are you trying to find web development? Our knowledgeable staff fulfills your digital vision. As a top web development company in Mumbai and a web design company, we deliver excellence.">
    <meta name="keywords" content="Web Development">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Flutter Services">
    <meta property="og:url" content="https://sagartech.co.in/flutter-services">
    <meta property="og:image" content="https://sagartech.co.in/portfolio-mockups//ecommerce/trillionair.webp">
    <meta property="og:description"
        content="Are you trying to find web development? Our knowledgeable staff fulfills your digital vision. As a top web development company in Mumbai and a web design company, we deliver excellence.">
    <!-- Favicon -->
    <link rel="canonical" href="https://sagartech.co.in/flutter-services" />
    <link rel="shortcut icon" href="images/logoonly.jpg" />
    <!-- <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'> -->
    <!-- HTML -->
    <!-- <link href="css/HTML.min.css" rel="stylesheet" type="text/css" /> -->
    <!-- main style -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!-- responsive -->
    <!-- <link href="css/responsive.css" rel="stylesheet" type="text/css" /> -->
    <!-- custom -->
    <!-- <link href="css/custom.css" rel="stylesheet" type="text/css" /> -->
    <!-- <link rel="stylesheet" href="css/web-dev.css" ype="text/css"> -->
    <!-- <link href="css/newcssresponsive.css" rel="stylesheet" type="text/css" /> -->
    <!-- <link rel="stylesheet" href="css/web-design.css"> -->

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

<style type="text/css">
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    p {
        text-transform: capitalize;
    }

    .herosectionnew {
        position: relative;
        padding: 70px 60px;
        overflow: hidden;
        /* background: radial-gradient(ellipse at center, #ff2828 0%, #000000 130%); */
        background: radial-gradient(ellipse at center, #ff2828 30%, #000000 100%);
        background-position: left;
        background-repeat: no-repeat;
        background-size: cover;
        color: white;
        /* Add overlay */
        position: relative;
    }

    .herosectionnew::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        /* Adjust transparency as needed */
        z-index: 1;
        /* Adjust z-index to position the overlay */
    }

    .herosectionnew h1 {
        font-size: 30px;
        color: white;
        font-weight: 600;
        position: relative;
        /* Ensure text appears above overlay */
        z-index: 2;
        /* Ensure text appears above overlay */
    }

    .herobreadrumb {
        display: flex;
        font-weight: 600;
        gap: 5px;
        margin: 5px 0px;
        align-items: center;
        position: relative;
        /* Ensure text appears above overlay */
        z-index: 2;
        /* Ensure text appears above overlay */
    }

    .herosectionpara {
        width: 40%;
        color: white;
        margin-top: 10px;
        position: relative;
        /* Ensure text appears above overlay */
        z-index: 2;
        /* Ensure text appears above overlay */
    }

    .herobuttonsnew {
        display: flex;
        gap: 10px;
        align-items: center;
        justify-content: start;
        position: relative;
        /* Ensure text appears above overlay */
        z-index: 2;
        /* Ensure text appears above overlay */
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


    @media only screen and (max-width: 767px) {
        .herosectionnew {
            padding: 60px 20px;
        }

        .herosectionnew h1 {
            font-size: 25px;
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

    /* Second Section */

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

    /* Third Section */

    .ourclientsection {
        padding: 60px;
        text-align: center;
    }

    .ourclientsection h2 {
        font-size: 40px;
        font-weight: 600;
    }

    .clientsimg {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
        gap: 10px;
        margin-bottom: 20px;
    }

    .clientsimg img {
        padding: 10px;
        width: 90%;
    }

    @media only screen and (max-width: 767px) {
        .ourclientsection {
            padding: 20px;
        }

        .clientsimg {
            padding: 10px 0px;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 10px;
        }
    }

    .typesofsection {
        padding: 60px;
    }

    .typesofsection h2 {
        font-size: 28px;
        margin-bottom: -5px;
        font-weight: 600;
    }

    .typesofsection h3 {
        margin-bottom: -10px;
        font-size: 20px;
        font-weight: 500;
    }

    .typesofcard {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        gap: 15px;
    }

    @media only screen and (max-width: 767px) {
        .typesofsection {
            padding: 60px 20px;
        }

        .typesofsection h2 {
            font-size: 25px;
            line-height: normal;
            margin-bottom: 0px;
            font-weight: 600;
        }

        .typesofsection h3 {
            margin-bottom: -10px;
            font-size: 20px;
            font-weight: 500;
        }

        .typesofcard {
            display: grid;
            grid-template-columns: 1fr;
        }
    }

    .card-title {
        color: #262626;
        text-align: start;
        font-size: 1.5em;
        line-height: normal;
        font-weight: 700;
        margin-bottom: 0.5em;
    }

    .small-desc {
        font-size: 1em;
        font-weight: 400;
        line-height: 1.5em;
        color: #452c2c;
    }

    .small-desc {
        font-size: 1em;
    }

    .go-corner {
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        width: 2em;
        height: 2em;
        overflow: hidden;
        top: 0;
        right: 0;
        background: linear-gradient(135deg, #000, red);
        border-radius: 0 4px 0 32px;
    }

    .go-arrow {
        margin-top: -4px;
        margin-right: -4px;
        color: white;
        font-family: courier, sans;
    }

    .card {
        display: block;
        position: relative;
        max-width: 300px;
        max-height: 320px;
        background-color: #f2f8f9;
        border-radius: 10px;
        padding: 2em 1.2em;
        margin: 12px;
        text-decoration: none;
        z-index: 0;
        overflow: hidden;
        background: linear-gradient(to bottom, #fff, #fff);
        font-family: Arial, Helvetica, sans-serif;
    }

    .card:before {
        content: "";
        position: absolute;
        z-index: -1;
        top: -16px;
        right: -16px;
        background: linear-gradient(135deg, #ff0808, #000);
        height: 32px;
        width: 32px;
        border-radius: 32px;
        transform: scale(1);

        transform-origin: 50% 50%;
        transition: transform 0.35s ease-out;
    }

    .card:hover:before {
        transform: scale(28);
    }

    .card:hover .small-desc {
        transition: all 0.5s ease-out;
        color: rgba(255, 255, 255, 0.8);
    }

    .card:hover .card-title {
        transition: all 0.5s ease-out;
        color: #ffffff;
    }

    .portfoliocar {
        padding: 60px 0px;
        text-align: center;
    }

    .portfoliocar h2 {
        padding: 30px 0px;
        font-size: 30px;
        font-weight: 600;
    }

    @media only screen and (max-width: 767px) {
        .portfoliocar {
            padding: 0px;
            text-align: center;
        }

        .portfoliocar h2 {
            padding: 10px 0px;
            font-size: 30px;
            font-weight: 600;
        }
    }

    .techstack {
        padding: 60px;
        text-align: center;
    }

    .techstack h2 {
        font-size: 40px;
        font-weight: 600;
    }

    .texhstackimg {
        padding: 50px 0px;
        display: grid;
        gap: 20px;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
    }

    .techstackimg img {
        height: 100%;
        width: 100%;
    }

    @media only screen and (max-width: 767px) {
        .techstack {
            padding: 20px;
            text-align: center;
        }

        .techstack h2 {
            font-size: 40px;
            font-weight: 600;
        }

        .texhstackimg {
            padding: 30px 0px;
            display: grid;
            gap: 20px;
            grid-template-columns: 1fr 1fr 1fr 1fr;
        }

        .techstackimg img {
            height: 100%;
            width: 100%;
        }
    }

    .ourprocesssection {
        padding: 60px 60px 10px 60px;
    }

    .ourprocesssection h2 {
        font-size: 40px;
        font-weight: 600;
    }

    .ourprocesssectiontwo {
        padding: 20px 0px;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        gap: 20px 60px;
    }

    .discover {
        max-width: 480px;
        padding: 1em 0;
        margin-right: auto;
        margin-left: auto;
        transition: opacity 0.25s;
    }

    .discover .headingggggg {
        font-size: 22px;
    }

    .discover .headingggggg span {
        font-size: 45px;
        font-weight: 900;
        /* margin-right: 5px; */
    }

    .discover .headingggggg::after {
        width: 100px;
        height: 3px;
        margin: 0.25em 0px;
        display: block;
        content: "";
        background: red;
    }

    @media only screen and (max-width: 767px) {
        .ourprocesssection {
            padding: 20px;
        }

        .ourprocesssection h2 {
            font-size: 30px;
            font-weight: 600;
        }

        .ourprocesssectiontwo {
            padding: 20px 0px;
            display: grid;
            grid-template-columns: 1fr;
            gap: 0px;
        }

        .discover {
            max-width: 480px;
            padding: 1em 0;
            margin-right: auto;
            margin-left: auto;
            transition: opacity 0.25s;
        }

        .discover .headingggggg::after {
            width: 60px;
            height: 4px;
            margin-top: 0.25em;
            display: block;
            content: "";
            background: #50b1aa;
        }
    }

    .checklistsection {
        padding: 60px;
    }

    .checklistsection h2 {
        font-size: 35px;
        font-weight: 600;
    }

    .checkcontain {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        padding: 20px 0px;
    }

    .check {
        display: flex;
        gap: 10px;
        align-items: center;
    }

    @media only screen and (max-width: 767px) {
        .checklistsection {
            padding: 20px;
        }

        .checklistsection h2 {
            font-size: 30px;
            font-weight: 600;
        }

        .checkcontain {
            display: grid;
            grid-template-columns: 1fr;
            padding: 20px 0px;
        }

        .check {
            display: flex;
            gap: 10px;
            align-items: center;
        }
    }

    .industriessec {
        padding: 60px;
    }

    .industriessec h2 {
        font-size: 30px;
        font-weight: 600;
    }

    .industryin {
        display: grid;
        padding: 20px 0px;
        gap: 10px;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr;
    }

    .indus {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .indus p {
        text-align: start;
    }

    .indus img {
        width: 50px;
    }

    @media only screen and (max-width: 767px) {
        .industriessec {
            padding: 20px;
        }

        .industriessec h2 {
            font-size: 25px;
            line-height: normal;
            font-weight: 600;
            text-align: center;
        }

        .industryin {
            display: grid;
            padding: 20px 0px;
            gap: 10px;
            grid-template-columns: 1fr 1fr;
        }

        .indus {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }

        .indus p {
            text-align: center;
            width: 80%;
        }

        .indus img {
            width: 50px;
        }
    }

    .faqcont h5 {
        font-weight: bold;
    }

    .text-red {
        color: Red;
    }

    p {
        color: black;
        text-align: justify;
    }

    .abel {
        font-family: 'Abel';
        font-weight: bold;
        font-size: 40px;
    }

    a.port_id:hover {

        content: "My Presentation" !important;
    }

    .fimg {
        width: 6% !important;
    }

    .c-faq {
        font-family: 'Varela Round', sans-serif;
        list-style: none;
        margin: 10px 0 5px;
    }

    .c-faq__title {
        cursor: pointer;
        font-weight: 500;
        background: white;
        z-index: 10;
        position: relative;
        font-size: 1.1em;
    }

    .c-faq__title:hover {
        text-decoration: underline;
    }

    .c-faq__title::after {
        white-space: nowrap;
        font-weight: 300;
        padding-left: 5px;
        opacity: 0;
        transform-origin: 11px;
        transform: rotateZ(90deg);
        display: none;
    }

    .c-faq__title:active {
        color: red;
    }

    .faqans {
        display: none;
        border-radius: 3px;
        border: 1px solid #faf5f5;
        border-left: 1px solid #ff3030;
        padding: 20px;
    }

    @media only screen and (max-width: 48px) {
        /* For general iPad layouts */

        .fimg {
            width: 14% !important;
        }
    }

    .list-display li {
        margin-bottom: .4rem;
        font-size: 1.1rem;
        color: #696969;
    }


    .list-checkmarks li {
        list-style-type: none;
        padding-left: 1rem;
    }

    .list-checkmarks li:before {
        font-family: 'FontAwesome';
        content: "\f00c";
        margin: 0 10px 0 -28px;
        color: #ff0808;
    }

    .carddd {
        width: 100%;
        /* border: 1px solid gray; */
        height: auto;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background-color: white;
        border-radius: 20px;
        padding: 30px;
        gap: 10px;
        border: 1px solid #e6e6e6;
        transition: all 0.3s ease-in-out;
        /* cursor: pointer; */
    }

    .carddd:hover {
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    }

    .carddd>.image {
        width: 70px;
        height: 70px;
        transition: all 0.1s ease-in-out;
    }

    .carddd>.h1 {
        font-size: 20px;
        font-weight: 600;
        text-align: center;
    }

    .carddd>.p {
        color: #000000;
        font-size: 14px;
        text-align: justify;
        overflow: hidden;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 7;
    }

    .quote-button {
        background-color: #ff0808;
        padding: 8px 15px;
        border-radius: 5px;
        border: none;
        color: #fff;
        font-size: 14px;
        font-weight: 500;
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2),
            0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    /*-------------Accordian-----------------*/

    .faqs-heading {
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
        font-weight: 500;
        line-height: normal;
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
</style>

<body>
    <div id="loading">
        <div id="loading-center">
            <img src="images/logoonly.jpg" alt="sagar tech logo" title="sagar tech logo">
        </div>
    </div>
    <?php
    $page = 'services';
    // include("include/trialh.php");
    include("include/newHeader.php");
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

        .our-client-main-div h2 {
            font-size: 40px;
            font-weight: 700;
            padding-bottom: 40px;
            color: #2b2a2a;
            text-transform: uppercase;
            text-align: center;
            font-family: 'Raleway', sans-serif;
        }

        @media (max-width: 767px) {
            .our-client-main-div h2 {
                font-size: 30px !important;
                padding-bottom: 15px;
            }
        }
    </style>

    <!-- <div class="herosectionnew"> -->
    <div style="background:  radial-gradient(ellipse at center, #ff2828 0%, #000000 130%);" class="newsecondsection">
        <div class="left">
            <h2 style="line-height:40px;color:white">Flutter Services</h2>
            <ul style="color:white" class="herobreadrumb">
                <li>Home</li>
                <li>/</li>
                <li>Flutter Services</li>
            </ul>
            <!-- <h3>Subtitle</h3> -->
            <p style="color:white">
                Flutter is an open-source UI software development toolkit created by Google. It allows developers to build natively compiled applications for mobile, web, and desktop from a single codebase. Using the Dart programming language, Flutter offers fast development, expressive UI, and high performance.
            </p>




            <br>
            <div class="herobuttonsnew">

                <?php //include 'include/quote.php' 
                ?>

                <a href="#open-modal" class="quote-button" style="color:white">Quick Enquiry</a>
                <a href="portfolio/website" class="quote-button" style="color:white">Our Portfolio</a>
            </div>
        </div>
        <div class="right">

            <img src="./images/flutter.png">
        </div>

    </div>




    <!-- <div class="newsecondsection">
        <div class="left">
            <h2 style="line-height:40px;">Why are web design and web development important for your business?</h2>
            
            <p>At Sagar Tech Technical Solutions, we merge brilliance and creativity in <a href="https://www.indiamart.com/sagartech-technicalsolutions/website-designing-service.html" target="_blank" style="color:#ff0808; font-weight: 600;">web development</a>. Being one of Mumbai's leading <a href="https://www.indiamart.com/proddetail/corporate-website-designing-service-2854563932388.html" target="_blank" style="color:#ff0808; font-weight: 600;">web development</a> companies, we take great pride in our talented group of web designers and developers. Our goal is to develop websites that provide you with a distinctive online presence while going above and beyond your expectations. Having a strong online presence is essential in the current digital era, and we can help you realize your ideas. As a top web design company in India, you can count on our experience to create a website that accurately captures your brand.</p>
            <br>
            <div class="herobuttonsnew">
               
                <a href="about" class="button">About Us</a>
            </div>
        </div>
        <div class="right">
            <div>
                <img src="./banner/business.webp" alt="Web Development">
            </div>
        </div>
    </div> -->


    <div class="ourprocesssection">
        <div class="our-client-main-div">
            <h2>Benefits <span style="font-family: 'Raleway', sans-serif;color: #ff0808">of Flutter</span></h2>
        </div>
        <div class="ourprocesssectiontwo">
            <div class="discover">
                <img src="./technologiesicons/flutter/Single Codebase.png" height="70px" alt="Single Codebase">
                <div class="headingggggg">Single Codebase</div>
                <p>Develop apps for Android, iOS, web, and desktop with a single codebase, reducing development time and costs.</p>
            </div>
            <div class="discover">
                <img src="./technologiesicons/flutter/Fast Development.png" height="70px" alt="Fast Development">
                <div class="headingggggg">Fast Development</div>
                <p>Flutter’s Hot Reload feature enables developers to see changes instantly, speeding up the development process.</p>
            </div>
            <div class="discover">
                <img src="./technologiesicons/flutter/Native-Like Performance.png" height="70px" alt="Native Performance">
                <div class="headingggggg">Native-Like Performance</div>
                <p>Flutter provides smooth animations and high performance by compiling directly to native ARM code.</p>
            </div>
            <div class="discover">
                <img src="./technologiesicons/flutter/Expressive UI.png" height="70px" alt="Custom UI">
                <div class="headingggggg">Expressive UI</div>
                <p>With a rich set of customizable widgets, Flutter allows for creating beautiful and engaging user interfaces.</p>
            </div>
            <div class="discover">
                <img src="./technologiesicons/flutter/Backed by Google.png" height="70px" alt="Google Support">
                <div class="headingggggg">Backed by Google</div>
                <p>Flutter is backed by Google, ensuring continuous updates, community support, and long-term reliability.</p>
            </div>
            <div class="discover">
                <img src="./technologiesicons/flutter/Scalability.png" height="70px" alt="Scalability">
                <div class="headingggggg">Scalability</div>
                <p>Suitable for startups and enterprises, Flutter scales well with business needs and evolving technologies.</p>
            </div>
            <div class="discover">
                <img src="./technologiesicons/flutter/Cross-Platform Compatibility.png" height="70px" alt="Cross-Platform">
                <div class="headingggggg">Cross-Platform Compatibility</div>
                <p>Flutter apps run seamlessly on Android, iOS, web, and desktop without compromising user experience.</p>
            </div>
        </div>
    </div>


    <?php
    include './include/technologyPortfolio/flutter.php'
    ?>




    <h3 class="faqs-heading">FAQs</h3>
    <div class="accordion">
        <div class="accordion-item">
            <h2>What is Flutter?</h2>
            <div class="accordion-content">
                <p>Flutter is an open-source UI toolkit by Google for building cross-platform applications with a single codebase.</p>
            </div>
        </div>

        <div class="accordion-item">
            <h2>What are the benefits of using Flutter?</h2>
            <div class="accordion-content">
                <p>Flutter provides a single codebase for multiple platforms, fast development with Hot Reload, expressive UI, and high performance.</p>
            </div>
        </div>

        <div class="accordion-item">
            <h2>Can Flutter be used for web development?</h2>
            <div class="accordion-content">
                <p>Yes, Flutter supports web development, allowing developers to build applications for browsers using the same codebase.</p>
            </div>
        </div>

        <div class="accordion-item">
            <h2>Is Flutter suitable for large-scale applications?</h2>
            <div class="accordion-content">
                <p>Yes, Flutter is used by enterprises and startups to build scalable applications for various platforms.</p>
            </div>
        </div>

        <div class="accordion-item">
            <h2>Which programming language does Flutter use?</h2>
            <div class="accordion-content">
                <p>Flutter uses Dart, a modern programming language optimized for UI development and high performance.</p>
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
            <h2 style="line-height:40px;color:white;margin-bottom:15px">15 Advanced HTML Tools | Expert Corner
            </h2>
            <!-- <h3>Subtitle</h3> -->
            <p style="color:white;">Your website has become a first point of contact between your company and visitors in the current digital era. It serves as your digital business card, online store, and primary method of increasing brand recognition. Having a good internet presence is now required instead of optional. An expert web design agency can help with that. They are the designers of your online environment, creating visually appealing and effective websites...

            </p>
            <br>
            <div class="herobuttonsnew">
                <!-- <a href="#">Quick Enquiry</a> -->
                <a href="/blog/redesign-your-website-by-working-with-a-skilled-web-design-agency" class="button">READ BLOG POST</a>
            </div>
        </div>
        <div class="right">
            <!-- <iframe width="100%" height="300" src="https://www.youtube.com/embed/BVqMoA9C4Qo?si=9QxprkBltCyTP_Q7"
        title="YouTube video player" frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> -->
            <div class="dsanjkdhw0qp" style="height:400px">
                <img style="background:white;object-fit: cover;box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;" src="./images/react.png" alt="Web Development">
            </div>
        </div>
    </div>


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