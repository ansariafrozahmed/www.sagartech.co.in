<?php
include 'include/config.php';
?>
<!doctype html>
<html lang="en">

<head>
    <title>Top notch Logo Design Services In Mumbai Let’s Create the Master Piece.</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="We are leading logo design services provider in Mumbai. We are experts in turning your visionary dream into reality but providing the best logo services">
    <meta name="keywords" content="logo design services">

    <meta property="og:type" content="website">
    <meta property="og:title" content="Top notch Logo Design Services In Mumbai Let’s  Create the Master Piece">
    <meta property="og:url" content="https://sagartech.co.in/logo-design-service">
    <meta property="og:image" content="https://sagartech.co.in/images/bg/logo-page-logo.png">
    <meta property="og:description" content="We are leading logo design services provider in Mumbai. We are experts in turning your visionary dream into reality but providing the best logo services">
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/logoonly.jpg" />
    <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
    <!-- bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- main style -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!-- responsive -->
    <link href="css/responsive.css" rel="stylesheet" type="text/css" />
    <!-- custom -->
    <link href="css/custom.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/web-dev.css" ype="text/css">
    <!-- <link rel="stylesheet" href="css/logo-design.css"> -->
    <link href="css/newcssresponsive.css" rel="stylesheet" type="text/css" />
</head>
<style>
    .herosectionnew {
        position: relative;
        padding: 70px 60px;
        overflow: hidden;
        /* background-image: url("https://images.unsplash.com/photo-1607743386760-88ac62b89b8a?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"); */
        background-position: left;
        background-repeat: no-repeat;
        background-size: cover;
        color: white;
    }

    .herosectionnew h1 {
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
        width: 50%;
        color: white;
        margin-top: 10px;
    }

    .herobuttonsnew {
        display: flex;
        gap: 10px;
        align-items: center;
        justify-content: start;
    }

    .buttonsss {
        background-color: red;
        padding: 10px 20px;
        color: white;
        border-radius: 0.5rem;
        text-decoration: none;
        border: 1px solid red;
    }

    .buttonsss:hover {
        background-color: white;
        color: red !important;
        border: 1px solid red;
    }

    @media only screen and (max-width: 999px) {
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

    .secondsection {
        display: flex;
        padding: 50px;
        width: 100%;
        gap: 20px;
    }

    .secondsection .left {
        width: 55%;
        margin:auto 0px;
        padding: 20px 10px;
    }

    .left h2 {
        font-size: 35px;
        line-height: normal;
        font-weight: 600;
    }

    .left h3 {
        font-size: 20px;
    }

    .secondsection .right {
        width: 45%;
    }

    .secondsection .right img {
        height: 100%;
        width: 100%;
        object-fit: contain;
    }

    @media only screen and (max-width: 999px) {
        .secondsection {
            display: flex;
            flex-direction: column;
            padding: 20px;
            width: 100%;
            gap: 20px;
        }

        .secondsection .left {
            width: 100%;
            padding: 10px;
        }

        .left h2 {
            font-size: 30px;
            font-weight: 600;
            line-height: normal;
        }

        .left h3 {
            font-size: 16px;
            line-height: normal;
        }

        .secondsection .right {
            width: 100%;
        }

        .secondsection .right img {
            height: 100%;
            width: 100%;
            object-fit: contain;
        }
    }

    .thirdsection {
        padding: 50px;
    }

    .thirdsection h2 {
        font-size: 30px;
        font-weight: 600;
    }

    .videosection {
        padding: 10px 0px;
        height: 300px;
        width: 70%;
    }

    .videosection iframe {
        height: 100%;
        width: 100%;
    }

    .thirdsection p {
        padding-right: 50px;
    }

    @media only screen and (max-width: 999px) {
        .thirdsection {
            padding: 20px;
        }

        .thirdsection h2 {
            font-size: 30px;
            font-weight: 600;
        }

        .videosection {
            padding: 10px 0px;
        }

        .thirdsection p {
            padding-right: 0px;
        }

        .videosection {
            padding: 10px 0px;
            height: 300px;
            width: 100%;
        }

        .videosection iframe {
            height: 100%;
            width: 100%;
        }
    }

    .fourthsection {
        padding: 20px 50px;
        background-color: #222222;
        text-align: center;
        /* line-height: 1; */
    }

    .fourthsection h2 {
        color: white;
        font-size: 35px;
        margin-bottom: -10px;
        font-weight: 600;
    }

    .fourthsection h3 {
        color: white;
        font-size: 18px;
        margin-bottom: 10px;
    }

    .fourthsection .aa {
        color: white;
        background-color: #ff0808;
        padding: 10px 20px;
        border-radius: 10px;
    }

    @media only screen and (max-width: 700px) {
        .fourthsection {
            padding: 20px;
            background-color: #222222;
            text-align: center;
            /* line-height: 1; */
        }

        .fourthsection h2 {
            color: white;
            font-size: 25px;
            margin-bottom: -10px;
            font-weight: 600;
        }

        .fourthsection h3 {
            color: white;
            font-size: 15px;
            margin-bottom: 10px;
        }

        .fourthsection a {
            color: white;
            background-color: #ff0808;
            padding: 10px 20px;
            border-radius: 10px;
        }
    }

    .fifthsection {
        padding: 50px;
        background-color: #f2f2f2;
        text-align: center;
    }

    .fifthsection h2 {
        font-size: 38px;
        font-weight: 700;
    }

    .logosec {
        padding: 30px;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
        gap: 30px;
    }

    .imgdiv {
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        border: 5px solid white;
        background-color: white;
    }

    .imgdiv img {
        height: 100%;
        width: 100%;
        object-fit: contain;
    }

    @media only screen and (max-width: 999px) {
        .fifthsection {
            padding: 20px;
            text-align: center;
        }

        .fifthsection h2 {
            font-size: 25px;
            font-weight: 600;
        }

        .logosec {
            padding: 10px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }
    }

    /*-------------Accordian-----------------*/
    .faqs-heading {
        text-align: center;
        margin: 1em 0;
        font-weight: 700;
        font-size: 50px;
        color: #212121;
    }
    /* h3 {
        text-align: center;
        margin: 1em 0;
        font-weight: 700;
        font-size: 50px;
        color: #212121;
    } */

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
    cursor: pointer;
    }

    .carddd:hover {
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    }

    .carddd > .image {
    width: 70px;
    height: 70px;
    transition: all 0.1s ease-in-out;
    }

    .carddd > .h1 {
    font-size: 20px;
    font-weight: 600;
    text-align: center;
    }

    .carddd > .p {
    color: #9e9da1;
    font-size: 14px;
    text-align: justify;
    overflow: hidden;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 6;
    }

    .button-62 {
  background: linear-gradient(to bottom right, #FF0808, #fc6262);
  border: 0;
  margin-top:20px;
  border-radius: 12px;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: -apple-system,system-ui,"Segoe UI",Roboto,Helvetica,Arial,sans-serif;
  font-size: 16px;
  font-weight: 500;
  line-height: 2.5;
  outline: transparent;
  padding: 5px 30px;
  text-align: center;
  text-decoration: none;
  transition: box-shadow .2s ease-in-out;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  white-space: nowrap;
}

.button-62:not([disabled]):focus {
  box-shadow: 0 0 .25rem rgba(0, 0, 0, 0.5), -.125rem -.125rem 1rem rgba(239, 71, 101, 0.5), .125rem .125rem 1rem rgba(255, 154, 90, 0.5);
}

.button-62:not([disabled]):hover {
  box-shadow: 0 0 .25rem rgba(0, 0, 0, 0.5), -.125rem -.125rem 1rem rgba(239, 71, 101, 0.5), .125rem .125rem 1rem rgba(255, 154, 90, 0.5);
  color:white;
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
    $page = 'services';
    include("include/newHeader.php");
    //include('include/header1.php');
    ?>
    <!-- /HEADER END -->
    <div class="herosectionnew" style="background-image: url(./banner/background.webp);">
        <h1>Best Logo Design Services In Mumbai</h1>
        <ul class="herobreadrumb">
            <li>Home</li>
            <li>/</li>
            <li>Logo Designing Services</li>
        </ul>
        <p class="herosectionpara">
            <a class="interlink" href="https://sagartech.co.in/">Sagar Tech Technical Solution</a> is proud to be a leading provider of logo design services. Your Logo is the Face Of Your Brand. Our expert designers work with you to create memorable logos that reflect your brand identity and values Our logo design journey begins by getting to know your brand inside out its values, vision, and unique characteristics.
        </p>
        <div class="herobuttonsnew">
            <!-- <a href="#" class="button">Quick Enquiry</a> -->
            <a href="portfolio/logo" class="buttonsss">View Portfolio</a>
            <?php
            // require('include/quote-modal.php')
            ?>
        </div>
    </div>



    <div class="secondsection">
        <div class="left">
            <h2>Logo Design Services For Business</h2>
            <!-- <h3 style="text-align: left;">Go beyond the template - inspire a unique vision</h3> -->
            <There>A logo is a visual representation that expresses a lot about your company and is more than just a simple graphic element. Your logo is often the first visual interaction with the customer. A well-designed logo ensures instant recognition, making your brand more memorable. Understanding the importance of logo design is essential for making an unforgettable impression on your target audience, regardless of the size of your business. There we come Sagar Tech Technical Solutions leading <a class="interlink" href="graphic-design-services">Graphic Designing Service</a> provider.</p>
            <div class="herobuttonsnew">
                <a href="contact" class="buttonsss">Let's Discuss Your Requirement</a>
            </div>
        </div>
        <div class="right">
            <img src="./client-logos/logo-mockupp.webp" alt="">
        </div>
    </div>


    <div class="typesofsection">
        <h2>Why Choose Sagar Tech Technical Solution For Logo Design Services</h2>
        <!-- <h3>subtitle</h3> -->
        <p>When it comes to crafting the face of your brand, Sagartech Technical Solution emerges as the ideal choice, bringing a blend of creativity, expertise, and client-focused collaboration to the forefront. We stand out as the perfect partner for logo design. Here's why choosing us is a decision that goes beyond just getting a logo</p>
        <div class="typesofcard">
            <!-- <a href="ecommerce-website-design-service"> -->
                <div class="carddd">
                <img src="icons/abilities.png" height="70px" alt="">
                <!-- <p class="number-h1">01</p> -->
                <p class="h1">Skilled Designers</p>
                <p class="p">Experience matters when designing logos. We at Sagartech are proud to have a group of accomplished designers because of their vast knowledge. They can expertly handle the complexities of design, guaranteeing that your logo is not only visually appealing but also carefully thought out for optimal impact. Therefore, we are leading logo design services provider in mumbai.</p>
            </div>
            <!-- </a> -->
            <!-- <a href="blog-website-development"> -->
                <div class="carddd">
                <img src="icons/unique.png" height="70px"  alt="">
                <!-- <p class="number-h1">01</p> -->
                <p class="h1">Unique Design Concepts</p>
                <p class="p">We are aware of the fact that diversity is essential to identifying the ideal match for your company Sagar Tech Technical Solutions provides unique design concepts for you to choose from. This collaborative approach ensures that you have options and can actively participate in the creative process, resulting in a logo that truly resonates with your vision.</p>
            </div>
            <!-- </a> -->
            <!-- <a href="web-development-company-mumbai"> -->
                <div class="carddd">
                <img src="icons/budget.webp" height="70px"  alt="">
                <!-- <p class="number-h1">01</p> -->
                <p class="h1">Reasonably Priced Packages</p>
                <p class="p">High-quality logo design shouldn't be too costly. Packages from Sagartech Technical Solution are reasonably priced and designed to accommodate companies of all sizes. Our dedication to offering affordable solutions guarantees that you will receive Five Star design services without going over budget.</p>
            </div>
            <!-- </a> -->
        </div>
        <div class="herobuttonssssnew" style="margin-top: 10px; padding: 10px;">
            <!-- <a href="Capdiw-Logo-Designing-process.pdf" target="_blank" class="buttonsss">Our Logo Designing Method</a> -->
        </div>
    </div>

    



    <div class="fifthsection">
        <h2 style="text-transform:uppercase;">Our Logo <span style="color:#FF0808;">Design Portfolio</span></h2>
        <div class="logosec">
            <?php
      $imageUrls = [
        "client-logos/Ahlid Perfumes logo.webp",
        "client-logos/Capdiw.webp",
        "client-logos/GLOBEX-LOGO.webp",
        "client-logos/Eperts4Expats.webp",
        "client-logos/Stoneart Logo.webp",
        "client-logos/OasisConsulting.webp",
        "client-logos/neugenz.png",
        "client-logos/Eurocorp Logo.webp",
        "client-logos/MetalTech portable cabin MTPC.webp",
        "client-logos/Fosher_blacktxt_logo.png",
      ];

      foreach ($imageUrls as $imageUrl) {
        echo '<div class="imgdiv">';
        echo '<img src="' . $imageUrl . '" alt="Client Logo">';
        echo '</div>';
      }
    ?>
        </div>

        <div>
            <a href="<?= WEB_URL ?>portfolio/logo">
                <button class="button-62">VIEW ALL</button>
            </a>
        </div>
    </div>



    <div class="fourthsection">
        <h2>What can we do for you?</h2>
        <h3>We would be happy to discuss the project with you in person</h3>
        <!-- <a href="" class="aa">DROP IN A MESSAGE</a> -->
        <?php
         include 'include/quote.php' 
        ?>
    </div>



    <h3 class="faqs-heading">FAQs</h3>
    <div class="accordion">
        <div class="accordion-item">
            <h2>What is logo design?</h2>
            <div class="accordion-content">
                <p>
                    Logo design is the process of creating a distinct visual symbol to represent a brand. It is an important part of branding and helps businesses establish their identity.
                </p>
            </div>
        </div>

        <div class="accordion-item">
            <h2>Why is logo design important for my business?</h2>
            <div class="accordion-content">
                <p>
                    A well-designed logo can help your company stand out and remain memorable to customers. It can also convey the essence of your brand and make an excellent first impression.
                </p>
            </div>
        </div>

        <div class="accordion-item">
            <h2>How does Sagar Tech Technical Solution create logos?</h2>
            <div class="accordion-content">
                <p>
                    At Sagar Tech Technical Solution, we begin by learning about your brand, target audience, and design preferences. We then develop several concepts and improve them based on your feedback until we have a logo that you love.
                </p>
            </div>
        </div>

        <div class="accordion-item">
            <h2>Can you help me design a brand logo?</h2>
            <div class="accordion-content">
                <p>
                    Yes, we specialize in creating brand logos that effectively represent your brand's values and identity.
                </p>
            </div>
        </div>

        <div class="accordion-item">
            <h2>Do you offer the best logo design services?</h2>
            <div class="accordion-content">
                    <p>
                        We strive to offer high-quality logo design services that meet and exceed our clients' expectations. Our goal is to create logos that are not only visually appealing but also effectively represent our clients' brands.
                    </p>
            </div>
        </div>

        <div class="accordion-item">
            <h2>Can I see examples of logos you have designed?</h2>
            <div class="accordion-content">
                <p>
                    Yes, we can provide you with a portfolio of our previous work to help you understand our design style and skills.
                </p>
            </div>
        </div>

        <div class="accordion-item">
            <h2>How much does logo design services cost at Sagar Tech Technical Solution?</h2>
            <div class="accordion-content">
                <p>
                    The cost of logo design services varies according to the size of the project. Please contact us for a quote based on your exact specifications.
                </p>
            </div>
        </div>

        <div class="accordion-item">
            <h2>How can I get started with logo design services at Sagar Tech Technical Solution?</h2>
            <div class="accordion-content">
                <p>
                    To get started, simply contact us through our website or give us a call. We will schedule a consultation to discuss your logo design needs and provide you with a quote based on your requirements.
                </p>
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



    <?php include 'blogSectionHome.php' ?>


    <!--======= Breadcrumb Left With BG Image =======-->
    <!-- <section class="overview-block-ptb iq-over-black-70 jarallax iq-breadcrumb3 text-left iq-font-white" style="background-image: url('images/bg/logo-slider.jpg'); background-position: center center; background-repeat: no-repeat; background-size: cover;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-12">
                    <h1 class="iq-font-white" style="font-weight: bold;text-align: left;">Logo Design Company</h1>
                    <ol class="breadcrumb" style="margin-left: -10px;margin-top: 10px;">
                        <li class="breadcrumb-item"><a href="index"><i class="ion-android-home"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="graphic-design-service"><i class="fa fa-desktop"></i> Graphic Designer</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Logo Designing</li>
                    </ol>
                </div>
            </div>
        </div>
    </section> -->
    <!--======= Breadcrumb Left With BG Image =======-->
    <!--=================================
MAIN CONTENT -->
    <!-- <div class="main-content">
        <section class="iq-action-blog overview-block-pt particles-bg newsection-st" style="margin: 0px 0px 0px 0px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 heading-title" style="margin: 0px;">
                        <h2 class="iq-tw-6 small-title iq-font-dark">Why logo is necessary for your business?</h2>
                        <p class="iq-mb-0 p-0" style="text-align: justify; font-size: 16px;margin-bottom: 0;">A logo is an essential element of any business's branding and marketing efforts. It is a visual representation of a company's identity and serves as a symbol that helps customers identify and remember the business. A well-designed logo can create a powerful first impression and convey a company's values and personality.</p>
                        <p class="iq-mb-0 p-0" style="text-align: justify; font-size: 16px;margin-bottom: 0;">A logo can also set a business apart from its competitors and establish its credibility and professionalism. It helps to create brand recognition, making it easier for customers to remember and recommend the business. Additionally, a logo can be used across various marketing materials, such as business cards, brochures, and websites, providing a consistent and cohesive brand image.</p>
                        <p class="iq-mb-0 p-0" style="text-align: justify; font-size: 16px;">Overall, a logo is a necessary tool for building a strong brand identity, establishing trust and recognition with customers, and setting a business apart in a crowded marketplace.</p>
                    </div>
                </div>
            </div>


    </div>
    </section> -->











    <!--<section class="iq-action-blog overview-block-pt particles-bg" style="margin: 30px 0px 70px 0px;">-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col-md-4" style="height: 500px; margin-right: 45px;">-->

    <!--                <div class="web-design-heading">-->
    <!--                    <h2>We ♡ Developing<br> Websites</h2>-->
    <!--                    <div class="web-design-border"></div>-->
    <!--                    <p>Developing websites is not just a devloping a code to me, it’s our passion. We are personally-->
    <!--                        connected to everything We create. That personal investment is what drives me towards-->
    <!--                        creating truly awesome responsive websites. </p>-->
    <!--                </div>-->

    <!--<div class="dynamic-buttonsss">-->

    <!--  <a href="">dynamic website <i class="fa fa-caret-right" aria-hidden="true"></i></a>-->

    <!--</div>-->


    <!--            </div>-->
    <!--            <div class="col-md-7" style="margin-bottom: 40px;">-->
    <!--                <div class="web-design-heading2">-->
    <!--                    <h2>Website Development Features</h2>-->

    <!--                    <div class="row background-sadow">-->
    <!--                        <div class="col-md-6 background-white border-bottem">-->

    <!--                            <h6> CONVERSION RATE</h6>-->
    <!--                            <p>We design unique custom website design with an eye catching on conversion-->
    <!--                                optimisation, all to achieve your business goals.</p>-->
    <!--                        </div>-->
    <!--                        <div class="col-md-6 background-white border-bottem border-left-p">-->
    <!--                            <h6>MOBILE RESPONSIVE</h6>-->
    <!--                            <p>We can create a device responsive website design for your bussiness, that is-->
    <!--                                optimised to look great and work well on devices.</p>-->


    <!--                        </div>-->
    <!--                        <div class="col-md-6 background-white">-->

    <!--                            <h6> WEBSITE HOSTING</h6>-->
    <!--                            <p>We provide SSD based litespeed web servers, which maintained to very high levels of-->
    <!--                                reliability with backup and security features.</p>-->
    <!--                        </div>-->
    <!--                        <div class="col-md-6 background-white border-left-p">-->
    <!--                            <div class="float-left"><i class="fa-facebook-official" aria-hidden="true"></i></div>-->
    <!--                            <h6>SOCIAL MEDIA</h6>-->
    <!--                            <p>We will integrate social sharing buttonsss to networks such as Facebook, YouTube,-->
    <!--                                Twitter, Pinterest and Instagram to your website.</p>-->

    <!--                        </div>-->
    <!--                    </div>-->

    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->

    <!--FAQ SECTION-->
    <!--<section class="iq-action-blog pt-2  particles-bg" style="margin: 30px 0px 70px 0px;">-->
    <!--    <div class="container faqcont">-->
    <!--        <div class="col-md-12 text-center pb-4">-->
    <!--            <h3 class="abel"><i><img src="images/faq.png" class="img-fluid fimg"></i>Frequently Asked Questions</h3>-->
    <!--        </div>-->
    <!--        <div class="row">-->
    <!--            <div class="col-md-1 p-2 text-center"><i class="fa fa-question-circle fa-5x text-red"></i></div>-->
    <!--            <div class="col-md-3 p-2 gmd-2 gmd">-->
    <!--                <h5>Do You Offer Any Design Templates?</h5>-->
    <!--                <p>Yes we do have design templates for various domains. We can design your Website using the design templates or make Customized Design as per your requirement, <a href="portfolio">click</a> to see our work.</p>-->
    <!--            </div>-->
    <!--            <div class="col-md-1 p-2 text-center"><i class="fa fa-question-circle fa-5x text-red"></i></div>-->
    <!--            <div class="col-md-3 p-2 gmd-2 gmd">-->
    <!--                <h5>How Long Does It Take To Create A Website?</h5>-->
    <!--                <p>Static web design work can take 3 – 4 days, depending on the content availibility and revisions.</p>-->
    <!--            </div>-->
    <!--            <div class="col-md-1 p-2 text-center"><i class="fa fa-question-circle fa-5x text-red"></i></div>-->
    <!--            <div class="col-md-3 p-2 gmd-2 gmd">-->
    <!--                <h5>Will my site be search engine optimised?</h5>-->
    <!--                <p>My designed website will be SEO Freindly but you might consider our professional  SEO services for good result.</p>-->
    <!--            </div>-->
    <!--        </div>   -->
    <!--        <div class="row">-->
    <!--            <div class="col-md-1 p-2 text-center"><i class="fa fa-question-circle fa-5x text-red"></i></div>-->
    <!--            <div class="col-md-3 gmd-2">-->
    <!--                <h5>When Is Payment Required For Your Website?</h5>-->
    <!--                <p>For static package 50% of the estimated fee must be provided prior to beginning work remaining on before launching.</p>-->
    <!--            </div>-->
    <!--            <div class="col-md-1 p-2 text-center"><i class="fa fa-question-circle fa-5x text-red"></i></div>-->
    <!--            <div class="col-md-3 gmd-2">-->
    <!--                <h5>Will my website work on mobile devices?</h5>-->
    <!--                <p>Yes, using responsive design we ensure your sites work on all devices, including desktops, tablets and mobiles.</p>-->
    <!--            </div>-->
    <!--            <div class="col-md-1 p-2 text-center"><i class="fa fa-question-circle fa-5x text-red"></i></div>-->
    <!--            <div class="col-md-3 gmd-2">-->
    <!--                <h5>Difference between stater vs custom web design.</h5>-->
    <!--                <p>Custom web design is design that has been personalised for the specific needs and identity of the business.</p>-->
    <!--            </div>-->
    <!--        </div> -->
    <!--    </div>-->

    <!--</section>-->


    <!--<section class="iq-action-blog overview-block particles-bg" style="margin: 10px 0px 70px 0px;">-->
    <!--           <div class="container">-->
    <!--               <div class="row">-->
    <!--                   <div class="col-md-12 text-center">-->
    <!--                   <h3 class="abel"><i><img src="images/faq.png" class="img-fluid fimg"></i>Frequently Asked Questions</h3>-->
    <!--                   </div>-->
    <!--               </div>-->
    <!--               <div class="row pt-4">-->
    <!--                   <div class="col-md-6">-->
    <!--                       <ul class="">-->
    <!--                           <li class="c-faq" onclick="someFunction(this,'q1')">-->
    <!--                             <span class="c-faq__title q1" >Do You Offer Any Design Templates?</span>-->

    <!--                           </li>-->
    <!--                           <li class="c-faq" onclick="someFunction(this,'q2')">-->
    <!--                             <span class="c-faq__title q2">How Long Does It Take To Create A Website?</span>-->

    <!--                           </li>-->
    <!--                           <li class="c-faq" onclick="someFunction(this,'q3')">-->
    <!--                             <span class="c-faq__title q3">Will my site be search engine optimised?</span>-->

    <!--                           </li>-->
    <!--                           <li class="c-faq" onclick="someFunction(this,'q4')">-->
    <!--                             <span class="c-faq__title q4">Difference between stater vs custom web design.</span>-->

    <!--                           </li>-->
    <!--                           <li class="c-faq" onclick="someFunction(this,'q5')">-->
    <!--                             <span class="c-faq__title q5">Will my website work on mobile devices?</span>-->

    <!--                           </li>-->
    <!--                           <li class="c-faq" onclick="someFunction(this,'q6')">-->
    <!--                             <span class="c-faq__title q6">When Is Payment Required For Your Website?</span>-->

    <!--                           </li>-->
    <!--                       </ul>/end c-faqs -->
    <!--                   </div>-->
    <!--                   <div class="col-md-6">-->
    <!--                       <div class="c-faq__answer faqans" id="q1">Yes we do have design templates for various domains. We can design your Website using the design templates or make Customized Design as per your requirement, <a href="portfolio">click</a> to see our work.</div>-->
    <!--                       <div class="c-faq__answer faqans" id="q2">Static web design work can take 3 – 4 days, depending on the content availibility and revisions.</div>-->
    <!--                       <div class="c-faq__answer faqans" id="q3">Our designed website will be SEO Freindly but you might consider our professional  SEO services for good result.</div>-->
    <!--                       <div class="c-faq__answer faqans" id="q6">For static package 50% of the estimated fee must be provided prior to beginning work remaining on before launching.</div>-->
    <!--                       <div class="c-faq__answer faqans" id="q5">Yes, using responsive design we ensure your sites work on all devices, including desktops, tablets and mobiles.</div>-->
    <!--                       <div class="c-faq__answer faqans" id="q4">Custom web design is design that has been personalised for the specific needs and identity of the business.</div>-->
    <!--                   </div>-->
    <!--               </div>-->
    <!--           </div>-->
    <!--       </section>-->


    <!--=================================
Action Box -->
    <!-- </div> -->
    <!--================================
Main content -->
    <!--=================================
Footer -->
    <!-- <style>
        .fimg {
            width: 6% !important;
        }

        .accordion {
            background-color: #ff0808;
            color: #eee;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
            margin-top: 0px;
            margin-bottom: 20px;
            font-weight: bold;
            border-radius: 10px;
        }


        .w3-animate-top {
            position: relative;
            animation: animatetop 1.5s
        }

        @keyframes animatetop {
            from {
                top: -200px;
                opacity: 0
            }

            to {
                top: 0;
                opacity: 1
            }
        }

        .w3-animate-bottom {
            position: relative;
            animation: animatebottom 1.5s
        }

        @keyframes animatebottom {
            from {
                bottom: -200px;
                opacity: 0
            }

            to {
                bottom: 0;
                opacity: 1
            }
        }

        .w3-animate-opacity {
            animation: opac 3s
        }

        @keyframes opac {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }



        .actives,
        .accordion:hover {
            background-color: #000;
        }

        .panel {
            padding: 0 18px;
            background-color: white;
            max-height: 0;
            overflow: hidden;
            transition: max-height .8s ease-out;
            font-weight: 600;
            color: #000;
        }
    </style>
    <section class="faq" id="faqsection" style="padding: 40px 0px 0px;">
        <div class="container">
            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container wow fadeInUp" style="margin-bottom: 30px;">
                <div class="col-md-12 text-center pb-4">
                    <h3 class="abel"><i><img src="images/faq.png" alt="faq" class="img-fluid fimg"></i>&nbsp;&nbsp;&nbsp;Frequently Asked Questions</h3>
                </div>
                <button class="accordion w3-animate-bottom">Can I use a generic or pre-made logo for my business?</button>
                <div class="panel">
                    <div id="1471940310033-e04cce97-a81d" class="vc_toggle vc_toggle_square vc_toggle_color_black vc_toggle_color_inverted vc_toggle_size_md vc_toggle_active" style="display:flex">
                        <i class='far fa-arrow-alt-circle-right' style='font-size:30px'></i>&nbsp;&nbsp;
                        <p>It's not recommended. A logo should be unique and tailored to the specific needs and values of the business. Using a generic or pre-made logo can make the business appear unprofessional and not credible.</p>
                    </div>
                </div>

                <button class="accordion w3-animate-bottom">How important is color in logo design?</button>
                <div class="panel">
                    <div id="1471940310033-e04cce97-a81d" class="vc_toggle vc_toggle_square vc_toggle_color_black vc_toggle_color_inverted vc_toggle_size_md vc_toggle_active" style="display:flex">
                        <i class='far fa-arrow-alt-circle-right' style='font-size:30px'></i>&nbsp;&nbsp;
                        <p>Color is an essential element of logo design because it can evoke emotions and convey meanings. Different colors can represent different things, such as blue for trust and stability or red for passion and energy. Choosing the right colors for a logo is crucial to creating a memorable and effective design.</p>
                    </div>
                </div>

                <button class="accordion w3-animate-bottom">Can a logo change over time?</button>
                <div class="panel">
                    <div id="1471940310033-e04cce97-a81d" class="vc_toggle vc_toggle_square vc_toggle_color_black vc_toggle_color_inverted vc_toggle_size_md vc_toggle_active" style="display:flex">
                        <i class='far fa-arrow-alt-circle-right' style='font-size:30px'></i>&nbsp;&nbsp;
                        <p>Yes, a logo can change over time as a business evolves and grows. However, it's important to maintain some consistency in the overall brand identity to ensure continued recognition and trust from customers. Major changes to a logo should be made with careful consideration and planning.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("actives");
                var panel = this.nextElementSibling;

                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
    </script> -->
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
        function someFunction(obj, abc) {
            // alert(abc);
            // alert($(obj).attr('class'));
            $(".faqans").css("display", "none");
            $("#" + abc).css("display", "block");

        }
    </script>
    <!-- /WhatsHelp.io widget -->
    <!--Login -->
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
                        <li><a href="https://twitter.com/SagarTech2"><i class="fa fa-twitter "></i></a></li>
                        <li><a href="https://www.facebook.com/Sagar-Tech-223839251868625/"><i class="fa fa-facebook "></i></a></li>
                        <li><a href="https://www.linkedin.com/in/sagar-tech-151800177/"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="# "><i class="fa fa-github "></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>

<!-- Mirrored from iqonicthemes.com/themes/qwilo/qwilo/about-us-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Oct 2019 14:24:12 GMT -->


</html>