<?php
namespace Core\Database;
use PDO;
class Database{
    protected static $_instance = null;
    protected $connection = null;
    
    public static function getInstance(){
        if (self::$_instance === null){
            self::$_instance = new Database();
        }
        return self::$_instance;
    }
    
    public function getConnection(){
        if ($this->connection === null){
            $dsn = 'mysql:dbname=project;host=127.0.0.1;port=3306;charset=utf8';
            $db = new PDO($dsn,'root','');
            $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $this->connection = $db;
        }
        return $this->connection;
    }
}
