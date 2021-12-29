<?php
use Illuminate\Database\Capsule\Manager as Database;

$database = new Database;
$database->addConnection([
    'driver' => 'mysql',
    'host' => 'localhost:3308',
    'database' => 'db_veterinaria',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci'
]);

date_default_timezone_set('America/Argentina/Buenos_Aires');

$database->setAsGlobal();
$database->bootEloquent();