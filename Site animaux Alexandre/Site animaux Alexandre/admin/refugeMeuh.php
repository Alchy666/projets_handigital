<?php

require("../bdd.php");
include("head.php");
$req = 'SELECT * FROM refuge';

$stmt= $bdd->prepare($req);

$stmt->execute();

$refuges = $stmt->fetchAll(PDO::FETCH_OBJ);

?>
<body>
<a href="createMeuh.php"><button class="m-5">create</button></a>
    <table class="table">
        <tr>
            <th>id_ref</th>
            <th>nom_ref</th>
            <th>adresse_ref</th>
            <th>ville_ref</th>
            <th>cp_ref</th>
            <th>place_ref</th>
            <td>action</td>
        </tr>
        <?php foreach($refuges as $refuge):?>
                <tr>
                    <td><?= $refuge->id_ref ; ?></td>
                    <td><?= $refuge->nom_ref ; ?></td>
                    <td><?= $refuge->adresse_ref ; ?></td>
                    <td><?= $refuge->ville_ref ; ?></td>
                    <td><?= $refuge->cp_ref ; ?></td>
                    <td><?= $refuge->place_ref ; ?></td>

                    <td>
                        <a href="!#"><button>edit</button></a>
                        <a href="!#"><button>delete</button></a>
                    </td>
                </tr>
                <?php endforeach;?>
    </table>
    <?php
    require ("../footer.php");
    ?>
</body>