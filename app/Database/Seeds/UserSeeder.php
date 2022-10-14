<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {

        // 1 data
        // $data = [
        //     'name_user' => 'Administrator',
        //     'email_user' => 'satriasapta48@gmail.com',
        //     'password_user' => password_hash('12345',PASSWORD_BCRYPT)
        // ];
        // $this->db->table('users')->insert($data); 

        // multi data
        $data = [
            [
                'name_user' => 'Administrator',
                'email_user' => 'administrator70@gmail.com',
                'password_user' => password_hash('12345', PASSWORD_BCRYPT)
            ],
            [
                'name_user' => 'Satria Sapta',
                'email_user' => 'satriasapta48@gmail.com',
                'password_user' => password_hash('satriasapta', PASSWORD_BCRYPT)
            ],
        ];
        $this->db->table('users')->insertBatch($data); 
    }
}
