<?php
class mod1Form extends Form {
	public function __construct($params = NULL)
	{
            parent::__construct(array('model' => 'mod1', 'prefix' => 'frm'));
	}
        
        public function index() {
            $model = $this->get_model();
            $CCDD = $this->ci->session->userdata('CCDD');
            $CCPP = $this->ci->session->userdata('CCPP');
            $CCDI = $this->ci->session->userdata('CCDI');
            $ZONA = $this->ci->session->userdata('ZONA');
            $SECCION = $this->ci->session->userdata('SECCION');
            $AEU = $this->ci->session->userdata('AEU');
            $AERINI = $this->ci->session->userdata('AERINI');
            $AERFIN = $this->ci->session->userdata('AERFIN');
            $VIVIENDA = $this->ci->session->userdata('VIVIENDA');
            
           
            
            $data = array_merge($model->get(array('CCDD' => $CCDD, 'CCPP' => $CCPP, 'CCDI' => $CCDI, 'ZONA' => $ZONA, 'SECCION' => $SECCION, 'AEU' => $AEU, 'AER_INI' => $AERINI, 'AER_FIN' => $AERFIN, 'VIVIENDA' => $VIVIENDA)), array('CCDD' => $CCDD, 'CCPP' => $CCPP, 'CCDI' => $CCDI, 'ZONA' => $ZONA, 'SECCION' => $SECCION, 'AEU' => $AEU, 'AER_INI' => $AERINI, 'AER_FIN' => $AERFIN, 'VIVIENDA' => $VIVIENDA));
            $this->setData($data);
        }
}