<?php

$api_endpoint = 'https://sagartech.online/ansariafroz/wp-json/wp/v2/posts';
$id_to_fetch = $_GET['id'];

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
    $data = json_decode($response, true);

    // Filter the data based on the desired ID
    $filtered_data = array_filter($data, function ($item) use ($id_to_fetch) {
        return $item['id'] == $id_to_fetch;
    });

    // Print the filtered data
    // echo '<pre>';
    // print_r($filtered_data);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blogs - Sagar Tech</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sagar Tech is one of the best web development and Digital Marketing company in Mumbai. We provide 360 degree marketing service. Grow your Business with Us.">

    <meta name="keywords" content="Website Designer and Web Developer in Mumbai, Best Website designer in Mumbai, 
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
    <meta property="og:title" content="Web Development and Digital Marketing in Mumbai - Sagar Tech">
    <meta property="og:description" content="Sagar Tech is one of the best web development and Digital Marketing company in Mumbai. We provide 360 degree marketing service. Grow your Business with Us.">
    <meta property="og:url" content="https://sagartech.co.in/">
    <meta property="og:site_name" content="Sagartech - Technical Solution">
    <meta property="og:image" content="https://sagartech.co.in/images/bg/square_Logo_st.jpg">
    <meta name="google-site-verification" content="EiGydxSCnJYDG7kwWzWMRW7-ciXvjatEdxGN_XGYtiY" />
    <link rel="canonical" href="https://www.sagartech.co.in/">
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/logoonly.jpg" />
    <!-- bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- REVOLUTION STYLE SHEETS -->
    <link href="revolution/css/settings.css" rel="stylesheet" type="text/css">
    <!-- ADD-ONS CSS FILES -->
    <link href="revolution/css/revolution.addon.particles.css" rel="stylesheet" type="text/css">
    <!-- main style -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!-- responsive -->
    <link href="css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="css/newcssresponsive.css" rel="stylesheet" type="text/css" />
    <!-- custom -->
    <!--<link href="css/custom.css" rel="stylesheet" type="text/css" />-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
</head>
<style>
    .ba-section {
        padding: 100px;
    }

    .ba-section h1 {
        font-size: 50px;
        font-weight: 600;
    }

    .ba-section p {
        font-size: 18px;
        margin-top: 10px;
    }

    img {
        height: auto;
        width: 100%;
    }

    @media (max-width: 767px) {
        .ba-section {
            padding: 20px;
        }

        .ba-section h1 {
            font-size: 40px;
            font-weight: 600;
        }

        .ba-section p {
            font-size: 16px;
            margin-top: 10px;
        }

        img {
            height: auto;
            width: 100%;
        }
    }
</style>

<body>
    <?php $page = 'blogs';
    include 'include/trialh.php' ?>
    <!-- --------------------------- -->
    <section class="ba-section">
        <div style="padding-bottom: 50px;">
            <h1 style="padding-bottom: 10px;">
                <?php echo $filtered_data[0]['title']['rendered'] ?>
            </h1>
            <!-- Introduction -->
            <?php echo $filtered_data[0]['content']['rendered'] ?>
        </div>
        <hr>
        <div>
            <p style="font-size:18px; color: red;">
                <?php


                // Convert the numeric date to a string in the desired format
                $stringDate = date('F j, Y', strtotime($filtered_data[0]['date']));

                // Output the result
                echo $stringDate;
                ?>
            </p>
        </div>
    </section>
    <!-- --------------------------- -->
    <?php
    // include("include/faqaccordian.html");
    include("include/footer.php");
    ?>
</body>

</html>