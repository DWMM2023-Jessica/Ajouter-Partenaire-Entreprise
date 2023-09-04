<?php

session_start();

include './dbConnet.php';

$db = new dbConnect;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
<section>

<?php
 

            echo '<form action = ""  method="POST" >';
                echo '<p>Nom du Partenaire</p><input type="text" name="nom_collab">';
                echo '<p>Logo du Partenaire</p><input type="url" name="logo_collab">';
                echo '<br>';
                echo '<br>';
                echo '<input type="submit" name="submitPartenaire" value="Ajouter partenaire">';
            echo '</form>';


            if (isset($_POST["submitPartenaire"])) {
                $nomCollab = $_POST['nom_collab'];
                $logoCollab = $_POST['logo_collab'];
            
                
                $db->insertPartenaire($nomCollab, $logoCollab);

            }



            echo '<br>';
            echo '<br>';
            echo '<br>';
            echo '<form class="form" method="POST">';
            echo '<p>Nom Entreprise</p><input type="text" name="entreprise">';
            echo '<p>Logo Entreprise</p><input type="url" name="logo_entreprise">';
            echo '<br>';
            echo '<br>';
            echo '<input type="submit" name="submitEntreprise" value="Ajouter entreprise">';
            echo '</form>';

            if (isset($_POST["submitEntreprise"])) {
                $nomCollab2 = $_POST['entreprise'];
                $logoCollab2 = $_POST['logo_entreprise'];
            
                
                $db->insertEntreprise($nomCollab2, $logoCollab2);

            }
 ?>

<div class="blocDevis">
        <div class="barreLogo">
            <img class="logoJessica" src="Logojessica.png" alt="Logo_site_jessica">
        </div>
        <div class="formulaire">
            <p class="phraseTitreDevis">Vos devis garantie sous 15 jours*</p>
            <label for="">Nom</label>
            <br>
            <input type="text" placeholder="Veuillez indiquer nom"><br>
            <label for="">Prénom</label>
            <br>
            <input type="text" placeholder="Veuillez indiquer prénom"><br>
            <label for="">Email</label>
            <br>
            <input type="text" placeholder="Veuillez indiquer adresse email"><br>
            <label for="">Ville</label>
            <br>
            <input type="text" placeholder="Veuillez indiquer la ville du chantier"><br>
            <label for="">Quel type de travaux ?</label>
            <br>
            <input type="text" placeholder="Veuillez indiquer les travaux à effectuer"><br>
            <label for="">Date souhaitée des travaux</label>
            <br>
            <input type="date"><br>
            <label for="">Description précise de votre projet</label>
            <br>
            <input class="description" type="text"><br>

            <input  type="submit" name="submitDevis" value="Submit Devis">
            <p class="condition">*: Devis gratuit sur une distance de 50km</p>
        </div>
    </div>

    <?php




    // $to = "amadou.haidara@gmail.com";
    // $subject = "Demande de devis depuis le formulaire";
    // $message = "Nom: " . $_POST['nom'] . "\n";
    // $message .= "Prénom: " . $_POST['prenom'] . "\n";


    // $headers = "From: " . $_POST['email'] . "\r\n";


    // mail($to, $subject, $message, $headers);

  
        mail("amadou.haidara@gmail.com" , "Essai", ) ;   

?>
</section>





































</body>