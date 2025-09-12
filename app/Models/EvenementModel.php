<?php

namespace App\Models;

use CodeIgniter\Model;

class EvenementModel extends Model
{
    protected $table            = 'evenements';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;

    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;

    protected $allowedFields    = [
        'titre',
        'description',
        'date',
        'lieu',
        'categorie',
        'image'
    ];

    /**
     * Add a new billet row
     *
     * @param array $data
     * @return int|false  Inserted ID on success, false on failure
     */
    public function ajouterEvenement(array $data)
    {
        if ($this->insert($data)) {
            return $this->getInsertID();
        }
        return false;
    }
}
