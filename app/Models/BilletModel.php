<?php

namespace App\Models;

use CodeIgniter\Model;

class BilletModel extends Model
{
    protected $table            = 'billets';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;

    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;

    protected $allowedFields    = [
        'prix',
        'description',
        'date',
        'lieu',
        'categories',
        'image'
    ];

    /**
     * Add a new billet row
     *
     * @param array $data
     * @return int|false  Inserted ID on success, false on failure
     */
    public function addBillet(array $data)
    {
        if ($this->insert($data)) {
            return $this->getInsertID();
        }
        return false;
    }
}
