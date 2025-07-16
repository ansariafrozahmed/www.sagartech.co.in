document.addEventListener("DOMContentLoaded", () => {
  gsap.registerPlugin();
  gsap.config({ force3D: true });

  // Add will-change optimization to animating elements
  document
    .querySelectorAll(".service-card, .hero-heading, .text-content")
    .forEach((el) => (el.style.willChange = "transform, opacity"));

  const heroHeadings = document.querySelectorAll(".hero-heading");
  const headingWrappers = document.querySelectorAll(".heading-wrapper");

  const mm = gsap.matchMedia();

  mm.add(
    {
      isMobile: "(max-width: 767px)",
      isTablet: "(min-width: 768px) and (max-width: 1023px)",
      isDesktop: "(min-width: 1024px)",
    },
    (context) => {
      const { isMobile, isTablet, isDesktop } = context.conditions;

      let fontSize, delay, moveUp, bgColor, textColor;

      if (isMobile) {
        fontSize = "2.3rem";
        delay = 1.0;
        moveUp = -110;
        bgColor = "#f5f5f5";
        textColor = "#000";
      } else if (isTablet) {
        fontSize = "3.5rem";
        delay = 1.3;
        moveUp = -275;
        bgColor = "#fafafa";
        textColor = "#1a1a1a";
      } else if (isDesktop) {
        fontSize = "4rem";
        delay = 1.6;
        moveUp = -100;
        bgColor = "#fff";
        textColor = "#242424";
      }

      // Animate Headings
      heroHeadings.forEach((heading, index) => {
        gsap.fromTo(
          heading,
          { y: 150 },
          {
            y: 0,
            // marginTop: "50px",
            duration: isMobile ? 0.6 : 0.8,
            delay: index * (isMobile ? 0.2 : 0.3),
            ease: "power2.out",
          }
        );
      });

      gsap.to(heroHeadings, {
        fontSize: fontSize,
        color: textColor,
        delay: delay,
        duration: 1,
        ease: "power2.inOut",
      });

      gsap.to(headingWrappers, {
        y: moveUp,
        marginTop: "40px",
        delay: delay,
        duration: 1,
        ease: "power2.inOut",
      });

      gsap.to(".hero-wrapper", {
        backgroundColor: bgColor,
        delay: delay,
        duration: 1,
        ease: "power2.inOut",
      });

      gsap.to(".text-content", {
        opacity: 1,
        y: 0,
        duration: 0.6,
        delay: delay + 0.5,
        ease: "power2.inOut",
      });

      gsap.to(".headerSection", {
        y: 0,
        duration: 0.6,
        delay: delay + 0.5,
        ease: "power2.inOut",
      });

      // Reveal service-cards wrapper first
      gsap.to(".service-cards", {
        opacity: 1,
        y: 0,
        duration: 0.2,
        delay: delay + 0.3,
        ease: "power2.inOut",
        onComplete: animateServiceCards,
      });

      // Animate .service-card elements after wrapper is shown
      function animateServiceCards() {
        const serviceCards = document.querySelectorAll(".service-card");
        const total = serviceCards.length;
        const centerIndex = Math.floor(total / 2);

        // Set initial state
        serviceCards.forEach((card) => {
          const randomScale = Math.random() * 0.5 + 0.5;
          gsap.set(card, {
            scale: randomScale,
            opacity: 0,
            y: 100,
          });
        });

        // Build center-out sequence
        const sequence = [];
        for (let i = 0; i < total; i++) {
          const left = centerIndex - i;
          const right = centerIndex + i;
          if (left >= 0) sequence.push(serviceCards[left]);
          if (right < total && right !== left)
            sequence.push(serviceCards[right]);
        }

        // 🔄 Animate featured works + cards together
        const tl = gsap.timeline();

        tl.to(".featured-works", {
          y: 0,
          opacity: 1,
          duration: 0.6,
          ease: "power2.out",
        });

        tl.to(
          sequence,
          {
            scale: 1,
            opacity: 1,
            y: 0,
            duration: 0.5,
            stagger: 0.05,
            ease: "power3.out",
          },
          "<"
        ); // "<" means start this at same time as previous
      }
    }
  );
});

// hover card animation
