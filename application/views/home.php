<html>
    <body>    
        <h3 align="right">
            <small align="right">Bienvenid@<br><?php echo utf8_encode($this->session->userdata('USUARIO_NOMBRE')); ?></small>
        </h3>    

    <div id="titulo" align="center"><h3>CARGA DE TRABAJO: </h3><font id="cod"></font> - <font id="nom"> </font></div>
    <input type="hidden" value="<?php echo utf8_encode($this->session->userdata('USUARIO')); ?>" id="txtUsuario">
    
    <div class="panel panel-ecustom ui-shadow">
        <center><div id="div_cargaTrabajo" style="width: 80%"></div></center>
        <div class="panel-body"><form method="GET"></form></div>
    </div>
 
    <div class="panel panel-ecustom ui-shadow espace">
        <a onClick="showGPSDialog()" style="align: center">Tomar Punto GPS</a> 
    </div>
 

        
    </body>
</html>