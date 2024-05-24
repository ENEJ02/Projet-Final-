<?php
require_once "../inc/functions.inc.php";



if
(isset($_GET) && !empty($_GET)) {
    
    
    $articles = allArticles();
}


if (isset($_GET['action']) && $_GET['action'] == 'suppression' && isset($_GET['id'])) {
    deleteArticle($id) ;
    
}

require_once "../inc/header.inc.php";
?>
     <h1 class="fw-bolder fs-1 my-5 mx-5">TOUTES LES <span style="color:rgb(37, 113, 76);">ACTUALITÉS</span> </h1>
    <button type="button" href="<?= RACINE_SITE ?>" class="btn btn-success">AJOUTER ARTICLE</button>
    <div>
        <div class=" row justify-content-center ">

            <?php
            
            $articles = allArticles();

            foreach ($articles as $article) {
                ?>
                <div class="card col-12 col-md-4 p-1 my-3">
                    <img src="<?= RACINE_SITE . "assets/images/img-article/" . $article['image'] ?>"
                        class="aRticlimg  card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">
                            <!-- <?//= ucfirst($article['titre']) ?> -->
                            <?= $article['titre'] ?>
                        </h5>
                        <p class="card-text">
                            <?= ucfirst($article['date_publication']) ?>
                        </p>
                        <div>
                            <a href="showArticle.php?action=show&id=<?= $article['id'] ?>" class="btn btn btn-success">Voir
                                l'article</a>
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

<?php
require_once "../inc/footer.inc.php"

?>