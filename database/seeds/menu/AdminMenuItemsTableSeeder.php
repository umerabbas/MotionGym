<?php

use Illuminate\Database\Seeder;

class AdminMenuItemsTableSeeder extends Seeder {

    private $data = [
        array(
            'title' => 'Dashboard',
            'url' => '',
            'target' => '_self',
            'icon_class' => 'voyager-boat',
            'color' => NULL,
            'parent_id' => NULL,
            'order' => 1,
            'route' => 'voyager.dashboard',
            'parameters' => NULL,
        ),
        array(
            'title' => 'Admin',
            'url' => '',
            'target' => '_self',
            'icon_class' => 'fas fa-user-lock',
            'color' => '#000000',
            'parent_id' => NULL,
            'order' => 10,
            'route' => NULL,
            'parameters' => '',
        ),
        array(
            'title' => 'Products',
            'url' => '',
            'target' => '_self',
            'icon_class' => 'fas fa-gifts',
            'color' => '#000000',
            'parent_id' => NULL,
            'order' => 5,
            'route' => NULL,
            'parameters' => '',
        ),
        array(
            'title' => 'Sells',
            'url' => '',
            'target' => '_self',
            'icon_class' => 'fas fa-hand-holding-usd',
            'color' => '#000000',
            'parent_id' => NULL,
            'order' => 4,
            'route' => NULL,
            'parameters' => '',
        ),
        array(
            'title' => 'Memberships',
            'url' => '',
            'target' => '_self',
            'icon_class' => 'fas fa-dumbbell',
            'color' => '#000000',
            'parent_id' => NULL,
            'order' => 3,
            'route' => 'voyager.membership.index',
            'parameters' => 'null',
        ),
        array(
            'title' => 'People',
            'url' => '',
            'target' => '_self',
            'icon_class' => 'fas fa-users',
            'color' => '#000000',
            'parent_id' => NULL,
            'order' => 2,
            'route' => 'voyager.people.index',
            'parameters' => NULL,
        ),
        array(
            'title' => 'Attendance',
            'url' => '',
            'target' => '_self',
            'icon_class' => 'voyager-plus',
            'color' => '#000000',
            'parent_id' => NULL,
            'order' => 7,
            'route' => 'voyager.attendance.index',
            'parameters' => NULL,
        ),
        array(
            'title' => 'Country',
            'url' => '',
            'target' => '_self',
            'icon_class' => 'fas fa-globe-americas',
            'color' => '#000000',
            'parent_id' => NULL,
            'order' => 6,
            'route' => NULL,
            'parameters' => '',
        ),
        array(
            'title' => 'Tools',
            'url' => '',
            'target' => '_self',
            'icon_class' => 'voyager-tools',
            'color' => NULL,
            'parent_id' => NULL,
            'order' => 11,
            'route' => NULL,
            'parameters' => NULL,
        ),
        array(
            'title' => 'Settings',
            'url' => '',
            'target' => '_self',
            'icon_class' => 'voyager-settings',
            'color' => NULL,
            'parent_id' => NULL,
            'order' => 7,
            'route' => 'voyager.settings.index',
            'parameters' => NULL,
        ),
        array(
            'title' => 'Menu Builder',
            'url' => '',
            'target' => '_self',
            'icon_class' => 'voyager-list',
            'color' => NULL,
            'parent_id' => 'Tools',
            'order' => 1,
            'route' => 'voyager.menus.index',
            'parameters' => NULL,
        ),
        array(
            'title' => 'Database',
            'url' => '',
            'target' => '_self',
            'icon_class' => 'voyager-data',
            'color' => NULL,
            'parent_id' => 'Tools',
            'order' => 2,
            'route' => 'voyager.database.index',
            'parameters' => NULL,
        ),
        array(
            'title' => 'Compass',
            'url' => '',
            'target' => '_self',
            'icon_class' => 'voyager-compass',
            'color' => NULL,
            'parent_id' => 'Tools',
            'order' => 3,
            'route' => 'voyager.compass.index',
            'parameters' => NULL,
        ),
        array(
            'title' => 'BREAD',
            'url' => '',
            'target' => '_self',
            'icon_class' => 'voyager-bread',
            'color' => NULL,
            'parent_id' => 'Tools',
            'order' => 4,
            'route' => 'voyager.bread.index',
            'parameters' => NULL,
        ),
        array(
            'title' => 'Media',
            'url' => '',
            'target' => '_self',
            'icon_class' => 'voyager-images',
            'color' => NULL,
            'parent_id' => 'Admin',
            'order' => 3,
            'route' => 'voyager.media.index',
            'parameters' => NULL,
        ),
        array(
            'title' => 'Users',
            'url' => '',
            'target' => '_self',
            'icon_class' => 'voyager-person',
            'color' => NULL,
            'parent_id' => 'Admin',
            'order' => 2,
            'route' => 'voyager.users.index',
            'parameters' => NULL,
        ),
        array(
            'title' => 'Roles',
            'url' => '',
            'target' => '_self',
            'icon_class' => 'voyager-lock',
            'color' => NULL,
            'parent_id' => 'Admin',
            'order' => 1,
            'route' => 'voyager.roles.index',
            'parameters' => NULL,
        ),
        array(
            'title' => 'Categories',
            'url' => '',
            'target' => '_self',
            'icon_class' => 'voyager-categories',
            'color' => '#000000',
            'parent_id' => 'Products',
            'order' => 2,
            'route' => 'voyager.category.index',
            'parameters' => 'null',
        ),
        array(
            'title' => 'Products',
            'url' => '',
            'target' => '_self',
            'icon_class' => 'fas fa-gift',
            'color' => '#000000',
            'parent_id' => 'Products',
            'order' => 1,
            'route' => 'voyager.product.index',
            'parameters' => 'null',
        ),
        array(
            'title' => 'Invoices',
            'url' => '',
            'target' => '_self',
            'icon_class' => 'fas fa-print',
            'color' => '#000000',
            'parent_id' => 'Sells',
            'order' => 1,
            'route' => 'voyager.invoice.index',
            'parameters' => 'null',
        ),
        array(
            'title' => 'Discounts',
            'url' => '',
            'target' => '_self',
            'icon_class' => 'fas fa-percent',
            'color' => '#000000',
            'parent_id' => 'Sells',
            'order' => 3,
            'route' => 'voyager.extra.index',
            'parameters' => 'null',
        ),
        array(
            'title' => 'Refund',
            'url' => '',
            'target' => '_self',
            'icon_class' => 'fas fa-undo-alt',
            'color' => '#000000',
            'parent_id' => 'Sells',
            'order' => 4,
            'route' => 'voyager.refund.index',
            'parameters' => 'null',
        ),
        array(
            'title' => 'Payment methods',
            'url' => '',
            'target' => '_self',
            'icon_class' => 'fas fa-credit-card',
            'color' => '#000000',
            'parent_id' => 'Sells',
            'order' => 5,
            'route' => 'voyager.payment-method.index',
            'parameters' => 'null',
        ),
        array(
            'title' => 'Details',
            'url' => '',
            'target' => '_self',
            'icon_class' => 'fas fa-file-invoice',
            'color' => '#000000',
            'parent_id' => 'Sells',
            'order' => 2,
            'route' => 'voyager.detail.index',
            'parameters' => 'null',
        ),
        array(
            'title' => 'States',
            'url' => '',
            'target' => '_self',
            'icon_class' => 'fas fa-map-marked-alt',
            'color' => '#000000',
            'parent_id' => 'Country',
            'order' => 2,
            'route' => 'voyager.state.index',
            'parameters' => 'null',
        ),
        array(
            'title' => 'Cities',
            'url' => '',
            'target' => '_self',
            'icon_class' => 'fas fa-city',
            'color' => '#000000',
            'parent_id' => 'Country',
            'order' => 1,
            'route' => 'voyager.city.index',
            'parameters' => NULL,
        ),

    ];

    public function run() {
        $obj = \TCG\Voyager\Models\Menu::where('name', 'admin')->first();
        foreach ($this->data as $each) {
            $each['menu_id'] = $obj->id;

            $item = \TCG\Voyager\Models\MenuItem::where('title', $each['parent_id'])->where('menu_id', $each['menu_id'])->first();
            if ($item) {
                $each['parent_id'] = $item->id;
            }

            \TCG\Voyager\Models\MenuItem::create($each);
        }

    }
}