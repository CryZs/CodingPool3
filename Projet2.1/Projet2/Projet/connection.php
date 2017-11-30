<?php
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=exo_bdd;','cryz','') or die('CAN\'T REACH DATABASE');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
?>
