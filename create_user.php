<?php

if (isset($_POST['identifiant'], $_POST['password']) && $_POST['identifiant'] !== '' && $_POST['password'] !== '') {
  $bdd = new PDO('mysql:host=localhost;dbname=ppe_frais', 'root', '');
  $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

  if (isset($_POST['identifiant']) && $_POST['identifiant'] !== '') {
    $q = $bdd->prepare('SELECT COUNT(*) FROM `ppe_connection` WHERE identifiant=:identifiant');
    $q->bindValue('identifiant', $_POST['identifiant']);
    $q->execute();
    //si aucune ligne ne remonte 
    if ($q->fetchColumn() == 0) {
      $requete = $bdd->prepare("INSERT INTO `ppe_connection` VALUES('', :identifiant, :password)");
      $requete->bindParam(':identifiant', $_POST['identifiant'], PDO::PARAM_STR);
      $requete->bindParam(':password', $_POST['password'], PDO::PARAM_STR);
      $requete->execute();
    }
    else {
      echo "<div class='alert alert-danger' role='alert'>
      L'identifiant ou le mot de passe ne sont pas valide: <a href='#' class='alert-link' value='Retour'
      onclick='history.go(-1)' >cliquez ici</a> pour revenir en arrière.
    </div>";
  }
    $_SESSION['pseudo'] = $_POST['identifiant'];
    header('Location: ./accueil.php');
    exit();
  }
}