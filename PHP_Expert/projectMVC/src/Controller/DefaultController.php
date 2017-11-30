<?php
namespace App\Controller;
use Core\Controller\Controller;
//require_once __DIR__.'/../../core/Controller/Controller.php';

class DefaultController extends Controller {
    public function homepage(){
        $this->render('homepage.php');
//        include __DIR__ . '/../Resources/views/homepage.php';
    }
    public function contact(){
        $this->render('contact.php');
//        include __DIR__ . '/../Resources/views/contact.php';
    }
    public function about(){
        $this->render('about.php');
//        include __DIR__ . '/../Resources/views/about.php';
    }
}
?>