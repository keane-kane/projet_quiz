<?php

namespace Application\Lib;

class Router {
    private $routes = [];

    public function add($pattern, $callback) {
        // Add the pattern and callback to the routes array
        $this->routes[$pattern] = $callback;
    }

    public function dispatch() {
        // Get the full URI
        $full_uri = $_SERVER['REQUEST_URI'];
        
        // Find the position of 'index.php' in the URI
        $index_php_position = strpos($full_uri, 'index.php');

        // If 'index.php' is found in the URI
        if ($index_php_position !== false) {
            // Get the part of the URI after 'index.php'
            $uri_after_index_php = substr($full_uri, $index_php_position + strlen('index.php'));

            // Trim slashes from the beginning and end
            $uri_after_index_php = trim($uri_after_index_php, '/');
            
           // echo "URI after index.php: $uri_after_index_php <br>"; // Diagnostic

            // Iterate through all registered routes
            foreach ($this->routes as $pattern => $callback) {
                // Diagnostic: Display patterns and URI for debugging
               // echo "Checking pattern: $pattern against URI: $uri_after_index_php <br>";

                // Prepare the regex pattern
                $regex = '#^' . $pattern . '$#';
               // echo "Regex: $regex <br>"; // Diagnostic

                // Check if the URI matches the pattern
                if (preg_match($regex, $uri_after_index_php, $matches)) {
                    // Diagnostic: Display matching patterns
                   
                    //var_dump($matches); // Display matches for debugging

                    // Shift off the full match
                    array_shift($matches);

                    // Call the callback function with the matching parameters
                    return call_user_func_array($callback, $matches);
                } 
            }
            // No matching pattern found
            echo '404 Not Found';
        } else {
            // 'index.php' not found in the URI
            echo '404 Not Found';
        }
    }
}


