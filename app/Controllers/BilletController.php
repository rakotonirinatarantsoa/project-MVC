<?php

namespace App\Controllers;

use App\Models\EventsModel;

class BilletController extends BaseController
{
    public function createBillet()
    {
        $billetModel = new \App\Models\BilletModel();

        $data = [
            'prix'        => $this->request->getPost('prix'),
            'description' => $this->request->getPost('description'),
            'date'        => $this->request->getPost('date'),
            'lieu'        => $this->request->getPost('lieu'),
            'categories'  => $this->request->getPost('categories'),
            'image'       => $this->request->getPost('image')
        ];
        // var_dump($data);

        $insertId = $billetModel->addBillet($data);

        // if ($insertId) {
        //     // Get the newly inserted row
        //     $newBillet = $billetModel->find($insertId);

        //     // Send data to view
        //     return view('accueil', ['billet' => $newBillet]);
        // } else {
        //     return view('accueil');
        // }
    }
}
?>