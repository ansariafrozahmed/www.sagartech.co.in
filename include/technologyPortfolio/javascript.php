<?php

$slides = array(
  array(
    'type' => 'Travel',
    'image' => './portfolio-mockups/travel/riyazint.webp',
    'web_title' => 'Riyaz International',
    'desc' => "Riyaz International is a modern and responsive website crafted using HTML, CSS, JavaScript, Bootstrap and PHP. Designed for a seamless user experience, it showcases the brand's vision with clean design, fast loading, and mobile-friendly features. Whether viewed on desktop or mobile, the site ensures accessibility and easy navigation. Riyaz International represents innovation and professionalism, providing users with clear insights and engaging visuals. Built with industry-standard web technologies, the site reflects a perfect blend of functionality and aesthetic appeal."
  ),
  array(
    'type' => 'Builders',
    'image' => './portfolio-mockups/builders/archicgreenscape.webp',
    'web_title' => 'Archic Green Scape',
    'desc' => 'Archic Green Scape is a modern, eco-conscious website developed using HTML, CSS, JavaScript, Bootstrap, and PHP. Designed to reflect sustainability and innovation, it showcases a clean and responsive layout, delivering a seamless user experience across all devices. Archic Green Scape offers insightful content and engaging visuals, promoting green architectural solutions and landscape designs. With a strong backend powered by PHP, the site ensures smooth navigation and efficient functionality, making it both visually appealing and technically robust.'
  ),
  array(
    'type' => 'Business',
    'image' => './portfolio-mockups/business/alsalama.webp',
    'web_title' => 'Noor Alsalama',
    'desc' => "Noor Alsalama is a professionally crafted website designed to deliver a seamless and responsive user experience. Built using HTML, CSS, JavaScript, Bootstrap, and PHP, it combines modern design with powerful functionality. The site ensures fast loading, cross-device compatibility, and clean, structured code for maintainability. Whether you're browsing on desktop or mobile, Noor Alsalama offers an intuitive interface that reflects attention to detail and user satisfaction. It's a perfect example of front-end elegance meeting back-end efficiency."
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
  <h2 class="portfolio-heading">Our <span style="color: #ff0808">Projects on JavaScript</span></h2>
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