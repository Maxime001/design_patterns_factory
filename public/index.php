<?php
session_start();

require '../app/Autoloader.php';
\App\Autoloader::register();

$config = new App\Config();

// Avoir 1 seule instance d'une classe, avec l'avantage par rapport a une classe statique d'avoir un vrai constructeur ! 

var_dump(App\Config::getInstance());
var_dump(App\Config::getInstance());
var_dump(App\Config::getInstance());
var_dump(App\Config::getInstance());
var_dump(App\Config::getInstance());
var_dump(App\Config::getInstance());