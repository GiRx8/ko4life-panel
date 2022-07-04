<?php 
namespace App\Models;  
use CodeIgniter\Model;
  
class UserModel extends Model{
    protected $table = 'TB_USER';
    
    protected $allowedFields = [
        'id',
        'name',
        'email',
        'strAccountID',
        'pin',
        'role',
        'strAuthority',
        'strPasswd',
    ];
}