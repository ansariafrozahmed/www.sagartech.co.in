

<!doctype html>
<html lang="en">
    
<head>
        <title>Sagar Tech - Graphic Designers in Mumbai</title>
        <!--<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> -->
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
        <!-- custom -->
        <link href="css/custom.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet"  href="css/index1.css" ype="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
        <!-- <link rel="stylesheet"  href="css/logodesign.scss" ype="text/scss"> -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-156939866-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-156939866-1');
</script>
    </head>
    <style type="text/css">
        p{
            text-align: justify;
        }
          body {
	-youbkit-touch-callout: none; /* iOS Safari */
	-youbkit-user-select: none;   /* Chrome 6.0+, Safari 3.1+, Edge & Opera 15+ */
	-moz-user-select: none;       /* Firefox */
	-ms-user-select: none;        /* IE 10+ and Edge */
	user-select: none;            /* Non-prefixed version, 
								  currently supported by Chrome and Opera */
}

#sslider-wrap{
	width:600px;
	height:400px;
	position:relative;
	overflow:hidden;
}

#sslider-wrap ul#slider{
	width:100%;
	height:100%;
	
	position:absolute;
	top:0;
	left:0;		
}

#sslider-wrap ul#slider li{
	float:left;
	position:relative;
	width:600px;
	height:400px;	
}

#sslider-wrap ul#slider li > div{
	position:absolute;
	top:20px;
	left:35px;	
}

#sslider-wrap ul#slider li > div h3{
	font-size:36px;
	text-transform:uppercase;	
}

#sslider-wrap ul#slider li > div span{
	font-family: Neucha, Arial, sans serif;
	font-size:21px;
}

#sslider-wrap ul#slider li i{
	text-align:center;
	line-height:400px;
	display:block;
	width:100%;
	font-size:90px;	
}


/*btns*/
.btns{
	position:absolute;
	width:50px;
	height:60px;
	top:50%;
	margin-top:-25px;
	line-height:57px;
	text-align:center;
	cursor:pointer;	
	background:red;
	z-index:100;
	
	
	-webkit-user-select: none;  
	-moz-user-select: none; 
	-khtml-user-select: none; 
	-ms-user-select: none;
	
	-webkit-transition: all 0.1s ease;
	-moz-transition: all 0.1s ease;
	-o-transition: all 0.1s ease;
	-ms-transition: all 0.1s ease;
	transition: all 0.1s ease;
}

.btns:hover{
	background:rgba(0,0,0,0.3);	
}

#next{right:-50px; border-radius:7px 0px 0px 7px;}
#previous{left:-50px; border-radius:0px 7px 7px 7px;}
#counter{
	top: 30px; 
	right:35px; 
	width:auto;
	position:absolute;
}

#sslider-wrap.active #next{right:0px;}
#sslider-wrap.active #previous{left:0px;}


/*bar*/
#ppagination-wrap{
	min-width:20px;
	margin-top:350px;
	margin-left: auto; 
	margin-right: auto;
	height:15px;
	position:relative;
	text-align:center;
}

#ppagination-wrap ul {
	width:100%;
}

#ppagination-wrap ul li{
	margin: 0 4px;
	display: inline-block;
	width:5px;
	height:5px;
	border-radius:50%;
	background:#fff;
	opacity:0.5;
	position:relative;
  top:0;
  
  
}

#ppagination-wrap ul li.active{
  width:12px;
  height:12px;
  top:3px;
	opacity:1;
	box-shadow:rgba(0,0,0,0.1) 1px 1px 0px;	
}

.simg {
    width:100%;
    height: 100%;
}


/*Header*/
h1, h2{text-shadow:none; text-align:center;}
h1{	color: #666; text-transform:uppercase;	font-size:36px;}
h2{ color: #7f8c8d; font-family: Neucha, Arial, sans serif; font-size:18px; margin-bottom:30px;} 




/*ANIMATION*/
#sslider-wrap ul, #ppagination-wrap ul li{
	-webkit-transition: all 0.3s cubic-bezier(1,.01,.32,1);
	-moz-transition: all 0.3s cubic-bezier(1,.01,.32,1);
	-o-transition: all 0.3s cubic-bezier(1,.01,.32,1);
	-ms-transition: all 0.3s cubic-bezier(1,.01,.32,1);
	transition: all 0.3s cubic-bezier(1,.01,.32,1);	
}

/*poster css*/
.pimg
{
  display: block;
      width: 240px;
    height: 335px;
}
/**-------------- Start Slider ---------------**/
#sliderr
{
    width: 100%;
    height: 400px;
    position: relative;
    margin: auto;
    padding: 40px 0
}

#sliderr input{display: none}

#sliderr .slides
{
    position:absolute;
    width: 100%;
    height: 400px
}


#sliderr .slides .slide
{
    width: 33.33333333%;
    height: 100%;
    float: left;
   
    filter: alpha(opacity=70); /* for IE */
    opacity: .7
}

#sliderr .arrow label
{
    display: inline-block;
    position: absolute;
    top: 33%;
    left: 0;
    z-index: 0;
    width: 100px;
    height: 45px;
    margin-top: -22.5px;
    text-align: center;
    display: none;
   
}

#sliderr .next-arrow label{right: 0; left: auto}

#sliderr .arrow label:hover .thumb
{
    -webkit-transform: rotateY(0);
    -ms-transform: rotateY(0);
    transform: rotateY(0);
   
    -webkit-transition: transform .5s ease-in;
    transition: transform .5s ease-in
}

#sliderr .arrow label i
{
    display: block;
    width: 40%;
    height: 45px;
    background-color: black;
    color: #fff;
    line-height: 45px
}

#sliderr .arrow label .thumb
{
    display: block;
    width:60%;
    height: 45px
}

#sliderr .prev-arrow label i{float: left}

#sliderr .prev-arrow label .thumb
{
    float: right;
   
    -webkit-transform: rotateY(-90deg);
    -ms-transform: rotateY(-90deg);
    transform: rotateY(-90deg);
   
    -webkit-transform-origin: left center;
    -ms-transform-origin: left center;
    transform-origin: left center;
}

#sliderr .next-arrow label i{float: right}

#sliderr .next-arrow label .thumb
{
    float: left;
   
    -webkit-transform: rotateY(90deg);
    -ms-transform: rotateY(90deg);
    transform: rotateY(90deg);
   
    -webkit-transform-origin: right center;
    -ms-transform-origin: right center;
    transform-origin: right center;
}

#slide-1-radio:checked ~ .slides .slide:first-child
{
    position: relative;
    z-index: 1;
    /* box-shadow: 0 1px 20px rgba(255,255,255,.7); */
   
    filter: alpha(opacity=100); /* for IE */
    opacity: 1;
   
    -webkit-transform: translateX(100%) scale(1.2);
    -ms-transform: translateX(100%) scale(1.2);
    transform: translateX(100%) scale(1.2);
   
    -webkit-transition: transform .7s ease-in-out;
    transition: transform .7s ease-in-out
}

#slide-1-radio:checked ~ .slides .slide:nth-child(2)
{
    -webkit-transform: translateX(-100%);
    -ms-transform: translateX(-100%);
    transform: translateX(-100%);
   
    -webkit-transition: transform .5s ease-in-out;
    transition: transform .5s ease-in-out
}

#slide-1-radio:checked ~ .prev-arrow #prev-3-arrow,
#slide-1-radio:checked ~ .next-arrow #next-2-arrow
{
    display: inline-block
}

#slide-2-radio:checked ~ .slides .slide:nth-child(2)
{
    position: relative;
    z-index: 1;
    box-shadow: 0 1px 20px rgba(255,255,255,.7);
   
    filter: alpha(opacity=100); /* for IE */
    opacity: 1;
   
    -webkit-transform: translateX(0) scale(1.2);
    -ms-transform: translateX(0) scale(1.2);
    transform: translateX(0) scale(1.2);
   
    -webkit-transition: transform .7s ease-in-out;
    transition: transform .7s ease-in-out
}

#slide-2-radio:checked ~ .slides .slide:first-child
{
    -webkit-transform: translateX(0);
    -ms-transform: translateX(0);
    transform: translateX(0);
   
    -webkit-transition: transform .5s ease-in-out;
    transition: transform .5s ease-in-out
}

#slide-2-radio:checked ~ .prev-arrow #prev-1-arrow,
#slide-2-radio:checked ~ .next-arrow #next-3-arrow
{
    display: inline-block
}

#slide-3-radio:checked ~ .slides .slide:last-child
{
    position: relative;
    z-index: 1;
    /* box-shadow: 0 1px 20px rgba(255,255,255,.7); */
 
    filter: alpha(opacity=100); /* for IE */
    opacity: 1;
   
    -webkit-transform: translateX(-100%) scale(1.2);
    -ms-transform: translateX(-100%) scale(1.2);
    transform: translateX(-100%) scale(1.2);
   
    -webkit-transition: transform .7s ease-in-out;
    transition: transform .7s ease-in-out
}

#slide-3-radio:checked ~ .slides .slide:nth-child(2)
{
    -webkit-transform: translateX(100%);
    -ms-transform: translateX(100%);
    transform: translateX(100%);
   
    -webkit-transition: transform .5s ease-in-out;
    transition: transform .5s ease-in-out
}

#slide-3-radio:checked ~ .prev-arrow #prev-2-arrow,
#slide-3-radio:checked ~ .next-arrow #next-1-arrow
{
    display: inline-block
}
/**-------------- End Slider ---------------**/

/**----------- Start Media ----------**/
@media screen and (max-width: 768px)
{
  #sliderr{width: 100%; height: 175px}
   
  #sliderr .slides{height: 175px}
   
  #sliderr .arrow label{width: 80px;top: 100%;}
}
@media screen and (max-width: 575px)
{
    .postercol {
        padding-bottom: 250px;
    }
    #sliderr .arrow label
{
    top: 100%;
}
}
@media screen and (max-width: 998px)
{
    
}

/**----------- End Media ----------**/
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
        <header class="header-01 white re-none">
        <div class="topbar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="topbar-left">
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fa fa-phone text-blue"></i> +91 9820388810</li>
                                <li class="list-inline-item"><i class="fa fa-envelope-o"> </i> info@sagartech.co.in</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- menu start -->
        <nav id="menu-1" class="mega-menu">
            <!-- menu list items container -->
            <section class="menu-list-items">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- menu logo -->
                            <ul class="menu-logo">
                                <li>
                                    <a href="index">
                                        <img id="logo_img" src="images/sagartech.png" class="rounded" alt="logo" style="background: white; padding: 5px;">
                                    </a>
                                </li>
                            </ul>
                            <ul class="menu-sidebar pull-right">
                                <li class="iq-share">
                                    <div class="slideouticons">
                                        <input type="checkbox" id="togglebox" />
                                        <label for="togglebox" class="mainlabel"><i class="fa fa-share-alt"></i></label>
                                        <div class="iconswrapper">
                                            <ul>
                                                <li><a href="https://www.facebook.com/Sagar-Tech-223839251868625/" target="_blank"><i class="fa fa-facebook" title="Facebook"></i></a></li>
                                                <li><a href="https://twitter.com/SagarTech2" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                <li><a href="https://www.linkedin.com/in/sagar-tech-151800177/" target="_blank"><i class="fa fa-linkedin" title="LinkedIn"></i></a></li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <!-- menu links -->
                            <ul class="menu-links">
                                <!-- active class -->
                            <li ><a href="index">Home</a></li>
                            <!--<li ><a href="about">About Us</a></li>-->
                            <li class="active"><a href="service">Services</a></li>
                            <li ><a href="portfolio">Portfolio</a></li>
                            <li ><a href="contact">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </nav>
    </header><!-- /HEADER END -->
<!--======= Breadcrumb Left With BG Image =======-->
<section class="overview-block-ptb iq-over-black-70 jarallax iq-breadcrumb3 text-left iq-font-white" style="background-image: url('images/bg/services.png'); background-position: center center; background-repeat: no-repeat; background-size: cover;">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6 col-sm-12">
<div class="iq-mb-0">
<h1 class="iq-font-white iq-tw-6">Graphic Design</h1>
</div>
</div>
<div class="col-lg-6 col-sm-12">
<nav aria-label="breadcrumb" class="text-right">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index"><i class="ion-android-home"></i> Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Graphic Design</li>
</ol>
</nav>
</div>
</div>
</div>
</section>
<!--======= Breadcrumb Left With BG Image =======-->
<!--=================================
MAIN CONTENT -->
<div class="main-content">
<!--=================================
Who we are -->

<!--=================================
Counter -->

<!--=================================
Action Box -->

        <section class="iq-action-blog pt-2  particles-bg" style="margin: 30px 0px 70px 0px;">
            <div class="container">
                <div class="row postercol">
                    <div class="col-md-6 pt-2 col-sm-6">
                        <h3 class="small-title iq-font-dark">Posters designed By Sagar Tech</h3>
                        <p style="font-weight: 600;">We are one of the <b><a href="index">best web designers in Mumbai.</a></b> We design web pages, mobile app pages, brochures, pamphlets, banners. We are also <b><a href="graphicdesign">professional logo designers</a></b> and design high quality logos for our clients. We work on the concept of client satisfaction.</p>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <section id= "sliderr">
                            <!-- Start Slider Checked -->
                            <?php
                            include("include/config.php");
                            $j = 1;
                            $sql = mysqli_query($con,"SELECT * FROM images WHERE img_act_id = '2'");
                            $rows = mysqli_fetch_all($sql, MYSQLI_ASSOC);
                            $s = sizeof($rows);
                            // print_r($rows);
                            for($i=0;$i<$s;$i++) {
                            ?>
                            <input type= "radio" name="slider" id= "slide-<?php echo $j;?>-radio" <?php echo ($i==0) ? 'checked' : "" ;?> />
                             End Slider Checked 
                            <?php
                            $j++;
                            }
                            ?>
                            <!-- Start Slides -->
                            <div class= "slides">
                                <?php 
                                foreach ($rows as $row) {
                                ?>
                                <div class= "slide">
                                  <a ><img class="img-fluid pimg" src="<?php echo $row['img_tag'];?>" alt="slide-<?php echo $j; ?>" /></a>
                                </div>
                                <?php
                                $j++;
                                }
                                ?>
                            </div>
                            <!-- End Slides -->
            
                          <!-- Start Slider Control -->
                        
                          <!-- Start Prevese Arrow -->
                          <div class="prev-arrow arrow">
                            <?php
                              for($i=0;$i<$s;$i++) {
                            ?>
                            <label for= "slide-<?php echo $j;?>-radio" id= "prev-<?php echo $j;?>-arrow">
                              <i class= "fa fa-arrow-left"></i>
                            </label>
                            <?php
                            $j++;
                            }
                            ?>
                          </div>
                          <!-- Start Prevese Arrow -->
                        
                          <!-- Start next Arrow -->
                          <div class="next-arrow arrow">
                            <?php
                              for($i=0;$i<$s;$i++) {
                            ?>
                            <label for= "slide-<?php echo $j;?>-radio" id= "next-<?php echo $j;?>-arrow">
                              <i class= "fa fa-arrow-left"></i>
                            </label>
                            <?php
                            $j++;
                            }
                            ?>
                          </div>
                          <!-- Start next Arrow -->
                          <!-- End Slider Control -->
                        </section>
                    </div>
                </div>
        <div class="row">
            <h3 class="small-title iq-font-dark">Pamplets By SagarTech!</h3>
            <br>
        </div>
        <div class="row">
           <div class="col-md-12">
                <div class="container" style="padding: 20px 0px;">
                    <section class="pamplets slider">
                        <?php
                        $sql = mysqli_query($con,"SELECT * FROM images WHERE img_act_id = '3'");
                        while($rows = mysqli_fetch_assoc($sql)) {
                        ?>
                        <div class="slide"><img src="<?php echo $rows['img_tag']; ?>" class="img-fluid simg" alt=""></div>
                        <?php
                        }
                        ?>
                    </section>
                </div>
            </div>
        </div>
            
                <div class="row">
                    <h3 class="small-title iq-font-dark">Stickers Desined By SagarTech!</h3>
                    <br>
                </div>
                <div class="row">
                   <div class="col-md-12">
                        <div class="container" style="padding: 20px 0px;">
                            <section class="sticker slider">
                                 <?php
                                    $sql = mysqli_query($con,"SELECT * FROM images WHERE img_act_id = '4'");
                                    while($rows = mysqli_fetch_assoc($sql)) {
                                ?>
                                    <div class="slide"><img src="<?php echo $rows['img_tag']; ?>" class="img-fluid simg" alt=""></div>
                                <?php
                                    }
                                ?>
                            </section>
                        </div>
                    </div>
                </div>
            <div class="row">
                <div class="col-md-12">
                <div class="container" style="padding: 20px 0px;">
                    <h3 class="iq-tw-6 small-title iq-font-dark">Logo Designed By SagarTech</h3>
                    <section class="customer-logos slider">
                                 <?php
                                    $sql = mysqli_query($con,"SELECT * FROM images WHERE img_act_id = '1'");
                                    while($rows = mysqli_fetch_assoc($sql)) {
                                ?>
                                    <div class="slide"><img src="<?php echo $rows['img_tag']; ?>" class="img-fluid simg" alt=""></div>
                                <?php
                                    }
                                ?>
                    </section>
                </div>
                </div>    
            </div>
            <!-- end of row -->
        </div>
    </section>
        

        
        
<!--=================================
Action Box -->
</div>
<!--================================
Main content -->
<!--=================================
Footer -->
<?php
include("include/faq.php");
?>
<footer class="iq-footer5 black-bg">
         <div class="footer-top">
            <div class="m-5" style="margin-top: 0 !important;">
               <div class="row overview-block-ptb4">
                  <div class="col-lg-4 col-sm-6 iq-mtb-20">
                     <div class="logo">
                        <img id="footer_logo_img" class="img-fluid rounded" src="images/sagartech.png" alt="#" style="background: white; padding: 5px;">
                        <div class="iq-font-white iq-mt-15" align="justify">Sagar Tech was founded in 2018 by young entrepreneurs with a customer & employee centric mind. Having contributed many services in the IT industry serving clients with services like web development, application development and software product development, we are capable of delivering solutions and exceeding your expectations.</div>
                     </div>
                  </div>

                  <div class="col-lg-4 col-sm-6 iq-mtb-20 location">
                     <h5 class="small-title iq-tw-6 iq-font-white iq-mb-30">Location</h5>
                     <div class="blog">
                        <i aria-hidden="true" class="ion-ios-location-outline"></i>
                        <div class="content">
                           <div class="iq-tw-6 title">Address</div>
                           Next to RBI Staff Colony, Opposite City Center Mall, Belasis Road, Mumbai Central. Mumbai - 400008.
                        </div>
                     </div>
                     <hr class="iq-mtb-20">
                     <ul class="iq-media-blog text-left">
                        <li><a href="https://twitter.com/SagarTech2" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.facebook.com/Sagar-Tech-223839251868625/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.linkedin.com/in/sagar-tech-151800177/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                        <!-- <li><a href="#"><i class="fa fa-github"></i></a></li> -->
                     </ul>
                  </div>

                  <div class="col-lg-4 col-sm-6 iq-mtb-20 location">
                     <h5 class="small-title iq-tw-6 iq-font-white iq-mb-30">Contact Us</h5>
                     <div class="blog">
                        <i aria-hidden="true" class="ion-ios-telephone-outline"></i>
                        <div class="content">
                           <div class="iq-tw-6 title">Phone</div>
                           <a href="tel:+919820133303" style="color: white;">+91 98201 33303</a><br>
                           <a href="tel:+919152220484" style="color: white;">+91 91522 20484</a>
                        </div>
                        <hr class="iq-mtb-20">
                     </div>
                     <div class="blog">
                        <i aria-hidden="true" class="ion-ios-email-outline"></i>
                        <div class="content">
                           <div class="iq-tw-6 title">Mail</div>
                           <div class="iq-mb-0">24 X 7 online support<br><a href="mailto:info@sagartech.co.in"  style="color: white;">info@sagartech.co.in</a></div>
                        </div>
                     </div>
                    </div>

                  <!-- <div class="col-lg-4 col-sm-6 iq-mtb-20 iq-newsletter">
                     <h5 class="small-title iq-tw-6 iq-font-white iq-mb-30">Send Query</h5>
                     <p class="iq-font-white"></p>
                     <form class="newsletter-form">
                        <div class="input-group">
                           <input type="email" class="form-control placeholder" placeholder="Enter your Email">
                           <a class="button" href="#" role="button">Send</a>
                        </div>
                     </form>
                     
                  </div> -->
               </div>
            </div>
         </div>
         <div class="footer-bottom iq-ptb-20 dark-bg">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12 text-center">
                     <div class="iq-copyright iq-mt-10 iq-font-white">
                        Copyright 
                        <span id="copyright">
                           <script data-cfasync="false" src="../../../ email-decode.min.js"></script><script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script>
                        </span>
                        <a class="iq-font-red" href="index.php">Sagar Tech</a> All Rights Reserved 
                     </div>
                  </div>
               </div>
            </div>
         </div>
</footer><!--=================================
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
    <script src="js/noclick.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
    $(document).ready(function() {
        var pos = 0;
//number of slides
var totalSlides = $('#sslider-wrap ul li').length;
//get the slide width
var sliderWidth = $('#sslider-wrap').width();
	
	/*****************
	 BUILD THE SLIDER
	*****************/
	//set width to be 'x' times the number of slides
	$('#sslider-wrap ul#slider').width(sliderWidth*totalSlides);
	
    //next slide 	
	$('#next').click(function(){
		slideRight();
	});
	
	//previous slide
	$('#previous').click(function(){
		slideLeft();
	});
	
	
	
	/*************************
	 //*> OPTIONAL SETTINGS
	************************/
	//automatic slider
	var autoSlider = setInterval(slideRight, 3000);
	
	//for each slide 
	$.each($('#sslider-wrap ul li'), function() { 
	   //set its color
	   var c = $(this).attr("data-color");
	   $(this).css("background",c);
	   
	   //create a pagination
	   var li = document.createElement('li');
	   $('#ppagination-wrap ul').append(li);	   
	});
	
	//counter
	countSlides();
	
	//pagination
	pagination();
	
	//hide/show controls/btns when hover
	//pause automatic slide when hover
	$('#sslider-wrap').hover(
	  function(){ $(this).addClass('active'); clearInterval(autoSlider); }, 
	  function(){ $(this).removeClass('active'); autoSlider = setInterval(slideRight, 3000); }
	);
	
	


	


/***********
 SLIDE LEFT
************/
function slideLeft(){
	pos--;
	if(pos==-1){ pos = totalSlides-1; }
	$('#sslider-wrap ul#slider').css('left', -(sliderWidth*pos)); 	
	
	//*> optional
	countSlides();
	pagination();
}


/************
 SLIDE RIGHT
*************/
function slideRight(){
	pos++;
	if(pos==totalSlides){ pos = 0; }
	$('#sslider-wrap ul#slider').css('left', -(sliderWidth*pos)); 
	
	//*> optional 
	countSlides();
	pagination();
}



	
/************************
 //*> OPTIONAL SETTINGS
************************/
function countSlides(){
	$('#counter').html(pos+1 + ' / ' + totalSlides);
}

function pagination(){
	$('#ppagination-wrap ul li').removeClass('active');
	$('#ppagination-wrap ul li:eq('+pos+')').addClass('active');
}
    
$('.sticker').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 1
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 1
            }
        }]
    });
    
$('.pamplets').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 1
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 1
            }
        }]
    });
    
$('.customer-logos').slick({
        slidesToShow: 6,
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
        $('.form_sent').submit(function(e) {
            e.preventDefault();
            var num = $('#ph_no').val();
            var text = $('#msg_1').val();
            console.log(num+" "+text);

        $.ajax({
            url:"include/send_sms.php",
            method: "GET",
            data: {
              number : num,
              text: text
            },
            success:function(data){
              console.log(data);
            }
          })
// fetch('http://bulk.sagartech.co.in/http-tokenkeyapi.php?authentic-key=383062756c6b73616761723334371578141741&senderid=SGRTCH&route=2&number=7021251630&message=hello',{ mode: 'no-cors' })
//   .then(
//     function(response) {
//       if (response.status !== 200) {
//         console.log('Looks like there was a problem. Status Code: ' +
//           response.status);
//         return;
//       }

//       // Examine the text in the response
//       response.json().then(function(data) {
//         console.log(data);
//       });
//     }
//   )
//   .catch(function(err) {
//     console.log('Fetch Error :-S', err);
//   });
     
            })
    })
</script>
    
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+919820133303", // WhatsApp number
            call_to_action: "Message us", // Call to action
            position: "left", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /WhatsHelp.io widget -->   
</body>

<!-- Mirrored from iqonicthemes.com/themes/qwilo/qwilo/about-us-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Oct 2019 14:24:12 GMT -->
</html>