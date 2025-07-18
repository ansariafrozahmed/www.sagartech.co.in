<?php
include("../include/config.php");
?>
<!doctype html>
<html lang="en">


<head>
    <title>Static Websites Portfolio - Sagar Tech Technical Solutions</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= WEB_URL ?>images/logoonly.jpg" />
    <!-- bootstrap -->
    <link href="<?= WEB_URL ?>css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- REVOLUTION STYLE SHEETS -->
    <link href="<?= WEB_URL ?>revolution/css/settings.css" rel="stylesheet" type="text/css">
    <!-- ADD-ONS CSS FILES -->
    <link href="<?= WEB_URL ?>revolution/css/revolution.addon.particles.css" rel="stylesheet" type="text/css">
    <!-- main style -->
    <link href="<?= WEB_URL ?>css/style.css" rel="stylesheet" type="text/css" />
    <!-- responsive -->
    <link href="<?= WEB_URL ?>css/responsive.css" rel="stylesheet" type="text/css" />
    <!-- custom -->
    <link href="<?= WEB_URL ?>css/custom.css" rel="stylesheet" type="text/css" />
    <link href="<?= WEB_URL ?>css/newcssresponsive.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?= WEB_URL ?>css/portfolio.css">
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

    .maincontent-inner {
        margin-bottom: 30px;
    }

    .maincontent-inner:hover .content-text h2 {
        color: #ff0808;
    }

    .content-text h2:hover {
        text-decoration: underline;
        color: #ff0808;
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
        <h2>Static Websites</h2>
        <ul class="breadcrumbdiv">
            <li><a href="https://sagartech.co.in/">Home</a></li>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-chevron-right">
                <path d="m9 18 6-6-6-6" />
            </svg>
            <li><a href="/portfolio/website">Portfolio</a></li>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-chevron-right">
                <path d="m9 18 6-6-6-6" />
            </svg>
            <li><a style="color: white;">Static Websites Portfolio</a></li>
        </ul>
    </section>

    <div id="Builders" class="content-div">
        <h2 style="text-align: center; font-weight: 600; padding: 10px; font-size: 30px;">Our Static Websites Portfolio
        </h2>
        <hr>
        <div class="maincontent">
            <?php
            // Define an array of interior data
            $Static = array(
                array(
                    "name" => "Capdiw",
                    "imgSrc" => "../portfolio-mockups/education/capdiw.webp",
                    "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, inventore est? Ipsum magni sunt alias voluptas deleniti in explicabo fuga amet.",
                    "link" => "https://capdiw.in/"
                ),
                array(
                    "name" => "Aadhik Logistics",
                    "imgSrc" => "../portfolio-mockups/logistics/adhiklogistics.webp",
                    "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, inventore est? Ipsum magni sunt alias voluptas deleniti in explicabo fuga amet.",
                    "link" => "https://aadhiklogistics.com/"
                ),
                array(
                    "name" => "Be Human",
                    "imgSrc" => "../portfolio-mockups/trust-properties/behuman.webp",
                    "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, inventore est? Ipsum magni sunt alias voluptas deleniti in explicabo fuga amet.",
                    "link" => "https://behumanfoundation.org/"
                ),
                array(
                    "name" => "Kolsa Mohalla",
                    "imgSrc" => "../portfolio-mockups/trust-properties/kolsamohalla.webp",
                    "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, inventore est? Ipsum magni sunt alias voluptas deleniti in explicabo fuga amet.",
                    "link" => "https://kolsamohallamemonjamat.com/"
                ),
                array(
                    "name" => "DPC Saudi",
                    "imgSrc" => "../portfolio-mockups/business/dpcsaudi.webp",
                    "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, inventore est? Ipsum magni sunt alias voluptas deleniti in explicabo fuga amet.",
                    "link" => "https://dpcsaudi.com/"
                ),
                array(
                    "name" => "Ahad Marine",
                    "imgSrc" => "../portfolio-mockups/business/ahadmarine.webp",
                    "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, inventore est? Ipsum magni sunt alias voluptas deleniti in explicabo fuga amet.",
                    "link" => "https://ahadmarine.com/"
                ),
                array(
                    "name" => "Oasis Consulting",
                    "imgSrc" => "../portfolio-mockups/business/oasisconsulting.webp",
                    "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, inventore est? Ipsum magni sunt alias voluptas deleniti in explicabo fuga amet.",
                    "link" => "https://oasisconsultinguae.in/"
                ),
                array(
                    "name" => "SK Cool World",
                    "imgSrc" => "../portfolio-mockups/business/skcoolworld.webp",
                    "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, inventore est? Ipsum magni sunt alias voluptas deleniti in explicabo fuga amet.",
                    "link" => "https://skcoolworld.com/"
                ),
                array(
                    "name" => "Abyaz",
                    "imgSrc" => "../portfolio-mockups/business/abyaz.webp",
                    "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, inventore est? Ipsum magni sunt alias voluptas deleniti in explicabo fuga amet.",
                    "link" => "https://abyaztextiles.com/"
                ),
                array(
                    "name" => "Globex Man Power",
                    "imgSrc" => "../portfolio-mockups/travel/globexmanpower.webp",
                    "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, inventore est? Ipsum magni sunt alias voluptas deleniti in explicabo fuga amet.",
                    "link" => "https://globexmanpower.com/"
                ),
                array(
                    "name" => "Riyaz International",
                    "imgSrc" => "../portfolio-mockups/travel/riyazint.webp",
                    "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, inventore est? Ipsum magni sunt alias voluptas deleniti in explicabo fuga amet.",
                    "link" => "https://www.riyazinternational.com/"
                ),
                array(
                    "name" => "Al Husaini",
                    "imgSrc" => "../portfolio-mockups/travel/alhusaini.webp",
                    "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, inventore est? Ipsum magni sunt alias voluptas deleniti in explicabo fuga amet.",
                    "link" => "https://alhusainitravels.com/"
                ),
                array(
                    "name" => "AMCA Logistics",
                    "imgSrc" => "../portfolio-mockups/logistics/amclogistics.webp",
                    "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, inventore est? Ipsum magni sunt alias voluptas deleniti in explicabo fuga amet.",
                    "link" => "https://www.amclogistic.com/"
                ),
                array(
                    "name" => "Pace matter",
                    "imgSrc" => "../portfolio-mockups/logistics/pacematters.webp",
                    "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, inventore est? Ipsum magni sunt alias voluptas deleniti in explicabo fuga amet.",
                    "link" => "https://pacematters.in/"
                ),
                array(
                    "name" => "Amar Clearing",
                    "imgSrc" => "../portfolio-mockups/logistics/amarclearing.webp",
                    "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, inventore est? Ipsum magni sunt alias voluptas deleniti in explicabo fuga amet.",
                    "link" => "https://amarclearing.com/"
                ),
                array(
                    "name" => "Index Transport",
                    "imgSrc" => "../portfolio-mockups/logistics/index.webp",
                    "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, inventore est? Ipsum magni sunt alias voluptas deleniti in explicabo fuga amet.",
                    "link" => "https://indextransport.com/"
                ),
                array(
                    "name" => "Mars Air Ocean",
                    "imgSrc" => "../portfolio-mockups/logistics/marsairocean.webp",
                    "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, inventore est? Ipsum magni sunt alias voluptas deleniti in explicabo fuga amet.",
                    "link" => "https://marsairocean.com/"
                ),
                array(
                    "name" => "Al nizami",
                    "imgSrc" => "../portfolio-mockups/restaurants/alnizami.webp",
                    "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, inventore est? Ipsum magni sunt alias voluptas deleniti in explicabo fuga amet.",
                    "link" => "https://alnizamidarbar.com/"
                ),
                array(
                    "name" => "Padmavati Chains",
                    "imgSrc" => "../portfolio-mockups/catalogue/padmavatichains.webp",
                    "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, inventore est? Ipsum magni sunt alias voluptas deleniti in explicabo fuga amet.",
                    "link" => "https://padmavatichains.com/"
                ),
                array(
                    "name" => "Redsail Exports",
                    "imgSrc" => "../portfolio-mockups/catalogue/redsailexports.webp",
                    "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, inventore est? Ipsum magni sunt alias voluptas deleniti in explicabo fuga amet.",
                    "link" => "https://redsailexports.com/"
                ),
                array(
                    "name" => "East Man Infra",
                    "imgSrc" => "../portfolio-mockups/builders/eastman_infra.webp",
                    "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, inventore est? Ipsum magni sunt alias voluptas deleniti in explicabo fuga amet.",
                    "link" => "https://eastmaninfra.com/"
                ),
                array(
                    "name" => "Archic Green Scape",
                    "imgSrc" => "../portfolio-mockups/builders/archicgreenscape.webp",
                    "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, inventore est? Ipsum magni sunt alias voluptas deleniti in explicabo fuga amet.",
                    "link" => "https://archicgreenscape.com/"
                ),
            );

            // Loop through the interior data and generate HTML for each item
            foreach ($Static as $item) {
                echo '<div class="maincontent-inner">';
                echo '<div class="imgdiv">';
                echo '<a href="' . $item["link"] . '" target="_blank"><img src="' . $item["imgSrc"] . '" alt="' . $item["name"] . '"></a>';
                echo '</div>';
                echo '<div class="content-text">';
                echo '<a href="' . $item["link"] . '" target="_blank"><h2>' . $item["name"] . '</h2></a>';
                // echo '<p>' . $item["description"] . '</p>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>

    </div>






    <!-- <h3>FAQs</h3>
    <div class="accordion">
        <div class="accordion-item">
            <h2>Why do I need professional web development services?</h2>
            <div class="accordion-content">
                <p>Professional web development services ensure that your website is created with the latest technologies, adheres to industry standards, and provides a seamless user experience. This can enhance your online presence and business credibility.
            </div>
        </div>

        <div class="accordion-item">
            <h2>What technologies do you use for web development?</h2>
            <div class="accordion-content">
                <p>We utilize a variety of technologies, including HTML, CSS, JavaScript, PHP, Python, Ruby on Rails, and various content management systems (CMS) like WordPress, Drupal, and Joomla, depending on the project requirements.
            </div>
        </div>

        <div class="accordion-item">
            <h2>Do you provide e-commerce development services?</h2>
            <div class="accordion-content">
                <p>Yes, we specialize in e-commerce development, creating secure and user-friendly online stores. Our solutions include payment gateway integration, product management, and order processing features.
            </div>
        </div>

        <div class="accordion-item">
            <h2>How long does it take to develop a website?</h2>
            <div class="accordion-content">
                <p>The timeline for web development varies depending on the complexity and scope of the project. Simple websites may take a few weeks, while more complex projects, such as e-commerce platforms, can take several months.
            </div>
        </div>

        <div class="accordion-item">
            <h2>How can i get started with your web development services?</h2>
            <div class="accordion-content">
                <p>To get started, simply contact us through our website or by email. We'll schedule a consultation to discuss your project requirements, goals, and any specific features you want to include in your website or web application.
            </div>
        </div>

        <div class="accordion-item">
            <h2>Can you create custom web applications tailored to my business needs?</h2>
            <div class="accordion-content">
                <p>Yes, we specialize in developing custom web applications designed to meet specific business requirements, providing unique solutions for your industry or niche.
            </div>
        </div>

        <div class="accordion-item">
            <h2>Can you integrate a payment gateway for e-commerce functionality?</h2>
            <div class="accordion-content">
                <p>Yes, we specialize in integrating secure payment gateways such as PayPal, Stripe, and others to facilitate online transactions for e-commerce websites.
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
    </div> -->
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
    include("../include/footer.php");
    ?>

    <script src="../js/jquery.min.js"></script>
    <script src="../js/custom.js"></script>

    <script type="text/javascript">
        (function () {
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
            s.onload = function () {
                WhWidgetSendButton.init(host, proto, options);
            };
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        })();
    </script>
</body>

</html>