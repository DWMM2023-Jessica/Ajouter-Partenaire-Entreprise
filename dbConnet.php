<?php

include 'Database.php';

class DbConnect extends Database{
    private $dbConnect;    


    public function __construct()
    {
        
        $this->dbConnect = Database::dbConnect();
    }



    public function insertPartenaire ($nomCollab,$logoCollab){        
        $sqlinsertPartenaire = "INSERT INTO collab(nom_collab, logo_collab, id_style)
                                VALUES (:nom_collab, :logo_collab, :id_style)";

        $stmtinsertPartenaire =$this->dbConnect->prepare($sqlinsertPartenaire);
        $stmtinsertPartenaire->bindValue(':nom_collab', $nomCollab);
        $stmtinsertPartenaire->bindValue(':logo_collab', $logoCollab);
        $stmtinsertPartenaire->bindValue(':id_style', "1");

        $stmtinsertPartenaire->execute();
        
        return 'Le partenaire a bien ajouté';

    
    } 



    public function insertEntreprise ($nomCollab,$logoCollab){        
        $sqlinsertEntreprise = "INSERT INTO collab(nom_collab, logo_collab, id_style)
                                VALUES (:nom_collab, :logo_collab, :id_style)";

        $stmtinsertEntreprise =$this->dbConnect->prepare($sqlinsertEntreprise);
        $stmtinsertEntreprise->bindValue(':nom_collab', $nomCollab);
        $stmtinsertEntreprise->bindValue(':logo_collab', $logoCollab);
        $stmtinsertEntreprise->bindValue(':id_style', "2");

        $stmtinsertEntreprise->execute();
        
        return 'L entreprise a bien ajouté';

    
    } 


        function Inscription($emailAdmin, $mdp_admin) {
        $sql = "INSERT INTO `admin` (`email_admin`, `mdp_admin`) VALUES (:email_admin, :mdp_admin)";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindValue('email_admin', $emailAdmin);
        $stmt->bindValue('mdp_admin', password_hash($mdp_admin, PASSWORD_DEFAULT)); 
        $res = $stmt->execute();

        if ($res){
            echo "Inscription réussie";
        }
    }
    

        function Connexion($emailAdmin, $mdp_admin) {
        $sql = "SELECT * FROM `admin` WHERE email_admin = :email_admin" ;
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindValue(':email_admin', $emailAdmin);
        $stmt->execute();
        $stmt->fetch(PDO::FETCH_ASSOC);
    
    } 
    
} 
