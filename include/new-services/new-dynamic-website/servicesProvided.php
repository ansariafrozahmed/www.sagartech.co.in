<script src="https://unpkg.com/gsap@3/dist/gsap.min.js"></script>
<script src="https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js"></script>
<script src="https://unpkg.com/split-type"></script>
<!-- <style>
    .text-title,
    .text-sub,
    .tag-item {
        transition: color 0.4s ease, border-color 0.2s ease;
    }
</style> -->
<style>
    .tag-item {
        backdrop-filter: blur(10px);
        background: rgba(30, 30, 30, 0.5);
        /* darker and more opaque */
        border: 1px solid rgba(255, 255, 255, 0.1);
        color: #f1f1f1;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.2);
        position: absolute;
        z-index: 2;
    }
</style>

<div class="overflow-hidden ">
    <div id="dynamic-section" class="transition-colors duration-500">
        <div class="lg:px-20 px-4 lg:py-16 py-10 flex lg:flex-row flex-col items-center justify-between gap-10">
            <!-- Text Content -->
            <div class="lg:w-[50%] w-full text-area">
                <h3 class="text-title text-[28px] lg:text-[40px] leading-[1.15] font-[400] max-sm:text-white md:text-start text-center max-w-[700px]">
                    We specialize in creating powerful and user-friendly
                    <span class="text-title">dynamic websites</span> tailored to your business goals.
                </h3>

                <p class="text-[13.5px] text-gray-400 mt-5 ">
                    Smart, scalable, and built to perform—our dynamic <br class="max-sm:hidden"> websites evolve with your business.
                </p>
                <!-- For Mobile -->
                <!-- Tags -->
                <div class="max-w-[500px] max-sm:grid lg:hidden md:mx-0 mx-auto md:flex md:flex-wrap lg:justify-normal grid-cols-2 md:justify-center gap-3 mt-10">
                    <div class=" border !border-gray-600 !text-gray-100 px-3 py-2 lg:rounded-full max-sm:max-w-[200px] flex justify-center items-center max-sm:h-[60px] rounded-md lg:!text-[13px] text-sm max-sm:text-center w-full lg:w-fit max-sm:mb-3">CMS-Based Website</div>
                    <div class=" border !border-gray-600 !text-gray-100 px-3 py-2 lg:rounded-full max-sm:max-w-[200px] flex justify-center items-center max-sm:h-[60px] rounded-md lg:!text-[13px] text-sm max-sm:text-center w-full lg:w-fit max-sm:mb-3">Admin Panel Integration</div>
                    <div class=" border !border-gray-600 !text-gray-100 px-3 py-2 lg:rounded-full max-sm:max-w-[200px] flex justify-center items-center max-sm:h-[60px] rounded-md lg:!text-[13px] text-sm max-sm:text-center w-full lg:w-fit max-sm:mb-3">Dynamic Product Listings</div>
                    <div class=" border !border-gray-600 !text-gray-100 px-3 py-2 lg:rounded-full max-sm:max-w-[200px] flex justify-center items-center max-sm:h-[60px] rounded-md lg:!text-[13px] text-sm max-sm:text-center w-full lg:w-fit max-sm:mb-3">Subscription System</div>
                    <div class=" border !border-gray-600 !text-gray-100 px-3 py-2 lg:rounded-full max-sm:max-w-[200px] flex justify-center items-center max-sm:h-[60px] rounded-md lg:!text-[13px] text-sm max-sm:text-center w-full lg:w-fit max-sm:mb-3">Booking & Appointments</div>
                    <div class=" border !border-gray-600 !text-gray-100 px-3 py-2 lg:rounded-full max-sm:max-w-[200px] flex justify-center items-center max-sm:h-[60px] rounded-md lg:!text-[13px] text-sm max-sm:text-center w-full lg:w-fit max-sm:mb-3">Business Portals</div>
                    <div class=" border !border-gray-600 !text-gray-100 px-3 py-2 lg:rounded-full max-sm:max-w-[200px] flex justify-center items-center max-sm:h-[60px] rounded-md lg:!text-[13px] text-sm max-sm:text-center w-full lg:w-fit max-sm:mb-3">Travel & Tourism</div>
                    <div class=" border !border-gray-600 !text-gray-100 px-3 py-2 lg:rounded-full max-sm:max-w-[200px] flex justify-center items-center max-sm:h-[60px] rounded-md lg:!text-[13px] text-sm max-sm:text-center w-full lg:w-fit max-sm:mb-3">Real-Time Data</div>
                    <div class=" border !border-gray-600 !text-gray-100 px-3 py-2 lg:rounded-full max-sm:max-w-[200px] flex justify-center items-center max-sm:h-[60px] max-sm:hidden rounded-md lg:!text-[13px] text-sm max-sm:text-center w-full lg:w-fit max-sm:mb-3">Blog System</div>
                    <div class=" border !border-gray-600 !text-gray-100 px-3 py-2 lg:rounded-full max-sm:max-w-[200px] flex justify-center items-center max-sm:h-[60px] rounded-md lg:!text-[13px] text-sm max-sm:text-center w-full lg:w-fit max-sm:mb-3">E-commerce</div>
                    <div class=" border !border-gray-600 !text-gray-100 px-3 py-2 lg:rounded-full max-sm:max-w-[200px] flex justify-center items-center max-sm:h-[60px] rounded-md lg:!text-[13px] text-sm max-sm:text-center w-full lg:w-fit max-sm:mb-3">CRM Integration</div>
                </div>




                <!-- Stats -->
                <div class="flex gap-10 items-center max-sm:justify-center mt-10 stat-area">
                    <div>
                        <div class="text-title text-[28px] lg:text-[40px] font-[400]  max-sm:text-white">20+</div>
                        <hr class="my-2 border-gray-300">
                        <div class="text-sub text-[13.5px] !text-gray-400">Dynamic Website Experts</div>
                    </div>
                    <div>
                        <div class="text-title text-[28px] lg:text-[40px] font-[400]  max-sm:text-white">100+</div>
                        <hr class="my-2 border-gray-300">
                        <div class="text-sub text-[13.5px] !text-gray-400">Websites Delivered</div>
                    </div>
                    <div>
                        <div class="text-title text-[28px] lg:text-[40px] font-[400]  max-sm:text-white">8+</div>
                        <hr class="my-2 border-gray-300">
                        <div class="text-sub text-[13.5px] !text-gray-400">Years Experience</div>
                    </div>
                </div>
            </div>
            <!-- Video -->
            <div class="lg:w-[50%] w-full relative  rounded-3xl p-5 max-sm:hidden block">
                <!-- <video class="md:max-w-[400px] max-w-[350px] h-auto block object-cover" autoplay loop muted playsinline>
                    <source src="video/logo-video1.mp4" type="video/mp4" />
                    Your browser does not support the video tag
                </video> -->
                <img src="https://sagartech.co.in/portfolio-mockups/business/verify8.webp" alt="">

                <div class="tag-item absolute top-10  border !border-gray-600 !text-gray-100 px-3 py-2 lg:rounded-full max-sm:max-w-[200px] flex gap-1 justify-center items-center max-sm:h-[60px] rounded-md lg:!text-[13px] text-sm max-sm:text-center w-full lg:w-fit max-sm:mb-3 "> <span class="bg-gray-600 p-1 rounded-full ">
                        <img src="new-icons/white-icons/cms.png" class="w-4" alt="">
                    </span> CMS-Based Website</div>
                <div class="tag-item absolute top-28 -left-10   border !border-gray-600 !text-gray-100 px-3 py-2 lg:rounded-full max-sm:max-w-[200px] flex gap-1 justify-center items-center max-sm:h-[60px] rounded-md lg:!text-[13px] text-sm max-sm:text-center w-full lg:w-fit max-sm:mb-3"><span class="bg-gray-600 p-1 rounded-full ">
                        <img src="new-icons/white-icons/admin-panel.png" class="w-4" alt="">
                    </span>Admin Panel Integration</div>
                <div class="tag-item absolute top-5 -right-5   border !border-gray-600 !text-gray-100 px-3 py-2 lg:rounded-full max-sm:max-w-[200px] flex gap-1 justify-center items-center max-sm:h-[60px] rounded-md lg:!text-[13px] text-sm max-sm:text-center w-full lg:w-fit max-sm:mb-3"><span class="bg-gray-600 p-1 rounded-full ">
                        <img src="new-icons/white-icons/dynamic.png" class="w-4" alt="">
                    </span>Dynamic Product Listings</div>
                <div class="tag-item absolute top-60 -left-5   border !border-gray-600 !text-gray-100 px-3 py-2 lg:rounded-full max-sm:max-w-[200px] flex gap-1 justify-center items-center max-sm:h-[60px] rounded-md lg:!text-[13px] text-sm max-sm:text-center w-full lg:w-fit max-sm:mb-3">
                    <span class="bg-gray-600 p-1 rounded-full ">
                        <img src="new-icons/white-icons/subscribe.png" class="w-4" alt="">
                    </span>Subscription System
                </div>
                <div class="tag-item absolute bottom-20 -left-16   border !border-gray-600 !text-gray-100 px-3 py-2 lg:rounded-full max-sm:max-w-[200px] flex gap-1 justify-center items-center max-sm:h-[60px] rounded-md lg:!text-[13px] text-sm max-sm:text-center w-full lg:w-fit max-sm:mb-3">
                    <span class="bg-gray-600 p-1 rounded-full ">
                        <img src="new-icons/white-icons/online-booking.png" class="w-4" alt="">
                    </span>Booking & Appointments
                </div>
                <div class="tag-item absolute bottom-16 -right-16   border !border-gray-600 !text-gray-100 px-3 py-2 lg:rounded-full max-sm:max-w-[200px] flex gap-1 justify-center items-center max-sm:h-[60px] rounded-md lg:!text-[13px] text-sm max-sm:text-center w-full lg:w-fit max-sm:mb-3">
                    <span class="bg-gray-600 p-1 rounded-full ">
                        <img src="new-icons/white-icons/business.png" class="w-4" alt="">
                    </span>Business Portals
                </div>
                <div class="tag-item absolute bottom-36 -right-5  border !border-gray-600 !text-gray-100 px-3 py-2 lg:rounded-full max-sm:max-w-[200px] flex gap-1 justify-center items-center max-sm:h-[60px] rounded-md lg:!text-[13px] text-sm max-sm:text-center w-full lg:w-fit max-sm:mb-3">
                    <span class="bg-gray-600 p-1 rounded-full ">
                        <img src="new-icons/white-icons/travel.png" class="w-4" alt="">
                    </span>Travel & Tourism
                </div>
                <div class="tag-item absolute bottom-60 -right-14   border !border-gray-600 !text-gray-100 px-3 py-2 lg:rounded-full max-sm:max-w-[200px] flex gap-1 justify-center items-center max-sm:h-[60px] rounded-md lg:!text-[13px] text-sm max-sm:text-center w-full lg:w-fit max-sm:mb-3">
                    <span class="bg-gray-600 p-1 rounded-full ">
                        <img src="new-icons/white-icons/real-time.png" class="w-4" alt="">
                    </span>Real-Time Data
                </div>
                <div class="tag-item absolute -top-3 left-52  border !border-gray-600 !text-gray-100 px-3 py-2 lg:rounded-full max-sm:max-w-[200px] flex gap-1 justify-center items-center max-sm:h-[60px] max-sm:hidden rounded-md lg:!text-[13px] text-sm max-sm:text-center w-full lg:w-fit max-sm:mb-3">
                    <span class="bg-gray-600 p-1 rounded-full ">
                        <img src="new-icons/white-icons/blog.png" class="w-4" alt="">
                    </span>Blog System
                </div>
                <div class="tag-item absolute bottom-0 right-20   border !border-gray-600 !text-gray-100 px-3 py-2 lg:rounded-full max-sm:max-w-[200px] flex gap-1 justify-center items-center max-sm:h-[60px] rounded-md lg:!text-[13px] text-sm max-sm:text-center w-full lg:w-fit max-sm:mb-3">
                    <span class="bg-gray-600 p-1 rounded-full ">
                        <img src="new-icons/white-icons/ecom.png" class="w-4" alt="">
                    </span>E-commerce
                </div>
                <div class="tag-item absolute -bottom-3 left-16   border !border-gray-600 !text-gray-100 px-3 py-2 lg:rounded-full max-sm:max-w-[200px] flex gap-1 justify-center items-center max-sm:h-[60px] rounded-md lg:!text-[13px] text-sm max-sm:text-center w-full lg:w-fit max-sm:mb-3">
                    <span class="bg-gray-600 p-1 rounded-full ">
                        <img src="new-icons/white-icons/crm.png" class="w-4" alt="">
                    </span>CRM Integration
                </div>

            </div>

            <!-- For mobile version -->



        </div>
    </div>
</div>

<script>
    gsap.registerPlugin(ScrollTrigger);

    ScrollTrigger.matchMedia({
        // Mobile (max-width: 767px)
        "(max-width: 767px)": function() {
            const section = document.querySelector("#dynamic-section");
            const textEls = document.querySelectorAll(".text-title, .text-sub, .tag-item");

            ScrollTrigger.create({
                trigger: section,
                start: "top 90%",
                end: "top 50%",
                scrub: true,
                onUpdate: (self) => {
                    const progress = self.progress;

                    // Toggle class based on scroll state
                    if (self.isActive) {
                        document.body.classList.add("darkBody");
                    } else {
                        document.body.classList.remove("darkBody");
                    }

                    // Background Color: white to black (255 → 20)
                    const bgVal = Math.round(255 - (255 - 20) * progress);
                    const bgColor = `rgb(${bgVal}, ${bgVal}, ${bgVal})`;
                    document.body.style.backgroundColor = bgColor;

                    // Text Color: dark to white (36 → 255)
                    const textVal = Math.round(36 + (255 - 36) * progress);
                    const textColor = `rgb(${textVal}, ${textVal}, ${textVal})`;

                    textEls.forEach(el => {
                        el.style.color = textColor;
                        if (el.classList.contains("tag-item")) {
                            el.style.borderColor = textColor;
                        }
                    });
                }
            });
        },
        // Desktop (min-width: 768px)
        "(min-width: 768px)": function() {
            const section = document.querySelector("#dynamic-section");
            const textEls = document.querySelectorAll(".text-title, .text-sub, .tag-item");

            ScrollTrigger.create({
                trigger: section,
                start: "top 90%",
                end: "top 30%",
                scrub: true,
                onUpdate: (self) => {
                    const progress = self.progress;

                    // Toggle class based on scroll state
                    if (self.isActive) {
                        document.body.classList.add("darkBody");
                    } else {
                        document.body.classList.remove("darkBody");
                    }

                    // Background Color: white to black (255 → 20)
                    const bgVal = Math.round(255 - (255 - 5) * progress);
                    const bgColor = `rgb(${bgVal}, ${bgVal}, ${bgVal})`;
                    document.body.style.backgroundColor = bgColor;

                    // Text Color: dark to white (36 → 255)
                    const textVal = Math.round(36 + (255 - 36) * progress);
                    const textColor = `rgb(${textVal}, ${textVal}, ${textVal})`;

                    textEls.forEach(el => {
                        el.style.color = textColor;
                        if (el.classList.contains("tag-item")) {
                            el.style.borderColor = textColor;
                        }
                    });
                }
            });
        }
    });
</script>








<!-- <div class="max-w-[500px] md:mx-0 mx-auto md:flex md:flex-wrap lg:justify-normal grid grid-cols-2 md:justify-center gap-3 mt-10">
    <div class=" border !border-gray-600 !text-gray-100 px-3 py-2 lg:rounded-full max-sm:max-w-[200px] flex justify-center items-center max-sm:h-[60px] rounded-md lg:!text-[13px] text-sm max-sm:text-center w-full lg:w-fit max-sm:mb-3">CMS-Based Website</div>
    <div class=" border !border-gray-600 !text-gray-100 px-3 py-2 lg:rounded-full max-sm:max-w-[200px] flex justify-center items-center max-sm:h-[60px] rounded-md lg:!text-[13px] text-sm max-sm:text-center w-full lg:w-fit max-sm:mb-3">Admin Panel Integration</div>
    <div class=" border !border-gray-600 !text-gray-100 px-3 py-2 lg:rounded-full max-sm:max-w-[200px] flex justify-center items-center max-sm:h-[60px] rounded-md lg:!text-[13px] text-sm max-sm:text-center w-full lg:w-fit max-sm:mb-3">Dynamic Product Listings</div>
    <div class=" border !border-gray-600 !text-gray-100 px-3 py-2 lg:rounded-full max-sm:max-w-[200px] flex justify-center items-center max-sm:h-[60px] rounded-md lg:!text-[13px] text-sm max-sm:text-center w-full lg:w-fit max-sm:mb-3">Subscription System</div>
    <div class=" border !border-gray-600 !text-gray-100 px-3 py-2 lg:rounded-full max-sm:max-w-[200px] flex justify-center items-center max-sm:h-[60px] rounded-md lg:!text-[13px] text-sm max-sm:text-center w-full lg:w-fit max-sm:mb-3">Booking & Appointments</div>
    <div class=" border !border-gray-600 !text-gray-100 px-3 py-2 lg:rounded-full max-sm:max-w-[200px] flex justify-center items-center max-sm:h-[60px] rounded-md lg:!text-[13px] text-sm max-sm:text-center w-full lg:w-fit max-sm:mb-3">Business Portals</div>
    <div class=" border !border-gray-600 !text-gray-100 px-3 py-2 lg:rounded-full max-sm:max-w-[200px] flex justify-center items-center max-sm:h-[60px] rounded-md lg:!text-[13px] text-sm max-sm:text-center w-full lg:w-fit max-sm:mb-3">Travel & Tourism</div>
    <div class=" border !border-gray-600 !text-gray-100 px-3 py-2 lg:rounded-full max-sm:max-w-[200px] flex justify-center items-center max-sm:h-[60px] rounded-md lg:!text-[13px] text-sm max-sm:text-center w-full lg:w-fit max-sm:mb-3">Real-Time Data</div>
    <div class=" border !border-gray-600 !text-gray-100 px-3 py-2 lg:rounded-full max-sm:max-w-[200px] flex justify-center items-center max-sm:h-[60px] max-sm:hidden rounded-md lg:!text-[13px] text-sm max-sm:text-center w-full lg:w-fit max-sm:mb-3">Blog System</div>
    <div class=" border !border-gray-600 !text-gray-100 px-3 py-2 lg:rounded-full max-sm:max-w-[200px] flex justify-center items-center max-sm:h-[60px] rounded-md lg:!text-[13px] text-sm max-sm:text-center w-full lg:w-fit max-sm:mb-3">E-commerce</div>
    <div class=" border !border-gray-600 !text-gray-100 px-3 py-2 lg:rounded-full max-sm:max-w-[200px] flex justify-center items-center max-sm:h-[60px] rounded-md lg:!text-[13px] text-sm max-sm:text-center w-full lg:w-fit max-sm:mb-3">CRM Integration</div>
</div> -->