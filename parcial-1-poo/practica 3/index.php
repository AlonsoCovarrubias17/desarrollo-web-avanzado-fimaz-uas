<?php

require_once __DIR__ . '/Admin.php';
require_once __DIR__ . '/Alumno.php';

  echo "<h2>Pruebas del sistema</h2>";

   try {
    $admin = new Admin("Alonso Covarrubias", "Alonso@empresa.com");
    echo "Usuario creado: " . $admin->getNombre() . " - Rol: " . $admin->getRol() . "<br>";

    $alumno = new Alumno("Gabriela Aguilar", "gaby@correo.com", "20231234");
    echo "Usuario creado: " . $alumno->getNombre() . " - Rol: " . $alumno->getRol() . "<br>";

    // Usuario con correo inválido
    $usuarioInvalido = new Admin("Sophia", "correo-invalido");
    echo "Este mensaje no debería mostrarse.";

} catch (Exception $e) {
    echo "<strong>Error:</strong> " . $e->getMessage();
}
