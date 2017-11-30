<?php
    include "connection.php";
    
    $id_post = (int) ($_GET['post'] ?? 1);
    $stmt = $pdo->prepare("SELECT comment.*, user.name FROM `comment` LEFT JOIN user ON user.id = comment.user_id WHERE `post_id` = $id_post");
    $stmt->execute();
    $comments = $stmt->fetchAll();
    $comments = json_encode($comments);
    header('Content-Type: application/json');
    echo $comments;
  
?>