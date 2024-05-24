<?php
require_once "functions.inc.php";


// déconnexion ($_SESSION)
logOut();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Premier site en PHP : site avec la BDD cinema">
  <meta name="author" content="Yacine Djediden">
  <!-- Bootstrap CSS v@5.3.3 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- Font family -->
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&family=Roboto:wght@300;400;700;900&display=swap"
    rel="stylesheet">
  <!-- Icons Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <!-- mon style -->

  <link rel="stylesheet" href="<?= RACINE_SITE ?>/assets/css/style.css">




  <title>
    <?= $title ?>
  </title>
</head>

<body>

  <header class="bg-success">

    <nav class="navbar navbar-expand-lg navbar-light bg-success">
      <div class="container-fluid d-flex justify-content-between align-items-center">
        <a class="navbar-brand" href="index.php">
          <img href="index.php" src="<?= RACINE_SITE ?>assets/images/logo/logo-png.png" alt="Logo" class="logo">
        </a>

        <div>
          <a href="<?= RACINE_SITE ?>pages/inscription.php" class="btn btn-inscription text-white">S'inscrire</a>

          <?php if (empty($_SESSION['user'])) { ?>
            <a href="<?= RACINE_SITE ?>pages/authentification.php" class="btn btn-connexion text-white">Se connecter</a>
          <?php } else { ?>
            <a href="?action=deconnexion" class="btn btn-danger">Déconnexion</a>
          <?php } ?>
          <a href="<?= RACINE_SITE ?>boutique/panier.php" class="text-white"><i class="bi bi-cart3"></i></a>
        </div>
        <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="<?= RACINE_SITE ?>index.php">ACCUEIL</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="<?= RACINE_SITE ?>pages/boutique.php">BOUTIQUE</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            NEWS
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= RACINE_SITE ?>pages/les_equipes_du_mali.php">LES EQUIPES DU MALI</a></li>
            <li><a class="dropdown-item" href="<?= RACINE_SITE ?>pages/articles.php">LES ARTICLES</a></li>
            <li><a class="dropdown-item" href="<?= RACINE_SITE ?>pages/statistiques.php">STATISTIQUES</a></li>
            <li><a class="dropdown-item" href="<?= RACINE_SITE ?>pages/calendrier.php">CALENDRIER</a></li>
            <li><a class="dropdown-item" href="<?= RACINE_SITE ?>pages/galerie.php">GALERIE</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            INFOS
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= RACINE_SITE ?>pages/qui-sommes-nous.php">QUI-SOMMES-NOUS</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
      </div>
    </nav>

  </header>