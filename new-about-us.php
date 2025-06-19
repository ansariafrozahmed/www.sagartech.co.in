<?php include "include/config.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
    <link href="https://fonts.googleapis.com/css2?family=Alef:wght@400;700&family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Outfit:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <meta name="description" content="Sagar Tech Technical Solutions is a trusted provider of mobile app development services, specializing in delivering high-quality, user-centric solutions for iOS and Android platforms to enhance business performance and digital engagement.">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="keywords" content="Mobile app development, iOS app development, Android app development, custom software solutions, app development company, digital transformation, mobile solutions, business apps, technology solutions, Sagar Tech Technical Solutions.">
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/logoonly.jpg" />
    <link rel="canonical" href="https://sagartech.co.in/about">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="About - Sagar Tech Technical Solutions">
    <meta property="og:description"
        content="Sagar Tech Technical Solutions is a trusted provider of mobile app development services, specializing in delivering high-quality, user-centric solutions for iOS and Android platforms to enhance business performance and digital engagement.">
    <meta property="og:url" content="https://sagartech.co.in/about">
    <meta property="og:site_name" content="Sagar Tech - Technical Solution">
    <meta property="og:image" content="https://sagartech.co.in/images/sagartech1.webp">

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-156939866-1"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-156939866-1">
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-156939866-1');
    </script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    backgroundImage: {
                        'custom-pink-gradient': 'linear-gradient(163deg, rgba(250,246,243,1) 14%, rgba(246,213,229,1) 37%, rgba(253,43,33,1) 99%)',
                    },
                },
            },
            plugins: [
                require('@tailwindcss/line-clamp')
            ]
        }
    </script>
    <title>About Us</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&display=swap"
        rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
</head>

<style>
    body {
        font-family: "Quicksand", sans-serif;
    }

    .heading-all {
        font-family: "Bricolage Grotesque", sans-serif;
    }

    .content-all {}

    .slider {
        animation: slide 40s linear infinite;
    }

    .slider:hover {
        animation-play-state: paused;
    }

    @keyframes slide {
        0% {
            transform: translateX(0%);
        }

        100% {
            transform: translateX(-50%);
        }
    }
</style>

<body>

    <?php
    $page = 'about';
    include("include/newHeader.php");
    ?>
    <div class="">
        <?php include("include/newAboutpage/banner.php") ?>
        <?php include("include/newAboutpage/ceoDesktop.php") ?>
        <?php include("include/newAboutpage/workspace.php") ?>
        <?php include("include/newAboutpage/statistics.php") ?>


        <div class="md:!px-20 md:py-12 py-10 overflow-hidden px-4 ">
            <h4 class="text-[28px] lg:text-[36px] heading-all leading-[1.15] font-[400] text-[#242424] mb-7 text-center">What our customers say</h4>
            <script src="https://static.elfsight.com/platform/platform.js" async></script>
            <div class="elfsight-app-c6525cd4-e40b-4288-b841-1f142c4ba611" data-elfsight-app-lazy></div>
        </div>
        <!-- <section class="overview-block device-aria iq-bg jarallax ">

            <div class="iq-testimonial2 overview-block-ptb iq-ove-black-40 md:py-12 py-10 iq-bg jarallax" style="background-image: url('images/bg/white-abstract-testimonial.jpeg'); background-position: center,center;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                            <script src="https://apps.elfsight.com/p/platform.js" defer></script>
                            <div class="elfsight-app-6707e05d-e5a9-4163-b54a-a3a842227c55"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <?php include("include/newAboutpage/contactForAbout.php") ?>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            // Number animation function
            function animateNumber(element, target) {
                gsap.fromTo(
                    element, {
                        innerText: 0
                    }, {
                        innerText: target,
                        duration: 2,
                        ease: "power1.out",
                        snap: {
                            innerText: 1
                        },
                        onUpdate: function() {
                            element.textContent =
                                Math.floor(this.targets()[0].innerText) +
                                (target > 1 ? "+" : "");
                        },
                    }
                );
            }

            // Intersection Observer for counter
            const observer = new IntersectionObserver(
                (entries, observer) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            const counters = entry.target.querySelectorAll(".number-count");
                            counters.forEach((counter) => {
                                const target = parseInt(counter.getAttribute("data-target"));
                                if (!counter.classList.contains("animated")) {
                                    animateNumber(counter, target);
                                    counter.classList.add("animated");
                                }
                            });
                            observer.unobserve(entry.target); // Stop observing after trigger
                        }
                    });
                }, {
                    root: null,
                    threshold: 0.5,
                }
            );

            // Attach observer to the statistics section
            const statsSection = document.querySelector(".statistics-section");
            if (statsSection) {
                observer.observe(statsSection);
            } else {
                console.error("Statistics section not found.");
            }
        });
    </script>

    <script src="js/custom.js"></script>
    <script type="text/javascript">
        (function() {
            var options = {
                whatsapp: "+919820133303", // WhatsApp number
                email: "info@sagartech.co.in", // Email
                call_to_action: "Contact Us", // Call to action
                button_color: "#FF0808", // Color of button
                position: "left", // Position may be 'right' or 'left'
                order: "whatsapp,email", // Order of buttons
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init({
            // Global settings:
            // offset: 100, // Trigger animation 200px before element enters viewport
            // duration: 500, // Animation duration in milliseconds
            // delay: 0, // Delay before animation starts (applies to all elements)
            // easing: 'ease-in-out', // Easing function
            once: true, // Animate only once while scrolling down
            mirror: false // Don't animate while scrolling back up
        });
    </script>

</body>


</html>
<?php
include("include/footer.php");
?>