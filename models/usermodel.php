<?php


function signup() {
    require('db/connex.php');

    foreach($_POST as $key=>$value){
        $$key = mysqli_real_escape_string($connex, $value);
    }
    
    $salt = "jfhhz585/--*/*-/";
    
    $saltPassword = $mot_de_passe.$salt;
    
    $mot_de_passe = password_hash($saltPassword, PASSWORD_BCRYPT, ['cost'=> 10]);
    
    $sql = "INSERT INTO utilisateur (nom, nom_utilisateur, mot_de_passe, date_de_naissance) VALUES ('$nom', '$nom_utilisateur', '$mot_de_passe','$date_de_naissance')";
    
    if(mysqli_query($connex, $sql)){
        header('location:index.php?controller=user&function=afficherLogin');
    }else{
        echo "Error: " . $sql . "<br>" . mysqli_error($connex);
    }
}

function auth (){
    
// session_start();
require('db/connex.php');

foreach($_POST as $key=>$value){
    $$key = mysqli_real_escape_string($connex, $value);

}

// 1- check user
$sql = "SELECT * FROM utilisateur WHERE nom_utilisateur = '$nom_utilisateur'";

$result = mysqli_query($connex, $sql);

//2 - verifier nombre de lignes
$count = mysqli_num_rows($result);
if($count == 1){
//3 verifier le mot de passe
$info_user = mysqli_fetch_array($result, MYSQLI_ASSOC);
$salt = "jfhhz585/--*/*-/";
$saltPassword = $mot_de_passe.$salt;

// error_log($info_user['mot_de_passe']);
// error_log($saltPassword);

    if(password_verify($saltPassword, $info_user['mot_de_passe'])){
        
        session_regenerate_id();
        $_SESSION['id_utilisateur'] = $info_user['id_utilisateur'];
        $_SESSION['nom'] = $info_user['nom'];
        $_SESSION['fingerPrint'] = md5($_SERVER['HTTP_USER_AGENT'].$_SERVER['REMOTE_ADDR']);
    
        
         header('location:index.php?controller=forum&function=index');
        exit();
       


    }else{
        header('location:login.php?msg=2');
    }

}else{
    header('location:login.php?msg=1');
}

}
?>