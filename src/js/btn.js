jQuery(function(){
  var scrollBtn = jQuery('.c-btn--scroll');
  scrollBtn.hide();
  //スクロールが100に達したらボタン表示
  jQuery(window).scroll(function () {
      if (jQuery(this).scrollTop() > 100) {
          scrollBtn.fadeIn();
      } else {
          scrollBtn.fadeOut();
      }
  });
  //スクロールしてトップ
  scrollBtn.click(function () {
      jQuery('body,html').animate({
          scrollTop: 0
      }, 500);
      return false;
  });
});