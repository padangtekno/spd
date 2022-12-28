<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_auth extends Model
{
    public function login($username, $password, $level)
    {
        return $this->db->table('tbl_user')
            ->where([
                'username' => $username,
                'password' => $password,
                'level' => $level,
            ])->get()->getRowArray();
    }
}
