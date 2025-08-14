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
                'email' => 'required|min_length[6]|max_length[50]',
                'password' => 'required|min_length[5]|max_length[200]',
            ];

        if (! $this->validate($rules)) {
            $data['validation'] = $this->validator;
        }else{
            $model = new UserModel();
            $newdata = [
                'firstname' => $this->request->getVar('firstname'),
                'lastname' => $this->request->getVar('lastname'),
                'email' => $this->request->getVar('email'),
                'password' => $this->request->getVar('password'),
            ];
            $model->save($newData);
            $session = session();
            $session->setFlashdata('succes', 'Successful Registration');
            return redirect()->to('./login');
        }
        }

        return view('register', $data);
    }

    public function getUsers() {

        
    }
}
