
<?php include "include/config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {},
            },
            plugins: [
                require('@tailwindcss/line-clamp')
            ]
        }
    </script>
    <title>Portfolio</title>
</head>
<body>
    <?php
    $page = 'about';
    include("include/newHeader.php");
    ?>
    <div class="md:px-16 pb-10">
        <div class="">
            <h1 id="animatedHeading" class="text-4xl md:block hidden font-medium text-center px-5 mt-7">
                Creating Next Level Digital Products
            </h1>
            <h1 id="" class="text-3xl md:hidden block  font-medium text-center px-5 mt-7">
                Creating Next Level Digital Products
            </h1>
        </div>
        <div class="flex md:flex-row flex-col justify-between">
            <div class="md:w-[20%] w-full p-5 md:sticky md:top-24 bg-white top-16 h-full">
                <div class="flex justify-between items-center">
                    <h4 class="font-medium">Filter</h4>
                    <button class="border px-2 text-[13px] rounded-[5px] hover:shadow-sm bg-gradient-to-t from-gray-200 transition-all duration-300 hover:from-gray-300 clear-button">Clear</button>
                </div>
                <div class="">
                    <div class="relative w-full max-w-sm mt-4">
                        <div class="relative">
                            <label for="service" class="absolute -top-2 text-xs bg-white left-3 px-1 mb-1 font-medium text-gray-700">Select a Service</label>
                            <input
                                type="text"
                                id="serviceInput"
                                placeholder="Choose a service..."
                                class="w-full border border-gray-300 rounded-md px-4 py-2 text-sm focus:outline-none"
                                oninput="filterServices()"
                                onclick="toggleDropdown()"
                            />
                        </div>
                        <ul id="serviceList" class="absolute z-10 w-full border border-gray-300 rounded-md mt-1 bg-white hidden max-h-40 overflow-y-auto shadow">
                            <li class="px-4 py-2 cursor-pointer hover:bg-gray-100 text-sm text-gray-700" onclick="selectService(this)">Web Development</li>
                            <li class="px-4 py-2 cursor-pointer hover:bg-gray-100 text-sm text-gray-700" onclick="selectService(this)">App Development</li>
                            <li class="px-4 py-2 cursor-pointer hover:bg-gray-100 text-sm text-gray-700" onclick="selectService(this)">SEO</li>
                            <li class="px-4 py-2 cursor-pointer hover:bg-gray-100 text-sm text-gray-700" onclick="selectService(this)">Logo Design</li>
                            <li class="px-4 py-2 cursor-pointer hover:bg-gray-100 text-sm text-gray-700" onclick="selectService(this)">Banner Design</li>
                            <li class="px-4 py-2 cursor-pointer hover:bg-gray-100 text-sm text-gray-700" onclick="selectService(this)">Brochure Design</li>
                            <li class="px-4 py-2 cursor-pointer hover:bg-gray-100 text-sm text-gray-700" onclick="selectService(this)">Social Media Post</li>
                        </ul>
                    </div>
                    <div class="relative w-full max-w-sm mt-6">
                        <div class="relative">
                            <label for="projectType" class="absolute -top-2 text-xs bg-white left-3 px-1 font-medium text-gray-700">
                                Select Project Type
                            </label>
                            <input
                                type="text"
                                id="projectTypeInput"
                                placeholder="Choose project type..."
                                class="w-full border border-gray-300 rounded-md px-4 py-2 text-sm focus:outline-none"
                                oninput="filterProjectTypes()"
                                onclick="toggleProjectTypeDropdown()"
                            />
                        </div>
                        <ul
                            id="projectTypeList"
                            class="absolute z-10 w-full border border-gray-300 rounded-md mt-1 bg-white hidden max-h-40 overflow-y-auto shadow"
                        >
                            <!-- Dynamically populated -->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="md:w-[80%] w-full p-3">
                <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 place-items-center gap-4" id="portfolioContainer">
                </div>
            </div>
        </div>
    </div>

    <!-- Popup Modal -->
    <div id="projectPopup" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-[500] hidden">
        <div class="bg-white rounded-lg max-w-6xl w-full mx-4 md:mx-0 p-6 relative max-h-[90vh] overflow-y-auto">
            <button id="closePopup" class="absolute top-4 right-4 text-gray-500 hover:text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <div class="flex flex-col md:flex-row items-start gap-5">
                <div class="w-full md:w-[30%]">
                    <div class="flex items-center gap-2">
                        <h2 id="popupTitle" class="text-xl md:text-2xl font-semibold text-gray-800"></h2>
                        <a id="popupLink" href="#" class="inline-block text-blue-500 hover:text-blue-700"><i class="fa-solid fa-link"></i></a>
                    </div>
                    <div id="popupDescription" class="text-gray-600 text-sm mt-4"></div>
                </div>
                <div class="w-full md:w-[70%] h-64 md:h-[60vh] overflow-y-scroll scrollbar-auto">
                    <img id="popupImage" src="" alt="Project Image" class="w-full object-top rounded-md" />
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script>
        // Service to project type mapping
        const serviceProjectTypes = {
            "Web Development": [
                "Business", "Builders", "Catalogue", "Logistics", "Ecommerce",
                "Education", "Restaurants", "Trust & Properties", "Travels",
                "Interior Designer", "Health Care", "Human Resource"
            ],
            // "App Development": [
            //     "No types available"
            // ],
            "SEO": [
                "Armaf", "BS Auto","Seal Excel", "Noor Al Salama", "Go Classic Tour", "Cotton Culture"
            ],
            // "Logo Design": [
            //     "Branding", "Corporate", "Minimalist", "Illustrative"
            // ],
            // "Banner Design": [
            //     "Digital Ads", "Social Media", "Print Media"
            // ],
            // "Brochure Design": [
            //     "Corporate", "Product", "Event"
            // ],
            "Social Media Post": [
                "Engagement", "Promotional", "Informational"
            ]
        };

        // Animate heading
        function splitTextByChar(el) {
            const text = el.innerHTML;
            const characters = text
                .replace(/<br\s*\/?>/g, "<br>")
                .split("")
                .map(char => {
                    if (char === " ") return `<span class="inline-block w-[0.25em]"> </span>`;
                    if (char === "<") return char;
                    return `<span class="inline-block char">${char}</span>`;
                }).join("");
            el.innerHTML = characters;
        }

        const heading = document.getElementById("animatedHeading");
        splitTextByChar(heading);

        gsap.from("#animatedHeading .char", {
            y: 50,
            opacity: 0,
            duration: 0.6,
            ease: "power3.out",
            stagger: 0.03
        });

        // Service filter dropdown
        function toggleDropdown() {
            document.getElementById("serviceList").classList.toggle("hidden");
        }

        function selectService(item) {
            const service = item.innerText;
            document.getElementById("serviceInput").value = service;
            document.getElementById("serviceList").classList.add("hidden");
            updateProjectTypeList(service);
            filterCards();
        }

        function filterServices() {
            const input = document.getElementById("serviceInput").value.toLowerCase();
            const items = document.querySelectorAll("#serviceList li");
            items.forEach(item => {
                item.style.display = item.innerText.toLowerCase().includes(input) ? "block" : "none";
            });
        }

        document.addEventListener("click", function (event) {
            const dropdown = document.getElementById("serviceList");
            const input = document.getElementById("serviceInput");
            if (!input.contains(event.target) && !dropdown.contains(event.target)) {
                dropdown.classList.add("hidden");
            }
        });

        // Project type filter dropdown
        function toggleProjectTypeDropdown() {
            document.getElementById("projectTypeList").classList.toggle("hidden");
        }

        function selectProjectType(item) {
            document.getElementById("projectTypeInput").value = item.innerText;
            document.getElementById("projectTypeList").classList.add("hidden");
            filterCards();
        }

        function filterProjectTypes() {
            const input = document.getElementById("projectTypeInput").value.toLowerCase();
            const items = document.querySelectorAll("#projectTypeList li");
            items.forEach(item => {
                item.style.display = item.innerText.toLowerCase().includes(input) ? "block" : "none";
            });
        }

        document.addEventListener("click", function (event) {
            const ptInput = document.getElementById("projectTypeInput");
            const ptList = document.getElementById("projectTypeList");
            if (!ptInput.contains(event.target) && !ptList.contains(event.target)) {
                ptList.classList.add("hidden");
            }
        });

        // Update project type list based on selected service
        function updateProjectTypeList(service) {
            const projectTypeList = document.getElementById("projectTypeList");
            projectTypeList.innerHTML = ""; // Clear existing list
            const projectTypes = serviceProjectTypes[service] || [];
            if (projectTypes.length === 0) {
                projectTypeList.innerHTML = `<li class="px-4 py-2 text-sm text-gray-500">No project types available</li>`;
            } else {
                projectTypes.forEach(type => {
                    const li = document.createElement("li");
                    li.className = "px-4 py-2 cursor-pointer hover:bg-gray-100 text-sm text-gray-700";
                    li.textContent = type;
                    li.onclick = () => selectProjectType(li);
                    projectTypeList.appendChild(li);
                });
            }
            document.getElementById("projectTypeInput").value = ""; // Reset input
            projectTypeList.classList.add("hidden"); // Hide dropdown
        }

        // Portfolio items (full array should be included; using two for brevity)
        const portfolioItems = [
  {
    imgPath: "./portfolio-mockups/business/verify8.webp",
    title: "Verify8",
    service: "Web Development",
    projectType: "Business",
    project_desc:`<div>
    <p class="mb-3">Future-proof your business with Verify8 — a cutting-edge platform built on Zero Trust architecture and Secure by Design principles. Our AI-powered solutions seamlessly integrate advanced threat protection, intelligent automation, and end-to-end lifecycle services to redefine productivity and elevate your organization’s security posture.</p>
    <p>At Verify8, every access request is thoroughly vetted, ensuring a resilient foundation for your digital transformation journey. Unlock the power of trusted AI-enhanced cybersecurity and drive innovation with confidence. s seamlessly integrate advanced threat protection, intelligent automation, and end-to-end lifecycle services to redefine productivity and elevate your organization’s security posture.</p>
    </div>`,
    long_img:"./images/long-images/verify8-long-img.webp",
    web_url:"https://verify8.com/",
       bgGradientStart: "#0fb1d7", // Green color for the gradient
    bgGradientEnd: "#0fb1d7",
  },
  {
    imgPath: "./portfolio-mockups/business/dontquit.webp",
    title: "Don't Quit Ventures",
    service: "Web Development",
    projectType: "Business",
    project_desc:`<div>
    <p class="mb-3">Empower your Australian startup with Don't Quit Ventures! Our website, dont.quit.ventures, is your gateway to strategic investments and expert support tailored for innovative startups. We fuel growth in sectors like technology, healthcare, and sustainability, with a portfolio featuring success stories like Educ4te, Verify8, and Yatri.</p>
    <p>Committed to diversity and inclusion, we provide hands-on guidance to transform your groundbreaking ideas into thriving businesses. Visit our site to explore our services, read insights on startup trends, and connect with us to ignite your success. Partner with us today and turn your vision into reality!</p>
    </div>`,
    long_img:"./images/long-images/dqv-long-img.webp",
    web_url:"https://dont.quit.ventures/",
       bgGradientStart: "#fe7c02", // Green color for the gradient
    bgGradientEnd: "#fe7c02",
  },
  {
    imgPath: "./portfolio-mockups/business/alsalama.webp",
    title: "Noor Al Salama",
    service: "Web Development",
    projectType: "Business",
    project_desc:`<div>
    <p class="mb-3">Empower your Australian startup with Don't Quit Ventures! Our website, dont.quit.ventures, is your gateway to strategic investments and expert support tailored for innovative startups. We fuel growth in sectors like technology, healthcare, and sustainability, with a portfolio featuring success stories like Educ4te, Verify8, and Yatri.</p>
    <p>Committed to diversity and inclusion, we provide hands-on guidance to transform your groundbreaking ideas into thriving businesses. Visit our site to explore our services, read insights on startup trends, and connect with us to ignite your success. Partner with us today and turn your vision into reality!</p>
    </div>`,
    long_img:"./images/long-images/noor-alsalam-long-img.webp",
    web_url:"https://www.alsalamaacc.com/",
       bgGradientStart: "#dbbc7f", // Dark color for the gradient
    bgGradientEnd: "#dbbc7f"
  },
  {
    imgPath: "./portfolio-mockups/business/eva.webp",
    title: "Eva Skin",
    service: "Web Development",
    projectType: "Business",
    project_desc:`<div>
    <p class="mb-3">Empower your Australian startup with Don't Quit Ventures! Our website, dont.quit.ventures, is your gateway to strategic investments and expert support tailored for innovative startups. We fuel growth in sectors like technology, healthcare, and sustainability, with a portfolio featuring success stories like Educ4te, Verify8, and Yatri.</p>
    <p>Committed to diversity and inclusion, we provide hands-on guidance to transform your groundbreaking ideas into thriving businesses. Visit our site to explore our services, read insights on startup trends, and connect with us to ignite your success. Partner with us today and turn your vision into reality!</p>
    </div>`,
    long_img:"./images/long-images/eva-skin-long-img.webp",
    web_url:"https://eva-skin.com/",
       bgGradientStart: "#000000", // Dark color for the gradient
    bgGradientEnd: "#000000"
  },
  {
    imgPath: "./portfolio-mockups/business/yogeshprashna.webp",
    title: "Yogesh Prashna",
    service: "Web Development",
    projectType: "Business",
    long_img:"./images/long-images/verify8-long-img.webp",
    web_url:"https://www.yogueshprashna.com/",
       bgGradientStart: "#a46c59", // Dark color for the gradient
    bgGradientEnd: "#a46c59"
  },
  {
    imgPath: "./portfolio-mockups/business/dpcsaudi.webp",
    title: "DPC Saudi",
    service: "Web Development",
    projectType: "Business",
     long_img:"./images/long-images/verify8-long-img.webp",
    web_url:"https://dpcsaudi.com/",
       bgGradientStart: "#a46c59", // Dark color for the gradient
    bgGradientEnd: "#a46c59"
  },
  {
    imgPath: "./portfolio-mockups/business/saudiwells.webp",
    title: "Saudi Wells",
    service: "Web Development",
    projectType: "Business",
     long_img:"./images/long-images/verify8-long-img.webp",
    web_url:"https://saudiwells.com/#",
       bgGradientStart: "#606773", // Dark color for the gradient
    bgGradientEnd: "#606773"
  },
  {
    imgPath: "./portfolio-mockups/builders/zzconsultant.webp",
    title: "ZZ Consultants",
    service: "Web Development",
    projectType: "Builders",
     long_img:"./images/long-images/verify8-long-img.webp",
    web_url:"https://zzconsultants.com/",
      bgGradientStart: "#e53436", // Green color for the gradient
    bgGradientEnd: "#e53436"
  },
  {
    imgPath: "./portfolio-mockups/builders/cementric.webp",
    title: "Cementric",
    service: "Web Development",
    projectType: "Builders",
     long_img:"./images/long-images/verify8-long-img.webp",
    web_url:"https://www.cementric.com/",
      bgGradientStart: "#324d87", // Green color for the gradient
    bgGradientEnd: "#324d87"
  },
  {
    imgPath: "./portfolio-mockups/builders/southfield.webp",
    title: "South Field",
    service: "Web Development",
    projectType: "Builders",
     long_img:"./images/long-images/verify8-long-img.webp",
    web_url:"https://southfield.co.in/",
      bgGradientStart: "#ffb600", // Green color for the gradient
    bgGradientEnd: "#ffb600"
  },
  {
    imgPath: "./portfolio-mockups/builders/eastman_infra.webp",
    title: "Eastman Infra",
    service: "Web Development",
    projectType: "Builders",
     long_img:"./images/long-images/verify8-long-img.webp",
    web_url:"https://eastmaninfra.com/",
      bgGradientStart: "#06386b", // Green color for the gradient
    bgGradientEnd: "#06386b"
  },
  {
    imgPath: "./portfolio-mockups/interior/bareziya_arch.png",
    title: "Bareziya",
    service: "Web Development",
    projectType: "Builders",
     long_img:"./images/long-images/verify8-long-img.webp",
    web_url:"https://bareziyaarchitects.com/",
      bgGradientStart: "#33161b", // Green color for the gradient
    bgGradientEnd: "#33161b"
  },
  {
    imgPath: "./portfolio-mockups/builders/archicgreenscape.webp",
    title: "Archic Green Scape",
    service: "Web Development",
    projectType: "Builders",
     long_img:"./images/long-images/verify8-long-img.webp",
    web_url:"https://archicgreenscape.com/",
     bgGradientStart: "#e8bd6f", // Red color for the gradient
    bgGradientEnd: "#e8bd6f"
  },
  {
    imgPath: "./portfolio-mockups/builders/folksco.webp",
    title: "Folksco",
    service: "Web Development",
    projectType: "Builders",
     long_img:"./images/long-images/verify8-long-img.webp",
    web_url:"https://folksco.in/",
       bgGradientStart: "#ed7936", // Pink color for the gradient
    bgGradientEnd: "#ed7936"
  },
  {
    imgPath: "./portfolio-mockups/ecommerce/thaigerpharma.webp",
    title: "Thaiger Nutraceuticals",
    service: "Web Development",
    projectType: "Catalogue",
     long_img:"./images/long-images/verify8-long-img.webp",
    web_url:"https://thaigernutraceuticals.com/",
       bgGradientStart: "#75a7df", // Pink color for the gradient
    bgGradientEnd: "#75a7df"
  },
  {
    imgPath: "./portfolio-mockups/catalogue/kostevo.webp",
    title: "Kostevo",
    service: "Web Development",
    projectType: "Catalogue",
     long_img:"./images/long-images/verify8-long-img.webp",
    web_url:"https://kostevo.com/",
       bgGradientStart: "#ed7936", // Pink color for the gradient
    bgGradientEnd: "#ed7936"
  },
  {
    imgPath: "./portfolio-mockups/catalogue/powerplay.webp",
    title: "Powerplay",
    service: "Web Development",
    projectType: "Catalogue",
     long_img:"./images/long-images/verify8-long-img.webp",
    web_url:"https://powerplay.ae/",
       bgGradientStart: "#e72528", // Pink color for the gradient
    bgGradientEnd: "#e72528"
  },
  {
    imgPath: "./portfolio-mockups/catalogue/asrehexports.webp",
    title: "Asreh Exports",
    service: "Web Development",
    projectType: "Catalogue",
     long_img:"./images/long-images/verify8-long-img.webp",
    web_url:"https://asrehexports.com/",
       bgGradientStart: "#aa231c", // Pink color for the gradient
    bgGradientEnd: "#aa231c"
  },
  {
    imgPath: "./portfolio-mockups/catalogue/redsailexports.webp",
    title: "Redsail Exports",
    service: "Web Development",
    projectType: "Catalogue",
     long_img:"./images/long-images/verify8-long-img.webp",
    web_url:"https://redsailexports.com/",
       bgGradientStart: "#043659", // Pink color for the gradient
    bgGradientEnd: "#043659"
  },
  {
    imgPath: "./portfolio-mockups/catalogue/globalhardware.webp",
    title: "Global Hardware",
    service: "Web Development",
    projectType: "Catalogue",
     long_img:"./images/long-images/verify8-long-img.webp",
    web_url:"https://globalhardwarekw.com/",
       bgGradientStart: "#00396f", // Pink color for the gradient
    bgGradientEnd: "#00396f"
  },
  {
    imgPath: "./portfolio-mockups/logistics/bml.webp",
    title: "BML Logistics",
    service: "Web Development",
    projectType: "Logistics",
     long_img:"./images/long-images/verify8-long-img.webp",
    web_url:"https://bookmylogistic.com/",
       bgGradientStart: "#fec126", // Pink color for the gradient
    bgGradientEnd: "#fec126"
  },
  {
    imgPath: "./portfolio-mockups/business/binfinit.webp",
    title: "Binfinit",
    service: "Web Development",
    projectType: "Logistics",
     long_img:"./images/long-images/verify8-long-img.webp",
    web_url:"https://binfinit.co/",
       bgGradientStart: "#f49153", // Pink color for the gradient
    bgGradientEnd: "#f49153"
  },
  {
    imgPath: "./portfolio-mockups/logistics/adhiklogistics.webp",
    title: "Adhik Logistics",
    service: "Web Development",
    projectType: "Logistics",
     long_img:"./images/long-images/verify8-long-img.webp",
    web_url:"https://aadhiklogistics.com/",
       bgGradientStart: "#fbbd00", // Pink color for the gradient
    bgGradientEnd: "#fbbd00"
  },
  {
    imgPath: "./portfolio-mockups/logistics/amarclearing.webp",
    title: "Amar Clearing",
    service: "Web Development",
    projectType: "Logistics",
     long_img:"./images/long-images/verify8-long-img.webp",
    web_url:"https://amarclearing.com/",
       bgGradientStart: "#2b7b81", // Pink color for the gradient
    bgGradientEnd: "#2b7b81"
  },
  {
    imgPath: "./portfolio-mockups/logistics/amclogistics.webp",
    title: "AMC Logistics",
    service: "Web Development",
    projectType: "Logistics",
     long_img:"./images/long-images/verify8-long-img.webp",
    web_url:"https://www.amclogistic.com/",
       bgGradientStart: "#004f89", // Pink color for the gradient
    bgGradientEnd: "#004f89"
  },
  {
    imgPath: "./portfolio-mockups/logistics/index.webp",
    title: "Index Transport",
    service: "Web Development",
    projectType: "Logistics",
     long_img:"./images/long-images/verify8-long-img.webp",
    web_url:"https://indextransport.com/",
       bgGradientStart: "#69ac44", // Pink color for the gradient
    bgGradientEnd: "#69ac44"
  },
  {
    imgPath: "./portfolio-mockups/logistics/marsairocean.webp",
    title: "Mars Air Ocean",
    service: "Web Development",
    projectType: "Logistics",
     long_img:"./images/long-images/verify8-long-img.webp",
    web_url:"https://marsairocean.com/",
       bgGradientStart: "#fa4318", // Pink color for the gradient
    bgGradientEnd: "#fa4318"
  },
  {
    imgPath: "./portfolio-mockups/logistics/pacematters.webp",
    title: "Pace Matters",
    service: "Web Development",
    projectType: "Logistics",
     long_img:"./images/long-images/verify8-long-img.webp",
    web_url:"https://pacematters.in/",
       bgGradientStart: "#744794", // Pink color for the gradient
    bgGradientEnd: "#744794"
  },
  {
    imgPath: "./portfolio-mockups/ecommerce/trillionair.webp",
    title: "Trillionaire",
    service: "Web Development",
    projectType: "Ecommerce",
     long_img:"./images/long-images/verify8-long-img.webp",
    web_url:"https://trillionaireautoparts.com/",
       bgGradientStart: "#d12325", // Pink color for the gradient
    bgGradientEnd: "#d12325"
  },
  {
    imgPath: "./portfolio-mockups/ecommerce/cotton-culture.webp",
    title: "Cotton Culture",
    service: "Web Development",
    projectType: "Ecommerce",
     long_img:"./images/long-images/verify8-long-img.webp",
    web_url:"https://www.cottonculture.co.in/",
       bgGradientStart: "#e5322c", // Pink color for the gradient
    bgGradientEnd: "#e5322c"
  },
  {
    imgPath: "./portfolio-mockups/ecommerce/arabiantea.webp",
    title: "Arabian Tea",
    service: "Web Development",
    projectType: "Ecommerce",
     long_img:"./images/long-images/verify8-long-img.webp",
    web_url:"https://arabiantea.in/",
       bgGradientStart: "#57940f", // Pink color for the gradient
    bgGradientEnd: "#57940f"
  },
  {
    imgPath: "./portfolio-mockups/ecommerce/bsauto.webp",
    title: "BS Auto",
    service: "Web Development",
    projectType: "Ecommerce",
     long_img:"./images/long-images/verify8-long-img.webp",
    web_url:"https://bsautoaccessories.com/",
       bgGradientStart: "#3d2b99", // Pink color for the gradient
    bgGradientEnd: "#3d2b99"
  },
  {
    imgPath: "./portfolio-mockups/ecommerce/grandtruck.webp",
    title: "Grand Trunk",
    service: "Web Development",
    projectType: "Ecommerce",
     long_img:"./images/long-images/verify8-long-img.webp",
    web_url:"https://thegrandtrunk.in/",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./portfolio-mockups/ecommerce/mistleblue.webp",
    title: "Mistle Blue",
    service: "Web Development",
    projectType: "Ecommerce",
     long_img:"./images/long-images/verify8-long-img.webp",
    web_url:"https://mistleblue.com/",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./portfolio-mockups/ecommerce/newqualityware.webp",
    title: "New Quality Ware",
    service: "Web Development",
    projectType: "Ecommerce",
     long_img:"./images/long-images/verify8-long-img.webp",
    web_url:"https://newqualityware.com/",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./portfolio-mockups/education/educate.webp",
    title: "Educ4te",
    service: "Web Development",
    projectType: "Education",
     long_img:"./images/long-images/verify8-long-img.webp",
    web_url:"https://educ4te.com/",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./portfolio-mockups/education/capdiw.webp",
    title: "Capdiw",
    service: "Web Development",
    projectType: "Education",
     long_img:"./images/long-images/verify8-long-img.webp",
    web_url:"https://capdiw.in/",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./portfolio-mockups/education/euradicle.webp",
    title: "Euradicle",
    service: "Web Development",
    projectType: "Education",
     long_img:"./images/long-images/verify8-long-img.webp",
    web_url:"https://euradiclenew.com/",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./portfolio-mockups/restaurants/alnizami.webp",
    title: "Al Nizam Darbar",
    service: "Web Development",
    projectType: "Restaurants",
     long_img:"./images/long-images/verify8-long-img.webp",
    web_url:"https://alnizamidarbar.com/",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./portfolio-mockups/trust-properties/behuman.webp",
    title: "Be Human",
    service: "Web Development",
    projectType: "Trust & Properties",
     long_img:"./images/long-images/verify8-long-img.webp",
    web_url:"https://behumanfoundation.org/",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./portfolio-mockups/trust-properties/dunes.webp",
    title: "Dunes Properties",
    service: "Web Development",
    projectType: "Trust & Properties",
     long_img:"./images/long-images/verify8-long-img.webp",
    web_url:"https://dunesproperties.ae/",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./portfolio-mockups/trust-properties/kolsamohalla.webp",
    title: "Kolsa Mohalla",
    service: "Web Development",
    projectType: "Trust & Properties",
     long_img:"./images/long-images/verify8-long-img.webp",
    web_url:"https://kolsamohallamemonjamat.com/",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./portfolio-mockups/trust-properties/wecare.webp",
    title: "We Care",
    service: "Web Development",
    projectType: "Trust & Properties",
     long_img:"./images/long-images/verify8-long-img.webp",
    web_url:"https://wecarecharitable.org/",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./portfolio-mockups/travel/classic.webp",
    title: "Go Classic Tour",
    service: "Web Development",
    projectType: "Travels",
     long_img:"./images/long-images/verify8-long-img.webp",
    web_url:"https://goclassictour.com/",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./portfolio-mockups/travel/alhusaini.webp",
    title: "Al Husaini",
    service: "Web Development",
    projectType: "Travels",
     long_img:"./images/long-images/verify8-long-img.webp",
    web_url:"https://alhusainitravels.com/",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./portfolio-mockups/travel/globexmanpower.webp",
    title: "Globex Manpower Consultancy",
    service: "Web Development",
    projectType: "Travels",
     long_img:"./images/long-images/verify8-long-img.webp",
    web_url:"https://globexmanpower.com/",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./portfolio-mockups/travel/riyazint.webp",
    title: "Riyaz Travels",
    service: "Web Development",
    projectType: "Travels",
     long_img:"./images/long-images/verify8-long-img.webp",
    web_url:"https://www.riyazinternational.com/",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./portfolio-mockups/travel/zubair.webp",
    title: "Zubair Travels",
    service: "Web Development",
    projectType: "Travels",
     long_img:"./images/long-images/verify8-long-img.webp",
    web_url:"https://zubairtravels.com/",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./portfolio-mockups/interior/folksco.webp",
    title: "Folksco",
    service: "Web Development",
    projectType: "Interior Designer",
     long_img:"./images/long-images/verify8-long-img.webp",
    web_url:"https://folksco.in/",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./portfolio-mockups/interior/bareziya_arch.png",
    title: "Bareziya Architechs",
    service: "Web Development",
    projectType: "Interior Designer",
     long_img:"./images/long-images/verify8-long-img.webp",
    web_url:"https://bareziyaarchitects.com/",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./portfolio-mockups/healthcare/AXXIO.webp",
    title: "Axxio",
    service: "Web Development",
    projectType: "Health Care",
     long_img:"./images/long-images/verify8-long-img.webp",
    web_url:"https://www.axxio-laboratory.com/",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./portfolio-mockups/healthcare/syrocs.webp",
    title: "Syrocs",
    service: "Web Development",
    projectType: "Health Care",
     long_img:"./images/long-images/verify8-long-img.webp",
    web_url:"https://syrocs.com/",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./portfolio-mockups/healthcare/vcare.webp",
    title: "VCare Diagnostic",
    service: "Web Development",
    projectType: "Health Care",
     long_img:"./images/long-images/verify8-long-img.webp",
    web_url:"https://vcarediagnostic.center/",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./portfolio-mockups/healthcare/DR,ARPIT.webp",
    title: "Dr Arpit Bansal",
    service: "Web Development",
    projectType: "Health Care",
     long_img:"./images/long-images/verify8-long-img.webp",
    web_url:"https://drarpitbansal.in/",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./portfolio-mockups/humanresource/yovant-webite-mockup.webp",
    title: "Yovant Recruitment",
    service: "Web Development",
    projectType: "Human Resource",
     long_img:"./images/long-images/verify8-long-img.webp",
    web_url:"https://yovantrecruitment.com/",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./portfolio-app-development/nile.png",
    title: "Nile",
    service: "App Development",
    projectType: "",
    web_url:"https://play.google.com/store/apps/details?id=ag.nile.market.app&hl=en_IN",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./portfolio-app-development/bebigiro.png",
    title: "Bebigiro",
    service: "App Development",
    projectType: "",
    web_url:"https://play.google.com/store/apps/details?id=com.bebegiro.smash.app&hl=en_IN",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./portfolio-app-development/cotton%20culture.png",
    title: "Cotton Culture",
    service: "App Development",
    projectType: "",
    web_url:"https://play.google.com/store/apps/details?id=in.co.cottoncultureindia&hl=en_IN",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./portfolio-app-development//sahiba.png",
    title: "Sahibaan",
    service: "App Development",
    projectType: "",
    web_url:"https://play.google.com/store/apps/details?id=com.gsmash.sahibaan&hl=en_IN",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "https://sagartech.co.in/seo-mockups/SEO_Armaf_Mockup.webp",
    title: "Best Deo",
    service: "SEO",
    projectType: "Armaf",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./seo-mockups/SEO_Armaf_Mockup2.webp",
    title: "Deo for women",
    service: "SEO",
    projectType: "Armaf",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./seo-mockups/SEO_Armaf_45.webp",
    title: "Best deodrant for women in india",
    service: "SEO",
    projectType: "Armaf",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./seo-mockups/BS%20Auto1.webp",
    title: "Burgman accessories",
    service: "SEO",
    projectType: "BS Auto",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./seo-mockups/BS%20Auto.webp",
    title: "Burgman backrest",
    service: "SEO",
    projectType: "BS Auto",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./seo-mockups/SEO_BS_Auto_Mockup2.webp",
    title: "Suzuki burgman accessories",
    service: "SEO",
    projectType: "BS Auto",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./seo-mockups/BS%20Auto2.webp",
    title: "Ntorq crash guard",
    service: "SEO",
    projectType: "BS Auto",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./seo-mockups/sealexcel1.webp",
    title: "Hydraulic fittings manufacturers in india",
    service: "SEO",
    projectType: "Seal Excel",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./seo-mockups/sealexcel.webp",
    title: "Pneumatic fittings names",
    service: "SEO",
    projectType: "Seal Excel",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./seo-mockups/Alsalama.webp",
    title: "Car brake service in dammam",
    service: "SEO",
    projectType: "Noor Al Salama",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./seo-mockups/Alsalama1.webp",
    title: "Car denting service in dammam",
    service: "SEO",
    projectType: "Noor Al Salama",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./seo-mockups/Alsalama2.webp",
    title: "Car painting service in dammam",
    service: "SEO",
    projectType: "Noor Al Salama",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./seo-mockups/classictour.webp",
    title: "Hajj and umrah agency",
    service: "SEO",
    projectType: "Go Classic Tour",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./seo-mockups/classictour1.webp",
    title: "Hajj and umrah tours and travels",
    service: "SEO",
    projectType: "Go Classic Tour",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./seo-mockups/cotton%20culture.webp",
    title: "Cotton palazzo pants",
    service: "SEO",
    projectType: "Cotton Culture",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./seo-mockups/cotton%20culture1.webp",
    title: "Kurta co ord set women",
    service: "SEO",
    projectType: "Cotton Culture",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./client-logos/Capdiw.webp",
    title: "Capdiw",
    service: "Logo Design",
    projectType: "",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./client-logos/GLOBEX-LOGO.webp",
    title: "Globex",
    service: "Logo Design",
    projectType: "",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./client-logos/Eperts4Expats.webp",
    title: "Xperts4 Expats",
    service: "Logo Design",
    projectType: "",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./client-logos/Stoneart%20Logo.webp",
    title: "Stone Art",
    service: "Logo Design",
    projectType: "",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./client-logos/OasisConsulting.webp",
    title: "Oasis",
    service: "Logo Design",
    projectType: "",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./client-logos/anadesignz.webp",
    title: "Ana designz",
    service: "Logo Design",
    projectType: "",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./client-logos/Eurocorp%20Logo.webp",
    title: "Euro Corp",
    service: "Logo Design",
    projectType: "",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./client-logos/MetalTech%20portable%20cabin%20MTPC.webp",
    title: "MTPC",
    service: "Logo Design",
    projectType: "",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./client-logos/Fosher_blacktxt_logo.png",
    title: "Fosher",
    service: "Logo Design",
    projectType: "",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./client-logos/neugenz.png",
    title: "Neugenz",
    service: "Logo Design",
    projectType: "",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./client-logos/HR-Logos8-1536x375.webp",
    title: "Sagar HR",
    service: "Logo Design",
    projectType: "",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./client-logos/faiza%20Royal%20Wrist%20Logo.webp",
    title: "Faiza Royal Wrist",
    service: "Logo Design",
    projectType: "",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./client-logos/ahlid.webp",
    title: "Ahlid",
    service: "Logo Design",
    projectType: "",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./client-logos/processindia.webp",
    title: "HPI",
    service: "Logo Design",
    projectType: "",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./banner-mockups/1.webp",
    title: "Armaf",
    service: "Banner Design",
    projectType: "",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./banner-mockups/2.webp",
    title: "Armaf",
    service: "Banner Design",
    projectType: "",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./banner-mockups/3.webp",
    title: "Armaf",
    service: "Banner Design",
    projectType: "",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./banner-mockups/4.webp",
    title: "Armaf",
    service: "Banner Design",
    projectType: "",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./banner-mockups/5.webp",
    title: "Armaf",
    service: "Banner Design",
    projectType: "",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./banner-mockups/6.webp",
    title: "Armaf",
    service: "Banner Design",
    projectType: "",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./banner-mockups/8.webp",
    title: "Armaf",
    service: "Banner Design",
    projectType: "",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./banner-mockups/9.webp",
    title: "",
    service: "Banner Design",
    projectType: "",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./banner-mockups/10.webp",
    title: "",
    service: "Banner Design",
    projectType: "",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./banner-mockups/11.webp",
    title: "",
    service: "Banner Design",
    projectType: "",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./banner-mockups/12.webp",
    title: "",
    service: "Banner Design",
    projectType: "",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./banner-mockups/13.webp",
    title: "",
    service: "Banner Design",
    projectType: "",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./banner-mockups/14.webp",
    title: "",
    service: "Banner Design",
    projectType: "",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./banner-mockups/16.webp",
    title: "",
    service: "Banner Design",
    projectType: "",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./brochure/Sagar%20Tech.webp",
    title: "Sagar Tech",
    service: "Brochure Design",
    projectType: "",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./brochure/AS%20Audio.webp",
    title: "As Audio",
    service: "Brochure Design",
    projectType: "",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./brochure/Bareziya%20Architects.webp",
    title: "Bareziya Architechs",
    service: "Brochure Design",
    projectType: "",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./brochure/Binfinit.webp",
    title: "Binfinit",
    service: "Brochure Design",
    projectType: "",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./brochure/Indian%20Handicraft.webp",
    title: "Indian Handicraft",
    service: "Brochure Design",
    projectType: "",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./brochure/kostevo.webp",
    title: "Kostevo",
    service: "Brochure Design",
    projectType: "",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./brochure/Nhamo%20Toys.webp",
    title: "Hhamo Toys",
    service: "Brochure Design",
    projectType: "",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./brochure/yovant.webp",
    title: "Yovant",
    service: "Brochure Design",
    projectType: "",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./brochure/Orion.webp",
    title: "Orion",
    service: "Brochure Design",
    projectType: "",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./brochure/Globex.webp",
    title: "Globex",
    service: "Brochure Design",
    projectType: "",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./brochure/1.webp",
    title: "Euro Corp",
    service: "Brochure Design",
    projectType: "",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./brochure/2.webp",
    title: "HPF",
    service: "Brochure Design",
    projectType: "",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./brochure/5.webp",
    title: "MTPC",
    service: "Brochure Design",
    projectType: "",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./brochure/6.webp",
    title: "Capdiw",
    service: "Brochure Design",
    projectType: "",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./brochure/7.webp",
    title: "Khus Musks",
    service: "Brochure Design",
    projectType: "",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./brochure/7.webp",
    title: "Khus Musks",
    service: "Brochure Design",
    projectType: "",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./brochure/11.webp",
    title: "Mars Air Ocean",
    service: "Brochure Design",
    projectType: "",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./brochure/12.webp",
    title: "HPF",
    service: "Brochure Design",
    projectType: "",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },

];


        const portfolioGrid = document.querySelector(".grid");

        portfolioItems.forEach((item, index) => {
            const card = document.createElement("div");
            card.classList.add("portfolio-card", "relative", "bg-white", "p-3", "rounded-2xl", "overflow-hidden", "max-w-[350px]", "w-full");
            card.setAttribute("data-service", item.service);
            card.setAttribute("data-project", item.projectType);

            card.innerHTML = `
                <div class="max-w-sm w-full bg-white rounded-2xl overflow-hidden shadow-lg group hover:shadow-xl transition-shadow duration-300 border border-gray-100">
                    <div class="relative overflow-hidden p-2">
                        <img src="${item?.imgPath || './fallback-image.webp'}" alt="${item?.title}" class="w-full h-48 object-contain transform transition-transform duration-300 group-hover:scale-105" />
                    </div>
                    <div class="p-5">
                        <div class="flex items-center justify-between">
                            <h2 class="text-lg font-semibold text-gray-800 line-clamp-1">${item?.title}</h2>
                            <button class="flex items-center text-sm hover:text-red-700 text-red-500 transition view-button" data-index="${index}">
                                View
                            </button>
                        </div>
                        <div class="text-sm text-gray-500 mt-2 line-clamp-2">${item?.project_desc || 'No description available'}</div>
                    </div>
                </div>
            `;

            portfolioGrid.appendChild(card);
        });

        // Popup functionality
        const popup = document.getElementById("projectPopup");
        const popupTitle = document.getElementById("popupTitle");
        const popupImage = document.getElementById("popupImage");
        const popupDescription = document.getElementById("popupDescription");
        const popupLink = document.getElementById("popupLink");
        const closePopup = document.getElementById("closePopup");

        document.addEventListener("click", function (event) {
            if (event.target.closest(".view-button")) {
                const index = event.target.closest(".view-button").dataset.index;
                const item = portfolioItems[index];
                popupTitle.textContent = item.title;
                popupImage.src = item.long_img || './fallback-image.webp';
                popupDescription.innerHTML = item.project_desc || 'No description available';
                popupLink.href = item.web_url || '#';
                popup.classList.remove("hidden");
                gsap.from(popup.querySelector(".bg-white"), {
                    scale: 0.8,
                    opacity: 0,
                    duration: 0.3,
                    ease: "power2.out"
                });
            }
        });

        closePopup.addEventListener("click", () => {
            popup.classList.add("hidden");
        });

        popup.addEventListener("click", (event) => {
            if (event.target === popup) {
                popup.classList.add("hidden");
            }
        });

        // Filter cards
        function filterCards() {
            const selectedService = document.getElementById("serviceInput").value.toLowerCase();
            const selectedProject = document.getElementById("projectTypeInput").value.toLowerCase();

            const cards = document.querySelectorAll(".portfolio-card");

            cards.forEach(card => {
                const service = card.getAttribute("data-service").toLowerCase();
                const project = card.getAttribute("data-project").toLowerCase();

                const matchService = !selectedService || service.includes(selectedService);
                const matchProject = !selectedProject || project.includes(selectedProject);

                card.style.display = (matchService && matchProject) ? "block" : "none";
            });

            animateVisibleCards();
        }

        // Animate visible cards
        function animateVisibleCards() {
            const visibleCards = document.querySelectorAll(".portfolio:not([style*='display: none'])");
            gsap.from(visibleCards, {
                y: 40,
                opacity: 0,
                duration: 0.6,
                stagger: 0.1,
                ease: "power2.out"
            });
        }

        // Clear button
        document.querySelector(".clear-button").addEventListener("click", () => {
            document.getElementById("serviceInput").value = "";
            document.getElementById("projectTypeInput").value = "";
            updateProjectTypeList(""); // Reset project type list
            filterCards();
        });

        // Input event listeners
        document.getElementById("serviceInput").addEventListener("keydown", function(event) {
            if (event.key === "Enter") {
                filterCards();
            }
        });

        document.getElementById("projectTypeInput").addEventListener("keydown", function(event) {
            if (event.key === "Enter") {
                filterCards();
            }
        });

        document.getElementById("serviceInput").addEventListener("input", filterCards);
        document.getElementById("projectTypeInput").addEventListener("input", filterCards);

        // Initialize project type list
        updateProjectTypeList("");
    </script>
</body>
</html>
<?php
    include("include/footer.php");
?>
```