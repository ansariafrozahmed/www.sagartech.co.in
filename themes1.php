<!doctype html>
<html lang="en">
<head>
    <title>Themes - Sagar Tech</title>
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
    <link href="css/themes.css" rel="stylesheet" type="text/css" />


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
.col4 {width: 33.33333333%; float: left; position: relative;}
.transition {-webkit-transition: all .5s ease; -moz-transition: all .5s ease; -o-transition: all .5s ease;  transition: all .5s ease;}
body .container {width: 70%; margin: 0 auto;}
.fx1 .item, .fx2 .item, .fx3 .item, .fx4 .item, .fx5 .item {margin: 10px 0;}

/* active on focus for accessibility tab navigation */

.fx2 .item {padding: 0;}
.fx2 .item img {padding: 0 !important; display: block; max-width: 100%; height: auto;}
.fx2 a:hover .item img, .fx2 a:focus .item img {opacity: 0.9; -webkit-transform: scale(0.95); transform: scale(0.95);}
.fx2 h4, .fx2 p, .fx2 span {-webkit-transition: all .5s ease; -moz-transition: all .5s ease; -o-transition: all .5s ease;  transition: all .5s ease;} 
.fx2 a .item h4 {font-family: 'Raleway', sans-serif; font-size: 16px; position: absolute; color:#fff; text-transform: uppercase; letter-spacing: 2px; position: absolute; top:42%; left:0; right:0; margin:0 auto; text-align: center; -webkit-filter: blur(5px); filter: blur(5px); opacity: 0;}
.fx2 a:hover .item h4, .fx2 a:focus .item h4 {-webkit-filter: blur(0px); filter: blur(0px); opacity: 1;}
.fx2 a .item p {font-family: 'Raleway', sans-serif; font-size: 8px; position: absolute; color:#fff; text-transform: uppercase; letter-spacing: 2px; position: absolute; top:53%; left:0; right:0; margin:0 auto; text-align: center; opacity: 0;}
.fx2 a:hover .item p, .fx2 a:focus .item p {opacity: 1;}

@media screen and (max-width: 991px) {
.col4 {width: 50%;}
.fx5 a .item h4 {font-size: 13px;}
}   

@media screen and (max-width: 580px) {
.col4 {width: 100%;}
} 

</style>
<body>
    <!-- loading -->
    <div id="loading">
        <div id="loading-center">
            <img src="images/logoonly.jpg" alt="loder">
        </div>
    </div>

    <!-- HEADER  -->
    <?php 
    $page = 'portfolio';
    include("include/header2.php"); ?>
    <!-- /search END -->
    <!--======= Breadcrumb Left With BG Image =======-->
    <section class="overview-block-ptb iq-over-black-70 jarallax iq-breadcrumb3 text-left iq-font-white" style="background-image: url('images/bg/03.jpg'); background-position: center center; background-repeat: no-repeat; background-size: cover;">
        <div class="container wow zoomIn" data-wow-duration="1.0s">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="iq-mb-0">
                        <h2 class="iq-font-white iq-tw-6">Themes</h2>
                    </div>
                </div>
                <div class="col-lg-8">
                    <nav aria-label="breadcrumb" class="text-right">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index"><i class="ion-android-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Themes</li>
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
            <section class="portfolio section">
  <div class="container">
   
    
    <div class="filters">
      <ul>
        <li class="active" data-filter="*">All</li>
        <li data-filter=".corporate">Corporate</li>
        <li data-filter=".personal">Personal</li>
        <li data-filter=".agency">Agency</li>
        <li data-filter=".portal">Portal</li>
      </ul>
    </div>
    
    <div class="filters-content">
      <div class="row grid">
        <div class="col-sm-4 all corporate">
          <div class="item">
            <img src="http://themes.muffingroup.com/betheme/documentation/doc-images/muffin-options/custom-js.png" alt="Work 1">
            <div class="p-inner">
              <h5>Work 1</h5>
              <div class="cat">Corporate</div>
            </div>
          </div>
        </div>
        <div class="col-sm-4 all personal">
          <div class="item">
            <img src="http://themes.muffingroup.com/betheme/documentation/doc-images/muffin-options/custom-js.png" alt="Work 1">
            <div class="p-inner">
              <h5>Work 1</h5>
              <div class="cat">Personal</div>
            </div>
          </div>
        </div>
        <div class="col-sm-4 all agency">
          <div class="item">
            <img src="http://themes.muffingroup.com/betheme/documentation/doc-images/muffin-options/custom-js.png" alt="Work 1">
            <div class="p-inner">
              <h5>Work 1</h5>
              <div class="cat">Agency</div>
            </div>
          </div>
        </div>
        <div class="col-sm-4 all portal">
          <div class="item">
            <img src="http://themes.muffingroup.com/betheme/documentation/doc-images/muffin-options/custom-js.png" alt="Work 1">
            <div class="p-inner">
              <h5>Work 1</h5>
              <div class="cat">Portal</div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
    
  </div>
</section>
        <!--<section class="overview-block-ptb">-->
        <!--    <div class="container-fluid iq-hide">-->
        <!--        <div class="row">-->
        <!--            <div class="fx2">-->

        <!--    <a href="#">-->
        <!--        <div class="item col4 p-2">-->
        <!--            <img class="transition img-responsive" src="https://images.unsplash.com/photo-1461611034385-e082102d5c75?auto=format&fit=crop&w=1050&q=60&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D">-->
        <!--            <h4>Theme1</h4>-->
        <!--            <p>Description</p>-->
        <!--            <footer class="card-footer text-center">-->
        <!--                <h2>Theme1</h2>-->
        <!--            </footer>-->
        <!--        </div>-->
        <!--    </a>-->
        <!--    <a href="#">-->
        <!--        <div class="item col4 p-2">-->
        <!--            <img class="transition img-responsive" src="https://images.unsplash.com/photo-1461611034385-e082102d5c75?auto=format&fit=crop&w=1050&q=60&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D">-->
        <!--            <h4>Theme2</h4>-->
        <!--            <p>Description</p>-->
        <!--            <footer class="card-footer text-center">-->
        <!--                <h2>Theme2</h2>-->
        <!--            </footer>-->
        <!--        </div>-->
        <!--    </a>-->
        <!--    <a href="#">-->
        <!--        <div class="item col4 p-2">-->
        <!--            <img class="transition img-responsive" src="https://images.unsplash.com/photo-1461611034385-e082102d5c75?auto=format&fit=crop&w=1050&q=60&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D">-->
        <!--            <h4>Theme3</h4>-->
        <!--            <p>Description</p>-->
        <!--            <footer class="card-footer text-center">-->
        <!--                <h2>Theme3</h2>-->
        <!--            </footer>-->
        <!--        </div>-->
        <!--    </a>-->
            
        <!--</div> -->
        <!--        </div>-->
        <!--    </div>-->
        <!--</section>-->
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
    $(document).ready(function() {
        $('.filters ul li').click(function(){
          $('.filters ul li').removeClass('active');
          $(this).addClass('active');
          
          var data = $(this).attr('data-filter');
          $grid.isotope({
            filter: data
          })
        });
        
        var $grid = $(".grid").isotope({
          itemSelector: ".all",
          percentPosition: true,
          masonry: {
            columnWidth: ".all"
          }
})
    })

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