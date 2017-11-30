<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <title></title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <h1>>: cat 'posts.php';<div id="selector"></div></h1>
        <a href="/project/web/index.php?/">Home page</a>
        
        <h3>Popular</h3>   
            <?php
                $posts = $popular;
                include __DIR__."\list.php";
            ?>
        
        <h3>Newest</h3>
        <?php
                $posts = $new;
                include __DIR__."\list.php";
            ?>
<!--
        <h3>Exo</h3>
        <ul>
            <?php
            foreach ($post as $idpost){
                echo "<li>{$idpost}</li>";
            }
            ?>
        </ul>
-->
    </body>
</html>