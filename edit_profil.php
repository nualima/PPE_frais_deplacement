<?php
session_start();

if (isset($_SESSION) && !empty($_SESSION)) {
  $identifiant = $_SESSION['identifiant'];

  $bdd = new PDO('mysql:host=localhost;dbname=m2l', 'root', '');
  $requete = $bdd->prepare("SELECT * FROM `adherents` WHERE identifiant=:identifiant");
  $requete->bindParam(':identifiant', $identifiant, PDO::PARAM_STR);
  
  $requete->execute();
  $adherent = $requete->fetchObject();
include './header.php';
?>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<div class="container emp-profile">
    <form action="./accueil.php" method="post">
        <div class="row">
            <div class="col-md-4">
                <div class="profile-img">
                    <!-- <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt="" /> -->
                    <img src="profil_vide.jpg" alt="" />

                    <div class="file btn btn-lg btn-primary">
                        Change Photo
                        <input type="file" name="file" />
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="profile-head">
                    <?php
                    echo '<h5> Bonjour ' . $adherent->prenom . ' ! </h5>';

                    ?>
                   
                </div>
            </div>
            <div class="col-md-2">
                <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Retour" />
            </div>
        </div>
    </form>
    <form action="traitement_formulaire.php" method="post">
        <div class="row">
            <div class="col-md-4">
               
            
            </div>
            <div class="col-md-8">
                <div class="tab-content profile-tab" id="myTabContent">
                    
                    <div class="row infos">
                            <div class="col-md-2">
                                <label>Nom :
                                    <!-- <input type="text"<="nom" required="required" placeholder="Ex: <" /> -->
                            </label>
                            </div>
                            <div class="col-md-6">
                            <input id="floatingInput" name="nom" class="form-control" required="required" value=<?php echo"'" . $adherent->nom ."'" ;?>>

                            </div>                           
                        </div>

                        <div class="row infos">
                            <div class="col-md-2">
                                <label>Prenom :</label>
                            </div>
                            <div class="col-md-6">
                            <input id="floatingInput" name="prenom" class="form-control" value=<?php echo"'" . $adherent->prenom ."'" ;?>>                           
                            </div>
                        </div>
                        <div class="row infos">
                            <div class="col-md-2">
                                <label>Birthday :</label>
                            </div>
                            <div class="col-md-6">
                            <input id="floatingInput" type="date" name="birthday" class="form-control" value=<?php echo"'" . $adherent->birthday ."'" ;?>>                           
                            </div>
                        </div>
                        <div class="row infos">
                            <div class="col-md-2">
                                <label>Email</label>
                            </div>
                            <div class="col-md-6">
                            <input id="floatingInput" name="mail" class="form-control" value=<?php echo"'" . $adherent->mail ."'" ;?>>                           
                            </div>
                        </div>
                        <div class="row infos">
                            <div class="col-md-2">
                                <label>numero</label>
                            </div>
                            <div class="col-md-6">
                            <input id="floatingInput" name="numero" class="form-control" value=<?php echo"'" . $adherent->numero ."'" ;?>>                           
                            </div>
                        </div>
                        <div class="row infos">
                            <div class="col-md-2">
                                <label>adresse :</label>
                            </div>
                            <div class="col-md-6">
                            <input id="floatingInput" name="adresse" class="form-control" value=<?php echo"'" . $adherent->adresse ."'" ;?>>                           
                            </div>
                        </div> 
                        <div class="row infos">
                            <div class="col-md-2">
                                <label>ville :</label>
                            </div>
                            <div class="col-md-6">
                            <input id="floatingInput" name="ville" class="form-control" value=<?php echo"'" . $adherent->ville ."'" ;?>>                           
                            </div>
                        </div>
                        <div class="row infos">
                            <div class="col-md-2">
                                <label>Licence :</label>
                            </div>
                            <div class="col-md-6">
                            <input id="floatingInput" name="licence" class="form-control" value=<?php echo"'" . $adherent->licence ."'" ;?>>                           
                            </div>
                        </div>
                        <div class="row infos">
                            <div class="col-md-2">
                                <label>Ligue :</label>  
                            </div>
                            <div class="col-md-6">
                            <input id="floatingInput" name="ligue" class="form-control" value=<?php echo"'" . $adherent->ligue ."'" ;?>>                           
                            </div>
                        </div>

                    
                    
                    
                </div>
            </div>
        </div>
        <button class="w-25 btn btn-lg btn-primary edit_btn  " type="submit">Enregistrer les modifications </button>

    </form>
    <?php
    echo '<a href="./deconnection.php" target="_self"> <input type="button" value="Deconnection"> </a>';
}
    ?>
</div>