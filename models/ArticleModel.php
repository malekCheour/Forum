<?php
function creatForum(){
    require('db/connex.php');
    foreach($_POST as $key=>$value){
        $$key = mysqli_real_escape_string($connex, $value);
    }

    $sql = "INSERT INTO forum (titre, article, date, utilisateur_id_utilisateur) VALUES ('$titre', '$article','$date','$utilisateur_id_utilisateur')";

    if(mysqli_query($connex, $sql)){
        header('location:index.php?controller=forum&function=showForum');
        exit();
    
    }else{
        echo "Error: " . $sql . "<br>" . mysqli_error($connex);
    }
}

function delete($request){ 
    require_once("db/connex.php");

    $connex = mysqli_connect('localhost', 'root', '', 'forum', '3306');

    if (mysqli_connect_error()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }

    mysqli_set_charset($connex,"utf8");

    $id = mysqli_real_escape_string($connex, $request['id']);

    foreach ($_POST as $key => $value) {
        $$key = mysqli_real_escape_string($connex, $value);
    }

    $sql = "DELETE FROM forum WHERE id_forum = '$id' ";

    if (mysqli_query($connex, $sql)) {
        return true;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connex);
    }
}
function getArticleById($id){
    require('db/connex.php');
    $id = mysqli_real_escape_string($connex, $id);
    $sql = "SELECT * FROM forum WHERE id_forum = '$id'";
    $result = mysqli_query($connex, $sql);

    if ($result && mysqli_num_rows($result) == 1) {
        return mysqli_fetch_assoc($result);
    } else {
        return null;
    }
}

function updateArticleInDatabase($data){
    require('db/connex.php');

    foreach($data as $key => $value){
        $$key = mysqli_real_escape_string($connex, $value);
    }

    $sql = "UPDATE forum SET titre = '$titre', article = '$article', date = '$date' WHERE id_forum = '$id_forum'";

    if(mysqli_query($connex, $sql)){
        return true;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connex);
        return false;
    }
}
?>









