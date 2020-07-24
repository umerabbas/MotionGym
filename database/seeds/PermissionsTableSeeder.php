<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder {

    private $data = [
        array(
            'key' => 'browse_admin',
            'table_name' => NULL,
        ),
        array(
            'key' => 'browse_bread',
            'table_name' => NULL,
        ),
        array(
            'key' => 'browse_database',
            'table_name' => NULL,
        ),
        array(
            'key' => 'browse_media',
            'table_name' => NULL,
        ),
        array(
            'key' => 'browse_compass',
            'table_name' => NULL,
        ),
        array(
            'key' => 'browse_menus',
            'table_name' => 'menus',
        ),
        array(
            'key' => 'read_menus',
            'table_name' => 'menus',
        ),
        array(
            'key' => 'edit_menus',
            'table_name' => 'menus',
        ),
        array(
            'key' => 'add_menus',
            'table_name' => 'menus',
        ),
        array(
            'key' => 'delete_menus',
            'table_name' => 'menus',
        ),
        array(
            'key' => 'browse_roles',
            'table_name' => 'roles',
        ),
        array(
            'key' => 'read_roles',
            'table_name' => 'roles',
        ),
        array(
            'key' => 'edit_roles',
            'table_name' => 'roles',
        ),
        array(
            'key' => 'add_roles',
            'table_name' => 'roles',
        ),
        array(
            'key' => 'delete_roles',
            'table_name' => 'roles',
        ),
        array(
            'key' => 'browse_users',
            'table_name' => 'users',
        ),
        array(
            'key' => 'read_users',
            'table_name' => 'users',
        ),
        array(
            'key' => 'edit_users',
            'table_name' => 'users',
        ),
        array(
            'key' => 'add_users',
            'table_name' => 'users',
        ),
        array(
            'key' => 'delete_users',
            'table_name' => 'users',
        ),
        array(
            'key' => 'browse_settings',
            'table_name' => 'settings',
        ),
        array(
            'key' => 'read_settings',
            'table_name' => 'settings',
        ),
        array(
            'key' => 'edit_settings',
            'table_name' => 'settings',
        ),
        array(
            'key' => 'add_settings',
            'table_name' => 'settings',
        ),
        array(
            'key' => 'delete_settings',
            'table_name' => 'settings',
        ),
        array(
            'key' => 'browse_category',
            'table_name' => 'category',
        ),
        array(
            'key' => 'read_category',
            'table_name' => 'category',
        ),
        array(
            'key' => 'edit_category',
            'table_name' => 'category',
        ),
        array(
            'key' => 'add_category',
            'table_name' => 'category',
        ),
        array(
            'key' => 'delete_category',
            'table_name' => 'category',
        ),
        array(
            'key' => 'browse_discount',
            'table_name' => 'discount',
        ),
        array(
            'key' => 'read_discount',
            'table_name' => 'discount',
        ),
        array(
            'key' => 'edit_discount',
            'table_name' => 'discount',
        ),
        array(
            'key' => 'add_discount',
            'table_name' => 'discount',
        ),
        array(
            'key' => 'delete_discount',
            'table_name' => 'discount',
        ),
        array(
            'key' => 'browse_person',
            'table_name' => 'person',
        ),
        array(
            'key' => 'read_person',
            'table_name' => 'person',
        ),
        array(
            'key' => 'edit_person',
            'table_name' => 'person',
        ),
        array(
            'key' => 'add_person',
            'table_name' => 'person',
        ),
        array(
            'key' => 'delete_person',
            'table_name' => 'person',
        ),
        array(
            'key' => 'browse_invoice',
            'table_name' => 'invoice',
        ),
        array(
            'key' => 'read_invoice',
            'table_name' => 'invoice',
        ),
        array(
            'key' => 'edit_invoice',
            'table_name' => 'invoice',
        ),
        array(
            'key' => 'add_invoice',
            'table_name' => 'invoice',
        ),
        array(
            'key' => 'delete_invoice',
            'table_name' => 'invoice',
        ),
        array(
            'key' => 'browse_extra',
            'table_name' => 'extra',
        ),
        array(
            'key' => 'read_extra',
            'table_name' => 'extra',
        ),
        array(
            'key' => 'edit_extra',
            'table_name' => 'extra',
        ),
        array(
            'key' => 'add_extra',
            'table_name' => 'extra',
        ),
        array(
            'key' => 'delete_extra',
            'table_name' => 'extra',
        ),
        array(
            'key' => 'browse_refund',
            'table_name' => 'refund',
        ),
        array(
            'key' => 'read_refund',
            'table_name' => 'refund',
        ),
        array(
            'key' => 'edit_refund',
            'table_name' => 'refund',
        ),
        array(
            'key' => 'add_refund',
            'table_name' => 'refund',
        ),
        array(
            'key' => 'delete_refund',
            'table_name' => 'refund',
        ),
        array(
            'key' => 'browse_payment_method',
            'table_name' => 'payment_method',
        ),
        array(
            'key' => 'read_payment_method',
            'table_name' => 'payment_method',
        ),
        array(
            'key' => 'edit_payment_method',
            'table_name' => 'payment_method',
        ),
        array(
            'key' => 'add_payment_method',
            'table_name' => 'payment_method',
        ),
        array(
            'key' => 'delete_payment_method',
            'table_name' => 'payment_method',
        ),
        array(
            'key' => 'browse_product',
            'table_name' => 'product',
        ),
        array(
            'key' => 'read_product',
            'table_name' => 'product',
        ),
        array(
            'key' => 'edit_product',
            'table_name' => 'product',
        ),
        array(
            'key' => 'add_product',
            'table_name' => 'product',
        ),
        array(
            'key' => 'delete_product',
            'table_name' => 'product',
        ),
        array(
            'key' => 'browse_city',
            'table_name' => 'city',
        ),
        array(
            'key' => 'read_city',
            'table_name' => 'city',
        ),
        array(
            'key' => 'edit_city',
            'table_name' => 'city',
        ),
        array(
            'key' => 'add_city',
            'table_name' => 'city',
        ),
        array(
            'key' => 'delete_city',
            'table_name' => 'city',
        ),
        array(
            'key' => 'browse_state',
            'table_name' => 'state',
        ),
        array(
            'key' => 'read_state',
            'table_name' => 'state',
        ),
        array(
            'key' => 'edit_state',
            'table_name' => 'state',
        ),
        array(
            'key' => 'add_state',
            'table_name' => 'state',
        ),
        array(
            'key' => 'delete_state',
            'table_name' => 'state',
        ),
        array(
            'key' => 'browse_service',
            'table_name' => 'service',
        ),
        array(
            'key' => 'read_service',
            'table_name' => 'service',
        ),
        array(
            'key' => 'edit_service',
            'table_name' => 'service',
        ),
        array(
            'key' => 'add_service',
            'table_name' => 'service',
        ),
        array(
            'key' => 'delete_service',
            'table_name' => 'service',
        ),
        array(
            'key' => 'browse_insurance_company',
            'table_name' => 'insurance_company',
        ),
        array(
            'key' => 'read_insurance_company',
            'table_name' => 'insurance_company',
        ),
        array(
            'key' => 'edit_insurance_company',
            'table_name' => 'insurance_company',
        ),
        array(
            'key' => 'add_insurance_company',
            'table_name' => 'insurance_company',
        ),
        array(
            'key' => 'delete_insurance_company',
            'table_name' => 'insurance_company',
        ),
        array(
            'key' => 'browse_detail',
            'table_name' => 'detail',
        ),
        array(
            'key' => 'read_detail',
            'table_name' => 'detail',
        ),
        array(
            'key' => 'edit_detail',
            'table_name' => 'detail',
        ),
        array(
            'key' => 'add_detail',
            'table_name' => 'detail',
        ),
        array(
            'key' => 'delete_detail',
            'table_name' => 'detail',
        ),
        array(
            'key' => 'browse_membership',
            'table_name' => 'membership',
        ),
        array(
            'key' => 'read_membership',
            'table_name' => 'membership',
        ),
        array(
            'key' => 'edit_membership',
            'table_name' => 'membership',
        ),
        array(
            'key' => 'add_membership',
            'table_name' => 'membership',
        ),
        array(
            'key' => 'delete_membership',
            'table_name' => 'membership',
        ),
    ];

    public function run() {

        foreach ($this->data as $each) {
            \TCG\Voyager\Models\Permission::create($each);
        }

    }
}