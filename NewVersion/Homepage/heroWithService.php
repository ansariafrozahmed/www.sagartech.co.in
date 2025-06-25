<div id="main" class="bg-white">
    <div class="max-w-[1700px] lg:space-y-10 xl:space-y-16 2xl:space-y-24 mx-auto p-4 md:p-8 lg:px-12 lg:py-12 xl:py-14 2xl:py-20">
        <div class="flex items-center lg:h-[450px] xl:h-[550px] 2xl:h-[700px] gap-20">
            <div class="w-[50%] space-y-6 h-full">
                <h2 class="text-[110px] 2xl:h-[120px] leading-[0.9] text-[#28282B] font-black">
                    YOUR TRUSTED
                </h2>
                <p class="text-gray-600 text-[13.5px] font-light">
                    Sagar Tech Technical Solution Is Award Winning 🏆 Web Development and Digital Marketing Agency In Mumbai Our team of web developers specialises in developing websites that quickly generate leads. We offer effective design, innovative web development, Mobile App Development, and ROI-focused marketing to help your brand reach its full potential.
                </p>
            </div>
            <div class="w-[50%] h-full flex items-center justify-start relative">
                <div class="relative lg:h-[450px] xl:h-[550px] 2xl:h-[700px] w-[50%]">
                    <img data-float-id="1" src="<?php WEB_URL ?>new-images/design.webp"
                        class="img-stack absolute top-0 left-[0%] w-full h-full object-cover rounded-lg border-2 border-white z-[4]">
                    <img data-float-id="2" src="<?php WEB_URL ?>new-images/consult.webp"
                        class="img-stack absolute top-0 left-[33%] w-full h-full object-cover rounded-lg border-2 border-white z-[3]">
                    <img data-float-id="3" src="<?php WEB_URL ?>new-images/development.webp"
                        class="img-stack absolute top-0 left-[66.66%] w-full h-full object-cover rounded-lg border-2 border-white z-[2]">
                    <img data-float-id="4" src="<?php WEB_URL ?>new-images/design.webp"
                        class="img-stack absolute top-0 left-[99.99%] w-full h-full object-cover rounded-lg border-2 border-white z-[1]">
                </div>
            </div>
        </div>

        <div class="space-y-10">
            <div class="space-y-1">
                <span class="text-sm text-center block px-1 tracking-wide rounded-3xl text-[#ff0808] font-normal">What we offer</span>
                <h3 class="text-5xl md:text-7xl lg:text-5xl text-center leading-[0.9] font-semibold text-[#28282B]">Our Services</h3>
            </div>

            <div class="grid grid-cols-4 gap-4">
                <div data-float-target="1" class="lg:h-[450px] xl:h-[550px] bg-gray-50 rounded-lg 2xl:h-[700px]"></div>
                <div data-float-target="2" class="lg:h-[450px] xl:h-[550px] bg-gray-50 rounded-lg 2xl:h-[700px]"></div>
                <div data-float-target="3" class="lg:h-[450px] xl:h-[550px] bg-gray-50 rounded-lg 2xl:h-[700px]"></div>
                <div data-float-target="4" class="lg:h-[450px] xl:h-[550px] bg-gray-50 rounded-lg 2xl:h-[700px]"></div>
            </div>
        </div>
    </div>
</div>

<script>
    // Ensure images are loaded before calculating positions
    window.addEventListener('load', () => {
        // Select all images and targets
        const images = document.querySelectorAll('.img-stack');
        const targets = document.querySelectorAll('[data-float-target]');

        images.forEach((img) => {
            const id = img.getAttribute('data-float-id');
            const target = Array.from(targets).find(t => t.getAttribute('data-float-target') === id);

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
                gsap.timeline({
                        scrollTrigger: {
                            trigger: '#main',
                            start: 'top top',
                            end: '40%', // Adjust based on desired scroll distance
                            scrub: 1, // Smoothly ties animation to scroll
                            pin: false,
                            markers: true,
                        }
                    })
                    .to(img, {
                        x: deltaX,
                        y: deltaY,
                        scaleX: scaleX,
                        scaleY: scaleY,
                        ease: 'power1.inOut',
                        onUpdate: () => {
                            // Ensure z-index and visibility
                            img.style.zIndex = 10; // Keep image above other elements
                        },

                    });
            }
        });
    });
</script>