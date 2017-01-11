$(function () {
    //TRIGGERS
    $('#frm_P101').trigger('change');
    $('input:radio[name="frm[P102]"]').trigger('change');
    $('input:radio[name="frm[P102A_6]"]').trigger('change');
    $('input:radio[name="frm[P102A_9]"]').trigger('change');
})


$('#frm_P101').change(function () {

    ($('#frm_P101').val() == '9' || $('#frm_P101').val() == '6') ? fn_showDiv('div_P101_ESP') : fn_hideDiv('div_P101_ESP');
    $('#frm_P101').val() == '10' ? fn_hideDiv('padre1') : fn_showDiv('padre1');
});

$('input:radio[name="frm[P102]"]').change(function () {
    $('#frm_P102_2').is(':checked') ? fn_hideDiv('padre1') : fn_showDiv('padre1');
});

$('input:radio[name="frm[P102A_6]"]').change(function () {
    $('#frm_P102A_6_1').is(':checked') ? fn_showDiv('div_P102A_6ESP') : fn_hideDiv('div_P102A_6ESP');
});


$('input:radio[name="frm[P102A_9]"]').change(function () {
    $('#frm_P102A_9_1').is(':checked') ? fn_showDiv('div_P102A_9ESP') : fn_hideDiv('div_P102A_9ESP');
});


function reglaP101() {
    message = 'No corresponden respuestas para persona nacida fuera de Perú';
    //return ($('#frm_PABELLON').val()>20 || $('#frm_PABELLON').val()=="" ) ? false : true;
    var string = 'PAIS_NAC';
    var pais = '';
    $.ajax({async: false,
        url: base_url + 'index.php/caratulaController/getCampos',
        type: 'POST',
        data: {campos: string,
            INTERNO_ID: $('#frm_INTERNO_ID').val(),
            CUEST_NRO: $('#frm_CUEST_NRO').val()},
        success: function (data, textStatus, jqXHR) {
            data = JSON.parse(data);
            pais = data[0].PAIS_NAC;
        }
    })
    if (pais != 'PERU' && $('#frm_P101').val() < 7) {
        return false;
    }
    else {
        return true;
    }
}



function reglaP102A(val, obj) {

    message = 'No corresponden respuestas para persona nacida fuera de Perú';

    var string = 'PAIS_NAC';
    var pais = '';
    $.ajax({async: false,
        url: base_url + 'index.php/caratulaController/getCampos',
        type: 'POST',
        data: {campos: string,
            INTERNO_ID: $('#frm_INTERNO_ID').val(),
            CUEST_NRO: $('#frm_CUEST_NRO').val()},
        success: function (data, textStatus, jqXHR) {
            data = JSON.parse(data);
            pais = data[0].PAIS_NAC;
        }
    })
    if (pais != 'PERU' && val == 1) {
        return false;
    }
    else {
        return true;
    }
}
function getPaisNac() {

    var string = 'PAIS_NAC';
    var pais = '';
    $.ajax({async: false,
        url: base_url + 'index.php/caratulaController/getCampos',
        type: 'POST',
        data: {campos: string,
            INTERNO_ID: $('#frm_INTERNO_ID').val(),
            CUEST_NRO: $('#frm_CUEST_NRO').val()},
        success: function (data, textStatus, jqXHR) {
            data = JSON.parse(data);
            pais = data[0].PAIS_NAC;
        }
    })
    return pais;
}

function reglaP103_3(val, obj) {
    var p101 = $('#frm_P101').val();
    var p103_1 = $('input:radio[name="frm[P103_1]"]:checked').val();
    var p103_2 = $('input:radio[name="frm[P103_2]"]:checked').val();
    var p103_3 = val;

    message = 'Menciona no saber leer, hablar o escribir castellano; pero es el idioma que aprendió de niño';

    return (p101 == 7 && (p103_1 == 2 && p103_2 == 2 && p103_3 == 2)) ? false : true;
}

function reglaP103_2(val, obj) {
    var p101 = $('#frm_P101').val();
    message = 'Incoherencia de información entre P103, No habla castellano y P102A, Sí habla castellano';
    return (p101 == 1 && val == 2) ? false : true;
}