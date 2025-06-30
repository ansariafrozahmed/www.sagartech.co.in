<div class="w-full mx-auto overflow-hidden" id="video-zoom-wrapper">
    <div class="h-[100vh] max-w-[200px] lg:max-w-[1200px] w-full mx-auto rounded-3xl overflow-hidden" id="video-zoom">
        <video class="w-full h-full object-cover" id="scale-video" loop muted autoplay playsinline>
            <source src="video/dynamic-section-video.mp4" type="video/mp4" />
            Your browser does not support the video tag.
        </video>
    </div>
</div>


<script>
    gsap.registerPlugin(ScrollTrigger);

    // Animate container width
    gsap.to("#video-zoom", {
        width: "100vw",
        maxWidth: "100vw",
        borderRadius: "0px",
        ease: "none",
        scrollTrigger: {
            trigger: "#video-zoom",
            start: "top 70%",
            end: "top 30%",
            scrub: 1.2,
        }
    });

    // Animate video scale
    gsap.to("#scale-video", {
        scale: 1.5,
        transformOrigin: "center center",
        ease: "none",
        scrollTrigger: {
            trigger: "#video-zoom",
            start: "top 30%",
            end: "top -30%",
            scrub: 1.2,
        }
    });
</script>