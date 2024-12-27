# entregable2_login
# INFORME DE ACCESO DE USUARIOS
Objetivo del Proyecto
Desarrollar un sistema de acceso seguro con funcionalidades básicas de registro, inicio de sesión y conexión a una base de datos utilizando PHP y PDO.
Archivos del Proyecto
El sistema se compone de los siguientes archivos, organizados según sus funcionalidades:
index.php
Página inicial donde se encuentra el formulario de acceso (login). Incluye campos para ingresar el nombre de usuario y la contraseña, así como un botón para enviar los datos.
registrarse.php
Contiene el formulario de registro para los nuevos usuarios. Permite la creación de una cuenta ingresando datos básicos como nombre, email y contraseña.
conexion.php
Archivo encargado de realizar la conexión a la base de datos utilizando PDO. Garantiza una conexión segura y eficiente a través de prácticas modernas de desarrollo.
usuario.php
Define una clase de usuario que incluye los siguientes campos: id, nombre, clave, email. La clase incluye métodos getters y setters para acceder y modificar los campos de forma controlada.
cuenta.php
Página de redirección una vez que el usuario ha iniciado sesión con éxito. Sirve como área privada donde se mostrarán las funcionalidades personalizadas para el usuario.
Funcionamiento General del Proyecto
•	Inicio de Sesión (Login): El usuario ingresa sus credenciales en index.php. El sistema verifica las credenciales comparándolas con los datos almacenados en la base de datos.
•	Registro de Usuarios: Si el usuario no tiene una cuenta, puede registrarse a través de registrarse.php. Los datos se almacenan en la base de datos de forma segura.
•	Conexión a la Base de Datos: La conexión a la base de datos se establece en conexion.php utilizando PDO para garantizar seguridad y evitar inyecciones SQL.
•	Gestión de Datos de Usuario: La clase usuario.php organiza los datos del usuario y facilita el manejo mediante métodos getters y setters.
•	Redirección a la Cuenta: Una vez validado el acceso, el usuario es redirigido a cuenta.php, donde podrá acceder a las funcionalidades correspondientes.


