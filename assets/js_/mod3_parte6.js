$(function () {
    //TRIGGERS
    $('input[name="frm[P317]"]').trigger('change');
    $('#frm_P318').trigger('change');
    $('#frm_P319_6').trigger('change');
})

/*
 * PREGUNTA	:	P317
 UNIVERSO	:	Para todos los EEPP
 VERIFICACIÓN	:	Si (P317 = 1),  Pase a P318
 Si (P317 = 2),  Pase a P401_1
 */
$('#frm_P318').change(function () {
    $(this).val() == 8 ? fn_showDiv('div_P318_ESP') : fn_hideDiv('div_P318_ESP');
});
$('#frm_P319_6').change(function () {
    $(this).is(':checked') ? fn_showDiv('div_P319_6ESP') : fn_hideDiv('div_P319_6ESP');
});

$('input[name="frm[P317]"]').change(function () {
    $('input[name="frm[P317]"]:checked').val() == 2 ? fn_hideDiv('318_400') : fn_showDiv('318_400');
});