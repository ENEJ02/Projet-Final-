<?php

require_once "../inc/functions.inc.php";


// if (!empty($_GET)) {

//     $idproduit = htmlentities($_GET['id']);


// }

// if (isset($_GET['action']) && isset($_GET['id'])) {
if (isset($_GET['id'])) {

    // if (!empty($_GET['action']) && $_GET['action'] == 'update' && !empty($_GET['id'])) {
    if (!empty($_GET['action']) && $_GET['action'] == 'show' && !empty($_GET['id'])) {

        $idproduit = $_GET['id'];
        $produit = showMaillot($idproduit);
    }
} else {
    header("location:" . RACINE_SITE . "index.php");

}

require_once "../inc/header.inc.php";

?>

<main class="mt-5">
    <div class="">

        <div class="back">
            <a href="<?= RACINE_SITE . "index.php" ?>"><i class="bi bi-arrow-left-circle-fill" style="
    padding: 40px;
    color: red;
    "></i>   
            </a>

        </div>
        <div class="cardDetails row mt-5">
            <h1 class="fw-bolder fs-1 my-5 mx-5">EDITION TEAM OF MALI 2024</h1>
            <div class="col-12 col-xl-5 row p-5">
                <?php
                $produit = showMaillot($idproduit);
                ?>
                <img src="<?= RACINE_SITE . "assets/images/maillot-23-24/" . $produit['url_image'] ?>"
                    alt="Affiche Maillot">
                <!--  -->
                <div class="col-12 mt-5">
                    <form action="<?= RACINE_SITE . 'boutique/panier.php' ?>" method="post"
                        enctype="multipart/form-data" class="w-50 m-auto row justify-content-center p-5">

                        <input type="hidden" name="id_produit" value="<?= $produit['id'] ?>">
                        <input type="hidden" name="title" value="<?= $produit['nom'] ?>">
                        <input type="hidden" name="price" value="<?= $produit['prix'] ?>">
                        <input type="hidden" name="stock" value="<?= $produit['stock'] ?>"> 
                        <input type="hidden" name="url_image" value="<?= $produit['url_image'] ?>">
                        <input type="hidden" name="taille" value="<?= $produit['taille'] ?>">



                        <select name="taille" class="form-select form-select-lg mb-3"
                            aria-label="form-select-lg example">

                                <option value="<?= $produit['taille']['s'] ?>">S</option>
                                <option value="<?= $produit['taille']['m'] ?>">M</option>
                                <option value="<?= $produit['taille']['l'] ?>">L</option>
                                <option value="<?= $produit['taille']['xl'] ?>">XL</option>



                        </select>

                        <select name="quantity" class="form-select form-select-lg mb-3"
                            aria-label="form-select-lg example">
                            <?php for ($i = 1; $i <= $produit['stock']; $i++) { ?>

                                <option value="<?= $i ?>"><?= $i ?></option>

                            <?php } ?>


                        </select>

                        <input class="btn btn-outline-success mt-3 w-100" type="submit" value="Ajouter au panier"
                            name="ajout_panier" id="addCart">
                            <!-- <a href="<?//=RACINE_SITE?>boutique/panier.php?id_produit=<?//= $produit['id'] ?>&quantity= ?>">Ajouter</a> -->

                    </form>
                </div>
                <?php
                $produit = showMaillot($idproduit);
                ?>
                <!--  -->
            </div>
            <div class="detailsContent  col-md-7 p-5">
                <div class="container mt-5">
                    <div class="row">
                        <h3 class="col-4"><span>NOM :</span></h3>
                        <ul class="col-8">
                            <li><?= $produit['nom'] ?></li>

                        </ul>
                        <hr>
                    </div>
                    <div class="row">
                        <h3 class="col-4"><span>PRIX :</span></h3>
                        <ul class="col-8">
                            <li> <?= $produit['prix'] ?>€</li>

                        </ul>
                        <hr>
                    </div>
                    <div class="row">
                        <h3 class="col-4"><span>STOCK : </span></h3>
                        <ul class="col-8">
                            <li><?= $produit['stock'] ?></li>

                        </ul>
                        <hr>
                    </div>
                    <div class="row">
                        <h3 class="col-4"><span>ANNÉES : </span></h3>
                        <ul class="col-8">
                            <li><?= $produit['annee'] ?></li>


                        </ul>
                        <hr>
                    </div>
                    <div class="row">
                        <h3 class="col-4"><span>Description:</span></h3>
                        <ul class="col-8">
                            <li><?= $produit['description'] ?></li>

                        </ul>
                        <hr>
                    </div>

                </div>
            </div>
        </div>


    </div>

</main>