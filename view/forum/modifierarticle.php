<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once('models/articlemodel.php');
    $success = updateArticleInDatabase($_POST);
    if ($success) {
        header('location:index.php?controller=forum&function=showForum');
        exit();
    }
}
$id_forum = isset($data['article']['id_forum']) ? $data['article']['id_forum'] : '';
$titre = isset($data['article']['titre']) ? $data['article']['titre'] : '';
$articleText = isset($data['article']['article']) ? $data['article']['article'] : '';
$date = isset($data['article']['date']) ? $data['article']['date'] : '';
?>

<h1>Modifier l'article</h1>
<form action="index.php?controller=forum&function=editOrUpdateArticle&id=<?=$id_forum; ?> " method="post">
    <input type="hidden" name="id_forum" value="<?= $id_forum; ?>">
    <label>Titre :
        <input name="titre" type="text" value="<?= $titre; ?>">
    </label>
    <label>Article :
        <textarea name="article"><?= $articleText; ?></textarea>
    </label>
    <label>Date :
        <input name="date" type="date" value="<?= $date; ?>">
    </label>
    <input type="submit" class="btn" value="Modifier">
</form>

