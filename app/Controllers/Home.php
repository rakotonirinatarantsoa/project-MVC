<?php

namespace App\Controllers;

use App\Models\EventsModel;

class Home extends BaseController
{
    public function accueilConnected(){
        $evenementModel = new \App\Models\EvenementModel();
        $evenements = $evenementModel->findAll();
        return view('accueilConnecte', ['evenements' => $evenements, 'isConnected' => true]);
    }
    public function login()
    {
        return view('login');
    }

    public function inscription()
    {
        return view('inscription');
    }

    public function bienvenue()
    {
        $session = session();
        $nom = $session->get('nom_utilisateur');
        $prenom = $session->get('prenom_utilisateur');
        return view('bienvenue', ['nom' => $nom, 'prenom' => $prenom]);
    }

    public function crudFanampiny(): string
    {
        return view('crud');
    }

    public function eveneme(): string
    {
        return view('evenements');
    }

    public function backOffice(): string
    {
        return view('backoffice');
    }

    public function reservation(): string
    {
        return view('sections/reservation');
    }


}
