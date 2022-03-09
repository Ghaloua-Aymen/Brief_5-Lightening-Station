<!-- If the users doesn't provide a method, this will be our default method -->
<?php

Class Login extends Controller
{
    function index()
    {
        $data['page_title'] = "Login";
        $this->view("login", $data);
    }
}