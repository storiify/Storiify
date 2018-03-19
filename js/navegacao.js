$(".menu-esquerdo-toggle").click(function () {
    
    if ($(".menu-esquerdo").css("width") == "0px") {
        $(".menu-esquerdo").css("width", "20%");
    } else {
        $(".menu-esquerdo").css("width", "0");
    }
});
