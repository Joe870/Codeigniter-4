<?php

namespace App\Controllers;
use App\Models\Usermodel;

class Users extends BaseController
{
    public function index(): string
    {
        $data = [];

        return view('login', $data);
    }
    
    public function register(){
        $data = [];
        
        if ($this->request->getMethod() == 'post'){
            $rules = [
                'firstname' => 'required|min_length[3]|max_length[50]',
                'lastname' => 'required|min_length[3]|max_length[50]',
                'email' => 'required|valid_email|min_length[6]|max_length[50]',
                'password' => 'required|min_length[5]|max_length[200]',
                'password_confirm' => 'matches[password]'
            ];

        if (! $this->validate($rules)) {
            $data['validation'] = $this->validator;
            dd($this->validator->getErrors());
        }else{
            $model = new UserModel();
            $newdata = [
                'firstname' => $this->request->getVar('firstname'),
                'lastname' => $this->request->getVar('lastname'),
                'email' => $this->request->getVar('email'),
                'password' => $this->request->getVar('password'),
            ];
            $model->save($newdata);
            $session = session();
            $session->setFlashdata('success', 'Successful Registration');
            return redirect()->to('./login');
        }
        }

        return view('register', $data);
    }

    public function getUsers() {

        
    }
}
