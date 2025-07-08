<!DOCTYPE html>
<html lang="en">

<head>
    <title>Best WordPress Website Development Services In Mumbai | India</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="WordPress website development: Easily create eye-catching, expert websites. For you, our professionals create unique WordPress websites optimized for search engines.">
    <meta name="keywords" content="wordpress-website-development-company">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Best WordPress Website Development Services In Mumbai | India">
    <meta property="og:url" content="https://sagartech.co.in/wordpress-developers-in-mumbai">
    <meta property="og:image" content="https://sagartech.co.in/images/OG-Images/wordpress.png">
    <meta property="og:description"
        content="WordPress website development: Easily create eye-catching, expert websites. For you, our professionals create unique WordPress websites optimized for search engines.">
    <!-- Favicon -->
    <link rel="canonical" href="https://sagartech.co.in/wordpress-developers-in-mumbai" />
    <link rel="shortcut icon" href="images/logoonly.jpg" />

    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <!-- AOS JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <!-- GSAP + ScrollTrigger + SplitType -->
    <script src="https://unpkg.com/gsap@3/dist/gsap.min.js"></script>
    <script src="https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js"></script>
    <script src="https://unpkg.com/split-type"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-156939866-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-156939866-1');
    </script>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: "Bricolage Grotesque", sans-serif !important;
    }

    .darkBody {
        background-color: #fff;
    }
</style>

<body>
    <?php
    $page = 'services';
    include("include/newHeader.php"); ?>
    <?php
    include('include/new-services/new-wordpress-development/landingSection.php')
    ?>
    <?php
    include('include/new-services/new-wordpress-development/gsapVideoSection.php')
    ?>
    <?php
    include('include/new-services/new-wordpress-development/servicesProvided.php')
    ?>
    <?php
    include('include/new-services/new-wordpress-development/whychooseUs.php')
    ?>
    <?php
    include('include/new-services/new-wordpress-development/whyYourBusiness.php')
    ?>
    <?php
    include('include/new-services/new-wordpress-development/wordpressShowcaseCard.php')
    ?>
    <div class="lg:!px-8">
        <?php
        include('NewVersion/Homepage/clientShowcase/clients.php')
        ?>
    </div>
    <?php
    include("include/new-services/new-dynamic-website/secondLast.php"); ?>
    <?php

    $faqData = [
        [
            "question" => "Why do I need an E-Commerce Website for my business?",
            "answer" => "An E-Commerce website expands your reach, allowing you to tap into a global market. It provides a convenient shopping experience for customers and enhances your business visibility."
        ],
        [
            "question" => "What services do you offer for E-Commerce Websites?",
            "answer" => "Yes, we specialize in developing custom E-Commerce websites designed to meet your specific business requirements, ensuring a unique and effective online presence."
        ],
        [
            "question" => "Can you optimize my website for search engines (SEO)?",
            "answer" => "Yes, we offer SEO-friendly web development services to ensure your website is optimized for search engines, helping to improve its visibility and ranking in search results."
        ],
        [
            "question" => "How do you ensure the security of transactions on E-Commerce websites?",
            "answer" => "We implement robust security measures, including SSL encryption, secure payment gateways, and compliance with industry standards, to protect customer data and ensure safe transactions."
        ],
        [
            "question" => "Can you integrate popular payment gateways into my E-Commerce website?",
            "answer" => "Yes, we can integrate various payment gateways like PayPal, Stripe, and others, providing your customers with multiple secure options for making online purchases."
        ],
        [
            "question" => "What platforms do you use for building E-Commerce websites?",
            "answer" => "We work with popular E-Commerce platforms such as Shopify, WooCommerce, Magento, and others, selecting the platform that best aligns with your business goals and requirements."
        ],
        [
            "question" => "Can you create a mobile-responsive design for my E-Commerce website?",
            "answer" => "Yes Absolutely, we prioritize mobile-responsive design to ensure that your E-Commerce website functions seamlessly on various devices, providing an optimal user experience."
        ],
        [
            "question" => "Do you offer ongoing support and maintenance for E-Commerce websites?",
            "answer" => "Yes, we provide ongoing support and maintenance services to keep your E-Commerce website updated, secure, and functioning smoothly, ensuring a positive experience for both you and your customers."
        ]
    ];

    $faqId = "faq1"; // unique per section
    include 'include/faqs.php';
    ?>
    </div>
    <?php include("include/footer.php"); ?>
</body>
<script src="./NewVersion/Homepage/clientShowcase/clients.js" defer></script>
<script>
    document.querySelectorAll('.accordion-item h2').forEach((accordionToggle) => {
        accordionToggle.addEventListener('click', () => {
            const accordionItem = accordionToggle.parentNode;
            const accordionContent = accordionToggle.nextElementSibling;

            // If this accordion item is already open, close it.
            if (accordionContent.style.maxHeight) {
                accordionContent.style.maxHeight = null;
                accordionItem.classList.remove('active');
            } else {
                accordionContent.style.maxHeight = accordionContent.scrollHeight + 'px';
                accordionItem.classList.add('active');
            }
        });
    });
</script>
<script>
    AOS.init({
        offset: 50, // offset (in px) from the original trigger point
        delay: 0, // values from 0 to 3000, with step 50ms
        duration: 700, // values from 0 to 3000, with step 50ms
        once: true, // whether animation should happen only once - while scrolling down
    });
</script>

<!-- <script src="js/custom.js"></script> -->
<script type="text/javascript">
    (function() {
        var options = {
            whatsapp: "+919820133303", // WhatsApp number
            email: "info@sagartech.co.in", // Email
            call_to_action: "Contact Us", // Call to action
            button_color: "#FF0808", // Color of button
            position: "left", // Position may be 'right' or 'left'
            order: "whatsapp,email", // Order of buttons
        };
        var proto = document.location.protocol,
            host = "getbutton.io",
            url = proto + "//static." + host;
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = url + '/widget-send-button/js/init.js';
        s.onload = function() {
            WhWidgetSendButton.init(host, proto, options);
        };
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
    })();
</script>

</html>