<?php

namespace App\Controllers;

class User extends BaseController
{
    public function barreRechercher(){
        $evenementModel = new \App\Models\EvenementModel();

        //Récupéraion du mot clé
        $search = $this->request->getVar('recherche');

        if($search){
            $data['evenements'] = $evenementModel->like('titre', $search)->findAll();
        }else{
            $data['evenements'] = $evenementModel->findAll();
        }

        return view('evenements_list', $data);
    }
}