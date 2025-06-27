<!-- Section to Pin -->
<section id="pinned-text-section-last" class="py-20 bg-white">
    <p id="reveal-text-last" class="text-3xl leading-relaxed max-w-5xl text-gray-900 mx-auto px-4">
        Our specialisation as a web design agency and our web designers in Mumbai is building stunning, functional websites that boost your internet presence. As a leading web design company, we apply modern technologies like Node.js, WordPress, Next.js, React.js, and Shopify. Our skilled group of web designers in Mumbai produces exceptional results that are specific to your business's goals. Let's work together to develop a website that is focused on growth. Get in touch with us immediately!
    </p>
</section>

<script>
    // Split by words and chars (characters nested in words)
    const splitTextLast = new SplitType("#reveal-text-last", {
        types: "words, chars"
    });

    // Ensure full words stay together (avoid word breaking)
    splitTextLast.words.forEach(word => {
        word.style.display = "inline-block";
        word.style.whiteSpace = "nowrap";
    });

    // Animate each character with blur + opacity
    gsap.fromTo(
        splitTextLast.chars, {
            opacity: 0.3,
            // y: 20,
            filter: "blur(4px)"
        }, {
            opacity: 1,
            y: 0,
            filter: "blur(0px)",
            stagger: 0.02,
            ease: "power4.out",
            scrollTrigger: {
                trigger: "#pinned-text-section-last",
                start: "top 80%",
                end: "top 5%",
                // end: "+=2000",
                scrub: 1.2,
                // pin: true,
                anticipatePin: 1,
            }
        }
    );
</script>