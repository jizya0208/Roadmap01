jQuery(function () {
   jQuery(window).on('scroll', function () {
      const targetPosition = jQuery(".home>.l-header").height() + 300;
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