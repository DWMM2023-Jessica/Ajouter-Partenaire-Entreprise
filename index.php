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
 

//  ?>

// <div class="blocDevis">
//     <div class="barreLogo">
//         <img class="logoJessica" src="Logojessica.png" alt="Logo_site_jessica">
//     </div>
//     <div class="formulaire">
//         <form class="form" method="POST">
//             <p class="phraseTitreDevis">Vos devis garantie sous 15 jours*</p>

//             <label for="nom">Nom</label><br>
//             <input type="text" name="nom" placeholder="Veuillez indiquer nom"><br>

//             <label for="prenom">Prénom</label><br>
//             <input type="text" name="prenom" placeholder="Veuillez indiquer prénom"><br>

//             <label for="email">Email</label><br>
//             <input type="email" name="email" placeholder="Veuillez indiquer adresse email"><br>

//             <label for="ville">Ville</label><br>
//             <input type="text" name="ville" placeholder="Veuillez indiquer la ville du chantier"><br>

//             <label for="typeTravaux">Quel type de travaux ?</label><br>
//             <input type="text" name="typeTravaux" placeholder="Veuillez indiquer les travaux à effectuer"><br>

//             <label for="date">Date souhaitée des travaux</label><br>
//             <input type="date" name="date"><br>

//             <label for="description">Description précise de votre projet</label><br>
//             <textarea class="description" name="description" rows="4" cols="50"></textarea><br>

//             <input type="submit" name="submitDevis" value="Envoyer devis">
//             <p class="condition">*: Devis gratuit sur une distance de 50km</p>
//         </form>
//     </div>
// </div>


  




    <form method="POST" >

        <input type="email" placeholder="Email" name="email_admin"><br>
        <input type="password" placeholder="Mot de passe" name="mdp_admin"><br>
        <button type="submitInscription">Incription</button>


    </form>

    <form method="POST">

        <input type="email" placeholder="Email" name="email_admin"><br>
        <input type="password" placeholder="Mot de passe" name="mdp_admin"><br>
        <button type="submitConnexion">Connexion</button>

    </form>



 <?php

//  *********************************INSCRIPTION*******************************************************************

    if (!empty($_POST['email_admin']) && !empty($_POST['mdp_admin'])){
        $emailAdmin = $_POST['email_admin'];
        $mdp_admin = $_POST['mdp_admin'];

        $db->Inscription($emailAdmin, $mdp_admin);

       header("Refresh:0");

    }

  


//  *********************************CONNEXION*******************************************************************
?>

 <?php

    if (!empty($_POST['email_admin']) && !empty($_POST['mdp_admin'])){
        $emailAdmin = $_POST['email_admin'];
        $mdp_admin = $_POST['mdp_admin'];

        $db->Connexion($emailAdmin, $mdp_admin);

        header("Refresh:0");

    }

?>







  

</section>





































</body>