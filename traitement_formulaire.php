<?php

session_start();


    $bdd = new PDO('mysql:host=localhost;dbname=m2l', 'root', '');

    $info_complete= true;

    if(! $_POST['nom'] || ! $_POST['prenom'] || !$_POST['licence'] || !$_POST['mail'] || !$_POST['adresse'] || !$_POST['ville'] || !$_POST['ligue']) 
    {
        $info_complete= false;
        
    };

    if($info_complete==false){
        // header('Location: /formulaire_renseignement.php');
        header('Localtion: /error_page.php');

    } else {
        

    $requete = $bdd->prepare("UPDATE INTO `adherents` WHERE identifiant=:identifiant AND password=:password VALUES('', '', '',  :nom, :prenom, :birthday, :mail, :numero, :adresse, :ville, :licence, :ligne, 1 ");
    $requete->bindParam(':identifiant', $_SESSION['identifiant'], PDO::PARAM_STR);
    $requete->bindParam(':password', $_SESSION['password'], PDO::PARAM_STR);
    $requete->bindParam(':nom', $_POST['nom'], PDO::PARAM_STR);
    $requete->bindParam(':prenom', $_POST['prenom'], PDO::PARAM_STR);
    $requete->bindParam(':birthday', $_POST['biirthday'], PDO::PARAM_STR);
    $requete->bindParam(':mail', $_POST['mail'], PDO::PARAM_STR);   
    $requete->bindParam(':numero', $_POST['numero'], PDO::PARAM_STR);   
    $requete->bindParam(':adresse', $_POST['adresse'], PDO::PARAM_STR);
    $requete->bindParam(':ville', $_POST['ville'], PDO::PARAM_STR);
    $requete->bindParam(':licence', $_POST['licence'], PDO::PARAM_STR);
    $requete->bindParam(':ligue', $_POST['ligue'], PDO::PARAM_STR);
    $requete->execute();

    header('Location: /accueil.php');
};