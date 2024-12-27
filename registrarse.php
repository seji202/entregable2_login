<?php 
require 'conexion.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $email = $_POST['email'];
    try {
        $sql = "INSERT INTO usuarios (nombre, password, email) VALUES (:nombre, :password, :email)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            'nombre' => $usuario,
            'password' => $password,
            'email' => $email
        ]);
        echo "¡Usuario registrado correctamente!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eaf4fc;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        h2 {
            text-align: center;
            font-size: 24px;
            color: #333;
        }
        form {
            background: #fff;
            padding: 20px 30px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
            color: #555;
        }
        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
            background-color: #f8faff;
        }
        input:focus {
            border-color: #007bff;
            outline: none;
        }
        button {
            width: 100%;
            background: #007bff;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background: #0056b3;
        }
    </style>
</head>

<body>
    <form method="POST">
        <h2>Registro</h2>
        <label>Usuario:</label>
        <input type="text" name="usuario" required>
        <label>Password:</label>
        <input type="password" name="password" required>
        <label>Email:</label>
        <input type="email" name="email" required>
        <button type="submit">Registrarse</button>
    </form>
</body>

</html>
