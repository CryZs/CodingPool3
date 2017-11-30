<?php
    include "connection.php";
    
    $case = $_GET['q'] ?? 'all';
    
    switch($case){
        case 'all':
            $limit = (int) ($_GET['limit'] ?? 2);
            $page = $_GET['page'] ?? 1;
            $offset = $limit *($page - 1);
            
            $stmt = $pdo->prepare("SELECT * FROM post LIMIT $limit OFFSET $offset");
            $stmt->execute();
            $posts = $stmt->fetchAll();
            $posts = json_encode($posts);
            header('Content-Type: application/json');
            echo $posts;
            break;
        case 'last_published':
            $limit = (int) ($_GET['limit'] ?? 2);
            $page = $_GET['page'] ?? 1;
            $offset = $limit *($page - 1);
            
            $stmt = $pdo->prepare("SELECT * FROM post");
            $stmt->execute();
            $posts = $stmt->fetchAll();
            $posts = json_encode($posts);
            header('Content-Type: application/json');
            echo $posts;
            break;
        case 'one':
            $id = (int)($_GET['id'] ?? 1);
            $stmt = $pdo->prepare("SELECT * FROM post WHERE id=$id");
            $stmt->execute();
            $posts = $stmt->fetchAll();
            $posts = json_encode($posts[0] ?? null);
            header('Content-Type: application/json');
            echo $posts;
            break;
    }
    
    
    
    
?>