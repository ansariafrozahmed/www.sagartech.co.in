<div class="w-full mx-auto overflow-hidden bg-white" id="video-zoom-wrapper">
    <div class="h-[100vh] max-w-[200px] lg:max-w-[1200px] w-full mx-auto rounded-3xl overflow-hidden" id="video-zoom">
        <video class="w-full h-full object-cover" id="scale-video" loop muted autoplay playsinline>
            <source src="video/home/thaigerDesktop.mp4" type="video/mp4" />
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
            start: "top 40%",
            end: "top 10%",
            scrub: 1.2,
        }
    });

    // Animate video scale
    gsap.to("#scale-video", {
        scale: 1.3,
        transformOrigin: "center center",
        ease: "none",
        scrollTrigger: {
            trigger: "#video-zoom",
            start: "top 5%",
            end: "top -50%",
            scrub: 1.2,
        }
    });
</script>