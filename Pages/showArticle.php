<?php

require_once "../inc/functions.inc.php";


if (!empty($_GET)) {

    $idarticle = htmlentities($_GET['id']);


}

if (isset($_GET['action']) && isset($_GET['id'])) {

    if (!empty($_GET['action']) && $_GET['action'] == 'update' && !empty($_GET['id'])) {

        $idarticle = $_GET['id'];
        $article = showArticle($idarticle);
    }
} else {
    header("location:" . RACINE_SITE . "");

}

require_once "../inc/header.inc.php";

?>

<div class=" m-2 mx-auto" style="width: 60rem; ">
    <?php
    $article = showArticle($idarticle);
    ?>
    <img class="showArticleimg" src="<?= RACINE_SITE . "assets/images/img-article/" . $article['image'] ?>" class="card-img-top"
        alt="image articles">
    <div class="card-body d-flex flex-column">
        <h3 class="card-title">
            <?= ucfirst($article['titre']) ?>
        </h3>
        <p class="card-text fs-4 ">
            <?= ucfirst($article['contenu'])?>
        </p>

        <p style="font-size: 12px;color: red;">
            <?= ucfirst($article['date_publication']) ?>
        </p>
        <p style="font-size: 12px;">
            <?= ucfirst($article['auteur']) ?>
        </p>


    </div>

</div>

<?php
require_once "../inc/footer.inc.php"
?>