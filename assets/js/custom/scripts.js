console.info('scripts');

(function(){
  $(document).ready(function(){
    if (/Android|BlackBerry|iPhone|iPad|iPod|webOS/i.test(navigator.userAgent) === false) {
      var didScroll;
      var lastScrollTop = 0;
      var delta = 5;
      var navbarHeight = $('.bar-super').outerHeight();
      //console.log(navbarHeight);

      $(window).scroll(function(event){
        didScroll = true;
      });

      setInterval(function() {
        if (didScroll) {
          hasScrolled();
          didScroll = false;
        }
      }, 250);

      function hasScrolled() {
        var st = $(this).scrollTop();
        // Make sure they scroll more than delta
        if(Math.abs(lastScrollTop - st) <= delta)
            return;

        // If they scrolled down and are past the navbar, add class .nav-up.
        // This is necessary so you never see what is "behind" the navbar.
        if (st > lastScrollTop && st > navbarHeight){
            // Scroll Down
            $('.bar-super').removeClass('nav-down').addClass('nav-up');
        } else {
          // Scroll Up
          if(st + $(window).height() < $(document).height()) {
              $('.bar-super').removeClass('nav-up').addClass('nav-down');
          }
        }
        lastScrollTop = st;
      }
    }​
  });
})();

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
* Responsive slider Turma
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
  //console.log($(this).width());
  if($(this).width() < 768){
    $('.btn-lg').removeClass('btn-lg btn-lg-wide').addClass('btn-wide');
  }
});

/**
* Tabs Admissão
*/
$(function () {
  var target;
  var visible = "block";
  var invisible = "none";
  $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
    target = $(e.target).attr("href"); // activated tab
    if(target == '#admissao-mba-e-pos-graduacao' || target == '#admissao-formacoes'){
      $('#financiamentos, #aproveitamento').css('display', invisible);
      if(target == '#admissao-mba-e-pos-graduacao'){
        $('.enem, .prouni').css('display', invisible);
      } else {
        $('.enem, .prouni').css('display', visible);
      }
    } else if(target == '#admissao-graduacoes'){
      $('#financiamentos, #aproveitamento, .enem, .prouni').css('display', visible);
    }
  });
});

/**
* Tool Tip Captcha
*/
$(function () {
  //console.log($('.math-quiz'));
  $('.help').attr('title', 'Um teste para verificar se você é ou não um robô.');
  $('.help').tooltip();
});

$(document).ready(function(){
  $('.calendar__content__list').bxSlider({
    mode: 'vertical',
    minSlides: 3,
    infiniteLoop: false,
    adaptiveHeight: true,
    pager: false,
    prevSelector: '.calendar__nav',
    nextSelector: '.calendar__nav',
    prevText: '<span>Up</span>',
    nextText: '<span>Down</span>',
    slideMargin: 16,
    onSliderLoad: function(){
      $('.bx-next').addClass('arrow_down').attr('role','button');
      $('.bx-prev').addClass('arrow_up').attr('role','button');
    }
  });
});

// Formulários - Integração com Talisma utilizando eventos do plugin contact form 7

$(function () {
  var wpcf7Elm = document.querySelector( '.wpcf7' );
  console.log(wpcf7Elm);

  wpcf7Elm.addEventListener( 'wpcf7submit', function( event ) {
    console.log("Evento de Envio");
    fbq('track', 'Lead');
    ga('send','event','Forms','Click');
  }, false );

  wpcf7Elm.addEventListener( 'wpcf7invalid', function( event ) {
    console.log( "Campos invalidos!" );
  }, false );

  wpcf7Elm.addEventListener( 'wpcf7mailsent', function( event ) {
    // Função de envio de mensagem para o Talisma [talisma.js]
    sendAdmissao();
    console.log("Enviado com sucesso!");
  }, false );

  wpcf7Elm.addEventListener( 'wpcf7mailfailed', function( event ) {
    console.log( "Falha no envio!" );
  }, false );

});
