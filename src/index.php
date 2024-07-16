<?php

require_once 'lib/router.php';

require_once 'controllers/quizController.php';
require_once 'controllers/homeController.php';
require_once 'controllers/userController.php';

use Application\Lib\Router;
use Application\Controllers\QuizController;
use Application\Controllers\HomeController;
use Application\Controllers\UserController;

 
$router = new Router();

//$quizController = new QuizController();
$homeController = new HomeController();
$userController = new UserController();

$router->add('', function() use ( $homeController) {
    $homeController->homePage();
    //echo 'Welcome to the homepage!';
});


$router->add('user',function() use ( $userController) {
    $userController->profil();
    //echo 'Welcome to the homepage!';
});


$router->add('/contact', function() {
    echo 'This is the contact page!';
});

$router->add('/user/(\d+)', function($id) {
    echo "User ID: $id";
});
$router->dispatch($_SERVER['REQUEST_URI']);




