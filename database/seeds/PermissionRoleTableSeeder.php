<?php

use Illuminate\Database\Seeder;

class PermissionRoleTableSeeder extends Seeder {

    public function run() {
        \TCG\Voyager\Models\Permission::where()->first();

        foreach ($this->data as $each) {
            \TCG\Voyager\Models\Permission::create($each);
        }

    }

}