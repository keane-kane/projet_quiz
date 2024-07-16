<?php

namespace Application\Models\Questions;

require_once('src/lib/database.php');

use Application\Lib\Database\DatabaseConnection;

class Questions
{
    public string $title;
    public string $frenchCreationDate;
    public string $content;
    public string $identifier;
}