<?php

session_start();


    $bdd = new PDO('mysql:host=localhost;dbname=m2l', 'root', '');

    $info_complete= true;

    if(! $_POST['nom'] || ! $_POST['prenom'] || !$_POST['licence'] || !$_POST['mail'] || !$_POST['adresse'] || !$_POST['ville'] || !$_POST['ligue']) 
    {
        $info_complete= false;
        
    };

    if($info_complete==false){
        header('Location: /formulaire_renseignement.php');

    } else {
        

    $requete = $bdd->prepare("INSERT INTO `adherent` (`id`, `identifiant`, `password`, `licence`, `nom`, `prenom`, `birthday`, `mail`, `adresse`, `ville`, `ligue`) VALUES('', '', '', :licence, :nom, :prenom, :birthday, :mail, :adresse, :ville, :ligne");
    $requete->bindParam(':licence', $_POST['licence'], PDO::PARAM_STR);
    $requete->bindParam(':nom', $_POST['nom'], PDO::PARAM_STR);
    $requete->bindParam(':prenom', $_POST['prenom'], PDO::PARAM_STR);
    $requete->bindParam(':birthday', $_POST['biirthday'], PDO::PARAM_STR);
    $requete->bindParam(':mail', $_POST['mail'], PDO::PARAM_STR);
    $requete->bindParam(':adresse', $_POST['adresse'], PDO::PARAM_STR);
    $requete->bindParam(':ville', $_POST['ville'], PDO::PARAM_STR);
    $requete->bindParam(':ligue', $_POST['ligue'], PDO::PARAM_STR);
    $requete->execute();
    header('Location: /accueil.php');
};