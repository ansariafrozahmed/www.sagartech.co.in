document.addEventListener("DOMContentLoaded", () => {
  const section = document.querySelector(".our-clients-section");
  if (!section) return;

  const clients = [
    "client-logos/Thaiger.png",
    "client-logos/educ4ate.webp",
    "client-logos/dontquit.png",
    "client-logos/verify8-1.png",
    "client-logos/syrocs logo.webp",
    "client-logos/axxio-laboratory.webp",
    "client-logos/yovant_recruitment_logo.webp",
    "client-logos/varela-american logo.webp",
    "client-logos/processindia.webp",
    "client-logos/saudiwells.png",
    "client-logos/BARKAT AL DUHA logo.webp",
    "client-logos/alsalama.png",
  ];

  const clients1 = [
    "client-logos/Eurocorp Logo.webp",
    "client-logos/New-Quality-Hardware-Co-Logo.webp",
    "client-logos/rbi.png",
    "client-logos/armaf.png",
    "client-logos/bsauto.png",
    "client-logos/OasisConsulting.webp",
    "client-logos/acharya-shiv.webp",
    "client-logos/AlhamdGroup.webp",
    "client-logos/cotton-culture.webp",
    "client-logos/ASAudio.webp",
    "client-logos/ZZConsultants.webp",
    "client-logos/Tasavvur.webp",
  ];

  const clients2 = [
    "client-logos/Baby%20world%20Inu%20logo.webp",
    "client-logos/05%20Eperts4Expats.webp",
    "client-logos/07%20M4%20Group.webp",
    "client-logos/08%20Boalamo.webp",
    "client-logos/18%20Zoheb%20Lala.webp",
    "client-logos/20%20Rapid%20Transport.webp",
    "client-logos/29%20Padmavati%20Chains.webp",
    "client-logos/30%20Soot%20Boot%20Wala.webp",
    "client-logos/Aadhik%20Logistics%20logo.webp",
    "client-logos/Ahlid%20Perfumes%20logo.webp",
    "client-logos/ARCHIC%20Green%20space-logo.webp",
    "client-logos/Annex%20Overseas.webp",
  ];

  const w = window.innerWidth;
  const ITEMS_PER_SLIDE = w <= 768 ? 12 : w <= 1024 ? 12 : 18;

  const container = document.getElementById("card-slides");
  const loaderBar = document.getElementById("slide-loader");

  let slides = [];
  let currentSlideIndex = 0;
  let slideTimeout;
  let isHovered = false;

  // Create one slide per array
  function createSlide(arr) {
    const group = arr.slice(0, ITEMS_PER_SLIDE);
    const slide = document.createElement("div");
    slide.className = "slide";
    slide.innerHTML = group
      .map(
        (img) => `
        <div class="border border-[#b6b6b6] bg-white rounded-lg px-3 py-2 aspect-[4/2.8] lg:aspect-[4/2.5] flex items-center justify-center">
          <img class="h-full w-full object-contain" src="${img}" alt="client logo">
        </div>`
      )
      .join("");
    container.appendChild(slide);
    return slide;
  }

  // Prepare slides
  slides = [createSlide(clients), createSlide(clients1), createSlide(clients2)];

  function animateExit(slide) {
    return new Promise((resolve) => {
      gsap.to(slide.children, {
        opacity: 0,
        scale: 0.5,
        stagger: 0.05,
        ease: "back.in(1.1)",
        duration: 0.6,
        onComplete: () => {
          slide.classList.remove("active");
          resolve();
        },
      });
    });
  }

  function animateEntry(slide) {
    slide.classList.add("active");
    gsap.fromTo(
      slide.children,
      { opacity: 0, scale: 0.5 },
      {
        opacity: 1,
        scale: 1,
        stagger: 0.05,
        ease: "back.out(1.1)",
        duration: 0.6,
      }
    );
  }

  async function showSlide(index) {
    const currentSlide = document.querySelector(".slide.active");
    if (currentSlide) await animateExit(currentSlide);
    animateEntry(slides[index]);
  }

  function startSlideLoop() {
    if (isHovered) return;

    loaderBar.style.transition = "none";
    loaderBar.style.width = "0%";
    void loaderBar.offsetWidth;
    loaderBar.style.transition = "width 5s linear";
    loaderBar.style.width = "100%";

    slideTimeout = setTimeout(() => {
      currentSlideIndex = (currentSlideIndex + 1) % slides.length;
      showSlide(currentSlideIndex).then(() => {
        startSlideLoop();
      });
    }, 5000);
  }

  // Pause and resume on hover
  container.addEventListener("mouseenter", () => {
    isHovered = true;
    clearTimeout(slideTimeout);
    loaderBar.style.transition = "none";
    loaderBar.style.width = getComputedStyle(loaderBar).width; // freeze width
  });

  container.addEventListener("mouseleave", () => {
    isHovered = false;
    startSlideLoop();
  });

  // Initial slide show
  showSlide(currentSlideIndex).then(() => {
    startSlideLoop();
  });
});
