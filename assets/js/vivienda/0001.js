$(function () {
   //$('#frm_VIVIENDA').val() 
   $('#vivienda_tx').text("Vivienda Nro. "+ $('#frm_VIVIENDA').val()); 
   $('#hogar_tx').text(" "); 
   $('#persona_tx').text(" "); 
   //alert("fdg");
});
 //alert("fdg");

/*
//CARGA INICIAL
$(function () {
    //validaRespuestaMultiple('C10P1014', 1, 5);
//    validaRespuestaMultiple('C10P1011', 1, 5);



if($("#frm_C10P1009_N_4A").val()==0&&$("#frm_C10P1009_N_4B").val()==0){
    
        fn_hideDiv('div_c9p909_NESP');
    
}else {
        fn_showDiv('div_c9p909_NESP');
    }

if($("#frm_C10P1009_N_4B").val()==0){
    
        fn_hideDiv('div_c10p1009_NBESP');
    
}else {
        fn_showDiv('div_c10p1009_NBESP');
    }



$('#frm_C10P1022_N_1A').change(function () {
        
        regla922_N();
    });

 $('#frm_C10P1022_N_1B').change(function () {
        
        regla922_N();
    });

$('#frm_C10P1022_N_2A').change(function () {
        
        regla922_N();
    });

 $('#frm_C10P1022_N_2B').change(function () {
        
        regla922_N();
    });
$('#frm_C10P1022_N_3A').change(function () {
        
        regla922_N();
    });

 $('#frm_C10P1022_N_3B').change(function () {
        
        regla922_N();
    });

$('#frm_C10P1022_N_4A').change(function () {
        
        regla922_N();
    });

 $('#frm_C10P1022_N_4B').change(function () {
        
        regla922_N();
    });

$('#frm_C10P1023_N_1A').change(function () {
        
        regla923_N();
    });

 $('#frm_C10P1023_N_1B').change(function () {
        
        regla923_N();
    });

$('#frm_C10P1023_N_2A').change(function () {
        
        regla923_N();
    });

 $('#frm_C10P1023_N_2B').change(function () {
        
        regla923_N();
    });
    
    
    
    ////PREGUNTA 1017
    
        if ($('#frm_C10P1011_5').is(':checked'))
    {
        $("#div_C10P1017_N").hide();

    } else {
        
        $("#div_C10P1017_N").show();
    }





    fn_hideDiv('div_C10P1006_ESP');
    
    if($("#frm_C10P1001_1").is(':checked')){
        
        fn_showDiv('div_C10P1002_N');
    } else {
        
         fn_hideDiv('div_C10P1002_N');
    }
    
     if($("#frm_C10P1012_N_4").is(':checked')){
        
        fn_showDiv('div_C10P1012_N_4ESP');
    } else {
        
        fn_hideDiv('div_C10P1012_N_4ESP');
    }
    
    
    if($("#frm_C10P1017_N_5_4").is(':checked')){
        
        fn_hideDiv('div_C10P1011_5ESP');
        
    } else {
        
        fn_showDiv('div_C10P1017_N_5ESP');
    }
    
    if($("#frm_C10P1020_N_5_2").is(':checked')){
        
        fn_hideDiv('C10P1020_NESP');
        
    } else {
        
        fn_showDiv('C10P1020_NESP');
    }
    
    if($("#frm_C10P1014_5_2").is(':checked')){
        
        fn_hideDiv('C10P1014_5ESP');
        
    } else {
        
        fn_showDiv('C10P1014_5ESP');
    }
    
    
    
 

   
    mayusculas();
    performSubmitMatrixHandler('#frm_id', rules);


    ////***********************
    ///VALIDAR FLUJOS AL CARGAR LA PÁGINA*********
    if ($("#frm_C10P1002_1").is(':checked'))
    {
//        $('#frm_C10P1003_1').prop('checked', false);
//        $('#frm_C10P1003_2').prop('checked', false);
//        $("#div_C10P1003").hide();
        //fn_hideDiv('div_C10P1003');
        //fn_hideDiv('div_C10P1004_MES');
        fn_showDiv('div_C10P1004_N');
     

    } else {
        
        $("#div_C10P1003").show();
//            fn_showDiv('');
        fn_showDiv('div_C10P1004_MES');
        fn_hideDiv('div_C10P1004_N');

    }


    if ($("#frm_C10P1005_1").is(':checked')) {

        fn_showDiv('div_C10P1006');
        
    } else {
        
        fn_hideDiv('div_C10P1006');
        
    }

    if ($('#frm_C10P1003_2').is(':checked')) {

        fn_hideDiv('div_C10P1004_MES');
        fn_hideDiv('div_C10P1007_N');
    } else{
        fn_showDiv('div_C10P1004_MES');
        fn_showDiv('div_C10P1007_N');
        
        
    }

    if ($("#frm_C10P1007_2").is(":checked")) {

        fn_hideDiv('div_C10P1008');
        fn_hideDiv('div_C10P1012_N');
    }
    else {

        fn_showDiv('div_C10P1008');
        fn_showDiv('div_C10P1012_N');
    }


////***********************


    if ($("#frm_C10P1013_1_1").is(":checked")) {
        $("#frm_C10P1013_1A").removeAttr("disabled");
    }
    validarT_C9();
});



/////ALIANZAS O CONVENIOS PREGUNTA 1009

$('input[name="frm[C10P1009_N_4A]"]').change(function () {
    if($("#frm_C10P1009_N_4A").val()==0){
    
        fn_hideDiv('div_c9p909_NESP');
    
}else {
        fn_showDiv('div_c9p909_NESP');
    }
});


$('input[name="frm[C10P1009_N_4B]"]').change(function () {
    if($("#frm_C10P1009_N_4B").val()==0){
    
        fn_hideDiv('div_c10p1009_NBESP');
    
}else {
        fn_showDiv('div_c10p1009_NBESP');
    }
});





///VALIDAR RESPUESTAS MULTIPLES

function validaRespuestaMultiple(avar, from, to, valid) {
    var aCheck = 'frm_' + avar + '_';
    for (i = from; i <= to; i++) {
        var _aCheck = '#' + aCheck + i;
        $(_aCheck).change(function () {
//            var count = $('input:checkbox[id^="' + aCheck + '"]:checked').length;
            //por lo menos uno
            $('input:checkbox[id^="' + aCheck + '"]').next('label.error').remove();
            if (valid) {
                $(_aCheck).valid();
            }
        });
    }
}


function  validaAnio(value, el) {
    message = "Número de Año inválido";
    var ldn = $.trim($('#frm_C10P1004_ANIO').val());
    ldn = parseInt(ldn) || 0;
    value = $.trim(value);
    return (value.length === 4 && value >= 2010 && value <= 2016) ? (true) : (false);
}

function valida1004_NAC(value, el){
    
     message = "Tiene que ingresar por lo menos una acreditacion Nacional y/o Internacional";
    var ldn = $.trim($('#frm_C10P1004_INT').val());
    //ldn = parseInt(ldn) || 0;
    value = $.trim(value);
    return ((value==''&& ldn!=='') || (value!==''&& ldn=='')|| (value!==''&& ldn!=='') ) ? (true) : (false);
}

function valida1004_INT(value, el){
    
     message = "";
    var ldn = $.trim($('#frm_C10P1004_NAC').val());
    //ldn = parseInt(ldn) || 0;
    value = $.trim(value);
    return ((value==''&& ldn!=='') || (value!==''&& ldn=='') || (value!==''&& ldn!=='')) ? (true) : (false);
}


function valida1007_NAC(value, el){
    
     message = "Tiene que ingresar por lo menos una acreditacion Nacional y/o Internacional";
    var ldn = $.trim($('#frm_C10P1007_INT').val());
    //ldn = parseInt(ldn) || 0;
    value = $.trim(value);
    return ((value==''&& ldn!=='') || (value!==''&& ldn=='')|| (value!==''&& ldn!=='') ) ? (true) : (false);
}

function valida1007_INT(value, el){
    
    message = "";
    var ldn = $.trim($('#frm_C10P1007_NAC').val());
    //ldn = parseInt(ldn) || 0;
    value = $.trim(value);
    return ((value==''&& ldn!=='') || (value!==''&& ldn=='') || (value!==''&& ldn!=='')) ? (true) : (false);
}


function  validaTotalCarreras(value, el) {
    message = "Total de Carreras inválidas";
    var ldn = $.trim($('#frm_C10P1009').val());
    ldn = parseInt(ldn) || 0;
    value = $.trim(value);
    return (value >= 1) ? (true) : (false);
}

function  validaP913_1A(value, el) {
    message = "Cantidad inválida";
    var ldn = $.trim($('#frm_C10P1013_1A').val());
    ldn = parseInt(ldn) || 0;
    value = $.trim(value);
    return (value >= 1) ? (true) : (false);
}

function  validaP913_2A(value, el) {
    message = "Cantidad inválida";
    var ldn = $.trim($('#frm_C10P1013_2A').val());
    ldn = parseInt(ldn) || 0;
    value = $.trim(value);
    return (value >= 1) ? (true) : (false);
}

function  validaP913_3A(value, el) {
    message = "Cantidad inválida";
    var ldn = $.trim($('#frm_C10P1013_3A').val());
    ldn = parseInt(ldn) || 0;
    value = $.trim(value);
    return (value >= 1) ? (true) : (false);
}

function  validaP913_4A(value, el) {
    message = "Cantidad inválida";
    var ldn = $.trim($('#frm_C10P1013_4A').val());
    ldn = parseInt(ldn) || 0;
    value = $.trim(value);
    return (value >= 1) ? (true) : (false);
}

function  validaP913_5A(value, el) {
    message = "Cantidad inválida";
    var ldn = $.trim($('#frm_C10P1013_5A').val());
    ldn = parseInt(ldn) || 0;
    value = $.trim(value);
    return (value >= 1) ? (true) : (false);
}


function  validaP913_6A(value, el) {
    message = "Cantidad inválida";
    var ldn = $.trim($('#frm_C10P1013_6A').val());
    ldn = parseInt(ldn) || 0;
    value = $.trim(value);
    return (value >= 1) ? (true) : (false);
}


function  validaP913_7A(value, el) {
    message = "Cantidad inválida";
    var ldn = $.trim($('#frm_C10P1013_7A').val());
    ldn = parseInt(ldn) || 0;
    value = $.trim(value);
    return (value >= 1) ? (true) : (false);
}





/////PENDIENTE/////////////
///AGREGAR Y GUARDAR LO AGREGADO.
////

valores = new Array();
$('#infoAcademica').each(function () {
    var cantidad = $(this).find('td').eq(0).html();
    var descripcion = $(this).find('td').eq(1).html();
    var valorUnitario = $(this).find('td').eq(3).html();
    valor = new Array(cantidad, descripcion, valorUnitario);
    valores.push(valor);
});



$('#btnAgregar').click(function () {

    //var id=$("#infoAcademica").val();


    valores = new Array();

    $('#infoAcademica').each(function () {

        var p16 = $($(this).find('td').eq(2).html()).val();
        var p17 = $($(this).find('td').eq(3).html()).val();
        var p18 = $($(this).find('td').eq(4).html()).val();
//    var p17 = $(this).find('td').eq(3).html();
//    var p18 = $(this).find('td').eq(4).html();
        valor = new Array(p16, p17, p18);
        valores.push(valor);

        guardarAgregado(valores);
    });


});
//
function guardarAgregado(id) {



    var oOptions = {
        type: 'POST',
        url: base_url + 'index.php/mod2bController/guardardATA',
        data: {'id': id}
    };
    var posting = $.ajax(oOptions);
    //var $select = $('#frm_TELEF1_LDN');

    posting.done(function (response, textStatus, jqXHR) {
        //response = JSON.parse(response);
        //$select.append(response);
        //$select.append('<option value=' + value.value + '>' + value.value + '</option>');
//		$('#frm_TELEF1_LDN').val(response);
//		$('#frm_TELEF2_LDN').val(response);
//		$('#frm_FAX_LDN').val(response);
//		$('#frm_INF_TELEF_LDN').val(response);
        alert("Hola Perú");
    }).fail(function (response, textStatus, jqXHR) {
        console.log(textStatus);
    });


}



///EVENTOS = FLUJOS
$('input[name="frm[C10P1001]"]').change(function () {
    if ($('#frm_C10P1001_1').is(':checked')) {
        fn_showDiv('div_C10P1002_N');
    } else {
        fn_hideDiv('div_C10P1002_N');
    }
});


$('input[name="frm[C10P1017_N_5]"]').change(function () {
    if ($('#frm_C10P1017_N_5_4').is(':checked')) {
        fn_hideDiv('div_C10P1011_5ESP');
     } else {
         fn_showDiv('div_C10P1011_5ESP');
        
    }
});
//ok
$('input[name="frm[C10P1020_N_5]"]').change(function () {
    if ($('#frm_C10P1020_N_5_2').is(':checked')) {
        fn_hideDiv('C10P1020_NESP');
     } else {
         fn_showDiv('C10P1020_NESP');
        
    }
});



$('input[name="frm[C10P1003]"]').change(function () {
    if ($('#frm_C10P1003_2').is(':checked')) {
        fn_hideDiv('div_C10P1004_MES,div_C10P1004_ANIO,div_C10P1007_N');
    } else {
        fn_showDiv('div_C10P1004_MES,div_C10P1004_ANIO,div_C10P1007_N');
    }
});



$('input[name="frm[C10P1008]"]').change(function () {
    if ($('#frm_C10P1008_2').is(':checked')) {
        fn_hideDiv('div_C10P1012_N');
    } else {
        fn_showDiv('div_C10P1012_N');
    }
});


$('input[name="frm[C10P1012_N]"]').change(function () {
    if ($('#frm_C10P1012_N_4').is(':checked')) {
        fn_showDiv('div_C10P1012_N_4ESP');
     } else {
        fn_hideDiv('div_C10P1012_N_4ESP');
    }
});



$('input[name="frm[C10P1002]"]').change(function () {
    if ($('#frm_C10P1002_1').is(':checked')) {

        fn_showDiv('div_C10P1004_N'); 

        
    } else {
        fn_hideDiv('div_C10P1004_N');
        
    }
});



$('input[name="frm[C10P1005]"]').change(function () {
//    if ($('#frm_C10P1005').val() === '4' ) { //|| $('#frm_C10P1005').val() === '0')
    if ($('#frm_C10P1005_1').is(':checked')){
        fn_showDiv('div_C10P1006');
    } else {
        fn_hideDiv('div_C10P1006');
    }
});


//PREGUNTA 906



//PREGUNTA 913 /////


$('input[name="frm[C10P1013_1]"]').change(function () {
    if ($('#frm_C10P1013_1_1').is(':checked')) {
//        fn_disable('frm[C10P1013_1A]');
        $('#frm_C10P1013_1A').removeAttr("disabled");

    } else if ($('#frm_C10P1013_1_2').is(':checked')) {
        $('#frm_C10P1013_1A').attr('disabled', 'disabled');
        $('#frm_C10P1013_1A').val("");
//        fn_showDiv('frm[C10P1013_1A]');
//        $('#frm_C10P1013_1A').removeAttr("disabled");
//        $('#frm_C10P1013_1A').val("");

    } else

    if ($('#frm_C10P1013_7_2').is(':checked') && $('#frm_C10P1013_1_2').is(':checked') && $('#frm_C10P1013_2_2').is(':checked') && $('#frm_C10P1013_3_2').is(':checked') && $('#frm_C10P1013_4_2').is(':checked') && $('#frm_C10P1013_5_2').is(':checked') && $('#frm_C10P1013_6_2').is(':checked')) {


        $('#frm_C10P1013_1_1').attr('checked', 'checked');
        $('#frm_C10P1013_1A').attr('disabled', 'disabled');
        $('#frm_C10P1013_1A').removeAttr("disabled");
        $('#frm_C10P1013_1A').val("");
    }


});



/////    913. SERVICIOS QUE LA INSTITUCIÓN PRESTA A LOS ESTUDIANTES

///PARA LA PRIMERA OPCIÓN
$('input[name="frm[C10P1013_1]"]').change(function () {
    if ($('#frm_C10P1013_7_2').is(':checked') && $('#frm_C10P1013_1_2').is(':checked') && $('#frm_C10P1013_2_2').is(':checked') && $('#frm_C10P1013_3_2').is(':checked') && $('#frm_C10P1013_4_2').is(':checked') && $('#frm_C10P1013_5_2').is(':checked') && $('#frm_C10P1013_6_2').is(':checked')) {

        $('#frm_C10P1013_1A').val(1);
        $('#frm_C10P1013_1A').removeAttr("disabled");
        $('#frm_C10P1013_1_2').prop('checked', false);
        ;
        $('#frm_C10P1013_1_1').prop('checked', 'true');
    }
});



///PARA LA SEGUNDA OPCIÓN
$('input[name="frm[C10P1013_2]"]').change(function () {
    if ($('#frm_C10P1013_7_2').is(':checked') && $('#frm_C10P1013_1_2').is(':checked') && $('#frm_C10P1013_2_2').is(':checked') && $('#frm_C10P1013_3_2').is(':checked') && $('#frm_C10P1013_4_2').is(':checked') && $('#frm_C10P1013_5_2').is(':checked') && $('#frm_C10P1013_6_2').is(':checked')) {

        $('#frm_C10P1013_1A').val(1);
        $('#frm_C10P1013_1A').removeAttr("disabled");
        $('#frm_C10P1013_1_2').prop('checked', false);
        ;
        $('#frm_C10P1013_1_1').prop('checked', 'true');
    }
});

///PARA LA TERCERA OPCIÓN
$('input[name="frm[C10P1013_3]"]').change(function () {
    if ($('#frm_C10P1013_7_2').is(':checked') && $('#frm_C10P1013_1_2').is(':checked') && $('#frm_C10P1013_2_2').is(':checked') && $('#frm_C10P1013_3_2').is(':checked') && $('#frm_C10P1013_4_2').is(':checked') && $('#frm_C10P1013_5_2').is(':checked') && $('#frm_C10P1013_6_2').is(':checked')) {

        $('#frm_C10P1013_1A').val(1);
        $('#frm_C10P1013_1A').removeAttr("disabled");
        $('#frm_C10P1013_1_2').prop('checked', false);
        ;
        $('#frm_C10P1013_1_1').prop('checked', 'true');
    }
});


///PARA LA CUARTA OPCIÓN
$('input[name="frm[C10P1013_4]"]').change(function () {
    if ($('#frm_C10P1013_7_2').is(':checked') && $('#frm_C10P1013_1_2').is(':checked') && $('#frm_C10P1013_2_2').is(':checked') && $('#frm_C10P1013_3_2').is(':checked') && $('#frm_C10P1013_4_2').is(':checked') && $('#frm_C10P1013_5_2').is(':checked') && $('#frm_C10P1013_6_2').is(':checked')) {

        $('#frm_C10P1013_1A').val(1);
        $('#frm_C10P1013_1A').removeAttr("disabled");
        $('#frm_C10P1013_1_2').prop('checked', false);
        ;
        $('#frm_C10P1013_1_1').prop('checked', 'true');
    }
});


///PARA LA QUINTA OPCIÓN
$('input[name="frm[C10P1013_5]"]').change(function () {
    if ($('#frm_C10P1013_7_2').is(':checked') && $('#frm_C10P1013_1_2').is(':checked') && $('#frm_C10P1013_2_2').is(':checked') && $('#frm_C10P1013_3_2').is(':checked') && $('#frm_C10P1013_4_2').is(':checked') && $('#frm_C10P1013_5_2').is(':checked') && $('#frm_C10P1013_6_2').is(':checked')) {

        $('#frm_C10P1013_1A').val(1);
        $('#frm_C10P1013_1A').removeAttr("disabled");
        $('#frm_C10P1013_1_2').prop('checked', false);
        ;
        $('#frm_C10P1013_1_1').prop('checked', 'true');
    }
});

///PARA LA SEXTA OPCIÓN
$('input[name="frm[C10P1013_6]"]').change(function () {
    if ($('#frm_C10P1013_7_2').is(':checked') && $('#frm_C10P1013_1_2').is(':checked') && $('#frm_C10P1013_2_2').is(':checked') && $('#frm_C10P1013_3_2').is(':checked') && $('#frm_C10P1013_4_2').is(':checked') && $('#frm_C10P1013_5_2').is(':checked') && $('#frm_C10P1013_6_2').is(':checked')) {

        $('#frm_C10P1013_1A').val(1);
        $('#frm_C10P1013_1A').removeAttr("disabled");
        $('#frm_C10P1013_1_2').prop('checked', false);
        ;
        $('#frm_C10P1013_1_1').prop('checked', 'true');
    }
});



////PARA LA SEPTIMA OPCIÓN
$('input[name="frm[C10P1013_7]"]').change(function () {
    if ($('#frm_C10P1013_7_2').is(':checked') && $('#frm_C10P1013_1_2').is(':checked') && $('#frm_C10P1013_2_2').is(':checked') && $('#frm_C10P1013_3_2').is(':checked') && $('#frm_C10P1013_4_2').is(':checked') && $('#frm_C10P1013_5_2').is(':checked') && $('#frm_C10P1013_6_2').is(':checked'))
    {

        $('#frm_C10P1013_1A').val(1);
        $('#frm_C10P1013_1A').removeAttr("disabled");
        $('#frm_C10P1013_1_2').prop('checked', false);
        ;
        $('#frm_C10P1013_1_1').prop('checked', 'true');
    }

    $('#frm_C10P1013_1_1').attr('checked', 'checked');

});





$('input[name="frm[C10P1013_2]"]').change(function () {
    if ($('#frm_C10P1013_2_1').is(':checked')) {
//        fn_disable('frm[C10P1013_1A]');
        $('#frm_C10P1013_2A').removeAttr("disabled");

    } else {
        $('#frm_C10P1013_2A').attr('disabled', 'disabled');
        $('#frm_C10P1013_2A').val("");
    }
});


$('input[name="frm[C10P1013_3]"]').change(function () {
    if ($('#frm_C10P1013_3_1').is(':checked')) {
        $('#frm_C10P1013_3A').removeAttr("disabled");
    } else {
        $('#frm_C10P1013_3A').attr('disabled', 'disabled');
        $('#frm_C10P1013_3A').val("");
    }

});

$('input[name="frm[C10P1013_4]"]').change(function () {
    if ($('#frm_C10P1013_4_1').is(':checked')) {
        $('#frm_C10P1013_4A').removeAttr("disabled");
    } else {
        $('#frm_C10P1013_4A').attr('disabled', 'disabled');
        $('#frm_C10P1013_4A').val("");
    }

});

$('input[name="frm[C10P1013_5]"]').change(function () {
    if ($('#frm_C10P1013_5_1').is(':checked')) {
        $('#frm_C10P1013_5A').removeAttr("disabled");
    } else {
        $('#frm_C10P1013_5A').attr('disabled', 'disabled');
        $('#frm_C10P1013_5A').val("");
    }

});

$('input[name="frm[C10P1013_6]"]').change(function () {
    if ($('#frm_C10P1013_6_1').is(':checked')) {
        $('#frm_C10P1013_6A').removeAttr("disabled");
    } else {
        $('#frm_C10P1013_6A').attr('disabled', 'disabled');
        $('#frm_C10P1013_6A').val("");
    }

});

$('input[name="frm[C10P1013_7]"]').change(function () {
    if ($('#frm_C10P1013_7_1').is(':checked')) {
        $('#frm_C10P1013_7A').removeAttr("disabled");
    } else {
        $('#frm_C10P1013_7A').attr('disabled', 'disabled');
        $('#frm_C10P1013_7A').val("");
    }

});


$('input[name="frm[C10P1007]"]').change(function () {
    if ($('#frm_C10P1007_2').is(':checked')) {
        fn_hideDiv('div_C10P1008');
        fn_hideDiv('div_C10P1012_N');
    } else {
        fn_showDiv('div_C10P1008');
        fn_showDiv('div_C10P1012_N');
    }
});

///PREGUNTA 914

$('input[name="frm[C10P1014_5]"]').change(function () {
    if ($('#frm_C10P1014_5_2').is(':checked')) {
        //$('#frm_C10P1014_5ESP').removeAttr("disabled");
            fn_hideDiv('#C10P1014_5ESP');
    } else {
        //$('#frm_C10P1014_5ESP').attr('disabled', 'disabled');
        //$('#frm_C10P1014_5ESP').val("");
        fn_showDiv('#C10P1014_5ESP');
    }
});







//EVENTOS Y FLUOS DE CARATULA

$('input[name="frm[INF_CARGO]"]').change(function () {
    if ($('#frm_INF_CARGO_1').is(':checked')) {
        fn_hideDiv('div_INF_CARGO_ESP');
    } else {
        fn_showDiv('div_INF_CARGO_ESP');
    }
});

$('#frm_C10P1005').change(function () {
    //var cmbGestion = $('#frm_GESTION_IES');
    if ($.inArray(this.value, ['4']) !== -1) {
        fn_hideDiv('div_C10P1006');
    } else {
        fn_showDiv('div_C10P1006');
    }
});

$('#frm_C10P1005').change(function () {
    //var cmbGestion = $('#frm_GESTION_IES');
    if ($.inArray(this.value, ['4']) !== -1) {
        fn_hideDiv('div_C10P1006');
    } else {
        fn_showDiv('div_C10P1006');
    }
});






///906906906906906906906906906906906
$('#frm_C10P1006_1').change(function () {
    //var cmbGestion = $('#frm_GESTION_IES');
    if ($.inArray(this.value, ['4']) !== -1) {
        fn_showDiv('div_C10P1006_ESP');
    } else {
        fn_hideDiv('div_C10P1006_ESP');
    }
});






// REGLAS
function fn_hideDiv(aDiv) {
    var divs = aDiv.split(',');
    for (i = 0; i < divs.length; i++) {
        _fn_hideDiv(divs[i]);
    }
}

function _fn_hideDiv(aDiv) {
    $div = $(aDiv.indexOf('#') >= 0 ? aDiv : '#' + aDiv);
    if (!$div.hasClass('divoculto')) {
        $div.addClass('divoculto');
        $div.find('input[type="text"]').each(function () {
            this.value = '';
        });
        $div.find('input[type="number"]').each(function () {
            this.value = '';
        });
        $div.find('select').each(function () {
            this.value = '';
        });
        $div.find('input[type="radio"]').each(function () {
            $(this).removeAttr('checked');
        });
        $div.find('input[type="checkbox"]').each(function () {
            $(this).removeAttr('checked');
        });
    }
}



function fn_showDiv(aDiv) {
    var divs = aDiv.split(',');
    for (i = 0; i < divs.length; i++) {
        _fn_showDiv(divs[i]);
    }
}

function _fn_showDiv(aDiv) {
    $div = $(aDiv.indexOf('#') >= 0 ? aDiv : '#' + aDiv);
    if ($div.hasClass('divoculto')) {
        $div.removeClass('divoculto');
//        $div.find('div').each(function() {
//            $('.divoculto').removeClass('divoculto');
//        });
    }
}


function reglap14(value, el) {
    message = "Debe seleccionar por lo menos una alternativa";
    var count = $('input[id^="frm_C10P1014_"]:checked').length;
    return  count > 0;
}

function reglap11(value, el) {
    message = "Debe seleccionar por lo menos una alternativa";
    var count = $('input[id^="frm_C10P1011_"]:checked').length;
    return  count > 0;
}


function validaP10P1014_N(value, el){
    
    
    message = "La nota no puede ser mayor a 20";
    value = parseInt($.trim(value) || 0);
    return (value <= 20 && value > 0);
    
    
}



///********PREGUNTA 911
//CHANGE 1
$('input[name="frm[C10P1011_1]"]').change(function () {

    if ($('#frm_C10P1011_1').is(':checked') && $('#frm_C10P1011_2').is(':checked') && $('#frm_C10P1011_3').is(':checked') && $('#frm_C10P1011_4').is(':checked'))
    {
        $('#frm_C10P1011_2').removeAttr('checked');
        $('#frm_C10P1011_3').removeAttr('checked');
        $('#frm_C10P1011_4').removeAttr('checked');
    }

    if ($('#frm_C10P1011_1').is(':checked') && $('#frm_C10P1011_2').is(':checked') && $('#frm_C10P1011_3').is(':checked'))
    {
        $('#frm_C10P1011_2').removeAttr('checked');
        $('#frm_C10P1011_3').removeAttr('checked');
    }

    if ($('#frm_C10P1011_1').is(':checked') && $('#frm_C10P1011_2').is(':checked'))
    {
        $('#frm_C10P1011_2').removeAttr('checked');
    }   

    if ($('#frm_C10P1011_1').is(':checked') && $('#frm_C10P1011_3').is(':checked'))
    {
        $('#frm_C10P1011_3').removeAttr('checked');
    }


    if ($('#frm_C10P1011_1').is(':checked') && $('#frm_C10P1011_4').is(':checked'))
    {
        $('#frm_C10P1011_4').removeAttr('checked');
    }



    if ($('#frm_C10P1011_1').is(':checked') && $('#frm_C10P1011_5').is(':checked'))
    {
        $('#frm_C10P1011_5').removeAttr('checked');
        $("#div_C10P1017_N").show();

    }
   
   
});


///CHANGE 2

$('input[name="frm[C10P1011_2]"]').change(function () {

    if ($('#frm_C10P1011_1').is(':checked') && $('#frm_C10P1011_2').is(':checked') && $('#frm_C10P1011_3').is(':checked') && $('#frm_C10P1011_4').is(':checked'))

    {
        $('#frm_C10P1011_1').removeAttr('checked');
        $('#frm_C10P1011_3').removeAttr('checked');
        $('#frm_C10P1011_4').removeAttr('checked');

    }

    if ($('#frm_C10P1011_1').is(':checked') && $('#frm_C10P1011_2').is(':checked') && $('#frm_C10P1011_3').is(':checked'))

    {
        $('#frm_C10P1011_1').removeAttr('checked');
        $('#frm_C10P1011_3').removeAttr('checked');
    }

    if ($('#frm_C10P1011_1').is(':checked') && $('#frm_C10P1011_2').is(':checked'))

    {
        $('#frm_C10P1011_1').removeAttr('checked');
    }

    if ($('#frm_C10P1011_2').is(':checked') && $('#frm_C10P1011_3').is(':checked'))

    {
        $('#frm_C10P1011_3').removeAttr('checked');
    }


    if ($('#frm_C10P1011_2').is(':checked') && $('#frm_C10P1011_4').is(':checked'))

    {
        $('#frm_C10P1011_4').removeAttr('checked');
    }


    if ($('#frm_C10P1011_2').is(':checked') && $('#frm_C10P1011_5').is(':checked'))

    {
        $('#frm_C10P1011_5').removeAttr('checked');
        $("#div_C10P1017_N").show();

    }
});



//CHANGE 3

$('input[name="frm[C10P1011_3]"]').change(function () {

    if ($('#frm_C10P1011_1').is(':checked') && $('#frm_C10P1011_2').is(':checked') && $('#frm_C10P1011_3').is(':checked') && $('#frm_C10P1011_4').is(':checked'))

    {
        $('#frm_C10P1011_1').removeAttr('checked');
        $('#frm_C10P1011_2').removeAttr('checked');
        $('#frm_C10P1011_4').removeAttr('checked');
    }

    if ($('#frm_C10P1011_1').is(':checked') && $('#frm_C10P1011_2').is(':checked') && $('#frm_C10P1011_3').is(':checked'))

    {
        $('#frm_C10P1011_1').removeAttr('checked');
        $('#frm_C10P1011_2').removeAttr('checked');
    }

    if ($('#frm_C10P1011_1').is(':checked') && $('#frm_C10P1011_3').is(':checked'))

    {
        $('#frm_C10P1011_1').removeAttr('checked');
    }

    if ($('#frm_C10P1011_2').is(':checked') && $('#frm_C10P1011_3').is(':checked'))

    {
        $('#frm_C10P1011_2').removeAttr('checked');
    }


    if ($('#frm_C10P1011_3').is(':checked') && $('#frm_C10P1011_4').is(':checked'))

    {
        $('#frm_C10P1011_4').removeAttr('checked');
    }


    if ($('#frm_C10P1011_3').is(':checked') && $('#frm_C10P1011_5').is(':checked'))

    {

        $('#frm_C10P1011_5').removeAttr('checked');
        $("#div_C10P1017_N").show();

    }
});


////CHANGE 4
$('input[name="frm[C10P1011_4]"]').change(function () {

    if ($('#frm_C10P1011_1').is(':checked') && $('#frm_C10P1011_2').is(':checked') && $('#frm_C10P1011_3').is(':checked') && $('#frm_C10P1011_4').is(':checked'))

    {

        $('#frm_C10P1011_1').removeAttr('checked');
        $('#frm_C10P1011_2').removeAttr('checked');
        $('#frm_C10P1011_3').removeAttr('checked');

    }

    if ($('#frm_C10P1011_2').is(':checked') && $('#frm_C10P1011_3').is(':checked') && $('#frm_C10P1011_4').is(':checked'))

    {
        $('#frm_C10P1011_2').removeAttr('checked');
        $('#frm_C10P1011_3').removeAttr('checked');

    }

    if ($('#frm_C10P1011_3').is(':checked') && $('#frm_C10P1011_4').is(':checked'))

    {

        $('#frm_C10P1011_3').removeAttr('checked');

    }
    if ($('#frm_C10P1011_2').is(':checked') && $('#frm_C10P1011_4').is(':checked'))

    {
        $('#frm_C10P1011_2').removeAttr('checked');

    }
    if ($('#frm_C10P1011_1').is(':checked') && $('#frm_C10P1011_4').is(':checked'))

    {

        $('#frm_C10P1011_1').removeAttr('checked');

    }

    if ($('#frm_C10P1011_4').is(':checked') && $('#frm_C10P1011_5').is(':checked'))

    {

        $('#frm_C10P1011_5').removeAttr('checked');
        $("#div_C10P1017_N").show();

    }
    
     
    
});



///CHANGE 5
$('input[name="frm[C10P1011_5]"]').change(function () {

    if ($('#frm_C10P1011_1').is(':checked') && $('#frm_C10P1011_2').is(':checked') && $('#frm_C10P1011_3').is(':checked') && $('#frm_C10P1011_4').is(':checked') && $('#frm_C10P1011_5').is(':checked'))
    {
        $('#frm_C10P1011_1').removeAttr('checked');
        $('#frm_C10P1011_2').removeAttr('checked');
        $('#frm_C10P1011_3').removeAttr('checked');
        $('#frm_C10P1011_4').removeAttr('checked');
    }

    if ($('#frm_C10P1011_2').is(':checked') && $('#frm_C10P1011_3').is(':checked') && $('#frm_C10P1011_4').is(':checked') && $('#frm_C10P1011_5').is(':checked'))
    {
        $('#frm_C10P1011_2').removeAttr('checked');
        $('#frm_C10P1011_3').removeAttr('checked');
        $('#frm_C10P1011_4').removeAttr('checked');
    }

    if ($('#frm_C10P1011_3').is(':checked') && $('#frm_C10P1011_4').is(':checked') && $('#frm_C10P1011_5').is(':checked'))
    {
        $('#frm_C10P1011_3').removeAttr('checked');
        $('#frm_C10P1011_4').removeAttr('checked');
    }

    if ($('#frm_C10P1011_4').is(':checked') && $('#frm_C10P1011_5').is(':checked'))
    {

        $('#frm_C10P1011_4').removeAttr('checked');
    }

    if ($('#frm_C10P1011_1').is(':checked') && $('#frm_C10P1011_5').is(':checked'))
    {

        $('#frm_C10P1011_1').removeAttr('checked');
    }
    if ($('#frm_C10P1011_2').is(':checked') && $('#frm_C10P1011_5').is(':checked'))
    {

        $('#frm_C10P1011_2').removeAttr('checked');
    }
    if ($('#frm_C10P1011_3').is(':checked') && $('#frm_C10P1011_5').is(':checked'))
    {

        $('#frm_C10P1011_3').removeAttr('checked');
    }

     if ($('#frm_C10P1011_5').is(':checked'))
    {
        $("#div_C10P1017_N").hide();

    } else {
        
        $("#div_C10P1017_N").show();
    }

});

///******END** 911






///INICIO 913
///
$('input[name="frm[C10P1011_5]"]').change(function () {



}
);

////// PREGUNTA 1017---TUTORIAS

$('input[name="frm[C10P1017_N_1]').change(function () {


    if ($('#frm_C10P1017_N_1_4').is(':checked')) {
        
           if ($('#frm_C10P1017_N_1_4').is(':checked') && $('#frm_C10P1017_N_2_4').is(':checked') && $('#frm_C10P1017_N_3_4').is(':checked')&& $('#frm_C10P1017_N_4_4').is(':checked')&& $('#frm_C10P1017_N_5_4').is(':checked')) 
           {
               
               alert('ERROR: Debe haber al menos un tipo tutoría que ofrece la Institución de Educación Superior');
               $('#frm_C10P1017_N_1_4').prop("checked", false);
               $('#frm_C10P1017_N_2_4').prop("checked", false);
               $('#frm_C10P1017_N_3_4').prop("checked", false);
               $('#frm_C10P1017_N_4_4').prop("checked", false);
               $('#frm_C10P1017_N_5_4').prop("checked", false);
           }
    } 
    });
    
    $('input[name="frm[C10P1017_N_2]').change(function () {

    if ($('#frm_C10P1017_N_2_4').is(':checked')) {
        
           if ($('#frm_C10P1017_N_1_4').is(':checked') && $('#frm_C10P1017_N_2_4').is(':checked') && $('#frm_C10P1017_N_3_4').is(':checked') && $('#frm_C10P1017_N_4_4').is(':checked')&& $('#frm_C10P1017_N_5_4').is(':checked')) 
           {
               
               alert('ERROR: Debe haber al menos un tipo tutoría que ofrece la Institución de Educación Superior');
               $('#frm_C10P1017_N_1_4').prop("checked", false);
               $('#frm_C10P1017_N_2_4').prop("checked", false);
               $('#frm_C10P1017_N_3_4').prop("checked", false);
               $('#frm_C10P1017_N_4_4').prop("checked", false);
               $('#frm_C10P1017_N_5_4').prop("checked", false);
           }
    }
    
    });

    $('input[name="frm[C10P1017_N_3]').change(function () {
        
    if ($('#frm_C10P1017_N_3_4').is(':checked')) {
        
           if ($('#frm_C10P1017_N_1_4').is(':checked') && $('#frm_C10P1017_N_2_4').is(':checked') && $('#frm_C10P1017_N_3_4').is(':checked') && $('#frm_C10P1017_N_4_4').is(':checked')&& $('#frm_C10P1017_N_5_4').is(':checked')) 
           {
               
               alert('ERROR: Debe haber al menos un tipo tutoría que ofrece la Institución de Educación Superior');
               $('#frm_C10P1017_N_1_4').prop("checked", false);
               $('#frm_C10P1017_N_2_4').prop("checked", false);
               $('#frm_C10P1017_N_3_4').prop("checked", false);
               $('#frm_C10P1017_N_4_4').prop("checked", false);
               $('#frm_C10P1017_N_5_4').prop("checked", false);
           }
    }
    });
    
    $('input[name="frm[C10P1017_N_4]').change(function () {
    
        if ($('#frm_C10P1017_N_4_4').is(':checked')) {
        
           if ($('#frm_C10P1017_N_1_4').is(':checked') && $('#frm_C10P1017_N_2_4').is(':checked') && $('#frm_C10P1017_N_3_4').is(':checked') && $('#frm_C10P1017_N_4_4').is(':checked')&& $('#frm_C10P1017_N_5_4').is(':checked')) 
           {
               
               alert('ERROR: Debe haber al menos un tipo tutoría que ofrece la Institución de Educación Superior');
               $('#frm_C10P1017_N_1_4').prop("checked", false);
               $('#frm_C10P1017_N_2_4').prop("checked", false);
               $('#frm_C10P1017_N_3_4').prop("checked", false);
               $('#frm_C10P1017_N_4_4').prop("checked", false);
               $('#frm_C10P1017_N_5_4').prop("checked", false);
           }
    }
    });
    

    $('input[name="frm[C10P1017_N_5]').change(function () {
    
         if ($('#frm_C10P1017_N_5_4').is(':checked')) {
        
           if ($('#frm_C10P1017_N_1_4').is(':checked') && $('#frm_C10P1017_N_2_4').is(':checked') && $('#frm_C10P1017_N_3_4').is(':checked') && $('#frm_C10P1017_N_4_4').is(':checked')&& $('#frm_C10P1017_N_5_4').is(':checked')) 
           {
               
               alert('ERROR: Debe haber al menos un tipo tutoría que ofrece la Institución de Educación Superior');
               $('#frm_C10P1017_N_1_4').prop("checked", false);
               $('#frm_C10P1017_N_2_4').prop("checked", false);
               $('#frm_C10P1017_N_3_4').prop("checked", false);
               $('#frm_C10P1017_N_4_4').prop("checked", false);
               $('#frm_C10P1017_N_5_4').prop("checked", false);
           }
    }
});



///PREGUNTA PREG 922---DOCENTES



function regla922_N(){
    
    var a1 = 0;
    var b1 = 0;
    var c1 = null;
    var a2 = 0;
    var b2 = 0;
    var c2 = null;
    var a3 = 0;
    var b3 = 0;
    var c3 = null;
    var a4 = 0;
    var b4 = 0;
    var c4 = null;
    
    a1 = $('#frm_C10P1022_N_1A').val() || 0;
    a2 = $('#frm_C10P1022_N_2A').val() || 0;
    a3 = $('#frm_C10P1022_N_3A').val() || 0;
    a4 = $('#frm_C10P1022_N_4A').val() || 0;
    b1 = $('#frm_C10P1022_N_1B').val() || 0;
    b2 = $('#frm_C10P1022_N_2B').val() || 0;
    b3 = $('#frm_C10P1022_N_3B').val() || 0;
    b4 = $('#frm_C10P1022_N_4B').val() || 0;
    c1 = $('#frm_C10P1022_N_1C').val() || 0;
    c2 = $('#frm_C10P1022_N_2C').val() || 0;
    c3 = $('#frm_C10P1022_N_3C').val() || 0;
    c4 = $('#frm_C10P1022_N_4C').val() || 0;

    resultadoA = parseFloat(a1) + parseFloat(b1);
    resultadoB = parseFloat(a2) + parseFloat(b2);
    resultadoC = parseFloat(a3) + parseFloat(b3);
    resultadoD = parseFloat(a4) + parseFloat(b4);
    
    resultadoTOT1= parseFloat(a1) + parseFloat(a2)+parseFloat(a3) + parseFloat(a4);
    resultadoTOT2= parseFloat(b1) + parseFloat(b2)+parseFloat(b3) + parseFloat(b4);

    
    resultadoTOT3=resultadoA+resultadoB+resultadoC+resultadoD;
    
    $('#frm_C10P1022_N_1C').val(resultadoA);
    $('#frm_C10P1022_N_2C').val(resultadoB);
    $('#frm_C10P1022_N_3C').val(resultadoC);
    $('#frm_C10P1022_N_4C').val(resultadoD);
    $('#frm_C10P1022_N_1TOT').val(resultadoTOT1);
    $('#frm_C10P1022_N_2TOT').val(resultadoTOT2);
    $('#frm_C10P1022_N_3TOT').val(resultadoTOT3);
    
}

function regla923_N(){
    
    var a1= null;
    var b1= null;
    var c1= null;
    var a2= null;
    var b2= null;
    var c2= null;
    
    a1 = $('#frm_C10P1023_N_1A').val() || 0;
    b1 = $('#frm_C10P1023_N_1B').val() || 0;
    c1 = $('#frm_C10P1023_N_1C').val() || 0;
    a2 = $('#frm_C10P1023_N_2A').val() || 0;
    b2 = $('#frm_C10P1023_N_2B').val() || 0;
    c2 = $('#frm_C10P1023_N_2C').val() || 0;
    
    
    resultadoA = parseFloat(a1) + parseFloat(b1);
    resultadoB = parseFloat(a2) + parseFloat(b2);
        
    resultadoTOT1= parseFloat(a1) + parseFloat(a2);
    resultadoTOT2= parseFloat(b1) + parseFloat(b2);
    resultadoTOT3= resultadoA+ resultadoB;
    
    
     $('#frm_C10P1023_N_1C').val(resultadoA);
     $('#frm_C10P1023_N_2C').val(resultadoB);
     $('#frm_C10P1023_N_1TOT').val(resultadoTOT1);
     $('#frm_C10P1023_N_2TOT').val(resultadoTOT2);
     $('#frm_C10P1023_N_3TOT').val(resultadoTOT3);
    
    
    
}





$("#btnsiguiente_id").click(function () {
    
    validarT_C9();
});
///RESULTADOS DE LOS CAPÍTULOS


function  validarT_C9() {

    if (($("#frm_C10P1001_1").val() !== '' || $("#frm_C10P1001_2").val() !== '')
            && ($("#frm_C10P1002_1").val() !== '' || $("#frm_C10P1002_2").val() !== '')
            && $("#frm_C10P1005").val() !== '' 
            && ($("#frm_C10P1007_1").val() !== '' || $("#frm_C10P1007_2").val() !== '')
            && $("#frm_C10P1009").val() !== ''
            && ($("#frm_C10P1010_1").val() !== '' || $("#frm_C10P1010_2").val() !== '')
            && ($("#frm_C10P1011_1").val() !== '' || $("#frm_C10P1011_2").val() !== '' || $("#frm_C10P1011_3").val() !== '' || $("#frm_C10P1011_4").val() !== '' || $("#frm_C10P1011_5").val() !== '')
            && $("#frm_C10P1012").val() !== ''
            && (($("#frm_C10P1013_1_1").val() !== '' || $("#frm_C10P1013_1_2").val() !== '' && $("#frm_C10P1013_2_1").val() !== '' || $("#frm_C10P1013_2_2").val() !== '' && $("#frm_C10P1013_3_1").val() !== '' || $("#frm_C10P1013_3_2").val() !== '' && $("#frm_C10P1013_4_1").val() !== '' || $("#frm_C10P1013_4_2").val() !== '' && $("#frm_C10P1013_5_1").val() !== '' || $("#frm_C10P1013_5_2").val() !== '' && $("#frm_C10P1013_6_1").val() !== '' || $("#frm_C10P1013_6_2").val() !== '' && $("#frm_C10P1013_7_1").val() !== '' || $("#frm_C10P1013_7_2").val() !== ''))
            && (($("#frm_C10P1014_1_1").val() !== '' || $("#frm_C10P1014_1_2").val() !== '' && $("#frm_C10P1014_2_1").val() !== '' || $("#frm_C10P1014_2_2").val() !== '' && $("#frm_C10P1014_3_1").val() !== '' || $("#frm_C10P1014_3_2").val() !== '' && $("#frm_C10P1014_4_1").val() !== '' || $("#frm_C10P1014_4_2").val() !== ''))
            && ($("#frm_C10P1014_5_1").val() !== '' || $("#frm_C10P1014_5_2").val() !== '') 
            && ($("#frm_C10P1020_N_1_1").val() !== '' || $("#frm_C10P1020_N_1_2").val() !== '') 
            && $("#frm_C10P1022_N_3TOT").val() !== ''
            
            )
    {
        $("#frm_T_C10").val(1);


    } else
    {
        $("#frm_T_C10").val(0);
    }

}

*/


