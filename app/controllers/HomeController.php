<?php

require_once "../app/core/Controller.php";

class HomeController extends Controller
{
    public function index()
    {
        $this->view('home');
    }

    public function about()
    {
        echo "About Page";
    }
}