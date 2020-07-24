<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder {

    private $data = [
        array(
            'name' => 'admin',
        ),
        array(
            'name' => 'user',
        ),
    ];

    public function run() {

        foreach ($this->data as $each) {
            \TCG\Voyager\Models\Menu::create($each);
        }

    }
}