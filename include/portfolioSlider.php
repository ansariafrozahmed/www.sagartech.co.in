
<?php
$slides = array(
  array(
    'type' => 'Ecommerce Website',
    'image' => './image/homepage/BSAuto.webp',
    'web_title' => 'BS Auto Accessories',
    'desc' => "When it comes to e-commerce website its user interface is a big challenge we have some best Wordpress Developers who can make your websites user friendly, easy to navigate product for customers with the help of latest technology no matter how many products are listed on your website it won't create a bad user experience."
),
    array(
        'type' => 'Business Website',
        'image' => './image/homepage/MithiyajMockup.webp',
        'web_title' => 'Mithiyaj',
        'desc' => 'At Mithiyaj, we understand the universal craving for the finer things in life. With an unwavering commitment to quality, creativity, and affordability, we have curated a menu that spans a spectrum of delectable treats. From sumptuous cakes and pastries to timeless Indian sweets, delicate Baklavas, and luxurious gift hampers, we are here to transform your moments of indulgence into everlasting memories.'
    ),
    array(
        'type' => 'Catalogue Website',
        'image' => './image/homepage/ASAudio.webp',
        'web_title' => 'AS Audio',
        'desc' => 'Amaze Sound Audio Private Limited is a professional large-scale importer/manufacturer of Power Amplifiers, Professional Speakers, HF, Live Mixers, DJ Mixers, Microphones, Digital Processors, Manual Processors and Speaker Cabinets. AS Audio is driven by our Dedication to quality and most important Reliability.'
    ),
    array(
        'type' => 'Builders Website',
        'image' => './image/homepage/folksco.webp',
        'web_title' => 'Folksco',
        'desc' => 'At Folksco, our team works with you to create spaces for Best Interior Designer in Mumbai that are truly special. Our team is the pillars of our projects; they run our studio with passion, vision, and energy. As a team, we have made Eye for Detail, Value Engineering,'
    ),
    
    array(
        'type' => 'Logistics Website',
        'image' => './image/homepage/amarClearing.webp',
        'web_title' => 'Amar Clearing',
        'desc' => 'We are a Servicing Enterprise that handles varied activities in the sphere of Imports and Exports. Currently we are one of the leading Customs House Agents and Freight Forwarding Companies, rapidly moving towards the goal of emerging as one of the largest company dealing with Custom clearance, freight forwarding and logistics management.'
    ),
    array(
        'type' => 'Restaurant Website',
        'image' => './image/homepage/alnizami.webp',
        'web_title' => 'Al Nizami Darbar',
        'desc' => 'NIZAM, which in Arabic means an order or arrangement, was the title bestowed upon the ruler of Hyderabad. The NIZAMS of Hyderabad were of Turkish and Hadrahmi Arab descent. DARBAR, an audience hall, was the majestic court of a native prince that originated in Persia.'
    ),
);
?>
  <style>
    .main-div-portfolio {
      padding:50px 0px
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
      display:flex;
      gap:50px;
    }
    .inner-left {
      width: 50%;
      height: 100%;
    }
    .inner-left img {
      height: 100%;
      width: 100%;
      object-fit: contain;
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
      text-transform:uppercase;
      font-weight: 600;
    }
    .inner-right .desc {
      margin-top:10px;
      font-size: 15px;
      line-height: normal;
    }
    .portfolio-heading {
      font-size: 40px;
    font-weight: 700;
    /* padding:20px 0px; */
    text-align:center;
    color: #2b2a2a;
    text-transform: uppercase;
    }

    @media only screen and (max-width: 800px) {
    swiper-container {
      width: 100%;
      height: auto;
      padding:10px 0px;
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
      display:flex;
      flex-direction:column;
      gap:20px;
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
  text-align:center;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: -apple-system,system-ui,"Segoe UI",Roboto,Helvetica,Arial,sans-serif;
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
    color:white;
  }
.botttoonnn {
  text-align:center;
}
.swiper-button-next svg, .swiper-button-prev svg {
  color: #FF0808 !important;
}
  </style>
</head>

<div class="main-div-portfolio">
  <h2 class="portfolio-heading">Our <span style="color: #ff0808">Portfolio</span></h2>
  <swiper-container class="mySwiper" navigation="true">
    <?php foreach ($slides as $slide) : ?>
            <swiper-slide>
                <div class="slide-inner-div">
                    <div class="inner-left">
                        <img src=<?php echo $slide['image']; ?> alt="">
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
 <div class="botttoonnn">
   <a href="portfolio/website" class="button-62" role="button">View All</a>
 </div>
</div>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
