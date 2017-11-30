<?php
    include "connection.php";

    $case = $_GET['q'] ?? 'all';
    
    switch($case){
        
        case 'best_authors':
            $limit = (int) ($_GET['limit'] ?? 3);
            $offset = $limit *($page - 1);
            
            $stmt = $pdo->prepare("SELECT user.name, AVG(comment.rate) AS note_user FROM post LEFT JOIN comment ON comment.post_id = post.id LEFT JOIN user ON post.author_id = user.id GROUP BY user.name ORDER BY AVG(comment.rate) DESC LIMIT $limit");
        
            $stmt->execute();
            $posts = $stmt->fetchAll();
            $posts = json_encode($posts);
            header('Content-Type: application/json');
            echo $posts;
            
            break;
        case 'most_popular':
            $limit = (int) ($_GET['limit'] ?? 2);
            $page = $_GET['page'] ?? 1;
     
            $offset = $limit *($page - 1);
            
            $stmt = $pdo->prepare("SELECT AVG(comment.rate) AS moyenne, post.id, post.title, LEFT(post.body,100) AS extrait, user.name AS author FROM `comment` LEFT JOIN post ON post.id = comment.post_id LEFT JOIN user ON post.author_id = user.id GROUP BY post.title ORDER BY moyenne DESC LIMIT 5 OFFSET $offset");
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
            
            $stmt = $pdo->prepare("SELECT post.*, user.name, AVG(comment.rate) AS note, LEFT(post.body,100) AS body2 FROM post LEFT JOIN comment ON post.id = comment.post_id LEFT JOIN user ON post.author_id = user.id GROUP BY post.title LIMIT $limit OFFSET $offset");
            $stmt->execute();
            $posts = $stmt->fetchAll();
            $posts = json_encode($posts);
            header('Content-Type: application/json');
            echo $posts;
            break;
        case 'article':
            $id = (int)($_GET['id'] ?? 1);
            $stmt = $pdo->prepare("SELECT post.* FROM post LEFT JOIN user ON user.id = post.author_id LEFT JOIN comment ON comment.post_id = post.id WHERE post.id=$id");
            $stmt->execute();
            $posts = $stmt->fetchAll();
            $posts = json_encode($posts[0] ?? null);
            header('Content-Type: application/json');
            echo $posts;
            break;
        case 'all':
            $stmt = $pdo->prepare("SELECT * FROM post");
            $stmt = execute();
            $posts = $stmt->fetchAll();
            $posts = json_encode($posts[0] ?? null);
            header('Content-Type: application/json');
            echo $posts;
    }
    
       
    
    
?>