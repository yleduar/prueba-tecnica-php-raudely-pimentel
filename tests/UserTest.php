<?php

use PHPUnit\Framework\TestCase;
require 'User.php';
require 'UserRepository.php';

class UserTest extends TestCase {
  // Crea una instancia de la clase User para usarla en los tests
  private $user;

  // Este método se ejecuta antes de cada test
  protected function setUp(): void {
    $this->user = new User();
  }
  
  // Test para asegurarse de que el nombre del usuario se establece y obtiene correctamente
  public function testName() {
    // Establecer el nombre del usuario
    $this->user->setName('Raudely Pimentel');
    
    // Asegurarse de que el nombre del usuario se estableció correctamente
    $this->assertEquals('Raudely Pimentel', $this->user->getName(), 'No se seteo el nombre correctamente');
  }
  
  // Test para asegurarse de que el correo electrónico del usuario se establece y obtiene correctamente
  public function testEmail() {
    // Establecer el correo electrónico del usuario
    $this->user->setEmail('rpimentel@example.com');
    
    // Asegurarse de que el correo electrónico del usuario se estableció correctamente
    $this->assertEquals('rpimentel@example.com', $this->user->getEmail());
  }
  
  // Test para asegurarse de que la contraseña del usuario se establece y obtiene correctamente
  public function testPassword() {
    // Establecer la contraseña del usuario
    $this->user->setPassword('password123');
    
    // Asegurarse de que la contraseña del usuario se estableció correctamente
    $this->assertEquals('password123', $this->user->getPassword());
  }
}
