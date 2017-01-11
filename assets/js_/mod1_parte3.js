$(function () {
    //TRIGGERS
    $('#frm_P107_1').trigger('change');
    $('#frm_P107_2').trigger('change');
    $('#frm_P107_3').trigger('change');
    $('#frm_P107_4').trigger('change');
    $('#frm_P107_5').trigger('change');
    $('#frm_P107_6').trigger('change');
    $('#frm_P107_7').trigger('change');
    $('#frm_P107_8').trigger('change');
    $('#frm_P107_9').trigger('change');
    $('#frm_P107_10').trigger('change');
    $('#frm_P107_11').trigger('change');
    $('#frm_P107_12').trigger('change');

    $('#frm_P107D_1').trigger('change');
    $('#frm_P107D_2').trigger('change');
    $('#frm_P107D_3').trigger('change');
    $('#frm_P107D_4').trigger('change');
    $('#frm_P107D_5').trigger('change');
    $('#frm_P107D_6').trigger('change');
    $('#frm_P107D_7').trigger('change');
    $('#frm_P107D_8').trigger('change');
    $('#frm_P107D_9').trigger('change');
    $('#frm_P107D_10').trigger('change');
    $('#frm_P107D_11').trigger('change');
    $('#frm_P107D_12').trigger('change');

    $('input:radio[name="frm[P107A_1]"]').trigger('change');
    $('input:radio[name="frm[P107A_2]"]').trigger('change');
    $('input:radio[name="frm[P107A_3]"]').trigger('change');
    $('input:radio[name="frm[P107A_4]"]').trigger('change');
    $('input:radio[name="frm[P107A_5]"]').trigger('change');
    $('input:radio[name="frm[P107A_6]"]').trigger('change');
    $('input:radio[name="frm[P107A_7]"]').trigger('change');
    $('input:radio[name="frm[P107A_8]"]').trigger('change');
    $('input:radio[name="frm[P107A_9]"]').trigger('change');
    $('input:radio[name="frm[P107A_10]"]').trigger('change');
    $('input:radio[name="frm[P107A_11]"]').trigger('change');
    $('input:radio[name="frm[P107A_12]"]').trigger('change');

    $('input:radio[name="frm[P107A_1]"]').trigger('change');
    $('input:radio[name="frm[P107A_2]"]').trigger('change');
    $('input:radio[name="frm[P107A_3]"]').trigger('change');
    $('input:radio[name="frm[P107A_4]"]').trigger('change');
    $('input:radio[name="frm[P107A_5]"]').trigger('change');
    $('input:radio[name="frm[P107A_6]"]').trigger('change');
    $('input:radio[name="frm[P107A_7]"]').trigger('change');
    $('input:radio[name="frm[P107A_8]"]').trigger('change');
    $('input:radio[name="frm[P107A_9]"]').trigger('change');
    $('input:radio[name="frm[P107A_10]"]').trigger('change');
    $('input:radio[name="frm[P107A_11]"]').trigger('change');
    $('input:radio[name="frm[P1079A_12]"]').trigger('change');

    $('input:radio[name="frm[P107C_1]"]').trigger('change');
    $('input:radio[name="frm[P107C_2]"]').trigger('change');
    $('input:radio[name="frm[P107C_3]"]').trigger('change');
    $('input:radio[name="frm[P107C_4]"]').trigger('change');
    $('input:radio[name="frm[P107C_5]"]').trigger('change');
    $('input:radio[name="frm[P107C_6]"]').trigger('change');
    $('input:radio[name="frm[P107C_7]"]').trigger('change');
    $('input:radio[name="frm[P107C_8]"]').trigger('change');
    $('input:radio[name="frm[P107C_9]"]').trigger('change');
    $('input:radio[name="frm[P107C_10]"]').trigger('change');
    $('input:radio[name="frm[P107C_11]"]').trigger('change');
    $('input:radio[name="frm[P107C_12]"]').trigger('change');

    $('#frm_P108_3').trigger('change');
    $('#frm_P108_5').trigger('change');

    $('#frm_P109_1').trigger('change');
    $('#frm_P109_2').trigger('change');
    $('#frm_P109_3').trigger('change');

    $('#frm_P109A_1').trigger('change');
    $('#frm_P109A_2').trigger('change');
    $('#frm_P109A_3').trigger('change');

    $('input:radio[name="frm[P109C_1]"]').trigger('change');
    $('input:radio[name="frm[P109C_2]"]').trigger('change');
    $('input:radio[name="frm[P109C_3]"]').trigger('change');


    $('#frm_P110').trigger('change');

    $('input:radio[name="frm[P110B]"]').trigger('change');

    $('#frm_P110C').trigger('change');
});

//----------------------------------------------------------------------------------------------


//EVENTOS
/*
 PREGUNTA	:	P104_4_CCEE
 UNIVERSO	:	Para todos los EEPP
 VERIFICACIÓN	:	Si (P104_1 > 5 AND P104_4_CCEE <> “”),  Pase a P106
 Si (P104_1 < 6 AND P104_4_CCEE <> “”),  Pase a P105
 
 */
$('#frm_P107_1').change(function () {
    $('#frm_P107_1').val() != 1 ? fn_hideDiv('padre1') : fn_showDiv('padre1');
});

$('#frm_P107_2').change(function () {
    $('#frm_P107_2').val() != 1 ? fn_hideDiv('padre2') : fn_showDiv('padre2');
});

$('#frm_P107_3').change(function () {
    $('#frm_P107_3').val() != 1 ? fn_hideDiv('padre3') : fn_showDiv('padre3');
});

$('#frm_P107_4').change(function () {
    $('#frm_P107_4').val() != 1 ? fn_hideDiv('padre4') : fn_showDiv('padre4');
});

$('#frm_P107_5').change(function () {
    $('#frm_P107_5').val() != 1 ? fn_hideDiv('padre5') : fn_showDiv('padre5');
});

$('#frm_P107_6').change(function () {
    $('#frm_P107_6').val() != 1 ? fn_hideDiv('padre6') : fn_showDiv('padre6');
});

$('#frm_P107_7').change(function () {
    $('#frm_P107_7').val() != 1 ? fn_hideDiv('padre7') : fn_showDiv('padre7');
});

$('#frm_P107_8').change(function () {
    $('#frm_P107_8').val() != 1 ? fn_hideDiv('padre8') : fn_showDiv('padre8');
});

$('#frm_P107_9').change(function () {
    $('#frm_P107_9').val() != 1 ? fn_hideDiv('padre9') : fn_showDiv('padre9');
});

$('#frm_P107_10').change(function () {
    $('#frm_P107_10').val() != 1 ? fn_hideDiv('padre10') : fn_showDiv('padre10');
});

$('#frm_P107_11').change(function () {
    $('#frm_P107_11').val() != 1 ? fn_hideDiv('padre11') : fn_showDiv('padre11');
});

$('#frm_P107_12').change(function () {
    $('#frm_P107_12').val() != 1 ? fn_hideDiv('padre12,div_P107_12ESP') : fn_showDiv('padre12,div_P107_12ESP');
});

$('input:radio[name="frm[P107A_1]"]').change(function () {
    $('#frm_P107A_1_1').is(':checked') ? fn_showDiv('padre1_1') : fn_hideDiv('padre1_1');
});

$('input:radio[name="frm[P107A_2]"]').change(function () {
    $('#frm_P107A_2_1').is(':checked') ? fn_showDiv('padre2_1') : fn_hideDiv('padre2_1');
});

$('input:radio[name="frm[P107A_3]"]').change(function () {
    $('#frm_P107A_3_1').is(':checked') ? fn_showDiv('padre3_1') : fn_hideDiv('padre3_1');
});

$('input:radio[name="frm[P107A_4]"]').change(function () {
    $('#frm_P107A_4_1').is(':checked') ? fn_showDiv('padre4_1') : fn_hideDiv('padre4_1');
});

$('input:radio[name="frm[P107A_5]"]').change(function () {
    $('#frm_P107A_5_1').is(':checked') ? fn_showDiv('padre5_1') : fn_hideDiv('padre5_1');
});

$('input:radio[name="frm[P107A_6]"]').change(function () {
    $('#frm_P107A_6_1').is(':checked') ? fn_showDiv('padre6_1') : fn_hideDiv('padre6_1');
});

$('input:radio[name="frm[P107A_7]"]').change(function () {
    $('#frm_P107A_7_1').is(':checked') ? fn_showDiv('padre7_1') : fn_hideDiv('padre7_1');
});

$('input:radio[name="frm[P107A_8]"]').change(function () {
    $('#frm_P107A_8_1').is(':checked') ? fn_showDiv('padre8_1') : fn_hideDiv('padre8_1');
});

$('input:radio[name="frm[P107A_9]"]').change(function () {
    $('#frm_P107A_9_1').is(':checked') ? fn_showDiv('padre9_1') : fn_hideDiv('padre9_1');
});

$('input:radio[name="frm[P107A_10]"]').change(function () {
    $('#frm_P107A_10_1').is(':checked') ? fn_showDiv('padre10_1') : fn_hideDiv('padre10_1');
});

$('input:radio[name="frm[P107A_11]"]').change(function () {
    $('#frm_P107A_11_1').is(':checked') ? fn_showDiv('padre11_1') : fn_hideDiv('padre11_1');
});

$('input:radio[name="frm[P1079A_12]"]').change(function () {
    var este = $('input:radio[name="frm[P1079A_12]"]:checked').val();

    este == 1 ? fn_showDiv('padre12_1') : fn_hideDiv('padre12_1');

    if (este == 1) {
        fn_showDiv('padre12_1')
    }

    if (este == 2 && getGenero() == 2) {
        fn_hideDiv('padre12_1')
    } else {
        fn_showDiv('padre12_1');
    }
    if (este == 2 && getGenero() == 1) {
        fn_hideDiv('muj1')
    } else {
        fn_showDiv('muj1')
    }
});
//---------------------------------------------------------------------------------------------------
$('input:radio[name="frm[P107C_1]"]').change(function () {
    $('#frm_P107C_1_2').is(':checked') ? fn_showDiv('padre1_2') : fn_hideDiv('padre1_2');
});

$('input:radio[name="frm[P107C_2]"]').change(function () {
    $('#frm_P107C_2_2').is(':checked') ? fn_showDiv('padre2_2') : fn_hideDiv('padre2_2');
});

$('input:radio[name="frm[P107C_3]"]').change(function () {
    $('#frm_P107C_3_2').is(':checked') ? fn_showDiv('padre3_2') : fn_hideDiv('padre3_2');
});

$('input:radio[name="frm[P107C_4]"]').change(function () {
    $('#frm_P107C_4_2').is(':checked') ? fn_showDiv('padre4_2') : fn_hideDiv('padre4_2');
});

$('input:radio[name="frm[P107C_5]"]').change(function () {
    $('#frm_P107C_5_2').is(':checked') ? fn_showDiv('padre5_2') : fn_hideDiv('padre5_2');
});

$('input:radio[name="frm[P107C_6]"]').change(function () {
    $('#frm_P107C_6_2').is(':checked') ? fn_showDiv('padre6_2') : fn_hideDiv('padre6_2');
});

$('input:radio[name="frm[P107C_7]"]').change(function () {
    $('#frm_P107C_7_2').is(':checked') ? fn_showDiv('padre7_2') : fn_hideDiv('padre7_2');
});

$('input:radio[name="frm[P107C_8]"]').change(function () {
    $('#frm_P107C_8_2').is(':checked') ? fn_showDiv('padre8_2') : fn_hideDiv('padre8_2');
});

$('input:radio[name="frm[P107C_9]"]').change(function () {
    $('#frm_P107C_9_2').is(':checked') ? fn_showDiv('padre9_2') : fn_hideDiv('padre9_2');
});

$('input:radio[name="frm[P107C_10]"]').change(function () {
    $('#frm_P107C_10_2').is(':checked') ? fn_showDiv('padre10_2') : fn_hideDiv('padre10_2');
});

$('input:radio[name="frm[P107C_11]"]').change(function () {
    $('#frm_P107C_11_2').is(':checked') ? fn_showDiv('padre11_2') : fn_hideDiv('padre11_2');
});

$('input:radio[name="frm[P107C_12]"]').change(function () {

    $('#frm_P107C_12_2').is(':checked') ? fn_showDiv('padre12_2') : fn_hideDiv('padre12_2');

    var este = $('input:radio[name="frm[P107C_12]"]:checked').val();

    if (este == 1 && getGenero() == 2) {
        fn_hideDiv('padre12_1')
    } else {
        fn_showDiv('padre12_1');
    }
    if (este == 1 && getGenero() == 1) {
        fn_hideDiv('muj1')
    } else {
        fn_showDiv('muj1')
    }
});


//----------------------------------------------------------------------------------------

$('#frm_P107D_1').change(function () {
    $('#frm_P107D_1').val() != 12 ? fn_hideDiv('div_P107D_1ESP') : fn_showDiv('div_P107D_1ESP');
});

$('#frm_P107D_2').change(function () {
    $('#frm_P107D_2').val() != 12 ? fn_hideDiv('div_P107D_2ESP') : fn_showDiv('div_P107D_2ESP');
});

$('#frm_P107D_3').change(function () {
    $('#frm_P107D_3').val() != 12 ? fn_hideDiv('div_P107D_3ESP') : fn_showDiv('div_P107D_3ESP');
});

$('#frm_P107D_4').change(function () {
    $('#frm_P107D_4').val() != 12 ? fn_hideDiv('div_P107D_4ESP') : fn_showDiv('div_P107D_4ESP');
});

$('#frm_P107D_5').change(function () {
    $('#frm_P107D_5').val() != 12 ? fn_hideDiv('div_P107D_5ESP') : fn_showDiv('div_P107D_5ESP');
});

$('#frm_P107D_6').change(function () {
    $('#frm_P107D_6').val() != 12 ? fn_hideDiv('div_P107D_6ESP') : fn_showDiv('div_P107D_6ESP');
});

$('#frm_P107D_7').change(function () {
    $('#frm_P107D_7').val() != 12 ? fn_hideDiv('div_P107D_7ESP') : fn_showDiv('div_P107D_7ESP');
});

$('#frm_P107D_8').change(function () {
    $('#frm_P107D_8').val() != 12 ? fn_hideDiv('div_P107D_8ESP') : fn_showDiv('div_P107D_8ESP');
});

$('#frm_P107D_9').change(function () {
    $('#frm_P107D_9').val() != 12 ? fn_hideDiv('div_P107D_9ESP') : fn_showDiv('div_P107D_9ESP');
});

$('#frm_P107D_10').change(function () {
    $('#frm_P107D_10').val() != 12 ? fn_hideDiv('div_P107D_10ESP') : fn_showDiv('div_P107D_10ESP');
});

$('#frm_P107D_11').change(function () {
    $('#frm_P107D_11').val() != 12 ? fn_hideDiv('div_P107D_11ESP') : fn_showDiv('div_P107D_11ESP');
});

$('#frm_P107D_12').change(function () {
    $('#frm_P107D_12').val() != 12 ? fn_hideDiv('div_P107D_12ESP') : fn_showDiv('div_P107D_12ESP');

    var este = $(this).val();

    if (este != '' && getGenero() == 2) {
        fn_hideDiv('padre12_1');
    } else {
        fn_showDiv('padre12_1');
    }
    if (este != '' && getGenero() == 1) {
        fn_hideDiv('muj1');
    } else {
        fn_showDiv('muj1');
    }
});

$('#frm_P108_3').change(function () {
    $('#frm_P108_3').val() != 1 ? fn_hideDiv('div_P108_3ESP') : fn_showDiv('div_P108_3ESP');
});

$('#frm_P108_5').change(function () {
    $('#frm_P108_5').val() != 1 ? fn_hideDiv('div_P108_5ESP') : fn_showDiv('div_P108_5ESP');
});

$('#frm_P109_1').change(function () {
    $('#frm_P109_1').val() != 1 ? fn_hideDiv('padre_13') : fn_showDiv('padre_13');
});

$('#frm_P109_2').change(function () {
    $('#frm_P109_2').val() != 1 ? fn_hideDiv('padre_14') : fn_showDiv('padre_14');
});

$('#frm_P109_3').change(function () {
    $('#frm_P109_3').val() != 1 ? fn_hideDiv('padre_15') : fn_showDiv('padre_15');
});

$('#frm_P109A_1').change(function () {
    $('#frm_P109A_1').val() != 5 ? fn_hideDiv('div_P109A_1ESP') : fn_showDiv('div_P109A_1ESP');
});

$('#frm_P109A_2').change(function () {
    $('#frm_P109A_2').val() != 5 ? fn_hideDiv('div_P109A_2ESP') : fn_showDiv('div_P109A_2ESP');
});

$('#frm_P109A_3').change(function () {
    $('#frm_P109A_3').val() != 5 ? fn_hideDiv('div_P109A_3ESP') : fn_showDiv('div_P109A_3ESP');
});

//---------------------------------------------------------------------------------------------

$('input:radio[name="frm[P109C_1]"]').change(function () {
    $('#frm_P109C_1_1').is(':checked') ? fn_showDiv('div_P109D_1') : fn_hideDiv('div_P109D_1');
});

$('input:radio[name="frm[P109C_2]"]').change(function () {
    $('#frm_P109C_2_1').is(':checked') ? fn_showDiv('div_P109D_2') : fn_hideDiv('div_P109D_2');
});
/*
 * PREGUNTA : P109C_3
 
 UNIVERSO : Para todos los EEPP
 
 VERIFICACIÓN : Si (P109C_3 = 1),  Pase a P109D_3
 
 Si (P109C_3 = 2 AND GENERO = 2 AND ( EDAD >= 15 AND EDAD <= 49)),  Pase a P110 
 
 Si (P109C_3 = 2 AND GENERO = 2 AND (EDAD < 15 OR EDAD > 49)),  Pase a P111 
 
 Si (P109C_3 = 2 AND GENERO = 1),  Pase a P111
 */
$('input:radio[name="frm[P109C_3]"]').change(function () {
    $('#frm_P109C_3_1').is(':checked') ? fn_showDiv('div_P109D_3') : fn_hideDiv('div_P109D_3');
    var este = $('input:radio[name="frm[P109C_3]"]:checked').val();
    (este == 2 & getGenero() == 2 && (getEdad() < 15 && getEdad() > 49)) ? fn_hideDiv('div_P110') : fn_showDiv('div_P110');
    este == 2 && getGenero() == 1 ? fn_hideDiv('div_P110') : fn_showDiv('div_P110')
});

//-----------------------------------------------------------------------------------------------

$('#frm_P110').change(function () {
    $('#frm_P110').val() != 1 ? fn_hideDiv('muj2_2') : fn_showDiv('muj2_2');
});

$('input:radio[name="frm[P110B]"]').change(function () {
    $('#frm_P110B_2').is(':checked') ? fn_showDiv('div_P110C') : fn_hideDiv('div_P110C');
});

$('#frm_P110C').change(function () {
    $('#frm_P110C').val() != 7 ? fn_hideDiv('div_P110C_ESP') : fn_showDiv('div_P110C_ESP');
});




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