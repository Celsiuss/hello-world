<?php
require_once "vendor/autoload.php";

$hello = new Celsiuss\Demo\Hello();
echo $hello->hello();

echo "\n";
$hiGirl = new Celsiuss\Demo\Hello('My Goddess');
echo $hiGirl->hello();
