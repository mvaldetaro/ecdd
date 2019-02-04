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




//console.info('modal');

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

  var flds = {
    id:-1,
    nome: "nome",                 //"nome" = nome e id do campo no formulário.
    email:"email",                //"email" = nome e id do campo no formulário.
    datanascimento: "dtnascimento", //"nascimento" = nome e id do campo no formulário.
    telefone: "tel",            //"phonec" = nome e id do campo no formulário.
    uf: "uf",                 //"estadoc" = nome e id do campo no formulário.
    site:"ECDD",               //"XXXXXXX" = nome do site. exemplo: ESTI, ADS...
    eventotalisma: "evento",       //"evento" = nome e id do campo no formulário
    form:"info",             //"formulario" = nome e id do formulário

    //Campos obrigatórios para o formulário. Usar os nomes acima.
    obrigatorios: {
      novidades: ["nome", "email"],
      informacoes: ["nome", "email", "telefone", "eventotalisma", "uf"]
    }
  };

  //Função chamada no botão de enviar do Formulário
  window.onload = function() {
    $(".wpcf7-submit").onclick = function() {
      console.log("objeto flds");
      console.log(flds);
      //return talisma.informacoes.insert(flds);
    }
  };

  var wpcf7Elm = document.querySelector( '.wpcf7' );
  console.log(wpcf7Elm);

  wpcf7Elm.addEventListener( 'wpcf7submit', function( event ) {
    console.log("Evento de Envio");
    fbq('track', 'Lead');
    ga('send','event','Forms','Click');
    console.log("objeto flds");
    console.log(flds);
    console.log(sendAdmissao());
    console.log(talisma.informacoes.insert(flds));
  }, false );

  wpcf7Elm.addEventListener( 'wpcf7invalid', function( event ) {
    console.log( "Campos invalidos!" );
  }, false );

  wpcf7Elm.addEventListener( 'wpcf7mailsent', function( event ) {
    // Função de envio de mensagem para o Talisma [talisma.js]
    //sendAdmissao();
    console.log("Enviado com sucesso!");
  }, false );

  wpcf7Elm.addEventListener( 'wpcf7mailfailed', function( event ) {
    console.log( "Falha no envio!" );
  }, false );

});

sendNews = function() {
	jQuery("#newsletter").slideToggle("fast");
	ajax("/iservice/soapcall.php?f=createcontact&nome="+_$("nameNews").value+"&email="+_$("emailNews").value+"&escola="+_$("schoolNews").value,
	"respostaSendNews",
	"",
	"",
	false,
	"",
	"");

	return false;
}

getDataContato = function() {
	ajax("/iservice/soapcallgetinstances.php?email="+_$("emailNews").value,
	"respostaDataContato",
	"",
	"",
	false,
	"",
	"");

	return false;
}

updateData = function(idcontato) {
	ajax("/iservice/soapcallupdate.php?f=updateproperty&idcontato="+idcontato+"&escola="+_$("schoolNews").value,
	"respostaUpdateData",
	"",
	"",
	false,
	"",
	"");

	return false;
}

respostaSendNews = function(resposta) {
	//console.log(resposta);
	if (resposta=="0") {
		console.log("Cadastro efetuado com sucesso!");
	} else {
		//console.log("Cadastro existente!");
		//buscar id contato
		getDataContato();
	}
}

respostaDataContato = function(resposta) {
	if (resposta=="-1") {
		console.log("Falha! Tente novamente.");
	} else {
		//tentar atualizar
		//resposta traz o idcontato
		updateData(resposta);
	}
}

respostaUpdateData = function(resposta) {
	//console.log(resposta);
	if (resposta=="0") {
		console.log("Cadastro efetuado com sucesso!");
	} else {
		console.log("Falha! Tente novamente.");
	}
}


sendAdmissao = function() {
	console.log("/iservice/gravartalismalog.php?nome="+_$("nome").value+"&email="+_$("email").value+"&evento="+_$("evento").value+"&phone="+_$("tel").value+"&data="+_$("dtnascimento").value+"&estado="+_$("uf").value);

	ajax("/iservice/gravartalismalog.php?nome="+_$("nome").value+"&email="+_$("email").value+"&evento="+_$("evento").value+"&phone="+_$("tel").value+"&data="+_$("dtnascimento").value+"&estado="+_$("uf").value,
	"respostaSendAdmissao",
	"",
	"",
	false,
	"",
	"");

	return false;

}

respostaSendAdmissao = function(resposta) {
	console.log(resposta);
	//_$("formadmissao").reset();
	if (resposta == 0) {
		console.log("Solicitação efetuada com sucesso.\nAguarde e-mail com as informações desejadas.");
	} else {
		// console.log("Erro no cadastro. Favor tentar novamente.");
		// Erro no envio para o Talisma
		console.log("Erro no envio. Favor tentar novamente.");
	}
}

ajax = function(url,funcaotratamento,localimagem, callback, respostaXML, funcaoEstado, funcaoErro) {
	var valorRecebido;
	var requisicao;
	var contador = 0;
	var naoSuportaAjax = true;
	var tiposRequisicao = Array(
							"XMLHttpRequest()",
							"ActiveXObject('Msxml2.XMLHTTP')",
							"ActiveXObject('Microsoft.XMLHTTP')"
							);
	do {
		try {
			eval("requisicao = new " + tiposRequisicao[contador]);

			naoSuportaAjax = false;
		} catch (e) {
			contador++;
			if (contador == tiposRequisicao.length) {
				exibeMensagem(1, "mensagem");
				return false;
			}
		}
	} while(naoSuportaAjax)


	requisicao.onreadystatechange = function () {
		if (localimagem!="" && localimagem!=undefined) {
			_$(localimagem).innerHTML = "<img id='imagemCarregando' src='imagens/loading.gif' height='14' width='14' alt='' border='0'>";
		}
	    //console.log("--"+requisicao.readyState+"--"+requisicao.status+"--");
		if (funcaoEstado!="" && funcaoEstado!=undefined) {
			eval(funcaoEstado+"("+requisicao.readyState+")");
		}

		if (requisicao.readyState == 4 && requisicao.status == 200) {
			if (respostaXML) {
				valorRecebido = requisicao.responseXML;
			} else {
				valorRecebido = requisicao.responseText;
			}
			//console.log("==>"+valorRecebido);
			eval(funcaotratamento+"(valorRecebido)");

			if (callback!="" && callback!=undefined) {
				eval(callback+"()");
			}
		} else if (requisicao.readyState == 4 && requisicao.status != 200) {
			if (funcaoErro!="" && funcaoErro!=undefined) {
				eval(funcaoErro+"(requisicao.status)");
			}
		}
	}

	url+= (url.indexOf("?")==-1) ? "?" : "&";
	url+= "sid="+parseInt(Math.random()*99999999);

	requisicao.open("GET",url, true);
	requisicao.send(null);
}

sendInformacoes = function() {
	var erro = false;
	var campos = new Array("nome", "email", "telefone", "datanasc");

	for (i = 0; i < campos.length; i++) {
		if (_$(campos[i]).value=="") {
			erro = true;
		}
	}

	if (erro) {
		console.log("Todos os campos devem ser preenchidos");
	}

	return !erro;
}

_$ = function(obj) {
    return document.getElementById(obj);
}
