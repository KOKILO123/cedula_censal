<?php echo $form->open_tag(); echo form_hidden($form->VIVIENDA);echo form_hidden($form->CCDD);echo form_hidden($form->CCPP);echo form_hidden($form->CCDI);echo form_hidden($form->ZONA);echo form_hidden($form->SECCION);echo form_hidden($form->AEU);echo form_hidden($form->AER_INI);echo form_hidden($form->AER_FIN); ?><div class="row eborderper" id="div_SECCION_R">
    <div class="bg-info text-left padding-left">
        <strong style="padding: 50px">A. UBICACIÓN CENSAL:</strong>
    </div>    
    <div class="bg-info text-left padding-left">
        <strong style="padding: 100px">ARÉA RURAL</strong>
    </div>
    <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>10. SECCIÓN RURAL N°</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->SECCION_R); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_AER_INI">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>11. ÁREA DE EMPADRONAMIENTO RURAL INICIAL</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->AER_INI); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_AER_FIN">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>12. ÁREA DE EMPADRONAMIENTO RURAL  FINAL</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->AER_FIN); ?></td></tr>
                </table>
            </div>
        </div>