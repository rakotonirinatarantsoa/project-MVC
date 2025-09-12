<?php

namespace App\Controllers;

use App\Models\EventsModel;

class Home extends BaseController
{
    public function accueil(): string
    {
        return view('accueil');
    }

    public function crudFanampiny(): string
    {
        return view('crud');
    }

    public function eveneme(): string
    {
        return view('evenements');
    }


}
