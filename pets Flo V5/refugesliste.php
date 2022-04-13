<?php

require("header.php");
require("bdd.php"); // récupère l'instance de la classe PDO qui établit la connexion à la BDD


$reponse = $bdd->query("SELECT * FROM `refuge`"); // Quand tu as un INER JOIN mettre le WHERE TOUJOURS A LA FIN
$refuge = $reponse->fetchAll($mode = PDO::FETCH_ASSOC);

?>

<table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col"></th>
      <th scope="col">Nom Refuges</th>
      <th scope="col">Adresse</th>
      <th scope="col">Ville</th>
      <th scope="col">Code Postal</th>
    </tr>

<?php

foreach($refuge as $ref){

?>

    <tr>
      <th scope="row">></th>
      <td><?php echo $ref['nom_ref']; ?></td>
      <td><?php echo $ref['adresse_ref']; ?></td>
      <td><?php echo $ref['ville_ref']; ?></td>
      <td><?php echo $ref['cp_ref']; ?></td>
    </tr>
  </thead>



<?php
}
?>
</table>
<!-- 

        <div class="card" style="width: 30%;">
            <img src="images/<?php echo $animal['img_ani']; ?>" class="card-img-top" alt="..."  >
            <div class="card-body">
              <h5 class="card-title"><?php echo $animal['nom_ani']; ?></h5>
              <p class="card-text"><?php echo ucfirst($animal['race_ani']). " " . $sexe . " agé de ". $animal['age_ani']. " ans." . " " . $animal['nom_ref']; ?></p>
              <a href="pageperso.php?id=<?php echo $animal['id_ani']; ?>" class="btn" style="background:#802B75; color:white;">Consulter la page de <?php echo $animal['nom_ani']; ?> </a>
            </div>
        </div> -->