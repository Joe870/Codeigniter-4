<?php

namespace App\Controllers;
use App\Models\UserModel;

class Users extends BaseController
{
    public function index(): string
    {
        return view('login');
    }

    public function register()
    {
        $userModel = new UserModel();

        if ($this->request->getMethod() === 'post') {
            // Validation rules
            $rules = [
                'username'          => 'required|min_length[3]|max_length[50]',
                'email'             => 'required|valid_email|min_length[6]|max_length[50]|is_unique[users.email]',
                'password'          => 'required|min_length[5]|max_length[255]',
                'password_confirm'  => 'matches[password]'
            ];

            if ($this->validate($rules)) {
                // Save raw password -> model hashes it
                $newData = [
                    'username' => $this->request->getPost('username'),
                    'email'    => $this->request->getPost('email'),
                    'password' => $this->request->getPost('password'),
                ];

                $userModel->insert($newData);

                return redirect()->to('/register')->with('success', 'User registered successfully!');
            } else {
                // If not valid, show errors
                return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
            }
        }

        // GET request → show form
        return view('register');
    }
}