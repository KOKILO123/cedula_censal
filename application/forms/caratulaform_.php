<?php

class caratulaForm extends Form {

    public function __construct($params = NULL) {
        parent::__construct(array('model' => 'caratula', 'prefix' => 'frm'));
    }

    public function index() {
        $model = $this->get_model();
//        $CUEST_NRO = $this->ci->session->userdata('CUEST_NRO');
//        $INTERNO_ID = $this->ci->session->userdata('INTERNO_ID');
        $CUEST_NRO = 1;
        $INTERNO_ID = 1;
        $data = array_merge($model->get(array('CUEST_NRO' => $CUEST_NRO, 'INTERNO_ID' => $INTERNO_ID)), array('CUEST_NRO' => $CUEST_NRO, 'INTERNO_ID' => $INTERNO_ID));
        $this->setData($data);
    }

}
