<?php

require_once "../inc/functions.inc.php";

if( !isset($_SESSION['user'])){
    header("location:".RACINE_SITE."authentification.php");
}else{
    if($_SESSION['user']['role'] == 'ROLE_USER'){
        header("location:".RACINE_SITE."index.php");
    }
}

// if (isset($_GET['action']) && isset($_GET)) {

//     if (!empty($_GET['action']) && $_GET['action'] == 'update' && !empty($_GET['id'])) {

//         $id_article = $_GET['id'];
//         $article = showArticle($idarticle);
//     }
// }
if (isset($_GET['action']) && isset($_GET)) {

    if (!empty($_GET['action']) && $_GET['action'] == 'update' && !empty($_GET['id'])) {

        $id_article = $_GET['id'];
        $article = showArticle($idarticle);
    }
}

// ************************************************




$title = "Article";
// require_once "inc/header.inc.php";
// echo "sjdtvfrbysgtuhyiju";
?>

<main>

    <div class="d-flex flex-column m-auto mt-5">

        <h2 class="text-center fw-bolder mb-5 text-danger">Liste des Article</h2>
        <a href="gestionFilms.php" class="btn btn-primary p-3 fs-3 align-self-end "> Ajouter un Article</a>
        <table class="table table-dark table-bordered mt-5 ">
            <thead>
                <tr>
                    
                    <th>ID</th>
                    <th>Titre</th>
                    <th>Affiche</th>
                    <th>Contenu</th>
                    <th>Auteur</th>
                    <th>Date de publication</th>
                    <th>Supprimer</th>
                    <th> Modifier</th>
                </tr>
            </thead>
            <tbody>
            <?php

$articles =showAllArticle();

foreach($articles as $article){


?>
                <tr>

                    <!-- Je récupére les valeus de mon tabelau $article dans des td -->
                    <td><?=$article['id']?></td>
                    <td><?=ucfirst($article['titre'])?></td>

                    <td> <img src=" <?= RACINE_SITE."assets/images/img-article/".$article['image']?> " alt="" class="img-fluid"> </td>
                    <!-- <td> <?=ucfirst($article[''])?></td> -->
                    <td><?=substr(ucfirst($article['contenu']),0,100)."..."?></td>
                    <td><?=ucfirst($article['date_publication'])?></td>
                    <td><?=ucfirst($article['auteur'])?></td>
                    
                 
                    <td class="text-center"><a href="gestionFilms.php?action=delete&id_film=<?= $film['id_film']?>"><i class="bi bi-trash3-fill text-danger"></i></a></td>

                    <td class="text-center"><a href="gestionFilms.php?action=update&id_film=<?= $film['id_film']?>"><i class="bi bi-pen-fill"></i></a></td>

                </tr>
<?php
}
?>

            </tbody>


        </table>


    </div>

</main>

<?php
require_once "../inc/footer.inc.php";
?>


