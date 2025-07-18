<?php
include("../include/config.php");
?>
<!doctype html>
<html lang="en">


<head>
    <title>Stunning Website Design Portfolio - Sagar Tech</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="Check out our website design portfolio, which features innovative and practical online solutions. Get ideas for your next project by looking at our finest work!">
    <meta name="keywords" content="Website Design Portfolio">
    <!-- Favicon -->
    <link rel="shortcut icon" href="../images/logoonly.jpg" />
    <link rel="canonical" href="https://sagartech.co.in/portfolio/website">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Stunning Website Design Portfolio - Sagar Tech">
    <meta property="og:description"
        content="Check out our website design portfolio, which features innovative and practical online solutions. Get ideas for your next project by looking at our finest work!">
    <meta property="og:url" content="https://sagartech.co.in/portfolio/website">
    <meta property="og:site_name" content="Sagar Tech - Technical Solution">
    <meta property="og:image" content="https://sagartech.co.in/images/sagartech1.webp">
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
    /* .maindivv {
  padding: 50px;
  text-align: center;
}
.maindivv h1 {
  font-size: 35px;
  font-weight: 700;
}
.maindivv span {
  font-size: 20px;
  color: black;
}
.maindivv p {
  margin-top: 10px;
  font-size: 16px;
  line-height: normal;
  text-align: center;
} */

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
        grid-template-columns: 1fr 1fr 1fr 1fr;
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

    .maincontent-inner:hover .content-text h2 {
        color: #ff0808;
    }

    .content-text h2:hover {
        text-decoration: underline;
        color: #ff0808;
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
            font-size: 40px;
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
        /* outline: none !important; */
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
        grid-template-columns: 1fr 1fr 1fr 1fr;
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
        text-align: center;
        color: #212121;
        font-weight: 600;
    }

    .content-text p {
        line-height: normal;
    }

    .maincontent-inner .imgdiv {
        /* aspect-ratio: 4/2.5; */
        overflow: hidden;
    }

    .maincontent-inner .imgdiv img {
        height: 100%;
        width: 100%;
        object-fit: contain;
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

    @media only screen and (max-width: 1024px) {
        .maincontent {
            margin-top: 20px;
            widows: 100%;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }
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
        <h2>Mobile Portfolio</h2>
        <ul class="breadcrumbdiv">
            <li><a href="https://sagartech.co.in/">Home</a></li>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-chevron-right">
                <path d="m9 18 6-6-6-6" />
            </svg>
            <li style="color: white;">Portfolio</li>
        </ul>
    </section>


    <!-- <div class="maindivv">
        <h1>Welcome to Sagar Tech Technical Solution</h1>
        <span> Award-Winning Destination for Web Development and Digital Marketing Excellence</span>
        <p>We are an award-winning web development and digital marketing company with a team of skilled developers that are experienced in building appealing websites that can significantly improve your business by driving up revenue.Our journey has been marked by creativity, dedication, and a passion for delivering top-notch technical solutions that help businesses Grow
        </p>
    </div> -->

    <!-- <div class="welcometo">
        <h1>Welcome to Sagar Tech Technical Solution</h1>
        <P class="pp">We are an award-winning web development and digital marketing company with a team of skilled
            developers that are experienced in building appealing websites that can significantly improve your business
            by driving up revenue.Our journey has been marked by creativity, dedication, and a passion for delivering
            top-notch technical solutions that help businesses Grow
        </P>
        <div class="why-list">
            <div class="listt">
                <span>
                    <img src="../images/coding.png" height="50" alt="">
                    <h4>Web Development</h4>
                </span>
                <p>From creating captivating e-commerce platforms to designing streamlined one-page websites, we
                    specialize in crafting digital experiences that leave a lasting impression.</p>
            </div>
            <div class="listt">
                <span>
                    <img src="../images/social-media.png" height="50" alt="">
                    <h4>Digital Marketing</h4>
                </span>
                <p>Boost your online visibility with our comprehensive digital marketing services. From SEO to social
                    media management and targeted campaigns, we've got your back.</p>
            </div>
            <div class="listt">
                <span>
                    <img src="../images/graphic-designer.png" height="50" alt="">
                    <h4>Graphic Designing</h4>
                </span>
                <p>Our graphic design services are tailored to meet the unique needs of businesses, ensuring that your
                    brand stands out in a crowded digital landscape.</p>
            </div>
            <div class="listt">
                <span>
                    <img src="../images/development.png" height="50" alt="">
                    <h4>App Development</h4>
                </span>
                <p>We take pride in delivering high-quality app development services tailored to meet your specific
                    requirements.</p>
            </div>
            <div class="listt">
                <span>
                    <img src="../images/bulksms.png" height="50" alt="">
                    <h4>Bulk SMS Services</h4>
                </span>
                <p>We specialize in providing top-notch bulk SMS services and bulk whatsaap message services to elevate
                    your communication strategies</p>
            </div>
        </div>
        <P class="ppp">Ready to take your digital presence to the next level? Join us at Sagar Tech. Explore our
            portfolio, check out our award-winning projects, and see how our web development and digital marketing
            solutions can redefine your online presence. Your success story begins right here with Sagar Tech.Technical
            Soultion
        </P>
    </div> -->


    <style>
        .buttons.active {
            background-color: #ff0808;
            color: #fff;
        }
    </style>




    <div id="Business">
        <!-- <h2>Our Business Website portfolio</h2> -->
        <div style="padding: 50px 0;" class="maincontent">
            <div class="maincontent-inner">
                <a href="https://play.google.com/store/apps/details?id=ag.nile.market.app&hl=en_IN" target="_blank">
                    <div class="imgdiv">
                        <img src="../portfolio-app-development/nile.png" alt="">
                    </div>
                </a>
                <div class="content-text">
                    <a href="https://play.google.com/store/apps/details?id=ag.nile.market.app&hl=en_IN" target="_blank">
                        <h2>Nile Market Place</h2>
                    </a>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, inventore est? Ipsum magni sunt alias voluptas deleniti in explicabo fuga amet.</p> -->
                </div>
            </div>
            <div class="maincontent-inner">
                <a href="https://play.google.com/store/apps/details?id=com.bebegiro.smash.app&hl=en_IN" target="_blank">
                    <div class="imgdiv">
                        <img src="../portfolio-app-development/bebigiro.png" alt="">
                    </div>
                </a>
                <div class="content-text">
                    <a href="https://play.google.com/store/apps/details?id=com.bebegiro.smash.app&hl=en_IN" target="_blank">
                        <h2>Bebegiro</h2>
                    </a>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, inventore est? Ipsum magni sunt alias voluptas deleniti in explicabo fuga amet.</p> -->
                </div>
            </div>
            <div class="maincontent-inner">
                <a href="https://play.google.com/store/apps/details?id=in.co.cottoncultureindia&hl=en_IN" target="_blank">
                    <div class="imgdiv">
                        <img src="../portfolio-app-development/cotton culture.png" alt="">
                    </div>
                </a>
                <div class="content-text">
                    <a href="https://play.google.com/store/apps/details?id=in.co.cottoncultureindia&hl=en_IN" target="_blank">
                        <h2>Cotton Culture</h2>
                    </a>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, inventore est? Ipsum magni sunt alias voluptas deleniti in explicabo fuga amet.</p> -->
                </div>
            </div>
            <div class="maincontent-inner">
                <a href="https://play.google.com/store/apps/details?id=com.gsmash.sahibaan&hl=en_IN" target="_blank">
                    <div class="imgdiv">
                        <img src="../portfolio-app-development//sahiba.png" alt="">
                    </div>
                </a>
                <div class="content-text">
                    <a href="https://play.google.com/store/apps/details?id=com.gsmash.sahibaan&hl=en_IN" target="_blank">
                        <h2>Sahibaan</h2>
                    </a>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, inventore est? Ipsum magni sunt alias voluptas deleniti in explicabo fuga amet.</p> -->
                </div>
            </div>

        </div>




        <script>
            function openCity(cityName) {
                var i;
                var x = document.getElementsByClassName("content-div");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                document.getElementById(cityName).style.display = "block";
            }
        </script>

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