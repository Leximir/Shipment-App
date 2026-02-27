<?php

namespace App\Config;

class MySql
{
    const DSN = "mysql:host=localhost;dbname=shipping";
    const USER = 'root';
    const PASSWORD = '';
    protected readonly \PDO $db;

    public function __construct()
    {
        $this->db = new \PDO(self::DSN, self::USER, self::PASSWORD);
    }
}