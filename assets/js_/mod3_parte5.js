/*
 * 
 PREGUNTA	:	P315
 UNIVERSO	:	Para todos los EEPP
 VERIFICACIÓN	:	Si (P315 <> 8),  Pase a P316
 Si (P315 = 8),  Pase a P317
 
 PREGUNTA	:	P317
 UNIVERSO	:	Para todos los EEPP
 VERIFICACIÓN	:	Si (P317 = 1),  Pase a P318
 Si (P317 = 2),  Pase a P401_1
 */

$(function () {
    //TRIGGERS
    $('#frm_P315').trigger('change');
    $('#frm_P316').trigger('change');
});

$('#frm_P315').change(function () {
    this.value == 8 ? fn_hideDiv('div_P316,div_P316_ESP') : fn_showDiv('div_P316,div_P316_ESP');
})

$('#frm_P315').change(function () {
    $(this).val() == 9 ? fn_showDiv('div_P315_ESP') : fn_hideDiv('div_P315_ESP');
});
$('#frm_P316').change(function () {
    $(this).val() == 9 ? fn_showDiv('div_P316_ESP') : fn_hideDiv('div_P316_ESP');
});
