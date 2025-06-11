<?php include "include/config.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Development and Digital Marketing Agency in Mumbai - Sagar Tech</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="css/newHome.css">
    <link rel="stylesheet" href="css/newHomeResponsive.css">
</head>
<style>

</style>

<body>
    <?php $page = 'home';
    include("include/newHeader.php"); ?>

    <div class="newHome_main">
        <!-- HERO -->
        <div class="newHome_hero">
            <div class="newHome_satisfiedclient">
                <div class="avatar">
                    <img src="./icons/avatar/1.webp" alt="">
                </div>
                <div class="avatar">
                    <img src="./icons/avatar/2.webp" alt="">
                </div>
                <div class="avatar">
                    <img src="./icons/avatar/3.webp" alt="">
                </div>
                <span class="newHome_text">
                    10k+ Satisfied Clients
                </span>
            </div>
            <h1>
                Your <span class="newHome_highlight">Trusted</span> Web Development & Digital Marketing Agency
            </h1>
            <p>
                We offer effective design, innovative web development, Mobile App Development, and ROI-focused marketing to help your brand reach its full potential.
            </p>
            <div class="newHero_buttondiv">
                <button class="button1">Get started</button>
                <button class="button2">
                    Book a meeting
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-move-right-icon lucide-move-right">
                        <path d="M18 8L22 12L18 16" />
                        <path d="M2 12H22" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="newHome_heroImagediv">
            <img src="./icons/avatar/neww.webp" alt="">
        </div>
        <!-- HERO -->
        <!-- STATISTICS -->
        <div class="newHome_statistics">
            <div>
                <span class="newHome_number">5.0</span>
                <p class="newHome_title">Google Reviews</p>
                <p class="newHome_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe voluptatibus.</p>
            </div>
            <div>
                <span class="newHome_number">450+</span>
                <p class="newHome_title">Satisfied Clients</p>
                <p class="newHome_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe voluptatibus.</p>
            </div>
            <div>
                <span class="newHome_number">1200+</span>
                <p class="newHome_title">Completed Projects</p>
                <p class="newHome_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe voluptatibus.</p>
            </div>
        </div>
        <!-- STATISTICS -->
    </div>

    <?php include("include/footer.php"); ?>
</body>

</html>