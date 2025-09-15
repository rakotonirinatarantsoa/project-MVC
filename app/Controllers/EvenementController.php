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

    public function modifier($id)
    {
        $model = new \App\Models\EvenementModel();
        $data = [
            'titre'       => $this->request->getPost('titre'),
            'description' => $this->request->getPost('description'),
            'date'        => $this->request->getPost('date'),
            'lieu'        => $this->request->getPost('lieu'),
            'categorie'   => $this->request->getPost('categorie'),
            'image'       => $this->request->getPost('image'),
            'places'      => $this->request->getPost('places'),
            'prix'      => $this->request->getPost('prix')
        ];

        $model->update($id, $data);
        return redirect()->to(base_url('backoffice'));
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
