<?php 
// instance de PDO, connexion à la base de données
require("bdd.php");

// on crée une nouvelle sessions
session_start();

//on récupère les information du formulaire de connexion dans des variables
$login = $_POST["login"];
$mdp = $_POST["mdp"];

//on exécute une requete Select pour chercher un client qui aurait le login et mdp renseignés dans le formulaire de connexion
//Même s'il n'y a pas de résultat, query renvera toujours un objet PDOstatement. S'il renvoie faux, il y a une erreur dans l'écriture et la syntaxe de la requête
$req = $bdd->query("SELECT * FROM admin WHERE login_adm='$login' && mdp_adm='$mdp'");

//On utilise fetch pour transformer le résultat de la requête en tableau. Fetch retourne false si il n'y a pas de résultat (donc mauvais login, mdp ou les 2)
$resultat = $req->fetch();

//si le résultat est faux, on renvoie vers la page de login avec un code err passé en GET
if($resultat == false){
    header("Location:connection.php?err=1");
}
//sinon on redirige vers la page index avec un code err 0 passé en GET
else{
    // on enregistre l'utilisateur connecté dans la session
    $_SESSION["LOGGED_USER"] = $login;
    header("Location:index2.php?err=0");
}

