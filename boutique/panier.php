<?php
require_once "../inc/functions.inc.php";
require_once "../inc/header.inc.php";
if (!isset($_SESSION['panier'])) {
    $_SESSION["panier"] = array();
}
// if (!isset($_SESSION['user'])) {

//     header("location:" . RACINE_SITE . "authentification.php");
// }
// unset($_SESSION['panier']);
//     debug($_POST);
if (isset($_POST["ajout_panier"])) {
    //debug($_POST);

    $id_produit = htmlentities($_POST['id_produit']);
    $quantity = htmlentities($_POST['quantity']);

    // ***** si il y a pas de "quantity" on va rediriger le visiteur vers un autre page.
    if (!isset($quantity) || empty($quantity)) {

        header("location:" . RACINE_SITE . "showMaillot.php");
    } else {

        //***** si panier est vide on va mettre une tableau vide
        if (!isset($_SESSION['panier'])) {

            $_SESSION["panier"] = array();
        }

        // etat initial pour verifier si une produit est ajouté
        $produit_existe = false;
        foreach($_SESSION['panier'] as $key => $produit) {
            if ($produit['id_produit'] === $id_produit) {

                $_SESSION['panier'][$key]['quantity'] += $quantity;
                $produit_existe = true;
                break;
            }
        }

        // die;
        if (!$produit_existe) {

            $new_produit = array(
                'id_produit' => $id_produit,
                'quantity' => $quantity,
                'title' => $_POST['title'],
                'price' => $_POST['price'],
                'stock' => $_POST['stock'],
                'image' => $_POST['url_image']

            );
            $_SESSION['panier'][] = $new_produit;
            // debug($_SESSION['panier']);

        }
    }
}

if (isset($_GET['id_produit']) && isset($_SESSION['panier'])) {

    $idproduitForDelete = $_GET['id_produit'];

    foreach ($_SESSION['panier'] as $key => $produitpanier) {
        if ($produitpanier['id_produit'] === $idproduitForDelete) {

            unset($_SESSION['panier'][$key]);
            break;
        }
    }
} else if (isset($_GET['vider'])) {

    unset($_SESSION['panier']);
}




// die.



$title = "Panier";

require_once "../inc/header.inc.php";

?>




<div class="panier d-flex justify-content-center" style="padding-top:8rem;">


    <div class="d-flex flex-column  mt-5 p-5">
        <h2 class="text-center fw-bolder mb-5 text-danger">Mon panier</h2>


        <?php
        $info = '';


        if (!isset($_SESSION['panier']) || empty($_SESSION['panier'])) {

            $info = alert("Votre panier est vide", "danger");
            echo $info;
        } else {


        ?>
            <a href="?vider" class="btn align-self-end mb-5">Vider le panier</a>

            <table class="fs-4">
                <tr>
                    <th class="text-center text-danger fw-bolder">Affiche</th>
                    <th class="text-center text-danger fw-bolder">Nom</th>
                    <th class="text-center text-danger fw-bolder">Prix</th>
                    <th class="text-center text-danger fw-bolder">Quantité</th>
                    <th class="text-center text-danger fw-bolder">Sous-total</th>
                    <th class="text-center text-danger fw-bolder">Supprimer</th>
                </tr>

                <?php

                foreach ($_SESSION['panier'] as  $produit) {
                ?>
                    <tr>
                        <td class="text-center border-top border-dark-subtle">
                            <img src="<?= RACINE_SITE . "assets/images/maillot-23-24/"  . $produit['image'] ?>" alt="julius" style="width: 100px;">
                            <?php //debug($produit['url_image'])?>
                        </td>
                        <td class="text-center border-top border-dark-subtle"><?= $produit['title'] ?></td>
                        <td class="text-center border-top border-dark-subtle"><?= $produit['price'] ?>€</td>
                        <td class="text-center border-top border-dark-subtle d-flex align-items-center justify-content-center" style="padding: 7rem;">

                            <?= $produit['quantity'] ?>

                        </td>
                        <td class="text-center border-top border-dark-subtle"><?= $sousTotal = $produit['price'] * $produit['quantity'] ?>€</td>
                        <td class="text-center border-top border-dark-subtle"><a href="?id_produit=<?= $produit['id_produit'] ?>"><i class="bi bi-trash3"></i></a></td>
                    </tr>
                <?php
                }

                ?>
                <tr class="border-top border-dark-subtle">
                    <th class="text-danger p-4 fs-3">Total : <?= $total = calculerMontantTotal($_SESSION['panier']) ?>€</th>
                </tr>



            </table>
            <form action="checkout.php" method="post">
                <input type="hidden" name="total" value="<?= $total ?>">
                <button type="submit" class="btn btn-success mt-5 p-3" id="checkout-button">Payer</button>


            </form>

        <?php

        }
        ?>
    </div>
</div>

<?php
    require_once "../inc/footer.inc.php"

?>