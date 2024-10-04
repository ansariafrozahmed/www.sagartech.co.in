<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&display=swap" rel="stylesheet">
</head>
<style>
  .index-intro {
    padding: 50px 100px;
    display: flex;
    gap: 30px;
  }
  .intro-left {
    width: 60%;
    margin: auto 0;
  }
  .intro-left h1 {
    font-size: 33px;
    font-weight: 500;
    line-height: normal;
    color: #2b2b2b;
    margin-bottom: 15px;
  }
  .intro-left h2 span {
    color: #ff0808;
  }
  .intro-right {
    width: 40%;
  }
  .intro-right img {
    height: 100%;
    width: 100%;
    object-fit: contain;
  }

  /* new section css  */

  .intro h1 {
    font-family: "Sora", sans-serif;
    font-size: 60px;
     /* line-height: 1; */
    font-weight: 700;
    color: #2b2b2b;
    /* margin-bottom: 15px; */
    /* width:75%; */
  }
  .intro p{
    font-family: "Sora", sans-serif;
    font-size: 20px;
    padding-right: 350px;
    padding-top: 30px;
    padding-bottom: 0px;
    margin-bottom: 0px;
    color: #2b2b2b;
  }
  .intro{
    padding: 70px;
    padding-top:100px;
    padding-bottom:0px;
  }
  .marquee-container {
  width: 100%;
  overflow: hidden;
  padding: 10px 0;
}
.marquee {
  display: flex;
  overflow: hidden;
  white-space: nowrap;
}
.marquee-content {
  display: flex;
  animation: marquee 250s linear infinite; /* Increase duration for slower, smoother scrolling */
  padding: 25px;
}
.marquee-content span {
  letter-spacing: 2px;
  padding-right: 50px; /* Adds space between repeated content */
  color: #fff;
  -webkit-text-stroke-width: 1px;
  -webkit-text-stroke-color: #2b2b2b;
  font-family: Neurialgrotesk Bold, sans-serif;
  font-size: 40px;
  display: block;
  -webkit-text-fill-color: transparent;
  text-transform: uppercase;
}
/* Continuous scrolling effect */
@keyframes marquee {
  0% {
    transform: translateX(0);
  }
  100% {
    transform: translateX(-100%);
  }
}

/* Responsive adjustments for smaller screens */
  @media only screen and (max-width: 999px) {
    .index-intro {
      padding: 40px 20px;
      display: flex;
      flex-direction: column;
      gap: 30px;
    }
    .intro-left {
      width: 100%;
      margin: auto 0;
    }
    .intro-left h1 {
      font-size: 30px;
      line-height: 1;
      font-weight: 400;
      color: #2b2b2b;
      margin-bottom: 15px;
    }
    .intro-left h2 span {
      color: #ff0808;
    }
    .intro-right {
      width: 100%;
    }
    .intro-right img {
      height: 100%;
      width: 100%;
      object-fit: contain;
    }

    /* new section css  */
    .intro h1 {
    font-family: "Sora", sans-serif;
    font-size: 35px;
    line-height: 1.1;
    font-weight: 700;
    color: #2b2b2b;
    /* margin-bottom: 15px; */
    /* width: 75%; */
  }
  .intro p{
    font-family: "Sora", sans-serif;
    font-size: 16px;
    padding-right: 0px;
    padding-top: 5px;
    padding-bottom: 0px;
    margin-bottom: 0px;
    color: #2b2b2b;
  }
  .intro{
    padding: 30px;
    padding-top:30px;
    padding-bottom:0px;
  }
    .marquee-container {
    width: 100%;
    overflow: hidden;
    padding: 10px 0;
    }
    .marquee {
    display: flex;
    overflow: hidden;
    white-space: nowrap;
    }
    .marquee-content {
    display: flex;
    animation: marquee 250s linear infinite; /* Increase duration for slower, smoother scrolling */
    padding: 15px;
    }
    .marquee-content span {
    letter-spacing: 4px;
    padding-right: 0px;
    color: #fff;
    -webkit-text-stroke-width: 1px;
    -webkit-text-stroke-color: #2b2b2b;
    font-family: Neurialgrotesk Bold, sans-serif;
    font-size: 30px;
    display: block;
    -webkit-text-fill-color: transparent;
    text-transform: uppercase;
    }
    /* Continuous scrolling effect */
    @keyframes marquee {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(-100%);
    }
    }

  }
  .linkkkkk {
    color: #ff0808;
    font-weight: 600;
  }
</style>

<!-- <div class="index-intro">
  <div class="intro-left">
    <h1>Web Development and Digital Marketing Agency In Mumbai</h1>
    <div>
      <p>
        Sagar Tech Technical Solution Is Award Winning 🏆 Web Development and Digital Marketing Agency In Mumbai Our team of web developers specialises in developing websites that quickly generate leads. We offer effective design, innovative web development, Mobile App Development, and ROI-focused marketing to help your brand reach its full potential. We offer Ecommerce Website, business website, one page website, custom website.
      </p>
      <p>
        As a leading Digital Marketing Agency, we are dedicated to assisting businesses in the ever-changing digital market. With a combination of creativity, expertise, modern techniques, we help brands reach their full potential and achieve outstanding results in their business in Digital Marketing We Provide Services like Google Ads, SEO Local SEO, Social Media Marketing, Content Marketing.
      </p>
    </div>
  </div>
  <div class="intro-right">
    <img src="image/homepage/WebDesigners.webp" alt="" />
  </div>
</div> -->
<div>
<div class="intro">
        <h1>Your Creative, Media & Technology Transformation Partner</h1>
        <p>We're a team of 1000+ Specialists delivering award-winning work for 300+ brands worldwide, 8 years and counting!</p>
        <!-- <div class="marqueee">
            <marquee>
                <p>IT'S TIME TO CREATE A SCHBANG</p>
            </marquee>
        </div> -->
    </div>
    <div class="marquee-container">
    <div class="marquee">
      <div class="marquee-content">
        <span>Creative Digital Marketing Agency &mdash; Branding &mdash; Performance Marketing &mdash; Video Production &mdash; Web Development &mdash;</span>
        <span>Creative Digital Marketing Agency &mdash; Branding &mdash; Performance Marketing &mdash; Video Production &mdash; Web Development &mdash;</span>
        <span>Creative Digital Marketing Agency &mdash; Branding &mdash; Performance Marketing &mdash; Video Production &mdash; Web Development &mdash;</span>
        <span>Creative Digital Marketing Agency &mdash; Branding &mdash; Performance Marketing &mdash; Video Production &mdash; Web Development &mdash;</span>
        <span>Creative Digital Marketing Agency &mdash; Branding &mdash; Performance Marketing &mdash; Video Production &mdash; Web Development &mdash;</span>
        <span>Creative Digital Marketing Agency &mdash; Branding &mdash; Performance Marketing &mdash; Video Production &mdash; Web Development &mdash;</span>
        <span>Creative Digital Marketing Agency &mdash; Branding &mdash; Performance Marketing &mdash; Video Production &mdash; Web Development &mdash;</span>
        <span>Creative Digital Marketing Agency &mdash; Branding &mdash; Performance Marketing &mdash; Video Production &mdash; Web Development &mdash;</span>
      </div>
    </div>
</div>
</div>

