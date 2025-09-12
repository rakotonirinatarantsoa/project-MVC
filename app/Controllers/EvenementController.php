<?php

namespace App\Controllers;

class EvenementController extends BaseController
{
    public function createEvenement()
    {
        $evenementModel = new \App\Models\EvenementModel();

        $data = [
            'titre'        => $this->request->getPost('titre'),
            'description' => $this->request->getPost('description'),
            'date'        => $this->request->getPost('date'),
            'lieu'        => $this->request->getPost('lieu'),
            'categorie'  => $this->request->getPost('categorie'),
            'image'       => $this->request->getPost('image')
        ];
        // var_dump($data);

        $insertId = $evenementModel->ajouterEvenement($data);

        // if ($insertId) {
        //     // Get the newly inserted row
        //     $newBillet = $evenementModel->find($insertId);

        //     // Send data to view
        //     return view('accueil', ['billet' => $newBillet]);
        // } else {
        //     return view('accueil');
        // }
    }

    public function afficherListeEvenement()
    {
        $evenementModel = new \App\Models\EvenementModel();
        $listeEvenements = $evenementModel->findAll();
    }
}
