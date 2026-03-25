<?php
require_once __DIR__ . '/../configuration/connect.php';

class Fabrica {
    private $conn;

    public function __construct() {
        $this->conn = Connect::getConnection();
    }

    public function fabricarCarro($modelo, $cor) {
        $sql = "INSERT INTO carros (modelo, cor) VALUES (?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$modelo, $cor]);

        return "Carro fabricado!";
    }

    public function getCarros() {
        $sql = "SELECT * FROM carros WHERE status='fabricado'";
        return $this->conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function venderCarro($id) {
        $sql = "UPDATE carros SET status='vendido' WHERE id=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);

        return "Carro vendido!";
    }

    public function deletarCarro($id) {
        $sql = "DELETE FROM carros WHERE id=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);

        return "Carro deletado!";
    }
}