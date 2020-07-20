<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run() {

        \DB::table('users')->delete();

        \DB::table('users')->insert(array(
            0 => array(
                'id' => 1,
                'role_id' => 1,
                'name' => 'Dev Greyneon',
                'email' => 'dev@greyneon.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$fXNRoTIdzD0zmR1ADHVQ3OUKMJDnuBTTolpZCobU7Tip4aYtVphlm',
                'remember_token' => '',
                'settings' => '{"locale":"en"}',
                'deleted_at' => NULL,
                'created_at' => '2019-07-24 21:28:15',
                'updated_at' => '2019-08-01 20:52:12',
                'person_id' => NULL,
            ),
        ));

    }
}