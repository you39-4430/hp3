$(function () {
  //要素が画面の範囲に入ったらフェードイン ↓
  $(".js-fadeIn").css({
      opacity: "0"
  });
  $(window).scroll(function () {
    $(".js-fadeIn").each(function () {
        var hTop = $(this).offset().top;
        var hHeight = $(this).height();
      var hBottom = hTop + hHeight;
      var wTop = $(window).scrollTop() + 150;
      var wHeight = $(window).height();
      var wBottom = wTop + wHeight;
      if (hBottom <= wBottom) {
          $(".js-fadeIn").css({
              transition: "all 1s ease",
              opacity: "1" 
        });
      }
    });
  });
//要素が画面の範囲に入ったらフェードイン ↑

  $(".js-slide").slick({
    autoplay: true,
    autoplaySpeed: 3000,
    speed: 400,
    infinite: true,
    pauseOnHover: false,
  });

  //要素が画面の範囲に入ったら下からフェードイン ↓
  $(".js-underShow").css({
      opacity: "0",
      top: "100px",
    });
    $(window).scroll(function () {
        $(".js-underShow").each(function () {
      var hTop = $(this).offset().top;
      var hHeight = $(this).height();
      var hBottom = hTop + hHeight;
      var wTop = $(window).scrollTop() + 150;
      var wHeight = $(window).height();
      var wBottom = wTop + wHeight;
      if (hBottom <= wBottom) {
          $(this).css({ 
            transition: "all 0.5s ease",
            top: "0",
            opacity: "1" 
        });
      }
    });
  });
  //要素が画面の範囲に入ったら下からフェードイン ↑

  //要素が画面の範囲に入ったら右からフェードイン ↓
  $(".js-rightShow").css({
      opacity: "0",
      left: "100px",
    });
    $(window).scroll(function () {
        $(".js-rightShow").each(function () {
      var hTop = $(this).offset().top;
      var hHeight = $(this).height();
      var hBottom = hTop + hHeight;
      var wTop = $(window).scrollTop() + 150;
      var wHeight = $(window).height();
      var wBottom = wTop + wHeight;
      if (hBottom <= wBottom) {
          $(this).css({ 
            transition: "all 0.5s ease",
            left: "0",
            opacity: "1" 
        });
      }
    });
  });
  //要素が画面の範囲に入ったら右からフェードイン ↑
  //要素が画面の範囲に入ったら左からフェードイン ↓
  $(".js-leftShow").css({
      opacity: "0",
      right: "100px",
    });
    $(window).scroll(function () {
        $(".js-leftShow").each(function () {
      var hTop = $(this).offset().top;
      var hHeight = $(this).height();
      var hBottom = hTop + hHeight;
      var wTop = $(window).scrollTop() + 150;
      var wHeight = $(window).height();
      var wBottom = wTop + wHeight;
      if (hBottom <= wBottom) {
          $(this).css({ 
            transition: "all 0.5s ease",
            right: "0",
            opacity: "1" 
        });
      }
    });
  });
  //要素が画面の範囲に入ったら左からフェードイン ↑

  //ホバー時したから要素を表示 ↓
  $(".js-slideDown__point").hover(
    function () {
      $(this).find(".js-slideDown").slideDown();
    },
    function () {
      $(this).find(".js-slideDown").slideUp();
    }
    //ホバー時したから要素を表示 ↑
  );

  $(".js-hamburger").click(function() {
    $(".l-header__hamburger").toggleClass("open");
  });
});
