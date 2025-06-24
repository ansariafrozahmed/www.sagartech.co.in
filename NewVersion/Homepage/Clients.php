    <div class="bg-white">
        <div class="max-w-[1500px] space-y-5 lg:space-y-12 px-4 py-8 md:p-8 lg:p-12">
            <div class="space-y-1">
                <span class="text-sm inline-block px-1 tracking-wide rounded-3xl text-[#ff0808] font-normal">Client</span>
                <h2 class="text-5xl font-medium text-[#28282B]">Our <span class="text-[#28282B]">Clients Shine</span></h2>
            </div>
            <div class="card-container grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4 md:gap-6">
                <div class="border border-[#45454a] bg-white rounded-lg p-6 aspect-[4/2.2]">
                    <img class="h-full w-full object-contain" src="https://www.datocms-assets.com/151374/1741888493-ecommerce-seatgeek-edited.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <script>
        const client = [
            "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
            "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
            "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
            "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
            "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
            "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
            "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
            "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
            "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
            "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
            "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
            "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
            "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
            "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
            "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
            "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
            "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
            "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
            "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
            "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
            "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
            "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
            "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
            "https://www.datocms-assets.com/151374/1741889762-beauty-prose-edited.png",
        ];
        const cardContainer = document.querySelector(".card-container");

        cardContainer.innerHTML = client.map((img) => {
            return `
            <div class="border border-[#45454a] rounded-lg p-8 lg:p-9 aspect-[4/2.2]">
                <img class="h-full w-full object-contain" src="${img}" alt="client logo">
            </div>
        `;
        }).join("");
    </script>