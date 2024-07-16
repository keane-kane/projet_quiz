<?php

namespace Application\Controllers\QuizController;

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
        if($connection != null)
            var_dump($connection);
        // $commentRepository = new CommentRepository();
        // $commentRepository->connection = $connection;
        // $comments = $commentRepository->getComments($identifier);

        require('src/views/quiz.php');
    }
}