jQuery(document).ready(function() {
    // sticky-nav
    $(document).ready(function() {
        var $navbar = $("#navArea");

        AdjustHeader(); // Incase the user loads the page from halfway down (or something);
        $(window).scroll(function() {
            AdjustHeader();
        });

        function AdjustHeader() {
            if ($(window).scrollTop() > 200) {
                if (!$navbar.hasClass("remove-padding")) {
                    $navbar.addClass("remove-padding");
                }
            } else {
                $navbar.removeClass("remove-padding");
            }
        }
    });

    // menu

    var toggler = document.querySelector(".toggler");
    var icon = document.querySelector(".toggler-icon");

    var main_menu = document.querySelector(".main-menu");
    var mega_menu = document.querySelector(".mega-menu");

    toggler.addEventListener("click", function() {
        icon.classList.toggle("active");
        main_menu.classList.toggle('hidden')
        mega_menu.classList.toggle('visiable')

    });
    // for hover dropdown menu
    $('ul.nav li.dropdown').hover(function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(200);
    }, function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(200);
    });

    // Momdal on page Load
    $(window).load(function() {
        $('#myModal').modal('show');
    });

    // slick slider call 
    $('.slick_slider').slick({
        dots: true,
        infinite: true,
        speed: 800,
        slidesToShow: 1,
        slide: 'div',
        autoplay: true,
        autoplaySpeed: 5000,
        cssEase: 'linear'
    });

    // jQuery('a.gallery').colorbox();
    //Check to see if the window is top if not then display button
    $(window).scroll(function() {
        if ($(this).scrollTop() > 300) {
            $('.scrollToTop').fadeIn();
        } else {
            $('.scrollToTop').fadeOut();
        }
    });
    //Click event to scroll to top
    $('.scrollToTop').click(function() {
        $('html, body').animate({
            scrollTop: 0
        }, 800);
        return false;
    });
    $('.tootlip').tooltip();
    $("ul#ticker01").liScroll();
});

wow = new WOW({
    animateClass: 'animated',
    offset: 100
});
wow.init();

jQuery(window).load(function() { // makes sure the whole site is loaded
    $('#status').fadeOut(); // will first fade out the loading animation
    $('#preloader').delay(100).fadeOut('slow'); // will fade out the white DIV that covers the website.
    $('body').delay(100).css({
        'overflow': 'visible'
    });
})