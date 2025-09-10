<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function accueil(): string
    {
        return view('accueil');
    }
}
