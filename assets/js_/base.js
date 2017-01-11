/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
var message = "El campo es requerido";
var formObserve = null;
var functionObserveCallback = null;
//var rules = null;
var messageFunc = function () {
    return message;
};

function showMessage(msg) {
//    if (Android) {
//        Android.showToast(msg);
//    } else {
    alert(msg);
//    }
}


function fn_enable(ctrl) {
    $(ctrl).removeAttr("disabled");
}

function regla_ESPECIFIQUE(val, el) {
    message = 'Debe registrar información en Especifique';
    return val == '' ? false : true;
}

function fn_disable(ctrl, flag) {
    if (flag) {
        $(ctrl).removeAttr('checked');
        $(ctrl).attr("disabled", "disabled");
    } else {
        $(ctrl).val('').attr("disabled", "disabled");
    }
}

function fn_enread(ctrl) {
    $(ctrl).removeAttr("readonly");
}

function fn_disread(ctrl, flag) {
    if (flag) {
        $(ctrl).attr("readonly", "readonly");
    } else {
        $(ctrl).val('').attr("readonly", "readonly");
    }
}

function fn_clean(ctrl, tipo) {
    switch (tipo) {
        case 'radio':
            {
                $(ctrl).removeAttr('checked');
//                $(ctrl).trigger('change');
            }
            break;
        default:
        {
            $(ctrl).val('');
        }
    }
}

function dateDiff(date1, date2) {
    return  (date1.getTime() - date2.getTime()) >= 0;
}
/**
 * Determina si una fecha es considerada válida. Ademas, se puede utilizar el
 * segundo parametro para controlar la fecha máxima permintida.
 *
 * @param {str} txtDate Fecha en formato text m[m]/d[d]/yyyy
 * @param {date} date Fecha en formato date
 * @returns {Boolean}
 */
function isDate(txtDate, date)
{
    var currVal = txtDate;
    if (currVal == '')
        return false;
    //Declare Regex
    var rxDatePattern = /^(\d{1,2})(\/|-)(\d{1,2})(\/|-)(\d{4})$/;
    var dtArray = currVal.match(rxDatePattern); // is format OK?

    if (dtArray == null)
        return false;

    //Checks for mm/dd/yyyy format.
    dtMonth = dtArray[1];
    dtDay = dtArray[3];
    dtYear = dtArray[5];

    if (dtMonth < 1 || dtMonth > 12)
        return false;
    else if (dtDay < 1 || dtDay > 31)
        return false;
    else if ((dtMonth == 4 || dtMonth == 6 || dtMonth == 9 || dtMonth == 11) && dtDay == 31)
        return false;
    else if (dtMonth == 2)
    {
        var isleap = (dtYear % 4 == 0 && (dtYear % 100 != 0 || dtYear % 400 == 0));
        if (dtDay > 29 || (dtDay == 29 && !isleap))
            return false;
    }
    if (date) {
        return dateDiff(date, new Date(dtYear, dtMonth - 1, dtDay));
    }
    return true;
}

$.validator.addMethod("alfanumericopuntocoma", function (value, element) {
    return this.optional(element) || /^[a-zñA-ZÑ0-9\sáéíóúÁÉÍÓÚ.,-]*$/i.test(value);
}, "Ingrese un dato alfanumerico punto, coma o guíon válido"
        );

$.validator.addMethod("alfanumericoguion", function (value, element) {
    return this.optional(element) || /^[a-zñA-ZÑ0-9\sáéíóúÁÉÍÓÚ-]*$/i.test(value);
}, "Ingrese un dato alfanumerico guíon válido"
        );

$.validator.addMethod("alfanumerico", function (value, element) {
    return this.optional(element) || /^[a-zñA-ZÑ0-9\sáéíóúÁÉÍÓÚ]*$/i.test(value);
}, "Ingrese un dato alfanumerico valido"
        );

$.validator.addMethod("alfanumericoz", function (value, element) {
    return this.optional(element) || /^[a-zñA-ZÑ1-9\sáéíóúÁÉÍÓÚ]*$/i.test(value);
}, "Ingrese un dato alfanumerico valido"
        );

$.validator.addMethod("regex", function (value, element, args) {
    if (args.indexOf('regex=') >= 0) {
        args = args.replace('regex=', '');
        args = '(^' + args.replace(/\(/gi, '[').replace(/\)/gi, ']').replace(/,/gi, '$|') + '$)';
        regex = new RegExp(args, 'i');
//        console.log(regex);
        return this.optional(element) || regex.test(value);
    }
    return true;
}, "Ingrese un dato valido"
        );

$.validator.addMethod("alfabeto", function (value, element) {
    return this.optional(element) || /^[a-zñA-ZÑ\sáéíóúÁÉÍÓÚ]*$/i.test(value);
}, "Ingrese un alfabeto valido"
        );

$.validator.addMethod("fijo", function (value, element) {
    return this.optional(element) || /^[0-9]{6,9}$/i.test(value);
}, "Ingrese un número fijo valido"
        );

$.validator.addMethod("celular", function (value, element) {
    return this.optional(element) || /(^[\*\#]{0,1}[0-9]{9}$)/i.test(value);
}, "Ingrese un número fijo valido"
        );

$.validator.addMethod("puerta", function (value, element) {
    return this.optional(element) || /(^[0-9]{4}$|^[a-zA-Z]{1}$|^[0-9]{4}[a-zA-Z]{1}$|^(SN)$)/i.test(value);
}, "Ingrese una puerta valida"
        );

$.validator.addMethod("url", function (value, element) {
    return this.optional(element) || /[-a-zA-Z0-9@:%_\+.~#?&//=]{2,256}\.[a-z]{2,4}\b(\/[-a-zA-Z0-9@:%_\+.~#?&//=]*)?/i.test(value);
}, "Ingrese una URL valida"
        );

$.validator.addMethod("rangeopcional", function (value, element, options) {
    var error = false;

    var valor_0 = options[0];
    var valor_1 = options[1];
    var valor_2 = options[2];

    if (value == '') {
        error = true;
    }
    else if (valor_2 == value) {
        error = true;
    } else if (value >= valor_0 && value <= valor_1) {
        error = true
    }

    return error;
}, "Ingrese un dato valido");

$.validator.addMethod("rangeopcionales", function (value, element, options) {
    var error = false;

    var valor_0 = options[0];
    var valor_1 = options[1];
    var valor_2 = options[2];
    var valor_3 = options[3];
    var valor_4 = options[4];
    var valor_5 = options[5];

    if (value == '') {
        error = true;
    }
    else if ($.inArray(parseInt(value), [valor_2, valor_3, valor_4, valor_5]) !== -1) {
        error = true;
    } else if (value >= valor_0 && value <= valor_1) {
        error = true
    }

    return error;
}, "Ingrese un dato valido");

$.validator.addMethod("requiredCallback", function (value, element, options) {
    var error = false;
    var _func = options;
    if (_func !== undefined) {
        var func = window[_func];
        if (func && typeof func === "function") {
            error = func(value, element);
        }
    }
    return error;
}, messageFunc);

$.validator.addMethod("rangeopcional2", function (value, element, options) {
    var error = false;

    var valor_0 = options[0];
    var valor_1 = options[1];
    var valor_2 = options[2];
    var valor_3 = options[3];

    if (value == '') {
        error = true;
    }
    else if (valor_3 == value) {
        error = true;
    } else if (valor_2 == value) {
        error = true;
    } else if (value >= valor_0 && value <= valor_1) {
        error = true
    }

    return error;
}, "Ingrese un dato valido");

$.validator.addMethod("regExp", function (value, element, options) {

    var filtroReg = new RegExp(options);
    var pasaFiltro = filtroReg.test(value);

    return (this.optional(element) || pasaFiltro);

}, "Ingrese un dato valido"
        );

function limitInputNumber() {
    $('input[type=number]').keypress(function (e) {
//    if(isNaN(this.value)){
//        this.value = null;
//        e.preventDefault();
//        return false;
//    }
        if ($.hasData(this)) {
            var nchars = parseInt($(this).data('length')) - 1;
            if (this.value.length > nchars) {
                this.value = this.value.slice(0, nchars);
            } else if (this.value === '') {
                this.value = this.value.slice(0, nchars);
            }
        }
    });
}

function performSubmitHandler(_form, _json) {
    var _vjson = _json;
    if (!$.isPlainObject(_json)) {
        _vjson = $.parseJSON(_json);
    }
    var _func = _vjson['submitHandler'];
    var _funce = _vjson['invalidHandler'];
    if (_func !== undefined) {
        var func = window[_func];
        if (func && typeof func === "function") {
            _vjson['submitHandler'] = function (form) {
                func(form);
            };
        }
    }
    if (_funce !== undefined) {
        var funce = window[_funce];
        if (funce && typeof funce === "function") {
            _vjson['invalidHandler'] = function (form, validator) {
                funce(form, validator);
            };
        }
    }
    $(_form).validate(_vjson);
}

function performSubmitMatrixHandler(_form, _json) {
    $(_form).validate({});
    var _vjson = _json;
    if (!$.isPlainObject(_json)) {
        _vjson = $.parseJSON(_json);
    }
    var reglas = _vjson['rules'];
    $.each(reglas, function (selector, regla) {
        $(selector).each(function () {
            $(this).rules('add', regla);
        });
    });
}

function pad(str, max) {
    str = str.toString();
    return str.length < max ? pad("0" + str, max) : str;
}

function mayusculas() {
    $('input:text').change(function () {
        $(this).val(this.value.toUpperCase());
    });
}

var range = function (start, end, step) {
    var range = [];
    var typeofStart = typeof start;
    var typeofEnd = typeof end;

    if (step === 0) {
        throw TypeError("Step cannot be zero.");
    }

    if (typeofStart == "undefined" || typeofEnd == "undefined") {
        throw TypeError("Must pass start and end arguments.");
    } else if (typeofStart != typeofEnd) {
        throw TypeError("Start and end arguments must be of same type.");
    }

    typeof step == "undefined" && (step = 1);

    if (end < start) {
        step = -step;
    }

    if (typeofStart == "number") {

        while (step > 0 ? end >= start : end <= start) {
            range.push(start);
            start += step;
        }

    } else if (typeofStart == "string") {

        if (start.length != 1 || end.length != 1) {
            throw TypeError("Only strings with one character are supported.");
        }

        start = start.charCodeAt(0);
        end = end.charCodeAt(0);

        while (step > 0 ? end >= start : end <= start) {
            range.push(String.fromCharCode(start));
            start += step;
        }

    } else {
        throw TypeError("Only string and number types are supported");
    }

    return range;

}

function getCalendarIndex(_anio, _mes) {
    var anio = parseInt(_anio);
    var mes = parseInt(_mes);
    var anioFin = new Date().getFullYear(), anioIni = anioFin - 5;
    var co = 0;
    for (i = anioFin; i >= anioIni; i--) {
        co += 1;
        if (anio === i) {
            break;
        }
    }
    return (co > 0) ? (co * 12 - mes) : co;// - 1;
}

//private function getIndexMesAnio($anio, $mes) {
//    $anioFin = date('Y');
//    $anioIni = $anioFin - 5;
//    $anios = range($anioIni, $anioFin);
//    $indexes = array_flip($anios);
//    $index = array_key_exists($anio, $indexes) ? $indexes[$anio] * 12 + $mes : -1;
//    return $index;
//}
function GuardadoParcial(form) {
    var action = form.attr('action');
    var oOptions = {
        type: 'POST',
        url: action,
        data: form.serializeArray()
    };
    var posting = $.ajax(oOptions);

    posting.done(function (response, textStatus, jqXHR) {
        var r = confirm("Datos Guardados Parcialmente \n ¿Desea Salir del Cuestionario?");
        if (r == true) {
            var url = CI.base_url + 'encuestador/index/viviendas/' + anio_retorno_menu + '/' + conglomerado_retorno_menu;
            location.href = url;
        }
    }).fail(function (response, textStatus, jqXHR) {
        alert("Error al Guardar Parcialmente");

    });
}


function guardarNota(pantalla) {
    var nota = $('textarea[name="notas"]').val();
//    if ($.trim(nota) !== '') {
    var url = base_url + 'index.php/notaController/guardar';
    var oOptions = {
        type: 'POST',
        url: url,
        data: {'PANTALLA_ID': pantalla, 'DESCRIPCION': nota}
    };
    var posting = $.ajax(oOptions);

    posting.done(function (response, textStatus, jqXHR) {
        alert('La nota fue guardada con éxito');
    }).fail(function (response, textStatus, jqXHR) {
        alert("Error al guardar la nota");
    });
//    }
}


function leerNota(pantalla) {
    var nota = $('textarea[name="notas"]').val();
    if ($.trim(nota) === '') {
        var url = base_url + 'index.php/notaController/leer';
        var oOptions = {
            type: 'POST',
            url: url,
            data: {'PANTALLA_ID': pantalla}
        };
        var posting = $.ajax(oOptions);

        posting.done(function (response, textStatus, jqXHR) {
            response = JSON.parse(response);
            $('textarea[name="notas"]').val(response.DESCRIPCION);
        }).fail(function (response, textStatus, jqXHR) {
            alert("Error al leer la nota");
        });
    }
}

$(function () {
    if ($('#frm_id').length > 0) {
        if (rules) {
            performSubmitHandler('#frm_id', rules);
        }
//        mayusculas();
    }
    limitInputNumber();
    var ctrlNotas = $('#notas');
    if (ctrlNotas.length > 0) {
        ctrlNotas.click(function () {
            leerNota(ctrlNotas.data('pantalla'));
            $('#mensajenota').toggleClass("divoculto");
        });
        $('#guardarNota').click(function () {
            guardarNota(ctrlNotas.data('pantalla'));
            $('#mensajenota').addClass("divoculto");
        });

        $('#cancelarNota').click(function () {
            $('#mensajenota').addClass("divoculto");
        });
    }
});

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

function mensajeMinimoUnCheck(aCheck) {
    $(aCheck).change(function () {
        var count = $(aCheck + ':checked').length;
        if (count > 0) {
            $(aCheck).next('label.error').remove();
        }
    });
}
//div_M4P25
//frm_M4P25_7
function validaRespuestaMultipleExcluyente(avar, from, to, evar) {
    var aCheck = 'frm_' + avar + '_';
    var count = $('input:checkbox[id^="' + aCheck + '"]:checked').not('input:checkbox[id="' + aCheck + evar + '"]').length;
    for (i = from; i <= to; i++) {
        var _aCheck = '#' + aCheck + i;
        $(_aCheck).change(function () {
            count = $('input:checkbox[id^="' + aCheck + '"]:checked').not('input:checkbox[id="' + aCheck + evar + '"]').length;
            $('input:checkbox[id^="' + aCheck + '"]').next('label.error').remove();
            if (count === 0) {
                fn_enable('#' + aCheck + evar);
            } else {
                fn_disable('#' + aCheck + evar, true);
            }
        });
    }
    if (count === 0) {
        fn_enable('#' + aCheck + evar);
    } else {
        fn_disable('#' + aCheck + evar, true);
    }
    $('#' + aCheck + evar).change(function () {
        if ($(this).is(':checked')) {
            fn_disable('input:checkbox[id^="' + aCheck + '"]', true);
//            $('input:checkbox[id^="' + aCheck + '"]').trigger('click');
            fn_enable('#' + aCheck + evar);
            $('#' + aCheck + evar).prop('checked', true);
        } else {
            $('input:checkbox[id^="' + aCheck + '"]').not('input:checkbox[id="' + aCheck + evar + '"]').removeAttr("disabled");
        }
    });
}

function validaRespuestaMultipleExcluyenteClave(avar, from, to, evar, clave) {
    var aCheck = 'frm_' + avar + '_';
    var count = $('input:checkbox[id^="' + aCheck + '"]:checked').not('input:checkbox[id="' + aCheck + evar + clave + '"]').length;
    for (i = from; i <= to; i++) {
        var _aCheck = '#' + aCheck + i + clave;
        $(_aCheck).change(function () {
            count = $('input:checkbox[id^="' + aCheck + '"]:checked').not('input:checkbox[id="' + aCheck + evar + clave + '"]').length;
            $('input:checkbox[id^="' + aCheck + '"]').next('label.error').remove();
            if (count === 0) {
                fn_enable('#' + aCheck + evar + clave);
            } else {
                fn_disable('#' + aCheck + evar + clave, true);
            }
        });
    }
    if (count === 0) {
        fn_enable('#' + aCheck + evar + clave);
    } else {
        fn_disable('#' + aCheck + evar + clave, true);
    }
    $('#' + aCheck + evar + clave).change(function () {
        if ($(this).is(':checked')) {
            fn_disable('input:checkbox[id^="' + aCheck + '"]', true);
//            $('input:checkbox[id^="' + aCheck + '"]').trigger('click');
            fn_enable('#' + aCheck + evar + clave);
            $('#' + aCheck + evar + clave).prop('checked', true);
        } else {
            $('input:checkbox[id^="' + aCheck + '"]').not('input:checkbox[id="' + aCheck + evar + clave + '"]').removeAttr("disabled");
        }
    });
}

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
//$('input[type="checkbox"]').change(function() {
//    if ($(this).is(':checked')) {
//        if ($('#frm_id').length > 0) {
//            $('#c' + this.id).remove();
//        }
//    } else {
//        if ($('#frm_id').length > 0) {
//            $('#frm_id').append('<input type="hidden" name="' + this.name + '" id="c' + this.id + '" value="" >');
//        }
//    }
//});
//
$('input[type="radio"]').click(function () {
    var control = $(this);

    if (control.attr('checked')) {
        control.removeAttr('checked');
    } else {
        control.attr('checked', true);
    }
});

//$('input[type="checkbox"]').change(function() {
//    if ($(this).is(':checked')) {
//        if ($('#frm_id').length > 0) {
//            $('#c' + this.id).remove();
//        }
//    } else {
//        if ($('#frm_id').length > 0) {
//            $('#frm_id').append('<input type="hidden" name="' + this.name + '" id="c' + this.id + '" value="" >');
//        }
//    }
//});


function getDepartamento(cmbdpto,cmbprov,cmbdist) {

    var selectdpto = $("'#" + cmbdpto + "'");
    var selectprov = $("'#" + cmbprov + "'");
    var selectdist = $("'#" + cmbdist + "'");
    $.ajax({
        type: 'POST',
        url: base_url + 'index.php/caratulaController/getDepartamento',
        success: function (data, textStatus, jqXHR) {
            data = JSON.parse(data);
            $.each(data, function (key, value) {
                selectdpto.append('<option value=' + value.key + '>' + value.value + '</option>');
            })
        }
    })

    var oOptions = {
        type: 'POST',
        url: base_url + 'index.php/caratulaController/getDepartamento',
        data: {}
    };
    var posting = $.ajax(oOptions);
    var $select = $('#frm_CCDD');
    $select.find('option').remove();
    $('#frm_CCPP').find('option').remove();
    $('#frm_CCDI').find('option').remove();
    $('#frm_CCCP').find('option').remove();
    posting.done(function (response, textStatus, jqXHR) {
        response = JSON.parse(response);
        $.each(response, function (key, value)
        {
            if (hccdd == value.key) {
                $select.append('<option selected value=' + value.key + '>' + value.value + '</option>');
                getProvincias(hccdd, 'frm_CCPP', 'frm_CCDI');
            } else {
                $select.append('<option value=' + value.key + '>' + value.value + '</option>');
            }
        });
    }).fail(function (response, textStatus, jqXHR) {
        console.log(textStatus);
    });
}

function getProvincias(iddepartamento, cmbProvincia, cmbDistrito) {

    var hccpp = $('#h_ccpp').val();
    var ccdd = $('#frm_CCDD').val();

    var oOptions = {
        type: 'POST',
        url: base_url + 'index.php/caratulaController/getProvincias',
        data: {'iddepartamento': iddepartamento}
    };
    var posting = $.ajax(oOptions);
    var $select = $('#' + cmbProvincia);
    $select.find('option').remove();
    $('#' + cmbDistrito).find('option').remove();
    $('#frm_CCCP').find('option').remove();
    posting.done(function (response, textStatus, jqXHR) {
        response = JSON.parse(response);
        $.each(response, function (key, value)
        {
            if (hccpp == value.key) {
                $select.append('<option selected value=' + value.key + '>' + value.value + '</option>');
                getDistritos(ccdd, hccpp, 'frm_CCDI');
            } else {
                $select.append('<option value=' + value.key + '>' + value.value + '</option>');
            }
        });
    }).fail(function (response, textStatus, jqXHR) {
        console.log(textStatus);
    });
}

function getDistritos(iddepartamento, idprovincia, cmbDistrito) {

    var hccdi = $('#h_ccdi').val();
    var ccdd = $('#frm_CCDD').val();
    var ccpp = $('#frm_CCPP').val();

    var oOptions = {
        type: 'POST',
        url: base_url + 'index.php/caratulaController/getDistritos',
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
                getCentroPob(ccdd, ccpp, hccdi, 'frm_CCCP');
            } else {
                $select.append('<option value=' + value.key + '>' + value.value + '</option>');
            }
        });
    }).fail(function (response, textStatus, jqXHR) {
        console.log(textStatus);
    });
}

function getCentroPob(iddepartamento, idprovincia, idDistrito, centroP) {

    var hcccd = $('#h_cccp').val();

    var ubigeo = iddepartamento + idprovincia + idDistrito;
    var oOptions = {
        type: 'POST',
        url: base_url + 'index.php/caratulaController/getCentroPob',
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
