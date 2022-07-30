$(function () {
  $(window).scroll(function () {
    $(".js-fadeIn").css({
        opacity: "0"
    });
    $(".js-fadeIn").each(function () {
        var hTop = $(this).offset().top;
        var hHeight = $(this).height();
      var hBottom = hTop + hHeight;
      var wTop = $(window).scrollTop();
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
      var wTop = $(window).scrollTop();
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
});
