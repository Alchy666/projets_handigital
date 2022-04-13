<!DOCTYPE html>
<html>
<?php 
include ("head.php");
require ("bdd.php");

$reponse = $bdd->query("SELECT * FROM animal"); // choisie dans ta base de donné dans FROMqui est la variable de ta base de donné, base de donné qui est "pet" et dedans tu veux animal qui est pleins d'elements que tu veux recuperer

$tableau = $reponse->fetchAll($mode = PDO::FETCH_ASSOC);

foreach($tableau as $animal){
    echo $animal['nom_ani'] ," ", $animal['espece_ani'] ,"<br/>";
}
?>

<body>





















<?php 
foreach($tableau as $animal){
?>

<div style="width 18rem">
    <img src="images/<?php echo $animal['img_ani']; ?>" class="card-img-top" alt="...">
</div>
<?php } ?> 


</body>