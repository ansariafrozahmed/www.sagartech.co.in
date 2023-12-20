<?php
?>
<!doctype html>
<html lang="en">

<head>
  <title>Blog - Sagar Tech</title>
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
  <link rel="stylesheet" href="css/index.css" type="text/css">

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-156939866-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-156939866-1');
  </script>
</head>
<style type="text/css">
  #posts {
    max-width: 1140px;
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
    margin: 0 auto;
    display: table;
  }

  .post__card {
    padding-left: 0.5rem;
    padding-right: 0.5rem;
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    max-width: 100%;
    float: left;
  }

  .post__card_- {
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1),
      0 10px 10px -5px rgba(0, 0, 0, 0.04);
    overflow: hidden;
    border-radius: 0.5rem;
    background-color: #fff;
  }

  .post__card__image {
    height: 18rem;
    width: 100%;
    background-size: cover;
    background-position: bottom;
  }

  .post__card_meta {
    padding: 1.25rem;
  }

  .post__card_title {
    font-size: 1rem;
    font-weight: 700;
    margin: 0;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
      "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji",
      "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    color: #444;
  }

  .post__card_alttitle {
    color: #4a5568;
    margin: 0;
    line-height: 1.5;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
      "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji",
      "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    font-size: 1.125rem;
  }

  #sidebar .list-group-item {
    border-radius: 0;
    /*background-color: #333;*/
    /*color: #ccc;*/
    border-left: 0;
    border-right: 0;
    /*border-color: #2c2c2c;*/
    white-space: nowrap;
  }

  /* highlight active menu */
  #sidebar .list-group-item:not(.collapsed) {
    /*background-color: #222;*/
  }

  /* closed state */
  #sidebar .list-group .list-group-item[aria-expanded="false"]::after {
    content: " \f0d7";
    font-family: FontAwesome;
    display: inline;
    text-align: right;
    padding-left: 5px;
  }

  /* open state */
  #sidebar .list-group .list-group-item[aria-expanded="true"] {
    /*background-color: #222;*/
  }

  #sidebar .list-group .list-group-item[aria-expanded="true"]::after {
    content: " \f0da";
    font-family: FontAwesome;
    display: inline;
    text-align: right;
    padding-left: 5px;
  }

  /* level 1*/
  #sidebar .list-group .collapse .list-group-item {
    padding-left: 20px;
  }

  /* level 2*/
  #sidebar .list-group .collapse>.collapse .list-group-item {
    padding-left: 30px;
  }

  /* level 3*/
  #sidebar .list-group .collapse>.collapse>.collapse .list-group-item {
    padding-left: 40px;
  }

  @media (max-width:48em) {

    /* overlay sub levels on small screens */
    #sidebar .list-group .collapse.in,
    #sidebar .list-group .collapsing {
      position: absolute;
      z-index: 1;
      width: 190px;
    }

    #sidebar .list-group>.list-group-item {
      text-align: center;
      padding: .75rem .5rem;
    }

    /* hide caret icons of top level when collapsed */
    #sidebar .list-group>.list-group-item[aria-expanded="true"]::after,
    #sidebar .list-group>.list-group-item[aria-expanded="false"]::after {
      display: none;
    }
  }

  /* change transition animation to width when entire sidebar is toggled */
  #sidebar.collapse {
    -webkit-transition-timing-function: ease;
    -o-transition-timing-function: ease;
    transition-timing-function: ease;
    -webkit-transition-duration: .2s;
    -o-transition-duration: .2s;
    transition-duration: .2s;
  }

  #sidebar.collapsing {
    opacity: 0.8;
    width: 0;
    -webkit-transition-timing-function: ease-in;
    -o-transition-timing-function: ease-in;
    transition-timing-function: ease-in;
    -webkit-transition-property: width;
    -o-transition-property: width;
    transition-property: width;

  }

  .conteudo {
    width: 600px;
    margin: 25px auto;
    padding: 25px;
    background: #fff;
    border: 1px solid #dedede;
    -webkit-box-shadow: 1px 1px 1px 0px rgba(204, 204, 204, 0.35);
    -moz-box-shadow: 1px 1px 1px 0px rgba(204, 204, 204, 0.35);
    box-shadow: 1px 1px 1px 0px rgba(204, 204, 204, 0.35);
  }

  .conteudo img {
    margin: 0 0 25px -25px;
    max-width: 650px;
    min-width: 599px;
  }

  .conteudo h1 {
    margin: 0 0 15px;
    padding: 0;
    font-family: Georgia;
    font-weight: normal;
    color: #666;
  }

  .conteudo p:last-child {
    margin: 0;
  }

  .conteudo .continue-lendo {
    color: #000;
    font-weight: 700;
    text-decoration: none;
    transition: all 0.5s ease;
  }

  .conteudo .continue-lendo:hover {
    margin-left: 10px;
  }

  .post-info {
    float: right;
    margin: -10px 0 15px;
    font-size: 12px;
    text-transform: uppercase;
  }

  .blog {
    float: left;
  }


  p {
    text-align: justify;
  }

  body {
    -youbkit-touch-callout: none;
    /* iOS Safari */
    -youbkit-user-select: none;
    /* Chrome 6.0+, Safari 3.1+, Edge & Opera 15+ */
    -moz-user-select: none;
    /* Firefox */
    -ms-user-select: none;
    /* IE 10+ and Edge */
    user-select: none;
    /* Non-prefixed version, 
                  currently supported by Chrome and Opera */
  }

  @media screen and (max-width: 960px) {
    .blog {
      width: 90%;
    }

    .conteudo {
      float: inherit;
      width: 101%;
      padding: 5%;
      margin: 0 auto 25px;
      background: #fff;
      border: 1px solid #dedede;
    }

    .conteudo img {
      margin: 0 0 25px -5%;
      max-width: 110%;
      min-width: 110%;
    }

    .conteudo .continue-lendo:hover {
      margin-left: 0;
    }


  }

  @media screen and (max-width: 460px) {

    .post-info {
      display: none;
    }

    .conteudo {
      margin: 25px auto;
    }

    .conteudo img {
      margin: -5% 0 25px -5%;
    }


  }

  .width-100 {
    width: 100%;
    height: 100%;
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

  a.morelink {
    text-decoration: none;
    outline: none;
  }

  .morecontent span {
    display: none;
  }

  .comment {
    margin: 10px;
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
    -webkit-box-shadow: 0px 10px 11px -1px rgba(0, 0, 0, 0.75);
    -moz-box-shadow: 0px 10px 11px -1px rgba(0, 0, 0, 0.75);
    box-shadow: 0px 10px 11px -1px rgba(0, 0, 0, 0.75);
    transform: translateY(-10px);
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
  $page = "service";
  include("include/trialh.php");
  ?>

  <!--======= Breadcrumb Left With BG Image =======-->
  <section class="overview-block-ptb iq-over-black-70 jarallax iq-breadcrumb3 text-left iq-font-white"
    style="background-image: url('images/bg/blog_bg.png'); background-position: center center; background-repeat: no-repeat; background-size: cover;">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-sm-12">
          <div class="iq-mb-0">
            <h2 class="iq-font-white iq-tw-6">Blog</h2>
          </div>
        </div>
        <div class="col-lg-6 col-sm-12">
          <nav aria-label="breadcrumb" class="text-right">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index"><i class="ion-android-home"></i> Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Blog</li>
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


    <section class="iq-action-blog pt-2  particles-bg" style="margin: 30px 0px 70px 0px;">
      <div class="container" style="max-width: 100% !important;">
        <div class="row">

          <!--<div class="col-md-4 pt-5 wow slideInRight" data-wow-duration="1.0s">-->
          <!--    <div class="card pt-3">-->
          <!--        <div class="card-header">-->
          <!--        Featured-->
          <!--        </div>-->
          <!--        <div class="card-body">-->
          <!--            <h5 class="card-title">Special title treatment</h5>-->
          <!--            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>-->
          <!--            <a href="#" class="btn btn-primary">Go somewhere</a>-->
          <!--        </div>-->
          <!--    </div>-->
          <!--<div class="conteudo">-->
          <!--    <ul>-->
          <!--        <li>Category 1</li>-->
          <!--        <li>Category 2</li>-->
          <!--        <li>Category 3</li>-->

          <!--    </ul>-->
          <!--</div>-->
          <!--</div>-->
          <div class="col-md-3  col-md-push-7  order-md-12 pt-5 wow slideInRight" data-wow-duration="1.0s">

            <div class="list-group" style="padding-bottom:15px;">

              <div class="card bg-white border-0 ">
                <div class="card-header " style="font-weight:block;">
                  RECENT BLOG
                </div>
                <div class="card-body">

                  <a id="shmenulinks" class="nav-link" style="border-radius: 0.25rem; cursor: pointer; width: 100%;"
                    data-toggle="collapse" aria-expanded="true" aria-controls="menulinks" data-target="#menulinks"><i
                      class="fa fa-bars" aria-hidden="true"></i></a>

                  <div id="menulinks" class="nav nav-pills collapse">

                    <div id="sidebar">
                      <div class="list-group panel">
                        <a href="#posts" class="list-group-item recents">LATEST POSTS</a>
                        <?php
                        include("include/config.php");
                        $arr = array();
                        $sql = mysqli_query($con, "SELECT YEAR(post_date) AS YEAR, COUNT(*) AS TOTAL FROM posts GROUP BY YEAR ORDER BY post_id DESC");
                        while ($drows = mysqli_fetch_assoc($sql)) {
                          //  print_r($drows);
                          ?>

                          <a href="#<?php echo $drows['YEAR']; ?>" id="yrClk" class="list-group-item yrClk"
                            data-toggle="collapse" aria-expanded="false">
                            <?php echo $drows['YEAR'] . ' (' . $drows['TOTAL'] . ')'; ?>
                          </a>
                          <div class="collapse" id="<?php echo $drows['YEAR']; ?>"></div>
                          <?php
                        }
                        //  print_r($arr);
                        ?>

                      </div>
                    </div>
                    <!--<a style="width: 100%;" id="allShow"  class="nav-link categ active"><i class="fa " aria-hidden="true"></i>All<span class="float-right"></span></a>-->
                    <?php
                    // $sql = mysqli_query($con,"SELECT * FROM category");
                    // while($rows = mysqli_fetch_assoc($sql)) {
                    //     $id = $rows['cat_id'];
                    //     $stmt = mysqli_query($con,"SELECT COUNT(*) as total FROM theme WHERE thm_cat_id = '$id'");
                    //     $row = mysqli_fetch_assoc($stmt);
                    //     $count = $row['total'];
                    
                    ?>

                    <?php
                    // }
                    ?>
                  </div>

                </div>

              </div>

            </div>
          </div>
          <!--<div class="col-md-1 order-md-2" data-wow-duration="1.0s"></div>-->
          <div class="col-md-9  col-md-pull-4 order-md-1 pt-5 wow slideInLeft posts" data-wow-duration="1.0s">
            <div id="posts">
              <div class="row">
                <?php

                $sql = mysqli_query($con, "SELECT * FROM posts");
                while ($rows = mysqli_fetch_assoc($sql)) {
                  ?>

                  <div class="col-md-6">
                    <div class="post__card ">
                      <a class="postId" id="<?php echo $rows['post_id']; ?>" href="#<?php echo $rows['post_id']; ?>">
                        <div class="post__card_- feature">
                          <div class="post__card__image"
                            style="background-image: url(images/blog/<?php echo $rows['post_img']; ?>)">
                          </div>
                          <div>
                            <div class="post__card_meta">
                              <p class="post__card_title">
                                <?php echo $rows['post_name']; ?>
                              </p>
                              <p class="post__card_alttitle comment more">
                                <?php echo $rows['post_desc']; ?>
                              </p>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                    <!--<div class="conteudo">-->
                    <!--<div class="post-info">-->
                    <!--  Posted on -->
                    <?php
                    //   $ps_date = $rows['post_date'];
                    //   $dt = new DateTime($ps_date);
                    //   echo $dt->format('d-m-Y');
                    ?>
                    <!--</div>-->
                    <!--<h1> <?php //echo $rows['post_name'];
                      ?> </h1>-->
                    <!--<hr>-->
                    <!--<img src="images/blog/<?php //echo $rows['post_img'];
                      ?>" class="img-fluid width-100">-->
                    <!--<p class="comment more">-->
                    <?php //echo $rows['post_content'];
                      ?>
                    <!--</p>-->
                    <!--</div>-->
                  </div>
                  <?php
                }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--=================================
Action Box -->
  </div>
  <!--================================
Main content -->
  <!--=================================
Footer -->
  <footer class="iq-footer5 black-bg">
    <div class="footer-top">
      <div class="m-5" style="margin-top: 0 !important;">
        <div class="row overview-block-ptb4">
          <div class="col-lg-4 col-sm-6 iq-mtb-20">
            <div class="logo">
              <img id="footer_logo_img" class="img-fluid rounded" src="images/sagartech.png" alt="#"
                style="background: white; padding: 5px;">
              <div class="iq-font-white iq-mt-15" align="justify">Sagar Tech was founded in 2018 by young entrepreneurs
                with a customer & employee centric mind. Having contributed many services in the IT industry serving
                clients with services like web development, application development and software product development, we
                are capable of delivering solutions and exceeding your expectations.</div>
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
              <li><a href="https://www.facebook.com/Sagar-Tech-223839251868625/" target="_blank"><i
                    class="fa fa-facebook"></i></a></li>
              <li><a href="https://www.linkedin.com/in/sagar-tech-151800177/" target="_blank"><i
                    class="fa fa-linkedin"></i></a></li>
              <!-- <li><a href="#"><i class="fa fa-github"></i></a></li> -->
            </ul>
          </div>

          <div class="col-lg-2 col-sm-6 iq-mtb-20 location">
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
                <div class="iq-mb-0">24 X 7 online support<br><a href="mailto:info@sagartech.co.in"
                    style="color: white;">info@sagartech.co.in</a></div>
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
                <script data-cfasync="false"
                  src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                <script>
                  document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                </script>
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

  <script src="/node_modules/readmore-js/readmore.min.js"></script>
  <script>
    $(document).ready(function () {
      var showChar = 100;
      var ellipsestext = "...";
      var moretext = "more";
      var lesstext = "less";
      $('.more').each(function () {
        var content = $(this).html();

        if (content.length > showChar) {

          var c = content.substr(0, showChar);
          var h = content.substr(showChar - 1, content.length - showChar);

          var html = c + '<span class="moreellipses">' + ellipsestext + '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';

          $(this).html(html);
        }

      });

      $(".morelink").click(function () {
        if ($(this).hasClass("less")) {
          $(this).removeClass("less");
          $(this).html(moretext);
        } else {
          $(this).addClass("less");
          $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
      });

      // 	recent posts jquery

      $(".recents").click(function () {

        $('.posts').html('');

        $.ajax({
          url: 'include/get_data.php',
          method: 'POST',
          data: {
            all: 'all'
          },
          success: function (data) {
            console.log(data);
            $('.posts').html(data);
          }
        })

      })
      $(".yrClk").on('click', function () {
        var x = $(this).attr('href');
        // console.log(x);
        if ($(x).is(':empty')) {
          $.ajax({
            url: 'include/get_data.php',
            method: 'POST',
            data: {
              year: x
            },
            success: function (data) {
              // console.log(data);
              $(x).html(data);
              $(".mnthClk").on('click', function () {
                //console.log('working');
                var y = $(this).attr('href');
                var m = y.replace(/^#+/i, '');
                var val = m.split('-');
                // console.log(x+m+val)
                if ($(y).is(':empty')) {
                  $.ajax({
                    url: 'include/get_data.php',
                    method: 'POST',
                    data: {
                      month: val[0],
                      yaer: val[1]
                    },
                    success: function (data) {
                      // console.log(data);
                      $(y).html(data);

                      var showTitle = 30;
                      var ellipsestext = "...";
                      $('.pstClk').each(function () {
                        var content = $(this).html();

                        if (content.length > showTitle) {

                          var c = content.substr(0, showTitle);
                          var h = content.substr(showTitle - 1, content.length - showTitle);

                          var html = c + '<span class="moreellipses">' + ellipsestext + '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink"></a></span>';

                          $(this).html(html);

                        }

                      });
                      $('.pstClk').click(function () {

                        var xid = $(this).attr('href');
                        var id = xid.replace(/^#+/i, '');
                        //console.log(id);
                        $.ajax({
                          url: 'include/get_data.php',
                          method: 'POST',
                          data: {
                            title_id: id
                          },
                          success: function (data) {

                            $('.posts').html(data);
                            var showChar = 100;
                            var ellipsestext = "...";
                            var moretext = "more";
                            var lesstext = "less";
                            $('.more').each(function () {
                              var content = $(this).html();

                              if (content.length > showChar) {

                                var c = content.substr(0, showChar);
                                var h = content.substr(showChar - 1, content.length - showChar);

                                var html = c + '<span class="moreellipses">' + ellipsestext + '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';

                                $(this).html(html);
                              }

                            });

                            $(".morelink").click(function () {
                              if ($(this).hasClass("less")) {
                                $(this).removeClass("less");
                                $(this).html(moretext);
                              } else {
                                $(this).addClass("less");
                                $(this).html(lesstext);
                              }
                              $(this).parent().prev().toggle();
                              $(this).prev().toggle();
                              return false;
                            });
                          }
                        })
                      })
                    }
                  })
                }
              });
            }
          })
        }
      });

      //article redirect 

      $('.postId').click(function () {

        var h = $(this).prop('id');
        // console.log(h);
        var url = 'https://sagartech.co.in/article';
        var form = $('<form action="' + url + '" method="post">' +
          '<input type="text" name="api_url" value="' + h + '" />' +
          '</form>');
        $('body').append(form);
        form.submit();
      })

      $('.form_sent').submit(function (e) {
        e.preventDefault();
        var num = $('#ph_no').val();
        var text = $('#msg_1').val();
        console.log(num + " " + text);

        $.ajax({
          url: "include/send_sms.php",
          method: "GET",
          data: {
            number: num,
            text: text
          },
          success: function (data) {
            if (data.includes('workingmsg-id')) {
              $('#largeModal').modal('hide')
              setTimeout(
                $('.bd-example-modal-sm').modal('show'), 3000);
            }
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
</body>

<!-- Mirrored from iqonicthemes.com/themes/qwilo/qwilo/about-us-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Oct 2019 14:24:12 GMT -->

</html>