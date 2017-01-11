<?php

class home extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('FormLib');
        $this->load->helper('string_helper');
        $this->load->helper('form_helper');
        $this->load->helper('url');
        $this->load->form('caratulaForm');
        $this->load->model('usuario');
 
    }

    public function index() {        
        $this->caratulaForm->set_action('home/autenticar');
        $this->data = array('form' => $this->caratulaForm);
        $this->load->view('site_login1');
    }

    public function autenticar() {
        $usuario = strtoupper($this->input->post('usuario'));
        $password = $this->input->post('password');  
        //var_dump($usuario);
         //var_dump($password);
        $user = $this->usuario->login($usuario, $password);
//        var_dump($user);
//        var_dump($user[0]['ID']);
//        exit();
        if ($user) {
            $this->session->set_userdata('USUARIO_ID', $user[0]['ID']);
            $this->session->set_userdata('USUARIO', $user[0]['USUARIO']);
            $this->session->set_userdata('USUARIO_PERFIL', $user[0]['COD_PERFIL']);
            $this->session->set_userdata('USUARIO_NOMBRE', $user[0]['NOMBRE_COMPLETO']);
            
            $this->session->set_userdata('CCDD', $user[0]['CCDD']);
            $this->session->set_userdata('CCPP', $user[0]['CCPP']);
            $this->session->set_userdata('CCDI', $user[0]['CCDI']);
            $this->session->set_userdata('ZONA', $user[0]['ZONA']);
            $this->session->set_userdata('SECCION', $user[0]['SECCION']);
            $this->session->set_userdata('AEU', $user[0]['AEU']);
            $this->session->set_userdata('AERINI', $user[0]['AERINI']);
            $this->session->set_userdata('AERFIN', $user[0]['AERFIN']);

            redirect('home/principal');            
        } else {
            $this->session->set_userdata('ERROR_LOGIN', TRUE);
            $this->load->view('site_login1', array('error' => TRUE));
        }
    }
  
    public function principal(){
        $this->data = array('anterior' => 'home/principal', '_layoutParams' => array('js' => array(/*'home',*/'marco')));
        $this->middle = 'inicio';
        $this->layout(false);       
    }
    
    public function getMercados() {
        $usuario = $this->session->userdata('USUARIO_ID');
        $array = $this->usuario->getCargaTrabajo($usuario);
        echo json_encode(array_values($array));
    } 
    
     public function ver_datos(){
            $usuario = $this->session->userdata('USUARIO_ID');
           // var_dump($usuario);            
            $array = $this->usuario->getCargaTrabajo($usuario);
            
            echo json_encode(array_values($array));  
        }
    
    
     public function direccionar() {
        $id_mercado= $this->input->get('id_mercado');
        $user = $this->usuario->obtenerMercado($id_mercado);        
        if($user){            
            $this->session->set_userdata('ID', $user['ID']);
            $this->session->set_userdata('NOM_MERCADO', $user['NOM_MERCADO']);
            redirect('caratulaController');
        }        
    }
    
    public function logout() {   
        $this->session->unset_userdata('ID');
        $this->session->sess_destroy();
        echo "<script> document.location.href = \"../home\" </script>";    
    }

}


