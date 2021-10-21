<?php 

require_once __DIR__ . '/../vendor/autoload.php';
Use app\Hello;
$hello = new Hello();
echo $hello->talk();

?>