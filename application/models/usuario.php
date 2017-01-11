<?php
class usuario extends MY_Model{
    
    function __construct(){
        parent::__construct();
    }
    
    public function login($usuario, $password){
//        $this->db->select("ID, COD_PERFIL, USUARIO, CONTRASENA, NOMBRES || ' ' || APELLIDOS AS NOMBRE_COMPLETO, DNI, SEXO, TELEFONO, CORREO, ESTADO");
//        $this->db->where('USUARIO', $usuario);
//        $this->db->where('CONTRASENA', $password);
//        $consulta = $this->db->get('TB_USUARIO');
//      return $consulta->row_array();  
          
        $this->db->select("T1.ID, T1.COD_PERFIL, T1.USUARIO, T1.CONTRASENA, T1.NOMBRES || ' ' || T1.APELLIDOS AS NOMBRE_COMPLETO, T1.DNI, T1.SEXO, T1.TELEFONO, T1.CORREO,T1.ESTADO,T2.CCDD,T2.CCPP,T2.CCDI,T2.ZONA,T2.SECCION,T2.AEU,T2.AERINI,T2.AERFIN");
        $this->db->from('TB_USUARIO T1 ');
        $this->db->join('TB_SEGMENTACION T2 ', 'T1.ID=T2.ID'); 
        $this->db->where('T1.USUARIO', $usuario);
        $this->db->where('T1.CONTRASENA', $password);
        //$this->db->order_by('T1.ID');
        $q = $this->db->get();
        
        return $result = $q->result_array();         
    }   
    
    public function getCargaTrabajo($usuario) {
         //var_dump($usuario);
        // exit();
        //$this->db->select('ID,MERCADONOMBRE, DEPARTAMENTO');
        //$this->db->where(array('USUARIO' => $usuario));
        //$this->db->group_by('DEPARTAMENTO, ID, MERCADONOMBRE');
        //$this->db->order_by('ID');
        //$q = $this->db->get('T_MARCO');       
        //var_dump($q->result_array()); exit;        
        //var_dump($q->result_array()); exit;
    
        $this->db->select('T1.* ');
        $this->db->from('TB_MAE_MARCO T1 ');
        $this->db->join('TB_SEGMENTACION T2 ', 'T1.CCDD=T2.CCDD AND T1.CCPP=T2.CCPP AND T1.CCDI=T2.CCDI AND T1.ZONA=T2.ZONA AND T1.SECCION=T2.SECCION AND T1.AEU=T2.AEU AND T1.AERINI=T2.AERINI AND T1.AERFIN=T2.AERFIN','INNER'); 
        $this->db->join('TB_USUARIO T3 ', 'T2.ID=T3.ID'); 
        $this->db->where('T3.ID', $usuario);
        //$this->db->order_by('T1.ID');
        $q = $this->db->get();
        
        return $result = $q->result_array();        
        //return  $this->trim_results->trimResult($q->result_array());
    }  
    
    public function obtenerMercado($mercado){        
        $this->db->select('ID,NOM_MERCADO');
        $this->db->where('ID', $mercado);
        $this->db->group_by('NOM_MERCADO, ID');
        $this->db->order_by('ID');
        $consulta = $this->db->get('TD_MARCO');        
        return $consulta->row_array();        
    }
    
}


