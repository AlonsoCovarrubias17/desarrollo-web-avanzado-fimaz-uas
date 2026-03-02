<?php

require_once 'Usuario.php';
require_once 'Admin.php';

// Creando al objeto Admin
$admin = new Admin("Jesus Alonso Covarrubias Lopez", "alonso_covarrubias86@hotmail.com");

// Mostramos nombre, correo y rol
echo "Nombre: " . $admin->getNombre() . "<br>";
echo "Correo: " . $admin->getCorreo() . "<br>";
echo "Rol: " . $admin->getRol() . "<br>";

?>