<?php
namespace App\Controllers;
use CodeIgniter\Controller;

class Home extends BaseController
{
    public function index()
    {
        $model = model(NewsModel::class);
        $model_user = model(UrankModel::class);
        $model_clan = model(CrankModel::class);

            $data = [
                'news' => $model->getNews(),
                'Urank' => $model_user->getUranks(),
                'Crank' => $model_clan->getCranks(),
                
            ];
            echo view('base', $data);
        
    }

    public function dashboard()
    {
        if (isset($_SESSION['isLoggedIn']) && $_SESSION['role'] == 'admin' | $_SESSION['role'] == 'mod' | $_SESSION['role'] == 'user') {
            $model = model(NewsModel::class);
            $model_user = model(UrankModel::class);
            $model_clan = model(CrankModel::class);
    
                $data = [
                    'news' => $model->getNews(),
                    'Urank' => $model_user->getUranks(),
                    'Crank' => $model_clan->getCranks(),
                    
                ];
                echo view('templates/dashboard', $data);
        } else {
            
        }
    }
    
}
