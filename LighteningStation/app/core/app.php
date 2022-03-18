<!-- 
    POO is used here; we are dealing with classes. 
    This is our router; it gets whatever in the url and run a specific class name with specific functions. 
-->

<?php

/*  
    A "controller" is referenced in the URL as: "localhost/../public/"controller"/...
    A "method" is referenced in the URL as: "localhost/../public/controller/"method"/...
    A "parameter" is referenced in the URL as: "localhost/../public/controller/method/"params1"/"params2"/...
*/
Class App  // This is a class.
{
    private $controller = "home"; 
    private $method = "index"; 
    private $params = []; 


// The "__construct" function runs automatically when the class is initialized, doesn't need to be called.
    public function __construct() // This is a method; a function is a method inside a class.
    {
        $url = $this->splitURL();

        if(file_exists("../app/controllers/".strtolower($url[0]).".php"))
        {
            $this->controller = strtolower($url[0]);
            unset($url[0]);
        }
        require "../app/controllers/". $this->controller .".php";
        $this->controller = new $this->controller;


        if(isset($url[1]))
        {
            if(method_exists($this->controller, $url[1])) // Object is same as a class.
            {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // Run the class and method
        $this->params= array_values($url);
        call_user_func_array([$this->controller, $this->method], $this->params);
    }



// Making the "URL" cleaner while avoiding malicious input by the user by using "FILTER_SANITIZE_URL".
    private function splitURL()
    {
       $url = isset($_GET['url']) ? $_GET['url'] : "home";
       return explode("/", filter_var(trim($url, "/"), FILTER_SANITIZE_URL));
    }

}