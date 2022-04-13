<?php
require("header.php");

// si il y a déjà un utilisateur connecté, on le redirige vers l'index
if (isset($_SESSION['LOGGED_USER'])) {
  header("Location:index.php");
}
?>

<form method="POST" action="ajoutclient.php">
  <input class="form-control" type="text" name="nom" placeholder="Votre nom" aria-label="default input example" required>

  <input class="form-control" type="text" name="prenom" placeholder="Votre prénom" aria-label="default input example" required>

  <input class="form-control" type="text" name="adresse" placeholder="Votre adresse" aria-label="default input example" required>

  <input class="form-control" type="text" name="ville" placeholder="Votre ville" aria-label="default input example" required>

  <input type="email" class="form-control" name="mail" placeholder="Votre adresse email" required>

  Avez vous des enfants ?
  <div class="form-check">
    <input class="form-check-input" type="radio" name="enfant" id="flexRadioDefault1" value="1" required>
    <label class="form-check-label" for="flexRadioDefault1">
      oui
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="enfant" id="flexRadioDefault2" value="0" required>
    <label class="form-check-label" for="flexRadioDefault2">
      non
    </label>
  </div>

  <input class="form-control" type="text" name="login" placeholder="Votre nom d'utilisateur" aria-label="default input example" required>

  <input type="password" name="mdp" class="form-control" placeholder="Votre mot de passe" id="inputPassword" required>

  <input type="submit" value="Je m'inscris">

</form>

<?php
require("footer.php");

?>