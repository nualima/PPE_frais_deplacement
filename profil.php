<?php
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container emp-profile">
    <form action="./edit_profil.php" method="post">
        <div class="row">
            <div class="col-md-4">
                <div class="profile-img">
                    <!-- <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt="" /> -->
                    <img src="profil_vide.jpg" alt="" />

                    <!-- <div class="file btn btn-lg btn-primary">
                        Change Photo
                        <input type="file" name="file" />
                    </div> -->
                </div>
            </div>
            <div class="col-md-6">
                <div class="profile-head">
                    <?php
                    echo '<h5> Bonjour ' . $adherent->prenom . ' ! </h5>';

                    ?>
                    <h6>
                        Web Developer and Designer
                    </h6>
                    <!-- <p class="proile-rating">RANKINGS : <span>8/10</span></p> -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile" onclick="window.location.href = './edit_profil.php';" />
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="profile-work">
                    <?php
                    $timestamp = strtotime($adherent->birthday);
                    $adherent->birthday = date("d-m-Y", $timestamp);
                    echo'
                    
                    <p  class="a">nom complet :</p>
                    <p>'. $adherent->nom . ' ' . $adherent->prenom . '</p>

                    <p  class="a">date de naissance :</p>
                    <p>' . $adherent->birthday . '</p>

                    <p  class="a">Adresse :</p>
                    <p>' . $adherent->adresse . ' , '. strtoupper($adherent->ville) . '<p>
                    
                    <p  class="a">adresse mail :</p>
                    <p>' . $adherent->mail .'</p>

                    <p  class="a">n° ligue :</p>
                    <p>' . $adherent->ligue . '</p>

                    <p  class="a">n° licence :</p>
                    <p>' . $adherent->licence . '</p>
                    '
                    ?>
                    
                </div>
            </div>
            <!-- <div class="col-md-8">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-md-6">
                                <label>User Id</label>
                            </div>
                            <div class="col-md-6">
                                <p>Kshiti123</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Name</label>
                            </div>
                            <div class="col-md-6">
                                <p>Kshiti Ghelani</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Email</label>
                            </div>
                            <div class="col-md-6">
                                <p>kshitighelani@gmail.com</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Phone</label>
                            </div>
                            <div class="col-md-6">
                                <p>123 456 7890</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Profession</label>
                            </div>
                            <div class="col-md-6">
                                <p>Web Developer and Designer</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Experience</label>
                            </div>
                            <div class="col-md-6">
                                <p>Expert</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Hourly Rate</label>
                            </div>
                            <div class="col-md-6">
                                <p>10$/hr</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Total Projects</label>
                            </div>
                            <div class="col-md-6">
                                <p>230</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>English Level</label>
                            </div>
                            <div class="col-md-6">
                                <p>Expert</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Availability</label>
                            </div>
                            <div class="col-md-6">
                                <p>6 months</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Your Bio</label><br />
                                <p>Your detail description</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </form>
    <?php
    echo '<a href="./deconnection.php" target="_self"> <input type="button" value="Deconnection"> </a>';
    ?>
</div>