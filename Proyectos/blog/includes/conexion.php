<?php
$server = 'localhost';
$user = 'root';
$pass = '';
$database = 'blog';
$db = mysqli_connect($server, $user, $pass, $database);

mysqli_query($db,'SET NAMES UTF8');

?>