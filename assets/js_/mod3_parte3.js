/*
 * PREGUNTA	:	P309
 UNIVERSO	:	Para todos los EEPP
 VERIFICACIÓN	:	Si (P309 = 1),  Pase a P309A
 Si (P309 > 1),  Pase a P312
 
 PREGUNTA	:	P310
 UNIVERSO	:	Para todos los EEPP
 VERIFICACIÓN	:	Si (P310 = 1),  Pase a P311_1
 Si (P310 = 2),  Pase a P312
 */
$(function () {
    //TRIGGERS
    $('#frm_P309').trigger('change');
    $('input[name="frm[P310]"]').trigger('change');
    $('#frm_P311_11').trigger('change');
})

$('#frm_P309').change(function () {
    $(this).val() > 1 ? fn_hideDiv('309_312') : fn_showDiv('309_312');
});

$('input[name="frm[P310]"]').change(function () {
    $('input[name="frm[P310]"]:checked').val() == 2 ? fn_hideDiv('310_312') : fn_showDiv('310_312');
});


$('#frm_P311_11').change(function () {
    $(this).is(':checked') ? fn_showDiv('div_P311_11ESP') : fn_hideDiv('div_P311_11ESP');
});
