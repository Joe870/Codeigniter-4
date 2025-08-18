<?php

namespace App\Controllers;
use App\Models\UserModel;

class Users extends BaseController
{
    public function index(): string
    {
        $data = [];

        return view('login', $data);
    }
    
    public function register(){
        // $db = \Config\Database::connect();
        // if (!$db->connID) {
        //     dd('Database connection failed', $db->error());
        // } else {
        //     dd('Database connected succesfully');
        // }
        $data = [];
        
        if ($this->request->getMethod() == 'post'){
            $rules = [
                'firstname' => 'required|min_length[3]|max_length[50]',
                'lastname' => 'required|min_length[3]|max_length[50]',
                'email' => 'required|valid_email|min_length[6]|max_length[50]',
                'password' => 'required|min_length[5]|max_length[255]',
                'password_confirm' => 'matches[password]'
            ];

        if (! $this->validate($rules)) {
            $data['validation'] = $this->validator;
            // dd($this->validator->getErrors());
        } else {
            $model = new UserModel();
            $newdata = [
                'firstname' => $this->request->getVar('firstname'),
                'lastname' => $this->request->getVar('lastname'),
                'email' => $this->request->getVar('email'),
                'password' => $this->request->getVar('password'),
            ];

            if ($model->save($newdata)) {
                $session = session();
                $session->setFlashdata('succes', 'Successful Registration');
                return redirect()->to('./login');
            } else {
                $data['validation'] = $model->errors();
            }
        }
    }
    return view('register', $data);
    }
}
