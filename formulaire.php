<!-- formulaire provisoire, je te laisse t'occuper du template ! -->




<form action='./connection.php' method='POST'>

            <h1 class="h3 mb-3 fw-normal">connectez-vous</h1>

            <div class="form-floating">
                <input id="floatingInput" name="identifiant" class="form-control"  placeholder="pseudo">
                <label for="floatingInput">nom d'utilisateur</label>
            </div>
            <div class="form-floating">
                <input id="floatingPassword" type="password" name="password" class="form-control"  placeholder="Password">
                <label for="floatingPassword">Mot de passe</label>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">se connecter </button>
</form>