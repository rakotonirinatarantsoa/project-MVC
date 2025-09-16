<?php

namespace App\Controllers;

use App\Models\EventsModel;

class StatsController extends BaseController
{
    
    public function index(){
        $evenementModel = new \App\Models\EvenementModel();
        $evenements = $evenementModel->findAll();

        $gainsParMois = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        $vendusParMois = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        foreach($evenements as $event){

            $moisAnnee = (int)(substr($event['date'], 5, 6 ));
            $gainsParMois[$moisAnnee-1] += $event['gain'];
            $vendusParMois[$moisAnnee-1] += $event['vendus'];
        }
        ksort($gainsParMois);
        return view('statistiques', [ 'gainsParMois' => $gainsParMois, 'vendusParMois' => $vendusParMois]);
    }
}
