<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style2.css">
    <title>Alchy connection</title>
</head>

<?php
require("head2.php");
require("bdd.php");

// si il y a déjà un utilisateur connecté, on le redirige vers l'index
if (isset($_SESSION['LOGGED_USER'])) {
    header("Location:index2.php");
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


<body>
    <div class="login-box d-flex justify-content-center">
        <div class="container">
            <form method="POST" action="traitementconnexion.php">
                <h3>Log in</h3>
                <div class="inputBox">
                    <span for="staticEmail">Username</span>
                    <div class="box">
                        <div class="icon"><ion-icon name="person"></ion-icon></div>
                        <input type="texte" name="login" class="form-control" id="staticEmail">
                    </div>
                </div>
                <div class="inputBox">
                    <span for="inputPassword">Password</span>
                    <div class="box">
                        <div class="icon"><ion-icon name="lock-closed"></ion-icon></div>
                        <input type="password" name="mdp" class="form-control" id="inputPassword">
                    </div>
                </div>
                <label>
                    <input type="checkbox"> Remember me
                </label>
                <div class="inputBox">
                    <div class="box">
                        <input type="submit" value="Se connecter">
                    </div>
                </div>
                <a href="#" class="forgot">Forget Password ?</a>
            </form>
        </div>
    </div>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>