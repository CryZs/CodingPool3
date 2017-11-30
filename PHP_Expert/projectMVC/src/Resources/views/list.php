<ul>
    <?php
    foreach ($popular as $post){
        $href = "index.php?/posts/{$post->getId()}";
        echo "<li><a href={$href}>{$post->getTitle()}</a> - {$post->getContent()}</li>";
    }
    ?>
</ul>