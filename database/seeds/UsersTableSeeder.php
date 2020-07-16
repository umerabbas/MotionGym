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
                'avatar' => NULL,
                'email_verified_at' => NULL,
                'password' => '$2y$10$gTPIGjOQsbV1MwVSdkJks.tGEkshjE6IcweTbzt86n0iP6cFXKTsG',
                'remember_token' => 'FQKOvqNP6pMtiCFa5cxYIZv8E0nksv7jBdoETYc2NkVxJ6TE0UdCXg8O4ld8',
                'settings' => '{"locale":"en"}',
                'deleted_at' => NULL,
                'person_id' => NULL,
            ),
        ));

    }
}