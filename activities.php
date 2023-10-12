<?php
$page = "service"
?>
<!doctype html>
<html lang="en">
    
<!-- Mirrored from iqonicthemes.com/themes/qwilo/qwilo/about-us-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Oct 2019 14:24:12 GMT -->
<head>
        <title>Activities - Sagar Tech</title>
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
        <link rel="stylesheet" href="css/activities.css" type="text/css" />
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
        <?php
        include("include/header2.php");
        include("include/config.php");
        ?>
        <!-- /HEADER END -->
<!--======= Breadcrumb Left With BG Image =======-->
<section class="overview-block-ptb iq-over-black-70 jarallax iq-breadcrumb3 text-left iq-font-white" style="background-image: url('images/bg/services.png'); background-position: center center; background-repeat: no-repeat; background-size: cover;">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6 col-sm-12">
<div class="iq-mb-0">
<h1 class="iq-font-white iq-tw-6">Activities</h1>
</div>
</div>
<div class="col-lg-6 col-sm-12">
<nav aria-label="breadcrumb" class="text-right">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index"><i class="ion-android-home"></i> Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Activities</li>
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
                        <h3 class="small-title iq-font-dark">Achievements By SagarTech!</h3>
                        <p style="font-weight: 600;"><a href="https://sagartech.co.in/index">SagarTech</a> has always in front row when it comes to delivery the best results and being so professional and advanced in this field of Information Technology we have recieved so many chievements which we would like to share with you.</p>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <section class="items">
                        <div class="carouselOfImages">
                            <?php
                            $sql = mysqli_query($con,"SELECT * FROM images WHERE img_act_id = '5'");
                            while($rows = mysqli_fetch_assoc($sql)) {
                            ?>
                          <div class="carouselImage"  style="background-size:cover;">
                            <img data-tab="bright" class="img-fluid" src="<?php echo $rows['img_tag'];?>"/>
                          </div>
                          <?php
                            }
                          ?>
                        </div>
                        </section>
                        <div id="dark"></div>
                    </div>
                </div>
                <div class="row postercol pt-5">
                    <div class="col-md-6 pt-2 pb-5 col-sm-6">
                        <section class="items">
                        <div class="carouselOfIntern">
                            <?php
                            $sql = mysqli_query($con,"SELECT * FROM images WHERE img_act_id = '6'");
                            $i = 1;
                            while($rows = mysqli_fetch_assoc($sql)) {
                            ?>
                          <div class="carouselImage" style="background-size:cover;">
                            <a href="#img<?php echo $i; ?>"><img data-tab="slide<?php echo $i; ?>" class="img-fluid" src="<?php echo $rows['img_tag'];?>"/></a>
                          </div>
                          <?php
                            $i++;
                            }
                          ?>
                        </div>
                        </section>
                        <div id="dark"></div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <h3 class="small-title iq-font-dark">Internship opportunities by SagarTech!</h3>
                        <p style="font-weight: 600;">As <a href="https://sagartech.co.in/index">SagarTech</a> is growing in the field of Information and Technology we also want other to grow aswell for that we have created a base for new commers to join us and learn the best tactiks for industrial survival.</p>
                    </div>
                    <?php
                        $sql = mysqli_query($con,"SELECT * FROM images WHERE img_act_id = '6'");
                        $i = 1;
                        while($rows = mysqli_fetch_assoc($sql)) {
                    ?>
                    <a href="#_" class="lightbox" id="img<?php echo $i; ?>">
                      <img src="<?php echo $rows['img_tag']; ?>">
                    </a>
                    <?php
                        $i++;
                        }
                    ?>
                </div>
        <div class="row">
            <div class="col-md-12 heading">                
                    <div class="carousel-controls pull-right">                    
                        <a class="left fa fa-chevron-left btn btn-danger btn-sm" role="button" href="#myCarousel" data-slide="prev">
                            <span class="" aria-hidden="true"></span>
                           <span class="sr-only">Previous</span>
                        </a>
                        <a class="right fa fa-chevron-right btn btn-danger btn-sm" role="button" href="#myCarousel" data-slide="next">
                            <span class="" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <h3 class="margin-top-none iq-tw-6 small-title iq-font-dark">Activities</h3>
                </div>
            
            <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="4000">
            <div class="carousel-inner row w-100 mx-auto">
            <?php
                
                $get = mysqli_query($con,"SELECT * FROM activity");
                $i = 1;
                while($res_get = mysqli_fetch_assoc($get)) {
                    $id = $res_get['act_id'];
                    $get_img = mysqli_query($con,"SELECT * FROM images WHERE img_act_id = '$id' ORDER BY img_id ASC");
                    $res_img = mysqli_fetch_assoc($get_img);
            ?>
            
            <div class="carousel-item col-md-4 <?php echo ($i==1? 'active' : '');?>">
            <div class="card">
              <a href="event-detail?<?php echo $id;?>"><img class="card-img-top img-fluid" src="backoffice/<?php echo $res_img['img_tag'];?>" alt="Card image cap"></a>
              
              <div class="card-body">
                <div class="date">
                  <p><?php echo $res_get['act_date']; ?></p>
              </div>
                <a href="event-detail?<?php echo $id;?>"><h4 class="card-title"><?php echo $res_get['act_name']; ?></h4></a>
                <a href="event-detail?<?php echo $id;?>">More Details</a>
              </div>
            </div>
            </div>
            <?php
            $i++;
                }
            ?>
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
include("include/footer.php");
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
    <!-- WhatsHelp.io widget -->
    <script src="js/noclick.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script>
    $(document).ready(function() {
        $(function () {
    "use strict";
    
    $(".popup img").click(function () {
        var $src = $(this).attr("src");
        $(".show").fadeIn();
        $(".img-show img").attr("src", $src);
    });
    
    $("span, .overlay").click(function () {
        $(".show").fadeOut();
    });
    
});
        var $imagesCarousel = $('.carouselOfImages').flickity({
  contain: true,
  autoPlay: true,
  wrapAround: true,
  friction: 0.3
});
function resizeCells() {
  var flkty = $imagesCarousel.data('flickity');
  var $current = flkty.selectedIndex
  var $length = flkty.cells.length
  if ($length <='2') {
    $imagesCarousel.flickity('destroy');
  }
  $('.carouselOfImages .carouselImage').removeClass("nextToSelected");
  $('.carouselOfImages .carouselImage').eq($current-1).addClass("nextToSelected");
  if ($current+1 == $length) {
    var $endCell = "0"
  } else {
    var $endCell = $current+1
  }
   $('.carouselOfImages .carouselImage').eq($endCell).addClass("nextToSelected");
  };
resizeCells();

$imagesCarousel.on('scroll.flickity', function() {
    resizeCells();
  });
  
$(".carouselImage img").click(function() { 
  var $this = $(this);
  var imageID = $this.attr('data-tab');
  var imageSrc = $this.attr('src');
  
  $('.' + imageID).removeClass('hide');
  $('.' + imageID + ' .product-detail-image img').attr('src', imageSrc);
});

$('.product-detail-close,.product-detail').on('click', function() {
  $('.product-detail').addClass('hide');
});

  $('.modal-video').on('hidden.bs.modal', function (e) {
    $('.modal-video iframe').attr('src', $('.modal-video iframe').attr('src'));
  });

autoPlayYouTubeModal();

  function autoPlayYouTubeModal() {
      var trigger = $("body").find('[data-the-video]');
      trigger.click(function () {
          var theModal = $(this).data("target"),
              videoSRC = $(this).attr("data-the-video"),
              videoSRCauto = videoSRC + "&autoplay=1";
          $(theModal + ' iframe').attr('src', videoSRCauto);
          $(theModal + ' button.close').click(function () {
              $(theModal + ' iframe').attr('src', videoSRC);
          });
          $('.modal-video').click(function () {
              $(theModal + ' iframe').attr('src', videoSRC);
          });
      });
  }

$(window).on('load resize', function(){
  var $window = $(window);
  $('.modal-fill-vert .modal-body > *').height(function(){
      return $window.height()-60;
    });
  }); 
  var $imagesCarousel = $('.carouselOfIntern').flickity({
  contain: true,
  autoPlay: true,
  wrapAround: true,
  friction: 0.3
});
function resizeCells() {
  var flkty = $imagesCarousel.data('flickity');
  var $current = flkty.selectedIndex
  var $length = flkty.cells.length
  if ($length <='1') {
    $imagesCarousel.flickity('destroy');
  }
  $('.carouselOfIntern .carouselImage').removeClass("nextToSelected");
  $('.carouselOfIntern .carouselImage').eq($current-1).addClass("nextToSelected");
  if ($current+1 == $length) {
    var $endCell = "0"
  } else {
    var $endCell = $current+1
  }
   $('.carouselOfIntern .carouselImage').eq($endCell).addClass("nextToSelected");
  };
resizeCells();

$imagesCarousel.on('scroll.flickity', function() {
    resizeCells();
  });

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