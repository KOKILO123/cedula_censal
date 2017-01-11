<?php echo $form->open_tag(); echo form_hidden($form->VIVIENDA);echo form_hidden($form->CCDD);echo form_hidden($form->CCPP);echo form_hidden($form->CCDI);echo form_hidden($form->ZONA_ID);echo form_hidden($form->SECCION_U);echo form_hidden($form->AEU);echo form_hidden($form->AER_INI);echo form_hidden($form->AER_FIN); ?><div class="row eborderper" id="div_GPS_LONG">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>LONGITUD</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->GPS_LONG); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_GPS_LATI">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>LATITUD</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->GPS_LATI); ?></td></tr>
                </table>
            </div>
        </div>