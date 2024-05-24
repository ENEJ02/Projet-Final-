<?php
require_once "../inc/functions.inc.php";


$info = "";

if
(isset($_GET) && !empty($_GET)) {

} else {
    $produits = allProduits();
}

require_once "../inc/header.inc.php";
    


?>
<h1 class="fw-bolder fs-1 my-5 mx-5">EDITION <span style="color:rgb(37, 113, 76);">TEAM OF MALI 2024</span></h1>
<button type="button" href="<?= RACINE_SITE ?>" class="btn btn-success">AJOUTER MAILLOT</button>

    <div class>
            <div class="row justify-content-center ">

                <?php
                echo $info;

                foreach ($produits as $produit) {
                    ?>
                    <div class="card col-md-3 col-sm-12 justify-content-center align-items-center pt-5 m-2">
                        <img src="<?= RACINE_SITE . "assets/images/maillot-23-24    /" . $produit['url_image'] ?>"
                            class="aRticlimg  card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?= ucfirst($produit['nom']) ?>
                            </h5>
                            <p class="card-text">
                            <?= substr(ucfirst($produit['description']), 0, 45) . "..." ?>
                            </p>
                            <p class="price card-text">
                                <?= ucfirst($produit['prix']) ?>€ Prix
                            </p>
                            <p class="price card-text">
                                <?= ucfirst($produit['stock']) ?> Stock
                            </p>
                            <div>
                            <a class="btn btn-success w- mx-auto"
                            href="showMaillot.php?action=show&id=<?= $produit['id'] ?>">Voir>>></a>

                            </div>
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
    </div>

    <?php
    require_once "../inc/footer.inc.php"

        ?>