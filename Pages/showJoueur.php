<?php

require_once "../inc/functions.inc.php";


if (isset($_GET['action']) && isset($_GET['id'])) {

    if (!empty($_GET['action']) && $_GET['action'] && !empty($_GET['id'])) {
        $idjoueur = $_GET['id'];
    $joueur = showJoueur($idjoueur);
       
    }  
} else {
    header("location:" . RACINE_SITE . "index.php");

}

require_once "../inc/header.inc.php";

?>

<div class="showJoueurimg">
   
    <img src="<?= RACINE_SITE . "assets/images/joueur/" . $joueur['image'] ?>" class="card-img-top"
        alt="image articles">
    <div class="card-body d-flex flex-column">
        <h3 class="card-title">
            <?= ucfirst($joueur['nom']) ?>
        </h3>
        <p class="card-text fs-4 ">
            <?= ucfirst($joueur['poste'])?>
        </p>

        <p style="font-size: 12px;color: red;">
            <?= ucfirst($joueur['equipe']) ?>
        </p>
        <p style="font-size: 12px;">
            <?= ucfirst($joueur['statistique']) ?>
        </p>
        <!-- <p style="font-size: 12px;">
            <?= ucfirst($joueur['biographie']) ?>
        </p> -->


    </div>

</div>

<?php
require_once "../inc/footer.inc.php"
?>