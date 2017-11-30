<?php 
     session_start();
     $path = $_SESSION['path'] ?? [];
     unset($_SESSION['path']);
?>
<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <h1>Résultats</h1>
        <ul>
            <?php 
            foreach($path as $page){
                echo '<li>'.$page.'</li>';
            }
            ?>
        </ul>
    </body>
</html>