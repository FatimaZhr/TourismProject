<?php

namespace App\Controllers;

class Home1 extends BaseController
{
    public function index(): string
    {
    
       return view('home/home1');

    }

    public function view_sing(): string
    {
    
       return view('login/sign');

    }

    public function view_login(): string
    {
    
       return view('login/login');

    }
    


}




 