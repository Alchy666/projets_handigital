<?php 
require("../bdd.php");
include ("head.php");

		$id = $_GET['id'];// $_get prend les info dans l'url, l'ID est dans le href, il s'affiche dans l'url, le get le prend
		$update = true;
		$req = $bdd->query("SELECT * FROM animal WHERE id_ani=$id");
        $tab = $req->fetch();

        // echo $tab["nom_ani"];
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
                    <input type="text" name="nom" id="" placeholder="Nom" value="<?php echo $tab["nom_ani"]; ?>">
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