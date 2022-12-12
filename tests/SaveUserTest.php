<?php
use PHPUnit\Framework\TestCase;

class SaveUserTest extends TestCase {

  public function testSaveUser() {
    // Crear una instancia de la clase User y establecer sus atributos
    $user = new User();
    $user->setName('Raudely Pimentel');
    $user->setEmail('rpimentel@example.com');
    $user->setPassword('password123');
    
    // Crear una instancia de la clase UserRepository y guardar el usuario en el repositorio
    $repository = new UserRepository();
    $repository->save($user);
    
    // Asegurarse de que el usuario se guardó correctamente en el repositorio
    $this->assertContains($user, $repository->getUsers());
  }
}
