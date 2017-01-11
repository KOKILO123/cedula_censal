$(function () {
    //TRIGGERS
    $('#frm_P104_1').trigger('change'); 
    $('input:radio[name="frm[P104_4_CCEE]"]').trigger('change');
    $('#frm_P105').trigger('change'); 

})

$('#frm_P104_1').change(function () {
      $('#frm_P104_1').val()=='1'  ? fn_hideDiv('div_P106') : fn_showDiv('div_P106');
});

$('input:radio[name="frm[P104_4_CCEE]"]').change(function(){
    (($('#frm_P104_4_CCEE_1').is(':checked') || $('#frm_P104_4_CCEE_2').is(':checked') ) && $('#frm_P104_1').val()>=6 )? fn_hideDiv('div_P105') : fn_showDiv('div_P105');
});

$('#frm_P105').change(function () {
     (   $('#frm_P105').val()!='' && $('#frm_P104_1').val()!='5' ) ? fn_hideDiv('div_P106') : fn_showDiv('div_P106');
     $('#frm_P105').val()!='9'? fn_hideDiv('div_P105_ESP') : fn_showDiv('div_P105_ESP');
});


function reglaP104_1(val, obj){
    
    message='No debe haber información en esta pregunta, debe terminar el capítulo';
    // (P101 = 10 AND (P103_1 = 1 AND P103_3 = 1) AND P104_1 <> “”), 
    var string = ''; 
    var P101 = ''; 
    var P103_1 = '';
    var P103_3 = '';
    $.ajax({ async:false, 
             url: base_url + 'index.php/mod1Controller/getCampos', 
             type: 'POST', 
             data: {campos: string, 
                    INTERNO_ID: $('#frm_INTERNO_ID').val(), 
                    CUEST_NRO: $('#frm_CUEST_NRO').val()}, 
             success: function (data, textStatus, jqXHR) { 
                    data = JSON.parse(data); 
                    P101=data[0].P101;
                    P103_1=data[0].P103_1;
                    P103_3=data[0].P103_3;
                    } 
            })
    if ( P101 == 10 && (P103_1 == 1 && P103_3 == 1) && val != '' ){
        return false;
    }
    else {
        return true;
    }
}

function reglaP104_4_CCEE(val, obj){
    var P104_1=$('#frm_P104_1').val();
    var P104_2_ANIO=$('#frm_P104_2_ANIO').val();
    var P104_3_GRADO=$('#frm_P104_3_GRADO').val();
    
    if (P104_1 == '1' && (P104_2_ANIO!='' || P104_3_GRADO!='' || val!='' )){
        message='Sin nivel no corresponde registrar Año, Grado o Centro de Estudios';
        return false;
    } 
    else {
        if (P104_3_GRADO != '' && (P104_1=='2' || P104_1>'4' )){
            message='Solamente primaria corresponde registrar Grado';
            return false;
        }
        else {
            return true;
        }
    }
}

function reglaP106(val, obj){
    message='Si en P104 registra nivel igual o mayor a Secundaria, entonces debe responder P106';
    return ( $('#frm_P104_1').val()>=5 && val=='')?  false : true; 
}


