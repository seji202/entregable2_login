<?php
session_start();
require 'conexion.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    try {
        $sql = "SELECT * FROM usuarios WHERE nombre = :nombre";
        $stmt = $conn->prepare($sql);
        $stmt->execute(['nombre' => $usuario]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['usuario'] = $user['nombre'];
            header("Location: bienvenida.php");
            exit;
        } else {
            echo "Usuario o contraseña incorrectos.";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
