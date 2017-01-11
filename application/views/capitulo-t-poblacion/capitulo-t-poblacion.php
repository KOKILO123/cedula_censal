<?php echo $form->open_tag(); echo form_hidden($form->VIVIENDA);echo form_hidden($form->CCDD);echo form_hidden($form->CCPP);echo form_hidden($form->CCDI);echo form_hidden($form->ZONA_ID);echo form_hidden($form->SECCION_U);echo form_hidden($form->AEU);echo form_hidden($form->AER_INI);echo form_hidden($form->AER_FIN); ?><div class="row eborderper" id="div_ID_C5_PERSONA">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>NUMERO DE IDENTIFICADOR DE PERSONAS</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->ID_C5_PERSONA); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_N">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>PERSONA NUMERO</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->C5_N); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_NOM">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>NOMBRE</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->C5_NOM); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P1">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>¿CUÁL ES LA RELACIÓN DE PARENTESCO CON EL/LA JEFE/A DEL HOGAR?</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_dropdown($form->C5_P1); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P2">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>SEXO</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_radio_multiple($form->C5_P2); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P3_1">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>¿EN QUÉ FECHA NACIÓ? (DIA)</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->C5_P3_1); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P3_2">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>¿EN QUÉ FECHA NACIÓ? (MES)</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->C5_P3_2); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P3_3">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>¿EN QUÉ FECHA NACIÓ? (AÑO)</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->C5_P3_3); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P4">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>¿VIVE PERMANENTEMENTE EN ESTE DISTRITO?</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_radio_multiple($form->C5_P4); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P4A_COD">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>¿EN QUÉ DISTRITO Y DEPARTAMENTO VIVE PERMANENTEMENTE? CODIGO DEL DISTRITO</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->C5_P4A_COD); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P4A_NOM">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>¿EN QUÉ DISTRITO Y DEPARTAMENTO VIVE PERMANENTEMENTE? NOMBRE DEL DISTRITO</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->C5_P4A_NOM); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P4B_COD">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>¿EN QUÉ DISTRITO Y DEPARTAMENTO VIVE PERMANENTEMENTE? CODIGO DE LA PROVINCIA</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->C5_P4B_COD); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P4B_NOM">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>¿EN QUÉ DISTRITO Y DEPARTAMENTO VIVE PERMANENTEMENTE? NOMBRE DE LA PROVINCIA</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->C5_P4B_NOM); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P4C_COD">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>¿EN QUÉ DISTRITO Y DEPARTAMENTO VIVE PERMANENTEMENTE? CODIGO DEL DEPARTAMENTO</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->C5_P4C_COD); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P4C_NOM">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>¿EN QUÉ DISTRITO Y DEPARTAMENTO VIVE PERMANENTEMENTE? NOMBRE DEL DEPARTAMENTO</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->C5_P4C_NOM); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P4D_COD">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>¿EN QUÉ DISTRITO Y DEPARTAMENTO VIVE PERMANENTEMENTE? CODIGO DEL PAIS</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->C5_P4D_COD); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P4D_NOM">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>¿EN QUÉ DISTRITO Y DEPARTAMENTO VIVE PERMANENTEMENTE? NOMBRE PAIS</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->C5_P4D_NOM); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P5">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>HACE 5 AÑOS, DESDE SETIEMBRE DEL AÑO 2012 , ¿VIVÍA EN ESTE DISTRITO?</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_dropdown($form->C5_P5); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P5A_COD">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>¿EN QUÉ DISTRITO Y DEPARTAMENTO VIVÍA HACE 5 AÑOS? CODIGO DEL DISTRITO</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->C5_P5A_COD); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P5A_NOM">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>¿EN QUÉ DISTRITO Y DEPARTAMENTO VIVÍA HACE 5 AÑOS? NOMBRE DEL DISTRITO</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->C5_P5A_NOM); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P5B_COD">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>¿EN QUÉ DISTRITO Y DEPARTAMENTO VIVÍA HACE 5 AÑOS? CODIGO DE LA PROVINCIA</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->C5_P5B_COD); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P5B_NOM">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>¿EN QUÉ DISTRITO Y DEPARTAMENTO VIVÍA HACE 5 AÑOS? NOMBRE DE LA PROVINCIA</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->C5_P5B_NOM); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P5C_COD">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>¿EN QUÉ DISTRITO Y DEPARTAMENTO VIVÍA HACE 5 AÑOS? CODIGO DEL DEPARTAMENTO</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->C5_P5C_COD); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P5C_NOM">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>¿EN QUÉ DISTRITO Y DEPARTAMENTO VIVÍA HACE 5 AÑOS? NOMBRE DEL DEPARTAMENTO</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->C5_P5C_NOM); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P5D_COD">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>¿EN QUÉ DISTRITO Y DEPARTAMENTO VIVÍA HACE 5 AÑOS? CODIGO DEL PAIS</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->C5_P5D_COD); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P5D_NOM">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>¿EN QUÉ DISTRITO Y DEPARTAMENTO VIVÍA HACE 5 AÑOS? NOMBRE PAIS</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->C5_P5D_NOM); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P6">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>CUANDO USTED NACIÓ, ¿VIVÍA SU MADRE EN ESTE DISTRITO?</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_radio_multiple($form->C5_P6); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P6A_COD">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>¿EN QUÉ DISTRITO Y DEPARTAMENTO VIVÍA SU MADRE? CODIGO DEL DISTRITO</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->C5_P6A_COD); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P6A_NOM">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>¿EN QUÉ DISTRITO Y DEPARTAMENTO VIVÍA SU MADRE? NOMBRE DEL DISTRITO</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->C5_P6A_NOM); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P6B_COD">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>¿EN QUÉ DISTRITO Y DEPARTAMENTO VIVÍA SU MADRE? CODIGO DE LA PROVINCIA</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->C5_P6B_COD); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P6B_NOM">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>¿EN QUÉ DISTRITO Y DEPARTAMENTO VIVÍA SU MADRE? NOMBRE DE LA PROVINCIA</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->C5_P6B_NOM); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P6C_COD">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>¿EN QUÉ DISTRITO Y DEPARTAMENTO VIVÍA SU MADRE? CODIGO DEL DEPARTAMENTO</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->C5_P6C_COD); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P6C_NOM">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>¿EN QUÉ DISTRITO Y DEPARTAMENTO VIVÍA SU MADRE? NOMBRE DELDEPARTAMENTO</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->C5_P6C_NOM); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P6D_COD">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>¿EN QUÉ DISTRITO Y DEPARTAMENTO VIVÍA HACE 5 AÑOS? CODIGO DEL PAIS</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->C5_P6D_COD); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P6D_NOM">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>¿EN QUÉ DISTRITO Y DEPARTAMENTO VIVÍA SU MADRE? NOMBRE PAIS</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->C5_P6D_NOM); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label>¿SE ENCUENTRA AFILIADO AL:</label></div>
            </div>            
        </div><div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left" id="div_C5_P7_1">
                <table class="table">
                    <tr><td><?php echo form_checkbox($form->C5_P7_1); ?></td></tr>
                </table>
            </div><div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left" id="div_C5_P7_2">
                <table class="table">
                    <tr><td><?php echo form_checkbox($form->C5_P7_2); ?></td></tr>
                </table>
            </div><div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left" id="div_C5_P7_3">
                <table class="table">
                    <tr><td><?php echo form_checkbox($form->C5_P7_3); ?></td></tr>
                </table>
            </div><div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left" id="div_C5_P7_4">
                <table class="table">
                    <tr><td><?php echo form_checkbox($form->C5_P7_4); ?></td></tr>
                </table>
            </div><div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left" id="div_C5_P7_5">
                <table class="table">
                    <tr><td><?php echo form_checkbox($form->C5_P7_5); ?></td></tr>
                </table>
            </div><div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left" id="div_C5_P7_6">
                <table class="table">
                    <tr><td><?php echo form_checkbox($form->C5_P7_6); ?></td></tr>
                </table>
            </div><div class="row eborderper" id="div_C5_P8_1">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>¿TIENE ALGUNA DIFICULTAD O LIMITACIÓN PERMANENTE PARA: 1. Ver, aún usando lentes o anteojos?</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_radio_multiple($form->C5_P8_1); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P8_2">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>¿TIENE ALGUNA DIFICULTAD O LIMITACIÓN PERMANENTE PARA: 2. Oír, aún usando audífonos?</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_radio_multiple($form->C5_P8_2); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P8_3">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>¿TIENE ALGUNA DIFICULTAD O LIMITACIÓN PERMANENTE PARA: 3. Hablar, aún haciendo señas u otro?</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_radio_multiple($form->C5_P8_3); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P8_4">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>¿TIENE ALGUNA DIFICULTAD O LIMITACIÓN PERMANENTE PARA: 4. Usar brazos y manos / manipular?</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_radio_multiple($form->C5_P8_4); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P8_5">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>¿TIENE ALGUNA DIFICULTAD O LIMITACIÓN PERMANENTE PARA: 5. Usar piernas y pies / caminar y usar escaleras?</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_radio_multiple($form->C5_P8_5); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P8_6">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>¿TIENE ALGUNA DIFICULTAD O LIMITACIÓN PERMANENTE PARA: 6. Entender o aprender (concentrarse y recordar)?</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_radio_multiple($form->C5_P8_6); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P8_7">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>¿TIENE ALGUNA DIFICULTAD O LIMITACIÓN PERMANENTE PARA: 7. Comunicarse o entender a otras personas?</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_radio_multiple($form->C5_P8_7); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P8_8">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>¿TIENE ALGUNA DIFICULTAD O LIMITACIÓN PERMANENTE PARA: 8. Otra dificultad o limitación?</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_radio_multiple($form->C5_P8_8); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P8_O">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>¿TIENE ALGUNA DIFICULTAD O LIMITACIÓN PERMANENTE PARA:  Otra dificultad o limitación? </label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->C5_P8_O); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P9">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>¿CUÁL ES SU NÚMERO DE DNI (Documento Nacional de Identidad)? </label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_dropdown($form->C5_P9); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P9A">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>¿CUÁL ES SU NÚMERO DE DNI (Documento Nacional de Identidad)?  </label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_radio_multiple($form->C5_P9A); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P10">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>¿CÚAL ES EL IDIOMA O LENGUA MATERNA CON EL QUE APRENDIO A HABLAR EN SU NIÑEZ:</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_dropdown($form->C5_P10); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P10_O">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>¿CÚAL ES EL IDIOMA O LENGUA MATERNA CON EL QUE APRENDIO A HABLAR EN SU NIÑEZ:- Otro</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->C5_P10_O); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P11">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>¿SABE LEER Y ESCRIBIR?</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_radio_multiple($form->C5_P11); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P12_NIV">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>¿CUÁL FUE EL ÚLTIMO NIVEL Y GRADO O AÑO DE ESTUDIOS QUE APROBÓ? </label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_dropdown($form->C5_P12_NIV); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P12_GRADO">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>¿CUÁL FUE EL ÚLTIMO NIVEL Y GRADO O AÑO DE ESTUDIOS QUE APROBÓ? Grado</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->C5_P12_GRADO); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P12_ANIO">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>¿CUÁL FUE EL ÚLTIMO NIVEL Y GRADO O AÑO DE ESTUDIOS QUE APROBÓ? Año</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->C5_P12_ANIO); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P13">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>ACTUALMENTE ¿ASISTE A UNA INSTITUCIÓN EDUCATIVA, COLEGIO, INSTITUTO SUPERIOR O UNIVERSIDAD?</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_radio_multiple($form->C5_P13); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P14">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>¿LA SEMANA PASADA, ¿TRABAJO POR ALGÚN PAGO EN DINERO O ESPECIE?</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_radio_multiple($form->C5_P14); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P15">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>AUNQUE NO TRABAJÓ LA SEMANA PASADA, ¿TIENE ALGÚN EMPLEO FIJO O NEGOCIO PROPIO AL QUE PROXIMAMENTE VOLVERÁ?</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_radio_multiple($form->C5_P15); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P16">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>LA SEMANA PASADA, ¿TRABAJÓ AL MENOS UNA HORA:  POR UN PAGO EN DINERO O</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_dropdown($form->C5_P16); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P16_O">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>LA SEMANA PASADA, ¿TRABAJÓ AL MENOS UNA HORA:  POR UN PAGO EN DINERO O ESPECIE? Otro </label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->C5_P16_O); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P17">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>LA SEMANA PASADA ESTUVO:</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_dropdown($form->C5_P17); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P17_O">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>LA SEMANA PASADA ESTUVO: OTRA? </label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->C5_P17_O); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P18">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>LA SEMANA PASADA, ¿CUÁL ES LA OCUPACIÓN PRINCIPAL QUE DESEMPEÑÓ?</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->C5_P18); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P18_COD">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>CODIFICACIÓN DE LA OCUPACIÓN PRINCIPAL</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->C5_P18_COD); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P19">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>LA SEMANA PASADA, ¿A QUE ACTIVIDAD SE DEDICÓ EL NEGOCIO, ORGANISMO O EMPRESA EN LA QUE TRABAJÓ?</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->C5_P19); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P19_COD">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>CODIFICACIÓN DE LA ACTIVIDAD ECONÓMICA</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->C5_P19_COD); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P20">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>LA SEMANA PASADA, ¿EN SU CENTRO DE TRABAJO SE DESEMPEÑÓ COMO:</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_dropdown($form->C5_P20); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P20_O">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>LA SEMANA PASADA, ¿EN SU CENTRO DE TRABAJO SE DESEMPEÑÓ COMO: ¿OTRO </label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->C5_P20_O); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P21">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>LA SEMANA PASADA, ¿EN SU CENTRO DE TRABAJO, INCLUYÉNDOSE USTED, LABORARON?</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_dropdown($form->C5_P21); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P22">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>ACTUALMENTE, ¿CUÁL ES SU ESTADO CIVIL O CONYUGAL?</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_dropdown($form->C5_P22); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P23">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>POR SUS COSTUMBRES Y SUS ANTEPASADOS, ¿USTED SE SIENTE O CONSIDERA:</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_dropdown($form->C5_P23); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P23_O">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>POR SUS COSTUMBRES Y SUS ANTEPASADOS, ¿USTED SE SIENTE O CONSIDERA: Otro? </label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->C5_P23_O); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P24">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>¿CUÁL ES SU RELIGIÓN?</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_dropdown($form->C5_P24); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P24_O">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>¿CUÁL ES SU RELIGIÓN? -Otro </label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->C5_P24_O); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P25">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>¿CUÁNTOS HIJOS E HIJAS NACIDOS VIVOS EN TOTAL HA TENIDO?</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->C5_P25); ?></td></tr>
                </table>
            </div>
        </div><div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left" id="div_C5_P25_1">
                <table class="table">
                    <tr><td><?php echo form_checkbox($form->C5_P25_1); ?></td></tr>
                </table>
            </div><div class="row eborderper" id="div_C5_P26">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>¿CUÁNTOS DE SUS HIJOS E HIJAS ESTÁN ACTUALMENTE VIVOS?</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->C5_P26); ?></td></tr>
                </table>
            </div>
        </div><div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left" id="div_C5_P26_1">
                <table class="table">
                    <tr><td><?php echo form_checkbox($form->C5_P26_1); ?></td></tr>
                </table>
            </div><div class="row eborderper" id="div_C5_P27_1">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>¿EN QUÉ MES Y AÑO NACIÓ SU ULTIMO HIJO O HIJA NACIDO VIVO? - Mes</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->C5_P27_1); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper" id="div_C5_P27_2">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>¿EN QUÉ MES Y AÑO NACIÓ SU ULTIMO HIJO O HIJA NACIDO VIVO? - Año</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo form_input($form->C5_P27_2); ?></td></tr>
                </table>
            </div>
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div><div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">#</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label></label></div>
            </div>            
        </div>