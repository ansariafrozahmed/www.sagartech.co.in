<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
    .our-service-main-section {
        background-color: #f2f2f2;
        padding: 100px;
        width: 100%;
    }

    .our-service-main-section .our-service-heading-top {
        font-size: 50px;
        text-transform: uppercase;
        /* padding: 20px 0px; */
        padding-bottom: 40px;
        text-align: center;
        font-weight: 600;
    }

    .our-service-section {
        width: 100%;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        gap: 50px;
    }

    .our-service-card {
        background-color: white;
        /* aspect-ratio: 4/4; */
        /* border: 1px solid #dbdbdb; */
        padding: 10px;
        padding-bottom: 15px;
        border-radius: 10px;
        /* box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24); */
    }

    .our-service-card:hover {
        box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
    }

    .our-service-img-div {
        width: 100%;
        height: 220px;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        /* background-color: green; */
        /* padding: 10px 20px; */
        background-color: #f2f2f2;
        /* border: 1px solid #dbdbdb; */
        border-radius: 10px;
    }

    .our-service-img-div img {
        height: 100%;
        width: 100%;
        object-fit: contain;
        transition: all ease-in-out .2s;

    }

    .our-service-img-div img:hover {
        transform: scale(1.1);
    }

    .our-service-content-div {
        padding: 10px;
        /* text-align: center; */
    }

    .our-service-content-div .our-service-heading {
        /* font-size: 20px; */
        font-size: 18px;
        /* text-align: center; */
        padding: 10px 0px;
        line-height: normal;
        font-weight: 600;

    }

    .our-service-content-div .our-service-content {
        font-size: 14px;
        line-height: 1.5;
        overflow: hidden;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        /* -webkit-line-clamp: 5; */
        -webkit-line-clamp: 2;
        /* text-align: justify; */
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
    font-family: -apple-system,system-ui,"Segoe UI",Roboto,Helvetica,Arial,sans-serif;
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
    color:white;
    }
</style>

<body>
    <div class="our-service-main-section">
        <h2 class=" our-service-heading-top">Our <span style="color:#ff0808">Services</span></h2>
        <section class="our-service-section">


            <!-- <a href="web-development-company-in-mumbai"> -->
                <div class="our-service-card">
                    <div class="our-service-img-div">
                    <a href="web-development-company-in-mumbai">
                        <img src="./image/homepage/new home page mockups/web development & design.webp" alt="">
                    </a>
                    </div>
                    <div class="our-service-content-div">
                        <h2 class="our-service-heading">Web Development & Designing</h2>
                        <span class="our-service-content">Sagar Tech Technical Solution stands out as an award-winning
                            ecommerce website development services provider in Mumbai. Having a track record of
                            providing innovative solutions We take pride in our ability to develop e-commerce websites
                            that not only matches your business needs but also exceed the needs of businesses looking
                            for an efficient and eye-catching online presence. we work using latest technology React,
                            Next.js, Node.js,etc.</span>
                    </div>
                    <div>
                    <!-- <a href="our-clients" class="button-62" role="button">View All</a> -->
                    <a href="web-development-company-in-mumbai">
                        <button class="button-62">View Service</button>
                    </a>
                    </div>
                </div>
            <!-- </a> -->


            <!-- <a href="digital-marketing-company-in-mumbai"> -->
                <div class="our-service-card">
                    <div class="our-service-img-div">
                    <a href="digital-marketing-company-in-mumbai">
                        <img src="./image/homepage/new home page mockups/digital marketing.webp" alt="">
                    </a>
                    </div>
                    <div class="our-service-content-div">
                        <h2 class="our-service-heading">Digital Marketing</h2>
                        <span class="our-service-content">Sagar Tech Technical Solution is an award-winning Digital
                            marketing Company right here in the heart of Mumbai. We help To Drive Sales on Your Website
                            By Providing Expert Digital Marketing Solutions. We Provide Services Like Google Ads, Search
                            Engine Optimization, Social Media Ads, and more.</span>
                    </div>
                    <a href="digital-marketing-company-in-mumbai">
                        <button class="button-62">View Service</button>
                    </a>
                </div>
            <!-- </a> -->



            <!-- <a href="mobile-app-development-company-in-mumbai"> -->
                <div class="our-service-card">
                    <div class="our-service-img-div">
                    <a href="mobile-app-development-company-in-mumbai">
                        <img src="./image/homepage/new home page mockups/app development & design.webp" alt="">
                    </a>
                    </div>
                    <div class="our-service-content-div">
                        <h2 class="our-service-heading">App Development</h2>
                        <span class="our-service-content">Sagar Tech's commitment to innovation and excellence has
                            positioned it as a reliable partner for businesses looking to leverage the vast potential of
                            online commerce. With a team of seasoned professionals, Sagar Tech combines cutting-edge
                            technology, user-centric design, and industry expertise to deliver tailored e-commerce
                            solutions that cater to the unique needs of each client.</span>
                    </div>
                    <a href="mobile-app-development-company-in-mumbai">
                        <button class="button-62">View Service</button>
                    </a>
                </div>
            </a>



            <!-- <a href="graphic-design-services-in-mumbai"> -->
                <div class="our-service-card">
                    <div class="our-service-img-div">
                    <a href="graphic-design-services-in-mumbai">
                        <img src="./image/homepage/new home page mockups/graphic designing.webp" alt="">
                    </a>
                    </div>
                    <div class="our-service-content-div">
                        <h2 class="our-service-heading">Graphic Designing</h2>
                        <span class="our-service-content">Sagar Tech Technical Solution is on of the best Graphic design
                            services provider in Mumbai our team of expert is specilised to turn your imagination into
                            to reality. Beyond just creating visually appealing images, graphic design plays a pivotal
                            role in conveying messages, establishing brand identity, and influencing the overall user
                            experience.</span>
                    </div>
                    <a href="graphic-design-services-in-mumbai">
                        <button class="button-62">View Service</button>
                    </a>
                </div>
            </a>


            <!-- <a href="bulk-sms-service-provider-in-mumbai"> -->
                <div class="our-service-card">
                    <div class="our-service-img-div">
                    <a href="bulk-sms-service-provider-in-mumbai">
                        <img src="./image/homepage/new home page mockups/bulk sms services1.png" alt="">
                    </a>
                    </div>
                    <div class="our-service-content-div">
                        <h2 class="our-service-heading">Bulk SMS Service</h2>
                        <span class="our-service-content">In today's fast-paced digital world, effective communication
                            is more critical than ever. At Sagar Tech, we take pride in being your ultimate partner for
                            state-of-the-art communication solutions. Whether you're seeking the expertise of a Bulk SMS
                            Service Provider or in need of a reliable WhatsApp Bulk Message service, rest assured, we've
                            got your back.</span>
                    </div>
                    <a href="bulk-sms-service-provider-in-mumbai">
                        <button class="button-62">View Service</button>
                    </a>
                </div>
            </a>


            <!-- <a href="seo-company-in-mumbai"> -->
                <div class="our-service-card">
                    <div class="our-service-img-div">
                    <a href="seo-company-in-mumbai">
                        <img src="./image/homepage/new home page mockups/seo.webp" alt="">
                    </a>
                    </div>
                    <div class="our-service-content-div">
                        <h2 class="our-service-heading">SEO Service</h2>
                        <span class="our-service-content">Improve your online visibility and drive organic traffic to
                            your website with our comprehensive SEO services. At Sagar Tech - Technical Solutions, we
                            specialize in optimizing your web presence to rank higher in search engine results. Our SEO
                            experts utilize advanced strategies tailored to your business goals. From keyword research
                            and on-page optimization to link building and content creation, we enhance your website's
                            authority and relevance for targeted search queries.</span>
                    </div>
                    <a href="seo-company-in-mumbai">
                        <button class="button-62">View Service</button>
                    </a>
                </div>
            </a>


            <!-- <a href="web-development-company-in-mumbai">
                <div class="our-service-card">
                    <div class="our-service-img-div">
                        <img src="./image/homepage/new home page mockups/web development & design.webp" alt="">
                    </div>
                    <div class="our-service-content-div">
                        <h2 class="our-service-heading">Web Development & Designing</h2>
                        <span class="our-service-content">Sagartech Technical Solution stands out as an award-winning
                            ecommerce website development services provider in Mumbai. Having a track record of
                            providing innovative solutions We take pride in our ability to develop e-commerce websites
                            that not only matches your business needs but also exceed the needs of businesses looking
                            for an efficient and eye-catching online presence. we work using latest technology React,
                            Next.js, Node.js,etc.</span>
                    </div>
                </div>
            </a>


            <a href="digital-marketing-company-in-mumbai">
                <div class="our-service-card">
                    <div class="our-service-img-div">
                        <img src="./image/homepage/new home page mockups/digital marketing.webp" alt="">
                    </div>
                    <div class="our-service-content-div">
                        <h2 class="our-service-heading">Digital Marketing</h2>
                        <span class="our-service-content">Sagar Tech Technical Solution is an award-winning Digital
                            marketing Company right here in the heart of Mumbai. We help To Drive Sales on Your Website
                            By Providing Expert Digital Marketing Solutions. We Provide Services Like Google Ads, Search
                            Engine Optimization, Social Media Ads, and more.</span>
                    </div>
                </div>
            </a>



            <a href="mobile-app-development-company-in-mumbai">
                <div class="our-service-card">
                    <div class="our-service-img-div">
                        <img src="./image/homepage/new home page mockups/app development & design.webp" alt="">
                    </div>
                    <div class="our-service-content-div">
                        <h2 class="our-service-heading">App Development</h2>
                        <span class="our-service-content">Sagar Tech's commitment to innovation and excellence has
                            positioned it as a reliable partner for businesses looking to leverage the vast potential of
                            online commerce. With a team of seasoned professionals, Sagartech combines cutting-edge
                            technology, user-centric design, and industry expertise to deliver tailored e-commerce
                            solutions that cater to the unique needs of each client.</span>
                    </div>
                </div>
            </a>



            <a href="graphic-design-services-in-mumbai">
                <div class="our-service-card">
                    <div class="our-service-img-div">
                        <img src="./image/homepage/new home page mockups/graphic designing.webp" alt="">
                    </div>
                    <div class="our-service-content-div">
                        <h2 class="our-service-heading">Graphic Designing</h2>
                        <span class="our-service-content">Sagar Tech Technical Solution is on of the best Graphic design
                            services provider in Mumbai our team of expert is specilised to turn your imagination into
                            to reality. Beyond just creating visually appealing images, graphic design plays a pivotal
                            role in conveying messages, establishing brand identity, and influencing the overall user
                            experience.</span>
                    </div>
                </div>
            </a>


            <a href="bulk-sms-service-provider-in-mumbai">
                <div class="our-service-card">
                    <div class="our-service-img-div">
                        <img src="./image/homepage/new home page mockups/bulk sms services1.png" alt="">
                    </div>
                    <div class="our-service-content-div">
                        <h2 class="our-service-heading">Bulk SMS Service</h2>
                        <span class="our-service-content">In today's fast-paced digital world, effective communication
                            is more critical than ever. At Sagar Tech, we take pride in being your ultimate partner for
                            state-of-the-art communication solutions. Whether you're seeking the expertise of a Bulk SMS
                            Service Provider or in need of a reliable WhatsApp Bulk Message service, rest assured, we've
                            got your back.</span>
                    </div>
                </div>
            </a>


            <a href="seo-company-in-mumbai">
                <div class="our-service-card">
                    <div class="our-service-img-div">
                        <img src="./image/homepage/new home page mockups/seo.webp" alt="">
                    </div>
                    <div class="our-service-content-div">
                        <h2 class="our-service-heading">SEO Service</h2>
                        <span class="our-service-content">Improve your online visibility and drive organic traffic to
                            your website with our comprehensive SEO services. At Sagar Tech - Technical Solutions, we
                            specialize in optimizing your web presence to rank higher in search engine results. Our SEO
                            experts utilize advanced strategies tailored to your business goals. From keyword research
                            and on-page optimization to link building and content creation, we enhance your website's
                            authority and relevance for targeted search queries.</span>
                    </div>
                </div>
            </a> -->

        </section>
    </div>
</body>

</html>