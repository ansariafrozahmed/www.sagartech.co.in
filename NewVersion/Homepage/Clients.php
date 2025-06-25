<style>
    .slide {
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        gap: 1.6rem;
        position: absolute;
        width: 100%;
        top: 0;
        left: 0;
        opacity: 0;
        pointer-events: none;
    }

    @media (max-width: 1280px) {
        .slide {
            grid-template-columns: repeat(4, 1fr);
            gap: 1.3rem;
        }
    }

    @media (max-width: 700px) {
        .slide {
            grid-template-columns: repeat(3, 1fr);
            gap: 1.1rem;
        }
    }

    .slide.active {
        opacity: 1;
        pointer-events: auto;
        position: relative;
    }

    #slide-loader {
        transition: width 5s linear;
    }
</style>
<div class="bg-white our-clients-section relative">
    <div class="max-w-[1500px] mx-auto space-y-8 px-4 py-8 md:p-8 lg:p-12">
        <div class="space-y-0.5">
            <span class="text-sm inline-block px-1 tracking-wide rounded-3xl text-[#ff0808] font-normal client-heading">Our Clients Who Shine</span>
            <h3 class="text-5xl md:text-7xl lg:text-8xl figtreeHeading leading-[0.9] uppercase font-black text-[#28282B] client-heading">Our</h3>
            <h3 class="text-5xl md:text-7xl lg:text-8xl figtreeHeading leading-[0.9] uppercase font-black text-[#28282B] client-heading">Clients</h3>
        </div>

        <!-- Carousel Wrapper -->
        <div class="relative">
            <div id="card-slides" class="relative h-auto w-full"></div>

        </div>
        <div class="max-w-[1500px] mx-auto w-full h-[2px] bg-gray-200">
            <div id="slide-loader" class="h-full bg-black w-0"></div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

<script>
    const clients = [
        "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
        "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
        "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
        "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
        "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
        "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
        "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
        "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
        "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
        "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
        "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
        "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
        "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
        "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
        "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
        "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
        "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
        "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
        "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
        "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
        "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
        "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
        "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
        "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
        "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
        "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
        "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
        "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
        "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
        "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
        "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
        "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
        "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
        "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
        "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
        "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
    ];

    const w = window.innerWidth;
    const ITEMS_PER_SLIDE = w <= 768 ? 9 : w <= 1024 ? 12 : 18;

    const slides = [];
    let currentSlideIndex = 0;

    const container = document.getElementById("card-slides");
    const loaderBar = document.getElementById("slide-loader");

    function startSlideCycle() {
        loaderBar.style.transition = "none";
        loaderBar.style.width = "0%";

        // Trigger reflow to restart CSS animation
        void loaderBar.offsetWidth;

        loaderBar.style.transition = "width 5s linear";
        loaderBar.style.width = "100%";

        setTimeout(() => {
            currentSlideIndex = (currentSlideIndex + 1) % slides.length;
            showSlide(currentSlideIndex).then(() => {
                startSlideCycle(); // Start loader again after slide transition
            });
        }, 5000);
    }

    // Generate slide groups
    for (let i = 0; i < clients.length; i += ITEMS_PER_SLIDE) {
        const group = clients.slice(i, i + ITEMS_PER_SLIDE);
        const slide = document.createElement("div");
        slide.className = "slide";
        slide.innerHTML = group.map(img => `
      <div class="border border-[#45454a] bg-white rounded-lg p-4 md:p-6 aspect-[4/2.8] lg:aspect-[4/2.2] flex items-center justify-center">
        <img class="h-full w-full object-contain" src="${img}" alt="client logo">
      </div>
    `).join("");
        container.appendChild(slide);
        slides.push(slide);
    }

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
                }
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
                duration: 0.6
            }
        );
    }

    async function showSlide(index) {
        const currentSlide = slides.find(s => s.classList.contains("active"));
        if (currentSlide) {
            await animateExit(currentSlide); // Wait for exit before entry
        }
        animateEntry(slides[index]);
    }




    // Auto change every 5 seconds
    showSlide(currentSlideIndex).then(() => {
        startSlideCycle();
    });
</script>