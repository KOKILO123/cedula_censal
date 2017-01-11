$(function () {
    //TRIGGERS
    $('input:radio[name="frm[P111]"]').trigger('change');
})

$('input:radio[name="frm[P111]"]').change(function(){
    $('#frm_P111_1').is(':checked') ? fn_showDiv('div_P112') : fn_hideDiv('div_P112') ;
});

