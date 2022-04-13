<?php
require("bdd.php");
?>
<?php

$nom = $_POST["nom"];
$espece = $_POST['espece'];
$race = $_POST['race'];
$age = $_POST['age'];
$type=$_POST['type'];
$sexe = $_POST['sexe'];
$image = $_POST['image'];
$description = $_POST['description'];
$enfant = $_POST['enfant'];
$accueil = $_POST['accueil'];
$refuge = $_POST['refuge'];



//Requetes Préparées

//première possibilité avec un tableau associatif par les clés

//on prépare la requete en donnant des valeurs que l'on nomme temporairement. Cette requete peut être executée quand on le souhaite
$req = $bdd->prepare("INSERT INTO animal(nom_ani, espece_ani, race_ani, age_ani,type_age_ani,sexe_ani,img_ani, desc_ani, enfant_ani,dateaccueil_ani ,fk_ref ) 
                        VALUES (:nom, :espece, :race, :age,:type, :sexe, :image, :description,:enfant,:accueil,:refuge)");
//On execute la requete préparée stockée dans la variable $req en lui injectant un tableau associatif, ou les clés vont d'associer avec les valeurs temporaire (avec les 🙂 de la requete préparée                        
$req->execute(array( 'nom' => $nom, 
                    'espece' => $espece, 
                    'race' => $race, 
                    'age' => $age,
                    'type'=>$type, 
                    'sexe' => $sexe,                     
                    'image' => $image,                    
                    'description' =>$description,
                    'enfant' =>  $enfant, 
                    'accueil'=> $accueil,
                    'refuge'=>$refuge
                                   
                ));
        
                header('Location: gestion_ani.php?page=2');


?>