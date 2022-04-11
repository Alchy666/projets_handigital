<?php
//Création d'une instance de classe PDO dans une variable $bdd. On la paramètre avec le type de serveur, son adresse, le nom de la base de donnée, le nom d'utilisateur et le mdp de la cette base de données.
$bdd = new PDO('mysql:host=localhost;dbname=alchy', 'root', '');
?>