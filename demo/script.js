$(document).ready(function () {
    
    AOS.init();
    
    AOS.init({
        once: true,
         mirror: true
    });

    //activate fullpage.js
    $('#fullPage').fullpage({
        scrollBar: true,
        navigation: true,
        navigationTooltips: ['Top', 'Sustainability', 'Perfection', 'Professinalism', 'Bottom'],
        loopBottom: false,
        sectionSelector: 'section',
    });

    $(document).on('click', '[data-toggle="lightbox"]', function (event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });



    var menu = $('.menu');
    var close = $('.close');
    var level1 = $('.level-1');
    var level2 = $('.level-2');
    var level3 = $('.level-3');
    var menuBtn = $('.menu-trigger');
    var product = $('.product');
    var services = $('.services');
    var productList = $('.product-list');
    var servicesList = $('.services-list');
    var wcp = $('.wcp');
    var cis = $('.cis');
    var as = $('.as');
    var wcpList = $('.wcp-list');
    var cisList = $('.cis-list');
    var asList = $('.as-list');
    var searchBtn = $('.search')
    var searchBar = $('.search-bar');


    menu.hide();
    level2.animate({
        width: 'hide'
    });
    level3.animate({
        width: 'hide'
    });

    searchBar.hide();

    servicesList.hide();
    productList.hide();
    wcpList.hide();
    cisList.hide();
    asList.hide();

    menuBtn.click(function () {
        menu.animate({
            width: 'show'
        });
    });

    close.click(function () {
        menu.animate({
            width: 'hide'
        });

        level2.animate({
            width: 'hide'
        });

        servicesList.hide();
        productList.hide();
        wcpList.hide();
        cisList.hide();
        asList.hide();
    });


    product.click(function () {

        level2.animate({
            width: 'hide'
        });

        servicesList.hide();
        productList.show();

        level2.animate({
            width: 'show'
        });

    });

    services.click(function () {
        level3.animate({
            width: 'hide'
        });

        level2.animate({
            width: 'hide'
        });

        servicesList.show();
        productList.hide();

        level2.animate({
            width: 'show'
        });

    });

    wcp.click(function () {
        level3.animate({
            width: 'hide'
        });

        wcpList.show();
        cisList.hide();
        asList.hide();

        level3.animate({
            width: 'show'
        });

    });

    cis.click(function () {
        level3.animate({
            width: 'hide'
        });

        wcpList.hide();
        cisList.show();
        asList.hide();

        level3.animate({
            width: 'show'
        });

    });

    as.click(function () {
        level3.animate({
            width: 'hide'
        });

        wcpList.hide();
        cisList.hide();
        asList.show();

        level3.animate({
            width: 'show'
        });

    });

    searchBtn.click(function () {
        searchBar.animate({
            height: 'toggle'
        });
    });




});
