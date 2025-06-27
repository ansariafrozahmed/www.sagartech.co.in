<style>
    @media (min-width: 1300px) and (max-width: 1399px) {
        .heightWrapper {
            height: 90vh;
        }
    }

    @media (min-width: 1400px) and (max-width: 1499px) {
        .heightWrapper {
            height: 85vh;
        }
    }

    @media (min-width: 1500px) and (max-width: 1599px) {
        .heightWrapper {
            height: 80vh;
        }
    }
</style>

<div id="main" class="overflow-hidden">
    <div style="background: linear-gradient(0deg,rgba(36, 36, 36, 1) 0%, rgba(18, 18, 18, 1) 100%);" class="heightWrapper">
        <div class="max-w-[1500px] h-full mx-auto space-y-8 px-4 py-8 md:p-8 lg:p-12">
            <div class="flex items-center w-full h-full gap-10">
                <div class="h-full w-[55%]  flex flex-col justify-between">
                    <h2 class="text-[110px] 2xl:h-[120px] leading-[0.9] text-[#fff] font-black">
                        YOUR TRUSTED.
                    </h2>
                    <p class="text-gray-100 block text-[13.5px] font-light">
                        Sagar Tech Technical Solution Is Award Winning 🏆 Web Development and Digital Marketing Agency In Mumbai Our team of web developers specialises in developing websites that quickly generate leads. We offer effective design, innovative web development, Mobile App Development, and ROI-focused marketing to help your brand reach its full potential.
                    </p>
                </div>
                <div class="h-full w-[45%] ">
                    <div class="relative h-full w-[50%]">
                        <img data-float-id="1" src="<?php WEB_URL ?>new-images/design.webp"
                            class="shadow-[4.0px_8.0px_8.0px_rgba(0,0,0,0.38)] img-stack absolute top-0 left-[0%] w-full h-full object-cover rounded-xl z-[4]">
                        <img data-float-id="2" src="<?php WEB_URL ?>new-images/consult.webp"
                            class="shadow-[4.0px_8.0px_8.0px_rgba(0,0,0,0.38)] img-stack absolute top-0 left-[33%] w-full h-full object-cover rounded-xl z-[3]">
                        <img data-float-id="3" src="<?php WEB_URL ?>new-images/development.webp"
                            class="shadow-[4.0px_8.0px_8.0px_rgba(0,0,0,0.38)] img-stack absolute top-0 left-[66.66%] w-full h-full object-cover rounded-xl z-[2]">
                        <img data-float-id="4" src="<?php WEB_URL ?>new-images/design.webp"
                            class="shadow-[4.0px_8.0px_8.0px_rgba(0,0,0,0.38)] img-stack absolute top-0 left-[99.99%] w-full h-full object-cover rounded-xl z-[1]">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="background: #fff;">
        <div class="max-w-[1500px] mx-auto space-y-8 px-4 py-8 md:p-8 lg:p-12">
            <div class="space-y-1">
                <span class="text-sm text-center block px-1 tracking-wide rounded-3xl text-[#ff0808] font-normal">What we offer</span>
                <h3 class="text-5xl md:text-7xl lg:text-5xl text-center leading-[0.9] font-semibold text-[#28282B]">Our Services</h3>
            </div>
            <div class="grid grid-cols-4 gap-4">
                <div data-float-target="1" class="heightWrapper"></div>
                <div data-float-target="2" class="heightWrapper"></div>
                <div data-float-target="3" class="heightWrapper"></div>
                <div data-float-target="4" class="heightWrapper"></div>
            </div>
        </div>
    </div>
</div>
<script>
    window.addEventListener("load", () => {
        // Select all images and targets
        const images = document.querySelectorAll(".img-stack");
        const targets = document.querySelectorAll("[data-float-target]");

        images.forEach((img) => {
            const id = img.getAttribute("data-float-id");
            const target = Array.from(targets).find(
                (t) => t.getAttribute("data-float-target") === id
            );

            if (target) {
                // Get initial and final positions
                const startRect = img.getBoundingClientRect();
                const endRect = target.getBoundingClientRect();

                // Calculate position and size differences
                const deltaX = endRect.left - startRect.left;
                const deltaY = endRect.top - startRect.top;
                const scaleX = endRect.width / startRect.width;
                const scaleY = endRect.height / startRect.height;

                // Create a timeline for each image
                gsap
                    .timeline({
                        scrollTrigger: {
                            trigger: "#main",
                            start: "top top",
                            end: "40%", // Adjust based on desired scroll distance
                            scrub: 1, // Smoothly ties animation to scroll
                            pin: false,
                        },
                    })
                    .to(img, {
                        x: deltaX,
                        y: deltaY,
                        scaleX: scaleX,
                        scaleY: scaleY,
                        ease: "power1.inOut",
                        onUpdate: () => {
                            // Ensure z-index and visibility
                            img.style.zIndex = 10; // Keep image above other elements
                        },
                    });
            }
        });
    });
</script>