<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ReservationController extends BaseController
{
    public function afficherFormulaireReservationEvenement($id)
    {
        return view('reserver', ['idEvenement' => $id]);
    }



    public function createReservation()
    {
        $reservationModel= new \App\Models\ReservationModel();

        $model = new \App\Models\EvenementModel();
        
        

        $data = [
            'nombre_personnes' => $this->request->getPost('nombre_personnes'),
            'categorie'  => $this->request->getPost('categorie'),
            'id_evenement' => $this->request->getPost('id_evenement')
        ];

        $data0 = $model->find($data['id_evenement']);

        //MAJ anle isan'ilay ticket 
        $data0['places'] -= $data['nombre_personnes'];


        $model->update($data['id_evenement'], $data0);
        
        $insertId = $reservationModel->ajouterReservation($data);

        return redirect()->to(base_url("succesReservation/{$data['id_evenement']}/{$data['nombre_personnes']}/{$data['categorie']}")
);

    }

public function succesReservation($id, $n, $c)
{
    $model = new \App\Models\EvenementModel();

    $evenement = $model->find($id);


    $data = [
        'evenement' => $evenement,
        'nombre'    => $n,
        'montant'   => $evenement['prix'],
        'categorie' => strtolower($c)
    ];

    switch ($data['categorie']) {
        case 'bronze':
            $data['montant'] *= 1.5;
            break;
        case 'silver':
            $data['montant'] *= 2;
            break;
        case 'gold':
            $data['montant'] *= 2.5;
            break;
        case 'vip':
            $data['montant'] *= 5;
            break;
        default:
            $data['montant'] *= 1;
            break;
    }

    $data['montant'] *= $n;
    return view('succesReservation', $data);
}

}
