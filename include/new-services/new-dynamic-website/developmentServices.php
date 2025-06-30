<section id="blog" class="py-16 bg-white px-4 transition-colors duration-500 ease-in-out">
    <div class="container mx-auto">
        <div class="text-center mb-12">
            <h3 id="blog-heading" class="text-[28px] lg:text-[40px] leading-[1.15] font-[400] text-[#242424] transition-colors duration-500">
                Platform Used by Sagar Tech Technical Solution for Dynamic Website Development
            </h3>
        </div>

        <div id="blogCardsGrid1" class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3 justify-center"></div>
    </div>
</section>


<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const blogPosts = [{
                id: 1,
                image: "new-images/consult.webp",
                iconPath: "new-icons/stacks/nodejs.png",
                date: "1",
                title: "Node.js Custom Development",
                text: "Node.js is a powerful runtime framework that enables us to create scalable, high-performance dynamic Websites . Node.js allows us to use JavaScript for both front-end and back-end development, optimising the development process and making codebase maintenance easier. Node.js also has a robust ecosystem of libraries and packages, allowing us to rapidly add new features and functionalities to your dynamic website.",
            },
            {
                id: 2,
                image: "new-images/consult.webp",
                iconPath: "new-icons/stacks/wordpress.png",
                date: "1",
                title: "Wordpress",
                text: "WordPress is a popular CMS that we often use for dynamic website development, especially for clients who require a user-friendly interface for content management. WordPress's extensive plugin ecosystem allows us to add a wide range of functionalities to your website, such as e-commerce capabilities, event calendars, and social media integration.",
            },
            {
                id: 3,
                image: "new-images/consult.webp",
                iconPath: "new-icons/stacks/cms.png",
                date: "1",
                title: "Headless CMS (Content Management System)",
                text: "Headless CMS platforms, such as Strapi, Contentful, and Sanity, provide a flexible and scalable way to manage content for dynamic websites. Unlike traditional CMS platforms, which tightly couple the content management and presentation layers, headless CMS platforms separate these layers, allowing us to deliver content to any device or platform via APIs.",
            },
        ];

        const grid = document.getElementById("blogCardsGrid1");

        blogPosts.forEach(post => {
            const card = document.createElement("div");
            card.className = "blog-card1 w-full max-w-sm mx-auto relative border border-gray-100 rounded-lg overflow-hidden group bg-white text-white";
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

        gsap.utils.toArray(".blog-card1").forEach((card, i) => {
            gsap.from(card, {
                scrollTrigger: {
                    trigger: "#blogCardsGrid1",
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