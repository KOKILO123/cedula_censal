$(function () {
    //TRIGGERS
    $('input[name="frm[P122_NO]"]').trigger('change');
    $('input:radio[name="frm[P123_6]"]').trigger('change');
    $('input[name="frm[P124_NO]"]').trigger('change');
    $('input:radio[name="frm[P125_6]"]').trigger('change');
    $('#frm_P130').trigger('change');
    $('#frm_P132').trigger('change');
    $('#frm_P133').trigger('change');
    $('#frm_P134_7').trigger('change');
})

$('input[name="frm[P122_NO]"]').change(function () {
    $('#frm_P122_NO').is(':checked') ? fn_showDiv('padre_17') : fn_hideDiv('padre_17');
});

$('input:radio[name="frm[P123_6]"]').change(function () {
    $('#frm_P123_6_1').is(':checked') ? fn_showDiv('div_P123_6ESP') : fn_hideDiv('div_P123_6ESP');
});

$('input[name="frm[P124_NO]"]').change(function () {
    $('#frm_P124_NO').is(':checked') ? fn_showDiv('padre_18') : fn_hideDiv('padre_18');
});

$('input:radio[name="frm[P125_6]"]').change(function () {
    $('#frm_P125_6_1').is(':checked') ? fn_showDiv('div_P125_6ESP') : fn_hideDiv('div_P125_6ESP');
});

$('#frm_P130').change(function () {
    $('#frm_P130').val() != 1 ? fn_hideDiv('padre_19') : fn_showDiv('padre_19');
});

$('#frm_P132').change(function () {
    $('#frm_P132').val() != 9 ? fn_hideDiv('div_P132_ESP') : fn_showDiv('div_P132_ESP');
});

$('#frm_P133').change(function () {
    $('#frm_P133').val() != 1 ? fn_hideDiv('padre_20') : fn_showDiv('padre_20');
});

$('#frm_P134_7').change(function () {
    $('#frm_P134_7').val() != 1 ? fn_hideDiv('div_P134_7ESP') : fn_showDiv('div_P134_7ESP');
});


function reglaP123_5(val, obj) {
    message = 'Contradicción: No vive con persona adulta femenina, pero si con Madrastra, Abuela o Tía';
    return (val == 1 && ($('#frm_P123_1_1').is(':checked') || $('#frm_P123_2_1').is(':checked') || $('#frm_P123_3_1').is(':checked'))) ? false : true;
}

function reglaP122_NO(val, obj) {
    message = 'Contradicción: No puede registrar años y que Nunca vivió con su madre';
    return (val == 1 && $('#frm_P122').val() != '') ? false : true;
}

function reglaP124_NO(val, obj) {
    message = 'Contradicción: No puede registrar años y que Nunca vivió con su padre';
    return (val == 1 && $('#frm_P124').val() != '') ? false : true;
}

function reglaP125_5(val, obj) {
    message = 'Contradicción: No vive con persona adulta masculina, pero si con Padrastro, Abuelo o Tío';
    return (val == 1 && ($('#frm_P125_1_1').is(':checked') || $('#frm_P125_2_1').is(':checked') || $('#frm_P125_3_1').is(':checked'))) ? false : true;
}

function reglaP126(val, obj) {
    message = 'Contradicción: No vive con persona adulta, pero hay personas que asuman rol de padres';
    return (val != '' && $('#frm_P122_NO').is(':checked') && $('#frm_P124_NO').is(':checked')) ? false : true;
}

function reglaP127(val, obj) {
    message = 'Contradicción: No vive con persona adulta, pero hay personas que asuman rol de padres';
    return (val != '' && $('#frm_P122_NO').is(':checked') && $('#frm_P124_NO').is(':checked')) ? false : true;
}

function reglaP134_7(val, obj) {
    message = 'Contradicción: Menciona tener familiares alguna vez presos y luego No';
    return ($('#frm_P133').val() == 1 && $('#frm_P134_1').val() == 2 && $('#frm_P134_2').val() == 2 && $('#frm_P134_3').val() == 2 && $('#frm_P134_4').val() == 2 && $('#frm_P134_5').val() == 2 && $('#frm_P134_6').val() == 2 && $('#frm_P134_7').val() == 2) ? false : true;
}