<?php

namespace App\Controllers;

use App\Models\AdminModel;

class Login extends BaseController
{
    public function index()
    {
        return view('login/form');
    }

    public function auth()
    {
        $data = [
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password'),
        ];
        $rules = [
            'email' => 'valid_email|required',
            'password' => 'required'
        ];
        if (!$this->validateData($data, $rules)) return view('login/form', ['errors' => $this->validator->getErrors()]);

        $admin = new AdminModel();
        $admin = $admin->where('email', $data['email'])->first();
        if(empty($admin)) return view('login/form', ['errors' => ['email' => 'Failed to login, check your email or password.']]);
        
        if(!password_verify($data['password'], $admin['password'])) return view('login/form', ['errors' => ['email' => 'Failed to login, check your email or password.']]);

        session()->set([
            'uid' => $admin['id'],
            'email' => $admin['email']
        ]);

        return redirect()->to(base_url('/dashboard'), 200);
    }
}
