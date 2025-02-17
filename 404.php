<?php
header("Access-Control-Allow-Origin: *");
?>
<!doctype html>
<html lang="en">

<head>
    <title>404</title>
    <!--<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" href="/images/logoonly.jpg" />
    <!-- bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- main style -->
    <link href="/css/style.css" rel="stylesheet" type="text/css" />
    <!-- responsive -->
    <link href="/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="/css/newcssresponsive.css" rel="stylesheet" type="text/css" />
    <!-- custom -->
    <link href="/css/custom.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/css/index.css" type="text/css">

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-156939866-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-156939866-1');
    </script>
    <style>
        a.\34 04ckjd {
            padding: 20px 50px;
            background: black;
            color: white;
            font-size: 18px;
            font-weight: bold;
            border-radius: 5px;
        }

        @media screen and (min-width: 768px) and (max-width: 991px) {
            a.\34 04ckjd {
                padding: 12px 30px;
            }
        }

        @media screen and (min-width: 0px) and (max-width: 767px) {
            a.\34 04ckjd {
                padding: 8px 15px;
                font-size: 13px;
                font-weight: 500;
            }
        }
    </style>
</head>

<body>
    <!-- loading -->
    <div id="loading">
        <div id="loading-center">
            <img src="/images/logoonly.jpg" alt="loder">
        </div>
    </div>
    <!-- loading End -->
    <!-- HEADER  -->
    <?php
    $page = 'home';
    include('include/newHeader.php');
    ?>

    <img src="/images/404.jpeg" width="100%" alt="">
    <div class="col-lg-12 text-center" style="margin-bottom: 50px;">
        <a class="404ckjd" href="https://sagartech.co.in/">Go Home</a>
    </div>
    <!-- /HEADER END -->

    <!-- Footer -->
    <?php include("include/footer.php"); ?>

    <!-- back-to-top -->
    <div id="back-to-top">
        <a class="top" id="top" href="#top"> <i class="ion-ios-arrow-up"></i> </a>
    </div>
    <!-- back-to-top End -->
    <!--================ Jquery =================-->
    <!-- Jquery  -->
    <script src="/js/jquery.min.js"></script>
    <!-- popper  -->
    <script src="/js/popper.min.js"></script>
    <!--  bootstrap -->
    <script src="/js/bootstrap.min.js"></script>
    <!-- Google captcha code Js -->
    <script src='../../../../www.google.com/recaptcha/api.js'></script>
    <!-- Mega Menu -->
    <script src="/js/mega-menu/mega_menu.js"></script>
    <!-- Main -->
    <script src="/js/main.js"></script>

    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <!-- price_range_script -->
    <script src="/js/price_range_script.js"></script>
    <!-- modernizr.custom -->
    <script src="/js/modernizr.custom.js"></script>
    <!-- jquerypp.custom -->
    <script src="/js/jquerypp.custom.js"></script>
    <!-- bookblock -->
    <script src="/js/jquery.bookblock.js"></script>
    <!-- style-customizer-->
    <script src="/js/style-customizer.js"></script>
    <!-- Custom -->
    <script src="/js/custom.js"></script>
    <!-- WhatsHelp.io widget -->
    <script src="/js/notcopyable.js"></script>


    <script type="text/javascript">
        (function () {
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
            s.onload = function () {
                WhWidgetSendButton.init(host, proto, options);
            };
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        })();
    </script>
    <!-- /WhatsHelp.io widget -->
    <!--Login-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
    <script>
        $(function () {
            var myform = $(".add_mainarea_form");
            var completed = '0%';
            $(myform).ajaxForm({

                complete: function () {
                    $('#largeModal').modal('hide')
                    setTimeout(
                        $('.bd-example-modal-sm').modal('show'), 3000);
                }
            });


        });
        $(document).ready(function () {

            $('body').bind('cut copy paste', function (e) {
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


</body>

</html>