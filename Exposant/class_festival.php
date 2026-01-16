<?php
include 'connexion.php';

class exposant {
    public $id_exposant;
    public $nom;
    public $specialite;
    public $email;

    function __construct() {
    }    // le mot clé $this faisant référence à l’objet est obligatoire
    public function get_id_exposant(){
        return $this->id_exposant;
    }
    public function set_id_exposant($id_exposant){
        $this->id_exposant = $id_exposant;
    }
    public function get_nom(){
        return $this->nom;
    }
    public function set_nom($nom){
        $this->nom = $nom;
    }
    public function get_specialite(){
        return $this->specialite;
    }
    public function set_specialite($specialite){
        $this->specialite = $specialite;
    }
    public function get_email(){
        return $this->email;
    }
    public function set_email($email){
        $this->email = $email;

    }
    public function findall($pdo){
    $sql = "SELECT * FROM exposant ORDER BY nom ASC";
    return $pdo->query($sql)->fetchAll();
    }
    public function insert($pdo){
        $sql = "INSERT INTO exposant (nom, specialite, email) VALUES (:nom, :specialite, :email)";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([
            ':nom' => $this->get_nom(),
            ':specialite' => $this->get_specialite(),
            ':email' => $this->get_email()
        ]);
    
    }
    public function findById($id, $pdo){
        $sql = "SELECT * FROM exposant WHERE id_exposant = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetch();
    }
    public function update($id, $pdo){
        $sql = "UPDATE exposant SET nom = :nom, specialite = :specialite, email = :email WHERE id_exposant = :id";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([
            ':nom' => $this->nom,
            ':specialite' => $this->specialite,
            ':email' => $this->email,
            ':id' => $id,
        ]);
        }
    public function delete($id, $pdo){
        $sql = "DELETE FROM exposant WHERE id_exposant = :id";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([':id' => $id]);
    }
}

?>