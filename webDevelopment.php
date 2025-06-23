<!doctype html>
<html lang="en">

<head>
    <title>Best Web Design and Web Development Company in Mumbai</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="Are you trying to find a web development company? Our knowledgeable web designers in Mumbai fulfil your digital vision. We deliver excellence.">
    <meta name="keywords" content="Web Development">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Best Web Design and Web Development Company in Mumbai">
    <meta property="og:url" content="https://sagartech.co.in/web-development-company-in-mumbai">
    <meta property="og:image" content="https://sagartech.co.in/images/OG-Images/web-development-og.webp">
    <meta property="og:description"
        content="Are you trying to find a web development company? Our knowledgeable web designers in Mumbai fulfil your digital vision. We deliver excellence.">
    <!-- Favicon -->
    <link rel="canonical" href="https://sagartech.co.in/web-development-company-in-mumbai" />
    <link rel="shortcut icon" href="images/logoonly.jpg" />
    <!-- <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'> -->
    <!-- bootstrap -->
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" /> -->
    <!-- main style -->
    <!-- <link href="css/style.css" rel="stylesheet" type="text/css" /> -->
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&display=swap" rel="stylesheet" />

    <!-- responsive -->
    <!-- <link href="css/responsive.css" rel="stylesheet" type="text/css" /> -->
    <!-- custom -->
    <!-- <link href="css/custom.css" rel="stylesheet" type="text/css" /> -->
    <!-- <link rel="stylesheet" href="css/web-dev.css" ype="text/css"> -->
    <!-- <link href="css/newcssresponsive.css" rel="stylesheet" type="text/css" /> -->
    <!-- <link rel="stylesheet" href="css/web-design.css"> -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-156939866-1"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Swiper CSS -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>


    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-156939866-1');
    </script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    backgroundImage: {
                        'custom-pink-gradient': 'linear-gradient(163deg, rgba(250,246,243,1) 14%, rgba(246,213,229,1) 37%, rgba(253,43,33,1) 99%)',
                    },
                },
            },
            plugins: [
                require('@tailwindcss/line-clamp')
            ]
        }
    </script>
</head>
<style type="text/css">
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: "Bricolage Grotesque", sans-serif;
    }

    .button1 {
        cursor: pointer;
        position: relative;
        padding: 10px 30px;
        font-size: 15px;
        color: #242424;
        border: 1px solid #242424;
        border-radius: 34px;
        background-color: transparent;
        font-weight: 400;
        transition: all 0.3s cubic-bezier(0.23, 1, 0.32, 1);
        overflow: hidden;
    }

    .button1::before {
        content: "";
        position: absolute;
        inset: 0;
        margin: auto;
        width: 50px;
        height: 50px;
        border-radius: inherit;
        scale: 0;
        z-index: -1;
        background-color: #242424;
        transition: all 0.6s cubic-bezier(0.23, 1, 0.32, 1);
    }

    .button1:hover::before {
        scale: 3;
    }

    .button1:hover {
        color: #fff;
        box-shadow: 0 0px 20px rgba(193, 163, 98, 0.4);
    }

    .button1:active {
        scale: 1;
    }

    .button2 {
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 15px;
        color: #ff0808;
        background-color: transparent;
        border: none;
    }

    .button2:hover {
        color: #242424;
        text-underline-offset: 6px;
        text-decoration: underline;
    }

    .fade-target {
        opacity: 0;
        transform: translateY(10px);
        transition: opacity 0.8s ease, transform 0.8s ease;
    }

    .fade-active {
        opacity: 1;
        transform: translateY(0);
    }

    .swiper-pagination-bullet {
        background-color: #ef4444 !important;
        /* Tailwind red-500 */
        opacity: 1;
    }

    .swiper-pagination-bullet-active {
        background-color: #b91c1c !important;
        /* Tailwind red-700 */
    }
</style>
</style>

<body>
    <!-- <div id="loading">
        <div id="loading-center">
            <img src="images/logoonly.jpg" alt="sagar tech logo" title="sagar tech logo">
        </div>
    </div> -->
    <?php
    $page = 'services';
    include("include/newHeader.php"); ?>
    <!-- Top Banner with Breadcrumb -->
    <div class="w-full bg-[radial-gradient(circle,_rgba(111,0,0,1)_0%,_rgba(48,0,0,1)_100%)]  py-12 px-4 lg:px-20">
        <div class="max-w-7xl mx-auto space-y-5">

            <!-- Breadcrumb Path -->
            <nav class="text-sm text-gray-100 mb-2">
                <ol class="list-reset flex flex-wrap items-center space-x-2">
                    <li><a href="/" class="hover:underline text-gray-300">Home</a></li>
                    <li><i class="fa-solid fa-angles-right text-white text-xs"></i></li>
                    <li><a href="/services" class="hover:underline text-gray-300">Services</a></li>
                    <li><i class="fa-solid fa-angles-right text-white text-xs"></i></li>
                    <li class="text-gray-200 font-medium">Web Development</li>
                </ol>
            </nav>

            <!-- Title -->
            <h1 class=" text-[28px] lg:text-[40px] leading-[1.15] max-w-[600px] lg:max-w-[700px] font-[400]  text-gray-200 mb-2">
                Leading Web Development Company in Mumbai
            </h1>

            <!-- Description -->
            <p class="text-[13.5px] font-light tracking-wide  text-gray-300 max-w-3xl max-sm:text-justify">
                Our specialisation as a web design agency and our web designers in Mumbai is building stunning, functional websites that boost your internet presence. As a leading web design company, we apply modern technologies like Node.js, WordPress, Next.js, React.js, and Shopify. Our skilled group of web designers in Mumbai produces exceptional results that are specific to your business's goals. Let's work together to develop a website that is focused on growth. Get in touch with us immediately!
            </p>
            <div class="flex items-center gap-3 !mt-7">
                <div class="">
                    <a href="#open-modal" class="">

                        <button
                            class="relative px-[30px] py-[10px] text-[15px] font-normal text-[#fff] hover:text-[#242424] border border-[#fff] rounded-full overflow-hidden transition-all duration-300 ease-[cubic-bezier(0.23,1,0.32,1)] group bg-transparent">
                            <span class="relative z-10">Quick Enquiry</span>

                            <!-- expanding circle effect -->
                            <span
                                class="absolute inset-0 m-auto w-[50px] h-[50px] bg-[#fff] rounded-full scale-0 
                            transition-all duration-700 ease-[cubic-bezier(0.23,1,0.32,1)]  
                            group-hover:scale-[4] z-0"></span>
                        </button>
                    </a>

                </div>
                <div class="">
                    <a href="portfolio/website" class="">

                        <button
                            class="relative px-[30px] py-[10px] text-[15px] font-normal text-[#fff] hover:text-[#242424] border border-[#fff] rounded-full overflow-hidden transition-all duration-300 ease-[cubic-bezier(0.23,1,0.32,1)] group bg-transparent">
                            <span class="relative z-10">Our Portfolio</span>

                            <!-- expanding circle effect -->
                            <span
                                class="absolute inset-0 m-auto w-[50px] h-[50px] bg-[#fff] rounded-full scale-0 
                        transition-all duration-700 ease-[cubic-bezier(0.23,1,0.32,1)]  
                        group-hover:scale-[4] z-0"></span>
                        </button>
                    </a>

                </div>
            </div>
        </div>
    </div>

    <div class=" lg:pt-16 pt-10">
        <?php
        include("include/new-services/web-development/videoSection.php"); ?>
        <?php
        include("include/new-services/web-development/whychooseUs.php"); ?>
        <?php
        include("include/new-services/web-development/new-our-Client.php"); ?>
        <?php
        include("include/new-services/web-development/developmentServices.php"); ?>
        <?php
        include("include/new-services/web-development/carousel.php"); ?>
        <?php
        include("include/new-services/web-development/tanstack.php"); ?>
        <?php
        include("include/new-services/web-development/ourProcess.php"); ?>
        <?php
        include("include/new-services/web-development/checklist.php"); ?>
        <?php
        include("include/new-services/web-development/secondLast.php"); ?>
        <?php
        include("include/faqs.php"); ?>
    </div>
    <!-- /HEADER END -->






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





    <style>
        .newsecondsection {
            padding: 50px 60px;
            display: flex;
            gap: 50px;
            align-items: center;
            justify-content: start;
        }

        .newsecondsection .left {
            width: 50%;
        }

        .newsecondsection .left h2 {
            font-size: 30px;
            font-weight: 600;
        }

        .newsecondsection .left h3 {
            font-size: 20px;
            font-weight: 500;
        }

        .newsecondsection .right {
            width: 50%;
        }

        .newsecondsection .right img {
            height: 100%;
            width: 100%;
        }

        @media only screen and (max-width: 767px) {
            .dsanjkdhw0qp {
                height: auto !important;
            }

            .newsecondsection {
                padding: 50px 20px;
                display: flex;
                flex-direction: column-reverse;
                gap: 20px;
                align-items: center;
                justify-content: start;
            }

            .newsecondsection .left {
                width: 100%;
            }

            .newsecondsection .left h2 {
                font-size: 30px;
                font-weight: 600;
            }

            .newsecondsection .left h3 {
                font-size: 20px;
                font-weight: 500;
            }

            .newsecondsection .right {
                width: 100%;
            }

            .newsecondsection .right img {
                height: 100%;
                width: 100%;
            }
        }
    </style>



    <?php include("include/footer.php"); ?>
    <script src="js/custom.js"></script>
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
</body>

</html>