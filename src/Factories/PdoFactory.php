<?php

namespace App\Factories;

use PDO;

class PdoFactory
{
    public function __invoke(): PDO
    {
        $pdo = new PDO('mysql:dbname=shopping_list;host=DB', 'root', 'password');
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
}
