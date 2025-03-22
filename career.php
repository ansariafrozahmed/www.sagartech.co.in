<?php
include "include/config.php";
?>
<!doctype html>
<html lang="en">

<head>
    <title>IT Career Options | Top IT Jobs in Mumbai | Get Started</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Find the best IT jobs in Mumbai and fascinating IT career options. Find the perfect chance to launch or grow your tech career right now!
">
    <meta name="keywords" content="IT Career Options , IT Jobs Mumbai">
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/logoonly.jpg" />
    <link rel="canonical" href="https://sagartech.co.in/career">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="IT Career Options | Top IT Jobs in Mumbai | Get Started">
    <meta property="og:description"
        content="Find the best IT jobs in Mumbai and fascinating IT career options. Find the perfect chance to launch or grow your tech career right now!">
    <meta property="og:url" content="https://sagartech.co.in/career">
    <meta property="og:site_name" content="Sagar Tech - Technical Solution">
    <meta property="og:image" content="https://sagartech.co.in/images/sagartech1.png">
    <!-- bootstrap -->
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" /> -->
    <!-- main style -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!-- responsive -->
    <link href="css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="css/newcssresponsive.css" rel="stylesheet" type="text/css" />
    <!-- custom -->
    <!-- <link href="css/custom.css" rel="stylesheet" type="text/css" /> -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-156939866-1"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-156939866-1">
    </script>
    <script src="https://cdn.tailwindcss.com"></script>

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

    .careerbanner {
        padding: 150px 40px;
        background-image: url('https://umoja.africa/cdn/shop/files/CATEGORY_WEB_BANNERS_CAREER.jpg?v=1721637156&width=1445');
        background-repeat: no-repeat;
        background-position: top;
        background-size: cover;
        position: relative;
        color: white;
    }

    .careerbanneroverlay {
        position: absolute;
        inset: 0;
        background-color: black;
        opacity: 0.2;
        z-index: 10;
    }

    .contentdiv {
        z-index: 20;
        text-align: center;
        position: relative;
    }

    .contentdiv h2 {
        color: white;
        text-align: center;
        font-size: 90px;
        margin-bottom: 30px;
        font-weight: 900;
    }

    .contentdiv p {
        padding: 2px 0px;
        font-size: 16px;
        font-weight: 500;
    }

    @media (max-width: 767px) {
        .careerbanner {
            padding: 50px 10px;
        }

        .contentdiv h2 {
            font-size: 50px;
            margin-bottom: 5px;

        }

        .contentdiv p {
            padding: 4px 0px;
            font-size: 13px;
            line-height: normal;
            font-weight: 500;
        }
    }

    .careerseconddiv {
        padding: 50px 100px;
    }

    .careerseconddiv h2 {
        margin-bottom: 10px;
        font-size: 35px;
        font-weight: 600;
    }

    .careerseconddiv p {
        text-align: justify;
    }

    @media (max-width: 767px) {
        .careerseconddiv {
            padding: 20px;
        }

        .careerseconddiv h2 {
            font-size: 22px;
            line-height: normal;
            margin-bottom: 10px;
            font-weight: 500;
        }
    }

    .careerthirddiv {
        padding: 0px 100px;
        padding-bottom: 50px;
    }

    .careerthirddiv h2 {
        font-size: 35px;
        font-weight: 600;
    }

    .careerthirdaccordiondiv {
        padding: 40px 0px;
    }

    @media (max-width: 767px) {
        .careerthirddiv {
            padding: 20px;
        }

        .careerthirddiv h2 {
            font-size: 30px;
            font-weight: 600;
        }
    }

    .accordion {
        padding: 15px 0px;
    }

    .accordion-item {
        margin: 10px 0px;
        color: #333;
    }

    .accordion-item h2 {
        padding: 15px;
        font-size: 20px;
        background-color: #EDEDED;
        font-weight: 500;
        line-height: normal;
        margin: 0;
        cursor: pointer;
    }

    .accordion-item h3 {
        color: #FF0808;
        font-weight: 500;
        font-size: 17px;
    }

    .accordion-item ol {
        padding: 5px 20px;
    }

    .accordion-item ol li {
        list-style-type: square !important;
    }

    .accordion-content {
        max-height: 0;
        /* Set a default max-height, but don't display it */
        overflow: hidden;
        /* Hide the content */
        transition: max-height 0.4s ease-out;
        /* Add a transition effect when sliding down (and up) the content */
        padding: 0 1em;
    }

    .accordion-content p {
        padding: 1em 0;
        font-size: 16px;
        margin: 0;

    }

    /* Add this class to .accordion-content when the accordion item is active/open */
    .accordion-content.active {
        max-height: auto;
        /* Adjust as needed */
    }

    /*adding the + and - signs*/
    .accordion-item h2 {
        position: relative;
        padding-right: 30px;
        /* Adjust as needed */
    }

    .accordion-item h2::before {
        content: "+";
        color: #8f060f;
        position: absolute;
        right: 10px;
        /* Adjust as needed */
    }

    .accordion-item.active h2::before {
        content: "-";
    }

    /* For mobile screens */
    @media (max-width: 767px) {
        .accordion {
            max-width: 100vw;
            margin: 0 auto;
        }

        .accordion-item h2 {
            padding: 20px;
            font-size: 16px;
            line-height: normal;
            margin: 0;
            cursor: pointer;
        }

        .accordion-content p {
            padding: 1em 0;
            font-size: 15px;
            margin: 0;
            line-height: normal;
        }
    }
</style>

<body>
    <!-- loading -->
    <div id="loading">
        <div id="loading-center">
            <img src="images/logoonly.jpg" alt="loder">
        </div>
    </div>

    <?php
    $page = 'career';
    include("include/newHeader.php");
    ?>


    <div class="careerbanner">
        <div class="careerbanneroverlay"></div>
        <!-- <div class="contentdiv">
            <h2>JOBS</h2>
            <p>Pursue your IT career in a growing environment by working alongside a brilliant group of professionals.
            </p>
            <p>Send your CV to <a class="interlink" href="mail:info@sagartech.co.in">info@sagartech.co.in</a>,
                mentioning
                the post applied for in the subject line.</p>
        </div> -->
    </div>
    <style>
        body {
            font-family: Arial, sans-serif;

            margin: 0;
            padding: 0;
        }

        .career-section {
            max-width: 1200px;
            margin: 30px auto;
            padding: 20px;
            text-align: center;
        }

        .career-section h2 {
            color: #ff2828;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .job-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .job-card {
            background: #1a1a1a;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(255, 40, 40, 0.4);
            transition: transform 0.3s;
        }

        .job-card:hover {
            transform: translateY(-5px);
        }

        .job-title {
            font-size: 1.5rem;
            color: #ff2828;
            margin-bottom: 10px;
        }

        .job-description {
            font-size: 1rem;
            color: #ccc;
            margin-bottom: 15px;
        }

        .apply-btn {
            background: #ff2828;
            color: white !important;
            padding: 10px 20px;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
            display: inline-block;
            transition: background 0.3s;
        }

        .apply-btn:hover {
            background: #fff !important;
            color: black
        }
    </style>
    <section class="career-section py-16 px-6 md:px-12 lg:px-24 ">
        <h2 class="text-4xl font-bold text-center mb-12 text-white">Current Job Openings</h2>
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">

            <!-- SEO Executive -->
            <div class="job-card bg-white bg-opacity-10 backdrop-blur-lg p-6 rounded-2xl shadow-lg hover:scale-105 transition-all">
                <h3 class="job-title text-xl md:h-[55px] font-semibold text-white">SEO Executive</h3>
                <p class="job-description text-gray-300 mt-2">Looking for an SEO expert with at least 1 year of experience.</p>
                <a href="#" class="apply-btn inline-block mt-4 px-6 py-2 text-white bg-blue-600 hover:bg-blue-700 rounded-lg transition-all">Apply Now</a>
            </div>

            <!-- Business Development Manager -->
            <div class="job-card bg-white bg-opacity-10 backdrop-blur-lg p-6 rounded-2xl shadow-lg hover:scale-105 transition-all">
                <h3 class="job-title text-xl  md:h-[55px font-semibold text-white">Business Development Manager</h3>
                <p class="job-description text-gray-300 mt-2">Seeking a BDM with 1+ years of experience in the IT development sector.</p>
                <a href="#" class="apply-btn inline-block mt-4 px-6 py-2 text-white bg-blue-600 hover:bg-blue-700 rounded-lg transition-all">Apply Now</a>
            </div>


        </div>
    </section>


    <div class="careerthirddiv">
        <h2>We Are Hiring !</h2>
        <div class="accordion">
            <?php
            $api_url = 'https://sagartech.co.in/blogs/wp-json/wp/v2/career?_fields=meta';

            $response = file_get_contents($api_url);

            $data = json_decode($response);

            if ($data && is_array($data) && !empty($data)) {
                foreach ($data as $item) {
            ?>
                    <div class="accordion-item">
                        <h2><?php echo $item->meta->job_title; ?></h2>
                        <div class="accordion-content">
                            <p><?php echo $item->meta->job_description; ?></p>
                        </div>
                    </div>
            <?php
                }
            } else {
                echo '<p>Currently no vacancy</p>';
            }
            ?>
        </div>
        <p>Send your CV to <a class="interlink" href="mail:info@sagartech.co.in">info@sagartech.co.in</a>, mentioning
            the post applied for in the subject line.</p>
    </div>


    <?php
    include("include/footer.php");
    ?>
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