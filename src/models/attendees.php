<?php

namespace Application\Models\Attendees;

require_once('src/lib/database.php');

use Application\Lib\Database\DatabaseConnection;

class Attendees
{
    public string $title;
    public string $frenchCreationDate;
    public string $content;
    public string $identifier;
}