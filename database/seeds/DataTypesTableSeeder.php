<?php

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder {

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run() {

        \DB::table('data_types')->delete();

        \DB::table('data_types')->insert(array(
            0 => array(
                'id' => 1,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'User',
                'display_name_plural' => 'Users',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'description' => 'Here you can store safely employees and others accounts',
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":"email","order_direction":"desc","default_search_key":"email","scope":null}',
            ),
            1 => array(
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
            ),
            2 => array(
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
            ),
            3 => array(
                'id' => 4,
                'name' => 'category',
                'slug' => 'category',
                'display_name_singular' => 'Category',
                'display_name_plural' => 'Categories',
                'icon' => 'voyager-categories',
                'model_name' => 'App\\Models\\Category',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => 'Here you can specify a product category.',
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":"name","order_direction":"desc","default_search_key":"name","scope":null}',
            ),
            4 => array(
                'id' => 5,
                'name' => 'product',
                'slug' => 'product',
                'display_name_singular' => 'Product',
                'display_name_plural' => 'Products',
                'icon' => 'fas fa-gift',
                'model_name' => 'App\\Models\\Product',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => 'Here you can store your products',
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":"name","order_direction":"desc","default_search_key":"name","scope":null}',
            ),
            5 => array(
                'id' => 6,
                'name' => 'extra',
                'slug' => 'extra',
                'display_name_singular' => 'Extra',
                'display_name_plural' => 'Extras',
                'icon' => 'fas fa-percentage',
                'model_name' => 'App\\Models\\Extra',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => 'Here you can store discounts for invoices details.',
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":"name","order_direction":"desc","default_search_key":"name","scope":null}',
            ),
            6 => array(
                'id' => 7,
                'name' => 'insurance_company',
                'slug' => 'insurance-company',
                'display_name_singular' => 'Insurance Company',
                'display_name_plural' => 'Insurance Companies',
                'icon' => 'voyager-heart',
                'model_name' => 'App\\Models\\Insurance_company',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => 'Here you can store insurance companies for your clients',
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":"name","order_direction":"desc","default_search_key":"name","scope":null}',
            ),
            7 => array(
                'id' => 8,
                'name' => 'refund',
                'slug' => 'refund',
                'display_name_singular' => 'Refund',
                'display_name_plural' => 'Refunds',
                'icon' => 'voyager-refresh',
                'model_name' => 'App\\Models\\Refund',
                'policy_name' => NULL,
                'controller' => '\\App\\Http\\Controllers\\Voyager\\RefundController',
                'description' => 'Here you can store product refunds .',
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":"id","order_direction":"desc","default_search_key":"reason","scope":null}',
            ),
            8 => array(
                'id' => 9,
                'name' => 'payment_method',
                'slug' => 'payment-method',
                'display_name_singular' => 'Payment Method',
                'display_name_plural' => 'Payment Methods',
                'icon' => 'fas fa-credit-card',
                'model_name' => 'App\\Models\\Payment_method',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => 'Here you can store payment methods.',
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":"name","order_direction":"desc","default_search_key":"name","scope":null}',
            ),
            9 => array(
                'id' => 10,
                'name' => 'person',
                'slug' => 'people',
                'display_name_singular' => 'Person',
                'display_name_plural' => 'People',
                'icon' => 'fas fa-users',
                'model_name' => 'App\\Models\\Person',
                'policy_name' => NULL,
                'controller' => 'App\\Http\\Controllers\\Voyager\\PersonController',
                'description' => 'Here you can store all of your clients and additional user information.',
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":"identification","order_direction":"desc","default_search_key":"identification","scope":null}',
            ),
            10 => array(
                'id' => 12,
                'name' => 'state',
                'slug' => 'state',
                'display_name_singular' => 'State',
                'display_name_plural' => 'States',
                'icon' => 'fas fa-map-marked-alt',
                'model_name' => 'App\\Models\\State',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => 'Here you can store states from a country.',
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":"name","order_direction":"desc","default_search_key":"name","scope":null}',
            ),
            11 => array(
                'id' => 13,
                'name' => 'city',
                'slug' => 'city',
                'display_name_singular' => 'City',
                'display_name_plural' => 'Cities',
                'icon' => 'voyager-location',
                'model_name' => 'App\\Models\\City',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => 'Here you can store cities from a state.',
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":"name","order_direction":"desc","default_search_key":"name","scope":null}',
            ),
            12 => array(
                'id' => 14,
                'name' => 'invoice',
                'slug' => 'invoice',
                'display_name_singular' => 'Invoice',
                'display_name_plural' => 'Invoices',
                'icon' => 'voyager-buy',
                'model_name' => 'App\\Models\\Invoice',
                'policy_name' => NULL,
                'controller' => 'App\\Http\\Controllers\\Voyager\\InvoiceController',
                'description' => 'Here you can store each sell with the corresponding product, amount and discount.',
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":"id","order_direction":"desc","default_search_key":"id","scope":null}',
            ),
            13 => array(
                'id' => 17,
                'name' => 'service',
                'slug' => 'service',
                'display_name_singular' => 'Service',
                'display_name_plural' => 'Services',
                'icon' => 'fas fa-bullhorn',
                'model_name' => 'App\\Models\\Service',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => 'Here you can store all the services that the Gym offer. Those services will be display on the public site.',
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":"name","order_direction":"desc","default_search_key":"name","scope":null}',
            ),
            14 => array(
                'id' => 18,
                'name' => 'detail',
                'slug' => 'detail',
                'display_name_singular' => 'Detail',
                'display_name_plural' => 'Details',
                'icon' => 'fas fa-file-invoice',
                'model_name' => 'App\\Models\\Detail',
                'policy_name' => NULL,
                'controller' => 'App\\Http\\Controllers\\Voyager\\DetailController',
                'description' => 'Here you can specify the product for a given invoice',
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":"id","order_direction":"desc","default_search_key":"invoice_id","scope":null}',
            ),
            15 => array(
                'id' => 19,
                'name' => 'membership',
                'slug' => 'membership',
                'display_name_singular' => 'Membership',
                'display_name_plural' => 'Memberships',
                'icon' => 'fas fa-dumbbell',
                'model_name' => 'App\\Models\\Membership',
                'policy_name' => NULL,
                'controller' => 'App\\Http\\Controllers\\Voyager\\MembershipController',
                'description' => 'Here you can store a payment for the monthly membership',
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":"id","order_direction":"desc","default_search_key":"invoice_id","scope":null}',
            ),
        ));

    }
}