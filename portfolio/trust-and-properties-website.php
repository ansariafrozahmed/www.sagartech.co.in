<?php
include("../include/config.php");
?>
<!doctype html>
<html lang="en">


<head>
    <title>Our Trust & Properties Portfolio - Sagar Tech Technical Solutions</title>
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

    <section style="background-image: url('../portfolio-images/banner.jpg'); background-position: center center; background-repeat: no-repeat; background-size: cover;" class="banner-content">
        <h2>Trust & Properties</h2>
        <ul class="breadcrumbdiv">
            <li><a href="https://sagartech.co.in/">Home</a></li>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right">
                <path d="m9 18 6-6-6-6" />
            </svg>
            <li><a href="our-portfolio" style="color: white;">portfolio</a></li>
        </ul>
    </section>



    <div class="content-div">
        <h2 style="text-align: center; font-weight: 600; padding: 10px; font-size: 30px;">Our Trust & Properties Website portfolio</h2>
        <hr>
        <div class="maincontent">
    <?php
    // Define an array of trust properties data
    $trustPropertiesData = array(
        array(
            "name" => "Be Human",
            "imgSrc" => "../portfolio-mockups/trust-properties/behuman.webp",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, inventore est? Ipsum magni sunt alias voluptas deleniti in explicabo fuga amet."
        ),
        array(
            "name" => "Dunes",
            "imgSrc" => "../portfolio-mockups/trust-properties/dunes.webp",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, inventore est? Ipsum magni sunt alias voluptas deleniti in explicabo fuga amet."
        ),
        array(
            "name" => "Kolsa Mohalla",
            "imgSrc" => "../portfolio-mockups/trust-properties/kolsamohalla.webp",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, inventore est? Ipsum magni sunt alias voluptas deleniti in explicabo fuga amet."
        ),
        array(
            "name" => "We Care",
            "imgSrc" => "../portfolio-mockups/trust-properties/wecare.webp",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, inventore est? Ipsum magni sunt alias voluptas deleniti in explicabo fuga amet."
        )
    );

    // Loop through the trust properties data and generate HTML for each item
    foreach ($trustPropertiesData as $item) {
        echo '<div class="maincontent-inner">';
        echo '<div class="imgdiv">';
        echo '<img src="' . $item["imgSrc"] . '" alt="' . $item["name"] . '">';
        echo '</div>';
        echo '<div class="content-text">';
        echo '<h2>' . $item["name"] . '</h2>';
        // echo '<p>' . $item["description"] . '</p>';
        echo '</div>';
        echo '</div>';
    }
    ?>
</div>

    </div>





<!-- 
    <h3>FAQs</h3>
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
    <!--=================================
        Footer -->

    <!-- back-to-top -->
    <div id="back-to-top">
        <a class="top" id="top" href="#top"> <i class="ion-ios-arrow-up"></i> </a>
    </div>
    <!-- back-to-top End -->


    <!--================ Jquery =================-->
    <!-- Jquery  -->
    <script src="<?= WEB_URL ?>js/jquery.min.js"></script>
    <!-- popper  -->
    <script src="<?= WEB_URL ?>js/popper.min.js"></script>
    <!--  bootstrap -->
    <script src="<?= WEB_URL ?>js/bootstrap.min.js"></script>
    <!-- Google captcha code Js -->
    <script src='../../../../www.google.com/recaptcha/api.js'></script>
    <!-- Mega Menu -->
    <script src="<?= WEB_URL ?>js/mega-menu/mega_menu.js"></script>
    <!-- Main -->
    <script src="<?= WEB_URL ?>js/main.js"></script>

    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <!-- price_range_script -->
    <script src="<?= WEB_URL ?>js/price_range_script.js"></script>
    <!-- modernizr.custom -->
    <script src="<?= WEB_URL ?>js/modernizr.custom.js"></script>
    <!-- jquerypp.custom -->
    <script src="<?= WEB_URL ?>js/jquerypp.custom.js"></script>
    <!-- bookblock -->
    <script src="<?= WEB_URL ?>js/jquery.bookblock.js"></script>
    <!-- style-customizer-->
    <script src="<?= WEB_URL ?>js/style-customizer.js"></script>
    <!-- Custom -->
    <script src="<?= WEB_URL ?>js/custom.js"></script>
    <script src="<?= WEB_URL ?>js/notcopyable.js"></script>

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

</html>