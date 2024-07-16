<?php    
        
       $servername = 'localhost';
       $username = 'root';
       $password = '';
       $bdnam = 'quizz';
       $charset = 'charset=utf8';

  try
  {
    
    $conn = new PDO('mysql:host='.$servername.';dbname='.$bdnam,$username,null,
    array(
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        )
    );
    var_dump($conn);
  }
  catch (PDOException $e)
  {
      die('Erreur : '.$e->getMessage());
  }
            
                      
/* 
 $mysqli = new mysqli($servername,$username,$password)
http://keaner.alwaysdata.net/miniprojet/index.php

           
Samsuge__ ,keaner_quizz2 ,Hôte MySQL : mysql-keaner.alwaysdata.net
Gestionnaire MySQL : phpMyAdmin

Version : 10.4 (mariadb)
//oriente objet mysqli_connect() ,(!$conn) die('Erreur : ' .mysqli_connect_error()

//procedural    new mysqli()  ($conn->connect_error),die('Erreur : ' .$conn->connect_error)
*/
