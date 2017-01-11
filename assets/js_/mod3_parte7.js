$(document).ready(function() {
   
    $('input:radio[name="frm[P349]"]').trigger('change'); 
    $('#frm_P351').trigger('change');
    
});


$('input:radio[name="frm[P349]"]').change(function(){
    $('#frm_P349_2').is(':checked') ? fn_hideDiv('d_padre1') : fn_showDiv ('d_padre1');   
});

$('#frm_P351').change(function(){
    $(this).val() == 5 ? fn_showDiv('div_P351_ESP') : fn_hideDiv('div_P351_ESP');   
});



