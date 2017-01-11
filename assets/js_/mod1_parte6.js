$(function () {
    //TRIGGERS
    $('input:radio[name="frm[P114]"]').trigger('change');
    $('#frm_P117').trigger('change'); 
    $('#frm_P118').trigger('change'); 
})


$('input:radio[name="frm[P114]"]').change(function(){
    $('#frm_P114_1').is(':checked') ? fn_showDiv('padre_16') : fn_hideDiv('padre_16');
});

$('#frm_P117').change(function(){
     $('#frm_P117').val()==7 ? fn_showDiv('div_P117_ESP') : fn_hideDiv('div_P117_ESP');
     $('#frm_P117').val()!='' ? fn_hideDiv('div_P118_ESP,div_P118') : fn_showDiv('div_P118_ESP,div_P118');
});

$('#frm_P118').change(function(){
     $('#frm_P118').val()!=13 ? fn_hideDiv('div_P118_ESP') : fn_showDiv('div_P118_ESP');
});

function reglaP114A_NO (){
    message='Contradicción: No puede registrar edad y que No recuerda';
    return ($('#frm_P114A_NO').is(':checked') && $('#frm_P114A').val()!='' )? false: true;
}

