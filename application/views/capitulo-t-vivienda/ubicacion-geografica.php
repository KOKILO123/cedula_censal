<?php echo $form->open_tag(); echo form_hidden($form->VIVIENDA);echo form_hidden($form->CCDD);echo form_hidden($form->CCPP);echo form_hidden($form->CCDI);echo form_hidden($form->ZONA);echo form_hidden($form->SECCION);echo form_hidden($form->AEU);echo form_hidden($form->AER_INI);echo form_hidden($form->AER_FIN); ?><div class="row eborderper" id="div_CCDD">
    <div class="bg-primary text-center ">
        <strong>SECCIÓN I. LOCALIZACIÓN DE LA VIVIENDA Y NÚMERO DE HOGARES</strong>
    </div>
    <div class="bg-info text-left padding-left">
        <strong style="padding: 50px">A. UBICACIÓN GEOGRÁFICA:</strong>
    </div>
        
        <div class="row eborderper" id="div_NOMBREDD">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-3 espace-top espace-bottom  espace-left">
                <div><label>1. DEPARTAMENTO</label></div>
            </div>
            <div class="col-xs-6 col-md-8 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr>
                        <td><?php echo form_input($form->CCDD); ?></td>
                        <td><?php echo form_input($form->NOMBREDD); ?></td>
                    </tr>
                </table>
            </div>
        </div>
<!--<div class="row eborderper" id="div_NOMBREDD">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>NOMBRE DEL DEPARTAMENTO</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?'php echo form_input($form->NOMBREDD); ?></td></tr>
                </table>
            </div>
        </div>-->
<div class="row eborderper" id="div_CCPP">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-3 espace-top espace-bottom  espace-left">
                <div><label>2. PROVINCIA</label></div>
            </div>
            <div class="col-xs-6 col-md-8 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr>
                        <td><?php echo form_input($form->CCPP); ?></td>
                        <td><?php echo form_input($form->NOMBREPV); ?></td>
                    </tr>
                </table>
            </div>
        </div>
<!--<div class="row eborderper" id="div_NOMBREPV">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>NOMBRE DE LA PROVINCIA</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?'php echo form_input($form->NOMBREPV); ?></td></tr>
                </table>
            </div>
        </div>-->
<div class="row eborderper" id="div_CCDI">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-3 espace-top espace-bottom  espace-left">
                <div><label>3. DISTRITO</label></div>
            </div>
            <div class="col-xs-6 col-md-8 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr>
                        <td><?php echo form_input($form->CCDI); ?></td>
                        <td><?php echo form_input($form->NOMBREDI); ?></td>
                    </tr>
                </table>
            </div>
        </div>
<!--<div class="row eborderper" id="div_NOMBREDI">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>NOMBRE DEL DISTRITO</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?'php echo form_input($form->NOMBREDI); ?></td></tr>
                </table>
            </div>
        </div>-->
<div class="row eborderper" id="div_CODCCPP">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-3 espace-top espace-bottom  espace-left">
                <div><label>5. CENTRO POBLADO</label></div>
            </div>
            <div class="col-xs-6 col-md-8 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr>
                       <td><?php echo form_input($form->CODCCPP); ?></td>
                       <td><?php echo form_input($form->NOMCCPP); ?></td>
                    </tr>
                </table>
            </div>
        </div>
<!--<div class="row eborderper" id="div_NOMCCPP">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>NOMBRE CENTRO POBLADO</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?'php echo form_input($form->NOMCCPP); ?></td></tr>
                </table>
            </div>
        </div>-->
