<?php 
namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'registration';
    protected $primaryKey = 'user_id';
    protected $allowedFields = ['user_type', 'user_level', 'password', 'username', 'email', 'first_name', 'last_name'];

    public function register($data)
    {
        return $this->insert($data);
    }

    public function login($username, $password)
    {
        $user = $this->asArray()
                     ->where(['username' => $username])
                     ->first();

        if ($user != null) {
            if (password_verify($password, $user['password'])) {
                return $user;
            }
        }

        return null;
    }
    
}
?>