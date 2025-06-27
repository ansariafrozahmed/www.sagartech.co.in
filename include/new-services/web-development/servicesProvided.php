<script src="https://unpkg.com/gsap@3/dist/gsap.min.js"></script>
<script src="https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js"></script>
<script src="https://unpkg.com/split-type"></script>

<div class="lg:h-[310vh] h-[420vh] relative">
    <div class="lg:px-20 px-4 bg-white lg:py-16 py-10 flex lg:flex-row flex-col max-sm:items-center justify-between gap-10">
        <div class="lg:w-[55%] w-full">
            <h3 class="text-[28px] lg:text-[40px] leading-[1.15] max-w-[600px] lg:max-w-[700px] font-[400] text-[#242424] md:text-start text-center">
                We are committed to finding innovative and unconventional solutions. Pushing boundaries to exceed <span class="text-red-500">client goals</span>.
            </h3>
            <div class="max-w-[500px]  md:mx-0 mx-auto md:flex md:flex-wrap lg:justify-normal md:justify-center  gap-3 mt-10">
                <div class="w-fit max-md:mb-3 border border-gray-200 px-3 py-2 rounded-full text-[13.5px] text-gray-500">
                    Ecommerce Website
                </div>
                <div class="w-fit max-md:mb-3 border border-gray-200 px-3 py-2 rounded-full text-[13.5px] text-gray-500">
                    Dynamic Website
                </div>
                <div class="w-fit max-md:mb-3 border border-gray-200 px-3 py-2 rounded-full text-[13.5px] text-gray-500">
                    Static Website
                </div>
                <div class="w-fit max-md:mb-3 border border-gray-200 px-3 py-2 rounded-full text-[13.5px] text-gray-500">
                    Blog Website
                </div>
                <div class="w-fit max-md:mb-3 border border-gray-200 px-3 py-2 rounded-full text-[13.5px] text-gray-500">
                    Travel & Tourism Website
                </div>
                <div class="w-fit max-md:mb-3 border border-gray-200 px-3 py-2 rounded-full text-[13.5px] text-gray-500">
                    Portfolio Website
                </div>
                <div class="w-fit max-md:mb-3 border border-gray-200 px-3 py-2 rounded-full text-[13.5px] text-gray-500">
                    Hotel Managment Website
                </div>
                <div class="w-fit max-md:mb-3 border border-gray-200 px-3 py-2 rounded-full text-[13.5px] text-gray-500">
                    Business Website
                </div>
                <div class="w-fit max-md:mb-3 border border-gray-200 px-3 py-2 rounded-full text-[13.5px] text-gray-500">
                    Logistic Website
                </div>
                <div class="w-fit max-md:mb-3 border border-gray-200 px-3 py-2 rounded-full text-[13.5px] text-gray-500">
                    Healthcare Website
                </div>
                <div class="w-fit max-md:mb-3 border border-gray-200 px-3 py-2 rounded-full text-[13.5px] text-gray-500">
                    Human Resource Website
                </div>
            </div>
            <div class=" flex gap-10 items-center max-sm:justify-center mt-10 ">
                <div class="">
                    <div class=" text-[28px] lg:text-[40px] leading-[1.15] max-w-[600px] lg:max-w-[700px] font-[400] text-[#242424]">
                        20+
                    </div>
                    <hr class="my-2">
                    <div class="text-[13.5px] font-light tracking-wide text-gray-600 mt-">
                        Team member
                    </div>
                </div>
                <div class="">
                    <div class=" text-[28px] lg:text-[40px] leading-[1.15] max-w-[600px] lg:max-w-[700px] font-[400] text-[#242424]">
                        500+
                    </div>
                    <hr class="my-2">
                    <div class="text-[13.5px] font-light tracking-wide text-gray-600 mt-">
                        Completed Projects
                    </div>
                </div>
                <div class="">
                    <div class=" text-[28px] lg:text-[40px] leading-[1.15] max-w-[600px] lg:max-w-[700px] font-[400] text-[#242424]">
                        8+ Years
                    </div>
                    <hr class="my-2">
                    <div class="text-[13.5px] font-light tracking-wide text-gray-600 mt-">
                        In the business
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:w-[45%] w-full">
            <video
                class="md:max-w-[400px] max-w-[350px] h-auto block object-cover"
                autoplay
                loop
                muted
                playsinline>
                <source src="video/logo-video.mp4" type="video/mp4" />
                Your browser does not support the video tag
            </video>
        </div>

    </div>

    <!-- Empty box -->
    <div class="h-[100vh]   w-full" id="animation-bottom"></div>

    <!-- video section -->
    <div class=" sticky   -z-10 lg:bottom-0 -bottom-20 py-28 bg-center bg-cover  h-[100vh] lg:px-20 px-4 flex flex-col justify-center items-center bg-[url('new-images/sticky-bg4.webp')]">
        <div class="absolute top-0 left-0 w-full h-full inset-0 bg-black/85"></div>
        <div class="flex lg:flex-row flex-col max-sm:items-center justify-between mt-7">
            <!-- Text Area -->
            <div class=" w-full">
                <section id="heading-section" class=" ">
                    <div id="trigger-heading-end" class="h-[1px] w-full"></div>
                    <h2
                        id="animated-heading"
                        class="lg:text-[50px] text-[40px] text-[#fff] max-sm:text-center leading-[1.1] tracking-[0px] font-normal  mx-auto text-center ">
                        Why are <span class="text-red-600">web design</span> and <span class="text-red-600">web
                            development</span> important for your business?
                    </h2>
                    <div id="trigger-heading-end" class="h-[1px] w-full"></div>
                </section>
                <p class="text-[13.5px] font-light tracking-wide text-gray-400 text-center mt-10 " id="animated-subtitle">
                    How a Strong Website Builds Trust, Engagement, and Conversions
                </p>
                <!-- <div class="flex justify-center mt-7">
                <button data-aos="fade-right" class="button1">
                    <a href="about">About Us</a>
                </button>
            </div> -->
            </div>

            <!-- Video Section
        <div id="videoWrapper"
            class="relative lg:w-1/2 w-full mx-auto max-sm:mt-7 rounded-2xl overflow-hidden shadow-xl group bg-black">
            Video
            <video id="customVideo" class="w-full" poster="new-images/poster.webp">
                <source src="video/web-video.mp4" type="video/mp4" />
                Your browser does not support the video tag.
            </video>

            Overlay Play Button
            <button id="playPauseOverlay"
                class="absolute inset-0 flex items-center justify-center bg-black/10 text-white text-4xl transition duration-300 group-hover:bg-black/20 z-10">
                <div class="w-14 h-14 rounded-full bg-red-500 flex justify-center items-center">
                    <i class="fa-solid fa-play text-xl"></i>
                </div>
            </button>

            Custom Controls
            <div id="videoControls"
                class="absolute bottom-0 left-0 right-0 z-20 bg-black/0 backdrop-blur px-4 py-3 flex items-center justify-between gap-4 opacity-0 pointer-events-none transition-opacity duration-300">
                <button id="playPauseBtn" class="text-white text-lg focus:outline-none" title="Play/Pause">▶</button>
                <input type="range" id="progressBar" value="0"
                    class="w-full h-1 accent-red-500 bg-gray-300 rounded-lg cursor-pointer" />
                <button id="fullscreenBtn" class="text-white text-lg focus:outline-none" title="Fullscreen">⛶</button>
            </div>
        </div> -->
        </div>
        <p
            id="animated-paragraph"
            class="text-[13.5px] font-light tracking-wide text-gray-400  opacity-0 text-center translate-y-6 mt-10">
            In web development, we at Sagar Tech Technical Solutions combine creativity and intelligence. As one of
            the top web development companies in Mumbai, we are extremely proud of our work as a web design agency
            and our skilled team of developers and designers. Our objective is to create websites that beat your
            expectations and provide you with a unique online presence. In the present digital age, having a strong
            online presence is crucial, and we can assist you in making your ideas a reality. You can count on our
            expertise as a leading web design company in India to produce a website that perfectly represents your
            brand.
        </p>
    </div>
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

<script>
    // 1. Split heading text into characters
    const splitHeading = new SplitType("#animated-heading", {
        types: "words, chars"
    });

    // 2. Optional: preserve word spacing
    splitHeading.words.forEach(word => {
        word.style.display = "inline-block";
        word.style.whiteSpace = "nowrap";
    });

    // 3. Create a timeline and ScrollTrigger
    const headingTimeline = gsap.timeline({
        scrollTrigger: {
            trigger: "#animation-bottom",
            start: "top 20%",
            end: "bottom 20%",
            scrub: 1.2,
            pin: false, // You can enable pin if you want section to hold
            markers: false
        }
    });

    // 4. Add heading char animation to timeline
    headingTimeline.fromTo(
        splitHeading.chars, {
            opacity: 0,
            filter: "blur(4px)"
        }, {
            opacity: 1,
            filter: "blur(0px)",
            stagger: 0.05,
            ease: "power4.out"
        }
    );

    // 5. Then animate subtitle
    headingTimeline.fromTo(
        "#animated-subtitle", {
            opacity: 0,
            y: 20
        }, {
            opacity: 1,
            y: 0,
            duration: 0.6,
            ease: "power2.out"
        }
    );

    // 6. Then animate paragraph
    headingTimeline.fromTo(
        "#animated-paragraph", {
            opacity: 0,
            y: 20
        }, {
            opacity: 1,
            y: 0,
            duration: 0.6,
            ease: "power2.out"
        }
    );
</script>