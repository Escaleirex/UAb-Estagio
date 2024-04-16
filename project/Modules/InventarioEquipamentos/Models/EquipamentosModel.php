<?php

namespace Modules\InventarioEquipamentos\Models;

use CodeIgniter\Model;

class EquipamentosModel extends Model
{
    const TABLE = 'equipamentos';
    const FIELD_ID = 'id';
    const FIELD_NOME = 'name';
    const FIELD_DESCRICAO = 'description';
    const FIELD_DATA = 'date';

    protected $table            = self::TABLE;
    protected $primaryKey       = self::FIELD_ID;
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        self::FIELD_NOME,
        self::FIELD_DESCRICAO,
        self::FIELD_DATA,
    ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
