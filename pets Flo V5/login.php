<?php
require("header.php");
require("bdd.php");

// si il y a déjà un utilisateur connecté, on le redirige vers l'index
if (isset($_SESSION['LOGGED_USER'])) {
    header("Location:index.php");
}

//si on échoue la connexion, on récupère une info "err" en GET qui nous permet d'afficher un message d'erreur
//on vérifie que l'info 'err' passée en GET existe et n'est pas nulle
if(isset($_GET['err'])){
    //selon le code erreur récupéré on affiche un message
    if($_GET['err']==1){
        echo 'Mauvais identifiant ou mot de passe !';
    }
}

?>
<!-- On précise que l'on utilise la méthode post pour que les informations soient transmises de façon invisible 
par le serveur et l'action définie sur quelle page partent les infos du formulaire -->
<form method="POST" action="traitementconnexion.php">
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Votre identifiant : </label>
        <div class="col-sm-10">
            <!-- C'est le name qui permet de récupérer l'information du champ sur la page désignée en action dans la balise form-->
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

<?php
require("footer.php");

?>