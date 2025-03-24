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
            margin: 0;
            padding: 0;
        }

        .career-section {
            max-width: 1200px;
            margin: 30px auto;
            padding: 20px;
            text-align: center;
        }

        /* .career-section h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            text-transform: uppercase;
        } */

        .job-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .job-card {
            background: #fff;
            border-radius: 8px;
            box-shadow: rgba(255, 40, 40, 0.4) 0px 1px 2px 0px, rgba(255, 40, 40, 0.4) 0px 2px 6px 2px;
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
            color: #000;
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
            background: #000 !important;
            color: black
        }

        .our-client-main-div h2 {
            font-size: 40px;
            font-weight: 700;
            color: #2b2a2a;
            text-transform: uppercase;
            font-family: 'Raleway', sans-serif;
        }

        @media (max-width: 767px) {
            .our-client-main-div h2 {
                font-size: 30px !important;

            }
        }
    </style>
    <section class="career-section py-16 px-6 md:px-12 lg:px-24">
        <div class="our-client-main-div pb-6 lg:pb-10">
            <h2>Current <span style="color: #ff0808">Job Openings</span></h2>
        </div>
        <div class="grid gap-5 lg:gap-8 md:grid-cols-2 lg:grid-cols-2">

            <!-- SEO Executive -->
            <div class="job-card bg-white bg-opacity-10 backdrop-blur-lg lg:py-10 p-6 rounded-2xl shadow-lg hover:scale-105 transition-all">
                <h3 class="job-title text-xl font-semibold text-white">SEO Executive</h3>
                <p class="job-description text-gray-300 mt-2">Looking for an SEO expert with at least 1 year of experience.</p>
                <button onclick="openModal('SEO Executive')" class="apply-btn inline-block mt-4 px-6 py-2 text-white bg-blue-600 hover:bg-blue-700 rounded-lg transition-all">Apply Now</button>
            </div>

            <!-- Business Development Manager -->
            <div class="job-card bg-white bg-opacity-10 backdrop-blur-lg lg:py-10 p-6 rounded-2xl shadow-lg hover:scale-105 transition-all">
                <h3 class="job-title text-xl font-semibold text-white">Business Development Manager</h3>
                <p class="job-description text-gray-300 mt-2">Seeking a BDM with 1+ years of experience in the IT development sector.</p>
                <button onclick="openModal('Business Development Manager')" class="apply-btn inline-block mt-4 px-6 py-2 text-white bg-blue-600 hover:bg-blue-700 rounded-lg transition-all">Apply Now</button>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div id="resumeModal" class="fixed inset-0 flex items-center justify-center hidden bg-black bg-opacity-50 z-50">
        <div class="bg-white p-6 rounded-lg w-96 shadow-lg">
            <h2 class="text-xl font-semibold" id="modalJobTitle"></h2>
            <p class="text-gray-600 mt-2">Upload your resume to apply.</p>
            <input type="file" id="resumeInput" class="mt-4 w-full p-2 border rounded-lg" accept=".pdf,.doc,.docx">
            <div class="mt-4 flex justify-end gap-3">
                <button onclick="closeModal()" class="px-4 py-2 bg-gray-300 rounded-lg hover:bg-gray-400">Cancel</button>
                <button onclick="submitApplication()" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">Submit</button>
            </div>
        </div>
    </div>

    <script>
        let selectedJob = "";

        function openModal(jobTitle) {
            selectedJob = jobTitle;
            document.getElementById('modalJobTitle').innerText = `Apply for ${jobTitle}`;
            document.getElementById('resumeModal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('resumeModal').classList.add('hidden');
        }

        function submitApplication() {
            const resume = document.getElementById('resumeInput').files[0];
            if (!resume) {
                alert("Please upload your resume.");
                return;
            }

            const formData = new FormData();
            formData.append("jobTitle", selectedJob);
            formData.append("resume", resume);

            fetch("career-email.php", {
                method: "POST",
                body: formData
            }).then(response => response.text()).then(data => {
                alert("Application submitted successfully.");
                closeModal();
            }).catch(error => {
                console.error("Error:", error);
                alert("Failed to submit application.");
            });
        }
    </script>



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