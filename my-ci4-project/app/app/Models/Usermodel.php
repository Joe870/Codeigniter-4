<?php namespace App\Models;

use CodeIgniter\Model; 

class UserModel extends Model {
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['firstname', 'lastname', 'email', 'password'];
    protected $useTimestamps = false;
    protected $beforeInsert = ['hashPassword'];
    protected $beforeUpdate = ['hashPassword'];
    protected function hashPassword(array $data) {
        if (isset($data['password'])) {
            $data['data']['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        }
        return $data;
    }
}