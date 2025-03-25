<?php
include("../include/config.php");
?>
<!doctype html>
<html lang="en">


<head>
    <title>Social Media Post Portfolio | Creative & Impactful Visual Content</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="Check out our captivating, trend-driven designs for the social media posts portfolio that captivate audiences and increase company visibility. Ideal for your upcoming campaign!">
    <meta name="keywords" content="Social Media Post Portfolio">
    <!-- Favicon -->
    <link rel="shortcut icon" href="../images/logoonly.jpg" />
    <link rel="canonical" href="https://sagartech.co.in/portfolio/social-media-post">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Social Media Post Portfolio | Creative & Impactful Visual Content">
    <meta property="og:description"
        content="Check out our captivating, trend-driven designs for the social media posts portfolio that captivate audiences and increase company visibility. Ideal for your upcoming campaign!">
    <meta property="og:url" content="https://sagartech.co.in/portfolio/social-media-post">
    <meta property="og:site_name" content="Sagar Tech - Technical Solution">
    <meta property="og:image" content="https://sagartech.co.in/images/sagartech1.png">
    <!-- bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- REVOLUTION STYLE SHEETS -->
    <link href="../revolution/css/settings.css" rel="stylesheet" type="text/css">
    <!-- ADD-ONS CSS FILES -->
    <link href="../revolution/css/revolution.addon.particles.css" rel="stylesheet" type="text/css">
    <!-- main style -->
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
    <!-- responsive -->
    <link href="../css/responsive.css" rel="stylesheet" type="text/css" />
    <!-- custom -->
    <link href="../css/custom.css" rel="stylesheet" type="text/css" />
    <link href="../css/newcssresponsive.css" rel="stylesheet" type="text/css" />
    <!-- <link rel="stylesheet" href="css/portfolio.css"> -->
    <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-187254498-1">
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-187254498-1');
    </script>
</head>
<style>
    .welcometo {
        padding: 50px;
        text-align: center;
        background-color: rgb(241, 241, 241);
    }

    .welcometo .pp {
        font-size: 15px;
        text-align: center;
        padding: 5px 150px;
    }

    .welcometo .ppp {
        font-size: 15px;
    }

    .welcometo h1 {
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
        .welcometo {
            padding: 50px;
            text-align: center;
            background-color: rgb(241, 241, 241);
        }

        .welcometo .pp {
            text-align: center;
            padding: 5px;
        }

        .welcometo h1 {
            font-size: 35px;
            font-weight: 600;
        }

        .why-list {
            padding: 20px;
            display: grid;
            grid-template-columns: 1fr 1fr;
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

    @media only screen and (max-width: 767px) {
        .welcometo {
            padding: 20px;
            text-align: center;
            background-color: rgb(241, 241, 241);
        }

        .welcometo .pp {
            text-align: center;
            padding: 5px;
        }

        .welcometo h1 {
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

    .banner-content {
        padding: 100px 0px;
        text-align: center;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 25px;
    }

    .banner-content h2 {
        font-size: 80px;
        color: white;
        font-weight: 900;
        text-shadow: 2px 2px #000;
    }

    .banner-content ul {
        display: flex;
        gap: 5px;
        color: white;
        text-align: center;
    }

    .banner-content ul li {
        font-size: 16px;
        font-weight: 18px;
    }

    @media only screen and (max-width: 767px) {
        .banner-content {
            padding: 70px 0px;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .banner-content h2 {
            font-size: 50px;
            color: white;
            font-weight: 900;
            text-shadow: 2px 2px #000;
        }

        .banner-content ul {
            display: flex;
            gap: 2px;
            color: white;
            text-align: center;
        }

        .banner-content ul li {
            font-size: 14px;
            font-weight: 18px;
        }
    }

    .tabbar {
        padding: 20px 0px;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        gap: 5px;
    }

    .buttons {
        background-color: white;
        border-style: none;
        box-sizing: border-box;
        color: #000;
        cursor: pointer;
        display: inline-block;
        font-family: "Haas Grot Text R Web", "Helvetica Neue", Helvetica, Arial,
            sans-serif;
        font-size: 15px;
        font-weight: 500;
        height: 40px;
        line-height: 20px;
        list-style: none;
        margin: 0;
        outline: none;
        padding: 10px 16px;
        position: relative;
        text-align: center;
        text-decoration: none;
        transition: color 100ms;
        vertical-align: baseline;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
    }

    .buttons:hover,
    .buttons:focus {
        border-bottom: 2px solid red;
    }

    .content-div {
        width: 100%;
        padding: 20px 50px;
    }

    .maincontent {
        margin-top: 20px;
        widows: 100%;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        gap: 30px;
    }

    .maincontent-inner {
        background-color: white;
    }

    .content-text {
        margin-top: 10px;
    }

    .content-text h2 {
        font-size: 22px;
        text-align: left;
        color: #212121;
        font-weight: 600;
    }

    .content-text p {
        line-height: normal;
    }

    .maincontent-inner .imgdiv {
        aspect-ratio: 4/2.5;
        overflow: hidden;
    }

    .maincontent-inner .imgdiv img {
        height: 100%;
        width: 100%;
        object-fit: cover;
        transition: all ease-in-out;
        transition-duration: 0.3s;
    }

    .maincontent-inner .imgdiv img:hover {
        transform: scale(1.05);
    }

    .viewmore {
        margin-top: 20px;
        widows: 100%;
        text-align: center;
    }

    .viewmore button {
        border-bottom: 2px solid gray;
    }

    @media only screen and (max-width: 767px) {
        .content-div {
            width: 100%;
            padding: 20px;
        }

        .maincontent {
            margin-top: 20px;
            widows: 100%;
            display: grid;
            grid-template-columns: 1fr;
            gap: 30px;
        }

        .content-text p {
            line-height: normal;
        }
    }

    * {
        margin: 0;
        box-sizing: border-box;
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }

    /*Links and buttons*/

    a {
        color: #000;
    }

    a:hover {
        color: orange;
        transition: 0.2s ease-out;
    }

    .btn {
        display: inline-block;
        padding: 10px 20px;
        background-color: #fff;
        border: 1px solid #000;
        border-radius: 5px;
        cursor: pointer;
        text-decoration: none;
        color: #000;
        transition: 0.3s ease-in-out;
        margin-bottom: 1em;
    }

    .btn:hover {
        background-color: #000;
        color: #fff;
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

    .fifthsection {
        line-height: normal;
        padding: 50px;
        background-color: #ffffff;
        text-align: center;
    }


    .fifthsection h2 {
        font-size: 38px;
        font-weight: 700;
    }


    .logosec {
        padding: 30px;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        gap: 30px;
    }

    .imgdiv {
        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
        border: 5px solid white;
        background-color: white;
        border-radius: 15px;
    }

    .imgdiv img {
        height: 100%;
        width: 100%;
        object-fit: contain;
        border-radius: 12px;
    }

    @media only screen and (max-width: 999px) {
        .fifthsection {
            padding: 20px;
            text-align: center;
        }

        .fifthsection h2 {
            font-size: 28px;
            font-weight: 700;
        }

        .logosec {
            padding: 10px;
            display: grid;
            grid-template-columns: 1fr;
            gap: 15px;
        }
    }
</style>

<body>
    <!-- loading -->
    <div id="loading">
        <div id="loading-center">
            <img src="../images/logoonly.jpg" alt="loder">
        </div>
    </div>

    <?php
    $page = 'portfolio';
    include("../include/newHeader.php");
    ?>

    <section
        style="background-image: url('../portfolio-images/banner.jpg'); background-position: center center; background-repeat: no-repeat; background-size: cover;"
        class="banner-content">
        <h2>Post Portfolio</h2>
        <ul class="breadcrumbdiv">
            <li><a href="https://sagartech.co.in/">Home</a></li>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-chevron-right">
                <path d="m9 18 6-6-6-6" />
            </svg>
            <li style="color: white;">Social Media Post</li>
        </ul>
    </section>




    <div class="fifthsection">
        <h2 style="text-transform:uppercase;">Our Designed <span style="color:#FF0808;">Social Media Posts</span></h2>
        <div class="logosec">
            <?php

            $imageUrls = [
                "../social-media-mockup/Social Media Post Design 1 - Armaf.webp",
                "../social-media-mockup/Social Media Post Design 2 - Alsalama.webp",
                "../social-media-mockup/Social Media Post Design 2 - Bareziya Architects.webp",
                "../social-media-mockup/Social Media Post Design 2 - BlueMed.webp",
                "../social-media-mockup/Social Media Post Design 2 - BS Auto.webp",
                "../social-media-mockup/Social Media Post Design 2 - Cotton Culture.webp",
                "../social-media-mockup/Social Media Post Design 2 - Folkso.webp",
                "../social-media-mockup/Social Media Post Design 2 - MCM Phoenix.webp",
                "../social-media-mockup/Social Media Post Design 2 - Royal Wrists.webp",
                "../social-media-mockup/Social Media Post Design 2 - trillionaire.webp",
                "../social-media-mockup/1.webp",
                "../social-media-mockup/2.webp",
                "../social-media-mockup/3.webp",
                "../social-media-mockup/4.webp",
                "../social-media-mockup/5.webp",
                "../social-media-mockup/6.webp",
                "../social-media-mockup/7.webp",
                "../social-media-mockup/8.webp",
                "../social-media-mockup/9.webp",
                "../social-media-mockup/10.webp",
                "../social-media-mockup/11.webp",
                "../social-media-mockup/12.webp",
            ];

            foreach ($imageUrls as $imageUrl) {
                echo '<div class="imgdiv">';
                echo '<img src="' . $imageUrl . '" alt="Social Media Mockup">';
                echo '</div>';
            }
            ?>
        </div>
    </div>






    <?php
    include("../include/footer.php");
    ?>



    <script src="../js/jquery.min.js"></script>

    <script src="../js/custom.js"></script>
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