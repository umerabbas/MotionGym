<?php

use Illuminate\Database\Seeder;

class PermissionRoleTableSeeder extends Seeder {

    public function run() {
        $data = \TCG\Voyager\Models\Permission::all();

        $obj = \TCG\Voyager\Models\Role::where('name', 'dev')->first();
        foreach ($data as $each) {
            \DB::table('permission_role')->insert(['permission_id' => $each->id, 'role_id' => $obj->id]);
        }
    }

}