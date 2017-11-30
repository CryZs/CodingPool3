<?php 
session_start();

$login = $_SESSION['login'] ?? null;
if ($login === null){
    $_SESSION['error'] = 'login required';
    header('location: auth.php');
    die();
}