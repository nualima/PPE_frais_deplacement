<!-- cette page sera la premiere page sur laquelle le client tombera lorsqu'il se sera connécté ou inscrit. -->

<?php

// print_r($_POST);

// session_start();
// print_r($_SESSION);

if (isset($_SESSION)) {
 $user  =$_POST['identifiant'] ;

  echo '<p> bonjour ' . $user . ' ! </p>';
  //     echo '<form>
  // <input type="button" value="Deconnection" onclick="history.go(-1)">
  // </form>';
  echo '<a href="./deconnection.php" target="_self"> <input type="button" value="Deconnection"> </a>
    ';
}

?>
si vous souhaitez changer vos informations , cliquez ici
<form action='post_formulaire.php' methode='GET'>
  <p>
    <input type="submit" name="valider"/>
  </p>
</form>