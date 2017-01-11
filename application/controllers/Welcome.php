<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    static $START_ROW = 2;
    static $START_COLUMN = 0;
    static $COUNTER = 1;
    static $TOTAL_ROWS = 305;
    static $PK_NAME = 'id';
    static $APP_PREFIX = '';
    private $pathname = '';
    private $pk = '';

    public function __construct()
    {
        parent::__construct();
        $this->load->library('PHPExcel');
//        $this->load->library('FormLib');
        $this->load->helper('string_helper');
        //$this->load->model('menu');
    }

    public function index($tipo = 1)
    {
        $objPHPExcel = PHPExcel_IOFactory::load(APPPATH . "docs/diccionario_censolfinal.xlsx");

        $sheet = $objPHPExcel->getSheet(0);

        if ($tipo == 1) {
            //$this->build_menu($sheet);
        } else if ($tipo == 2) {
            $this->build_model($sheet);
        } else {
            $this->generatePartialViews($sheet);
        }
    }

    /**
     * fila 7 son las columnas con todos los atributos
     * @return array
     */
    private function getAttributes()
    {
        return array('Nº', 'NOMBRE DEL CAMPO', 'DESCRIPCIÓN DE LAS VARIABLES',
            'ETIQUETAS', 'LONGITUD', 'TIPO DE CARÁCTER', 'RANGO DE VARIACIÓN',
            'INFORM. OBLIGAT', 'DOBLE DIGITACIÓN', 'OBS');
    }

    private function getAttributePosition($attribute)
    {
        return array_search($attribute, $this->getAttributes());
    }

    private function isPartialView($view)
    {
        return !is_numeric($view) && $view !== NULL && $view !== 'Start';
    }

    private function isCellValue($view)
    {
        return is_numeric($view);
    }

    private function isMenuCell($view)
    {
        return !is_numeric($view) && !is_null($view);
    }

    private function isLabelText($view)
    {
        return $view === '' || $view === NULL;
    }

    private function _getPrimaryKey($sheet)
    {
        $row = self::$START_ROW + 1;
        $row_finish = 50;
        $i = 0;
        for ($row; $row <= $row_finish; $row++) {
            $i++;
            //debug(trim($sheet->getCellByColumnAndRow(7, $row)));
            if (trim($sheet->getCellByColumnAndRow(7, $row)->getValue()) == self::$PK_NAME) {
                $name = $sheet->getCellByColumnAndRow(1, $row)->getValue();
                $this->pk[$i] = $name;
            }
        }
        return $this->pk;
    }

    private function getPrimaryKey($sheet)
    {
        $this->_getPrimaryKey($sheet);
        $row = self::$START_ROW;

        $pk = '';
//        var_dump(trim($sheet->getCellByColumnAndRow(9, $row)->getValue()));exit;
        if ($this->pk) {
            foreach ($this->pk as $key => $value) {
                $length = $sheet->getCellByColumnAndRow(4, $row)->getValue();
                $_type = $sheet->getCellByColumnAndRow(3, $row)->getValue();
                $type = ($_type === 'N') ? 'INTEGER' : 'TEXT';
                $pk .= "array('$value', 'render' => TRUE, 'type' => '$type', 'length' => '$length','primary_key' => TRUE)," . PHP_EOL;
                $row++;
            }
        }
        return $pk;
    }

    function generateHtmlField($sheet, $row, $form)
    {
        $des = $sheet->getCellByColumnAndRow(2, $row)->getValue();
        $nro = $sheet->getCellByColumnAndRow(0, $row)->getCalculatedValue();
        $field = $sheet->getCellByColumnAndRow(1, $row)->getValue();
//        $_type = $sheet->getCellByColumnAndRow(5, $row)->getValue();
        $options = $sheet->getCellByColumnAndRow(3, $row)->getValue();
        $checkbox = $sheet->getCellByColumnAndRow(6, $row)->getValue();

        $htmlField = '<div class="row eborderper" id="%s">
            <div class="col-xs-1 col-md-1 espace-top text-center"></div>
            <div class=" col-xs-5  col-md-6 espace-top espace-bottom  espace-left">
                <div><label>%s</label></div>
            </div>
            <div class="col-xs-6 col-md-5 espace-top espace-bottom espace-left" >
                <table class="table table-bordered">
                    <tr><td><?php echo %s; ?></td></tr>
                </table>
            </div>
        </div>';
        $htmlField2 = '<div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left" id="%s">
                <table class="table">
                    <tr><td><?php echo %s; ?></td></tr>
                </table>
            </div>';
//radio
        if (trim($checkbox) === '(1:2)') {
            $htmlField = sprintf($htmlField, "div_$field", $des, "form_radio_multiple($form->$field)");
//dropdown
        } else if ($options) {
            $htmlField = sprintf($htmlField, "div_$field", $des, "form_dropdown($form->$field)");
//checkbox
        } else if (trim($checkbox) === '(0:1)') {
            $htmlField = sprintf($htmlField2, "div_$field", "form_checkbox($form->$field)");
//input
        } else {
            $htmlField = sprintf($htmlField, "div_$field", $des, "form_input($form->$field)");
        }
        return ($field) ? $htmlField : '';
    }

    function generateHtmlHeader($sheet, $row)
    {
        $des = $sheet->getCellByColumnAndRow(2, $row)->getValue();

        $htmlField = '<div class="row eborderper ">
            <div class="col-xs-1 col-md-1 espace-top text-center ">%s</div>
            <div class="col-xs-12 col-md-12 espace-top espace-bottom espace-left">
                <div><label>%s</label></div>
            </div>            
        </div>';
//radio
        return sprintf($htmlField, '#', $des);
    }

    private function generatePartialViews($sheet)
    {
        $row = self::$START_ROW - 1;
        $column = self::$START_COLUMN;
        $this->pathname = APPPATH . 'views' . DIRECTORY_SEPARATOR . self::$APP_PREFIX . 'caratula' . DIRECTORY_SEPARATOR;
        mkdir($this->pathname);
        $file = NULL;
//        $co = 0;
        $formName = '$form';
        while ($row <= self::$TOTAL_ROWS) {
//            var_dump($value);
            $value = $this->isValidRow($sheet, $row, $column);

//            echo $value;exit;
//            debug($this->isPartialView($value));
            if ($this->isPartialView($value)) {
                $pk = $this->_getPrimaryKey($sheet);
//                debug($value);
                //debug(' row: ' . $row . ' column: ' . $column . ' value: ' . $value);
                $file = $this->writePartialView($value, $file, $pk);
//                debug($file);
//                $this->view = slugify($value);
            }
//            if ($this->isModule(slugify($value))) {
//                $formName = (($co === 0) ? '$caratulaForm' : '$mod' . $co . 'Form');
//                $co++;
//            }
//            debug(' row: ' . $row . ' column: ' . $column . ' value: ' . $value . ' is label: ' . $this->isLabelText($value));
//            debug($this->isLabelText($value));
//            debug($this->isCellValue($value));
            if ($this->isLabelText($value)) {
                fwrite($file, $this->generateHtmlHeader($sheet, $row));
                fflush($file);
            } else if ($this->isCellValue($value)) {
                //debug(' row: ' . $row . ' column: ' . $column . ' value: ' . $value . ' is cell value: ' . $this->isCellValue($value));
                fwrite($file, $this->generateHtmlField($sheet, $row, $formName));
                fflush($file);
            }
            $row += self::$COUNTER;
//            debug($row);
        }
        fclose($file);
    }

    private function generateModels($sheet)
    {
        $row = self::$START_ROW;
        $column = self::$START_COLUMN;
        $this->pathname = APPPATH . 'models' . DIRECTORY_SEPARATOR;
        $file = NULL;
        while ($row <= self::$TOTAL_ROWS) {
//            var_dump($value);
            $value = slugify($this->isValidRow($sheet, $row, $column));
            $row += self::$COUNTER;
//            echo $value;
//            exit;
            if ($this->isModule($value)) {
//                var_dump($value);exit;
                $file = $this->writeModel($value, $file);
            }
//            if ($this->isPartialView($value)) {
//                $file = $this->writePartialView($value, $file);
//                $this->view = slugify($value);
//            }
            if ($this->isCellValue($value)) {
//                fwrite($file, $sheet->getCellByColumnAndRow(1, $row)->getValue().PHP_EOL);
//                fflush($file);
            }
        }
        fclose($file);
    }


    private function generateFieldArray($sheet, $row)
    {

        $name = $sheet->getCellByColumnAndRow(1, $row)->getValue();
        $des = $sheet->getCellByColumnAndRow(2, $row)->getValue();
        $length = $sheet->getCellByColumnAndRow(5, $row)->getValue();
        $_type = $sheet->getCellByColumnAndRow(4, $row)->getValue();
        $options = $sheet->getCellByColumnAndRow(3, $row)->getValue();
        $checkbox = $sheet->getCellByColumnAndRow(6, $row)->getValue();
//        echo $name;
        if ($options) {
            $aoptions = explode('|', $options);
            $options = !(in_array(trim($checkbox), array('(0:1)', '(1:2)'))) ? array('\'\' => \'SELECCIONE\'') : array();
            foreach ($aoptions as $option) {
                $option = strtoupper(trim($option));
                $options[] = "'" . trim(substr($option, 0, strpos($option, '.'))) . "' => '$option'";
            }
        }
        $dropdown = ($options) ? ", 'dropdown'=>TRUE, 'options'=>array(" . implode(',', $options) . ")" : "";

        if (trim($checkbox) === '(0:1)') {
            $dropdown = ", 'checkbox'=>TRUE, 'options'=>array( '1' => '$des')";
        }
        if (trim($checkbox) === '(1:2)') {
            $dropdown = ($options) ? ", 'radio'=>TRUE, 'options'=>array(" . implode(',', $options) . ")" : "";
        }
        $pk = FALSE;
        $type = ($_type === 'N') ? 'INTEGER' : 'TEXT';
        return ($name) ? "array('$name', 'render' => TRUE, 'type' => '$type', 'length' => '$length'" . $dropdown . (($pk) ? ",'primary_key' => TRUE" : '') . ")" . PHP_EOL : '';
    }

    private function generateFieldSQL($sheet, $row)
    {
        $name = $sheet->getCellByColumnAndRow(1, $row)->getValue();
        $length = $sheet->getCellByColumnAndRow(5, $row)->getValue();
        $_type = $sheet->getCellByColumnAndRow(4, $row)->getValue();
        $field = '%s %s,';
        if ($name) {
            $field = sprintf($field, $name, ($_type === 'AN') ? 'TEXT(' . $length . ')' : 'INTEGER');
        }
        return ($field) ? $field . PHP_EOL : '';
    }

    private function generatePrimaryFieldSQL($sheet)
    {
        $row = self::$START_ROW + 1;
        $row_finish = self::$START_ROW + 50;
        $co = 0;
        $is_pk = '';
        for ($row; $row <= $row_finish; $row++) {
            $is_pk = $sheet->getCellByColumnAndRow(7, $row)->getValue();
            if ($is_pk == self::$PK_NAME) {
                $name[] = $sheet->getCellByColumnAndRow(1, $row)->getValue();
                $length[] = $sheet->getCellByColumnAndRow(4, $row)->getValue();
                $_type[] = $sheet->getCellByColumnAndRow(3, $row)->getValue();
            }
        }

        $field = '%s %s,';

        foreach ($name as $key => $value) {
            if ($name) {
                $field2 .= sprintf($field, $value, ($_type[$key] == 'AN') ? 'TEXT(' . $length[$key] . ')' : 'INTEGER');
            }
        }

        return ($field2) ? $field2 . PHP_EOL : '';
    }

    private function generatePrimaryFieldSQL2($sheet)
    {
        $row = self::$START_ROW + 1;
        $row_finish = 50;
        $co = 0;
        $is_pk = '';
        for ($row; $row <= $row_finish; $row++) {
            $is_pk = $sheet->getCellByColumnAndRow(7, $row)->getValue();
            if ($is_pk == self::$PK_NAME) {
                $name[] = $sheet->getCellByColumnAndRow(1, $row)->getValue();
            }

        }
        $field = '';
        $pk = '%s,';


        foreach ($name as $key => $value) {
            if ($name) {
                $field .= sprintf($pk, $value);
            }
        }
        return ($field) ? $field . PHP_EOL : '';
    }

    private function generateFieldRulesArray($sheet, $row)
    {
        $name = $sheet->getCellByColumnAndRow(1, $row)->getValue();
        $regex = $sheet->getCellByColumnAndRow(6, $row)->getValue();
        return ($name) ? "array('$name', 'required' => TRUE, 'regex' => '$regex' )" . PHP_EOL : '';
    }

    private function isValidRow($sheet, $row, $column)
    {
        $value1 = $sheet->getCellByColumnAndRow($column, $row)->getCalculatedValue();
//        $value2 = $sheet->getCellByColumnAndRow($this->getAttributePosition('DESCRIPCIÓN DE LAS VARIABLES'), $row)->getCalculatedValue();
//        var_dump($value1, $value2);
        return $value1;
    }

    private function writePartialView($view, $file, $pk)
    {
        if ($file) {
            fclose($file);
        }
        $view = (strlen($view) > 50) ? substr(slugify($view), 0, 50) : slugify($view);

//$pathname = APPPATH . 'views' . DIRECTORY_SEPARATOR;
        if ($this->isModule($view)) {
            $this->pathname = APPPATH . 'views' . DIRECTORY_SEPARATOR . self::$APP_PREFIX . $view . DIRECTORY_SEPARATOR;
            mkdir($this->pathname);
        }

        $filename = $this->pathname . $view . '.php';
        $file = fopen($filename, 'w+');
        if (is_array($pk)) {
            foreach ($pk as $key => $value) {
                $echo .= 'echo form_hidden($form->' . $value . ');';
            }
        }
        fwrite($file, '<?php echo $form->open_tag(); ' . $echo . ' ?>');
        fflush($file);
        //debug('filename: ' . $filename . ' view: ' . $view);
        return $file;
    }

    private function writeModel($view, $file)
    {
        if ($file) {
            fclose($file);
        }
        $view = slugify($view);
        $filename = $this->pathname . self::$APP_PREFIX . $view . '.php';
        $file = fopen($filename, 'w+');
        return $file;
    }

    private function writeModelSQL()
    {
        $filename = APPPATH . 'sql' . DIRECTORY_SEPARATOR . self::$APP_PREFIX . 'cpv.sql';
        $file = fopen($filename, 'w+');
        return $file;
    }

    private function writeForm($view)
    {
        $filename = APPPATH . 'forms' . DIRECTORY_SEPARATOR . self::$APP_PREFIX . $view . 'form.php';
        $file = fopen($filename, 'w+');
//, \'scenario\' => \'parte2\'
        $model = '<?php
class %sForm extends Form {
	public function __construct($params = NULL)
	{
            parent::__construct(array(\'model\' => \'%s\', \'prefix\' => \'frm\'));
	}
}';
        fwrite($file, sprintf($model, self::$APP_PREFIX . $view, self::$APP_PREFIX . $view));
        fflush($file);
        fclose($file);
    }

    private function writeController($view)
    {
        $filename = APPPATH . 'controllers' . DIRECTORY_SEPARATOR . self::$APP_PREFIX . $view . 'Controller.php';
        $file = fopen($filename, 'w+');
//, \'scenario\' => \'parte2\'
        $model = '<?php
class %sController extends MY_Controller {
	 public function __construct() {
            parent::__construct();
            $this->load->library(\'FormLib\');
            $this->load->helper(\'string_helper\');
            $this->load->helper(\'form_helper\');
            $this->load->helper(\'url\');
            $this->load->form(\'%sForm\');
        }
        
        public function index(){
            
        }
}';
        fwrite($file, sprintf($model, self::$APP_PREFIX . $view, self::$APP_PREFIX . $view, $view));
        fflush($file);
        fclose($file);
    }

    private function isModule($view)
    {

        return strpos($view, 'capitulo') !== FALSE;
    }

    public function menu()
    {
        debug($this->menu->getMenu_padrexhijo());
    }

    private function build_menu($sheet)
    {
        $row = self::$START_ROW;
        $column = self::$START_COLUMN;
        $id_menu_padre = '';
        $controller = 'caratulaController';
        $function = 'index';
        $co = 1;
        $co1 = 1;
        while ($row <= self::$TOTAL_ROWS) {
            $value = $this->isValidRow($sheet, $row, $column);
//            debug($value);
            if ($this->isMenuCell($value)) {
                if ($this->isModule($value)) {
                    $co1 = 1;
                    if ($row == self::$START_ROW) {
                        $id_menu_padre = $this->menu->addItem($value, $controller);
                    } else {
                        $id_menu_padre = $this->menu->addItem($value, 'mod' . $co . 'Controller');
                        $co++;
                    }
                }
                if (!($this->isModule($value))) {
                    if ($co1 === 1) {
                        $this->menu->addItem_hijo($value, $id_menu_padre, $function);
                    } else {
                        $this->menu->addItem_hijo($value, $id_menu_padre, 'parte' . $co1);
                    }
                    $co1++;
                }
            }
            $row++;
        }
    }

    private function build_model($sheet)
    {
        $row = self::$START_ROW - 1;
        $column = self::$START_COLUMN;
        $this->pathname = APPPATH . 'models' . DIRECTORY_SEPARATOR;
        $file = NULL;
        $first = TRUE;
        $model = '<?php
class %s extends MY_Model {
	function __construct()
	{
            parent::__construct();
	}
	
        public function getFields(){
            return %s;
        }
        
        public function getRules(){
            return %s;
        }
        
        public function tablename(){
            return \'%s\';
        }
     
}';
        $fields = '';
        $rules = '';
        $co = 0;
        $fileSQL = $this->writeModelSQL();
        $sql = "CREATE TABLE %s (%s);" . PHP_EOL;
        $fieldsSQL = '';
        while ($row <= self::$TOTAL_ROWS) {
            $value = $this->isValidRow($sheet, $row, $column);
            //debug($value);
//            debug($column);
            if ($this->isModule(slugify($value))) {
                //debug('row: ' . $row . ' column: ' . $column . ' value: ' . $value);
                $name = (($co === 0) ? 'caratula' : 'mod' . $co);
                if (!$first) {
                    $_name = (($co === 1) ? 'caratula' : 'mod' . ($co - 1));
                    $fields = ($_name !== 'caratula') ? ($this->getPrimaryKey($sheet) . $fields) : $fields;
                    fwrite($fileSQL, sprintf($sql, self::$APP_PREFIX . $_name, $this->generatePrimaryFieldSQL($sheet) . substr($fieldsSQL, 0, strlen($fieldsSQL) - 3) . PHP_EOL . ',PRIMARY KEY(' . substr(trim($this->generatePrimaryFieldSQL2($sheet)), 0, -1) . ')'));
                    fflush($fileSQL);
                    fwrite($file, sprintf($model, self::$APP_PREFIX . $_name, "array($fields)", "array($rules)", $_name));
                    fflush($file);
                    $fieldsSQL = '';
                }
                $this->writeForm($name);
                $this->writeController($name);
                $file = $this->writeModel($name, $file);
                $fields = '';
                $rules = '';

                if ($first) {
                    $first = FALSE;
                }
                $co++;

            }
            if ($this->isCellValue($value)) {

                $fieldsSQL .= $this->generateFieldSQL($sheet, $row);
                $field = $this->generateFieldArray($sheet, $row);
                $rule = $this->generateFieldRulesArray($sheet, $row);
                $fields .= ($field) ? $field . ',' : '';
                $rules .= ($rule) ? $rule . ',' : '';
            }
            $row += self::$COUNTER;
        }

        fwrite($fileSQL, sprintf($sql, self::$APP_PREFIX . 'mod' . ($co - 1), $this->generatePrimaryFieldSQL($sheet) . $fieldsSQL . ' PRIMARY KEY(' . substr(trim($this->generatePrimaryFieldSQL2($sheet)), 0, -1) . ')'));
        fflush($fileSQL);
        $pk = $this->getPrimaryKey($sheet) . $fields;
        $name_model = 'mod' . ($co - 1);
        fwrite($file, sprintf($model, self::$APP_PREFIX . 'mod' . ($co - 1), "array($pk)", "array($rules)", $name_model));

        fflush($file);

        fclose($file);
        fclose($fileSQL);
        return $model;
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */