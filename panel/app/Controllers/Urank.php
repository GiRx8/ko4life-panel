<?php

namespace App\Controllers;

use App\Models\UrankModel;
use CodeIgniter\Controller;

class Urank extends BaseController
{
    public function index()
    {
        $model = model(UrankModel::class);

        $data = [
            'Urank' => $model->getUranks(),

        ];
        echo view('base', $data);
    }

    public function display()
    {
        $model = model(UrankModel::class);
        $data['Urank'] = $model->getUranks();
        echo view('ranking/monthly_rank', $data);
    }
}
