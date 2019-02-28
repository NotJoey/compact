<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 21.02.19
 * Time: 10:00
 */

class connectionModel extends defaultModel
{
    private $server;
    private $database;
    private $username;
    private $password;
    private $charset;
    protected $connection;

    public function connect()
    {
        $this->server = "localhost";
        $this->database = "";
        $this->username = "";
        $this->password = "";
        $this->charset = "UTF-8";
        try {
            $dsn = "mysql:host=".$this->server.";dbname".$this->database.";charset=".$this->charset;
            $pdo = new PDO($dsn, $this->username, $this->password);
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