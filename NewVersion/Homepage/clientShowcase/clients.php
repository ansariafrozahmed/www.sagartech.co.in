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
        <div>
            <span class="text-sm pb-2 inline-block px-1 tracking-wide rounded-3xl text-[#ff0808] font-normal client-heading">Our Clients Who Shine</span>
            <h3 class="text-5xl md:text-7xl lg:text-8xl figtreeHeading leading-none uppercase font-black text-[#28282B] client-heading">Our</h3>
            <h3 class="text-5xl md:text-7xl lg:text-8xl figtreeHeading leading-none uppercase font-black text-[#28282B] client-heading">Clients</h3>
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