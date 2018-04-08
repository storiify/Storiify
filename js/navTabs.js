$(".tabs ul li a").on("click", function(){
    $("*").removeClass("aba-ativa");
    $(this).parent().addClass("aba-ativa");
    MoverLinhaVerde($(this));
});

$(".tabs ul li a.active").parent().addClass("aba-ativa");
$('.tabs ul li:last-child a').after('<div id="linha-verde">""</div>');
MoverLinhaVerde($(".aba-ativa a"));

function MoverLinhaVerde(linkSelecionado){
    var maxIndiceAbas = $(".nav-tabs li").length - 1;
    $('#linha-verde').css({"-webkit-transform":"translate(-" + (maxIndiceAbas - linkSelecionado.parent().index())*100 + "%,0px)"});
}