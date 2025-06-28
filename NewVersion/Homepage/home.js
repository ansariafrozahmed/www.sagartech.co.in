gsap.registerPlugin(ScrollTrigger);

//Hero With Service
gsap.fromTo(
  ".hero-heading",
  {
    translateY: 150,
  },
  {
    translateY: 0,
    duration: 1.5,
    ease: "power2.inOut",
  }
);

const elem = document.querySelector(".firstSection");
const mm = gsap.matchMedia();

gsap.fromTo(
  ".clientShowcase",
  {
    top: -300,
    opacity: 0,
  },
  {
    top: 0,
    opacity: 1,
    duration: 0.7,
    delay: 1.5,
    ease: "power2.inOut",
  }
);

gsap.fromTo(
  ".headerWrapper",
  {
    translateY: -300,
    opacity: 0,
    marginTop: "-70px",
  },
  {
    translateY: 0,
    marginTop: "0px",
    opacity: 1,
    duration: 0.7,
    delay: 1.5,
    ease: "power2.inOut",
  }
);

mm.add("(max-width: 768px)", () => {
  // Mobile
  gsap.fromTo(
    ".firstSection",
    {
      fontSize: "36px",
      height: "100vh",
      color: "#c2c2c2",
      paddingTop: "0px",
    },
    {
      paddingTop: "80px",
      fontSize: "36px",
      height: document.querySelector(".firstSection").scrollHeight,
      duration: 0.7,
      delay: 1.5,
      color: "#242424",
      ease: "power2.inOut",
    }
  );
});

mm.add("(min-width: 760px) and (max-width: 1024px)", () => {
  // Tablet
  gsap.fromTo(
    ".firstSection",
    {
      fontSize: "70px",
      height: "100vh",
      color: "#c2c2c2",
    },
    {
      fontSize: "60px",
      height: document.querySelector(".firstSection").scrollHeight,
      duration: 0.7,
      delay: 1.5,
      color: "#242424",
      ease: "power2.inOut",
    }
  );
});

mm.add("(min-width: 1025px)", () => {
  // Desktop
  gsap.fromTo(
    ".firstSection",
    {
      fontSize: "90px",
      height: "100vh",
      paddingTop: "0px",
      color: "#c2c2c2",
    },
    {
      paddingTop: "50px",
      fontSize: "60px",
      height: document.querySelector(".firstSection").scrollHeight,
      duration: 0.7,
      delay: 1.5,
      color: "#242424",
      ease: "power2.inOut",
    }
  );
});

const boxes = document.querySelectorAll("#grid .box");

boxes.forEach((box) => {
  const inner = box.querySelector(".inner");

  box.addEventListener("mouseenter", () => {
    // Animate the hovered box's inner
    gsap.to(inner, {
      scale: 1.15,
      opacity: 1,
      transformOrigin: "center center",
      duration: 0.3,
      ease: "power2.out",
    });

    // Animate other boxes' inners
    boxes.forEach((other) => {
      if (other !== box) {
        const otherInner = other.querySelector(".inner");
        gsap.to(otherInner, {
          scale: 0.9,
          opacity: 0.3,
          transformOrigin: "center center",
          duration: 0.3,
          ease: "power2.out",
        });
      }
    });
  });

  box.addEventListener("mouseleave", () => {
    boxes.forEach((b) => {
      const bInner = b.querySelector(".inner");
      gsap.to(bInner, {
        scale: 1,
        opacity: 1,
        duration: 0.3,
        ease: "power2.out",
      });
    });
  });
});

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
