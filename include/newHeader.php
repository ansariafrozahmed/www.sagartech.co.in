
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
    color:#FF0808;
    font-weight:600;
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
    top:0px;
    z-index: 99;
    background:#fff;
    padding: 15px;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
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
  .header .menu > ul > li {
    display: inline-block;
    line-height: 50px;
    margin-left: 25px;
  }
  .header .menu > ul > li > a {
    font-size: 15px;
    font-weight: 500;
    color: #000000;
    position: relative;
    text-transform: capitalize;
    transition: color 0.3s ease;
  }
  .header .menu > ul > li .sub-menu {
    position: absolute;
    z-index: 500;
    background-color: #ffffff;
    box-shadow: -2px 2px 70px -25px rgba(0, 0, 0, 0.3);
    padding: 20px 30px;
    transition: all 0.5s ease;
    margin-top: 25px;
    opacity: 0;
    visibility: hidden;
  }
  @media (min-width: 992px) {
    .header .menu > ul > li.menu-item-has-children:hover .sub-menu {
      margin-top: 0;
      visibility: visible;
      opacity: 1;
    }
  }
  .header .menu > ul > li .sub-menu > ul > li {
    line-height: 1;
  }
  .header .menu > ul > li .sub-menu > ul > li > a {
    display: inline-block;
    padding: 10px 0;
    font-size: 15px;
    color: #555555;
    transition: color 0.3s ease;
    text-decoration: none;
    text-transform: capitalize;
  }
  .header .menu > ul > li .single-column-menu {
    min-width: 280px;
    max-width: 350px;
  }
  .header .menu > ul > li .sub-menu.mega-menu > .list-item > ul > li {
    line-height: 0;
    display: block;
    /* background-color: rgb(237, 237, 237); */
    margin: 5px 0px;
    padding: 2px 10px;
    border-radius: 10px;
  }
  .header .menu > ul > li .sub-menu.mega-menu > .list-item > ul > li:hover {
    background-color: rgb(243, 243, 243);
    margin: 5px 0px;
    padding: 2px 10px;
    border-radius: 10px;
  }
  .header .menu > ul > li .sub-menu.mega-menu > .list-item > ul > li > a {
    padding: 10px 0;
    display: inline-block;
    font-size: 15px;
    color: #555555;
    transition: color 0.3s ease;
  }
  .header .menu > ul > li .sub-menu.mega-menu {
    left: 50%;
    transform: translateX(-50%);
  }

  .header .menu > ul > li .sub-menu.mega-menu-column-4 {
    max-width: 1100px;
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    padding: 20px 15px;
    border-radius: 5px;
  }
  .header .menu > ul > li .sub-menu.mega-menu-column-4 > .list-item {
    flex: 0 0 25%;
    padding: 0 15px;
  }
  .header .menu > ul > li .sub-menu.mega-menu-column-4 > .list-item a {
    font-size: 18px;
    color: #ff0808;
    font-weight: 600;
    line-height: 1;
    padding: 10px 0;
  }
  .header
    .menu
    > ul
    > li
    .sub-menu.mega-menu-column-4
    > .list-item.text-center
    .titlee {
    text-align: center;
  }
  .header .menu > ul > li .sub-menu.mega-menu-column-4 > .list-item img {
    max-width: 100%;
    width: 100%;
    vertical-align: middle;
    margin-top: 10px;
  }
  .header .menu > ul > li .sub-menu.mega-menu > .list-item > ul > li > a:hover,
  .header .menu > ul > li .sub-menu > ul > li > a:hover,
  .header .item-right a:hover,
  .header .menu > ul > li:hover > a {
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
    .header .menu > ul > li {
      line-height: 1;
      margin: 0;
      display: block;
    }
    .header .menu > ul > li > a {
      line-height: 50px;
      height: 50px;
      padding: 0 50px 0 15px;
      display: block;
      border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    }
    .header .menu > ul > li > a i {
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
    .header .menu > ul > li .sub-menu.mega-menu,
    .header .menu > ul > li .sub-menu {
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
    .header .menu > ul > li .sub-menu.active {
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
    .header .menu > ul > li .sub-menu.mega-menu-column-4 > .list-item img {
      margin-top: 0;
    }
    .header
      .menu
      > ul
      > li
      .sub-menu.mega-menu-column-4
      > .list-item.text-center
      .titlee {
      margin-bottom: 20px;
    }
    .header
      .menu
      > ul
      > li
      .sub-menu.mega-menu-column-4
      > .list-item.text-center:last-child
      .titlee {
      margin-bottom: 0px;
    }
    .header .menu > ul > li .sub-menu.mega-menu-column-4 > .list-item {
      flex: 0 0 100%;
      padding: 0px;
    }
    .header .menu > ul > li .sub-menu > ul > li > a,
    .header .menu > ul > li .sub-menu.mega-menu > .list-item > ul > li > a {
      display: block;
    }
    .header .menu > ul > li .sub-menu.mega-menu > .list-item > ul {
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
</style>
<header class="header">
  <div class="container">
    <div class="row v-center">
      <div class="header-item item-left">
        <div class="logo">
          <a href="<?= WEB_URL ?>">
            <img src="<?= WEB_URL ?>images/sagartech.png" alt="" />
          </a>
        </div>
      </div>
      <!-- menu start here -->
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
            <!-- <li class="menu-item-has-children">
                  <a href="#">New <i class="fa fa-angle-down"></i></a>
                  <div class="sub-menu mega-menu mega-menu-column-4">
                    <div class="list-item text-center">
                      <a href="#">
                        <img src="img/p1.jpg" alt="new Product" />
                        <h4 class="titlee">Product 1</h4>
                      </a>
                    </div>
                    <div class="list-item text-center">
                      <a href="#">
                        <img src="img/p2.jpg" alt="new Product" />
                        <h4 class="titlee">Product 2</h4>
                      </a>
                    </div>
                    <div class="list-item text-center">
                      <a href="#">
                        <img src="img/p3.jpg" alt="new Product" />
                        <h4 class="titlee">Product 3</h4>
                      </a>
                    </div>
                    <div class="list-item text-center">
                      <a href="#">
                        <img src="img/p4.jpg" alt="new Product" />
                        <h4 class="titlee">Product 4</h4>
                      </a>
                    </div>
                  </div>
                </li> -->
            <li class="menu-item-has-children">
              <a href="#">Services <i class="fa fa-angle-down"></i></a>
              <div class="sub-menu mega-menu mega-menu-column-4">
                <div class="list-item">
                  <div class="titlee">
                    <img
                      src="<?= WEB_URL ?>icons/web-development.png"
                      style="width: 30px"
                      alt=""
                    />
                    <a href="<?= WEB_URL ?>web-development-company">Web Development</a>
                  </div>
                  <ul>
                    <li>
                      <a href="<?= WEB_URL ?>ecommerce-website-development"
                        >Ecommerce Website</a
                      >
                    </li>
                    <li>
                      <a href="<?= WEB_URL ?>dynamic-website-development">Dynamic Website</a>
                    </li>
                    <li><a href="<?= WEB_URL ?>blogging-website-development">Blog Website</a></li>
                    <li><a href="<?= WEB_URL ?>web-hosting-services">Web Hosting</a></li>
                    <li>
                      <a href="<?= WEB_URL ?>domain-service-provider">Domain Registration</a>
                    </li>
                  </ul>
                </div>
                <div class="list-item">
                  <div class="titlee">
                    <img src="<?= WEB_URL ?>icons/bullhorn.png" style="width: 30px" alt="" />
                    <a href="<?= WEB_URL ?>digital-marketing-company">Digital Marketing</a>
                  </div>
                  <ul>
                    <li><a href="<?= WEB_URL ?>google-ads-services">Google Adwords</a></li>
                    <li>
                      <a href="<?= WEB_URL ?>seo-company-in-mumbai">Search Engine Optimization</a>
                    </li>
                    <li><a href="<?= WEB_URL ?>local-seo-services">Local SEO</a></li>
                    <li>
                      <a href="<?= WEB_URL ?>social-media-marketing-agency"
                        >Social Media Marketing</a
                      >
                    </li>
                    <li>
                      <a href="<?= WEB_URL ?>social-media-optimization"
                        >Social Media Optimization</a
                      >
                    </li>
                  </ul>
                </div>
                <div class="list-item">
                  <div class="titlee">
                    <img
                      src="<?= WEB_URL ?>icons/graphic-designer.png"
                      style="width: 30px"
                      alt=""
                    />
                    <a href="<?= WEB_URL ?>graphic-design-services">Graphic Designing</a>
                  </div>
                  <ul>
                    <li>
                      <a href="<?= WEB_URL ?>brand-identity-design">Brand Identity</a>
                    </li>
                    <li><a href="<?= WEB_URL ?>logo-design-services">Logo Designing</a></li>
                    <li><a href="<?= WEB_URL ?>brochure-design-services">Brochure Designing</a></li>
                    <li><a href="<?= WEB_URL ?>social-media-post-design">Post Designing</a></li>
                    <li>
                      <a href="<?= WEB_URL ?>banner-design-services">Banner Designing</a>
                    </li>
                  </ul>
                </div>
                <div class="list-item">
                  <div class="titlee">
                    <img
                      src="<?= WEB_URL ?>icons/text-message.png"
                      style="width: 30px"
                      alt=""
                    />
                    <a href="<?= WEB_URL ?>bulk-sms-service-provider">Bulk SMS</a>
                  </div>
                  <div class="titlee">
                    <img
                      src="<?= WEB_URL ?>icons/app-development.png"
                      style="width: 30px"
                      alt=""
                    />
                    <a href="<?= WEB_URL ?>mobile-app-development-company">App Development</a>
                  </div>
                  <!-- <div class="titlee">
                    <img
                      src="<?= WEB_URL ?>icons/iso-symbol.png"
                      style="width: 30px"
                      alt=""
                    />
                    <a href="iso-consulting">ISO Consulting</a>
                  </div> -->
                </div>
              </div>
            </li>
            <!-- <li class="menu-item-has-children">
                  <a href="#">Blog <i class="fas fa-angle-down"></i></a>
                  <div class="sub-menu single-column-menu">
                    <ul>
                      <li><a href="#">Standard Layout</a></li>
                      <li><a href="#">Grid Layout</a></li>
                      <li><a href="#">single Post Layout</a></li>
                    </ul>
                  </div>
                </li> -->
            <!-- <li class="menu-item-has-children">
                  <a href="#">Pages <i class="fas fa-angle-down"></i></a>
                  <div class="sub-menu single-column-menu">
                    <ul>
                      <li><a href="#">Login</a></li>
                      <li><a href="#">Register</a></li>
                      <li><a href="#">Faq</a></li>
                      <li><a href="#">404 Page</a></li>
                    </ul>
                  </div>
                </li> -->
            <!-- <li>
              <a href="digital-marketing-agency-mumbai-packages">Packages</a>
            </li> -->
            <li>
              <a href="<?= WEB_URL ?>our-portfolio">Portfolio</a>
            </li>
            <li>
              <a href="<?= WEB_URL ?>about">About Us</a>
            </li>
            <li>
              <a href="<?= WEB_URL ?>contact">Contact Us</a>
            </li>
            <li>
              <a href="<?= WEB_URL ?>blog">Blogs</a>
            </li>
          </ul>
        </nav>
      </div>
      <!-- menu end here -->
      <div class="header-item item-right">
        <!-- <a href="#"><i class="fas fa-search"></i></a>
            <a href="#"><i class="far fa-heart"></i></a>
            <a href="#"><i class="fas fa-shopping-cart"></i></a> -->
        <?php include 'include/quote.php' ?>
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

  window.onresize = function () {
    if (this.innerWidth > 991) {
      if (menu.classList.contains("active")) {
        toggleMenu();
      }
    }
  };
</script>
