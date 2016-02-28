
<?php

use Illuminate\Database\Seeder;

class UserSeederAndRole extends Seeder {

    public function run() {
        // Uncomment the below to wipe the table clean before populating
        DB::table('permission_user')->delete();
        DB::table('permissions')->delete();
        DB::table('users')->delete();



        $tasks = array(
            ['name' => config('acl.defaultUser'), 'id' => 1]
        );
        $permission = ['id' => 1, 'slug' => '{"url":true}', 'name' => 'route'];
        $userPermission = ['user_id' => 1, 'permission_id' => 1];
        DB::table('users')->insert($tasks);
        DB::table('permissions')->insert($permission);
        DB::table('permission_user')->insert($userPermission);
    }

}
