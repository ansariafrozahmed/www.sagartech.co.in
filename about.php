<?php include "include/config.php"; ?>
<!doctype html>
<html lang="en">

<!-- Mirrored from iqonicthemes.com/themes/qwilo/qwilo/about-us-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Oct 2019 14:24:12 GMT -->

<head>
    <title>Sagar Tech</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
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

    body {
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
            object-fit:cover;
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
    aspect-ratio: 4/2;
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
    background:#f2f2f2;
    padding:50px 50px;
  }
  .about-intro .about-intro-left {
    width: 100%;
  }
  .about-intro-left h2 {
    font-size:40px;
    font-weight:700;
    line-height:normal;
    text-transform:uppercase;
    margin-bottom:5px;
  }
  .about-intro-left h3 {
    font-size:18px;
    font-weight:600;
  }
  .company-profile {
    display:flex;
    gap:10px;
    margin-top:10px;
  }
  .company-profile img {
    height: 50px;
    width: 50px;
    transition: all ease .3s;
  }
  .company-profile img:hover {
    transform:scale(1.1)
  }
  .company-profile .profile-image {
    display:flex;
    flex-direction:column;
    justify-content:center;
  }
  .company-profile .profile-image span {
    font-size:17px;
    font-weight:600;
    color:#2b2a2a;
    width: 80%;
    /* text-transform:uppercase; */
  }
  .company-profile .profile-image span:hover {
    color:#ff0808;
  }
  @media only screen and (min-width: 768px) and (max-width: 1024px){
    .about-intro {
    /* background-image:url('banner/background.webp') */
    background:#f2f2f2;
    padding:50px;
    }
  .about-intro .about-intro-left {
    width: 100%;
  }
  .about-intro-left h2 {
    font-size:40px;
    font-weight:700;
    line-height:normal;
    text-transform:uppercase;
    margin-bottom:5px;
  }
  .about-intro-left h3 {
    font-size:18px;
    font-weight:600;
  }
  }

  @media only screen and (max-width: 767px) {
    .about-intro {
    /* background-image:url('banner/background.webp') */
    background:#f2f2f2;
    padding:40px 20px;
  }
  .about-intro .about-intro-left {
    width: 100%;
  }
  .about-intro-left h2 {
    font-size:30px;
    font-weight:700;
    line-height:normal;
    text-transform:uppercase;
    margin-bottom:5px;
  }
  .about-intro-left h3 {
    font-size:18px;
    font-weight:600;
  }
  }

  .our-mission-vission {
    padding:50px 50px;
    display:flex;
    gap:50px;
    width: 100%;
  }
  .our-mission {
    width: 50%;
  }
  .our-mission p {
    font-size:20px;
  }
  .our-mission h2 {
    font-size:60px;
    font-weight:bold;
  }
  .our-vission {
    width: 50%;
  }
  .our-vission h2 {
    font-size:60px;
    font-weight:bold;
  }

  .our-workspace-about {
    padding:50px 50px;
    width: 100%;
    display:flex;
    background:#f2f2f2;
    flex-direction:column;
    gap:10px;
  }
  .our-workspace-about h2 {
    font-size:40px;
    font-weight:600;
  }
  .our-workspace-about p {
    font-size:15px;
  }
  .workspace-img-div {
    display:grid;
    width: 100%;
    grid-template-columns:1fr 1fr 1fr;
    gap:15px;
  }
  .image-card {
    background:white;
    padding:10px;
    /* aspect-ratio:4/4; */
    box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
  }
  .image-card .image-div {
    aspect-ratio:4/2.5;
  }
  .image-div img {
    height: 100%;
    width: 100%;
    object-fit:cover;
    object-position:right;
    /* border:1px solid black; */
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
  }
  .image-card .card-text {
    padding-top:10px;
    font-size:18px;
    font-weight:600;
  }

  @media only screen and (min-width: 768px) and (max-width: 1024px){
    .our-workspace-about {
    padding:50px;
    width: 100%;
    display:flex;
    flex-direction:column;
    gap:10px;
  }
  .our-workspace-about h2 {
    font-size:40px;
    font-weight:600;
  }
  .our-workspace-about p {
    font-size:15px;
  }
  .workspace-img-div {
    display:grid;
    width: 100%;
    grid-template-columns:1fr;
    gap:30px;
  }
  }
  @media only screen and (max-width: 767px){
    .our-workspace-about {
    padding:40px 20px;
    width: 100%;
    display:flex;
    flex-direction:column;
    gap:10px;
  }
  .our-workspace-about h2 {
    font-size:40px;
    font-weight:600;
  }
  .our-workspace-about p {
    font-size:15px;
  }
  .workspace-img-div {
    display:grid;
    width: 100%;
    grid-template-columns:1fr;
    gap:20px;
  }
  }
  .button-62 {
    margin-top:15px;
    background: linear-gradient(to bottom right, #FF0808, #fc6262);
    border: 0;
    border-radius: 12px;
    text-decoration:none;
    color: #fff !important;
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
        Sagar Tech Technical Solution Is Award Winning 🏆
        <a class="interlink" target="_blank" href="web-development-company"
          >Web Development</a
        >
        and
        <a class="interlink" target="_blank" href="digital-marketing-company"
          >Digital Marketing Agency</a
        >
        In Mumbai Our team of web developers specialises in developing websites
        that quickly generate leads. We offer effective design, innovative web
        development,
        <a class="interlink" target="_blank" href="mobile-app-development-company"
          >Mobile App Development</a
        >, and ROI-focused marketing to help your brand reach its full
        potential. We offer
        <a
          class="interlink"
          target="_blank"
          href="ecommerce-website-development"
          >Ecommerce Website</a
        >, business website, one page website, custom website.
      </p>
      <p>
        As a leading
        <a class="interlink" target="_blank" href="digital-marketing-company"
          >Digital Marketing Agency</a
        >, we are dedicated to assisting businesses in the ever-changing digital
        market . With a combination of creativity, expertise, and modern
        techniques, we help brands reach their full potential and achieve
        outstanding results in their business in Digital Marketing We Provide
        Services like
        <a class="interlink" target="_blank" href="google-ads-services"
          >Google Ads</a
        >, <a class="interlink" target="_blank" href="seo-company-in-mumbai">SEO</a>,
        <a class="interlink" target="_blank" href="local-seo-services"
          >Local SEO</a
        >,
        <a
          class="interlink"
          target="_blank"
          href="social-media-marketing-agency"
          >Social Media Marketing</a
        >, Content Marketing.
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


    <div class="our-workspace-about">
        <h2>Our <span style="color:#ff0808;">Workspace</span></h2>
        <p>In the hustle and bustle of everyday life, our workspace stands as a sanctuary a place where minds meet and visions align. Here, diversity is celebrated, and inclusivity reigns supreme, creating an atmosphere where everyone feels valued and respected.</p>
        <div class="workspace-img-div">
            <div class="image-card">
                <div class="image-div">
                    <img src="sagartech-team/Dev Team Photo - 3.webp" alt="">
                </div>
                <h5 class="card-text">Development Team</h5>
            </div>
            <!-- ------------------------ -->
            <div class="image-card">
                <div class="image-div">
                    <img src="sagartech-team/Social_Media_Team_Photo_-_1_35.webp" alt="">
                </div>
                <h5 class="card-text">Social Media Team</h5>
            </div>
            <!-- ------------------------ -->
            <div class="image-card">
                <div class="image-div">
                    <img src="sagartech-team/SEO_Team_Photo_-_4_35.webp" alt="">
                </div>
                <h5 class="card-text">SEO Team</h5>
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
        <h5 style="color:green">200+</h5>
        <span>Satisfied Clients</span>
      </div>
    </div>
    <div class="stats-cards">
      <img src="https://cdn-icons-png.flaticon.com/512/2163/2163245.png" alt="" />
      <div class="stats-card-detail">
        <h5 style="color:green">1</h5>
        <span>Awards</span>
      </div>
    </div>
    <div class="stats-cards">
      <img src="https://gurcooresidency.com/wp-content/uploads/2021/09/Google-Review-Icon.jpg" alt="" />
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
    <!--================================
Main content -->
    <!--=================================
Footer -->
    
    <?php
    include("include/footer.php");
    ?>
    <!--=================================
Footer -->
    <!-- back-to-top -->
    <!-- <div id="back-to-top">
        <a class="top" id="top" href="#top"> <i class="ion-ios-arrow-up"></i> </a>
    </div> -->
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
    <script type="text/javascript">
        (function() {
            var options = {
                //whatsapp: "+919820133303", // WhatsApp number
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
        $(document).ready(function() {
            $(".testimonial-card").slick({
                centerMode: true,
                infinite: true,
                centerPadding: "0",
                dots: true,
                slidesToShow: 3,
                slodeToScroll: 1,
                arrows: false,
                // autoplay: true,
                // autoplaySpeed: 2000,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2,
                            centerMode: false
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 1
                        }
                    }
                ]
            });
            $('.customer-logos').slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1500,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 4
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 3
                    }
                }]
            });
        })
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
                                    <input type="number" class="form-control" name="mobile" id="mobile" max-length="10" aria-describedby="emailHelp" placeholder="Enter Contact Number">
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