<?php

namespace Application\Lib\Database;

class DatabaseConnection
{
    public ?\PDO $database = null;
    public $servername = 'localhost';
    public $username = 'root';
    public $password = '';
    public $bdnam = 'quizz';
    public $charset = 'charset=utf8';

    public function getConnection(): \PDO
    {
        if ($this->database === null) {
         //  $this->database = new \PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'blog', 'password');
         $this->database  = new \PDO('mysql:host='.$servername.';dbname='.$bdnam.';'.$charset,$username,$password);
       
         var_dump($this->database);
        }

        return $this->database;
    }
}
