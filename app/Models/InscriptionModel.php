<?php

namespace App\Models;

use CodeIgniter\Model;

class InscriptionModel extends Model
{
    protected $table            = 'utilisateurs';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;

    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;

    protected $allowedFields    = [
        'Nom',
        'Prenom',
        'Email',
        'Password',
        'Postal',
        'Ville'
    ];

    /**
     * Add a new billet row
     *
     * @param array $donnee
     * @return int|false  Inserted ID on success, false on failure
     */
    public function FaireInscription(array $data)
    {

        if ($this->insert($data)) {
            return $this->getInsertID();
        }
        return false;
    }
}
