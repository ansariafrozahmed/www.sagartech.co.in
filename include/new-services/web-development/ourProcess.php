<section id="blog" class="py-16 bg-gray-50 px-4">
    <div class="container mx-auto">
        <!-- Section Title -->
        <div class="text-center mb-12">
            <h3 class=" text-[28px] lg:text-[40px] leading-[1.15] text-center font-[400] text-[#242424]">Our Benefits</h3>
        </div>

        <!-- Blog Cards Grid -->
        <div id="blogCardsGrid" class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4 justify-center"></div>
    </div>
</section>

<script>
    const blogPosts = [{
            id: 1,
            image: "new-images/consult.webp",
            date: "1",
            title: "Consultation",
            text: "Our web development company begin by sitting down with you to understand your business, your goals, and your target audience before web development. This forms the foundation for the rest of the development process.",
        },
        {
            id: 2,
            image: "new-images/design.webp",
            date: "2",
            title: "Design",
            text: "Our design team creates beautiful, user-friendly interfaces to make sure your website loads quickly and makes an impact. As a web design company, we prioritise both elegant design and flawless operation.",
        },
        {
            id: 3,
            image: "new-images/development.webp",
            date: "3",
            title: "Development",
            text: "Our developers bring the design to life, using the latest technologies and coding practices to create a website that is both dynamic and robust.",
        },
        {
            id: 4,
            image: "new-images/test.webp",
            date: "4",
            title: "Testing",
            text: "After web development Rigorous testing is conducted to ensure that your website performs flawlessly across all devices and browsers. We leave no stone unturned in delivering a bug-free, high-performance website.",
        },
        {
            id: 5,
            image: "new-images/launch.webp",
            date: "5",
            title: "Launch",
            text: "Once everything is in place, we launch your website, making it live for the world to see. But our commitment doesn't end there; we provide ongoing support and maintenance to keep your website running smoothly. what make us best Web Development in India.",
        },
    ];

    const grid = document.getElementById("blogCardsGrid");

    blogPosts.forEach(post => {
        const card = document.createElement("div");
        card.className = "w-full max-w-sm mx-auto relative h-[320px] rounded-lg overflow-hidden group bg-white text-white";

        card.innerHTML = `
    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
      <img src="${post.image}" alt="background" class="w-full h-full object-cover" />
      <div class="absolute inset-0 bg-black/60"></div> <!-- Overlay -->
    </div>

    <!-- Decorative Shape -->
    <div class="absolute top-0 left-0 z-10" style="
      width: 135px;
      height: 70px;
      background-color: #2e2e84;
      clip-path: polygon(0 0, 100% 0, 58% 100%, 0 100%);
    "></div>

    <!-- Content -->
    <div class="relative z-20 h-full flex flex-col justify-between p-6">
      <!-- Date & Title -->
      <div class="flex gap-5 items-center">
        <div class="bg-white text-gray-700 text-center py-3 px-6 rounded w-fit ">
          <span class="block text-5xl font-bold">${post.date}</span>
        </div>
        <h3 class="text-xl font-semibold text-white hover:underline">${post.title}</h3>
      </div>

      <!-- Description -->
      <p class="text-sm text-gray-200 mt-5">${post.text}</p>
    </div>
  `;

        grid.appendChild(card);
    });
</script>