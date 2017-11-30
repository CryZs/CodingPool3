<?php 
session_start();
    $login = $_POST['login'] ?? '';
    $password = $_POST['password'] ?? '';
    
    $users = [
    'cryz'=>'b313201182ad0f3af5174f8a67258e73'
    ];
    
    foreach($users as $user => $md5){
        if ($user === $login && $md5 === md5($password)){
            header('location: admin.php');
            $_SESSION['login'] = $login;
            die();
        }
        else {
            $_SESSION['error'] = 'Login failed';
            header('location: auth.php');
            echo '<p>Save errors to session</p>';
            echo '<p>redirect to auth.php</p>';
        }
    }
?>