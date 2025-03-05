<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="L'école cesi vous accueil">
    <title>La station météo 2.0</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="meteo.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Météo 2.0</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.html">Acceuil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="contact.html">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="dashboard/index.html">Dashboard</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="relevee.html">Relevées</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <div class="container" >
        <form method="post" action="sendemail.php">
          <div class="mb-3">
            <label class="form-label" for="nom">Nom :</label>
            <input class="form-control" id="nom" type="text" placeholder="Nom" name="nom" required>
          </div>

          <div class="mb-3">
            <label class="form-label" for="prenom">Prénom :</label>
            <input class="form-control" id="prenom" type="text" placeholder="Prénom" name="prenom" required>
          </div>

          <div class="mb-3">
            <label class="form-label" for="email">Email :</label>
            <input class="form-control" id="email" type="email" placeholder="Email"name="email" required>
          </div>

          <div class="mb-3">
            <label class="form-label" for="message">Message : </label>
            <textarea class="form-control" id="message" placeholder="Message" name="message"></textarea>
          </div>
          <div class="bouton_conteneur_questionnaire">
            <button class="btn btn-success" type="submit">Envoyer</button>
          </div>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
