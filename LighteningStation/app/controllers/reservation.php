<?php

Class Reservation extends Controller
{
    function index()
    {
        $data['page_title'] = "Reservation";
        $this->view("reservation", $data);
    }
}