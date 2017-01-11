$(function () {
    $('#table_carga').DataTable();
})



function showGPSDialog() {
    
    var ruc = $("#txt_cod").val();
    var rz = $("#txt_nom").val();
    Android.showGPSDialog(rz, ruc);
}

function ver_datos(dato){
  
    $.ajax({
        type: 'POST',
        dataType: 'text',
        url: base_url + 'index.php/marcoController/ver_datos',
        data: {'EP_CD': dato},
        beforeSend: function () {
        },
        success: function (result) {
            
            var a = '';
            var b = '';
            var json2 = jQuery.parseJSON(result);

            $.each(json2, function (j, result2) {
                a = result2.ep_cd;
                b = result2.establec;
                
            });
            $("#cod").html(a);
            $("#nom").html(b);
            $("#txt_cod").val(a);
            $("#txt_nom").val(b);
			
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(xhr.status + ' ' + thrownError);
        }
    });   
}