<!-- login.php -->

<h1>Connexion</h1>

<form action="index.php?controller=user&function=verifyLogin" method="post">
    <label>Nom d'utilisateur:
        <input name="nom_utilisateur" type="email">
    </label>
    <label>Mot de passe:
        <input name="mot_de_passe" type="password">
    </label>
    <input type="submit" value="Se connecter">
</form>

