<?php

function isConnected(){
if(!isset($_SESSION['fingerPrint']) ||  $_SESSION['fingerPrint'] !== md5($_SERVER['HTTP_USER_AGENT'].$_SERVER['REMOTE_ADDR'])){
    // header('location:index.php?controller=user&function=afficherLogin');
    return false;
}
return true;
}

?>