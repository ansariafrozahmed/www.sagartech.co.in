<?php include "include/config.php"; ?>
<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="ecommerce-website-development-company-in-mumbai.css"
    />
    <link
      rel="stylesheet"
      href="ecommerce-website-development-company-in-mumbai-responsive.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap"
      rel="stylesheet"
    />
    <title>No.1 Ecommerce Website Development Agency in India</title>
  </head>
<body>
    <?php
    $page = 'about';
    include("include/newHeader.php");
    ?>
   <div class="new_ecom_style_main">
      <div class="new_ecom_style_container">
        <div class="new_ecom_style_headdiv">
          <h1 class="new_ecom_style_heading">
            Get <span class="new_ecom_style_highlight">Ecommerce</span> website
            for your business
          </h1>
          <p class="new_ecom_style_text">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
          </p>
        </div>

        <div class="new_ecom_style_card_container">
          <div class="radio-inputs">
            <label class="radio">
              <input checked name="package" type="radio" value="basic" />
              <span class="name">Basic</span>
            </label>
            <label class="radio">
              <input name="package" type="radio" value="advanced" />
              <span class="name">Advanced</span>
            </label>
            <label class="radio">
              <input name="package" type="radio" value="advanced-app" />
              <span class="name">Advanced + App</span>
            </label>
          </div>

          <!-- Basic Package -->
          <div id="basic" class="new_ecom_style_package-container active">
            <div id="basic-cards" class="new_ecom_style_package-cards"></div>
          </div>

          <!-- Advanced Package -->
          <div id="advanced" class="new_ecom_style_package-container">
            <div id="advanced-cards" class="new_ecom_style_package-cards"></div>
          </div>

          <!-- Advanced + App Package -->
          <div id="advanced-app" class="new_ecom_style_package-container">
            <div
              id="advanced-app-cards"
              class="new_ecom_style_package-cards"
            ></div>
          </div>
        </div>
      </div>

      <!-- FAQ -->
      <div class="new_ecom_style_faq">
        <h2>FAQs</h2>
        <p>Everything you need to know about the product and billing.</p>
        <div class="new_ecom_style_faq_inner">
          <div class="new_ecom_style_faq_inner_card">
            <h3>Is there a free trial available ?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Accusamus, assumenda perspiciatis? Adipisci itaque tempora
            </p>
          </div>
          <div class="new_ecom_style_faq_inner_card">
            <h3>Is there a free trial available ?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Accusamus, assumenda perspiciatis? Adipisci itaque tempora
            </p>
          </div>
          <div class="new_ecom_style_faq_inner_card">
            <h3>Is there a free trial available ?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Accusamus, assumenda perspiciatis? Adipisci itaque tempora
            </p>
          </div>
          <div class="new_ecom_style_faq_inner_card">
            <h3>Is there a free trial available ?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Accusamus, assumenda perspiciatis? Adipisci itaque tempora
            </p>
          </div>
          <div class="new_ecom_style_faq_inner_card">
            <h3>Is there a free trial available ?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Accusamus, assumenda perspiciatis? Adipisci itaque tempora
            </p>
          </div>
          <div class="new_ecom_style_faq_inner_card">
            <h3>Is there a free trial available ?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Accusamus, assumenda perspiciatis? Adipisci itaque tempora
            </p>
          </div>
        </div>
      </div>
    </div>

    <script>
      const basicPackages = [
        {
          icon: [
            "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ58f__Hs5QwGWIEcsawDwW1o5IQzaYNPONhQ&s",
          ],
          heading: "Shopify",
          subheading:
            "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis.",
          buttonText: "Talk to us",
          featurelist: [
            "Dashboard Access",
            "Customer Support",
            "Unlimited Campaigns",
            "Fraud Prevention",
            "AI Processing",
          ],
        },
        {
          icon: [
            "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzAxIzs2yRTPxONA1yBwMZdhkNwlqmIpxFug&s",
          ],
          heading: "Wordpress",
          subheading:
            "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis.",
          buttonText: "Talk to us",
          featurelist: [
            "Dashboard Access",
            "Customer Support",
            "Unlimited Campaigns",
            "Fraud Prevention",
            "AI Processing",
          ],
        },
        {
          icon: [
            "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzAxIzs2yRTPxONA1yBwMZdhkNwlqmIpxFug&s",
            "https://marcbruederlin.gallerycdn.vsassets.io/extensions/marcbruederlin/next-icons/0.1.0/1723747598319/Microsoft.VisualStudio.Services.Icons.Default",
          ],
          heading: "Headless",
          subheading:
            "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis.",
          buttonText: "Talk to us",
          featurelist: [
            "Dashboard Access",
            "Customer Support",
            "Unlimited Campaigns",
            "Fraud Prevention",
            "AI Processing",
          ],
        },
        {
          icon: [
            "https://siyahfy.com/favicon/favicon-32x32.png",
            "https://marcbruederlin.gallerycdn.vsassets.io/extensions/marcbruederlin/next-icons/0.1.0/1723747598319/Microsoft.VisualStudio.Services.Icons.Default",
          ],
          heading: "Custom",
          subheading:
            "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis.",
          buttonText: "Talk to us",
          featurelist: [
            "Dashboard Access",
            "Customer Support",
            "Unlimited Campaigns",
            "Fraud Prevention",
            "AI Processing",
          ],
        },
      ];

      const AdvancedPackages = [
        {
          icon: [
            "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ58f__Hs5QwGWIEcsawDwW1o5IQzaYNPONhQ&s",
          ],
          heading: "Advanced Shopify",
          subheading:
            "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis.",
          buttonText: "Talk to us",
          featurelist: [
            "Dashboard Access",
            "Customer Support",
            "Unlimited Campaigns",
            "Fraud Prevention",
            "AI Processing",
          ],
        },
        {
          icon: [
            "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzAxIzs2yRTPxONA1yBwMZdhkNwlqmIpxFug&s",
          ],
          heading: "Advanced Wordpress",
          subheading:
            "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis.",
          buttonText: "Talk to us",
          featurelist: [
            "Dashboard Access",
            "Customer Support",
            "Unlimited Campaigns",
            "Fraud Prevention",
            "AI Processing",
          ],
        },
        {
          icon: [
            "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzAxIzs2yRTPxONA1yBwMZdhkNwlqmIpxFug&s",
            "https://marcbruederlin.gallerycdn.vsassets.io/extensions/marcbruederlin/next-icons/0.1.0/1723747598319/Microsoft.VisualStudio.Services.Icons.Default",
          ],
          heading: "Advanced Headless",
          subheading:
            "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis.",
          buttonText: "Talk to us",
          featurelist: [
            "Dashboard Access",
            "Customer Support",
            "Unlimited Campaigns",
            "Fraud Prevention",
            "AI Processing",
          ],
        },
        {
          icon: [
            "https://siyahfy.com/favicon/favicon-32x32.png",
            "https://marcbruederlin.gallerycdn.vsassets.io/extensions/marcbruederlin/next-icons/0.1.0/1723747598319/Microsoft.VisualStudio.Services.Icons.Default",
          ],
          heading: "Advanced Custom",
          subheading:
            "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis.",
          buttonText: "Talk to us",
          featurelist: [
            "Dashboard Access",
            "Customer Support",
            "Unlimited Campaigns",
            "Fraud Prevention",
            "AI Processing",
          ],
        },
      ];

      const AdvancedWithAppPackages = [
        {
          icon: [
            "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ58f__Hs5QwGWIEcsawDwW1o5IQzaYNPONhQ&s",
          ],
          heading: "Advanced Shopify + App",
          subheading:
            "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis.",
          buttonText: "Talk to us",
          featurelist: [
            "Dashboard Access",
            "Customer Support",
            "Unlimited Campaigns",
            "Fraud Prevention",
            "AI Processing",
          ],
        },
        {
          icon: [
            "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzAxIzs2yRTPxONA1yBwMZdhkNwlqmIpxFug&s",
          ],
          heading: "Advanced Wordpress + App",
          subheading:
            "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis.",
          buttonText: "Talk to us",
          featurelist: [
            "Dashboard Access",
            "Customer Support",
            "Unlimited Campaigns",
            "Fraud Prevention",
            "AI Processing",
          ],
        },
        {
          icon: [
            "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzAxIzs2yRTPxONA1yBwMZdhkNwlqmIpxFug&s",
            "https://marcbruederlin.gallerycdn.vsassets.io/extensions/marcbruederlin/next-icons/0.1.0/1723747598319/Microsoft.VisualStudio.Services.Icons.Default",
          ],
          heading: "Advanced Headless + App",
          subheading:
            "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis.",
          buttonText: "Talk to us",
          featurelist: [
            "Dashboard Access",
            "Customer Support",
            "Unlimited Campaigns",
            "Fraud Prevention",
            "AI Processing",
          ],
        },
        {
          icon: [
            "https://siyahfy.com/favicon/favicon-32x32.png",
            "https://marcbruederlin.gallerycdn.vsassets.io/extensions/marcbruederlin/next-icons/0.1.0/1723747598319/Microsoft.VisualStudio.Services.Icons.Default",
          ],
          heading: "Advanced Custom + App",
          subheading:
            "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis.",
          buttonText: "Talk to us",
          featurelist: [
            "Dashboard Access",
            "Customer Support",
            "Unlimited Campaigns",
            "Fraud Prevention",
            "AI Processing",
          ],
        },
      ];

      const renderPackageCards = (packages, containerId) => {
        const container = document.getElementById(containerId);
        container.innerHTML = ""; // Clear if re-rendered

        packages.forEach((item) => {
          const card = document.createElement("div");
          card.className = "new_ecom_style_package-card";

          const iconsHTML = item.icon
            .map(
              (src) =>
                `<img title="${item.heading}" src="${src}" alt="${item.heading} icon" style="height:28px; object-fit: contain;width:28px;  margin-right:10px" />`
            )
            .join("");

          let featuresHTML = "";
          if (item.featurelist?.length) {
            featuresHTML += `
          <div class="new_ecom_style_features_div">
            <h3 class="new_ecom_style_features_div_heading">What's Included?</h3>
            <div class="new_ecom_style_features_div_list">
        `;
            featuresHTML += item.featurelist
              .map(
                (feature) => `
              <div class="new_ecom_style_features_div_list_item">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="green" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles-icon lucide-sparkles">
                  <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"/>
                  <path d="M20 3v4"/><path d="M22 5h-4"/><path d="M4 17v2"/><path d="M5 18H3"/>
                </svg>
                <p>${feature}</p>
              </div>
            `
              )
              .join("");
            featuresHTML += `</div></div>`;
          }

          card.innerHTML = `
        <div class="new_ecom_style_card_heading">
          ${iconsHTML}
          <h4>${item.heading}</h4>
        </div>
        <p class="new_ecom_style_card_subheading">${item.subheading}</p>
        ${featuresHTML}
        <button class="new_ecom_style_button">${item.buttonText}</button>
      `;

          container.appendChild(card);
        });
      };

      renderPackageCards(basicPackages, "basic-cards");
      renderPackageCards(AdvancedPackages, "advanced-cards");
      renderPackageCards(AdvancedWithAppPackages, "advanced-app-cards");

      const radios = document.querySelectorAll('input[name="package"]');
      const containers = document.querySelectorAll(
        ".new_ecom_style_package-container"
      );
      let currentActive = document.querySelector(
        ".new_ecom_style_package-container.active"
      );

      radios.forEach((radio) => {
        radio.addEventListener("change", () => {
          if (!radio.checked) return;

          const selectedId = radio.value;
          const nextActive = document.getElementById(selectedId);

          // Skip if same tab
          if (nextActive === currentActive) return;

          // Animate out current
          if (currentActive) {
            currentActive.classList.remove("active");
            currentActive.classList.add("exiting");

            setTimeout(() => {
              currentActive.classList.remove("exiting");
            }, 400); // match CSS transition duration
          }

          // Animate in new tab
          nextActive.classList.add("active");
          currentActive = nextActive;
        });
      });
    </script>
</body>
</html>
<?php
    include("include/footer.php");
?>