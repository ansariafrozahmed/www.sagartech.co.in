document.addEventListener("DOMContentLoaded", () => {
  const scrollSections = document.querySelectorAll(".scroll-section");
  if (!scrollSections.length) return;

  // Lazy load + autoplay videos when page is fully loaded
  window.addEventListener("load", () => {
    document.querySelectorAll("video.lazy-video").forEach((video) => {
      video.setAttribute("autoplay", true);
      video.load();
    });
  });

  scrollSections.forEach((section) => {
    const wrapper = section.querySelector(".wrapper");
    const items = wrapper.querySelectorAll(".item");

    if (!items.length) return;

    const direction = section.classList.contains("vertical-section")
      ? "vertical"
      : section.classList.contains("horizontal-section")
      ? "horizontal"
      : null;

    if (!direction) return;

    initScroll(section, items, direction);
  });

  ScrollTrigger.refresh();

  function initScroll(section, items, direction) {
    // Set initial state
    items.forEach((item, index) => {
      if (index !== 0) {
        if (direction === "horizontal") {
          gsap.set(item, { xPercent: 100 });
        } else {
          gsap.set(item, { yPercent: 100 });
        }
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
        markers: true,
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

      if (items[index + 1]) {
        if (direction === "horizontal") {
          timeline.to(
            items[index + 1],
            {
              xPercent: 0,
            },
            "<"
          );
        } else {
          timeline.to(
            items[index + 1],
            {
              yPercent: 0,
            },
            "<"
          );
        }
      }
    });
  }
});
