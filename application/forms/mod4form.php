<?php
class mod4Form extends Form {
	public function __construct($params = NULL)
	{
            parent::__construct(array('model' => 'mod4', 'prefix' => 'frm'));
	}
	public function index()
    {
        $model = $this->get_model();
        $ID = 5;
        $data = array_merge($model->get(array('CCDD' => $ID)), array('CCDD' => $ID));
        $this->setData($data);
    }
}