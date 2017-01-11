<?php

if (!function_exists('debug')) {

    /**
     * @return Retorna un string parecido al var_dump,
     * con mejor formato visual.
     */
    function debug() {
        $trace = debug_backtrace();
        $rootPath = dirname(dirname(__FILE__));
        $file = str_replace($rootPath, '', $trace[0]['file']);
        $line = $trace[0]['line'];
        $var = $trace[0]['args'][0];
        $lineInfo = sprintf('<div><strong>%s</strong> (line <strong>%s</strong>)</div>', $file, $line);
        $debugInfo = sprintf('<pre>%s</pre>', print_r($var, true));
        print_r($lineInfo . $debugInfo);
    }

}

/**
 * @return Devuelve un string de la cantidad de memoria usada,
 * evalua la cantidad y depende a esto, lo devuelve en bytes,kilobytes o megabytes.
 */
function echo_memory_usage() {
    $mem_usage = memory_get_usage(true);
    if ($mem_usage < 1024)
        echo $mem_usage . " bytes";
    elseif ($mem_usage < 1048576)
        echo round($mem_usage / 1024, 2) . " kilobytes";
    else
        echo round($mem_usage / 1048576, 2) . " megabytes";
    echo "<br/>";
}

/**
 * @param $path es el directorio donde ha sido invocado la funcion.
 * 
 * @param $js es un array, la funcion lo recorre e imprime
 * la ruta del archivo javascript que deberia estar creado,
 * ademas, ya imprime con el formato <script></script>.
 */
function setJs($vista, $js = array()) {
    $pos = strpos($vista, "/");
    $group = array();
    foreach ($js as $key => $value) {
//            echo '<script src="' . base_url() . 'application/views' . str_replace('\\', '/', substr($path, $pos)) . '/js/' . $js[$key] . '.js"></script>';
        array_push($group, '<script src="' . base_url() . 'application/views/' . substr($vista, 0, $pos) . '/js/' . $js[$key] . '.js"></script>');
//            echo '<script src="/'.$path.'.js"></script>';
    }
    return $group;
}

/**
 * @param $path es el directorio donde ha sido invocado la funcion.
 * 
 * @param $css es un array, la funcion lo recorre e imprime
 * la ruta del archivo de hoja de estilos que deberia estar creado,
 * ademas, ya imprime con el formato <link />.
 */
function setCss($vista, $css = array()) {
    $pos = strpos($vista, "/");
    $group = array();
    foreach ($css as $key => $value) {
//            echo '<script src="' . base_url() . 'application/views' . str_replace('\\', '/', substr($path, $pos)) . '/js/' . $js[$key] . '.js"></script>';
        array_push($group, '<link href="' . base_url() . 'application/views/' . substr($vista, 0, $pos) . '/css/' . $css[$key] . '.css">');
//            array_push($group, $pos);
//            echo '<script src="/'.$path.'.js"></script>';
    }
    return $group;
}

/**
 * @return true, si la url Existe
 */
function url_exist($url) {
    $http = get_headers($url);
    return ($http[0] == 'HTTP/1.1 200 OK');
}

/* @param $vista vista que sera renderizada
 * @param $datos datos que sera pasado como segundo parametro a la vista, que seran invocados en esta misma.
 * $return renderizar vista con el layout por defecto 
 * Esta funcion realiza la instancia a la clase controladora, donde sera invocada
 * y renderiza a la vista donde se indique
 */

function layout($vista, $datos = false, $js = array(), $css = array()) {
    $CI = & get_instance();

    if ($datos) {
        $datos['js'] = setJs($vista, $js);
        $datos['css'] = setCss($vista, $css);
    }
    $CI->load->view('layout_administrator/header', $datos);
    $CI->load->view('layout_administrator/menu_lateral');
    $CI->load->view($vista);
    $CI->load->view('layout_administrator/footer');
}

function layout_user($vista = false, $datos = false, $js = array(), $css = array()) {
    $CI = & get_instance();

    if ($datos) {
        $datos['js'] = setJs($vista, $js);
        $datos['css'] = setCss($vista, $css);
    }
    $CI->load->view('layout_user/header', $datos);

    $vista ? $CI->load->view($vista) : '';
    $CI->load->view('layout_user/footer');
}

function renderizar_formulario($data = array()) {
    $keys = array_keys($data);
    echo form_open('Login/registro');
    foreach ($keys as $row => $value) {
        echo '<div class="form-group">';
        echo '<label class="col-sm-3 control-label">' . strtoupper($value) . '</label>';
        echo '<div class="col-sm-9">';
        echo form_input(array('name' => $value, 'class' => 'form-control'));
        echo '</div>';
        echo '</div>';
    }
}


