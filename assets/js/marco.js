$(function () {
    //$('#table_carga').DataTable();
//    $('#table_carga').DataTable( {
//        processing: true,
//        serverSide: true,
//        ajax: {
//            "url": "scripts/post.php",
//            "type": "POST"
//        },
//        columns: [
//            { "data": "first_name" },
//            { "data": "last_name" },
//            { "data": "position" },
//            { "data": "office" },
//            { "data": "start_date" },
//            { "data": "salary" }
//        ]
//    } );
    //usuario =$('#txtUsuario').val();
   // alert("werwe");
    ver_datos();
});

 //alert("werwe");

function showGPSDialog() {
    
    var ruc = $("#txt_cod").val();
    var rz = $("#txt_nom").val();
    
    Android.showGPSDialog(rz, ruc);
}

function ver_datos(){
  
    url= base_url + 'index.php/home/ver_datos';
    
    console.log(url);
    $.ajax({
        type: 'POST',
        dataType: 'text',
        url: url,
        //data: {'usuario': usuario},
        beforeSend: function () {
        },
        success: function (data) {
            //alert(data);
            var json2 = jQuery.parseJSON(data);
            var html=''
            $.each(json2, function (j, result2) {             
                for ( i =1; i <= result2.CANTIDAD_VIVIENDAS; i++ ) {
                   
                     html=html+'<tr><td>'+result2.DEPARTAMENTO+'</td>'
                            +'<td>'+result2.PROVINCIA+'</td>'
                            +'<td>'+result2.DISTRITO+'</td>'
                            +'<td>'+result2.ZONA+'</td>'
                            +'<td>'+result2.AEU+'</td>'
                            +'<td>'+result2.SECCION+'</td>'
                            +'<td>'+result2.AERINI+'</td>'
                            +'<td>'+result2.AERFIN+'</td>'
                            +'<td>'+i+'</td></tr>';
                  
                 }
                
            });
            $('#tbody_carga').html(html);
            $('#tbody_carga tr').click(function() {
                //alert($(this).children().eq(8).text());
                //alert("no entres");
                iniciarEncuesta($(this).children().eq(8).text());
            });
            	
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(xhr.status + ' ' + thrownError);
        }
    });   
}

function iniciarEncuesta(vivienda){  
    //console.log(vivienda);
    url= base_url + 'index.php/caratulaController/backend';
    $.ajax({
        type: 'POST',
        dataType: 'text',
        url: url,
        data: {'vivienda_': vivienda},
        async: false,
        beforeSend: function () {
        },
        success: function (data) {
            //alert(data);
            
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(xhr.status + ' ' + thrownError);
        }
    }); 
    
    window.location.href= base_url +'index.php/caratulaController';
        
}