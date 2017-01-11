<?php

class gps_form extends Form {

    public function __construct($params = NULL) {
        parent::__construct(array('model' => 'gps_model', 'prefix' => 'frm'));
    }

    public function index() {
        //$this->ci->load->model('pre_mod2');
          $model = $this->get_model();
            $cod_renaes = $this->ci->session->userdata('COD_RENAES');
            
            $data = array_merge($model->get(array('COD_RENAES' => $cod_renaes)), array('COD_RENAES' => $cod_renaes));
            $this->setData($data);
    }

}
