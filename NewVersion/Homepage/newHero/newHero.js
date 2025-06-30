document.addEventListener("DOMContentLoaded", () => {
  const heroHeadings = document.querySelectorAll(".hero-heading");
  const headingWrappers = document.querySelectorAll(".heading-wrapper");

  const mm = gsap.matchMedia();

  mm.add(
    {
      // Mobile: up to 767px
      isMobile: "(max-width: 767px)",
      // Tablet: 768px to 1023px
      isTablet: "(min-width: 768px) and (max-width: 1023px)",
      // Desktop: 1024px and up
      isDesktop: "(min-width: 1024px)",
    },
    (context) => {
      const { isMobile, isTablet, isDesktop } = context.conditions;

      // Set responsive values
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

      // Reveal headings with stagger
      heroHeadings.forEach((heading, index) => {
        gsap.fromTo(
          heading,
          { translateY: 150 },
          {
            translateY: 0,
            duration: isMobile ? 0.6 : 0.8,
            delay: index * (isMobile ? 0.2 : 0.3),
            ease: "power2.out",
          }
        );
      });

      // Animate font size + color
      gsap.to(heroHeadings, {
        fontSize: fontSize,
        color: textColor,
        delay: delay,
        duration: 1,
        ease: "power2.inOut",
      });

      // Move heading wrapper up
      gsap.to(headingWrappers, {
        translateY: moveUp,
        delay: delay,
        duration: 1,
        ease: "power2.inOut",
      });

      // Change background
      gsap.to(".hero-wrapper", {
        backgroundColor: bgColor,
        delay: delay,
        duration: 1,
        ease: "power2.inOut",
      });

      gsap.to(".text-content", {
        opacity: 1,
        translateY: 0,
        duration: 0.6,
        delay: delay + 0.5,
        ease: "power2.inOut",
      });

      gsap.to(".serviceSection", {
        translateY: 0,
        opacity: 1,
        duration: 0.6,
        delay: delay + 0.5,
        ease: "power2.inOut",
      });

      gsap.to(".headerSection", {
        translateY: 0,
        duration: 0.6,
        delay: delay + 0.5,
        ease: "power2.inOut",
      });
    }
  );
});
