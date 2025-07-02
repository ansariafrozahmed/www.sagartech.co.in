<section id="blog1" class="py-16 px-4" style="background-color: #141414;">
  <div class="container mx-auto">
    <!-- Section Title -->
    <div class="text-center mb-12 w-full ">
      <h3 class="text-[35px] lg:text-[50px] text-start  w-full leading-[1.15]  font-[400] text-white">
        Our <span class="text-white">Process</span>
      </h3>
    </div>

    <!-- Blog Cards Grid -->
    <div id="blogCardsGrid" class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3 justify-center"></div>
  </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    const blogPosts = [{
        id: 1,
        image: "new-images/consult.webp",
        iconPath: "new-icons/analytics.png",
        title: "Analysis",
        text: "We deeply analyze your business objectives, user behavior patterns, and competitor strategies to design a dynamic website structure and features that drive engagement, improve usability, and maximize results.",
      },
      {
        id: 2,
        image: "new-images/consult.webp",
        iconPath: "new-icons/curve.png",
        title: "Design & Planning",
        text: "We design user-centric layouts and implement intuitive navigation structures to ensure your dynamic website is both visually engaging and effortlessly functional, delivering a seamless user experience across all devices.",
      },
      {
        id: 3,
        image: "new-images/consult.webp",
        iconPath: "new-icons/development.png",
        title: "Development",
        text: "We develop robust and scalable dynamic websites using modern technologies, ensuring seamless performance, strong security, and flexibility for future growth. Every feature is tailored to your business needs, delivering a responsive and engaging user experience.",
      },
      {
        id: 4,
        image: "new-images/consult.webp",
        iconPath: "new-icons/optimization-black.png",
        title: "Optimization",
        text: "We handle everything from custom development and real-time analytics tracking to ongoing maintenance and performance monitoring. Our team also continuously optimizes the website for speed, SEO, and user engagement to ensure long-term success.",
      },
      {
        id: 5,
        image: "new-images/design.webp",
        iconPath: "new-icons/testing.png",
        title: "Testing",
        text: "We conduct rigorous functionality, performance, and security testing to ensure your dynamic website runs flawlessly. Once validated, we deploy it seamlessly to a live server with full optimization and monitoring in place.",
      },
      {
        id: 6,
        image: "new-images/development.webp",
        iconPath: "new-icons/maintainance.png",
        title: "Maintenance",
        text: "We provide ongoing support, regular updates, and performance monitoring to keep your dynamic website secure, fast, and aligned with evolving business needs.",
      },
    ];

    const grid = document.getElementById("blogCardsGrid");

    blogPosts.forEach(post => {
      const card = document.createElement("div");
      card.className = "blog-card w-full max-w-sm mx-auto relative border border-gray-100 rounded-lg overflow-hidden group bg-black text-white";
      card.innerHTML = `
        <div class="relative z-20 h-full flex flex-col p-6">
          <div class="flex gap-5">
            <div>
              <img src="${post.iconPath}" alt="icon" class="mb-3 mt-2 w-10 h-10" />
              <h3 class="text-[20px] lg:text-[24px] leading-[1.15] font-[400] text-white">${post.title}</h3>
              <hr class="my-4">
              <p class="text-[13.5px] font-light text-white mt-2">${post.text}</p>
            </div>
          </div>
        </div>
      `;
      grid.appendChild(card);
    });

    // GSAP ScrollTrigger animations
    gsap.registerPlugin(ScrollTrigger);

    // Animate cards
    gsap.utils.toArray(".blog-card").forEach((card, i) => {
      gsap.from(card, {
        scrollTrigger: {
          trigger: "#blogCardsGrid",
          start: "top 50%",
          end: "bottom 20%",
          toggleActions: "play none none none",
        },
        opacity: 0,
        y: 50,
        duration: 0.6,
        delay: i * 0.3,
        ease: "power2.out",
      });
    });

    // Animate section background from black to white
    gsap.to("#blog1", {
      scrollTrigger: {
        trigger: "#blog1",
        start: "top 80%",
        end: "top 40%",
        scrub: true,
      },
      backgroundColor: "#f9fafb",
      ease: "none"
    });

    // Animate card background from black to white
    gsap.utils.toArray(".blog-card").forEach((card) => {
      gsap.to(card, {
        scrollTrigger: {
          trigger: "#blog1",
          start: "top 80%",
          end: "top 40%",
          toggleActions: "play none none reverse",
          scrub: true,
        },
        backgroundColor: "#ffffff",
        ease: "none"
      });
    });

    // Animate text color from white to black
    gsap.to("#blog1 h3, #blog1 p, #blog1 span", {
      scrollTrigger: {
        trigger: "#blog1",
        start: "top 80%",
        end: "top 40%",
        toggleActions: "play none none reverse",
        scrub: true,
      },
      color: "#242424",
      ease: "none"
    });

    ScrollTrigger.refresh();
  });
</script>