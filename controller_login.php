<?php
require 'crud_usuario.php';

session_start();
$crud = new CRUDUsuario($conn);

// Validación del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['registro'])) {
        // Registro de usuario
        $nombre = $_POST['usuario'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        // Validación de campos no vacíos
        if (!empty($nombre) && !empty($password) && !empty($email)) {
            // Comprobar si el usuario ya existe
            if ($crud->buscarUsuario('nombre', $nombre)) {
                $_SESSION['error'] = "El usuario ya existe.";
                header("Location: registro.php");
            } else {
                $resultado = $crud->insertarUsuario($nombre, $password, $email);
                if ($resultado === true) {
                    $_SESSION['success'] = "Usuario registrado correctamente.";
                    header("Location: login.php");
                } else {
                    $_SESSION['error'] = $resultado;
                    header("Location: registro.php");
                }
            }
        } else {
            $_SESSION['error'] = "Por favor, complete todos los campos.";
            header("Location: registro.php");
        }
    } elseif (isset($_POST['login'])) {
        // Login de usuario
        $nombre = $_POST['usuario'];
        $password = $_POST['password'];

        // Validar usuario y contraseña
        $usuario = $crud->buscarUsuario('nombre', $nombre);
        if ($usuario && password_verify($password, $usuario['password'])) {
            $_SESSION['usuario'] = $nombre;
            header("Location: bienvenida.php");
        } else {
            $_SESSION['error'] = "Usuario o contraseña incorrectos.";
            header("Location: login.php");
        }
    }
}
?>
