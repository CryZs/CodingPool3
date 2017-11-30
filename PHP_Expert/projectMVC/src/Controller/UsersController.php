<?php

namespace App\Controller;

use App\Repository\PostRepository;
use App\Repository\UsersRepository;
use Core\Controller\Controller /* as Test */;

class UsersController extends Controller{
    public function getUser($username){
        $usersRepository = new UsersRepository();
        $user = $usersRepository->find($username);
        $this->render('profil.php',[
            'user' => $user
        ]);
    }
    public function getUserPosts($username){
        echo $username;
    }
}