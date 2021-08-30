<form action='accueil.php' methode='GET'>
    <p>
        veuillez saisir les information suivantes:
        </br></br>
        <input type="date" name="dateN" required="required" value="<?php echo $today?>">
        <p>Votre Nom : <input type="text" name="nom" required="required" /></p>
        <p>Votre Prénom : <input type="text" name="nom" required="required" /></p>
        <p>Votre Age : <input type="text" name="age" required="required" /></p>
        <p>Votre Numéro de Téléphone : <input type="text" name="tel" required="required" /></p>
        <p>Votre Sexe : <select name="sexe" required="required">
                            <option value="1">Homme</option>
                            <option value="2">Femme</option>
                            <option value="3">Transgenre</option>
                            <option value="4">Helicoptere apache</option>
                        </select>
        </p>
        <p>Votre Pays : <input type="text" name="Pays" required="required" /></p>
        <p>Votre Ville : <input type="text" name="Ville" required="required" /></p>
        <p>Votre N° de Rue : <input type="number" step="1" name="Numéro"></p>
        <p>Votre Rue : <select name="Rue" required="required">
                            <option value="5">Allée</option>
                            <option value="6">Avenue</option>
                            <option value="7">Rue</option>
                            <option value="8">Boulevard</option>
                            <option value="9">Carrefour</option>
                            <option value="10">Chemin</option>
                        </select>
        </p>
        <p>Votre Adresse : <input type="text" name="Adresse" required="required" /></p>
        <p>Votre Code Postale : <input type="text" name="Code Postale" required="required" /></p>
        <p>Votre Numéro de licence : <input type="text" name="licence" required="required" /></p>
        <p>Votre Ligue Sportive : <input type="text" name="Ligue" required="required" /></p>
        <input type="submit" name="valider"/>
    </p>
</form>