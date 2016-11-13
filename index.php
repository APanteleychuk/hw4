<?php

ini_set('display_errors', 1);
require_once 'vendor/autoload.php';
require_once 'config.php';

$db_name = $db_config['database'];
$db_user = $db_config['user'];
$db_pass = $db_config['password'];
$db_host = $db_config['host'];

//$stmt = new \PDO("SELECT COUNT(*) FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '$db_name'");
//return (bool) $stmt->fetchColumn();

$connect = new \Vendor\Univer\Repositories\Connector($db_name, $db_user, $db_pass, $db_host );

// Make sure you have composer included
require __DIR__ . '/vendor/autoload.php';
// Install the gears router component
$router = new Gears\Router();
$router->routesPath = __DIR__.'/src/routes.php';
$router->dispatch();