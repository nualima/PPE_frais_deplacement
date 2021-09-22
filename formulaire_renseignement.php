<?php 
    include './header.php';
?>


<div class="container emp-profile">
    
    <form action="./traitement_formulaire.php" method="post">
        <div class="row">
            
            <div class="col-md-8">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row infos">
                            <div class="col-md-2">
                                <label>Nom :
                                    <!-- <input type="text" name="nom" required="required" placeholder="Ex: Gharbi" /> -->
                            </label>
                            </div>
                            <div class="col-md-6">
                            <input id="floatingInput" name="nom" class="form-control" required="required" placeholder="Ex: Gharbi">
                            </div>                           
                        </div>
                        <div class="row infos">
                            <div class="col-md-2">
                                <label>Prenom :</label>
                            </div>
                            <div class="col-md-6">
                            <input id="floatingInput" name="prenom" class="form-control" placeholder="Ex: Redwan">                           
                            </div>
                        </div>
                        <div class="row infos">
                            <div class="col-md-2">
                                <label>Birthday :</label>
                            </div>
                            <div class="col-md-6">
                            <input id="floatingInput" type="date" name="birthday" class="form-control" placeholder="">                           
                            </div>
                        </div>
                        <div class="row infos">
                            <div class="col-md-2">
                                <label>Email</label>
                            </div>
                            <div class="col-md-6">
                            <input id="floatingInput" name="mail" class="form-control" placeholder="Ex: redwan@hotmail.com">                           
                            </div>
                        </div>
                        <div class="row infos">
                            <div class="col-md-2">
                                <label>Phone</label>
                            </div>
                            <div class="col-md-6">
                            <input id="floatingInput" name="phone" class="form-control" placeholder="Ex: 0768716784">                           
                            </div>
                        </div>
                        <div class="row infos">
                            <div class="col-md-2">
                                <label>adresse :</label>
                            </div>
                            <div class="col-md-6">
                            <input id="floatingInput" name="adresse" class="form-control" placeholder="1571 chemin de St claude">                           
                            </div>
                        </div> 
                        <div class="row infos">
                            <div class="col-md-2">
                                <label>ville :</label>
                            </div>
                            <div class="col-md-6">
                            <input id="floatingInput" name="ville" class="form-control" placeholder="Antibes">                           
                            </div>
                        </div>
                        <div class="row infos">
                            <div class="col-md-2">
                                <label>Licence :</label>
                            </div>
                            <div class="col-md-6">
                            <input id="floatingInput" name="licence" class="form-control" placeholder="123">                           
                            </div>
                        </div>
                        <div class="row infos">
                            <div class="col-md-2">
                                <label>Ligue :</label>  
                            </div>
                            <div class="col-md-6">
                            <input id="floatingInput" name="ligue" class="form-control" placeholder="123">                           
                            </div>
                        </div>

                    
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">se connecter </button>

                </div>
            </div>
        </div>
    </form>
    <?php
    echo '<a href="./deconnection.php" target="_self"> <input type="button" value="Deconnection"> </a>';
    ?>
</div>




































<!-- <form action='traitement_formulaire.php' methode='POST'>
    <p>
        veuillez saisir les information suivantes:
        </br></br>

   

    <p>prenom : <input type="text" name="prenom" required="required" placeholder="Ex: Redwan" /></p>

    <p>Date de Naissance : <input type="date" name="birthday" required="required" value="<?php echo $today ?>">

    <p>Adresse mail : <input type="text" name="mail" required="required"  placeholder="Ex: redwan@hotmail.com" /></p>

    <p>Numéro de Téléphone : <input type="text" name="tel" required="required" placeholder="Ex: 0768716784" /></p>

    <p>Adresse Complete : <input type="text" name="Adresse" required="required" /></p>

    <p>Ville : <input type="text" name="Ville" required="required" placeholder="Ex: Nice" /></p>

    <p>Numéro de licence : <input type="text" name="licence" required="required" /></p>

    <p>Ligue Sportive : <input type="text" name="Ligue" required="required" /></p>

    <input type="submit" name="valider" />

    </p>
</form> -->