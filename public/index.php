<?php
require_once __DIR__ . '/../vendor/autoload.php';
use HelloWorld\SayHello;
echo SayHello::world();
echo'<br/>';
echo (new App\wcs\Hello)->talk();