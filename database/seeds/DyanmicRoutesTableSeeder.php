<?php

use Illuminate\Database\Seeder;

class DyanmicRoutesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        
        DB::insert("INSERT INTO `dynamic_routes` (`id`, `name`, `code_eval`, `module_id`, `created_at`, `updated_at`, `as`) VALUES(103, 'index', 'Route::get(\'/DynamicRoutes\', [\'as\' => \'DynamicRoutesIndex\', \'uses\' => \'DynamicRoutes@index\']);', 64, '2015-08-12 12:10:13', '2015-08-12 12:10:13', 'DynamicRoutesIndex')");
//        INSERT INTO `dynamic_routes` (`id`, `name`, `code_eval`, `module_id`, `created_at`, `updated_at`, `as`) VALUES(104, 'create', 'Route::get(\'/DynamicRoutes/create\', [\'as\' => \'DynamicRoutesGet\', \'uses\' => \'DynamicRoutes@create\']);', 64, '2015-08-12 12:10:13', '2015-08-12 12:10:13', 'DynamicRoutesIndex');
//        INSERT INTO `dynamic_routes` (`id`, `name`, `code_eval`, `module_id`, `created_at`, `updated_at`, `as`) VALUES(105, 'store', 'Route::post(\'/DynamicRoutes\', [\'as\' => \'DynamicRoutesAdd\', \'uses\' => \'DynamicRoutes@store\']);', 64, '2015-08-12 12:10:13', '2015-08-12 12:10:13', 'DynamicRoutesIndex');
//        INSERT INTO `dynamic_routes` (`id`, `name`, `code_eval`, `module_id`, `created_at`, `updated_at`, `as`) VALUES(106, 'edit', 'Route::get(\'/DynamicRoutes/edit/{id}\', [\'as\' => \'DynamicRoutesEdit\', \'uses\' => \'DynamicRoutes@edit\'])->where(\'id\', \'[0-9]+\');', 64, '2015-08-12 12:10:13', '2015-08-12 12:10:13', 'DynamicRoutesIndex');
//        INSERT INTO `dynamic_routes` (`id`, `name`, `code_eval`, `module_id`, `created_at`, `updated_at`, `as`) VALUES(107, 'destroy', 'Route::delete(\'/DynamicRoutes/{id}\', [\'as\' => \'DynamicRoutesDestroy\', \'uses\' => \'DynamicRoutes@destroy\'])->where(\'id\', \'[0-9]+\');', 64, '2015-08-12 12:10:13', '2015-08-12 12:10:13', 'DynamicRoutesIndex');
//        INSERT INTO `dynamic_routes` (`id`, `name`, `code_eval`, `module_id`, `created_at`, `updated_at`, `as`) VALUES(108, 'datatable', 'Route::get(\'/DynamicRoutes/dataTable\', [\'as\' =>\'DynamicRoutesDataTable\', \'uses\' => \'DynamicRoutes@dataTable\']);', 64, '2015-08-12 12:10:13', '2015-08-12 12:10:13', 'DynamicRoutesIndex');

        //
    }

}
