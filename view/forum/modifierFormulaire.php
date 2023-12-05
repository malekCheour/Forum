<?php

//print_r($_GET);

if(isset($_GET['id']) && $_GET['id']!=null ){
    require('db/connex.php');

    $id = mysqli_real_escape_string($connex, $_GET['id']);
    
    $sql = "SELECT * FROM client WHERE id = '$id'";
    $result = mysqli_query($connex, $sql);

    $count = mysqli_num_rows($result);

    if($count == 1){
        $client = mysqli_fetch_array($result, MYSQLI_ASSOC);
        
        //print_r($client);
        $sql  = "SELECT * FROM ville ORDER BY ville";

        $result =  mysqli_query($connex, $sql);
    }else{
        header('location: client-index.php');
    }
}else{
    header('location: client-index.php');
}

$title = 'Modifier le Client';
require('library/header.php');
?>

    <form action="client-update.php" method="post">
            <input type="hidden" name="id" value="<?= $client['id']; ?>">
        <label> titre :
            <input name="nom" type="text" value="<?= $client['nom']; ?>">
        </label>
        <label> article:
            <input name="adresse" type="text" value="<?= $client['adresse']; ?>">
        </label>
        <label> Phone :
            <input name="phone" type="text" value="<?= $client['phone']; ?>">
        </label>
        <label> Courriel :
            <input name="courriel" type="email" value="<?= $client['courriel']; ?>">
        </label>
        <label> Naissance :
            <input name="date_naissance" type="date" value="<?= $client['date_naissance']; ?>">
        </label>
        <label> Ville : 
            <select name="ville_id">

                <?php
                 foreach($result as $row){
                    ?>
                    <option value="<?= $row['id']; ?>" <?php if($row['id'] == $client['ville_id']){ echo "selected"; } ?>><?= $row['ville']; ?></option>
                <?php
                 }
                ?>
            </select>
        </label>
        <input type="submit" class="btn" value="Modifier">
    </form>
    <?php