<div class="max-w-[1500px] space-y-8 lg:space-y-10 mx-auto px-5 py-10 md:px-10 md:py-12 lg:px-20 lg:py-16">
    <div>
        <h2 data-aos="fade-up"
            class="md:text-5xl mb-6 text-[32px] text-[#242424] lg:text-[36px] text-center leading-[1.2] lg:leading-[1.15] font-[400]">
            Frequently Asked Questions
        </h2>
        <p data-aos="fade-up" class="text-gray-600 text-center mb-6 text-[13.5px] font-light max-w-[550px] mx-auto">
            These are the most commonly asked questions. If you have any other questions, please feel free to contact
            <a href="mailto:info@sagartech.co.in"
                class="text-[#ff0808] font-normal underline underline-offset-2">info@sagartech.co.in</a>
        </p>
    </div>

    <div id="faq-container" class="space-y-4 max-w-[750px] mx-auto"></div>
</div>

<script>
    const data = [
        {
            question: "How fast can you build my website?",
            answer: "We deliver fully custom websites in just 7 days from the time we receive your content and branding details."
        },
        {
            question: "Is this really a custom website or just a template?",
            answer: "Every Weblix site is 100% custom-designed to match your brand, goals, and audience—no templates, ever."
        },
        {
            question: "Do I need to provide content and images?",
            answer: "You can provide your own, or we can help source professional images and write high-converting content for you."
        },
        {
            question: "Will my website be mobile-friendly?",
            answer: "Absolutely! Your website will be fully responsive, optimized for mobile, tablet, and desktop devices."
        },
        {
            question: "Do you offer SEO services?",
            answer: "Yes! Basic on-page SEO optimization is included in every package to help you rank and attract traffic."
        },
        {
            question: "Can I update the website myself later?",
            answer: "Yes, your site will be built on a user-friendly platform so you can easily make changes anytime."
        },
        {
            question: "What if I need changes after launch?",
            answer: "We include 30 days of free post-launch support, and offer affordable maintenance plans if you need ongoing help."
        },
        {
            question: "Is there any hidden cost?",
            answer: "Nope! We believe in transparent, flat-rate pricing—you’ll know exactly what you’re paying for before we begin."
        }
    ];

    const container = document.getElementById('faq-container');

    data.forEach((item, index) => {
        const wrapper = document.createElement('div');
        wrapper.className = "border-b pb-2 last:border-b-0 overflow-hidden";

        wrapper.innerHTML = `
      <button class="accordion-header w-full flex justify-between items-center lg:px-6 py-2 text-left text-[#242424] transition-all">
        <span class="font-light">${item.question}</span>
        <svg class="w-4 h-4 transform transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2"
          viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
        </svg>
      </button>
      <div class="accordion-body px-2 lg:px-6 py-0 h-0 overflow-hidden opacity-0 transition-all duration-300 text-sm text-gray-600">
        <div class="pt-2 pb-4 text-gray-600 text-left text-[13.5px] font-light">${item.answer}</div>
      </div>
    `;

        container.appendChild(wrapper);
    });

    document.querySelectorAll('.accordion-header').forEach(button => {
        button.addEventListener('click', () => {
            const body = button.nextElementSibling;
            const icon = button.querySelector('svg');

            const isOpen = !body.classList.contains('opacity-0');

            // Close all
            document.querySelectorAll('.accordion-body').forEach(el => {
                if (el !== body) {
                    el.style.height = '0px';
                    el.classList.remove('opacity-100');
                    el.classList.add('opacity-0');
                }
            });
            document.querySelectorAll('.accordion-header svg').forEach(svg => {
                if (svg !== icon) svg.classList.remove('rotate-180');
            });

            // Toggle current
            if (isOpen) {
                body.style.height = '0px';
                body.classList.remove('opacity-100');
                body.classList.add('opacity-0');
                icon.classList.remove('rotate-180');
            } else {
                const inner = body.querySelector('div');
                body.style.height = inner.offsetHeight + 'px';
                body.classList.remove('opacity-0');
                body.classList.add('opacity-100');
                icon.classList.add('rotate-180');
            }
        });
    });
</script>