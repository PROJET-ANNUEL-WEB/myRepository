<?php
if (isset($_POST['email']) && isset($_POST['mot_de_passe'])) {

    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];
    $db = new PDO('mysql:host=localhost;dbname=projetannuel;charset=utf8', 'root', '');
    $stmt = $db->prepare("SELECT * FROM utilisateur WHERE email = :email AND mot_de_passe = :mot_de_passe");
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':mot_de_passe', $mot_de_passe);
    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row) {
        $ID_Role = $row['ID_Role'];
        if ($ID_Role == 1) {
            header("Location: pageadmin.html");
        } elseif ($ID_Role == 2) {
            header("Location: pagecompta.php");
        } elseif ($ID_Role == 3) {
            header("Location: pageuser.php");
        }
    } else {

        // Pour afficher un message d'alerte si la connexion est impossible
        echo '<div class="alert alert-danger" role="alert"> Connexion impossible, êtes vous inscrit ? <a href="mailto:?to=admin@entreprise.com &subject=Identifiant%20non%20enregistré &body=Bonjour,%20mes%20identifiants%20n ont%20pas%20été%20saisi."> Si vous n\'avez pas d\'identifiant </a>. Cliquez pour vous inscrire. </div>';
    }

    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>C est nickel</strong> l ajout est OK.
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
}
