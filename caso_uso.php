<?php
require 'User.php';
require 'UserRepository.php';

// Crear una instancia de la clase User y establecer sus atributos
$user = new User();
$user->setName('Raudely Pimentel');
$user->setEmail('rpimentel@example.com');
$user->setPassword('password123');

// Crear una instancia de la clase UserRepository y guardar el usuario en el repositorio
$repository = new UserRepository();
$repository->save($user);

$users = $repository->getUsers();

print_r($users);
