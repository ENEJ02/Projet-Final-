<?php

require_once "../inc/functions.inc.php";




$info = '';

if (!empty($_POST)) {
    // debug($_POST);

    $verif = true;

    foreach ($_POST as $value) {


        if (empty($value)) {

            $verif = false;
        }
    }

    if (!$verif) {
        debug($_POST);


        $info = alert("Veuillez renseigner tout les champs", "danger");
    } else {

        // debug($_POST);
        $pseudo = isset($_POST['pseudo']) ? $_POST['pseudo'] : null;
        $email = isset($_POST['email']) ? $_POST['email'] : null;
        $mdp = isset($_POST['mdp']) ? $_POST['mdp'] : null;

        $user = checkUser($email, $pseudo);
        // defbug($user);

        if ($user) {

            if (password_verify($mdp, $user['mdp'])) {
                //"password_verify()" va uniquement verifier mdp hashé!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
                // si le mdp n'est pas hashé, il faut utiliser "  $mdp === $_POST['mdp]
                
                $mdp === $_POST['mdp'];
                $_SESSION['user'] = $user;

                header("location:" . RACINE_SITE . "profil.php");
            } else {
                $info = alert("Les identifiants sont incorrectes", "danger");
            }
        }

       




    }
}

$title = "Authentification";
require_once "../inc/header.inc.php";
?>

<main class="pt-5 mt-5">

    <div class="w-75 m-auto p-5">
        <h2 class=" text-center p-3 mb-5 bg-success">Connexion</h2>

        <?php

        echo $info;

        ?>

<form action="" method="post" class="p-5 rounded bg-success">
    <div class="row mb-4">
        <div class="col-12">
            <label for="pseudo" class="form-label text-white mb-2">Pseudo</label>
            <input type="text" class="form-control form-control-lg" id="pseudo" name="pseudo" placeholder="Entrez votre pseudo">
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-12">
            <label for="email" class="form-label text-white mb-2">Email</label>
            <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="Entrez votre email">
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-12">
            <label for="mdp" class="form-label text-white mb-2">Mot de passe</label>
            <div class="input-group">
                <input type="password" class="form-control form-control-lg" id="mdp" name="mdp" placeholder="Entrez votre mot de passe">
                
            </div>
            <div class="form-check mt-2">
                <input type="checkbox" class="form-check-input" id="showPasswordCheckbox" onclick="showPass()">
                <label class="form-check-label text-white" for="showPasswordCheckbox">Afficher/masquer le mot de passe</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-center">
            <button class="btn btn-success btn-lg px-5" type="submit">Se connecter</button>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-12 text-center">
            <p class="text-white">Vous n'avez pas encore de compte ! <a href="inscription.php" class="text-danger">Créer un compte ici</a></p>
        </div>
    </div>
</form>


    </div>


</main>
<?php
require_once "../inc/footer.inc.php"
?>




