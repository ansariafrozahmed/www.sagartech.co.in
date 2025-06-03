<style>
    .our-service-main-section {
        background-color: #f2f2f2;
        padding: 60px 100px;
        width: 100%;
    }

    .our-service-main-section .our-service-heading-top {
        font-size: 40px;
        text-transform: uppercase;
        /* padding: 20px 0px; */
        padding-bottom: 30px;
        text-align: center;
        font-weight: 700;
    }

    .our-service-section {
        width: 100%;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        gap: 50px;
    }

    .our-service-card {
        /* background-color: white; */
        /* aspect-ratio: 4 / 4; */
        /* border: 1px solid #dbdbdb; */
        /* padding: 60px 40px; */
        /* padding-bottom: 15px; */
        /* border-radius: 20px; */
        /* box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24); */
    }

    .our-service-card {
        background-color: white;
        padding: 50px 25px;
        border-radius: 20px;
        transition: all .2s ease-in-out;
        /* Transition applied for both hover-in and hover-out */
        cursor: pointer;
    }

    .our-service-card:hover {
        /* box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px; */
    }

    .our-service-card:hover {
        box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        /* transition-delay: 0.4s;  */
        transition-delay: 0.2s;
        /* Delay the hover-in effect */
    }

    .our-service-card:hover .our-service-heading {
        color: #ff0808;
    }

    .our-service-card .afreen {
        /* transition: margin 0.4s ease;  */
        transition: margin 0.2s ease;
        /* Add transition to ensure it smoothly moves back */
    }

    .our-service-img-div {
        width: 100%;
        /* height: 220px; */
        display: flex;
        align-items: start;
        justify-content: left;
        overflow: hidden;
        /* background-color: green; */
        /* padding: 10px 20px; */
        /* background-color: #f2f2f2; */
        /* border: 1px solid #dbdbdb; */
        border-radius: 10px;
        padding-left: 10px;
    }

    .our-service-img-div img {
        height: 40px;
        width: 40px;
        object-fit: contain;
        transition: all ease-in-out .2s;

    }

    .our-service-img-div a {
        background-color: #f2f2f2;
        padding: 20px;
        border-radius: 70px;
        /* box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px; */
        box-shadow: rgb(149 157 165 / 11%) 0px 8px 24px;
    }

    /* .our-service-img-div img:hover {
        transform: scale(1.1);
    } */

    .our-service-content-div {
        padding: 10px;
        /* text-align: center; */
    }

    .our-service-content-div .our-service-heading {
        font-size: 20px;
        /* font-size: 18px; */
        /* text-align: center; */
        padding: 15px 0px;
        line-height: normal;
        font-weight: 600;
    }

    .our-service-content-div .our-service-content {
        font-size: 14px;
        line-height: 1.5;
        overflow: hidden;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 3;
        /* -webkit-line-clamp: 2; */
        text-align: justify;
        padding: 0 0px;
        margin-top: 10px;
    }

    hr {
        /* border: none;
        height: 4px;
        background-color: #E31F14;
        width: 40%; */
    }

    .our-service-card:hover .afreen {
        /* margin-top: -20px; */
        /* margin-bottom: 20px; */
        /* transition-delay: 2s; */
    }

    .our-service-card:hover .afreen {
        margin-top: -20px;
        margin-bottom: 20px;
        /* transition-delay: 0.5s; */
        transition-delay: 0.2s;
        /* Delay the hover-in effect */
    }

    @media only screen and (max-width: 767px) {
        .our-service-main-section {
            background-color: #f2f2f2;
            padding: 50px 20px;
            background-color: #f2f2f2;
            width: 100%;
        }

        .our-service-section {
            width: 100%;
            display: grid;
            grid-template-columns: 1fr;
            gap: 20px;
        }
    }

    @media only screen and (min-width: 768px) and (max-width: 1023px) {
        .our-service-main-section {
            background-color: #f2f2f2;
            padding: 50px 30px;
            background-color: #f2f2f2;
            width: 100%;
        }

        .our-service-section {
            width: 100%;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
    }

    .button-62 {
        background: linear-gradient(to bottom right, #FF0808, #fc6262);
        border: 0;
        border-radius: 12px;

        color: #FFFFFF;
        cursor: pointer;
        display: inline-block;
        font-family: -apple-system, system-ui, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
        font-size: 16px;
        font-weight: 500;
        line-height: 2.5;
        outline: transparent;
        /* padding: 5px 30px; */
        padding: 3px 40px !important;
        text-align: center;
        text-decoration: none;
        transition: box-shadow .2s ease-in-out;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        white-space: nowrap;
    }

    .button-62:not([disabled]):focus {
        box-shadow: 0 0 .25rem rgba(0, 0, 0, 0.5), -.125rem -.125rem 1rem rgba(239, 71, 101, 0.5), .125rem .125rem 1rem rgba(255, 154, 90, 0.5);
    }

    .button-62:not([disabled]):hover {
        box-shadow: 0 0 .25rem rgba(0, 0, 0, 0.5), -.125rem -.125rem 1rem rgba(239, 71, 101, 0.5), .125rem .125rem 1rem rgba(255, 154, 90, 0.5);
        color: white;
    }

    .our-service-content {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .our-service-content.show-more {
        -webkit-line-clamp: initial;
        display: block;
    }

    .read-more-less-btn {
        background-color: #00000000;
        color: #000000;
        border: none;
        /* padding: 10px 20px; */
        outline: none !important;
        cursor: pointer;
        margin-top: 2px;
        margin-left: -6px;
    }

    .our-service-content {
        display: none;
        /* Hide content by default */
    }

    .our-service-content.show-more {
        display: block;
        /* Show content when the class is added */
    }

    .our-service-card {
        overflow: hidden;
        /* Ensure no overflow on the card */
        transition: height 0.3s ease;
        /* Smooth transition for height change */
    }

    .row {
        display: flex;
        flex-wrap: wrap;
        row-gap: 30px;
    }

    @media (max-width: 767px) {
        .our-service-main-section h2 {
            font-size: 30px !important;
            padding-bottom: 20px !important;
        }
    }
</style>

<div class="our-service-main-section ">
    <h2 class=" our-service-heading-top">Our <span style="color:#ff0808">Services</span></h2>
    <section class="row">
        <!-- <div class="d-flex col-md-3"> -->
        <?php
        $services = [
            [
                'imageSrc' => './image/homepage/services-icons/web-dev.webp',
                'imageAlt' => 'Web Development & Designing',
                'heading' => 'Web Development & Designing',
                'description' => 'Sagar Tech Technical Solution stands out as an award-winning
                            ecommerce website development services provider in Mumbai. Having a track record of
                            providing innovative solutions We take pride in our ability to develop e-commerce websites
                            that not only matches your business needs but also exceed the needs of businesses looking
                            for an efficient and eye-catching online presence. we work using latest technology React,
                            Next.js, Node.js,etc.',
                'link' => 'web-development-company-in-mumbai',
                'buttonLabel' => 'Read More'
            ],
            // Add more services here as additional arrays
            [
                'imageSrc' => './image/homepage/services-icons/digital-marketing.webp',
                'imageAlt' => 'Digital Marketing',
                'heading' => 'Digital Marketing',
                'description' => 'Sagar Tech Technical Solution is an award-winning Digital
                            marketing Company right here in the heart of Mumbai. We help To Drive Sales on Your Website
                            By Providing Expert Digital Marketing Solutions. We Provide Services Like Google Ads, Search
                            Engine Optimization, Social Media Ads, and more.',
                'link' => 'digital-marketing-company-in-mumbai',
                'buttonLabel' => 'Read More'
            ],
            [
                'imageSrc' => './image/homepage/services-icons/app-development.webp',
                'imageAlt' => 'App Development',
                'heading' => 'App Development',
                'description' => "Sagar Tech's commitment to innovation and excellence has
                            positioned it as a reliable partner for businesses looking to leverage the vast potential of
                            online commerce. With a team of seasoned professionals, Sagar Tech combines cutting-edge
                            technology, user-centric design, and industry expertise to deliver tailored e-commerce
                            solutions that cater to the unique needs of each client.",
                'link' => 'mobile-app-development-company-in-mumbai',
                'buttonLabel' => 'Read More'
            ],
            [
                'imageSrc' => './image/homepage/services-icons/graphic-design.webp',
                'imageAlt' => 'Graphic Designing',
                'heading' => 'Graphic Designing',
                'description' => 'Sagar Tech Technical Solution is on of the best Graphic design
                            services provider in Mumbai our team of expert is specilised to turn your imagination into
                            to reality. Beyond just creating visually appealing images, graphic design plays a pivotal
                            role in conveying messages, establishing brand identity, and influencing the overall user
                            experience.',
                'link' => 'graphic-design-services-in-mumbai',
                'buttonLabel' => 'Read More'
            ],
            [
                'imageSrc' => './image/homepage/services-icons/sms-marketing.webp',
                'imageAlt' => 'Bulk SMS Service',
                'heading' => 'Bulk SMS Service',
                'description' => "In today's fast-paced digital world, effective communication
                            is more critical than ever. At Sagar Tech, we take pride in being your ultimate partner for
                            state-of-the-art communication solutions. Whether you're seeking the expertise of a Bulk SMS
                            Service Provider or in need of a reliable WhatsApp Bulk Message service, rest assured, we've
                            got your back.",
                'link' => 'bulk-sms-service-provider-in-mumbai',
                'buttonLabel' => 'Read More'
            ],
            [
                'imageSrc' => './image/homepage/services-icons/seo.webp',
                'imageAlt' => 'SEO Service',
                'heading' => 'SEO Service',
                'description' => "Improve your online visibility and drive organic traffic to
                            your website with our comprehensive SEO services. At Sagar Tech - Technical Solutions, we
                            specialize in optimizing your web presence to rank higher in search engine results. Our SEO
                            experts utilize advanced strategies tailored to your business goals. From keyword research
                            and on-page optimization to link building and content creation, we enhance your website's
                            authority and relevance for targeted search queries.",
                'link' => 'seo-company-in-mumbai',
                'buttonLabel' => 'Read More'
            ],
        ];

        // foreach ($services as $service) {
        //     echo '<a href="' . $service['link'] . '">';
        //     echo '<div class="col-lg-4 col-md-4 col-sm-12">';
        //     echo '<div class="our-service-card">';
        //     echo '  <div class="afreen">';
        //     echo '      <div class="our-service-img-div">';
        //     echo '          <img src="' . $service['imageSrc'] . '" alt="' . $service['imageAlt'] . '">';
        //     echo '      </div>';
        //     echo '      <div class="our-service-content-div">';
        //     echo '          <a href="' . $service['link'] . '">';
        //     echo '              <h2 class="our-service-heading">' . $service['heading'] . '</h2>';
        //     echo '          </a>';
        //     echo '          <hr style="border: none; height: 4px; background-color: #E31F14; width: 40%;">';
        //     echo '          <span class="our-service-content">' . $service['description'] . '</span>';
        //     echo '          <button class="read-more-less-btn">' . $service['buttonLabel'] . '</button>';
        //     echo '      </div>';
        //     echo '  </div>';
        //     echo '</div>';
        //     echo '</div>';
        //     echo '</a>';
        // }

        foreach ($services as $service) {
            echo '<div class="col-lg-4 col-md-4 col-sm-12">';
            echo '<a href="' . $service['link'] . '" >'; // Wrap the entire card in <a>
            echo '<div class="our-service-card">';
            echo '  <div class="afreen">';
            echo '      <div class="our-service-img-div">';
            echo '          <img src="' . $service['imageSrc'] . '" alt="' . $service['imageAlt'] . '" title="' . $service['imageAlt'] . '">';
            echo '      </div>';
            echo '      <div class="our-service-content-div">';
            echo '          <h2 class="our-service-heading">' . $service['heading'] . '</h2>'; // Removed nested <a>
            echo '          <hr style="border: none; height: 4px; background-color: #E31F14; width: 40%;">';
            echo '          <span class="our-service-content">' . $service['description'] . '</span>';
            echo '          <button class="read-more-less-btn">' . $service['buttonLabel'] . '</button>';
            echo '      </div>';
            echo '  </div>';
            echo '  </div>';
            echo '</a>'; // Closing <a> after the card content
            echo '</div>';
        }

        ?>
        <!-- </div> -->
    </section>
</div>

<!-- <script>
document.addEventListener('DOMContentLoaded', function () {
    const serviceCards = document.querySelectorAll('.our-service-card');

    serviceCards.forEach(card => {
        const content = card.querySelector('.our-service-content');
        const button = card.querySelector('.read-more-less-btn');

        button.addEventListener('click', function () {
            content.classList.toggle('show-more');

            // Adjust card height based on content visibility
            if (content.classList.contains('show-more')) {
                // Set the card height to the full height of the content
                card.style.height = card.scrollHeight + 'px';
                button.textContent = 'Read Less';
            } else {
                // Reset height to initial (collapsed) height
                card.style.height = '';
                button.textContent = 'Read More';
            }
        });
    });
});
</script> -->
