<body>

   

        <?php


        // Le header sur une autre page pour aérer le tout
        include "header.php";
        echo "<header> </header>";

        echo "<div id='form_index'>";

        include "./formulaire.php";
        // include "./create_user.php";


        echo 'Première visite ? <a href="./formulaire_inscription.php"> Inscrivez vous !</a> ';

        echo "</div>";
        ?>

    


</body>