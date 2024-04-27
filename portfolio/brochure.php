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

    .fifthsection {
        line-height:normal;
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
        grid-template-columns: 1fr 1fr 1fr;
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

    <section style="background-image: url('../portfolio-images/banner.jpg'); background-position: center center; background-repeat: no-repeat; background-size: cover;" class="banner-content">
        <h2>Brochure Portfolio</h2>
        <ul class="breadcrumbdiv">
            <li><a href="https://sagartech.co.in/">Home</a></li>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right">
                <path d="m9 18 6-6-6-6" />
            </svg>
            <li style="color: white;">Brochure Designing</li>
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


    <div class="fifthsection">
        <h2 style="text-transform:uppercase;">Our Designed <span style="color:#FF0808;">Brochures</span></h2>
        <div class="logosec">
            <?php
      $imageUrls = [
          "../brochure/sagartech-brochure.webp",
        "../brochure/3.webp",
        "../brochure/1.webp",
        "../brochure/2.webp",
        "../brochure/5.webp",
        "../brochure/6.webp",
        "../brochure/7.webp",
        "../brochure/8.webp",
        "../brochure/9.webp",
        "../brochure/10.webp",
        "../brochure/11.webp",
        "../brochure/12.webp",
      ];

      foreach ($imageUrls as $imageUrl) {
        echo '<div class="imgdiv">';
        echo '<img src="' . $imageUrl . '" alt="Brochure">';
        echo '</div>';
      }
        ?>
        </div>
    </div>

    


    

    <?php
    include("../include/footer.php");
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
    <script src="../js/jquery.min.js"></script>
    <!-- popper  -->
    <script src="../js/popper.min.js"></script>
    <!--  bootstrap -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- Google captcha code Js -->
    <script src='../../../../www.google.com/recaptcha/api.js'></script>
    <!-- Mega Menu -->
    <script src="../js/mega-menu/mega_menu.js"></script>
    <!-- Main -->
    <script src="../js/main.js"></script>

    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <!-- price_range_script -->
    <script src="../js/price_range_script.js"></script>
    <!-- modernizr.custom -->
    <script src="../js/modernizr.custom.js"></script>
    <!-- jquerypp.custom -->
    <script src="../js/jquerypp.custom.js"></script>
    <!-- bookblock -->
    <script src="../js/jquery.bookblock.js"></script>
    <!-- style-customizer-->
    <script src="../js/style-customizer.js"></script>
    <!-- Custom -->
    <script src="../js/custom.js"></script>
    <script src="../js/notcopyable.js"></script>

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

    <!-- <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
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
    </div> -->
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
    <!-- <div class="modal fade bd-example-modal-sm text-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
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
    </div> -->
</body>

</html>