$(function () {
    //TRIGGERS
    $('input:radio[name="frm[P113_1]"]').trigger('change');
    $('input:radio[name="frm[P113_2]"]').trigger('change');
    $('input:radio[name="frm[P113_3]"]').trigger('change');
    $('input:radio[name="frm[P113_4]"]').trigger('change');
    $('input:radio[name="frm[P113_5]"]').trigger('change');
    $('input:radio[name="frm[P113_6]"]').trigger('change');
 })
 
$('input:radio[name="frm[P113_1]"]').change(function(){
    $('#frm_P113_1_1').is(':checked') ? fn_showDiv('div_P113A_1'): fn_hideDiv('div_P113A_1') ;
})

$('input:radio[name="frm[P113_2]"]').change(function(){
    $('#frm_P113_2_1').is(':checked') ? fn_showDiv('div_P113A_2'): fn_hideDiv('div_P113A_2') ;
})

$('input:radio[name="frm[P113_3]"]').change(function(){
    $('#frm_P113_3_1').is(':checked') ? fn_showDiv('div_P113A_3'): fn_hideDiv('div_P113A_3') ;
})

$('input:radio[name="frm[P113_4]"]').change(function(){
    $('#frm_P113_4_1').is(':checked') ? fn_showDiv('div_P113A_4'): fn_hideDiv('div_P113A_4') ;
})

$('input:radio[name="frm[P113_5]"]').change(function(){
    $('#frm_P113_5_1').is(':checked') ? fn_showDiv('div_P113A_5'): fn_hideDiv('div_P113A_5') ;
})

$('input:radio[name="frm[P113_6]"]').change(function(){
    $('#frm_P113_6_1').is(':checked') ? fn_showDiv('div_P113A_6'): fn_hideDiv('div_P113A_6') ;
})


function reglaP113A_6(val, obj){
    if (val==''){
     message='Debe registrar información en Especifique'   
       return false;
    } else{
        message='Verificar la razón de todos los valores en P113A son iguales'
        return ( ( $('#frm_P113A_1').val()==1 && $('#frm_P113A_2').val()==1 && $('#frm_P113A_3').val()==1 && $('#frm_P113A_4').val()==1 && $('#frm_P113A_5').val()==1 && $('#frm_P113A_6').val()==1 ) || ($('#frm_P113A_1').val()==2 && $('#frm_P113A_2').val()==2 && $('#frm_P113A_3').val()==2 && $('#frm_P113A_4').val()==2 && $('#frm_P113A_5').val()==2 && $('#frm_P113A_6').val()==2 ) || ($('#frm_P113A_1').val()==3 && $('#frm_P113A_2').val()==3 && $('#frm_P113A_3').val()==3 && $('#frm_P113A_4').val()==3 && $('#frm_P113A_5').val()==3 && $('#frm_P113A_6').val()==3 ) ) ? false: true;
    }
}

