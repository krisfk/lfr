$(function() {
    $('.top-menu-ul a').click(function(e) {
        // e.preventDefault(0);
        $('.top-menu-ul a').removeClass('active');
        $(this).addClass('active');
    });

    $('.top-menu-ul li a').click(function() {
        var goto = $(this).attr('rel');
        $('html, body').animate({ scrollTop: 600 }, 200);
    });

    $(window).scroll(function() {
        var nowPos = $(document).scrollTop();
        var nh = $('.fixed-navigation').height();
        if (nowPos < $('#services').offset().top - nh) {
            $('.top-menu-ul a').removeClass('active');
        }

        if (
            nowPos > $('#services').offset().top - nh &&
            nowPos < $('#client-process').offset().top - nh
        ) {
            $('.top-menu-ul a').removeClass('active');
            $('.top-menu-ul a.services').addClass('active');
        }

        if (
            nowPos > $('#client-process').offset().top - nh &&
            nowPos < $('#expertise').offset().top - nh
        ) {
            $('.top-menu-ul a').removeClass('active');
            $('.top-menu-ul a.client-process').addClass('active');
        }

        if (
            nowPos > $('#expertise').offset().top - nh &&
            nowPos < $('#the-team').offset().top - nh
        ) {
            $('.top-menu-ul a').removeClass('active');
            $('.top-menu-ul a.expertise').addClass('active');
        }

        if (
            nowPos > $('#the-team').offset().top - nh &&
            nowPos < $('#contact-us').offset().top - nh
        ) {
            $('.top-menu-ul a').removeClass('active');
            $('.top-menu-ul a.the-team').addClass('active');
        }

        if (
            nowPos >
            $('#contact-us').offset().top -
            nh -
            ($(window).height() -
                $('#contact-us').height() -
                nh -
                $('footer').height())
        ) {
            $('.top-menu-ul a').removeClass('active');
            $('.top-menu-ul a.contact-us').addClass('active');

            // console.log('contact-us');
        }

        // if (nowPos > $('#service').offset().top && nowPos < $('#client-process').offset().top) {
        //     console.log('service');

        // }
    });
});