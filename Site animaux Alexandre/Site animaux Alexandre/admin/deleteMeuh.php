<?php 
require("../bdd.php");
include ("head.php");
    if(isset($_GET['id']))
		$id = $_GET['id'];// $_get prend les info dans l'url, l'ID est dans le href, il s'affiche dans l'url, le get le prend
        // construct the delete statement
		$req = $bdd->query("DELETE FROM animal WHERE id_ani=$id");
        // prepare the statement for execution

        echo "Le meuh n'est plus dans la base de donné !";


    header('Location: readMeuh.php');



?>