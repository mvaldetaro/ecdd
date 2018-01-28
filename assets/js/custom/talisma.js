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
