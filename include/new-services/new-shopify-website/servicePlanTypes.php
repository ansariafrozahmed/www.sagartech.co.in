<!-- Quote Request Modal -->
<div id="quoteModal" class="fixed inset-0 z-50 bg-black/30 backdrop-blur-sm hidden items-center justify-center">
    <div class="bg-white rounded-xl shadow-xl w-full max-w-md p-6 relative animate-fadeIn">
        <button onclick="closeQuoteModal()" class="absolute top-3 right-4 text-2xl text-gray-500 hover:text-black">×</button>
        <h3 class="text-xl font-semibold text-[#242424] mb-2">Request a Quote</h3>
        <p class="text-sm text-gray-500 mb-4">We’ll get back to you shortly.</p>
        <div id="form-message" class="hidden text-sm mb-4"></div>
        <form id="myForm" class="space-y-4">
            <input type="text" name="plan" id="plan">
            <div>
                <input type="text" name="fname" id="fname" placeholder="Your Name" class="w-full border mb-2 p-2 rounded-lg text-sm focus:ring-2 focus:ring-blue-500" />
            </div>
            <div>
                <input type="email" name="femail" id="femail" placeholder="Your Email" class="w-full mb-2 border p-2 rounded-lg text-sm focus:ring-2 focus:ring-blue-500" />
            </div>
            <div>
                <input type="tel" name="phone" id="phone" placeholder="Your Phone Number" class="w-full mb-2 border p-2 rounded-lg text-sm focus:ring-2 focus:ring-blue-500" />
            </div>
            <button type="submit" id="send" class="w-full bg-black text-white py-2 rounded-lg text-sm hover:bg-gray-800 transition">Submit</button>
        </form>
    </div>
</div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#myForm').validate({
            rules: {
                fname: {
                    required: true
                },
                femail: {
                    required: true,
                    email: true
                },
                phone: {
                    required: true,
                    maxlength: 10,
                    minlength: 10,
                    digits: true
                },
                plan: {
                    required: true,
                },
            },
            submitHandler: function(form) {
                const name = $("#fname").val();
                const email = $("#femail").val();
                const phone = $("#phone").val();
                const plan = $("#plan").val();

                // console.log('Form Data:', {
                //     name,
                //     email,
                //     phone,
                //     plan
                // });

                sendEmail(name, email, phone, plan);

                return false; // prevent actual form submission
            }
        });
    });

    function sendEmail(name, email, phone, plan) {
        // console.log(name, email, phone, plan, "name, email, phone, plan");

        $.ajax({
            url: 'include/new-services/new-shopify-website/send_email.php',
            method: 'POST',
            dataType: 'text',
            data: {
                name: name,
                email: email,
                phone: phone,
                plan: plan,
            },
            success: function(data) {
                console.log("Server Response:", data);
                if (data == '1') {
                    swal("Thanks for being awesome!", "We will get back to you shortly.", "success");
                } else {
                    swal("Oops", "Something went wrong.", "error");
                }
                $('#myForm')[0].reset();
            },
        });
    }
</script>



<div class="bg-gray-50 py-20 px-4 lg:px-20">
    <div class="mb-12">
        <h2 class="text-[35px] lg:text-[50px] leading-[1.15] max-w-[600px] lg:max-w-[700px] font-[400] text-[#242424]">
            Shopify Website Packages
        </h2>
        <p class="text-gray-600 text-sm mt-2 max-w-2xl ">
            Choose from flexible Shopify plans tailored for startups, growing brands, and established businesses. Get a fully functional online store that fits your needs and budget.
        </p>
    </div>
    <div
        id="plans-wrapper"
        class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6 justify-center h-full"
        style="background-image: url('new-image/plans-bg.png'); background-size: cover; background-position: center;">
    </div>
</div>

<script>
    const plans = [{
            name: "Basic Plan",
            tagline: "Best for: Startups or solo entrepreneurs looking for a quick, clean online presence",
            type: "Shopify (Free Theme)",
            image: "new-images/shopify-color.png",
            features: [
                "Shopify Store Setup",
                "Theme Installation (Free Theme)",
                "Homepage, Shop, Product, Cart, Checkout Pages",
                "Product Upload (Up to 20 SKUs)",
                "Basic Collections & Categories",
                "Payment Gateway Integration (Razorpay, PayPal, etc.)",
                "Shipping & Tax Setup",
                "Basic SEO Setup",
                "7 Days Free Support"
            ]
        },
        {
            name: "Standard Plan",
            tagline: "Best for: Growing D2C brands that want better design and functionality",
            type: "Shopify (Premium Theme)",
            image: "new-images/shopify-color.png",
            features: [
                "All Basic Plan Features",
                "Premium Theme Customization",
                "Product Upload (Up to 100 SKUs)",
                "Collection Filters (e.g., Price, Type, Tags)",
                "Discount Coupons & Offers Setup",
                "Custom Pages: About Us, Contact, Privacy Policy",
                "WhatsApp Chat Integration",
                "Email Notifications for Orders",
                "Facebook & Instagram Shop Integration",
                "15 Days Free Support"
            ]
        },
        {
            name: "Advanced Plan",
            tagline: "Best for: Scaling brands with automation, upselling & 3rd-party integrations",
            type: "Shopify (Premium Apps)",
            image: "new-images/shopify-color.png",
            features: [
                "All Standard Plan Features",
                "Product Upload (Up to 300 SKUs)",
                "Custom Homepage Banners + Animation",
                "Reviews & UGC Integration (Judge.me/Looox)",
                "Wishlist, Recently Viewed, Related Products",
                "Cart Abandonment Email Setup",
                "Loyalty Program & Rewards Setup",
                "Upsell/Cross-Sell Apps Integration",
                "Advanced Analytics Dashboard",
                "Multi-Currency & Multi-Language Support",
                "Google Analytics & Facebook Pixel",
                "30 Days Free Support"
            ]
        }
    ];

    const icon = `
      <svg xmlns="http://www.w3.org/2000/svg" class="min-w-[15px]" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="green" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"/>
        <path d="M20 3v4"></path>
        <path d="M22 5h-4"></path>
        <path d="M4 17v2"></path>
        <path d="M5 18H3"></path>
      </svg>`;

    const plansWrapper = document.getElementById("plans-wrapper");

    plans.forEach(plan => {
        const featureList = plan.features
            .map(item => `<li class="flex items-start gap-3 mt-2">${icon}<span class="text-[13px] text-gray-600">${item}</span></li>`)
            .join("");

        plansWrapper.innerHTML += `
        <div class="max-w-[400px] lg:h-[635px] bg-white w-full h-full border rounded-lg p-5 flex flex-col justify-between" data-aos="fade-up">
          <div>
            <div class="flex justify-between items-center">
              <img src="${plan.image}" alt="${plan.name} logo" class="w-10">
              <span class="text-sm font-medium text-gray-800">${plan.type}</span>
            </div>
            <h3 class="text-[28px] lg:text-[32px] font-[400] text-[#242424] mt-5 leading-[1.15]">${plan.name}</h3>
            <p class="text-[13px] font-light tracking-wide text-gray-600 mt-2">${plan.tagline}</p>
            <h4 class="text-[14px] font-medium mt-5 text-gray-800">Feature Inclusions</h4>
            <ul class="mt-4">${featureList}</ul>
          </div>
          <button onclick="openQuoteModal('${plan.name}')" class="mt-6 bg-black text-white w-full py-2 rounded-lg text-sm hover:bg-gray-800 transition">
            Request a Quote
          </button>
        </div>`;
    });

    function openQuoteModal(planName) {
        document.getElementById("plan").value = planName;
        document.getElementById("quoteModal").classList.remove("hidden");
        document.getElementById("quoteModal").classList.add("flex");
        document.getElementById("form-message").classList.add("hidden");
        document.getElementById("quoteForm").reset();
    }

    function closeQuoteModal() {
        document.getElementById("quoteModal").classList.remove("flex");
        document.getElementById("quoteModal").classList.add("hidden");
    }

    // Close on background click
    document.getElementById("quoteModal").addEventListener("click", function(e) {
        if (e.target === this) closeQuoteModal();
    });

    // Close on ESC key press
    document.addEventListener("keydown", (e) => {
        if (e.key === "Escape") closeQuoteModal();
    });

    // Form submission with AJAX
    document.getElementById("quoteForm").addEventListener("submit", function(e) {
        e.preventDefault();
        const formMessage = document.getElementById("form-message");
        const formData = new FormData(document.getElementById("quoteForm"));
        console.log(formData, "formData")

        fetch("send_email.php", {
                method: "POST",
                body: formData // Do NOT set Content-Type
            })
            .then(response => response.json())
            .then(result => {
                formMessage.classList.remove("hidden");
                formMessage.classList.remove("text-red-600", "text-green-600");

                if (result.success) {
                    formMessage.classList.add("text-green-600");
                    formMessage.textContent = "Quote request sent successfully!";
                    setTimeout(() => {
                        formMessage.textContent = "";
                        closeQuoteModal();
                    }, 2000);
                } else {
                    formMessage.classList.add("text-red-600");
                    formMessage.textContent = result.message || "Failed to send quote request.";
                }
            })
            .catch(error => {
                formMessage.classList.remove("hidden");
                formMessage.classList.add("text-red-600");
                formMessage.textContent = "Error: Unable to send request.";
                console.error("Error:", error);
            });
    });
</script>