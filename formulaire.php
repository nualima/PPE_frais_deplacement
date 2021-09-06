<!-- formulaire provisoire, je te laisse t'occuper du template ! -->


<div class="formulaire_connection">

    <form action='./connection.php' method='POST'>

        <h1 class="h2 mb-3 fw-normal">connectez-vous</h1>

        <div class="form-floating h5"><label for="floatingInput">nom d'utilisateur :</label>
            <input id="floatingInput" name="identifiant" class="form-control" placeholder="pseudo">

        </div>
        <div class="form-floating h5"><label for="floatingPassword">Mot de passe :</label>
            <input id="floatingPassword" type="password" name="password" class="form-control" placeholder="Password">

        </div>

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">se connecter </button>
    </form>

</div>