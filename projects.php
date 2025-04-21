<?php include "include/config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Document</title>
</head>
<body>
      <!-- loading -->
  <!-- <div id="loading">
    <div id="loading-center">
      <img src="images/logoonly.jpg" alt="loder">
    </div>
  </div> -->

  <?php
  $page = 'about';
  include("include/newHeader.php");
  ?>
<div class="">
<h1 id="animatedHeading" class="text-4xl font-medium text-center px-5 mt-7">
  Creating Next Level Digital Products
</h1>
</div>
<div class="flex md:flex-row flex-col justify-between  ">

    <div class="md:w-[20%] w-full p-5 sticky md:top-24 bg-white top-16 h-full">
      <div class="flex justify-between items-center">
        <h4 class="font-medium">Filter</h4>
        <button class="border px-2 text-[13px] rounded-[5px] hover:shadow-sm bg-gradient-to-t from-gray-200 transition-all duration-300 hover:from-gray-300 clear-button ">Clear</button>
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
          <!-- <li class="px-4 py-2 cursor-pointer hover:bg-gray-100 text-sm text-gray-700" onclick="selectService(this)">All</li> -->
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
    <li class="px-4 py-2 cursor-pointer hover:bg-gray-100 text-sm text-gray-700" onclick="selectProjectType(this)">Business</li>
    <li class="px-4 py-2 cursor-pointer hover:bg-gray-100 text-sm text-gray-700" onclick="selectProjectType(this)">Builders</li>
    <li class="px-4 py-2 cursor-pointer hover:bg-gray-100 text-sm text-gray-700" onclick="selectProjectType(this)">Catalogue</li>
    <li class="px-4 py-2 cursor-pointer hover:bg-gray-100 text-sm text-gray-700" onclick="selectProjectType(this)">Logistics</li>
    <li class="px-4 py-2 cursor-pointer hover:bg-gray-100 text-sm text-gray-700" onclick="selectProjectType(this)">Ecommerce</li>
    <li class="px-4 py-2 cursor-pointer hover:bg-gray-100 text-sm text-gray-700" onclick="selectProjectType(this)">Education</li>
    <li class="px-4 py-2 cursor-pointer hover:bg-gray-100 text-sm text-gray-700" onclick="selectProjectType(this)">Restaurants</li>
    <li class="px-4 py-2 cursor-pointer hover:bg-gray-100 text-sm text-gray-700" onclick="selectProjectType(this)">Trust & Properties</li>
    <li class="px-4 py-2 cursor-pointer hover:bg-gray-100 text-sm text-gray-700" onclick="selectProjectType(this)">Travels</li>
    <li class="px-4 py-2 cursor-pointer hover:bg-gray-100 text-sm text-gray-700" onclick="selectProjectType(this)">Interior Designer</li>
    <li class="px-4 py-2 cursor-pointer hover:bg-gray-100 text-sm text-gray-700" onclick="selectProjectType(this)">Health Care</li>
    <li class="px-4 py-2 cursor-pointer hover:bg-gray-100 text-sm text-gray-700" onclick="selectProjectType(this)">Human Resource</li>
  </ul>
</div>


    </div>
    </div>

    <div class="md:w-[80%] w-full p-5">
  <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 place-items-center gap-4" id="portfolioContainer">
    
   

  </div>
</div>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script>
  // Function to wrap each character in a span
  function splitTextByChar(el) {
    const text = el.innerHTML;
    const characters = text
      .replace(/<br\s*\/?>/g, "<br>")
      .split("")
      .map(char => {
        if (char === " ") return `<span class="inline-block w-[0.25em]">&nbsp;</span>`;
        if (char === "<") return char; // Avoid breaking tags
        return `<span class="inline-block char">${char}</span>`;
      }).join("");
    el.innerHTML = characters;
  }

  const heading = document.getElementById("animatedHeading");
  splitTextByChar(heading);

  // Animate the characters
  gsap.from("#animatedHeading .char", {
    y: 50,
    opacity: 0,
    duration: 0.6,
    ease: "power3.out",
    stagger: 0.03
  });
</script>
<script>
  function toggleDropdown() {
    document.getElementById("serviceList").classList.toggle("hidden");
  }

  function selectService(item) {
    document.getElementById("serviceInput").value = item.innerText;
    document.getElementById("serviceList").classList.add("hidden");
  }

  function filterServices() {
    const input = document.getElementById("serviceInput").value.toLowerCase();
    const items = document.querySelectorAll("#serviceList li");
    items.forEach(item => {
      item.style.display = item.innerText.toLowerCase().includes(input) ? "block" : "none";
    });
  }

  // Optional: Hide dropdown if clicking outside
  document.addEventListener("click", function (event) {
    const dropdown = document.getElementById("serviceList");
    const input = document.getElementById("serviceInput");
    if (!input.contains(event.target) && !dropdown.contains(event.target)) {
      dropdown.classList.add("hidden");
    }
  });
</script>
<script>
  function toggleProjectTypeDropdown() {
    document.getElementById("projectTypeList").classList.toggle("hidden");
  }

  function selectProjectType(item) {
    document.getElementById("projectTypeInput").value = item.innerText;
    document.getElementById("projectTypeList").classList.add("hidden");
  }

  function filterProjectTypes() {
    const input = document.getElementById("projectTypeInput").value.toLowerCase();
    const items = document.querySelectorAll("#projectTypeList li");
    items.forEach(item => {
      item.style.display = item.innerText.toLowerCase().includes(input) ? "block" : "none";
    });
  }

  // Optional: Hide both dropdowns if clicking outside
  document.addEventListener("click", function (event) {
    const ptInput = document.getElementById("projectTypeInput");
    const ptList = document.getElementById("projectTypeList");
    if (!ptInput.contains(event.target) && !ptList.contains(event.target)) {
      ptList.classList.add("hidden");
    }
  });
</script>
<script>
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
}

// Call this inside `selectService` and `selectProjectType`

</script>

<script>
  const portfolioItems = [
  {
    imgPath: "./portfolio-mockups/business/verify8.webp",
    title: "Verify8",
    service: "Web Development",
    projectType: "Business",
    web_url:"https://verify8.com/",
       bgGradientStart: "#0fb1d7", // Green color for the gradient
    bgGradientEnd: "#0fb1d7",
  },
  {
    imgPath: "./portfolio-mockups/business/dontquit.webp",
    title: "Don't Quit Ventures",
    service: "Web Development",
    projectType: "Business",
    web_url:"https://dont.quit.ventures/",
       bgGradientStart: "#fe7c02", // Green color for the gradient
    bgGradientEnd: "#fe7c02",
  },
  {
    imgPath: "./portfolio-mockups/business/alsalama.webp",
    title: "Noor Al Salama",
    service: "Web Development",
    projectType: "Business",
    web_url:"https://www.alsalamaacc.com/",
       bgGradientStart: "#dbbc7f", // Dark color for the gradient
    bgGradientEnd: "#dbbc7f"
  },
  {
    imgPath: "./portfolio-mockups/business/eva.webp",
    title: "Eva Skin",
    service: "Web Development",
    projectType: "Business",
    web_url:"https://eva-skin.com/",
       bgGradientStart: "#000000", // Dark color for the gradient
    bgGradientEnd: "#000000"
  },
  {
    imgPath: "./portfolio-mockups/business/yogeshprashna.webp",
    title: "Yogesh Prashna",
    service: "Web Development",
    projectType: "Business",
    web_url:"https://www.yogueshprashna.com/",
       bgGradientStart: "#a46c59", // Dark color for the gradient
    bgGradientEnd: "#a46c59"
  },
  {
    imgPath: "./portfolio-mockups/business/dpcsaudi.webp",
    title: "DPC Saudi",
    service: "Web Development",
    projectType: "Business",
    web_url:"https://dpcsaudi.com/",
       bgGradientStart: "#a46c59", // Dark color for the gradient
    bgGradientEnd: "#a46c59"
  },
  {
    imgPath: "./portfolio-mockups/business/saudiwells.webp",
    title: "Saudi Wells",
    service: "Web Development",
    projectType: "Business",
    web_url:"https://saudiwells.com/#",
       bgGradientStart: "#606773", // Dark color for the gradient
    bgGradientEnd: "#606773"
  },
  {
    imgPath: "./portfolio-mockups/builders/zzconsultant.webp",
    title: "ZZ Consultants",
    service: "Web Development",
    projectType: "Builders",
    web_url:"https://zzconsultants.com/",
      bgGradientStart: "#e53436", // Green color for the gradient
    bgGradientEnd: "#e53436"
  },
  {
    imgPath: "./portfolio-mockups/builders/cementric.webp",
    title: "Cementric",
    service: "Web Development",
    projectType: "Builders",
    web_url:"https://www.cementric.com/",
      bgGradientStart: "#324d87", // Green color for the gradient
    bgGradientEnd: "#324d87"
  },
  {
    imgPath: "./portfolio-mockups/builders/southfield.webp",
    title: "South Field",
    service: "Web Development",
    projectType: "Builders",
    web_url:"https://southfield.co.in/",
      bgGradientStart: "#ffb600", // Green color for the gradient
    bgGradientEnd: "#ffb600"
  },
  {
    imgPath: "./portfolio-mockups/builders/eastman_infra.webp",
    title: "Eastman Infra",
    service: "Web Development",
    projectType: "Builders",
    web_url:"https://eastmaninfra.com/",
      bgGradientStart: "#06386b", // Green color for the gradient
    bgGradientEnd: "#06386b"
  },
  {
    imgPath: "./portfolio-mockups/interior/bareziya_arch.png",
    title: "Bareziya",
    service: "Web Development",
    projectType: "Builders",
    web_url:"https://bareziyaarchitects.com/",
      bgGradientStart: "#33161b", // Green color for the gradient
    bgGradientEnd: "#33161b"
  },
  {
    imgPath: "./portfolio-mockups/builders/archicgreenscape.webp",
    title: "Archic Green Scape",
    service: "Web Development",
    projectType: "Builders",
    web_url:"https://archicgreenscape.com/",
     bgGradientStart: "#e8bd6f", // Red color for the gradient
    bgGradientEnd: "#e8bd6f"
  },
  {
    imgPath: "./portfolio-mockups/builders/folksco.webp",
    title: "Folksco",
    service: "Web Development",
    projectType: "Builders",
    web_url:"https://folksco.in/",
       bgGradientStart: "#ed7936", // Pink color for the gradient
    bgGradientEnd: "#ed7936"
  },
  {
    imgPath: "./portfolio-mockups/ecommerce/thaigerpharma.webp",
    title: "Thaiger Nutraceuticals",
    service: "Web Development",
    projectType: "Catalogue",
    web_url:"https://thaigernutraceuticals.com/",
       bgGradientStart: "#75a7df", // Pink color for the gradient
    bgGradientEnd: "#75a7df"
  },
  {
    imgPath: "./portfolio-mockups/catalogue/kostevo.webp",
    title: "Kostevo",
    service: "Web Development",
    projectType: "Catalogue",
    web_url:"https://kostevo.com/",
       bgGradientStart: "#ed7936", // Pink color for the gradient
    bgGradientEnd: "#ed7936"
  },
  {
    imgPath: "./portfolio-mockups/catalogue/powerplay.webp",
    title: "Powerplay",
    service: "Web Development",
    projectType: "Catalogue",
    web_url:"https://powerplay.ae/",
       bgGradientStart: "#e72528", // Pink color for the gradient
    bgGradientEnd: "#e72528"
  },
  {
    imgPath: "./portfolio-mockups/catalogue/asrehexports.webp",
    title: "Asreh Exports",
    service: "Web Development",
    projectType: "Catalogue",
    web_url:"https://asrehexports.com/",
       bgGradientStart: "#aa231c", // Pink color for the gradient
    bgGradientEnd: "#aa231c"
  },
  {
    imgPath: "./portfolio-mockups/catalogue/redsailexports.webp",
    title: "Redsail Exports",
    service: "Web Development",
    projectType: "Catalogue",
    web_url:"https://redsailexports.com/",
       bgGradientStart: "#043659", // Pink color for the gradient
    bgGradientEnd: "#043659"
  },
  {
    imgPath: "./portfolio-mockups/catalogue/globalhardware.webp",
    title: "Global Hardware",
    service: "Web Development",
    projectType: "Catalogue",
    web_url:"https://globalhardwarekw.com/",
       bgGradientStart: "#00396f", // Pink color for the gradient
    bgGradientEnd: "#00396f"
  },
  {
    imgPath: "./portfolio-mockups/logistics/bml.webp",
    title: "BML Logistics",
    service: "Web Development",
    projectType: "Logistics",
    web_url:"https://bookmylogistic.com/",
       bgGradientStart: "#fec126", // Pink color for the gradient
    bgGradientEnd: "#fec126"
  },
  {
    imgPath: "./portfolio-mockups/business/binfinit.webp",
    title: "Binfinit",
    service: "Web Development",
    projectType: "Logistics",
    web_url:"https://binfinit.co/",
       bgGradientStart: "#f49153", // Pink color for the gradient
    bgGradientEnd: "#f49153"
  },
  {
    imgPath: "./portfolio-mockups/logistics/adhiklogistics.webp",
    title: "Adhik Logistics",
    service: "Web Development",
    projectType: "Logistics",
    web_url:"https://aadhiklogistics.com/",
       bgGradientStart: "#fbbd00", // Pink color for the gradient
    bgGradientEnd: "#fbbd00"
  },
  {
    imgPath: "./portfolio-mockups/logistics/amarclearing.webp",
    title: "Amar Clearing",
    service: "Web Development",
    projectType: "Logistics",
    web_url:"https://amarclearing.com/",
       bgGradientStart: "#2b7b81", // Pink color for the gradient
    bgGradientEnd: "#2b7b81"
  },
  {
    imgPath: "./portfolio-mockups/logistics/amclogistics.webp",
    title: "AMC Logistics",
    service: "Web Development",
    projectType: "Logistics",
    web_url:"https://www.amclogistic.com/",
       bgGradientStart: "#004f89", // Pink color for the gradient
    bgGradientEnd: "#004f89"
  },
  {
    imgPath: "./portfolio-mockups/logistics/index.webp",
    title: "Index Transport",
    service: "Web Development",
    projectType: "Logistics",
    web_url:"https://indextransport.com/",
       bgGradientStart: "#69ac44", // Pink color for the gradient
    bgGradientEnd: "#69ac44"
  },
  {
    imgPath: "./portfolio-mockups/logistics/marsairocean.webp",
    title: "Mars Air Ocean",
    service: "Web Development",
    projectType: "Logistics",
    web_url:"https://marsairocean.com/",
       bgGradientStart: "#fa4318", // Pink color for the gradient
    bgGradientEnd: "#fa4318"
  },
  {
    imgPath: "./portfolio-mockups/logistics/pacematters.webp",
    title: "Pace Matters",
    service: "Web Development",
    projectType: "Logistics",
    web_url:"https://pacematters.in/",
       bgGradientStart: "#744794", // Pink color for the gradient
    bgGradientEnd: "#744794"
  },
  {
    imgPath: "./portfolio-mockups/ecommerce/trillionair.webp",
    title: "Trillionaire",
    service: "Web Development",
    projectType: "Ecommerce",
    web_url:"https://trillionaireautoparts.com/",
       bgGradientStart: "#d12325", // Pink color for the gradient
    bgGradientEnd: "#d12325"
  },
  {
    imgPath: "./portfolio-mockups/ecommerce/cotton-culture.webp",
    title: "Cotton Culture",
    service: "Web Development",
    projectType: "Ecommerce",
    web_url:"https://www.cottonculture.co.in/",
       bgGradientStart: "#e5322c", // Pink color for the gradient
    bgGradientEnd: "#e5322c"
  },
  {
    imgPath: "./portfolio-mockups/ecommerce/arabiantea.webp",
    title: "Arabian Tea",
    service: "Web Development",
    projectType: "Ecommerce",
    web_url:"https://arabiantea.in/",
       bgGradientStart: "#57940f", // Pink color for the gradient
    bgGradientEnd: "#57940f"
  },
  {
    imgPath: "./portfolio-mockups/ecommerce/bsauto.webp",
    title: "BS Auto",
    service: "Web Development",
    projectType: "Ecommerce",
    web_url:"https://bsautoaccessories.com/",
       bgGradientStart: "#3d2b99", // Pink color for the gradient
    bgGradientEnd: "#3d2b99"
  },
  {
    imgPath: "./portfolio-mockups/ecommerce/grandtruck.webp",
    title: "Grand Trunk",
    service: "Web Development",
    projectType: "Ecommerce",
    web_url:"https://thegrandtrunk.in/",
       bgGradientStart: "#2c2a2d", // Pink color for the gradient
    bgGradientEnd: "#2c2a2d"
  },

];

const portfolioGrid = document.querySelector(".grid");
  
  portfolioItems.forEach(item => {
    const card = document.createElement("div");
    card.classList.add("portfolio-card", "relative", "bg-white", "p-3", "rounded-2xl", "overflow-hidden", "max-w-[350px]", "w-full");
    card.setAttribute("data-service", item.service);
    card.setAttribute("data-project", item.projectType);
    
    card.innerHTML = `
      <img src="${item.imgPath}" class="w-full rounded-md" alt="">
      <div class="absolute inset-0 bg-gradient-to-t from-[${item.bgGradientStart}]/60 via-[${item.bgGradientEnd}]/40 to-transparent rounded-md"></div>
      <div class="absolute bottom-3 left-3 text-white font-semibold text-base z-10">${item.title}</div>
    `;
    
    portfolioGrid.appendChild(card);
  });

</script>
<script>
  function selectService(item) {
    document.getElementById("serviceInput").value = item.innerText;
    document.getElementById("serviceList").classList.add("hidden");
    filterCards();  // Call the filter function after selecting a service
  }

  function selectProjectType(item) {
    document.getElementById("projectTypeInput").value = item.innerText;
    document.getElementById("projectTypeList").classList.add("hidden");
    filterCards();  // Call the filter function after selecting a project type
  }

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

  // 👇 Animate filtered cards
  animateVisibleCards();
};


  // Event listener for the "Clear" button
  document.querySelector(".clear-button").addEventListener("click", () => {
    // Clear both filter inputs
    document.getElementById("serviceInput").value = "";
    document.getElementById("projectTypeInput").value = "";

    // Show all cards by calling filterCards (no filter will be applied)
    filterCards();  
  });

  // Optional: Clear filters and show all items on pressing 'Enter' in input fields
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

</script>

<!-- <script>
  function animateVisibleCards() {
  const visibleCards = document.querySelectorAll(".portfolio-card:not([style*='display: none'])");
  gsap.from(visibleCards, {
    y: 40,
    opacity: 0,
    duration: 0.6,
    stagger: 0.1,
    ease: "power2.out"
  });
};


portfolioItems.forEach(item => {
  const card = document.createElement("div");
  // your code...
  portfolioGrid.appendChild(card);
});

// 👇 Add this
animateVisibleCards();
</script> -->



</body>
</html>
<?php
    include("include/footer.php");
    ?>