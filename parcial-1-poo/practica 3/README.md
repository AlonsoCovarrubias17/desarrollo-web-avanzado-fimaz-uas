# desarrollo-web-avanzado-fimaz-uas

Repositorio de evidencias de la asignatura Desarrollo Web Avanzado – LISI – FIMAZ - UAS



PRÁCTICA DE LABORATORIO 3: SISTEMA DE USUARIOS CON VALIDACIONES Y EXCEPCIONES



Objetivo: Desarrollar un sistema orientado a objetos más robusto,

integrando herencia, validaciones y manejo de excepciones para

simular un entorno profesional



Instrucciones paso a paso



Paso 1. Estructura del proyecto



Dentro de practica-3, crear la siguiente estructura:



/clases

&nbsp;Usuario.php

&nbsp;Admin.php

&nbsp;Alumno.php

index.php

README.md



Paso 2. Clase Usuario base



1\. Atributos:

o nombre

o correo

2\. Validar que el correo tenga formato válido.

3\. Lanzar una excepción si el correo no es correcto.



Paso 3. Clases derivadas



• Admin

o Método getRol() → “Administrador”

• Alumno

o Atributo adicional: matricula

o Método getRol() → “Alumno”



Paso 4. Manejo de excepciones



En index.php:

1\. Implementar bloques try/catch.

2\. Probar creación de usuarios válidos e inválidos.

3\. Mostrar mensajes de error controlados.

