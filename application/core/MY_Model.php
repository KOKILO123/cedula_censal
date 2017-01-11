<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BaseModel
 *
 * @author holivares
 */
class MY_Model extends CI_Model {

    private $_primary_keys = array();

    public function getFields() {
        
    }

    public function getRules() {
        
    }

    public function tablename() {
        
    }
    
    

    /**
     * Devuelve todas las filas de un query. Adicionalmente se puede devolver por
     * paginas.
     *
     * @param string $select Nombre o nombres de campos separados por coma
     * @param int $start Fila desde donde se desean obtener los datos. <b>0 based</b>
     * @param int $count Cantidad de registros a leer desde $start
     * @param string $type object, array o custom
     * @return mixed Devuelve el tipo especificado en el parametro type, Esto puede
     * ser array u object
     */
    public function all($select = '*', $start = NULL, $count = NULL, $type = 'object') {
        if (is_numeric($start) & is_numeric($count)) {
            $this->db->limit($start, $count);
        }
        $this->db->select($select);
        $q = $this->db->get($this->tableName());
        $result = $q->result($type);
        return $result;
    }

    /**
     * Devuelve todas las filas de un query filtrado.
     * Adicionalmente se puede devolver por paginas.
     *
     * @param string $select Nombre o nombres de campos separados por coma
     * @param array $where Un array asociativo que devuelve las filas a crear
     * @param int $start Fila desde donde se desean obtener los datos. <b>0 based</b>
     * @param int $count Cantidad de registros a leer desde $start
     * @param string $type object, array o custom
     * @return mixed Devuelve el tipo especificado en el parametro type, Esto puede
     * ser array u object
     */
    public function allBy($select, $where, $start = NULL, $count = NULL, $type = 'object') {
        if (is_numeric($start) & is_numeric($count)) {
            $this->db->limit($start, $count);
        }
        $this->db->select($select);
        if ($where) {
            $this->db->where($where);
        }
        $q = $this->db->get($this->tableName());
        $result = $q->result($type);
        return $result;
    }

    /**
     * Devuelve todas las filas de un query filtrado.
     * Adicionalmente se puede devolver por paginas.
     *
     * @param string $select Nombre o nombres de campos separados por coma
     * @param array $where Un array asociativo que devuelve las filas a crear
     * @sort array $sort Un array que devuelve los campos para ordenar las filas a retornar
     * @param int $start Fila desde donde se desean obtener los datos. <b>0 based</b>
     * @param int $count Cantidad de registros a leer desde $start
     * @param string $type object, array o custom
     * @return mixed Devuelve el tipo especificado en el parametro type, Esto puede
     * ser array u object
     */
    public function allBy_sort($select, $where, $sort, $start = NULL, $count = NULL, $type = 'object') {
        if (is_numeric($start) & is_numeric($count)) {
            $this->db->limit($start, $count);
        }
        $this->db->select($select);
        if ($where) {
            $this->db->where($where);
        }
//        $this->db->order_by($sort[0]);
//        $this->db->order_by($sort[1]);
        foreach ($sort as $value) {
            $this->db->order_by($value);
        }
        $q = $this->db->get($this->tableName());
        //echo $this->db->last_query();exit();
        $result = $q->result($type);
        return $result;
    }

    /**
     * Devuelve la primera fila de un query filtrado.
     *
     * @param array $where Un array asociativo que devuelve las filas a crear
     * @param string $type object, array or custom
     * @return mixed Devuelve el tipo especificado en el parametro type, Esto puede
     * ser array u object
     */
    public function get($where, $select = '*', $type = 'array') {
        $this->db->select($select);
        $this->db->where($where);
        $q = $this->db->get($this->tableName());
//        echo $this->db->last_query();
        $result = $q->row(0, $type);
//        var_dump($result);exit;
        return $result;
    }

    /**
     * Devuelve los nombres de los campos de la tabla utilizada por el modelo.
     * @return array
     */
    public function getdb_fields() {
        $q = $this->db->list_fields($this->tableName());
        return $q;
    }

//    public function columns() {
//        $q = $this->db->columns($this->tableName());
//        return $q;
//    }
    /**
     * Devuelve los valores para los campos llave primaria obtenidos desde
     * $data.
     *
     * @param array $data
     * @param array $pks
     * @return array
     */
    protected function getWherePK($data, $pks) {
        $wherePK = array();
        foreach ($pks as $pk) {
            if (array_key_exists($pk, $data)) {
                $wherePK[$pk] = $data[$pk];
            } else {
                $wherePK = array();
                break;
            }
        }
        return $wherePK;
    }

    /**
     * Ejecuta una sentencia insert o update a la tabla especificada en el modelo
     *
     * @param array $data Array asociativo que contiene los datos a utilizarse en la sentencia
     * @param bool $existsDB True si se desea ejecutar una validacion exists a nivel de base de datos
     */
    public function save(&$data, $existsDB = FALSE) {
        $rpta = TRUE;
        if ($this->is_multidim_array($data)) {
            
            foreach ($data as $value) {
                $rpta = $rpta & (($value) ? $this->_save($value, $existsDB) : TRUE);
            }
        } else {
            $rpta = $this->_save($data, $existsDB);
        }
        debug($data);
        return $rpta;
    }

    /**
     * Ejecuta una sentencia insert o update a la tabla especificada en el modelo
     *
     * @param array $data
     * @param bool $existsDB
     */
    private function _save(&$data, $existsDB = FALSE) {
        $pks = $this->primary();
//        var_dump($pks);Exit;
        $where = $this->getWherePK($data, $pks);
        debug($where);
//        var_dump($where, $existsDB);exit;
        $update = FALSE;
        if ($where) {
            $update = $existsDB === TRUE ? $this->exists($where) : count($where) > 0;
        }
        if ($update === TRUE) {
            debug($this->edit($data, $where) > 0);
            return $this->edit($data, $where) > 0;
        } else {
            return $this->create($data) > 0;
        }
    }

    /**
     * Ejecuta una sentencia insert. Devuelve 0 si no se ha grabado correctamente.
     *
     * @param array $data
     * @return int
     */
    public function create(&$data) {
        $this->db->insert($this->tableName(), $data);
        return $this->db->affected_rows();
    }

    /**
     * Ejecuta una sentencia update. Devuelve 0 si no se ha actualizado correctamente.
     *
     * @param array $data
     * @param array $where
     * @return int
     */
    public function edit(&$data, $where = FALSE) {
//        if (!$where) {
//            $pks = $this->primary();
//            $where = $this->getWherePK($data, $pks);
//        }
//        $this->db->update($this->tableName(), $data, $where);
//        return $this->db->affected_rows();
        $pks = $this->primary();
        if (!$where) {
            $where = $this->getWherePK($data, $pks);
        }
        //mejorar estas lineas
        $_data = array();
        foreach ($data as $column => $value) {
            if (!in_array($column, $pks)) {
                $_data[$column] = $value;
            }
        }
        $this->db->update($this->tableName(), $_data, $where);
        return $this->db->affected_rows();
    }

    /**
     * Ejecuta una sentencia delete. Devuelve 0 si no se ha grabado correctamente.
     *
     * @param array $where
     * @return type
     */
    public function delete($where = array()) {
        $this->db->delete($this->tableName(), $where);
        return $this->db->affected_rows();
    }

    /**
     * Devuelve TRUE si se ha grabado exitosamente, FALSE en caso contrario.
     *
     * @param array $where
     * @return bool
     */
    public function exists($where) {
        return $this->count($where) > 0;
    }

    /**
     * Devuelve la cantidad de registros de la tabla segun un filtro dado.
     *
     * @param array $where
     * @return int
     */
    public function count($where = FALSE) {
        if ($where) {
            $this->db->where($where);
        }
        debug($where);
        if ($this->db->dbdriver === 'sqlite3') {
            
            $count = $this->db->count_all($this->tableName());
            debug($this->tablename());
        } else {
            $count = $this->db->count_all_results($this->tableName());
        }
        return $count;
    }

    /**
     * Devuelve los nombres de las llaves primarias
     *
     * @return array
     */
    private function primary() {
        //intento 1
        if (count($this->_primary_keys) === 0) {
            $this->setPrimaryKeys();
        }
        //intento 2
        if (count($this->_primary_keys) === 0) {
            $this->_primary_keys = $this->db->primary($this->tableName());
        }
        return $this->_primary_keys;
    }

    /**
     * Devuelve un valor
     *
     * @param array $inputs
     * @return bool
     */
    private function isPrimarykey($inputs) {
        $rpta = FALSE;
        if (array_key_exists('primary_key', $inputs)) {
            if (is_bool($inputs['primary_key'])) {
                $rpta = $inputs['primary_key'];
            }
        }
        return $rpta;
    }

    protected function setPrimaryKeys() {
        foreach ($this->getFields() as $fields_or_attr) {
            if ($this->isPrimarykey($fields_or_attr)) {
                $this->_primary_keys = array_merge($this->_primary_keys, $this->_getPrimaryKeys($fields_or_attr));
            }
        }
    }

    private function _getPrimaryKeys($inputs) {
        $_fields = array_filter(array_keys($inputs), create_function('$item', 'return is_numeric($item)===TRUE;'));
        $fields = array_intersect_key($inputs, array_flip($_fields));
        return $fields;
    }

    function is_multidim_array($arr) {
        if (!is_array($arr)) {
            return false;
        }
        foreach ($arr as $elm) {
            if (!is_array($elm)) {
                return false;
            }
        }
        return true;
    }

    public function closeConnection() {
        try {
            $this->db->close();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        $this->db = NULL;
    }

    public function bulk_insert($table, $data) {
        $newQuery = true;
        $query = '';
        for ($i = 0; $i < count($data); $i++) {
            $row = array_slice($data, $i, 1);
            $values = array_values($row[0]);
            $keys = array_keys($row[0]);
            $self = $this;
//            array_walk($values, function(&$item) use ($self){
//                $item = $self->db->escape($item);
//            });
            foreach ($values as &$item) {
                $item = $self->db->escape($item);
            }
            if ($newQuery) {
                $query = 'INSERT INTO ' . $table . ' ( ' . implode(', ', $keys) . ' )';
                $newQuery = false;
            } else {
                $query .= ' UNION';
            }
            $query .= ' SELECT ' . implode(', ', $values);
        }
//        echo $query;
        if ($query) {
            $this->db->query($query);
            return $this->db->affected_rows() > 0;
        }
        return true;
    }

}
