<?php 
    session_start();
    $error = $_SESSION['error'] ?? '';
    unset($_SESSION['error']);
    // array_key_exists();
?>

<form method="post" action="verif.php">
    <input type="text" name="login"/>
    <input type="password" name="password"/>
    <input type="submit" value="Connexion"/>
</form>
<?php echo $error;?>