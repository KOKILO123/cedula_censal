$(document).ready(function() {
    $('input:radio[name="frm[P361]"]').trigger('change'); 
    $('#frm_P362').trigger('change');
    $('#frm_P363_6').trigger('change');
});

$('input:radio[name="frm[P361]"]').change(function(){
    $('#frm_P361_1').is(':checked') ? fn_showDiv('d_padre1') : fn_hideDiv ('d_padre1');   
});

$('#frm_P362').change(function(){
    $(this).val() == 8 ? fn_showDiv('div_P362_ESP') : fn_hideDiv ('div_P362_ESP') ;    
});

$('#frm_P363_6').change(function(){
    $('#frm_P363_6').is(':checked')==true ? fn_showDiv('div_P363_6ESP') : fn_hideDiv ('div_P363_6ESP') ;    
});


