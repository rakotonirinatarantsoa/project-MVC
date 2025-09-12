<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function accueil(): string
    {
        return view('accueil');
    }

    public function login()
    {
        return view('login');
    }

    public function inscription()
    {
        return view('inscription');
    }
}
