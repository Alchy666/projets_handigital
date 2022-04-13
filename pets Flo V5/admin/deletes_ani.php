<?php
require("bdd.php");

$id_ani=$_GET['id_ani'];
var_dump($id_ani);
$req = $bdd->prepare("DELETE FROM animal WHERE id_ani = '$id_ani'");

$req->execute([$id_ani]);
$req->closeCursor();
header("Location: gestion_ani.php?page=2");
?>