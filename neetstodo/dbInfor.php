<?php
require 'vendor/autoload.php';
use Medoo\Medoo;

$database = new Medoo([
    'database_type' => 'mysql',
    'database_name' => '(your database name)',
    'server' => '(your domain)',
    'username' => '(your user name)',
    'password' => '(password)',
    'charset' => 'utf8'
]);
?>