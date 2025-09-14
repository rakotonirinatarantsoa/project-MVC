<?php

namespace App\Controllers;

class InscriptionController extends BaseController
{
    public function inscription()
    {
        // $validation = \Config\Services::validation();

        // $rules = [
        //     'nom' => 'required',
        //     'prenom' => 'required',
        //     'email' => 'required|valid_email',
        //     'password' => 'required|min_length[6]',
        //     'confirm_password' => 'required|matches[password]',
        // ];

        // $errors = [
        //     'confirm_password' => [
        //         'matches' => 'Les mots de passe ne correspondent pas.'
        //     ]
        // ];

        // if(!$this->validate($rules, $errors)){
        //     // Passer la validation à la vue
        //     return view('inscription', [
        //         'validation' => $this->validator
        //     ]);
        // }

        $inscription = new \App\Models\InscriptionModel();
        
        $data = [
            'Nom'       => $this->request->getPost('nom'),
            'Prenom' => $this->request->getPost('prenom'),
            'Email'        => $this->request->getPost('email'),
            'Password'   => $this->request->getPost('password'),
            'Postal'      => $this->request->getPost('postal'),
            'Ville'      => $this->request->getPost('ville')
        ];
        // var_dump($data);

        $insertId = $inscription->FaireInscription($data);

        // return redirect()->to(site_url('accueil'));

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
