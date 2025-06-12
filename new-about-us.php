<?php include "include/config.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {},
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
</head>

<style>
    body {
        font-family: "Bricolage Grotesque", sans-serif;
    }

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
        <div class="bg-[url(about-banner.webp)] bg-cover bg-center bg-no-repeat  md:py-10 py-10 px-4">
            <h4 class="flex justify-center items-center gap-1 bg-gray-900 border shadow-md border-gray-500 w-fit px-2 py-0.5  rounded-full mx-auto">
                <!-- <div class="">
                    
                    <img src="about-icon.png" alt="" class="w-3">
                </div> -->
                <span class="text-white text-[12px]">About Us</span>
            </h4>
            <div class="mt-5">
                <h1 class=" text-white text-center md:text-5xl text-3xl "><span class="text-white ">Sagar Tech </span> <span class="text-gray-100 inline-block text-center">Technical Solutions</span></h1>
                <div class="flex justify-center">

                    <h3 class="text-gray-100 inline-block text-center md:text-xl   font-light">Think Red, Think Sagar Tech</h3>
                </div>
                <p class="text-sm mt-3 text-red-300 md:px-40  text-center tracking-wide  !my-7">
                    Sagar Tech Technical Solution Is Award Winning 🏆 Web Development and Digital Marketing Agency In Mumbai Our team of web developers specialises in developing websites that quickly generate leads. We offer effective design, innovative web development, Mobile App Development, and ROI-focused marketing to help your brand reach its full potential. We offer Ecommerce Website, business website, one page website, custom website.
                </p>
                <div class=" flex justify-center mt-10">
                    <a href="/contact" class="flex w-fit py-2 shadow-lg   rounded-full px-3 items-center justify-center gap-1 hover:bg-gray-300 bg-gray-100 transition-all duration-300">
                        <span class="text-xs font-medium uppercase">

                            Get in Touch
                        </span>
                        <span class=" w-4">
                            <img src="arrow-up-right.svg" alt="">
                        </span>
                    </a>
                </div>
            </div>
            <div class="lg:px-40">


                <!-- Add this to your existing HTML (replace the old slider) -->
                <div class="relative w-full overflow-hidden mt-12">
                    <div class="slider flex w-max gap-3" id="techStackSlider">
                        <div class="flex flex-nowrap gap-3" id="slider-track">
                            <!-- ORIGINAL TECH STACK LOGOS -->
                            <div class="flex-none flex-col gap-1  rounded-md flex justify-center items-center p-5">
                                <img src="tech-stack/node.png" class="w-10" alt="Tech Stack 1">
                                <p class="text-gray-300 text-xs text-center">Node Js</p>
                            </div>
                            <div class="flex-none flex-col gap-1 rounded-md flex justify-center items-center  p-5">
                                <img src="tech-stack/react.png" class="w-10" alt="Tech Stack 2">
                                <p class="text-gray-300 text-xs text-center">React Js</p>
                            </div>
                            <div class="flex-none flex-col gap-1 rounded-md flex justify-center items-center  p-5">
                                <img src="tech-stack/react.png" class="w-10" alt="Tech Stack 2">
                                <p class="text-gray-300 text-xs text-center">React Native</p>
                            </div>
                            <div class="flex-none flex-col gap-1 rounded-md flex justify-center items-center  p-5">
                                <img src="tech-stack/php.png" class="w-10" alt="Tech Stack 2">
                                <p class="text-gray-300 text-xs text-center">php</p>
                            </div>
                            <div class="flex-none flex-col gap-1 rounded-md flex justify-center items-center  p-5">
                                <img src="tech-stack/postgre.png" class="w-10" alt="Tech Stack 2">
                                <p class="text-gray-300 text-xs text-center">PostgresSQL</p>
                            </div>
                            <div class="flex-none flex-col gap-1 rounded-md flex justify-center items-center  p-5">
                                <img src="tech-stack/mysql.png" class="w-10" alt="Tech Stack 2">
                                <p class="text-gray-300 text-xs text-center">MySQL</p>
                            </div>
                            <div class="flex-none flex-col gap-1 rounded-md flex justify-center items-center  p-5">
                                <img src="tech-stack/wordpress.png" class="w-10" alt="Tech Stack 2">
                                <p class="text-gray-300 text-xs text-center">WordPress</p>
                            </div>
                            <div class="flex-none flex-col gap-1 rounded-md flex justify-center items-center  p-5">
                                <img src="tech-stack/shopify.png" class="w-10" alt="Tech Stack 2">
                                <p class="text-gray-300 text-xs text-center">Shopify</p>
                            </div>
                            <div class="flex-none flex-col gap-1 rounded-md flex justify-center items-center  p-5">
                                <img src="tech-stack/mongodb.png" class="w-10" alt="Tech Stack 2">
                                <p class="text-gray-300 text-xs text-center">MongoDB</p>
                            </div>
                            <div class="flex-none flex-col gap-1 rounded-md flex justify-center items-center  p-5">
                                <img src="tech-stack/express.png" class="w-10" alt="Tech Stack 2">
                                <p class="text-gray-300 text-xs text-center">Express Js</p>
                            </div>
                            <div class="flex-none flex-col gap-5 mt-3 rounded-md flex justify-center items-center  p-5">
                                <img src="tech-stack/jwt.svg" class="w-10" alt="Tech Stack 2">
                                <p class="text-gray-300 text-xs text-center">JWT</p>
                            </div>
                            <div class="flex-none flex-col gap-1 rounded-md flex justify-center items-center  p-5">
                                <img src="tech-stack/ts.png" class="w-10" alt="Tech Stack 2">
                                <p class="text-gray-300 text-xs text-center">Typescript</p>
                            </div>
                            <div class="flex-none flex-col gap-1 rounded-md flex justify-center items-center  p-5">
                                <img src="tech-stack/firebase.png" class="w-10" alt="Tech Stack 2">
                                <p class="text-gray-300 text-xs text-center">Firebase</p>
                            </div>


                        </div>
                        <!-- Clone will be created automatically by JS -->
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const track = document.getElementById("slider-track");
            const clone = track.cloneNode(true); // Clone the original content
            clone.id = "slider-track-clone"; // Give it a different ID
            document.getElementById("techStackSlider").appendChild(clone);
        });
    </script>

</body>


</html>
<?php
include("include/footer.php");
?>