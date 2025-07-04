<!DOCTYPE html>
<html lang="en">

<head>
    <title>No. 1 Static Website Developer & Designing Company In Mumbai</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="Best static website development and design company in Mumbai creates pages in real time,adapting to static features like screen size and device.">
    <meta name="keywords" content="Static Website">
    <meta property="og:type" content="website">
    <meta property="og:title" content="No. 1 Static Website Developer & Designing Company In Mumbai">
    <meta property="og:url" content="https://sagartech.co.in/newStaticPage">
    <meta property="og:image" content="https://sagartech.co.in/images/OG-Images/static.png">
    <meta property="og:description"
        content="Best static website development and design company in Mumbai creates pages in real time,adapting to static features like screen size and device.">
    <!-- Favicon -->
    <link rel="canonical" href="https://sagartech.co.in/newStaticPage" />
    <link rel="shortcut icon" href="images/logoonly.jpg" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&display=swap" rel="stylesheet" />

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />

    <!-- AOS JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <!-- GSAP + ScrollTrigger + SplitType -->
    <script src="https://unpkg.com/gsap@3/dist/gsap.min.js"></script>
    <script src="https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js"></script>
    <script src="https://unpkg.com/split-type"></script>

    <!-- Google tag manager -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-156939866-1"></script>
    <!-- <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="css/custom.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/web-dev.css" ype="text/css">
    <link href="css/newcssresponsive.css" rel="stylesheet" type="text/css" /> -->

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
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: "Bricolage Grotesque", sans-serif !important;
    }

    .darkBody {
        background-color: #fff;
    }
</style>

<body>
    <?php
    $page = 'services';
    include("include/newHeader.php"); ?>
    <?php include("include/new-services/new-static-page/staticLandingSection.php") ?>
    <?php include("include/new-services/new-static-page/staticGsapVideoSection.php") ?>
</body>

<script>
    AOS.init({
        once: true, // animations happen only once
        duration: 800, // animation duration in ms
        easing: 'ease-in-out', // optional
    });
</script>

</html>