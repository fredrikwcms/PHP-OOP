<?php

class Dbconfig {
    private $host = "localhost";
    private $user = "root";
    private $pwd = "mysql";
    private $dbName = "dag2_oop";

    protected function connect() {
        $conn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
        $pdo = new PDO($conn, $this->user, $this->pwd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}