<?php
function frame($controller,$view,$data=[]) {
    $controller->load->view('_templates/head',$data);
    
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    $data['header']['usuario'] = isset($_SESSION['usuario'])?$_SESSION['usuario']:null;
    
    $controller->load->view('_templates/header',$data);
   
    $controller->load->view('_templates/nav',$data);
    $controller->load->view($view,$data);
    $controller->load->view('_templates/footer',$data);
    $controller->load->view('_templates/end');
}
?>