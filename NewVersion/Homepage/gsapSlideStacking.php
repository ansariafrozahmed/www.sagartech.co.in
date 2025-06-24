<style>
    .section {
        overflow: hidden;
    }

    .wrapper {
        height: 100vh;
    }

    .list {
        justify-content: flex-start;
        align-items: center;
        height: 100%;
        display: flex;
        position: relative;
        padding: 0.2rem;
    }

    .item {
        width: 100vw;
        height: 100%;
        display: flex;
        position: absolute;
        inset: 0%;
        overflow: hidden;
    }
</style>

<main class="main-wrapper bg-white">
    <div class="container mx-auto px-4 md:px-8 lg:px-0 flex flex-col md:flex-row md:items-end md:justify-between gap-6 pt-12 pb-6 md:py-12">
        <div class="space-y-1">
            <span class="text-sm inline-block px-1 tracking-wide rounded-3xl text-[#ff0808] font-normal">Portfolio</span>
            <h2 class="text-5xl font-medium text-[#28282B]">Our <span class="text-[#28282B]">Amazing Work</span></h2>
        </div>
        <button class="flex items-center px-1 transition-all ease-in-out duration-200 text-[#28282B] hover:gap-2 text-sm hover:underline underline-offset-4 font-light gap-3">
            View more
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-move-right-icon lucide-move-right">
                <path d="M18 8L22 12L18 16" />
                <path d="M2 12H22" />
            </svg>
        </button>
    </div>

    <div class="scroll-section vertical-section section">
        <div class="wrapper">
            <div role="list" class="list">
                <div role="listitem" class="item">
                    <div class=" h-screen w-full">
                        <video class="lazy-video" preload="none" loop muted playsinline class="h-full w-full object-cover">
                            <source src="<?php WEB_URL ?>video/home/mobile4.mp4" type="video/mp4" loading="lazy" media="(max-width: 768px)">
                            <source src="<?php WEB_URL ?>video/home/desktop4.mp4" type="video/mp4" loading="lazy" media="(min-width: 769px)">
                        </video>
                    </div>
                </div>
                <div role="listitem" class="item">
                    <div class=" h-screen w-full">
                        <video class="lazy-video" preload="none" loop muted playsinline class="h-full w-full object-cover">
                            <source src="<?php WEB_URL ?>video/home/mobile2.mp4" type="video/mp4" loading="lazy" media="(max-width: 768px)">
                            <source src="<?php WEB_URL ?>video/home/desktop2.mp4" type="video/mp4" loading="lazy" media="(min-width: 769px)">
                        </video>
                    </div>
                </div>
                <div role="listitem" class="item">
                    <div class=" h-screen w-full">
                        <video class="lazy-video" preload="none" loop muted playsinline class="h-full w-full object-cover">
                            <source src="<?php WEB_URL ?>video/home/mobile3.mp4" type="video/mp4" loading="lazy" media="(max-width: 768px)">
                            <source src="<?php WEB_URL ?>video/home/desktop3.mp4" type="video/mp4" loading="lazy" media="(min-width: 769px)">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>