<style>
    #tilt1-animation-container {
        perspective: 1000px;
    }

    #tilt1-animation-section {
        transform-style: preserve-3d;
    }

    .glass-card {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        transition: background 0.5s, color 0.5s, border 0.5s;
    }

    .glass-dark {
        background: rgba(0, 0, 0, 0.5);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        /* border: 1px solid rgba(255, 255, 255, 0.2); */
    }
</style>

<div class="lg:!py-16 py-10 px-4  mx-auto relative lg:px-20 hidden  overflow-hidden lg:block bg-[url(new-images/sticky-bg4.webp)] bg-cover bg-center ">
    <div class="absolute top-0 left-0 w-full h-full inset-0 bg-black/70"></div>
    <div class="" id="pinned-text-section">
        <h2 class="text-[35px] lg:text-[50px] text-white max-w-[800px]  leading-[1.05] font-[400]" id="reveal-text">
            Why choose us <br class="max-sm:hidden"> for Dynamic development ?
        </h2>
    </div>
    <div class="flex justify-center lg:flex-row flex-col max-sm:gap-5 mt-16">
        <div class="max-sm:space-y-5">
            <!-- Card 1 -->
            <div id="tilta1-animation-container">
                <div class=" glass-dark  lg:m-6 max-sm:text-justify border border-gray-900 rounded-3xl p-7 max-w-[450px] w-full bg-black" id="tilta1-animation-section">
                    <div class="text-gray-300 text-3xl mb-4">
                        <img src="new-icons/expert.png" class="w-12 mb-3" alt="">
                        <h2 class="text-[20px] lg:text-[22px] leading-[1.15] mt-2 font-[400] text-white ">Knowledge and skill</h2>
                    </div>
                    <p class="text-[13.5px] font-light tracking-wide text-gray-400">
                        Look for a business that shows expertise and competence in a range of technologies.
                    </p>
                </div>
            </div>
            <div id="tilt1-animation-container">
                <div class="glass-dark  lg:m-6 max-sm:text-justify border border-gray-900 rounded-3xl p-7 max-w-[450px] w-full bg-black" id="tilt1-animation-section">
                    <div class="text-gray-300 text-3xl mb-4">
                        <img src="new-icons/expert.png" class="w-12 mb-3" alt="">
                        <h2 class="text-[20px] lg:text-[22px] leading-[1.15] mt-2 font-[400] text-white ">High-quality Portfolio</h2>
                    </div>
                    <p class="text-[13.5px] font-light tracking-wide text-gray-400">
                        Take the time to review their portfolio and the quality of their work to ensure it meets your expectations.
                    </p>
                </div>
            </div>


            <!-- Card 3 -->

        </div>

        <div class="lg:mt-16 max-sm:space-y-5">
            <!-- Card 4 -->
            <div id="tilt4-animation-container">
                <div class="glass-dark  lg:m-6 max-sm:text-justify border border-gray-900 rounded-3xl p-7 max-w-[450px] w-full bg-black" id="tilt4-animation-section">
                    <div class="text-gray-300 text-3xl mb-4">
                        <img src="new-icons/solution.png" class="w-12 mb-3" alt="">
                        <h2 class="text-[20px] lg:text-[22px] leading-[1.15] mt-2 font-[400] text-white ">Cost-Effectiveness</h2>
                    </div>
                    <p class="text-[13.5px] font-light tracking-wide text-gray-400">
                        While dynamic website development may require a more initial investment than static website development.
                    </p>
                </div>
            </div>


            <!-- Card 6 -->
            <div id="tilt3-animation-container">
                <div class="glass-dark  lg:m-6 max-sm:text-justify border border-gray-900 rounded-3xl p-7 max-w-[450px] w-full bg-black" id="tilt3-animation-section">
                    <div class="text-gray-300 text-3xl mb-4">
                        <img src="new-icons/optimization.png" class="w-12 mb-3" alt="">
                        <h2 class="text-[20px] lg:text-[22px] leading-[1.15] mt-2 font-[400] text-white ">Assistance and Service</h2>
                    </div>
                    <p class="text-[13.5px] font-light tracking-wide text-gray-400">
                        Long-term success depends on continuous feature enhancement and post-deployment support.
                    </p>
                </div>
            </div>

        </div>
    </div>

</div>

<script>
    // Split by words and chars (characters nested in words)
    const splitText = new SplitType("#reveal-text", {
        types: "words, chars"
    });

    // Ensure full words stay together (avoid word breaking)
    splitText.words.forEach(word => {
        word.style.display = "inline-block";
        word.style.whiteSpace = "nowrap";
    });

    // Animate each character with blur + opacity
    gsap.fromTo(
        splitText.chars, {
            opacity: 0,
            // y: 20,
            filter: "blur(4px)"
        }, {
            opacity: 1,
            y: 0,
            filter: "blur(0px)",
            stagger: 0.02,
            ease: "power4.out",
            scrollTrigger: {
                trigger: "#pinned-text-section",
                start: "top 20%",
                end: "top 5%",
                // end: "+=2000",
                scrub: 1.2,
                // pin: true,
                anticipatePin: 1,
            }
        }
    );
</script>
<script>
    gsap.registerPlugin(ScrollTrigger);

    const cards = [{
            id: "#tilta1-animation-section",
            container: "#tilta1-animation-container",
            x: -400,
            rotateZ: -50
        },
        {
            id: "#tilt1-animation-section",
            container: "#tilt1-animation-container",
            x: -400,
            rotateZ: -50
        },
        {
            id: "#tilt2-animation-section",
            container: "#tilt2-animation-container",
            x: -400,
            rotateZ: -50
        },
        {
            id: "#tilt3-animation-section",
            container: "#tilt3-animation-container",
            x: 400,
            rotateZ: 50
        },
        {
            id: "#tilt4-animation-section",
            container: "#tilt4-animation-container",
            x: 400,
            rotateZ: 50
        },
        {
            id: "#tilt5-animation-section",
            container: "#tilt5-animation-container",
            x: 400,
            rotateZ: 50
        },
        {
            id: "#tilt6-animation-section",
            container: "#tilt6-animation-container",
            x: 400,
            rotateZ: 50
        },
    ];

    cards.forEach(({
        id,
        container,
        x,
        rotateZ
    }) => {
        gsap.fromTo(id, {
            x,
            y: 300,
            rotateZ,
            opacity: 0.3
        }, {
            x: 0,
            y: 0,
            rotateZ: 0,
            opacity: 1,
            ease: "none",
            scrollTrigger: {
                trigger: container,
                start: "top bottom",
                end: "top center",
                scrub: 1,
                markers: false
            }
        });
    });
</script>


<!-- For Mobile Version -->
<div class="lg:!py-16 py-10 px-4  mx-auto relative lg:px-14  overflow-hidden lg:hidden block bg-[url(https://sagartech.co.in/portfolio-mockups/ecommerce/thaigerpharma.webp)] bg-cover bg-center ">
    <div class="absolute top-0 left-0 w-full h-full inset-0 bg-black/50"></div>
    <div class="" id="mobile-pinned-text-section">
        <h2 class="text-[35px] lg:text-[50px] text-white max-w-[800px]  leading-[1.05] font-[400]" id="reveal-text">
            Why choose us <br class="max-sm:hidden"> for Dynamic development ?
        </h2>
    </div>
    <div class="flex justify-center lg:flex-row flex-col max-sm:gap-5 mt-16">
        <div class="max-sm:space-y-5">
            <!-- Card 1 -->
            <div id="mobile-tilta1-animation-container">
                <div class=" glass-dark  lg:m-6 max-sm:text-justify border border-gray-900 rounded-3xl p-7 max-w-[450px] w-full bg-black" id="mobile-tilta1-animation-section">
                    <div class="text-gray-300 text-3xl mb-4">
                        <img src="new-icons/expert.png" class="w-12 mb-3" alt="">
                        <h2 class="text-[20px] lg:text-[22px] leading-[1.15] mt-2 font-[400] text-white ">Knowledge and skill</h2>
                    </div>
                    <p class="text-[13.5px] font-light tracking-wide text-gray-400">
                        Look for a business that shows expertise and competence in a range of technologies.
                    </p>
                </div>
            </div>
            <div id="mobile-tilt1-animation-container">
                <div class="glass-dark  lg:m-6 max-sm:text-justify border border-gray-900 rounded-3xl p-7 max-w-[450px] w-full bg-black" id="mobile-tilt1-animation-section">
                    <div class="text-gray-300 text-3xl mb-4">
                        <img src="new-icons/expert.png" class="w-12 mb-3" alt="">
                        <h2 class="text-[20px] lg:text-[22px] leading-[1.15] mt-2 font-[400] text-white ">High-quality Portfolio</h2>
                    </div>
                    <p class="text-[13.5px] font-light tracking-wide text-gray-400">
                        Take the time to review their portfolio and the quality of their work to ensure it meets your expectations.
                    </p>
                </div>
            </div>


            <!-- Card 3 -->

        </div>

        <div class="lg:mt-16 max-sm:space-y-5">
            <!-- Card 4 -->
            <div id="mobile-tilt4-animation-container">
                <div class="glass-dark  lg:m-6 max-sm:text-justify border border-gray-900 rounded-3xl p-7 max-w-[450px] w-full bg-black" id="mobile-tilt4-animation-section">
                    <div class="text-gray-300 text-3xl mb-4">
                        <img src="new-icons/solution.png" class="w-12 mb-3" alt="">
                        <h2 class="text-[20px] lg:text-[22px] leading-[1.15] mt-2 font-[400] text-white ">Cost-Effectiveness</h2>
                    </div>
                    <p class="text-[13.5px] font-light tracking-wide text-gray-400">
                        While dynamic website development may require a more initial investment than static website development.
                    </p>
                </div>
            </div>


            <!-- Card 6 -->
            <div id="mobile-tilt3-animation-container">
                <div class="glass-dark  lg:m-6 max-sm:text-justify border border-gray-900 rounded-3xl p-7 max-w-[450px] w-full bg-black" id="mobile-tilt3-animation-section">
                    <div class="text-gray-300 text-3xl mb-4">
                        <img src="new-icons/optimization.png" class="w-12 mb-3" alt="">
                        <h2 class="text-[20px] lg:text-[22px] leading-[1.15] mt-2 font-[400] text-white ">Assistance and Service</h2>
                    </div>
                    <p class="text-[13.5px] font-light tracking-wide text-gray-400">
                        Long-term success depends on continuous feature enhancement and post-deployment support.
                    </p>
                </div>
            </div>

        </div>
    </div>

</div>


<!-- For mobile version -->

<script>
    // Split by words and chars (characters nested in words)
    const mobile_splitText = new SplitType("#reveal-text", {
        types: "words, chars"
    });

    // Ensure full words stay together (avoid word breaking)
    mobile_splitText.words.forEach(word => {
        word.style.display = "inline-block";
        word.style.whiteSpace = "nowrap";
    });

    // Animate each character with blur + opacity
    gsap.fromTo(
        mobile_splitText.chars, {
            opacity: 0,
            // y: 20,
            filter: "blur(4px)"
        }, {
            opacity: 1,
            y: 0,
            filter: "blur(0px)",
            stagger: 0.02,
            ease: "power4.out",
            scrollTrigger: {
                trigger: "#pinned-text-section",
                start: "top 70%",
                end: "top 5%",
                // end: "+=2000",
                scrub: 1.2,
                // pin: true,
                anticipatePin: 1,
            }
        }
    );
</script>
<script>
    gsap.registerPlugin(ScrollTrigger);

    const mobile_cards = [{
            id: "#mobile-tilta1-animation-section",
            container: "#mobile-tilta1-animation-container",
            x: 400,
            rotateZ: 50
        },
        {
            id: "#mobile-tilt1-animation-section",
            container: "#mobile-tilt1-animation-container",
            x: -400,
            rotateZ: -50
        },
        {
            id: "#mobile-tilt2-animation-section",
            container: "#mobile-tilt2-animation-container",
            x: 400,
            rotateZ: 50
        },
        {
            id: "#mobile-tilt3-animation-section",
            container: "#mobile-tilt3-animation-container",
            x: -400,
            rotateZ: -50
        },
        {
            id: "#mobile-tilt4-animation-section",
            container: "#mobile-tilt4-animation-container",
            x: 400,
            rotateZ: 50
        },
        {
            id: "#mobile-tilt5-animation-section",
            container: "#mobile-tilt5-animation-container",
            x: -400,
            rotateZ: -50
        },
        {
            id: "#mobile-tilt6-animation-section",
            container: "#mobile-tilt6-animation-container",
            x: 400,
            rotateZ: 50
        },
    ];

    mobile_cards.forEach(({
        id,
        container,
        x,
        rotateZ
    }) => {
        gsap.fromTo(id, {
            x,
            y: 300,
            rotateZ,
            opacity: 0.3
        }, {
            x: 0,
            y: 0,
            rotateZ: 0,
            opacity: 1,
            ease: "none",
            scrollTrigger: {
                trigger: container,
                start: "top bottom",
                end: "top center",
                scrub: 1,
                markers: false
            }
        });
    });
</script>


<!-- FOR MOBILE -->
<!-- <div class="lg:!py-16 py-10 px-4  mx-auto bg-gray-50 lg:px-14 lg:hidden block">
    <h2 class="text-[25px] lg:text-[38px] max-w-[600px] mx-auto text-center leading-[1.05] font-[400]">
        Why choose us <br> for <span class="text-red-600">web development</span>?
    </h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mt-10">

        <div class="lg:m-6 max-sm:text-justify lg:border-r lg:pr-10">
            <div class=" text-gray-300 text-3xl mb-4">
                <img src="new-icons/expert.png" class="w-12 mb-3" alt="">
                <h2 class="text-[20px] lg:text-[22px] leading-[1.15] mt-2 font-[400] text-[#242424]">Expertise that Matters</h2>
            </div>
            <p class=" text-[13.5px] font-light tracking-wide text-gray-600">
                Having years of experience in web development, our team as a web design agency is competent in both frontend and backend solutions. Being a top web development company, we promise that your website is up-to-date and future-ready. You might depend on our web design company and our web designers in Mumbai to build a website that meets your needs now and stays current with new trends.
            </p>
        </div>

        <div class="lg:m-6 max-sm:text-justify lg:border-r lg:pr-10">
            <div class=" text-gray-300 text-3xl mb-4">
                <img src="new-icons/solution.png" class="w-12 mb-3" alt="">
                <h2 class="text-[20px] lg:text-[22px] leading-[1.15] mt-2 font-[400] text-[#242424]">Tailored Solutions</h2>
            </div>
            <p class=" text-[13.5px] font-light tracking-wide text-gray-600">
                Our web design company understands that every business is unique and needs customised ideas. We do not apply one-size-fits-all tactics as a top web development and design agency in Mumbai. We must determine your target demographic and company goals in order to create a distinctive website that complements your brand and effectively engages your audience.
            </p>
        </div>

        <div class="lg:m-6 max-sm:text-justify ">
            <div class=" text-gray-300 text-3xl mb-4">
                <img src="new-icons/responsive.png" class="w-12 mb-3" alt="">
                <h2 class="text-[20px] lg:text-[22px] leading-[1.15] mt-2 font-[400] text-[#242424]">Responsive Design</h2>
            </div>
            <p class=" text-[13.5px] font-light tracking-wide text-gray-600">
                A web design agency is aware that reactive design counts in the multi-device world of today. As a top web development company, we and our web designers in Mumbai ensure that our websites work flawlessly on all screen sizes. Whether seen on a desktop, tablet, or smartphone, your website will offer the optimal viewing experience, increasing consumer happiness wherever it is viewed.
            </p>
        </div>

        <div class="lg:m-6 max-sm:text-justify lg:border-r lg:pr-10">
            <div class=" text-gray-300 text-3xl mb-4">
                <img src="new-icons/optimization.png" class="w-12 mb-3" alt="">
                <h2 class="text-[20px] lg:text-[22px] leading-[1.15] mt-2 font-[400] text-[#242424]">Performance Optimization</h2>
            </div>
            <p class=" text-[13.5px] font-light tracking-wide text-gray-600">
                A slow-loading website can negatively impact both user experience and search engine rankings. As a leading website design company and web design agency, we focus on making every image and line of code on your website as effective and quick to load as possible. Throughout the web construction process, performance is prioritised to provide your users with an ideal experience.
            </p>
        </div>

        <div class="lg:m-6 max-sm:text-justify lg:border-r lg:pr-10">
            <div class=" text-gray-300 text-3xl mb-4">
                <img src="new-icons/security.png" class="w-12 mb-3" alt="">
                <h2 class="text-[20px] lg:text-[22px] leading-[1.15] mt-2 font-[400] text-[#242424]">Security First</h2>
            </div>
            <p class=" text-[13.5px] font-light tracking-wide text-gray-600">
                As a web design agency, our first concern at our web development company is website security. We developed powerful security measures, like SSL certificates and regular security audits, to safeguard your data and your users' information. Our team goes above and beyond to ensure that your website is safe from online threats, so you can rest easy.
            </p>
        </div>

        <div class="lg:m-6 max-sm:text-justify ">
            <div class=" text-gray-300 text-3xl mb-4">
                <img src="new-icons/scalability.png" class="w-12 mb-3" alt="">
                <h2 class="text-[20px] lg:text-[22px] leading-[1.15] mt-2 font-[400] text-[#242424]">Scalability for the Future</h2>
            </div>
            <p class=" text-[13.5px] font-light tracking-wide text-gray-600">
                As a web design agency, scalability is a top consideration when creating a website. Your website will grow with your company, easily accommodating additional features and visitors. Our development process ensures that your website grows with your business, providing a smooth and productive experience as you expand.
            </p>
        </div>

    </div>
</div> -->