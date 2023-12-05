<?php
  require_once('models/articlemodel.php');
function index(){
    render('/forum/forum.php');
}

function showForum() {
 render('/forum/afficheForum.php');

}
  function creerForum(){
    require_once('models/articlemodel.php');
    return creatForum();
 }


 
 function deleteArticle($request){
     require_once('models/articlemodel.php');
     delete($request);
     header('location:index.php?controller=forum&function=showForum');
 }

 
function modifierArticle($request) {

  $article = getArticleById($request['id']);
  render('/forum/modifierArticle.php', $article);
}

function editOrUpdateArticle($request){
  
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      // Afficher le formulaire de modification
      $article = getArticleById($request['id_forum']);
      // render('/forum/modifierarticle.php', ['article' => $article]);
  } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
      // Mettre à jour l'article dans la base de données
      updateArticleInDatabase($_POST);
      // echo 'article mis à jour';
      header('location:index.php?controller=forum&function=showForum');
      exit();
  }
}
