//Cuida do menu lateral esquerdo
$(".menu-esquerdo-toggle").click(function () {
    $(".menu-esquerdo").toggle();
});

//Do botão de voltar para o topo
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction();};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("scroll-top").style.display = "block";
    } else {
        document.getElementById("scroll-top").style.display = "none";
    }
}

$("#scroll-top").click(function(){
    $("body").scrollTop(0);
});
