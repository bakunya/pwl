<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        if(empty(session('uid'))) return redirect()->to(base_url('/login'));
        die('dashboard');
    }
}
