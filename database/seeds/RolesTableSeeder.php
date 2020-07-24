<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder {

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run() {

        \DB::table('roles')->insert(array(
            0 => array(
                'id' => 1,
                'name' => 'dev',
                'display_name' => 'Development',
                'created_at' => '2019-07-26 04:55:55',
                'updated_at' => '2019-07-26 04:55:55',
            ),
            1 => array(
                'id' => 2,
                'name' => 'admin',
                'display_name' => 'Administrator',
                'created_at' => '2019-07-26 04:55:55',
                'updated_at' => '2019-07-26 04:55:55',
            ),
            2 => array(
                'id' => 3,
                'name' => 'user',
                'display_name' => 'Normal User',
                'created_at' => '2019-07-26 04:55:55',
                'updated_at' => '2019-07-26 04:55:55',
            ),
        ));

    }
}