<?php

namespace App\Controllers;

class EvenementController extends BaseController
{
    private $isConnected = false;
    public function createEvenement()
    {
        $evenementModel = new \App\Models\EvenementModel();

        $data = [
            'titre'       => $this->request->getPost('titre'),
            'description' => $this->request->getPost('description'),
            'date'        => $this->request->getPost('date'),
            'lieu'        => $this->request->getPost('lieu'),
            'categorie'   => $this->request->getPost('categorie'),
            'image'       => $this->request->getPost('image'),
            'places'      => $this->request->getPost('places')
        ];
        $insertId = $evenementModel->ajouterEvenement($data);
    }

    public function accueil()
    {
        
        $evenementModel = new \App\Models\EvenementModel();
        $evenements = $evenementModel->findAll();
        return view('accueil', ['evenements' => $evenements, 'isConnected' =>$this->isConnected]);
    }

    public function afficherListeEvenement()
    {
        $evenementModel = new \App\Models\EvenementModel();
        $evenements = $evenementModel->findAll();
        return view('backoffice', ['evenements' => $evenements]);
    }

    public function modifier()
    {
        $model = new \App\Models\EvenementModel();
        $data = [
            'titre'       => $this->request->getPost('titre'),
            'description' => $this->request->getPost('description'),
            'date'        => $this->request->getPost('date'),
            'lieu'        => $this->request->getPost('lieu'),
            'categorie'   => $this->request->getPost('categorie'),
            'image'       => $this->request->getPost('image'),
            'places'      => $this->request->getPost('places')
        ];

        $model->update($data);
        return redirect()->to('modifierEvenement');
    }

    public function supprimer($id)
    {
        $model = new \App\Models\EvenementModel();
        $model->delete($id);
        return redirect()->to('backoffice');
    }

    public function modifierEvenement($id)
    {
        $model = new \App\Models\EvenementModel();
        $data['evenements'] = $model->find($id);
        return view('modifierEvenement', $data);
    }
}
