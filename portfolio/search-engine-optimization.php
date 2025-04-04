<?php
include("../include/config.php");
?>
<!doctype html>
<html lang="en">


<head>
    <title>Best SEO Portfolio | See our Top SEO Projects & Results</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Check the Best SEO Portfolio, which includes outstanding projects with track records. Check out how our experience helps customers with traffic, rankings, and growth. Visit now!">
    <meta name="keywords" content=" Best SEO Portfolio">
    <!-- Favicon -->
    <link rel="shortcut icon" href="../images/logoonly.jpg" />
    <link rel="canonical" href="https://sagartech.co.in/portfolio/search-engine-optimization">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Best SEO Portfolio | See our Top SEO Projects & Results">
    <meta property="og:description"
        content="Check the Best SEO Portfolio, which includes outstanding projects with track records. Check out how our experience helps customers with traffic, rankings, and growth. Visit now!">
    <meta property="og:url" content="https://sagartech.co.in/portfolio/search-engine-optimization">
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

    
    .seo-result-main-content {
        /* padding:50px 60px; */
        padding:15px 15px;

    }
    .seo-result-main-content .seo-result-inner {
        display:flex;
        width: 100%;
        gap:50px;
    }
    .seo-result-inner {
        padding:10px 30px;
        border-radius:10px;
        margin-bottom:20px;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }
    .seo-result-inner .inner-left {
        width: 40%;
    }
    .seo-result-inner .inner-left img {
        height: 100%;
        width: 100%;
        object-fit:contain;
    }
    .seo-result-inner .inner-right {
        width: 60%;
        margin:50px 0px;
    }
    .inner-right .client {
        font-size:15px;
        margin-bottom:-10px;
        font-weight:600;
        color:#ff0808;
        text-transform:uppercase;
    }
    .inner-right .keyword {
        font-size:28px;
        font-weight:600;
    }
    .inner-right .desc {
        font-size:15px;
    }

    @media only screen and (min-width: 768px) and (max-width: 1024px) {
        .seo-result-main-content {
        padding:50px;

    }
    .seo-result-main-content .seo-result-inner {
        display:flex;
        width: 100%;
        gap:20px;
    }
    .seo-result-inner {
        padding:20px;
        border-radius:10px;
        margin-bottom:20px;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }
    .seo-result-inner .inner-left {
        width: 35%;
    }
    .seo-result-inner .inner-left img {
        height:100px;
        /* width: 100%; */
        /* object-fit:contain; */
    }
    .seo-result-inner .inner-right {
        width: 65%;
        margin:20px 0px;
    }
    .inner-right .client {
        font-size:13px;
        margin-bottom:-10px;
        font-weight:600;
        color:#ff0808;
        text-transform:uppercase;
    }
    .inner-right .keyword {
        font-size:25px;
        font-weight:600;
    }
    .inner-right .desc {
        font-size:14px;
    }
    }

    @media only screen and (max-width: 767px) {
        .seo-result-main-content {
        /* padding:30px 15px; */
        padding:20px 15px;

    }
    .seo-result-main-content .seo-result-inner {
        display:flex;
        flex-direction:column;
        width: 100%;
        gap:20px;
    }
    .seo-result-inner {
       padding:20px;
        border-radius:10px;
        margin-bottom:20px;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }
    .seo-result-inner .inner-left {
        width: 100%;
    }
    .seo-result-inner .inner-left img {
        height: 100%;
        width: 100%;
        object-fit:contain;
    }
    .seo-result-inner .inner-right {
        width: 100%;
        margin:auto 0px;
    }
    .inner-right .client {
        font-size:15px;
        margin-bottom:-10px;
        font-weight:600;
        color:#ff0808;
        text-transform:uppercase;
    }
    .inner-right .keyword {
        font-size:28px;
        font-weight:600;
    }
    .inner-right .desc {
        font-size:15px;
    }
    }

    /* SEO Portfolio Tab bar */
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
        text-align: center;
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
        
        .seo-portfolio{
            padding: 15px 0px !important;
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

    .buttons.active {
            background-color: #ff0808;
            color: #fff;
        }

    .seo-portfolio{
        padding: 50px 0px;
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

    <section style="background-image: url('../portfolio-images/banner.jpg'); background-position: center center; background-repeat: no-repeat; background-size: cover;" class="banner-content">
        <h2>SEO Portfolio</h2>
        <ul class="breadcrumbdiv">
            <li><a href="https://sagartech.co.in/">Home</a></li>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right">
                <path d="m9 18 6-6-6-6" />
            </svg>
            <li style="color: white;">Search Engine Optimization</li>
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
        <P class="pp">We are an award-winning web development and digital marketing company with a team of skilled developers that are experienced in building appealing websites that can significantly improve your business by driving up revenue.Our journey has been marked by creativity, dedication, and a passion for delivering top-notch technical solutions that help businesses Grow
        </P>
        <div class="why-list">
            <div class="listt">
                <span>
                    <img src="../images/coding.png" height="50" alt="">
                    <h4>Web Development</h4>
                </span>
                <p>From creating captivating e-commerce platforms to designing streamlined one-page websites, we specialize in crafting digital experiences that leave a lasting impression.</p>
            </div>
            <div class="listt">
                <span>
                    <img src="../images/social-media.png" height="50" alt="">
                    <h4>Digital Marketing</h4>
                </span>
                <p>Boost your online visibility with our comprehensive digital marketing services. From SEO to social media management and targeted campaigns, we've got your back.</p>
            </div>
            <div class="listt">
                <span>
                    <img src="../images/graphic-designer.png" height="50" alt="">
                    <h4>Graphic Designing</h4>
                </span>
                <p>Our graphic design services are tailored to meet the unique needs of businesses, ensuring that your brand stands out in a crowded digital landscape.</p>
            </div>
            <div class="listt">
                <span>
                    <img src="../images/development.png" height="50" alt="">
                    <h4>App Development</h4>
                </span>
                <p>We take pride in delivering high-quality app development services tailored to meet your specific requirements.</p>
            </div>
            <div class="listt">
                <span>
                    <img src="../images/bulksms.png" height="50" alt="">
                    <h4>Bulk SMS Services</h4>
                </span>
                <p>We specialize in providing top-notch bulk SMS services and bulk whatsaap message services to elevate your communication strategies</p>
            </div>
        </div>
        <P class="ppp">Ready to take your digital presence to the next level? Join us at Sagar Tech. Explore our portfolio, check out our award-winning projects, and see how our web development and digital marketing solutions can redefine your online presence. Your success story begins right here with Sagar Tech.Technical Soultion
        </P>
    </div> -->


    <!-- <div class="fifthsection">
        <h2 style="text-transform:uppercase;">Our Designed <span style="color:#FF0808;">Brochures</span></h2>
        <div class="logosec">
            <?php
    //   $imageUrls = [
        // "../brochure/3.webp",
        // "../brochure/1.webp",
        // "../brochure/2.webp",
        // "../brochure/5.webp",
        // "../brochure/6.webp",
        // "../brochure/7.webp",
        // "../brochure/8.webp",
        // "../brochure/9.webp",
        // "../brochure/10.webp",
        // "../brochure/11.webp",
        // "../brochure/12.webp",
    //   ];

    //   foreach ($imageUrls as $imageUrl) {
        // echo '<div class="imgdiv">';
        // echo '<img src="' . $imageUrl . '" alt="Brochure">';
        // echo '</div>';
    //   }
        ?>
        </div>
    </div> -->


    <!-- <div class="seo-result-main-content"> -->


    <?php
    // Define an array of card data
    $data = array(
        array(
            "imgSrc" => "../seo-mockups/SEO_Armaf_Mockup.webp",
            "client" => "Armaf",
            "keyword" => "best deo",
            "description" => "<strong style='color:#ff0808;'>Best Deo</strong> With a robust search volume of <strong style='color:#ff0808;'>1600</strong> and a manageable keyword difficulty score of <strong style='color:#ff0808;'>25</strong>, this keyword epitomizes our expertise in navigating competitive landscapes. Currently securing the coveted <strong style='color:#ff0808;'>2nd</strong> position. Trust us to elevate your online presence and achieve similar success stories. Let's propel your brand to the top ranks together!"
        ),
        array(
            "imgSrc" => "../seo-mockups/SEO_Armaf_Mockup2.webp",
            "client" => "Armaf",
            "keyword" => "deo for women",
            "description" => "<strong style='color:#ff0808;'>Deo for Women</strong> With an impressive search volume of <strong style='color:#ff0808;'>8100</strong> and a comfortable keyword difficulty score of <strong style='color:#ff0808;'>20</strong>, this keyword exemplifies our prowess in navigating competitive terrains. Currently occupying the prestigious <strong style='color:#ff0808;'>4th</strong> position. Join us in elevating your brand's online presence and achieving similar success stories. Let's propel your business to the top ranks together!"
        ),
        array(
            "imgSrc" => "../seo-mockups/SEO_BS_Auto_Mockup.webp",
            "client" => "BS Auto",
            "keyword" => "burgman accessories",
            "description" => "<strong style='color:#ff0808;'>Burgman Accessories</strong> Boasting a substantial search volume of <strong style='color:#ff0808;'>2900</strong> and a manageable keyword difficulty score of <strong style='color:#ff0808;'>21</strong>, this keyword underscores our adeptness in tackling competitive landscapes. Currently seated at an impressive <strong style='color:#ff0808;'>3rd</strong> position. Join us in driving your brand's online presence to new heights and achieving similar triumphs. Let's ascend the ranks together!"
        ),
        array(
            "imgSrc" => "../seo-mockups/SEO_BS_Auto_Mockup2.webp",
            "client" => "BS Auto",
            "keyword" => "suzuki burgman accessories",
            "description" => "<strong style='color:#ff0808;'>Suzuki Burgman Accessories</strong> With a respectable search volume of <strong style='color:#ff0808;'>1300</strong> and a manageable keyword difficulty of <strong style='color:#ff0808;'>17</strong>, this keyword highlights our proficiency in navigating competitive landscapes. Currently holding the coveted <strong style='color:#ff0808;'>3rd</strong> position. Join us in propelling your brand's online presence to greater heights and achieving similar triumphs. Let's advance together and secure top rankings!"
        ),
        array(
            "imgSrc" => "../seo-mockups/SEO_Seal_Excel_45.webp",
            "client" => "Seal Excel",
            "keyword" => "hydraulic fittings manufacturers in india",
            "description" => "<strong style='color:#ff0808;'>Hydraulic Fittings Manufacturer in India</strong> With a focused search volume of <strong style='color:#ff0808;'>140</strong> and a comfortably low keyword difficulty of <strong style='color:#ff0808;'>5</strong>, this keyword highlights our adeptness in competitive arenas. Currently securing the esteemed <strong style='color:#ff0808;'>1st</strong> position. Join us in propelling your brand's online presence to new heights and achieving similar victories. Let's lead the way together towards greater success!"
        ),
        array(
            "imgSrc" => "../seo-mockups/SEO_Armaf_45.webp",
            "client" => "Armaf",
            "keyword" => "best deodrant for women in india",
            "description" => "<strong style='color:#ff0808;'>Best Deodorant for Women in India</strong> With a robust search volume of <strong style='color:#ff0808;'>880</strong> and a manageable keyword difficulty of <strong style='color:#ff0808;'>21</strong>, this keyword exemplifies our proficiency in competitive landscapes. Currently holding a strong <strong style='color:#ff0808;'>3rd</strong> position. Join us in elevating your brand's online presence and achieving similar triumphs. Let's ascend together towards greater success in the digital arena!"
        ),
        array(
            "imgSrc" => "../seo-mockups/SEO_BS_Auto_45.webp",
            "client" => "BS Auto",
            "keyword" => "ntorq crash guard",
            "description" => "<strong style='color:#ff0808;'>Ntorq Crash Guard</strong> With a solid search volume of <strong style='color:#ff0808;'>720</strong> and a manageable keyword difficulty of <strong style='color:#ff0808;'>25</strong>, this keyword showcases our expertise in competitive terrain. Currently leading from the front at the <strong style='color:#ff0808;'>1st</strong> position. Join us in elevating your brand's online presence and achieving similar milestones. Let's steer towards success together!"
        ),
    );

    foreach ($data as $card) {
    ?>
        <!-- <div class="seo-result-inner">
            <div class="inner-left">
                <img src="<?php //echo $card['imgSrc']; ?>" alt="seo mockups">
            </div>
            <div class="inner-right">
                <h4 class="client"><?php //echo $card['client']; ?>
                </h4>
                <h2 class="keyword">
                    <?php //echo $card['keyword']; ?>
                </h2>
                <p class="desc">
                    <?php //echo $card['description']; ?>
                </p>
            </div>
        </div> -->
    <div>
    <?php
    }
    ?>

    <!-- </div> -->
     <div class="seo-portfolio">
        <div class="tabbar">
        <button class="buttons" onclick="openCity('Armaf')" id="tabArmaf">Armaf</button>
        <button class="buttons active" onclick="openCity('BSAuto')" id="tabBSAuto">BS Auto</button>
        <button class="buttons" onclick="openCity('SealExcel')" id="tabSealExcel">Seal Excel</button>
        <button class="buttons" onclick="openCity('Alsalama')" id="tabAlsalama">Noor Al Salama</button>
        <button class="buttons" onclick="openCity('Classic')" id="tabClassic">Go Classic Tour</button>
        <button class="buttons" onclick="openCity('Cotton')" id="tabCotton">Cotton Culture</button>
        <!-- <button class="buttons" onclick="openCity('Static')" id="tabTravels">Static Websites</button> -->
    </div>
     <!-- </div> -->

    <script>
        // Function to open the city (placeholder)
        function openCity(cityName) {
            // Your implementation to open the city
        }

        document.addEventListener("DOMContentLoaded", function () {
            // Retrieve the active tab from localStorage
            var activeTab = localStorage.getItem('activeTab');

            // Check if an active tab is stored in localStorage
            if (activeTab) {
                // Remove the 'active' class from all tabs
                document.querySelectorAll('.buttons').forEach(function (button) {
                    button.classList.remove('active');
                });

                // Add the 'active' class to the stored active tab
                document.getElementById('tab' + activeTab).classList.add('active');
            } else {
                // If no active tab is stored, set the default tab as "Armaf"
                document.getElementById('tabArmaf').classList.add('active');
                localStorage.setItem('activeTab', 'Armaf');
            }
        });

        // Event listener to store the active tab in localStorage when clicked
        document.querySelectorAll('.buttons').forEach(function (button) {
            button.addEventListener('click', function () {
                // Remove the 'active' class from all tabs
                document.querySelectorAll('.buttons').forEach(function (btn) {
                    btn.classList.remove('active');
                });

                // Add the 'active' class to the clicked tab
                this.classList.add('active');

                // Store the active tab in localStorage
                var tabName = this.textContent.trim();
                localStorage.setItem('activeTab', tabName);
            });
        });

        // Clear localStorage and set active tab to "Armaf" on reload
        window.addEventListener('beforeunload', function () {
            localStorage.removeItem('activeTab');
            localStorage.setItem('activeTab', 'Armaf');
        });
    </script>



    <hr>

    <div id="Armaf" class="content-div">
        <!-- <h2>Our Business Website portfolio</h2> -->
        <!-- <div class="maincontent"> -->
            <div class="seo-result-main-content">
            <div class="seo-result-inner">
            <div class="inner-left">
                <img src="../seo-mockups/SEO_Armaf_Mockup.webp" alt="Armaf">
                        </div>
                        <div class="inner-right">
                            <h4 class="client">Armaf</h4>
                            <h2 class="keyword">best deo</h2>
                <p class="desc"><strong style='color:#ff0808;'>Best Deo</strong> With a robust search volume of <strong style='color:#ff0808;'>1600</strong> and a manageable keyword difficulty score of <strong style='color:#ff0808;'>48</strong>, this keyword epitomizes our expertise in navigating competitive landscapes. Currently securing the coveted <strong style='color:#ff0808;'>2nd</strong> position. Trust us to elevate your online presence and achieve similar success stories. Let's propel your brand to the top ranks together!</p>
            </div>
            </div>
            </div>
            <div class="seo-result-main-content">
            <div class="seo-result-inner">
            <div class="inner-left">
                <img src="../seo-mockups/SEO_Armaf_Mockup2.webp" alt="Armaf">
                        </div>
                        <div class="inner-right">
                            <h4 class="client">Armaf</h4>
                            <h2 class="keyword">deo for women</h2>
                <p class="desc"><strong style='color:#ff0808;'>Deo for Women</strong> With an impressive search volume of <strong style='color:#ff0808;'>9900</strong> and a comfortable keyword difficulty score of <strong style='color:#ff0808;'>45</strong>, this keyword exemplifies our prowess in navigating competitive terrains. Currently occupying the prestigious <strong style='color:#ff0808;'>4th</strong> position. Join us in elevating your brand's online presence and achieving similar success stories. Let's propel your business to the top ranks together!</p>
            </div>
            </div>
            </div>
            <div class="seo-result-main-content">
            <div class="seo-result-inner">
            <div class="inner-left">
                <img src="../seo-mockups/SEO_Armaf_45.webp" alt="Armaf">
                        </div>
                        <div class="inner-right">
                            <h4 class="client">Armaf</h4>
                            <h2 class="keyword">best deodrant for women in india</h2>
                <p class="desc"><strong style='color:#ff0808;'>Best Deodorant for Women in India</strong> With a robust search volume of <strong style='color:#ff0808;'>590</strong> and a manageable keyword difficulty of <strong style='color:#ff0808;'>31</strong>, this keyword exemplifies our proficiency in competitive landscapes. Currently holding a strong <strong style='color:#ff0808;'>3rd</strong> position. Join us in elevating your brand's online presence and achieving similar triumphs. Let's ascend together towards greater success in the digital arena!</p>
            </div>
            </div>
            </div>
        <!-- </div> -->
    </div>

    <div id="BSAuto" class="content-div" style="display:none">
        <!-- <h2>Our Business Website portfolio</h2> -->
        <!-- <div class="maincontent"> -->
            <div class="seo-result-main-content">
            <div class="seo-result-inner">
            <div class="inner-left">
                <img src="../seo-mockups/BS Auto1.webp" alt="BS Auto">
                        </div>
                        <div class="inner-right">
                            <h4 class="client">BS Auto</h4>
                            <h2 class="keyword">burgman accessories</h2>
                <p class="desc"><strong style='color:#ff0808;'>Burgman Accessories</strong> Boasting a substantial search volume of <strong style='color:#ff0808;'>4400</strong> and a manageable keyword difficulty score of <strong style='color:#ff0808;'>49</strong>, this keyword underscores our adeptness in tackling competitive landscapes. Currently seated at an impressive <strong style='color:#ff0808;'>3rd</strong> position. Join us in driving your brand's online presence to new heights and achieving similar triumphs. Let's ascend the ranks together!</p>
            </div>
            </div>
            </div>
            <div class="seo-result-main-content">
            <div class="seo-result-inner">
            <div class="inner-left">
                <img src="../seo-mockups/BS Auto.webp" alt="BS Auto">
                        </div>
                        <div class="inner-right">
                            <h4 class="client">BS Auto</h4>
                            <h2 class="keyword">burgman backrest</h2>
                <p class="desc"><strong style='color:#ff0808;'>Burgman Backrest</strong> Boasting a substantial search volume of <strong style='color:#ff0808;'>260</strong> and a manageable keyword difficulty score of <strong style='color:#ff0808;'>25</strong>, this keyword underscores our adeptness in tackling competitive landscapes. Currently seated at an impressive <strong style='color:#ff0808;'>1st</strong> position. Join us in driving your brand's online presence to new heights and achieving similar triumphs. Let's ascend the ranks together!</p>
            </div>
            </div>
            </div>
            <div class="seo-result-main-content">
            <div class="seo-result-inner">
            <div class="inner-left">
                <img src="../seo-mockups/SEO_BS_Auto_Mockup2.webp" alt="BS Auto">
                        </div>
                        <div class="inner-right">
                            <h4 class="client">BS Auto</h4>
                            <h2 class="keyword">suzuki burgman accessories</h2>
                <p class="desc"><strong style='color:#ff0808;'>Suzuki Burgman Accessories</strong> With a respectable search volume of <strong style='color:#ff0808;'>1600</strong> and a manageable keyword difficulty of <strong style='color:#ff0808;'>42</strong>, this keyword highlights our proficiency in navigating competitive landscapes. Currently holding the coveted <strong style='color:#ff0808;'>3rd</strong> position. Join us in propelling your brand's online presence to greater heights and achieving similar triumphs. Let's advance together and secure top rankings!</p>
            </div>
            </div>
            </div>
            <div class="seo-result-main-content">
            <div class="seo-result-inner">
            <div class="inner-left">
                <img src="../seo-mockups/BS Auto2.webp" alt="BS Auto">
                        </div>
                        <div class="inner-right">
                            <h4 class="client">BS Auto</h4>
                            <h2 class="keyword">ntorq crash guard</h2>
                <p class="desc"><strong style='color:#ff0808;'>Ntorq Crash Guard</strong> With a solid search volume of <strong style='color:#ff0808;'>1600</strong> and a manageable keyword difficulty of <strong style='color:#ff0808;'>20</strong>, this keyword showcases our expertise in competitive terrain. Currently leading from the front at the <strong style='color:#ff0808;'>1st</strong> position. Join us in elevating your brand's online presence and achieving similar milestones. Let's steer towards success together!</p>
            </div>
            </div>
            </div>
        <!-- </div> -->
    </div>

    <div id="SealExcel" class="content-div" style="display:none">
        <!-- <h2>Our Business Website portfolio</h2> -->
        <!-- <div class="maincontent"> -->
            <div class="seo-result-main-content">
            <div class="seo-result-inner">
            <div class="inner-left">
                <img src="../seo-mockups/sealexcel1.webp" alt="Seal Excel">
                        </div>
                        <div class="inner-right">
                            <h4 class="client">Seal Excel</h4>
                            <h2 class="keyword">hydraulic fittings manufacturers in india</h2>
                <p class="desc"><strong style='color:#ff0808;'>Hydraulic Fittings Manufacturer in India</strong> With a focused search volume of <strong style='color:#ff0808;'>110</strong> and a comfortably low keyword difficulty of <strong style='color:#ff0808;'>13</strong>, this keyword highlights our adeptness in competitive arenas. Currently securing the esteemed <strong style='color:#ff0808;'>3rd</strong> position. Join us in propelling your brand's online presence to new heights and achieving similar victories. Let's lead the way together towards greater success!</p>
            </div>
            </div>
            </div>
            <div class="seo-result-main-content">
            <div class="seo-result-inner">
            <div class="inner-left">
                <img src="../seo-mockups/sealexcel.webp" alt="Seal Excel">
                        </div>
                        <div class="inner-right">
                            <h4 class="client">Seal Excel</h4>
                            <h2 class="keyword">pneumatic fittings names</h2>
                <p class="desc"><strong style='color:#ff0808;'>Pneumatic Fittings Names</strong> With a focused search volume of <strong style='color:#ff0808;'>260</strong> and a comfortably low keyword difficulty of <strong style='color:#ff0808;'>20</strong>, this keyword highlights our adeptness in competitive arenas. Currently securing the esteemed <strong style='color:#ff0808;'>2nd</strong> position. Join us in propelling your brand's online presence to new heights and achieving similar victories. Let's lead the way together towards greater success!</p>
            </div>
            </div>
            </div>
        <!-- </div> -->
    </div>

    <div id="Alsalama" class="content-div" style="display:none">
        <!-- <h2>Our Business Website portfolio</h2> -->
        <!-- <div class="maincontent"> -->
            <div class="seo-result-main-content">
            <div class="seo-result-inner">
            <div class="inner-left">
                <img src="../seo-mockups/Alsalama.webp" alt="Noor Al Salama">
                        </div>
                        <div class="inner-right">
                            <h4 class="client">Noor Al Salama</h4>
                            <h2 class="keyword">car brake service in dammam</h2>
                <p class="desc"><strong style='color:#ff0808;'>Car Brake Service In Dammam</strong> With a focused search volume of <strong style='color:#ff0808;'>140</strong> and a comfortably low keyword difficulty of <strong style='color:#ff0808;'>5</strong>, this keyword highlights our adeptness in competitive arenas. Currently securing the esteemed <strong style='color:#ff0808;'>1st</strong> position. Join us in propelling your brand's online presence to new heights and achieving similar victories. Let's lead the way together towards greater success!</p>
            </div>
            </div>
            </div>

            <div class="seo-result-main-content">
            <div class="seo-result-inner">
            <div class="inner-left">
                <img src="../seo-mockups/Alsalama1.webp" alt="Noor Al Salama">
                        </div>
                        <div class="inner-right">
                            <h4 class="client">Noor Al Salama</h4>
                            <h2 class="keyword">car denting service in dammam</h2>
                <p class="desc"><strong style='color:#ff0808;'>Car Denting Service In Dammam</strong> With a focused search volume of <strong style='color:#ff0808;'>140</strong> and a comfortably low keyword difficulty of <strong style='color:#ff0808;'>5</strong>, this keyword highlights our adeptness in competitive arenas. Currently securing the esteemed <strong style='color:#ff0808;'>1st</strong> position. Join us in propelling your brand's online presence to new heights and achieving similar victories. Let's lead the way together towards greater success!</p>
            </div>
            </div>
            </div>

            <div class="seo-result-main-content">
            <div class="seo-result-inner">
            <div class="inner-left">
                <img src="../seo-mockups/Alsalama2.webp" alt="Noor Al Salama">
                        </div>
                        <div class="inner-right">
                            <h4 class="client">Noor Al Salama</h4>
                            <h2 class="keyword">car painting service in dammam</h2>
                <p class="desc"><strong style='color:#ff0808;'>Car Painting Service In Dammam</strong> With a focused search volume of <strong style='color:#ff0808;'>140</strong> and a comfortably low keyword difficulty of <strong style='color:#ff0808;'>5</strong>, this keyword highlights our adeptness in competitive arenas. Currently securing the esteemed <strong style='color:#ff0808;'>1st</strong> position. Join us in propelling your brand's online presence to new heights and achieving similar victories. Let's lead the way together towards greater success!</p>
            </div>
            </div>
            </div>
        <!-- </div> -->
    </div>

    <div id="Classic" class="content-div" style="display:none">
        <!-- <h2>Our Business Website portfolio</h2> -->
        <!-- <div class="maincontent"> -->
            <div class="seo-result-main-content">
            <div class="seo-result-inner">
            <div class="inner-left">
                <img src="../seo-mockups/classictour.webp" alt="Go Classic Tour">
                        </div>
                        <div class="inner-right">
                            <h4 class="client">Go Classic Tour</h4>
                            <h2 class="keyword">hajj and umrah agency</h2>
                <p class="desc"><strong style='color:#ff0808;'>Hajj And Umrah Agency</strong> With a focused search volume of <strong style='color:#ff0808;'>210</strong> and a comfortably low keyword difficulty of <strong style='color:#ff0808;'>10</strong>, this keyword highlights our adeptness in competitive arenas. Currently securing the esteemed <strong style='color:#ff0808;'>2nd</strong> position. Join us in propelling your brand's online presence to new heights and achieving similar victories. Let's lead the way together towards greater success!</p>
            </div>
            </div>
            </div>
            <div class="seo-result-main-content">
            <div class="seo-result-inner">
            <div class="inner-left">
                <img src="../seo-mockups/classictour1.webp" alt="Go Classic Tour">
                        </div>
                        <div class="inner-right">
                            <h4 class="client">Go Classic Tour</h4>
                            <h2 class="keyword">hajj and umrah tours and travels</h2>
                <p class="desc"><strong style='color:#ff0808;'>Hajj And Umrah Tours And Travels</strong> With a focused search volume of <strong style='color:#ff0808;'>260</strong> and a comfortably low keyword difficulty of <strong style='color:#ff0808;'>8</strong>, this keyword highlights our adeptness in competitive arenas. Currently securing the esteemed <strong style='color:#ff0808;'>2nd</strong> position. Join us in propelling your brand's online presence to new heights and achieving similar victories. Let's lead the way together towards greater success!</p>
            </div>
            </div>
            </div>
        <!-- </div> -->
    </div>

    <div id="Cotton" class="content-div" style="display:none">
        <!-- <h2>Our Business Website portfolio</h2> -->
        <!-- <div class="maincontent"> -->
            <div class="seo-result-main-content">
            <div class="seo-result-inner">
            <div class="inner-left">
                <img src="../seo-mockups/cotton culture.webp" alt="Cotton Culture">
                        </div>
                        <div class="inner-right">
                            <h4 class="client">Cotton Culture</h4>
                            <h2 class="keyword">cotton palazzo pants</h2>
                <p class="desc"><strong style='color:#ff0808;'>Cotton Palazzo Pants</strong> With a focused search volume of <strong style='color:#ff0808;'>4400</strong> and a comfortably low keyword difficulty of <strong style='color:#ff0808;'>45</strong>, this keyword highlights our adeptness in competitive arenas. Currently securing the esteemed <strong style='color:#ff0808;'>2nd</strong> position. Join us in propelling your brand's online presence to new heights and achieving similar victories. Let's lead the way together towards greater success!</p>
            </div>
            </div>
            </div>
            <div class="seo-result-main-content">
            <div class="seo-result-inner">
            <div class="inner-left">
                <img src="../seo-mockups/cotton culture1.webp" alt="Cotton Culture">
                        </div>
                        <div class="inner-right">
                            <h4 class="client">Cotton Culture</h4>
                            <h2 class="keyword">kurta co ord set women</h2>
                <p class="desc"><strong style='color:#ff0808;'>Kurta Co ord Set Women</strong> With a focused search volume of <strong style='color:#ff0808;'>480</strong> and a comfortably low keyword difficulty of <strong style='color:#ff0808;'>36</strong>, this keyword highlights our adeptness in competitive arenas. Currently securing the esteemed <strong style='color:#ff0808;'>2nd</strong> position. Join us in propelling your brand's online presence to new heights and achieving similar victories. Let's lead the way together towards greater success!</p>
            </div>
            </div>
            </div>
        <!-- </div> -->
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