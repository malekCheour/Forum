<?php

function safe($params){
    return addslashes($params);
}

function render($file, $data = null){
    var_dump($data);
    $layout_file = VIEW_DIR.'/layouts/layout.php';
    ob_start();
    include_once(VIEW_DIR.$file);
    $content = ob_get_clean();
    include_once($layout_file);
}

?>