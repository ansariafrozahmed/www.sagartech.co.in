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

  .intro p {
    font-family: "Sora", sans-serif;
    font-size: 20px;
    padding-right: 350px;
    padding-top: 30px;
    padding-bottom: 0px;
    margin-bottom: 0px;
    color: #2b2b2b;
  }

  .intro {
    padding: 70px;
    padding-top: 100px;
    padding-bottom: 0px;
    /* position:relative; */
    position: fixed;
    width: 100%;
    z-index: -741222222;
    margin-top: -15px;
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
    animation: marquee 250s linear infinite;
    /* Increase duration for slower, smoother scrolling */
    padding: 25px;
  }

  .marquee-content span {
    letter-spacing: 2px;
    padding-right: 50px;
    /* Adds space between repeated content */
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

    .intro p {
      font-family: "Sora", sans-serif;
      font-size: 16px;
      padding-right: 0px;
      padding-top: 5px;
      padding-bottom: 0px;
      margin-bottom: 0px;
      color: #2b2b2b;
    }

    .intro {
      padding: 30px;
      padding-top: 30px;
      padding-bottom: 0px;
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
      animation: marquee 250s linear infinite;
      /* Increase duration for slower, smoother scrolling */
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

  .video-container {
    max-width: 100%;
    overflow: hidden;
    position: relative;
    top: 368px;
    padding: 0px 65px;
    /* padding: 0px 65px 0 80px; */
    /* margin:0px 65px; */
    margin-bottom: 318px;
    /* padding-bottom: 70px; */
    /* box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;*/
  }

  .video {
    width: 100%;
    /* height: 100%;  */
    /* Start with 60% height */
    display: block;
    object-fit: cover;
    /* Ensure the video covers the container without distortion */
    height: 60vh;
    /* Initial video height is 60% of viewport height */
  }

  @media only screen and (max-width: 999px) {
    .video-container {
      max-width: 100%;
      overflow: hidden;
      position: relative;
      padding: 0px 20px;
      margin-bottom: 270px;
      /* padding: 60px; */
      /* padding: 0px 20px; */
      /* margin:0px 65px; */
      /* padding-bottom: 30px; */
      /* box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px; */
      /* height: 60vh;  */
      /* Initial video height for mobile */
    }
  }
</style>
<div>
  <div class="intro">
    <h1>Your Creative, Media & Technology Transformation Partner</h1>
    <p>We're a team of 1000+ Specialists delivering award-winning work for 300+ brands worldwide, 8 years and counting!
    </p>
    <!-- <div class="marqueee">
            <marquee>
                <p>IT'S TIME TO CREATE A SCHBANG</p>
            </marquee>
        </div> -->
    <div class="marquee-container">
      <div class="marquee">
        <div class="marquee-content">
          <span>Creative Digital Marketing Agency &mdash; Branding &mdash; Performance Marketing &mdash; Video
            Production
            &mdash; Web Development &mdash;</span>
          <span>Creative Digital Marketing Agency &mdash; Branding &mdash; Performance Marketing &mdash; Video
            Production
            &mdash; Web Development &mdash;</span>
          <span>Creative Digital Marketing Agency &mdash; Branding &mdash; Performance Marketing &mdash; Video
            Production
            &mdash; Web Development &mdash;</span>
          <span>Creative Digital Marketing Agency &mdash; Branding &mdash; Performance Marketing &mdash; Video
            Production
            &mdash; Web Development &mdash;</span>
          <span>Creative Digital Marketing Agency &mdash; Branding &mdash; Performance Marketing &mdash; Video
            Production
            &mdash; Web Development &mdash;</span>
          <span>Creative Digital Marketing Agency &mdash; Branding &mdash; Performance Marketing &mdash; Video
            Production
            &mdash; Web Development &mdash;</span>
          <span>Creative Digital Marketing Agency &mdash; Branding &mdash; Performance Marketing &mdash; Video
            Production
            &mdash; Web Development &mdash;</span>
          <span>Creative Digital Marketing Agency &mdash; Branding &mdash; Performance Marketing &mdash; Video
            Production
            &mdash; Web Development &mdash;</span>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="video-container">
  <video class="video" autoplay loop muted poster="./video/video thumbnail.webp">
    <source src="./video/sagartech banner 10.mp4" type="video/mp4">
  </video>
</div>

<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
<script>
  // GSAP scroll animation for video
  // GSAP scroll animation for video
  gsap.registerPlugin(ScrollTrigger);

  // Create the scroll animation for video scaling
  gsap.to(".video", {
    scrollTrigger: {
      trigger: ".video-container", // Trigger animation when the video container comes into view
      start: "top top=+50", // Start animation when the top of the video container hits the bottom of the viewport
      end: "bottom top", // End when the bottom of the video container hits the top of the viewport
      scrub: true, // Smooth scroll effect
      pin: false, // Pin the video container during scroll
    },
    // y: "-10vh", // Move the video 10% of the viewport height upwards
    scale: 1.3, // Scale up the video
    ease: "power1.out", // Easing for smooth scaling
  });

  // Adjust the container to maintain the bottom padding
  gsap.to(".video-container", {
    scrollTrigger: {
      trigger: ".video-container",
      start: "top top", // Start when the top of the video container hits the top of the viewport
      end: "bottom top", // End when the bottom of the video container hits the top of the viewport
      scrub: true, // Smooth scroll effect
      pin: false, // Pin the video container during scroll
    },
    //paddingBottom: "20vh", // Maintain 10% viewport height space below the video
  });


  // Keep padding-bottom intact during scroll
  // gsap.to(".video-container", {
  //   scrollTrigger: {
  //     trigger: ".video-container", // The video container
  //     start: "top top", // Start when the top of the video container hits the top of the viewport
  //     end: "bottom top", // End when the bottom of the video container hits the top of the viewport
  //     scrub: true, // Smooth scroll effect
  //     pin: true, // Pin the video container during scroll
  //   },
  //   paddingBottom: "70px", // Keep the padding-bottom after scaling up the video
  // });
</script>