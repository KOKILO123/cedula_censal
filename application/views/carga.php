<body onLoad="ver_datos(<?php echo ($carga[0]->EP_CD) ?>)">
    <div id="titulo" align="center">ESTABLECIMIENTO PENITENCIARIO: <font id="cod"></font> - <font id="nom"> </font></div>
    <div class="panel panel-ecustom ui-shadow">
        <input type="hidden" name="txt_cod" id="txt_cod" value="<?php echo ($carga[0]->EP_CD) ?>" />
        <input type="hidden" name="txt_nom" id="txt_nom" value="" />
        <div class="panel panel-ecustom ui-shadow">
            <div class="panel-heading etitleprin">CARGA DE TRABAJO
                <button type="button" class="emnbtnopt dropdown-toggle" style="margin-top:-5px; margin-left: 30px"data-toggle="dropdown">
                    <!--<a href="javascript:void(0);" onclick="#"><span class="glyphicon glyphicon-save eglyphicondtmn" id="glp-btn-menu"></span></a>-->
                </button>
            </div>

            <div class="panel-body">
                <form method="GET">

                </form>
            </div>

        </div>
        <div class="panel panel-ecustom ui-shadow espace">
            <div class="panel-body etitle">
                <div class="row espace-bottom">
                    <div class="table-responsive">
                        <table id="table_carga" class="etblvertophead table-hover table table-bordered text-center etableeli ">
                            <thead>
                                <tr class="eclcabprintbl">
                                    <td>INTERNO</td>   
                                    <td>CUESTIONARIO NUMERO</td>   
                                    <td>EMPADRONADOR</td>
                                    <td>ESTADO CUESTIONARIO</td>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($carga as $row): ?>
                                    <tr onclick="window.open('<?php echo base_url() . sprintf('index.php/marcoController/visita?INTERNO_ID=%s&CUEST_NRO=%s', $row->INTERNO_ID, $row->CUEST_NRO) ?>','_blank')">
                                        <!--<td><?php echo $row->INTERNO_ID; ?></td>-->
                                        <td><?php echo $row->INTERNO_ID ?></td>
                                        <td><?php echo $row->CUEST_NRO ?></td>
                                        <td><?php echo $row->EMPAD_NOMB ?></td>
                                        <td><?php
                                            switch ($row->ESTADO) {
                                                case '1':
                                                    echo 'COMPLETA';
                                                    break;
                                                case '2':
                                                    echo 'INCOMPLETA';
                                                    break;
                                                case '3':
                                                    echo 'RECHAZO';
                                                    break;
                                                case '4':
                                                    echo 'NO SE PRESENTO';
                                                    break;
                                                default :
                                                    echo 'SIN APERTURAR';
                                                    break;
                                            }
                                            ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="text-center">

                    </div>
                </div>
                
                <br/>

                <a onClick="showGPSDialog()" style="align: center">Tomar Punto GPS</a> 
            </div>
        </div>
</body>