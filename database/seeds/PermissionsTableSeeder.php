<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder {

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run() {

        \DB::table('permissions')->delete();

        \DB::table('permissions')->insert(array(
            0 => array(
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
            ),
            1 => array(
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
            ),
            2 => array(
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
            ),
            3 => array(
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
            ),
            4 => array(
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
            ),
            5 => array(
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
            ),
            6 => array(
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
            ),
            7 => array(
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
            ),
            8 => array(
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
            ),
            9 => array(
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
            ),
            10 => array(
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
            ),
            11 => array(
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
            ),
            12 => array(
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
            ),
            13 => array(
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
            ),
            14 => array(
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
            ),
            15 => array(
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
            ),
            16 => array(
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
            ),
            17 => array(
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
            ),
            18 => array(
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
            ),
            19 => array(
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
            ),
            20 => array(
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
            ),
            21 => array(
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
            ),
            22 => array(
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
            ),
            23 => array(
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
            ),
            24 => array(
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
            ),
            25 => array(
                'id' => 26,
                'key' => 'browse_category',
                'table_name' => 'category',
            ),
            26 => array(
                'id' => 27,
                'key' => 'read_category',
                'table_name' => 'category',
            ),
            27 => array(
                'id' => 28,
                'key' => 'edit_category',
                'table_name' => 'category',
            ),
            28 => array(
                'id' => 29,
                'key' => 'add_category',
                'table_name' => 'category',
            ),
            29 => array(
                'id' => 30,
                'key' => 'delete_category',
                'table_name' => 'category',
            ),
            30 => array(
                'id' => 31,
                'key' => 'browse_discount',
                'table_name' => 'discount',
            ),
            31 => array(
                'id' => 32,
                'key' => 'read_discount',
                'table_name' => 'discount',
            ),
            32 => array(
                'id' => 33,
                'key' => 'edit_discount',
                'table_name' => 'discount',
            ),
            33 => array(
                'id' => 34,
                'key' => 'add_discount',
                'table_name' => 'discount',
            ),
            34 => array(
                'id' => 35,
                'key' => 'delete_discount',
                'table_name' => 'discount',
            ),
            35 => array(
                'id' => 36,
                'key' => 'browse_person',
                'table_name' => 'person',
            ),
            36 => array(
                'id' => 37,
                'key' => 'read_person',
                'table_name' => 'person',
            ),
            37 => array(
                'id' => 38,
                'key' => 'edit_person',
                'table_name' => 'person',
            ),
            38 => array(
                'id' => 39,
                'key' => 'add_person',
                'table_name' => 'person',
            ),
            39 => array(
                'id' => 40,
                'key' => 'delete_person',
                'table_name' => 'person',
            ),
            40 => array(
                'id' => 41,
                'key' => 'browse_invoice',
                'table_name' => 'invoice',
            ),
            41 => array(
                'id' => 42,
                'key' => 'read_invoice',
                'table_name' => 'invoice',
            ),
            42 => array(
                'id' => 43,
                'key' => 'edit_invoice',
                'table_name' => 'invoice',
            ),
            43 => array(
                'id' => 44,
                'key' => 'add_invoice',
                'table_name' => 'invoice',
            ),
            44 => array(
                'id' => 45,
                'key' => 'delete_invoice',
                'table_name' => 'invoice',
            ),
            45 => array(
                'id' => 46,
                'key' => 'browse_extra',
                'table_name' => 'extra',
            ),
            46 => array(
                'id' => 47,
                'key' => 'read_extra',
                'table_name' => 'extra',
            ),
            47 => array(
                'id' => 48,
                'key' => 'edit_extra',
                'table_name' => 'extra',
            ),
            48 => array(
                'id' => 49,
                'key' => 'add_extra',
                'table_name' => 'extra',
            ),
            49 => array(
                'id' => 50,
                'key' => 'delete_extra',
                'table_name' => 'extra',
            ),
            50 => array(
                'id' => 51,
                'key' => 'browse_refund',
                'table_name' => 'refund',
            ),
            51 => array(
                'id' => 52,
                'key' => 'read_refund',
                'table_name' => 'refund',
            ),
            52 => array(
                'id' => 53,
                'key' => 'edit_refund',
                'table_name' => 'refund',
            ),
            53 => array(
                'id' => 54,
                'key' => 'add_refund',
                'table_name' => 'refund',
            ),
            54 => array(
                'id' => 55,
                'key' => 'delete_refund',
                'table_name' => 'refund',
            ),
            55 => array(
                'id' => 56,
                'key' => 'browse_payment_method',
                'table_name' => 'payment_method',
            ),
            56 => array(
                'id' => 57,
                'key' => 'read_payment_method',
                'table_name' => 'payment_method',
            ),
            57 => array(
                'id' => 58,
                'key' => 'edit_payment_method',
                'table_name' => 'payment_method',
            ),
            58 => array(
                'id' => 59,
                'key' => 'add_payment_method',
                'table_name' => 'payment_method',
            ),
            59 => array(
                'id' => 60,
                'key' => 'delete_payment_method',
                'table_name' => 'payment_method',
            ),
            60 => array(
                'id' => 61,
                'key' => 'browse_product',
                'table_name' => 'product',
            ),
            61 => array(
                'id' => 62,
                'key' => 'read_product',
                'table_name' => 'product',
            ),
            62 => array(
                'id' => 63,
                'key' => 'edit_product',
                'table_name' => 'product',
            ),
            63 => array(
                'id' => 64,
                'key' => 'add_product',
                'table_name' => 'product',
            ),
            64 => array(
                'id' => 65,
                'key' => 'delete_product',
                'table_name' => 'product',
            ),
            65 => array(
                'id' => 66,
                'key' => 'browse_city',
                'table_name' => 'city',
            ),
            66 => array(
                'id' => 67,
                'key' => 'read_city',
                'table_name' => 'city',
            ),
            67 => array(
                'id' => 68,
                'key' => 'edit_city',
                'table_name' => 'city',
            ),
            68 => array(
                'id' => 69,
                'key' => 'add_city',
                'table_name' => 'city',
            ),
            69 => array(
                'id' => 70,
                'key' => 'delete_city',
                'table_name' => 'city',
            ),
            70 => array(
                'id' => 71,
                'key' => 'browse_state',
                'table_name' => 'state',
            ),
            71 => array(
                'id' => 72,
                'key' => 'read_state',
                'table_name' => 'state',
            ),
            72 => array(
                'id' => 73,
                'key' => 'edit_state',
                'table_name' => 'state',
            ),
            73 => array(
                'id' => 74,
                'key' => 'add_state',
                'table_name' => 'state',
            ),
            74 => array(
                'id' => 75,
                'key' => 'delete_state',
                'table_name' => 'state',
            ),
            75 => array(
                'id' => 76,
                'key' => 'browse_service',
                'table_name' => 'service',
            ),
            76 => array(
                'id' => 77,
                'key' => 'read_service',
                'table_name' => 'service',
            ),
            77 => array(
                'id' => 78,
                'key' => 'edit_service',
                'table_name' => 'service',
            ),
            78 => array(
                'id' => 79,
                'key' => 'add_service',
                'table_name' => 'service',
            ),
            79 => array(
                'id' => 80,
                'key' => 'delete_service',
                'table_name' => 'service',
            ),
            80 => array(
                'id' => 81,
                'key' => 'browse_insurance_company',
                'table_name' => 'insurance_company',
            ),
            81 => array(
                'id' => 82,
                'key' => 'read_insurance_company',
                'table_name' => 'insurance_company',
            ),
            82 => array(
                'id' => 83,
                'key' => 'edit_insurance_company',
                'table_name' => 'insurance_company',
            ),
            83 => array(
                'id' => 84,
                'key' => 'add_insurance_company',
                'table_name' => 'insurance_company',
            ),
            84 => array(
                'id' => 85,
                'key' => 'delete_insurance_company',
                'table_name' => 'insurance_company',
            ),
            85 => array(
                'id' => 86,
                'key' => 'browse_detail',
                'table_name' => 'detail',
            ),
            86 => array(
                'id' => 87,
                'key' => 'read_detail',
                'table_name' => 'detail',
            ),
            87 => array(
                'id' => 88,
                'key' => 'edit_detail',
                'table_name' => 'detail',
            ),
            88 => array(
                'id' => 89,
                'key' => 'add_detail',
                'table_name' => 'detail',
            ),
            89 => array(
                'id' => 90,
                'key' => 'delete_detail',
                'table_name' => 'detail',
            ),
            90 => array(
                'id' => 91,
                'key' => 'browse_membership',
                'table_name' => 'membership',
            ),
            91 => array(
                'id' => 92,
                'key' => 'read_membership',
                'table_name' => 'membership',
            ),
            92 => array(
                'id' => 93,
                'key' => 'edit_membership',
                'table_name' => 'membership',
            ),
            93 => array(
                'id' => 94,
                'key' => 'add_membership',
                'table_name' => 'membership',
            ),
            94 => array(
                'id' => 95,
                'key' => 'delete_membership',
                'table_name' => 'membership',
            ),
        ));

    }
}