<?php

use Illuminate\Database\Seeder;

class DevMenuItemsTableSeeder extends Seeder {

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

    ];

    public function run() {
        $obj = \TCG\Voyager\Models\Menu::where('name', 'dev')->first();
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