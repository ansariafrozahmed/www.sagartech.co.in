<?php

$slides = array(
  array(
    'type' => 'Catalogue Website',
    'image' => './image/homepage/thaiger-v1.webp',
    'web_title' => 'Thaiger Nutraceuticals',
    'desc' => "Thaiger Nutraceuticals is a modern, performance-driven platform built to showcase high-quality nutraceutical products. Developed using Next.js, TypeScript, and Node.js, it ensures a fast, secure, and seamless user experience. With Express.js powering the backend and PostgreSQL managing structured data, the site is both scalable and reliable. Styled with Tailwind CSS for a clean, responsive UI and secured by Cloudflare, Thaiger Nutraceuticals combines innovation and health through cutting-edge web technology.    "
  ),
  array(
    'type' => 'Health Care',
    'image' => './portfolio-mockups/healthcare/syrocs.webp',
    'web_title' => 'Syrocs',
    'desc' => 'Syrocs is a modern, responsive web platform built using the latest technologies including React.js, Tailwind CSS, JavaScript, and Node.js. Designed for speed and scalability, Syrocs offers a seamless user experience with clean design and efficient performance. Whether you are browsing on desktop or mobile, the interface remains intuitive and lightning-fast. Powered by a robust backend and dynamic frontend, Syrocs stands as a showcase of cutting-edge web development, merging aesthetics with functionality for optimal engagement.'
  ),
  array(
    'type' => 'Logistics',
    'image' => './portfolio-mockups/business/binfinit.webp',
    'web_title' => 'Binfinit',
    'desc' => 'Binfinit is a modern, high-performance website built with Next.js, Tailwind CSS, TypeScript, and powered by Cloudflare for top-tier speed and security. Designed with scalability and performance in mind, Binfinit delivers a seamless user experience with clean, responsive design and optimized functionality. Leveraging the latest web technologies, it ensures fast loading times, robust architecture, and a future-ready foundation. Whether for business or creative purposes, Binfinit stands out as a sleek, efficient, and professional digital solution.'
  ),
  array(
    'type' => 'Catalogue',
    'image' => './portfolio-mockups/catalogue/kostevo.webp',
    'web_title' => 'Kostevo',
    'desc' => 'Kostevo is a modern, high-performance website built using Next.js, Tailwind CSS, and TypeScript. Designed for speed, scalability, and a seamless user experience, Kostevo offers a clean, responsive interface that looks great on all devices. With a focus on performance and maintainability, the site leverages powerful modern technologies to ensure optimal loading times and smooth navigation. Whether you are browsing on desktop or mobile, Kostevo delivers an intuitive and engaging experience tailored for todays web standards.'
  ),
  array(
    'type' => 'Health Care',
    'image' => './portfolio-mockups/business/AXXIO.webp',
    'web_title' => 'Axxio Laboratory',
    'desc' => 'Axxio Laboratory is a cutting-edge platform developed using Next.js, Tailwind CSS, and JavaScript, ensuring fast, responsive, and modern web experiences. Powered by a WordPress backend and optimized with Cloudflare, the site offers seamless content management, high performance, and top-notch security. Whether you are exploring scientific solutions or lab services, Axxio Laboratory delivers a smooth and professional experience tailored for all users. Designed for scalability and flexibility, it represents the perfect blend of technology and functionality.'
  ),
  array(
    'type' => 'Health Care',
    'image' => './portfolio-mockups/business/vcare.webp',
    'web_title' => 'Vcare Diagnostics',
    'desc' => 'Vcare Diagnostics is a modern healthcare diagnostics website built using TypeScript, Next.js, and Tailwind CSS for a fast, responsive, and seamless user experience. Leveraging Cloudflare for performance and security, and WordPress for dynamic content management, the platform ensures reliability and ease of updates. Vcare Diagnostics provides users with essential medical information, test booking options, and service details in a clean, user-friendly interface, aiming to make diagnostics accessible and efficient for everyone.'
  ),
  array(
    'type' => 'Travel Website',
    'image' => './image/homepage/classics-v1.webp',
    'web_title' => 'Go Classic Tours',
    'desc' => 'Go Classic Tours offers seamless travel experiences with a modern touch. Built using Next.js and TypeScript, the platform ensures speed, reliability, and security, powered by Cloudflare. Styled with Tailwind CSS for a clean and responsive design, it delivers a premium user experience across devices. Our content is efficiently managed through a robust WordPress backend, allowing us to bring you the latest tour updates and offers. Explore, book, and embark on your next journey with Go Classic Tours today!'
  ),
  array(
    'type' => 'Human Resource',
    'image' => './portfolio-mockups/humanresource/yovant-webite-mockup.webp',
    'web_title' => 'Yovant Recruitement Services',
    'desc' => 'Yovant Recruitment Services is a modern, dynamic platform designed to streamline hiring processes and connect top talent with leading companies. Built using Next.js, Tailwind CSS, and GSAP, the site delivers a smooth and engaging user experience. With a secure and scalable backend powered by WordPress and Cloudflare, it ensures fast performance and robust reliability. Leveraging TypeScript for maintainable code, Yovant offers a professional and intuitive interface tailored for today’s recruitment needs.'
  ),
);
?>
<style>
  .main-div-portfolio {
    padding: 40px 0px 10px 0px;
  }

  swiper-container {
    width: 100%;
    height: 65vh;
  }

  swiper-slide {
    padding: 10px 50px;
    text-align: center;
    font-size: 18px;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  swiper-slide img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .slide-inner-div {
    height: 100%;
    width: 100%;
    display: flex;
    gap: 50px;
  }

  .inner-left {
    width: 50%;
    height: 100%;
  }

  .inner-left img {
    height: 100%;
    width: 100%;
    object-fit: contain;
    padding: 25px;
  }

  .inner-right {
    width: 50%;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: start;
    justify-content: center;
    padding: 20px;
    gap: 5px;
  }

  .inner-right .type {
    font-size: 15px;
    color: #FF0808;
    font-weight: 500;

  }

  .inner-right .web_title {
    font-size: 40px;
    text-transform: uppercase;
    font-weight: 600;
  }

  .inner-right .desc {
    margin-top: 10px;
    font-size: 15px;
    line-height: normal;
  }

  .portfolio-heading {
    font-size: 40px;
    font-weight: 700;
    /* padding:20px 0px; */
    text-align: center;
    color: #2b2a2a;
    text-transform: uppercase;
  }

  @media only screen and (max-width: 800px) {
    swiper-container {
      width: 100%;
      height: auto;
      padding: 10px 0px;
    }

    swiper-slide {
      padding: 20px;
      text-align: center;
      font-size: 18px;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .slide-inner-div {
      height: 100%;
      width: 100%;
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    .inner-left {
      width: 100%;
      height: 100%;
    }

    .inner-left img {
      height: 100%;
      width: 100%;
      object-fit: contain;
    }

    .inner-right {
      width: 100%;
      height: 100%;
      display: flex;
      flex-direction: column;
      align-items: start;
      justify-content: center;
      padding: 0px;
      gap: 0px;
    }

    .inner-right .type {
      font-size: 14px;
      color: #ff0808;
      font-weight: 500;

    }

    .inner-right .web_title {
      font-size: 25px;
      font-weight: 600;
      text-align: left;
    }

    .inner-right .desc {
      font-size: 14px;
      line-height: normal;
    }
  }

  /* CSS */
  .button-62 {
    background: linear-gradient(to bottom right, #FF0808, #fc6262);
    border: 0;
    border-radius: 12px;
    text-align: center;
    color: #FFFFFF;
    cursor: pointer;
    display: inline-block;
    font-family: -apple-system, system-ui, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
    font-size: 16px;
    font-weight: 500;
    line-height: 2.5;
    outline: transparent;
    padding: 5px 30px;
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

  .botttoonnn {
    text-align: center;
  }

  .swiper-button-next svg,
  .swiper-button-prev svg {
    color: #FF0808 !important;
  }

  @media (max-width: 767px) {
    .main-div-portfolio h2 {
      font-size: 30px !important;

    }
  }
</style>
</head>

<div class="main-div-portfolio">
  <h2 class="portfolio-heading">Our <span style="color: #ff0808">Projects on Next js</span></h2>
  <swiper-container class="mySwiper" navigation="true">
    <?php foreach ($slides as $slide) : ?>
      <swiper-slide>
        <div class="slide-inner-div">
          <div class="inner-left">
            <img src="<?php echo $slide['image']; ?>" alt="<?php echo $slide['web_title']; ?>"
              title="<?php echo $slide['web_title']; ?>">
          </div>
          <div class="inner-right">
            <span class="type"><?php echo $slide['type']; ?></span>
            <h5 class="web_title"><?php echo $slide['web_title']; ?></h5>
            <p class="desc"><?php echo $slide['desc']; ?></p>
          </div>
        </div>
      </swiper-slide>
    <?php endforeach; ?>
  </swiper-container>
  <!-- <div class="botttoonnn">
    <a href="portfolio/website" class="button-62" role="button">View All</a>
  </div> -->
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>