<?php

namespace App\Model\Resources;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

/**
 * Description of ModuleResources
 *
 * @author Pawel
 */
class ModuleResources extends \App\Model\BaseResource {

    public function getTables() {
        $tablessss = array();
        $tables = DB::select('SHOW TABLES');
        foreach ($tables as $table) {
            $talbeasdasd = get_object_vars($table);
            $tableName = array_pop($talbeasdasd);
            $tablessss[$tableName] = $tableName;
        }
        return $tablessss;
    }

    public static function factoryCreate($id = null) {
        return new self($id);
    }

    public function createModule($tableName) {
        $builder = new \App\CodeBuilder\CrudBuilder();
        return $builder->build();
    }

    public function validateAndSave(Request $request, Model $modelEntity) {
        $this->model = $modelEntity;
        $validator = $this->getValidators($request);
        $status = !$validator->fails();


        if ($status) {
            $model = $this->store($request->all());
            $this->createCrud($request, $model->id);
            $info = \App\Helpers\Notification::generateSucces('Crud generated succesfully.');
        } else {
            $info = \App\Helpers\Notification::generateError($validator->errors()->all());
        }


        return response()->json(['status' => $status, 'info' => $info]);
    }

    protected function createCrud($request, $moduleId) {
        $crudBuilder = new \App\CodeBuilder\CrudBuilder();
        $crudBuilder->setControllerName($request->input('controller_name'));
        $crudBuilder->setModelName($request->input('table_name'));
        $crudBuilder->setModuleId($moduleId);
        $crudBuilder->generate();
    }

}
