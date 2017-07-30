console.info('scripts');

/**
* Slide Main Menu
*/
$(window).load(function() {
  $('#menu-icon-toggle').click(function() {
    $('.main-menu-mobile').slideToggle('2000', 'easeInOutQuad', function () {});
  });
});

/**
* Permite interação com o iframe do Google Maps
*/
$('.map .map__content')
  .click(function(){
    $(this).find('iframe').addClass('actived')
  })
  .mouseleave(function(){
    $(this).find('iframe').removeClass('actived')
  });

/**
* Resonpsive slider Turma
*/
jQuery(document).ready(function($){
  $('.crsl-proxima').carousel();
});

/**
* Resonpsive slider Matriz curricular
*/

jQuery(document).ready(function($){
  $('.crsl-curriculo').carousel({visible: 3, itemMargin: 30, itemMinWidth: 280});
});

/**
* Resonpsive slider Fundamentos do curso curricular
*/

jQuery(document).ready(function($){
  $('.crsl-fundamentos').carousel({visible: 3, itemMargin: 30, itemMinWidth: 280});
});

/**
* Resonpsive slider Matriz MBA e POS
*/
jQuery(document).ready(function($){
  $('.crsl-blocos').carousel({visible: 2, itemMargin: 30, itemMinWidth: 280});
});
/**
* Galeria Trabalho dos alunos
*/
$(function () {
  $('.galeria__content__list__item a').fluidbox();
});

/**
* Animar ao rolar a página
*/

$(function () {
  var wow = new WOW(
    {
      boxClass:     'wow',      // animated element css class (default is wow)
      animateClass: 'animated', // animation css class (default is animated)
      offset:       15,          // distance to the element when triggering the animation (default is 0)
      mobile:       false,       // trigger animations on mobile devices (default is true)
    }
  );
  //wow.init();
});

/**
* add hvr class on menus
*/
$(function () {
  $('#menu-pages li a, #menu-menu-principal li a').addClass('hvr-underline-from-left');
});

/**
* Se mobile remove tamanho do botão
*/
$(window).load(function() {
  console.log($(this).width());
  if($(this).width() < 768){
    $('.btn-lg').removeClass('btn-lg btn-lg-wide').addClass('btn-wide');
  }
});
