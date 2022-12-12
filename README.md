# Prueba Técnica Raudely Pimentel

## Clases

- Se creearon dos clases User y UserRepository

### User

- Representa a un usuario en el sistema.

### UserRepository

- Representa el repositorio de usuarios en el sistema

## Pruebas 
- Se crearon dos pruebas una para verificar que funcione correctamente la clase User y otra para verificar que funcione correctamente la clase UserRepository

### UserTest

- Comprueba que los datos del usuarios se setean y obtienen correctamente.

### SaveUserTest

- Comprueba que las clases User y UserRepository funcionen correctamente, en conjunto, seteando los datos de un usuario e implementando el metodo save de la clase UserRepository

## Instalacion

- Clonar el repositorio
- Navegar hasta el directorio donde se encuentra el proyecto
- Ejecutar el comando ``composer install``
- Ejecutar el caso de uso a travees del comando ``php .\caso_uso.php``
- Ejecutar las pruebas a traves del comando ``./vendor/bin/phpunit``

