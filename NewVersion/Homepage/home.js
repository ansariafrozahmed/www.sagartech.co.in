gsap.registerPlugin(ScrollTrigger);

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
