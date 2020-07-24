<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder {

    private $data = [
        array(
            'name' => 'admin',
            'display_name' => 'Administrator',
        ),
        array(
            'name' => 'dev',
            'display_name' => 'Developer',
        ),
        array(
            'name' => 'user',
            'display_name' => 'Normal User',
        ),
    ];

    public function run() {

        foreach ($this->data as $each) {
            \TCG\Voyager\Models\Role::create($each);
        }

    }
}