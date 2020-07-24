<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {

    private $data = [
        array(
            'role_id' => 'admin',
            'name' => 'Dev Greyneon',
            'email' => 'dev@greyneon.com',
            'avatar' => 'users/default.png',
            'email_verified_at' => NULL,
            'password' => '$2y$10$lqe0gevE9u9MijGbNtQgu.SQf8NuUi9VrM406kIf3KAXmlVlKdd/m',
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