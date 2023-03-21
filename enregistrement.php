<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="enregistrement.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <title>Enregistrer un utilisateur</title>
</head>

<!-- <body>
    <div class="container">    //maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css
        <div class="row">
            <h1>Ajouter un utilisateur</h1>
            <form action="enregistrement.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="mot_de_passe" class="form-label">Mot de passe</label>
                    <input type="password" name="mot_de_passe" class="form-control" id="mot_de_passe">
                </div>

                <div class="mb-3">
                    <label for="ID_Role" class="form-label">Numéro de Rôle</label>
                    <input type="number" name="ID_Role" class="form-control" id="Numéro de rôle">
                </div>

                <div class="mb-3">
                    <label for="Prenom" class="form-label">Prénom</label>
                    <input type="text" name="Prenom" class="form-control" id="Prenom">
                </div>

                <div class="mb-3">
                    <label for="Nom" class="form-label">Nom</label>
                    <input type="text" name="Nom" class="form-control" id="Nom">
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                        Vous devez accepter les termes et conditions
                    </label>
                    <div class="invalid-feedback">
                        Vous êtes obligé d'accepter les conditions avant de continuer
                    </div>
                </div>

                <input type="submit" class="btn btn-primary" value="Enregistrer"></input>
                <input type="submit" class="btn btn-danger" name="delete" value="Supprimer">
                s <input type="submit" class="btn btn-warning" name="update" value="Modifier">
                <input type="submit" class="btn btn-info" name="upload" value="Upload votre ticket"> -->

<body>
    <div class="container h-100">
        <div class="d-flex justify-content-center h-100">
            <div class="user_card">
                <div class="d-flex justify-content-center">
                    <div class="brand_logo_container">
                        <img src="https://cdn.freebiesupply.com/logos/large/2x/pinterest-circle-logo-png-transparent.png" class="brand_logo" alt="Logo">
                    </div>
                </div>
                <div class="d-flex justify-content-center form_container">
                    <form>
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="email" class="form-control input_user" value="" placeholder="username">
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="mot_de_passe" class="form-control input_pass" value="" placeholder="password">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="ID_Role" class="form-control input_user" value="" placeholder="Qui êtes-vous ?">
                        </div>

                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customControlInline">
                                <label class="custom-control-label" for="customControlInline">Remember me</label>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-3 login_container">
                            <button type="button" name="button" class="btn login_btn">Login</button>
                        </div>
                    </form>
                </div>

                <div class="mt-4">
                    <div class="d-flex justify-content-center links">
                        Don't have an account? <a href="#" class="ml-2">Sign Up</a>
                    </div>
                    <div class="d-flex justify-content-center links">
                        <a href="#">Forgot your password?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>




<?php
if (isset($_POST['email']) && isset($_POST['mot_de_passe']) && isset($_POST['ID_Role'])/* && isset($_POST['Nom']) && isset($_POST['Prenom'])*/) {

    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];
    $hashed_password = password_hash($mot_de_passe, PASSWORD_DEFAULT);
    $ID_Role = $_POST['ID_Role'];
    /* $Nom = $_POST['Nom'];
    $Prenom = $_POST['Prenom']; */

    $db = new PDO('mysql:host=localhost;dbname=projetannuel;charset=utf8', 'root', '');

    $stmt = $db->prepare("INSERT INTO utilisateur (email,mot_de_passe,ID_Role) VALUES (:email, :mot_de_passe, :ID_Role)");

    $stmt->bindParam(':mot_de_passe', $hashed_password);
    $stmt->bindParam(':email', $email);
    /* $stmt->bindParam(':ID_Role', $ID_Role);
     $stmt->bindParam(':Nom', $Nom);
    $stmt->bindParam(':Prenom', $Prenom); */


    $stmt->execute();

    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>C est nickel</strong> l ajout est OK.
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
}
?>

<?php
if (isset($_POST['delete'])) {
    $Nom = $_POST['Nom'];

    $db = new PDO('mysql:host=localhost;dbname=projetannuel;charset=utf8', 'root', '');

    $stmt = $db->prepare("DELETE FROM utilisateur WHERE Nom = :Nom");
    $stmt->bindParam(':Nom', $Nom);

    if ($stmt->execute()) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>C\'est bon</strong>, l\'utilisateur a été supprimé.
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
    } else {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>Oops!</strong> Une erreur est survenue lors de la suppression de l\'utilisateur.
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
    }
}
?>

<?php
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];
    $ID_Role = $_POST['ID_Role'];
    $Nom = $_POST['Nom'];
    $Prenom = $_POST['Prenom'];

    $db = new PDO('mysql:host=localhost;dbname=projetannuel;charset=utf8', 'root', '');

    $stmt = $db->prepare("UPDATE utilisateur SET email= :email,mot_de_passe= :mot_de_passe,ID_Role= :ID_Role,Nom= :Nom,Prenom= :Prenom WHERE id = :id");
    $stmt->bindParam(':mot_de_passe', $mot_de_passe);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':ID_Role', $ID_Role);
    $stmt->bindParam(':Nom', $Nom);
    $stmt->bindParam(':Prenom', $Prenom);

    if ($stmt->execute()) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>C\'est bon</strong>, l\'utilisateur a été modifié.
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
    } else {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>Oops!</strong> Une erreur est survenue lors de la modification de l\'utilisateur.
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
    }
}

?>

<?php
/*
if (isset($_POST['upload'])) {

	if (isset($_FILES['fichier'])) {
    $fichier = $_FILES['fichier'];
    $nom_fichier = $fichier['name'];
    $type_fichier = $fichier['type'];
    $taille_fichier = $fichier['size'];
    $chemin_fichier = $fichier['tmp_name'];


function lire_fichier_telecharge($nom_fichier) {
    $contenu_fichier = file_get_contents($nom_fichier);
    return $contenu_fichier;
}

// Utilisation de la fonction pour lire le contenu d'un fichier téléchargé
$nom_fichier = "chemin/vers/le/fichier/telecharge.txt";
$contenu = lire_fichier_telecharge($nom_fichier);
echo $contenu;
} */
?>

</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>