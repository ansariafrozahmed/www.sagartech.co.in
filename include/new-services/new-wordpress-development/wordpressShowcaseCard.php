<!-- Shopify Mockups Section (same as before) -->
<section class="py-20 px-4 lg:px-20 bg-gray-50" data-aos="fade-up">



    <div class="text-start flex lg:flex-row flex-col justify-between mb-12">
        <h2 class="text-[35px] lg:text-[50px] font-semibold text-[#242424]" data-aos="fade-up">Wordpress Store Preview</h2>
        <div class="">
            <p class="text-gray-500 text-sm mt-5">
                Hand-crafted Shopify storefronts designed <br class="max-sm:hidden" data-aos="fade-up"> to deliver performance & style.
            </p>
            <div class="mt-5" data-aos="fade-up" data-aos="fade-up">
                <a href="projects" class="">

                    <button
                        class="relative px-[30px] py-[10px] text-[15px] font-normal text-[#242424] hover:text-[#fff] border border-gray-500 rounded-full overflow-hidden transition-all duration-300 ease-[cubic-bezier(0.23,1,0.32,1)] group bg-transparent">
                        <span class="relative z-10 text-sm">See More</span>
                        <!-- expanding circle effect -->

                        <span
                            class="absolute inset-0 m-auto w-[50px] h-[50px] bg-[#242424] rounded-full scale-0 
                        transition-all duration-700 ease-[cubic-bezier(0.23,1,0.32,1)]  
                        group-hover:scale-[4] z-0"></span>
                    </button>
                </a>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-2  lg:grid-cols-4 gap-5 max-w-7xl mx-auto">
        <!-- Store Card -->
        <div onclick="openModal('portfolio-mockups/education/capdiw.webp')" class="relative group cursor-pointer hover:-translate-y-1 transition-all duration-300" data-aos="fade-up">
            <div class="  overflow-hidden  transition-all duration-300">
                <div class="overflow-hidden p-5 rounded-xl bg-gray-100 flex justify-center items-center">
                    <img src="portfolio-mockups/education/capdiw.webp" alt="Cotton Culture"
                        class="max-w-[200px] w-full object-cover transition-transform duration-500 group-hover:scale-105" />
                </div>
                <div class="py-4 pl-1">
                    <h3 class="text-[17px] font-medium text-[#242424]">Capdiw</h3>
                </div>
            </div>
        </div>
        <div onclick="openModal(`portfolio-mockups/ecommerce/mistleblue.webp`)" class="relative group cursor-pointer hover:-translate-y-1 transition-all duration-300" data-aos="fade-up">
            <div class="  overflow-hidden  transition-all duration-300">
                <div class="overflow-hidden p-5 rounded-xl bg-gray-100 flex justify-center items-center">
                    <img src="portfolio-mockups/ecommerce/mistleblue.webp" alt="Cotton Culture"
                        class="max-w-[200px] w-full object-cover transition-transform duration-500 group-hover:scale-105" />
                </div>
                <div class="py-4 pl-1">
                    <h3 class="text-[17px] font-medium text-[#242424]">Mistle Blue</h3>
                </div>
            </div>
        </div>
        <div onclick="openModal('portfolio-mockups/ecommerce/bsauto.webp')" class="relative group cursor-pointer hover:-translate-y-1 transition-all duration-300">
            <div class="  overflow-hidden  transition-all duration-300">
                <div class="overflow-hidden p-5 rounded-xl bg-gray-100 flex justify-center items-center">
                    <img src="portfolio-mockups/ecommerce/bsauto.webp" alt="Cotton Culture"
                        class="max-w-[200px] w-full object-cover transition-transform duration-500 group-hover:scale-105" />
                </div>
                <div class="py-4 pl-1">
                    <h3 class="text-[17px] font-medium text-[#242424]">BS Auto</h3>
                </div>
            </div>
        </div>
        <div onclick="openModal('portfolio-mockups/ecommerce/almarjaan.webp')" class="relative group cursor-pointer hover:-translate-y-1 transition-all duration-300" data-aos="fade-up">
            <div class="  overflow-hidden  transition-all duration-300">
                <div class="overflow-hidden p-5 rounded-xl bg-gray-100 flex justify-center items-center">
                    <img src="portfolio-mockups/ecommerce/almarjaan.webp" alt="Cotton Culture"
                        class="max-w-[200px] w-full object-cover transition-transform duration-500 group-hover:scale-105" />
                </div>
                <div class="py-4 pl-1">
                    <h3 class="text-[17px] font-medium text-[#242424]">Zenitto</h3>
                </div>
            </div>
        </div>
    </div>


</section>


<!-- Modal with Blurred Overlay and Boxed Image -->
<!-- Modal with Blurred Overlay and Boxed Image -->
<div id="imageModal" class="fixed inset-0 backdrop-blur-sm bg-black/20 hidden items-center justify-center z-50">
    <div
        id="modalContent"
        class="relative bg-gray-50 rounded-2xl mt-20 shadow-2xl p-4 max-w-3xl max-sm:mx-2 lg:w-[80%] transform scale-95 opacity-0 transition-all duration-300 ease-out">
        <!-- Close Button -->
        <button
            onclick="closeModal()"
            class="absolute top-4 right-4  text-gray-800 w-10 h-10 flex items-center justify-center text-2xl font-bold transition">
            &times;
        </button>
        <!-- Modal Image -->
        <img
            id="modalImage"
            src=""
            alt="Modal Image"
            class="rounded-xl w-full max-h-[70vh] object-contain mx-auto" />
    </div>
</div>


<!-- JavaScript -->
<script>
    function openModal(src) {
        const modal = document.getElementById("imageModal");
        const modalImg = document.getElementById("modalImage");
        const modalContent = document.getElementById("modalContent");

        modalImg.src = src;
        modal.classList.remove("hidden");
        modal.classList.add("flex");

        // Trigger fade + scale animation after slight delay
        setTimeout(() => {
            modalContent.classList.remove("scale-95", "opacity-0");
            modalContent.classList.add("scale-100", "opacity-100");
        }, 10);
    }

    function closeModal() {
        const modal = document.getElementById("imageModal");
        const modalImg = document.getElementById("modalImage");
        const modalContent = document.getElementById("modalContent");

        // Animate out
        modalContent.classList.remove("scale-100", "opacity-100");
        modalContent.classList.add("scale-95", "opacity-0");

        // Wait for animation to finish before hiding
        setTimeout(() => {
            modal.classList.remove("flex");
            modal.classList.add("hidden");
            modalImg.src = "";
        }, 300);
    }

    // Optional: click outside to close
    document.getElementById("imageModal").addEventListener("click", function(e) {
        if (e.target === this) closeModal();
    });
</script>