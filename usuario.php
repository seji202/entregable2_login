<?php
class Usuario {
private $id;
private $nombre;
private $password;
private $email;
public function __construct($id, $nombre, $password, $email) {
$this->id = $id;
$this->nombre = $nombre;
$this->password = $password;
$this->email = $email;
 }
// Getters
public function getId() {
return $this->id;
 }
public function getNombre() {
return $this->nombre;
 }
public function getPassword() {
return $this->password;
 }
public function getEmail() {
return $this->email;
 }
// Setters
public function setNombre($nombre) {
$this->nombre = $nombre;
 }
public function setPassword($password) {
$this->password = $password;
 }
public function setEmail($email) {
$this->email = $email;
 }
}
?>
