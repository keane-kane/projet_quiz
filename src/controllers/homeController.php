<?php

namespace Application\Controllers;

class HomeController
{
    public function homePage()
    {
    
        // Display home page
        require('templates/home.php');
    }
}