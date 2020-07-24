<?php
/**
 * @ Author: @CristianMarinT
 * @ Create Time: 2019-07-01 20:57:41
 * @ Modified by: @CristianMarinT
 * @ Modified time: 2019-07-31 19:50:23
 * @ Description:
 */

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {

        // Basic Settings & Dummy data (DO NOT USE VOYAGER ONES DUE TO LOSE IN DATA)
        $this->call(PermissionsTableSeeder::class);

        $this->call(DataTypesTableSeeder::class);
        $this->call(DataRowsTableSeeder::class);

        $this->call(RolesTableSeeder::class);
        $this->call(PermissionRoleTableSeeder::class);

        $this->call(MenusTableSeeder::class);
        $this->call(AdminMenuItemsTableSeeder::class);

        $this->call(SettingsTableSeeder::class);

        $this->call(UsersTableSeeder::class);
        $this->call(PaymentMethodTableSeeder::class);

        $this->call(AttendanceSeeder::class);

    }
}
