<?php debug(strpos(uri_string(), 'marco')); ?>
<nav id="menu">
    ﻿<ul>
        <li id="cabecera1">
            <img src="<?php echo base_url(); ?>assets/img/logo-inei.png" />
        </li>

        <li  id="cabecera2" >
            <a  type="button"  class="emnbtnopt"  id="btnlogin">
                <span class="glyphicon glyphicon-user eglyphicondtmn"  ></span>
            </a>
            <ul class="dropdown-menuprin-login" id="panel-loginprin" >
                <li>
                    <div class="arrow"></div>
                    <div id="popovermenuprin" style="display: inherit">
                        <img alt="photo" class="imgloginprin"/>
                        <div class="clogin">
                            <span  class="tlogin"></span>
                            <span  class="tlogin"></span>
                            <span  class="tloginc"> login@gmail.com</span>
                        </div>
                        <div class="eloginbtn">
                            <a href="<?php echo base_url(); ?>index.php/rev_caratulaController/logout" class="btn ebtn-default ">Salir de la encuesta</a>
                            <!--<a href="" class="btn ebtn-default divoculto" id="btnsalir"> Salir</a>-->
                        </div>
                    </div>
                </li>
            </ul>
        </li>
        <li class="<?php echo (strpos(uri_string(), 'marcoControlle') === FALSE) ? '' : 'mm-opened'; ?>">
            <a href="#mm-m0-p00" class="mm-subopen">Carga de Trabajo</a>
            <ul class="mm-list mm-panel" id="mm-m0-p00">

                <li class = "mm-opened <?php echo uri_string() === 'marcoControlle'; ?>">
                    <a href = "<?php echo base_url() . 'index.php/marcoController' ?>">Carga de Trabajo</a>
                    <a href = "<?php echo base_url() . 'index.php/marcoController/upload' ?>">Subir a BD Central</a>
                </li>
            </ul>
        </li>
        <?php
        if (uri_string() == 'marcoController') {
            echo '';
        } else {
            $co = 0;
            foreach ($menu as $key => $value) {
                ?>
                <li class="<?php echo (strpos(uri_string(), $value['link_menu_padre']) === FALSE) ? '' : 'mm-opened'; ?>">
                    <a href="#mm-m0-p<?php echo $co ?>" class="mm-subopen"><?php echo ucfirst(strtolower($value['desc_menu_padre'])) ?></a>
                    <ul class="mm-list mm-panel" id="mm-m0-p<?php echo $co ?>">
                        <?php
                        if (is_array($value['hijos'])) {
                            foreach ($value['hijos'] as $column => $valor) {
                                ?>
                                <li class = "mm-opened <?php echo uri_string() === $value['link_menu_padre'] . '/' . $valor['link_menu_hijo'] ? 'btn-primary' : ''; ?>">
                                    <a href = "<?php echo base_url() . 'index.php/' . $value['link_menu_padre'] . '/' . $valor['link_menu_hijo'] ?>"><?php echo ucfirst(strtolower($valor['desc_menu_hijo'])) ?></a>
                                </li>
                                <?php
                            }
                        }
                        ?>

                    </ul>
                </li>


                <?php
                $co++;
            }
        }
        ?>
    </ul>
</nav>