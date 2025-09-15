<?php

namespace App\Controllers;

class ConnexionController extends BaseController
{
    public function connexion()
    {

        $session = session();
        $userModel = new \App\Models\InscriptionModel();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = $userModel->where('Email', $email)->first();

        if ($user) {
            // Vérification du mot de passe
            var_dump($password);
            var_dump($user['Password']);
            if ($password === $user['Password']) {
                // Stocker l’utilisateur dans la session
                $session->set([
                    'user_id' => $user['id'],
                    'email'   => $user['Email'],
                    // 'logged_in' => true,
                ]);
                return redirect()->to(base_url('/accueilConnecte'));
            } else {
                return redirect()->back()->with('error', 'Mot de passe incorrect');
            }
        } else {
            return redirect()->back()->with('error', 'Aucun compte trouvé avec cet email');
        }
        
    }
}
