<!-- Slider Section -->
<div class="relative w-full lg:h-[120vh] h-[120vh] lg:mb-16 mb-10   bg-cover bg-center z-0 " style="background-image: url('new-images/slider-bg.webp')">
    <div class="swiper mySwiper h-full px-4">
        <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide relative ">
                <!-- Background Image -->
                <!-- <div class=" bg-cover bg-center z-0" style="background-image: url('/slider1.jpg')"></div> -->

                <!-- Content (stays in place) -->
                <div class="w-full h-full flex flex-col justify-center items-center text-center ">
                    <div class=" flex flex-col items-center justify-center  fade-target ">
                        <img
                            src="new-images/slider1.webp"
                            class=" w-[500px] mb-7"
                            alt="" />
                        <h1 class="text-4xl lg:text-4xl uppercase font-bold mb-4 z-10 text-gray-900  ">Ecommerce Website</h1>
                    </div>

                    <div class="fade-target">
                        <p class="text-[13.5px] mb- font-light tracking-wide text-gray-600 max-w-[750px] mx-auto">
                            Trillionaire Auto Parts is committed to providing premium-quality automotive parts and accessories designed to enhance your vehicle’s performance and style. Our products blend innovation, durability, and precision to meet the demands of modern vehicles. Whether you're upgrading your car’s functionality or enhancing its aesthetics, our carefully curated selection ensures top-tier quality and reliability in every detail.
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
                            src="image/homepage/yovant-homepage.webp"
                            class=" w-[500px] mb-7"
                            alt="" />
                        <h1 class="text-4xl lg:text-4xl uppercase font-bold mb-4 z-10 text-gray-900  "> Yovant Recruitment</h1>
                    </div>

                    <div class="fade-target">
                        <p class="text-[13.5px] mb- font-light tracking-wide text-gray-600 max-w-[600px] mx-auto">
                            Yovant Recruitment is a premier manpower and overseas recruitment agency specializing in sourcing skilled and unskilled workers for various industries across the Middle East. They have their own recruitment agencies in India, Nepal, Bangladesh, Pakistan, and Africa, ensuring a seamless hiring process. With a strong network and expertise, they cater to the staffing needs of construction, hospitality, healthcare, and other sectors.
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
                            src="image/homepage/classics-v1.webp"
                            class=" w-[500px] mb-7"
                            alt="" />
                        <h1 class="text-4xl lg:text-4xl uppercase font-bold mb-4 z-10 text-gray-900  "> Travel Website</h1>
                    </div>

                    <div class="fade-target">
                        <p class="text-[13.5px] mb- font-light tracking-wide text-gray-600 max-w-[600px] mx-auto">
                            Go Classic Tour is your gateway to unforgettable travel experiences, offering expertly curated tours that combine luxury, adventure, and cultural immersion. Our user-friendly platform allows you to explore a wide range of destinations and customizable packages tailored to your preferences.
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