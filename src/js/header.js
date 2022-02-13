jQuery(function () {
   jQuery(window).on('scroll', function () {
      const targetPosition = jQuery(".l-header").height() + 300;
      var currentPosition = jQuery(this).scrollTop();
      if ( targetPosition < currentPosition ) {
         jQuery('.l-header').addClass('change-color');
     } else {
         jQuery('.l-header').removeClass('change-color');
     }
   });
});