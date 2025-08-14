<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        $data = [];

        return view('login', $data);
    }
    
    public function register(){
        $data = [];

        return view('register', $data);
    }
}
