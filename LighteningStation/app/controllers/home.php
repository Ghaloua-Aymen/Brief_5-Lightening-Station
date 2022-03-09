<!-- If the users doesn't provide a method, this will be our default method -->
<?php

Class Home extends Controller
{
    function index()
    {
        $data['page_title'] = "Home";
        $this->view("index", $data);
    }
}