<body>

   

        <?php


        // Le header sur une autre page pour aérer le tout
        include "header.php";
        echo "<header> </header>";

        echo "<div class='form_index'>";

        include "./formulaire.php";
        // include "./create_user.php";


        echo 'Première visite ? <a class="inscrivez-vous" href="./formulaire_inscription.php"> Inscrivez vous !</a> ';

        echo "</div>";
        ?>

    


</body>