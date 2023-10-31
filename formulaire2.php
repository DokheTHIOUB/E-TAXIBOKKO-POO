<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <?php 
    // require_once('Taxibokko2.php');
    // include('Taxibokko2.php');
    // if ( isset($_POST['inscription'])) {
    //     $nom = $_POST['nom'];
    //     $prenom = $_POST['prenom'];
    //     $telephone = $_POST['telephone'];
    //     $mail = $_POST['mail'];
    //     $motdepasse = $_POST['motdepasse'];
    //     $inscription= new Utilisateur( $nom, $prenom, $telephone, $mail, $motdepasse);
    //     $inscription->inscription();
    //     echo "Inscription reussi";
    // }
    ?>
<div class="div">
    <div >
        <form action="Connexion2.php" method="POST">
        <h2> Connexion </h2>
        <h5> Votre chauffeur en un clic! </h5>
        <button type="submit" class="bouton-continuer" formaction=" "id=""> Continuer avec Facebook </button >
        <p id="ou"> ou </p>
        <label for=""> Email </label><br>
        <input type="mail" name="mail" id="mail" value="" required > <br> <br>
        <label for=""> Mot de passe </label><br>
        <input type="password" name=" motdepasse" id="" required >  <br><br>
        <input id="compte" type="submit" value=" J'ai déjà un compte" required>
        <button class="bouton-inscrire" name="ok" type="submit">connexion</button> 
        </form>
    </div>
            <div >
                <form method="POST" action="connexion2.php">
                   <h2> INSCRIPTION </h2>
                   <p> Finalisez votre inscription en renseignant les informations manquantes </p>
                   <label for=""> Nom </label><br>
                   <input type="text" name="nom" id="" required><br><br>
                   <label for=""> Prénom </label> <br>
                   <input type="text" name="prenom" id="" required><br><br>
                   <label for=""> Téléphone </label><br> 
                   <input type="tel"  name="telephone" id="" placeholder=" + 221 77 000 00 00 "required >  <br><br>
                   <label for=""> Email </label><br>
                   <input type="mail" name="mail" id="mail" value="" required  > <br> <br>
                   <label for=""> Mot de passe </label><br>
                   <input type="password" name="motdepasse" id="" required >  <br><br>
                   <p>  Ajouter un code promo </p>
                  <button class="bouton-inscrire" name="inscription" type="submit">S'inscrire</button> 
                </form> 
            </div> 
</div>     
</body>
</html>