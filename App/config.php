<?php
$folderPath = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
$urlPath = str_replace($folderPath, '', $_SERVER['REQUEST_URI']); // Elimina el directorio base.
$url = trim($urlPath, '/'); // Limpia los slashes innecesarios.

define('URL', $url ?: 'page/home'); // Predetermina a 'page/home' si está vacío.

define('URL_PATH',$folderPath);
//echo $folderPath
?>