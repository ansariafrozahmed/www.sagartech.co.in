<?php
include("include/config.php");
session_start();
if(!isset($_SESSION['client'])) {
    if(!isset($_SESSION['login']))
    header("location:index");
}
?>
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
    <!--<link href="css/themes.css" rel="stylesheet" type="text/css" />-->


</head>
<style>
.feature {
	/*padding: 20px;*/
	margin-top: 30px;
}
.feature span {
	font-size: 5em;
    color: #016cc7;
}

 .feature {
	/*width: 31.333333%;*/
	-webkit-transition: all 0.3s;
  	-moz-transition: all 0.3s;
  	transition: all 0.3s;
  	/*margin-right: 20px;*/
  	/*border: 3px solid #f6f6f6;*/
    /*border-radius: 5px;*/
}
 .feature:hover {
    -webkit-box-shadow: 0px 10px 11px -1px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 10px 11px -1px rgba(0,0,0,0.75);
box-shadow: 0px 10px 11px -1px rgba(0,0,0,0.75);
    transform: translateY(-10px);
}
.categ:hover {
    color:white !important;
}
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

 active on focus for accessibility tab navigation 

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
@media screen and (min-width: 992px) {
   #menulinks {
      display: block;
   }

   #shmenulinks {
      display: none;
   }

}

@media screen and (max-width: 991px) {
   #shmenulinks {
      display: block;
   }
}

.section {
  padding: 30px 0;
  color: #333;
}
.section .top-side {
  text-align: center;
}
.section .top-side .title {
  font-weight: 500;
  font-size: 15px;
  display: inline-block;
}
.section .top-side .title:after {
  content: "";
  display: block;
  width: 50%;
  border-bottom: 1px solid #494949;
  margin: 8px auto;
}
.section .top-side h2 {
  font-weight: 700;
}
.section.portfolio .filters {
  text-align: center;
  margin-top: 50px;
}
.section.portfolio .filters ul {
  padding: 0;
}
.section.portfolio .filters ul li {
  list-style: none;
  display: inline-block;
  padding: 20px 30px;
  cursor: pointer;
  position: relative;
}
.section.portfolio .filters ul li:after {
  content: "";
  display: block;
  width: calc(0% - 60px);
  position: absolute;
  height: 2px;
  background: #333;
  transition: width 350ms ease-out;
}
.section.portfolio .filters ul li:hover:after {
  width: calc(100% - 60px);
  transition: width 350ms ease-out;
}
.section.portfolio .filters ul li.active:after {
  width: calc(100% - 60px);
}
.section.portfolio .filters-content {
  margin-top: 50px;
}
.section.portfolio .filters-content .show {
  opacity: 1;
  visibility: visible;
  transition: all 350ms;
}
.section.portfolio .filters-content .hide {
  opacity: 0;
  visibility: hidden;
  transition: all 350ms;
}
.section.portfolio .filters-content .item {
  text-align: center;
  cursor: pointer;
  margin-bottom: 30px;
}
.section.portfolio .filters-content .item .p-inner {
  padding: 20px 30px;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
}
.section.portfolio .filters-content .item .p-inner h5 {
  font-size: 15px;
}
.section.portfolio .filters-content .item .p-inner .cat {
  font-size: 13px;
}
.section.portfolio .filters-content .item img {
  width: 100%;
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

        <section class="overview-block-ptb">
            <div class="container-fluid iq-hide">
                <div class="row">
                    <div class="col-md-3">
                        
                        <div class="list-group" style="padding-bottom:15px;">
                    
                              <div class="card bg-white border-0 ">
                                <div class="card-header text-white bg-danger">
                                    Catergories
                                </div>
                                <div class="card-body">
                    
                                  <a id="shmenulinks" class="nav-link" style="border-radius: 0.25rem; cursor: pointer; width: 100%;" data-toggle="collapse" aria-expanded="true" aria-controls="menulinks" data-target="#menulinks"><i class="fa fa-bars" aria-hidden="true"></i></a>
                    
                                <div id="menulinks" class="nav nav-pills collapse">
                                    <a style="width: 100%;" id="allShow"  class="nav-link categ active"><i class="fa " aria-hidden="true"></i>All<span class="float-right"></span></a>
                                    <?php
                                        $sql = mysqli_query($con,"SELECT * FROM category");
                                        while($rows = mysqli_fetch_assoc($sql)) {
                                            $id = $rows['cat_id'];
                                            $stmt = mysqli_query($con,"SELECT COUNT(*) as total FROM theme WHERE thm_cat_id = '$id'");
                                            $row = mysqli_fetch_assoc($stmt);
                                            $count = $row['total'];
                                        
                                    ?>
                                    <a style="width: 100%;" id="<?php echo $rows['cat_id']; ?>"  class="nav-link categ"><i class="fa " aria-hidden="true"></i><?php echo $rows['cat_name']; ?><span class="float-right"><?php echo $count; ?></span></a>
                                    <?php
                                        }
                                    ?>
                                </div>
                    
                                </div>
                    
                              </div>
                    
                            </div>
                    </div>
                    <div class="col-md-8 themes">
    
                        <section class="portfolio section">
                            
                        <div class="filters-content">
                            <div class="showIn"></div>
                          <div class="ShowAll">
                          <div class="row grid allin">
                            <?php 
                                $sql = mysqli_query($con,"SELECT * FROM theme");
                                while($rows = mysqli_fetch_assoc($sql)) {
                            ?>
                            <div class="col-sm-4 all corporate ">
                              <div class="item feature">
                                <img src="images/themes/<?php echo $rows['thm_img'];?>" alt="<?php echo $rows['thm_img'];?>">
                                <div class="p-inner">
                                  <h5><?php echo $rows['thm_name'];?></h5>
                                  <a href="<?php echo $rows['thm_link'];?>"><button class="btn button m-auto">View Demo</button></a>
                                </div>
                              </div>
                            </div>
                            <?php
                                }
                            ?>
            </div>
        </div>
    </div>
</section>
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
    $(document).ready(function() {
        $('.categ').click(function() {
            
            var cat = $(this).attr('id');
            
                $('.ShowAll').html('');
                $('.showIn').show();
            
            $(".nav-pills a").parent().find('a').removeClass("active");
            $(this).addClass('active');
            console.log(cat);
            $.ajax({
                url: 'include/get_data.php',
                method: 'GET',
                data: {
                    cat_id : cat
                },
                success:function(data) {
                    //$(".nav-pills a").parent().find('a').removeClass("active");
                    //$('.ShowAll').html('');
                    $('.showIn').html('');
                    $('.showIn').append(data);
                    console.log(data);
                }
            })
        })
        
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