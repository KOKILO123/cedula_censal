$(function(){    
    usuario = $('#txtUsuario').val();
    listarMercados(usuario);
} );

function listarMercados(usuario){
    $.ajax({
        type : 'POST',
        dataType : 'text',
        url : base_url +'index.php/home/getMercados',
        data: {'usuario': usuario},
        
        beforeSend: function(){
        },
        success : function(result) {
            result = result.trim(4,result.length);
            
            var cad_Manz=''; 

            var json2 =jQuery.parseJSON(result);

            cad_Manz += '<table  class="etblvertophead table-hover table table-bordered text-center etableeli" width="90%" border="0" align="center" cellspacing="0">';
            cad_Manz += '<thead bgcolor="#3892d3" style="font-weight: bold; color: #fff">';
            cad_Manz += '  <tr>';
            cad_Manz += '    <th width="20%">ID</th>';
            cad_Manz += '    <th width="50%">NOMBRE DEL MERCADO</th>';
            cad_Manz += '    <th width="30%">RESULTADO<br>FINAL</th>';
            cad_Manz += '  </tr>';
            cad_Manz += '</thead >';
            cad_Manz += '<tbody >';

            var count = 0;

            $.each(json2, function(j, result2) {
                count = count + 1;
                if (count%2==0){ Tcolor='bgcolor="#D9EAF2"'; }else{ Tcolor='bgcolor=""'; }
                cad_Manz += '  <tr '+Tcolor+' onclick="iniciarEncuesta('+result2.ID_MERCADO+')">';
                if(result2.value=='SELECCIONE'){
                }else{
                    cad_Manz += '  <td align="center" >'+result2.ID_MERCADO+'</td>';
                    cad_Manz += '  <td align="left" >'+result2.NOM_MERCADO+'</td>';
                    cad_Manz += '  <td align="center" >'+result2.RESFIN+'</td>';
                    //cad_Manz += '  <td align="left" ><a  style="cursor: pointer; cursor: hand" data-toggle="tooltip" title="Seleccionar Mercado" onclick="javascript:mostrarMercado(\''+result2.ID+'\')">'+result2.NOM_MERCADO+'</a></td>';                    
                }

                cad_Manz += '  </tr>';
                cad_Manz += '</tbody >';
            });
            cad_Manz += '  </table>';
            cad_Manz += '  <br>';
            cad_Manz += '  <br>';
            cad_Manz += '  <br>';
            $("#div_cargaTrabajo").html(cad_Manz);
        },
        error : function(xhr, ajaxOptions, thrownError) {
            alert(xhr.status + ' ' + thrownError);
        }
    });
}
//
function iniciarEncuesta(id_mercado){    
    window.location.href= base_url +'index.php/home/direccionar?id_mercado='+id_mercado;
}