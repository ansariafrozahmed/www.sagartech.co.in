<style>
    @import url("https://fonts.googleapis.com/css?family=Montserrat:400,400i,700");

    .circle-container {
        display: flex;
        justify-content: center;
    }

    .circle-container .outer-circle {
        width: 250px;
        height: 250px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
    }

    .circle-container .outer-circle .inner-circle {
        width: 150px;
        height: 150px;
        box-sizing: content-box;
        border: 50px solid #ff1a1a;
        transform: rotate(45deg);
        border-radius: 50%;
    }

    .circle-container .outer-circle .inner-circle .inner-circle-content {
        background: #ffffff;
        border: 5px solid #ffffff;
        box-sizing: border-box;
        border-radius: 50%;
        width: 100%;
        height: 100%;
        transform: rotate(-45deg);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        box-shadow: inset 0px 0px 25px rgba(0, 0, 0, 0.3);
    }

    .circle-container .outer-circle .inner-circle .inner-circle-content span {
        font-size: 16px;
        font-weight: 600;
        text-align: center;
        padding: 5px 10px;
        /* text-transform: uppercase; */
    }

    .circle-container .outer-circle .inner-circle .inner-circle-content svg {
        margin-top: 15px;
    }



    .circle-container .outer-circle:not(:first-child) {
        margin-left: -49px;
    }

    .circle-container .outer-circle:nth-child(odd) .inner-circle {
        border-top-color: transparent;
        border-left-color: transparent;
    }

    .circle-container .outer-circle:nth-child(even) {
        margin-top: 1px;
    }

    .circle-container .outer-circle:nth-child(even) .inner-circle {
        border-bottom-color: transparent;
        border-right-color: transparent;
    }

    .circle-container .outer-circle:first-child .inner-circle {
        border-left-color: #ff1a1a;
    }

    .inner-circle-content img {
        height: 35px;
        width: 35px;
    }

    @media (max-width: 1100px) {
        .circle-container {
            flex-direction: column;
            align-items: center;
        }

        .circle-container .outer-circle .inner-circle {
            transform: rotate(135deg);
        }

        .circle-container .outer-circle .inner-circle .inner-circle-content {
            transform: rotate(225deg);
        }

        .circle-container .outer-circle:not(:first-child) {
            margin-left: 0px;
            margin-top: -49px;
        }
    }
</style>
<div class="circle-container">
    <div class="outer-circle">
        <div class="inner-circle">
            <div class="inner-circle-content">
                <span>Analysis</span>
                <img src="./icons/analysis.webp" alt="">
            </div>
        </div>
    </div>

    <div class="outer-circle">
        <div class="inner-circle">
            <div class="inner-circle-content">
                <span>Design & Planning</span>
                <img src="./icons/sketch.webp" alt="">
            </div>
        </div>
    </div>

    <div class="outer-circle">
        <div class="inner-circle">
            <div class="inner-circle-content">
                <span>Development</span>
                <img src="./icons/coding.webp" alt="">
            </div>
        </div>
    </div>

    <div class="outer-circle">
        <div class="inner-circle">
            <div class="inner-circle-content">
                <span>Testing & Deployment</span>
                <img src="./icons/test.webp" alt="">
            </div>
        </div>
    </div>


    <div class="outer-circle">
        <div class="inner-circle">
            <div class="inner-circle-content">
                <span>Maintenance</span>
                <img src="./icons/maintenance.webp" alt="">
            </div>
        </div>
    </div>
</div>