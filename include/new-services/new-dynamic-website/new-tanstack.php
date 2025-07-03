<style>
    .tanstack-slide {
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        gap: 1.5rem;
        position: absolute;
        width: 100%;
        top: 0;
        left: 0;
        opacity: 0;
        pointer-events: none;
    }

    @media (max-width: 1280px) {
        .tanstack-slide {
            grid-template-columns: repeat(4, 1fr);
            gap: 1.3rem;
        }
    }

    @media (max-width: 700px) {
        .tanstack-slide {
            grid-template-columns: repeat(3, 1fr);
            gap: 1rem;
        }
    }

    .tanstack-slide.active {
        opacity: 1;
        pointer-events: auto;
        position: relative;
    }

    #tanstack-loader {
        transition: width 5s linear;
    }
</style>

<div class="bg-[#141414] tanstack-section relative">
    <div class="max-w-[1500px] mx-auto space-y-8 px-4 py-8 md:p-8 lg:p-12 lg:px-20">
        <div>
            <!-- <span class="text-sm pb-2 inline-block px-1 tracking-wide rounded-3xl text-[#ff0808] font-normal tanstack-heading">Our Clients Who Shine</span> -->
            <h3 class="text-5xl md:text-7xl lg:text-8xl figtreeHeading !leading-[0.9] uppercase font-black text-[#fff] tanstack-heading">Tech Stack</h3>
            <h3 class="text-5xl md:text-7xl lg:text-8xl figtreeHeading !leading-[0.9] uppercase font-black text-[#fff] tanstack-heading">We use</h3>
        </div>

        <!-- Carousel Wrapper -->
        <div class="relative">
            <div id="tanstack-slides" class="relative h-auto w-full"></div>
        </div>
        <div class="max-w-[1500px] mx-auto w-full h-[2px] bg-gray-200">
            <div id="tanstack-loader" class="h-full bg-gray-500 w-0"></div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const section = document.querySelector(".tanstack-section");
        if (!section) return;

        const clients = [
            "new-icons/stacks/white-stacks/nodejs.png", "new-icons/stacks/white-stacks/typescript.png",
            "new-icons/stacks/white-stacks/reactjs.png", "new-icons/stacks/white-stacks/postgres.png",
            "new-icons/stacks/white-stacks/nextjs.png", "new-icons/stacks/white-stacks/jwt.svg",
            "new-icons/stacks/white-stacks/php.png", "new-icons/stacks/white-stacks/firebase.png",
            "new-icons/stacks/white-stacks/shopify.png", "new-icons/stacks/white-stacks/flutter.png",
            "new-icons/stacks/white-stacks/react-native.png", "new-icons/stacks/white-stacks/javascript.png"
        ];
        const clients1 = ["new-icons/stacks/white-stacks/cms.png", "new-icons/stacks/white-stacks/css3.png",
            "new-icons/stacks/white-stacks/bootstrap.png", "new-icons/stacks/white-stacks/expressjs.png",
            "new-icons/stacks/white-stacks/cloudflare.png", "new-icons/stacks/white-stacks/expo.png",
            "new-icons/stacks/white-stacks/nodejs.png", "new-icons/stacks/white-stacks/laravel.png",
            "new-icons/stacks/white-stacks/flutter.png", "new-icons/stacks/white-stacks/mongodb.png",
            "new-icons/stacks/white-stacks/firebase.png", "new-icons/stacks/white-stacks/mysql.png",

        ]; // Replace with actual different images if needed
        // Replace with actual different images if needed

        const w = window.innerWidth;
        const ITEMS_PER_SLIDE = w <= 768 ? 12 : w <= 1024 ? 12 : 18;

        const container = document.getElementById("tanstack-slides");
        const loaderBar = document.getElementById("tanstack-loader");

        let slides = [];
        let currentSlideIndex = 0;
        let slideTimeout;
        let isHovered = false;

        function createSlide(arr) {
            const group = arr.slice(0, ITEMS_PER_SLIDE);
            const slide = document.createElement("div");
            slide.className = "tanstack-slide";
            slide.innerHTML = group.map(
                (img) => `
      <div class="border border-gray-500 bg-[#141414] rounded-lg px-3 py-2 aspect-[4/2.8] lg:aspect-[4/2.5] flex items-center justify-center">
        <img class="h-full w-16 object-contain" src="${img}" alt="client logo">
      </div>
    `
            ).join("");
            container.appendChild(slide);
            return slide;
        }

        // Create and append slides
        slides = [createSlide(clients), createSlide(clients1)];

        function animateExit(slide) {
            return new Promise((resolve) => {
                gsap.to(slide.children, {
                    opacity: 0,
                    scale: 0.5,
                    stagger: 0.05,
                    ease: "back.in(1.1)",
                    duration: 0.6,
                    onComplete: () => {
                        slide.classList.remove("active");
                        resolve();
                    },
                });
            });
        }

        function animateEntry(slide) {
            slide.classList.add("active");
            gsap.fromTo(
                slide.children, {
                    opacity: 0,
                    scale: 0.5
                }, {
                    opacity: 1,
                    scale: 1,
                    stagger: 0.05,
                    ease: "back.out(1.1)",
                    duration: 0.6,
                }
            );
        }

        async function showSlide(index) {
            const currentSlide = document.querySelector(".tanstack-slide.active");
            if (currentSlide) await animateExit(currentSlide);
            animateEntry(slides[index]);
        }

        function startSlideLoop() {
            if (isHovered) return;

            loaderBar.style.transition = "none";
            loaderBar.style.width = "0%";
            void loaderBar.offsetWidth;
            loaderBar.style.transition = "width 5s linear";
            loaderBar.style.width = "100%";

            slideTimeout = setTimeout(() => {
                currentSlideIndex = (currentSlideIndex + 1) % slides.length;
                showSlide(currentSlideIndex).then(() => {
                    startSlideLoop();
                });
            }, 5000);
        }

        // Hover events to pause and resume
        container.addEventListener("mouseenter", () => {
            isHovered = true;
            clearTimeout(slideTimeout);
            loaderBar.style.transition = "none";
            loaderBar.style.width = getComputedStyle(loaderBar).width;
        });

        container.addEventListener("mouseleave", () => {
            isHovered = false;
            startSlideLoop();
        });

        // Start the show
        showSlide(currentSlideIndex).then(() => {
            startSlideLoop();
        });
    });
</script>