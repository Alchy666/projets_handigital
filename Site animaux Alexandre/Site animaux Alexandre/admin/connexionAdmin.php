<?php

//même page que traitementconnexion.php réadaptée avec la table admin
require("../bdd.php");

$login = $_POST["login"];
$mdp = $_POST["mdp"];

$req = $bdd->query("SELECT * FROM admin WHERE login_adm='$login' && mdp_adm='$mdp'");

$resultat = $req->fetch();

if($resultat == false){
    header("Location:index.php?err=1");
}else{
    header("Location:readMeuh.php");
}