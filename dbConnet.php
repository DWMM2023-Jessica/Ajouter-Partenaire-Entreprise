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

}


