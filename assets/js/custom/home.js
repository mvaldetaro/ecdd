console.info('home');

(function(){
  $('.dropdown-toggle').dropdown();

  $("[data-toggle=popover]").each(function(i, obj) {

    $(this).popover({
      html: true,
      content: function() {
        var id = $(this).attr('id')
        return $('#popover-content-' + id).html();
      }
    });
  });
})();

/* Controla Componente Trabalhos dos Alunos */
(function(){
  var container = document.querySelector('.students-works');
  //console.log(container);
  if(container || container != null) {
    var mixer = mixitup('.students-works__content', {
      animation: {
        easing: "cubic-bezier(.55,0,.1,1)"
      },
      controls: {
        enable: false
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
    mixer.filter('.recente');
  }
})();

// Implementa toogle click
(function($) {
  $.fn.clickToggle = function(func1, func2) {
    var funcs = [func1, func2];
    this.data('toggleclicked', 0);
    this.click(function() {
      var data = $(this).data();
      var tc = data.toggleclicked;
      $.proxy(funcs[tc], this)();
      data.toggleclicked = (tc + 1) % 2;
    });
    return this;
  };
}(jQuery));

// Ação
$('.our-teachers .expand-link').clickToggle(
  function() {
    //primeiro click
    $('.our-teachers__content .item-invisible').removeClass('item-invisible').addClass('item-visible');
  },
  function() {
    //segundo click
    $('.our-teachers__content .item-visible').removeClass('item-visible').addClass('item-invisible');
  });



