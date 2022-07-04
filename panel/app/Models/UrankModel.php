<?php
namespace App\Models;
use CodeIgniter\Model;

class UrankModel extends Model
{
    protected $table = 'USER_KNIGHTS_RANK';

    protected $allowedFields = ['shIndex','strName', 'strElmoUserID', 'strElmoKnightsName', 'nElmoLoyalty', 'strKarusUserID', 'strKarusKnightsName', 'strKarusLoyalty'];

    public function getUranks($shindex = false)
{
    if ($shindex === false) {
        return $this
        ->table('USER_KNIGHTS_RANK')
        ->select('*')
        ->orderBy('shIndex', 'asc')
        ->find();
    }

    return $this->where(['shIndex' => $shindex])->first();
}
}