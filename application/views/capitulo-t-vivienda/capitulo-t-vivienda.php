

<?php echo $form->open_tag(); echo form_hidden($form->VIVIENDA);echo form_hidden($form->CCDD);echo form_hidden($form->CCPP);echo form_hidden($form->CCDI);echo form_hidden($form->ZONA);echo form_hidden($form->SECCION);echo form_hidden($form->AEU);echo form_hidden($form->AER_INI);echo form_hidden($form->AER_FIN); ?>
<!-- <div class=" col-md-12 espace-top espace-bottom center">
    Vivienda Nro. <?'php echo utf8_encode($this->session->userdata('VIVIENDA')); ?>
</div>-->
<div class="bg-primary text-center ">
    <strong>SECCIÓN I. LOCALIZACIÓN DE LA VIVIENDA Y NÚMERO DE HOGARES</strong>
</div>
<div class="bg-info text-left padding-left">
    <strong style="padding: 50px">A. UBICACIÓN GEOGRÁFICA:</strong>
</div>

<div class="row eborderper" id="div_UBIGEO">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>UBIGEO</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->UBIGEO); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_ZONA">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>ZONA</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->ZONA); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_SECCION">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>SECCION</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->SECCION); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_MANZANA">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>MANZANA</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->MANZANA); ?></td></tr>
                </table>
            </div>
        </div>
<!--     <div class="row eborderper" id="div_ESTADO_ENVIO">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>Estado de envio</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?'php echo form_radio_multiple($form->ESTADO_ENVIO); ?></td></tr>
                </table>
            </div>
        </div>-->
        <div class="row eborderper" id="div_AREA">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>4.  ÁREA</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_radio_multiple($form->AREA); ?></td></tr>
                </table>
            </div>
        </div>
<!--<div class="row eborderper" id="div_ID">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>IDENTIFICADOR UNICO INFORMATICO </label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?'php echo form_input($form->ID); ?></td></tr>
                </table>
            </div>
        </div>-->
        <div class="row eborderper" id="div_VIVIENDA">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>N° DE LA VIVIENDA</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->VIVIENDA); ?></td></tr>
                </table>
            </div>
        </div>