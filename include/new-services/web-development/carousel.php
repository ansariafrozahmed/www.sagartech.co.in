<!-- Slider Section -->
<div class="relative w-full h-[100vh] my-16 bg-[url(new-images/slider-bg.webp)] bg-no-repeat bg-cover bg-center px-4">
    <div class="swiper mySwiper h-full">
        <div class="swiper-wrapper">
            <!-- Slide 1 -->

            <div class="swiper-slide relative ">
                <!-- Background Image -->
                <!-- <div class=" bg-cover bg-center z-0" style="background-image: url('/slider1.jpg')"></div> -->

                <!-- Content (stays in place) -->
                <div class="w-full h-full flex flex-col justify-center items-center text-center ">
                    <div class=" flex flex-col items-center justify-center  fade-target ">
                        <img
                            src="new-images/slider-img1.webp"
                            class=" w-[500px] mb-7"
                            alt="" />
                        <h1 class="text-4xl lg:text-4xl uppercase font-bold mb-4 z-10 text-gray-900  ">Ecommerce Website</h1>
                    </div>

                    <div class="fade-target">
                        <p class="text-[13.5px] mb- font-light tracking-wide text-gray-600 max-w-[600px] mx-auto">
                            In the rapidly evolving digital landscape, having a strong online presence is essential for businesses to thrive.
                        </p>
                        <div class="flex justify-center mt-5">
                            <button class="button1">
                                <a href="our-clients">View All</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide relative ">
                <!-- Background Image -->
                <!-- <div class=" bg-cover bg-center z-0" style="background-image: url('/slider1.jpg')"></div> -->

                <!-- Content (stays in place) -->
                <div class="w-full h-full flex flex-col justify-center items-center text-center ">
                    <div class=" flex flex-col items-center justify-center  fade-target ">
                        <img
                            src="new-images/slider-img1.webp"
                            class=" w-[500px] mb-7"
                            alt="" />
                        <h1 class="text-4xl lg:text-4xl uppercase font-bold mb-4 z-10 text-gray-900  ">Portfolio Website</h1>
                    </div>

                    <div class="fade-target">
                        <p class="text-[13.5px] mb- font-light tracking-wide text-gray-600 max-w-[600px] mx-auto">
                            In the rapidly evolving digital landscape, having a strong online presence is essential for businesses to thrive.
                        </p>
                        <div class="flex justify-center mt-5">
                            <button class="button1">
                                <a href="our-clients">View All</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide relative ">
                <!-- Background Image -->
                <!-- <div class=" bg-cover bg-center z-0" style="background-image: url('/slider1.jpg')"></div> -->

                <!-- Content (stays in place) -->
                <div class="w-full h-full flex flex-col justify-center items-center text-center ">
                    <div class=" flex flex-col items-center justify-center  fade-target ">
                        <img
                            src="new-images/slider-img1.webp"
                            class=" w-[500px] mb-7"
                            alt="" />
                        <h1 class="text-4xl lg:text-4xl uppercase font-bold mb-4 z-10 text-gray-900  ">Shopify Website</h1>
                    </div>

                    <div class="fade-target">
                        <p class="text-[13.5px] mb- font-light tracking-wide text-gray-600 max-w-[600px] mx-auto">
                            In the rapidly evolving digital landscape, having a strong online presence is essential for businesses to thrive.
                        </p>
                        <div class="flex justify-center mt-5">
                            <button class="button1">
                                <a href="our-clients">View All</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>



        </div>

        <!-- Pagination -->
        <div class="swiper-pagination "></div>
    </div>
</div>



<script>
    document.addEventListener("DOMContentLoaded", function() {
        const swiper = new Swiper(".mySwiper", {
            speed: 800,
            loop: true,
            parallax: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
            effect: "slide",

            on: {
                slideChangeTransitionStart: function() {
                    document.querySelectorAll(".fade-target").forEach(el => {
                        el.classList.remove("fade-active");
                    });
                },
                slideChangeTransitionEnd: function() {
                    document.querySelectorAll(".swiper-slide-active .fade-target").forEach(el => {
                        el.classList.add("fade-active");
                    });
                }
            }
        });

        // Initial fade-in on load
        setTimeout(() => {
            document.querySelectorAll(".swiper-slide-active .fade-target").forEach(el => {
                el.classList.add("fade-active");
            });
        }, 100);
    });
</script>