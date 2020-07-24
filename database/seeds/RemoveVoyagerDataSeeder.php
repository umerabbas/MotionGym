<?php

use Illuminate\Database\Seeder;

class RemoveVoyagerDataSeeder extends Seeder {

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run() {

        \DB::table('data_types')->delete();
        \DB::table('data_rows')->delete();

        \DB::table('menus')->delete();
        \DB::table('menu_items')->delete();
        \DB::table('roles')->delete();
        \DB::table('permissions')->delete();
        \DB::table('permission_role')->delete();
        \DB::table('settings')->delete();
        \DB::table('users')->delete();
        \DB::table('user_roles')->delete();

        \DB::table('payment_method')->delete();
        \DB::table('refund')->delete();
        \DB::table('translations')->delete();
    }
}