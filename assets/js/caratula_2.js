//function getProvincias(iddepartamento, cmbProvincia, cmbDistrito) {
//    var oOptions = {
//        type: 'POST',
//        url: base_url + 'index.php/caratulaController/getProvincias',
//        data: {'iddepartamento': iddepartamento}
//    };
//    var posting = $.ajax(oOptions);
//    var $select = $('#' + cmbProvincia);
//    $select.find('option').remove();
//    $('#' + cmbDistrito).find('option').remove();
//    posting.done(function (response, textStatus, jqXHR) {
//        response = JSON.parse(response);
//        $.each(response, function (key, value)
//        {
//            $select.append('<option value=' + value.key + '>' + value.value + '</option>');
//        });
//    }).fail(function (response, textStatus, jqXHR) {
//        console.log(textStatus);
//    });
//}
//
//function getDistritos(iddepartamento, idprovincia, cmbDistrito) {
//    var oOptions = {
//        type: 'POST',
//        url: base_url + 'index.php/caratulaController/getDistritos',
//        data: {'iddepartamento': iddepartamento, 'idprovincia': idprovincia}
//    };
//    var posting = $.ajax(oOptions);
//    var $select = $('#' + cmbDistrito);
//    $select.find('option').remove();
//    posting.done(function (response, textStatus, jqXHR) {
//        response = JSON.parse(response);
//        $.each(response, function (key, value)
//        {
//            $select.append('<option value=' + value.key + '>' + value.value + '</option>');
//        });
//    }).fail(function (response, textStatus, jqXHR) {
//        console.log(textStatus);
//    });
//}
//function getCentosPoblados(ubigeo, cmbCentroPob) {
//    var oOptions = {
//        type: 'POST',
//        url: base_url + 'index.php/caratulaController/getCentroPob',
//        data: {'ubigeo': ubigeo}
//    };
//    var posting = $.ajax(oOptions);
//    var $select = $('#' + cmbCentroPob);
//    $select.find('option').remove();
//    posting.done(function (response, textStatus, jqXHR) {
//        response = JSON.parse(response);
//        $.each(response, function (key, value)
//        {
//            $select.append('<option value=' + value.key + '>' + value.value + '</option>');
//        });
//    }).fail(function (response, textStatus, jqXHR) {
//        console.log(textStatus);
//    });
//}



$(function () {

    $('#div_NAC_DD').addClass('divoculto');
    $('#div_NAC_PP').addClass('divoculto');
    $('#div_NAC_DI').addClass('divoculto');
    $('#div_NAC_CP').addClass('divoculto');

    $('#div_INT_DD').addClass('divoculto');
    $('#div_INT_PP').addClass('divoculto');
    $('#div_INT_DI').addClass('divoculto');
    $('#div_INT_CP').addClass('divoculto');

    $('#frm_DOC_IDENT_TIPO').trigger('change');
    $('#frm_RELIGION').trigger('change');
    $('#frm_TSALUD').trigger('change');
    $('#frm_PAIS_NAC').trigger('change');
    $('#frm_TSALUD_7').trigger('change');
    $('#frm_INT_TIPOVIA').trigger('change');
    
})

$('#frm_DOC_IDENT_TIPO').change(function () {

    var tipoDoc = $('#frm_DOC_IDENT_TIPO').val();

    if (tipoDoc == 6 || tipoDoc == '') {
        fn_hideDiv('div_DOC_IDENT_NUM');
    } else {
        fn_showDiv('div_DOC_IDENT_NUM');
        $('#frm_DOC_IDENT_NUM').focus();
    }

    if (tipoDoc == 1) {
        $("#frm_DOC_IDENT_NUM").attr('maxlength', '8');
    } else {
        $("#frm_DOC_IDENT_NUM").attr('maxlength', '15');
    }
});
$('#frm_RELIGION').change(function () {
    ($(this).val() != 6) ? fn_hideDiv('div_RELIGION_ESP') : fn_showDiv('div_RELIGION_ESP') & $('#frm_RELIGION_ESP').focus();

});
$('#frm_TSALUD').change(function () {
    ($(this).val() != 7) ? fn_hideDiv('div_TSALUD_ESP') : fn_showDiv('div_TSALUD_ESP') & $('#frm_TSALUD_ESP').focus();
});
$('#frm_PAIS_NAC').change(function () {
    ($(this).val() != 'PERU') ? fn_hideDiv('nac_div') : fn_showDiv('nac_div') & $('#frm_NAC_CCDD').focus();
});
$('#frm_TSALUD_7').change(function () {
    ($('#frm_TSALUD_7').is(':checked')) ? fn_showDiv('div_TSALUD_7ESP') : fn_hideDiv('div_TSALUD_7ESP');
});

$('#frm_INT_TIPOVIA').change(function () {
    $('#frm_INT_TIPOVIA').val()!=7 ? fn_showDiv('padre_r') : fn_hideDiv('padre_r');
});


function reglaP1() {
    message = 'El número de pabellón se debe de encontrar entre 1 y 20';
    return ($('#frm_PABELLON').val() > 20 || $('#frm_PABELLON').val() == "") ? false : true;
}
function reglaP2() {
    message = 'El número de piso se debe de encontrar entre 1 y 5';
    return ($('#frm_PISO').val() > 5 || $('#frm_PISO').val() < 1) ? false : true;
}
function reglaP3() {
    message = 'El número de ala se debe de encontrar entre 1 y 20';
    return ($('#frm_ALA').val() > 20 || $('#frm_ALA').val() < 1) ? false : true;
}
function reglaP4() {
    message = 'El número de celda se debe de encontrar entre 1 y 5';
    return ($('#frm_CELDA').val() > 5 || $('#frm_CELDA').val() < 1) ? false : true;
}
function reglaP5() {
    var check002 = $("input[type='checkbox']:checked").length;
    if (check002 == 0) {
        message = 'Debe seleccionar al menos una opción';
        return (check002 == 0) ? false : true;
    } else{
        if ( $('#frm_TSALUD_8').is(':checked') && ( $('#frm_TSALUD_1').is(':checked') || $('#frm_TSALUD_2').is(':checked') || $('#frm_TSALUD_3').is(':checked') || $('#frm_TSALUD_4').is(':checked') || $('#frm_TSALUD_5').is(':checked') || $('#frm_TSALUD_6').is(':checked') || $('#frm_TSALUD_7').is(':checked')  )    ) {
            message = 'No debe haber información sobre tipo de seguro cuando NO tiene seguro';
            return false;
        }else{
            return true;
        }
    }
}

function regla3_1() {
    message = 'Edad Incorrecta, los valores se deben de encontrar entre 18 y 98';
    return ($('#frm_EDAD').val() > 98 || $('#frm_EDAD').val() < 18) ? false : verificar_edad();
}
function regla3_2() {
    message = 'El día de nacimiento se debe de encontrar entre 1 y 31';
    return ($('#frm_FEC_NAC_DIA').val() > 31 || $('#frm_FEC_NAC_DIA').val() < 1) ? false : validarfecha();

}
function regla3_3() {
    message = 'El mes de nacimiento se debe de encontrar entre 1 y 12';
    return ($('#frm_FEC_NAC_MES').val() > 12 || $('#frm_FEC_NAC_MES').val() < 1) ? false : validarfecha();
}
function regla3_4() {
    message = 'El año de nacimiento se debe encontrar entre 1900 y 2000';
    return ($('#frm_FEC_NAC_ANIO').val() > 2000 || $('#frm_FEC_NAC_ANIO').val() < 1900) ? false : verificar_edad();
}
function regla4(value, el) {
    message = 'Error!, Si el tipo de vía es Carretera, entonces debe registrar información en Kilómetro';
    return ($('#frm_INT_TIPOVIA').val() == '5' && $('#frm_INT_KILOMETRO').val() == '') ? false : true;
}
function regla5() {
    message = 'Error!, Si registra información en Block, entonces debe tener información en Interior';
    return ($('#frm_INT_TIPOVIA').val() != '7' && $('#frm_INT_BLOCK').val() != '' && $('#frm_INT_INTERIOR').val() == '') ? false : true;
}

function regla5() {
    message = 'Error!, Si registra información en Block, entonces debe tener información en Interior';
    return ($('#frm_INT_TIPOVIA').val() != '7' && $('#frm_INT_BLOCK').val() != '' && $('#frm_INT_INTERIOR').val() == '') ? false : true;
}

function regla6() {
    var id = 0;
    if ($('#frm_INT_TIPOVIA').val() != '7' && $('#frm_INT_MZ').val() != '' && $('#frm_INT_LOTE').val() == '') {
        message = 'Error!,Si registra información en Manzana, entonces debe tener información en Lote';
        id = 1;
    } else if ($('#frm_INT_TIPOVIA').val() != '7' && $('#frm_INT_LOTE').val() != '' && $('#frm_INT_MZ').val() == '') {
        message = 'Error!,Si registra información en Lote, entonces debe tener información en Manzana';
        id = 1;
    } else if ($('#frm_INT_PUERTA').val() != 'SN' && ($('#frm_INT_MZ').val() != '' || $('#frm_INT_LOTE').val() !== '')) {
        message = 'Error!, Si registra información en puerta, entonces no debe registrar información en manzana o en lote';
        id = 1;
    }
    return (id == 1) ? false : true;
}

function regla7() {
    var id = true;
    var check1 = $("input[name='frm[INT_TELFIJO_TIENE]']:checked").val();
    if (check1 == 1) {
        if ($('#frm_INT_TELFIJO').val() == '') {
            message = 'Error!, Debe registrar un número de teléfono fijo';
            id = false;
        }
        else if ($('#frm_INT_TELFIJO_LDN').val() != '01' && $('#frm_INT_TELFIJO').val().length != 6) {
            message = 'Error!,Número de teléfono fijo no corresponde para provincia';
            id = false;
        } else if ($('#frm_INT_TELFIJO_LDN').val() == '01' && $('#frm_INT_TELFIJO').val().length != 7) {
            message = 'Error!, Número de teléfono fijo no corresponde para Lima';
            id = false;
        } else if ($('#frm_INT_TELFIJO_LDN').val() == '01' && ($('#frm_INT_TELFIJO').val().substring(0, 1) == 1 || $('#frm_INT_TELFIJO').val().substring(0, 1) == 8 || $('#frm_INT_TELFIJO').val().substring(0, 1) == 9)) {
            message = 'Error!, Número de teléfono fijo no corresponde para Lima';
            id = false;
        }
    }
    return id;
}
function validarfecha() {
    var dia = $('#frm_FEC_NAC_DIA').val();
    var mes = $('#frm_FEC_NAC_MES').val();
    var anio = $('#frm_FEC_NAC_ANIO').val();
    var numDias = 0;

    if (dia == '' && mes != '') {
        message = 'Registe día de nacimiento';
        $('#frm_FEC_NAC_DIA').focus();
        return false;
    } else if (mes == '' && anio != '') {
        message = 'Registe mes de nacimiento';
        $('#frm_FEC_NAC_MES').focus();
        return false;
    } else if (anio != '') {
        if (mes != '' && anio != '' && dia != '') {
            switch (parseInt(mes)) {
                case 1:
                case 3:
                case 5:
                case 7:
                case 8:
                case 10:
                case 12:
                    numDias = 31;
                    break;
                case 4:
                case 6:
                case 9:
                case 11:
                    numDias = 30;
                    break;
                case 2:
                    if (comprobarSiBisisesto(parseInt(anio))) {
                        numDias = 29
                    } else {
                        numDias = 28
                    }
                    ;
                    if (parseInt(dia) > numDias) {
                        message = 'Registro de fecha erróneo, es año bisiesto?';
                        return false;
                    }
                    break;
                default:
                    message = 'Día registrado incorrecto';
                    return false;
            }
        }
        else {
            message = 'Ingrese el mes o el a\xf1o segun corresponda';
            return false;
        }
    }
    else {
        return true;
    }
    return true;
}

function verificar_edad() {

    var edad = $('#frm_EDAD').val();
    var fechaActual = new Date()
    var diaActual = fechaActual.getDate();
    var mmActual = fechaActual.getMonth() + 1;
    var yyyyActual = fechaActual.getFullYear();

    var diaCumple = $('#frm_FEC_NAC_DIA').val();
    var mmCumple = $('#frm_FEC_NAC_MES').val();
    var yyyyCumple = $('#frm_FEC_NAC_ANIO').val();


    if (edad != '' && yyyyCumple != '') {
        message = 'Debe registrar edad correcta o modificar fecha de nacimiento';
        if (mmCumple.substr(0, 1) == 0) {
            mmCumple = mmCumple.substring(1, 2);
        }
        if (diaCumple.substr(0, 1) == 0) {
            diaCumple = diaCumple.substring(1, 2);
        }
        var edad1 = yyyyActual - yyyyCumple;
        if ((mmActual < mmCumple) || (mmActual == mmCumple && diaActual < diaCumple)) {
            edad1--;
        }
        if (edad != edad1) {
            return false;
        } else {
            return true;
        }

    } else {
        return true;
    }
}



function comprobarSiBisisesto(anio) {
    if ((anio % 100 != 0) && ((anio % 4 == 0) || (anio % 400 == 0))) {
        return true;
    }
    else {
        return false;
    }
}
function regla2() {
    var tipoDoc = $('#frm_DOC_IDENT_TIPO').val();
    message = 'Debe registrar DNI correcto'
    return (tipoDoc == 1 && $('#frm_DOC_IDENT_NUM').val().length != 8) ? false : true;
}




//
//
//function validarCCDD() {
//    var hccdd = $('#h_ccdd').val();
//    $('#frm_CCDD').val(hccdd);
//}
//function validarCCDD_N() {
//    var hccdd = $('#h_ccdd_n').val();
//    alert(hccdd)
//    $('#frm_NAC_CCDD').val(hccdd);
//}
//function validarCCDD_I() {
//    var hccdd = $('#h_ccdd_i').val();
//    $('#frm_INT_CCDD').val(hccdd);
//}

// -------------------------------------- Lugar de nacimiento ---------------------------------------

function getProvinciasNac(iddepartamento, cmbProvincia, cmbDistrito) {
    var oOptions = {
        type: 'POST',
        url: base_url + 'index.php/caratulaController/getProvinciasNac',
        data: {'iddepartamento': iddepartamento}
    };
    var posting = $.ajax(oOptions);
    var $select = $('#' + cmbProvincia);
    $select.find('option').remove();
    $('#' + cmbDistrito).find('option').remove();
    posting.done(function (response, textStatus, jqXHR) {
        response = JSON.parse(response);
        $.each(response, function (key, value)
        {
            $select.append('<option value=' + value.key + '>' + value.value + '</option>');
        });
    }).fail(function (response, textStatus, jqXHR) {
        console.log(textStatus);
    });
}

function getDistritosNac(iddepartamento, idprovincia, cmbDistrito) {
    var oOptions = {
        type: 'POST',
        url: base_url + 'index.php/caratulaController/getDistritosNac',
        data: {'iddepartamento': iddepartamento, 'idprovincia': idprovincia}
    };
    var posting = $.ajax(oOptions);
    var $select = $('#' + cmbDistrito);
    $select.find('option').remove();
    posting.done(function (response, textStatus, jqXHR) {
        response = JSON.parse(response);
        $.each(response, function (key, value)
        {
            $select.append('<option value=' + value.key + '>' + value.value + '</option>');
        });
    }).fail(function (response, textStatus, jqXHR) {
        console.log(textStatus);
    });
}
function getCentosPobladosNac(ubigeo, cmbCentroPob) {
    var oOptions = {
        type: 'POST',
        url: base_url + 'index.php/caratulaController/getCentroPobNac',
        data: {'ubigeo': ubigeo}
    };
    var posting = $.ajax(oOptions);
    var $select = $('#' + cmbCentroPob);
    $select.find('option').remove();
    posting.done(function (response, textStatus, jqXHR) {
        response = JSON.parse(response);
        $.each(response, function (key, value)
        {
            $select.append('<option value=' + value.key + '>' + value.value + '</option>');
        });
    }).fail(function (response, textStatus, jqXHR) {
        console.log(textStatus);
    });
}

$('#frm_NAC_CCDD').change(function () {
    getProvinciasNac(this.value, 'frm_NAC_CCPP', 'frm_NAC_CCDI');
});

$('#frm_NAC_CCPP').change(function () {
    var iddepartamento = $('#frm_NAC_CCDD').val();
    getDistritosNac(iddepartamento, this.value, 'frm_NAC_CCDI');
});

$('#frm_NAC_CCDI').change(function () {
    var ubigeo = $('#frm_NAC_CCDD').val() + $('#frm_NAC_CCPP').val() + $('#frm_NAC_CCDI').val();
    getCentosPobladosNac(ubigeo, 'frm_NAC_CCCP');
});

// -------------------------------- lugar de nacimiento -----------------------------------

function getProvinciasInt(iddepartamento, cmbProvincia, cmbDistrito) {
    var oOptions = {
        type: 'POST',
        url: base_url + 'index.php/caratulaController/getProvinciasInt',
        data: {'iddepartamento': iddepartamento}
    };
    var posting = $.ajax(oOptions);
    var $select = $('#' + cmbProvincia);
    $select.find('option').remove();
    $('#' + cmbDistrito).find('option').remove();
    posting.done(function (response, textStatus, jqXHR) {
        response = JSON.parse(response);
        $.each(response, function (key, value)
        {
            $select.append('<option value=' + value.key + '>' + value.value + '</option>');
        });
    }).fail(function (response, textStatus, jqXHR) {
        console.log(textStatus);
    });
}

function getDistritosInt(iddepartamento, idprovincia, cmbDistrito) {
    var oOptions = {
        type: 'POST',
        url: base_url + 'index.php/caratulaController/getDistritosInt',
        data: {'iddepartamento': iddepartamento, 'idprovincia': idprovincia}
    };
    var posting = $.ajax(oOptions);
    var $select = $('#' + cmbDistrito);
    $select.find('option').remove();
    posting.done(function (response, textStatus, jqXHR) {
        response = JSON.parse(response);
        $.each(response, function (key, value)
        {
            $select.append('<option value=' + value.key + '>' + value.value + '</option>');
        });
    }).fail(function (response, textStatus, jqXHR) {
        console.log(textStatus);
    });
}
function getCentosPobladosInt(ubigeo, cmbCentroPob) {


    var oOptions = {
        type: 'POST',
        url: base_url + 'index.php/caratulaController/getCentroPobInt',
        data: {'ubigeo': ubigeo}
    };
    var posting = $.ajax(oOptions);
    var $select = $('#' + cmbCentroPob);
    $select.find('option').remove();
    posting.done(function (response, textStatus, jqXHR) {
        response = JSON.parse(response);
        $.each(response, function (key, value)
        {
            $select.append('<option value=' + value.key + '>' + value.value + '</option>');
        });
    }).fail(function (response, textStatus, jqXHR) {
        console.log(textStatus);
    });
}


$('#frm_INT_CCDD').change(function () {
    getProvinciasInt(this.value, 'frm_INT_CCPP', 'frm_INT_CCDI');
});

$('#frm_INT_CCPP').change(function () {
    var iddepartamento = $('#frm_INT_CCDD').val();
    getDistritosInt(iddepartamento, this.value, 'frm_INT_CCDI');
});

$('#frm_INT_CCDI').change(function () {
    var ubigeo = $('#frm_INT_CCDD').val() + $('#frm_INT_CCPP').val() + $('#frm_INT_CCDI').val();
    getCentosPobladosInt(ubigeo, 'frm_INT_CCCP');
});

// -------------------------------------- pais de nacimiento ---------------------------------------
//function getPais() {
//    var pais = $('#h_pais').val();
//    var oOptions = {
//        type: 'POST',
//        url: base_url + 'index.php/caratulaController/getPais',
//        data: {}
//    };
//    var posting = $.ajax(oOptions);
//    var $select = $('#frm_PAIS_NAC');
//    $select.find('option').remove();
//    posting.done(function (response, textStatus, jqXHR) {
//        response = JSON.parse(response);
//        $.each(response, function (key, value)
//        {
//            if (pais == value.key) {
//                $select.append('<option selected value=' + value.key + '>' + value.value + '</option>');
//            } else {
//                $select.append('<option value=' + value.key + '>' + value.value + '</option>');
//            }
//        });
//    }).fail(function (response, textStatus, jqXHR) {
//        console.log(textStatus);
//    });
//}




// -------------------------------- lugar de nacimiento -----------------------------------
//function getDepartamentoNac() {
//    
//    var hccdd=$('#h_ccdd_n').val();
//   
//        var oOptions = {
//        type: 'POST',
//        url: base_url + 'index.php/caratulaController/getDepartamentoNac',
//        data: {}
//        };
//        var posting = $.ajax(oOptions);
//        var $select = $('#frm_NAC_CCDD');
//        $select.find('option').remove();
//        $('#frm_NAC_CCPP').find('option').remove();
//        $('#frm_NAC_CCDI').find('option').remove();
//        $('#frm_NAC_CCCP').find('option').remove();
//        posting.done(function(response, textStatus, jqXHR) {
//            response = JSON.parse(response);
//            $.each(response, function(key, value)
//            {
//                if (hccdd==value.key){
//                    $select.append('<option selected value=' + value.key + '>' + value.value + '</option>');
//                    getProvinciasNac(hccdd, 'frm_NAC_CCPP', 'frm_NAC_CCDI');
//                }else {
//                    $select.append('<option value=' + value.key + '>' + value.value + '</option>');
//                }
//            });
//        }).fail(function(response, textStatus, jqXHR) {
//            console.log(textStatus);   
//        });
//}
//function getProvinciasNac(iddepartamento, cmbProvincia, cmbDistrito) {
//    var hccpp_n=$('#h_ccpp_n').val();
//    var ccdd=$('#frm_NAC_CCDD').val();
//    var oOptions = {
//        type: 'POST',
//        url: base_url + 'index.php/caratulaController/getProvinciasNac',
//        data: {'iddepartamento': iddepartamento}
//    };
//    var posting = $.ajax(oOptions);
//    var $select = $('#' + cmbProvincia);
//    $select.find('option').remove();
//    $('#' + cmbDistrito).find('option').remove();
//    $('#frm_NAC_CCCP').find('option').remove();
//    posting.done(function(response, textStatus, jqXHR) {
//        response = JSON.parse(response);
//        $.each(response, function(key, value)
//        {
//            if (hccpp_n==value.key){
//                    $select.append('<option selected value=' + value.key + '>' + value.value + '</option>');
//                    getDistritosNac(ccdd,hccpp_n,'frm_NAC_CCDI');
//                }else {
//                    $select.append('<option value=' + value.key + '>' + value.value + '</option>');
//            }
//        });
//    }).fail(function(response, textStatus, jqXHR) {
//        console.log(textStatus);
//    });
//}
//function getDistritosNac(iddepartamento, idprovincia, cmbDistrito) {
//    
//    var hccdi=$('#h_ccdi_n').val();
//    var ccdd=$('#frm_NAC_CCDD').val();
//    var ccpp=$('#frm_NAC_CCPP').val();
//    
//    var oOptions = {
//        type: 'POST',
//        url: base_url + 'index.php/caratulaController/getDistritosNac',
//        data: {'iddepartamento': iddepartamento, 'idprovincia': idprovincia}
//    };
//    var posting = $.ajax(oOptions);
//    var $select = $('#' + cmbDistrito);
//    $select.find('option').remove();
//    posting.done(function(response, textStatus, jqXHR) {
//        response = JSON.parse(response);
//        $.each(response, function(key, value)
//        {
//            if (hccdi==value.key){
//                $select.append('<option selected value=' + value.key + '>' + value.value + '</option>');
//                getCentroPobNac(ccdd,ccpp,hccdi,'frm_NAC_CCCP');
//            }else {
//                $select.append('<option value=' + value.key + '>' + value.value + '</option>');
//            }
//        });
//    }).fail(function(response, textStatus, jqXHR) {
//        console.log(textStatus);
//    });
//}
//function getCentroPobNac(iddepartamento, idprovincia, idDistrito, centroP) {
//    var hcccd=$('#h_cccp_n').val();
//    var ubigeo=iddepartamento+idprovincia+idDistrito;  
//    var oOptions = {
//        type: 'POST',
//        url: base_url + 'index.php/caratulaController/getCentroPobNac',
//        data: {'ubigeo': ubigeo }
//    };
//    var posting = $.ajax(oOptions);
//    var $select = $('#' + centroP);
//    $select.find('option').remove();
//    posting.done(function(response, textStatus, jqXHR) {
//        response = JSON.parse(response);
//        $.each(response, function(key, value)
//        {
//            if (hcccd==value.key){
//                $select.append('<option selected value=' + value.key + '>' + value.value + '</option>');
//            }else {
//                $select.append('<option value=' + value.key + '>' + value.value + '</option>');
//            }
//        });
//    }).fail(function(response, textStatus, jqXHR) {
//        console.log(textStatus);
//    });
//}
//$('#frm_NAC_CCDD').change(function() {
//    var departamento = $('#frm_NAC_CCDD option:selected').text();
//    $('#frm_NAC_DD').val((departamento === 'SELECCIONE') ? '' : departamento);
//    getProvinciasNac(this.value, 'frm_NAC_CCPP', 'frm_NAC_CCDI');
//});
//$('#frm_NAC_CCPP').change(function() {
//    var provincia = $('#frm_NAC_CCPP option:selected').text();
//    $('#frm_NAC_PP').val((provincia === 'SELECCIONE') ? '' : provincia);
//    
//    var iddepartamento = $('#frm_NAC_CCDD').val();
//    getDistritosNac(iddepartamento, this.value, 'frm_NAC_CCDI');
//});
//$('#frm_NAC_CCDI').change(function() {
//    var distrito = $('#frm_NAC_CCDI option:selected').text();
//    $('#frm_NAC_DI').val((distrito === 'SELECCIONE') ? '' : distrito);  
//    
//    var iddepartamento = $('#frm_NAC_CCDD').val();
//    var idprovincia = $('#frm_NAC_CCPP').val();
//    getCentroPobNac(iddepartamento, idprovincia, this.value, 'frm_NAC_CCCP');
//});
//$('#frm_NAC_CCCP').change(function() {
//    var centroP = $('#frm_NAC_CCCP option:selected').text();
//    $('#frm_NAC_CP').val((centroP === 'SELECCIONE') ? '' : centroP);  
//});

// -------------------------------- lugar de Residencia -----------------------------------
//function getDepartamentoInt() {
//
//    var hccdd = $('#h_ccdd_i').val();
//
//    var oOptions = {
//        type: 'POST',
//        url: base_url + 'index.php/caratulaController/getDepartamentoNac',
//        data: {}
//    };
//    var posting = $.ajax(oOptions);
//    var $select = $('#frm_INT_CCDD');
//    $select.find('option').remove();
//    $('#frm_INT_CCPP').find('option').remove();
//    $('#frm_INT_CCDI').find('option').remove();
//    $('#frm_INT_CCCP').find('option').remove();
//    posting.done(function (response, textStatus, jqXHR) {
//        response = JSON.parse(response);
//        $.each(response, function (key, value)
//        {
//            if (hccdd == value.key) {
//                $select.append('<option selected value=' + value.key + '>' + value.value + '</option>');
//                getProvinciasInt(hccdd, 'frm_INT_CCPP', 'frm_INT_CCDI');
//            } else {
//                $select.append('<option value=' + value.key + '>' + value.value + '</option>');
//            }
//        });
//    }).fail(function (response, textStatus, jqXHR) {
//        console.log(textStatus);
//    });
//}


// ------------------------------------------ Código LDN ---------------------------------------------------

function getLDN() {
    var ldn = $('#h_ldn').val();
    var oOptions = {
        type: 'POST',
        url: base_url + 'index.php/caratulaController/getLDN',
        data: {}
    };
    var posting = $.ajax(oOptions);
    var $select = $('#frm_INT_TELFIJO_LDN');
    $select.find('option').remove();
    posting.done(function (response, textStatus, jqXHR) {
        response = JSON.parse(response);
        $.each(response, function (key, value)
        {
            if (ldn == value.key) {
                $select.append('<option selected value=' + value.key + '>' + value.value + '</option>');
            } else {
                $select.append('<option value=' + value.key + '>' + value.value + '</option>');
            }
        });
    }).fail(function (response, textStatus, jqXHR) {
        console.log(textStatus);
    });
}