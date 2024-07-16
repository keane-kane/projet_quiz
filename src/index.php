<?php

require_once 'lib/router.php';
use Application\Lib\Router\Router;
use Application\Controllers\QuizController;
 
$router = new Router();
$quiz = new QuizController( );
var_dump($quiz);
$router->add('', function() {
    $quiz->excute('eeeeeee');
    echo 'Welcome to the homepage!';
});

$router->add('about', function() {
    echo 'This is the about page!';
});

$router->add('/contact', function() {
    echo 'This is the contact page!';
});

$router->add('/user/(\d+)', function($id) {
    echo "User ID: $id";
});
$router->dispatch($_SERVER['REQUEST_URI']);


// Vérifiez si une URL est fournie
if (isset($_GET['url'])) {
    $url = explode("/", filter_var($_GET['url'], FILTER_SANITIZE_URL));
}

// Servez directement les fichiers d'image
if (preg_match('/\.(?:png|jpg|jpeg|gif)$/', $_SERVER["REQUEST_URI"])) {
    return false; // Servez la ressource demandée telle quelle.
} 

// Analysez l'URL demandée
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$arrayurl = explode("/", $url);
$file = "";

// Vérifiez si un fichier spécifique est demandé
if (isset($arrayurl[2])) {
    $file = str_replace('-', '_', $arrayurl[2]);
}

// Si le fichier existe, incluez-le directement
if ($url !== '/' && file_exists('../' . $file . '.php')) {
    require_once('../' . $file . '.php');
} else { 
    // Réponse JSON par défaut si aucune route ou fichier spécifique n'est trouvé
    $response = array(
        'status' => 1,
        'status_message' => 'Vous êtes sur l\'API d\'attaques terroristes'
    );
    header('Content-Type: application/json');
    //echo json_encode($response);
    // Vous pouvez inclure un fichier d'erreur personnalisé si nécessaire
    // require_once('../error.php');
}
?>
