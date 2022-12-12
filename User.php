<?php

class User {
  // Atributos para almacenar la información del usuario
  public $name;
  public $email;
  public $password;
  
  // Métodos para acceder y modificar la información del usuario
  public function getName() {
    return $this->name;
  }
  
  public function setName($name) {
    $this->name = $name;
  }
  
  public function getEmail() {
    return $this->email;
  }
  
  public function setEmail($email) {
    $this->email = $email;
  }
  
  public function getPassword() {
    return $this->password;
  }
  
  public function setPassword($password) {
    $this->password = $password;
  }
}
