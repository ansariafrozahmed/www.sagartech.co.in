<div class="lg:pb-20 lg:pt-20 pb-10 lg:px-20 px-4 bg-white">
    <!-- Heading For Desktop -->
    <div class="lg:block hidden">
        <div class="lg:h-[80px] overflow-hidden  ">
            <h1 id="transition-heading"
                class="lg:text-7xl text-2xl lg:text-start text-center max-sm:mt-16 tracking-wide md:!leading-[85px] max-w-[1100px] w-full text-[#242424] ">
                WordPress Website Design
            </h1>
        </div>
        <div class="lg:h-[80px] overflow-hidden  ">
            <h1 id="transition-heading"
                class="lg:text-7xl text-2xl lg:text-start text-center  tracking-wide md:!leading-[85px] max-w-[1100px] w-full text-[#242424]">
                & Development Services
            </h1>
        </div>
    </div>

    <!-- For Mobile Version -->
    <div class="overflow-hidden lg:hidden block max-sm:mt-16  ">
        <div class="h-[50px]  overflow-hidden  ">
            <h1 id="transition-heading"
                class=" text-[34px] text-start leading-  tracking-wide max-w-[1100px] w-full text-[#242424] ">
                WordPress Website
            </h1>
        </div>
        <div class="h-[50px]  overflow-hidden  ">
            <h1 id="transition-heading"
                class=" text-[34px] text-start leading-  tracking-wide max-w-[1100px] w-full text-[#242424]">
                Design Your &
            </h1>
        </div>
        <div class="h-[50px]  overflow-hidden  ">
            <h1 id="transition-heading"
                class=" text-[34px] text-start leading-  tracking-wide max-w-[1100px] w-full text-[#242424]">
                Development Services
            </h1>
        </div>
    </div>

    <!-- Heading For Mobile -->
    <!-- <div class="h-[170px]  overflow-hidden lg:hidden block  ">
        <h1 id="transition-heading"
            class="lg:text-7xl text-3xl lg:text-start text-center max-sm:mt-16 tracking-wide md:!leading-[85px] max-w-[1100px] w-full text-[#242424]">
            Dynamic Website Developer & Designing Company In Mumbai
        </h1>
    </div> -->

    <p class="text-[13.5px] font-light tracking-wide text-gray-600 leading-7 mt-7 max-w-[800px] w-full lg:text-start text-justify"
        data-aos="fade-up">
        At Sagar Tech, we believe that your website is more than just a digital storefront; it's your online identity. That's why we're dedicated to crafting stunning, functional WordPress websites tailored to your unique needs. WordPress is the world's most popular content management system (CMS), and for good reason. It's user-friendly, flexible, and offers a vast array of plugins and themes to customize your website. At Sagar Tech, we leverage the power of WordPress to create websites that are both visually appealing and functionally robust.
    </p>
    <div class="flex items-center max-sm:justify-center  h-[50px] gap-3 !mt-10">
        <div class="" data-aos="fade-up">
            <a href="#open-modal" class=" rounded-full">

                <button
                    class="relative px-[30px] py-[10px] text-[15px] font-normal !bg-[#242424]  text-[#fff] border border-gray-500 hover:text-[#242424] rounded-full overflow-hidden transition-all duration-300 ease-[cubic-bezier(0.23,1,0.32,1)] group bg-transparent">
                    <span class="relative z-10 text-sm">Quick Enquiry</span>

                    <!-- expanding circle effect -->
                    <span
                        class="absolute inset-0 m-auto w-[50px] h-[50px] bg-[#fff] rounded-full scale-0 
                        transition-all duration-700 ease-[cubic-bezier(0.23,1,0.32,1)]  
                        group-hover:scale-[4] z-0"></span>
                </button>
            </a>

        </div>
        <div class="" data-aos="fade-up">
            <a href="projects" class="">

                <button
                    class="relative px-[30px] py-[10px] text-[15px] font-normal text-[#242424] hover:text-[#fff] border border-gray-500 rounded-full overflow-hidden transition-all duration-300 ease-[cubic-bezier(0.23,1,0.32,1)] group bg-transparent">
                    <span class="relative z-10 text-sm">Our Portfolio</span>

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
<!-- <div class="h-[100vh] w-full bg-fixed bg-top bg-cover bg-no-repeat " style="background-image: url('new-images/dynamic-website-bg.webp');">
</div> -->

<script>
    // Split words
    const splitWords = new SplitType("#transition-heading", {
        types: "words"
    });

    // Animate each word from scale 3 to scale 1
    gsap.from("#transition-heading", {
        // scale: 3,
        // opacity: 0,
        y: 100,
        duration: 0.5,
        ease: "ease-out",
        // stagger: 0.3, // animate word by word
        scrollTrigger: {
            trigger: "#transition-heading",
            start: "top 80%",
            toggleActions: "play none none none"
        }
    });
</script>