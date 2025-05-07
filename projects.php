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
    <h1 id="animatedHeading" class="text-5xl md:block hidden font-medium text-center ml-10 mt-7">
        Creating Next Level Digital Products
    </h1>
    <div class="md:px-16 pb-10">
        <div class="">
            <h1 class="text-3xl md:hidden block font-medium text-center px-5 mt-7">
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
<div id="projectPopup" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-[500] py-5 hidden">
    <div class="bg-white rounded-lg max-w-6xl w-full mx-4 md:mx-0 p-6 relative md:max-h-[80vh] max-sm:h-full max-sm:overflow-hidden">
        <button id="closePopup" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        <div class="flex max-sm:!flex-col md:flex-row items-start gap-5" id="popupContent">
            <div class="w-full md:w-[30%]" id="work-details">
                <div class="flex items-center gap-2">
                    <h2 id="popupTitle" class="text-xl md:text-2xl font-semibold text-gray-800"></h2>
                    <a id="popupLink" href="#" class="inline-block text-blue-500 hover:text-blue-700"><i class="fa-solid fa-link"></i></a>
                </div>
                <div id="popupDescription" class="text-gray-600 text-sm mt-4"></div>
            </div>
            <div class="w-full md:w-[70%] md:h-96 max-sm:h-96 !overflow-y-scroll scrollbar-auto flex justify-center items-start" id="long-img">
                <img id="popupImage" src="" alt="Project Image" class="w-[80%] max-sm:w-full object-top rounded-md" />
            </div>
        </div>
    </div>
</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script>
        // Portfolio items
        const portfolioItems = [
  {
    imgPath: "./portfolio-mockups/business/verify8.webp",
    title: "Verify8",
    service: "Web Development",
    projectType: "Business",
    project_desc:`<div>
    <p class="mb-3">Verify8 is the result of two inspiring journeys — one starting in Mumbai in 1999 and the other in Singapore in 2021. After decades of diverse experience, both paths merged to form a powerful tech company committed to innovation. With roots in ConnectT, Verify8 specializes in digital transformation and now operates across Singapore, Australia, Southeast Asia, and New Zealand. We empower businesses with cutting-edge solutions and a passion for unlocking growth.</p>
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
    <p class="mb-3">Don't Quit Ventures is a forward-thinking venture capital firm focused on empowering Australia's startup ecosystem. We invest in unique, high-potential ideas that often struggle to find support through traditional funding channels. Our mission is to back visionary entrepreneurs with strategic capital and hands-on guidance. By nurturing innovation and resilience, we help transform ambitious concepts into successful, scalable businesses.</p>
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
    <p class="mb-3">At Noor Al Salama Auto Repair Services, customer satisfaction is at the heart of everything we do. Our mission is to deliver top-quality car services that ensure reliability, performance, and driving enjoyment — all at competitive prices. We’re dedicated to continuous improvement, sourcing guaranteed parts efficiently to provide the best value and service to our clients.</p>
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
    <p class="mb-3">Eva Life Care Clinic, founded by Dr. Aiman Munshi, offers holistic healthcare services with a client-centric approach. A certified aesthetic physician and homeopath, Dr. Munshi is one of the youngest members of the Maharashtra Council for Homeopathy. Her expertise spans Skin & Hair Care, Homeopathy, and Cupping Therapy. Backed by experience at Prince Aly Khan Hospital and mentorship from top skin specialists in South Mumbai, she brings a blend of knowledge and compassion to every treatment.</p>
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
    project_desc:`<div>
    <p class="mb-3">Prashna is a Dubai-based global freelance makeup artist certified by AOFM, one of the world's leading makeup academies. With backstage experience at major fashion events like Arab Fashion Week, Middle East Fashion Week, and Melbourne Fashion Week, the brand brings a rich blend of global styles and techniques. Prashna works with professional models, photographers, and artists, and offers services across the Middle East and internationally.</p>
    </div>`,
    long_img:"./images/long-images/yogueshprashna.webp",
    web_url:"https://www.yogueshprashna.com/",
       bgGradientStart: "#a46c59", // Dark color for the gradient
    bgGradientEnd: "#a46c59"
  },
  {
    imgPath: "./portfolio-mockups/business/dpcsaudi.webp",
    title: "DPC Saudi",
    service: "Web Development",
    projectType: "Business",
    project_desc:`<div>
    <p class="mb-3">Drilling Performance brings extensive industry experience with a strong focus on efficiency, capability, and integrity. With a future-driven approach, the company leverages advanced offshore drilling technologies to deliver reliable energy solutions. A deep commitment to safety, quality, and client satisfaction reflects the dedication of its team. Drilling Performance continues to lead with innovation and excellence in all aspects of its operations.</p>
    </div>`,
     long_img:"./images/long-images/dpcsaudi.webp",
    web_url:"https://dpcsaudi.com/",
       bgGradientStart: "#a46c59", // Dark color for the gradient
    bgGradientEnd: "#a46c59"
  },
  {
    imgPath: "./portfolio-mockups/business/saudiwells.webp",
    title: "Saudi Wells",
    service: "Web Development",
    projectType: "Business",
    project_desc:`<div>
    <p class="mb-3">Saudi Wells Technology Factory Company (SWTF), established in 2010, specializes in designing and supplying advanced equipment for the oil and gas industry. Their product range includes wellhead control panels, hydraulic power units, ESD systems, chemical injection systems, high-pressure test equipment, and more. Known for engineering expertise and field-proven technologies, SWTF offers in-house testing, reliable after-sales service, on-site support, and 24/7 troubleshooting to ensure efficient and innovative solutions.</p>
    </div>`,
     long_img:"./images/long-images/saudiwells.webp",
    web_url:"https://saudiwells.com/#",
       bgGradientStart: "#606773", // Dark color for the gradient
    bgGradientEnd: "#606773"
  },
  {
    imgPath: "./portfolio-mockups/builders/zzconsultant.webp",
    title: "ZZ Consultants",
    service: "Web Development",
    projectType: "Builders",
    project_desc:`<div>
    <p class="mb-3">ZZ Consultants is a trusted name in civil engineering and construction, known for its commitment to quality and client satisfaction. Backed by over a decade of experience, the firm offers expert services across residential, commercial, and restoration projects. Led by accredited Project Management Consultants Mr. Zainuddin Tole and Mr. Khan Ziaur Rehman, ZZ Consultants brings a multidisciplinary approach to project execution, including historic structure rehabilitation and tailored engineering solutions.</p>
    </div>`,
     long_img:"./images/long-images/zzconsultants.webp",
    web_url:"https://zzconsultants.com/",
      bgGradientStart: "#e53436", // Green color for the gradient
    bgGradientEnd: "#e53436"
  },
  {
    imgPath: "./portfolio-mockups/builders/cementric.webp",
    title: "Cementric",
    service: "Web Development",
    projectType: "Builders",
    project_desc:`<div>
    <p class="mb-3">Cementric India Pvt Ltd, established in 2018, is a leading manufacturer of decorative concrete and building materials. The company offers a wide range of cement-based products for residential, commercial, and industrial use — from indoor floors to large-scale driveways. With strong collaborations across architects, engineers, and developers, Cementric delivers high-quality concrete solutions for both new constructions and surface renovations.</p>
    </div>`,
     long_img:"./images/long-images/cementric.webp",
    web_url:"https://www.cementric.com/",
      bgGradientStart: "#324d87", // Green color for the gradient
    bgGradientEnd: "#324d87"
  },
  {
    imgPath: "./portfolio-mockups/builders/southfield.webp",
    title: "South Field",
    service: "Web Development",
    projectType: "Builders",
    project_desc:`<div>
    <p class="mb-3">South Field offers end-to-end design and build services, eliminating the need to coordinate between separate architecture and construction teams. From initial sketches to final construction, all resources — including land, manpower, and tools — are efficiently managed under one roof. With a focus on quality design, expert interior solutions, skilled professionals, and modern equipment, the company ensures seamless execution and high-standard results.

</p>
    </div>`,
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
    project_desc:`<div>
    <p class="mb-3">Eastman Infrastructure has completed over 300 projects, driven by a team of 200+ dedicated professionals. Initially focused on equipment hiring for construction — including cranes, hydras, and trailers — the company later expanded into ready-mix concrete supply and specialized in foundation engineering. Under the leadership of Founder & MD Mr. Vishal Madan, Eastman pioneered the use of piling rigs in Mumbai. Today, the company is a recognized leader in piling and ground engineering, known for its innovation and modern technology in the construction sector.</p>
    </div>`,
     long_img:"./images/long-images/eastmaninfra.webp",
    web_url:"https://eastmaninfra.com/",
      bgGradientStart: "#06386b", // Green color for the gradient
    bgGradientEnd: "#06386b"
  },
  {
    imgPath: "./portfolio-mockups/interior/bareziya_arch.png",
    title: "Bareziya",
    service: "Web Development",
    projectType: "Builders",
    project_desc:`<div>
    <p class="mb-3">Bareziya Architects, founded in 2019 by Principal Architect Afzal Iqbal, is a multidisciplinary firm specializing in architecture, interiors, landscape design, and structural engineering. The firm handles a diverse range of projects — from private villas and residences to institutional, industrial, and commercial spaces. With a design philosophy rooted in reconnecting people with nature, Bareziya emphasizes spatial efficiency, natural materials, and sustainable design. Each project is approached with a focus on both functionality and aesthetics, ensuring thoughtful, context-driven solutions tailored to scale, climate, and timeline.</p>
    </div>`,
     long_img:"./images/long-images/bareziyaarchitects.webp",
    web_url:"https://bareziyaarchitects.com/",
      bgGradientStart: "#33161b", // Green color for the gradient
    bgGradientEnd: "#33161b"
  },
  {
    imgPath: "./portfolio-mockups/builders/archicgreenscape.webp",
    title: "Archic Green Scape",
    service: "Web Development",
    projectType: "Builders",
    project_desc:`<div>
    <p class="mb-3">Archic Greenscape Engineering was founded on the principle of “Seeking Sustenance in Sustainability.” The firm specializes in delivering technology-driven, sustainable design and execution solutions across residential, commercial, institutional, and public spaces. With a focus on offering premium and value-centric products over cost-cutting alternatives, Archic Greenscape has served clients ranging from educational institutions and public buildings to leading automobile brands across Mumbai and Goa.</p>
    </div>`,
     long_img:"./images/long-images/archicgreenscape.webp",
    web_url:"https://archicgreenscape.com/",
     bgGradientStart: "#e8bd6f", // Red color for the gradient
    bgGradientEnd: "#e8bd6f"
  },
  {
    imgPath: "./portfolio-mockups/builders/folksco.webp",
    title: "Folksco",
    service: "Web Development",
    projectType: "Builders",
    project_desc:`<div>
    <p class="mb-3">Folksco is an interior design studio based in Mumbai, known for crafting soulful and detail-driven spaces. Founded by childhood friends Asif and Vivek, the team blends creativity, quality, and a strong sense of collaboration they call “Folkship.” With a deep focus on design precision, value engineering, and built quality, Folksco has delivered numerous successful projects. Their mission is to create "Happy Spaces" that reflect personality and purpose — with every detail thoughtfully executed.</p>
    </div>`,
     long_img:"./images/long-images/folksco.webp",
    web_url:"https://folksco.in/",
       bgGradientStart: "#ed7936", // Pink color for the gradient
    bgGradientEnd: "#ed7936"
  },
  {
    imgPath: "./portfolio-mockups/ecommerce/thaigerpharma.webp",
    title: "Thaiger Nutraceuticals",
    service: "Web Development",
    projectType: "Catalogue",
    project_desc:`<div>
    <p class="mb-3">Thaiger Nutraceuticals, a division of the renowned Thaiger Pharma Group (est. 2014), brings pharmaceutical-grade quality to the world of dietary supplements. Originally launched in India with high-performance proteins for athletes, the brand has since expanded globally with a newly enhanced product line now manufactured in Europe. With modern formulations, premium packaging, and a distribution base in the UAE, Thaiger Nutraceuticals is reaching new markets across Europe, Asia, and the Middle East. The brand remains committed to innovation, quality, and promoting wellness through supplements trusted by health-conscious individuals and professionals alike.</p>
    </div>`,
     long_img:"./images/long-images/thaigernutraceuticals",
    web_url:"https://thaigernutraceuticals.com/",
       bgGradientStart: "#75a7df", // Pink color for the gradient
    bgGradientEnd: "#75a7df"
  },
  {
    imgPath: "./portfolio-mockups/catalogue/kostevo.webp",
    title: "Kostevo",
    service: "Web Development",
    projectType: "Catalogue",
    project_desc:`<div>
    <p class="mb-3">Kostevo has over 15 years of experience in precision machining, specializing in custom parts such as compression tubes, fasteners, flanges, gears, industrial valves, pipe fittings, and more. The company excels in manufacturing non-standard parts tailored to customer specifications for generators, turbines, motors, pumps, compressors, and gearboxes. With a focus on precision, reliability, and craftsmanship, Kostevo ensures the highest quality in every project it undertakes.</p>
    </div>`,
     long_img:"./images/long-images/kostevo.webp",
    web_url:"https://kostevo.com/",
       bgGradientStart: "#ed7936", // Pink color for the gradient
    bgGradientEnd: "#ed7936"
  },
  {
    imgPath: "./portfolio-mockups/catalogue/powerplay.webp",
    title: "Powerplay",
    service: "Web Development",
    projectType: "Catalogue",
    project_desc:`<div>
    <p class="mb-3">PowerPlay Electronics is a leading provider of cutting-edge technology and high-quality gadgets, from smartphones and laptops to smart home devices and entertainment systems. Founded by industry experts, the company is committed to staying ahead of technological trends and offering products that deliver exceptional performance. With years of experience, PowerPlay Electronics ensures the highest standards in product quality and customer service, providing expert support and guidance to meet all tech needs.</p>
    </div>`,
     long_img:"./images/long-images/powerplay.webp",
    web_url:"https://powerplay.ae/",
       bgGradientStart: "#e72528", // Pink color for the gradient
    bgGradientEnd: "#e72528"
  },
  {
    imgPath: "./portfolio-mockups/catalogue/asrehexports.webp",
    title: "Asreh Exports",
    service: "Web Development",
    projectType: "Catalogue",
    project_desc:`<div>
    <p class="mb-3">Asreh Exports, founded by Faisal A. Rehman, is a trusted leader in the meat export industry, specializing in offals and pet products. With over 30 years of marketing expertise and 20 years of experience in supplying livestock to major meat exporters, the company is committed to delivering the finest meat products worldwide. Asreh Exports prides itself on quality, sourcing top-tier livestock and ensuring that every product meets the highest industry standards, backed by unparalleled customer service.</p>
    </div>`,
     long_img:"./images/long-images/asrehexports.webp",
    web_url:"https://asrehexports.com/",
       bgGradientStart: "#aa231c", // Pink color for the gradient
    bgGradientEnd: "#aa231c"
  },
  {
    imgPath: "./portfolio-mockups/catalogue/redsailexports.webp",
    title: "Redsail Exports",
    service: "Web Development",
    projectType: "Catalogue",
    project_desc:`<div>
    <p class="mb-3">Redsail Exports LLP is a customer-centric export company focused on driving sustainability and growth for Indian exporters. With expertise in market knowledge, product pricing, packaging, and documentation, Redsail Exports works closely with clients to craft tailored export strategies and execute them with precision. The company’s vision is to become a one-stop solution and a trusted export partner for global buyers, ensuring satisfaction, trust, and continuous research to stay competitive in international markets.</p>
    </div>`,
     long_img:"./images/long-images/redsailexports.webp",
    web_url:"https://redsailexports.com/",
       bgGradientStart: "#043659", // Pink color for the gradient
    bgGradientEnd: "#043659"
  },
  {
    imgPath: "./portfolio-mockups/catalogue/globalhardware.webp",
    title: "Global Hardware",
    service: "Web Development",
    projectType: "Catalogue",
    project_desc:`<div>
    <p class="mb-3">Global Hardware, established in 2001, is a leading wholesaler and retailer in the construction hardware and building materials industry in Kuwait. Specializing in fasteners, furniture fittings, laminates, adhesives, tools, and consumables, the company offers high-quality products from renowned brands like Hettich, Greenlam, Fevicol, IBFM, and Patta. Known for personalized service and a broad product range, Global Hardware stays updated with market trends, always prioritizing customer satisfaction and service excellence.</p>
    </div>`,
     long_img:"./images/long-images/globalhardwarekw.webp",
    web_url:"https://globalhardwarekw.com/",
       bgGradientStart: "#00396f", // Pink color for the gradient
    bgGradientEnd: "#00396f"
  },
  {
    imgPath: "./portfolio-mockups/logistics/bml.webp",
    title: "BML Logistics",
    service: "Web Development",
    projectType: "Logistics",
    project_desc:`<div>
    <p class="mb-3">BML Tech Enabled Services accelerates business growth by offering comprehensive end-to-end supply chain solutions, from sourcing the right products to delivering them to end consumers. Committed to aligning with national interests, BML aims to transform India into a global trading hub, similar to Dubai, Singapore, and Shanghai. The company focuses on facilitating the import and export of goods and services, optimizing logistics costs, and enabling trade in free currency.</p>
    </div>`,
     long_img:"./images/long-images/bookmylogistic.webp",
    web_url:"https://bookmylogistic.com/",
       bgGradientStart: "#fec126", // Pink color for the gradient
    bgGradientEnd: "#fec126"
  },
  {
    imgPath: "./portfolio-mockups/business/binfinit.webp",
    title: "Binfinit",
    service: "Web Development",
    projectType: "Logistics",
    project_desc:`<div>
    <p class="mb-3">Binfinit bridge the gap between regions of abundance and areas of demand, transforming commodities to ensure they reach where they are needed most. Our energy solutions power homes, industries, and economies, focusing on reliable and sustainable energy distribution. With expertise in global trading, we optimize the transport, storage, and distribution of bulk raw materials, leveraging our global network to cater to distinct local needs while understanding the global market dynamics.</p>
    </div>`,
     long_img:"./images/long-images/binfinit.webp",
    web_url:"https://binfinit.co/",
       bgGradientStart: "#f49153", // Pink color for the gradient
    bgGradientEnd: "#f49153"
  },
  {
    imgPath: "./portfolio-mockups/logistics/adhiklogistics.webp",
    title: "Adhik Logistics",
    service: "Web Development",
    projectType: "Logistics",
    project_desc:`<div>
    <p class="mb-3">AADHIK specializes in providing comprehensive supply chain and logistics solutions. With a focus on delivering products quickly and safely, we cater to the complex needs of businesses across PAN India. Our tailored logistics services help clients maximize their competitive advantage while maintaining high standards of professionalism and integrity in every interaction.</p>
    </div>`,
     long_img:"./images/long-images/aadhiklogistics.webp",
    web_url:"https://aadhiklogistics.com/",
       bgGradientStart: "#fbbd00", // Pink color for the gradient
    bgGradientEnd: "#fbbd00"
  },
  {
    imgPath: "./portfolio-mockups/logistics/amarclearing.webp",
    title: "Amar Clearing",
    service: "Web Development",
    projectType: "Logistics",
    project_desc:`<div>
    <p class="mb-3">Amar Clearing Services India Pvt. Ltd. is a leading Customs Broker (CHA) and Freight Forwarding company. A member of the Authorized Economic Operator (AEO) programme, we are renowned for providing top-notch services in customs clearance, freight forwarding, and logistics management. Our expertise and commitment aim to make us one of the largest players in the industry, offering efficient solutions for imports and exports.</p>
    </div>`,
     long_img:"./images/long-images/amarclearing.webp",
    web_url:"https://amarclearing.com/",
       bgGradientStart: "#2b7b81", // Pink color for the gradient
    bgGradientEnd: "#2b7b81"
  },
  {
    imgPath: "./portfolio-mockups/logistics/amclogistics.webp",
    title: "AMC Logistics",
    service: "Web Development",
    projectType: "Logistics",
    project_desc:`<div>
    <p class="mb-3">AMC Logistic India Pvt. Ltd. is an ISO certified company and one of the fastest-growing in the logistics sector. Specializing in import clearance, air and sea freight forwarding, we have built a reputation for efficiency and reliability. With years of experience, we are pioneers in CHA services, offering fast and effective solutions to meet customer needs. Our comprehensive services include import custom clearance, air freight, ocean freight, road freight, and warehousing, all backed by a dedicated team ensuring prompt and professional delivery worldwide.</p>
    </div>`,
     long_img:"./images/long-images/amclogistic.webp",
    web_url:"https://www.amclogistic.com/",
       bgGradientStart: "#004f89", // Pink color for the gradient
    bgGradientEnd: "#004f89"
  },
  {
    imgPath: "./portfolio-mockups/logistics/index.webp",
    title: "Index Transport",
    service: "Web Development",
    projectType: "Logistics",
    project_desc:`<div>
    <p class="mb-3">INDEX is the market leader in the Saurashtra region of Gujarat, established in 2008 with a mission to deliver safe, quick, and reliable services. Specializing in express delivery, logistics, and consulting, INDEX serves a diverse range of industries including apparel, healthcare, automotive, FMCG, and more. Known for its cost-effective and dependable transportation solutions, INDEX ensures timely pickups and early deliveries, allowing businesses to focus on their core operations. Guided by core values of passion, reliability, vision, humanity, and ethics, INDEX continues to set the standard for excellence in the transportation sector.</p>
    </div>`,
     long_img:"./images/long-images/indextransport.webp",
    web_url:"https://indextransport.com/",
       bgGradientStart: "#69ac44", // Pink color for the gradient
    bgGradientEnd: "#69ac44"
  },
  {
    imgPath: "./portfolio-mockups/logistics/marsairocean.webp",
    title: "Mars Air Ocean",
    service: "Web Development",
    projectType: "Logistics",
    project_desc:`<div>
    <p class="mb-3">Marsairocean boasts over 22 years of experience as a leading logistics company, offering a comprehensive range of services to meet the diverse needs of global businesses. We specialize in air, ocean, road, and rail freight, ensuring that your goods are delivered efficiently and securely. In addition to standard freight services, we offer Flexitank solutions, break bulk transportation, and expert customs clearance. Our commitment to operational excellence and innovative logistics strategies has solidified Marsairocean as a trusted partner for worldwide trade</p>
    </div>`,
     long_img:"./images/long-images/marsairocean.webp",
    web_url:"https://marsairocean.com/",
       bgGradientStart: "#fa4318", // Pink color for the gradient
    bgGradientEnd: "#fa4318"
  },
  {
    imgPath: "./portfolio-mockups/logistics/pacematters.webp",
    title: "Pace Matters",
    service: "Web Development",
    projectType: "Logistics",
    project_desc:`<div>
    <p class="mb-3">Pacematters Logistic India Pvt. Ltd. is an ISO certified company specializing in Customs House Agent (CHA) services and Freight Forwarding. We offer a complete range of logistics solutions, including Import Clearance, Air Freight, Sea Freight, and Road Freight, ensuring quick and efficient service. With years of experience, our dedicated team ensures fast and safe custom clearance, providing reliable solutions for all your import and export needs.</p>
    </div>`,
     long_img:"./images/long-images/pacematters.webp",
    web_url:"https://pacematters.in/",
       bgGradientStart: "#744794", // Pink color for the gradient
    bgGradientEnd: "#744794"
  },
  {
    imgPath: "./portfolio-mockups/ecommerce/trillionair.webp",
    title: "Trillionaire",
    service: "Web Development",
    projectType: "Ecommerce",
    project_desc:`<div>
    <p class="mb-3">Trillionaire Auto Parts is a US-based company specializing in high-quality auto parts and accessories with a commitment to sustainability. Founded with a mission to extend the lifecycle of auto parts and conserve resources, we offer a recycling program for used parts to promote environmental stewardship. Since 2020, we’ve shipped to over 50 states and 46 countries, recycling materials like catalytic converters, metals, and plastics, helping reduce our carbon footprint. Join us in reshaping the auto-parts industry through responsible consumption and innovation.</p>
    </div>`,
    long_img:"./images/long-images/trillionaireautoparts.webp",
    web_url:"https://trillionaireautoparts.com/",
       bgGradientStart: "#d12325", // Pink color for the gradient
    bgGradientEnd: "#d12325"
  },
  {
    imgPath: "./portfolio-mockups/ecommerce/cotton-culture.webp",
    title: "Cotton Culture",
    service: "Web Development",
    projectType: "Ecommerce",
    project_desc:`<div>
    <p class="mb-3">Cotton Culture is an Indian fashion brand specializing in women’s ethnic wear, blending traditional textiles with modern designs. Established in 2010 after nearly a decade of manufacturing for large retail houses, the brand has rapidly grown, now operating 45 self-managed stores across India. Known for its high-quality and affordable ethnic wear, Cotton Culture offers trendy yet traditional outfits, catering to a wide audience of women. The brand is now expanding its reach online to make its exclusive range of clothing accessible to women everywhere.</p>
    </div>`,
     long_img:"./images/long-images/cottonculture.webp",
    web_url:"https://www.cottonculture.co.in/",
       bgGradientStart: "#e5322c", // Pink color for the gradient
    bgGradientEnd: "#e5322c"
  },
  {
    imgPath: "./portfolio-mockups/ecommerce/arabiantea.webp",
    title: "Arabian Tea",
    service: "Web Development",
    projectType: "Ecommerce",
    project_desc:`<div>
    <p class="mb-3">Arabian Tea proudly offers 15 varieties of organic, caffeine-free herbal teas, made from 100% natural, GMO-free ingredients sourced from Asia and Africa. Our teas are crafted to help with various health issues such as fever, cough, stress, headache, and nausea. With a focus on quality and wellness, each cup of Arabian Tea provides a soothing, healthy experience. Simply dip a tea bag into hot water and enjoy the refreshing, healing benefits of our carefully blended teas.</p>
    </div>`,
     long_img:"./images/long-images/arabiantea.webp",
    web_url:"https://arabiantea.in/",
       bgGradientStart: "#57940f", // Pink color for the gradient
    bgGradientEnd: "#57940f"
  },
  {
    imgPath: "./portfolio-mockups/ecommerce/bsauto.webp",
    title: "BS Auto",
    service: "Web Development",
    projectType: "Ecommerce",
    project_desc:`<div>
    <p class="mb-3">BS Auto Accessories, established in 2005 in Mumbai, is a leading manufacturer of high-quality two-wheeler accessories, specializing in products like backrests, leg guards, saddle stays, footrests, and side stand extenders. Known for its commitment to quality and excellence, BS Auto Accessories has earned a reputation as India's number one manufacturer of stainless steel accessories, continually upgrading its production processes to provide superior products and services for a smooth and durable riding experience.</p>
    </div>`,
     long_img:"./images/long-images/bsautoaccessories.webp",
    web_url:"https://bsautoaccessories.com/",
       bgGradientStart: "#3d2b99", // Pink color for the gradient
    bgGradientEnd: "#3d2b99"
  },
  {
    imgPath: "./portfolio-mockups/ecommerce/grandtruck.webp",
    title: "Grand Trunk",
    service: "Web Development",
    projectType: "Ecommerce",
    project_desc:`<div>
    <p class="mb-3">The Grand Trunk, established in 1978, is a premier online marketplace that brings the magic of the Mumbai flea market to a global audience. We connect design enthusiasts with over a million extraordinary items, offering a curated selection of vintage, antique, and contemporary furniture, home décor, art, fine jewelry, watches, and fashion. Our platform unites seekers of beautiful and unique pieces with highly coveted sellers and makers, creating a space where exquisite design thrives.</p>
    </div>`,
     long_img:"./images/long-images/thegrandtrunk.webp",
    web_url:"https://thegrandtrunk.in/",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./portfolio-mockups/ecommerce/mistleblue.webp",
    title: "Mistle Blue",
    service: "Web Development",
    projectType: "Ecommerce",
    project_desc:`<div>
    <p class="mb-3">Mistleblue is dedicated to pioneering new and innovative technologies that enhance human lives while ensuring sustainability and fairness to the planet. Over the next decade, we aim to advance in wireless technologies and green energy, with a strong focus on solar energy, to contribute to a cleaner, greener, and more sustainable future for all.</p>
    </div>`,
     long_img:"./images/long-images/mistleblue.webp",
    web_url:"https://mistleblue.com/",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./portfolio-mockups/ecommerce/newqualityware.webp",
    title: "New Quality Ware",
    service: "Web Development",
    projectType: "Ecommerce",
    project_desc:`<div>
    <p class="mb-3">At Newqualityware, we are passionate about technology and committed to providing you with the best hardware options from leading brands at the most competitive prices. Our mission is to simplify your search for top-quality computer components, ensuring you stay ahead in the tech world. From powerful processors to high-speed RAM modules, we offer an extensive range of products designed to enhance your computing experience with excellence and affordability.</p>
    </div>`,
     long_img:"./images/long-images/newqualityware.webp",
    web_url:"https://newqualityware.com/",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./portfolio-mockups/education/educate.webp",
    title: "Educ4te",
    service: "Web Development",
    projectType: "Education",
    project_desc:`<div>
    <p class="mb-3">At educ4te, we believe in revolutionizing IT education by returning to the basics. In a world where technology evolves rapidly, we recognize the gap between cutting-edge innovation and fundamental IT knowledge. Our solution is to offer a comprehensive and accessible approach to building strong foundational skills in IT, focusing on personalized learning solutions that cater to individual needs and learning styles. With a commitment to making IT education both accessible and effective, we aim to bridge the knowledge gap and empower learners to thrive in the tech world.</p>
    </div>`,
     long_img:"./images/long-images/educ4te.webp",
    web_url:"https://educ4te.com/",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./portfolio-mockups/education/capdiw.webp",
    title: "Capdiw",
    service: "Web Development",
    projectType: "Education",
    project_desc:`<div>
    <p class="mb-3">Capdiw offers expert-led digital marketing and web development courses, focusing on practical learning. With industry trainers having over 10 years of experience, the courses cover everything from web development basics to advanced digital marketing techniques. Students enjoy the flexibility of online learning, interactive sessions, class recordings, and lifetime content updates.</p>
    </div>`,
     long_img:"./images/long-images/capdiw.webp",
    web_url:"https://capdiw.in/",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./portfolio-mockups/education/euradicle.webp",
    title: "Euradicle",
    service: "Web Development",
    projectType: "Education",
    project_desc:`<div>
    <p class="mb-3">EuRadicle is dedicated to transforming individuals by unlocking their untapped potential through personalized learning solutions. With our Capability Based Development Model (CBDM), we combine corporate experience with creative consulting to foster growth. Our unique approach emphasizes awareness, action, coaching, and a positive environment, ensuring lasting change.</p>
    </div>`,
     long_img:"./images/long-images/euradicle.webp",
    web_url:"https://euradicle.com/",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./portfolio-mockups/restaurants/alnizami.webp",
    title: "Al Nizam Darbar",
    service: "Web Development",
    projectType: "Restaurants",
    project_desc:`<div>
    <p class="mb-3">Nizami Darbar offers a regal dining experience, combining the grandeur of royal hospitality with contemporary flavors. Inspired by the Nizams of Hyderabad, the restaurant serves authentic vegetarian and non-vegetarian dishes from Arabia, Persia, and Turkey, ensuring a blend of tradition and innovation. With a focus on providing guests an immersive experience in Nizami hospitality, we deliver exquisite cuisine at reasonable prices.</p>
    </div>`,
     long_img:"./images/long-images/alnizamidarbar.webp",
    web_url:"https://alnizamidarbar.com/",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./portfolio-mockups/trust-properties/behuman.webp",
    title: "Be Human",
    service: "Web Development",
    projectType: "Trust & Properties",
    project_desc:`<div>
    <p class="mb-3">Behuman Foundation focuses on empowering India’s youth by providing career counselling, skill development, and awareness of available opportunities. With a vision to address the challenges posed by an outdated education system and inadequate career guidance, the foundation aims to enhance employability and foster entrepreneurial aspirations. By guiding youth to make informed career decisions, we strive to contribute to their self-realization and the nation’s economic growth.</p>
    </div>`,
     long_img:"./images/long-images/behumanfoundation.webp",
    web_url:"https://behumanfoundation.org/",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./portfolio-mockups/trust-properties/dunes.webp",
    title: "Dunes Properties",
    service: "Web Development",
    projectType: "Trust & Properties",
    project_desc:`<div>
    <p class="mb-3">Dunes Properties, established in 2016 and part of the BIN YABER group in Dubai, is owned by prominent businessman Mr. Mohammed Jaber Abdullah Mohamed Al Harbi. The company focuses on revolutionizing the real estate market by offering modern, luxurious properties in major UAE cities like Dubai and Sharjah. With a strong client relationship, Dunes Properties provides a range of high-end listings including villas, apartments, labor camps, warehouses, and shops.</p>
    </div>`,
     long_img:"./images/long-images/dunesproperties.webp",
    web_url:"https://dunesproperties.ae/",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./portfolio-mockups/trust-properties/kolsamohalla.webp",
    title: "Kolsa Mohalla",
    service: "Web Development",
    projectType: "Trust & Properties",
    project_desc:`<div>
    <p class="mb-3">Kolsa Mohalla (Ranavav) Halai Memon Jamat, founded in 1885, is one of India's oldest and most prominent community organizations. With a rich legacy, it has played a key role in humanitarian efforts, supporting education, healthcare, and housing initiatives for the needy. The community, known for its successful members across various professions, has always given back to society. More than just a Jamat, it is a family committed to making a positive change. Additionally, Kolsa Mohalla offers wedding venue services with flexible decoration choices, in-house catering, and DJ services to ensure a memorable experience for all events.</p>
    </div>`,
     long_img:"./images/long-images/kolsamohallamemonjamat.webp",
    web_url:"https://kolsamohallamemonjamat.com/",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./portfolio-mockups/trust-properties/wecare.webp",
    title: "We Care",
    service: "Web Development",
    projectType: "Trust & Properties",
    project_desc:`<div>
    <p class="mb-3">We Care Charitable Trust is a non-profit NGO committed to uplifting society’s less fortunate. Extending a helping hand to widows, divorcees, orphans, patients, and underprivileged students, we ensure they live with dignity and respect. Our mission is to support those battling life's challenges, providing them with the resources needed to sustain themselves, overcome obstacles, and pursue their dreams.</p>
    </div>`,
     long_img:"./images/long-images/wecarecharitable.webp",
    web_url:"https://wecarecharitable.org/",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./portfolio-mockups/travel/classic.webp",
    title: "Go Classic Tour",
    service: "Web Development",
    projectType: "Travels",
    project_desc:`<div>
    <p class="mb-3">Classic Tours and Travels was founded after the organizer's first Hajj in 1990, where he faced numerous challenges while serving fellow pilgrims. This experience inspired the establishment of professional tours, aiming to provide a smoother, more comfortable journey for others. With over 28 years in the industry, we have built strong relationships with trusted vendors and offer high-quality Hajj and Umrah tours at reasonable prices. Our expert team ensures that every aspect of the pilgrimage is executed smoothly, providing pilgrims with peace of mind throughout their sacred journey.</p>
    </div>`,
     long_img:"./images/long-images/goclassictour.webp",
    web_url:"https://goclassictour.com/",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./portfolio-mockups/travel/alhusaini.webp",
    title: "Al Husaini",
    service: "Web Development",
    projectType: "Travels",
    project_desc:`<div>
    <p class="mb-3">Al Husaini Travels is a leading manpower recruitment agency based in Mumbai, India, recognized by the Ministry of Overseas Indian Affairs. We specialize in providing skilled and competent workers to meet the needs of organizations. Our modern infrastructure allows us to mobilize, test, and select candidates based on precise requirements. With decades of experience, we focus on delivering the best candidates, ensuring they add significant value to your business. Trust us for reliable, efficient, and effective manpower solutions.</p>
    </div>`,
     long_img:"./images/long-images/alhusainitravels.webp",
    web_url:"https://alhusainitravels.com/",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./portfolio-mockups/travel/globexmanpower.webp",
    title: "Globex Manpower Consultancy",
    service: "Web Development",
    projectType: "Travels",
    project_desc:`<div>
    <p class="mb-3">Globex is a registered manpower consulting company in India and the Saudi consulate, with over two decades of experience. We specialize in providing blue-collared candidates globally, delivering qualified workers within three weeks. Our team of dedicated professionals uses modern facilities to meet clients' needs, making us one of India’s top manpower recruitment consultancies.</p>
    </div>`,
     long_img:"./images/long-images/globexmanpower.webp",
    web_url:"https://globexmanpower.com/",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./portfolio-mockups/travel/riyazint.webp",
    title: "Riyaz Travels",
    service: "Web Development",
    projectType: "Travels",
    project_desc:`<div>
    <p class="mb-3">Riyaz International is a leading human resource company with over 35 years of expertise in manpower recruitment and visa processing services. With a client-first approach, we focus on delivering results-driven recruitment solutions, treating our clients as success partners. We specialize in overseas recruitment and offer tailored visa processing services, ensuring our clients' goals are achieved through dedicated support and commitment.</p>
    </div>`,
     long_img:"./images/long-images/riyazinternational.webp",
    web_url:"https://www.riyazinternational.com/",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./portfolio-mockups/travel/zubair.webp",
    title: "Zubair Travels",
    service: "Web Development",
    projectType: "Travels",
    project_desc:`<div>
    <p class="mb-3">Zubair Travel Service was established in 1991 to provide employment solutions with integrity, professionalism, and honesty. Over 26 years of experience, we’ve successfully recruited more than 5,000 candidates for esteemed clients in the Middle East and Africa. Our superior search techniques and tailored selection process ensure we consistently match the right candidates to the right opportunities, delivering exceptional service every time.</p>
    </div>`,
     long_img:"./images/long-images/zubairtravels.webp",
    web_url:"https://zubairtravels.com/",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./portfolio-mockups/interior/folksco.webp",
    title: "Folksco",
    service: "Web Development",
    projectType: "Interior Designer",
    project_desc:`<div>
    <p class="mb-3">Folksco is a team of passionate interior designers based in Mumbai, dedicated to creating truly special spaces. With a focus on attention to detail, value engineering, and quality craftsmanship, we aim to create happy and functional environments for our clients. Founded by Asif and Vivek, schoolmates turned creative partners, we have completed numerous successful projects, and we’re always ready to take on the next challenge.</p>
    </div>`,
     long_img:"./images/long-images/folksco.webp",
    web_url:"https://folksco.in/",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./portfolio-mockups/interior/bareziya_arch.png",
    title: "Bareziya Architechs",
    service: "Web Development",
    projectType: "Interior Designer",
    project_desc:`<div>
    <p class="mb-3">Bareziya Architects is a multidisciplinary firm specializing in architecture, interiors, landscape design, and structural engineering. Founded in 2019 by Principal Architect Afzal Iqbal, the firm handles a diverse range of projects, from private residences to institutional, industrial, and commercial ventures. We focus on reconnecting people with architecture and nature by utilizing natural materials, light, and landscape to transform spaces. Our approach emphasizes the balance between functionality, aesthetics, and the unique context of each project, ensuring design solutions that inspire while meeting practical needs.</p>
    </div>`,
     long_img:"./images/long-images/bareziyaarchitects.webp",
    web_url:"https://bareziyaarchitects.com/",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./portfolio-mockups/healthcare/AXXIO.webp",
    title: "Axxio",
    service: "Web Development",
    projectType: "Health Care",
    project_desc:`<div>
    <p class="mb-3">Axxio Laboratory is a trusted provider of high-quality pharmaceutical products, specializing in the development and manufacture of oral, solid dosage, and injectable formulations (both dry and liquid). With a focus on innovation and continuous improvement, we use state-of-the-art technology to ensure excellence, quality, and effectiveness. Our commitment to superior customer service and modern packaging ensures that our products meet the highest standards. We are eager to expand globally and build long-term, transparent partnerships with distributors and clients.</p>
    </div>`,
     long_img:"./images/long-images/axxio.webp",
    web_url:"https://www.axxio-laboratory.com/",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./portfolio-mockups/healthcare/syrocs.webp",
    title: "Syrocs",
    service: "Web Development",
    projectType: "Health Care",
    project_desc:`<div>
    <p class="mb-3">Syrocs is a cutting-edge pharmaceutical brand producing human-grade tablets, capsules, and liquids. Established in 2024, Syrocs builds on over 15 years of experience from our parent group, which includes three other successful pharmaceutical brands. With a commitment to excellence, innovation, and high industry standards, Syrocs offers reliable healthcare solutions, backed by years of expertise and a focus on quality, packaging, and marketing.</p>
    </div>`,
     long_img:"./images/long-images/syrocs.webp",
    web_url:"https://syrocs.com/",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./portfolio-mockups/healthcare/vcare.webp",
    title: "VCare Diagnostic",
    service: "Web Development",
    projectType: "Health Care",
    project_desc:`<div>
    <p class="mb-3">Vcare Diagnostics & Medical Centre has 25 years of experience in providing exceptional diagnostic and medical services. With a focus on accuracy and compassionate care, our state-of-the-art facility and expert team ensure personalized healthcare solutions to support your well-being. Experience excellence in diagnostics and medical care with Vcare.</p>
    </div>`,
     long_img:"./images/long-images/vcarediagnostic.webp",
    web_url:"https://vcarediagnostic.center/",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./portfolio-mockups/healthcare/DR,ARPIT.webp",
    title: "Dr Arpit Bansal",
    service: "Web Development",
    projectType: "Health Care",
    project_desc:`<div>
    <p class="mb-3">ChatGPT said:
Dr. Arpit Bansal is a renowned Advanced Laparoscopy and Cancer Surgeon, Director of Jeevan Jyoti Hospital in Prayagraj, and a fellow in robotic surgeries. Alongside his medical expertise, he is a passionate bird photographer, having captured 1,145 species in India. With a strong presence on social media, Dr. Bansal shares health and wellness tips, promotes cancer awareness, and advocates for lifestyle changes. He is also a proponent of the Blue Mind Movement and longevity research, aiming to inspire others to lead healthier lives through functional medicine, stem cell advancements, and his upcoming initiatives.</p>
    </div>`,
     long_img:"./images/long-images/drarpitbansal.webp",
    web_url:"https://drarpitbansal.in/",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./portfolio-mockups/humanresource/yovant-webite-mockup.webp",
    title: "Yovant Recruitment",
    service: "Web Development",
    projectType: "Human Resource",
    project_desc:`<div>
    <p class="mb-3">Yovant Recruitment Services provides expert international recruitment solutions, specializing in bulk overseas hiring across the UAE, KSA, and European markets. Licensed by SHAMS, we deliver tailored staffing solutions designed to meet industry-specific needs, ensuring compliance, transparency, and operational excellence. We simplify the hiring process, helping businesses grow with high-quality talent and efficient workforce strategies.</p>
    </div>`,
     long_img:"./images/long-images/yovantrecruitment.webp",
    web_url:"https://yovantrecruitment.com/",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./portfolio-app-development/nile.png",
    title: "Nile",
    service: "App Development",
    projectType: "",
    project_desc:`<div>
    <p class="mb-3">We developed a robust B2B app for Nile, empowering fresh produce suppliers to connect directly with commercial buyers. The platform simplifies trading with features like instant ordering, flexible payments, and smart logistics integrations. Built for efficiency and scale, the app enables seamless transactions between multiple producers and regional buyers — making fresh produce trade faster, safer, and more transparent.</p>
    </div>`,
    long_img:"./portfolio-app-development/nile.png",
    web_url:"https://play.google.com/store/apps/details?id=ag.nile.market.app&hl=en_IN",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./portfolio-app-development/bebigiro.png",
    title: "Bebigiro",
    service: "App Development",
    projectType: "",
    project_desc:`<div>
    <p class="mb-3">We created an intuitive and user-friendly e-commerce app for Bebegiro, a trusted kidswear brand offering quality clothing at affordable prices. The app features a wide range of fun, fashionable, and durable children’s outfits, along with smooth navigation, secure checkout, and a seamless shopping experience for parents. Designed to showcase products beautifully while keeping performance optimized.</p>
    </div>`,
    long_img:"./portfolio-app-development/bebigiro.png",
    web_url:"https://play.google.com/store/apps/details?id=com.bebegiro.smash.app&hl=en_IN",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./portfolio-app-development/cotton%20culture.png",
    title: "Cotton Culture",
    service: "App Development",
    projectType: "",
    project_desc:`<div>
    <p class="mb-3">We developed an elegant online store for Cotton Culture, a leading Indian brand in women’s ethnic wear. With a legacy rooted in traditional textiles and modern design, Cotton Culture has grown from 2 stores in 2010 to 43+ across India. Our digital solution helped bring their exclusive fashion line online, offering a smooth shopping experience, mobile responsiveness, and stylish product displays to connect with global customers.</p>
    </div>`,
    long_img:"./portfolio-app-development/cotton%20culture.png",
    web_url:"https://play.google.com/store/apps/details?id=in.co.cottoncultureindia&hl=en_IN",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./portfolio-app-development//sahiba.png",
    title: "Sahibaan",
    service: "App Development",
    projectType: "",
    project_desc:`<div>
    <p class="mb-3">We created a user-friendly mobile app for Sahibaan, a renowned Mumbai-based restaurant chain known for its rich fusion of Oriental and Indian flavors. The app showcases their diverse menu, simplifies ordering, and enhances the dining experience with seamless navigation, vibrant visuals, and integrated table booking and delivery features. It brings the essence of Sahibaan’s exotic cuisine—from Thai to Mughlai—to customers’ fingertips.</p>
    </div>`,
    long_img:"./portfolio-app-development//sahiba.png",
    web_url:"https://play.google.com/store/apps/details?id=com.gsmash.sahibaan&hl=en_IN",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "https://sagartech.co.in/seo-mockups/SEO_Armaf_Mockup.webp",
    title: "Best Deo",
    service: "SEO",
    projectType: "Armaf",
    project_desc:`<div>
    <p class="mb-3">Best Deo With a robust search volume of 1600 and a manageable keyword difficulty score of 48, this keyword epitomizes our expertise in navigating competitive landscapes. Currently securing the coveted 2nd position. Trust us to elevate your online presence and achieve similar success stories. Let's propel your brand to the top ranks together!</p>
    </div>`,
    long_img:"https://sagartech.co.in/seo-mockups/SEO_Armaf_Mockup.webp",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./seo-mockups/SEO_Armaf_Mockup2.webp",
    title: "Deo for women",
    service: "SEO",
    projectType: "Armaf",
    project_desc:`<div>
    <p class="mb-3">Deo for Women With an impressive search volume of 9900 and a comfortable keyword difficulty score of 45, this keyword exemplifies our prowess in navigating competitive terrains. Currently occupying the prestigious 4th position. Join us in elevating your brand's online presence and achieving similar success stories. Let's propel your business to the top ranks together!</p>
    </div>`,
    long_img:"./seo-mockups/SEO_Armaf_Mockup2.webp",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./seo-mockups/SEO_Armaf_45.webp",
    title: "Best deodrant for women in india",
    service: "SEO",
    projectType: "Armaf",
    project_desc:`<div>
    <p class="mb-3">Best Deodorant for Women in India With a robust search volume of 590 and a manageable keyword difficulty of 31, this keyword exemplifies our proficiency in competitive landscapes. Currently holding a strong 3rd position. Join us in elevating your brand's online presence and achieving similar triumphs. Let's ascend together towards greater success in the digital arena!</p>
    </div>`,
    long_img:"./seo-mockups/SEO_Armaf_45.webp",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./seo-mockups/BS%20Auto1.webp",
    title: "Burgman accessories",
    service: "SEO",
    projectType: "BS Auto",
    project_desc:`<div>
    <p class="mb-3">Burgman Accessories Boasting a substantial search volume of 4400 and a manageable keyword difficulty score of 49, this keyword underscores our adeptness in tackling competitive landscapes. Currently seated at an impressive 3rd position. Join us in driving your brand's online presence to new heights and achieving similar triumphs. Let's ascend the ranks together!</p>
    </div>`,
    long_img:"./seo-mockups/BS%20Auto1.webp",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./seo-mockups/BS%20Auto.webp",
    title: "Burgman backrest",
    service: "SEO",
    projectType: "BS Auto",
    project_desc:`<div>
    <p class="mb-3">Burgman Backrest Boasting a substantial search volume of 260 and a manageable keyword difficulty score of 25, this keyword underscores our adeptness in tackling competitive landscapes. Currently seated at an impressive 1st position. Join us in driving your brand's online presence to new heights and achieving similar triumphs. Let's ascend the ranks together!</p>
    </div>`,
    long_img:"./seo-mockups/BS%20Auto.webp",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./seo-mockups/SEO_BS_Auto_Mockup2.webp",
    title: "Suzuki burgman accessories",
    service: "SEO",
    projectType: "BS Auto",
    project_desc:`<div>
    <p class="mb-3">Suzuki Burgman Accessories With a respectable search volume of 1600 and a manageable keyword difficulty of 42, this keyword highlights our proficiency in navigating competitive landscapes. Currently holding the coveted 3rd position. Join us in propelling your brand's online presence to greater heights and achieving similar triumphs. Let's advance together and secure top rankings!</p>
    </div>`,
    long_img:"./seo-mockups/SEO_BS_Auto_Mockup2.webp",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./seo-mockups/BS%20Auto2.webp",
    title: "Ntorq crash guard",
    service: "SEO",
    projectType: "BS Auto",
    project_desc:`<div>
    <p class="mb-3">Ntorq Crash Guard With a solid search volume of 1600 and a manageable keyword difficulty of 20, this keyword showcases our expertise in competitive terrain. Currently leading from the front at the 1st position. Join us in elevating your brand's online presence and achieving similar milestones. Let's steer towards success together!</p>
    </div>`,
    long_img:"./seo-mockups/BS%20Auto2.webp",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./seo-mockups/sealexcel1.webp",
    title: "Hydraulic fittings manufacturers in india",
    service: "SEO",
    projectType: "Seal Excel",
    project_desc:`<div>
    <p class="mb-3">Hydraulic Fittings Manufacturer in India With a focused search volume of 110 and a comfortably low keyword difficulty of 13, this keyword highlights our adeptness in competitive arenas. Currently securing the esteemed 3rd position. Join us in propelling your brand's online presence to new heights and achieving similar victories. Let's lead the way together towards greater success!</p>
    </div>`,
    long_img:"./seo-mockups/sealexcel1.webp",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./seo-mockups/sealexcel.webp",
    title: "Pneumatic fittings names",
    service: "SEO",
    projectType: "Seal Excel",
    project_desc:`<div>
    <p class="mb-3">Pneumatic Fittings Names With a focused search volume of 260 and a comfortably low keyword difficulty of 20, this keyword highlights our adeptness in competitive arenas. Currently securing the esteemed 2nd position. Join us in propelling your brand's online presence to new heights and achieving similar victories. Let's lead the way together towards greater success!</p>
    </div>`,
    long_img:"./seo-mockups/sealexcel.webp",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./seo-mockups/Alsalama.webp",
    title: "Car brake service in dammam",
    service: "SEO",
    projectType: "Noor Al Salama",
    project_desc:`<div>
    <p class="mb-3">Car Brake Service In Dammam With a focused search volume of 140 and a comfortably low keyword difficulty of 5, this keyword highlights our adeptness in competitive arenas. Currently securing the esteemed 1st position. Join us in propelling your brand's online presence to new heights and achieving similar victories. Let's lead the way together towards greater success!</p>
    </div>`,
    long_img:"./seo-mockups/Alsalama.webp",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./seo-mockups/Alsalama1.webp",
    title: "Car denting service in dammam",
    service: "SEO",
    projectType: "Noor Al Salama",
    project_desc:`<div>
    <p class="mb-3">Car Denting Service In Dammam With a focused search volume of 140 and a comfortably low keyword difficulty of 5, this keyword highlights our adeptness in competitive arenas. Currently securing the esteemed 1st position. Join us in propelling your brand's online presence to new heights and achieving similar victories. Let's lead the way together towards greater success!</p>
    </div>`,
    long_img:"./seo-mockups/Alsalama1.webp",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./seo-mockups/Alsalama2.webp",
    title: "Car painting service in dammam",
    service: "SEO",
    projectType: "Noor Al Salama",
    project_desc:`<div>
    <p class="mb-3">Car Painting Service In Dammam With a focused search volume of 140 and a comfortably low keyword difficulty of 5, this keyword highlights our adeptness in competitive arenas. Currently securing the esteemed 1st position. Join us in propelling your brand's online presence to new heights and achieving similar victories. Let's lead the way together towards greater success!</p>
    </div>`,
    long_img:"./seo-mockups/Alsalama2.webp",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./seo-mockups/classictour.webp",
    title: "Hajj and umrah agency",
    service: "SEO",
    projectType: "Go Classic Tour",
    project_desc:`<div>
    <p class="mb-3">Hajj And Umrah Agency With a focused search volume of 210 and a comfortably low keyword difficulty of 10, this keyword highlights our adeptness in competitive arenas. Currently securing the esteemed 2nd position. Join us in propelling your brand's online presence to new heights and achieving similar victories. Let's lead the way together towards greater success!</p>
    </div>`,
    long_img:"./seo-mockups/classictour.webp",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./seo-mockups/classictour1.webp",
    title: "Hajj and umrah tours and travels",
    service: "SEO",
    projectType: "Go Classic Tour",
    project_desc:`<div>
    <p class="mb-3">Hajj And Umrah Tours And Travels With a focused search volume of 260 and a comfortably low keyword difficulty of 8, this keyword highlights our adeptness in competitive arenas. Currently securing the esteemed 2nd position. Join us in propelling your brand's online presence to new heights and achieving similar victories. Let's lead the way together towards greater success!</p>
    </div>`,
    long_img:"./seo-mockups/classictour1.webp",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./seo-mockups/cotton%20culture.webp",
    title: "Cotton palazzo pants",
    service: "SEO",
    projectType: "Cotton Culture",
    project_desc:`<div>
    <p class="mb-3">Cotton Palazzo Pants With a focused search volume of 4400 and a comfortably low keyword difficulty of 45, this keyword highlights our adeptness in competitive arenas. Currently securing the esteemed 2nd position. Join us in propelling your brand's online presence to new heights and achieving similar victories. Let's lead the way together towards greater success!</p>
    </div>`,
    long_img:"./seo-mockups/cotton%20culture.webp",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./seo-mockups/cotton%20culture1.webp",
    title: "Kurta co ord set women",
    service: "SEO",
    projectType: "Cotton Culture",
    project_desc:`<div>
    <p class="mb-3">Kurta Co ord Set Women With a focused search volume of 480 and a comfortably low keyword difficulty of 36, this keyword highlights our adeptness in competitive arenas. Currently securing the esteemed 2nd position. Join us in propelling your brand's online presence to new heights and achieving similar victories. Let's lead the way together towards greater success!</p>
    </div>`,
    long_img:"./seo-mockups/cotton%20culture1.webp",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./client-logos/Capdiw.webp",
    title: "Capdiw",
    service: "Logo Design",
    projectType: "",
    project_desc:`<div>
    <p class="mb-3">We designed a sleek and modern logo for Capdiw that reflects their tech-driven and forward-thinking approach. The design is minimal yet impactful, perfectly capturing their innovative identity.</p>
    </div>`,
    long_img:"./client-logos/Capdiw.webp",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./client-logos/GLOBEX-LOGO.webp",
    title: "Globex",
    service: "Logo Design",
    projectType: "",
    project_desc:`<div>
    <p class="mb-3">For Globex, we created a bold and professional logo that communicates their global presence and corporate strength. The design features strong typography with subtle global cues.</p>
    </div>`,
    long_img:"./client-logos/GLOBEX-LOGO.webp",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./client-logos/Eperts4Expats.webp",
    title: "Xperts4 Expats",
    service: "Logo Design",
    projectType: "",
    project_desc:`<div>
    <p class="mb-3">The logo for Xperts4 Expats was crafted to reflect trust, guidance, and international expertise. It combines a clean look with a welcoming feel to connect with expat communities.</p>
    </div>`,
    long_img:"./client-logos/Eperts4Expats.webp",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./client-logos/Stoneart%20Logo.webp",
    title: "Stone Art",
    service: "Logo Design",
    projectType: "",
    project_desc:`<div>
    <p class="mb-3">We designed a refined and artistic logo for Stone Art, focusing on elegance and craftsmanship. The design mirrors their premium product range and creative essence.</p>
    </div>`,
    long_img:"./client-logos/Stoneart%20Logo.webp",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./client-logos/OasisConsulting.webp",
    title: "Oasis",
    service: "Logo Design",
    projectType: "",
    project_desc:`<div>
    <p class="mb-3">Oasis’s logo symbolizes freshness, calm, and clarity. Our team created a soothing yet modern identity that perfectly aligns with the brand's serene image.</p>
    </div>`,
    long_img:"./client-logos/OasisConsulting.webp",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./client-logos/anadesignz.webp",
    title: "Ana designz",
    service: "Logo Design",
    projectType: "",
    project_desc:`<div>
    <p class="mb-3">The logo for Ana Designz is chic and stylish, reflecting their focus on fashion and aesthetics. We went for a trendy and contemporary vibe to represent their creative edge.</p>
    </div>`,
    long_img:"./client-logos/anadesignz.webp",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./client-logos/Eurocorp%20Logo.webp",
    title: "Euro Corp",
    service: "Logo Design",
    projectType: "",
    project_desc:`<div>
    <p class="mb-3">For Euro Corp, we designed a sharp and authoritative logo that portrays their corporate image with clarity. The design balances professionalism with a clean European flair.</p>
    </div>`,
    long_img:"./client-logos/Eurocorp%20Logo.webp",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./client-logos/MetalTech%20portable%20cabin%20MTPC.webp",
    title: "MTPC",
    service: "Logo Design",
    projectType: "",
    project_desc:`<div>
    <p class="mb-3">The MTPC logo combines strength and precision, designed to match their industrial and technical operations. Our goal was to deliver a design that looks both bold and reliable.</p>
    </div>`,
    long_img:"./client-logos/MetalTech%20portable%20cabin%20MTPC.webp",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./client-logos/Fosher_blacktxt_logo.png",
    title: "Fosher",
    service: "Logo Design",
    projectType: "",
    project_desc:`<div>
    <p class="mb-3">We created a modern, futuristic logo for Fosher, showcasing their dynamic and innovative brand personality. The design speaks of energy, growth, and forward movement.</p>
    </div>`,
    long_img:"./client-logos/Fosher_blacktxt_logo.png",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./client-logos/neugenz.png",
    title: "Neugenz",
    service: "Logo Design",
    projectType: "",
    project_desc:`<div>
    <p class="mb-3">Neugenz’s logo was designed to represent freshness and intelligence. With a clean and smart layout, the design embodies their modern solutions and youthful vision.</p>
    </div>`,
    long_img:"./client-logos/neugenz.png",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./client-logos/HR-Logos8-1536x375.webp",
    title: "Sagar HR",
    service: "Logo Design",
    projectType: "",
    project_desc:`<div>
    <p class="mb-3">For Sagar HR, we crafted a professional and people-centric logo. The design represents trust, reliability, and a strong human connection — key values for any HR firm.</p>
    </div>`,
    long_img:"./client-logos/HR-Logos8-1536x375.webp",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./client-logos/faiza%20Royal%20Wrist%20Logo.webp",
    title: "Royal Wrist",
    service: "Logo Design",
    projectType: "",
    project_desc:`<div>
    <p class="mb-3">Royal Wrist’s logo reflects luxury, elegance, and exclusivity. We focused on premium design elements to convey the brand’s high-end personality.</p>
    </div>`,
    long_img:"./client-logos/faiza%20Royal%20Wrist%20Logo.webp",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./client-logos/ahlid.webp",
    title: "Ahlid",
    service: "Logo Design",
    projectType: "",
    project_desc:`<div>
    <p class="mb-3">We designed a culturally inspired and elegant logo for Ahlid, aligning with their traditional roots and modern outlook. The identity is bold yet graceful.</p>
    </div>`,
    long_img:"./client-logos/ahlid.webp",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./client-logos/processindia.webp",
    title: "HPI",
    service: "Logo Design",
    projectType: "",
    project_desc:`<div>
    <p class="mb-3">HPI’s logo was designed to reflect innovation, professionalism, and industry expertise. The visual style is clean and corporate, perfect for a forward-looking company.</p>
    </div>`,
    long_img:"./client-logos/processindia.webp",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./banner-mockups/1.webp",
    title: "Armaf",
    service: "Banner Design",
    projectType: "",
    project_desc:`<div>
    <p class="mb-3">Prashna is a Dubai-based global freelance makeup artist certified by AOFM, one of the world's leading makeup academies. With backstage experience at major fashion events like Arab Fashion Week, Middle East Fashion Week, and Melbourne Fashion Week, the brand brings a rich blend of global styles and techniques. Prashna works with professional models, photographers, and artists, and offers services across the Middle East and internationally.</p>
    </div>`,
    long_img:"./banner-mockups/1.webp",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./banner-mockups/2.webp",
    title: "Armaf",
    service: "Banner Design",
    projectType: "",
    project_desc:`<div>
    <p class="mb-3">Prashna is a Dubai-based global freelance makeup artist certified by AOFM, one of the world's leading makeup academies. With backstage experience at major fashion events like Arab Fashion Week, Middle East Fashion Week, and Melbourne Fashion Week, the brand brings a rich blend of global styles and techniques. Prashna works with professional models, photographers, and artists, and offers services across the Middle East and internationally.</p>
    </div>`,
    long_img:"./banner-mockups/2.webp",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./banner-mockups/3.webp",
    title: "Armaf",
    service: "Banner Design",
    projectType: "",
    project_desc:`<div>
    <p class="mb-3">Prashna is a Dubai-based global freelance makeup artist certified by AOFM, one of the world's leading makeup academies. With backstage experience at major fashion events like Arab Fashion Week, Middle East Fashion Week, and Melbourne Fashion Week, the brand brings a rich blend of global styles and techniques. Prashna works with professional models, photographers, and artists, and offers services across the Middle East and internationally.</p>
    </div>`,
    long_img:"./banner-mockups/3.webp",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./banner-mockups/4.webp",
    title: "Armaf",
    service: "Banner Design",
    projectType: "",
    project_desc:`<div>
    <p class="mb-3">Prashna is a Dubai-based global freelance makeup artist certified by AOFM, one of the world's leading makeup academies. With backstage experience at major fashion events like Arab Fashion Week, Middle East Fashion Week, and Melbourne Fashion Week, the brand brings a rich blend of global styles and techniques. Prashna works with professional models, photographers, and artists, and offers services across the Middle East and internationally.</p>
    </div>`,
    long_img:"./banner-mockups/4.webp",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./banner-mockups/5.webp",
    title: "Armaf",
    service: "Banner Design",
    projectType: "",
    project_desc:`<div>
    <p class="mb-3">Prashna is a Dubai-based global freelance makeup artist certified by AOFM, one of the world's leading makeup academies. With backstage experience at major fashion events like Arab Fashion Week, Middle East Fashion Week, and Melbourne Fashion Week, the brand brings a rich blend of global styles and techniques. Prashna works with professional models, photographers, and artists, and offers services across the Middle East and internationally.</p>
    </div>`,
    long_img:"./banner-mockups/5.webp",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./banner-mockups/6.webp",
    title: "Armaf",
    service: "Banner Design",
    projectType: "",
    project_desc:`<div>
    <p class="mb-3">Prashna is a Dubai-based global freelance makeup artist certified by AOFM, one of the world's leading makeup academies. With backstage experience at major fashion events like Arab Fashion Week, Middle East Fashion Week, and Melbourne Fashion Week, the brand brings a rich blend of global styles and techniques. Prashna works with professional models, photographers, and artists, and offers services across the Middle East and internationally.</p>
    </div>`,
    long_img:"./banner-mockups/6.webp",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./banner-mockups/8.webp",
    title: "Armaf",
    service: "Banner Design",
    projectType: "",
    project_desc:`<div>
    <p class="mb-3">Prashna is a Dubai-based global freelance makeup artist certified by AOFM, one of the world's leading makeup academies. With backstage experience at major fashion events like Arab Fashion Week, Middle East Fashion Week, and Melbourne Fashion Week, the brand brings a rich blend of global styles and techniques. Prashna works with professional models, photographers, and artists, and offers services across the Middle East and internationally.</p>
    </div>`,
    long_img:"./banner-mockups/8.webp",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./banner-mockups/9.webp",
    title: "",
    service: "Banner Design",
    projectType: "",
    project_desc:`<div>
    <p class="mb-3">Prashna is a Dubai-based global freelance makeup artist certified by AOFM, one of the world's leading makeup academies. With backstage experience at major fashion events like Arab Fashion Week, Middle East Fashion Week, and Melbourne Fashion Week, the brand brings a rich blend of global styles and techniques. Prashna works with professional models, photographers, and artists, and offers services across the Middle East and internationally.</p>
    </div>`,
    long_img:"./banner-mockups/9.webp",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./banner-mockups/10.webp",
    title: "",
    service: "Banner Design",
    projectType: "",
    project_desc:`<div>
    <p class="mb-3">Prashna is a Dubai-based global freelance makeup artist certified by AOFM, one of the world's leading makeup academies. With backstage experience at major fashion events like Arab Fashion Week, Middle East Fashion Week, and Melbourne Fashion Week, the brand brings a rich blend of global styles and techniques. Prashna works with professional models, photographers, and artists, and offers services across the Middle East and internationally.</p>
    </div>`,
    long_img:"./banner-mockups/10.webp",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./banner-mockups/11.webp",
    title: "",
    service: "Banner Design",
    projectType: "",
    project_desc:`<div>
    <p class="mb-3">Prashna is a Dubai-based global freelance makeup artist certified by AOFM, one of the world's leading makeup academies. With backstage experience at major fashion events like Arab Fashion Week, Middle East Fashion Week, and Melbourne Fashion Week, the brand brings a rich blend of global styles and techniques. Prashna works with professional models, photographers, and artists, and offers services across the Middle East and internationally.</p>
    </div>`,
    long_img:"./banner-mockups/11.webp",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./banner-mockups/12.webp",
    title: "",
    service: "Banner Design",
    projectType: "",
    project_desc:`<div>
    <p class="mb-3">Prashna is a Dubai-based global freelance makeup artist certified by AOFM, one of the world's leading makeup academies. With backstage experience at major fashion events like Arab Fashion Week, Middle East Fashion Week, and Melbourne Fashion Week, the brand brings a rich blend of global styles and techniques. Prashna works with professional models, photographers, and artists, and offers services across the Middle East and internationally.</p>
    </div>`,
    long_img:"./banner-mockups/12.webp",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./banner-mockups/13.webp",
    title: "",
    service: "Banner Design",
    projectType: "",
    project_desc:`<div>
    <p class="mb-3">Prashna is a Dubai-based global freelance makeup artist certified by AOFM, one of the world's leading makeup academies. With backstage experience at major fashion events like Arab Fashion Week, Middle East Fashion Week, and Melbourne Fashion Week, the brand brings a rich blend of global styles and techniques. Prashna works with professional models, photographers, and artists, and offers services across the Middle East and internationally.</p>
    </div>`,
    long_img:"./banner-mockups/13.webp",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./banner-mockups/14.webp",
    title: "",
    service: "Banner Design",
    projectType: "",
    project_desc:`<div>
    <p class="mb-3">Prashna is a Dubai-based global freelance makeup artist certified by AOFM, one of the world's leading makeup academies. With backstage experience at major fashion events like Arab Fashion Week, Middle East Fashion Week, and Melbourne Fashion Week, the brand brings a rich blend of global styles and techniques. Prashna works with professional models, photographers, and artists, and offers services across the Middle East and internationally.</p>
    </div>`,
    long_img:"./banner-mockups/14.webp",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./banner-mockups/16.webp",
    title: "",
    service: "Banner Design",
    projectType: "",
    project_desc:`<div>
    <p class="mb-3">Prashna is a Dubai-based global freelance makeup artist certified by AOFM, one of the world's leading makeup academies. With backstage experience at major fashion events like Arab Fashion Week, Middle East Fashion Week, and Melbourne Fashion Week, the brand brings a rich blend of global styles and techniques. Prashna works with professional models, photographers, and artists, and offers services across the Middle East and internationally.</p>
    </div>`,
    long_img:"./banner-mockups/16.webp",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./brochure/Sagar%20Tech.webp",
    title: "Sagar Tech",
    service: "Brochure Design",
    projectType: "",
    project_desc:`<div>
    <p class="mb-3">Sagar Tech’s brochure showcases their digital and tech expertise through modern layouts, cool gradients, and futuristic icons. Designed with a focus on innovation and simplicity, the brochure clearly communicates their services while strengthening their tech-driven brand presence.</p>
    </div>`,
    long_img:"./brochure/Sagar%20Tech.webp",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./brochure/AS%20Audio.webp",
    title: "As Audio",
    service: "Brochure Design",
    projectType: "",
    project_desc:`<div>
    <p class="mb-3">The brochure for AS Audio was built to make noise — visually and impactfully. We used high-contrast colors, modern elements, and bold fonts to reflect their advanced sound solutions, creating a brochure that looks and feels powerful.</p>
    </div>`,
    long_img:"./brochure/AS%20Audio.webp",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./brochure/Bareziya%20Architects.webp",
    title: "Bareziya Architechs",
    service: "Brochure Design",
    projectType: "",
    project_desc:`<div>
    <p class="mb-3">For Bareziya Architects, we designed a brochure that reflects structural beauty and modern architecture. Featuring clean lines, geometric layouts, and muted tones, the design emphasizes creativity, planning, and architectural brilliance.</p>
    </div>`,
    long_img:"./brochure/Bareziya%20Architects.webp",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./brochure/Binfinit.webp",
    title: "Binfinit",
    service: "Brochure Design",
    projectType: "",
    project_desc:`<div>
    <p class="mb-3">Binfinit’s brochure is sleek, modern, and minimalistic — echoing their approach to limitless creativity and innovation. With a futuristic design and spacious layouts, we crafted a visual experience that reflects their forward-thinking identity.</p>
    </div>`,
    long_img:"./brochure/Binfinit.webp",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./brochure/Indian%20Handicraft.webp",
    title: "Indian Handicraft",
    service: "Brochure Design",
    projectType: "",
    project_desc:`<div>
    <p class="mb-3">We created a brochure that blends tradition with elegance for Indian Handicraft. Using warm earthy tones, intricate design elements, and heritage-inspired layouts, the brochure beautifully showcases their craftsmanship and cultural richness.</p>
    </div>`,
    long_img:"./brochure/Indian%20Handicraft.webp",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./brochure/kostevo.webp",
    title: "Kostevo",
    service: "Brochure Design",
    projectType: "",
    project_desc:`<div>
    <p class="mb-3">Kostevo’s brochure is designed to represent innovation and precision. With a futuristic design approach, clean grids, and a cool-toned palette, we effectively communicated their technology-focused brand and services in a visually engaging manner.</p>
    </div>`,
    long_img:"./brochure/kostevo.webp",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./brochure/Nhamo%20Toys.webp",
    title: "Hhamo Toys",
    service: "Brochure Design",
    projectType: "",
    project_desc:`<div>
    <p class="mb-3">Hhamo Toys' brochure is full of color, joy, and imagination. We created a playful layout with fun illustrations, bold fonts, and kid-friendly design that reflects the excitement and wonder of their toy collections — perfect for both kids and parents.</p>
    </div>`,
    long_img:"./brochure/Nhamo%20Toys.webp",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./brochure/yovant.webp",
    title: "Yovant",
    service: "Brochure Design",
    projectType: "",
    project_desc:`<div>
    <p class="mb-3">For Yovant, we developed a bright, energetic brochure with vibrant colors and youthful visuals that align with their brand’s playful personality. The design engages the audience while clearly communicating their offerings in a fun and relatable way.</p>
    </div>`,
    long_img:"./brochure/yovant.webp",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./brochure/Orion.webp",
    title: "Orion",
    service: "Brochure Design",
    projectType: "",
    project_desc:`<div>
    <p class="mb-3">Orion’s brochure captures futuristic innovation and sleek design. With dark tones, tech-inspired visuals, and sharp layouts, we created a strong and memorable brand impression, highlighting their modern and cutting-edge solutions.</p>
    </div>`,
    long_img:"./brochure/Orion.webp",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./brochure/Globex.webp",
    title: "Globex",
    service: "Brochure Design",
    projectType: "",
    project_desc:`<div>
    <p class="mb-3">We designed a versatile and globally appealing brochure for Globex, emphasizing their international presence and multifaceted services. The design includes strategic use of space, modern elements, and business-focused messaging that supports their brand identity.</p>
    </div>`,
    long_img:"./brochure/Globex.webp",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./brochure/1.webp",
    title: "Euro Corp",
    service: "Brochure Design",
    projectType: "",
    project_desc:`<div>
    <p class="mb-3">Euro Corp’s brochure embodies corporate excellence and reliability. With a refined design, modern typography, and a balanced visual structure, we presented their brand as trustworthy and globally competent, tailored for a corporate audience.</p>
    </div>`,
    long_img:"./brochure/1.webp",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./brochure/2.webp",
    title: "HPF",
    service: "Brochure Design",
    projectType: "",
    project_desc:`<div>
    <p class="mb-3">We crafted a professional and visually impactful brochure for HPF that aligns with their corporate identity and industry positioning. With a focus on clarity, clean layouts, and strong typography, the brochure delivers their key messages effectively while enhancing their brand image.</p>
    </div>`,
    long_img:"./brochure/2.webp",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./brochure/5.webp",
    title: "MTPC",
    service: "Brochure Design",
    projectType: "",
    project_desc:`<div>
    <p class="mb-3">The MTPC brochure blends technical precision with industrial strength. We used a bold color palette, organized layouts, and infographic-style content to portray their services with authority and professionalism, suitable for a manufacturing and engineering audience.</p>
    </div>`,
    long_img:"./brochure/5.webp",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./brochure/6.webp",
    title: "Capdiw",
    service: "Brochure Design",
    projectType: "",
    project_desc:`<div>
    <p class="mb-3">Capdiw’s brochure was built around a clean and modern design concept that echoes their innovative and tech-forward outlook. We focused on minimal yet striking visuals, easy-to-read layouts, and bold highlights to communicate their solutions clearly and effectively.</p>
    </div>`,
    long_img:"./brochure/6.webp",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./brochure/7.webp",
    title: "Khus Musks",
    service: "Brochure Design",
    projectType: "",
    project_desc:`<div>
    <p class="mb-3">For Khus Musks, we designed a luxurious and aromatic-themed brochure that resonates with the essence of their fragrance range. Using rich tones, elegant fonts, and sensory-driven visuals, the brochure evokes a premium and exotic feel to reflect the brand’s identity.</p>
    </div>`,
    long_img:"./brochure/7.webp",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./brochure/11.webp",
    title: "Mars Air Ocean",
    service: "Brochure Design",
    projectType: "",
    project_desc:`<div>
    <p class="mb-3">The brochure for Mars Air Ocean was designed to reflect their expansive logistics and freight services. We used dynamic graphics, structured content flow, and a globally inspired layout to highlight their air and ocean freight solutions with professionalism and clarity.</p>
    </div>`,
    long_img:"./brochure/11.webp",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },
  {
    imgPath: "./brochure/12.webp",
    title: "HPF",
    service: "Brochure Design",
    projectType: "",
    project_desc:`<div>
    <p class="mb-3">We crafted a professional and visually impactful brochure for HPF that aligns with their corporate identity and industry positioning. With a focus on clarity, clean layouts, and strong typography, the brochure delivers their key messages effectively while enhancing their brand image.</p>
    </div>`,
    long_img:"./brochure/12.webp",
    web_url:"",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },

];


        // Service to project type mapping
        const serviceProjectTypes = {
            "Web Development": [
                "Business", "Builders", "Catalogue", "Logistics", "Ecommerce",
                "Education", "Restaurants", "Trust & Properties", "Travels",
                "Interior Designer", "Health Care", "Human Resource"
            ],
            "SEO": [
                "Armaf", "BS Auto", "Seal Excel", "Noor Al Salama", "Go Classic Tour", "Cotton Culture"
            ],
            "Banner Design": [
                "Digital Ads", "Social Media", "Print Media"
            ],
            // Add other service mappings as needed
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
            projectTypeList.innerHTML = "";
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
            document.getElementById("projectTypeInput").value = "";
            projectTypeList.classList.add("hidden");
        }

        // Render portfolio cards
        const portfolioGrid = document.querySelector("#portfolioContainer");

        portfolioItems.forEach((item, index) => {
            const card = document.createElement("div");
            card.classList.add("portfolio-card", "relative", "bg-white", "p-3", "rounded-2xl", "overflow-hidden", "max-w-[350px]", "w-full");
            card.setAttribute("data-service", item.service);
            card.setAttribute("data-project", item.projectType);

            const descriptionHtml = item.service === "Banner Design"
                ? ""
                : `<div class="text-sm text-gray-500 mt-2 line-clamp-2">${item?.project_desc || 'No description available'}</div>`;
            const titleHtml = item.service === "Banner Design"
                ? ""
                : `<div  class="text-lg font-semibold text-gray-800 line-clamp-1">${item?.title || 'No description available'}</div>`;

            card.innerHTML = `
                <div class="max-w-sm w-full bg-white rounded-2xl overflow-hidden shadow-lg group hover:shadow-xl transition-shadow duration-300 border border-gray-100">
                    <div class="relative overflow-hidden p-2">
                        <img src="${item?.imgPath || './fallback-image.webp'}" alt="${item?.title}" class="w-full h-48 object-contain transform transition-transform duration-300 group-hover:scale-105" />
                    </div>
                    <div class="p-5">
                        <div class="flex items-center justify-between">
                              ${titleHtml}
                            <button class="flex items-center text-sm hover:text-red-700 text-red-500 transition view-button" data-index="${index}">
                                View
                            </button>
                        </div>
                        ${descriptionHtml}
                    </div>
                </div>
            `;

            portfolioGrid.appendChild(card);
        });

        // Popup functionality
        const popup = document.getElementById("projectPopup");
        const popupContent = document.getElementById("popupContent");
        const workDetails = document.getElementById("work-details");
        const longImg = document.getElementById("long-img");
        const popupTitle = document.getElementById("popupTitle");
        const popupImage = document.getElementById("popupImage");
        const popupDescription = document.getElementById("popupDescription");
        const popupLink = document.getElementById("popupLink");
        const closePopup = document.getElementById("closePopup");

        document.addEventListener("click", function (event) {
            if (event.target.closest(".view-button")) {
                const index = event.target.closest(".view-button").dataset.index;
                const item = portfolioItems[index];

                // Update popup content
                popupTitle.textContent = item.title;
                popupImage.src = item.long_img || './fallback-image.webp';
                popupImage.alt = item.title;
                popupDescription.innerHTML = item.project_desc || 'No description available';
                popupLink.href = item.web_url || '#';

                // Adjust layout based on service
                if (item.service === "Banner Design") {
                    workDetails.classList.add("hidden");
                    longImg.classList.remove("md:w-[70%]");
                    longImg.classList.add("w-full");
                    popupContent.classList.remove("md:flex-row");
                    popupContent.classList.add("flex-col");
                    popupImage.classList.remove("w-[80%]");
                    popupImage.classList.add("w-[80%]");
                } else {
                    workDetails.classList.remove("hidden");
                    longImg.classList.remove("w-full");
                    longImg.classList.add("md:w-[70%]");
                    popupContent.classList.remove("flex-col");
                    popupContent.classList.add("md:flex-row");
                    popupImage.classList.remove("w-[80%]");
                    popupImage.classList.add("w-[80%]");
                }

                // Show popup with animation
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
            const visibleCards = document.querySelectorAll(".portfolio-card:not([style*='display: none'])");
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
            updateProjectTypeList("");
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