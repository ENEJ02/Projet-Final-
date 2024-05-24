<!-- <div class="welcomeimg">
            <img src="./assets/images/welcome-img/Image_20240323_233204_676.jpeg" class="img-fluid" alt="...">
            <img src="./assets/images/welcome-img/Image_20240323_233204_562.jpeg" class="img-fluid" alt="...">
            <img src="./assets/images/equipe-u21/Image_20240322_223638_109.jpeg" class="img-fluid" alt="...">
            <img src="./assets/images/welcome-img/Image_20240322_223052_921.jpeg" class="img-fluid" alt="...">
            <img src="./assets/images/equipe-u21/Image_20240322_223052_877.jpeg" class="img-fluid" alt="...">
        </div> -->



         <!-- <main>
        <div class="contenaire">
            <div class="articleblog"> -->
                <!-- <h1>ACTUALITÉ</h1> -->
                <!-- <div class="blog-img"> -->
                    <!-- <a href="news.html"><img src="./assets/images/img-article/mlijapon2.jpeg" alt=""></a> -->

                <!-- </div> -->
                <!-- <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div> -->

            <!-- </div> -->

        <!-- </div> -->
    <!-- </main> -->
    <!-- <h1 class="visually-hidden">Sidebars examples</h1>

<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
  <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
    <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
    <span class="fs-4">Sidebar</span>
  </a>
  <hr>
  <ul class="nav nav-pills flex-column mb-auto">
    <li class="nav-item">
      <a href="#" class="nav-link active" aria-current="page">
        <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"/></svg>
        Home
      </a>
    </li>
    <li>
      <a href="#" class="nav-link text-white">
        <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
        Dashboard
      </a>
    </li>
    <li>
      <a href="#" class="nav-link text-white">
        <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"/></svg>
        Orders
      </a>
    </li>
    <li>
      <a href="#" class="nav-link text-white">
        <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
        Products
      </a>
    </li>
    <li>
      <a href="#" class="nav-link text-white">
        <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
        Customers
      </a>
    </li> -->
  <!-- </ul>


foreach ($joueurs as $joueur) {
                ?>

                <div class=" m-2 mx-auto" style="width: 20rem;">
                    <img src="<?= RACINE_SITE . "assets/images/maillot-23-24/" . $joueur['image'] ?>"
                        class="card-img-top" alt="image maillot">
                    <div class="card-body d-flex flex-column">
                        <h3 class="card-title">
                        <?= ucfirst($joueur['nom']) ?>
                        </h3>
                        <p class="list-group-item">
                            <?= substr(ucfirst($joueur['poste']), 0, 45) . "..." ?>
                        </p>
                        <p class="list-group-item">
                            <?= ucfirst($joueur['equipe']) ?>
                        </p>
                        <p class="list-group-item" >
                            <?= ucfirst($joueur['biographie']) ?>
                        </p>
                        
                    </div>
                </div>
                <?php
                
            // }
            // ?>





























<main>

    <div>

        <h1 class="fw-bolder fs-1 my-5 mx-5">ARTICLES</h1>
        <div class>
            <div class="row"
             <!-- style="
    box-shadow: 9px 10px 5px -5px rgba(0,0,0,0.42);"

    <?php
                echo $info;

                foreach ($articles as $article) {
                    ?>

                    <div class=" m-2 mx-auto" style="width: 20rem;
                    box-shadow: 0px 0px 20px -5px rgba(0,0,0,0.56);
-webkit-box-shadow: 0px 0px 20px -5px rgba(0,0,0,0.56);
-moz-box-shadow: 0px 0px 20px -5px rgba(0,0,0,0.56); */via cssgenerator.org*/

                    ">
                        <img src="<?= RACINE_SITE . "assets/images/img-article/" . $article['image'] ?>"
                            class="card-img-top" alt="image articles">
                        <div class="card-body d-flex flex-column">
                            <h3 class="card-title">
                                <?= ucfirst($article['titre']) ?>
                            </h3>
                            <p class="card-text fs-4 ">
                                <?= substr(ucfirst($article['contenu']), 0, 65) . "..." ?>
                            </p>
                            <a class="btn btn-success w- mx-auto" href="showArticle.php?action=show&id=<?=$article['id']?>">Lire>>></a>                            <p style="font-size: 12px;color: red;">
                                <?= ucfirst($article['date_publication']) ?>
                            </p>
                            <p style="font-size: 12px;">
                                <?= ucfirst($article['auteur']) ?>
                            </p>


                        </div>

                    </div>

                    <?php
                }


                if (empty($_GET)) {


                    ?>

                    <div class="col-12 text-center ">
                        <!-- <a href="<?= RACINE_SITE ?>index.php?voirplus" class="btn p-4 fs-3">Voir plus</a> -->
                    </div>


                    <?php

                }
                ?>

            </div>
        </div>
        <h1 class="fw-bolder fs-1 my-5 mx-5">LES MATCHS A VENIR</h1>
    </div>
    <div class="m-2 mx-auto" style="
    width: 390px;
    display: flex;
    justify-content: center;
    padding: 10px;">
        <img src=" assets/images/equipe-u21/Image_20240322_223052_877.jpeg" style="
    padding: 40px;" alt="" srcset="">
        <img src=" assets/images/matchavenir/1.jpg" style="
    padding: 20px;" alt="" srcset="">
        <img src=" assets/images/equipe-u21/Image_20240322_223638_109.jpeg" style="
    padding: 40px;" alt="" srcset="">
    </div>
    <h1 class="fw-bolder fs-1 my-5 mx-5">EDITION TEAM OF MALI 2024</h1>
    <div 
    style="
    width: 1000px;
    margin: auto;
" 
    >
        <div class="row">

            <?php
            echo $info;

            foreach ($produits as $produit) {
                ?>

                <div class="col-md-4 col-sm-12 m-2 mx-auto" style="width: 20rem; ">
                    <img src="<?= RACINE_SITE . "assets/images/maillot-23-24/" . $produit['url_image'] ?>"
                        class="card-img-top" alt="image maillot">
                    <div class="card-body d-flex flex-column">
                        <h3 class="card-title">
                            <?= ucfirst($produit['nom']) ?>
                        </h3>
                        <p class="card-text fs-4 ">
                            <?= substr(ucfirst($produit['description']), 0, 45) . "..." ?>
                        </p>
                        <p class="prixStock" style="font-size: xx-large;">
                            <?= ucfirst($produit['prix']) ?>€ Prix
                        </p>
                        <p class="prixStock" style="font-size: 15px;color: green;">
                            <?= ucfirst($produit['stock']) ?> Stock
                        </p>
                        <a class="btn btn-success w- mx-auto" href="showMaillot.php?action=show&id=<?=$produit['id']?>">Voir>>></a>
                    </div>
                </div>
                <?php

            }
            ?>
        </div>
    </div>

    <h1 class="fw-bolder fs-1 my-5 mx-5">JOUEUR STATISTIQUE</h1>

    <div style="
    width: 1000px;
    margin: auto;
">
        <div class="row">

            <?php
            echo $info;

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
                        <p class="list-group-item">
                            <?= ucfirst($joueur['statistique']) ?>
                        </p>
                        <p style="font-size: large; color: green;">BIOGRAPHIE</p>
                        <p class="list-group-item">
                            <?= substr(ucfirst($joueur['biographie']), 0, 35) . "..." ?>
                        </p>
                        <a class="btn btn-success w- mx-auto" href="showJoueur.php?action=show&id=<?=$joueur['id']?>">Lire>>></a>


                    </div>
                </div>
                <?php


            }

            ?>
        </div>
    </div>

</main>

<?php
require_once "inc/footer.inc.php"
?>





















//////// section siedbar/////
<!-- 
  
<section class="grille-actu-all grille-actu-editorial container actu4-chrono bg_aplat_white module-spacing-40">





    <div class="row small_12 medium_12 large_12">
        <div class="flex flex_jc_between margin_b20 column flex_wrap">
            <h1 class="uppercase bleu_fonce font_42 font_hero title bold title--boutique">
                TOUTES LES <span style="color: #cdae72;">ACTUALITÉS</span>
                <a href="" class="fast-link fast-link--billetterie fast-link-arrow bold hide-phone"> Voir toutes les
                    actualités </a>

            </h1>

        </div>
    </div>

    <?php
    echo $info;

    foreach ($articles as $article) {
        ?>

        <div class="flex flex_wrap flex_jc_around">
            <div class="flex flex_jc_start margin_b30 small_12 medium_9 full-width-under-1024 flex_wrap container_margin">
                <img class="bouTiqueimg" src="<?= RACINE_SITE . "assets/images/img-article/" . $article['image'] ?>"
                    class="card-img-top" alt="image articles">
            </div>
            <div>
                <h3 class="always-12 little-6 inline_block column article-grid tab_vert-4">
                    <?= ucfirst($article['titre']) ?>
                </h3>
            </div>
            <p class="always-12 little-6 inline_block column article-grid tab_vert-4">
                <?= substr(ucfirst($article['contenu']), 0, 65) . "..." ?>
            </p>
            <a class="btn btn-success w- mx-auto" href="showArticle.php?action=show&id=<?= $article['id'] ?>">Lire>>></a>
            <?= ucfirst($article['date_publication']) ?>
            <p style="font-size: 12px;">
                <?= ucfirst($article['auteur']) ?>
            </p>


        </div>

       

        <?php
    }
    ?>
    <?php
    $article = showArticle($idarticle);
    ?>
 <div class="column column height100_chrono small_12 medium_12 large_3 fil-info" >
                      <div class="top_chrono flex flex_jc_between flex_column side_wrapperChrono" >
                        <header class="title_chrono uppercase flex flex_ai_center font_hero flex_jc_between" > Fil d'infos </header>
                        <div class="container_elem_carousel bleu_fonce font_12 container_chrono" >
                          <a class="item_chrono-link" href="">
                            <div class="flex small_8 item-chrono__date-subtitle" >
                            <?= ucfirst($article['date_publication']) ?>
                            </div>
                          </a>

                        </div>

                      </div>

                    </div>






</section>
 -->



 <nav class="navbar navbar-expand-lg">
            

            <ul>

                <li><a href="index.php">ACCUEIL</a></li>
                <li><a href="boutique.php">BOUTIQUE</a></li>

                <li class="bg-transparent">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        NEWS
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="les-equipes-du-mali.php">LES EQUIPES DU MALI</a></li>
                        <li><a class="dropdown-item" href="articles.php">LES ARTICLES</a></li>
                    </ul>

                </li>




                <li><a href="supporters.php">SUPPORTERS</a></li>
                <li class="bg-transparent">
                    <a class=" dropdown-toggle" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        INFOS
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="qui-sommes-nous.php">QUI-SOMMES-NOUS</a></li>
                        <li><a class="dropdown-item" href="contact.php">CONTACT</a></li>


                    </ul>
                </li>

            </ul>

        </nav> 



        ////////////premier ajout article///////


         <!-- <div class="ContenaireArticle">
                        <img src="<?= RACINE_SITE . "assets/images/img-article/" . $article['image'] ?>"
                            class=" aRticlimg card-img-top" alt="image articles">
                        <div class="card-body d-flex flex-column">
                            <h3 class="card-title">
                            <?= ucfirst($article['titre']) ?>
                            </h3>
                            <p class="card-text fs-4 ">
                                <?= substr(ucfirst($article['contenu']), 0, 35) . "..." ?>
                            </p>
                            <a class="btn btn-success w- mx-auto"
                                href="showArticle.php?action=show&id=<?= $article['id'] ?>">Lire la suite>>></a>
                            <p style="font-size: 12px;color: red;">
                                <?= ucfirst($article['date_publication']) ?>
                            </p>
                            <p style="font-size: 12px;">
                                <?= ucfirst($article['auteur']) ?>
                            </p>


                        </div>

                    </div> -->

                    //////// BOUTIQUE/////
                    <!-- <div style="
    width: 1000px;
    margin: auto;
">
        <div class="row">

            <?php
            echo $info;

            foreach ($produits as $produit) {
                ?>

                <div class="col-md-4 col-sm-12 m-2 mx-auto" style="width: 20rem; ">
                    <img src="<?= RACINE_SITE . "assets/images/maillot-23-24/" . $produit['url_image'] ?>"
                        class="card-img-top" alt="image maillot">
                    <div class="card-body d-flex flex-column">
                        <h3 class="card-title">
                            <?= ucfirst($produit['nom']) ?>
                        </h3>
                        <p class="card-text fs-4 ">
                            <?= substr(ucfirst($produit['description']), 0, 45) . "..." ?>
                        </p>
                        <p class="prixStock" style="font-size: xx-large;">
                            <?= ucfirst($produit['prix']) ?>€ Prix
                        </p>
                        <p class="prixStock" style="font-size: 15px;color: green;">
                            <?= ucfirst($produit['stock']) ?> Stock
                        </p>
                        <a class="btn btn-success w- mx-auto"
                            href="showMaillot.php?action=show&id=<?= $produit['id'] ?>">Voir>>></a>
                    </div>
                </div>
                <?php

            }
            ?>
        </div>
    </div> -->
<!-- <h1 class="fw-bolder fs-1 my-5 mx-5">WELCOME</h1>
<iframe width="1560" height="915" src="assets/video/welcome.mp4" frameborder="0" allow="accelerometer; autoplay;
 clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen 
 style="
    background: black;
    margin: auto;
 ">
 </iframe> -->