<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
    .our-service-main-section {
        /* background-color: #f2f2f2; */
        padding: 60px 100px;
        width: 100%;
    }

    .our-service-main-section .our-service-heading-top 
    {
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
        background-color: white;
        padding: 50px 25px;
        border-radius: 5px;
        /* transition: all .2s ease-in-out; */
        /* Transition applied for both hover-in and hover-out */
        cursor: pointer;
        border: 1px solid #e5dede;
    }

    .our-service-card:hover {
        box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        border: none;
        /* transition-delay: 0.4s;  */
        /* transition-delay: 0.2s; */
        /* Delay the hover-in effect */
    }

    .our-service-card .afreen {
        /* transition: margin 0.4s ease;  */
        /* transition: margin 0.2s ease; */
        /* Add transition to ensure it smoothly moves back */
    }

    .our-service-img-div {
        width: 100%;
        /* height: 220px; */
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        /* background-color: green; */
        /* padding: 10px 20px; */
        /* background-color: #f2f2f2; */
        /* border: 1px solid #dbdbdb; */
        border-radius: 10px;
        padding-left: 10px;
    }

    .our-service-img-div img {
        height: 100px;
        width: 100px;
        object-fit: contain;
        /* transition: all ease-in-out .2s; */

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
        text-align: center;
    }

    .our-service-content-div .our-service-heading {
        font-size: 20px;
        /* font-size: 18px; */
        text-align: center;
        padding: 15px 0px;
        line-height: normal;
        font-weight: 600;
    }

    /* .our-service-content-div .our-service-content {
        font-size: 14px;
        line-height: 1.5;
        overflow: hidden;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 3;
        /* -webkit-line-clamp: 2; 
        text-align: justify;
        padding: 0 0px;
        margin-top: 10px;
    } */

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
        /* transition-delay: 0.2s; */
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

    /* .our-service-content {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    } */

    /* .our-service-content.show-more {
        -webkit-line-clamp: initial;
        display: block;
    } */

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

    /* .our-service-content {
        display: none; 
    } */

    /* .our-service-content.show-more {
        display: block;
    } */

    .our-service-card {
        overflow: hidden;
        /* Ensure no overflow on the card */
        /* transition: height 0.3s ease; */
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

    .read-more-less-btn {
    display: none; /* Hide by default */
    margin-top: 15px;
    padding: 10px 25px;
    background: linear-gradient(to right, #FF0808, #fc6262);
    color: white;
    border: none;
    border-radius: 8px;
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
    box-shadow: 0 4px 14px rgba(255, 8, 8, 0.25);
    /* transition: all 0.3s ease; */
}

.read-more-less-btn:hover {
    background: linear-gradient(to right, #e20606, #ff4e4e);
    box-shadow: 0 6px 16px rgba(255, 8, 8, 0.35);
    transform: translateY(-2px);
}

.our-service-card:hover .read-more-less-btn {
    display: inline-block;
}

@media (max-width: 767px) {
    .read-more-less-btn {
        padding: 8px 20px;
        font-size: 13px;
    }
}
 p{
    margin-bottom: 0px;
    text-align:center;
 }
</style>

<body>
    <div class="our-service-main-section">
        <h2 class=" our-service-heading-top">Our <span style="color:#ff0808">Services</span></h2>
        <section class="row">
            <!-- <div class="d-flex col-md-3"> -->
            <?php
            $services = [
                [
                    'imageSrc' => './image/homepage/services-icons/web-dev.webp',
                    'imageAlt' => 'Web Development & Designing',
                    'heading' => 'Web Development & Designing',
                    'description' => 'We build custom websites and e-commerce platforms using technologies like React, Next.js, and Node.js to ensure performance, and business growth through visually appealing and functional designs. Our team focuses on clean UI, mobile responsiveness, and SEO-ready code.',
                    'link' => 'web-development-company-in-mumbai',
                    'buttonLabel' => 'Read More'
                ],
                [
                    'imageSrc' => './image/homepage/services-icons/digital-marketing.webp',
                    'imageAlt' => 'Digital Marketing',
                    'heading' => 'Digital Marketing',
                    'description' => 'We help your business grow online with data-driven digital marketing strategies, including Google Ads, SEO, and social media advertising, tailored to drive leads, engagement, and long-term results. Maximize ROI with our expert campaign management and analytics.',
                    'link' => 'digital-marketing-company-in-mumbai',
                    'buttonLabel' => 'Read More'
                ],
                [
                    'imageSrc' => './image/homepage/services-icons/app-development.webp',
                    'imageAlt' => 'App Development',
                    'heading' => 'App Development',
                    'description' => 'From concept to deployment, we design and develop scalable mobile applications that offer seamless user experiences, powered by modern technologies to meet your business goals effectively. We build for both Android and iOS platforms with robust backend integration.',
                    'link' => 'mobile-app-development-company-in-mumbai',
                    'buttonLabel' => 'Read More'
                ],
                [
                    'imageSrc' => './image/homepage/services-icons/graphic-design.webp',
                    'imageAlt' => 'Graphic Designing',
                    'heading' => 'Graphic Designing',
                    'description' => 'Our creative team transforms your vision into visual assets that tell your story, boost brand identity, and engage your audience across digital and print media through stunning graphic design. We deliver logos, brochures, social media creatives, and more.',
                    'link' => 'graphic-design-services-in-mumbai',
                    'buttonLabel' => 'Read More'
                ],
                [
                    'imageSrc' => './image/homepage/services-icons/sms-marketing.webp',
                    'imageAlt' => 'Bulk SMS Service',
                    'heading' => 'Bulk SMS Service',
                    'description' => 'Reach your customers instantly with our reliable bulk SMS and WhatsApp marketing services designed for effective communication, promotions, and customer engagement at scale. Schedule campaigns and track delivery reports in real time.',
                    'link' => 'bulk-sms-service-provider-in-mumbai',
                    'buttonLabel' => 'Read More'
                ],
                [
                    'imageSrc' => './image/homepage/services-icons/seo.webp',
                    'imageAlt' => 'SEO Service',
                    'heading' => 'SEO Service',
                    'description' => 'Boost your website visibility and rankings with our comprehensive SEO strategies including keyword research and content optimization tailored to your target audience and business objectives. Our white-hat SEO techniques ensure long-term success.',
                    'link' => 'seo-company-in-mumbai',
                    'buttonLabel' => 'Read More'
                ],
            ];
            

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
                //echo '          <hr style="border: none; height: 4px; background-color: #E31F14; width: 40%;">';
                echo '          <p class="our-service-content">' . $service['description'] . '</p>';
                //echo '          <button class="read-more-less-btn">' . $service['buttonLabel'] . '</button>';
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
</body>
</html>