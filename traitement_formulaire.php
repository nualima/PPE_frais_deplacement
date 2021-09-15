<?php

session_start();


    $bdd = new PDO('mysql:host=localhost;dbname=m2l', 'root', '');

    $info_complete= true;

    if(! $_POST['nom']) {
        $info_complete= false;
        
    }
    if(! $_['prenom']){
        $info_complete= false;

    }
    if(!$_POST['licence']){
        $info_complete= false;

    }
    if(!$_POST['mail']){
        $info_complete= false;

    }

    if(!$_POST['adresse']){
        $info_complete= false;

    }

    if(!$_POST['ville']){
        $info_complete= false;

    }

    if(!$_POST['ligue']){
        $info_complete= false;

    }
    if($info_complete=false){
        header('Location: /formulaire_renseignement.php');

    } else {
        

    $req = $bdd->prepare('INSERT INTO `adherent` (`id`, `identifiant`, `password`, `licence`, `nom`, `prenom`, `birthday`, `mail`, `adresse`, `ville`, `ligue`) VALUES('', '', '', :licence, :nom, :prenom, :birthday, :mail, :adresse, :ville, :ligne)');
    $requete->bindParam(':licence', $_POST['licence'], PDO::PARAM_STR);
    $requete->bindParam(':nom', $_POST['nom'], PDO::PARAM_STR);
    $requete->bindParam(':prenom', $_POST['prenom'], PDO::PARAM_STR);
    $requete->bindParam(':birthday', $_POST['biirthday'], PDO::PARAM_STR);
    $requete->bindParam(':mail', $_POST['mail'], PDO::PARAM_STR);
    $requete->bindParam(':adresse', $_POST['adresse'], PDO::PARAM_STR);
    $requete->bindParam(':ville', $_POST['ville'], PDO::PARAM_STR);
    $requete->bindParam(':ligue', $_POST['ligue'], PDO::PARAM_STR);
}