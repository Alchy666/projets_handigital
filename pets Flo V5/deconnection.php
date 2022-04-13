<?php
// On récupère la session existante
// On ne peut pas supprimer une session si on ne la récupère pas avant !
session_start();

// si il n'y a pas, on le redirige vers l'index
if (!isset($_SESSION['LOGGED_USER'])) {
    header("Location:index.php");
}

// on supprime la session et on redirige vers la page de connexion
session_destroy();
header("Location:login.php");

?>