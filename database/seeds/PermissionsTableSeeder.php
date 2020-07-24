<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder {

    private $data = [
        array(
            'key' => 'browse_admin',
            'table_name' => NULL,
        ),
        array(
            'key' => 'browse_bread',
            'table_name' => NULL,
        ),
        array(
            'key' => 'browse_database',
            'table_name' => NULL,
        ),
        array(
            'key' => 'browse_media',
            'table_name' => NULL,
        ),
        array(
            'key' => 'browse_compass',
            'table_name' => NULL,
        ),
    ];

    public function run() {

        foreach ($this->data as $each) {
            \TCG\Voyager\Models\Permission::create($each);
        }

    }
}