<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar avec Menu Déroulant</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-dark bg-dark justify-content-between">
  <!-- Bouton pour le menu -->
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuCollapse" aria-controls="menuCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Titre -->
  <a class="navbar-brand text-light font-weight-bold">Gestion de la bibliothèque</a>

  <!-- Formulaire de recherche -->
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="par libellé" aria-label="Search">
    <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Rechercher</button>
  </form>
</nav>

<!-- Menu caché qui se déroule -->
<div class="collapse" id="menuCollapse">
  <div class="bg-dark p-4">
    <h5 class="text-white">Menu</h5>
    <button class="btn btn-primary mb-2">Gestion des Administrateurs </button>
    <button class="btn btn-secondary mb-2">Gestion des Livres</button>
    <button class="btn btn-success mb-2">Gestion des Emprunts</button>
    <button class="btn btn-warning mb-2">Gestion des Clients</button>
    <button class="btn btn-info mb-2">Statistiques et Rapports</button>
    <button class="btn btn-danger">Deconnexion</button>

  </div>
</div>

<!-- Scripts Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
