<?php
//NO MOVER ESTE ARCHIVO
//SOLO DIOS SABE COMO ES QUE FUNCIONO
//UTILIZENLO PARA REALIZAR LAS CONEXIONES EN LOS ARCHIVOS CORRESPONDIENTES

$config = require 'C:/Clock-in-out/config.php';

$servername = $config['host'];
$conectioninfo = array(
	'Database' => $config['database'],
	'UID' => $config['user'],
	'PWD' => $config['password'],
	'TrustServerCertificate' => true,
	'Driver' => '{ODBC Driver 18 for SQL Server}'
);
$conectar = sqlsrv_connect($servername,$conectioninfo);
if ($conectar !== false){
	echo 'CONEXION EXITOSA Y FUNCIONANDO';
}else{
	echo 'CONEXION FALLIDA';
	die(print_r(sqlsrv_errors(), true));
}
?>

