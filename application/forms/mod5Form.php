<?php
class mod5Form extends Form {
	public function __construct($params = NULL)
	{
            parent::__construct(array('model' => 'mod5', 'prefix' => 'frm'));
	}
}