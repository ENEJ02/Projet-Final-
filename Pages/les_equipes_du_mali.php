<?php
require_once "../inc/functions.inc.php";


if (isset($_GET) && !empty($_GET)) {

} else {
  $joueursmali = joueurmali();
}

$info = "";
require_once "../inc/header.inc.php";

?>
<div class="eQmli">
  <h1 class="fw-bolder fs-1 my-5 mx-5"><span style="color:rgb(37, 113, 76);">ÉQUIPE DU MALI</span> </h1>
</div>


<div>
  <div class="contenaireJoueur row ">

    <?php
    echo $info;

    foreach ($joueursmali as $joueurmali) {
      ?>

      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="<?= RACINE_SITE . "assets/images/equipe-a/" . $joueurmali['image'] ?>" class="card-img-top"
              alt="image articles">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">
                <?= ucfirst($joueurmali['nom']) ?>
              </h5>
              <p class="card-text">
                <?= ucfirst($joueurmali['prenom']) ?>
              </p>
              <p class="card-text">
                <?= ucfirst($joueurmali['datenaissance']) ?>
              </p>
              <p class="card-text">
                <?= ucfirst($joueurmali['position']) ?>
              </p>
              <p class="card-text">
                <?= ucfirst($joueurmali['clubactuel']) ?>
              </p>
              <p class="card-text">
                <?= substr(ucfirst($joueurmali['bio']), 0, 45) . "..." ?>
              </p>

              <a class="btn btn-success w- mx-auto"
                href="showJoueurmali.php?action=show&id=<?= $joueurmali['id'] ?>">PROFIL>>></a>

              <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
      <?php
    }
    ?>


    <?php
    require_once "../inc/footer.inc.php"

      ?>