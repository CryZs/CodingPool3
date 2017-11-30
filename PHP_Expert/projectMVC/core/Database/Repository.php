<?php

namespace Core\Database;

abstract class Repository{
    protected $db;
    public function __construct(){
        $database = Database::getInstance();
        $this->db = $database->getConnection();
    }
}