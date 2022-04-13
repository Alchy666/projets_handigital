<?php

require("../bdd.php");
include("head.php");
$req = 'SELECT * FROM animal';

$stmt= $bdd->prepare($req);

$stmt->execute();

$animaux = $stmt->fetchAll(PDO::FETCH_OBJ);

?>
<body>
    <h2>
        Liste des MEUH
    </h2>
    <table class="table">
        <tr>
            <th>id_ani</th>
            <th>nom_ani</th>
            <th>race_ani</th>
            <th>age_ani</th>
            <th>sexe_ani</th>
            <th>img_ani</th>
            <th>desc_ani</th>
            <th>enfant_ani</th>
            <th>dateaccueil_ani</th>
            <th>dateadopt_ani</th>
            <th>id_cli</th>
            <th>id_ref</th>
            <td>action</td>
        </tr>
        <?php foreach($animaux as $animal):?>
                <tr>
                    <!-- le symbol < ? = est une facons d'écrire (Je commence du php ET je fais un echo, une fonction uniquement possible pour faire ca. Call php et un echo) -->
                    <td><?= $animal->id_ani; ?></td>
                    <td><?= $animal->nom_ani; ?></td>
                    <td><?= $animal->race_ani; ?></td>
                    <td><?= $animal->age_ani; ?></td>
                    <td><?= $animal->sexe_ani; ?></td>
                    <td><?= $animal->img_ani; ?></td>
                    <td><?= $animal->desc_ani; ?></td>
                    <td><?= $animal->enfant_ani; ?></td>
                    <td><?= $animal->dateaccueil_ani; ?></td>
                    <td><?= $animal->dateadopt_ani; ?></td>
                    <td><?= $animal->id_cli; ?></td>
                    <td><?= $animal->id_ref; ?></td>
                    <td><!-- le php dans le href est un echo d'un element pris dans ta base de donnée PDO, le get apres va recuperer le mot cley ou key que tu à mi dans le href "id", tu peux mettre celui que tu veux -->
                        <a href="editMeuh.php?id=<?php echo $animal->id_ani; ?>"><button class="btn btn-primary">edit</button></a>
                        <a href="deleteMeuh.php?id=<?php echo $animal->id_ani; ?>"><button class="btn btn-danger">delete</button></a>
                    </td>
                </tr>
                <?php endforeach;?>
    </table>
    <?php
    require("../footer.php");
    ?>  
</body>