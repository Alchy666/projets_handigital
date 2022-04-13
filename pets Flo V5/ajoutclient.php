<?php require("bdd.php");

//on stock les valeurs du formulaire dans des variables
$nom = $_POST["nom"];
$prenom = $_POST['prenom'];
$adresse = $_POST['adresse'];
$ville = $_POST['ville'];
$mail = $_POST['mail'];
$enfant = $_POST['enfant'];
$login = $_POST['login'];
$mdp = $_POST['mdp'];

//Requetes Préparées

//première possibilité avec un tableau associatif par les clés

//on prépare la requete en donnant des valeurs que l'on nomme temporairement. Cette requete peut être executée quand on le souhaite
$req = $bdd->prepare("INSERT INTO client(nom_cli, prenom_cli, adresse_cli, ville_cli, mail_cli, enfant_cli, login_cli, mdp_cli) 
                        VALUES (:nom, :prenom, :adresse, :ville, :mail, :enfant, :login, :mdp)");
//On execute la requete préparée stockée dans la variable $req en lui injectant un tableau associatif, ou les clés vont d'associer avec les valeurs temporaire (avec les :) de la requete préparée                        
$req->execute(array( 'nom' => $nom, 
                    'prenom' => $prenom, 
                    'adresse' => $adresse, 
                    'ville' => $ville, 
                    'mail' => $mail, 
                    'enfant' =>  $enfant, 
                    'login' => $login, 
                    'mdp' =>$mdp));


//deuxième possiblité avec les ? et un tableau associatif dans l'ordre des valeurs du tableau

//Même principe mais on remplace les valeurs par autant de ?
// $req = $bdd->prepare("INSERT INTO client VALUES (NULL,? ,? ,? ,? ,? ,? ,? ,?)");

//on execute la requete en lui injectant un tableau ou chaque valeur va venir remplacer les ? dans l'orde de la requete préparée
// $req->execute(array( $nom, $prenom, $adresse, $ville, $mail, $enfant, $login, $mdp));


// redirection php
header('Location: index.php');