<style>
    .our-client-main-div {
        padding: 50px 100px;
        text-align: center;
    }

    .our-client-main-div h1 {
        font-size: 40px;
        font-weight: 700;
        color: #2b2a2a;
        text-transform: uppercase;
    }

    .client-image-main-div {
        padding: 30px 0px;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr;
        gap: 20px;
    }

    .client-image-main-div .image-div {
        aspect-ratio: 4/4;
        padding: 5px;
        /* border-radius: 10px; */
        overflow: hidden;
        box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
    }

    .client-image-main-div .image-div img {
        height: 100%;
        width: 100%;
        object-fit: contain;
    }

    @media only screen and (min-width: 768px) and (max-width: 1024px) {
        .our-client-main-div {
            padding: 50px;
            text-align: center;
        }

        .our-client-main-div h1 {
            font-size: 40px;
            font-weight: 700;
        }

        .client-image-main-div {
            padding: 30px 0px;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
            gap: 20px;
        }

        .client-image-main-div .image-div {
            aspect-ratio: 4/4;
            /* border-radius: 10px; */
            overflow: hidden;
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        }

        .client-image-main-div .image-div img {
            height: 100%;
            width: 100%;
            object-fit: contain;
        }
    }

    @media only screen and (max-width: 767px) {
        .our-client-main-div {
            padding: 20px;
            text-align: center;
        }

        .our-client-main-div h1 {
            font-size: 40px;
            font-weight: 700;
        }

        .client-image-main-div {
            padding: 20px 0px;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 10px;
        }

        .client-image-main-div .image-div {
            aspect-ratio: 4/4;
            /* border-radius: 10px; */
            overflow: hidden;
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        }

        .client-image-main-div .image-div img {
            height: 100%;
            width: 100%;
            object-fit: contain;
        }
    }

    /* CSS */
    .button-62 {
        background: linear-gradient(to bottom right, #FF0808, #fc6262);
        border: 0;
        border-radius: 12px;

        color: #FFFFFF;
        cursor: pointer;
        display: inline-block;
        font-family: -apple-system, system-ui, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
        font-size: 16px;
        font-weight: 500;
        line-height: 2.5;
        outline: transparent;
        padding: 5px 30px;
        text-align: center;
        text-decoration: none;
        transition: box-shadow .2s ease-in-out;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        white-space: nowrap;
    }

    .button-62:not([disabled]):focus {
        box-shadow: 0 0 .25rem rgba(0, 0, 0, 0.5), -.125rem -.125rem 1rem rgba(239, 71, 101, 0.5), .125rem .125rem 1rem rgba(255, 154, 90, 0.5);
    }

    .button-62:not([disabled]):hover {
        box-shadow: 0 0 .25rem rgba(0, 0, 0, 0.5), -.125rem -.125rem 1rem rgba(239, 71, 101, 0.5), .125rem .125rem 1rem rgba(255, 154, 90, 0.5);
        color: white;
    }

    @media (max-width: 767px) {
        .our-client-main-div h1 {
            font-size: 30px !important;

        }
    }
</style>
<div class="our-client-main-div">
    <h2>Leading Brands <span style="color: #ff0808">We Serve</span></h2>
    <div class="client-image-main-div">
        <?php
        $imageUrls = [
            "client-logos/Thaiger.png",
            "client-logos/educ4ate.webp",
            "client-logos/dontquit.png",
            "client-logos/verify8-1.png",
            "client-logos/syrocs logo.webp",
            "client-logos/axxio-laboratory.webp",
            "client-logos/yovant_recruitment_logo.webp",
            "client-logos/varela-american logo.webp",
            "client-logos/processindia.webp",
            "client-logos/saudiwells.png",
            "client-logos/BARKAT AL DUHA logo.webp",
            "client-logos/alsalama.png",
        ];

        foreach ($imageUrls as $imageUrl) {
            echo '<div class="image-div">';
            echo '<img src="' . $imageUrl . '" alt="Client Logo">';
            echo '</div>';
        }
        ?>
    </div>
    <div>
        <!-- HTML !-->
        <a href="our-clients" class="button-62" role="button">View All</a>


    </div>
</div>