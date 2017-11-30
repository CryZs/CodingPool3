<?php

namespace App\Repository;

use Core\Database\Repository;

class UsersRepository extends Repository{
    public function find($username){
        $stmt = $this->db->query("SELECT * FROM user WHERE name = '$username'");
        $users = $stmt->fetchAll();
        return ($users[0] ?? null);
    }
}