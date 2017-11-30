<?php 
    $color = $_POST['color'] ?? $_COOKIE['color'] ?? '#FFF';
    setcookie('color',$color,time()+31536000);
?>
<style type="text/css">
    *{
        background-color: <?php echo $color;?>;
    }
</style>
<form action="" method="post">
    <input type="color" name="color"/>
    <input type="submit" value="OK"/>
</form>

<?php 
    echo $_POST['color'];
?>