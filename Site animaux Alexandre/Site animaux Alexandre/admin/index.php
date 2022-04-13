<?php

//même page que Login réadaptée rapidement
// name: admin
// mdp: 123

if(isset($_GET['err'])){
    if($_GET['err']==1){
        echo "Vous n'avez rien à faire ici !";
    }
}

?>
<h2>Connexion à l'administration</h2>
<form method="POST" action="connexionadmin.php">
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Votre identifiant : </label>
        <div class="col-sm-10">
            <input type="text" name="login" class="form-control" id="staticEmail">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Mot de passe</label>
        <div class="col-sm-10">
            <input type="password" name="mdp" class="form-control" id="inputPassword">
        </div>
    </div>
    <input type="submit" value="Se connecter">
</form>
