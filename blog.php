<?php include "include/config.php"; ?>

<?php

// $id = $_GET['id'];
$slug = $_GET['slug'];


// $api_endpoint = "https://sagartech.co.in/blogs/wp-json/wp/v2/posts/$id";
$api_endpoint = "https://sagartech.co.in/blogs/wp-json/wp/v2/posts?slug=$slug";

// Create cURL session
$ch = curl_init();

// Set cURL options
curl_setopt($ch, CURLOPT_URL, $api_endpoint);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// Execute cURL session and get the response
$response = curl_exec($ch);

// Check for cURL errors
if (curl_errno($ch)) {
    echo 'Curl error: ' . curl_error($ch);
    // Handle the error appropriately
} else {
    // Close cURL session
    curl_close($ch);

    // Decode the JSON response
    $res = json_decode($response, true);
    $data = $res[0];

    // print_r($data);

    // Filter the data based on the desired ID
    // $filtered_data = array_filter($data, function ($item) use ($id_to_fetch) {
    //     return $item['id'] == $id_to_fetch;
    // });

    // Print the filtered data
    // echo '<pre>';
    // print_r($filtered_data);
    // die;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $data['title']['rendered'] ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php echo htmlentities($data['excerpt']['rendered'], ENT_QUOTES, 'UTF-8'); ?>">

    <meta name="keywords"
        content="Website Designer and Web Developer in Mumbai, Best Website designer in Mumbai, 
    Best Website Designer in India, Web Developer in Mumbai,  Wordpress Developer in Mumbai,  Magento Developer in Mumbai, 
    Wordpress Woocommerce Website Developer in Mumbai, web Developer in Mumbai, Developer in Mumbai india, ISO consultants in Mumbai">

    <meta name="author" content="Ubaid saudagar">
    <meta name="designer" content="Ubaid Saudagar">
    <meta name="publisher" content="Ubaid Saudagar">
    <meta name="copyright" content="https://www.sagartech.co.in">
    <meta name="distribution" content="Global">
    <meta name="document-classification" content=" Website Designer and website Developer in Mumbai, India">
    <meta name="document-type" content="Public">
    <meta name="robots" content="all">
    <meta name="Googlebot" content="Index, Follow">
    <meta name="rating" content="Safe for Kids">
    <meta name="language" content="english">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo $data['title']['rendered']; ?>">
    <meta property="og:description"
        content="<?php echo htmlentities($data['excerpt']['rendered'], ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:url" content="https://sagartech.co.in/">
    <meta property="og:site_name" content="Sagar Tech - Technical Solution">
    <meta property="og:image" content="<?php echo $data['fimg_url']; ?>">
    <meta name="google-site-verification" content="EiGydxSCnJYDG7kwWzWMRW7-ciXvjatEdxGN_XGYtiY" />
    <link rel="canonical" href="https://www.sagartech.co.in/">
    <!-- Favicon -->
    <link rel="shortcut icon" href="/images/logoonly.jpg" />
    <!-- bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- REVOLUTION STYLE SHEETS -->
    <link href="/revolution/css/settings.css" rel="stylesheet" type="text/css">
    <!-- ADD-ONS CSS FILES -->
    <link href="/revolution/css/revolution.addon.particles.css" rel="stylesheet" type="text/css">
    <!-- main style -->
    <link href="/css/style.css" rel="stylesheet" type="text/css" />
    <!-- responsive -->
    <link href="/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="/css/newcssresponsive.css" rel="stylesheet" type="text/css" />
    <!-- custom -->
    <!--<link href="css/custom.css" rel="stylesheet" type="text/css" />-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="/css/index.css">
    <!-- <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=658ea35a76aed0001a37266d&product=inline-share-buttons&source=platform" async="async"></script> -->
</head>
<style>
    .wp-block-video video {
        width: 100%;
    }

    .main {
        padding: 40px 120px;
        display: flex;
        gap: 20px;
        background-color: #F4F4F4;
    }

    .ba-section {
        width: 80%;
        background-color: white;
        padding: 30px 40px;
        border-radius: 5px;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }

    .sidebar {
        padding: 20px;
        width: 30%;
        border-radius: 5px;
        background-color: white;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }

    .ba-section h1 {
        font-size: 30px;
        font-weight: 600;
    }

    .ba-section h2 {
        font-size: 22px;
        font-weight: 600;
    }

    .ba-section h3 {
        font-size: 18px;
        font-weight: 500;
    }

    .ba-section p {
        font-size: 15px;
        margin-top: 10px;
    }

    .ba-section a {
        color: red;
        font-weight: 600;
    }

    .ba-section img {
        height: auto;
        width: 100%;
    }

    .sidebar h2 {
        font-size: 17px;
        font-weight: 500;
        color: red;
    }

    .sidebarul li {
        font-size: 14px;
        margin-bottom: 5px;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        overflow: hidden;
        -webkit-line-clamp: 1;
        background-color: #f5f5f5;
        padding: 5px;
        border-radius: 5px;
    }

    .latestblog {
        background-color: #f4f4f4;
        border-radius: 10px;
        padding: 10px;
        overflow: hidden;
        margin-bottom: 10px;

    }

    .latestimgdiv {
        aspect-ratio: 4 / 2;
    }

    .latestblog img {
        height: 100%;
        width: 100%;
        object-fit: cover;
        margin-bottom: 5px;
        border-radius: 10px;
    }

    .latestblog .latesttitle {
        font-size: 14px;
        font-weight: 600;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        overflow: hidden;
        -webkit-line-clamp: 1;
    }

    .latestdate {
        font-size: 11px;
        color: red;
    }

    @media (max-width: 767px) {
        .main {
            padding: 15px;
            display: block;
            gap: 0px;
            background-color: #F4F4F4;
        }

        .ba-section {
            width: 100%;
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        }

        .ba-section h1 {
            font-size: 25px;
            font-weight: 600;
            line-height: normal;
        }

        .ba-section h2 {
            line-height: normal;
        }

        .ba-section h3 {
            line-height: normal;
        }

        .ba-section p {
            font-size: 14px;
            margin-top: 10px;
        }

        .ba-section img {
            height: auto;
            width: 100%;
        }

        .sidebar {
            margin-top: 20px;
            padding: 15px;
            width: 100%;
            border-radius: 5px;
            background-color: white;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        }

    }
</style>

<body>
    <?php $page = 'blogs';
    include 'include/newHeader.php' ?>
    <!-- --------------------------- -->
    <div class="main">
        <section class="ba-section">
            <ol class="breadcrumb" style="background-color: #F4F4F4; padding: 10px;">
                <li class="breadcrumb-item"><a href="https://sagartech.co.in/">Home</a></li>
                <li class="breadcrumb-item"><a href="https://sagartech.co.in/allblog">Blogs</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $data['title']['rendered'] ?></li>
            </ol>
            <div style="padding-bottom: 50px;">
                <h1 style="font-size: 25px; line-height:normal;">
                    <?php echo $data['title']['rendered'] ?>
                </h1>
                <span style="font-size: 13px; color: gray;">
                    Last updated on
                    <?php
                    // Convert the numeric date to a string in the desired format
                    $stringDate = date('F j, Y', strtotime($data['modified']));

                    // Output the result
                    echo $stringDate;
                    ?>
                    <!-- <div class="shareimg" style="padding: 10px 0px;">
                        <div class="sharethis-inline-share-buttons"></div>
                    </div> -->
                    <br>
                    <?php
                    $surl = 'https://sagartech.co.in/blog-article/what-is-digital-marketing/510';
                    $stitle = $data['title']['rendered'];

                    $platforms = [
                        'Facebook' => [
                            'share_url' => 'https://www.facebook.com/sharer/sharer.php?u=',
                            'image_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/facebook/facebook-original.svg', // Replace with the actual image URL
                        ],
                        'Twitter' => [
                            'share_url' => 'https://www.twitter.com/intent/tweet?url=',
                            'image_url' => 'https://about.twitter.com/content/dam/about-twitter/x/brand-toolkit/logo-black.png.twimg.1920.png', // Replace with the actual image URL
                        ],
                        'WhatsApp' => [
                            'share_url' => 'https://api.whatsapp.com/send?text=',
                            'image_url' => 'https://static-00.iconduck.com/assets.00/whatsapp-icon-2048x2048-wo3g2qq0.png', // Replace with the actual image URL
                        ],
                        'LinkedIn' => [
                            'share_url' => 'https://www.linkedin.com/shareArticle?url=',
                            'image_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/linkedin/linkedin-original.svg', // Replace with the actual image URL
                        ],
                        'Pinterest' => [
                            'share_url' => 'https://www.pinterest.com/pin/create/button/?url=',
                            'image_url' => 'https://cdn-icons-png.flaticon.com/512/174/174863.png', // Replace with the actual image URL
                        ],
                    ];
                    // echo '<span>Share on :</span>&nbsp;';
                    

                    foreach ($platforms as $name => $platform) {
                        $shareurl = $platform['share_url'] . urlencode($surl) . '&title=' . urlencode($stitle);
                        $escapedTitle = htmlspecialchars($stitle, ENT_QUOTES, 'UTF-8');

                        // echo "<a href=\"$shareurl\" target=\"_blank\" title=\"$escapedTitle\">";
                        // echo "<img src=\"{$platform['image_url']}\" alt=\"$name Image\" style=\"height: 30px; width: 30px; padding:5px\">";
                        // echo "</a>";
                    }
                    ?>
                </span>

                <img src="<?php echo $item['fimg_data']['url'] ? $item['fimg_data']['url'] : 'https://developers.elementor.com/docs/assets/img/elementor-placeholder-image.png'; ?>"
                    alt="<?php echo $item['fimg_data']['alt'] ? $item['fimg_data']['alt'] : 'Blog Featured Image'; ?>">

                <!-- Introduction -->
                <?php echo $data['content']['rendered'] ?>
                <!-- <div style="padding: 10px 0px;">
                    <div class="sharethis-inline-share-buttons"></div>
                </div> -->
            </div>
            <hr>
            <div class="data">
                <p style="font-size:15px; color: red;">
                    <?php
                    // Convert the numeric date to a string in the desired format
                    $stringDate = date('F j, Y', strtotime($data['date']));

                    // Output the result
                    echo $stringDate;
                    ?>
                </p>
            </div>
        </section>
        <section class="sidebar">
            <?php

            // API endpoint URL
            $api_url = 'https://sagartech.co.in/blogs/wp-json/wp/v2/posts';

            // Number of posts to fetch
            $number_of_posts = 3;

            // Initialize cURL session
            $ch = curl_init($api_url);

            // Set cURL options
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Return the response as a string instead of echoing it
            
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
                // Decode the JSON response if the API returns JSON
                $data = json_decode($response, true);

                // Limit the data to 4 objects
                $limited_data = array_slice($data, 0, $number_of_posts);

                // Process the limited data as needed
                // echo '<pre>';
                // print_r($limited_data);
            } else {
                echo 'No response from the API';
            }
            ?>


            <h2>Latest Posts</h2>
            <ul class="sidebarul">
                <?php foreach ($limited_data as $item) {
                    ?>
                    <a href="https://sagartech.co.in/blog/<?php echo $item['slug']; ?>">
                        <div class="latestblog">
                            <div class="latestimgdiv">
                                <img src="<?php echo $item['fimg_data']['url'] ? $item['fimg_data']['url'] : 'https://developers.elementor.com/docs/assets/img/elementor-placeholder-image.png'; ?>"
                                    alt="<?php echo $item['fimg_data']['alt'] ? $item['fimg_data']['alt'] : 'Blog Featured Image'; ?>">
                            </div>
                            <!-- <img src="https://sagartech.co.in/blogs/wp-content/uploads/2023/12/Digital-Marketing-1.png" alt=""> -->
                            <span class="latesttitle"><?php echo $item['title']['rendered'] ?></span>
                            <span class="latestdate">
                                <?php
                                // Convert the numeric date to a string in the desired format
                                $stringDate = date('F j, Y', strtotime($item['date']));

                                // Output the result
                                echo $stringDate;
                                ?>
                            </span>
                        </div>
                    </a>

                <?php } ?>


            </ul>
        </section>
    </div>
    <!-- --------------------------- -->
    <?php
    // include("include/faqaccordian.html");
    include ("include/footer.php");
    ?>
</body>

</html>