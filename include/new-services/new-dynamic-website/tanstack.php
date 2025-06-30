<div class="lg:px-20 lg:pb-16 pb-10 px-4 bg-white">
    <h2 class="text-[28px] lg:text-[40px] leading-[1.15] max-w-[600px] lg:max-w-[700px] mx-auto text-center font-[400] text-[#242424]"><span class="">Tech Stack</span> We Use</h2>
    <div class="grid lg:grid-cols-6 grid-cols-2 gap-5  mt-7">
        <?php
        // $imageUrls = [
        //   "./image/techStack/rbi.webp",
        //   "./image/techStack/armaf.webp",
        //   "./image/techStack/bsauto.webp",
        //   "./image/techStack/OasisConsulting.webp",
        //   "./image/techStack/chief-parfums-final.webp",
        //   "./image/techStack/axxio-laboratory.webp",
        //   "./image/techStack/acharya-shiv.webp",
        //   // "./image/techStack/ngmp.webp",
        //   "./image/techStack/AlhamdGroup.webp",
        //   "./image/techStack/cotton-culture.webp",
        //   "./image/techStack/ASAudio.webp",
        //   "./image/techStack/ZZConsultants.webp",
        //   // "./image/techStack/Trillionaire.webp",
        //   "./image/techStack/Tasavvur.webp",
        //   //"./image/techStack/PadmavatiChains.webp",
        // ];
        $imageUrls = [
            "./image/techStack/1.png",
            "./image/techStack/2.png",
            "./image/techStack/3.png",
            "./image/techStack/4.png",
            "./image/techStack/5.png",
            "./image/techStack/6.png",
            "./image/techStack/7.png",
            "./image/techStack/8.png",
            "./image/techStack/9.png",
            "./image/techStack/10.png",
            "./image/techStack/11.png",
            "./image/techStack/12.png",
            "./image/techStack/13.png",
            "./image/techStack/14.png",
            "./image/techStack/15.png",
            "./image/techStack/16.png",
            "./image/techStack/17.png",
            "./image/techStack/18.png",
            "./image/techStack/19.png",
            "./image/techStack/20.png",
            "./image/techStack/21.png",
            "./image/techStack/22.png",
            "./image/techStack/23.png",
            "./image/techStack/24.png",
        ];

        $techNames = [
            "Nodejs",
            "Reactjs",
            "Nextjs",
            "PostgreSQL",
            "MySQL",
            "WordPress",
            "Bootstrap",
            "Tailwind CSS",
            "HTML5",
            "CSS3",
            "JavaScript",
            "Shopify",
            "MongoDB",
            "TypeScript",
            "Flutter",
            "PHP",
            "Laravel",
            "Expressjs",
            "Firebase",
            "Remix",
            "Expo",
            "React Native",
            "Cloudflare",
            "JWT"
        ];

        $techLinks = [
            "/nodejs-development-company-in-india",
            "/reactjs-development-company-in-mumbai",
            "/nextjs-development-services-in-india",
            "/postgresql-database-services-in-mumbai",
            "/mysql-database-services-in-mumbai",
            "/wordpress-developers-in-mumbai",
            "/bootstrap-development-services-mumbai",
            "/tailwind-css-web-development-in-india",
            "/html-service-in-mumbai",
            "/css-service-in-mumbai",
            "/javascript-development-services-in-mumbai",
            "/shopify-developers-in-mumbai",
            "/mongodb-services-in-mumbai",
            "/typescript-service-in-mumbai",
            "/flutter-service-in-mumbai",
            "/php-website-development-company-in-mumbai",
            "/laravel-development-services-in-mumbai",
            "/expressjs-services-in-mumbai",
            "/firebase-services-in-mumbai",
            "/remix-services-in-india",
            "/expo-services-in-india",
            "/react-native-development-in-mumbai",
            "/cloudflare-service-in-india",
            "/jwt-authentication-services-in-india",
        ];
        foreach ($imageUrls as $index => $imageUrl) {
            echo '<div class="flex justify-center items-center border p-5 max-w-[180px] h-[120px] overflow-hidden lg:mb-5 mb-3 rounded-md shadow-md ">';
            echo '<a href="' . $techLinks[$index] . '" title="' . $techNames[$index] . '">';
            echo '<img src="' . $imageUrl . '" alt="' . $techNames[$index] . '" class="w-28">';
            echo '</a>';
            echo '</div>';
        }
        ?>
        <!-- target="_blank"  -->
    </div>

</div>