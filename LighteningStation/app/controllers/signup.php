<!-- If the users doesn't provide a method, this will be our default method -->
<?php

Class Signup extends Controller
{
    function index()
    {
        $data['page_title'] = "Signup";
        $this->view("signup", $data);
    }
}