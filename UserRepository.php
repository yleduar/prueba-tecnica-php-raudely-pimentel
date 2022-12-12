<?php

class UserRepository {
  // Atributo para almacenar una colección de usuarios
  private $users = array();
  
  // Método para agregar un usuario a la colección
  public function save(User $user) {
    array_push($this->users, $user);
  }
  
  // Método para actualizar un usuario en la colección
  public function update(User $user) {
    // Buscar el usuario en la colección y actualizarlo
  }
  
  // Método para eliminar un usuario de la colección
  public function delete(User $user) {
    // Buscar el usuario en la colección y eliminarlo
  }
  
  // Método para obtener usuarios de la colección
  public function getUsers() {
    // Busca los usuarios en la colección y los retorna
    return $this->users;
  }
}
