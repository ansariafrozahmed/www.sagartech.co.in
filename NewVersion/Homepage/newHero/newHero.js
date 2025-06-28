document.addEventListener("DOMContentLoaded", () => {
  const heroHeadings = document.querySelectorAll(".hero-heading");
  const firstSection = document.querySelector(".firstSection");
  const clientShowcase = document.querySelector(".clientShowcase");
  const boxes = document.querySelectorAll("#grid .box");

  if (!firstSection) return; // safely exit if not on page

  // Animate hero headings
  gsap.fromTo(
    heroHeadings,
    {
      translateY: 150,
    },
    {
      translateY: 0,
      duration: 1.5,
      ease: "power2.inOut",
    }
  );

  // Animate client showcase
  gsap.fromTo(
    clientShowcase,
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

  // MatchMedia for responsive text and spacing
  const mm = gsap.matchMedia();

  mm.add("(max-width: 768px)", () => {
    gsap.fromTo(
      firstSection,
      {
        fontSize: "36px",
        height: "100vh",
        color: "#c2c2c2",
        paddingTop: "0px",
      },
      {
        paddingTop: "80px",
        fontSize: "36px",
        height: firstSection.scrollHeight,
        duration: 0.7,
        delay: 1.5,
        color: "#242424",
        ease: "power2.inOut",
      }
    );
  });

  mm.add("(min-width: 760px) and (max-width: 1024px)", () => {
    gsap.fromTo(
      firstSection,
      {
        fontSize: "70px",
        height: "100vh",
        color: "#c2c2c2",
      },
      {
        fontSize: "60px",
        height: firstSection.scrollHeight,
        duration: 0.7,
        delay: 1.5,
        color: "#242424",
        ease: "power2.inOut",
      }
    );
  });

  mm.add("(min-width: 1025px)", () => {
    gsap.fromTo(
      firstSection,
      {
        fontSize: "90px",
        height: "100vh",
        paddingTop: "0px",
        color: "#c2c2c2",
      },
      {
        paddingTop: "50px",
        fontSize: "60px",
        height: firstSection.scrollHeight,
        duration: 0.7,
        delay: 1.5,
        color: "#242424",
        ease: "power2.inOut",
      }
    );
  });

  // Hover effect for boxes
  boxes.forEach((box) => {
    const inner = box.querySelector(".inner");

    box.addEventListener("mouseenter", () => {
      gsap.to(inner, {
        scale: 1.15,
        opacity: 1,
        transformOrigin: "center center",
        duration: 0.3,
        ease: "power2.out",
      });

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
});
