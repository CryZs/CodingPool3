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
        <h1>SQL</h1>
        
        <main>
            <div class="req_one">
                <h2>Last_published</h2>
                <ul id="last_published">
                </ul>
                
                <button id="previous" data-page="0">Previous</button>
                <div id="numberpage" style="display:inline-block;">1</div>
                <button id="next" data-page="2">Next</button>
            </div>
            
            
            <div class="req_two">
                <h2>Most Popular</h2>
                <ul id="most_popular">
                    
                </ul>
            </div>
            <div class="req_three">
                <h2>Best Authors</h2>
                <ul id="best_authors"></ul>
            </div>
        </main>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="homepage_script.js"></script>
    </body>
</html>