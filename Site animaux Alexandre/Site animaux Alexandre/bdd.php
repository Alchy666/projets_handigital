<?php

// try = esseye de se connecter a ta base de donnée. Si il y à une erreure il va te dire se qu'il ne va pas
try
{
    //Création d'une instance de classe PDO dans une variable $bdd. On la paramètre avec le type de serveur, son adresse, le nom de la base de donnée, le nom d'utilisateur et le mdp de la cette base de données.
$bdd = new PDO('mysql:host=localhost;dbname=sqlmeuh', 'root', '');
echo 'connect success';
}
catch(PDOException $e)
{
    $e->getMessage();
    echo 'connect failed';
}
?>