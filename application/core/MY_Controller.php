<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    //set the class variable.
    var $template = array();
    var $data = array();
    var $vista = '';

    //Load layout    
    public function layout($footer = TRUE) {
        // making temlate and send data to view.
        $CI = & get_instance();


        $this->template['header'] = $this->load->view('layout/header', $this->data, true);
        $this->template['left'] = $this->load->view('layout/left', $this->data, true);
        $this->template['middle'] = $this->load->view($this->vista . $this->middle, $this->data, true);
        if ($footer === TRUE) {
            $this->template['footer'] = $this->load->view('layout/footer', $this->data, true);
        } else {
            $this->template['footer'] = '';
        }
        $this->load->view('layout/index', $this->template);
    }

    protected function jsonResponse($respuesta = array()) {
        $status = 200; // SUCCESS
        if (empty($respuesta)) {
            //$status = 400; // FAILURE
            $respuesta = array(
                'success' => false,
                'mensaje' => 'No hay nada'
            );
        }
        return $this->output
                        ->set_content_type('application/json;charset=utf-8')
                        ->set_status_header($status)
                        ->set_output(json_encode($respuesta));
    }

    protected function flashMessage($message = 'Se guardó correctamente', $type = 'success', $data = array()) {
        $this->jsonResponse(array(
            'message' => array('icon' => 'fa fa-bell fa-2x animated swing infinite', 'message' => $message),
            'type' => array('type' => $type),
            'data' => $data
                )
        );
    }

}
