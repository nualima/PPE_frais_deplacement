<?php

if (isset($_POST['identifiant'], $_POST['password']) && $_POST['identifiant'] !== '' && $_POST['password'] !== '') {
  $bdd = new PDO('mysql:host=localhost;dbname=m2l', 'root', '');
  $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
  
  if (isset($_POST['identifiant']) && $_POST['identifiant'] !== '') {
    $q = $bdd->prepare('SELECT COUNT(*) FROM `adherents` WHERE identifiant=:identifiant');
    $q->bindValue('identifiant', $_POST['identifiant']);
    $q->execute();
    ?>