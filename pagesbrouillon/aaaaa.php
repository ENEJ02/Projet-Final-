<main>

    <div class="bGimag">
        <div class="welcomeimg">

            <img src="assets/images/welcome-img/Image_2.jpeg" alt="" srcset="">
            <img src="assets/images/welcome-img/Image_202.jpeg" alt="" srcset="">
            <img src="assets/images/welcome-img/Image_2024.jpeg" alt="" srcset="">
            <img src="assets/images/welcome-img/Image_.jpeg" alt="" srcset="">


        </div>


        <h1 class="fw-bolder fs-1 my-5 mx-5">TOUTES LES <span style="color:rgb(37, 113, 76);">ACTUALITÉS</span> </h1>

        <div>
            <div class=" row justify-content-center ">

                <?php
                echo $info;
                $articles = allArticles();
                foreach ($articles as $article) {
                    ?>
                    <div class="card col-md-3 col-sm-12 justify-content-center align-items-center pt-5 m-2">
                        <img src="<?= RACINE_SITE . "assets/images/img-article/" . $article['image'] ?>"
                            class="aRticlimg  card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?= ucfirst($article['titre']) ?>
                            </h5>
                            <p class="card-text">
                                <?= ucfirst($article['date_publication']) ?>
                            </p>
                            <div>
                                <a href="showArticle.php?action=show&id=<?= $article['id'] ?>"
                                    class="btn btn btn-success">Voir l'article</a>
                                <?php 
                                    echo '<a href="index.php?action=suppression&id_article=' . $article['id'] . '" class="btn btn-danger" onclick="return(confirm(\'Êtes-vous sûr de vouloir supprimer cet article?\'))">Supprimer l\'article</a>';
                                
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
        </div>
        <h1 class="fw-bolder fs-1 my-5 mx-5">LES MATCHS <span style="color:rgb(37, 113, 76);">A VENIR</span>
        </h1>
    </div>
    <div class="aVenirMatchimg m-2 mx-auto">
        <img class="Img1avenir" src=" assets/images/equipe-u21/Image_20240322_223052_877.jpeg" alt="" srcset="">
        <img class="Img2avenir" src=" assets/images/matchavenir/1.jpg" alt="" srcset="">
        <img class="Img3avenir" src=" assets/images/equipe-u21/Image_20240322_223638_109.jpeg" alt="" srcset="">
    </div>
    <h1 class="fw-bolder fs-1 my-5 mx-5">EDITION <span style="color:rgb(37, 113, 76);">TEAM OF MALI 2024</span></h1>
    <div class>
        <div class="row justify-content-center ">

            <?php
            echo $info;
            $produits = allProduits();
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
    <h1 class="fw-bolder fs-1 my-5 mx-5">JOUEUR <span>STATISTIQUE</span> </h1>

    <div style="
    width: 1000px;
    margin: auto;
">
        <div class="row">

            <?php
            echo $info;
            $joueurs = allJoueurs();
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

            ?>
        </div>
    </div>












</main>







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



////////////////////////header
<header>

<div class="plan1">
  <div class="sousnav">
    <a href="inscription.php"><i class="bi bi-person"></i></a>
    <?php if (empty($_SESSION['user'])) { ?>
      <a class="" href="<?= RACINE_SITE ?>pages/authentification.php">Se Connecter</a>


    <?php } else { ?>
      <a class="" href="?action=deconnexion">Deconnexion</a>
      <?php
    }
    ?>



    <a href="panier.php"><i class="bi bi-cart3"></i></a>

  </div>
</div>
<a class="logo" href="index.php">
  <img src="assets/images/logo/logo-png.png" alt="">
</a>
<nav class="navbar navbar-expand-lg ">
  
  <div class="container-fluid">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="<?= RACINE_SITE ?>index.php">ACCUEIL</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/boutique.php">BOUTIQUE</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          NEWS
        </a>
        <ul class="dropdown-menu">

          <li><a class="dropdown-item" href="<?= RACINE_SITE ?>pages/les_equipes_du_mali.php">LES EQUIPES DU
              MALI</a></li>
          <li><a class="dropdown-item" href="<?= RACINE_SITE ?>pages/articles.php">LES ARTICLES</a></li>
          <li><a class="dropdown-item" href="<?= RACINE_SITE ?>pages/statistiques.php">STATISTIQUES</a></li>
          <li><a class="dropdown-item" href="<?= RACINE_SITE ?>pages/calendrier.php">CALENDRIER</a></li>
          <li><a class="dropdown-item" href="<?= RACINE_SITE ?>pages/galerie.php">GALERIE</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          INFOS
        </a>
        <ul class="dropdown-menu">

          <li><a class="dropdown-item" href="<?= RACINE_SITE ?>pages/qui-sommes-nous.php">QUI-SOMMES-NOUS</a></li>
        </ul>
      </li>


  </div>
</nav>
</header>