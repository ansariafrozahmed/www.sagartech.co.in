<style>
    @keyframes float-up-down {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-20px);
        }
    }

    @keyframes float-down-up {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(20px);
        }
    }

    @keyframes float-left-right {

        0%,
        100% {
            transform: translateX(0);
        }

        50% {
            transform: translateX(-20px);
        }
    }

    @keyframes float-right-left {

        0%,
        100% {
            transform: translateX(0);
        }

        50% {
            transform: translateX(20px);
        }
    }

    .float-up {
        animation: float-up-down 4s ease-in-out infinite;
    }

    .float-down {
        animation: float-down-up 4s ease-in-out infinite;
    }

    .float-left {
        animation: float-left-right 5s ease-in-out infinite;
    }

    .float-right {
        animation: float-right-left 5s ease-in-out infinite;
    }
</style>



<div class="lg:py-28 py-12 overflow-hidden lg:px-20 px-4 flex flex-col justify-center items-center transition-colors duration-300" id="main-section">
    <!-- <div class="absolute top-0 left-0 w-full h-full inset-0 bg-black/85"></div> -->
    <div class="w-full" id="trigger-section">
        <div class="" id="main-title-section">
            <!-- Text Area -->
            <div class="w-full" id="animation-bottom">
                <section id="heading-section" class="">
                </section>
            </div>
        </div>
        <div id="trigger-heading-end" class="h-[1px] w-full"></div>
        <h2 id="animated-heading" class="lg:text-[50px] text-[35px] text-start w-full leading-[1.1] tracking-[0px] font-normal transition-colors duration-300">
            How a Custom Shopify Store <br class="max-sm:hidden">Can Elevate Your Business
        </h2>
        <div id="trigger-heading-end" class="h-[1px] w-full"></div>
        <p class="text-xl font-light tracking-wide text-gray-300 w-full mt-10 transition-colors duration-300" id="animated-subtitle">
            Why High-Performing Shopify Stores Create Better Engagement & Conversions
        </p>
    </div>
    <div class="flex !justify-start w-full">
        <p id="animated-paragraph" class="text-[13.5px] lg:text-sm max-w-[700px] w-full text-start w-full font-light tracking-wide text-gray-100 opacity-0 translate-y-6 my-10 transition-colors duration-300">
            Sagar Tech is one of the top Shopify development companies, known for helping companies easily launch and grow their online presence. Our knowledgeable staff is committed to providing customised Shopify solutions that support your particular company objectives.
        </p>
    </div>
    <div class="w-full">
        <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-5 place-items-center w-full" id="grid-column-container">
            <div id="glow-card" class="lg:h-[250px] flex justify-between relative group overflow-hidden space-y-4 lg:p-10 py-6 px-4  rounded-2xl max-w-[650px] bg-gray-50 shadow-md  w-full transition-colors duration-300">

                <!-- Glow that follows cursor -->
                <div class="lg:w-[60%]  z-10 ">

                    <div id="glow-dot" class="pointer-events-none absolute w-48 h-48 rounded-full bg-red-50 opacity-0 blur-3xl z-0"></div>

                    <h3 class="lg:text-[22px] leading-[1.15] max-w-[600px] lg:max-w-[700px] font-[400] text-[#242424]">Successful Shopify Projects</h3>
                    <p class="text-[13.5px] font-light tracking-wide lg:text-gray-600 text-gray-800 lg:max-w-[250px] w-full mt-3 z-10">
                        We’ve delivered a wide range of Shopify stores with precision and expertise. Elevate your e-commerce experience with tailored solutions that drive real results.
                    </p>
                </div>
                <div class="relative w-[40%]">
                    <div class="lg:bg-[#E14434] bg-[#f0c3be] w-20 h-20 rounded-full absolute flex justify-center items-center -top-20 left-16 float-down">
                        <img src="new-icons/white-icons/cms.png" class="w-8" alt="">
                    </div>

                    <div class="lg:bg-[#0D5EA6] bg-[#a5cdef] w-32 h-32 rounded-full absolute flex justify-center items-center top-10 right-10 float-left">
                        <img src="new-icons/white-icons/admin-panel.png" class="w-16" alt="">
                    </div>
                </div>
            </div>
            <div id="glow-card" class="lg:h-[250px] flex justify-between relative group overflow-hidden space-y-4 lg:p-10 py-6 px-4  rounded-2xl max-w-[650px] bg-gray-50 shadow-md  w-full transition-colors duration-300">

                <!-- Glow that follows cursor -->
                <div class="lg:w-[60%]  z-10 ">

                    <div id="glow-dot" class="pointer-events-none absolute w-48 h-48 rounded-full bg-red-50 opacity-0 blur-3xl z-0"></div>

                    <h3 class="lg:text-[22px] leading-[1.15] max-w-[600px] lg:max-w-[700px] font-[400] text-[#242424]">Shopify Expertise</h3>
                    <p class="text-[13.5px] font-light tracking-wide lg:text-gray-600 text-gray-800 lg:max-w-[250px] w-full mt-3 z-10">
                        We have strong experience working with Shopify, helping businesses build and grow their online stores with trusted, effective solutions.
                    </p>
                </div>
                <div class="relative w-[40%]">
                    <div class="lg:bg-[#0D5EA6] bg-[#c0b0ec] w-10 h-10 rounded-full absolute flex justify-center items-center top-5 left-5 float-up">
                        <img src="new-icons/white-icons/seo/seo1.png" class="w-5" alt="">
                    </div>

                    <div class="lg:bg-[#06923E] bg-[#f0c3be] w-20 h-20 rounded-full absolute flex justify-center items-center -top-20 left-16 float-down">
                        <img src="new-icons/white-icons/seo/seo2.png" class="w-8" alt="">
                    </div>
                    <div class="lg:bg-[#FFB823] bg-[#fcedcb] w-20 h-20 rounded-full absolute flex justify-center items-center top-20 -right-5 float-right">
                        <img src="new-icons/white-icons/seo/seo4.png" class="w-8" alt="">
                    </div>

                </div>

            </div>
            <div id="glow-card" class="lg:h-[250px] flex justify-between relative group overflow-hidden space-y-4 lg:p-10 py-6 px-4  rounded-2xl max-w-[650px] bg-gray-50 shadow-md  w-full transition-colors duration-300">

                <!-- Glow that follows cursor -->
                <div class="lg:w-[60%]  z-10 ">

                    <div id="glow-dot" class="pointer-events-none absolute w-48 h-48 rounded-full bg-red-50 opacity-0 blur-3xl z-0"></div>

                    <h3 class="lg:text-[22px] leading-[1.15] max-w-[600px] lg:max-w-[700px] font-[400] text-[#242424]">Custom Apps & Themes</h3>
                    <p class="text-[13.5px] font-light tracking-wide lg:text-gray-600 text-gray-800 lg:max-w-[250px] w-full mt-3 z-10">
                        Tailor your Shopify store with custom apps and themes. Enhance functionality and design for a unique shopping experience.
                    </p>
                </div>
                <div class="relative w-[40%]">
                    <div class="lg:bg-[#0D5EA6] bg-[#c0b0ec] w-10 h-10 rounded-full absolute flex justify-center items-center top-5 left-5 float-up">
                        <img src="new-icons/white-icons/increase-sale/increase1.png" class="w-5" alt="">
                    </div>

                    <div class="lg:bg-[#06923E] bg-[#f0c3be] w-20 h-20 rounded-full absolute flex justify-center items-center -top-20 left-16 float-down">
                        <img src="new-icons/white-icons/increase-sale/increase2.png" class="w-8" alt="">
                    </div>
                </div>
            </div>

            <div id="glow-card" class="lg:h-[250px] flex justify-between relative group overflow-hidden space-y-4 lg:p-10 py-6 px-4  rounded-2xl max-w-[650px] bg-gray-50 shadow-md  w-full transition-colors duration-300">

                <!-- Glow that follows cursor -->
                <div class="lg:w-[60%]  z-10 ">

                    <div id="glow-dot" class="pointer-events-none absolute w-48 h-48 rounded-full bg-red-50 opacity-0 blur-3xl z-0"></div>

                    <h3 class="lg:text-[22px] leading-[1.15] max-w-[600px] lg:max-w-[700px] font-[400] text-[#242424]">Responsive & SEO-friendly Stores</h3>
                    <p class="text-[13.5px] font-light tracking-wide lg:text-gray-600 text-gray-800 lg:max-w-[250px] w-full mt-3 z-10">
                        Build responsive and SEO-friendly stores that adapt seamlessly to any device and rank higher in search results. Optimize your e-commerce success.
                    </p>
                </div>
                <div class="relative w-[40%]">
                    <div class="lg:bg-[#725CAD] bg-[#c0b0ec] w-10 h-10 rounded-full absolute flex justify-center items-center top-5 left-5 float-up">
                        <img src="new-icons/white-icons/scalable/scalable1.png" class="w-5" alt="">
                    </div>
                    <div class="lg:bg-[#FFB823] bg-[#fcedcb] w-20 h-20 rounded-full absolute flex justify-center items-center top-20 -right-5 float-right">
                        <img src="new-icons/white-icons/scalable/scalable4.png" class="w-8" alt="">
                    </div>

                    <div class="lg:bg-[#06923E] bg-[#c4ffdc] w-16 h-16 rounded-full absolute flex justify-center items-center -bottom-10 left-5 float-up">
                        <img src="new-icons/white-icons/scalable/scalable5.png" class="w-8" alt="">
                    </div>
                </div>
            </div>

            <div id="glow-card" class="lg:h-[250px] flex justify-between relative group overflow-hidden space-y-4 lg:p-10 py-6 px-4  rounded-2xl max-w-[650px] bg-gray-50 shadow-md  w-full transition-colors duration-300">

                <!-- Glow that follows cursor -->
                <div class="lg:w-[60%]  z-10 ">

                    <div id="glow-dot" class="pointer-events-none absolute w-48 h-48 rounded-full bg-red-50 opacity-0 blur-3xl z-0"></div>

                    <h3 class="lg:text-[22px] leading-[1.15] max-w-[600px] lg:max-w-[700px] font-[400] text-[#242424]">Security & Speed Optimization</h3>
                    <p class="text-[13.5px] font-light tracking-wide lg:text-gray-600 text-gray-800 lg:max-w-[250px] w-full mt-3 z-10">
                        Ensure your Shopify store's security and speed with top-notch optimization. Protect your site and enhance performance for a seamless user experience.
                    </p>
                </div>
                <div class="relative w-[40%]">
                    <div class="lg:bg-[#FF9149] bg-[#a5cdef] w-28 h-28 rounded-full absolute flex justify-center items-center top-10 right-10 float-left">
                        <img src="new-icons/white-icons/cost-effect/cost-eff3.png" class="w-12" alt="">
                    </div>

                    <div class="lg:bg-[#FFB823] bg-[#fcedcb] w-20 h-20 rounded-full absolute flex justify-center items-center top-20 -right-5 float-right">
                        <img src="new-icons/white-icons/cost-effect/cost-eff4.png" class="w-8" alt="">
                    </div>
                </div>

            </div>
            <div id="glow-card" class="lg:h-[250px] flex justify-between relative group overflow-hidden space-y-4 lg:p-10 py-6 px-4  rounded-2xl max-w-[650px] bg-gray-50 shadow-md  w-full transition-colors duration-300">

                <!-- Glow that follows cursor -->
                <div class="lg:w-[60%]  z-10 ">

                    <div id="glow-dot" class="pointer-events-none absolute w-48 h-48 rounded-full bg-red-50 opacity-0 blur-3xl z-0"></div>

                    <h3 class="lg:text-[22px] leading-[1.15] max-w-[600px] lg:max-w-[700px] font-[400] text-[#242424]">Payment Gateway Expertise</h3>
                    <p class="text-[13.5px] font-light tracking-wide lg:text-gray-600 text-gray-800 lg:max-w-[250px] w-full mt-3 z-10">
                        Expertise in integrating and managing payment gateways for a smooth, secure checkout experience. Simplify transactions and boost customer confidence.
                    </p>
                </div>
                <div class="relative w-[40%]">


                    <div class="lg:bg-[#0D5EA6] bg-[#a5cdef] w-16 h-16 rounded-full absolute flex justify-center items-center top-8 right-16 float-left">
                        <img src="new-icons/white-icons/conversion-rates/conversion1.png" class="w-8" alt="">
                    </div>

                    <div class="lg:bg-[#DA498D] bg-[#fcedcb] w-20 h-20 rounded-full absolute flex justify-center items-center top-20 -right-5 float-right">
                        <img src="new-icons/white-icons/conversion-rates/conversion2.png" class="w-8" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/split-type@0.3.4/dist/split-type.umd.js"></script>

<script>
    // Register ScrollTrigger plugin
    gsap.registerPlugin(ScrollTrigger);

    // 1. Split heading text into characters
    const splitHeading = new SplitType("#animated-heading", {
        types: "words, chars"
    });

    // 2. Preserve word spacing
    splitHeading.words.forEach(word => {
        word.style.display = "inline-block";
        word.style.whiteSpace = "nowrap";
    });

    // 3. Create a timeline for animations
    const headingTimeline = gsap.timeline({
        scrollTrigger: {
            trigger: "#animation-bottom",
            start: "top 95%",
            end: "top 12%",
            scrub: 1.2,
        }
    });

    // 4. Animate heading characters
    headingTimeline.fromTo(
        splitHeading.chars, {
            opacity: 0,
            filter: "blur(4px)"
        }, {
            opacity: 1,
            filter: "blur(0px)",
            stagger: 0.05,
            ease: "power4.out"
        }
    );

    // 5. Animate subtitle
    headingTimeline.fromTo(
        "#animated-subtitle", {
            opacity: 0,
            y: 20
        }, {
            opacity: 1,
            y: 0,
            duration: 0.6,
            ease: "power2.out"
        }
    );

    // 6. Animate paragraph
    headingTimeline.fromTo(
        "#animated-paragraph", {
            opacity: 0,
            y: 20
        }, {
            opacity: 1,
            y: 0,
            duration: 0.6,
            ease: "power2.out"
        }
    );

    // 7. Card animations based on screen size
    ScrollTrigger.matchMedia({
        // Mobile (< 768px): Fade-in-up effect
        "(max-width: 767px)": function() {
            const cards = gsap.utils.toArray("#grid-column-container > div");

            gsap.from(cards, {
                scrollTrigger: {
                    trigger: "#grid-column-container",
                    start: "top 80%",
                    end: "bottom 20%",
                    toggleActions: "play none none none",
                    scrub: true
                },
                opacity: 0,
                y: 100,
                duration: 0.6,
                // stagger: 0.2,
                ease: "power2.out"
            });
        },
        // Desktop (≥ 768px): Existing slide-in-from-right effect
        "(min-width: 768px)": function() {
            const cards = gsap.utils.toArray("#grid-column-container > div");

            const timeline = gsap.timeline({
                scrollTrigger: {
                    trigger: "#grid-column-container",
                    start: "top 20%",
                    end: "+=1200",
                    // pin: true,
                    // scrub: 1.5
                }
            });

            cards.forEach((card) => {
                timeline.from(card, {
                    y: 400,
                    opacity: 0,
                    duration: 0.2,
                    ease: "ease-out"
                }, ">");
            });
        }
    });
</script>

<script>
    gsap.registerPlugin(ScrollTrigger);

    document.body.style.transition = "background-color 0.3s ease";

    ScrollTrigger.create({
        trigger: "#trigger-section",
        start: "top 100%",
        end: "bottom 80%",
        scrub: true,
        onUpdate: (self) => {
            const progress = self.progress;

            // === 1. Background Color (Black → White) ===
            const bgVal = Math.round(20 + (255 - 20) * progress); // 20 → 255
            const bgColor = `rgb(${bgVal}, ${bgVal}, ${bgVal})`;
            document.body.style.backgroundColor = bgColor;

            // === 2. Heading: White → Black ===
            const headingVal = Math.round(255 - 255 * progress); // 255 → 0
            const headingColor = `rgb(${headingVal}, ${headingVal}, ${headingVal})`;
            document.getElementById("animated-heading").style.color = headingColor;

            // === 3. Subtitle & Paragraph: Light Gray → Dark Gray ===
            const subtitleStart = 243,
                subtitleEnd = 107;
            const subtitleVal = Math.round(subtitleStart - (subtitleStart - subtitleEnd) * progress);
            const subtitleColor = `rgb(${subtitleVal}, ${subtitleVal}, ${subtitleVal})`;

            document.getElementById("animated-subtitle").style.color = subtitleColor;
            document.getElementById("animated-paragraph").style.color = subtitleColor;
        }
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const cards = document.querySelectorAll("#glow-card");

        cards.forEach((card) => {
            const glow = card.querySelector("#glow-dot");
            const title = card.querySelector("h3");

            // Ensure elements exist
            if (!glow || !title) {
                console.warn("Glow dot or title not found in card:", card);
                return;
            }

            // Mouse enters card
            card.addEventListener("mouseenter", () => {
                // gsap.to(glow, {
                //     opacity: 1,
                //     backgroundColor: "#fca5a5", // red-400
                //     duration: 0.3,
                //     ease: "power2.out"
                // });

                // gsap.to(title, {
                //     color: "#dc2626", // red-600
                //     duration: 0.3
                // });
            });

            // Mouse leaves card
            card.addEventListener("mouseleave", () => {
                // gsap.to(glow, {
                //     opacity: 0,
                //     duration: 0.3
                // });

                gsap.to(card, {
                    rotateX: 0,
                    rotateY: 0,
                    duration: 0.4,
                    ease: "power2.out"
                });

                // gsap.to(title, {
                //     color: "#242424",
                //     duration: 0.3
                // });
            });

            // Mouse moves inside card
            card.addEventListener("mousemove", (e) => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;

                const centerX = x - glow.offsetWidth / 2;
                const centerY = y - glow.offsetHeight / 2;

                gsap.to(glow, {
                    x: centerX,
                    y: centerY,
                    duration: 0.2,
                    ease: "power2.out"
                });

                const percentX = (x / rect.width - 0.5) * 2;
                const percentY = (y / rect.height - 0.5) * 2;

                gsap.to(card, {
                    rotateX: -percentY * 10,
                    rotateY: percentX * 10,
                    transformPerspective: 1000,
                    transformOrigin: "center",
                    duration: 0.3,
                    ease: "power2.out"
                });
            });
        });
    });
</script>