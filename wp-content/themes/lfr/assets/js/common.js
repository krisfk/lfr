$(function () {
  var animating_scroll = false;
  $('.top-menu-ul a').click(function (e) {
    // e.preventDefault(0);
    $('.top-menu-ul a').removeClass('active');
    $(this).addClass('active');
  });

  $('.top-menu-ul li a').click(function () {
    $('body').removeClass('show-mobile-menu');
    $('.mobile-menu-btn').removeClass('open');
    animating_scroll = true;
    var goto = $(this).attr('rel');
    var nh = $('.fixed-navigation').height();
    // console.log('#' + goto);
    $('html, body').animate(
      { scrollTop: $('#' + goto).offset().top - nh },
      200
    );
    setTimeout(() => {
      animating_scroll = false;
      update_nav_pos();
    }, 1000);
  });

  function update_nav_pos() {
    var nowPos = $(document).scrollTop();

    var nh = $('.fixed-navigation').height();
    console.log(animating_scroll);
    if (!animating_scroll) {
      if (nowPos <= $('#services').offset().top - nh) {
        $('.top-menu-ul a').removeClass('active');
      }

      if (
        nowPos > $('#services').offset().top - nh - 10 &&
        nowPos <= $('#client-process').offset().top - nh
      ) {
        $('.top-menu-ul a').removeClass('active');
        $('.top-menu-ul a.services').addClass('active');
      }

      if (
        nowPos > $('#client-process').offset().top - nh &&
        nowPos <= $('#expertise').offset().top - nh
      ) {
        $('.top-menu-ul a').removeClass('active');
        $('.top-menu-ul a.client-process').addClass('active');
      }

      if (
        nowPos > $('#expertise').offset().top - nh &&
        nowPos <= $('#the-team').offset().top - nh - 10
      ) {
        $('.top-menu-ul a').removeClass('active');
        $('.top-menu-ul a.expertise').addClass('active');
      }

      if (
        nowPos > $('#the-team').offset().top - nh - 10 &&
        nowPos <= $('#contact-us').offset().top - nh
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
      }
    }
  }
  $(window).scroll(function () {
    update_nav_pos();
  });

  $('#nav-icon3').click(function () {
    $(this).toggleClass('open');
    $('body').toggleClass('show-mobile-menu');
  });
});
