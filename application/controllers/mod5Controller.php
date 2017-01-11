<?php
class mod5Controller extends MY_Controller {
	 public function __construct() {
            parent::__construct();
            $this->load->library('FormLib');
            $this->load->helper('string_helper');
            $this->load->helper('form_helper');
            $this->load->helper('url');
            $this->load->form('mod5Form');
        }
        
        public function index(){
            
        }
}