<?php 
    namespace Core\Controller;
    abstract class Controller {
        protected function render($arg, $data = []){
            extract($data);
            include __DIR__."/../../src/Resources/views/$arg";
        }
//        protected function render($arg1, $arg2){
//            include __DIR__."/../../src/Resources/Views/$arg1&$arg2";
//        }
        protected function json($data){
            $json = json_encode($data);
            header('Content-Type: application/json');
            echo $json;
        }
    }
?>