<?php
include("include/config.php");
?>
<!doctype html>
<html lang="en">


<head>
    <title>Sagar Tech Technical Solution Portfolio on 500 Satisfied Client ⭐</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="We are the leading 🔝 Web Development and Digital Marketing Company In India with more than 500 satisfied Client ⭐">
    <!-- Canonical -->
    <link rel="canonical" href="https://sagartech.co.in/our-portfolio">
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/logoonly.jpg" />
    <!-- bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- REVOLUTION STYLE SHEETS -->
    <link href="revolution/css/settings.css" rel="stylesheet" type="text/css">
    <!-- ADD-ONS CSS FILES -->
    <link href="revolution/css/revolution.addon.particles.css" rel="stylesheet" type="text/css">
    <!-- main style -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!-- responsive -->
    <link href="css/responsive.css" rel="stylesheet" type="text/css" />
    <!-- custom -->
    <link href="css/custom.css" rel="stylesheet" type="text/css" />
    <link href="css/newcssresponsive.css" rel="stylesheet" type="text/css" />
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
        font-size: 100px;
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

    .buttons.active {
        background-color: #ff0808;
        color: #fff;
    }
</style>

<body>
    <!-- loading -->
    <div id="loading">
        <div id="loading-center">
            <img src="images/logoonly.jpg" alt="loder">
        </div>
    </div>

    <?php
    $page = 'portfolio';
    include("include/newHeader.php");
    ?>

    <section
        style="background-image: url('./portfolio-images/banner.jpg'); background-position: center center; background-repeat: no-repeat; background-size: cover;"
        class="banner-content">
        <h2>Our Portfolio</h2>
        <ul class="breadcrumbdiv">
            <li>Home</li>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-chevron-right">
                <path d="m9 18 6-6-6-6" />
            </svg>
            <li><a href="our-portfolio" style="color: white;">portfolio</a></li>
        </ul>
    </section>


    <!-- <div class="maindivv">
        <h1>Welcome to Sagar Tech Technical Solution</h1>
        <span> Award-Winning Destination for Web Development and Digital Marketing Excellence</span>
        <p>We are an award-winning web development and digital marketing company with a team of skilled developers that are experienced in building appealing websites that can significantly improve your business by driving up revenue.Our journey has been marked by creativity, dedication, and a passion for delivering top-notch technical solutions that help businesses Grow
        </p>
    </div> -->

    <div class="welcometo">
        <h1>Welcome to Sagar Tech Technical Solution</h1>
        <P class="pp">We are an award-winning web development and digital marketing company with a team of skilled
            developers that are experienced in building appealing websites that can significantly improve your business
            by driving up revenue.Our journey has been marked by creativity, dedication, and a passion for delivering
            top-notch technical solutions that help businesses Grow
        </P>
        <div class="why-list">
            <div class="listt">
                <span>
                    <a href="https://sagartech.co.in/web-development-company-in-mumbai" target="_blank">
                        <img src="./images/coding.png" height="50" alt="">
                        <h4>Web Development</h4>
                    </a>
                </span>
                <p>From creating captivating e-commerce platforms to designing streamlined one-page websites, we
                    specialize in crafting digital experiences that leave a lasting impression.</p>
            </div>
            <div class="listt">
                <span>
                    <a href="https://sagartech.co.in/digital-marketing-company-in-mumbai" target="_blank">
                        <img src="./images/social-media.png" height="50" alt="">
                        <h4>Digital Marketing</h4>
                    </a>
                </span>
                <p>Boost your online visibility with our comprehensive digital marketing services. From SEO to social
                    media management and targeted campaigns, we've got your back.</p>
            </div>
            <div class="listt">
                <span>
                    <a href="https://sagartech.co.in/graphic-design-services-in-mumbai" target="_blank">
                        <img src="./images/graphic-designer.png" height="50" alt="">
                        <h4>Graphic Designing</h4>
                    </a>
                </span>
                <p>Our graphic design services are tailored to meet the unique needs of businesses, ensuring that your
                    brand stands out in a crowded digital landscape.</p>
            </div>
            <div class="listt">
                <span>
                    <a href="https://sagartech.co.in/mobile-app-development-company-in-mumbai" target="_blank">
                        <img src="./images/development.png" height="50" alt="">
                        <h4>App Development</h4>
                    </a>
                </span>
                <p>We take pride in delivering high-quality app development services tailored to meet your specific
                    requirements.</p>
            </div>
            <div class="listt">
                <span>
                    <a href="https://sagartech.co.in/bulk-sms-service-provider-in-mumbai" target="_blank">
                        <img src="./images/bulksms.png" height="50" alt="">
                        <h4>Bulk SMS Services</h4>
                    </a>
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
    </div>


    <div class="tabbar">
        <button class="buttons" onclick="openCity('Business')" id="tabBusiness">Business</button>
        <button class="buttons active" onclick="openCity('Builders')" id="tabBuilders">Builders</button>
        <button class="buttons" onclick="openCity('Catalogue')" id="tabCatalogue">Catalogue</button>
        <button class="buttons" onclick="openCity('Logistics')" id="tabLogistics">Logistics</button>
        <button class="buttons" onclick="openCity('Ecommerce')" id="tabEcommerce">Ecommerce</button>
        <button class="buttons" onclick="openCity('Education')" id="tabEducation">Education</button>
        <button class="buttons" onclick="openCity('Restaurants')" id="tabRestaurants">Restaurants</button>
        <button class="buttons" onclick="openCity('Trust')" id="tabTrust">Trust & Properties</button>
        <button class="buttons" onclick="openCity('Travels')" id="tabTravels">Travels</button>
        <button class="buttons" onclick="openCity('Interior')" id="tabInterior">Interior Designer</button>
        <button class="buttons" onclick="openCity('Health')" id="tabHealth">Health Care</button>
        <!-- <button class="buttons" onclick="openCity('Static')" id="tabTravels">Static Websites</button> -->
    </div>

    <script>
        // Function to open the city (placeholder)
        function openCity(cityName) {
            // Your implementation to open the city
        }

        document.addEventListener("DOMContentLoaded", function() {
            // Retrieve the active tab from localStorage
            var activeTab = localStorage.getItem('activeTab');

            // Check if an active tab is stored in localStorage
            if (activeTab) {
                // Remove the 'active' class from all tabs
                document.querySelectorAll('.buttons').forEach(function(button) {
                    button.classList.remove('active');
                });

                // Add the 'active' class to the stored active tab
                document.getElementById('tab' + activeTab).classList.add('active');
            } else {
                // If no active tab is stored, set the default tab as "Builders"
                document.getElementById('tabBusiness').classList.add('active');
                localStorage.setItem('activeTab', 'Business');
            }
        });

        // Event listener to store the active tab in localStorage when clicked
        document.querySelectorAll('.buttons').forEach(function(button) {
            button.addEventListener('click', function() {
                // Remove the 'active' class from all tabs
                document.querySelectorAll('.buttons').forEach(function(btn) {
                    btn.classList.remove('active');
                });

                // Add the 'active' class to the clicked tab
                this.classList.add('active');

                // Store the active tab in localStorage
                var tabName = this.textContent.trim();
                localStorage.setItem('activeTab', tabName);
            });
        });

        // Clear localStorage and set active tab to "Business" on reload
        window.addEventListener('beforeunload', function() {
            localStorage.removeItem('activeTab');
            localStorage.setItem('activeTab', 'Business');
        });
    </script>

    <hr>

    <div id="Business" class="content-div">
        <!-- <h2>Our Business Website portfolio</h2> -->
        <div class="maincontent">
            <div class="maincontent-inner">
                <a href="https://verify8.com/" target="_blank">
                    <div class="imgdiv">
                        <img src="./portfolio-mockups/business/verify8.webp" alt="">
                    </div>
                </a>
                <div class="content-text">
                    <a href="https://verify8.com/" target="_blank">
                        <h2>Verify8</h2>
                    </a>
                </div>
            </div>
            <div class="maincontent-inner">
                <a href="https://dont.quit.ventures/" target="_blank">
                    <div class="imgdiv">
                        <img src="./portfolio-mockups/business/dontquit.webp" alt="">
                    </div>
                </a>
                <div class="content-text">
                    <a href="https://dont.quit.ventures/" target="_blank">
                        <h2>Don't Quit Ventures</h2>
                    </a>
                </div>
            </div>
            <div class="maincontent-inner">
                <a href="https://binfinit.co/" target="_blank">
                    <div class="imgdiv">
                        <img src="./portfolio-mockups/business/binfinit.webp" alt="">
                    </div>
                </a>
                <div class="content-text">
                    <a href="https://binfinit.co/" target="_blank">
                        <h2>Binfinit</h2>
                    </a>
                </div>
            </div>
        </div>
        <div class="viewmore">
            <button class="buttons"><a href="<?= WEB_URL ?>portfolio/business-website" target="_blank">View More</a><svg
                    xmlns="http://www.w3.org/2000/svg" height="12" width="12" viewBox="0 0 512 512">
                    <path
                        d="M320 0c-17.7 0-32 14.3-32 32s14.3 32 32 32h82.7L201.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L448 109.3V192c0 17.7 14.3 32 32 32s32-14.3 32-32V32c0-17.7-14.3-32-32-32H320zM80 32C35.8 32 0 67.8 0 112V432c0 44.2 35.8 80 80 80H400c44.2 0 80-35.8 80-80V320c0-17.7-14.3-32-32-32s-32 14.3-32 32V432c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16H192c17.7 0 32-14.3 32-32s-14.3-32-32-32H80z" />
                </svg></button>
        </div>
    </div>
    <div id="Builders" class="content-div" style="display:none">
        <!-- <h2>Our Builders Website portfolio</h2> -->
        <div class="maincontent">
            <div class="maincontent-inner">
                <a href="https://zzconsultants.com/" target="_blank">
                    <div class="imgdiv">
                        <img src="./portfolio-mockups/builders/zzconsultant.webp" alt="">
                    </div>
                </a>
                <div class="content-text">
                    <a href="https://zzconsultants.com/" target="_blank">
                        <h2>ZZ Consultants</h2>
                    </a>
                </div>
            </div>
            <div class="maincontent-inner">
                <a href="https://archicgreenscape.com/" target="_blank">
                    <div class="imgdiv">
                        <img src="./portfolio-mockups/builders/archicgreenscape.webp" alt="">
                    </div>
                </a>
                <div class="content-text">
                    <a href="https://archicgreenscape.com/" target="_blank">
                        <h2>Archic Green Scape</h2>
                    </a>
                </div>
            </div>
            <div class="maincontent-inner">
                <a href="https://folksco.in/" target="_blank">
                    <div class="imgdiv">
                        <img src="./portfolio-mockups/builders/folksco.webp" alt="">
                    </div>
                </a>
                <div class="content-text">
                    <a href="https://folksco.in/" target="_blank">
                        <h2>Folksco</h2>
                    </a>
                </div>
            </div>
        </div>
        <div class="viewmore">
            <button class="buttons"><a href="<?= WEB_URL ?>portfolio/builders-website" target="_blank">View More</a><svg
                    xmlns="http://www.w3.org/2000/svg" height="12" width="12" viewBox="0 0 512 512">
                    <path
                        d="M320 0c-17.7 0-32 14.3-32 32s14.3 32 32 32h82.7L201.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L448 109.3V192c0 17.7 14.3 32 32 32s32-14.3 32-32V32c0-17.7-14.3-32-32-32H320zM80 32C35.8 32 0 67.8 0 112V432c0 44.2 35.8 80 80 80H400c44.2 0 80-35.8 80-80V320c0-17.7-14.3-32-32-32s-32 14.3-32 32V432c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16H192c17.7 0 32-14.3 32-32s-14.3-32-32-32H80z" />
                </svg></button>
        </div>
    </div>


    <div id="Catalogue" class="content-div" style="display:none">
        <!-- <h2>Our Catalogue Website portfolio</h2> -->
        <div class="maincontent">
            <div class="maincontent-inner">
                <a href="https://thaigernutraceuticals.com/" target="_blank">
                    <div class="imgdiv">
                        <img src="./portfolio-mockups/ecommerce/thaigerpharma.webp" alt="">
                    </div>
                </a>
                <div class="content-text">
                    <a href="https://thaigernutraceuticals.com/" target="_blank">
                        <h2>Thaiger Nutraceuticals</h2>
                    </a>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, inventore est? Ipsum magni sunt alias voluptas deleniti in explicabo fuga amet.</p> -->
                </div>
            </div>
            <div class="maincontent-inner">
                <a href="https://kostevo.com/" target="_blank">
                    <div class="imgdiv">
                        <img src="./portfolio-mockups/catalogue/kostevo.webp" alt="">
                    </div>
                </a>
                <div class="content-text">
                    <a href="https://kostevo.com/" target="_blank">
                        <h2>Kostevo</h2>
                    </a>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, inventore est? Ipsum magni sunt alias voluptas deleniti in explicabo fuga amet.</p> -->
                </div>
            </div>
            <div class="maincontent-inner">
                <a href="https://powerplay.ae/" target="_blank">
                    <div class="imgdiv">
                        <img src="./portfolio-mockups/catalogue/powerplay.webp" alt="">
                    </div>
                </a>
                <div class="content-text">
                    <a href="https://powerplay.ae/" target="_blank">
                        <h2>Powerplay</h2>
                    </a>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, inventore est? Ipsum magni sunt alias voluptas deleniti in explicabo fuga amet.</p> -->
                </div>
            </div>
        </div>
        <div class="viewmore">
            <button class="buttons"><a href="<?= WEB_URL ?>portfolio/catalogue-website" target="_blank">View
                    More</a><svg xmlns="http://www.w3.org/2000/svg" height="12" width="12" viewBox="0 0 512 512">
                    <path
                        d="M320 0c-17.7 0-32 14.3-32 32s14.3 32 32 32h82.7L201.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L448 109.3V192c0 17.7 14.3 32 32 32s32-14.3 32-32V32c0-17.7-14.3-32-32-32H320zM80 32C35.8 32 0 67.8 0 112V432c0 44.2 35.8 80 80 80H400c44.2 0 80-35.8 80-80V320c0-17.7-14.3-32-32-32s-32 14.3-32 32V432c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16H192c17.7 0 32-14.3 32-32s-14.3-32-32-32H80z" />
                </svg></button>
        </div>
    </div>


    <div id="Logistics" class="content-div" style="display:none">
        <!-- <h2>Our Logistics Website portfolio</h2> -->
        <div class="maincontent">
            <div class="maincontent-inner">
                <a href="https://bml.demo-web.live/" target="_blank">
                    <div class="imgdiv">
                        <img src="./portfolio-mockups/logistics/bml.webp" alt="">
                    </div>
                </a>
                <div class="content-text">
                    <a href="https://bml.demo-web.live/" target="_blank">
                        <h2>BML Logistics</h2>
                    </a>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, inventore est? Ipsum magni sunt alias voluptas deleniti in explicabo fuga amet.</p> -->
                </div>
            </div>
            <div class="maincontent-inner">
                <a href="https://amarclearing.com/" target="_blank">
                    <div class="imgdiv">
                        <img src="./portfolio-mockups/logistics/amarclearing.webp" alt="">
                    </div>
                </a>
                <div class="content-text">
                    <a href="https://amarclearing.com/" target="_blank">
                        <h2>Amar Clearing</h2>
                    </a>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, inventore est? Ipsum magni sunt alias voluptas deleniti in explicabo fuga amet.</p> -->
                </div>
            </div>
            <div class="maincontent-inner">
                <a href="https://aadhiklogistics.com/" target="_blank">
                    <div class="imgdiv">
                        <img src="./portfolio-mockups/logistics/adhiklogistics.webp" alt="">
                    </div>
                </a>
                <div class="content-text">
                    <a href="https://aadhiklogistics.com/" target="_blank">
                        <h2>Aadhik Logistics</h2>
                    </a>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, inventore est? Ipsum magni sunt alias voluptas deleniti in explicabo fuga amet.</p> -->
                </div>
            </div>
        </div>
        <div class="viewmore">
            <button class="buttons"><a href="<?= WEB_URL ?>portfolio/logistics-website" target="_blank">View
                    More</a><svg xmlns="http://www.w3.org/2000/svg" height="12" width="12" viewBox="0 0 512 512">
                    <path
                        d="M320 0c-17.7 0-32 14.3-32 32s14.3 32 32 32h82.7L201.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L448 109.3V192c0 17.7 14.3 32 32 32s32-14.3 32-32V32c0-17.7-14.3-32-32-32H320zM80 32C35.8 32 0 67.8 0 112V432c0 44.2 35.8 80 80 80H400c44.2 0 80-35.8 80-80V320c0-17.7-14.3-32-32-32s-32 14.3-32 32V432c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16H192c17.7 0 32-14.3 32-32s-14.3-32-32-32H80z" />
                </svg></button>
        </div>
    </div>



    <div id="Ecommerce" class="content-div" style="display:none">
        <!-- <h2>Our Ecommerce Website portfolio</h2> -->
        <div class="maincontent">
            <div class="maincontent-inner">
                <a href="https://bsautoaccessories.com/" target="_blank">
                    <div class="imgdiv">
                        <img src="./portfolio-mockups/ecommerce/bsauto.webp" alt="">
                    </div>
                </a>
                <div class="content-text">
                    <a href="https://bsautoaccessories.com/" target="_blank">
                        <h2>BS Auto</h2>
                    </a>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, inventore est? Ipsum magni sunt alias voluptas deleniti in explicabo fuga amet.</p> -->
                </div>
            </div>
            <div class="maincontent-inner">
                <a href="https://trillionaireautoparts.com/" target="_blank">
                    <div class="imgdiv">
                        <img src="./portfolio-mockups/ecommerce/trillionair.webp" alt="">
                    </div>
                </a>
                <div class="content-text">
                    <a href="https://trillionaireautoparts.com/" target="_blank">
                        <h2>Trillionaire</h2>
                    </a>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, inventore est? Ipsum magni sunt alias voluptas deleniti in explicabo fuga amet.</p> -->
                </div>
            </div>
            <div class="maincontent-inner">
                <a href="https://www.cottonculture.co.in/" target="_blank">
                    <div class="imgdiv">
                        <img src="./portfolio-mockups/ecommerce/cotton-culture.webp" alt="">
                    </div>
                </a>
                <div class="content-text">
                    <a href="https://www.cottonculture.co.in/" target="_blank">
                        <h2>Cotton Culture</h2>
                    </a>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, inventore est? Ipsum magni sunt alias voluptas deleniti in explicabo fuga amet.</p> -->
                </div>
            </div>
        </div>
        <div class="viewmore">
            <button class="buttons"><a href="<?= WEB_URL ?>portfolio/ecommerce-website" target="_blank">View
                    More</a><svg xmlns="http://www.w3.org/2000/svg" height="12" width="12" viewBox="0 0 512 512">
                    <path
                        d="M320 0c-17.7 0-32 14.3-32 32s14.3 32 32 32h82.7L201.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L448 109.3V192c0 17.7 14.3 32 32 32s32-14.3 32-32V32c0-17.7-14.3-32-32-32H320zM80 32C35.8 32 0 67.8 0 112V432c0 44.2 35.8 80 80 80H400c44.2 0 80-35.8 80-80V320c0-17.7-14.3-32-32-32s-32 14.3-32 32V432c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16H192c17.7 0 32-14.3 32-32s-14.3-32-32-32H80z" />
                </svg></button>
        </div>
    </div>

    <div id="Education" class="content-div" style="display:none">
        <!-- <h2>Our Education Website portfolio</h2> -->
        <div class="maincontent">
            <div class="maincontent-inner">
                <a href="https://educ4te.com/" target="_blank">
                    <div class="imgdiv">
                        <img src="./portfolio-mockups/education/educate.webp" alt="">
                    </div>
                </a>
                <div class="content-text">
                    <a href="https://educ4te.com/" target="_blank">
                        <h2>Educ4te</h2>
                    </a>
                </div>
            </div>
            <div class="maincontent-inner">
                <a href="https://capdiw.in/" target="_blank">
                    <div class="imgdiv">
                        <img src="./portfolio-mockups/education/capdiw.webp" alt="">
                    </div>
                </a>
                <div class="content-text">
                    <a href="https://capdiw.in/" target="_blank">
                        <h2>Capdiw</h2>
                    </a>
                </div>
            </div>
            <div class="maincontent-inner">
                <a href="https://euradiclenew.demo-web.live/" target="_blank">
                    <div class="imgdiv">
                        <img src="./portfolio-mockups/education/euradicle.webp" alt="">
                    </div>
                </a>
                <div class="content-text">
                    <a href="https://euradiclenew.demo-web.live/" target="_blank">
                        <h2>Euradicle</h2>
                    </a>
                </div>
            </div>
        </div>
        <div class="viewmore">
            <button class="buttons"><a href="<?= WEB_URL ?>portfolio/education-website" target="_blank">View
                    More</a><svg xmlns="http://www.w3.org/2000/svg" height="12" width="12" viewBox="0 0 512 512">
                    <path
                        d="M320 0c-17.7 0-32 14.3-32 32s14.3 32 32 32h82.7L201.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L448 109.3V192c0 17.7 14.3 32 32 32s32-14.3 32-32V32c0-17.7-14.3-32-32-32H320zM80 32C35.8 32 0 67.8 0 112V432c0 44.2 35.8 80 80 80H400c44.2 0 80-35.8 80-80V320c0-17.7-14.3-32-32-32s-32 14.3-32 32V432c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16H192c17.7 0 32-14.3 32-32s-14.3-32-32-32H80z" />
                </svg></button>
        </div>
    </div>

    <div id="Restaurants" class="content-div" style="display:none">
        <!-- <h2>Our Restaurents Website portfolio</h2> -->
        <div class="maincontent">
            <div class="maincontent-inner">
                <a href="https://alnizamidarbar.com/" target="_blank">
                    <div class="imgdiv">
                        <img src="./portfolio-mockups/restaurants/alnizami.webp" alt="">
                    </div>
                </a>
                <div class="content-text">
                    <a href="https://alnizamidarbar.com/" target="_blank">
                        <h2>AL Nizami</h2>
                    </a>
                </div>
            </div>
            <!-- <div class="maincontent-inner">
                    <a href="#" target="_blank">
                    <div class="imgdiv">
                        <img src="../portfolio-mockups/restaurants/skewer.webp" alt="">
                    </div>
                    </a>
                    <div class="content-text">
                        <a href="#" target="_blank">
                        <h2>Skewer</h2>
                    </a>
                        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, inventore est? Ipsum magni sunt alias voluptas deleniti in explicabo fuga amet.</p> 
                    </div>
                </div> -->
            <!-- <div class="maincontent-inner">
                    <div class="imgdiv">
                        <img src="./portfolio-images/Builders.png" alt="">
                    </div>
                    <div class="content-text">
                        <h2>Website Name</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, inventore est? Ipsum magni sunt alias voluptas deleniti in explicabo fuga amet.</p>
                    </div>
                </div> -->
        </div>
        <div class="viewmore">
            <button class="buttons"><a href="<?= WEB_URL ?>portfolio/restaurants-website" target="_blank">View
                    More</a><svg xmlns="http://www.w3.org/2000/svg" height="12" width="12" viewBox="0 0 512 512">
                    <path
                        d="M320 0c-17.7 0-32 14.3-32 32s14.3 32 32 32h82.7L201.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L448 109.3V192c0 17.7 14.3 32 32 32s32-14.3 32-32V32c0-17.7-14.3-32-32-32H320zM80 32C35.8 32 0 67.8 0 112V432c0 44.2 35.8 80 80 80H400c44.2 0 80-35.8 80-80V320c0-17.7-14.3-32-32-32s-32 14.3-32 32V432c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16H192c17.7 0 32-14.3 32-32s-14.3-32-32-32H80z" />
                </svg></button>
        </div>
    </div>

    <div id="Trust" class="content-div" style="display:none">
        <!-- <h2>Our Trust & Properties Website portfolio</h2> -->
        <div class="maincontent">
            <div class="maincontent-inner">
                <a href="https://wecarecharitable.org/" target="_blank">
                    <div class="imgdiv">
                        <img src="./portfolio-mockups/trust-properties/wecare.webp" alt="">
                    </div>
                </a>
                <div class="content-text">
                    <a href="https://wecarecharitable.org/" target="_blank">
                        <h2>We Care</h2>
                    </a>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, inventore est? Ipsum magni sunt alias voluptas deleniti in explicabo fuga amet.</p> -->
                </div>
            </div>
            <div class="maincontent-inner">
                <a href="https://kolsamohallamemonjamat.com/" target="_blank">
                    <div class="imgdiv">
                        <img src="./portfolio-mockups/trust-properties/kolsamohalla.webp" alt="">
                    </div>
                </a>
                <div class="content-text">
                    <a href="https://kolsamohallamemonjamat.com/" target="_blank">
                        <h2>Kolsa Mohalla</h2>
                    </a>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, inventore est? Ipsum magni sunt alias voluptas deleniti in explicabo fuga amet.</p> -->
                </div>
            </div>
            <div class="maincontent-inner">
                <a href="https://behumanfoundation.org/" target="_blank">
                    <div class="imgdiv">
                        <img src="./portfolio-mockups/trust-properties/behuman.webp" alt="">
                    </div>
                </a>
                <div class="content-text">
                    <a href="https://behumanfoundation.org/" target="_blank">
                        <h2>Be Human</h2>
                    </a>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, inventore est? Ipsum magni sunt alias voluptas deleniti in explicabo fuga amet.</p> -->
                </div>
            </div>
        </div>
        <div class="viewmore">
            <button class="buttons"><a href="<?= WEB_URL ?>portfolio/trust-and-properties-website" target="_blank">View
                    More</a><svg xmlns="http://www.w3.org/2000/svg" height="12" width="12" viewBox="0 0 512 512">
                    <path
                        d="M320 0c-17.7 0-32 14.3-32 32s14.3 32 32 32h82.7L201.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L448 109.3V192c0 17.7 14.3 32 32 32s32-14.3 32-32V32c0-17.7-14.3-32-32-32H320zM80 32C35.8 32 0 67.8 0 112V432c0 44.2 35.8 80 80 80H400c44.2 0 80-35.8 80-80V320c0-17.7-14.3-32-32-32s-32 14.3-32 32V432c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16H192c17.7 0 32-14.3 32-32s-14.3-32-32-32H80z" />
                </svg></button>
        </div>
    </div>

    <div id="Travels" class="content-div" style="display:none">
        <!-- <h2>Our Trust & Properties Website portfolio</h2> -->
        <div class="maincontent">
            <div class="maincontent-inner">
                <a href="https://goclassictour.com/" target="_blank">
                    <div class="imgdiv">
                        <img src="./portfolio-mockups/travel/classic.webp" alt="">
                    </div>
                </a>
                <div class="content-text">
                    <a href="https://goclassictour.com/" target="_blank">
                        <h2>Go Classic Tour</h2>
                    </a>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, inventore est? Ipsum magni sunt alias voluptas deleniti in explicabo fuga amet.</p> -->
                </div>
            </div>
            <!-- <div class="maincontent-inner">
                    <a href="https://alhusainitravels.com/" target="_blank">
                        <div class="imgdiv">
                            <img src="../portfolio-mockups/travel/alhusaini.webp" alt="">
                        </div>
                    </a>
                    <div class="content-text">
                        <a href="https://alhusainitravels.com/" target="_blank">
                            <h2>Al Husaini</h2>
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, inventore est? Ipsum magni sunt alias voluptas deleniti in explicabo fuga amet.</p>
                    </div>
                </div> -->
            <div class="maincontent-inner">
                <a href="https://www.riyazinternational.com/" target="_blank">
                    <div class="imgdiv">
                        <img src="./portfolio-mockups/travel/riyazint.webp" alt="">
                    </div>
                </a>
                <div class="content-text">
                    <a href="https://www.riyazinternational.com/" target="_blank">
                        <h2>Riyaz International</h2>
                    </a>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, inventore est? Ipsum magni sunt alias voluptas deleniti in explicabo fuga amet.</p> -->
                </div>
            </div>
            <div class="maincontent-inner">
                <a href="https://zubairtravels.com/" target="_blank">
                    <div class="imgdiv">
                        <img src="./portfolio-mockups/travel/zubair.webp" alt="">
                    </div>
                </a>
                <div class="content-text">
                    <a href="https://zubairtravels.com/" target="_blank">
                        <h2>Zubair</h2>
                    </a>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, inventore est? Ipsum magni sunt alias voluptas deleniti in explicabo fuga amet.</p> -->
                </div>
            </div>
        </div>
        <div class="viewmore">
            <button class="buttons"><a href="<?= WEB_URL ?>portfolio/travels-website" target="_blank">View More</a><svg
                    xmlns="http://www.w3.org/2000/svg" height="12" width="12" viewBox="0 0 512 512">
                    <path
                        d="M320 0c-17.7 0-32 14.3-32 32s14.3 32 32 32h82.7L201.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L448 109.3V192c0 17.7 14.3 32 32 32s32-14.3 32-32V32c0-17.7-14.3-32-32-32H320zM80 32C35.8 32 0 67.8 0 112V432c0 44.2 35.8 80 80 80H400c44.2 0 80-35.8 80-80V320c0-17.7-14.3-32-32-32s-32 14.3-32 32V432c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16H192c17.7 0 32-14.3 32-32s-14.3-32-32-32H80z" />
                </svg></button>
        </div>
    </div>

    <div id="Interior" class="content-div" style="display:none">
        <!-- <h2>Our Trust & Properties Website portfolio</h2> -->
        <div class="maincontent">
            <div class="maincontent-inner">
                <a href="https://folksco.in/" target="_blank">
                    <div class="imgdiv">
                        <img src="./portfolio-mockups/interior/folksco.webp" alt="">
                    </div>
                </a>
                <div class="content-text">
                    <a href="https://folksco.in/" target="_blank">
                        <h2>Folksco</h2>
                    </a>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, inventore est? Ipsum magni sunt alias voluptas deleniti in explicabo fuga amet.</p> -->
                </div>
            </div>
            <div class="maincontent-inner">
                <a href="https://bareziyaarchitects.com/" target="_blank">
                    <div class="imgdiv">
                        <img src="./portfolio-mockups/interior/bareziya_arch.png" alt="">
                    </div>
                </a>
                <div class="content-text">
                    <a href="https://bareziyaarchitects.com/" target="_blank">
                        <h2>Bareziya Architects</h2>
                    </a>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, inventore est? Ipsum magni sunt alias voluptas deleniti in explicabo fuga amet.</p> -->
                </div>
            </div>
        </div>
        <div class="viewmore">
            <button class="buttons"><a href="<?= WEB_URL ?>portfolio/interior-designer" target="_blank">View
                    More</a><svg xmlns="http://www.w3.org/2000/svg" height="12" width="12" viewBox="0 0 512 512">
                    <path
                        d="M320 0c-17.7 0-32 14.3-32 32s14.3 32 32 32h82.7L201.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L448 109.3V192c0 17.7 14.3 32 32 32s32-14.3 32-32V32c0-17.7-14.3-32-32-32H320zM80 32C35.8 32 0 67.8 0 112V432c0 44.2 35.8 80 80 80H400c44.2 0 80-35.8 80-80V320c0-17.7-14.3-32-32-32s-32 14.3-32 32V432c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16H192c17.7 0 32-14.3 32-32s-14.3-32-32-32H80z" />
                </svg></button>
        </div>
    </div>
    <div id="Health" class="content-div" style="display:none">
        <!-- <h2>Our Trust & Properties Website portfolio</h2> -->
        <div class="maincontent">
            <div class="maincontent-inner">
                <a href="https://www.axxio-laboratory.com/" target="_blank">
                    <div class="imgdiv">
                        <img src="./portfolio-mockups/healthcare/AXXIO.webp" alt="Axxio">
                    </div>
                </a>
                <div class="content-text">
                    <a href="https://www.axxio-laboratory.com/" target="_blank">
                        <h2>Axxio Laboratory</h2>
                    </a>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, inventore est? Ipsum magni sunt alias voluptas deleniti in explicabo fuga amet.</p> -->
                </div>
            </div>
            <div class="maincontent-inner">
                <a href="https://syrocs.com/" target="_blank">
                    <div class="imgdiv">
                        <img src="./portfolio-mockups/healthcare/syrocs.webp" alt="Syrocs">
                    </div>
                </a>
                <div class="content-text">
                    <a href="https://syrocs.com/" target="_blank">
                        <h2>Syrocs</h2>
                    </a>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, inventore est? Ipsum magni sunt alias voluptas deleniti in explicabo fuga amet.</p> -->
                </div>
            </div>
            <div class="maincontent-inner">
                <a href="https://vcarediagnostic.center/" target="_blank">
                    <div class="imgdiv">
                        <img src="./portfolio-mockups/healthcare/vcare.webp" alt="VCare">
                    </div>
                </a>
                <div class="content-text">
                    <a href="https://vcarediagnostic.center/" target="_blank">
                        <h2>VCare Diagnostics</h2>
                    </a>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, inventore est? Ipsum magni sunt alias voluptas deleniti in explicabo fuga amet.</p> -->
                </div>
            </div>
        </div>
        <div class="viewmore">
            <button class="buttons"><a href="<?= WEB_URL ?>portfolio/healthcare-website" target="_blank">View
                    More</a><svg xmlns="http://www.w3.org/2000/svg" height="12" width="12" viewBox="0 0 512 512">
                    <path
                        d="M320 0c-17.7 0-32 14.3-32 32s14.3 32 32 32h82.7L201.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L448 109.3V192c0 17.7 14.3 32 32 32s32-14.3 32-32V32c0-17.7-14.3-32-32-32H320zM80 32C35.8 32 0 67.8 0 112V432c0 44.2 35.8 80 80 80H400c44.2 0 80-35.8 80-80V320c0-17.7-14.3-32-32-32s-32 14.3-32 32V432c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16H192c17.7 0 32-14.3 32-32s-14.3-32-32-32H80z" />
                </svg></button>
        </div>
    </div>



    <h3>FAQs</h3>
    <div class="accordion">
        <div class="accordion-item">
            <h2>Why do I need professional web development services?</h2>
            <div class="accordion-content">
                <p>Professional web development services ensure that your website is created with the latest
                    technologies, adheres to industry standards, and provides a seamless user experience. This can
                    enhance your online presence and business credibility.
            </div>
        </div>

        <div class="accordion-item">
            <h2>What technologies do you use for web development?</h2>
            <div class="accordion-content">
                <p>We utilize a variety of technologies, including HTML, CSS, JavaScript, PHP, Python, Ruby on Rails,
                    and various content management systems (CMS) like WordPress, Drupal, and Joomla, depending on the
                    project requirements.
            </div>
        </div>

        <div class="accordion-item">
            <h2>Do you provide e-commerce development services?</h2>
            <div class="accordion-content">
                <p>Yes, we specialize in e-commerce development, creating secure and user-friendly online stores. Our
                    solutions include payment gateway integration, product management, and order processing features.
            </div>
        </div>

        <div class="accordion-item">
            <h2>How long does it take to develop a website?</h2>
            <div class="accordion-content">
                <p>The timeline for web development varies depending on the complexity and scope of the project. Simple
                    websites may take a few weeks, while more complex projects, such as e-commerce platforms, can take
                    several months.
            </div>
        </div>

        <div class="accordion-item">
            <h2>How can i get started with your web development services?</h2>
            <div class="accordion-content">
                <p>To get started, simply contact us through our website or by email. We'll schedule a consultation to
                    discuss your project requirements, goals, and any specific features you want to include in your
                    website or web application.
            </div>
        </div>

        <div class="accordion-item">
            <h2>Can you create custom web applications tailored to my business needs?</h2>
            <div class="accordion-content">
                <p>Yes, we specialize in developing custom web applications designed to meet specific business
                    requirements, providing unique solutions for your industry or niche.
            </div>
        </div>

        <div class="accordion-item">
            <h2>Can you integrate a payment gateway for e-commerce functionality?</h2>
            <div class="accordion-content">
                <p>Yes, we specialize in integrating secure payment gateways such as PayPal, Stripe, and others to
                    facilitate online transactions for e-commerce websites.
            </div>
        </div>

        <div class="accordion-item">
            <h2>Do you provide ongoing website analytics and performance tracking?</h2>
            <div class="accordion-content">
                <p>We can integrate analytics tools such as Google Analytics to track website performance, user
                    behavior, and other key metrics, providing insights for continuous improvement.
            </div>
        </div>

        <div class="accordion-item">
            <h2>Can you assist with domain registration and hosting services?</h2>
            <div class="accordion-content">
                <p>While our primary focus is on web development, we can provide guidance on domain registration and
                    recommend reliable hosting services to suit your needs.
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
    include("include/footer.php");
    ?>
    <!--=================================
        Footer -->

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
    <script src="js/notcopyable.js"></script>

    <!-- WhatsHelp.io widget -->
    <script type="text/javascript">
        (function() {
            var options = {
                whatsapp: "+919820133303", // WhatsApp number
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
                                    <input type="text" class="form-control" name="fname" id="fname"
                                        aria-describedby="emailHelp" placeholder="Enter full name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email1">Email address</label>
                                    <input type="email" class="form-control" id="email1" name="email1"
                                        aria-describedby="emailHelp" placeholder="Enter email">
                                    <small id="emailHelp" class="form-text text-muted">Your information is safe with
                                        us.</small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="mobile">Contact Number</label>
                                    <input type="number" class="form-control" name="mobile" id="mobile" max-length="10"
                                        aria-describedby="emailHelp" placeholder="Enter Contact Number">
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
    <div class="modal fade bd-example-modal-sm text-center" tabindex="-1" role="dialog"
        aria-labelledby="mySmallModalLabel" aria-hidden="true">
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
                        <li><a href="https://twitter.com/SagarTech2"><i class="fa fa-twitter "></i></a></li>
                        <li><a href="https://www.facebook.com/Sagar-Tech-223839251868625/"><i
                                    class="fa fa-facebook "></i></a></li>
                        <li><a href="https://www.linkedin.com/company/sagar-tech-technical-solutions/"><i
                                    class="fa fa-linkedin"></i></a></li>
                        <li><a href="# "><i class="fa fa-github "></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>

</html>