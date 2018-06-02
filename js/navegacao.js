//Cuida do menu lateral esquerdo - (antigog)
//$(".menu-esquerdo-toggle").click(function () {
//    $(".menu-esquerdo").toggle();
//});

//chama o menu e esconde ele quando clica em outro lugar que não seja ele mesmo
$(document).ready(function(){
	$(".menu-esquerdo-toggle").click(function(e){
	    var e=window.event||e;
        $(".menu-esquerdo").toggle();
	    e.stopPropagation();      
	  });
	$(document).click(function(e){
		if (!$(e.target).closest('.menu-esquerdo').length)$(".menu-esquerdo").hide();
	});
});

$(document).keyup(function(e) {
     if (e.keyCode == 27) { // escape key maps to keycode `27`
        $(".menu-esquerdo").hide();
    }
});

//Do botão de voltar para o topo
MostrarScroll();

window.onscroll = function () {
    MostrarScroll();
};

function MostrarScroll() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        document.getElementById("scroll-top").style.display = "block";
    } else {
        document.getElementById("scroll-top").style.display = "none";
    }
}

$("#scroll-top").click(function () {
    $("body").scrollTop(0);
});

//Muda a história selecionada
$('#selecao-nome-historia').on('change', function () {
    document.location = "?categoria=historia&acao=listarCategorias&id=" + this.value;
});
