<?php require 'includes/incTop.php'; ?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <form action="login-check.php" method="POST">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
              </div>
              <input type="submit" class="btn btn-primary" value="Se connecter" name="submit" />
            </form>
        </div>
    </div>
</div>

<?php require 'includes/incBottom.php'; ?>

