<div class="lg:pb-20 lg:pt-20 pb-10 lg:px-20 px-4 bg-white">
    <!-- Heading For Desktop -->
    <div class="lg:block hidden">
        <div class="lg:h-[80px] overflow-hidden  ">
            <h1 id="transition-heading"
                class="lg:text-7xl text-2xl lg:text-start text-center max-sm:mt-16 tracking-wide md:!leading-[85px] max-w-[1100px] w-full text-[#242424] ">
                Expert Static Website
            </h1>
        </div>
        <div class="lg:h-[80px] overflow-hidden  ">
            <h1 id="transition-heading"
                class="lg:text-7xl text-2xl lg:text-start text-center  tracking-wide md:!leading-[85px] max-w-[1100px] w-full text-[#242424]">
                Designers in Mumbai
            </h1>
        </div>
    </div>

    <!-- For Mobile Version -->
    <div class="overflow-hidden lg:hidden block max-sm:mt-16  ">
        <div class="h-[50px]  overflow-hidden  ">
            <h1 id="transition-heading"
                class=" text-[34px] text-start leading-  tracking-wide max-w-[1100px] w-full text-[#242424] ">
                Expert Static
            </h1>
        </div>
        <div class="h-[50px]  overflow-hidden  ">
            <h1 id="transition-heading"
                class=" text-[34px] text-start leading-  tracking-wide max-w-[1100px] w-full text-[#242424]">
                Website Designers
            </h1>
        </div>
        <div class="h-[50px]  overflow-hidden  ">
            <h1 id="transition-heading"
                class=" text-[34px] text-start leading-  tracking-wide max-w-[1100px] w-full text-[#242424]">
                in Mumbai
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
        Having a static website is really an intentional approach for your business in the digital world now. Static sites are simple, fast, and highly secure vs. a dynamic website with constantly changing content that is needing software updates and database management. As fixed content is used to build static websites, these are quite lightweight and fast loading, which can provide a better overall user experience. But the best thing about static websites is that they are very easy to update and need not much hosting resources. These are also perfect for providing data that is reliable and predictable in appearance, and they can provide it at a low cost, available over a wide range of platforms.
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