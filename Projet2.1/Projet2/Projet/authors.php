<?php
    include "connection.php";
    
    $id_post = (int) ($_GET['id_post'] ?? 1);
    $stmt = $pdo->prepare("SELECT post.id, post.title, post.body, user.name, user.email, user.enabled FROM  `post` RIGHT JOIN  `user` ON  `user`.`id` = post.author_id WHERE post.id = $id_post");
    $stmt->execute();
    $comments = $stmt->fetchAll();
    $comments = json_encode($comments);
    header('Content-Type: application/json');
    echo $comments;
  
?>