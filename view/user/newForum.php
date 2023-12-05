
<h1>Forum</h1>
<form action="index.php?controller=forum&function=creerFormulaire" method="post">
        <label> Titre :
            <input name="titre" type="text" maxlength="100">
        </label>
        <label> article :
            <input name="article" type="text" maxlength="1000">
        </label>
        <label> date :
            <input name="date" type="date">
        </label>
        <input type="submit" value="Save">
    </form>