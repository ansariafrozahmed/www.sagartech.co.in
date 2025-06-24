<div class="bg-white">
  <div id="blog-section" class="max-w-[1500px] space-y-8 lg:space-y-10 mx-auto px-5 py-10 md:px-10 md:py-12 lg:px-28 lg:py-24">
    <div>
      <h2 class="md:text-5xl mb-6 text-[28px] text-center text-[#242424] lg:text-[36px] leading-[1.2] lg:leading-[1.15] font-[400]">
        Blogs And Articles
      </h2>
    </div>
    <div id="blog-container" class="grid grid-cols-1 md:grid-cols-3 gap-8">
    </div>
  </div>
</div>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const blogSection = document.getElementById("blog-section");
    const blogContainer = document.getElementById("blog-container");

    fetch("https://sagartech.co.in/blogs/wp-json/custom/v1/posts?page=1&per_page=3")
      .then(res => res.json())
      .then(data => {
        if (!data || !data.posts || data.posts.length < 1) {
          blogSection.style.display = "none";
          return;
        }

        const posts = data.posts;

        posts.forEach(post => {
          const img = post.featured_image ?
            post.featured_image :
            "https://developers.elementor.com/docs/assets/img/elementor-placeholder-image.png";

          const html = `
            <div class="space-y-3">
              <a href="https://sagartech.co.in/blog/${post.slug}" class="block rounded-xl group aspect-[4/2.4] lg:aspect-[4/2.8] overflow-hidden border">
                <img src="${img}" alt="${post.title}" class="h-full group-hover:scale-105 transition-all ease-in-out duration-200 w-full object-cover" />
              </a>
              <div class="space-y-2">
                <p class="text-[13px] text-[#656565] flex items-center gap-2 tracking-wide font-light">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-calendar-days">
                    <path d="M8 2v4" />
                    <path d="M16 2v4" />
                    <rect width="18" height="18" x="3" y="4" rx="2" />
                    <path d="M3 10h18" />
                    <path d="M8 14h.01" />
                    <path d="M12 14h.01" />
                    <path d="M16 14h.01" />
                    <path d="M8 18h.01" />
                    <path d="M12 18h.01" />
                    <path d="M16 18h.01" />
                  </svg>
                  <span class="mt-1">${new Date(post.date).toLocaleDateString('en-US', {
                    year: 'numeric',
                    month: 'long',
                    day: 'numeric'
                  })}</span>
                </p>
                <a href="https://sagartech.co.in/blog/${post.slug}" class="block">
                  <h3 class="font-light leading-snug text-[#242424] text-[16px]">${post.title}</h3>
                </a>
                <p class="text-[#767676] text-[13px] font-light">${post.excerpt}</p>
                <a href="https://sagartech.co.in/blog/${post.slug}"
                  class="block text-[13px] text-[#ff0808] font-light hover:underline underline-offset-4">Read more</a>
              </div>
            </div>
          `;
          blogContainer.insertAdjacentHTML("beforeend", html);
        });
      })
      .catch(error => {
        console.error("Blog fetch error:", error);
        blogSection.style.display = "none"; // Hide section on error
      });
  });
</script>