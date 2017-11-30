<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <title>Post</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <h1>>: cat 'post.php';<div id="selector"></div></h1>
        <a href="/project/web/index.php?/posts">Posts</a>
        
        <h1><?php echo $post->getTitle();?></h1>
        <div><?php echo $post->getContent();?></div>
        <pre>
          <ul>
           
            <?php 
            foreach($post as $postid){
                var_dump($postid);
            }
            ?>
        </ul>
        </pre>
    </body>
</html>