<?php

namespace App\Controllers;



class Login extends BaseController
{
       public function view_login(){
        return view('login/login');
       }

       public function view_forgotpwd(){
              return view('login/forgot_password');
             }
}
