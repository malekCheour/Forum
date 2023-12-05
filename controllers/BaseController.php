<?php

function index(){
    //require_once (VIEW_DIR."/base/welcome.php");

    render('/base/base.php');
}
// baseController.php

function showLogin(){
    // Afficher la page de connexion
    render('/user/login.php');
}


?>