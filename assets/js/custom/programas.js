/* Controla Componente Programas */
(function(){
  var container = document.querySelector('.programas__content');
  if(container || container != null) {
    var mixer_progr = mixitup('.programas__content', {
      animation: {
        easing: "cubic-bezier(.55,0,.1,1)"
      },
      callbacks: {
        onMixClick: function(state, originalEvent) {
          $('.programas__menu__item--current').removeClass().addClass('programas__menu__item');
          $(this).parent().removeClass().addClass('programas__menu__item--current');
        }
      }
    });
  }
})();

/**
* Grid Programas
*/
$(window).load(function() {
  $('.sh .card').hover(
    function() {
      $(this).addClass('hover');
    },
    function() {
      $(this).removeClass('hover');
    }
  );
});
