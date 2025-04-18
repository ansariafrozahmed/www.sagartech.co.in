<?php include "include/config.php"; ?>
<!doctype html>
<html lang="en">

<!-- Mirrored from iqonicthemes.com/themes/qwilo/qwilo/about-us-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Oct 2019 14:24:12 GMT -->

<head>
  <title>About - Sagar Tech Technical Solutions</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Sagar Tech Technical Solutions is a trusted provider of mobile app development services, specializing in delivering high-quality, user-centric solutions for iOS and Android platforms to enhance business performance and digital engagement.">
  <script src="https://cdn.tailwindcss.com"></script>
  <meta name="keywords" content="Mobile app development, iOS app development, Android app development, custom software solutions, app development company, digital transformation, mobile solutions, business apps, technology solutions, Sagar Tech Technical Solutions.">
  <!-- Favicon -->
  <link rel="shortcut icon" href="images/logoonly.jpg" />
  <link rel="canonical" href="https://sagartech.co.in/about">
  <meta property="og:locale" content="en_US">
  <meta property="og:type" content="website">
  <meta property="og:title" content="About - Sagar Tech Technical Solutions">
  <meta property="og:description"
    content="Sagar Tech Technical Solutions is a trusted provider of mobile app development services, specializing in delivering high-quality, user-centric solutions for iOS and Android platforms to enhance business performance and digital engagement.">
  <meta property="og:url" content="https://sagartech.co.in/about">
  <meta property="og:site_name" content="Sagar Tech - Technical Solution">
  <meta property="og:image" content="https://sagartech.co.in/images/sagartech1.webp">
  <!-- bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <!-- main style -->
  <link href="css/style.css" rel="stylesheet" type="text/css" />
  <!-- responsive -->
  <link href="css/responsive.css" rel="stylesheet" type="text/css" />
  <link href="css/newcssresponsive.css" rel="stylesheet" type="text/css" />
  <!-- custom -->
  <link href="css/custom.css" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-156939866-1"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-156939866-1">
  </script>
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
  .test-cardss {
    background-color: white;
    border-radius: 0.25rem;
    box-shadow: 0 1px 10px 3px rgba(0, 0, 0, 0.25);
    display: flex;
    flex-direction: column;
    overflow: hidden;
    width: 540px;
    height: 494px;
  }

  .bounce1 {
    bottom: 30px;
    left: 50%;
    animation: bounce 2s infinite;
    -webkit-animation: bounce 2s infinite;
  }

  p {
    text-align: justify;
  }



  ofds {
    font-size: 40px;
    color: black;
  }

  .aboutus-team-image {
    width: 100%;
  }

  .aboutus-team-image img {
    height: 100%;
    width: 100%;
    object-fit: cover;
  }

  .stats-class {
    padding: 50px 100px;
  }

  .stats-class h6 {
    font-size: 40px;
    font-weight: 700;
    text-align: center;
    color: #2b2a2a;
    text-transform: uppercase;
  }

  .card-divvvv {
    padding: 30px 0px;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    gap: 20px;
  }

  .stats-cards {
    /* aspect-ratio: 4/2; */
    /* border: 1px solid gray; */
    border-radius: 10px;
    padding: 15px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 10px;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
  }

  .stats-cards img {
    height: 70px;
  }

  .stats-card-detail {
    text-align: center;
  }

  .stats-card-detail h5 {
    font-size: 30px;
    font-weight: 600;
    font-family: Arial, Helvetica, sans-serif;
  }

  .stats-card-detail span {
    font-size: 15px;
  }

  @media only screen and (min-width: 768px) and (max-width: 1024px) {
    .stats-class {
      padding: 50px;
    }

    .stats-class h6 {
      font-size: 40px;
      font-weight: 700;
      text-align: center;
      color: #2b2a2a;
      text-transform: uppercase;
    }

    .card-divvvv {
      padding: 30px 0px;
      display: grid;
      grid-template-columns: 1fr 1fr 1fr 1fr;
      gap: 15px;
    }
  }

  @media only screen and (max-width: 767px) {
    .stats-class {
      padding: 40px 20px;
    }

    .stats-class h6 {
      font-size: 40px;
      font-weight: 700;
      text-align: center;
      color: #2b2a2a;
      text-transform: uppercase;
    }

    .card-divvvv {
      padding: 30px 0px;
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 15px;
    }
  }

  .about-intro {
    /* background-image:url('banner/background.webp') */
    background: #f2f2f2;
    padding: 50px 50px;
  }

  .about-intro .about-intro-left {
    width: 100%;
  }

  .about-intro-left h2 {
    font-size: 40px;
    font-weight: 700;
    line-height: normal;
    text-transform: uppercase;
    margin-bottom: 5px;
  }

  .about-intro-left h3 {
    font-size: 18px;
    font-weight: 600;
  }

  .company-profile {
    display: flex;
    gap: 10px;
    margin-top: 10px;
  }

  .company-profile img {
    height: 50px;
    width: 50px;
    transition: all ease .3s;
  }

  .company-profile img:hover {
    transform: scale(1.1)
  }

  .company-profile .profile-image {
    display: flex;
    flex-direction: column;
    justify-content: center;
  }

  .company-profile .profile-image span {
    font-size: 17px;
    font-weight: 600;
    color: #2b2a2a;
    width: 80%;
    /* text-transform:uppercase; */
  }

  .company-profile .profile-image span:hover {
    color: #ff0808;
  }

  @media only screen and (min-width: 768px) and (max-width: 1024px) {
    .about-intro {
      /* background-image:url('banner/background.webp') */
      background: #f2f2f2;
      padding: 50px;
    }

    .about-intro .about-intro-left {
      width: 100%;
    }

    .about-intro-left h2 {
      font-size: 40px;
      font-weight: 700;
      line-height: normal;
      text-transform: uppercase;
      margin-bottom: 5px;
    }

    .about-intro-left h3 {
      font-size: 18px;
      font-weight: 600;
    }
  }

  @media only screen and (max-width: 767px) {
    .about-intro {
      /* background-image:url('banner/background.webp') */
      background: #f2f2f2;
      padding: 40px 20px;
    }

    .about-intro .about-intro-left {
      width: 100%;
    }

    .about-intro-left h2 {
      font-size: 30px;
      font-weight: 700;
      line-height: normal;
      text-transform: uppercase;
      margin-bottom: 5px;
    }

    .about-intro-left h3 {
      font-size: 18px;
      font-weight: 600;
    }
  }

  .our-mission-vission {
    padding: 50px 50px;
    display: flex;
    gap: 50px;
    width: 100%;
  }

  .our-mission {
    width: 50%;
  }

  .our-mission p {
    font-size: 20px;
  }

  .our-mission h2 {
    font-size: 60px;
    font-weight: bold;
  }

  .our-vission {
    width: 50%;
  }

  .our-vission h2 {
    font-size: 60px;
    font-weight: bold;
  }

  .our-workspace-about {
    padding: 50px 50px;
    width: 100%;
    display: flex;
    background: #f2f2f2;
    flex-direction: column;
    gap: 10px;
  }

  .our-workspace-about h2 {
    font-size: 40px;
    font-weight: 600;
  }

  .our-workspace-about p {
    font-size: 15px;
  }

  .workspace-img-div {
    display: grid;
    width: 100%;
    grid-template-columns: 1fr 1fr 1fr;
    gap: 15px;
  }

  .image-card {
    background: white;
    /* padding:10px; */
    padding: 25px;
    /* aspect-ratio:4/4; */
    box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
  }

  .image-card .image-div {
    aspect-ratio: 4/2.5;
  }

  .image-div img {
    height: 100%;
    width: 100%;
    object-fit: cover;
    object-position: right;
    /* border:1px solid black; */
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
  }

  .image-card .card-text {
    padding-top: 10px;
    /* font-size:18px; */
    font-size: 23px;
    font-weight: 600;
  }

  @media only screen and (min-width: 768px) and (max-width: 1024px) {
    .our-workspace-about {
      padding: 50px;
      width: 100%;
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    .our-workspace-about h2 {
      font-size: 40px;
      font-weight: 600;
    }

    .our-workspace-about p {
      font-size: 15px;
    }

    .workspace-img-div {
      display: grid;
      width: 100%;
      grid-template-columns: 1fr;
      gap: 30px;
    }
  }

  @media only screen and (max-width: 767px) {
    .our-workspace-about {
      padding: 40px 20px;
      width: 100%;
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    .our-workspace-about h2 {
      font-size: 40px;
      font-weight: 600;
    }

    .our-workspace-about p {
      font-size: 15px;
    }

    .workspace-img-div {
      display: grid;
      width: 100%;
      grid-template-columns: 1fr;
      gap: 20px;
    }
  }

  .button-62 {
    margin-top: 15px;
    background: linear-gradient(to bottom right, #FF0808, #fc6262);
    border: 0;
    border-radius: 12px;
    text-decoration: none;
    color: #fff !important;
    cursor: pointer;
    display: inline-block;
    font-family: -apple-system, system-ui, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
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
    color: white;
  }

  .image-card p {
    margin-top: 5px;
  }
</style>

<body>
  <!-- loading -->
  <!-- <div id="loading">
    <div id="loading-center">
      <img src="images/logoonly.jpg" alt="loder">
    </div>
  </div> -->

  <?php
  $page = 'about';
  include("include/newHeader.php");
  ?>

  <div class="main-content">


    <div class="aboutus-team-image">
      <!-- <img src="sagartech-team/wholesquad.webp" alt=""> -->
    </div>



    <div class="about-intro">
      <div class="about-intro-left">
        <h2>Sagar Tech - <span style="color:#ff0808;">Technical Solutions</span></h2>
        <h3>Think <span style="color:#ff0808">Red,</span> Think Sagar Tech</h3>
        <p>
          Sagar Tech Technical Solution Is Award Winning 🏆 Web Development and Digital Marketing Agency In Mumbai Our team of web developers specialises in developing websites that quickly generate leads. We offer effective design, innovative web development, Mobile App Development, and ROI-focused marketing to help your brand reach its full potential. We offer Ecommerce Website, business website, one page website, custom website.
        </p>
        <p>
          As a leading Digital Marketing Agency, we are dedicated to assisting businesses in the ever-changing digital market. With a combination of creativity, expertise, modern techniques, we help brands reach their full potential and achieve outstanding results in their business in Digital Marketing We Provide Services like Google Ads, SEO Local SEO, Social Media Marketing, Content Marketing.
        </p>
      </div>
      <a href="company-profile/Sagar Tech Technical Solution Brochure.pdf" target="_blank">
        <div class="company-profile">
          <img src="icons/office-building.png" alt="Company Profile">
          <div class="profile-image">
            <span>Company Profile</span>
          </div>
        </div>
      </a>
    </div>



    <hr>


    <div class="my-12 max-sm:flex-col max-sm:item-center flex justify-between">
      <div class="md:w-1/2 w-full bg-[#f2f2f2] max-sm:px-5 max-sm:py-12 flex justify-center items-center">

      <div class="">

        <h2 class="text-5xl font-semibold text-center mb-2">From the CEO’s Desk</h2>
        <h3 class="text-center text-2xl  font-medium mb-3 text-red-500 ">Ubaid Saudagar - <span class="text-gray-500 text-xs">CEO, Sagar Tech</span></h3>
      </div>
    </div>
        <div class="md:p-12 md:w-1/2 w-full">

        <p class="mb-3">
          Our basic principle, which we have been successful in the past few years, is TRUST. We have not broken the trust of our clients in terms of the development of websites, social media optimization, seo, or any other service for which our client has opted for our services. Hence, our client retention percentage is 90%.
        </p>
        <p class="mb-3">
          We hold regular meetings of our team and make them understand that if we do not give our clients the desired results they expect and for which they have approached us, then our income will not be appropriate.
        </p>
      <p class="mb-3">
      When clients get the desired results they want, then automatically supplications come from their hearts, and they give us a positive review and feedback.

    </p>
    <p class="mb-3">
      In terms of development, we continuously keep upgrading with the latest technology. So, when we started <a class="text-red-500" href="https://sagartech.co.in/web-development-company-in-mumbai" >website development</a> in 2018, we just had one technology to develop our websites, and that was WordPress, along with a shared server. Then, gradually, we moved towards Bootstrap, PHP for building custom websites. Now, we have adapted ourselves to the latest trends for developing our websites, wherein we use Remix, Next JS, Node JS, JWT for security, and many more.
      
    </p>
    <p class="mb-3">
      So it is the clear and clean intentions with which we are working. Keeping in mind our mission, which is to create maximum employment across the globe.
      
    </p>
    <div class="">
      <p class="mb-1">
        Written by,
      </p>
      <p class="text-[red]">
      Ubaid Saudagar - <span class="text-gray-400"> CEO, Sagar Tech</span>

        </p>
  


      </div>
  </div>
  

    </div>
    <div class="our-workspace-about">
      <h2>Our <span style="color:#ff0808;">Workspace</span></h2>
      <p>In the hustle and bustle of everyday life, our workspace stands as a sanctuary a place where minds meet and visions align. Here, diversity is celebrated, and inclusivity reigns supreme, creating an atmosphere where everyone feels valued and respected.</p>
      <div class="workspace-img-div">
        <div class="image-card">
          <!-- <div class="image-div">
                    <img src="sagartech-team/Dev Team Photo - 3.webp" alt="">
                </div> -->
          <h5 class="card-text">Development Team</h5>
          <p>Our skilled developers specialize in building innovative and scalable mobile applications for iOS and Android. We focus on seamless UI/UX, high performance, and cutting-edge technology to deliver top-notch digital solutions. From concept to deployment, we ensure every app meets industry standards and user expectations. Our expertise spans native and cross-platform development, providing businesses with tailored solutions.</p>
        </div>
        <!-- ------------------------ -->
        <div class="image-card">
          <!-- <div class="image-div">
                    <img src="sagartech-team/Social_Media_Team_Photo_-_1_35.webp" alt="">
                </div> -->
          <h5 class="card-text">Social Media Team</h5>
          <p>Our creative social media team crafts compelling content and strategic campaigns to boost brand engagement. We manage multiple platforms, ensuring a consistent and impactful online presence. Through audience insights and trend analysis, we create engaging posts that drive traffic and interactions. Whether it's organic growth or paid promotions, we help businesses connect with their target audience effectively.</p>
        </div>
        <!-- ------------------------ -->
        <div class="image-card">
          <!-- <div class="image-div">
                    <img src="sagartech-team/SEO_Team_Photo_-_4_35.webp" alt="">
                </div> -->
          <h5 class="card-text">SEO Team</h5>
          <p>Our SEO experts implement data-driven strategies to enhance website visibility and search engine rankings. We focus on keyword research, technical optimization, and high-quality content to drive organic traffic. Our team continuously monitors analytics and adapts strategies to improve performance. With on-page and off-page SEO techniques, we help businesses achieve sustainable online growth.</p>
        </div>
        <!-- ------------------------ -->
      </div>
      <div>
        <!-- <a class="button-62" href="team" type="submit">Meet Our Team</a> -->
      </div>
    </div>



    <div class="stats-class">
      <h6>Our <span style="color: #ff0808">Statistics</span></h6>
      <div class="card-divvvv">
        <div class="stats-cards">
          <img src="images/counter/like1.png" alt="" />
          <div class="stats-card-detail">
            <h5 style="color:green">500+</h5>
            <span>Projects Done</span>
          </div>
        </div>
        <div class="stats-cards">
          <img src="images/counter/client2.png" alt="" />
          <div class="stats-card-detail">
            <h5 style="color:green">300+</h5>
            <span>Satisfied Clients</span>
          </div>
        </div>
        <div class="stats-cards">
          <img src="./images/counter/awards.png" alt="" />
          <div class="stats-card-detail">
            <h5 style="color:green">1</h5>
            <span>Awards</span>
          </div>
        </div>
        <div class="stats-cards">
          <img src="./images/counter/star-rating.png" alt="" />
          <div class="stats-card-detail">
            <h5 style="color:green">5</h5>
            <span>Rating</span>
          </div>
        </div>
      </div>
    </div>






    <section class="overview-block device-aria iq-bg jarallax">

      <div class="iq-testimonial2 overview-block-ptb iq-ove-black-40 iq-bg jarallax" style="background-image: url('images/bg/white-abstract-testimonial.jpeg'); background-position: center,center;">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-sm-12">
              <script src="https://apps.elfsight.com/p/platform.js" defer></script>
              <div class="elfsight-app-6707e05d-e5a9-4163-b54a-a3a842227c55"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <?php
  include("include/footer.php");
  ?>
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
