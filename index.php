<?php

ini_set('display_errors', 1);
require_once 'vendor/autoload.php';
require_once 'config.php';

$connector = new Repositories\Connect(
    $db_config['user'],
    $db_config['password'],
    $db_config['database']
);
echo 'test';