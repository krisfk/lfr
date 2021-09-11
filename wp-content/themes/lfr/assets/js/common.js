$(function() {
    $('.top-menu-ul a').click(function(e) {
        // e.preventDefault(0);
        $('.top-menu-ul a').removeClass('active');
        $(this).addClass('active');
    });

    $(window).scroll(function() {
        var nowPos = $(document).scrollTop();
        var nh = $('.fixed-navigation').height();
        // console.log(nowPos)
        if (nowPos < $('#services').offset().top - nh) {
            // console.log('home')
        }

        if (
            nowPos > $('#services').offset().top - nh &&
            nowPos < $('#client-process').offset().top - nh
        ) {
            // console.log('services')
        }

        if (
            nowPos > $('#client-process').offset().top - nh &&
            nowPos < $('#expertise').offset().top - nh
        ) {
            // console.log('client-process')
        }

        if (
            nowPos > $('#expertise').offset().top - nh &&
            nowPos < $('#the-team').offset().top - nh
        ) {
            // console.log('expertise')
        }

        if (
            nowPos > $('#the-team').offset().top - nh &&
            nowPos < $('#contact-us').offset().top - nh
        ) {
            // console.log('the-team')
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
            // console.log('contact-us');
        }

        // if (nowPos > $('#service').offset().top && nowPos < $('#client-process').offset().top) {
        //     console.log('service');

        // }
    });
});