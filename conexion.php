<?php
$host = "localhost";
$dbname = "proyecto_login"; // Cambia al nombre de tu base de datos
$username = "root"; // Usuario de MySQL
$password = ""; // Contraseña de MySQL
try {
$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", 
$username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
die("Error de conexión: " . $e->getMessage());
}
?>
