<?php

namespace Application\Controllers;

//require_once('src/lib/database.php');

//use Application\Lib\Database\DatabaseConnection;

class QuizController
{
    public function execute(string $identifier)
    {
      //  $connection = new DatabaseConnection();

        // $postRepository = new PostRepository();
        // $postRepository->connection = $connection;
        // $post = $postRepository->getPost($identifier);
    
        // $commentRepository = new CommentRepository();
        // $commentRepository->connection = $connection;
        // $comments = $commentRepository->getComments($identifier);
      
        // Output your text content
        echo 'Welcome to the homepage! ' . $identifier . "\n";
        echo "Le super blog de l'AVBN !\n";
        echo "Derniers billets du blog :\n";
    
        // Load and include the HTML view file without interpreting its HTML tags
        require('templates/quiz.php');
    }
}