$(document).ready(function () {
    //Tratamento de todos os inputs do tipo MinMax 
    $(".input-minmax").each(function () {
        trazerMinMax(this);
    });
});

function trazerMinMax(objeto) {
    var valores = $(objeto).data("minmax-valores").split(",");
    var vlMaximo = 10;

    //Cria o MinMax no objeto atual, não modificar
    $(objeto).ionRangeSlider({
        type: 'single',
        min: 0,
        max: vlMaximo,
        from: $(objeto).prop('Value'),
        step: 1,
        values: valores,
        hasGrid: false
    });
	
	$(objeto).on("change", function () {
    var $this = $(this),
        value = $this.prop("value");
	
   $(objeto).attr('Value' + value);
});
	
}