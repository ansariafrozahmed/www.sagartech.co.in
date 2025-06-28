document.addEventListener("DOMContentLoaded", () => {
  const section = document.querySelector(".our-clients-section");
  if (!section) return;

  // Client carousel logic
  const clients = [
    "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
    "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
    "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
    "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
    "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
    "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
    "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
    "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
    "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
    "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
    "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
    "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
    "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
    "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
    "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
    "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
    "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
    "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
    "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
    "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
    "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
    "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
    "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
    "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
    "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
    "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
    "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
    "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
    "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
    "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
    "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
    "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
    "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
    "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
    "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
    "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
  ];

  const w = window.innerWidth;
  const ITEMS_PER_SLIDE = w <= 768 ? 9 : w <= 1024 ? 12 : 18;

  const slides = [];
  let currentSlideIndex = 0;

  const container = document.getElementById("card-slides");
  const loaderBar = document.getElementById("slide-loader");

  // Create slides
  for (let i = 0; i < clients.length; i += ITEMS_PER_SLIDE) {
    const group = clients.slice(i, i + ITEMS_PER_SLIDE);
    const slide = document.createElement("div");
    slide.className = "slide";
    slide.innerHTML = group
      .map(
        (img) => `
      <div class="border border-[#45454a] bg-white rounded-lg p-4 md:p-6 aspect-[4/2.8] lg:aspect-[4/2.2] flex items-center justify-center">
        <img class="h-full w-full object-contain" src="${img}" alt="client logo">
      </div>
    `
      )
      .join("");
    container.appendChild(slide);
    slides.push(slide);
  }

  async function showSlide(index) {
    const currentSlide = slides.find((s) => s.classList.contains("active"));
    if (currentSlide) {
      await animateExit(currentSlide);
    }
    animateEntry(slides[index]);
  }

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
      {
        opacity: 0,
        scale: 0.5,
      },
      {
        opacity: 1,
        scale: 1,
        stagger: 0.05,
        ease: "back.out(1.1)",
        duration: 0.6,
      }
    );
  }

  function startSlideCycle() {
    loaderBar.style.transition = "none";
    loaderBar.style.width = "0%";
    void loaderBar.offsetWidth; // force reflow
    loaderBar.style.transition = "width 5s linear";
    loaderBar.style.width = "100%";

    setTimeout(() => {
      currentSlideIndex = (currentSlideIndex + 1) % slides.length;
      showSlide(currentSlideIndex).then(() => {
        startSlideCycle();
      });
    }, 5000);
  }

  // Start the first slide cycle
  showSlide(currentSlideIndex).then(() => {
    startSlideCycle();
  });
});
