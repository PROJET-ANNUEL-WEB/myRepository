<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Enregistrer un utilisateur</title>
</head>
<body>
<div class="container">
    <div class="row">
        <h1>Ajouter un utilisateur</h1>
        <form action="suppression.php" method="post">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="mot_de_passe" class="form-label">Mot de passe</label>
                <input name="mot_de_passe" type="text" class="form-control" id="mot_de_passe">
            </div>

            <div class="mb-3">
                <label for="ID_Role" class="form-label">Numéro de Rôle</label>
                <input type="ID_Role" name="ID_Role" class="form-control" id="Numéro de rôle" aria-describedby="emailHelp">
            </div>

            <input type="submit" class="btn btn-primary" value="Enregistrer"></input>

    <?php

if (isset($_POST['email']) && isset($_POST['mot_de_passe']) && isset($_POST['ID_Role'])){
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];
    $ID_Role = $_POST['ID_Role'];

    $db = new PDO('mysql:host=localhost;dbname=projetannuel;charset=utf8', 'root', '');

 $stmt = $db->prepare(DELETE FROM utilisateur WHERE email = $user_id);
 //    $sql = "DELETE FROM utilisateur WHERE id = $user_id";

    $stmt->bindParam(':mot_de_passe', $mot_de_passe);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':ID_Role', $ID_Role);

    $stmt->execute();

    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>C est nickel</strong> l ajout est OK.
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
}
?>


</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>