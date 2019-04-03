<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 21.02.19
 * Time: 10:00
 */
class connectionModel
{
    private $server;
    private $database;
    private $username;
    private $password;
    protected $connection;

    public function connect()
    {
        $this->server = "localhost";
        $this->database = "";
        $this->username = "";
        $this->password = "";
        try {
            $pdo = new PDO("mysql:host=$this->server;dbname=$this->database", $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->connection = $pdo;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function disconnect()
    {
        $this->connection = NULL;
    }
}
