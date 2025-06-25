gsap.registerPlugin(ScrollTrigger);

// LENIS SETUP
lenis = new Lenis({
  duration: 1,
  easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
  smooth: true,
  smoothTouch: false,
  direction: "vertical",
  gestureDirection: "vertical",
  lerp: 0.1,
});

function raf(time) {
  lenis.raf(time);
  requestAnimationFrame(raf);
}
requestAnimationFrame(raf);

//Hero With Service

// Portfolio Slider
const scrollSection = document.querySelectorAll(".scroll-section");

window.addEventListener("load", () => {
  document.querySelectorAll("video.lazy-video").forEach((video) => {
    // Add autoplay only after page is fully loaded
    video.setAttribute("autoplay", true);
    video.load(); // starts fetching now
  });
});

scrollSection.forEach((section) => {
  const wrapper = section.querySelector(".wrapper");
  const items = wrapper.querySelectorAll(".item");

  // Initialize
  let direction = null;

  if (section.classList.contains("vertical-section")) {
    direction = "vertical";
  } else if (section.classList.contains("horizontal-section")) {
    direction = "horizontal";
  }

  initScroll(section, items, direction);
});

function initScroll(section, items, direction) {
  // Initial states
  items.forEach((item, index) => {
    if (index !== 0) {
      direction == "horizontal"
        ? gsap.set(item, {
            xPercent: 100,
          })
        : gsap.set(item, {
            yPercent: 100,
          });
    }
  });

  const timeline = gsap.timeline({
    scrollTrigger: {
      trigger: section,
      pin: true,
      start: "top top",
      end: () => `+=${items.length * 100}%`,
      scrub: 1,
      invalidateOnRefresh: true,
      // markers: true,
    },
    defaults: {
      ease: "none",
    },
  });
  items.forEach((item, index) => {
    timeline.to(item, {
      scale: 0.93,
      borderRadius: "40px",
    });

    direction == "horizontal"
      ? timeline.to(
          items[index + 1],
          {
            xPercent: 0,
          },
          "<"
        )
      : timeline.to(
          items[index + 1],
          {
            yPercent: 0,
          },
          "<"
        );
  });
}

// CLIENT SECTION
gsap.fromTo(
  ".client-heading",
  {
    scaleY: 0,
    transformOrigin: "bottom center",
  },
  {
    scaleY: 1,
    duration: 1.2,
    ease: "bounce.out",
    scrollTrigger: {
      trigger: ".our-clients-section",
      start: "top 50%",
      toggleActions: "play none none none",
      once: true,
    },
  }
);

gsap.from(".card-container > div", {
  opacity: 0,
  scale: 0.8,
  duration: 0.6,
  ease: "back.out(1.7)", // springy pop
  stagger: {
    each: 0.1, // 100ms delay between each card
    from: "start", // can also be "center" or "random"
  },
  scrollTrigger: {
    trigger: ".card-container",
    start: "top 80%",
    once: true,
  },
});
