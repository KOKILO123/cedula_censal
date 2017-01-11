$(function () {
    //TRIGGERS
    $('input[name="frm[P137]"]').trigger('change');
    $('#frm_P137A_HIJA').trigger('blur');

})

$('input[name="frm[P137]"]').change(function(){
    $('#frm_P137_1').is(':checked') ? fn_showDiv('padre_21') : fn_hideDiv('padre_21');
});

$('#frm_P137A_HIJA').blur(function(){
     
    var hija= $('#frm_P137A_HIJA').val();
    var string = 'GENERO'; 
    var gen = 0; 
    $.ajax({ async:false, 
             url: base_url + 'index.php/caratulaController/getCampos', 
             type: 'POST', 
             data: {campos: string, 
                    INTERNO_ID: $('#frm_INTERNO_ID').val(), 
                    CUEST_NRO: $('#frm_CUEST_NRO').val()}, 
             success: function (data, textStatus, jqXHR) { 
                    data = JSON.parse(data); 
                    gen=data[0].GENERO;
                    } 
            })
    if (gen==2 && hija!='' ){
        fn_showDiv('div_P138');
    } else {
        fn_hideDiv('div_P138');
    }    
     
});

function reglaP137A_HIJA(val, obj){
    message='Contradicción: Tiene hijos pero no registra valor';
    return ($('#frm_P137_1').is(':checked') && ($('#frm_P137A_HIJO').val()=='0' || $('#frm_P137A_HIJO').val()=='' ) && ($('#frm_P137A_HIJA').val()=='0' || $('#frm_P137A_HIJA').val()=='' ) )?  false : true;  
}

