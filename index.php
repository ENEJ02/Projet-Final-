<?php

$title = "Accueil";

require_once "inc/functions.inc.php";


// if (!isset($_SESSION['user'])) {
//     header("location:" . RACINE_SITE . "authentification.php");
// } else {
//     if ($_SESSION['user']['role'] == 'ROLE_USER') {
//         header("location:" . RACINE_SITE . "index.php");
//     }
// }

if
(isset($_GET) && !empty($_GET)) {

} else {
    $articles = ArticleJoueurindex();
}
if
(isset($_GET) && !empty($_GET)) {

} else {
    $produits = indexMaillot();
}

// if (estConnecte() && estAdmin()) {

//     if (isset($_GET['action']) && $_GET['action'] == 'suppression' && isset($_GET['id_article'])) {
//         deleteArticle($_GET['id_article']);

//     }
// }
// $user = $_SESSION['user']['id_user'];
// if ($user['role'] == 'ROLE_ADMIN') {
//     if (!empty($_GET['action']) && $_GET['action'] == 'delete' && !empty($_GET['id'])) {
//         $user = showUser($_GET['id_user']);
//         updateRole('ROLE_USER', $user['id_user']);

//     }
// }


// if (!isset($_SESSION['user'])) {
//     header("location:" . RACINE_SITE . "authentification.php");
// } else {
//     if ($_SESSION['user']['role'] == 'ROLE_USER') {
//         header("location:" . RACINE_SITE . "index.php");
//     }
// }


$info = "";
require_once "inc/header.inc.php";

?>
    <div class="social-icons">


<!-- Début du conteneur pour les icônes des médias sociaux -->
<div class="d-flex justify-content-center">
  <!-- Lien vers la page Facebook -->
  <a href="https://www.facebook.com/monIdentifiantFacebook" target="_blank" rel="noopener noreferrer">
    <!-- Icône Facebook -->
    <i class="fab fa-facebook-f text-white"></i>
  </a>
  <!-- Lien vers la page Instagram -->
  <a href="https://www.instagram.com/monIdentifiantInstagram" target="_blank" rel="noopener noreferrer" class="ml-3">
    <!-- Icône Instagram -->
    <i class="fab fa-instagram text-white"></i>
  </a>
</div>
<!-- Fin du conteneur pour les icônes des médias sociaux -->

<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/images/welcome-img/1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/images/welcome-img/2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/images/welcome-img/3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="BtnInfo">
    <a href="<?= RACINE_SITE ?>pages/boutique.php" class="btn btn-success">MAILLOT</a>
    <a href="<?= RACINE_SITE ?>pages/articles.php" class="btn btn-success">ARTICLE JOUEUR</a>
    <a href="<?= RACINE_SITE ?>pages/les_equipes_du_mali.php" class="btn btn-success">EQUIPES DU MALI</a>
    <a href="<?= RACINE_SITE ?>pages/statistiques.php" class="btn btn-success">STATISTIQUE</a>
    <a href="<?= RACINE_SITE ?>pages/calendrier.php" class="btn btn-success">CALENDRIER</a>
    <button type="button" href="<?= RACINE_SITE ?>galerie.php" class="btn btn-success">GALERIE</button>
</div>
<main class="container">
    
    <div>
        <h1 class="fw-bolder fs-1">TOUTES LES <span style="color:rgb(37, 113, 76);">ACTUALITÉS</span> </h1>
        <div class=" row justify-content-center ">
            <a href="<?= RACINE_SITE ?>pages/ajout-article.php" class="btn btn-danger">AJOUTER ARTICLE</a>

            <?php
            echo $info;
            $articles = ArticleJoueurindex();

            foreach ($articles as $article) {
                ?>
                <div class="card col-12 col-md-4 p-1 my-3">
                    <img src="<?= RACINE_SITE . "assets/images/img-article/" . $article['image'] ?>"
                        class="aRticlimg  card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">
                           
                            <?= $article['titre'] ?>
                        </h5>
                        <p class="card-text">
                            <?= substr(ucfirst($article['contenu']), 0, 20) . "..." ?>
                        </p>

                        <p class="card-text">
                            <?= ucfirst($article['date_publication']) ?>
                        </p>
                        <div>
                            <a href="pages/showArticle.php?action=show&id=<?= $article['id'] ?>"
                                class="btn btn btn-success">Voir
                                l'article</a>
                            <?php
                            echo '<a href="index.php?action=suppression&id_article=' . $article['id'] . 
                            '" class="btn btn-danger" onclick="return(confirm(\'Êtes-vous sûr de vouloir supprimer cet article?\'))">
                            Supprimer l\'article</a>';

                            ?>

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
<a href="<?= RACINE_SITE ?>pages/articles.php" class="btn btn-success">VOIR TOUTES LES ARTICLES</a>
    </div>
    <h1 class="fw-bolder fs-1 my-5 mx-5">EDITION <span style="color:rgb(37, 113, 76);">TEAM OF MALI 2024</span></h1>

    <div class>
        <div class="row justify-content-center ">
            <a href="<?= RACINE_SITE ?>pages/ajout-article.php" class="btn btn-danger">AJOUTER MAILLOT</a>
            <?php
            echo $info;
            $produits = indexMaillot();
            foreach ($produits as $produit) {
                ?>
                <div class="card col-12 col-md-4 p-1 my-3 ">
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
                                href="pages/showMaillot.php?action=show&id=<?= $produit['id'] ?>">Voir>>></a>

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
<a href="<?= RACINE_SITE ?>pages/boutique.php" class="btn btn-success">VOIR TOUTES LES MAILLOTS</a>
</main>



<?php
require_once "inc/footer.inc.php"
?>