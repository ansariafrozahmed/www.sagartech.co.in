<?php

$slides = array(
  // array(
  //   'type' => 'Catalogue Website',
  //   'image' => './image/homepage/thaiger-v1.webp',
  //   'web_title' => 'Thaiger Nutraceuticals',
  //   'desc' => "Thaiger Nutraceuticals is a modern, performance-driven platform built to showcase high-quality nutraceutical products. Developed using Next.js, TypeScript, and Node.js, it ensures a fast, secure, and seamless user experience. With Express.js powering the backend and PostgreSQL managing structured data, the site is both scalable and reliable. Styled with Tailwind CSS for a clean, responsive UI and secured by Cloudflare, Thaiger Nutraceuticals combines innovation and health through cutting-edge web technology.    "
  // ),
  array(
    'type' => 'Health Care',
    'image' => './portfolio-mockups/healthcare/syrocs.webp',
    'web_title' => 'Syrocs',
    'desc' => 'Syrocs is a modern, responsive web platform built using the latest technologies including React.js, Tailwind CSS, JavaScript, and Node.js. Designed for speed and scalability, Syrocs offers a seamless user experience with clean design and efficient performance. Whether you are browsing on desktop or mobile, the interface remains intuitive and lightning-fast. Powered by a robust backend and dynamic frontend, Syrocs stands as a showcase of cutting-edge web development, merging aesthetics with functionality for optimal engagement.'
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
    text-align: left;
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
  <h2 class="portfolio-heading">Our <span style="color: #ff0808">Projects on React js</span></h2>
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