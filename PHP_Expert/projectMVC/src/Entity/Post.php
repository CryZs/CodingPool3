<?php

namespace App\Entity;

use Core\Database\Entity;

class Post extends Entity{
    protected $id;
    protected $username;
    protected $title;
    protected $body;
    public function getId(){
        return $this->id;
    }
    
    public function getUsername(){
        return $this->username;
    }
    public function getTitle(){
        return $this->title;
    }
    public function getContent(){
        return $this->body;
    }
    public function setUsername($username){
        $this->username = $username;
    }
    
}