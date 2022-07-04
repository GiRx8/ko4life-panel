<?php
namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Controller;

class Signup extends Controller
{
    public function index()
    {
        helper(['form']);
        $data = [];
        echo view('templates/signup', $data);
    }

    public function register()
    {
        helper(['form']);
        $rules = [
            'name' => 'required|min_length[2]|max_length[50]',
            'email' => 'required|min_length[4]|max_length[100]|valid_email|is_unique[TB_USER.email]',
            'user' => 'required|min_length[2]|max_length[50]|is_unique[TB_USER.strAccountID]',
            'pin' => 'required|min_length[2]|max_length[50]',
            'password' => 'required|min_length[4]|max_length[50]',
            'confirmpassword' => 'matches[password]',
        ];

        if ($this->validate($rules)) {
            $userModel = new UserModel();
            $data = [
                'name' => $this->request->getVar('name'),
                'email' => $this->request->getVar('email'),
                'strAccountID' => $this->request->getVar('user'),
                'pin' => $this->request->getVar('pin'),
                //'strPasswd' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'strPasswd' =>$this->request->getVar('password'),
                'role' => "user",
                'strAuthority' => "1",
            ];
            $userModel->save($data);
            return redirect()->to('/');
        } else {
            $data['validation'] = $this->validator;
            echo view('templates/signup', $data);
        }

    }

}
