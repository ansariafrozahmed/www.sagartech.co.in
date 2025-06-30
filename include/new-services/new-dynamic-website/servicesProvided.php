<script src="https://unpkg.com/gsap@3/dist/gsap.min.js"></script>
<script src="https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js"></script>
<script src="https://unpkg.com/split-type"></script>
<!-- <style>
    .text-title,
    .text-sub,
    .tag-item {
        transition: color 0.6s ease, border-color 0.6s ease;
    }
</style> -->
<div class=" overflow-hidden ">
    <div id="dynamic-section" class="transition-colors duration-500">
        <div class="lg:px-20 px-4 lg:py-16 py-10 flex lg:flex-row flex-col max-sm:items-center justify-between gap-10">

            <!-- Text Content -->
            <div class="lg:w-[55%] w-full text-area">
                <h3 class="text-title text-[28px] lg:text-[40px] leading-[1.15] font-[400] max-sm:text-white md:text-start text-center max-w-[700px]">
                    We specialize in creating powerful and user-friendly
                    <span class="text-title">dynamic websites</span> tailored to your business goals.
                </h3>

                <!-- Tags -->
                <div class="max-w-[500px] md:mx-0 mx-auto md:flex md:flex-wrap lg:justify-normal md:justify-center gap-3 mt-10">
                    <div class="tag-item border border-gray-200 text-gray-700 px-3 py-2 rounded-full text-[13.5px] w-fit max-sm:mb-3">CMS-Based Website</div>
                    <div class="tag-item border border-gray-200 text-gray-700 px-3 py-2 rounded-full text-[13.5px] w-fit max-sm:mb-3">Admin Panel Integration</div>
                    <div class="tag-item border border-gray-200 text-gray-700 px-3 py-2 rounded-full text-[13.5px] w-fit max-sm:mb-3">Dynamic Product Listings</div>
                    <div class="tag-item border border-gray-200 text-gray-700 px-3 py-2 rounded-full text-[13.5px] w-fit max-sm:mb-3">Subscription System</div>
                    <div class="tag-item border border-gray-200 text-gray-700 px-3 py-2 rounded-full text-[13.5px] w-fit max-sm:mb-3">Booking & Appointments</div>
                    <div class="tag-item border border-gray-200 text-gray-700 px-3 py-2 rounded-full text-[13.5px] w-fit max-sm:mb-3">Business Portals</div>
                    <div class="tag-item border border-gray-200 text-gray-700 px-3 py-2 rounded-full text-[13.5px] w-fit max-sm:mb-3">Travel & Tourism</div>
                    <div class="tag-item border border-gray-200 text-gray-700 px-3 py-2 rounded-full text-[13.5px] w-fit max-sm:mb-3">Real-Time Data</div>
                    <div class="tag-item border border-gray-200 text-gray-700 px-3 py-2 rounded-full text-[13.5px] w-fit max-sm:mb-3">Blog System</div>
                    <div class="tag-item border border-gray-200 text-gray-700 px-3 py-2 rounded-full text-[13.5px] w-fit max-sm:mb-3">E-commerce</div>
                    <div class="tag-item border border-gray-200 text-gray-700 px-3 py-2 rounded-full text-[13.5px] w-fit max-sm:mb-3">CRM Integration</div>
                </div>

                <!-- Stats -->
                <div class="flex gap-10 items-center max-sm:justify-center mt-10 stat-area">
                    <div>
                        <div class="text-title text-[28px] lg:text-[40px] font-[400] max-sm:text-white">20+</div>
                        <hr class="my-2 border-gray-300">
                        <div class="text-sub text-[13.5px] text-gray-600">Dynamic Website Experts</div>
                    </div>
                    <div>
                        <div class="text-title text-[28px] lg:text-[40px] font-[400] max-sm:text-white">100+</div>
                        <hr class="my-2 border-gray-300">
                        <div class="text-sub text-[13.5px] text-gray-600">Websites Delivered</div>
                    </div>
                    <div>
                        <div class="text-title text-[28px] lg:text-[40px] font-[400] max-sm:text-white">8+ Years</div>
                        <hr class="my-2 border-gray-300">
                        <div class="text-sub text-[13.5px] text-gray-600">Experience</div>
                    </div>
                </div>
            </div>

            <!-- Video -->
            <div class="lg:w-[45%] w-full">
                <video class="md:max-w-[400px] max-w-[350px] h-auto block object-cover" autoplay loop muted playsinline>
                    <source src="video/logo-video.mp4" type="video/mp4" />
                    Your browser does not support the video tag
                </video>
            </div>

        </div>
    </div>
</div>

<!-- SCRIPT SECTION -->
<!-- <script>
    const video = document.getElementById("customVideo");
    const wrapper = document.getElementById("videoWrapper");
    const playPauseBtn = document.getElementById("playPauseBtn");
    const playPauseOverlay = document.getElementById("playPauseOverlay");
    const progressBar = document.getElementById("progressBar");
    const fullscreenBtn = document.getElementById("fullscreenBtn");
    const controls = document.getElementById("videoControls");

    let hideControlsTimeout;

    function showControlsTemporarily() {
        controls.classList.remove("opacity-0", "pointer-events-none");
        clearTimeout(hideControlsTimeout);
        hideControlsTimeout = setTimeout(() => {
            if (!video.paused) {
                controls.classList.add("opacity-0", "pointer-events-none");
            }
        }, 3000);
    }

    function togglePlayPause() {
        if (video.paused) {
            video.play();
            playPauseBtn.textContent = "⏸";
            playPauseOverlay.style.display = "none";
            showControlsTemporarily();
        } else {
            video.pause();
            playPauseBtn.textContent = "▶";
            playPauseOverlay.style.display = "flex";
            controls.classList.remove("opacity-0", "pointer-events-none");
            clearTimeout(hideControlsTimeout);
        }
    }

    playPauseBtn.addEventListener("click", togglePlayPause);
    playPauseOverlay.addEventListener("click", togglePlayPause);

    video.addEventListener("click", () => {
        video.pause();
        playPauseBtn.textContent = "▶";
        playPauseOverlay.style.display = "flex";
        controls.classList.remove("opacity-0", "pointer-events-none");
        clearTimeout(hideControlsTimeout);
    });

    // Spacebar toggle play
    window.addEventListener("keydown", (e) => {
        if (e.code === "Space") {
            e.preventDefault();
            togglePlayPause();
        }
    });

    // Fullscreen toggle
    fullscreenBtn.addEventListener("click", () => {
        if (!document.fullscreenElement) {
            wrapper.requestFullscreen();
        } else {
            document.exitFullscreen();
        }
    });

    // Fullscreen style handling
    document.addEventListener("fullscreenchange", () => {
        if (document.fullscreenElement === wrapper) {
            wrapper.classList.add("min-h-screen", "flex", "items-center", "justify-center");
        } else {
            wrapper.classList.remove("min-h-screen", "flex", "items-center", "justify-center");
        }
    });

    // Progress bar update
    video.addEventListener("timeupdate", () => {
        const progress = (video.currentTime / video.duration) * 100;
        progressBar.value = progress || 0;
    });

    progressBar.addEventListener("input", () => {
        const time = (progressBar.value / 100) * video.duration;
        video.currentTime = time;
    });

    // Show controls when mouse moves during play
    video.addEventListener("mousemove", () => {
        if (!video.paused) {
            showControlsTemporarily();
        }
    });

    // Reset everything on video end
    video.addEventListener("ended", () => {
        playPauseBtn.textContent = "▶";
        playPauseOverlay.style.display = "flex";
        controls.classList.remove("opacity-0", "pointer-events-none");
        progressBar.value = 0;
        clearTimeout(hideControlsTimeout);
    });
</script> -->
<script>
    gsap.registerPlugin(ScrollTrigger);

    ScrollTrigger.matchMedia({
        "(min-width: 768px)": function() {
            const section = document.querySelector("#dynamic-section");
            const textEls = document.querySelectorAll(".text-title, .text-sub, .tag-item");

            ScrollTrigger.create({
                trigger: section,
                start: "top 90%",
                end: "bottom 80%",
                scrub: true,
                onLeave: () => {
                    document.body.classList.add("darkBody");
                },
                onEnterBack: () => {
                    document.body.classList.add("darkBody");
                },
                onEnter: () => {
                    document.body.classList.remove("darkBody");
                },
                onLeaveBack: () => {
                    document.body.classList.remove("darkBody");
                },

                onUpdate: (self) => {
                    const progress = self.progress;

                    // Background transition: dark (#141414 rgb(20)) → white (#ffffff rgb(255))
                    const bgVal = Math.round(20 + (255 - 20) * progress);
                    const bgColor = `rgb(${bgVal}, ${bgVal}, ${bgVal})`;
                    document.body.style.backgroundColor = bgColor;

                    // Text transition: white (#ffffff rgb(255)) → dark (#242424 rgb(36))
                    const textVal = Math.round(255 - (255 - 36) * progress);
                    const textColor = `rgb(${textVal}, ${textVal}, ${textVal})`;

                    textEls.forEach(el => {
                        el.style.color = textColor;
                        if (el.classList.contains("tag-item")) {
                            el.style.borderColor = textColor;
                        }
                    });
                }
            });
        }
    });
</script>