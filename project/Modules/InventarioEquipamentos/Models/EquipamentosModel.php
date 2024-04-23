<?php

namespace Modules\InventarioEquipamentos\Models;

use CodeIgniter\Model;

class EquipamentosModel extends Model
{
    const TABLE = 'tbl_equipamentos';
    const FIELD_ID = 'id';
    const FIELD_ATIVO = 'ativo';
    const FIELD_NI = 'ni';
    const FIELD_SN = 'sn';
    const FIELD_TIPO = 'tipo';
    const FIELD_MARCA = 'marca';
    const FIELD_MODELO = 'modelo';
    const FIELD_LOCALIZACAO = 'localizacao';
    const FIELD_PISO = 'piso';
    const FIELD_SALA = 'sala';
    const FIELD_SERVICO = 'servico';
    const FIELD_DISPONIVEL = 'disponivel';
    const FIELD_EMPRESTIMO_ID = 'emprestimo_id';
    const FIELD_NOTAS = 'notas';
    const FIELD_AQUISICAODTM = 'aquisicaoDtm';
    const FIELD_UPDATEDDTM = 'updatedDtm';

    protected $table            = self::TABLE;
    protected $primaryKey       = self::FIELD_ID;
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        self::FIELD_ATIVO,
        self::FIELD_NI,
        self::FIELD_SN,
        self::FIELD_TIPO,
        self::FIELD_MARCA,
        self::FIELD_MODELO,
        self::FIELD_LOCALIZACAO,
        self::FIELD_PISO,
        self::FIELD_SALA,
        self::FIELD_SERVICO,
        self::FIELD_DISPONIVEL,
        self::FIELD_EMPRESTIMO_ID,
        self::FIELD_NOTAS,
        self::FIELD_AQUISICAODTM,
        self::FIELD_UPDATEDDTM,
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
