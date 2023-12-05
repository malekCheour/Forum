
<h1>create an account</h1>
<form action="index.php?controller=user&function=enregistrer" method="post">
        <label> Nom :
            <input name="nom" type="text" maxlength="25">
        </label>
        <label> Username :
            <input name="nom_utilisateur" type="email" min>
        </label>
        <label> Mot de passe :
            <input name="mot_de_passe" type="password" minlength="6" maxlength="20">
        </label>
        <label> date de naissance :
            <input name="date_de_naissance" type="date">
        </label>
        <input type="submit" value="Save">
    </form>