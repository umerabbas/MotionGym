<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder {

    private $data = [
        array(
            'name' => 'admin',
        ),
    ];

    public function run() {

        foreach ($this->data as $each) {
            \TCG\Voyager\Models\Menu::create($each);
        }

    }
}