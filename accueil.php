
<?php
include './header.php';


session_start();

if (isset($_SESSION) && !empty($_SESSION)) {
  $identifiant = $_SESSION['identifiant'];
 
  $bdd = new PDO('mysql:host=localhost;dbname=m2l', 'redwan', 'zjyLzL9JY');
  $requete = $bdd->prepare("SELECT * FROM `adherents` WHERE identifiant=:identifiant");
  $requete->bindParam(':identifiant', $identifiant, PDO::PARAM_STR);
  
  $requete->execute();
  $adherent = $requete->fetchObject();


  include './profil.php';
}

?>
