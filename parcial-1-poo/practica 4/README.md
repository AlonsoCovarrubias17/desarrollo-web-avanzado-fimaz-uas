# desarrollo-web-avanzado-fimaz-uas

Repositorio de evidencias de la asignatura Desarrollo Web Avanzado – LISI – FIMAZ - UAS



PRÁCTICA DE LABORATORIO 4: INTEGRACIÓN POO + HERENCIA + VALIDACIONES + EXCEPCIONES (PHP 8+)



Objetivo



Construir un mini-sistema POO en PHP que simula el examen parcial, integrando:



• Encapsulamiento

• Herencia

• Polimorfismo básico (getRol() en todas las clases hijas)

• Validación de datos

• Manejo de excepciones con try/catch

• Salida en HTML (tabla)



Requisitos funcionales (lo que debe cumplir)



A) Clase base Usuario



Debe tener:

• Atributos: nombre, correo

• Constructor con validación:

o correo debe ser válido (formato email)

o Si el correo no es válido → lanzar Exception

• Getters: getNombre(), getCorreo()



B) Clases hijas



1\. Admin (extiende Usuario)

• Método getRol() retorna: "Administrador"

2\. Alumno (extiende Usuario)

• Atributo adicional: matricula

• Getter: getMatricula()

• Método getRol() retorna: "Alumno"

3\. Invitado (extiende Usuario)

• Atributo adicional: empresa

• Getter: getEmpresa()

• Método getRol() retorna: "Invitado"



C) index.php



Debe:

• Crear al menos:

o 1 Admin válido

o 1 Alumno válido

o 1 Invitado válido

o 1 registro inválido (correo mal escrito) para comprobar excepción

• Usar try/catch para evitar error fatal y mostrar un mensaje

controlado

• Mostrar una tabla HTML con columnas:

o Nombre | Correo | Rol | Matrícula | Empresa

Para columnas que no apliquen, mostrar “—”.



Ruta de ejecución en navegador:



http://localhost/desarrollo-web-avanzado-fimaz-uas/parcial-1-poo/practica%204/index.php











