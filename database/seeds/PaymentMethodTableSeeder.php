<?php

use Illuminate\Database\Seeder;

class PaymentMethodTableSeeder extends Seeder {

    private $data = [
        array(
            'name' => 'Cash',
            'description' => 'Cash',
        ),
    ];

    public function run() {
        foreach ($this->data as $each) {
            \App\Models\PaymentMethod::create($each);
        }

    }

}