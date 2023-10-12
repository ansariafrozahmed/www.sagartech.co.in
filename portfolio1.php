<!doctype html>
<html lang="en">


<!-- Mirrored from iqonicthemes.com/themes/qwilo/qwilo/full-classic-4-portfolio.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Oct 2019 14:24:27 GMT -->

<head>
    <title>Sagar Tech</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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


</head>
<style>
   body {
	-youbkit-touch-callout: none; /* iOS Safari */
	-youbkit-user-select: none;   /* Chrome 6.0+, Safari 3.1+, Edge & Opera 15+ */
	-moz-user-select: none;       /* Firefox */
	-ms-user-select: none;        /* IE 10+ and Edge */
	user-select: none;            /* Non-prefixed version, 
								  currently supported by Chrome and Opera */
}
.iq-grid-item {
    padding: 0 0 70px 0 !important;
}

.card__title {
  font-size: 1.5rem;
  font-weight: 300;
  margin: 0 0 0.5rem;
  text-align: center;
}

.card__image {
    
  height: 200px;
  margin-bottom: 0.5rem;
  overflow: hidden;
  width: 100%;
}

.card__image img {
  object-fit: cover;
  overflow: hidden;
  /* transition duration is less than the one on hover */
  /* so img returns faster to its original position */
  transition: transform 1s ease-in-out;
  width: 100%;
}

.card__image:hover img {
  transform: translateY(calc(-100% + 200px));
  transition: transform 5s ease-in-out;
}
.wraps { width: 370px; height: 240px; padding: 0; overflow: hidden; float: left;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.frame { width: 1280px; height: 786px; }

.frame {
    overflow:hidden;
    // zoom: 0.25;
    -moz-transform: scale(0.25);
    -moz-transform-origin: 0 0;
    -o-transform: scale(0.25);
    -o-transform-origin: 0 0;
    -webkit-transform: scale(0.25);
    -webkit-transform-origin: 0 0;
    -webkit-scrollbar-width: 0px; 
</style>
<body>
    <!-- loading -->
    <div id="loading">
        <div id="loading-center">
            <img src="images/logoonly.jpg" alt="loder">
        </div>
    </div>
    <!--Start of Tawk.to Script-->
<!-- <script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5def76bd43be710e1d216625/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script> -->
<!--End of Tawk.to Script-->
    <!-- loading End -->
    <!-- HEADER  -->
    <?php 
    $page = 'portfolio';
    include("include/header2.php"); ?>
    <!-- /HEADER END -->
    <!-- search -->
    <!--     <div class="search">
        <button id="btn-search-close" class="btn btn--search-close" aria-label="Close search form">
            <i class="fa fa-close" aria-hidden="true"></i>
        </button>
        <form class="search__form">
            <input class="search__input" name="search" type="search" placeholder="Qwilo Search" autocomplete="off" autocapitalize="off" spellcheck="false">
            <span class="search__info">Hit enter to search or ESC to close</span>
        </form>
        <div class="search__related">
            <div class="search__suggestion iq-font-white">
                <h3 class="iq-font-white iq-tw-6">May We Suggest?</h3>
                <p>#drone #funny #catgif #broken #lost #hilarious #good #red #blue #nono #why #yes #yesyes #aliens #green</p>
            </div>
            <div class="search__suggestion iq-font-white">
                <h3 class="iq-font-white iq-tw-6">Is It This?</h3>
                <p>#good #red #hilarious #blue #nono #why #yes #yesyes #aliens #green #drone #funny #catgif #broken #lost</p>
            </div>
            <div class="search__suggestion iq-font-white">
                <h3 class="iq-font-white iq-tw-6">Where Art Thou?</h3>
                <p>#broken #lost #good #red #funny #hilarious #catgif #blue #nono #why #yes #yesyes #aliens #green #drone</p>
            </div>
        </div>
    </div> -->
    <!-- /search END -->
    <!--======= Breadcrumb Left With BG Image =======-->
    <section class="overview-block-ptb iq-over-black-70 jarallax iq-breadcrumb3 text-left iq-font-white" style="background-image: url('images/bg/03.jpg'); background-position: center center; background-repeat: no-repeat; background-size: cover;">
        <div class="container wow zoomIn" data-wow-duration="1.0s">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="iq-mb-0">
                        <h2 class="iq-font-white iq-tw-6">Portfolio</h2>
                    </div>
                </div>
                <div class="col-lg-8">
                    <nav aria-label="breadcrumb" class="text-right">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index"><i class="ion-android-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!--======= Breadcrumb Left With BG Image =======-->

    <!--=================================
        Main Content -->
    <div class="main-content popup-gallery">
        <!--=================================
            portfolio -->
        <section class="overview-block-ptb">
            <div class="container-fluid iq-hide">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                        <!-- <div class="isotope-filters">
                            <button data-filter="" class="active">All</button>
                            <button data-filter=".photography">Website</button>
                            <button data-filter=".branding">Android</button>
                            <button data-filter=".webdesign">iOS</button>
                            <button data-filter=".illustration">SMS Bulk</button>
                        </div> -->
                        <style type="text/css">
                            .iq-portfolio-05 .hoverdir {
                                background: rgba(255, 8, 8, 0.8) !important;
                            }
                        </style>
                        <div class="isotope iq-columns-3">
                            <div class="iq-grid-item illustration wow flipInX" data-wow-duration="1.0s">
                                <div class="wraps">
<h2 class="card__title">SAUDI WELLS</h2>
    <div class="card__image">
        <a href="http://saudiwells.com" target="_blank">
        <img src="images/saudiyawells.png" alt="" />
        </a>
      </div>
</div>
                            </div>
                            <div class="iq-grid-item branding">
                                <div class="wraps">
<h2 class="card__title">AL-AFIFA</h2>
    <div class="card__image">
        <a href="http://al-afifa.com" target="_blank">
        <img src="images/afifa.png" alt="" />
        </a>
      </div>
</div>
                            </div>
                            <div class="iq-grid-item photography" >
                                <div class="wraps">
                                    <h2 class="card__title">DPCSAUDI</h2>
    <div class="card__image">
        <a href="https://dpcsaudi.com" target="_blank">
        <img src="images/dpcsaudi.png" alt="" />
        </a>
      </div>
</div>
                            </div>
                            <div class="iq-grid-item webdesign">
                                <div class="wraps">
<h2 class="card__title">ELESAUDI</h2>
    <div class="card__image">
        <a href="http://elesaudi.com" target="_blank">
        <img src="images/elesaudi.png" alt="" />
        </a>
      </div>
</div>
                            </div>
                            <div class="iq-grid-item illustration wow flipInX" data-wow-duration="1.0s">
                                <div class="wraps">
<h2 class="card__title">RUBY MARINES</h2>
    <div class="card__image">
        <a href="http://rubymarines.com" target="_blank">
        <img src="images/rubymarine.png" alt="" />
        </a>
      </div>
</div>
                            </div>
                            <div class="iq-grid-item photography">
                                <div class="wraps">
<h2 class="card__title">SCAN2PLAN</h2>
    <div class="card__image">
        <a href="http://scan2plan.in" target="_blank">
        <img src="images/scan2plan.png" alt="" />
        </a>
      </div>
</div>
                            </div>
                            <div class="iq-grid-item branding">
                                <div class="wraps">
<h2 class="card__title">HANWARI LEATHERS</h2>
    <div class="card__image">
        <a href="http://hanwarileathers.com" target="_blank">
        <img src="images/hanwarileathers.png" alt="" />
        </a>
      </div>
</div>
</div>
                            <div class="iq-grid-item photography">
                                <div class="wraps">
<h2 class="card__title">SOUTH FIELD</h2>
    <div class="card__image">
        <a href="http://southfield.co.in" target="_blank">
        <img src="images/southfield.png" alt="" />
        </a>
      </div>
</div>
                            </div>
                            <div class="iq-grid-item branding">
                                <div class="wraps">
<h2 class="card__title">ENRICH KART</h2>
    <div class="card__image">
        <a href="http://enrichkart.com" target="_blank">
        <img src="images/enrichkart.png" alt="" />
        </a>
      </div>
</div>
                            </div>
                            
                            <div class="iq-grid-item photography">
                                <div class="wraps">
<h2 class="card__title">MIRZA AGRO FOODS</h2>
    <div class="card__image">
        <a href="http://mirzaagrofoods.com" target="_blank">
        <img src="images/mirzaagro.png" alt="" />
        </a>
      </div>
</div>
                            </div>
                            <div class="iq-grid-item photography">
                                <div class="wraps">
<h2 class="card__title">SK AIRCON</h2>
    <div class="card__image">
        <a href="http://skaircon.co.in" target="_blank">
        <img src="images/skaircon.png" alt="" />
        </a>
      </div>
</div>
                            </div>
                            <div class="iq-grid-item webdesign">
                                <div class="wraps">
<h2 class="card__title">ROYAL MUMBAI TOURS</h2>
    <div class="card__image">
        <a href="https://royalmumbaitours.in/rmtdemo/" target="_blank">
        <img src="images/royalmumbaitours.png" alt="" />
        </a>
      </div>
</div>
                            </div>
                            <!-- <div class="iq-grid-item webdesign">
                                <div class="iq-portfolio-05">
                                    <img alt="#" src="images/portfolio/grid/07.jpg">
                                    <div class="hoverdir">
                                        <h5><a href="portfolio-single-1.html" class="title">Portfolio Dashboard</a></h5>
                                        <div class="iq-portfolio-bottom">
                                            <ul class="iq-portfolio-icon">
                                                <li><a href="portfolio-single-1.html"><i class="fa fa-link"></i></a></li>
                                                <li><a class="image-link popup-img" href="images/portfolio/grid/07.jpg"><i class="fa fa-arrows-alt"></i></a></li>
                                            </ul>
                                            <a class="likes" href="#">
                                                    <i class="fa fa-heart"></i><span>125</span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="iq-grid-item illustration">
                                <div class="iq-portfolio-05">
                                    <img alt="#" src="images/portfolio/grid/08.jpg">
                                    <div class="hoverdir">
                                        <h5><a href="portfolio-single-1.html" class="title">Portfolio Dashboard</a></h5>
                                        <div class="iq-portfolio-bottom">
                                            <ul class="iq-portfolio-icon">
                                                <li><a href="portfolio-single-1.html"><i class="fa fa-link"></i></a></li>
                                                <li><a class="image-link popup-img" href="images/portfolio/grid/08.jpg"><i class="fa fa-arrows-alt"></i></a></li>
                                            </ul>
                                            <a class="likes" href="#">
                                                    <i class="fa fa-heart"></i><span>125</span>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=================================
            portfolio -->
        <!--=================================
              Action Box -->
        <div class="iq-action-blog green-bg particles-bg iq-ptb-40">
            <canvas id="canvas"></canvas>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-10 col-md-9 iq-font-white">
                        <h2 class="iq-font-white iq-fw-4 iq-pb-10" style="font-weight: 500;">A Complete Solution of Your Business Under One Roof. <strong class="iq-font-black"></strong></h2>
                        <div align="justify">Sagar tech - Technical Solutions, provides you a complete Business Solution for new and existing Businesses and helps you to scale it to next level of Excellence by Designing Responsive websites synchronized with Android and iOS App along with Bulk SMS services and Accounting Services at Pocket Friendly price.</div>
                    </div>
                    <!-- <div class="col-lg-2 col-md-3 text-right"><a href="about.html" class="button white grey iq-re-4-mt30 iq-mr-0">Read More</a> </div> -->
                </div>
            </div>
        </div>
        <!--=================================
              Action Box -->
    </div>
    <!--=================================
            Main Content -->
    <!--=================================
            Footer -->
    <?php include("include/footer.php"); ?>
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
    <script src="js/noclick.js"></script>
    <!-- WhatsHelp.io widget -->
    <script type="text/javascript">
        (function() {
            var options = {
                whatsapp: "+919820133303", // WhatsApp number
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
</body>


<!-- Mirrored from iqonicthemes.com/themes/qwilo/qwilo/full-classic-4-portfolio.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Oct 2019 14:24:27 GMT -->

</html>