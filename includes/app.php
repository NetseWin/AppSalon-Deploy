<?php 

require __DIR__ . '/../vendor/autoload.php';
$doteenv = Dotenv\Dotenv::createImmutable(__DIR__);
$doteenv->safeLoad();

require 'funciones.php';
require 'database.php';


// Conectarnos a la base de datos
use Model\ActiveRecord;
ActiveRecord::setDB($db);