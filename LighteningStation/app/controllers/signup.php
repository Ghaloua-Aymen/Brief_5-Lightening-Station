<!-- If the users doesn't provide a method, this will be our default method -->
<?php

Class Signup extends Controller
{
    
    function index()
    {
        $data['page_title'] = "Signup";
        $data = [
            'E-mail' => '',
            'Password' => '',
            'First Name' => '',
            'Last Name' => '',
            'Address' => '',
            'N° Phone' => ''
        ];
        
        $this->view("signup", $data);
        var_dump($this->view("signup", $data)); 
    }

}