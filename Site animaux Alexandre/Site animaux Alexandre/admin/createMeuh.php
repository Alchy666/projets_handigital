<?php
require("../bdd.php");
include ("head.php");

if(isset($_POST["nom"])){
    $nom = $_POST["nom"];
    $race = $_POST['race'];
    $age = $_POST['age'];
    $sexe = $_POST['sexe'];
    $desc = $_POST['desc'];//description
    $enfant = $_POST['enfant'];
    $dateacc = $_POST['dateacc'];//date d'arrive, accueil
    $dateado = $_POST['dateado'];//date d'adoption

    $req = $bdd->prepare("INSERT INTO animal(nom_ani, race_ani, age_ani, sexe_ani, desc_ani, enfant_ani, dateaccueil_ani, dateadopt_ani) 
                        VALUES (:nom, :race, :age, :sexe, :desc, :enfant, :dateacc, :dateado)");
    //On execute la requete préparée stockée dans la variable $req en lui injectant un tableau associatif, ou les clés vont d'associer avec les valeurs temporaire (avec les :) de la requete préparée                        
    $result= $req->execute(array( 'nom' => $nom, 
                        'race' => $race, 
                        'age' => $age, 
                        'sexe' => $sexe, 
                        'desc' => $desc, 
                        'enfant' =>  $enfant, 
                        'dateacc' => $dateacc, 
                        'dateado' =>$dateado));

    if($result){
        echo "Meuh added !";
    }    header('Location: readMeuh.php');

}

?>

<style>
<?php include ("formes.css") ?>
</style>

<body>
    <form method="POST">
        <table>
            <tr>
                <th>Profil du MEUH</th>
                <td>
                    <input type="text" name="nom" id="" placeholder="Nom">
                </td>
                <td> 
                    <input type="text" name="race" id="" placeholder="Race">
                </td>
                <td>  
                    <input type="text" name="age" id="" placeholder="Age">
                </td>
                <td>    
                    <input type="text" name="sexe" id="" placeholder="Sexe">
                </td>
                <td>     
                    <input type="text" name="desc" id="" placeholder="Description">
                </td>
                <td>    
                    <input type="text" name="enfant" id="" placeholder="Enfants">
                </td>
                <td>   
                    <input type="text" name="dateacc" id="" placeholder="Date d'arrive">
                </td>
                <td>   
                    <input type="text" name="dateado" id="" placeholder="Date d'adoption">
                </td>
                <!-- <td>  
                    <input type="text" name="id_cli " id="" placeholder="Nom">
                </td>
                <td> 
                    <input type="text" name="id_ref " id="" placeholder="Nom">
                </td> -->
                <td>
                    <input type="submit" value="addMeuh">
                </td>
            </tr>
        </table>
    </form>















    <?php
    require "../footer.php";
    ?>
</body>
