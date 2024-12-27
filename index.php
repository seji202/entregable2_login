<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #87CEEB;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 300px;
        }
        .login-container h2 {
            margin-bottom: 20px;
        }
        .login-container label {
            display: block;
            margin: 10px 0 5px;
            text-align: left;
        }
        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .login-container button {
            background-color: #008CBA;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        .login-container button:hover {
            background-color: #005f73;
        }
        .login-container p {
            margin-top: 10px;
        }
        .login-container a {
            color: #008CBA;
            text-decoration: none;
        }
        .login-container a:hover {
            text-decoration: underline;
        }
        .lock-icon {
            width: 80px;
            height: 80px;
            background-color: #87CEEB;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto 20px;
        }
        .lock-icon img {
            width: 50%;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="lock-icon">
            <img src="lock-icon.png" alt="Lock Icon">
        </div>
        <h2>Login</h2>
        <form method="POST" action="cuenta.php">
            <label for="usuario">Usuario:</label>
            <input type="text" name="usuario" id="usuario" required>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
            <button type="submit">Ingresar</button>
        </form>
        <p>¿No tienes una cuenta? <a href="registrarse.php">Regístrate aquí</a></p>
    </div>
</body>
</html>

