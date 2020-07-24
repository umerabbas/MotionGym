<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {

    private $data = [
        array(
            'role_id' => 'dev',
            'name' => 'Dev Greyneon',
            'email' => 'dev@greyneon.com',
            'avatar' => 'users/default.png',
            'email_verified_at' => NULL,
            'password' => '$2y$10$MYAKPM/2Nb4.hoKlagXEEuMhPX2rkUsR4CN/6rj4Hu7UhLxkdbraC',
            'remember_token' => '',
            // 'settings' => '{"locale":"en"}',
            'person_id' => NULL,
        ),
        array(
            'role_id' => 'admin',
            'name' => 'Admin',
            'email' => 'admin@greyneon.com',
            'avatar' => 'users/default.png',
            'email_verified_at' => NULL,
            'password' => '$2y$10$MYAKPM/2Nb4.hoKlagXEEuMhPX2rkUsR4CN/6rj4Hu7UhLxkdbraC',
            'remember_token' => '',
            // 'settings' => '{"locale":"en"}',
            'person_id' => NULL,
        ),
    ];

    public function run() {
        foreach ($this->data as $each) {
            $obj = \TCG\Voyager\Models\Role::where('name', $each['role_id'])->first();

            if (!$obj) {
                continue;
            }
            $each['role_id'] = $obj->id;
            // $each['settings'] = json_decode($each['settings']);
            \TCG\Voyager\Models\User::create($each);
        }

    }
}