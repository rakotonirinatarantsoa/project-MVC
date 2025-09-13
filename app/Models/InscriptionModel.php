<?php

namespace App\Models;

use CodeIgniter\Model;

class InscriptionModel extends Model
{
    protected $table            = 'utilisateur';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;

    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;

    protected $allowedFields    = [
        'Nom',
        'Prenom',
        'Sexe',
        'Email',
        'Password',
        'Adresse',
        'Telephone',
        'Postal',
        'Ville'
    ];

    /**
     * Add a new billet row
     *
     * @param array $donnee
     * @return int|false  Inserted ID on success, false on failure
     */
    public function FaireInscription(array $donnee)
    {
        if ($this->insert($donnee)) {
            return $this->getInsertID();
        }
        return false;
    }
}
