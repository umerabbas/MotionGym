<?php

use Illuminate\Database\Seeder;

class PaymentMethodTableSeeder extends Seeder {

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run() {

        \DB::table('payment_method')->insert(array(
            0 => array(
                'id' => 1,
                'name' => 'Cash',
                'description' => 'Cash',
                'deleted_at' => NULL,
                'created_at' => '2019-07-31 15:39:37',
                'updated_at' => '2019-07-31 15:39:37',
            ),
        ));

    }
}