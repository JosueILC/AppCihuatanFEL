<?php
$server ='10.1.1.24';
$usuario='su';
$contrasena='XqzhT16as$21Suu';
$basedatos='ILC_Presupuesto';
//$infoConex = array("Database" => $basedatos, "UID"=>$usuario, "PWD"=>$contrasena);
//$infoConex = array("Database" => $basedatos, "UID"=>$usuario, "PWD"=>$contrasena);
//$infoConex = array("Database" => $basedatos, "UID"=>$usuario, "PWD"=>$contrasena,"ReturnDatesAsStrings"=>true,"CharacterSet" => "UTF-8");
//$infoConex = array("Database" => $basedatos, "UID"=>$usuario, "PWD"=>$contrasena,"ReturnDatesAsStrings"=>true,"CharacterSet" => "UTF-8");
$infoConex = array("Database" => $basedatos, "UID"=>$usuario, "PWD"=>$contrasena,"ReturnDatesAsStrings"=>true,"CharacterSet" => "UTF-8");
$conexion = sqlsrv_connect($server, $infoConex);
if (!$conexion) die('Error de conexión a SQL SERVER');
//if (!$conexion) die(print_r(sqlsrv_errors(), true));
//$BD=mssql_select_db($basedatos, $conexion);
?>