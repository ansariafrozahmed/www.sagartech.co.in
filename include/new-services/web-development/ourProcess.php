<section id="blog" class="py-16 bg-gray-50 px-4">
  <div class="container mx-auto">
    <!-- Section Title -->
    <div class="text-center mb-12">
      <h3 class="text-[28px] lg:text-[40px] leading-[1.15] text-center font-[400] text-[#242424]">
        Our <span class="text-red-500">Process</span>
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
        iconPath: "new-icons/consultant.png",
        date: "1",
        title: "Consultation",
        text: "Our web development company begin by sitting down with you to understand your business, your goals, and your target audience before web development. This forms the foundation for the rest of the development process.",
      },
      {
        id: 2,
        image: "new-images/design.webp",
        iconPath: "new-icons/curve.png",
        date: "2",
        title: "Design",
        text: "Our design team creates beautiful, user-friendly interfaces to make sure your website loads quickly and makes an impact. As a web design company, we prioritise both elegant design and flawless operation.",
      },
      {
        id: 3,
        image: "new-images/development.webp",
        iconPath: "new-icons/development.png",
        date: "3",
        title: "Development",
        text: "Our developers bring the design to life, using the latest technologies and coding practices to create a website that is both dynamic and robust.",
      },
      {
        id: 4,
        image: "new-images/test.webp",
        iconPath: "new-icons/testing.png",
        date: "4",
        title: "Testing",
        text: "After web development Rigorous testing is conducted to ensure that your website performs flawlessly across all devices and browsers. We leave no stone unturned in delivering a bug-free, high-performance website.",
      },
      {
        id: 5,
        image: "new-images/test.webp",
        iconPath: "new-icons/optimization-black.png",
        date: "5",
        title: "Optimization",
        text: "Ensure the website or application is optimized for performance, SEO, and user experience before launch to maximize impact and reach.",
      },
      {
        id: 6,
        image: "new-images/launch.webp",
        iconPath: "new-icons/launch.png",
        date: "6",
        title: "Launch",
        text: "Once everything is in place, we launch your website, making it live for the world to see. But our commitment doesn't end there; we provide ongoing support and maintenance to keep your website running smoothly. what make us best Web Development in India.",
      },
    ];

    const grid = document.getElementById("blogCardsGrid");

    blogPosts.forEach(post => {
      const card = document.createElement("div");
      card.className = "blog-card w-full max-w-sm mx-auto relative border border-gray-100 rounded-lg overflow-hidden group bg-white text-white";
      card.innerHTML = `
        <div class="relative z-20 h-full flex flex-col p-6">
          <div class="flex gap-5">
            <div>
              <img src="${post.iconPath}" alt="icon" class="mb-3 mt-2 w-10 h-10" />
              <h3 class="text-[20px] lg:text-[24px] leading-[1.15] max-w-[600px] lg:max-w-[700px] text-gray-800 font-[400] text-[#242424]">${post.title}</h3>
              <hr class="my-4">
              <p class="text-[13.5px] font-light text-gray-400 mt-2">${post.text}</p>
            </div>
          </div>
        </div>
      `;
      grid.appendChild(card);
    });

    // Initialize GSAP animations
    gsap.registerPlugin(ScrollTrigger);

    gsap.utils.toArray(".blog-card").forEach((card, i) => {
      gsap.from(card, {
        scrollTrigger: {
          trigger: "#blogCardsGrid",
          start: "top 80%",
          end: "bottom 20%",
          toggleActions: "play none none none",
          // markers: true, // Uncomment for debugging
        },
        opacity: 0,
        y: 50,
        duration: 0.6,
        stagger: 0.2,
        delay: i * 0.3,
        ease: "power2.out",
      });
    });

    // Refresh ScrollTrigger to account for dynamic content
    ScrollTrigger.refresh();
  });
</script>