$(function () {
    //TRIGGERS

    $('#frm_P215A').select2();
    $('#frm_P202').trigger('change')
    $('#frm_P203').trigger('change')
    $('#frm_P204').trigger('change')
    $('#frm_P205').trigger('change')
    $('#frm_P208').trigger('change')
    $('#frm_P209').trigger('change')
    $('#frm_P210').trigger('change')
    $('#frm_P211').trigger('change')
    $('#frm_P212').trigger('change')
    $('#frm_P214').trigger('change')
    $('#frm_P215').trigger('change')
    $('#frm_P214A_7').trigger('change')

    $('#div_P201_DD').addClass('divoculto');
    $('#div_P201_PP').addClass('divoculto');
    $('#div_P201_DI').addClass('divoculto');

    getDepartamentoNac();

})

$('#frm_P204').change(function () {
    var divs = 'div_P205,div_P205_ESP,div_P206,div_P207,div_P207_NO,div_P208,div_P208_ESP';
    this.value > 1 ? fn_hideDiv(divs) : fn_showDiv(divs);
});
$('#frm_P205').change(function () {
    var divs = 'div_P206,div_P207,div_P207_NO,div_P208,div_P208_ESP';
    this.value > 1 ? fn_hideDiv(divs) : fn_showDiv(divs);
});
$('#frm_P209').change(function () {
    var divs = 'div_P210,div_P210_ESP';
    this.value > 1 ? fn_hideDiv(divs) : fn_showDiv(divs);
});
$('#frm_P211').change(function () {
    var divs = 'div_P212,div_P212_ESP,div_P213,div_P213_ESP';
    this.value > 1 ? fn_hideDiv(divs) : fn_showDiv(divs);
});
$('#frm_P212').change(function () {
    var divs = 'div_P213,div_P213_ESP';
    this.value > 1 ? fn_showDiv(divs) : fn_hideDiv(divs);
});
$('#frm_P214').change(function () {
    var divs = 'P214';
    this.value > 1 ? fn_hideDiv(divs) : fn_showDiv(divs);
});
$('#frm_P215').change(function () {
    var divs = 'div_P215A';
    this.value > 1 ? fn_hideDiv(divs) : fn_showDiv(divs);
});
$('#frm_P202').change(function () {
    $(this).val() == 13 ? fn_showDiv('div_P202_ESP') : fn_hideDiv('div_P202_ESP');
});
$('#frm_P203').change(function () {
    $(this).val() == 7 ? fn_showDiv('div_P203_ESP') : fn_hideDiv('div_P203_ESP');
});
$('#frm_P205').change(function () {
    $(this).val() == 3 ? fn_showDiv('div_P205_ESP') : fn_hideDiv('div_P205_ESP');
});
$('#frm_P208').change(function () {
    $(this).val() == 6 ? fn_showDiv('div_P208_ESP') : fn_hideDiv('div_P208_ESP');
});
$('#frm_P210').change(function () {
    $(this).val() == 7 ? fn_showDiv('div_P210_ESP') : fn_hideDiv('div_P210_ESP');
});
$('#frm_P212').change(function () {
    $(this).val() == 7 ? fn_showDiv('div_P212_ESP') : fn_hideDiv('div_P212_ESP');
});
$('#frm_P214A_7').change(function () {
    $(this).is(':checked') ? fn_showDiv('div_P214A_6ESP') : fn_hideDiv('div_P214A_6ESP')
});
/* * *************************************************************************************** */


// -------------------------------- lugar de nacimiento -----------------------------------
function getDepartamentoNac() {

    var hccdd = $('#h_ccdd_n').val();

    var oOptions = {
        type: 'POST',
        url: base_url + 'index.php/caratulaController/getDepartamentoNac',
        data: {}
    };
    var posting = $.ajax(oOptions);
    var $select = $('#frm_P201_CCDD');
    $select.find('option').remove();
    $('#frm_P201_CCPP').find('option').remove();
    $('#frm_P201_CCDI').find('option').remove();
    posting.done(function (response, textStatus, jqXHR) {
        response = JSON.parse(response);
        $.each(response, function (key, value)
        {
            if (hccdd == value.key) {
                $select.append('<option selected value=' + value.key + '>' + value.value + '</option>');
                getProvinciasNac(hccdd, 'frm_P201_CCPP', 'frm_P201_CCDI');
            } else {
                $select.append('<option value=' + value.key + '>' + value.value + '</option>');
            }
        });
    }).fail(function (response, textStatus, jqXHR) {
        console.log(textStatus);
    });
}
function getProvinciasNac(iddepartamento, cmbProvincia, cmbDistrito) {
    var hccpp_n = $('#h_ccpp_n').val();
    var ccdd = $('#frm_P201_CCDD').val();
    var oOptions = {
        type: 'POST',
        url: base_url + 'index.php/caratulaController/getProvinciasNac',
        data: {'iddepartamento': iddepartamento}
    };
    var posting = $.ajax(oOptions);
    var $select = $('#' + cmbProvincia);
    $select.find('option').remove();
    $('#' + cmbDistrito).find('option').remove();
    $('#frm_P201_CCCP').find('option').remove();
    posting.done(function (response, textStatus, jqXHR) {
        response = JSON.parse(response);
        $.each(response, function (key, value)
        {
            if (hccpp_n == value.key) {
                $select.append('<option selected value=' + value.key + '>' + value.value + '</option>');
                getDistritosNac(ccdd, hccpp_n, 'frm_P201_CCDI');
            } else {
                $select.append('<option value=' + value.key + '>' + value.value + '</option>');
            }
        });
    }).fail(function (response, textStatus, jqXHR) {
        console.log(textStatus);
    });
}
function getDistritosNac(iddepartamento, idprovincia, cmbDistrito) {

    var hccdi = $('#h_ccdi_n').val();
    var ccdd = $('#frm_P201_CCDD').val();
    var ccpp = $('#frm_P201_CCPP').val();

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
            if (hccdi == value.key) {
                $select.append('<option selected value=' + value.key + '>' + value.value + '</option>');
                getCentroPobNac(ccdd, ccpp, hccdi, 'frm_P201_CCCP');
            } else {
                $select.append('<option value=' + value.key + '>' + value.value + '</option>');
            }
        });
    }).fail(function (response, textStatus, jqXHR) {
        console.log(textStatus);
    });
}
function getCentroPobNac(iddepartamento, idprovincia, idDistrito, centroP) {
    var hcccd = $('#h_cccp_n').val();
    var ubigeo = iddepartamento + idprovincia + idDistrito;
    var oOptions = {
        type: 'POST',
        url: base_url + 'index.php/caratulaController/getCentroPobNac',
        data: {'ubigeo': ubigeo}
    };
    var posting = $.ajax(oOptions);
    var $select = $('#' + centroP);
    $select.find('option').remove();
    posting.done(function (response, textStatus, jqXHR) {
        response = JSON.parse(response);
        $.each(response, function (key, value)
        {
            if (hcccd == value.key) {
                $select.append('<option selected value=' + value.key + '>' + value.value + '</option>');
            } else {
                $select.append('<option value=' + value.key + '>' + value.value + '</option>');
            }
        });
    }).fail(function (response, textStatus, jqXHR) {
        console.log(textStatus);
    });
}
$('#frm_P201_CCDD').change(function () {
    var departamento = $('#frm_P201_CCDD option:selected').text();
    $('#frm_P201_DD').val((departamento === 'SELECCIONE') ? '' : departamento);
    getProvinciasNac(this.value, 'frm_P201_CCPP', 'frm_P201_CCDI');
});
$('#frm_P201_CCPP').change(function () {
    var provincia = $('#frm_P201_CCPP option:selected').text();
    $('#frm_P201_PP').val((provincia === 'SELECCIONE') ? '' : provincia);

    var iddepartamento = $('#frm_P201_CCDD').val();
    getDistritosNac(iddepartamento, this.value, 'frm_P201_CCDI');
});
$('#frm_P201_CCDI').change(function () {
    var distrito = $('#frm_P201_CCDI option:selected').text();
    $('#frm_P201_DI').val((distrito === 'SELECCIONE') ? '' : distrito);

    var iddepartamento = $('#frm_P201_CCDD').val();
    var idprovincia = $('#frm_P201_CCPP').val();
    getCentroPobNac(iddepartamento, idprovincia, this.value, 'frm_P201_CCCP');
});


// -------------------------------- lugar de Residencia -----------------------------------
function getDepartamentoInt() {

    var hccdd = $('#h_ccdd_i').val();

    var oOptions = {
        type: 'POST',
        url: base_url + 'index.php/caratulaController/getDepartamentoNac',
        data: {}
    };
    var posting = $.ajax(oOptions);
    var $select = $('#frm_INT_CCDD');
    $select.find('option').remove();
    $('#frm_INT_CCPP').find('option').remove();
    $('#frm_INT_CCDI').find('option').remove();
    $('#frm_INT_CCCP').find('option').remove();
    posting.done(function (response, textStatus, jqXHR) {
        response = JSON.parse(response);
        $.each(response, function (key, value)
        {
            if (hccdd == value.key) {
                $select.append('<option selected value=' + value.key + '>' + value.value + '</option>');
                getProvinciasInt(hccdd, 'frm_INT_CCPP', 'frm_INT_CCDI');
            } else {
                $select.append('<option value=' + value.key + '>' + value.value + '</option>');
            }
        });
    }).fail(function (response, textStatus, jqXHR) {
        console.log(textStatus);
    });
}
function getProvinciasInt(iddepartamento, cmbProvincia, cmbDistrito) {
    var hccpp = $('#h_ccpp_i').val();
    var ccdd = $('#frm_INT_CCDD').val();

    var oOptions = {
        type: 'POST',
        url: base_url + 'index.php/caratulaController/getProvinciasInt',
        data: {'iddepartamento': iddepartamento}
    };
    var posting = $.ajax(oOptions);
    var $select = $('#' + cmbProvincia);
    $select.find('option').remove();
    $('#' + cmbDistrito).find('option').remove();
    $('#frm_INT_CCCP').find('option').remove();
    posting.done(function (response, textStatus, jqXHR) {
        response = JSON.parse(response);
        $.each(response, function (key, value)
        {
            if (hccpp == value.key) {
                $select.append('<option selected value=' + value.key + '>' + value.value + '</option>');
                getDistritosInt(ccdd, hccpp, 'frm_INT_CCDI');
            } else {
                $select.append('<option value=' + value.key + '>' + value.value + '</option>');
            }
        });
    }).fail(function (response, textStatus, jqXHR) {
        console.log(textStatus);
    });
}
function getDistritosInt(iddepartamento, idprovincia, cmbDistrito) {

    var hccdi = $('#h_ccdi_n').val();
    var ccdd = $('#frm_INT_CCDD').val();
    var ccpp = $('#frm_INT_CCPP').val();

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
            if (hccdi == value.key) {
                $select.append('<option selected value=' + value.key + '>' + value.value + '</option>');
                getCentroPobInt(ccdd, ccpp, hccdi, 'frm_INT_CCCP');
            } else {
                $select.append('<option value=' + value.key + '>' + value.value + '</option>');
            }
        });
    }).fail(function (response, textStatus, jqXHR) {
        console.log(textStatus);
    });
}
function getCentroPobInt(iddepartamento, idprovincia, idDistrito, centroP) {

    var hcccd = $('#h_cccp_i').val();

    var ubigeo = iddepartamento + idprovincia + idDistrito;

    var oOptions = {
        type: 'POST',
        url: base_url + 'index.php/caratulaController/getCentroPobInt',
        data: {'ubigeo': ubigeo}
    };
    var posting = $.ajax(oOptions);
    var $select = $('#' + centroP);
    $select.find('option').remove();
    posting.done(function (response, textStatus, jqXHR) {
        response = JSON.parse(response);
        $.each(response, function (key, value)
        {
            if (hcccd == value.key) {
                $select.append('<option selected value=' + value.key + '>' + value.value + '</option>');
            } else {
                $select.append('<option value=' + value.key + '>' + value.value + '</option>');
            }
        });
    }).fail(function (response, textStatus, jqXHR) {
        console.log(textStatus);
    });
}
$('#frm_INT_CCDD').change(function () {
    var departamento = $('#frm_INT_CCDD option:selected').text();
    $('#frm_INT_DD').val((departamento === 'SELECCIONE') ? '' : departamento);
    getProvinciasInt(this.value, 'frm_INT_CCPP', 'frm_INT_CCDI');
});
$('#frm_INT_CCPP').change(function () {
    var provincia = $('#frm_INT_CCPP option:selected').text();
    $('#frm_INT_PP').val((provincia === 'SELECCIONE') ? '' : provincia);

    var iddepartamento = $('#frm_INT_CCDD').val();
    getDistritosInt(iddepartamento, this.value, 'frm_INT_CCDI');
});
$('#frm_INT_CCDI').change(function () {
    var distrito = $('#frm_INT_CCDI option:selected').text();
    $('#frm_INT_DI').val((distrito === 'SELECCIONE') ? '' : distrito);

    var iddepartamento = $('#frm_INT_CCDD').val();
    var idprovincia = $('#frm_INT_CCPP').val();
    getCentroPobInt(iddepartamento, idprovincia, this.value, 'frm_INT_CCCP');
});
$('#frm_INT_CCCP').change(function () {
    var centroP = $('#frm_INT_CCCP option:selected').text();
    $('#frm_INT_CP').val((centroP === 'SELECCIONE') ? '' : centroP);
});


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