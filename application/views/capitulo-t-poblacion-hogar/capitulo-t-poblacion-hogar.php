<?php echo $form->open_tag(); echo form_hidden($form->VIVIENDA);echo form_hidden($form->CCDD);echo form_hidden($form->CCPP);echo form_hidden($form->CCDI);echo form_hidden($form->ZONA_ID);echo form_hidden($form->SECCION_U);echo form_hidden($form->AEU);echo form_hidden($form->AER_INI);echo form_hidden($form->AER_FIN); ?><div class="row eborderper" id="div_C4_P1">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>EN ESTE HOGAR ¿CUÁNTAS PERSONAS DURMIERON AQUÍ, LA NOCHE ANTERIOR AL DÍA DEL CENSO? NO OLVIDE CONTAR A LOS RECIÉN NACIDOS, ANCIANOS Y VISITAS.</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->C4_P1); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_ID_C4_PERSONA">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>NUMERO DE IDENTIFICADOR DE PERSONAS</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->ID_C4_PERSONA); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C4_N">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>Nº DE ORDEN DE LA PERSONA</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->C4_N); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C4_P2">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>NOMBRES</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->C4_P2); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C4_P3">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>APELLIDO PATERNO</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->C4_P3); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C4_P4">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>APELLIDOS MATERNO</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->C4_P4); ?></td></tr>
                </table>
            </div>
        </div>