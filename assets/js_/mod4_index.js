/*
 * 
 PREGUNTA	:	P402
 UNIVERSO	:	Para todos los EEPP
 VERIFICACIÓN	:	Si (P402 = 1),  Pase a P404
 Si (P402 > 1),  Pase a P403
 
 PREGUNTA	:	P406
 UNIVERSO	:	Para todos los EEPP
 VERIFICACIÓN	:	Si (P406 = 1),  Pase a P407
 Si (P406 > 1),  Pase a P416
 
 PREGUNTA	:	P407
 UNIVERSO	:	Para todos los EEPP
 VERIFICACIÓN	:	Si (P407 = 1),  Pase a P408
 Si (P407 > 1),  Pase a P409
 
 PREGUNTA	:	P414
 UNIVERSO	:	Para todos los EEPP
 VERIFICACIÓN	:	Si (P414 = 1),  Pase a P415_1
 Si (P414 > 1),  Pase a P416
 
 PREGUNTA	:	P417
 UNIVERSO	:	Para todos los EEPP
 VERIFICACIÓN	:	Si (P417 = 1),  Pase a P418_1
 Si (P417 > 1),  Pase a P419
 
 * 
 */
$(function () {
    $('#frm_P402').trigger('change');
    $('#frm_P406').trigger('change');
    $('#frm_P407').trigger('change');
    $('#frm_P414').trigger('change');
    $('#frm_P417').trigger('change');
});


$('#frm_P402').change(function () {
    $(this).val() == 1 ? fn_hideDiv('div_P403') : fn_showDiv('div_P403');
})

$('#frm_P406').change(function () {
    $(this).val() > 1 ? fn_hideDiv('P407_FINAL') : fn_showDiv('P407_FINAL');
})

$('#frm_P407').change(function () {
    $(this).val() > 1 ? fn_hideDiv('div_P408') : fn_showDiv('div_P408');
})

$('#frm_P414').change(function () {
    $(this).val() > 1 ? fn_hideDiv('P415') : fn_showDiv('P415');
})

$('#frm_P417').change(function () {
    $(this).val() > 1 ? fn_hideDiv('P418') : fn_showDiv('P418');
})


