<?php
header('Content-Type: application/xml');
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Expires: 0');
header('Pragma: no-cache');

// Base site URL
$site_url = 'https://sagartech.co.in';

// Static Pages
$static_pages = [
    'web-development-company-in-mumbai',
    'ecommerce-website-development-company-in-mumbai',
    'dynamic-website-development-company-in-mumbai',
    'static-website-development-company-in-mumbai',
    'blogging-website-development-in-mumbai',
    'web-hosting-services-in-mumbai',
    'domain-service-provider-in-mumbai',
    'website-maintainance-company-in-mumbai',
    'wordpress-developers-in-mumbai',
    'shopify-developers-in-mumbai',
    'digital-marketing-company-in-mumbai',
    'google-ads-services-in-mumbai',
    'seo-company-in-mumbai',
    'local-seo-services-in-mumbai',
    'social-media-marketing-agency-in-mumbai',
    'social-media-optimization-agency-in-mumbai',
    'graphic-design-services-in-mumbai',
    'brand-identity-design-in-mumbai',
    'logo-design-services-in-mumbai',
    'brochure-design-services-in-mumbai',
    'social-media-post-design-in-mumbai',
    'banner-design-services-in-mumbai',
    'bulk-sms-service-provider-in-mumbai',
    'bulk-whatsapp-message-sender-in-india',
    'mobile-app-development-company-in-mumbai',
    'our-products/siyahfy',
    'our-products/project-management-software-in-india',
    'our-products/bulk-whatsapp-api-marketing-software-in-india',
    'our-products/nfc-digital-business-cards-in-india',
    'portfolio/website',
    'portfolio/mobile',
    'portfolio/search-engine-optimization',
    'portfolio/logo',
    'portfolio/banner',
    'portfolio/brochure',
    'portfolio/social-media-post',
    'about',
    'contact',
    'career',
    'allblog',
    'our-clients',
    'nodejs-development-company-in-india',
    'reactjs-development-company-in-mumbai',
    'nextjs-development-services-in-india',
    'postgresql-database-services-in-mumbai',
    'mysql-database-services-in-mumbai',
    'bootstrap-development-services-mumbai',
    'tailwind-css-web-development-in-india',
    'html-service-in-mumbai',
    'css-service-in-mumbai',
    'javascript-development-services-in-mumbai',
    'mongodb-services-in-mumbai',
    'typescript-service-in-mumbai',
    'flutter-service-in-mumbai',
    'php-website-development-company-in-mumbai',
    'laravel-development-services-in-mumbai',
    'expressjs-services-in-mumbai',
    'firebase-services-in-mumbai',
    'remix-services-in-india',
    'expo-services-in-india',
    'react-native-development-in-mumbai',
    'cloudflare-service-in-india',
    'jwt-authentication-services-in-india',
    'our-portfolio',
    'portfolio/business-website',
    'portfolio/builders-website',
    'portfolio/catalogue-website',
    'portfolio/logistics-website',
    'portfolio/ecommerce-website',
    'portfolio/education-website',
    'portfolio/restaurants-website',
    'portfolio/trust-and-properties-website',
    'portfolio/travels-website',
    'portfolio/interior-designer',
    'portfolio/healthcare-website',
    'portfolio/human-resource',
    'company-profile/Sagar%20Tech%20Technical%20Solution%20Brochure.pdf',
    'allblog?page=1',
    'allblog?page=2',
    'allblog?page=3',
    'allblog?page=4',
    'allblog?page=5',
    'allblog?page=6',
    'allblog?page=7',
    'allblog?page=8',
    'allblog?page=9',
    'allblog?page=10',
    'allblog?page=11'
];

// API URLs
$blog_api_url = 'https://sagartech.co.in/blogs/wp-json/custom/v1/posts?page=1&per_page=1000';

// Fetch API data
$fetch = function ($url) {
    $response = @file_get_contents($url);
    return $response ? json_decode($response) : [];
};

$blog_data = $fetch($blog_api_url);
$blogs = isset($blog_data->posts) ? $blog_data->posts : [];

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc><?php echo $site_url ?></loc>
        <changefreq>monthly</changefreq>
        <priority>0.7</priority>
    </url>

    <?php foreach ($static_pages as $slug): ?>
        <url>
            <loc><?php echo rtrim($site_url . '/' . $slug, '/'); ?></loc>
            <changefreq>monthly</changefreq>
            <priority>0.7</priority>
        </url>
    <?php endforeach; ?>

    <?php foreach ($blogs as $post): ?>
        <url>
            <loc><?php echo $site_url . '/blog/' . $post->slug; ?></loc>
            <lastmod><?php echo date('c', strtotime($post->date)); ?></lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
    <?php endforeach; ?>

</urlset>