    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        header,
        nav {
            overflow: visible;
        }

        header {
            opacity: 0;
            transform: translateY(-100px);
            transition: transform 0.4s cubic-bezier(0.33, 1, 0.68, 1);
            animation: slideDown 0.4s cubic-bezier(0.33, 1, 0.68, 1) 2.5s forwards;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-100px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }






        /* Services Dropdown */
        #services-dropdown {
            position: fixed;
            top: 64px;
            width: 100vw;
            left: 0;
            right: 0;
            z-index: 50;
            max-height: 0;
            overflow: hidden;
            opacity: 0;
            transform: translateY(-15px);
            background-color: white;
            color: black;
            transition: max-height 0.35s cubic-bezier(0.4, 0, 0.2, 1),
                opacity 0.3s cubic-bezier(0.4, 0, 0.2, 1),
                transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        #services-dropdown.open {
            max-height: 900px;
            opacity: 1;
            transform: translateY(0);
            overflow-y: auto;
        }

        /* Responsive font sizes for services dropdown */
        #services-dropdown h2 {
            font-size: clamp(1.5rem, 2.5vw, 1.875rem);
            color: black;
        }

        #services-dropdown h3 {
            font-size: clamp(1.125rem, 1.5vw, 1.25rem);
            color: black;
        }

        #services-dropdown ul li a {
            font-size: clamp(0.875rem, 1.2vw, 1rem);
            color: #4b5563;
        }

        #services-dropdown ul li a:hover {
            color: #1f2937;
        }

        /* Products Dropdown */
        #products-dropdown {
            max-height: 0;
            overflow: hidden;
            opacity: 0;
            transform: translateY(-10px);
            background-color: white;
            color: black;
            transition: max-height 0.3s cubic-bezier(0.4, 0, 0.2, 1),
                opacity 0.25s cubic-bezier(0.4, 0, 0.2, 1),
                transform 0.25s cubic-bezier(0.4, 0, 0.2, 1);
        }

        #products-dropdown.open {
            max-height: 450px;
            opacity: 1;
            transform: translateY(0);
        }

        #products-dropdown ul li a {
            font-size: clamp(0.875rem, 1.2vw, 1rem);
            color: #4b5563;
        }

        #products-dropdown ul li a:hover {
            background-color: #f3f4f6;
            color: #1f2937;
        }

        /* Desktop-specific styles */
        @media (min-width: 1024px) {
            #services-dropdown .container {
                padding-left: clamp(2rem, 5vw, 8rem);
                padding-right: clamp(2rem, 5vw, 8rem);
            }

            #services-dropdown .grid {
                gap: clamp(1.5rem, 3vw, 3rem);
            }

            #services-dropdown img,
            #products-dropdown img {
                width: clamp(2rem, 3vw, 2.5rem);
                height: clamp(2rem, 3vw, 2.5rem);
            }
        }

        /* Mobile-specific styles */
        @media (max-width: 1023px) {
            #nav-menu {
                flex-wrap: wrap;
                justify-content: center;
                gap: 1rem;
            }

            #services-dropdown {
                position: relative;
                width: 100%;
                left: 0;
                right: auto;
                top: 0;
                max-height: none;
                opacity: 1;
                transform: none;
                transition: none;
                background-color: white;
                color: black;
            }

            #services-dropdown.open {
                max-height: none;
            }

            #services-dropdown h2 {
                font-size: 1.5rem;
                color: black;
            }

            #services-dropdown h3 {
                font-size: 1.125rem;
                color: black;
            }

            #services-dropdown ul li a {
                font-size: 0.875rem;
                color: black;
            }

            #services-dropdown ul li a:hover {
                color: #1f2937;
            }

            #products-dropdown {
                position: relative;
                width: 100%;
                top: 0;
                max-height: none;
                opacity: 1;
                transform: none;
                transition: none;
                background-color: white;
                color: black;
            }

            #products-dropdown.open {
                max-height: none;
            }

            #products-dropdown ul li a {
                font-size: 0.875rem;
                color: black;
            }

            #products-dropdown ul li a:hover {
                background-color: #f3f4f6;
                color: #1f2937;
            }
        }

        .rotate-360 {
            transform: rotate(360deg);
            transition: transform 0.3s ease;
        }

        svg:not(.rotate-360) {
            transform: rotate(0deg);
            transition: transform 0.3s ease;
        }
    </style>

    <header class="bg-white  h-[73px] my-auto relative !z-[999999]">
        <nav class="max-w-[1500px] mx-auto px-4 sm:px-6 md:px-8 lg:px-12 py-4 flex items-center justify-between">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="#" class="flex items-center space-x-2" aria-label="Company Home">
                    <div class="h-9">
                        <img id="header-logo" src="./images/sagartech1.webp" class="h-full w-auto object-contain"
                            alt="SagarTech Logo" />
                    </div>
                </a>
            </div>
            <!-- Hamburger Menu (Mobile) -->
            <button id="mobile-menu-button" class="lg:hidden text-black hover:text-gray-600 focus:outline-none"
                aria-label="Open menu">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7">
                    </path>
                </svg>
            </button>
            <!-- Navigation desktop Links -->
            <div id="nav-menu" class="hidden lg:flex font-light tracking-wide text-sm lg:items-center lg:space-x-4 xl:space-x-6">
                <a href="/insights" class="text-black hover:text-gray-600">Home</a>
                <div class="relative" id="services-container">
                    <button id="services-button" class="text-black hover:text-gray-600 flex items-center space-x-1"
                        aria-expanded="false" aria-haspopup="true">
                        <span>Services</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <!-- Services Dropdown Menu -->
                    <div id="services-dropdown" class="bg-white shadow-lg overflow-y-auto z-50">
                        <div class="container mx-auto py-6 px-4 md:px-12 lg:px-20">
                            <div class="flex items-center py-10">
                                <!-- Heading -->
                                <h2 class="text-3xl font-semibold text-gray-800 flex items-center gap-2">
                                    What we do
                                    <span
                                        class="bg-red-500 text-white w-6 h-6 flex items-center justify-center rounded">
                                        <i class="fas fa-chevron-right text-xs"></i>
                                    </span>
                                </h2>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                                <!-- Web Development -->
                                <div>
                                    <h3 class="font-bold mb-4 flex items-center gap-2">
                                        Web Development
                                    </h3>
                                    <ul>
                                        <li class="flex items-center gap-2 py-1">
                                            <a href="#" class="text-gray-600 hover:text-gray-800">Ecommerce Website</a>
                                        </li>
                                        <li class="flex items-center gap-2 py-1">
                                            <a href="#" class="text-gray-600 hover:text-gray-800">Dynamic Website</a>
                                        </li>
                                        <li class="flex items-center gap-2 py-1">
                                            <a href="#" class="text-gray-600 hover:text-gray-800">Static Website</a>
                                        </li>
                                        <li class="flex items-center gap-2 py-1">
                                            <a href="#" class="text-gray-600 hover:text-gray-800">Blog Website</a>
                                        </li>
                                        <li class="flex items-center gap-2 py-1">
                                            <a href="#" class="text-gray-600 hover:text-gray-800">Web Hosting</a>
                                        </li>
                                        <li class="flex items-center gap-2 py-1">
                                            <a href="#" class="text-gray-600 hover:text-gray-800">Domain
                                                Registration</a>
                                        </li>
                                        <li class="flex items-center gap-2 py-1">
                                            <a href="#" class="text-gray-600 hover:text-gray-800">Website
                                                Maintenance</a>
                                        </li>
                                        <li class="flex items-center gap-2 py-1">
                                            <a href="#" class="text-gray-600 hover:text-gray-800">WordPress
                                                Development</a>
                                        </li>
                                        <li class="flex items-center gap-2 py-1">
                                            <a href="#" class="text-gray-600 hover:text-gray-800">Ecommerce Using
                                                Shopify</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Digital Marketing -->
                                <div>
                                    <h3 class="font-bold mb-4 flex items-center gap-2">
                                        Digital Marketing
                                    </h3>
                                    <ul>
                                        <li class="flex items-center gap-2 py-1">
                                            <a href="#" class="text-gray-600 hover:text-gray-800">Google Adwords</a>
                                        </li>
                                        <li class="flex items-center gap-2 py-1">
                                            <a href="#" class="text-gray-600 hover:text-gray-800">Search Engine
                                                Optimization</a>
                                        </li>
                                        <li class="flex items-center gap-2 py-1">
                                            <a href="#" class="text-gray-600 hover:text-gray-800">Local SEO</a>
                                        </li>
                                        <li class="flex items-center gap-2 py-1">
                                            <a href="#" class="text-gray-600 hover:text-gray-800">Social Media
                                                Marketing</a>
                                        </li>
                                        <li class="flex items-center gap-2 py-1">
                                            <a href="#" class="text-gray-600 hover:text-gray-800">Social Media
                                                Optimization</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Graphic Designing -->
                                <div>
                                    <h3 class="font-bold mb-4 flex items-center gap-2">
                                        Graphic Designing
                                    </h3>
                                    <ul>
                                        <li class="flex items-center gap-2 py-1">
                                            <a href="#" class="text-gray-600 hover:text-gray-800">Brand Identity</a>
                                        </li>
                                        <li class="flex items-center gap-2 py-1">
                                            <a href="#" class="text-gray-600 hover:text-gray-800">Logo Designing</a>
                                        </li>
                                        <li class="flex items-center gap-2 py-1">
                                            <a href="#" class="text-gray-600 hover:text-gray-800">Brochure Designing</a>
                                        </li>
                                        <li class="flex items-center gap-2 py-1">
                                            <a href="#" class="text-gray-600 hover:text-gray-800">Post Designing</a>
                                        </li>
                                        <li class="flex items-center gap-2 py-1">
                                            <a href="#" class="text-gray-600 hover:text-gray-800">Banner Designing</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Bulk SMS + App Development -->
                                <div>
                                    <h3 class="font-bold mb-4 flex items-center gap-2">
                                        Bulk SMS
                                    </h3>
                                    <h3 class="font-bold mb-4 flex items-center gap-2">
                                        Bulk WhatsApp
                                    </h3>
                                    <h3 class="font-bold mb-4 flex items-center gap-2">
                                        App Development
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <button id="products-button" class="text-black hover:text-gray-600 flex items-center space-x-1"
                        aria-expanded="false" aria-haspopup="true">
                        <span>Our Products</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <!-- Products Dropdown -->
                    <div id="products-dropdown" class="absolute left-0 top-9 mt-2 w-52 bg-white z-50 rounded-sm">
                        <ul class="py-2">
                            <li>
                                <a href="#" class="flex items-center gap-2 px-4 py-2 hover:bg-gray-100">
                                    Siyahfy
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center gap-2 px-4 py-2 hover:bg-gray-100">
                                    Chillinote
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center gap-2 px-4 py-2 hover:bg-gray-100">
                                    Wonestop
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center gap-2 px-4 py-2 hover:bg-gray-100">
                                    Tappify
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <a href="#" class="text-black hover:text-gray-600">Projects</a>
                <a href="#" class="text-black hover:text-gray-600">About Us</a>
                <a href="#" class="text-black hover:text-gray-600">Contact Us</a>
                <a href="#" class="text-black hover:text-gray-600">Career</a>
                <a href="#" class="text-black hover:text-gray-600">Blogs</a>
            </div>
            <div class="hidden lg:flex items-center space-x-4 relative" id="search-container">
                <!-- Search Icon Button -->
                <button id="search-toggle"
                    class="cursor-pointer rounded-full p-2 text-black hover:text-gray-600 transition focus:outline-none"
                    aria-label="Toggle search" aria-expanded="false" aria-controls="search-dropdown">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>
                <!-- Search Dropdown -->
                <div id="search-dropdown"
                    class="absolute top-[60px] right-0 p-3 bg-white rounded-lg w-[90vw] md:w-[400px] shadow border space-y-3 hidden z-50 transition-all duration-300 ease-in-out transform scale-y-0 origin-top">
                    <div
                        class="flex items-center justify-between border text-gray-700 border-gray-600 w-full rounded-lg p-2">
                        <input id="search-input" class="outline-none w-full" type="search" placeholder="Search..."
                            aria-label="Search products" />
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-search">
                            <circle cx="11" cy="11" r="8"></circle>
                            <path d="m21 21-4.3-4.3"></path>
                        </svg>
                    </div>
                    <div id="search-results" class="p-3 max-h-[300px] overflow-y-auto">
                        <div class="p-5 text-center">
                            <h2 class="text-xl font-semibold text-gray-700">Search For Products</h2>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Mobile Menu -->
        <nav id="mobile-menu"
            class="fixed inset-0 bg-white z-40 transform -translate-x-full transition-transform duration-300 ease-in-out lg:hidden"
            role="toolbar">
            <!-- Top Bar with Close Button and Logo -->
            <div class="flex items-center justify-between px-6 border-b">
                <!-- Left: Close Button -->
                <button id="close-menu-button" class="text-gray-600 flex items-center gap-2 h-12 w-12 justify-center"
                    aria-label="Close menu" aria-expanded="false">
                    <i class="fas fa-times text-2xl"></i>
                </button>
                <!-- Center: Logo -->
                <div class="h-16 w-36 flex items-center justify-center">
                    <img src="./images/sagartech1.webp" alt="Company Logo" class="h-full w-full object-contain" />
                </div>
                <!-- Right Spacer to Balance Layout -->
                <div class="h-12 w-12"></div>
            </div>
            <!-- Menu Content -->
            <div class="flex flex-col h-full pt-4 pb-8 px-6 overflow-y-auto">
                <!-- Primary Menu Items -->
                <ul class="space-y-1">
                    <!-- Home -->
                    <li>
                        <a href="/insights"
                            class="block text-gray-800 font-medium py-3 px-4 hover:bg-gray-100 rounded-lg"
                            aria-label="Home">Home</a>
                    </li>
                    <!-- Services -->
                    <li>
                        <button
                            class="submenu-button w-full flex justify-between items-center text-gray-800 font-medium py-3 px-4 hover:bg-gray-100 rounded-lg"
                            data-submenu="services" aria-expanded="false" aria-haspopup="true" aria-label="Services">
                            <span>Services</span>
                            <i class="fas fa-chevron-right mr-2"></i>
                        </button>
                        <div id="services"
                            class="submenu hidden bg-white space-y-4 absolute inset-0 text-black h-full overflow-y-auto transition-transform duration-300 ease-in-out translate-x-full">
                            <div class="flex items-center justify-between px-6 border-b">
                                <!-- Left: Back Button -->
                                <button
                                    class="text-gray-600 flex items-center gap-2 h-12 w-12 justify-center hover:text-gray-800"
                                    data-back>
                                    <i class="fas fa-chevron-left text-2xl"></i>Back
                                </button>
                                <!-- Center: Logo -->
                                <div class="h-16 w-36 flex items-center justify-center">
                                </div>
                                <!-- Right: Spacer to balance Back button -->
                                <div class="h-12 w-12"></div>
                            </div>
                            <div class="px-6">
                                <!-- Web Development -->
                                <div class="mb-8">
                                    <h3 class="font-bold text-lg mb-4 flex items-center gap-2">
                                        Web Development
                                    </h3>
                                    <ul class="space-y-1">
                                        <li><a href="#"
                                                class="block text-gray-600 hover:text-gray-800 py-2 px-4">Ecommerce
                                                Website</a></li>
                                        <li><a href="#"
                                                class="block text-gray-600 hover:text-gray-800 py-2 px-4">Dynamic
                                                Website</a></li>
                                        <li><a href="#" class="block text-gray-600 hover:text-gray-800 py-2 px-4">Static
                                                Website</a></li>
                                        <li><a href="#" class="block text-gray-600 hover:text-gray-800 py-2 px-4">Blog
                                                Website</a></li>
                                        <li><a href="#" class="block text-gray-600 hover:text-gray-800 py-2 px-4">Web
                                                Hosting</a></li>
                                        <li><a href="#" class="block text-gray-600 hover:text-gray-800 py-2 px-4">Domain
                                                Registration</a></li>
                                        <li><a href="#"
                                                class="block text-gray-600 hover:text-gray-800 py-2 px-4">Website
                                                Maintenance</a></li>
                                        <li><a href="#"
                                                class="block text-gray-600 hover:text-gray-800 py-2 px-4">WordPress
                                                Development</a></li>
                                        <li><a href="#"
                                                class="block text-gray-600 hover:text-gray-800 py-2 px-4">Ecommerce
                                                Using Shopify</a></li>
                                    </ul>
                                </div>
                                <!-- Digital Marketing -->
                                <div class="mb-8">
                                    <h3 class="font-bold text-lg mb-4 flex items-center gap-2">
                                        Digital Marketing
                                    </h3>
                                    <ul class="space-y-2">
                                        <li><a href="#" class="block text-gray-600 hover:text-gray-800 py-2 px-4">Google
                                                Adwords</a></li>
                                        <li><a href="#" class="block text-gray-600 hover:text-gray-800 py-2 px-4">Search
                                                Engine Optimization</a></li>
                                        <li><a href="#" class="block text-gray-600 hover:text-gray-800 py-2 px-4">Local
                                                SEO</a></li>
                                        <li><a href="#" class="block text-gray-600 hover:text-gray-800 py-2 px-4">Social
                                                Media Marketing</a></li>
                                        <li><a href="#" class="block text-gray-600 hover:text-gray-800 py-2 px-4">Social
                                                Media Optimization</a></li>
                                    </ul>
                                </div>
                                <!-- Graphic Designing -->
                                <div class="mb-8">
                                    <h3 class="font-bold text-lg mb-4 flex items-center gap-2">
                                        Graphic Designing
                                    </h3>
                                    <ul class="space-y-2">
                                        <li><a href="#" class="block text-gray-600 hover:text-gray-800 py-2 px-4">Brand
                                                Identity</a></li>
                                        <li><a href="#" class="block text-gray-600 hover:text-gray-800 py-2 px-4">Logo
                                                Designing</a></li>
                                        <li><a href="#"
                                                class="block text-gray-600 hover:text-gray-800 py-2 px-4">Brochure
                                                Designing</a></li>
                                        <li><a href="#" class="block text-gray-600 hover:text-gray-800 py-2 px-4">Post
                                                Designing</a></li>
                                        <li><a href="#" class="block text-gray-600 hover:text-gray-800 py-2 px-4">Banner
                                                Designing</a></li>
                                    </ul>
                                </div>
                                <!-- Bulk SMS -->
                                <div>
                                    <h3 class="font-bold text-lg mb-4 flex items-center gap-2">
                                        Bulk SMS
                                    </h3>
                                    <h3 class="font-bold text-lg mb-4 flex items-center gap-2">
                                        <img src="https://sagartech.co.in/icons/whatsappicon.png" alt="Bulk SMS"
                                            class="w-5 h-5 object-contain" />
                                        Bulk WhatsApp
                                    </h3>
                                    <h3 class="font-bold text-lg mb-4 flex items-center gap-2">
                                        <img src="https://sagartech.co.in/icons/app-development.png" alt="Bulk SMS"
                                            class="w-5 h-5 object-contain" />
                                        App Development
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- Our Products -->
                    <li>
                        <button
                            class="submenu-button w-full flex justify-between items-center text-gray-800 font-medium py-3 px-4 hover:bg-gray-100 rounded-lg"
                            data-submenu="products" aria-expanded="false" aria-haspopup="false"
                            aria-label="Our Products">
                            <span>Our Products</span>
                            <i class="fas fa-chevron-right mr-2"></i>
                        </button>
                        <div id="products"
                            class="submenu hidden bg-white space-y-4 absolute inset-0 text-black h-full overflow-y-auto transition-transform duration-300 ease-in-out translate-x-full">
                            <div class="flex items-center justify-between px-6 border-b">
                                <!-- Left: Back Button -->
                                <button
                                    class="text-gray-600 flex items-center gap-2 h-12 w-12 justify-center hover:text-gray-800"
                                    data-back>
                                    <i class="fas fa-chevron-left text-2xl"></i>Back
                                </button>
                                <!-- Center: Logo -->
                                <div class="h-16 w-36 flex items-center justify-center">
                                </div>
                                <!-- Right Spacer to Balance Layout -->
                                <div class="h-12 w-12"></div>
                            </div>
                            <div class="px-6">
                                <ul class="space-y-2">
                                    <li>
                                        <a href="#"
                                            class="flex items-center gap-2 text-gray-600 hover:text-gray-800 py-2 px-4">
                                            Siyahfy
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center gap-2 text-gray-600 hover:text-gray-800 py-2 px-4">
                                            Chillinote
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center gap-2 text-gray-600 hover:text-gray-800 py-2 px-4">
                                            Wonestop
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center gap-2 text-gray-600 hover:text-gray-800 py-2 px-4">
                                            Tappify
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <!-- Projects -->
                    <li>
                        <a href="/insights" class="block text-gray-800 font-medium py-3 px-4"
                            aria-label="Projects">Projects</a>
                    </li>
                    <!-- About Us -->
                    <li>
                        <a href="/insights" class="block text-gray-800 font-medium py-3 px-4"
                            aria-label="About Us">About Us</a>
                    </li>
                    <!-- Contact Us -->
                    <li>
                        <a href="/insights" class="block text-gray-800 font-medium py-3 px-4"
                            aria-label="Contact Us">Contact Us</a>
                    </li>
                    <!-- Career -->
                    <li>
                        <a href="/careers" class="block text-gray-800 font-medium py-3 px-4"
                            aria-label="Career">Career</a>
                    </li>
                    <!-- Blogs -->
                    <li>
                        <a href="/careers" class="block text-gray-800 font-medium py-3 px-4"
                            aria-label="Blogs">Blogs</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <script>
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const closeMenuButton = document.getElementById('close-menu-button');
        const submenuButtons = document.querySelectorAll('[data-submenu]');
        const backButtons = document.querySelectorAll('[data-back]');
        const searchToggle = document.getElementById('search-toggle');
        const searchDropdown = document.getElementById('search-dropdown');
        const searchInput = document.getElementById('search-input');
        const searchResults = document.getElementById('search-results');
        const header = document.querySelector('header');

        const dropdowns = [{
                button: document.getElementById('services-button'),
                menu: document.getElementById('services-dropdown'),
            },
            {
                button: document.getElementById('products-button'),
                menu: document.getElementById('products-dropdown'),
            },
        ];

        const menuItems = [];

        function collectMenuItems() {
            const itemMap = new Map();

            function addOrUpdateItem(text, href) {
                if (!text || !href) return;
                if (itemMap.has(text)) {
                    const existingHref = itemMap.get(text).href;
                    if (href !== '#' && existingHref === '#') {
                        itemMap.set(text, {
                            text,
                            href
                        });
                    }
                } else {
                    itemMap.set(text, {
                        text,
                        href
                    });
                }
            }

            document.querySelectorAll('#services-dropdown a').forEach(link => {
                const text = link.textContent.trim();
                const href = link.getAttribute('href');
                addOrUpdateItem(text, href);
            });

            document.querySelectorAll('#products-dropdown a').forEach(link => {
                const text = link.textContent.trim();
                const href = link.getAttribute('href');
                addOrUpdateItem(text, href);
            });

            document.querySelectorAll('#nav-menu > a').forEach(link => {
                const text = link.textContent.trim();
                const href = link.getAttribute('href');
                addOrUpdateItem(text, href);
            });

            document.querySelectorAll('#mobile-menu a').forEach(link => {
                const text = link.textContent.trim();
                const href = link.getAttribute('href');
                addOrUpdateItem(text, href);
            });

            menuItems.push(...itemMap.values());
        }

        collectMenuItems();

        function performSearch(query) {
            searchResults.innerHTML = '';
            if (!query.trim()) {
                searchResults.innerHTML = '<p class="text-gray-600 text-center">Enter a search term</p>';
                return;
            }

            const filteredItems = menuItems.filter(item =>
                item.text.toLowerCase().includes(query.toLowerCase())
            );

            if (filteredItems.length === 0) {
                searchResults.innerHTML = '<p class="text-gray-600 text-center">No results found</p>';
                return;
            }

            const ul = document.createElement('ul');
            ul.className = 'space-y-2';
            filteredItems.forEach(item => {
                const li = document.createElement('li');
                li.innerHTML = `<a href="${item.href}" class="block text-gray-700 hover:text-blue-600 py-1">${item.text}</a>`;
                ul.appendChild(li);
            });
            searchResults.appendChild(ul);
        }

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('-translate-x-full');
            document.body.classList.toggle('overflow-hidden');
            mobileMenuButton.setAttribute('aria-expanded', mobileMenu.classList.contains('-translate-x-full') ? 'false' : 'true');
        });

        closeMenuButton.addEventListener('click', () => {
            mobileMenu.classList.add('-translate-x-full');
            document.body.classList.remove('overflow-hidden');
            mobileMenuButton.setAttribute('aria-expanded', 'false');
            document.querySelectorAll('.submenu').forEach(submenu => {
                submenu.classList.add('hidden');
                submenu.classList.add('translate-x-full');
            });
            document.querySelectorAll('.submenu-button i').forEach(icon => icon.classList.remove('rotate-180'));
            submenuButtons.forEach(button => button.setAttribute('aria-expanded', 'false'));
        });

        submenuButtons.forEach(button => {
            button.addEventListener('click', () => {
                const submenuId = button.getAttribute('data-submenu');
                const submenu = document.getElementById(submenuId);
                const icon = button.querySelector('i');
                const isExpanded = button.getAttribute('aria-expanded') === 'true';

                const parentSubmenu = button.closest('.submenu') || document.querySelector('#mobile-menu > div > ul');
                const siblingSubmenus = parentSubmenu.querySelectorAll('.submenu');

                siblingSubmenus.forEach(sibling => {
                    if (sibling.id !== submenuId) {
                        sibling.classList.add('translate-x-full');
                        setTimeout(() => sibling.classList.add('hidden'), 300);
                        const siblingButton = document.querySelector(`[data-submenu="${sibling.id}"]`);
                        if (siblingButton) {
                            siblingButton.setAttribute('aria-expanded', 'false');
                            const siblingIcon = siblingButton.querySelector('i');
                            if (siblingIcon) siblingIcon.classList.remove('rotate-180');
                        }
                    }
                });

                if (submenu.classList.contains('hidden')) {
                    submenu.classList.remove('hidden');
                    setTimeout(() => submenu.classList.remove('translate-x-full'), 10);
                    if (window.innerWidth < 1024) {
                        document.body.classList.add('overflow-hidden');
                    }
                } else {
                    submenu.classList.add('translate-x-full');
                    setTimeout(() => submenu.classList.add('hidden'), 300);
                }

                button.setAttribute('aria-expanded', (!isExpanded).toString());
                if (icon) icon.classList.toggle('rotate-180');
            });
        });

        backButtons.forEach(button => {
            button.addEventListener('click', () => {
                const submenu = button.closest('.submenu');
                if (submenu) {
                    submenu.classList.add('translate-x-full');
                    setTimeout(() => submenu.classList.add('hidden'), 300);
                    const parentButton = document.querySelector(`[data-submenu="${submenu.id}"]`);
                    if (parentButton) {
                        parentButton.setAttribute('aria-expanded', 'false');
                        const icon = parentButton.querySelector('i');
                        if (icon) icon.classList.remove('rotate-180');
                    }

                    const anySubmenuOpen = Array.from(document.querySelectorAll('.submenu')).some(sub => !sub.classList.contains('hidden'));
                    if (!anySubmenuOpen && mobileMenu.classList.contains('-translate-x-full')) {
                        document.body.classList.remove('overflow-hidden');
                    }
                }
            });
        });

        function closeAllDropdowns(exceptMenu = null) {
            let anyOpen = false;
            dropdowns.forEach(({
                button,
                menu
            }) => {
                if (menu !== exceptMenu && menu) {
                    menu.classList.remove('open');
                    if (button) {
                        button.setAttribute('aria-expanded', 'false');
                        const icon = button.querySelector('svg');
                        if (icon) icon.classList.remove('rotate-360');
                    }
                } else if (menu && menu.classList.contains('open')) {
                    anyOpen = true;
                }
            });
            if (!anyOpen && window.innerWidth >= 1024) {
                document.body.classList.remove('overflow-hidden');
            }
        }

        function toggleDropdown(button, menu) {
            const isOpen = menu.classList.contains('open');
            const icon = button.querySelector('svg');
            if (!isOpen) {
                closeAllDropdowns(menu);
                menu.classList.add('open');
                button.setAttribute('aria-expanded', 'true');
                if (icon) icon.classList.add('rotate-360');
                if (window.innerWidth >= 1024) {
                    document.body.classList.add('overflow-hidden');
                }
            } else {
                menu.classList.remove('open');
                button.setAttribute('aria-expanded', 'false');
                if (icon) icon.classList.remove('rotate-360');
                if (window.innerWidth >= 1024) {
                    document.body.classList.remove('overflow-hidden');
                }
            }
        }

        dropdowns.forEach(({
            button,
            menu
        }) => {
            if (button && menu) {
                button.addEventListener('click', (e) => {
                    e.stopPropagation();
                    toggleDropdown(button, menu);
                });
            }
        });

        document.addEventListener('click', (e) => {
            if (!dropdowns.some(({
                    button,
                    menu
                }) => button?.contains(e.target) || menu?.contains(e.target))) {
                closeAllDropdowns();
            }
        });

        function toggleSearchDropdown() {
            const isOpen = searchDropdown.classList.contains('scale-y-100');
            if (isOpen) {
                searchDropdown.classList.remove('scale-y-100', 'opacity-100', 'pointer-events-auto');
                searchDropdown.classList.add('scale-y-0', 'opacity-0', 'pointer-events-none', 'hidden');
                searchToggle.setAttribute('aria-expanded', 'false');
            } else {
                searchDropdown.classList.remove('scale-y-0', 'opacity-0', 'pointer-events-none', 'hidden');
                searchDropdown.classList.add('scale-y-100', 'opacity-100', 'pointer-events-auto');
                searchToggle.setAttribute('aria-expanded', 'true');
                searchInput.focus();
            }
        }

        searchToggle.addEventListener('click', (e) => {
            e.stopPropagation();
            toggleSearchDropdown();
        });

        document.addEventListener('click', (e) => {
            const searchContainer = document.getElementById('search-container');
            if (!searchContainer?.contains(e.target) && !searchToggle.contains(e.target)) {
                searchDropdown.classList.remove('scale-y-100', 'opacity-100', 'pointer-events-auto');
                searchDropdown.classList.add('scale-y-0', 'opacity-0', 'pointer-events-none', 'hidden');
                searchToggle.setAttribute('aria-expanded', 'false');
            }
        });

        searchToggle.addEventListener('keydown', (e) => {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                toggleSearchDropdown();
            }
        });

        searchInput.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                searchDropdown.classList.remove('scale-y-100', 'opacity-100', 'pointer-events-auto');
                searchDropdown.classList.add('scale-y-0', 'opacity-0', 'pointer-events-none', 'hidden');
                searchToggle.setAttribute('aria-expanded', 'false');
                searchToggle.focus();
            }
        });

        searchInput.addEventListener('input', () => {
            performSearch(searchInput.value);
        });

        let lastScrollTop = 0;

        function handleScroll() {
            const currentScrollTop = window.scrollY || document.documentElement.scrollTop;
            const isAnyDropdownOpen = dropdowns.some(({
                menu
            }) => menu.classList.contains('open'));
            const isMobileMenuOpen = !mobileMenu.classList.contains('-translate-x-full');

            // Hide/show header based on scroll direction, unless a dropdown or mobile menu is open
            if (currentScrollTop > lastScrollTop && currentScrollTop > 100 && !isAnyDropdownOpen && !isMobileMenuOpen) {
                header.classList.add('translate-y-[-100%]');
            } else if ((currentScrollTop < lastScrollTop || isAnyDropdownOpen || isMobileMenuOpen) && currentScrollTop > 100) {
                header.classList.remove('translate-y-[-100%]');
            } else if (currentScrollTop <= 100) {
                header.classList.remove('translate-y-[-100%]');
            }

            lastScrollTop = currentScrollTop <= 0 ? 0 : currentScrollTop;
        }

        let ticking = false;
        window.addEventListener('scroll', () => {
            if (!ticking) {
                window.requestAnimationFrame(() => {
                    handleScroll();
                    ticking = false;
                });
                ticking = true;
            }
        });

        window.addEventListener('resize', () => {
            if (window.innerWidth >= 1024) {
                mobileMenu.classList.add('-translate-x-full');
                document.body.classList.remove('overflow-hidden');
                mobileMenuButton.setAttribute('aria-expanded', 'false');
                document.querySelectorAll('.submenu').forEach(submenu => {
                    submenu.classList.add('hidden');
                    submenu.classList.add('translate-x-full');
                });
                document.querySelectorAll('.submenu-button i').forEach(icon => icon.classList.remove('rotate-180'));
                submenuButtons.forEach(button => button.setAttribute('aria-expanded', 'false'));
            } else {

                closeAllDropdowns();
                document.body.classList.remove('overflow-hidden');
                dropdowns.forEach(({
                    button
                }) => {
                    if (button) {
                        button.setAttribute('aria-expanded', 'false');
                        const icon = button.querySelector('svg');
                        if (icon) icon.classList.remove('rotate-360');
                    }
                });
            }
        });
    </script>