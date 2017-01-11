<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LoginHook
 *
 * @author holivares
 */
class LoginHook {

    private $ci;

    public function __construct() {
        $this->ci = & get_instance();
        $this->ci->load->helper('url');
    }

    function validSession() {
//        $empresa = $this->ci->session->userdata('ID_EMPRESA');
        $usuario = $this->ci->session->userdata('ID_USUARIO');
        $error = $this->ci->session->userdata('ERROR_LOGIN');
        $urls = array(base_url() . 'index.php', base_url(), base_url() . 'index.php/authController', base_url() . 'index.php/marcoController/generaArchivo', base_url() . 'index.php/marcoController/actualizarBitacora', base_url() . 'index.php/marcoController/do_importar');
        if (!($usuario)) {
            if (!in_array(current_url(), $urls)) {
                $this->ci->session->unset_userdata('ERROR_LOGIN');
                $query = ($error === TRUE) ? '?error=true' : '';
                redirect('authController/' . $query);
            }
        }
//        
    }

}
