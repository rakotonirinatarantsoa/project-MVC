<?php

namespace App\Controllers;

class InscriptionController extends BaseController
{
    public function inscription()
    {
        $inscription = new \App\Models\InscriptionModel();
        
        $donnee = [
            'Nom'       => $this->request->getPost('nom'),
            'Prenom' => $this->request->getPost('prenom'),
            'Sexe'        => $this->request->getPost('sexe'),
            'Email'        => $this->request->getPost('email'),
            'Password'   => $this->request->getPost('password'),
            'Adresse'       => $this->request->getPost('adresse'),
            'Telephone'      => $this->request->getPost('telephone')
            'Postal'      => $this->request->getPost('postal')
            'Ville'      => $this->request->getPost('ville')
        ];
        // var_dump($donnee);

        $insertId = $inscription->FaireInscription($donnee);

        // if ($insertId) {
        //     // Get the newly inserted row
        //     $newBillet = $evenementModel->find($insertId);

        //     // Send data to view
        //     return view('accueil', ['billet' => $newBillet]);
        // } else {
        //     return view('accueil');
        // }
    }
}
