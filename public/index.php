<?php
require_once __DIR__ . '/../vendor/autoload.php';
use HelloWorld\SayHello;
echo SayHello::world();
echo'<br/>';
use App\wcs\Hello;
$hello = new Hello();
echo $hello->talk();
