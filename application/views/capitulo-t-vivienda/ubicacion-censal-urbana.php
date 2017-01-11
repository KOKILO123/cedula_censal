<?php echo $form->open_tag(); echo form_hidden($form->VIVIENDA);echo form_hidden($form->CCDD);echo form_hidden($form->CCPP);echo form_hidden($form->CCDI);echo form_hidden($form->ZONA);echo form_hidden($form->SECCION);echo form_hidden($form->AEU);echo form_hidden($form->AER_INI);echo form_hidden($form->AER_FIN); ?><div class="row eborderper" id="div_ZONA_ID">
            
    <div class="bg-info text-left padding-left">
        <strong style="padding: 50px">A. UBICACIÓN CENSAL:</strong>
    </div>
    <div class="bg-info text-left padding-left">
        <strong style="padding: 100px">ARÉA URBANA</strong>
    </div>
    <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>ZONA CENSAL </label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?'php echo form_input($form->ZONA_ID); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_ZONA_A">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>ZONA CENSAL LETRA</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><'?php echo form_input($form->ZONA_A); ?></td></tr>
                </table>
            </div>
        </div>
<div class="row eborderper" id="div_SECCION_U">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>6. SECCIÓN URBANA NUMERO</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->SECCION_U); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_AEU">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>ÁREA DE EMPADRONAMIENTO URBANO</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->AEU); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_MANZANA_ID">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>MANZANA CENSAL NÚMERO</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->MANZANA_ID); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_MANZANA_A">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>MANZANA CENSAL LETRA</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->MANZANA_A); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_FRENTE">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>IDENTIFICADOR DE FRENTE</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->FRENTE); ?></td></tr>
                </table>
            </div>
        </div>