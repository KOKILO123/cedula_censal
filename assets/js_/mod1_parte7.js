$(function () {
    //TRIGGERS
    $('#frm_P120').trigger('change'); 
    $('#frm_P121').trigger('change'); 
    $('#frm_P121A').trigger('change'); 
    
})


$('#frm_P120').change(function(){
     $('#frm_P120').val()!=8 ? fn_hideDiv('div_P120_ESP') : fn_showDiv('div_P120_ESP');
     
    var string = 'PAIS_NAC'; 
    var pais=''
    $.ajax({ async:false, 
             url: base_url + 'index.php/caratulaController/getCampos', 
             type: 'POST', 
             data: {campos: string, 
                    INTERNO_ID: $('#frm_INTERNO_ID').val(), 
                    CUEST_NRO: $('#frm_CUEST_NRO').val()}, 
             success: function (data, textStatus, jqXHR) { 
                    data = JSON.parse(data); 
                    pais=data[0].PAIS_NAC;
                    console.log(pais);
                    } 
            })
    if (pais != 'PERU'){
        fn_hideDiv('div_P121');
    } else{
        fn_showDiv('div_P121')
    }
});

$('#frm_P121').change(function(){
     $('#frm_P121').val()!=1 ? fn_hideDiv('div_P121A') : fn_showDiv('div_P121A');
});

$('#frm_P121A').change(function(){
     $('#frm_P121A').val()!=3 ? fn_hideDiv('div_P121A_ESP') : fn_showDiv('div_P121A_ESP');
});

function reglaP120(val, obj){
    message='No corresponden respuestas para persona nacida fuera de Perú';
    var string = 'PAIS_NAC'; 
    var pais = ''; 
    $.ajax({ async:false, 
             url: base_url + 'index.php/caratulaController/getCampos', 
             type: 'POST', 
             data: {campos: string, 
                    INTERNO_ID: $('#frm_INTERNO_ID').val(), 
                    CUEST_NRO: $('#frm_CUEST_NRO').val()}, 
             success: function (data, textStatus, jqXHR) { 
                    data = JSON.parse(data); 
                    pais=data[0].PAIS_NAC;
                    } 
            })
    if (pais!='PERU' && val<7){
        return false;
    }
    else {
        return true;
    }
}

function reglaP120(val, obj){
    message='No corresponde responder esta pregunta para persona nacida fuera de Perú';
    var string = 'PAIS_NAC'; 
    var pais = ''; 
    $.ajax({ async:false, 
             url: base_url + 'index.php/caratulaController/getCampos', 
             type: 'POST', 
             data: {campos: string, 
                    INTERNO_ID: $('#frm_INTERNO_ID').val(), 
                    CUEST_NRO: $('#frm_CUEST_NRO').val()}, 
             success: function (data, textStatus, jqXHR) { 
                    data = JSON.parse(data); 
                    pais=data[0].PAIS_NAC;
                    } 
            })
    if (pais!='PERU' && val!=''){
        return false;
    }
    else {
        return true;
    }
}

function reglaP121(val, obj){
    message='No corresponde responder esta pregunta para persona nacida fuera de Perú';
    var string = 'PAIS_NAC'; 
    var pais = ''; 
    $.ajax({ async:false, 
             url: base_url + 'index.php/caratulaController/getCampos', 
             type: 'POST', 
             data: {campos: string, 
                    INTERNO_ID: $('#frm_INTERNO_ID').val(), 
                    CUEST_NRO: $('#frm_CUEST_NRO').val()}, 
             success: function (data, textStatus, jqXHR) { 
                    data = JSON.parse(data); 
                    pais=data[0].PAIS_NAC;
                    } 
            })
    if (pais!='PERU' && val!=''){
        return false;
    }
    else {
        return true;
    }
}