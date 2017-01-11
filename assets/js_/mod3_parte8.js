$(document).ready(function() {
    $('#frm_P353_1').trigger('change');
    $('#frm_P353_2').trigger('change');
    $('#frm_P353_3').trigger('change');
    $('#frm_P353_4').trigger('change');
    $('#frm_P353_5').trigger('change');
    $('#frm_P353_6').trigger('change');
    $('#frm_P354_8').trigger('change');
    $('#frm_P357').trigger('change');
    $('#frm_P358').trigger('change');
    $('#frm_P359').trigger('change');
    $('#frm_P354_3').trigger('change');
});


$('#frm_P353_1').change(function(){
    $(this).val() == 1 ? fn_showDiv('div_P353A_1') & fn_showDiv('div_P353B_1') : fn_hideDiv('div_P353A_1') & fn_hideDiv('div_P353B_1') ;   
});

$('#frm_P353_2').change(function(){
    $(this).val() == 1 ? fn_showDiv('div_P353A_2') & fn_showDiv('div_P353B_2') : fn_hideDiv('div_P353A_2') & fn_hideDiv('div_P353B_2') ;   
});

$('#frm_P353_3').change(function(){
    $(this).val() == 1 ? fn_showDiv('div_P353A_3') & fn_showDiv('div_P353B_3') : fn_hideDiv('div_P353A_3') & fn_hideDiv('div_P353B_3') ;   
});

$('#frm_P353_4').change(function(){
    $(this).val() == 1 ? fn_showDiv('div_P353A_4') & fn_showDiv('div_P353B_4') : fn_hideDiv('div_P353A_4') & fn_hideDiv('div_P353B_4') ;   
});

$('#frm_P353_5').change(function(){
    $(this).val() == 1 ? fn_showDiv('div_P353A_5') & fn_showDiv('div_P353B_5') : fn_hideDiv('div_P353A_5') & fn_hideDiv('div_P353B_5') ;   
});

$('#frm_P353_6').change(function(){
    $(this).val() == 1 ? fn_showDiv('div_P353_6ESP') & fn_showDiv('div_P353A_6') & fn_showDiv('div_P353B_6') : fn_hideDiv('div_P353_6ESP') & fn_hideDiv('div_P353A_6') & fn_hideDiv('div_P353B_6') ;   
});

$('#frm_P354_8').change(function(){
    $(this).val() == 1 ? fn_showDiv('div_P354_8ESP') : fn_hideDiv('div_P354_8ESP') ;   
});

$('#frm_P357').change(function(){
    $(this).val() == 4 ? fn_showDiv('div_P357_ESP') : fn_hideDiv('div_P357_ESP') ;   
});

$('#frm_P358').change(function(){
    $(this).val() == 7 ? fn_showDiv('div_P358_ESP') : fn_hideDiv('div_P358_ESP') ;   
});

$('#frm_P359').change(function(){
    $(this).val() == 7 ? fn_showDiv('div_P359_ESP') : fn_hideDiv('div_P359_ESP') ;   
});

$('#frm_P354_3').change(function(){
    if ($(this).val() == 1 ){
        fn_showDiv('d_padre1');
        fn_hideDiv('d_padre2')
    }
    else if ($(this).val() == 2 ){
        fn_showDiv('d_padre2');
        fn_hideDiv('d_padre1')
    }
});



function regla307(){
    message='No realiza actividades deportivas pero si pasa mayor parte del tiempo haciendo deporte';
    return ($('#frm_P359').val()=='4' && $('#frm_P354_1').val()=='2' )? false: true;
}