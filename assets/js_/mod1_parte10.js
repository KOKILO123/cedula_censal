$(function () {
    //TRIGGERS
    $('input[name="frm[P139]"]').trigger('change');
    $('#frm_P140').trigger('change');
    $('input[name="frm[P141_13]"]').trigger('change');
})

$('input[name="frm[P139]"]').change(function(){
    $('#frm_P139_1').is(':checked') ? fn_showDiv('padre_22') : fn_hideDiv('padre_22');
});

$('#frm_P140').change(function(){
  $('#frm_P140').val()!=13 ? fn_hideDiv('div_P140_ESP') : fn_showDiv('div_P140_ESP');
});

$('input[name="frm[P141_13]"]').change(function(){
    $('#frm_P141_13').is(':checked') ? fn_showDiv('div_P141_13ESP') : fn_hideDiv('div_P141_13ESP');
});



