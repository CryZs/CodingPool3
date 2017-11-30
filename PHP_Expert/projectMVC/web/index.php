<?php

// ========= SUPRESSION APRES INSTALL DE COMPOSER ========= //
/*
spl_autoload_register(function($className){
    $className = str_replace("\\","/",$className);
    if(strpos($className,'App') === 0){
        $className = preg_replace('/^App/','src',$className);   
        require_once __DIR__ . "/../$className.php";
    }
    if(strpos($className,'Core') === 0){
        $className = preg_replace('/^Core/','core',$className);
        require_once __DIR__ . "/../$className.php";
    }
});
*/

require '../vendor/autoload.php';


$request_uri = $_SERVER['REQUEST_URI'];
$foo = preg_match('/^\/project\/web\/index\.php\?([^\?]+)(\?(.+))?$/', $request_uri, $matches);
//echo "<pre>";var_dump($matches);echo '</pre>';
if (count($matches) !== 0){
    $query = $matches[3] ?? '';
    parse_str($query, $args);
//    echo "<pre>";var_dump($args);echo '</pre>';
    $uri = $matches[1];
    $routes = parse_ini_file(__DIR__.'/../src/Resources/config/root.ini',true);
    
    foreach($routes as $controller => $config){
//        require_once "../src/Controller/$controller.php";
        $controller = "App\\Controller\\$controller";
        foreach($config as $route => $method){
            
            $route = str_replace('/','\\/',$route);
            $route = preg_replace('/:[^\/]+/','([^\/]+)\\',$route);
            $route = rtrim($route,'\\');
            preg_match("/^$route$/",$uri,$matchRoute);
            
            
            if (count($matchRoute) !== 0){
                array_shift($matchRoute);
                $controller = new $controller();
                $controller->$method(...$matchRoute);
            }
        }
    }
// ============ Méthode à l'arrache ============ //
//    switch ($uri){
//        case '/':
//            $controller = new DefaultController();
//            $controller->homepage();
//            break;
//        case '/contact':
//            $controller = new DefaultController();
//            $controller->contact();
//            break;
//    }
}

// ============ CONNEXION DB ============ //
/*
echo "<pre>";
$dsn = 'mysql:dbname=project;host=127.0.0.1;port=3306;charset=utf8';
$db = new PDO($dsn,'root','root');
echo "</pre>";
*/
