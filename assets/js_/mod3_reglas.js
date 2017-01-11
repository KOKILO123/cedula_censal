function regla_P304_4_A(val, el) {
    message = 'Debe haber información en alguna de las alternativas si ha declarado que está estudiando';
    return $('#frm_P303_1').val() == 1 && (val == '' & $('#frm_P304_2_A').val() == '' & $('#frm_P304_3_A').val() == '') ? false : true;
}

function regla_P307(val, el) {
    message = 'Verificar respuesta si no le sirve, el motivo por el que participa será diferente';
    return (val == 2 && $('#frm_P306').val() < 3) ? false : true;
}

function regla_P309A(val, el) {
    message = 'Debe haber información en P309A si indica que tiene alguna dolencia o enfermedad';
    return val == 1 && $('#frm_P309A').val() == "" ? false : true;
}

function regla_P316(val, el) {
    message = 'Incoherencia: Nunca lo visita su familia pero si tiene visita frecuente de algún miembro del entorno familiar';
    return (val < 3 | val == 5 | val == 6 | val == 7) && $('#frm_P315').val() == 8 ? false : true;
}

/*
 * 
 PREGUNTA	:	P319_7
 UNIVERSO	:	Para todos los EEPP
 VERIFICACIÓN	:	Si (P319_7 = 1 AND (P319_1 = 1 OR P319_2 = 1 OR P319_3 = 1 OR P319_4 = 1 OR P319_5 = 1 OR P319_6 = 1)),  ERROR
 MENSAJE	:	“No puede responder No sabe junto con las demás alternativas”
 
 PREGUNTA	:	P319_7ESP
 UNIVERSO	:	Para todos los EEPP
 VERIFICACIÓN	:	Si (P319_6 = 1 AND P319_6ESP = “”),  ERROR
 MENSAJE	:	“Debe haber información en Especifique”
 */

function regla_P318(val, el) {
    message = 'Error en género declarado en Carátula con la respuesta registrada';
    return val == 6 && getGenero() == 1 ? false : true;
}

function regla_P319(val, el) {
    message = 'No puede responder No sabe junto con las demás alternativas';

    var checkeds = $('#P319 :checked').length;

    var p7 = $('#frm_P319_7')
    var p1 = $('#frm_P319_1')
    var p2 = $('#frm_P319_2')
    var p3 = $('#frm_P319_3')
    var p4 = $('#frm_P319_4')
    var p5 = $('#frm_P319_5')
    var p6 = $('#frm_P319_6')

    return p7.is(':checked') & (checkeds > 1) ? false : true;

}

function getGenero() {
    // message = 'No puede ser el anterior E.P. igual al actual'; 
    var string = 'GENERO';
    var gen = 0;
    $.ajax({async: false,
        url: base_url + 'index.php/caratulaController/getCampos',
        type: 'POST',
        data: {campos: string,
            INTERNO_ID: $('#frm_INTERNO_ID').val(),
            CUEST_NRO: $('#frm_CUEST_NRO').val()},
        success: function (data, textStatus, jqXHR) {
            data = JSON.parse(data);
            gen = data[0].GENERO;
        }
    });

    return gen;
}