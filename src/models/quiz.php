<?php

namespace Application\Models\Quiz;

require_once('src/lib/database.php');

use Application\Lib\Database\DatabaseConnection;

class Quiz
{
    public string $title;
    public string $frenchCreationDate;
    public string $content;
    public string $identifier;
}