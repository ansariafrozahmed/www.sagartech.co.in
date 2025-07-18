<style>
  .service-card {
    transition: width 0.3s ease, height 0.3s ease;
    will-change: width, height;
  }

  .service-card {
    transition: width 0.3s ease, height 0.3s ease;
    will-change: width, height;
  }

  .overlay-container {
    position: absolute;
    inset: 0;
    background-color: rgba(0, 0, 0, 0);
    /* Start transparent */
    transition: background-color 0.3s ease;
    z-index: 20;
    pointer-events: none;
  }

  /* When service-cards is hovered, make all titles gray-400 */
  .service-cards:hover .card-title {
    color: #6e727a;
    /* Tailwind gray-400 */
  }

  /* But if the parent .group is hovered, override it with gray-200 */
  .group:hover .card-title {
    color: #e5e7eb !important;
    /* Tailwind gray-200 */
  }

  .wrapper-scale {
    /* transition: scale 0.3s ease; */
  }

  .swiper-slide {
    transition: transform 0.3s ease, opacity 0.3s ease;
    opacity: 0.6;
    transform: scale(0.85);
  }

  .swiper-slide-active {
    opacity: 1;
    transform: scale(1);
    z-index: 10;
  }
</style>

<div class="bg-[#242424] relative overflow-hidden hero-wrapper w-full -mt-20
">
  <div class="relative headerSection -translate-y-[70px] max-w-[1500px] mx-auto"></div>
  <div class="overlay-container pointer-events-none z-20"></div>
  <div class="firstSection h-screen w-full flex flex-col  items-center justify-center">
    <div class="heading-wrapper wrapper-scale !origin-top space-y-6 mt-72 transition duration-300 ease-out">
      <div>
        <div class="overflow-hidden heading1">
          <h2
            class="hero-heading text-[2.3rem] md:text-[4.5rem] lg:text-[7rem] translate-y-full text-center robottoFont uppercase font-black leading-none text-[#424242]">
            Your Trusted
          </h2>
        </div>
        <div class="overflow-hidden heading2">
          <h2
            class="hero-heading text-[2.3rem] md:text-[4.5rem] lg:text-[7rem] translate-y-full text-center robottoFont uppercase font-black leading-none text-[#424242]">
            Marketing Agency
          </h2>
        </div>
        <p
          class="paragraph-text text-content pt-2 opacity-0 translate-y-10 max-w-[600px] mx-auto font-light text-sm px-4 text-center tracking-wide text-[#24244]">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio beatae
          facilis alias ex et minima quam unde exercitationem aut numquam natus.
        </p>
      </div>
    </div>
    <!-- DIV MAINTAIN DISTANCE BETWEEN TITLE AND CARD SECTION -->
    <div class="h-8">

    </div>

    <div class="lg:px-20  px-4 w-full mx-auto lg:mt-10 mt-2 service-cards opacity-0 translate-y-36 relative z-30">
      <p
        class="uppercase absolute -top-7 md:-top-[132px] transform -translate-x-1/2 left-1/2 w-fit text-center text-gray-600 text-[13px] lg:mb-4 mb-0 featured-works opacity-0">
        Featured Works
      </p>
      <!-- For desktop only -->
      <div id="serviceCardContainer"
        class="lg:flex hidden card-container justify-center gap-5 max-w-[1350px] h-[250px] -mt-16 mx-auto items-end">
        <!-- Repeat this block for each card -->
        <div class="group">
          <div class="service-card opacity-0 overflow-hidden">
            <div class="!h-full w-full card-image">
              <img src="./brand-identity/sagartech.webp" class="h-full w-full object-cover" alt="" />
            </div>
          </div>
          <h4
            class="card-title uppercase text-sm text-gray-600 font-medium mt-2 group-hover:text-gray-200 transition-colors duration-300 ease-out">
            Design Club
          </h4>
        </div>
        <div class="group">
          <div class="service-card opacity-0 overflow-hidden">
            <div class="!h-full w-full card-image">
              <img src="./brand-identity/sagartech.webp" class="h-full w-full object-cover" alt="" />
            </div>
          </div>
          <h4
            class="card-title uppercase text-sm text-gray-600 font-medium mt-2 group-hover:text-gray-200 transition-colors duration-300 ease-out">
            Design Club
          </h4>
        </div>
        <div class="group">
          <div class="service-card opacity-0 overflow-hidden">
            <div class="!h-full w-full card-image">
              <img src="./brand-identity/sagartech.webp" class="h-full w-full object-cover" alt="" />
            </div>
          </div>
          <h4
            class="card-title uppercase text-sm text-gray-600 font-medium mt-2 group-hover:text-gray-200 transition-colors duration-300 ease-out">
            Design Club
          </h4>
        </div>
        <div class="group">
          <div class="service-card opacity-0 overflow-hidden">
            <div class="!h-full w-full card-image">
              <img src="./brand-identity/sagartech.webp" class="h-full w-full object-cover" alt="" />
            </div>
          </div>
          <h4
            class="card-title uppercase text-sm text-gray-600 font-medium mt-2 group-hover:text-gray-200 transition-colors duration-300 ease-out">
            Design Club
          </h4>
        </div>
        <div class="group">
          <div class="service-card opacity-0 overflow-hidden">
            <div class="!h-full w-full card-image">
              <img src="./brand-identity/sagartech.webp" class="h-full w-full object-cover" alt="" />
            </div>
          </div>
          <h4
            class="card-title uppercase text-sm text-gray-600 font-medium mt-2 group-hover:text-gray-200 transition-colors duration-300 ease-out">
            Design Club
          </h4>
        </div>
        <div class="group">
          <div class="service-card opacity-0 overflow-hidden">
            <div class="!h-full w-full card-image">
              <img src="./brand-identity/sagartech.webp" class="h-full w-full object-cover" alt="" />
            </div>
          </div>
          <h4
            class="card-title uppercase text-sm text-gray-600 font-medium mt-2 group-hover:text-gray-200 transition-colors duration-300 ease-out">
            Design Club
          </h4>
        </div>
      </div>

      <!-- For mobile only -->
      <!-- Swiper Container -->
      <div class="lg:hidden block w-full h-[200px]">
        <div class="swiper mySwiper w-full px-4">
          <div class="swiper-wrapper">
            <!-- Repeat each card inside swiper-slide -->
            <div class="swiper-slide swiper-slide w-[70%] sm:w-[60%] md:w-[50%] lg:w-[40%]">
              <div class="service-cardss overflow-hidden">
                <div class="!h-full w-full card-image">
                  <img src="./brand-identity/sagartech.webp" class="h-full w-full object-cover" />
                </div>
              </div>
              <h4 class="card-titles uppercase text-sm text-gray-600 font-medium mt-2 text-center">
                Design Club
              </h4>
            </div>
            <div class="swiper-slide swiper-slide w-[70%] sm:w-[60%] md:w-[50%] lg:w-[40%]">
              <div class="service-cardss overflow-hidden">
                <div class="!h-full w-full card-image">
                  <img src="./brand-identity/sagartech.webp" class="h-full w-full object-cover" />
                </div>
              </div>
              <h4 class="card-titles uppercase text-sm text-gray-600 font-medium mt-2 text-center">
                Design Club
              </h4>
            </div>
            <div class="swiper-slide swiper-slide w-[70%] sm:w-[60%] md:w-[50%] lg:w-[40%]">
              <div class="service-cardss overflow-hidden">
                <div class="!h-full w-full card-image">
                  <img src="./brand-identity/sagartech.webp" class="h-full w-full object-cover" />
                </div>
              </div>
              <h4 class="card-titles uppercase text-sm text-gray-600 font-medium mt-2 text-center">
                Design Club
              </h4>
            </div>
            <div class="swiper-slide swiper-slide w-[70%] sm:w-[60%] md:w-[50%] lg:w-[40%]">
              <div class="service-cardss overflow-hidden">
                <div class="!h-full w-full card-image">
                  <img src="./brand-identity/sagartech.webp" class="h-full w-full object-cover" />
                </div>
              </div>
              <h4 class="card-titles uppercase text-sm text-gray-600 font-medium mt-2 text-center">
                Design Club
              </h4>
            </div>
            <div class="swiper-slide swiper-slide w-[70%] sm:w-[60%] md:w-[50%] lg:w-[40%]">
              <div class="service-cardss overflow-hidden">
                <div class="!h-full w-full card-image">
                  <img src="./brand-identity/sagartech.webp" class="h-full w-full object-cover" />
                </div>
              </div>
              <h4 class="card-titles uppercase text-sm text-gray-600 font-medium mt-2 text-center">
                Design Club
              </h4>
            </div>

            <!-- Repeat this swiper-slide for each card -->
          </div>

          <!-- Navigation Buttons -->
        </div>
        <div
          class="absolute -bottom-10 max-sm:-bottom-10 sm:-bottom-32 max-md:-bottom-32  left-1/2 -translate-x-1/2 flex gap-4 z-[100]">
          <div id="custom-prev"
            class="w-14 h-8 border rounded-md flex items-center justify-center hover:bg-gray-300 transition-all duration-200 ease-in-out cursor-pointer">
            <img src="new-images/left-chevron.png" alt="Left" class="w-5 h-5" />
          </div>

          <div id="custom-next"
            class="w-14 h-8 border rounded-md flex items-center justify-center hover:bg-gray-300 transition-all duration-200 ease-in-out cursor-pointer">
            <img src="new-images/right-chevron.png" alt="Right" class="w-5 h-5" />
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  const mySwiper = new Swiper(".mySwiper", {
    loop: true,
    centeredSlides: true,
    slidesPerView: "auto", // allows variable width for peeking
    spaceBetween: 10,
    navigation: false,
    // breakpoints: {
    //   640: { slidesPerView: 1 },
    //   768: { slidesPerView: 2 },
    //   1024: { slidesPerView: 3 },
    // },
  });

  // Custom buttons
  document.getElementById("custom-prev").addEventListener("click", () => {
    mySwiper.slidePrev();
  });

  document.getElementById("custom-next").addEventListener("click", () => {
    mySwiper.slideNext();
  });
</script>

<script>
  if (window.innerWidth >= 1024) {
    const serviceCards = document.querySelector(".service-cards");
    const overlay = document.querySelector(".overlay-container");
    const heading1 = document.querySelector(".wrapper-scale");

    serviceCards.addEventListener("mouseenter", () => {
      overlay.style.backgroundColor = "rgba(0, 0, 0, 0.7)";
      heading1.style.transform = "scale(0.85) translateY(-100px)";
    });

    serviceCards.addEventListener("mouseleave", () => {
      overlay.style.backgroundColor = "rgba(0, 0, 0, 0)";
      heading1.style.transform = "scale(1) translateY(-100px)";
    });
  }
</script>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    if (window.innerWidth >= 1024) {
      const serviceCards = document.querySelector(".service-cards");
      const featuredWorks = document.querySelector(".featured-works");

      serviceCards.addEventListener("mouseenter", () => {
        featuredWorks.style.opacity = "0";
        featuredWorks.style.visibility = "hidden";
      });

      serviceCards.addEventListener("mouseleave", () => {
        featuredWorks.style.opacity = "1";
        featuredWorks.style.visibility = "visible";
      });
    }
  });
</script>

<script>
  if (window.innerWidth >= 1024) {
    const container = document.getElementById("serviceCardContainer");
    const cards = Array.from(container.querySelectorAll(".service-card"));
    const GAP = 5;
    const TOTAL_GAP = GAP * (cards.length - 1);
    const WIDTH_WEIGHTS = {
      0: 1.6,
      1: 1.3,
      2: 1.1,
      3: 0.9,
      4: 0.7,
      5: 0.5,
    };
    const MAX_HEIGHT = 330;

    function applyWidthsAndHeights(hoveredIndex) {
      const containerWidth = container.clientWidth - TOTAL_GAP;
      let totalWeight = 0;
      const weights = [];

      cards.forEach((_, i) => {
        const distance = Math.abs(i - hoveredIndex);
        const weight = WIDTH_WEIGHTS[distance] ?? 0.4;
        weights.push(weight);
        totalWeight += weight;
      });

      cards.forEach((card, i) => {
        const ratio = weights[i] / totalWeight;
        const width = ratio * containerWidth;
        const height = (weights[i] / WIDTH_WEIGHTS[0]) * MAX_HEIGHT;
        card.style.width = `${width}px`;
        card.style.height = `${height}px`;
      });
    }

    function resetSizes() {
      const containerWidth = container.clientWidth - TOTAL_GAP;
      const equalWidth = containerWidth / cards.length;

      cards.forEach((card) => {
        card.style.width = `${equalWidth}px`;
        card.style.height = `${MAX_HEIGHT * 0.8}px`;
      });
    }

    cards.forEach((card, index) => {
      card.addEventListener("mouseenter", () => applyWidthsAndHeights(index));
    });

    container.addEventListener("mouseleave", resetSizes);
    window.addEventListener("load", resetSizes);
    window.addEventListener("resize", resetSizes);
  }
</script>