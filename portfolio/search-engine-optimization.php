<?php
include("../include/config.php");
?>
<!doctype html>
<html lang="en">


<head>
    <title>Sagar Tech Technical Solution Portfolio on 500 Satisfied Client ⭐</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="We are the leading 🔝 Web Development and Digital Marketing Company In Indai with more than 500 satisfied Client ⭐">
    <!-- Favicon -->
    <link rel="shortcut icon" href="../images/logoonly.jpg" />
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

    
    .seo-result-main-content {
        padding:50px 60px;

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
        padding:30px 15px;

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


    <div class="seo-result-main-content">


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
        <div class="seo-result-inner">
            <div class="inner-left">
                <img src="<?php echo $card['imgSrc']; ?>" alt="seo mockups">
            </div>
            <div class="inner-right">
                <h4 class="client"><?php echo $card['client']; ?></h4>
                <h2 class="keyword"><?php echo $card['keyword']; ?></h2>
                <p class="desc"><?php echo $card['description']; ?></p>
            </div>
        </div>
    <?php
    }
    ?>

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