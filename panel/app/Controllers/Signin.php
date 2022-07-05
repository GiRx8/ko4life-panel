<?php
namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Controller;

class Signin extends Controller
{
    public function index()
    {
        helper(['form']);
        //echo view('templates/dashboard');
        echo view('templates/signin');
    }

    public function login()
    {
        $session = session();
        $userModel = new UserModel();
        $email = $this->request->getVar('email');
        $user= $this->request->getVar('strAccountID');
        $password = $this->request->getVar('password');
        $pin = $this->request->getVar('pin');
        $role = $this->request->getVar('role');

        $data = $userModel->where('email', $email)->first();

        if ($data) {
            $pass = $data['strPasswd'];
            //$authenticatePassword = password_verify($password, $pass);
            //if ($authenticatePassword) {
            if ($password == $pass) {
                $ses_data = [
                    'id' => $data['id'],
                    'name' => $data['name'],
                    'strAccountID' => $data['strAccountID'],
                    'email' => $data['email'],
                    'role' => $data['role'],
                    'pin' => $data['pin'],
                    'isLoggedIn' => true,
                ];
                $session->set($ses_data);
                return redirect()->to('/index');

            } else {
                $session->setFlashdata('msg', 'Password is incorrect.');
                return redirect()->to('/');
            }
        } else {
            $session->setFlashdata('msg', 'Email does not exist.');
            return redirect()->to('/');
        }
    }

    public function updatepassword()
    {
        if (isset($_SESSION['isLoggedIn']) == true) {
        helper(['form']);
        $data = [];
        echo view('/templates/change_password', $data);
        
        } else {
            return redirect()->to('/');
        }
    }

    public function changepassword()
    {
        helper(['form']);
        $session = session();
        $userModel = new UserModel();
        $id = $session->get('id');
        $password = $this->request->getVar('oldpassword');
        $newpassword = $this->request->getVar('newpassword');
        $confirmpassword = $this->request->getVar('confirmpassword');
        $data = $userModel->find($id);
        $pass = $data['strPasswd'];
        $authenticatePassword = $password == $pass;
        if ($authenticatePassword) {
            if ($newpassword == $confirmpassword) {
                $newpass = $newpassword;
                $userModel->update($id, [
                    'strPasswd' => $newpass,
                ]);
                $session->setFlashdata('msg', 'Password has been changed.');
                return redirect()->to('/logout');
            } else {
                $session->setFlashdata('msg', 'Password not match.');
                return redirect()->to('/password-reset');
            }
        } else {
            $session->setFlashdata('msg', 'Password is incorrect.');
            return redirect()->to('/password-reset');
        }
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}