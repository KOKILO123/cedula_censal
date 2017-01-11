<?php echo $form->open_tag(); echo form_hidden($form->VIVIENDA);echo form_hidden($form->CCDD);echo form_hidden($form->CCPP);echo form_hidden($form->CCDI);echo form_hidden($form->ZONA);echo form_hidden($form->SECCION);echo form_hidden($form->AEU);echo form_hidden($form->AER_INI);echo form_hidden($form->AER_FIN); ?><div class="row eborderper" id="div_THOGAR">
     <div class="bg-info text-left padding-left">
        <strong style="padding: 50px">C. NÚMERO DE HOGARES: (Inicie la entrevista con el/la Jefe/a del hogar)</strong>
    </div>        
    <div class="row eborderper" id="div_THOGAR">
    <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>¿Cuántos hogares ocupan esta vivienda?</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->THOGAR); ?></td></tr>
                </table>
            </div>
        </div>
    <div class="bg-primary text-center ">
        <strong>SECCIÓN II. CARACTERÍSTICAS Y SERVICIOS DE LA VIVIENDA</strong>
    </div>

    <div class="row eborderper" id="div_C2_P1">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>1. TIPO DE VIVIENDA</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_dropdown($form->C2_P1); ?></td></tr>
                    <tr><td><?php echo form_input($form->C2_P1_O); ?></td></tr>
                </table>
            </div>
        </div>

<div class="row eborderper" id="div_C2_P2">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>2. CONDICIÓN DE OCUPACIÓN DE LA VIVIENDA</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_dropdown($form->C2_P2); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C2_P3">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>3. EN LA VIVIENDA ¿EL MATERIAL DE CONSTRUCCIÓN PREDOMINANTE EN LA PAREDES EXTERIORES ES DE:</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_dropdown($form->C2_P3); ?></td></tr>
                    <tr><td><?php echo form_input($form->C2_P3_O); ?></td></tr>
                </table>
            </div>
        </div>

<div class="row eborderper" id="div_C2_P4">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>4.  EN LA VIVIENDA ¿EL MATERIAL DE CONSTRUCCIÓN PREDOMINANTE EN LOS TECHOS ES DE:</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_dropdown($form->C2_P4); ?></td></tr>
                    <tr><td><?php echo form_input($form->C2_P4_O); ?></td></tr>
                </table>
            </div>
        </div>

<div class="row eborderper" id="div_C2_P5">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>5. EN LA VIVIENDA ¿EL MATERIAL DE CONSTRUCCIÓN PREDOMINANTE EN LOS PISOS ES DE:</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_dropdown($form->C2_P5); ?></td></tr>
                    <tr><td><?php echo form_input($form->C2_P5_O); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C2_P5_O">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>EN LA VIVIENDA ¿EL MATERIAL DE CONSTRUCCIÓN PREDOMINANTE EN LOS PISOS ES DE:  Otro material</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->C2_P5_O); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C2_P6">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>EL AGUA QUE UTILIZAN EN LA VIVIENDA ¿PROCEDE PRINCIPALMENTE DE:</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_dropdown($form->C2_P6); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C2_P6_O">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>EL AGUA QUE UTILIZAN EN LA VIVIENDA ¿PROCEDE PRINCIPALMENTE DE: Otro </label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->C2_P6_O); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C2_P7">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>¿EL AGUA QUE UTILIZAN EN LA VIVIENDA ES POTABLE?</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_radio_multiple($form->C2_P7); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C2_P8">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>¿LA VIVIENDA TIENE EL SERVICIO DE AGUA TODOS LOS DÍAS DE LA SEMANA?</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_radio_multiple($form->C2_P8); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C2_P8A">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>A. ¿CUÁNTAS HORAS AL DÍA?</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->C2_P8A); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C2_P8B">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>B. ¿CUÁNTOS DIAS  A LA SEMANA TIENE AGUA?</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->C2_P8B); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C2_P8C">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>C. ¿CUÁNTAS HORAS AL DÍA?</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->C2_P8C); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C2_P9">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>¿EL BAÑO O SERVICIO HIGIÉNICO QUE TIENE SU VIVIENDA, ESTÁ CONECTADO A:</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_dropdown($form->C2_P9); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C2_P9_O">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>¿EL BAÑO O SERVICIO HIGIÉNICO QUE TIENE SU VIVIENDA, ESTÁ CONECTADO A: Otro </label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->C2_P9_O); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label>¿EL ALUMBRADO ELÉCTRICO QUE TIENE LA VIVIENDA PROVIENE DE:</label></div>
            </div>            
        </div><div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left" id="div_C2_P10_1">
                <table class="table">
                    <tr><td><?php echo form_checkbox($form->C2_P10_1); ?></td></tr>
                </table>
            </div><div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left" id="div_C2_P10_2">
                <table class="table">
                    <tr><td><?php echo form_checkbox($form->C2_P10_2); ?></td></tr>
                </table>
            </div><div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left" id="div_C2_P10_3">
                <table class="table">
                    <tr><td><?php echo form_checkbox($form->C2_P10_3); ?></td></tr>
                </table>
            </div><div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left" id="div_C2_P10_4">
                <table class="table">
                    <tr><td><?php echo form_checkbox($form->C2_P10_4); ?></td></tr>
                </table>
            </div><div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left" id="div_C2_P10_5">
                <table class="table">
                    <tr><td><?php echo form_checkbox($form->C2_P10_5); ?></td></tr>
                </table>
            </div><div class="row eborderper" id="div_C2_P10_O">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>¿EL ALUMBRADO ELÉCTRICO QUE TIENE LA VIVIENDA PROVIENE DE: Otro </label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->C2_P10_O); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C2_P11">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>¿CUÁNTAS HABITACIONES EN TOTAL TIENE LA VIVIENDA, SIN CONTAR EL BAÑO, LA COCINA, LOS PASADIZOS, NI EL GARAJE?</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->C2_P11); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C2_P12">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>LA VIVIENDA QUE OCUPA ES:</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_dropdown($form->C2_P12); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C2_P12_O">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>LA VIVIENDA QUE OCUPA ES: Otra Forma </label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->C2_P12_O); ?></td></tr>
                </table>
            </div>
        </div>