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
            Why a WordPress-Powered <br class="max-sm:hidden"> Website Is Right for Your Brand
        </h2>
        <div id="trigger-heading-end" class="h-[1px] w-full"></div>
        <p class="text-xl font-light tracking-wide text-gray-300 w-full mt-10 transition-colors duration-300" id="animated-subtitle">
            Explore the features that make WordPress the go-to platform <br class="max-sm:hidden"> for flexible, future-ready websites.
        </p>
    </div>
    <div class="flex !justify-start w-full">
        <p id="animated-paragraph" class="text-[13.5px] lg:text-sm max-w-[700px] w-full text-start font-light tracking-wide text-gray-100 opacity-0 translate-y-6 my-10 transition-colors duration-300">
            In the digital age, a dynamic website is no longer a choice: it is a requirement for businesses seeking to establish a strong online presence and stay ahead of the competition. At Sagar Tech Technical Solution, we recognize the value of dynamic website development in driving business growth and increasing customer engagement. Here are some strong reasons why your business should have a dynamic website.
        </p>
    </div>
    <div class="w-full">
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-5 place-items-center w-full" id="grid-column-container">
            <div id="glow-card" class=" h-[220px] flex justify-between relative group overflow-hidden space-y-4 lg:p-10 py-6 px-4  rounded-2xl max-w-[650px] border border-gray-200 w-full transition-colors duration-300">

                <!-- Glow that follows cursor -->
                <div class=" z-10 ">

                    <!-- <div id="glow-dot" class="pointer-events-none absolute w-48 h-48 rounded-full bg-red-50 opacity-0 blur-3xl z-0"></div> -->
                    <div class="flex justify-between gap-5 items-center">
                        <h3 class="lg:text-[22px] leading-[1.15] max-w-[600px] lg:max-w-[700px] font-[400] text-[#242424]">Custom Tailored Designs</h3>
                        <img src="new-icons/custom-des.png" alt="" class="w-8">
                    </div>
                    <p class="text-[13.5px] font-light tracking-wide lg:text-gray-600 text-gray-800  w-full mt-3 z-10">
                        Our team of skilled designers will create a website that not only looks great but also aligns with your brand's personality and goals.
                    </p>
                </div>

            </div>
            <div id="glow-card" class=" h-[220px] flex justify-between relative group overflow-hidden space-y-4 lg:p-10 py-6 px-4  rounded-2xl max-w-[650px] border border-gray-200 w-full transition-colors duration-300">

                <!-- Glow that follows cursor -->
                <div class=" z-10 ">

                    <!-- <div id="glow-dot" class="pointer-events-none absolute w-48 h-48 rounded-full bg-red-50 opacity-0 blur-3xl z-0"></div> -->
                    <div class="flex justify-between gap-5 items-center">
                        <h3 class="lg:text-[22px] leading-[1.15] max-w-[600px] lg:max-w-[700px] font-[400] text-[#242424]">SEO-Friendly Websites</h3>
                        <img src="new-icons/dynamic-icons/seo.png" alt="" class="w-8">
                    </div>
                    <p class="text-[13.5px] font-light tracking-wide lg:text-gray-600 text-gray-800  w-full mt-3 z-10">
                        We ensure your website is optimized for search engines, helping you reach a wider audience and drive more organic traffic.
                    </p>
                </div>

            </div>
            <div id="glow-card" class=" h-[220px] flex justify-between relative group overflow-hidden space-y-4 lg:p-10 py-6 px-4  rounded-2xl max-w-[650px] border border-gray-200 w-full transition-colors duration-300">

                <!-- Glow that follows cursor -->
                <div class=" z-10 ">

                    <!-- <div id="glow-dot" class="pointer-events-none absolute w-48 h-48 rounded-full bg-red-50 opacity-0 blur-3xl z-0"></div> -->
                    <div class="flex justify-between gap-5 items-center">
                        <h3 class="lg:text-[22px] leading-[1.15] max-w-[600px] lg:max-w-[700px] font-[400] text-[#242424]">Responsive Design</h3>
                        <img src="new-icons/responsive-black.png" alt="" class="w-8">
                    </div>
                    <p class="text-[13.5px] font-light tracking-wide lg:text-gray-600 text-gray-800  w-full mt-3 z-10">
                        Your website will look fantastic on all devices, from desktops to smartphones, ensuring a seamless user experience.
                    </p>
                </div>

            </div>
            <div id="glow-card" class=" h-[220px] flex justify-between relative group overflow-hidden space-y-4 lg:p-10 py-6 px-4  rounded-2xl max-w-[650px] border border-gray-200 w-full transition-colors duration-300">

                <!-- Glow that follows cursor -->
                <div class=" z-10 ">

                    <!-- <div id="glow-dot" class="pointer-events-none absolute w-48 h-48 rounded-full bg-red-50 opacity-0 blur-3xl z-0"></div> -->
                    <div class="flex justify-between gap-5 items-center">
                        <h3 class="lg:text-[22px] leading-[1.15] max-w-[600px] lg:max-w-[700px] font-[400] text-[#242424]">E-commerce Solutions</h3>
                        <img src="new-icons/ecommerce.png" alt="" class="w-8">
                    </div>
                    <p class="text-[13.5px] font-light tracking-wide lg:text-gray-600 text-gray-800  w-full mt-3 z-10">
                        Need an online store? Our WordPress development expertise can help you create a robust and secure e-commerce platform.
                    </p>
                </div>

            </div>
            <div id="glow-card" class=" h-[220px] flex justify-between relative group overflow-hidden space-y-4 lg:p-10 py-6 px-4  rounded-2xl max-w-[650px] border border-gray-200 w-full transition-colors duration-300">

                <!-- Glow that follows cursor -->
                <div class=" z-10 ">

                    <!-- <div id="glow-dot" class="pointer-events-none absolute w-48 h-48 rounded-full bg-red-50 opacity-0 blur-3xl z-0"></div> -->
                    <div class="flex justify-between gap-5 items-center">
                        <h3 class="lg:text-[22px] leading-[1.15] max-w-[600px] lg:max-w-[700px] font-[400] text-[#242424]">Ongoing Support and Maintenance</h3>
                        <img src="new-icons/maintain.png" alt="" class="w-9">
                    </div>
                    <p class="text-[13.5px] font-light tracking-wide lg:text-gray-600 text-gray-800  w-full mt-3 z-10">
                        We're committed to providing ongoing support and maintenance to keep your website running smoothly.
                    </p>
                </div>

            </div>
            <div id="glow-card" class=" h-[220px] flex justify-between relative group overflow-hidden space-y-4 lg:p-10 py-6 px-4  rounded-2xl max-w-[650px] border border-gray-200 w-full transition-colors duration-300">

                <!-- Glow that follows cursor -->
                <div class=" z-10 ">

                    <!-- <div id="glow-dot" class="pointer-events-none absolute w-48 h-48 rounded-full bg-red-50 opacity-0 blur-3xl z-0"></div> -->
                    <div class="flex justify-between gap-5 items-center">
                        <h3 class="lg:text-[22px] leading-[1.15] max-w-[600px] lg:max-w-[700px] font-[400] text-[#242424]">Payment Gateway Expertise</h3>
                        <img src="new-icons/pay-gate-black.png" alt="" class="w-10">
                    </div>
                    <p class="text-[13.5px] font-light tracking-wide lg:text-gray-600 text-gray-800  w-full mt-3 z-10">
                        Expertise in integrating and managing payment gateways for a smooth, secure checkout experience. Simplify transactions and boost customer confidence.
                    </p>
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