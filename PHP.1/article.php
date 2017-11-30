<!DOCTYPE html>
<?php
    include 'connection.php';
    
    // $stmt = $pdo->prepare('SELECT * FROM post');
    // $stmt->execute();
    // $posts = $stmt->fetchAll();
    // $posts = json_encode($posts);
?>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="Content-Language" content="fr"/>
        <title>PHP SQL - Coding Pool 3</title>
    </head>
    <body>
        <a href="index.php">Home</a>
        
        <main>
            <h1 id="title"></h1>
            <div class="content"></div>
            
        </main>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="script.js"></script>
        <script>
            (function($){
                function getParameterByName(name) {
                    let url = window.location.href;
                    name = name.replace(/[\[\]]/g, "\\$&");
                    let regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
                        results = regex.exec(url);
                    if (!results) return null;
                    if (!results[2]) return '';
                    return decodeURIComponent(results[2].replace(/\+/g, " "));
                }
                let id = getParameterByName('id');
                $.get(`https://workspace-cryz.c9.io/CodingPool3/PHP/posts.php?q=one&id=${id}`).done(data =>{
                    $('#title').html(data.title);
                    $('.content').html(data.body);
                });
            })(jQuery);
        </script>
    </body>
</html>