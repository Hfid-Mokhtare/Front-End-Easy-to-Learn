

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Connexion</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card shadow-lg">
        <div class="card-header text-center bg-primary text-white">
          <h4>Connexion</h4>
        </div>
        <div class="card-body">
          <form action="login_check.php" method="POST">
            <div class="mb-3">
              <label for="login" class="form-label">Login</label>
              <input type="text" class="form-control" id="login" name="login" >
            </div>
            <div class="mb-3">
              <label for="motPasse" class="form-label">Mot de passe</label>
              <input type="password" class="form-control" id="motPasse" name="motPasse" >
            </div>
            <?php
            //afficher message erreur
            
            ?>
            <div class="d-grid">
              <button type="submit" class="btn btn-primary">Se connecter</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
