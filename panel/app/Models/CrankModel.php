<?php
namespace App\Models;
use CodeIgniter\Model;

class CrankModel extends Model
{
    protected $table = 'KNIGHTS';

    protected $allowedFields = ['Nation','Ranking', 'IDName', 'Chief', 'Points'];

    public function getCranks($Ranking = false)
{
    if ($Ranking === false) {
        return $this
        ->table('KNIGHTS')
        ->select('*')
        ->orderBy('Ranking', 'asc')
        ->find();
    }

    return $this->where(['Ranking' => $Ranking])->first();
}
}