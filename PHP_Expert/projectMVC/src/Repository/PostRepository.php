<?php

namespace App\Repository;

use Core\Database\Repository;
use PDO;
use App\Entity\Post;


class PostRepository extends Repository {
    
    public function findPopular(){
        $stmt = $this->db->query("SELECT * FROM posts");
        $posts = $stmt->fetchAll(PDO::FETCH_CLASS, Post::class);
//        var_dump($posts);
        return $posts;
    }
    
    public function findNew(){
        $stmt = $this->db->query("SELECT * FROM posts");
        $posts = $stmt->fetchAll(PDO::FETCH_CLASS, Post::class);
        return $posts;
    }
    // ===== EXO ===== //
    public function find($id){
        $stmt = $this->db->query("SELECT * FROM posts WHERE id = $id");
        $posts = $stmt->fetchAll(PDO::FETCH_CLASS, Post::class);
        return ($posts[0] ?? null);
    }
}