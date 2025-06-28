<div class="lg:px-20 px-4 lg:py-16 py-10 bg-gray-50" id="last-container-pinned-animation">
    <h2 class="text-[28px] lg:text-[40px] leading-[1.15] max-w-[600px] lg:max-w-[700px] text-center mx-auto font-[400] text-[#242424]">
        We build Dynamic website for many industries
    </h2>

    <div class=" grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 max-sm:place-items-center gap-3 mt-10  mx-auto" id="last-section-pinned-animation">
        <div class="h-[80px] overflow-hidden ">
            <div class=" industry-card px-6 py-2 rounded-md shadow mb-1 text-[13.5px] w-[340px] lg:max-w-[300px] h-[70px] bg-white flex justify- items-center gap-5   font-light tracking-wide text-gray-600 ">
                <img src="new-icons/dynamic-icons/content.png" class="w-10" alt="">
                Content Management Capabilities
            </div>
        </div>
        <div class="h-[80px] overflow-hidden">
            <div class=" industry-card1 px-6 py-2 rounded-md shadow mb-1 text-[13.5px] w-[340px] lg:max-w-[300px] h-[70px] bg-white flex justify- items-center gap-5   font-light tracking-wide text-gray-600 ">
                <img src="new-icons/dynamic-icons/responsive.png" class="w-10" alt="">
                Responsive Design
            </div>
        </div>
        <div class="h-[80px] overflow-hidden">
            <div class=" industry-card2 px-6 py-2 rounded-md shadow mb-1 text-[13.5px] w-[340px] lg:max-w-[300px] h-[70px] bg-white flex justify- items-center gap-5   font-light tracking-wide text-gray-600 ">
                <img src="new-icons/dynamic-icons/database.png" class="w-10" alt="">
                Database Integration
            </div>
        </div>
        <div class="h-[80px] overflow-hidden">
            <div class=" industry-card3 px-6 py-2 rounded-md shadow mb-1 text-[13.5px] w-[340px] lg:max-w-[300px] h-[70px] bg-white flex justify- items-center gap-5   font-light tracking-wide text-gray-600 ">
                <img src="new-icons/dynamic-icons/user-auth.png" class="w-10" alt="">
                User Authentication
            </div>
        </div>
        <div class="h-[80px] overflow-hidden">
            <div class=" industry-card4 px-6 py-2 rounded-md shadow mb-1 text-[13.5px] w-[340px] lg:max-w-[300px] h-[70px] bg-white flex justify- items-center gap-5   font-light tracking-wide text-gray-600 ">
                <img src="new-icons/dynamic-icons/dynamic-content.png" class="w-10" alt="">
                Dynamic Content Generation
            </div>
        </div>
        <div class="h-[80px] overflow-hidden">
            <div class=" industry-card5 px-6 py-2 rounded-md shadow mb-1 text-[13.5px] w-[340px] lg:max-w-[300px] h-[70px] bg-white flex justify- items-center gap-5   font-light tracking-wide text-gray-600 ">
                <img src="new-icons/dynamic-icons/seo.png" class="w-10" alt="">
                Search Engine Optimization
            </div>
        </div>
        <div class="h-[80px] overflow-hidden">
            <div class=" industry-card6 px-6 py-2 rounded-md shadow mb-1 text-[13.5px] w-[340px] lg:max-w-[300px] h-[70px] bg-white flex justify- items-center gap-5   font-light tracking-wide text-gray-600 ">
                <img src="new-icons/dynamic-icons/third-party-service.png" class="w-10" alt="">
                Integration Third-Party Services
            </div>
        </div>
        <div class="h-[80px] overflow-hidden">
            <div class=" industry-card7 px-6 py-2 rounded-md shadow mb-1 text-[13.5px] w-[340px] lg:max-w-[300px] h-[70px] bg-white flex justify- items-center gap-5   font-light tracking-wide text-gray-600 ">
                <img src="new-icons/scalability-black.png" class="w-10" alt="">
                Scalability & Performance
            </div>
        </div>
        <div class="h-[80px] overflow-hidden">
            <div class=" industry-card8 px-6 py-2 rounded-md shadow mb-1 text-[13.5px] w-[340px] lg:max-w-[300px] h-[70px] bg-white flex justify- items-center gap-5   font-light tracking-wide text-gray-600 ">
                <img src="new-icons/dynamic-icons/report.png" class="w-10" alt="">
                Reporting Tools
            </div>
        </div>
        <div class="h-[80px] overflow-hidden">
            <div class=" industry-card9 px-6 py-2 rounded-md shadow mb-1 text-[13.5px] w-[340px] lg:max-w-[300px] h-[70px] bg-white flex justify- items-center gap-5   font-light tracking-wide text-gray-600 ">
                <img src="new-icons/dynamic-icons/security-feature.png" class="w-10" alt="">
                Security Features
            </div>
        </div>
        <div class="h-[80px] overflow-hidden">
            <div class=" industry-card10 px-6 py-2 rounded-md shadow mb-1 text-[13.5px] w-[340px] lg:max-w-[300px] h-[70px] bg-white flex justify- items-center gap-5   font-light tracking-wide text-gray-600 ">
                <img src="new-icons/dynamic-icons/ability-scale.png" class="w-10" alt="">
                The Ability to Scale Up
            </div>
        </div>
        <div class="h-[80px] overflow-hidden">
            <div class=" industry-card11 px-6 py-2 rounded-md shadow mb-1 text-[13.5px] w-[340px] lg:max-w-[300px] h-[70px] bg-white flex justify- items-center gap-5   font-light tracking-wide text-gray-600 ">
                <img src="new-icons/optimization-black.png" class="w-10" alt="">
                Optimization
            </div>
        </div>

    </div>
</div>

<script>
    gsap.registerPlugin(ScrollTrigger);

    const allCards = gsap.utils.toArray([
        ".industry-card",
        ".industry-card1",
        ".industry-card2",
        ".industry-card3",
        ".industry-card4",
        ".industry-card5",
        ".industry-card6",
        ".industry-card7",
        ".industry-card8",
        ".industry-card9",
        ".industry-card10",
        ".industry-card11"
    ]);

    allCards.forEach((card, index) => {
        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: "#last-container-pinned-animation",
                start: "top 50%",
                toggleActions: "play none none none",
            },
            delay: index * 0.15 // 👈 Shorter delay between cards
        });

        tl.fromTo(card, {
            y: 80,
            opacity: 0
        }, {
            y: 0,
            opacity: 1,
            duration: 0.3,
            ease: "ease-out"
        }).to(card, {
            y: -13,
            duration: 0.2,
            ease: "ease-out"
        }).to(card, {
            y: 0,
            duration: 0.25,
            ease: "ease-out"
        });
    });
</script>