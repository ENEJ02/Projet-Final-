<?php

require_once "../inc/functions.inc.php";


if (!empty($_GET)) {

    $idproduit = htmlentities($_GET['id']);


}

if (isset($_GET['action']) && isset($_GET['id'])) {

    if (!empty($_GET['action']) && $_GET['action'] == 'show' && !empty($_GET['id'])) {

        $id = $_GET['id'];
        $joueurmali = showJoueurmali($id);
    }
} else {
    header("location:" . RACINE_SITE . "index.php");

}

require_once "../inc/header.inc.php";

?>
<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="<?= RACINE_SITE . "assets/images/equipe-a/" . $joueurmali['image'] ?>" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">
        <?= ucfirst($joueurmali['nom']) ?>
        </h5>
        <p class="card-text">
        <?= ucfirst($joueurmali['prenom']) ?>
        </p>
        <p class="card-text"><small class="text-body-secondary">
        <?= ucfirst($joueurmali['datenaissance']) ?>
        </small></p>
        <p class="card-text">
        <?= ucfirst($joueurmali['position']) ?>
        </p>
        <p class="card-text">
        <?= ucfirst($joueurmali['clubactuel']) ?>
        </p>
        <p class="card-text">
        <?= ucfirst($joueurmali['bio']) ?>
        </p>
      </div>
    </div>
  </div>
</div>

<?php
require_once "../inc/footer.inc.php";
?>


