<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav>
    <ul>
        <li><a href="index.php?controller=forum&function=showForum">forum</a></li>
        <li><a href="index.php?controller=forum&function=index">ajouter article</a></li>
        <li><a href="index.php?controller=user&function=index">Ajouter utilisateur</a></li>
        <li><a href="index.php?controller=user&function=afficherLogin">Login</a></li>
        <li><a href="index.php?controller=user&function=logout">Logout</a></li>

    </ul>
</nav>
    <div class="container">
        <?php echo $content; ?>
    </div>

</body>
</html>