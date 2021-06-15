<?php

class Dbh {
    private $host = "localhost";
    private $user = "dhmodh";
    private $pwd = "dishantmodh";
    private $dbName = "oopphp";

    protected function connect() {
        //DSN = Data Source Name
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
        $pdo = new PDO($dsn, $this->user, $this->pwd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}