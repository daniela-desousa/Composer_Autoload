<?php
require_once __DIR__ . '/../vendor/autoload.php';
use App\Wcs\Hello;
use HelloWorld\SayHello;

$hello = new Hello();
echo $hello->talk();

require_once __DIR__ . '/../vendor/ehime/hello-world/src/HelloWorld/SayHello.php';

$hello2= new SayHello();
echo $hello2->world();