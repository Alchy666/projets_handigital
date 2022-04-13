<?php
//ON stock dans une variable la valeur de l'information page, transmise par la barre d'URL sans la superglobale GET
$page = "";
if (isset($_GET['page'])) {
  $page = $_GET['page'];
}

// on récupère la sessin exitante
// si il n'y a pas de session ouvert, cela en crée une nouvelle
session_start();

//Si on arrive de la page traitementconnexion avec une info err en GET
if (isset($_SESSION['LOGGED_USER'])) {
?>
<style>
  .connection,
  .inscri {
  display: none !important;
  }

  .deco,
  .mapage {
    display: block !important;
  }

</style>
<?php
}

// var_dump permet de voir le contenu d'une variable ainsi que toutes informations la concernant (type, taille, ...)
//  var_dump($page);
?>
<!-- Le header est créé une unique fois ici, puis appelé sur toutes les pages -->
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Les futures pantoufles</title>
  <!-- CDN du CSS de bootsrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- On appelle notre CSS perso après pour qu'il puisse écraser les valeurs de bootsrap -->
  <link rel="stylesheet" href="main.css">
</head>

<body>
  <!-- DEBUT Navbar Bootsrap -->
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #802B75;">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">LOGO</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <!-- Le href envoie vers la page adaptée et fourni une information "page" // Superglobale GET (Tableau construit avec les infos fournies après le ? dans l'URL) -->
          <!-- Avec php, on test sur quelle page nous sommes avec la variable créée plus tôt gràce à GET puis nous ajoutons les classes "active" et "disabled" si nous sommes sur la bonne page -->
          <a class="nav-link <?php if ($page == 1) {
                                echo "active disabled";
                              }
                              //SI la variable page contient 1, ALORS écrit "active" et "disabled"   
                              ?>" href="index.php?page=1">Accueil</a>
          <a class="nav-link <?php if ($page == 2) {
                                echo "active disabled";
                              }
                              ?>" href="animal.php?page=2">Les animaux</a>
          <a class="nav-link <?php if ($page == 3) {
                                echo "active disabled";
                              }
                              ?>" href="contact.php?page=3">Contact</a>
          <a class="nav-link <?php if ($page == 4) {
                                echo "active disabled";
                              }
                              ?>" href="refugesliste.php?page=4">Refuges</a>
          <!-- connection et inscription disparaissent si on se connecte -->
          <a class="nav-link connection <?php if ($page == 5) {
                                          echo "active disabled";
                                        }
                                        ?>" href="login.php?page=5">Se connecter</a>
          <a class="nav-link inscri <?php if ($page == 6) {
                                      echo "active disabled";
                                    }
                                    ?>" href="inscri.php?page=6">Inscription</a>
          <!-- Ma page est display none initialement et devient visible si on est connecté -->
          <a class="nav-link mapage <?php if ($page == 7) {
                                      echo "active disabled";
                                    }
                                    ?>" href="mapage.php?page=7">Ma page</a>

        </div>

      </div>
    </div>
    <div class="bonjour">
<?php
if (isset($_SESSION['LOGGED_USER'])) {
  echo "Bonjour " . $_SESSION['LOGGED_USER'];
}
?>
  </div>
  <a class="nav-link deco" href="deconnection.php">Déconnection</a>
</nav>
  <!-- FIN  Navbar Bootsrap -->