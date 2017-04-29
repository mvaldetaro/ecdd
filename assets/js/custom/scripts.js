console.info('scripts');

/**
* Slide Main Menu
*/
$(window).load(function() {
  $('#menu-icon-toggle').click(function() {
    $('.main-menu-mobile').slideToggle('2000', 'easeInOutQuad', function () {});
  });
});
