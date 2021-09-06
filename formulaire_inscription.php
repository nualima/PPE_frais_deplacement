<script>
    function check_pass() {
        if (document.getElementById('password').value ==
            document.getElementById('confirm_password').value) {
            document.getElementById('submit').disabled = false;
        } else {
            document.getElementById('submit').disabled = true;
        }
    }
</script>
<form action='./create_user.php' method='POST'>

    <h1 class="h3 mb-3 fw-normal">connectez-vous</h1>

    <div class="form-floating">
        <label for="floatingInput">nom d'utilisateur :</label>
        <input id="floatingInput" name="identifiant" class="form-control" placeholder="pseudo">

    </div>
    <div class="form-floating">
        <label for="floatingPassword">Mot de passe :</label>
        <!-- <input id="floatingPassword" type="password" name="password" class="form-control" placeholder="Password"> -->
        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required="required" onkeyup='check_pass();' />


    </div>
    <div class="form-floating">
        <label for="floatingPassword">confirmer le mot de passe :</label>
        <input type="password" name="confirm_password" id="confirm_password" required="required" onkeyup='check_pass();' />
    </div>

    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me"> Remember me
        </label>
    </div>        
    <input type="submit" name="submit" value="registration" id="submit" required="required" disabled />

    <!-- <button class="w-100 btn btn-lg btn-primary" type="submit">se connecter </button> -->
</form>