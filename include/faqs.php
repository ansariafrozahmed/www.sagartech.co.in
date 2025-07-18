<?php if (!empty($faqData)) : ?>
    <div class="bg-white">
        <div class="max-w-[1500px] space-y-8 lg:space-y-10 mx-auto px-5 py-10 md:px-10 md:py-12 lg:px-20 lg:py-16">
            <div>
                <h2 class="md:text-5xl mb-6 text-[32px] text-[#242424] lg:text-[36px] text-center leading-[1.2] lg:leading-[1.15] font-[400]">
                    Frequently Asked Questions
                </h2>
                <p class="text-gray-600 text-center mb-6 text-[13.5px] font-light max-w-[550px] mx-auto">
                    These are the most commonly asked questions. If you have any other questions, please feel free to contact
                    <a href="mailto:info@sagartech.co.in"
                        class="text-[#ff0808] font-normal underline underline-offset-2">info@sagartech.co.in</a>
                </p>
            </div>

            <div id="faq-container-<?php echo $faqId; ?>" class="space-y-4 max-w-[750px] mx-auto"></div>
        </div>
    </div>



    <script>
        const faqData_<?php echo $faqId; ?> = <?php echo json_encode($faqData); ?>;
        const container_<?php echo $faqId; ?> = document.getElementById('faq-container-<?php echo $faqId; ?>');

        faqData_<?php echo $faqId; ?>.forEach((item) => {
            const wrapper = document.createElement('div');
            wrapper.className = "border-b pb-2 last:border-b-0 overflow-hidden";
            wrapper.innerHTML = `
            <button class="accordion-header w-full flex justify-between items-center lg:px-6 py-2 text-left text-[#242424] transition-all">
                <span class="font-light">${item.question}</span>
                <svg class="w-4 h-4 transform transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
            </button>
            <div class="accordion-body px-2 lg:px-6 py-0 h-0 overflow-hidden opacity-0 transition-all duration-300 text-sm text-gray-600">
                <div class="pt-2 pb-4 text-gray-600 text-left text-[13.5px] font-light">${item.answer}</div>
            </div>`;
            container_<?php echo $faqId; ?>.appendChild(wrapper);
        });

        setTimeout(() => {
            const headers = container_<?php echo $faqId; ?>.querySelectorAll('.accordion-header');
            headers.forEach(button => {
                button.addEventListener('click', () => {
                    const body = button.nextElementSibling;
                    const icon = button.querySelector('svg');
                    const isOpen = !body.classList.contains('opacity-0');

                    headers.forEach(b => {
                        const siblingBody = b.nextElementSibling;
                        if (siblingBody !== body) {
                            siblingBody.style.height = '0px';
                            siblingBody.classList.remove('opacity-100');
                            siblingBody.classList.add('opacity-0');
                            b.querySelector('svg').classList.remove('rotate-180');
                        }
                    });

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
        }, 0);
    </script>
<?php endif; ?>