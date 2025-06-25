<style>
    .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }

    .scrollbar-hide {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }

    .tab-button.active {
        color: white;
    }

    .tab-button.active:hover {
        background-color: transparent !important;
        color: white !important;
    }

    #tab-highlight {
        position: absolute;
        background-color: #ef4444;
        left: 0;
        /* Tailwind red-500 */
        border-radius: 9999px;
        z-index: 0;
        transition: all 0.3s ease-in-out;
        pointer-events: none;
    }
</style>




<div class="lg:px-20 px-4 lg:py-16 py-10">
    <h1 class="text-[28px] lg:text-[40px] leading-[1.15] max-w-[700px] text-center mx-auto font-[400] text-[#242424]">
        <span class="text-red-500">Checklist</span> we follow
    </h1>

    <!-- Tabs -->
    <div class="mt-10 w-full overflow-x-auto scrollbar-hide">
        <div class="relative flex gap-3 px-2 py-2 w-max mx-auto rounded-full border sm:border-gray-200" id="tab-container">

            <!-- Highlight behind buttons -->
            <div id="tab-highlight"></div>

            <!-- Buttons -->
            <button class="tab-button active relative font-semibold z-10 flex-shrink-0 px-4 py-2 rounded-full  text-sm bg-red-500 text-white transition" data-tab="frontend">Frontend</button>
            <button class="tab-button relative font-semibold z-10 flex-shrink-0 px-4 py-2 rounded-full  text-sm text-gray-600 hover:bg-gray-200 transition" data-tab="backend">Backend</button>
            <button class="tab-button relative font-semibold z-10 flex-shrink-0 px-4 py-2 rounded-full  text-sm text-gray-600 hover:bg-gray-200 transition" data-tab="seo">SEO</button>
            <button class="tab-button relative font-semibold z-10 flex-shrink-0 px-4 py-2 rounded-full  text-sm text-gray-600 hover:bg-gray-200 transition" data-tab="performance">Performance</button>
            <button class="tab-button relative font-semibold z-10 flex-shrink-0 px-4 py-2 rounded-full  text-sm text-gray-600 hover:bg-gray-200 transition" data-tab="content">Content</button>
            <button class="tab-button relative font-semibold z-10 flex-shrink-0 px-4 py-2 rounded-full  text-sm text-gray-600 hover:bg-gray-200 transition" data-tab="accessibility">Accessibility</button>
            <button class="tab-button relative font-semibold z-10 flex-shrink-0 px-4 py-2 rounded-full  text-sm text-gray-600 hover:bg-gray-200 transition" data-tab="security">Security</button>
            <button class="tab-button relative font-semibold z-10 flex-shrink-0 px-4 py-2 rounded-full  text-sm text-gray-600 hover:bg-gray-200 transition" data-tab="deployment">Deployment</button>
        </div>
    </div>

    <!-- Checklist -->
    <ul id="checklistContainer" class="lg:flex lg:justify-center lg:flex-wrap items-center grid grid-cols-1 gap-3 mt-10 max-w-[800px] mx-auto"></ul>
</div>

<script>
    const checklistData = {
        frontend: [
            "Responsive Design", "Cross-Browser Compatibility", "Mobile Optimization", "Lazy Loading", "Web Fonts Optimized", "UI/UX Micro-Interactions"
        ],
        backend: [
            "RESTful or GraphQL APIs", "Data Validation", "Authentication & Authorization", "Error Handling & Logging", "Environment Configuration",
            "Secure HTTP Headers", "File Upload Protection", "Rate Limiting / Throttling", "Database Security", "Scheduled Backups",
        ],
        seo: [
            "Meta Title & Description", "Canonical URLs", "Alt Text for Images", "Heading Tags Structure", "Sitemap.xml & robots.txt",
            "Clean URLs", "Open Graph & Twitter Cards", "Breadcrumb Markup", "Structured Data (Schema.org)",
        ],
        performance: [
            "Code Minification", "Image Optimization", "Caching Strategy", "Font Optimization", "Lazy Load Non-Essential JS", "Minimal HTTP Requests",
        ],
        content: [
            "Unique Copy", "Clear Call-To-Actions", "Contact Info & Social Links", "404 Page", "Blog/News Section", "Legal Pages",
        ],
        accessibility: [
            "Keyboard Navigation", "Screen Reader Support", "Contrast Ratio", "Focus States", "Accessible Forms", "Skip to Content Link",
        ],
        security: [
            "HTTPS Enabled", "Input Sanitization", "CSRF Protection", "Secure Cookies", "Session Management", "Third-party Script Validation",
        ],
        deployment: [
            "Production Build Created", "Version Control (Git)", "CI/CD Integration", "Domain & DNS Setup", "Fallbacks for Downtime", "301 Redirects",
        ],
    };

    const checklistContainer = document.getElementById("checklistContainer");
    const tabButtons = document.querySelectorAll(".tab-button");
    const tabHighlight = document.getElementById("tab-highlight");

    function renderChecklist(category) {
        checklistContainer.innerHTML = "";
        checklistData[category].forEach((item, index) => {
            const li = document.createElement("li");
            li.className = "px-6 py-2 rounded-full border border-gray-50 shadow-red-100 shadow mb-1 text-[13.5px] font-light tracking-wide text-gray-600 w-fit opacity-0 translate-y-4 transition-all duration-500";
            li.style.transitionDelay = `${index * 100}ms`;
            li.innerHTML = `<span><i class="fa-sharp fa-solid fa-check text-red-400 mr-1.5"></i></span>${item}`;
            checklistContainer.appendChild(li);
            requestAnimationFrame(() => {
                li.classList.remove("opacity-0", "translate-y-4");
            });
        });
    }

    function moveHighlightToButton(activeButton) {
        const buttonOffset = activeButton.offsetLeft;
        const buttonWidth = activeButton.offsetWidth;
        const buttonHeight = activeButton.offsetHeight;

        // Move highlight position
        tabHighlight.style.width = `${buttonWidth}px`;
        tabHighlight.style.height = `${buttonHeight}px`;
        tabHighlight.style.transform = `translateX(${buttonOffset}px)`;

        // Scroll into center on mobile
        const scrollContainer = document.getElementById("tab-container").parentElement;
        const containerWidth = scrollContainer.offsetWidth;
        const scrollLeft = buttonOffset - (containerWidth / 2) + (buttonWidth / 2);

        scrollContainer.scrollTo({
            left: scrollLeft,
            behavior: "smooth"
        });
    }


    tabButtons.forEach(btn => {
        btn.addEventListener("click", () => {
            tabButtons.forEach(b => {
                b.classList.remove("active", "bg-red-500", "text-white");
                b.classList.add("border-gray-300", "text-gray-600", "hover:bg-gray-200");
            });

            btn.classList.add("active", "text-white");
            btn.classList.remove("border-gray-300", "text-gray-600", "hover:bg-gray-200");

            moveHighlightToButton(btn);
            renderChecklist(btn.getAttribute("data-tab"));
        });
    });

    // On page load
    const initialActive = document.querySelector(".tab-button.active");
    moveHighlightToButton(initialActive);
    renderChecklist("frontend");
</script>