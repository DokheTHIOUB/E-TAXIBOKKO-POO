<?php
// Connexion à la base de données
$serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "thioub";
$base_de_donnees = "TAXIBOKKO2";

try {
    $connexion = new PDO("mysql:host=$serveur;dbname=$base_de_donnees", $utilisateur, $mot_de_passe);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connexion réussie";
} catch (PDOException $e) {
    echo "La connexion a échoué : " . $e->getMessage();
}

include('Taxibokko2.php');

if (isset($_POST['inscription'])) {
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $telephone = htmlspecialchars($_POST['telephone']);
    $mail = htmlspecialchars($_POST['mail']);
    $motdepasse = htmlspecialchars($_POST['motdepasse']);
    $inscription = new Utilisateur($nom, $prenom, $telephone, $mail, $motdepasse);
    $inscription->inscription();
    echo "Inscription réussie";
   
}


if (isset($_POST['SeConnecter'])) {
    $email = htmlspecialchars($_POST['mail']);
    $password = htmlspecialchars($_POST['motdepasse']);
    $Compte1 = new Utilisateur("BALDE", "Mariama", "777777777", "Balde@gmail.com", "thioub");
    $verif = $Compte1->SeConnecter($email, $password);
    if ($verif->rowCount() == 1) {
        echo "Connexion réussie";
        
    } else {
        echo "L'email ou le mot de passe est incorrect";
    }
}

$lis = "SELECT * FROM utilisateur";
$liste = $connexion->prepare($lis);
$liste->execute();
if ($liste->rowCount() > 0) {
    echo "<strong>Liste des utilisateurs</strong>";
    echo "<table>
             <tr>
                <th>Nom</th>
                 <th>Prénom</th>
                 <th>Téléphone</th>
                 <th>mail</th>
             </tr>";
    while ($row = $liste->fetch()) {
        echo "<tr>
                <td>" . htmlspecialchars($row['nom']) . "</td>
                <td>" . htmlspecialchars($row['prenom']) . "</td>
                <td>" . htmlspecialchars($row['telephone']) . "</td>
                <td>" . htmlspecialchars($row['mail']) . "</td>
              </tr>";
    }
    echo "</table>";
}
?>
