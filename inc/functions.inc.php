<!-- Fichier qui contient les fonctions php à utiliser dans notre site -->
<?php

session_start();

define("RACINE_SITE", "/PROJET-FINAL-JULIUS/"); // constante qui définit les dossiers dans lesquels se situe le site pour pouvoir déterminer des chemin absolus à partir de localhost (on ne prend pas locahost). Ainsi nous écrivons tous les chemins (exp : src, href) en absolus avec cette constante.


///////////////////////////// Fonction de débugage //////////////////////////

function debug($var)
{

    echo '<pre class="border border-dark bg-light text-primary w-50 p-3">';

    var_dump($var);

    echo '</pre>';
}


////////////////////// Fonction d'alert ////////////////////////////////////////

function alert(string $contenu, string $class)
{

    return "<div class='alert alert-$class alert-dismissible fade show text-center w-50 m-auto mb-5' role='alert'>
        $contenu

            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>

        </div>";
}

///////////////////////////// Fonction de déconnexion/////////////////////////

function logOut()
{

    if (isset($_GET['action']) && !empty($_GET['action']) && $_GET['action'] == 'deconnexion') {


        unset($_SESSION['user']);
        // On supprime l'indice "user " de la session pour se déconnecter // cette fonction détruit les variables  stocké  comme 'firstName' et 'email'.

        //session_destroy(); // Détruit toutes les données de la session déjà  établie . cette fonction détruit la session sur le serveur 

        header("location:" . RACINE_SITE . "index.php");
    }
}
// logOut();


///////////////////////////  Fonction de connexion à la BDD //////////////////////////

/**
 * On va utiliser l'extension PHP Data Object (PDO), elle définit une excellente interface pour accèder à une base de données depuis PHP et d'éxécuter des requêtes SQL.
 * pour se connecter à la BDD avec PDO, il faut créer une instance de cette Class/Objet (PDO) qui représente une connexion à la BDD.
 */

// On déclare des constantes d'environnement qui vont contenir les informations à la connexion à la BDD

// Constante du serveur => localhost
define("DBHOST", "localhost");

// Constante de l'utilisateur de la BDD du serveur en local  => root
define("DBUSER", "root");

// Constante pour le mot de passe de serveur en local => pas de mot de passe
define("DBPASS", "");

// Constante pour le nom de la BDD
define("DBNAME", "teamofmali");


function connexionBdd()
{

    // Sans la variable $dsn et sans le constantes, on se connecte à la BDD :

    // $pdo = new PDO('mysql:host=localhost;dbname=teamofmali;charset=utf8', 'root', '');

    // avec la variable DSN (Data Source Name) et les constantes

    // $dsn = "mysql:host=localhost;dbname=cinema;charset=utf8";

    $dsn = "mysql:host=" . DBHOST . ";dbname=" . DBNAME . ";charset=utf8";

    try {

        $pdo = new PDO($dsn, DBUSER, DBPASS);

        // On définit le mode d'erreur de PDO sur Exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    } catch (PDOException $e) {

        die($e->getMessage());
    }

    return $pdo;
}
// connexionBdd();
// ////////////////////////////////////////////////////
function stringToArray(string $string): array
{

    $array = explode('/', trim($string));
    return $array;
}

function ArticleJoueurindex(): array
{

    $pdo = connexionBdd();
    $sql = "SELECT * FROM article limit 3";
    $request = $pdo->query($sql);
    $result = $request->fetchAll();
    return $result;
}
function indexMaillot(): array
{

    $pdo = connexionBdd();
    $sql = "SELECT * FROM produit limit 3";
    $request = $pdo->query($sql);
    $result = $request->fetchAll();
    return $result;
}
function allStatistiqueJoueurs(): array
{

    $pdo = connexionBdd();
    $sql = "SELECT * FROM statistique";
    $request = $pdo->query($sql);
    $result = $request->fetchAll();
    return $result;
}

function allArticles()
{

    $pdo = connexionBdd();
    $sql = "SELECT * FROM article";
    $request = $pdo->query($sql);
    $result = $request->fetchAll();
    return $result;
}

function showMaillot(int $id): mixed
{
    $pdo = connexionBdd();
    $sql = "SELECT * FROM produit WHERE id = :id ";
    $request = $pdo->prepare($sql);
    $request->execute(array(
        ':id' => $id
    ));

    $result = $request->fetch();
    return $result;
}

function showArticle(int $id): mixed
{
    $pdo = connexionBdd();
    $sql = "SELECT * FROM article WHERE id = :id ";
    $request = $pdo->prepare($sql);
    $request->execute(array(
        ':id' => $id
    ));

    $result = $request->fetch();
    return $result;
}

function showAllArticle(): mixed
{
    $pdo = connexionBdd();
    $sql = "SELECT * FROM article";
    $request = $pdo->prepare($sql);
    $request->execute();

    $result = $request->fetchAll();
    return $result;
}

function showJoueur(int $id): mixed
{
    $pdo = connexionBdd();
    $sql = "SELECT * FROM statistique WHERE id = :id ";
    $request = $pdo->prepare($sql);
    $request->execute(array(
        ':id' => $id
    ));

    $result = $request->fetch();
    return $result;
}

// /////////////////  Fonction pour supprimer un utilisateur  ///////////////////////


function deleteUser(int $id): void
{
    $pdo = connexionBdd();
    $sql = "DELETE FROM user WHERE user = :user";
    $request = $pdo->prepare($sql);
    $request->execute(
        array(

            ':user' => $id

        )
    );
}

// /////////////////  Fonction pour recupereer un seul utilisateur  //////////////////////

function showUser(int $id): array
{
    $pdo = connexionBdd();
    $sql = "SELECT * FROM users WHERE id_user = :id_user";
    $request = $pdo->prepare($sql);
    $request->execute(
        array(

            ':id_user' => $id

        )
    );
    $result = $request->fetch();
    return $result;
}

// ////////////////////  Fonction pour modifier le role d'un utilisateur//////////////

function updateRole(string $role, int $id): void
{
    $pdo = connexionBdd();
    $sql = "UPDATE users SET role = :role WHERE id_user = :id_user";
    $request = $pdo->prepare($sql);
    $request->execute(
        array(
            ':role' => $role,
            ':id_user' => $id

        )
    );
}


function deleteArticle(int $id): void
{
    $pdo = connexionBdd();

    $sql = "DELETE FROM article WHERE id = :id";
    $request = $pdo->prepare($sql);
    $request->execute(
        array( 
            ':id' => $id
            ));
}


////////////////// Fonction pour vérifier si un email existe dans la BDD ///////////////////////////////

function checkEmailUser(string $email): mixed
{
    $pdo = connexionBdd();
    $sql = "SELECT * FROM users WHERE email = :email";
    $request = $pdo->prepare($sql);
    $request->execute(
        array(
            ':email' => $email

        )
    );

    $resultat = $request->fetch();
    return $resultat;
}

////////////////// Fonction pour vérifier si un pseudo existe dans la BDD ///////////////////////////////

function checkPseudoUser(string $pseudo)
{
    $pdo = connexionBdd();
    $sql = "SELECT * FROM users WHERE pseudo = :pseudo";
    $request = $pdo->prepare($sql);
    $request->execute(
        array(
            ':pseudo' => $pseudo

        )
    );

    $resultat = $request->fetch();
    return $resultat;
}

/////////// Fonction pour vérifier un utilisateur ////////////////////

function checkUser(string $email, string $pseudo): mixed
{

    $pdo = connexionBdd();

    $sql = "SELECT * FROM users WHERE pseudo = :pseudo AND email = :email";
    $request = $pdo->prepare($sql);
    $request->execute(
        array(
            ':pseudo' => $pseudo,
            ':email' => $email


        )
    );
    $resultat = $request->fetch();
    return $resultat;
}

function inscriptionUsers(string $firstName, string $lastName, string $pseudo, string $email, string $mdp): void
{

    $pdo = connexionBdd(); // je stock ma connexion  à la BDD dans une variable

    $sql = "INSERT INTO users 
        (firstName, lastName, pseudo, email, mdp)
        VALUES
        (:firstName, :lastName, :pseudo, :email, :mdp)"; // Requête d'insertion que je stock dans une variable
    $request = $pdo->prepare($sql); // Je prépare ma requête et je l'exécute
    $request->execute(
        array(
            
            ':firstName' => $firstName,
            ':lastName' => $lastName,
            ':pseudo' => $pseudo,
            ':email' => $email,
            ':mdp' => $mdp,            
        )
    );
}


//  /////////////////Fonction pour récupérer tous les utilisateurs///////////////////


function allUsers(): array
{

    $pdo = connexionBdd();
    $sql = "SELECT * FROM users";
    $request = $pdo->query($sql);
    $result = $request->fetchAll();
    return $result;
}

// }
// //////////////  fonction pour afficher tout les joueur///////////////
function joueurmali(): mixed
{
    $pdo = connexionBdd();
    $sql = "SELECT * FROM joueursmali";
    $request = $pdo->prepare($sql);
    $request->execute();

    $result = $request->fetchAll();
    return $result;
}
/////////recupere id des joueur/////
function showJoueurmali(int $id): mixed
{
    $pdo = connexionBdd();
    $sql = "SELECT * FROM joueursmali WHERE id = :id ";
    $request = $pdo->prepare($sql);
    $request->execute(array(
        ':id' => $id
    ));

    $result = $request->fetch();
    return $result;
}

////////////
/* J'utiliserai cette fonction seulement quand je développe mon site // lorsque mon site est en ligne, je ne dois pas avoir de fonction de debug utilisée */

// 2- création d'une fonction pour vérifier que l'utilisateur est connecté

function estConnecte() {
    if(isset($_SESSION['users'])) { // si je récupère un indice 'users' dans la superglobale $_SESSION, cela signifie qu'un utilisateur est connecté
        return true;
    }else{ // sinon personne n'est connecté
        return false;
    }
}

// 3- création d'une fonction pour vérifier qu'un membre connecté est admin

function estAdmin() {
    if (estConnecte() && $_SESSION['users']['statut'] == 1) { // je vérifie que l'utilisateur est connecté et que son statut correspond à 1 dans la BDD
        return true; // si c'est le cas, il est administrateur
    }else {
        return false; // sinon, c'est un utilisateur lambda ou la personne n'est pas connectée.
    }
}

function allProduits(): array
{

    $pdo = connexionBdd();
    $sql = "SELECT * FROM produit ";
    $request = $pdo->query($sql);
    $result = $request->fetchAll();
    return $result;
}

/////// pour ajout Article 
function addAnnonce(string $titre, string $contenu, string $date_publication, string $auteur, string $image): void
{
    try {
        $pdo = connexionBdd();

        // If date_publication is empty, use the current date and time as the default value
        if (empty($date_publication)) {
            $date_publication = date('Y-m-d H:i:s');
        }

        $sql = "INSERT INTO article (titre, contenu, date_publication, auteur, image)
                VALUES (:titre, :contenu, :date_publication, :auteur, :image)";

        $request = $pdo->prepare($sql);
        $request->execute(
            array(
                ':titre' => $titre,
                ':contenu' => $contenu,
                ':date_publication' => $date_publication,
                ':auteur' => $auteur,
                ':image' => $image
            )
        );
    } catch(PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
}
//////////// pour calculer
function calculerMontantTotal(array $tab): int
{
    $montant_total = 0;

    foreach ($tab as $key) {
        $montant_total += $key['price'] * $key['quantity'];
    }

    return $montant_total;
}

?>
