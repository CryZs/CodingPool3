<?php
session_start();

$script = $_SERVER['SCRIPT_NAME'];
$path = $_SESSION['path'] ?? [];
$path[] = $script;
$_SESSION['path'] = $path;
?>