<?php
class mod4Controller extends MY_Controller {
	 public function __construct() {
            parent::__construct();
            $this->load->library('FormLib');
            $this->load->helper('string_helper');
            $this->load->helper('form_helper');
            $this->load->helper('url');
            $this->load->form('mod4Form');
        }
        
    public function index() {        
        $this->mod4form->index();
        $this->mod4form->set_action('mod4Controller/guardar');
        $this->data = array('form' => $this->mod4form, 'anterior' => 'mod4Controller', '_layoutParams' => array('js' => array('caratula')));
        $this->middle = 'capitulo-t-poblacion/capitulo-t-poblacion';
        $this->layout();    
    }

    public function guardar(){
        $this->mod4form->setData($this->input->post('frm'));
        $this->mod4form->save();
        redirect('mod4Controller');
    }
}