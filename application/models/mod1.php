<?php
class mod1 extends MY_Model {
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
array('C3_P1_1', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '1', 'checkbox'=>TRUE, 'options'=>array( '1' => '¿LA ENERGÍA O COMBUSTIBLE QUE UTILIZA PARA COCINAR LOS ALIMENTOS ES: Electricidad?'))
,array('C3_P1_2', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '1', 'checkbox'=>TRUE, 'options'=>array( '1' => '¿LA ENERGÍA O COMBUSTIBLE QUE UTILIZA PARA COCINAR LOS ALIMENTOS ES: Gas (Balón GLP)'))
,array('C3_P1_3', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '1', 'checkbox'=>TRUE, 'options'=>array( '1' => '¿LA ENERGÍA O COMBUSTIBLE QUE UTILIZA PARA COCINAR LOS ALIMENTOS ES: Gas natural (sistemas de tuberías)?'))
,array('C3_P1_4', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '1', 'checkbox'=>TRUE, 'options'=>array( '1' => '¿LA ENERGÍA O COMBUSTIBLE QUE UTILIZA PARA COCINAR LOS ALIMENTOS ES: Carbón?'))
,array('C3_P1_5', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '1', 'checkbox'=>TRUE, 'options'=>array( '1' => '¿LA ENERGÍA O COMBUSTIBLE QUE UTILIZA PARA COCINAR LOS ALIMENTOS ES: Leña?'))
,array('C3_P1_6', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '1', 'checkbox'=>TRUE, 'options'=>array( '1' => '¿LA ENERGÍA O COMBUSTIBLE QUE UTILIZA PARA COCINAR LOS ALIMENTOS ES: Bosta. estiércol?'))
,array('C3_P1_7', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '1', 'checkbox'=>TRUE, 'options'=>array( '1' => '¿LA ENERGÍA O COMBUSTIBLE QUE UTILIZA PARA COCINAR LOS ALIMENTOS ES: Otros (residuos agrícolas, etc.)?'))
,array('C3_P1_8', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '1', 'checkbox'=>TRUE, 'options'=>array( '1' => '¿LA ENERGÍA O COMBUSTIBLE QUE UTILIZA PARA COCINAR LOS ALIMENTOS ES: NO COCINAN.'))
,array('C3_P2_1', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '1', 'radio'=>TRUE, 'options'=>array('1' => '1. SI','2' => '2. NO'))
,array('C3_P2_2', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '1', 'radio'=>TRUE, 'options'=>array('1' => '1. SI','2' => '2. NO'))
,array('C3_P2_3', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '1', 'radio'=>TRUE, 'options'=>array('1' => '1. SI','2' => '2. NO'))
,array('C3_P2_4', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '1', 'radio'=>TRUE, 'options'=>array('1' => '1. SI','2' => '2. NO'))
,array('C3_P2_5', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '1', 'radio'=>TRUE, 'options'=>array('1' => '1. SI','2' => '2. NO'))
,array('C3_P2_6', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '1', 'radio'=>TRUE, 'options'=>array('1' => '1. SI','2' => '2. NO'))
,array('C3_P2_7', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '1', 'radio'=>TRUE, 'options'=>array('1' => '1. SI','2' => '2. NO'))
,array('C3_P2_8', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '1', 'radio'=>TRUE, 'options'=>array('1' => '1. SI','2' => '2. NO'))
,array('C3_P2_9', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '1', 'radio'=>TRUE, 'options'=>array('1' => '1. SI','2' => '2. NO'))
,array('C3_P2_10', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '1', 'radio'=>TRUE, 'options'=>array('1' => '1. SI','2' => '2. NO'))
,array('C3_P2_11', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '1', 'radio'=>TRUE, 'options'=>array('1' => '1. SI','2' => '2. NO'))
,array('C3_P2_12', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '1', 'radio'=>TRUE, 'options'=>array('1' => '1. SI','2' => '2. NO'))
,array('C3_P2_13', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '1', 'radio'=>TRUE, 'options'=>array('1' => '1. SI','2' => '2. NO'))
,array('C3_P2_14', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '1', 'radio'=>TRUE, 'options'=>array('1' => '1. SI','2' => '2. NO'))
,array('C3_P2_15', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '1', 'radio'=>TRUE, 'options'=>array('1' => '1. SI','2' => '2. NO'))
,array('C3_P2_16', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '1', 'radio'=>TRUE, 'options'=>array('1' => '1. SI','2' => '2. NO'))
,array('C3_P2_17', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '1', 'radio'=>TRUE, 'options'=>array('1' => '1. SI','2' => '2. NO'))
,array('C3_P2_18', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '1', 'radio'=>TRUE, 'options'=>array('1' => '1. SI','2' => '2. NO'))
,array('C3_P2_19', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '1', 'radio'=>TRUE, 'options'=>array('1' => '1. SI','2' => '2. NO'))
,array('C3_P3', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '1', 'radio'=>TRUE, 'options'=>array('1' => '1. SI','2' => '2. NO'))
,array('C3_P3A', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '2')
,array('T_TOTAL', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '6')
,array('T_HOMBRES', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '6')
,array('T_MUJERES', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '6')
,);
        }
        
        public function getRules(){
            return array(array('C3_P1_1', 'required' => TRUE, 'regex' => '(0:1)' )
,array('C3_P1_2', 'required' => TRUE, 'regex' => '(0:1)' )
,array('C3_P1_3', 'required' => TRUE, 'regex' => '(0:1)' )
,array('C3_P1_4', 'required' => TRUE, 'regex' => '(0:1)' )
,array('C3_P1_5', 'required' => TRUE, 'regex' => '(0:1)' )
,array('C3_P1_6', 'required' => TRUE, 'regex' => '(0:1)' )
,array('C3_P1_7', 'required' => TRUE, 'regex' => '(0:1)' )
,array('C3_P1_8', 'required' => TRUE, 'regex' => '(0:1)' )
,array('C3_P2_1', 'required' => TRUE, 'regex' => '(1:2)' )
,array('C3_P2_2', 'required' => TRUE, 'regex' => '(1:2)' )
,array('C3_P2_3', 'required' => TRUE, 'regex' => '(1:2)' )
,array('C3_P2_4', 'required' => TRUE, 'regex' => '(1:2)' )
,array('C3_P2_5', 'required' => TRUE, 'regex' => '(1:2)' )
,array('C3_P2_6', 'required' => TRUE, 'regex' => '(1:2)' )
,array('C3_P2_7', 'required' => TRUE, 'regex' => '(1:2)' )
,array('C3_P2_8', 'required' => TRUE, 'regex' => '(1:2)' )
,array('C3_P2_9', 'required' => TRUE, 'regex' => '(1:2)' )
,array('C3_P2_10', 'required' => TRUE, 'regex' => '(1:2)' )
,array('C3_P2_11', 'required' => TRUE, 'regex' => '(1:2)' )
,array('C3_P2_12', 'required' => TRUE, 'regex' => '(1:2)' )
,array('C3_P2_13', 'required' => TRUE, 'regex' => '(1:2)' )
,array('C3_P2_14', 'required' => TRUE, 'regex' => '(1:2)' )
,array('C3_P2_15', 'required' => TRUE, 'regex' => '(1:2)' )
,array('C3_P2_16', 'required' => TRUE, 'regex' => '(1:2)' )
,array('C3_P2_17', 'required' => TRUE, 'regex' => '(1:2)' )
,array('C3_P2_18', 'required' => TRUE, 'regex' => '(1:2)' )
,array('C3_P2_19', 'required' => TRUE, 'regex' => '(1:2)' )
,array('C3_P3', 'required' => TRUE, 'regex' => '(1:2)' )
,array('C3_P3A', 'required' => TRUE, 'regex' => '(1:30)' )
,array('T_TOTAL', 'required' => TRUE, 'regex' => '(1:99998)' )
,array('T_HOMBRES', 'required' => TRUE, 'regex' => '(0:95000)' )
,array('T_MUJERES', 'required' => TRUE, 'regex' => '(0:95000)' )
,);
        }
        
        public function tablename(){
            return 'TB_II_HOGAR';
        }
     
}