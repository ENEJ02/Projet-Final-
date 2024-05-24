<?php
// Inclusion des fichiers 
require_once "../inc/functions.inc.php";

$info='';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titre = $_POST['titre'];
    $contenu = $_POST['contenu'] ?? '';
    $date_publication = $_POST['$date_publication'] ?? '';
    $auteur = $_POST['auteur'] ?? '';
    $image = $_POST['image'] ?? '';
    
    addAnnonce($titre, $contenu, $date_publication, $auteur, $image);
    $info = "<p class='text-center fs-4 text-success'>Bravo L'article est bien ajouté.</p>";
    
}

require_once "../inc/header.inc.php";
// var_dump($_POST);
?>

<main class="container">

    <section class="row">
<?= $info ?>
    
    <div class="container">
    <form method="post" enctype="multipart/form-data" class="border rounded p-4 bg-success">
        <div class="form-group mb-3">
            <label for="titre" class="form-label fw-bold">Titre :</label>
            <input type="text" class="form-control" name="titre" id="titre" placeholder="Entrez le titre ici">
        </div>
        <div class="form-group mb-3">
            <label for="contenu" class="form-label fw-bold ">Contenu :</label>
            <textarea class="form-control" name="contenu" id="contenu" rows="5" placeholder="Entrez le contenu ici"></textarea>
        </div>
        <div class="form-group mb-3">
            <label for="date_publication" class="form-label fw-bold ">Date de publication :</label>
            <input type="date" class="form-control" name="date_publication" id="date_publication">
        </div>
        <div class="form-group mb-3">
            <label for="auteur" class="form-label fw-bold">Auteur :</label>
            <input type="text" class="form-control" name="auteur" id="auteur" placeholder="Entrez le nom de l'auteur ici">
        </div>
        <div class="form-group mb-3">
            <label for="image" class="form-label fw-bold">Image :</label>
            <input type="file" class="form-control" name="image" id="image">
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
</div>





        
    </section>
</main>



<?php
    require_once "../inc/footer.inc.php"

?>

