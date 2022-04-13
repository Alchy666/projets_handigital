<?php
require("header.php");
require("bdd.php"); // récupère l'instance de la classe PDO qui établit la connexion à la BDD

$reponse = $bdd->query("SELECT * FROM animal INNER JOIN refuge ON animal.fk_ref = refuge.id_ref");
// Méthode de PDO qui envoie la requête renseignée en paramètre et retourne un objet PDOstatement que l'on stocke dans $reponse

$tableau = $reponse->fetchAll($mode = PDO::FETCH_ASSOC); // FetchALL prend TOUTES les valeurs de la bdd, alors que Fetch seul, en prend juste 1 ou le premier donne 
// Méthode de PDOStatement qui génère un tableau php avec les résultats de la requête

// foreach($tableau as $animal){
//     echo $animal['nom_ani'] ." ". $animal['espece_ani'] ."<br/>";
// }
// Exemple de boucle pour afficher des résultats de notre requête sur la page php

?>

<!---------------------- Recherche Animaux ----------------------->




<div class="input-group w-25 p-2">
  <input type="search" class="form-control rounded" name="s" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
  <button type="button" class="btn btn-outline-primary" name="chercher">search</button>
</div>

<!---------------------- Recherche Animaux END ----------------------->



<!----------------------Liste déoulante bootstrap ----------------------->
<div class="input-group w-25 p-2">
<form method="post" action="process.php">
    <select class="form-select form-select-lg espece" aria-label=".form-select-lg example">
<!-- la classe espece est rajoutée pour réduire la width de bootsrap -->
        <option selected>Espèces</option>
        <option value="1">Chat</option>
        <option value="2">Chien</option>
        <option value="3">Poulet</option>
    </select>
</form>
</div>
<div class="container groupe">



<?php 

    foreach($tableau as $animal){ 
        //On fait une condition gérer les sexes (qui sont 0 et 1 dans la BDD)
        if($animal['sexe_ani']==0){
            $sexe = "male";
        }else{
            $sexe="femelle";
        }

        //chaque itération de la boucle doit générer une card bootstrap où le contenu de chaque carte est généré avec les information récupérées dans la base de données
?>


        <div class="card" style="width: 30%;">
            <img src="images/<?php echo $animal['img_ani']; ?>" class="card-img-top" alt="..."  >
            <div class="card-body">
              <h5 class="card-title"><?php echo $animal['nom_ani']; ?></h5>
              <p class="card-text"><?php echo ucfirst($animal['race_ani']). " " . $sexe . " agé de ". $animal['age_ani']. " ans." ; ?></p>
              <a href="pageperso.php?id=<?php echo $animal['id_ani']; ?>" class="btn" style="background:#802B75; color:white;">Consulter la page de <?php echo $animal['nom_ani']; ?> </a>
            </div>
        </div>

<?php
    }
?>

</div>

<?php
require("footer.php");
?>