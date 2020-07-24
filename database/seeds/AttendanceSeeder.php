<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataType;

class AttendanceSeeder extends Seeder {

    public function run() {
        $dataType = $this->dataType('slug', 'attendances');
        if (!$dataType->exists) {
            $dataType->fill([
                'name' => 'attendances',
                'display_name_singular' => 'Attendance',
                'display_name_plural' => 'Attendances',
                'icon' => 'voyager-person',
                'model_name' => 'App\Models\Attendance',
                'policy_name' => null,
                'controller' => null,
                'generate_permissions' => 1,
                'description' => '',
                'details' => '{"0":"{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}","order_column":null,"order_display_column":null,"order_direction":"desc","default_search_key":null,"scope":null}',
            ])->save();
        }

        // $menu = Menu::where('name', 'admin')->firstOrFail();

        // $menuItem = MenuItem::firstOrNew([
        //     'menu_id' => $menu->id,
        //     'title' => __('Attendance'),
        //     'url' => '',
        //     'route' => 'voyager.attendance.index',
        // ]);
        // if (!$menuItem->exists) {
        //     $menuItem->fill([
        //         'target' => '_self',
        //         'icon_class' => 'voyager-plus',
        //         'color' => null,
        //         'parent_id' => null,
        //         'order' => 15,
        //     ])->save();
        // }
    }

    /**
     * [dataType description].
     *
     * @param [type] $field [description]
     * @param [type] $for   [description]
     *
     * @return [type] [description]
     */
    protected function dataType($field, $for) {
        return DataType::firstOrNew([$field => $for]);
    }

}
