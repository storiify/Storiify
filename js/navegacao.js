//Cuida do menu lateral esquerdo
$(".menu-esquerdo-toggle").click(function () {
    $(".menu-esquerdo").toggle();
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
    alert(this.value);
});