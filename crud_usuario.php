<?php
require 'conexion.php';

class CRUDUsuario {
    private $conn;

    public function __construct($conexion) {
        $this->conn = $conexion;
    }

    // Método para insertar un nuevo usuario
    public function insertarUsuario($nombre, $password, $email) {
        try {
            $sql = "INSERT INTO usuarios (nombre, password, email) VALUES (:nombre, :password, :email)";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                'nombre' => $nombre,
                'password' => password_hash($password, PASSWORD_DEFAULT), // Encriptación de contraseña
                'email' => $email
            ]);
            return true;
        } catch (PDOException $e) {
            return "Error al registrar usuario: " . $e->getMessage();
        }
    }

    // Método para buscar un usuario por nombre o email
    public function buscarUsuario($campo, $valor) {
        try {
            $sql = "SELECT * FROM usuarios WHERE $campo = :valor";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute(['valor' => $valor]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return null;
        }
    }
}
?>
