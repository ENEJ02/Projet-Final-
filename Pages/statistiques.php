<?php
require_once "../inc/functions.inc.php";


$info = "";

if
(isset($_GET) && !empty($_GET)) {

} else {
    $joueurs = allStatistiqueJoueurs();
}

$info = "";
require_once "../inc/header.inc.php";

?>

<button type="button" href="<?= RACINE_SITE ?>" class="btn btn-success m-5">AJOUTER UN STATISTIQUE</button>
<div>
    <div class=" row justify-content-center ">

        <?php
        $joueurs = allStatistiqueJoueurs();
        foreach ($joueurs as $joueur) {
            ?>
            <div class=" m-2 mx-auto joueur">
                <img class="imgJoueur" src="<?= RACINE_SITE . "assets/images/joueur/" . $joueur['image'] ?>"
                    class="card-img-top" alt="image maillot">
                <div class="card-body d-flex flex-column">
                    <h3 class="card-title">
                        <?= ucfirst($joueur['nom']) ?>
                    </h3>
                    <p class="list-group-item">
                        <?= ucfirst($joueur['poste']) ?>
                    </p>
                    <p class="list-group-item">
                        <?= ucfirst($joueur['equipe']) ?>
                    </p>
                    <p style="font-size: large; color: green;">STATS/</p>
                    <p class="sTats list-group-item">

                        <?= substr(ucfirst($joueur['statistique']), 0, 35) . "..." ?>
                    </p>
                    <a class="btn btn-success w- mx-auto"
                        href="showJoueur.php?action=show&id=<?= $joueur['id'] ?>">Lire>>></a>


                </div>
            </div>
            <?php
        }


        if (empty($_GET)) {


            ?>

            <?php

        }
        ?>

    </div>
</div>
<?php
require_once "../inc/footer.inc.php"

?>