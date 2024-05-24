<?php


require_once "../inc/functions.inc.php";

// Si l'utilisateur est déjà connecté, il pourras pas avoir accés à la page d'inscription
if (!empty($_SESSION['user'])) {

    header("location:" . RACINE_SITE . "profil.php");
}

// echo "<br><br><br><br><br>";




$year1 = ((int) date('Y')) - 12; // 2012
$month = (date('m'));
$date = (date('d'));
// date limite supèrieure
$dateLimitSup = $year1 . "-" . $month . "-" . $date;
// date limite infèrieur
$year2 = ((int) date('Y')) - 90;
$dateLimitInf = $year2 . "-" . $month . "-" . $date;

$info = '';

if (!empty($_POST)) // l'envoi du Formulaire (button "S'inscrire" ) 
{
    // debug($_POST);

    $verif = true;

    foreach ($_POST as $value) {
        $firstName = isset($_POST['firstName']) ? $_POST['firstName'] : null;
        $lastName = isset($_POST['lastName']) ? $_POST['lastName'] : null;
        $pseudo = isset($_POST['pseudo']) ? $_POST['pseudo'] : null;
        $email = isset($_POST['email']) ? $_POST['email'] : null;
        $mdp = isset($_POST['mdp']) ? $_POST['mdp'] : null;
        $confirmMdp = isset($_POST['confirmMdp']) ? $_POST['confirmMdp'] : null;

        if (strlen($firstName) < 2 || preg_match('/[0-9]+/', $firstName)) {

            $info = alert("Le prénom n'est pas valide.", "danger");
        }

        if (strlen($lastName) < 2 || preg_match('/[0-9]+/', $lastName)) {

            $info .= alert("Le nom n'est pas valide.", "danger");
        }

        if (strlen($pseudo) < 2) {

            $info .= alert("Le pseudo n'est pas valide.", "danger");
        }

        if (strlen($mdp) < 5 || strlen($mdp) > 15) {

            $info .= alert("Le mot de passe n'est pas valide.", "danger");
        }
        if ($mdp !== $confirmMdp) {

            $info .= alert("Le mot de passe et la confirmation doivent être identique.", "danger");
        }


        if (strlen($email) > 50 || !filter_var($email, FILTER_VALIDATE_EMAIL)) {

            $info .= alert("L'email n'est pas valide.", "danger");
        }


        if (empty($info)) {

            $emailExist = checkEmailUser($email);
            $pseudoExist = checkPseudoUser($pseudo);


            if ($emailExist || $pseudoExist) {

                $info = alert("Vous avez déjà un compte", "danger");
                // ***************** REDIRECTION "authentification.php"



            } else if ($mdp !== $confirmMdp) {

                $info .= alert("Le mot de passe et la confirmation doivent être identiques.", "danger");
            } else {

                $mdp = password_hash($mdp, PASSWORD_DEFAULT);

                inscriptionUsers($firstName, $lastName, $pseudo, $email, $mdp, );

                $info = alert('Vous êtes bien inscrit, vous pouvez vous connectez !', 'success');
            }
        }
    }
} else {
    // debug($_POST);
    // echo 'Non SUBMIT';
}
require_once "../inc/header.inc.php";


?>

<main class="pt-5">

    <div class="w-75 m-auto p-5">
        <h2 class="text-center p-3 mb-5">Créer un compte</h2>

        <?php

        echo $info;

        ?>

<!-- Début du formulaire -->
<form action="" method="post" class="formInscription p-5 ">
    <!-- Première ligne pour le nom et le prénom -->
    <div class="form-group row mb-5 justify-content-center">
        <div class="col-md-6 mb-4">
            <!-- Label pour le nom -->
            <label for="lastName" class="form-label mb-3 text-white text-center">Nom</label>
            <!-- Champ pour le nom -->
            <input type="text" class="form-control fs-5" id="lastName" name="lastName" placeholder="Entrez votre nom">
        </div>
        <div class="col-md-6 mb-4">
            <!-- Label pour le prénom -->
            <label for="firstName" class="form-label mb-3 text-white text-center">Prénom</label>
            <!-- Champ pour le prénom -->
            <input type="text" class="form-control fs-5" id="firstName" name="firstName" placeholder="Entrez votre prénom">
        </div>
    </div>

    <!-- Deuxième ligne pour le pseudo et l'email -->
    <div class="form-group row mb-5 justify-content-center">
        <div class="col-md-4 mb-4">
            <!-- Label pour le pseudo -->
            <label for="pseudo" class="form-label mb-3 text-white text-center">Pseudo</label>
            <!-- Champ pour le pseudo -->
            <input type="text" class="form-control fs-5" id="pseudo" name="pseudo" placeholder="Entrez votre pseudo">
        </div>
        <div class="col-md-4 mb-4">
            <!-- Label pour l'email -->
            <label for="email" class="form-label mb-3 text-white text-center">Email</label>
            <!-- Champ pour l'email -->
            <input type="email" class="form-control fs-5" id="email" name="email" placeholder="Entrez votre email">
        </div>
    </div>

    <!-- Troisième ligne pour le mot de passe et la confirmation du mot de passe -->
    <div class="form-group row mb-5 justify-content-center">
        <div class="col-md-6 mb-4">
            <!-- Label pour le mot de passe -->
            <label for="mdp" class="form-label mb-3 text-white text-center">Mot de passe</label>
            <!-- Champ pour le mot de passe -->
            <input type="password" class="form-control fs-5" id="mdp" name="mdp" placeholder="Entrez votre mot de passe">
        </div>
        <div class="col-md-6 mb-4">
            <!-- Label pour la confirmation du mot de passe -->
            <label for="confirmMdp" class="form-label mb-3 text-white text-center">Confirmation mot de passe</label>
            <!-- Champ pour la confirmation du mot de passe -->
            <input type="password" class="form-control fs-5" id="confirmMdp" name="confirmMdp" placeholder="Confirmez votre mot de passe">
            <!-- Checkbox pour afficher/masquer le mot de passe -->
            <input type="checkbox" onclick="showPass()"><span class="text-danger">Afficher/masquer le mot de passe</span>
        </div>
    </div>

    <!-- Bouton pour soumettre le formulaire -->
    <div class="form-group row mt-5 justify-content-center">
        <button class="w-25 btn btn-success btn-lg fs-5 bg-warning" type="submit">S'inscrire</button>
    </div>
    <!-- Lien pour se connecter si l'utilisateur a déjà un compte -->
    <div class="form-group row mt-5 justify-content-center">
        <p class="text-center text-white">Vous avez déjà un compte ! <a href="authentification.php" class="text-danger">Connectez-vous ici</a></p>
    </div>
</form>
<!-- Fin du formulaire -->
    </div>


</main>


<!-- 
<?php
require_once "../inc/footer.inc.php";

?> -->