<?php

namespace Vendor\Univer\Repositories;

class Connector
{
    private $pdo;

    public function __construct($databasename, $user, $pass, $host){

        $mysql = new \PDO('mysql:host='.$host, $user, $pass);
        $pstatment = $mysql->prepare("CREATE DATABASE IF NOT EXISTS $databasename");
        $pstatment->execute();
        $this->pdo = new \PDO('mysql:host='.$host.';dbname=' . $databasename . ';charset=UTF8', $user, $pass);
        if (!$this->pdo) {
            return false;
        }

    }

}