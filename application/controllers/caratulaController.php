<?php
class caratulaController extends MY_Controller {
	 public function __construct() {
            parent::__construct();
            $this->load->library('FormLib');
            $this->load->helper('string_helper');
            $this->load->helper('form_helper');
            $this->load->helper('url');
            $this->load->form('caratulaform');
        }
        
               
        public function index() {        
            $this->caratulaform->index();
            $this->caratulaform->set_action('caratulaController/guardar');
            $this->data = array('form' => $this->caratulaform, 'anterior' => 'caratulaController', '_layoutParams' => array('js' => array('/vivienda/0001')));
            $this->middle = 'capitulo-t-vivienda/ubicacion-geografica';
            $this->layout();          
        }   
        
        public function backend() {
            unset($_SESSION['VIVIENDA']);
            $this->session->set_userdata('VIVIENDA', $_POST['vivienda_']);        
        } 
        
        public function guardar() {
            $this->caratulaform->setData($this->input->post('frm'));
            $this->caratulaform->save();
            redirect('caratulaController/index_3');
        }
        
        public function index_2() {             
            $this->caratulaform->index();
            $this->caratulaform->set_action('caratulaController/guardar_2');            
            $this->data = array('form' => $this->caratulaform, 'anterior' => 'caratulaController', '_layoutParams' => array('js' => array('vivienda/0001')));
            $this->middle = 'capitulo-t-vivienda/ubicacion-censal-urbana';
            $this->layout();       
        }
        
        public function guardar_2() {
            $this->caratulaform->setData($this->input->post('frm'));
            debug( $this->input->post('frm'));
            $this->caratulaform->save();            
            redirect('caratulaController/index_3');
        }
        
        public function index_3() {        
            $this->caratulaform->index();
            $this->caratulaform->set_action('caratulaController/guardar_3');
            $this->data = array('form' => $this->caratulaform, 'anterior' => 'caratulaController', '_layoutParams' => array('js' => array('vivienda/0001')));
            $this->middle = 'capitulo-t-vivienda/ubicacion-censal-rural';
            $this->layout();  
        
        }
        
        public function guardar_3() {
            $this->caratulaform->setData($this->input->post('frm'));
            $this->caratulaform->save();
            redirect('caratulaController/index_4');
        }
       
        public function index_4() {        
            $this->caratulaform->index();
            $this->caratulaform->set_action('caratulaController/guardar_4');
            $this->data = array('form' => $this->caratulaform, 'anterior' => 'caratulaController/index_3', '_layoutParams' => array('js' => array('vivienda/0001')));
            $this->middle = 'capitulo-t-vivienda/ubicacion-censal-rural';
            $this->layout();  
        
        }
        
        public function guardar_4() {
            $this->caratulaform->setData($this->input->post('frm'));
            $this->caratulaform->save();
            redirect('caratulaController/index_5');
        }
        
        public function index_5() {        
            $this->caratulaform->index();
            $this->caratulaform->set_action('caratulaController/guardar_5');
            $this->data = array('form' => $this->caratulaform, 'anterior' => 'caratulaController/index_4', '_layoutParams' => array('js' => array('vivienda/0001')));
            $this->middle = 'capitulo-t-vivienda/direccion-de-la-vivienda';
            $this->layout();  
        
        }
        
        public function guardar_5() {
            $this->caratulaform->setData($this->input->post('frm'));
            $this->caratulaform->save();
            redirect('caratulaController/index_6');
        }
        
        public function index_6() {        
            $this->caratulaform->index();
            $this->caratulaform->set_action('caratulaController/guardar_6');
            $this->data = array('form' => $this->caratulaform, 'anterior' => 'caratulaController/index_5', '_layoutParams' => array('js' => array('vivienda/0001')));
            $this->middle = 'capitulo-t-vivienda/numero-de-hogares';
            $this->layout();  
        
        }
        
        public function guardar_6() {
            $this->caratulaform->setData($this->input->post('frm'));
            $this->caratulaform->save();
            redirect('caratulaController/index_7');
        }
        
        
}