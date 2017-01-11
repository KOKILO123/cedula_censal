<html>
    <body> 
        
<!--        <h3 align="right">
            <small align="right">Bienvenid@<br><?'php echo utf8_encode($this->session->userdata('USUARIO_NOMBRE')); ?></small>
        </h3>    -->

    <div id="titulo" align="center"><h4>CARGA DE TRABAJO: </h4><font id="cod"></div>
    <input type="hidden" value="<?php echo utf8_encode($this->session->userdata('USUARIO')); ?>" id="txtUsuario">
    
    <div class="panel panel-ecustom ui-shadow">
        <center>
            <div id="div_cargaTrabajo" style="width: 80%">
                <table id="table_carga" class="table-responsive table-hover table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <th>Departamento</th>
                        <th>Provincia</th>
                        <th>Distrito</th>
                        <th>Zona</th>
                        <th>Seccion</th>
                        <th>AEU</th>
                        <th>AER INI</th>
                        <th>AER FIN</th>
                        <th>VIVIENDA</th>
                    </thead>
                    <tbody id="tbody_carga">
                        
                    </tbody>
                </table>
            </div>
        </center>
        <div class="panel-body"><form method="GET"></form></div>
    </div>
 
    <div class="panel panel-ecustom ui-shadow espace">
        <a onClick="showGPSDialog()" style="align: center">Tomar Punto GPS</a> 
    </div>
 

        
    </body>
</html>

         