<?php include "include/config.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
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

</head>

<style>
    .slider {
        display: flex;
        animation: slide 20s linear infinite;
    }

    .slider:hover {
        animation-play-state: paused;
    }

    @keyframes slide {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-50%);
        }
    }

    @media (max-width: 640px) {
        .slider {
            gap: 1.5rem;
        }

        .slider img {
            width: 4rem;
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
            <h4 class="flex justify-center items-center gap-1 bg-gray-900 border shadow-md border-gray-500 w-fit px-1.5 py-1  rounded-full mx-auto">
                <div class="bg-gray-500 p-0.5 rounded-full">

                    <img src="about-icon.png" alt="" class="w-3">
                </div>
                <span class="text-white text-[12px] font-medium">About Us</span>
            </h4>
            <div class="mt-5">
                <h1 class=" text-white text-center md:text-5xl text-3xl font-semibold"><span class="text-red-600">Sagar Tech </span> <span class="text-gray-100 inline-block text-center">Technical Solutions</span></h1>
                <div class="flex justify-center">

                    <h3 class="text-gray-100 inline-block text-center md:text-xl text-base font-semibold ">Think Red, Think Sagar Tech</h3>
                </div>
                <p class="text-sm mt-3 text-red-300 md:px-40  text-center tracking-wide  !my-7">
                    Sagar Tech Technical Solution Is Award Winning 🏆 Web Development and Digital Marketing Agency In Mumbai Our team of web developers specialises in developing websites that quickly generate leads. We offer effective design, innovative web development, Mobile App Development, and ROI-focused marketing to help your brand reach its full potential. We offer Ecommerce Website, business website, one page website, custom website.
                </p>
                <div class=" flex justify-center mt-10">
                    <a href="" class="flex w-fit py-2 shadow-lg   rounded-full px-3 items-center justify-center gap-1 hover:bg-gray-300 bg-gray-100 transition-all duration-300">
                        <span class="text-xs font-medium uppercase">

                            Get in Touch
                        </span>
                        <span class=" w-4">
                            <img src="arrow-up-right.svg" alt="">
                        </span>
                    </a>
                </div>
            </div>
            <div class="px-40">


                <div class="relative w-full overflow-hidden mt-12 ">
                    <div class="slider flex gap-3 " id="techStackSlider">
                        <div class="flex-none  h-[70px] rounded-md flex justify-center items-center bg-white p-5">
                            <img src="https://sagartech.co.in/image/techStack/1.png" class="w-16" alt="Tech Stack 1">
                        </div>
                        <div class="flex-none  h-[70px] rounded-md flex justify-center items-center bg-white p-5">
                            <img src="https://sagartech.co.in/image/techStack/2.png" class="w-16" alt="Tech Stack 2">
                        </div>
                        <div class="flex-none  h-[70px] rounded-md flex justify-center items-center bg-white p-5">
                            <img src="https://sagartech.co.in/image/techStack/3.png" class="w-16" alt="Tech Stack 3">
                        </div>
                        <div class="flex-none  h-[70px] rounded-md flex justify-center items-center bg-white p-5">
                            <img src="https://sagartech.co.in/image/techStack/4.png" class="w-16" alt="Tech Stack 4">
                        </div>
                        <div class="flex-none  h-[70px] rounded-md flex justify-center items-center bg-white p-5">
                            <img src="https://sagartech.co.in/image/techStack/5.png" class="w-16" alt="Tech Stack 5">
                        </div>
                        <div class="flex-none  h-[70px] rounded-md flex justify-center items-center bg-white p-5">
                            <img src="https://sagartech.co.in/image/techStack/6.png" class="w-16" alt="Tech Stack 6">
                        </div>
                        <div class="flex-none  h-[70px] rounded-md flex justify-center items-center bg-white p-5">
                            <img src="https://sagartech.co.in/image/techStack/12.png" class="w-16" alt="Tech Stack 12">
                        </div>
                        <div class="flex-none  h-[70px] rounded-md flex justify-center items-center bg-white p-5">
                            <img src="https://sagartech.co.in/image/techStack/16.png" class="w-16" alt="Tech Stack 16">
                        </div>
                        <div class="flex-none  h-[70px] rounded-md flex justify-center items-center bg-white p-5">
                            <img src="https://sagartech.co.in/image/techStack/22.png" class="w-16" alt="Tech Stack 22">
                        </div>
                        <!-- Duplicate images for infinite loop -->
                        <div class="flex-none  h-[70px] rounded-md flex justify-center items-center bg-white p-5">
                            <img src="https://sagartech.co.in/image/techStack/1.png" class="w-16" alt="Tech Stack 1">
                        </div>
                        <div class="flex-none  h-[70px] rounded-md flex justify-center items-center bg-white p-5">
                            <img src="https://sagartech.co.in/image/techStack/2.png" class="w-16" alt="Tech Stack 2">
                        </div>
                        <div class="flex-none  h-[70px] rounded-md flex justify-center items-center bg-white p-5">
                            <img src="https://sagartech.co.in/image/techStack/3.png" class="w-16" alt="Tech Stack 3">
                        </div>
                        <div class="flex-none  h-[70px] rounded-md flex justify-center items-center bg-white p-5">
                            <img src="https://sagartech.co.in/image/techStack/4.png" class="w-16" alt="Tech Stack 4">
                        </div>
                        <div class="flex-none  h-[70px] rounded-md flex justify-center items-center bg-white p-5">
                            <img src="https://sagartech.co.in/image/techStack/5.png" class="w-16" alt="Tech Stack 5">
                        </div>
                        <div class="flex-none  h-[70px] rounded-md flex justify-center items-center bg-white p-5">
                            <img src="https://sagartech.co.in/image/techStack/6.png" class="w-16" alt="Tech Stack 6">
                        </div>
                        <div class="flex-none  h-[70px] rounded-md flex justify-center items-center bg-white p-5">
                            <img src="https://sagartech.co.in/image/techStack/12.png" class="w-16" alt="Tech Stack 12">
                        </div>
                        <div class="flex-none  h-[70px] rounded-md flex justify-center items-center bg-white p-5">
                            <img src="https://sagartech.co.in/image/techStack/16.png" class="w-16" alt="Tech Stack 16">
                        </div>
                        <div class="flex-none  h-[70px] rounded-md flex justify-center items-center bg-white p-5">
                            <img src="https://sagartech.co.in/image/techStack/22.png" class="w-16" alt="Tech Stack 22">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const slider = document.getElementById('techStackSlider');
            // Ensure smooth looping by resetting the scroll position
            slider.addEventListener('animationiteration', () => {
                slider.style.transition = 'none';
                slider.style.transform = 'translateX(0)';
                setTimeout(() => {
                    slider.style.transition = 'transform 0.3s ease';
                }, 50);
            });
        });
    </script>
</body>


</html>
<?php
include("include/footer.php");
?>