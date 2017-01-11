<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 * Microinei
 *
 * Mini framework para encuestas
 *
 * @package		Microinei
 * @copyright           Copyright (c) 2008 - 2011, inei.
 * @author		holivares
 * @since		Version 0.1
 * @filesource
 */
// ------------------------------------------------------------------------

/**
 * Sqlite3 Result Class
 *
 * This class extends the parent result class: CI_DB_result
 *
 * @package		Microinei
 * @category	Database
 * @subpackage	Drivers
 * @author		holivares
 * @link		http://codeigniter.com/database/
 */
class CI_DB_sqlite3_result extends CI_DB_result {

    public $num_rows;

    /**
     * Number of rows in the result set
     *
     * @return	int
     */
    public function num_rows() {
        return 0;
    }

    // --------------------------------------------------------------------

    /**
     * Number of fields in the result set
     *
     * @access	public
     * @return	integer
     */
    function num_fields() {
        return $this->result_id->numColumns();
    }

    // --------------------------------------------------------------------

    /**
     * Fetch Field Names
     *
     * Generates an array of column names
     *
     * @access	public
     * @return	array
     */
    function list_fields() {
        if ($this->db->db_debug) {
            return $this->db->display_error('db_unsuported_feature');
        }
        return FALSE;
    }

    // --------------------------------------------------------------------

    /**
     * Field data
     *
     * Generates an array of objects containing field meta-data
     *
     * @access	public
     * @return	array
     */
    function field_data() {
        $data = array();

        try {
            for ($i = 0; $i < $this->num_fields(); $i++) {
                $data[] = $this->result_id->columnName($i);
            }

            return $data;
        } catch (Exception $e) {
            if ($this->db->db_debug) {
                return $this->db->display_error('db_unsuported_feature');
            }
            return FALSE;
        }
    }

    // --------------------------------------------------------------------

    /**
     * Free the result
     *
     * @return	null
     */
    function free_result() {
        if (is_object($this->result_id)) {
            $this->result_id = FALSE;
        }
    }

    // --------------------------------------------------------------------

    /**
     * Data Seek
     *
     * Moves the internal pointer to the desired offset.  We call
     * this internally before fetching results to make sure the
     * result set starts at zero
     *
     * @access	private
     * @return	array
     */
    function _data_seek($n = 0) {
        return FALSE;
    }

    // --------------------------------------------------------------------

    /**
     * Result - associative array
     *
     * Returns the result set as an array
     *
     * @access	private
     * @return	array
     */
    function _fetch_assoc() {
        return $this->result_id->fetchArray(SQLITE3_ASSOC);
    }

    // --------------------------------------------------------------------

    /**
     * Result - object
     *
     * Returns the result set as an object
     *
     * @access	private
     * @return	object
     */
    function _fetch_object() {
        $array = $this->result_id->fetchArray();
        $object = (object) $array;
        return $object;
    }

    function numColumns() {
        return $this->result_id->numColumns();
    }

    function columnType($column_number) {
        return $this->result_id->columnType($column_number);
    }

    // --------------------------------------------------------------------

    /**
     * Query result.  "object" version.
     *
     * @access	public
     * @return	object
     */
    public function result_object() {
        if (count($this->result_object) > 0) {
            return $this->result_object;
        }

        // In the event that query caching is on the result_id variable
        // will return FALSE since there isn't a valid SQL resource so
        // we'll simply return an empty array.
        if (($this->result_id->numColumns() && $this->result_id->columnType(0) != SQLITE3_NULL)) {
            return array();
        }

        $this->_data_seek(0);
        while ($row = $this->_fetch_assoc()) {
            $this->result_object[] = (object) $row;
        }

        return $this->result_object;
    }

    /**
     * Query result.  "array" version.
     *
     * @access	public
     * @return	array
     */
    public function result_array() {
        if (count($this->result_array) > 0) {
            return $this->result_array;
        }

        // In the event that query caching is on the result_id variable
        // will return FALSE since there isn't a valid SQL resource so
        // we'll simply return an empty array.
        if (($this->result_id->numColumns() && $this->result_id->columnType(0) != SQLITE3_NULL)) {
            return array();
        }

        $this->_data_seek(0);
        while ($row = $this->_fetch_assoc()) {
            $this->result_array[] = $row;
        }

        return $this->result_array;
    }

}
