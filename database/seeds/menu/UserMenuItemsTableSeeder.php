<?php

use Illuminate\Database\Seeder;

class UserMenuItemsTableSeeder extends Seeder {

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
    ];

    public function run() {
        $obj = \TCG\Voyager\Models\Menu::where('name', 'user')->first();
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