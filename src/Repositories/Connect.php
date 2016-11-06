<?php

namespace Repositories;

class Connect
{
    private $pdo;

    public function __construct($user, $password, $database)
    {

        $pdo = new \PDO('mysql:host=localhost;dbname=' . $database . ';charset=UTF8', $user, $password);
        if (!$this->pdo) {
            return false;
        }
    }

}