$(document).ready(function () {

    //TextScroll
    $('.marquee').marquee({
        pauseOnHover: true,
        //duration in milliseconds of the marquee
        duration: 10000,
        //gap in pixels between the tickers
        gap: 50,
        //time in milliseconds before the marquee will start animating
        delayBeforeStart: 0,
        //'left' or 'right'
        direction: 'left',
        //true or false - should the marquee be duplicated to show an effect of continues flow
        duplicated: false
    });

    //TextArea autosize
    autosize(document.querySelectorAll('textarea'));

    //IChek - Aqui que muda a cor
    $('input').iCheck({
        checkboxClass: 'icheckbox_flat-red',
        radioClass: 'iradio_flat-red'
    });
    //Master CheckBox
    var mudadoPeloFilho = false;

    $('#ckbTodos').on('ifChecked', function () {
        $(".cBoxClass").iCheck('check');
        mudadoPeloFilho = false;
    });
    $('#ckbTodos').on('ifUnchecked', function () {
        if (!mudadoPeloFilho) {
            $(".cBoxClass").iCheck('uncheck');
            mudadoPeloFilho = false;
        }
    });
    $('.cBoxClass').on('ifUnchecked', function () {
        mudadoPeloFilho = true;
        $("#ckbTodos").iCheck('uncheck');
    });

    //IonRangeSlider
    $("#minmaxHostilidade").ionRangeSlider({
        from: 2,
        values: [
            "Inofensivos", "Pacíficos", "Neutros", "Ameaçadores", "Agressivos"
        ],
        type: 'single',
        hasGrid: false
    });
    $("#minMaxReputacao").ionRangeSlider({
        from: 2,
        values: [
            "Vergonhosos", "Desvalorizados", "Neutros", "Respeitados", "Glorificados"
        ],
        type: 'single',
        hasGrid: false
    });

    //Nestable List
    $('#nestable_list_1').nestable({
        group: 1
    })
        .on('change', updateOutput);

    // output initial serialised data
    updateOutput($('#nestable_list_1').data('output', $('#nestable_list_1_output')));

    function updateOutput(e) {
        var list = e.length ? e : $(e.target),
            output = list.data('output');
        if (window.JSON) {
            output.val(window.JSON.stringify(list.nestable('serialize'))); //, null, 2));
        } else {
            output.val('JSON browser support required for this demo.');
        }
    }

    //Input Incluir
    $.duplicate = function () {
        var body = $('body');
        body.off('duplicate');
        var templates = {};
        var settings = {};
        var init = function () {
            $('[data-duplicate]').each(function () {
                var name = $(this).data('duplicate');
                var template = $('<div>').html($(this).clone(true)).html();
                var options = {};
                var min = +$(this).data('duplicate-min');
                options.minimum = isNaN(min) ? 1 : min;
                options.maximum = +$(this).data('duplicate-max') || Infinity;
                options.parent = $(this).parent();

                settings[name] = options;
                templates[name] = template;
            });

            body.on('click.duplicate', '[data-duplicate-add]', add);
            body.on('click.duplicate', '[data-duplicate-remove]', remove);
        };

        function add() {
            var targetName = $(this).data('duplicate-add');
            var selector = $('[data-duplicate=' + targetName + ']');
            var target = $(selector).last();
            if (!target.length) target = $(settings[targetName].parent);
            var newElement = $(templates[targetName]).clone(true);

            if ($(selector).length >= settings[targetName].maximum) {
                $(this).trigger('duplicate.error');
                return;
            }
            target.after(newElement);
            $(this).trigger('duplicate.add');

            $('#incluirRaca').val(function (i, oldval) { //COLOCAR EM OUTRA FUNCAO
                return ++oldval;
            });
        }

        function remove() {
            var targetName = $(this).data('duplicate-remove');
            var selector = '[data-duplicate=' + targetName + ']';
            var target = $(this).closest(selector);
            if (!target.length) target = $(this).siblings(selector).eq(0);
            if (!target.length) target = $(selector).last();

            if ($(selector).length <= settings[targetName].minimum) {
                $(this).trigger('duplicate.error');
                return;
            }
            target.remove();
            $(this).trigger('duplicate.remove');

            $('#incluirRaca').val(function (i, oldval) { //COLOCAR EM OUTRA FUNCAO
                return --oldval;
            });
        }

        $(init);
    };

    $.duplicate();

});