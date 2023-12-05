<?php
function index(){
    //require_once (VIEW_DIR."/base/welcome.php");

    render('/newuser.php');
};

function enregistrer(){
    require_once('models/usermodel.php');
    return signup();
    
}
function afficherLogin(){
    render('/user/login.php');
}


function verifyLogin(){
   require_once('models/usermodel.php');
   return auth();

}
function logout(){
    session_start();
    session_unset();
    session_destroy();
    
    header('location:index.php?controller=user&function=afficherLogin');
    exit();
}



?>