jQuery(function () {
   jQuery(window).on('scroll', function () {
      const targetPosition = jQuery(".home>.l-header").height()  300;
      var currentPosition = jQuery(this).scrollTop();
      if ( targetPosition < currentPosition ) {
         jQuery('.l-header').addClass('change-color');
     } else {
         jQuery('.l-header').removeClass('change-color');
     }
   });
   var height = jQuery('.l-header').outerHeight();
   jQuery('main').css('padding-top', height);

   document.querySelector('.menu-btn').addEventListener('click', function () {
      jQuery('.menu').fadeToggle(600);
      document.querySelector('.menu').classList.toggle('is-active');
      if (this.getAttribute('aria-expanded') == 'false') {
         this.setAttribute('aria-expanded', true);
      } else {
         this.setAttribute('aria-expanded', false);
      }
   });
});


// カスタム投稿タイプnews
$(function () {
  const lists = $('.news-items li');
  $(document).on('click', '.category-list a', function () {
    // 絞り込みの対象を取得 (category-listの a の # 以降を切り取り)
    const target = $(this).attr('href').replace('#', '');
    // news-items を回す
    lists.each(function (e) {
      // 絞り込み対象 表示 非表示（news-itemsの li がtarget のクラスを持っているか）
      if ($(this).hasClass(target)) {
        $(this).show();
      } else {
        $(this).hide();
      }
    });
    return false;
  });
});
// ホーム（トップページ）
$(function () {
  const lists = $('.p-home__news-items li');
  //初期状態でリストを6個まで表示する
  lists.each(function (i) {
    if (i > 5) {
      $(this).hide();
    }
  });
  // カテゴリーを選んだ時の処理
  $(document).on('click', '.p-home__category-list a', function () {
    // 絞り込みの対象を取得 (p-home__category-listの a の # 以降を切り取り)
    const target = $(this).attr('href').replace('#', '');
    // p-home__news-items を回す
    lists.each(function (e) {
      // 絞り込み対象 表示 非表示（news-itemsの li がtarget のクラスを持っているか）
      if ($(this).hasClass(target)) {
        $(this).show();
      } else {
        $(this).hide();
      }
    });
    // 表示されている要素のみ回して、リストを6個まで表示する
    lists.filter(':visible').each(function (i) {
      if (i > 5) {
        $(this).hide();
      }
    });
    return false;
  });
});