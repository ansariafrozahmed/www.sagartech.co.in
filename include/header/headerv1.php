<!-- Responsive Header -->
<?php include("include/config.php") ?>
<?php
$currentUrl = basename($_SERVER['REQUEST_URI']);
?>
<div class="max-w-[1500px] w-full mx-auto px-4 md:px-10 lg:px-12 py-6 flex items-center justify-between">
    <!-- Logo -->
    <div class="w-1/2 md:w-[30%]">
        <a href="<?= WEB_URL ?>" class="block h-9">
            <img src="./images/sagartech1.webp" class="h-full w-auto object-contain" alt="SagarTech Logo" />
        </a>
    </div>

    <!-- Hamburger Button (Mobile) -->
    <div class="lg:hidden">
        <button id="menuToggle" class="text-[#242424] focus:outline-none">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>

    <!-- Desktop Nav -->
    <div class="hidden lg:flex w-[70%] font-light items-center justify-end gap-6">

        <?php
        $navItems = [
            ["name" => "Home", "href" => "newhome", "children" => []],
            ["name" => "Services", "href" => "services", "children" => []],
            [
                "name" => "Our Products",
                "href" => "#",
                "children" => [
                    ["name" => "Siyahfy", "img" => "product-images/siyahfy-logo11.png", "href" => "our-products/siyahfy"],
                    ["name" => "Chillinote", "img" => "product-images/chillinote-logo1.png", "href" => "our-products/project-management-software-in-india"],
                    ["name" => "Wonestop", "img" => "product-images/wonestop.png", "href" => "our-products/bulk-whatsapp-api-marketing-software-in-india"],
                    ["name" => "Tappify", "img" => "product-images/tappify.png", "href" => "our-products/nfc-digital-business-cards-in-india"],
                ]
            ],
            ["name" => "Portfolio", "href" => "portfolio", "children" => []],
            ["name" => "About Us", "href" => "about", "children" => []],
            ["name" => "Contact Us", "href" => "contact", "children" => []],
            ["name" => "Career", "href" => "career", "children" => []],
            ["name" => "Blogs", "href" => "blogs", "children" => []]
        ];


        foreach ($navItems as $item): ?>
            <div class="relative group">
                <a href="<?= WEB_URL . $item['href'] ?>"
                    class="text-sm tracking-wider overflow-hidden group inline-flex items-center gap-1 relative <?= ($item['href'] === $currentUrl || in_array($currentUrl, array_column($item['children'], 'href'))) ? 'text-[#ff0808]' : '' ?>">

                    <span class="block transition-transform duration-500 group-hover:-translate-y-full">
                        <?= $item['name'] ?>
                    </span>
                    <span
                        class="block absolute top-full left-0 transition-transform duration-500 group-hover:-translate-y-full
         <?= ($item['href'] === $currentUrl || in_array($currentUrl, array_column($item['children'], 'href'))) ? '' : 'text-[#ff0808]' ?>">
                        <?= $item['name'] ?>
                    </span>

                    <?php if (!empty($item['children'])): ?>
                        <!-- Chevron Down Icon -->
                        <svg class="w-4 h-4 ml-1  text-gray-500 group-hover:rotate-180 transition-transform duration-300"
                            fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    <?php endif; ?>
                </a>

                <?php if (!empty($item['children'])): ?>
                    <div
                        class="absolute -left-10  top-4 mt-2 bg-white rounded-md shadow-lg pt-3 p-2 z-50 min-w-[200px] hidden group-hover:block group-focus-within:block">
                        <?php foreach ($item['children'] as $child): ?>
                            <a href="<?= WEB_URL . $child['href'] ?>"
                                class="flex items-center gap-3 px-2 py-2 rounded-md text-sm font-light tracking-wide hover:bg-gray-100 transition-colors duration-200">
                                <img src="<?= WEB_URL . $child['img'] ?>" alt="<?= $child['name'] ?>"
                                    class="w-5 h-5 object-contain" />
                                <span><?= $child['name'] ?></span>
                            </a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

            </div>

        <?php endforeach; ?>
    </div>
</div>

<!-- Mobile Nav Menu -->
<div id="mobileDrawer"
    class="fixed top-0 left-0 w-[80%] md:w-[40%] lg:w-[20%] h-full bg-white shadow-lg z-40 transform -translate-x-full transition-transform duration-300">
    <div class="px-4 py-6 space-y-6">
        <div class="flex items-center justify-between">
            <div class="h-9">
                <img src="./images/sagartech1.webp" class="h-full w-auto object-contain" alt="SagarTech Logo" />
            </div>
            <button id="closeDrawer" class="text-[#242424] text-xl">&times;</button>
        </div>
        <hr>

        <?php foreach ($navItems as $index => $item): ?>
            <div class="">
                <div class="flex items-center justify-between">
                    <a href="<?= WEB_URL . $item['href'] ?>"
                        class="block text-sm font-light tracking-wide text-gray-800 hover:text-red-500">
                        <?= $item['name'] ?>
                    </a>

                    <?php if (!empty($item['children'])): ?>
                        <button class="text-sm text-gray-700" onclick="toggleSubmenu('submenu<?= $index ?>')">
                            <svg class="w-4 h-4 ml-1  text-gray-500 group-hover:rotate-180 transition-transform duration-300"
                                fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                    <?php endif; ?>
                </div>

                <?php if (!empty($item['children'])): ?>
                    <div id="submenu<?= $index ?>" class="mt-2 space-y-1 hidden">
                        <?php foreach ($item['children'] as $child): ?>
                            <a href="<?= WEB_URL . $child['href'] ?>"
                                class="flex items-center gap-3 px-2 py-2 rounded-md text-sm font-light tracking-wide hover:bg-gray-100 transition-colors duration-200">
                                <img src="<?= WEB_URL . $child['img'] ?>" alt="<?= $child['name'] ?>"
                                    class="w-5 h-5 object-contain" />
                                <span><?= $child['name'] ?></span>
                            </a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
</div>


<!-- Overlay -->
<div id="drawerOverlay" class="fixed inset-0 bg-black bg-opacity-40 z-30 hidden"></div>

<!-- Toggle Script -->
<script>
    const menuToggle = document.getElementById('menuToggle');
    const mobileDrawer = document.getElementById('mobileDrawer');
    const drawerOverlay = document.getElementById('drawerOverlay');
    const closeDrawer = document.getElementById('closeDrawer');

    function toggleSubmenu(id) {
        const el = document.getElementById(id);
        if (el.classList.contains("hidden")) {
            el.classList.remove("hidden");
        } else {
            el.classList.add("hidden");
        }
    }

    document.getElementById("menuToggle")?.addEventListener("click", () => {
        document.getElementById("mobileDrawer").classList.remove("-translate-x-full");
    });
    document.getElementById("closeDrawer")?.addEventListener("click", () => {
        document.getElementById("mobileDrawer").classList.add("-translate-x-full");
    });

    menuToggle.addEventListener('click', () => {
        mobileDrawer.classList.remove('-translate-x-full');
        drawerOverlay.classList.remove('hidden');
    });

    closeDrawer.addEventListener('click', () => {
        mobileDrawer.classList.add('-translate-x-full');
        drawerOverlay.classList.add('hidden');
    });

    drawerOverlay.addEventListener('click', () => {
        mobileDrawer.classList.add('-translate-x-full');
        drawerOverlay.classList.add('hidden');
    });
</script>