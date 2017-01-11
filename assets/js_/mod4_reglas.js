$(function () {
    $('#frm_P403_5').trigger('change');
    $('#frm_P404_MNRPTA').trigger('change');
})
function regla_P401_4() {
    var checkeds = $('#div_P401_1 :checked').length;
    var pase = true;
    if ($('#frm_P401_4').is(':checked') && checkeds > 1) {
        message = 'No puede registrar No recuerda y alguna otra alternativa';
        pase = false;
    } else if (checkeds == 0) {
        message = 'Debe haber registro de al menos una opción';
        pase = false;
    }
    return pase;
}
$('#frm_P403_5').change(function () {
    $(this).is(':checked') ? fn_showDiv('div_P403_5ESP') : fn_hideDiv('div_P403_5ESP');
});
$('#frm_P404_MNRPTA').change(function () {
    $(this).val() == 5 ? fn_showDiv('div_P404_MNRPTA_ESP') : fn_hideDiv('div_P404_MNRPTA_ESP');
});







