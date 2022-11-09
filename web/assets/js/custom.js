$(document).ready(function () {
    $("#slider-1").owlCarousel({
        loop: true,
        margin: 40,
        autoplay: true,
        nav: false,
        dots: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 2,
                nav: true,
                margin: 10,
            },
            600: {
                items: 3,
                nav: false,
                margin: 10,
            },
            1000: {
                items: 4,
                nav: true,
                loop: false
            }
        }
    });
    $("#slider-3").owlCarousel({
        loop: true,
        margin: 40,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 1500,
        responsiveClass: true,
        items: 1,

    });

    $("#slider-2").owlCarousel({
        loop: true,
        margin: 40,
        nav: false,
        dots: false,
        autoplayTimeout: 1500,
        responsiveClass: true,
        items: 1,

    });


    // Custom Button slider-1
    var owl = $('#slider-1');
    owl.owlCarousel();
    // Go to the next item
    $('.customNextBtn').click(function () {
        owl.trigger('next.owl.carousel');
    })
    // Go to the previous item
    $('.customPreviousBtn').click(function () {
        owl.trigger('prev.owl.carousel');
    });


    // Custom Button slider-2
    var owl2 = $('#slider-2');
    owl2.owlCarousel();
    // Go to the next item
    $('.customNextBtn2').click(function () {
        owl2.trigger('next.owl.carousel');
    })
    // Go to the previous item
    $('.customPreviousBtn2').click(function () {
        owl2.trigger('prev.owl.carousel');
    });




});





$(document).ready(function () {
    var scrollTop = 0;
    $(window).scroll(function () {
        scrollTop = $(window).scrollTop();
        $('.counter').html(scrollTop);

        if (scrollTop >= 100) {
            $('#global-nav').addClass('scrolled-nav');
        } else if (scrollTop < 100) {
            $('#global-nav').removeClass('scrolled-nav');
        }

    });

});

$(".menu-icon").click(function () {
    $(".menu").slideToggle("slow", function () {
        // Animation complete.
    });
});




$('.menu-icon').click(function () {
    $(this).toggleClass('open');
});



$(document).ready(function () {

    $('.show-hidden-menus').click(function () {
        $('.hidden-menus').slideToggle("slow");
        // Alternative animation for example
        // slideToggle("fast");
    });
});



$(document).ready(function () {
    var scrollTop = 0;
    $(window).scroll(function () {
        scrollTop = $(window).scrollTop();
        $('.counter').html(scrollTop);

        if (scrollTop >= 100) {
            $('#global-nav').addClass('scrolled-nav');
        } else if (scrollTop < 100) {
            $('#global-nav').removeClass('scrolled-nav');
        }

    });

});


ipt >
    $("#overlay").click(function () {
        $(".menu").slideToggle("slow", function () {});
    });

$('.menu-icon').click(function () {
    $(this).toggleClass('open');
});





$(document).ready(function () {
    var scrollTop = 0;
    $(window).scroll(function () {
        scrollTop = $(window).scrollTop();
        $('.counter').html(scrollTop);

        if (scrollTop >= 100) {
            $('#global-nav').addClass('scrolled-nav');
        } else if (scrollTop < 100) {
            $('#global-nav').removeClass('scrolled-nav');
        }

    });

});