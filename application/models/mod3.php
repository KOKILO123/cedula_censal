<?php
class mod3 extends MY_Model {
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
array('ID_C5_PERSONA', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '6')
,array('C5_N', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '6')
,array('C5_NOM', 'render' => TRUE, 'type' => 'TEXT', 'length' => '30')
,array('C5_P1', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '2', 'dropdown'=>TRUE, 'options'=>array('' => 'SELECCIONE','1' => '1. JEFE/A DEL HOGAR','2' => '2. ESPOSO/A O COMPAñERO/A','3' => '3. HIJO(A) / HIJASTRO/A','4' => '4. YERNO / NUERA','5' => '5. NIETO/A','6' => '6. PADRE / MADRE / SUEGRO/A','7' => '7. OTRO/A PARIENTE','8' => '8. TRABAJADOR/A DEL HOGAR','9' => '9. OTRO/A NO PARIENTES'))
,array('C5_P2', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '1', 'radio'=>TRUE, 'options'=>array('1' => '1.HOMBRE','2' => '2.MUJER','' => ''))
,array('C5_P3_1', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '2')
,array('C5_P3_2', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '2')
,array('C5_P3_3', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '4')
,array('C5_P4', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '1', 'radio'=>TRUE, 'options'=>array('1' => '1. SI','2' => '2. NO'))
,array('C5_P4A_COD', 'render' => TRUE, 'type' => 'TEXT', 'length' => '2')
,array('C5_P4A_NOM', 'render' => TRUE, 'type' => 'TEXT', 'length' => '25')
,array('C5_P4B_COD', 'render' => TRUE, 'type' => 'TEXT', 'length' => '2')
,array('C5_P4B_NOM', 'render' => TRUE, 'type' => 'TEXT', 'length' => '50')
,array('C5_P4C_COD', 'render' => TRUE, 'type' => 'TEXT', 'length' => '2')
,array('C5_P4C_NOM', 'render' => TRUE, 'type' => 'TEXT', 'length' => '25')
,array('C5_P4D_COD', 'render' => TRUE, 'type' => 'TEXT', 'length' => '4')
,array('C5_P4D_NOM', 'render' => TRUE, 'type' => 'TEXT', 'length' => '25')
,array('C5_P5', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '1', 'dropdown'=>TRUE, 'options'=>array('' => 'SELECCIONE','1' => '1. AúN NO HABíA NACIDO','2' => '2. Sí','3' => '3. NO'))
,array('C5_P5A_COD', 'render' => TRUE, 'type' => 'TEXT', 'length' => '2')
,array('C5_P5A_NOM', 'render' => TRUE, 'type' => 'TEXT', 'length' => '25')
,array('C5_P5B_COD', 'render' => TRUE, 'type' => 'TEXT', 'length' => '2')
,array('C5_P5B_NOM', 'render' => TRUE, 'type' => 'TEXT', 'length' => '50')
,array('C5_P5C_COD', 'render' => TRUE, 'type' => 'TEXT', 'length' => '2')
,array('C5_P5C_NOM', 'render' => TRUE, 'type' => 'TEXT', 'length' => '25')
,array('C5_P5D_COD', 'render' => TRUE, 'type' => 'TEXT', 'length' => '4')
,array('C5_P5D_NOM', 'render' => TRUE, 'type' => 'TEXT', 'length' => '50')
,array('C5_P6', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '1', 'radio'=>TRUE, 'options'=>array('1' => '1. Sí','2' => '2. NO'))
,array('C5_P6A_COD', 'render' => TRUE, 'type' => 'TEXT', 'length' => '2')
,array('C5_P6A_NOM', 'render' => TRUE, 'type' => 'TEXT', 'length' => '50')
,array('C5_P6B_COD', 'render' => TRUE, 'type' => 'TEXT', 'length' => '2')
,array('C5_P6B_NOM', 'render' => TRUE, 'type' => 'TEXT', 'length' => '50')
,array('C5_P6C_COD', 'render' => TRUE, 'type' => 'TEXT', 'length' => '2')
,array('C5_P6C_NOM', 'render' => TRUE, 'type' => 'TEXT', 'length' => '50')
,array('C5_P6D_COD', 'render' => TRUE, 'type' => 'TEXT', 'length' => '4')
,array('C5_P6D_NOM', 'render' => TRUE, 'type' => 'TEXT', 'length' => '50')
,array('C5_P7_1', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '1', 'checkbox'=>TRUE, 'options'=>array( '1' => ' 1. Seguro Integral de Salud (SIS)?'))
,array('C5_P7_2', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '1', 'checkbox'=>TRUE, 'options'=>array( '1' => '2. ESSALUD?'))
,array('C5_P7_3', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '1', 'checkbox'=>TRUE, 'options'=>array( '1' => '3. Seguro de Fuerzas armadas o Policiales?'))
,array('C5_P7_4', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '1', 'checkbox'=>TRUE, 'options'=>array( '1' => '4. Seguro privado de salud?'))
,array('C5_P7_5', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '1', 'checkbox'=>TRUE, 'options'=>array( '1' => '5. Otro seguro?'))
,array('C5_P7_6', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '1', 'checkbox'=>TRUE, 'options'=>array( '1' => '6. NINGUNO'))
,array('C5_P8_1', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '1', 'radio'=>TRUE, 'options'=>array('1' => '1. Sí','2' => '2. NO'))
,array('C5_P8_2', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '1', 'radio'=>TRUE, 'options'=>array('1' => '1. Sí','2' => '2. NO'))
,array('C5_P8_3', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '1', 'radio'=>TRUE, 'options'=>array('1' => '1. Sí','2' => '2. NO'))
,array('C5_P8_4', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '1', 'radio'=>TRUE, 'options'=>array('1' => '1. Sí','2' => '2. NO'))
,array('C5_P8_5', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '1', 'radio'=>TRUE, 'options'=>array('1' => '1. Sí','2' => '2. NO'))
,array('C5_P8_6', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '1', 'radio'=>TRUE, 'options'=>array('1' => '1. Sí','2' => '2. NO'))
,array('C5_P8_7', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '1', 'radio'=>TRUE, 'options'=>array('1' => '1. Sí','2' => '2. NO'))
,array('C5_P8_8', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '1', 'radio'=>TRUE, 'options'=>array('1' => '1. Sí','2' => '2. NO'))
,array('C5_P8_O', 'render' => TRUE, 'type' => 'TEXT', 'length' => '35')
,array('C5_P9', 'render' => TRUE, 'type' => 'TEXT', 'length' => '8', 'dropdown'=>TRUE, 'options'=>array('' => 'SELECCIONE','' => 'DNI'))
,array('C5_P9A', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '1', 'radio'=>TRUE, 'options'=>array('1' => '1. NO RECUERDA','2' => '2. NO QUIZO DAR INFORMACIóN'))
,array('C5_P10', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '2', 'dropdown'=>TRUE, 'options'=>array('' => 'SELECCIONE','1' => '1. QUECHUA?','2' => '2. AIMARA?','3' => '3. ASHáNINKA?','4' => '4. AGUARUNA / AWAJUN?','5' => '5. SHIPIBO-CONIBO?','6' => '6. SHAWI / CHAYAHUITA?','7' => '7. MATSIGENKA / MACHIGUENGA?','8' => '8. ACHUAR?','9' => '9. OTRA LENGUA NATIVA ORIGINARIA?','10' => '10. CASTELLANO?','11' => '11. PORTUGUéS','12' => '12. OTRO LENGUA EXTRANJERA?','13' => '13. ES SORDOMUDA/O'))
,array('C5_P10_O', 'render' => TRUE, 'type' => 'TEXT', 'length' => '25')
,array('C5_P11', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '1', 'radio'=>TRUE, 'options'=>array('1' => '1. Sí','2' => '2. NO'))
,array('C5_P12_NIV', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '2', 'dropdown'=>TRUE, 'options'=>array('' => 'SELECCIONE','1' => '1. SIN NIVEL','2' => '2. INICIAL','3' => '3. PRIMARIA','4' => '4. SECUNDARIA','5' => '5. BáSICA ESPECIAL','6' => '6. SUPERIOR NO UNIVERSITARIA INCOMPLETA','7' => '7. SUPERIOR NO UNIVERSITARIA COMPLETA','8' => '8. SUPERIOR UNIVERSITARIA INCOMPLETA','9' => '9. SUPERIOR UNIVERSITARIA COMPLETA','10' => '10. MAESTRíA / DOCTORADO INCOMPLETO','11' => '11. MAESTRíA / DOCTORADO COMPLETO'))
,array('C5_P12_GRADO', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '1')
,array('C5_P12_ANIO', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '1')
,array('C5_P13', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '1', 'radio'=>TRUE, 'options'=>array('1' => '1. Sí','2' => '2. NO'))
,array('C5_P14', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '1', 'radio'=>TRUE, 'options'=>array('1' => '1. Sí','2' => '2. NO'))
,array('C5_P15', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '1', 'radio'=>TRUE, 'options'=>array('1' => '1. Sí','2' => '2. NO'))
,array('C5_P16', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '1', 'dropdown'=>TRUE, 'options'=>array('' => 'SELECCIONE','1' => '1. REALIZANDO ALGúN CACHUELO: VENDIENDO, OFRECIENDO ALGúN SERVICIO, HACIENDO ALGO EN CASA U OTROS?','2' => '2. REALIZANDO LABORES EN LA CHACRA O EL CUIDADO DE ANIMALES?','3' => '3. REALIZANDO ALGúN TRABAJO ARTESANAL O FABRICANDO ALGúN PRODUCTO?','4' => '4. TRABAJANDO EN ALGúN NEGOCIO PROPIO O DE UN FAMILIAR?','5' => '5. AYUDANDO EN LA CHACRA, TIENDA O NEGOCIO DE UN FAMILIAR SIN PAGO ALGUNO?','6' => '6. OTRO','7' => '7.NO TRABAJÓ'))
,array('C5_P16_O', 'render' => TRUE, 'type' => 'TEXT', 'length' => '25')
,array('C5_P17', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '2', 'dropdown'=>TRUE, 'options'=>array('' => 'SELECCIONE','1' => '1. ¿HACIENDO TRáMITES, BUSCANDO LOCAL O PRéSTAMOS PARA SU NEGOCIO PROPIO?','2' => '2. ¿REPARANDO SU LOCAL, MáQUINAS, EQUIPOS U OTROS PARA TRABAJAR?','3' => '3. ¿BUSCANDO TRABAJO POR PRIMERA VEZ?','4' => '4. ¿ESTUDIANDO Y NO TRABAJó?','5' => '5. ¿VIVIENDO DE SU PENSIóN O JUBILACIóN Y NO TRABAJó?','6' => '6. ¿VIVIENDO DE SUS RENTAS Y NO TRABAJó?','7' => '7. ¿AL CUIDADO DE SU HOGAR Y NO TRABAJO?','8' => '8. ¿ENFERMO O INCAPACITADO Y NO TRABAJó?','9' => '9. ¿OTRA?'))
,array('C5_P17_O', 'render' => TRUE, 'type' => 'TEXT', 'length' => '35')
,array('C5_P18', 'render' => TRUE, 'type' => 'TEXT', 'length' => '45')
,array('C5_P18_COD', 'render' => TRUE, 'type' => 'TEXT', 'length' => '3')
,array('C5_P19', 'render' => TRUE, 'type' => 'TEXT', 'length' => '45')
,array('C5_P19_COD', 'render' => TRUE, 'type' => 'TEXT', 'length' => '4')
,array('C5_P20', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '1', 'dropdown'=>TRUE, 'options'=>array('' => 'SELECCIONE','1' => '1. EMPLEADO/A?','2' => '2. OBRERO/A?','3' => '3. TRABAJADOR/A INDEPENDIENTE O POR CUENTA PROPIA?','4' => '4. EMPLEADOR/A O PATRONO/A ?','5' => '5. TRABAJADOR FAMILIAR NO REMUNERADO?','6' => '6. TRABAJADORA/OR DEL HOGAR’','7' => '7. OTRO?'))
,array('C5_P20_O', 'render' => TRUE, 'type' => 'TEXT', 'length' => '35')
,array('C5_P21', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '1', 'dropdown'=>TRUE, 'options'=>array('' => 'SELECCIONE','1' => '1. DE 1 A 5 PERSONAS?','2' => '2. DE 6 A 10 PERSONAS?','3' => '3. DE 11 A 50 PERSONAS?','4' => '4. DE 51 A MáS PERSONAS?'))
,array('C5_P22', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '1', 'dropdown'=>TRUE, 'options'=>array('' => 'SELECCIONE','1' => '1. CONVIVIENTE','2' => '2. SEPARADO/A','3' => '3. CASADO/A','4' => '4. VIUDO/A','5' => '5. DIVORCIADO/A','6' => '6. SOLTERO/A'))
,array('C5_P23', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '2', 'dropdown'=>TRUE, 'options'=>array('' => 'SELECCIONE','1' => '1. QUECHUA?','2' => '2. AYMARA?','3' => '3. NATIVO O INDíGENA DE LA AMAZONíA?','4' => '4. PERTENECIENTE O PARTE DE OTRO PUEBLO INDíGENA U ORIGINARIO?','5' => '5. NEGRO, ZAMBO, MULATO, MORENO/PUEBLO AFROPERUANO O AFRODESCENDIENTE?','6' => '6. BLANCO?','7' => '7. MESTIZO?','8' => '8. OTRO?','9' => '9. NO SABE/NO RESPONDE.'))
,array('C5_P23_O', 'render' => TRUE, 'type' => 'TEXT', 'length' => '15')
,array('C5_P24', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '1', 'dropdown'=>TRUE, 'options'=>array('' => 'SELECCIONE','1' => '1. CATóLICA','2' => '2. CRISTIANA / EVANGéLICA','3' => '3. OTRA','4' => '4. NINGUNA'))
,array('C5_P24_O', 'render' => TRUE, 'type' => 'TEXT', 'length' => '15')
,array('C5_P25', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '2')
,array('C5_P25_1', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '1', 'checkbox'=>TRUE, 'options'=>array( '1' => '¿CUÁNTOS HIJOS E HIJAS NACIDOS VIVOS EN TOTAL HA TENIDO? NINGUNO'))
,array('C5_P26', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '2')
,array('C5_P26_1', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '1', 'checkbox'=>TRUE, 'options'=>array( '1' => '¿CUÁNTOS DE SUS HIJOS E HIJAS ESTÁN ACTUALMENTE VIVOS? NINGUNO'))
,array('C5_P27_1', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '2')
,array('C5_P27_2', 'render' => TRUE, 'type' => 'INTEGER', 'length' => '4')
,);
        }
        
        public function getRules(){
            return array(array('ID_C5_PERSONA', 'required' => TRUE, 'regex' => '(1:99998)' )
,array('C5_N', 'required' => TRUE, 'regex' => '(1:99998)' )
,array('C5_NOM', 'required' => TRUE, 'regex' => '(A:Z)' )
,array('C5_P1', 'required' => TRUE, 'regex' => '(1:9)' )
,array('C5_P2', 'required' => TRUE, 'regex' => '(1:2)' )
,array('C5_P3_1', 'required' => TRUE, 'regex' => '(1:31)' )
,array('C5_P3_2', 'required' => TRUE, 'regex' => '(1:12)' )
,array('C5_P3_3', 'required' => TRUE, 'regex' => '(1900:2017)' )
,array('C5_P4', 'required' => TRUE, 'regex' => '(1:2)' )
,array('C5_P4A_COD', 'required' => TRUE, 'regex' => '(01:43)' )
,array('C5_P4A_NOM', 'required' => TRUE, 'regex' => '(A:Z)' )
,array('C5_P4B_COD', 'required' => TRUE, 'regex' => '(01:20)' )
,array('C5_P4B_NOM', 'required' => TRUE, 'regex' => '(A:Z)' )
,array('C5_P4C_COD', 'required' => TRUE, 'regex' => '(01:25)' )
,array('C5_P4C_NOM', 'required' => TRUE, 'regex' => '(A:Z)' )
,array('C5_P4D_COD', 'required' => TRUE, 'regex' => '(0001:9998)' )
,array('C5_P4D_NOM', 'required' => TRUE, 'regex' => '(A:Z)' )
,array('C5_P5', 'required' => TRUE, 'regex' => '(1:3)' )
,array('C5_P5A_COD', 'required' => TRUE, 'regex' => '(01:43)' )
,array('C5_P5A_NOM', 'required' => TRUE, 'regex' => '(A:Z)' )
,array('C5_P5B_COD', 'required' => TRUE, 'regex' => '(01:20)' )
,array('C5_P5B_NOM', 'required' => TRUE, 'regex' => '(A:Z)' )
,array('C5_P5C_COD', 'required' => TRUE, 'regex' => '(01:25)' )
,array('C5_P5C_NOM', 'required' => TRUE, 'regex' => '(A:Z)' )
,array('C5_P5D_COD', 'required' => TRUE, 'regex' => '(0001:9998)' )
,array('C5_P5D_NOM', 'required' => TRUE, 'regex' => '(A:Z)' )
,array('C5_P6', 'required' => TRUE, 'regex' => '(1:2)' )
,array('C5_P6A_COD', 'required' => TRUE, 'regex' => '(01:43)' )
,array('C5_P6A_NOM', 'required' => TRUE, 'regex' => '(A:Z)' )
,array('C5_P6B_COD', 'required' => TRUE, 'regex' => '(01:20)' )
,array('C5_P6B_NOM', 'required' => TRUE, 'regex' => '(A:Z)' )
,array('C5_P6C_COD', 'required' => TRUE, 'regex' => '(01:25)' )
,array('C5_P6C_NOM', 'required' => TRUE, 'regex' => '(A:Z)' )
,array('C5_P6D_COD', 'required' => TRUE, 'regex' => '(0001:9998)' )
,array('C5_P6D_NOM', 'required' => TRUE, 'regex' => '(A:Z)' )
,array('C5_P7_1', 'required' => TRUE, 'regex' => '(0:1)' )
,array('C5_P7_2', 'required' => TRUE, 'regex' => '(0:1)' )
,array('C5_P7_3', 'required' => TRUE, 'regex' => '(0:1)' )
,array('C5_P7_4', 'required' => TRUE, 'regex' => '(0:1)' )
,array('C5_P7_5', 'required' => TRUE, 'regex' => '(0:1)' )
,array('C5_P7_6', 'required' => TRUE, 'regex' => '(0:1)' )
,array('C5_P8_1', 'required' => TRUE, 'regex' => '(1:2)' )
,array('C5_P8_2', 'required' => TRUE, 'regex' => '(1:2)' )
,array('C5_P8_3', 'required' => TRUE, 'regex' => '(1:2)' )
,array('C5_P8_4', 'required' => TRUE, 'regex' => '(1:2)' )
,array('C5_P8_5', 'required' => TRUE, 'regex' => '(1:2)' )
,array('C5_P8_6', 'required' => TRUE, 'regex' => '(1:2)' )
,array('C5_P8_7', 'required' => TRUE, 'regex' => '(1:2)' )
,array('C5_P8_8', 'required' => TRUE, 'regex' => '(1:2)' )
,array('C5_P8_O', 'required' => TRUE, 'regex' => '(A:Z)' )
,array('C5_P9', 'required' => TRUE, 'regex' => '(00001000:99999000)' )
,array('C5_P9A', 'required' => TRUE, 'regex' => '(1:2)' )
,array('C5_P10', 'required' => TRUE, 'regex' => '(1:12)' )
,array('C5_P10_O', 'required' => TRUE, 'regex' => '(A:Z)' )
,array('C5_P11', 'required' => TRUE, 'regex' => '(1:2)' )
,array('C5_P12_NIV', 'required' => TRUE, 'regex' => '(1:11)' )
,array('C5_P12_GRADO', 'required' => TRUE, 'regex' => '(1:6)' )
,array('C5_P12_ANIO', 'required' => TRUE, 'regex' => '(0:5)' )
,array('C5_P13', 'required' => TRUE, 'regex' => '(1:2)' )
,array('C5_P14', 'required' => TRUE, 'regex' => '(1:2)' )
,array('C5_P15', 'required' => TRUE, 'regex' => '(1:2)' )
,array('C5_P16', 'required' => TRUE, 'regex' => '(1:7)' )
,array('C5_P16_O', 'required' => TRUE, 'regex' => '(A:Z)' )
,array('C5_P17', 'required' => TRUE, 'regex' => '(1:9)' )
,array('C5_P17_O', 'required' => TRUE, 'regex' => '(A:Z), (0:9)' )
,array('C5_P18', 'required' => TRUE, 'regex' => '(A:Z), (0:9)' )
,array('C5_P18_COD', 'required' => TRUE, 'regex' => '(001:998)' )
,array('C5_P19', 'required' => TRUE, 'regex' => '(A:Z), (0:9)' )
,array('C5_P19_COD', 'required' => TRUE, 'regex' => '(0001:9998)' )
,array('C5_P20', 'required' => TRUE, 'regex' => '(1:7)' )
,array('C5_P20_O', 'required' => TRUE, 'regex' => '(A:Z), (0:9)' )
,array('C5_P21', 'required' => TRUE, 'regex' => '(1:4)' )
,array('C5_P22', 'required' => TRUE, 'regex' => '(1:6)' )
,array('C5_P23', 'required' => TRUE, 'regex' => '(1:9)' )
,array('C5_P23_O', 'required' => TRUE, 'regex' => '(A:Z)' )
,array('C5_P24', 'required' => TRUE, 'regex' => '(1:4)' )
,array('C5_P24_O', 'required' => TRUE, 'regex' => '(A:Z), (0:9)' )
,array('C5_P25', 'required' => TRUE, 'regex' => '(1:30)' )
,array('C5_P25_1', 'required' => TRUE, 'regex' => '(0:1)' )
,array('C5_P26', 'required' => TRUE, 'regex' => '(1:30)' )
,array('C5_P26_1', 'required' => TRUE, 'regex' => '(0:1)' )
,array('C5_P27_1', 'required' => TRUE, 'regex' => '(1:12)' )
,array('C5_P27_2', 'required' => TRUE, 'regex' => '(1920:2017)' )
,);
        }
        
        public function tablename(){
            return 'TB_III_POBLACION';
        }
     
}