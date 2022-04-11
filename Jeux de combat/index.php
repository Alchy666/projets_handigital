<?php
// On enregistre notre autoload.
function chargerClasse($classname)
{
  require 'classe\\' . $classname.'.php';
}

spl_autoload_register('chargerClasse');

session_start(); // On appelle session_start() APRÈS avoir enregistré l'autoload.

if (isset($_GET['deconnexion']))
{
  session_destroy();
  header('Location: .');
  exit();
}

$db = new PDO('mysql:host=localhost;dbname=jeux_combat', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // On émet une alerte à chaque fois qu'une requête a échoué.

$repository = new PersonnagesRepository($db);

if (isset($_SESSION['perso'])) // Si la session perso existe, on restaure l'objet.
{
  $perso = $_SESSION['perso'];
}

if (isset($_POST['creer']) && isset($_POST['nom'])) // Si on a voulu créer un personnage.
{
  switch ($_POST['type']) {
    case 'magicien' :
        $perso = new Magicien(['nom' => $_POST['nom']]);
        break;
    case 'guerrier' :
        $perso = new Guerrier(['nom' => $_POST['nom']]);
        break;
    default :
        $message = 'Le type du personnage n\'est pas valide';
        unset($perso);
        break;
}

  // $perso = new Personnage(['nom' => $_POST['nom'], 'type' => $_POST['type']]); // On crée un nouveau personnage.
  
  if (!$perso->nomValide())
  {
    $message = 'Le nom choisi est invalide.';
    unset($perso);
  }
  elseif ($repository->exists($perso->nom()))
  {
    $message = 'Le nom du personnage est déjà pris.';
    unset($perso);
  }
  else
  {
    $repository->add($perso);
  }
}

elseif (isset($_POST['utiliser']) && isset($_POST['nom'])) // Si on a voulu utiliser un personnage.
{
  if ($repository->exists($_POST['nom'])) // Si celui-ci existe.
  {
    $perso = $repository->get($_POST['nom']);
  }
  else
  {
    $message = 'Ce personnage n\'existe pas !'; // S'il n'existe pas, on affichera ce message.
  }
}

elseif (isset($_GET['frapper'])) // Si on a cliqué sur un personnage pour le frapper.
{
  if (!isset($perso))
  {
    $message = 'Merci de créer un personnage ou de vous identifier.';
  }
  
  else
  {
    if (!$repository->exists((int) $_GET['frapper']))
    {
      $message = 'Le personnage que vous voulez frapper n\'existe pas !';
    }
    
    else
    {
      $persoAFrapper = $repository->get((int) $_GET['frapper']);
      
      $retour = $perso->frapper($persoAFrapper); // On stocke dans $retour les éventuelles erreurs ou messages que renvoie la méthode frapper.
      switch ($retour)
      {
        case Personnage::CEST_MOI :
          $message = 'Mais... pourquoi voulez-vous vous frapper ???';
          break;
        
        case Personnage::PERSONNAGE_FRAPPE :
          $message = 'Le personnage a bien été frappé !';
          
          $repository->update($perso);
          $repository->update($persoAFrapper);
          
          break;
        
        case Personnage::PERSONNAGE_MORT :
          $message = 'Vous avez tué ce personnage !';
          
          $repository->update($perso);
          $repository->delete($persoAFrapper);
          
          break;
      }
    }
  }
}

?>
<!DOCTYPE html>
<html>
  <head>
    <title>TP : Mini jeu de combat</title>
    <link rel="stylesheet" href="./assets/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <meta charset="utf-8" />
  </head>
  <body>
  
  <?php
  if (isset($message)) // On a un message à afficher ?
  {
    echo '<p>', $message, '</p>'; // Si oui, on l'affiche.
  }

  if (isset($perso)) // Si on utilise un personnage (nouveau ou pas).
  {
  ?>
      <p><a href="?deconnexion=1">Déconnexion</a></p>
      
      <fieldset>
        <legend>Mes informations</legend>
        <p>
          Nom : <?= htmlspecialchars($perso->nom()) ?><br/>
          Vie : <?= $perso->vie() ?><br/>
          Puissance : <?= $perso->puissance() ?><br/>
          Niveau : <?= $perso->niveau() ?><br/>
          Experience : <?= $perso->experience() ?><br/>
          Type : <?= $perso->type() ?>
        </p>
      </fieldset>


    <fieldset>
      <legend>Qui frapper ?</legend>
      <p>
<?php
$persos = $repository->getList($perso->nom());

if (empty($persos))
{
  echo 'Personne à frapper !';
}

else
{
  foreach ($persos as $unPerso)
  {
    echo '<a href="?frapper=', $unPerso->id(), '">', htmlspecialchars($unPerso->nom()), '</a> (vie : ', $unPerso->vie(), ')<br />';
  }
}
?>
      </p>
    </fieldset>
<?php
}
else
{
?>

<!-- LES CLASES DES PERSOS !!!!!!! -->

<div  class="d-flex justify-content-center align-items-center mt-5">
    <form action="" method="post">
      <p>
        Nom : <input type="text" name="nom" maxlength="50" />
        <input type="submit" value="Créer ce personnage" name="creer" />
        <input type="submit" value="Utiliser ce personnage" name="utiliser" />
        <div class="form-group">
          <label for="exampleFormControlSelect1">Classe select</label>
          <select class="form-control" id="exampleFormControlSelect1" name="type">
            <option value="guerrier">Guerrier</option>
            <option value="magicien">Magicien</option>
            <option value="archer">Archer</option>
            <option value="bard">Bard</option>
            <option value="barbare">Barbare</option>
          </select>
        </div>
      </p>      
    </form>
  </div>

  
<?php
}
?>

<!-- LES LISTES DES PERSOS !!!!!!! -->

<div class="fixed-bottom">
<p>Nombre de personnages créés : <?= $repository->count() ?></p>
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">nom </th>
      <th scope="col">vie</th>
      <th scope="col">puissance</th>
      <th scope="col">niveau</th>
      <th scope="col">experience</th>
      <th scope="col">type</th>
    </tr>
  </thead>
  <?php
    $persos = $repository->listePersonnages(); 
    foreach($persos as $row):
  ?>
    <tr>
      <td><?= $row->id()?></td>
      <td><?= $row->nom()?></td>
      <td><?= $row->vie()?></td>
      <td><?= $row->puissance()?></td>
      <td><?= $row->niveau()?></td>
      <td><?= $row->experience()?></td>
      <td><?= $row->type()?></td>
    </tr>
  </tbody>
<?php
  endforeach;
?>
</div>
</table>
  </body>
</html>
<?php
if (isset($perso)) // Si on a créé un personnage, on le stocke dans une variable session afin d'économiser une requête SQL.
{
  $_SESSION['perso'] = $perso;
}


?>