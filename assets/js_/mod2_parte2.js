/*
 * PREGUNTA	:	P217
 UNIVERSO	:	Para todos los EEPP
 VERIFICACIÓN	:	Si (P217 = 1),  Pase a P217A
 Si (P217 = 2),  Pase a P218
 
 PREGUNTA	:	P218
 UNIVERSO	:	Para todos los EEPP
 VERIFICACIÓN	:	Si (P216 = 1 AND P218 <> “”),  Pase a P301
 Si (P216 = 2 AND P218 <> “”),  Pase a P219
 
 PREGUNTA	:	P219
 UNIVERSO	:	Para todos los EEPP
 VERIFICACIÓN	:	Si (P219 = 1),  Pase a P219A
 Si (P219 > 1),  Pase a P220
 
 PREGUNTA	:	P220
 UNIVERSO	:	Para todos los EEPP
 VERIFICACIÓN	:	Si (P220 = 1),  Pase a P220A
 Si (P220 > 1),  Pase a P301
 */

$(function () {
    //TRIGGERS

    $('input[name="frm[P217]"]').trigger('change');
    $('input[name="frm[P218]"]').trigger('change');
    $('#frm_P219').trigger('change');
    $('#frm_P220').trigger('change');
    $('#frm_P222_1').trigger('change');
    $('#frm_P222_2').trigger('change');
    $('#frm_P222_3').trigger('change');
})


$('input[name="frm[P217]"]').change(function () {
    $('input[name="frm[P217]"]:checked').val() == 2 ? fn_hideDiv('div_P217A') : fn_showDiv('div_P217A');
});

$('input[name="frm[P218]"]').change(function () {
    var p216 = $('input[name="frm[P216]"]:checked').val();
    (p216 == 1 && this.value != '') ? fn_hideDiv('P219_301') : fn_showDiv('P219_301');
});

$('#frm_P219').change(function () {
    var divs = 'div_P219A,div_P219A_NO';
    $(this).val() > 1 ? fn_hideDiv(divs) : fn_showDiv(divs);
});

$('#frm_P220').change(function () {
    this.value > 1 ? fn_hideDiv('div_P220A,div_P220A_NO,221_301') : fn_showDiv('div_P220A,div_P220A_NO,221_301');
});

$('#frm_P222_1').change(function () {
    $(this).val() == 12 ? fn_showDiv('div_P222_1ESP') : fn_hideDiv('div_P222_1ESP');
});
$('#frm_P222_2').change(function () {
    $(this).val() == 12 ? fn_showDiv('div_P222_2ESP') : fn_hideDiv('div_P222_2ESP');
});
$('#frm_P222_3').change(function () {
    $(this).val() == 12 ? fn_showDiv('div_P222_3ESP') : fn_hideDiv('div_P222_3ESP');
});




