<style>
 .service-card {
    transition: width 0.3s ease, height 0.3s ease;
    will-change: width, height;
  }
</style>

<div class="bg-[#242424] relative overflow-hidden hero-wrapper w-full h-screen">
  <div class="relative headerSection -translate-y-[70px] max-w-[1500px] mx-auto"></div>

  <div class="firstSection h-screen w-full flex flex-col items-center justify-center">
    <div class="heading-wrapper space-y-6 mt-72">
      <div>
        <div class="overflow-hidden">
          <h2 class="hero-heading text-[2.3rem] md:text-[4.5rem] lg:text-[7rem] translate-y-full text-center robottoFont uppercase font-black leading-none text-[#424242]">
            Your Trusted
          </h2>
        </div>
        <div class="overflow-hidden">
          <h2 class="hero-heading text-[2.3rem] md:text-[4.5rem] lg:text-[7rem] translate-y-full text-center robottoFont uppercase font-black leading-none text-[#424242]">
            Marketing Agency
          </h2>
        </div>
        <p class="text-content pt-2 opacity-0 translate-y-10 max-w-[600px] mx-auto font-light text-sm px-4 text-center tracking-wide text-[#24244]">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio beatae facilis alias ex et minima quam unde exercitationem aut numquam natus.
        </p>
      </div>
    </div>

    <div class="lg:px-20 px-4 w-full mx-auto mt-10 service-cards opacity-0 translate-y-36">
      <div id="serviceCardContainer" class="card-container flex justify-center gap-5 max-w-[1350px] h-[250px] mx-auto items-end">
        <!-- Repeat this block for each card -->

        <div class="">

          <div class="service-card opacity-0 overflow-hidden ">
            <div class="!h-full w-full card-image">
              <img src="./brand-identity/sagartech.webp" class="h-full w-full object-cover" alt="">
            </div>
          </div>
          <h4 class="uppercase text-sm text-gray-600 font-medium mt-2">Design Club</h4>
        </div>
        <div class="">

          <div class="service-card opacity-0 overflow-hidden ">
            <div class="!h-full w-full card-image">
              <img src="./brand-identity/sagartech.webp" class="h-full w-full object-cover" alt="">
            </div>
          </div>
          <h4 class="uppercase text-sm text-gray-600 font-medium mt-2">Design Club</h4>
        </div>
        <div class="">

          <div class="service-card opacity-0 overflow-hidden ">
            <div class="!h-full w-full card-image">
              <img src="./brand-identity/sagartech.webp" class="h-full w-full object-cover" alt="">
            </div>
          </div>
          <h4 class="uppercase text-sm text-gray-600 font-medium mt-2">Design Club</h4>
        </div>
        <div class="">

          <div class="service-card opacity-0 overflow-hidden ">
            <div class="!h-full w-full card-image">
              <img src="./brand-identity/sagartech.webp" class="h-full w-full object-cover" alt="">
            </div>
          </div>
          <h4 class="uppercase text-sm text-gray-600 font-medium mt-2">Design Club</h4>
        </div>
        <div class="">

          <div class="service-card opacity-0 overflow-hidden ">
            <div class="!h-full w-full card-image">
              <img src="./brand-identity/sagartech.webp" class="h-full w-full object-cover" alt="">
            </div>
          </div>
          <h4 class="uppercase text-sm text-gray-600 font-medium mt-2">Design Club</h4>
        </div>
        <div class="">

          <div class="service-card opacity-0 overflow-hidden ">
            <div class="!h-full w-full card-image">
              <img src="./brand-identity/sagartech.webp" class="h-full w-full object-cover" alt="">
            </div>
          </div>
          <h4 class="uppercase text-sm text-gray-600 font-medium mt-2">Design Club</h4>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
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
    5: 0.5
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
</script>