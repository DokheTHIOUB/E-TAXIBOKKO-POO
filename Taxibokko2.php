<?php 
require_once('Connexion2.php');
class Utilisateur{
    public $nom;
    public $prenom;
    public $telephone;
    public $mail;
    protected $motdepasse;

        public function __construct( $nom, $prenom, $telephone, $mail, $motdepasse ){
                $this->nom=$nom;
                $this->prenom=$prenom;
                $this->telephone=$telephone;
                $this->mail=$mail;
                $this->motdepasse=$motdepasse;
        }

        public function inscription(){
            global $connexion;
            $sql = "INSERT INTO utilisateur(nom,prenom,telephone,mail,motdepasse) VALUES ('$this->nom','$this->prenom','$this->telephone','$this->mail','$this->motdepasse')";
            $stmt = $connexion->prepare($sql);
            // $stmt->execute([$nom, $prenom, $email, $telephone, $mot_de_pass]) ;  
            $stmt->execute() ;  
            echo "Inscription reussi";
        }
  
        public function SeConnecter( $mail, $motdepasse){ 
            global $connexion;
            $connect = "SELECT * FROM utilisateur WHERE MAIL='$this->mail' and motdepasse='$this->motdepasse'";
            $stmt=$connexion->prepare($connect);
            if ($stmt->execute()) {
              return $stmt->fetch();
            }
            else{
                echo "down";
            }
            
        } 
        
        public function getnom(){
            return $this->nom;
        }
        public function setNom($nom){
            $pattern='/^[a-zA-Zä-ÿÄ-Ÿ\s]*$/';
            if(preg_match($pattern,$nom)==1 && strlen($nom)<=25){
                return $this->nom=$nom;
            }else{
                throw new Exception("le nom est invalid ou le nom est superieur est 25 caractère");
            }
            
        }
        public function getprenom(){
            return $this->prenom;
        }
        public function setPrenom($prenom){
            $pattern='/^[a-zA-Zä-ÿÄ-Ÿ\s]*$/';
            if(preg_match($pattern,$prenom)==1 && strlen($prenom)<=25){
                return $this->prenom=$prenom;
            }else{
                throw new Exception("le prenom est invalid ou le prenom est superieur est 25 caractère");
            }
            
        }
        public function gettel(){
            return $this->tel;
        }
        // public function settel($matricule){
        //     $pattern='/^[a-zA-Z0-9ä-ÿÄ-Ÿ\s]*$/';
        //     if(preg_match($pattern,$matricule)==1 && strlen($matricule)<=15){
        //         return $this->matricule=$matricule;
        //     }else{
        //         throw new Exception("le matricule est invalid ou le matricule est superieur est 25 caractère");
        //     }
           
        // }
          public function getmail(){
        return $this->nom;
        }
        public function getmotdepasse(){ 
            return $this->nom;
        }

      
}
$Compte1= new Utilisateur( "BALDE" ,"Mariama", "777777777", "Balde@gmail.com","thioub" );
$verif= $Compte1->SeConnecter("Balde@gmail.com","thioub");

// $Compte1->inscription();
// $connecter= new Utilisateur( "","");
// $connecter->seconnecter();

?>