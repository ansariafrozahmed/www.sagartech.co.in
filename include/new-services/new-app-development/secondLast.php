<div class="lg:px-20 px-4 lg:py-16 py-10 bg-gray-50" id="last-container-pinned-animation">
    <h2 class="text-[28px] lg:text-[40px] leading-[1.15] max-w-[600px] lg:max-w-[700px] text-center mx-auto font-[400] text-[#242424]">
        We build <br> <span class="text-red-500">Mobile Apps</span> for many industries
    </h2>

    <div class=" grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 max-sm:place-items-center gap-3 mt-10  mx-auto" id="last-section-pinned-animation">
        <div class="h-[80px] overflow-hidden ">
            <div class=" industry-card px-6 py-2 rounded-md shadow mb-1 text-[13.5px] w-[340px] lg:max-w-[300px] h-[70px] bg-white flex justify- items-center gap-5   font-light tracking-wide text-gray-600 ">
                <img src="new-icons/ecommerce.png" class="w-10" alt="">
                Retail & eCommerce
            </div>
        </div>
        <div class="h-[80px] overflow-hidden">
            <div class=" industry-card1 px-6 py-2 rounded-md shadow mb-1 text-[13.5px] w-[340px] lg:max-w-[300px] h-[70px] bg-white flex justify- items-center gap-5   font-light tracking-wide text-gray-600 ">
                <img src="new-icons/healthcare.png" class="w-10" alt="">
                Healthcare
            </div>
        </div>
        <div class="h-[80px] overflow-hidden">
            <div class=" industry-card2 px-6 py-2 rounded-md shadow mb-1 text-[13.5px] w-[340px] lg:max-w-[300px] h-[70px] bg-white flex justify- items-center gap-5   font-light tracking-wide text-gray-600 ">
                <img src="new-icons/education.png" class="w-10" alt="">
                Education & eLearning
            </div>
        </div>
        <div class="h-[80px] overflow-hidden">
            <div class=" industry-card3 px-6 py-2 rounded-md shadow mb-1 text-[13.5px] w-[340px] lg:max-w-[300px] h-[70px] bg-white flex justify- items-center gap-5   font-light tracking-wide text-gray-600 ">
                <img src="new-icons/travel.png" class="w-10" alt="">
                Travel & Tourism
            </div>
        </div>
        <div class="h-[80px] overflow-hidden">
            <div class=" industry-card4 px-6 py-2 rounded-md shadow mb-1 text-[13.5px] w-[340px] lg:max-w-[300px] h-[70px] bg-white flex justify- items-center gap-5   font-light tracking-wide text-gray-600 ">
                <img src="new-icons/finance.png" class="w-10" alt="">
                Finance & Banking
            </div>
        </div>
        <div class="h-[80px] overflow-hidden">
            <div class=" industry-card5 px-6 py-2 rounded-md shadow mb-1 text-[13.5px] w-[340px] lg:max-w-[300px] h-[70px] bg-white flex justify- items-center gap-5   font-light tracking-wide text-gray-600 ">
                <img src="new-icons/consultant.png" class="w-10" alt="">
                Technology & Consultancy
            </div>
        </div>
        <div class="h-[80px] overflow-hidden">
            <div class=" industry-card6 px-6 py-2 rounded-md shadow mb-1 text-[13.5px] w-[340px] lg:max-w-[300px] h-[70px] bg-white flex justify- items-center gap-5   font-light tracking-wide text-gray-600 ">
                <img src="new-icons/logistics.png" class="w-10" alt="">
                Logistics & Transportation
            </div>
        </div>
        <div class="h-[80px] overflow-hidden">
            <div class=" industry-card7 px-6 py-2 rounded-md shadow mb-1 text-[13.5px] w-[340px] lg:max-w-[300px] h-[70px] bg-white flex justify- items-center gap-5   font-light tracking-wide text-gray-600 ">
                <img src="new-icons/hospitality.png" class="w-10" alt="">
                Hospitality & Entertainment
            </div>
        </div>
        <div class="h-[80px] overflow-hidden">
            <div class=" industry-card8 px-6 py-2 rounded-md shadow mb-1 text-[13.5px] w-[340px] lg:max-w-[300px] h-[70px] bg-white flex justify- items-center gap-5   font-light tracking-wide text-gray-600 ">
                <img src="new-icons/automotive.png" class="w-10" alt="">
                Automotive
            </div>
        </div>
        <div class="h-[80px] overflow-hidden">
            <div class=" industry-card9 px-6 py-2 rounded-md shadow mb-1 text-[13.5px] w-[340px] lg:max-w-[300px] h-[70px] bg-white flex justify- items-center gap-5   font-light tracking-wide text-gray-600 ">
                <img src="new-icons/sports.png" class="w-10" alt="">
                Sports
            </div>
        </div>
        <div class="h-[80px] overflow-hidden">
            <div class=" industry-card10 px-6 py-2 rounded-md shadow mb-1 text-[13.5px] w-[340px] lg:max-w-[300px] h-[70px] bg-white flex justify- items-center gap-5   font-light tracking-wide text-gray-600 ">
                <img src="new-icons/realstate.png" class="w-10" alt="">
                Real Estate
            </div>
        </div>
        <div class="h-[80px] overflow-hidden">
            <div class=" industry-card11 px-6 py-2 rounded-md shadow mb-1 text-[13.5px] w-[340px] lg:max-w-[300px] h-[70px] bg-white flex justify- items-center gap-5   font-light tracking-wide text-gray-600 ">
                <img src="new-icons/restaurant.png" class="w-10" alt="">
                Food & Beverages
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