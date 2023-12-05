<?php
require('lib/checksession.php');
require('db/connex.php');

$sql = "SELECT id_forum, titre, article, date, utilisateur_id_utilisateur, utilisateur.nom FROM forum INNER JOIN utilisateur on utilisateur_id_utilisateur = id_utilisateur ORDER BY date";

$result = mysqli_query($connex, $sql);



if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

        ?>


        <p> <strong>titre : </strong><?= $row['titre']; ?></p>
        <p> <strong>article : </strong><?= $row['article']; ?></p>
        <p> <strong>date : </strong><?= $row['date']; ?></p>
        <p> <strong>Auteur : </strong><?= $row['nom']; ?></p>
   

    <?php  
    if(isConnected() && (isset($_SESSION['id_utilisateur']) && isset($row['utilisateur_id_utilisateur']) && $_SESSION['id_utilisateur'] == $row['utilisateur_id_utilisateur'])){

        ?>

     <a href="index.php?controller=forum&function=deleteArticle&id=<?= $row['id_forum']; ?>">delete</a>
     <a href="index.php?controller=forum&function=modifierArticle&id=<?= $row['id_forum']; ?>">Modifier</a>
    
  <?php
    }
       
    }
} else {
    echo "Aucun forum trouvé.";
    exit();
}
?>