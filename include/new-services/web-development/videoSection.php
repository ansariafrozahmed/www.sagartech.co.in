<div class="lg:pb-16 pb-10 lg:px-20 px-4">
    <div class="flex lg:flex-row flex-col max-sm:items-center justify-between mt-7">
        <!-- Text Area -->
        <div class="lg:w-1/2 w-full">
            <h1 class="lg:text-[50px] text-[40px] text-[#242424] max-sm:text-center leading-[1.1] tracking-[0px] font-normal">
                Why are <span class="text-red-600">web design</span> and <span class="text-red-600">web development</span> important for your business?
            </h1>
            <p class="text-[13.5px] font-light tracking-wide text-gray-600 max-sm:text-center mt-4">
                How a Strong Website Builds Trust, Engagement, and Conversions
            </p>
            <div class="flex max-sm:justify-center mt-7">
                <button data-aos="fade-right" class="button1">
                    <a href="about">About Us</a>
                </button>
            </div>
        </div>

        <!-- Video Section -->
        <div
            id="videoWrapper"
            class="relative lg:w-1/2 w-full mx-auto max-sm:mt-7 rounded-2xl overflow-hidden shadow-xl group bg-black">
            <!-- Video -->
            <video id="customVideo" class="w-full" poster="new-images/poster.webp">
                <source src="video/web-video.mp4" type="video/mp4" />
                Your browser does not support the video tag.
            </video>

            <!-- Overlay Play Button -->
            <button
                id="playPauseOverlay"
                class="absolute inset-0 flex items-center justify-center bg-black/40 text-white text-4xl transition duration-300 group-hover:bg-black/10 z-10">
                <div class="w-14 h-14 rounded-full bg-red-500 flex justify-center items-center">
                    <i class="fa-solid fa-play text-xl"></i>
                </div>
            </button>

            <!-- Custom Controls -->
            <div
                id="videoControls"
                class="absolute bottom-0 left-0 right-0 z-20 bg-black/60 backdrop-blur px-4 py-3 flex items-center justify-between gap-4 opacity-0 pointer-events-none transition-opacity duration-300">
                <button id="playPauseBtn" class="text-white text-lg focus:outline-none" title="Play/Pause">▶</button>
                <input
                    type="range"
                    id="progressBar"
                    value="0"
                    class="w-full h-1 accent-red-500 bg-gray-300 rounded-lg cursor-pointer" />
                <button id="fullscreenBtn" class="text-white text-lg focus:outline-none" title="Fullscreen">⛶</button>
            </div>
        </div>
    </div>
    <p class="text-[13.5px] font-light tracking-wide text-gray-600 mt-10">
        In web development, we at Sagar Tech Technical Solutions combine creativity and intelligence. As one of the top web development companies in Mumbai, we are extremely proud of our work as a web design agency and our skilled team of developers and designers. Our objective is to create websites that beat your expectations and provide you with a unique online presence. In the present digital age, having a strong online presence is crucial, and we can assist you in making your ideas a reality. You can count on our expertise as a leading web design company in India to produce a website that perfectly represents your brand.
    </p>
</div>

<!-- SCRIPT SECTION -->
<script>
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
</script>