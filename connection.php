<?php

session_start();

if (isset($_POST['identifiant'], $_POST['password'])) {

    $bdd = new PDO('mysql:host=localhost;dbname=m2l', 'root', '');
    $requete = $bdd->prepare("SELECT * FROM `adherents` WHERE identifiant=:identifiant AND password=:password");
    $requete->bindParam(':identifiant', $_POST['identifiant'], PDO::PARAM_STR);
    $requete->bindParam(':password', $_POST['password'], PDO::PARAM_STR);
    $requete->execute();
    $result = $requete->fetchObject();
    $requete_ = $bdd->prepare("SELECT * FROM `demandeurs` WHERE nom=? ");
    $_SESSION['identifiant'] = $_POST['identifiant'];
    if ($result) {
        header('Location: /accueil.php');
    } else {
        echo "<div class='alert alert-danger' role='alert'>
        <p>L'identifiant ou le mot de passe ne sont pas valide:</p> <a href='#' class='alert-link' value='Retour'
        onclick='history.go(-1)' >cliquez ici</a> <p>pour revenir en arrière.</p>
      </div>";
    }
}
