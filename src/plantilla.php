<?php
//PLANTILLA DEL ARCHIVO 'config.php'
//Como podran ver en el repositoio, el archivo .gitignore tiene como contenido el nombre 'config.php'
//En este archivo podran ver la plantilla que se debe crear el archivo 'config.php'.
//Asi podran conectar el servidor sql con los archivos php.
//Esto debido a que no se pueden subir las credenciales al repositorio.
//
//Creen su propio archivo config.php si quieren probar desde su propia maquinna.
//La maquina virtual ya tiene este archivo configurado asi que no tendran problemas.
//Toda la informacion necesaria ya la tienen en el grupo.
//Copien este archivo y ponganle las credenciales correctas.

//================================
//	config.php
//================================

return [
	'host' => 'IP del servidor SQL',
	'database' => 'nombre de la db',
	'user' => 'nombre del usuario',
	'password' => 'contrasena del usuario'
];
?>
