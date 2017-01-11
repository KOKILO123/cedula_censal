
function regla_P206(val, el) {
    message = 'Debe registrar información en P206 si es arma de fuego';
    return val == '' ? false : true;
}

function regla_P214_1(val, el) {

    var pase = true;
    if ($('#frm_P214A_7').is(':checked') && $('#P214 :checked').length > 1) {
        message = "No puede registrar No sabe junto con las otras alternativas";
        pase = false;
    } else if ($('#frm_P214').val() == 1 && $('#P214 :checked').length == 0) {
        message = "Debe registrar información en P214A";
        pase = false;
    } else {
        pase = true;
    }
    return pase;
}
/*
 * PREGUNTA	:	P219A
 UNIVERSO	:	Para todos los EEPP
 VERIFICACIÓN	:	Si (P219 = 1 AND P219A = “”),  ERROR
 MENSAJE	:	“Si afirma que ha sido sentenciado, debe declarar las veces”
 
 PREGUNTA	:	P220A
 UNIVERSO	:	Para todos los EEPP
 VERIFICACIÓN	:	Si (P220 = 1 AND P220A = “”),  ERROR
 MENSAJE	:	“Si afirma que ha sido sentenciado, debe declarar las veces”
 
 PREGUNTA	:	P223_n		para “n” de 1 a 3
 UNIVERSO	:	Para todos los EEPP
 VERIFICACIÓN	:	Si (P223_n > EDAD),  ERROR
 MENSAJE	:	“No puede ser la edad mayor a la registrada en Carátula”
 */

function regla_P219A(val, el) {
    message = 'Si afirma que ha sido sentenciado, debe declarar las veces';
    return val == '' && $('#frm_P219').val() == 1 ? false : true;
}
function regla_P220A(val, el) {
    message = 'Si afirma que ha sido sentenciado, debe declarar las veces';
    return val == '' && $('#frm_P220').val() == 1 ? false : true;
}

function regla_P223(val, el) {
    message = 'No puede ser la edad mayor a la registrada en Carátula';
    return val > getEdad() ? false : true;
}


function getEdad() {
    // message = 'No puede ser el anterior E.P. igual al actual'; 
    var string = 'EDAD';
    var gen = 0;
    $.ajax({async: false,
        url: base_url + 'index.php/caratulaController/getCampos',
        type: 'POST',
        data: {campos: string,
            INTERNO_ID: $('#frm_INTERNO_ID').val(),
            CUEST_NRO: $('#frm_CUEST_NRO').val()},
        success: function (data, textStatus, jqXHR) {
            data = JSON.parse(data);
            gen = data[0].EDAD;
        }
    });

    return gen;
}







