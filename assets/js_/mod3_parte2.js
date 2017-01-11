/*
 * PREGUNTA	:	P303
 UNIVERSO	:	Para todos los EEPP
 VERIFICACIÓN	:	Si (P303 = 1),  Pase a P304_1
 Si (P303 = 2),  Pase a P308
 PREGUNTA	:	P304_A_4
 UNIVERSO	:	Para todos los EEPP
 VERIFICACIÓN	:  Si (P304_3_A = “” AND (P304_1_A <> “” OR P304_2_A <> “” OR P304_4_A <> “”)),  Pase a P309
 Si (P304_3_A <> “” AND (P304_1_A = “” AND P304_2_A = “” AND P304_4_A = “”)),  Pase a P305
 Si (P304_3_A <> “” AND (P304_1 <> “” OR P304_2 <> “” OR P304_4 <> “”)),  Pase a P305
 
 PREGUNTA	:	P307
 UNIVERSO	:	Para todos los EEPP
 VERIFICACIÓN	:	Si (P307 <> “”),  Pase a P309
 */

$(function () {
    //TRIGGERS
    $('input[name="frm[P303]"]').trigger('change');


    flujo300_2();
    $('#frm_P306').trigger('change');
    $('#frm_P307').trigger('change');
    $('#frm_P308').trigger('change');
});


$('input[name="frm[P303]"]').change(function () {
    $('input[name="frm[P303]"]:checked').val() == 2 ? fn_hideDiv('303_308') : fn_showDiv('303_308');
});

$('#frm_P306').change(function () {
    $(this).val() == 4 ? fn_showDiv('div_P306_ESP') : fn_hideDiv('div_P306_ESP');
});
function flujo300_2() {
    var divs = 'div_P305,div_P306,div_P306_ESP,div_P307,div_P308,div_P308_ESP';
    var p3 = $('#frm_P304_3_A').val() || '';
    var p2 = $('#frm_P304_2_A').val() || '';
    var p1 = $('#frm_P304_1_A').val() || '';
    var p4 = $('#frm_P304_4_A').val() || '';
    (p3 == '' & (p1 != '' || p2 != '' || p4 != '')) ? fn_hideDiv(divs) : fn_showDiv(divs);
}
$('#frm_P307').change(function () {
    var divs = 'div_P308,div_P308_ESP';
    $(this).val() != '' ? fn_hideDiv(divs) : fn_showDiv(divs);
});
$('#frm_P308').change(function () {
    $(this).val() == 5 ? fn_showDiv('div_P308_ESP') : fn_hideDiv('div_P308_ESP');
});










