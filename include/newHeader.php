<?php
include('config.php');
?>

<style>
  @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");

  .container {
    max-width: 1200px;
    margin: auto;
  }

  .interlink {
    color: #FF0808;
    font-weight: 600;
  }

  .row {
    display: flex;
    flex-wrap: wrap;
  }

  .v-center {
    align-items: center;
  }

  ul {
    list-style: none;
    margin: 0;
    padding: 0;
  }

  a {
    text-decoration: none;
  }

  /* header */
  .header {
    display: block;
    width: 100%;
    position: sticky;
    top: 0px;
    z-index: 99;
    background: #fff;
    padding: 15px;
    /* box-shadow: rgba(0, 0, 0, 0.1) 0px 5px 15px; */
  }

  .header .item-left {
    flex: 0 0 17%;
  }

  .header .logo img {
    height: 40px;
  }

  .header .item-center {
    flex: 0 0 66%;
  }

  .header .item-right {
    flex: 0 0 17%;
    display: flex;
    justify-content: flex-end;
  }

  .header .item-right a {
    text-decoration: none;
    font-size: 16px;
    color: #555555;
    display: inline-block;
    margin-left: 10px;
    transition: color 0.3s ease;
  }

  .header .menu>ul>li {
    display: inline-block;
    line-height: 50px;
    margin-left: 25px;
  }

  .header .menu>ul>li>a {
    font-size: 15px;
    font-weight: 500;
    color: #000000;
    position: relative;
    text-transform: capitalize;
    transition: color 0.3s ease;
  }

  .header .menu>ul>li .sub-menu {
    position: absolute;
    z-index: 500;
    background-color: #ffffff;
    box-shadow: -2px 2px 70px -25px rgba(0, 0, 0, 0.3);
    padding: 15px 20px;
    border-radius: 10px;
    transition: all 0.5s ease;
    margin-top: 25px;
    opacity: 0;
    visibility: hidden;
  }

  @media (min-width: 992px) {
    .header .menu>ul>li.menu-item-has-children:hover .sub-menu {
      margin-top: 0;
      visibility: visible;
      opacity: 1;
    }

    .row.v-center {
      row-gap: 0px !important;
    }
  }

  .header .menu>ul>li .sub-menu>ul>li {
    font-weight: 600;
    line-height: 1.5;
  }

  .header .menu>ul>li .sub-menu>ul>li>a {
    display: inline-block;
    padding: 10px 0;
    font-size: 15px;
    color: #555555;
    transition: color 0.3s ease;
    text-decoration: none;
    text-transform: capitalize;
  }

  .header .menu>ul>li .single-column-menu {
    min-width: 280px;
    max-width: 350px;
  }

  .header .menu>ul>li .sub-menu.mega-menu>.list-item>ul>li {
    line-height: 0;
    display: block;
    /* background-color: rgb(237, 237, 237); */
    margin: 5px 0px;
    padding: 2px 10px;
    border-radius: 10px;
  }

  .header .menu>ul>li .sub-menu.mega-menu>.list-item>ul>li:hover {
    background-color: rgb(243, 243, 243);
    margin: 5px 0px;
    padding: 2px 10px;
    border-radius: 10px;
  }

  .header .menu>ul>li .sub-menu.mega-menu>.list-item>ul>li>a {
    padding: 10px 0;
    display: inline-block;
    font-size: 15px;
    color: #555555;
    transition: color 0.3s ease;
  }

  .header .menu>ul>li .sub-menu.mega-menu {
    left: 50%;
    transform: translateX(-50%);
  }

  .header .menu>ul>li .sub-menu.mega-menu-column-4 {
    max-width: 1200px;
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    padding: 20px 15px;
    border-radius: 5px;
  }

  .header .menu>ul>li .sub-menu.mega-menu-column-4>.list-item {
    flex: 0 0 25%;
    padding: 0 15px;
  }

  .header .menu>ul>li .sub-menu.mega-menu-column-4>.list-item a {
    font-size: 18px;
    color: #ff0808;
    font-weight: 600;
    line-height: 1;
    padding: 10px 0;
  }

  .header .menu>ul>li .sub-menu.mega-menu-column-4>.list-item.text-center .titlee {
    text-align: center;
  }

  .header .menu>ul>li .sub-menu.mega-menu-column-4>.list-item img {
    max-width: 100%;
    width: 100%;
    vertical-align: middle;
    margin-top: 10px;
  }

  .header .menu>ul>li .sub-menu.mega-menu>.list-item>ul>li>a:hover,
  .header .menu>ul>li .sub-menu>ul>li>a:hover,
  .header .item-right a:hover,
  .header .menu>ul>li:hover>a {
    color: #ea4636;
  }

  /* banner section */
  .banner-section {
    background-image: url("../img/banner.jpg");
    background-size: cover;
    background-position: center;
    height: 700px;
    width: 100%;
    display: block;
  }

  .mobile-menu-head,
  .mobile-menu-trigger {
    display: none;
  }

  /*responsive*/
  @media (max-width: 991px) {
    .header .item-center {
      order: 3;
      flex: 0 0 100%;
    }

    .row.v-center {
      row-gap: 0px !important;
    }

    .header .item-left,
    .header .item-right {
      flex: 0 0 auto;
    }

    .v-center {
      justify-content: space-between;
    }

    .header .mobile-menu-trigger {
      display: flex;
      height: 30px;
      width: 30px;
      margin-left: 15px;
      cursor: pointer;
      align-items: center;
      justify-content: center;
    }

    .header .mobile-menu-trigger span {
      display: block;
      height: 2px;
      background-color: #333333;
      width: 24px;
      position: relative;
    }

    .header .mobile-menu-trigger span:before,
    .header .mobile-menu-trigger span:after {
      content: "";
      position: absolute;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: #333333;
    }

    .header .mobile-menu-trigger span:before {
      top: -6px;
    }

    .header .mobile-menu-trigger span:after {
      top: 6px;
    }

    .header .item-right {
      align-items: center;
    }

    .header .menu {
      position: fixed;
      width: 320px;
      background-color: #ffffff;
      left: 0;
      top: 0;
      height: 100%;
      overflow: hidden;
      transform: translate(-100%);
      transition: all 0.5s ease;
      z-index: 1099;
    }

    .header .menu.active {
      transform: translate(0%);
    }

    .header .menu>ul>li {
      line-height: 1;
      margin: 0;
      display: block;
    }

    .header .menu>ul>li>a {
      line-height: 50px;
      height: 50px;
      padding: 0 50px 0 15px;
      display: block;
      border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    }

    .header .menu>ul>li>a i {
      position: absolute;
      height: 50px;
      width: 50px;
      top: 0;
      right: 0;
      text-align: center;
      line-height: 50px;
      transform: rotate(-90deg);
    }

    .header .menu .mobile-menu-head {
      display: flex;
      height: 50px;
      border-bottom: 1px solid rgba(0, 0, 0, 0.1);
      justify-content: space-between;
      align-items: center;
      position: relative;
      z-index: 501;
      position: sticky;
      background-color: #ffffff;
      top: 0;
    }

    .header .menu .mobile-menu-head .go-back {
      height: 50px;
      width: 50px;
      border-right: 1px solid rgba(0, 0, 0, 0.1);
      cursor: pointer;
      line-height: 50px;
      text-align: center;
      color: #000000;
      font-size: 16px;
      display: none;
    }

    .header .menu .mobile-menu-head.active .go-back {
      display: block;
    }

    .header .menu .mobile-menu-head .current-menu-title {
      font-size: 15px;
      font-weight: 500;
      color: #000000;
    }

    .header .menu .mobile-menu-head .mobile-menu-close {
      height: 50px;
      width: 50px;
      border-left: 1px solid rgba(0, 0, 0, 0.1);
      cursor: pointer;
      line-height: 50px;
      text-align: center;
      color: #000000;
      font-size: 25px;
    }

    .header .menu .menu-main {
      height: 100%;
      overflow-x: hidden;
      overflow-y: auto;
    }

    .header .menu>ul>li .sub-menu.mega-menu,
    .header .menu>ul>li .sub-menu {
      visibility: visible;
      opacity: 1;
      position: absolute;
      box-shadow: none;
      margin: 0;
      padding: 15px;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      padding-top: 65px;
      max-width: none;
      min-width: auto;
      display: none;
      transform: translateX(0%);
      overflow-y: auto;
    }

    .header .menu>ul>li .sub-menu.active {
      display: block;
    }

    @keyframes slideLeft {
      0% {
        opacity: 0;
        transform: translateX(100%);
      }

      100% {
        opacity: 1;
        transform: translateX(0%);
      }
    }

    @keyframes slideRight {
      0% {
        opacity: 1;
        transform: translateX(0%);
      }

      100% {
        opacity: 0;
        transform: translateX(100%);
      }
    }

    .header .menu>ul>li .sub-menu.mega-menu-column-4>.list-item img {
      margin-top: 0;
    }

    .header .menu>ul>li .sub-menu.mega-menu-column-4>.list-item.text-center .titlee {
      margin-bottom: 20px;
    }

    .header .menu>ul>li .sub-menu.mega-menu-column-4>.list-item.text-center:last-child .titlee {
      margin-bottom: 0px;
    }

    .header .menu>ul>li .sub-menu.mega-menu-column-4>.list-item {
      flex: 0 0 100%;
      padding: 0px;
    }

    .header .menu>ul>li .sub-menu>ul>li>a,
    .header .menu>ul>li .sub-menu.mega-menu>.list-item>ul>li>a {
      display: block;
    }

    .header .menu>ul>li .sub-menu.mega-menu>.list-item>ul {
      margin-bottom: 15px;
    }

    .menu-overlay {
      position: fixed;
      background-color: rgba(0, 0, 0, 0.5);
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      z-index: 1098;
      visibility: hidden;
      opacity: 0;
      transition: all 0.5s ease;
    }

    .menu-overlay.active {
      visibility: visible;
      opacity: 1;
    }
  }

  .quote-button {
    background-color: #ff0808;
    padding: 8px 15px;
    border-radius: 5px;
    border: none;
    color: #fff;
    font-size: 14px;
    font-weight: 500;
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2),
      0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }

  @media (max-width: 767px) {
    header {
      position: relative;
      background: #fff;
    }

    .logo img {
      height: 30px;
    }

    .row.v-center {
      row-gap: 0px !important;
    }
  }

  .titlee {
    display: flex;
    align-items: center;
    justify-content: start;
    gap: 10px;
    /* margin-bottom: 5px; */
    padding: 2px 10px;
  }

  .titlee:hover {
    border-radius: 15px;
    background-color: rgb(243, 243, 243);
  }

  .titlee img {
    width: 10px;
  }

  .multi-level-dropdown {
    display: none;
    position: absolute;
    margin-left: 10px;
    background: white;
    padding: 20px;
    width: 300px;
    border-radius: 10px;
    z-index: 100;
    top: 80%;
    left: 70%;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
  }

  .multi-level-dropdown ul li {
    padding: 5px 0px;
    font-size: 15px;
  }

  .multi-level-dropdown ul li a:hover {
    color: #ff0808;
  }

  .portfolio-dropdown:hover .multi-level-dropdown,
  .multi-level-dropdown:hover {
    display: block;
  }

  @media (max-width: 991px) {
    .multi-level-dropdown {
      display: none;
      position: relative;
      margin: 0px;
      background: white;
      padding: 0px;
      width: 100%;
      border-radius: 10px;
      z-index: 100;
      top: 0;
      left: 0;
      box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }

    .multi-level-dropdown ul {
      padding: 15px;
    }

    .multi-level-dropdown ul li {
      /* padding:10px; */
      font-size: 15px;
    }

    .multi-level-dropdown ul li a:hover {
      color: #ff0808;
    }

    .portfolio-dropdown:hover .multi-level-dropdown,
    .multi-level-dropdown:hover {
      display: block;
    }

    .row.v-center {
      row-gap: 0px !important;
    }
  }

  .dkuywW {
    position: relative;
    width: 64px;
    margin: auto;
    display: none;
  }

  .headerAnnouncement {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 8px 50px;
    color: white;
    background: radial-gradient(circle, rgba(255, 8, 8, 1) 0%, rgba(79, 3, 11, 1) 100%);
  }

  .announcementLeft ul {
    display: flex;
    align-items: center;
    gap: 20px;
  }

  .announcementLeft ul li {
    display: flex;
    align-items: center;
    gap: 5px;
    font-size: 14px;
    font-weight: 600;
  }

  .announcementRight ul {
    display: flex;
    align-items: center;
    gap: 10px;
  }

  @media (max-width: 765px) {
    .headerAnnouncement {
      display: flex;
      padding: 5px;
      gap: 5px;
      flex-direction: column;
    }

    .row.v-center {
      row-gap: 0px !important;
    }

    .announcementLeft ul {
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .announcementLeft ul li {
      display: flex;
      align-items: center;
      justify-content: space-between;
      font-size: 13px;
      font-weight: 600;
    }

    .announcementRight {
      display: none;
    }
  }

  .right img {
    transform: scale(0.5);
    animation: scaleUp 1s forwards ease-in-out;
    animation-delay: 0.5s;
    /* 0.5 second delay */
  }

  @keyframes scaleUp {
    100% {
      transform: scale(1);
    }
  }
</style>
<link rel="shortcut icon" href="images/logoonly.jpg" type="image/png" />
<link rel="apple-touch-icon" sizes="180x180" href="images/logoonly.png">
<link rel="icon" href="images/logoonly.jpg" type="image/x-icon" />


<div class="headerAnnouncement">
  <div class="announcementLeft">
    <ul>
      <li>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
          class="lucide lucide-phone">
          <path
            d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
        </svg>
        <span><a href="tel:+919820133303">+91 98201 33303</a></span>
      </li>
      <li>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
          class="lucide lucide-mail">
          <rect width="20" height="16" x="2" y="4" rx="2" />
          <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7" />
        </svg>
        <span><a href="mailto:info@sagartech.co.in">info@sagartech.co.in</a></span>
      </li>
    </ul>
  </div>
  <div class="announcementRight">
    <ul>
      <li>
        <a href="https://www.facebook.com/sagartechwebdevelopersmumbai" target="_blank">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="lucide lucide-facebook">
            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
          </svg>
        </a>
      </li>
      <li>
        <a href="https://www.instagram.com/sagartechsolutions/" target="_blank">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="lucide lucide-instagram">
            <rect width="20" height="20" x="2" y="2" rx="5" ry="5" />
            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
            <line x1="17.5" x2="17.51" y1="6.5" y2="6.5" />
          </svg>
        </a>
      </li>
      <li>
        <a href="https://www.linkedin.com/company/sagar-tech-technical-solutions" target="_blank">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="lucide lucide-linkedin">
            <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" />
            <rect width="4" height="12" x="2" y="9" />
            <circle cx="4" cy="4" r="2" />
          </svg>
        </a>
      </li>
      <li>
        <a href="https://www.youtube.com/channel/UCRVxoCbFJAQdqo6U5bgFxog" target="_blank">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="lucide lucide-youtube">
            <path
              d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17" />
            <path d="m10 15 5-3-5-3z" />
          </svg>
        </a>
      </li>
    </ul>
  </div>
</div>
<header class="header">
  <div class="container">
    <div class="row v-center">
      <div class="header-item item-left">
        <div class="logo">
          <a href="<?= WEB_URL ?>">
            <!-- <img src="<?= WEB_URL ?>images/sagartech.png" alt="" /> -->
            <img src="<?= WEB_URL ?>images/sagartech1.webp" alt="sagartech logo" />
          </a>
        </div>
      </div>
      <!-- menu start here -->
      <style>
        .li-service-item-css {
          display: flex !important;
          align-items: center;
          gap: 6px;
        }

        li.li-service-item-css:hover {
          padding-left: 15px !important;
          animation-duration: 2s;
        }

        .list-item .titlee:hover {
          padding-left: 15px;
        }
      </style>
      <div class="header-item item-center">
        <div class="menu-overlay"></div>
        <nav class="menu">
          <div class="mobile-menu-head">
            <div class="go-back"><i class="fa fa-angle-left"></i></div>
            <div class="current-menu-title"></div>
            <div class="mobile-menu-close">&times;</div>
          </div>
          <ul class="menu-main">
            <li>
              <a href="<?= WEB_URL ?>">Home</a>
            </li>
            <li class="menu-item-has-children">
              <a href="#">Services <i class="fa fa-angle-down"></i></a>
              <div class="sub-menu mega-menu mega-menu-column-4">
                <div class="list-item">
                  <div class="titlee">
                    <img src="<?= WEB_URL ?>icons/web-development.png" style="width: 30px" alt="" />
                    <a href="<?= WEB_URL ?>web-development-company-in-mumbai">Web Development</a>
                  </div>
                  <ul>
                    <li class="li-service-item-css">
                      <img src="<?= WEB_URL ?>icons/Ecommerce-Website.webp" style="width: 25px; margin: 0px" alt="" />
                      <a href="<?= WEB_URL ?>ecommerce-website-development-company-in-mumbai">Ecommerce Website</a>
                    </li>
                    <li class="li-service-item-css">
                      <img src="<?= WEB_URL ?>icons/Dynamic-Website.avif" style="width: 25px; margin: 0px" alt="" />
                      <a href="<?= WEB_URL ?>dynamic-website-development-company-in-mumbai">Dynamic Website</a>
                    </li>
                    <li class="li-service-item-css">
                      <img src="<?= WEB_URL ?>icons/Static-Website.avif" style="width: 25px; margin: 0px" alt="" />
                      <a href="<?= WEB_URL ?>static-website-development-company-in-mumbai">Static Website</a>
                    </li>
                    <li class="li-service-item-css">
                      <img src="<?= WEB_URL ?>icons/Blog-Website.jpeg" style="width: 25px; margin: 0px" alt="" />
                      <a href="<?= WEB_URL ?>blogging-website-development-in-mumbai">Blog Website</a>
                    </li>
                    <li class="li-service-item-css">
                      <img src="<?= WEB_URL ?>icons/Web-Hosting.webp" style="width: 25px; margin: 0px" alt="" />
                      <a href="<?= WEB_URL ?>web-hosting-services-in-mumbai">Web Hosting</a>
                    </li>
                    <li class="li-service-item-css">
                      <img src="<?= WEB_URL ?>icons/Domain-Registration.jpg" style="width: 25px; margin: 0px" alt="" />
                      <a href="<?= WEB_URL ?>domain-service-provider-in-mumbai">Domain Registration</a>
                    </li>
                    <li class="li-service-item-css">
                      <img src="<?= WEB_URL ?>icons/Website-Maintenance.jpeg" style="width: 25px; margin: 0px" alt="" />
                      <a href="<?= WEB_URL ?>website-maintainance-company-in-mumbai">Website Maintenance</a>
                    </li>
                    <li class="li-service-item-css">
                      <img src="<?= WEB_URL ?>icons/Wordpress-Development.png" style="width: 25px; margin: 0px" alt="" />
                      <a href="<?= WEB_URL ?>wordpress-developers-in-mumbai">Wordpress Development</a>
                    </li>
                    <li class="li-service-item-css">
                      <img src="<?= WEB_URL ?>icons/Ecommerce-Using-Shopify.jpeg" style="width: 25px; margin: 0px" alt="" />
                      <a href="<?= WEB_URL ?>shopify-developers-in-mumbai">Ecommerce Using Shopify</a>
                    </li>
                  </ul>

                </div>
                <div class="list-item">
                  <div class="titlee">
                    <img src="<?= WEB_URL ?>icons/bullhorn.png" style="width: 30px" alt="" />
                    <a href="<?= WEB_URL ?>digital-marketing-company-in-mumbai">Digital Marketing</a>
                  </div>
                  <ul>
                    <li class="li-service-item-css">
                      <img src="<?= WEB_URL ?>icons/Google-Adwords.webp" style="width: 25px; margin: 0px" alt="" />
                      <a href="<?= WEB_URL ?>google-ads-services-in-mumbai">Google Adwords</a>
                    </li>
                    <li class="li-service-item-css">
                      <img src="<?= WEB_URL ?>icons/Search-Engine-Optimization.jpeg" style="width: 25px; margin: 0px" alt="" />
                      <a href="<?= WEB_URL ?>seo-company-in-mumbai">Search Engine Optimization</a>
                    </li>
                    <li class="li-service-item-css">
                      <img src="<?= WEB_URL ?>icons/Local-SEO.webp" style="width: 25px; margin: 0px" alt="" />
                      <a href="<?= WEB_URL ?>local-seo-services-in-mumbai">Local SEO</a>
                    </li>
                    <li class="li-service-item-css">
                      <img src="<?= WEB_URL ?>icons/Social-Media-Marketing.webp" style="width: 25px; margin: 0px" alt="" />
                      <a href="<?= WEB_URL ?>social-media-marketing-agency-in-mumbai">Social Media Marketing</a>
                    </li>
                    <li class="li-service-item-css">
                      <img src="<?= WEB_URL ?>icons/Social-Media-Optimization.webp" style="width: 25px; margin: 0px" alt="" />
                      <a href="<?= WEB_URL ?>social-media-optimization-agency-in-mumbai">Social Media Optimization</a>
                    </li>
                  </ul>

                </div>
                <div class="list-item">
                  <div class="titlee">
                    <img src="<?= WEB_URL ?>icons/graphic-designer.png" style="width: 30px" alt="" />
                    <a href="<?= WEB_URL ?>graphic-design-services-in-mumbai">Graphic Designing</a>
                  </div>
                  <ul>
                    <li class="li-service-item-css">
                      <img src="<?= WEB_URL ?>icons/Brand-Identity.jpeg" style="width: 25px; margin: 0px" alt="" />
                      <a href="<?= WEB_URL ?>brand-identity-design-in-mumbai">Brand Identity</a>
                    </li>
                    <li class="li-service-item-css">
                      <img src="<?= WEB_URL ?>icons/Logo-Designing.webp" style="width: 25px; margin: 0px" alt="" />
                      <a href="<?= WEB_URL ?>logo-design-services-in-mumbai">Logo Designing</a>
                    </li>
                    <li class="li-service-item-css">
                      <img src="<?= WEB_URL ?>icons/Brochure-Designing.webp" style="width: 25px; margin: 0px" alt="" />
                      <a href="<?= WEB_URL ?>brochure-design-services-in-mumbai">Brochure Designing</a>
                    </li>
                    <li class="li-service-item-css">
                      <img src="<?= WEB_URL ?>icons/Post-Designing.webp" style="width: 25px; margin: 0px" alt="" />
                      <a href="<?= WEB_URL ?>social-media-post-design-in-mumbai">Post Designing</a>
                    </li>
                    <li class="li-service-item-css">
                      <img src="<?= WEB_URL ?>icons/Banner-Designing.webp" style="width: 25px; margin: 0px" alt="" />
                      <a href="<?= WEB_URL ?>banner-design-services-in-mumbai">Banner Designing</a>
                    </li>
                  </ul>

                </div>
                <div class="list-item">
                  <div class="titlee">
                    <img src="<?= WEB_URL ?>icons/text-message.png" style="width: 30px" alt="" />
                    <a href="<?= WEB_URL ?>bulk-sms-service-provider-in-mumbai">Bulk SMS</a>
                  </div>
                  <div class="titlee">
                    <img src="<?= WEB_URL ?>icons/whatsappicon.png" style="width: 30px" alt="" />
                    <a href="<?= WEB_URL ?>bulk-whatsapp-message-sender-in-india">Bulk WhatsApp</a>
                  </div>
                  <div class="titlee">
                    <img src="<?= WEB_URL ?>icons/app-development.png" style="width: 30px" alt="" />
                    <a href="<?= WEB_URL ?>mobile-app-development-company-in-mumbai">App Development</a>
                  </div>
                </div>
              </div>
            </li>
            <li class="menu-item-has-children">
              <a href="#">Our Products<i class="fas fa-angle-down" style="margin-left: 3px;"></i></a>
              <div class="sub-menu single-column-menu">
                <ul>
                  <div style="display: flex; gap: 5px; align-items:center; ">
                    <img src="../product-images/siyahfy-logo11.png" style="width: 30px; height: 100%;" alt="" />
                    <li><a href="<?= WEB_URL ?>our-products/siyahfy">Siyahfy</a></li>
                  </div>
                  <div style="display: flex; gap: 5px; align-items:center;">
                    <img src="../product-images/chillinote-logo1.png" style="width: 30px; height: 100%;" alt="" />
                    <li><a href="<?= WEB_URL ?>our-products/project-management-software-in-india">Chillinote</a></li>
                  </div>
                  <div style="display: flex; gap: 5px; align-items:center; ">
                    <img src="../product-images/wonestop.png" style="width: 30px; height: 100%;" alt="" />
                    <li><a href="<?= WEB_URL ?>our-products/bulk-whatsapp-api-marketing-software-in-india ">Wonestop</a></li>
                  </div>
                  <div style="display: flex; gap: 5px; align-items:center;">
                    <img src="../product-images/tappify.png" style="width: 30px; height: 100%;" alt="" />
                    <li><a href="<?= WEB_URL ?>our-products/nfc-digital-business-cards-in-india">Tappify</a></li>
                  </div>
                </ul>
              </div>

            </li>
            <!-- <li class="menu-item-has-children">
              <a href="#">Portfolio <i class="fas fa-angle-down"></i></a>
              <div class="sub-menu single-column-menu">
                <ul>
                  <li><a href="<?= WEB_URL ?>portfolio/website">Web Development Portfolio</a></li>
                  <li><a href="<?= WEB_URL ?>portfolio/mobile">App Development Portfolio</a></li>
                  <li><a href="<?= WEB_URL ?>portfolio/search-engine-optimization">SEO Portfolio</a></li>
                  <li><a href="<?= WEB_URL ?>portfolio/logo">Logo Design Portfolio</a></li>
                  <li><a href="<?= WEB_URL ?>portfolio/banner">Banner Design Portfolio</a></li>
                  <li><a href="<?= WEB_URL ?>portfolio/brochure">Brochure Design Portfolio</a></li>
                  <li><a href="<?= WEB_URL ?>portfolio/social-media-post">Social Media Post Portfolio</a></li>
                  <li class="portfolio-dropdown"><a href="#">Social Media Portfolio <i class="fas fa-angle-right"></i></a>
                          <div class="multi-level-dropdown">
                            <ul>
                              <li><a href="<?= WEB_URL ?>portfolio/facebook-insights">Facebook Insights Portfolio</a></li>
                              <li><a href="<?= WEB_URL ?>portfolio/instagram-insights">Instagram Insights Portfolio</a></li>
                            </ul>
                          </div>
                      </li>
                </ul>
              </div>
            </li> -->
            <li>
              <a href="<?= WEB_URL ?>projects" target="_blank">Projects</a>
            </li>
            <li>
              <a href="<?= WEB_URL ?>about">About Us</a>
            </li>
            <li>
              <a href="<?= WEB_URL ?>contact">Contact Us</a>
            </li>
            <li>
              <a href="<?= WEB_URL ?>career">Career</a>
            </li>
            <li>
              <a href="<?= WEB_URL ?>allblog">Blogs</a>
            </li>
          </ul>
        </nav>
      </div>
      <!-- menu end here -->
      <div class="header-item item-right">
        <!-- <a href="#"><i class="fas fa-search"></i></a>
            <a href="#"><i class="far fa-heart"></i></a>
            <a href="#"><i class="fas fa-shopping-cart"></i></a> -->
        <?php include 'quote.php' ?>
        <!-- mobile menu trigger -->
        <div class="mobile-menu-trigger">
          <span></span>
        </div>
      </div>
    </div>
  </div>
</header>
<script>
  const menu = document.querySelector(".menu");
  const menuMain = menu.querySelector(".menu-main");
  const goBack = menu.querySelector(".go-back");
  const menuTrigger = document.querySelector(".mobile-menu-trigger");
  const closeMenu = menu.querySelector(".mobile-menu-close");
  let subMenu;
  menuMain.addEventListener("click", (e) => {
    if (!menu.classList.contains("active")) {
      return;
    }
    if (e.target.closest(".menu-item-has-children")) {
      const hasChildren = e.target.closest(".menu-item-has-children");
      showSubMenu(hasChildren);
    }
  });
  goBack.addEventListener("click", () => {
    hideSubMenu();
  });
  menuTrigger.addEventListener("click", () => {
    toggleMenu();
  });
  closeMenu.addEventListener("click", () => {
    toggleMenu();
  });
  document.querySelector(".menu-overlay").addEventListener("click", () => {
    toggleMenu();
  });

  function toggleMenu() {
    menu.classList.toggle("active");
    document.querySelector(".menu-overlay").classList.toggle("active");
  }

  function showSubMenu(hasChildren) {
    subMenu = hasChildren.querySelector(".sub-menu");
    subMenu.classList.add("active");
    subMenu.style.animation = "slideLeft 0.5s ease forwards";
    const menuTitle =
      hasChildren.querySelector("i").parentNode.childNodes[0].textContent;
    menu.querySelector(".current-menu-title").innerHTML = menuTitle;
    menu.querySelector(".mobile-menu-head").classList.add("active");
  }

  function hideSubMenu() {
    subMenu.style.animation = "slideRight 0.5s ease forwards";
    setTimeout(() => {
      subMenu.classList.remove("active");
    }, 300);
    menu.querySelector(".current-menu-title").innerHTML = "";
    menu.querySelector(".mobile-menu-head").classList.remove("active");
  }

  window.onresize = function() {
    if (this.innerWidth > 991) {
      if (menu.classList.contains("active")) {
        toggleMenu();
      }
    }
  };
</script>