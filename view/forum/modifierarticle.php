
<h1>Modifier l'article</h1>
<form action="index.php?controller=forum&function=editOrUpdateArticle&id=<?=$data['id_forum']; ?>" method="post">
    <input type="hidden" name="id_forum" value="<?= $data['id_forum']; ?>">
    <label>Titre :
        <input name="titre" type="text" value="<?= $data['titre']; ?>">
    </label>
    <label>Article :
        <textarea name="article"><?= $data['article']; ?></textarea>
    </label>
    <label>Date :
        <input name="date" type="date" value="<?= $data['date']; ?>">
    </label>
    <button type="submit" class="btn">Modifier</button>
</form>
<?php
