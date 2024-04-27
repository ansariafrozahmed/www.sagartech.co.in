<?php

// API endpoint URL
$api_url = 'https://sagartech.co.in/blogs/wp-json/wp/v2/posts';

// Number of posts to fetch
$number_of_posts = 4;

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


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<style>
    .whole {
        background-color: #f2f2f2;
    }

    .main {
        padding: 40px;
        display: grid;
        width: 100%;
        grid-template-columns: repeat(4, minmax(0, 1fr));
        gap: 30px;
    }

    .blogcard {
        /* border: 1px solid gray; */
        border-radius: 10px;
        overflow: hidden;
        /* box-shadow: 2px 2px 2px gray; */
        /* box-shadow: rgba(255, 255, 255, 0.1) 0px 1px 1px 0px inset, rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px; */
        box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
    }

    .blogimg {
        height: 180px;
        overflow: hidden;
    }

    .blogimg img {
        height: 100%;
        width: 100%;
        object-fit: cover;
        transition: 0.5s;
    }

    .blogimg img:hover {
        transform: scale(1.05);
        /* transform: rotate(20deg); */
    }

    .blogcardtext {
        padding: 5px 15px;
    }

    .blogcardtext h5 {
        font-size: 18px;
        margin-top: 5px;
        line-height: 25px;
        font-weight: 600;
        overflow: hidden;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
        margin-bottom: 10px;
    }

    .blogcardtext p {
        line-height: 22px;
        overflow: hidden;
        line-height: 20px;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 4;
    }

    .readmore {
        color: red;
        font-weight: 600;
    }

    .blogdate {
        padding: 0 15px;
        padding-top: 5px;
        border-top: 1px solid #e0e0d1;
    }

    .heading {
        padding: 0 40px;
        padding-top: 40px;
    }

    .heading h2 {
        font-size: 40px;
        font-weight: 700;
    }

    @media (max-width: 767px) {
        .heading {
            padding: 0 25px;
            padding-top: 25px;
        }

        .heading h2 {
            font-size: 40px;
            font-weight: 700;
        }

        .main {
            padding: 25px;
            display: grid;
            width: 100%;
            grid-template-columns: repeat(1, minmax(0, 1fr));
            gap: 25px;
        }

        .blogcard {
            /* border: 1px solid gray; */
            /* border-radius: 10px; */
            overflow: hidden;
            /* box-shadow: 2px 2px 2px gray; */
        }

        .blogimg {
            height: 170px;
        }

        .blogimg img {
            height: 100%;
            width: 100%;
            object-fit: cover;
        }

        .blogcardtext {
            padding: 15px;
        }

        .blogcardtext h5 {
            font-size: 20px;
            margin-top: 5px;
            line-height: 25px;
            font-weight: 600;
            overflow: hidden;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 1;
            margin-bottom: 10px;
        }

        .blogcardtext p {
            line-height: 22px;
            overflow: hidden;
            line-height: 20px;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 3;
        }

        .readmore {
            color: red;
            font-weight: 600;
        }
    }
</style>

<body>
    <div class="heading">
        <h2>Our Blogs</h2>
    </div>
    <section class="main">
        <?php foreach ($limited_data as $item) {
        ?>
            <div class="blogcard">
                <a href="https://sagartech.co.in/blog/<?php echo $item['slug']; ?>">
                    <div class="blogimg">
                        <img src="<?php echo $item['fimg_url'] ? $item['fimg_url'] : 'https://developers.elementor.com/docs/assets/img/elementor-placeholder-image.png'; ?>" alt="">
                    </div>
                </a>
                <div class=" blogcardtext">
                    <a href="https://sagartech.co.in/blog/<?php echo $item['slug']; ?>">
                        <h5>
                            <?php echo $item['title']['rendered'] ?>
                        </h5>
                        <!-- <p> -->
                        <?php echo $item['excerpt']['rendered'] ?>
                        <!-- </p> -->
                    </a>
                    <a href="https://sagartech.co.in/blog/<?php echo $item['slug']; ?>">
                        <span class="readmore">Read more....</span>
                    </a>
                </div>
                <div class="blogdate">
                    <p>
                        <?php

                        // Convert the numeric date to a string in the desired format
                        $stringDate = date('F j, Y', strtotime($item['date']));

                        // Output the result
                        echo $stringDate;
                        ?>
                    </p>
                </div>
            </div>
        <?php } ?>
    </section>
</body>

</html>