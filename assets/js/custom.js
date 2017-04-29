console.info('home');

/* Controla Componente Trabalhos dos Alunos */
var mixer = mixitup('.students-works__content', {
  animation: {
    easing: "cubic-bezier(.55,0,.1,1)"
  },
  load: {
    filter: '.recente'
  },
  callbacks: {
    onMixClick: function(state, originalEvent) {
      $('.students-works__menu__item-current').removeClass().addClass('students-works__menu__item');
      $(this).parent().removeClass().addClass('students-works__menu__item-current');
   }
 }
});




console.info('modal');

console.info('scripts');

/**
* Slide Main Menu
*/
$(window).load(function() {
  $('#menu-icon-toggle').click(function() {
    $('.main-menu-mobile').slideToggle('2000', 'easeInOutQuad', function () {});
  });
});
