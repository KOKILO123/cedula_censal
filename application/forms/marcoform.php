<?php

class marcoForm extends Form {

    public function __construct($params = NULL) {
        parent::__construct(array('model' => 'marco', 'prefix' => 'frm'));
    }
    
    public function index() {
        $model = $this->get_model();
        /*$CUEST_NRO = $this->ci->session->userdata('CUEST_NRO');
        $INTERNO_ID = $this->ci->session->userdata('INTERNO_ID');

        $data = array_merge($model->get(array('CUEST_NRO' => $CUEST_NRO, 'INTERNO_ID' => $INTERNO_ID)), array('CUEST_NRO' => $CUEST_NRO, 'INTERNO_ID' => $INTERNO_ID));
        $this->setData($data);*/
    }

}
