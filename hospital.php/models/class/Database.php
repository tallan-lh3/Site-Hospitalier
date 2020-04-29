<?php
class Database{
    protected $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=hospitale2n;charset=utf8', 'root', '');
    }
}