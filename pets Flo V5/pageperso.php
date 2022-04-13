<?php

// VERSION OBJ, le version TABLEAU est en bas !, relier avec la page des classes, cette partie fonctionne avec les get et set !

require("header.php");
require("bdd.php"); // récupère l'instance de la classe PDO qui établit la connexion à la BDD
require("classes/Animal.php");

$id = $_GET["id"];

$reponse = $bdd->query("SELECT * FROM animal INNER JOIN refuge ON animal.fk_ref = refuge.id_ref WHERE id_ani=$id"); // Quand tu as un INER JOIN mettre le WHERE TOUJOURS A LA FIN
$animal = $reponse->fetchObject('Animal');


if($animal->getSexe()==0){
    $sexe = "male";
}else{
    $sexe="femelle";
}
?>

        <div class="card" style="width: 30%;">
            <img src="images/<?php echo $animal->getImg(); ?>" class="card-img-top" alt="..."  >
            <div class="card-body">
              <h5 class="card-title"><?php echo $animal->getNom(); ?></h5>
              <p class="card-text"><?php echo ucfirst($animal->getRace()). " " . $sexe . " agé de ". $animal->getAge(). " ans." . " " . $animal->getNom(); ?></p>
              <a href="pageperso.php?id=<?php echo $animal->getId(); ?>" class="btn" style="background:#802B75; color:white;">Consulter la page de <?php echo $animal->getNom(); ?> </a>
            </div>
        </div>
















<!-- 



          <?php

// require("header.php");
// require("bdd.php"); // récupère l'instance de la classe PDO qui établit la connexion à la BDD

// $id = $_GET["id"];

// $reponse = $bdd->query("SELECT * FROM animal INNER JOIN refuge ON animal.fk_ref = refuge.id_ref WHERE id_ani=$id"); // Quand tu as un INER JOIN mettre le WHERE TOUJOURS A LA FIN
// $animal = $reponse->fetch($mode = PDO::FETCH_ASSOC);


// if($animal['sexe_ani']==0){
//     $sexe = "male";
// }else{
//     $sexe="femelle";
// }
// ?>

        <div class="card" style="width: 30%;">
            <img src="images/<?php/* echo $animal['img_ani']; ?>" class="card-img-top" alt="..."  >
            <div class="card-body">
              <h5 class="card-title"><?php echo $animal['nom_ani']; ?></h5>
              <p class="card-text"><?php echo ucfirst($animal['race_ani']). " " . $sexe . " agé de ". $animal['age_ani']. " ans." . " " . $animal['nom_ref']; ?></p>
              <a href="pageperso.php?id=<?php echo $animal['id_ani']; ?>" class="btn" style="background:#802B75; color:white;">Consulter la page de <?php echo $animal['nom_ani']; ?> </a>
            </div>
        </div>
 --> 
