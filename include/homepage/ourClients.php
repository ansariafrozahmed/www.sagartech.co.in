<style>

</style>

<div class="max-w-[1500px] space-y-8 mx-auto px-5 pb-10 md:px-10 md:pb-12 lg:px-14 lg:pb-24">
    <h3 class="text-[28px] text-center lg:text-[36px] leading-[1.15] font-[400] text-[#242424]">
        Our Clients
    </h3>

    <div class="grid grid-cols-7 gap-4">
        <?php
        $imageUrls = [
            "client-logos/Thaiger.png",
            "client-logos/educ4ate.webp",
            "client-logos/dontquit.png",
            "client-logos/verify8-1.png",
            "client-logos/syrocs logo.webp",
            "client-logos/axxio-laboratory.webp",
            "client-logos/yovant_recruitment_logo.webp",
            "client-logos/varela-american logo.webp",
            "client-logos/processindia.webp",
            "client-logos/saudiwells.png",
            "client-logos/BARKAT AL DUHA logo.webp",
            "client-logos/alsalama.png",
            "client-logos/CLASSIC TOURS AND TRAVELS logo.webp",
            "client-logos/Mithiyaj Logo.webp",
        ];

        foreach ($imageUrls as $imageUrl) {
            echo '<div style="box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;border-radius:0px" class="aspect-square flex items-center justify-center p-2">';
            echo '<img src="' . $imageUrl . '" alt="Client Logos" title="Client Logos">';
            echo '</div>';
        }
        ?>
    </div>

    <div>
        <button
            class="relative py-2 px-8 text-black text-base font-light nded-full overflow-hidden bg-white rounded-full transition-all duration-400 ease-in-out shadow-md hover:scale-105 hover:text-white hover:shadow-lg active:scale-90 before:absolute before:top-0 before:-left-full before:w-full before:h-full before:bg-gradient-to-r before:from-blue-500 before:to-blue-300 before:transition-all before:duration-500 before:ease-in-out before:z-[-1] before:rounded-full hover:before:left-0">
            View all
        </button>

    </div>

</div>