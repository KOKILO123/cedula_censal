<?php
class mod1Controller extends MY_Controller {
	 public function __construct() {
            parent::__construct();
            $this->load->library('FormLib');
            $this->load->helper('string_helper');
            $this->load->helper('form_helper');
            $this->load->helper('url');
            $this->load->form('mod1Form');
        }
        
        public function index(){
            $this->caratulaForm->index();
            $this->caratulaForm->set_action('mod1Controller/guardar');
            $this->data = array('form' => $this->caratulaForm, 'anterior' => 'caratulaController/index_6', '_layoutParams' => array('js' => array('vivienda/0001')));
            $this->middle = 'capitulo-t-hogar/capitulo-t-hogar';
            $this->layout();  
        }
        
        public function guardar() {
            $this->caratulaForm->setData($this->input->post('frm'));
            $this->caratulaForm->save();
            redirect('mod2Controller');
        }
}