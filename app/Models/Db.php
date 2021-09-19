<?php

namespace App\Models;

class Db {
    const DB_CONFIG = [
        "servername" => DB_HOST,
        "user" => DB_USER,
        "pwd" => DB_PASS,
        "dbName" => DB_NAME
    ];

    protected $servername = self::DB_CONFIG["servername"];
    protected $user = self::DB_CONFIG["user"];
    protected $pwd = self::DB_CONFIG["pwd"];
    protected $dbName = self::DB_CONFIG["dbName"];

    public function connect() {
        try {
            $query_string = "mysql:host=" . $this->servername . ";dbname=" . $this->dbName;
            $conn = new \PDO($query_string, $this->user, $this->pwd);
            $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (\PDOException $e) {
            die(var_dump("Connection failed: " . $e->getMessage()));
        }
    }
}