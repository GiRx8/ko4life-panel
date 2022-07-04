<?php

namespace App\Controllers;
use App\Models\CrankModel;
use CodeIgniter\Controller;

class Crank extends BaseController
{
    public function index()
    {
        $model = model(UrankModel::class);

        $data = [
            'Crank' => $model->getCranks(),

        ];
        echo view('base', $data);
    }

    public function display()
    {
        $model = model(CrankModel::class);
        $data['Crank'] = $model->getCranks();
        echo view('ranking/clan_rank', $data);
    }
}
