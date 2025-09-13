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
        $evenementModel = new \App\Models\ReservationModel();

        $data = [
            'nom_client'            => $this->request->getPost('nom_client'),
            'prenom_client'         => $this->request->getPost('prenom_client'),
            'email'                 => $this->request->getPost('email'),
            'telephone'             => $this->request->getPost('telephone'),
            'date_reservation'      => date('Y-m-d H:i:s'),
            'nombre_personnes'      => $this->request->getPost('nombre_personnes'),
            'id_evenement'          => $this->request->getPost('id_evenement')
        ];
        $insertId = $evenementModel->ajouterReservation($data);
        return redirect()->to('');
    }
}
