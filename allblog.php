<?php include "include/config.php"; ?>

<?php
$current_page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$posts_per_page = 9;
$api_url = "https://sagartech.co.in/blogs/wp-json/custom/v1/posts?page=$current_page&per_page=$posts_per_page";

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
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blogs - Sagar Tech</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="Sagar Tech is one of the best web development and Digital Marketing company in Mumbai. We provide 360 degree marketing service. Grow your Business with Us.">

    <meta name="keywords"
        content="Website Designer and Web Developer in Mumbai, Best Website designer in Mumbai, 
Best Website Designer in India, Web Developer in Mumbai,  Wordpress Developer in Mumbai,  Magento Developer in Mumbai, 
Wordpress Woocommerce Website Developer in Mumbai, web Developer in Mumbai, Developer in Mumbai india, ISO consultants in Mumbai">

    <meta name="author" content="Ubaid saudagar">
    <meta name="designer" content="Ubaid Saudagar">
    <meta name="publisher" content="Ubaid Saudagar">
    <meta name="copyright" content="https://sagartech.co.in/">
    <meta name="distribution" content="Global">
    <meta name="document-classification" content=" Website Designer and website Developer in Mumbai, India">
    <meta name="document-type" content="Public">
    <meta name="robots" content="all">
    <meta name="Googlebot" content="Index, Follow">
    <meta name="rating" content="Safe for Kids">
    <meta name="language" content="english">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Web Development and Digital Marketing Agency in Mumbai - Sagar Tech">
    <meta property="og:description"
        content="Sagar Tech is one of the best web development and Digital Marketing company in Mumbai. We provide 360 degree marketing service. Grow your Business with Us.">
    <meta property="og:url" content="https://sagartech.co.in/allblog">
    <meta property="og:site_name" content="Sagar Tech - Technical Solution">
    <meta property="og:image" content="https://sagartech.co.in/images/sagartech1.png">
    <meta name="google-site-verification" content="EiGydxSCnJYDG7kwWzWMRW7-ciXvjatEdxGN_XGYtiY" />
    <link rel="canonical" href="https://sagartech.co.in/allblog">
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
    .whole {
        background-color: #f2f2f2;
    }

    .main {
        padding: 40px;
        display: grid;
        width: 100%;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        /* gap: 30px; */
        gap: 20px;
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

    .card-content-holder {
        position: relative;
        margin-top: -40px;
        background: white;
        margin-right: 25px;
        margin-left: 25px;
        box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
        padding: 15px;
    }

    .publisher-info {
        margin-bottom: 0px;
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

        .card {
            width: 100%;
            /* height: auto; */
            height: 350px !important;
            background: #fff;
            /* border-radius: 1.5rem; */
            /* padding: 1.2rem; */
            padding: 0px;
            overflow: hidden;
            position: relative;
            border: none;
        }
    }

    .card {
        width: 100%;
        /* height: auto; */
        height: 330px;
        background: #fff;
        /* border-radius: 1.5rem; */
        /* padding: 1.2rem; */
        padding: 0px;
        overflow: hidden;
        position: relative;
        border: none;
    }

    .card-img-holder {
        width: 100%;
        height: auto;
        position: relative;
    }

    .card-content-holder {
        position: relative;
        margin-top: -40px;
        background: white;
        margin-right: 15px;
        margin-left: 15px;
        box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
        padding: 15px;
    }

    .card-img-holder img {
        width: 100%;
        height: 11rem;
        max-height: 11rem;
        object-fit: cover;
        /* border-radius: 1.5rem; */
    }

    .blog-title {
        /* margin-top: 15px; */
        margin-bottom: 10px;
        color: #22215B;
        line-height: normal;
        /* font-size: 1.4rem; */
        font-size: 1.3rem;
        overflow: hidden;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
    }

    .description {
        color: #22215B80;
        /* font-size: 1rem; */
        font-size: 15px;
        overflow: hidden;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
        line-height: 20px;
    }

    .blog-time {
        font-size: .8rem;
        /* color: #22215B; */
        color: #FF0808;
    }

    .options {
        display: flex;
        align-items: center;
        justify-content: space-between;
        font-size: 1rem;
    }

    .options span {
        font-weight: 600;
        color: #22215B;
    }

    .btn {
        font-size: 1rem;
        border-radius: .5rem;
        font-weight: 400;
        background: #EEF7FE;
        color: #22215B;
        cursor: pointer;
    }

    #pagination {
        margin: 0;
        padding: 20px 0px;
        text-align: center
    }

    #pagination li {
        display: inline
    }

    a.nextBlog {
        font-size: 20px;
    }

    a.prevBlog {
        font-size: 20px;
    }

    #pagination li a {
        display: inline-block;
        text-decoration: none;
        padding: 5px 10px;
        color: #000
    }

    /* Active and Hoverable Pagination */
    #pagination li a {
        border-radius: 5px;
        -webkit-transition: background-color 0.3s;
        transition: background-color 0.3s
    }

    #pagination li a.active {
        background-color: #ff0808;
        color: #fff
    }

    #pagination li a:hover:not(.active) {
        background-color: #ddd;
    }
</style>

<body>

    <?php $page = 'blogs';
    include 'include/newHeader.php' ?>

    <section class="overview-block-ptb iq-over-black-20 jarallax iq-breadcrumb3 text-left iq-font-white"
        style="background-image: url('./images/blog.webp'); background-position: left; background-repeat: no-repeat; background-size: cover;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-12">
                    <!-- <div class="iq-mb-0">
                        <h2 class="iq-font-white iq-tw-6">Blog</h2>
                    </div> -->
                </div>
                <div class="col-lg-6 col-sm-12">
                    <nav aria-label="breadcrumb" class="text-right">
                        <!-- <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index"><i class="ion-android-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog</li>
                        </ol> -->
                    </nav>
                </div>
            </div>
        </div>
    </section>










    <!-- Main Section -->
    <section class="main">
        <?php foreach ($posts as $item) { ?>
            <div class="card">
                <div class="card-img-holder">
                    <a href="https://sagartech.co.in/blog/<?php echo $item['slug']; ?>">
                        <img src="<?php echo $item['featured_image'] ? $item['featured_image'] : 'https://developers.elementor.com/docs/assets/img/elementor-placeholder-image.png'; ?>"
                            alt="<?php echo $item['title'] ?>">
                    </a>
                </div>
                <div class="card-content-holder">
                    <a href="https://sagartech.co.in/blog/<?php echo $item['slug']; ?>">
                        <h3 class="blog-title"><?php echo $item['title'] ?></h3>
                    </a>
                    <p class="description">
                        <?php echo $item['excerpt'] ?>
                    </p>
                    <p class="publisher-info">Published By <a href="https://sagartech.co.in/"><span class="blog-time"> Sagar Tech</span></a> | On <span class="blog-time">
                            <?php echo date('F j, Y', strtotime($item['date'])); ?>
                        </span>
                    </p>
                    <!-- <div class="options">
                    <a href="https://sagartech.co.in/blog/<?php echo $item['slug']; ?>">
                        <span>Read Full Blog</span>
                    </a>
                </div> -->
                </div>
            </div>
        <?php } ?>
    </section>

    <ul id="pagination">
        <?php if ($current_page > 1) { ?>
            <li><a href="?page=<?php echo $current_page - 1; ?>" class="prevBlog">«</a></li>
        <?php } else { ?>
            <li><a class="disabled prevBlog">«</a></li>
        <?php } ?>

        <?php for ($i = 1; $i <= $total_pages; $i++) { ?>
            <li><a href="?page=<?php echo $i; ?>"
                    class="<?php echo $i == $current_page ? 'active' : ''; ?>"><?php echo $i; ?></a></li>
        <?php } ?>

        <?php if ($current_page < $total_pages) { ?>
            <li><a href="?page=<?php echo $current_page + 1; ?>" class="nextBlog">»</a></li>
        <?php } else { ?>
            <li><a class="disabled nextBlog">»</a></li>
        <?php } ?>
    </ul>

    <?php
    // include("include/faqaccordian.html");
    include("include/footer.php");
    ?>

</body>

</html>