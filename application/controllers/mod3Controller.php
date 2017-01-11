<?php
class mod3Controller extends MY_Controller {
	 public function __construct() {
            parent::__construct();
            $this->load->library('FormLib');
            $this->load->helper('string_helper');
            $this->load->helper('form_helper');
            $this->load->helper('url');
            $this->load->form('mod3Form');
        }
        
        public function index(){
            $this->caratulaForm->index();
            $this->caratulaForm->set_action('mod3Controller/guardar');
            $this->data = array('form' => $this->caratulaForm, 'anterior' => 'mod2Controller', '_layoutParams' => array('js' => array('vivienda/0001')));
            $this->middle = 'capitulo-t-poblacion/capitulo-t-poblacion';
            $this->layout();  
        }
        
        public function guardar() {
            $this->caratulaForm->setData($this->input->post('frm'));
            $this->caratulaForm->save();
            redirect('mod4Controller');
        }
}