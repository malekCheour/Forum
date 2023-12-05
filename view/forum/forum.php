<?php
require('lib/checksession.php');

?>


<h1>Forum</h1>
<form action="index.php?controller=forum&function=creerForum" method="post">
        <label> Titre :
            <input name="titre" type="text" maxlength="100">
        </label>
        <label class="article"> article :
            <input name="article" type="text" maxlength="1000">
        </label>
        <label> date :
            <input name="date" type="date">
        </label>
        <input type="hidden" name="utilisateur_id_utilisateur" value="<?= $_SESSION['id_utilisateur']; ?>">
        <input type="submit" value="Save">
    </form>