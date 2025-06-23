<?php
$api_url = "https://sagartech.co.in/blogs/wp-json/custom/v1/posts?page=1&per_page=3";

// Initialize cURL session for posts
$ch = curl_init($api_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute cURL session and store the response
$response = curl_exec($ch);

// Check for cURL errors
if (curl_errno($ch)) {
    echo 'Curl error: ' . curl_error($ch);
}

// Close cURL session
curl_close($ch);

// Process the response
if ($response) {
    $data = json_decode($response, true);
    $posts = $data['posts'];
    $total_pages = $data['total_pages'];
} else {
    echo 'No response from the API';
    $posts = [];
    $total_pages = 0;
}
?>
<div class="max-w-[1500px] space-y-8 lg:space-y-10 mx-auto px-5 py-10 md:px-10 md:py-12 lg:px-32 lg:py-24">
    <div>
        <h2
            class="md:text-5xl mb-6 text-[28px] text-center text-[#242424] lg:text-[36px] leading-[1.2] lg:leading-[1.15] font-[400]">
            Blogs And Articles</h2>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <?php foreach ($posts as $post) { ?>
            <div class="space-y-3">
                <a href="https://sagartech.co.in/blog/<?php echo $post['slug']; ?>"
                    class="block group aspect-[4/2.4] lg:aspect-[4/2.8] overflow-hidden border">
                    <img class="h-full group-hover:scale-105 transition-all ease-in-out duration-200 w-full object-cover"
                        src="<?php echo $post['featured_image'] ? $post['featured_image'] : 'https://developers.elementor.com/docs/assets/img/elementor-placeholder-image.png'; ?>"
                        alt="">
                </a>
                <div class="space-y-2">
                    <p class="text-[13px] text-[#656565] flex items-center gap-2 tracking-wide font-light"><svg
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-calendar-days-icon lucide-calendar-days">
                            <path d="M8 2v4" />
                            <path d="M16 2v4" />
                            <rect width="18" height="18" x="3" y="4" rx="2" />
                            <path d="M3 10h18" />
                            <path d="M8 14h.01" />
                            <path d="M12 14h.01" />
                            <path d="M16 14h.01" />
                            <path d="M8 18h.01" />
                            <path d="M12 18h.01" />
                            <path d="M16 18h.01" />
                        </svg> <span class="mt-1">
                            <?php echo date('F j, Y', strtotime($post['date'])); ?>
                        </span>
                    </p>
                    <a href="https://sagartech.co.in/blog/<?php echo $post['slug']; ?>" class="block">
                        <h3 class="font-light leading-snug text-[#242424] text-[16px] ">
                            <?php echo $post['title'] ?>
                        </h3>
                    </a>
                    <p class="text-[#767676] text-[13px] font-light">
                        <?php echo $post['excerpt'] ?>
                    </p>
                    <a href="https://sagartech.co.in/blog/<?php echo $post['slug']; ?>"
                        class="block text-[13px] text-[#ff0808] font-light hover:underline underline-offset-4">Read more</a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>