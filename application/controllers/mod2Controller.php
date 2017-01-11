<?php
class mod2Controller extends MY_Controller {
	 public function __construct() {
            parent::__construct();
            $this->load->library('FormLib');
            $this->load->helper('string_helper');
            $this->load->helper('form_helper');
            $this->load->helper('url');
            $this->load->form('mod2Form');
        }
        
        public function index(){
            $this->caratulaForm->index();
            $this->caratulaForm->set_action('mod2Controller/guardar');
            $this->data = array('form' => $this->caratulaForm, 'anterior' => 'mod1Controller', '_layoutParams' => array('js' => array('vivienda/0001')));
            $this->middle = 'capitulo-t-poblacion-hogar/capitulo-t-poblacion-hogar';
            $this->layout();  
        }
        
        public function guardar() {
            $this->caratulaForm->setData($this->input->post('frm'));
            $this->caratulaForm->save();
            redirect('mod3Controller');
        }
}