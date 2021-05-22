<?php
//conectando a la base de datos
$conectador=mysqli_connect("localhost","root","","sistemaventas");

//definiendo al flujo de horario
date_default_timezone_set('America/La_Paz');

//obteniendo y definiendo el estandar de caracteres a usar
mysqli_query($conectador,"SET charset 'utf8'");
mysqli_set_charset($conectador, 'utf8');

?>