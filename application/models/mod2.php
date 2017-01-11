<?php
class mod2 extends MY_Model {
	function __construct()
	{
            parent::__construct();
	}
	
        public function getFields(){
            return array(array('VIVIENDA', 'render' => TRUE, 'type' => 'TEXT', 'length' => '','primary_key' => TRUE),
array('CCDD', 'render' => TRUE, 'type' => 'TEXT', 'length' => 'AN','primary_key' => TRUE),
array('CCPP', 'render' => TRUE, 'type' => 'TEXT', 'length' => 'AN','primary_key' => TRUE),
array('CCDI', 'render' => TRUE, 'type' => 'TEXT', 'length' => 'AN','primary_key' => TRUE),
array('ZONA_ID', 'render' => TRUE, 'type' => 'TEXT', 'length' => 'AN','primary_key' => TRUE),
array('SECCION_U', 'render' => TRUE, 'type' => 'TEXT', 'length' => 'N','primary_key' => TRUE),
array('AEU', 'render' => TRUE, 'type' => 'TEXT', 'length' => 'N','primary_key' => TRUE),
array('AER_INI', 'render' => TRUE, 'type' => 'TEXT', 'length' => 'AN','primary_key' => TRUE),
array('AER_FIN', 'render' => TRUE, 'type' => 'TEXT', 'length' => 'AN','primary_key' => TRUE),
array('C4_P1', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '6')
,array('ID_C4_PERSONA', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '6')
,array('C4_N', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '6')
,array('C4_P2', 'render' => TRUE, 'type' => 'TEXT', 'length' => '30')
,array('C4_P3', 'render' => TRUE, 'type' => 'TEXT', 'length' => '35')
,array('C4_P4', 'render' => TRUE, 'type' => 'TEXT', 'length' => '35')
,);
        }
        
        public function getRules(){
            return array(array('C4_P1', 'required' => TRUE, 'regex' => '(1:99998)' )
,array('ID_C4_PERSONA', 'required' => TRUE, 'regex' => '(1:99998)' )
,array('C4_N', 'required' => TRUE, 'regex' => '(1:99998)' )
,array('C4_P2', 'required' => TRUE, 'regex' => '(A:Z)' )
,array('C4_P3', 'required' => TRUE, 'regex' => '(A:Z)' )
,array('C4_P4', 'required' => TRUE, 'regex' => '(A:Z)' )
,);
        }
        
        public function tablename(){
            return 'TB_III_POB_HOGAR';
        }
     
}