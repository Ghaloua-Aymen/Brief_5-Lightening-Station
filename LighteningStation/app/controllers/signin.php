<?php

Class Signin extends Controller
{
    public function __construct() {
        $this->userModel = $this->model('User');
    }


    public function index()
    {
        $data = [
            'title => Signin'
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            if (isset($_POST['submit']))
            {
                
            }
        }

        $this->view("signin", $data);
    }
}