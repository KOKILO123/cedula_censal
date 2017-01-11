$('input[name="cargar_data"]').change(function () {
    $('#form_cargar_data').submit();
})


$(function () {
  getDepartamento();
  
  $('#div_DD').addClass('divoculto');
  $('#div_PP').addClass('divoculto');
  $('#div_DI').addClass('divoculto');
  $('#div_CP').addClass('divoculto');
   
    $('#frm_CCDD').trigger('change');
    $('#frm_CCPP').trigger('change');
    $('#frm_CCDI').trigger('change');
    $('#frm_CCCP').trigger('change');

})

function validarCCDD(){
    var hccdd=$('#h_ccdd').val();
    $('#frm_CCDD').val(hccdd);
}

function getDepartamento() {
    
    var hccdd=$('#h_ccdd').val();
   
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
        posting.done(function(response, textStatus, jqXHR) {
            response = JSON.parse(response);
            $.each(response, function(key, value)
            {
                if (hccdd==value.key){
                    $select.append('<option selected value=' + value.key + '>' + value.value + '</option>');
                    getProvincias(hccdd, 'frm_CCPP', 'frm_CCDI');
                }else {
                    $select.append('<option value=' + value.key + '>' + value.value + '</option>');
                }
            });
        }).fail(function(response, textStatus, jqXHR) {
            console.log(textStatus);   
        });
}

function getProvincias(iddepartamento, cmbProvincia, cmbDistrito) {
    
    var hccpp=$('#h_ccpp').val();
    var ccdd=$('#frm_CCDD').val();
    
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
        posting.done(function(response, textStatus, jqXHR) {
            response = JSON.parse(response);
            $.each(response, function(key, value)
            {
                if (hccpp==value.key){
                    $select.append('<option selected value=' + value.key + '>' + value.value + '</option>');
                    getDistritos(ccdd,hccpp,'frm_CCDI');
                }else {
                    $select.append('<option value=' + value.key + '>' + value.value + '</option>');
                }
            });
        }).fail(function(response, textStatus, jqXHR) {
            console.log(textStatus);   
        });
}

function getDistritos(iddepartamento, idprovincia, cmbDistrito) {
    
    var hccdi=$('#h_ccdi').val();
    var ccdd=$('#frm_CCDD').val();
    var ccpp=$('#frm_CCPP').val();
    
    var oOptions = {
        type: 'POST',
        url: base_url + 'index.php/caratulaController/getDistritos',
        data: {'iddepartamento': iddepartamento, 'idprovincia': idprovincia}
    };
    var posting = $.ajax(oOptions);
    var $select = $('#' + cmbDistrito);
    $select.find('option').remove();
    posting.done(function(response, textStatus, jqXHR) {
        response = JSON.parse(response);
        $.each(response, function(key, value)
        {
            if (hccdi==value.key){
                $select.append('<option selected value=' + value.key + '>' + value.value + '</option>');
                getCentroPob(ccdd,ccpp,hccdi,'frm_CCCP');
            }else {
                $select.append('<option value=' + value.key + '>' + value.value + '</option>');
            }
        });
    }).fail(function(response, textStatus, jqXHR) {
        console.log(textStatus);
    });
}

function getCentroPob(iddepartamento, idprovincia, idDistrito, centroP) {
    
    var hcccd=$('#h_cccp').val();
    
    var ubigeo=iddepartamento+idprovincia+idDistrito;    
    var oOptions = {
        type: 'POST',
        url: base_url + 'index.php/caratulaController/getCentroPob',
        data: {'ubigeo': ubigeo }
    };
    var posting = $.ajax(oOptions);
    var $select = $('#' + centroP);
    $select.find('option').remove();
    posting.done(function(response, textStatus, jqXHR) {
        response = JSON.parse(response);
        $.each(response, function(key, value)
        {
            if (hcccd==value.key){
                $select.append('<option selected value=' + value.key + '>' + value.value + '</option>');
            }else {
                $select.append('<option value=' + value.key + '>' + value.value + '</option>');
            }
        });
    }).fail(function(response, textStatus, jqXHR) {
        console.log(textStatus);
    });
}

$('#frm_CCDD').change(function() {
    var departamento = $('#frm_CCDD option:selected').text();
    $('#frm_DD').val((departamento === 'SELECCIONE') ? '' : departamento);
    getProvincias(this.value, 'frm_CCPP', 'frm_CCDI');
});

$('#frm_CCPP').change(function() {
    var provincia = $('#frm_CCPP option:selected').text();
    $('#frm_PP').val((provincia === 'SELECCIONE') ? '' : provincia);
    
    var iddepartamento = $('#frm_CCDD').val();
    getDistritos(iddepartamento, this.value, 'frm_CCDI');
});

$('#frm_CCDI').change(function() {
    var distrito = $('#frm_CCDI option:selected').text();
    $('#frm_DI').val((distrito === 'SELECCIONE') ? '' : distrito);  
    
    var iddepartamento = $('#frm_CCDD').val();
    var idprovincia = $('#frm_CCPP').val();
    getCentroPob(iddepartamento, idprovincia, this.value, 'frm_CCCP');
});

$('#frm_CCCP').change(function() {
    var centroP = $('#frm_CCCP option:selected').text();
    $('#frm_CP').val((centroP === 'SELECCIONE') ? '' : centroP);  
});


