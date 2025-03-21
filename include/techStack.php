<style>
  .our-client-main-div {
    padding: 50px 100px;
    text-align: center;
  }

  .our-client-main-div h2 {
    font-size: 40px;
    font-weight: 700;
    color: #2b2a2a;
    text-transform: uppercase;
  }

  .client-image-main-div {
    padding: 30px 0px;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr;
    gap: 20px;
  }

  .client-image-main-div .image-div {
    aspect-ratio: 4/4;
    padding: 5px;
    border-radius: 50px;
    overflow: hidden;
    box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
  }

  .client-image-main-div .image-div img {
    height: 100%;
    width: 100%;
    object-fit: contain;
  }

  @media only screen and (min-width: 768px) and (max-width: 1024px) {
    .our-client-main-div {
      padding: 50px;
      text-align: center;
    }

    .our-client-main-div h2 {
      font-size: 40px;
      font-weight: 700;
    }

    .client-image-main-div {
      padding: 30px 0px;
      display: grid;
      grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
      gap: 20px;
    }

    .client-image-main-div .image-div {
      aspect-ratio: 4/4;
      /* border-radius: 10px; */
      overflow: hidden;
      box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
    }

    .client-image-main-div .image-div img {
      height: 100%;
      width: 100%;
      object-fit: contain;
    }
  }

  @media only screen and (max-width: 767px) {
    .our-client-main-div {
      padding: 20px;
      text-align: center;
    }

    .our-client-main-div h2 {
      font-size: 40px;
      font-weight: 700;
    }

    .client-image-main-div {
      padding: 20px 0px;
      display: grid;
      grid-template-columns: 1fr 1fr 1fr;
      gap: 10px;
    }

    .client-image-main-div .image-div {
      aspect-ratio: 4/4;
      border-radius: 50px;
      overflow: hidden;
      /* box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px; */
      box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
    }

    .client-image-main-div .image-div img {
      height: 100%;
      width: 100%;
      object-fit: contain;
    }
  }

  /* CSS */
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
</style>
<div class="our-client-main-div">
  <h2>Tech <span style="color: #ff0808">Stack We Use</span></h2>
  <div class="client-image-main-div">
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
    foreach ($imageUrls as $index => $imageUrl) {
      echo '<div class="image-div">';
      echo '<img src="' . $imageUrl . '" alt="' . $techNames[$index] . '" title="' . $techNames[$index] . '">';
      echo '</div>';
    }
    ?>
  </div>
  <!-- <div>
   
    <a href="our-clients" class="button-62" role="button">View All</a>


  </div> -->
</div>