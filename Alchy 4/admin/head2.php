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
  .inscri {
  display: none !important;
  }


  .animaux,
  .accueil,
  .contacte,
  .refuge,
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <link rel="stylesheet" href="../assets/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style2.css">
    <link rel='stylesheet' type='text/css' media='screen' href='nav.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='nav_responsive.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='makeshift.css'>
    <script src='main.js'></script>
    <script src='makeshift.js'></script>
    <title>Alchy</title>
</head>



<body>
  <!-- DEBUT Navbar Bootsrap -->
  <nav class="navbar navbar-expand-lg" style="background-color: #fff;">
    <div class="container-fluid">
      <a class="navbar-brand" href="../index.php">LOGO</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav  navbar-collapse">
          <!-- Le href envoie vers la page adaptée et fourni une information "page" // Superglobale GET (Tableau construit avec les infos fournies après le ? dans l'URL) -->
          <!-- Avec php, on test sur quelle page nous sommes avec la variable créée plus tôt gràce à GET puis nous ajoutons les classes "active" et "disabled" si nous sommes sur la bonne page -->
          <a class="nav-link accueil <?php if ($page == 1) {
                                echo "active disabled";
                              }
                              //SI la variable page contient 1, ALORS écrit "active" et "disabled"   
                              ?>" href="index.php?page=1">Accueil</a>
          <a class="nav-link animaux  <?php if ($page == 2) {
                                echo "active disabled";
                              }
                              ?>" href="animal.php?page=2">Les animaux</a>
          <a class="nav-link contacte <?php if ($page == 3) {
                                echo "active disabled";
                              }
                              ?>" href="contact.php?page=3">Contact</a>
          <a class="nav-link refuge <?php if ($page == 4) {
                                echo "active disabled";
                              }
                              ?>" href="refugesliste.php?page=4">Refuges</a>

          <!-- connection et inscription disparaissent si on se connecte -->
          <a class="nav-link inscri <?php if ($page == 5) {
                                      echo "active disabled";
                                    }
                                    ?>" href="inscri.php?page=5">Inscription</a>
          <!-- Ma page est display none initialement et devient visible si on est connecté -->
          <a class="nav-link mapage <?php if ($page == 6) {
                                      echo "active disabled";
                                    }
                                    ?>" href="mapage.php?page=6">Ma page</a>

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