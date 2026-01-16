<?php
include 'connexion.php';

class joueur {
    public $id_joueur;
    public $pseudo;
    public $age;
    public $ville;

    function __construct() {
    }    // le mot clé $this faisant référence à l’objet est obligatoire
    public function get_id_joueur(){
        return $this->id_joueur;
    }
    public function set_id_joueur($id_joueur){
        $this->id_joueur = $id_joueur;
    }
    public function get_pseudo(){
        return $this->pseudo;
    }
    public function set_pseudo($pseudo){
        $this->pseudo = $pseudo;
    }
    public function get_age(){
        return $this->age;
    }
    public function set_age($age){
        $this->age = $age;
    }
    public function get_ville(){
        return $this->ville;
    }
    public function set_ville($ville){
        $this->ville = $ville;
    }

    public function findall($pdo){
    $sql = "SELECT * FROM joueur ORDER BY pseudo ASC";
    return $pdo->query($sql)->fetchAll();
    }
    public function insert($pdo){
        $sql = "INSERT INTO joueur (pseudo, age, ville) VALUES (:pseudo, :age, :ville)";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([
            ':pseudo' => $this->get_pseudo(),
            ':age' => $this->get_age(),
            ':ville' => $this->get_ville()
        ]);
    
    }
    public function findById($id, $pdo){
        $sql = "SELECT * FROM joueur WHERE id_joueur = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetch();
    }
    public function update($id, $pdo){
        $sql = "UPDATE joueur SET pseudo = :pseudo, age = :age, ville = :ville WHERE id_joueur = :id";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([
            ':pseudo' => $this->get_pseudo(),
            ':age' => $this->get_age(),
            ':ville' => $this->get_ville(),
            ':id' => $id,
        ]);
        }
    public function delete($id, $pdo){
        $sql = "DELETE FROM joueur WHERE id_joueur = :id";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([':id' => $id]);
    }
}

?>