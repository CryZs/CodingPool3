<?php 
    $login = $_POST['login'] ?? $_COOKIE['login'] ?? '';
    $remember = (bool) ($_POST['remember'] ?? false);
    if ($remember && $login !== ''){
        setcookie('login',$login,time()+10);
    }
    
?>
<form method="post">
    <input type="text" name="login" value="<?php echo $login;?>"/>
    <input type="password" name="password"/>
    <input type="submit" value="Submit"/>
    <input type="checkbox" name="remember"/>
</form>