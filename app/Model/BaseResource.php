<?php

namespace App\Model;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Validator;

abstract class BaseResource {

    protected $id;
    protected $model;

    public function __construct($id = null) {
        $this->id = $id;
    }

    public function validateAndSave(Request $request, Model $modelEntity) {
        $this->model = $modelEntity;
        $validator = $this->getValidators($request);
        $status = !$validator->fails();

        if ($status) {
            $this->store($request->all());
            $info = \App\Helpers\Notification::generateSucces('Saving role data was succesfull.');
        } else {
            $info = \App\Helpers\Notification::generateError($validator->errors()->all());
        }


        return response()->json(['status' => $status, 'info' => $info]);
    }

    protected function store($data) {
        if ($this->id == null) {
            $model=$this->model->create($data);
        } else {
            $model = $this->model->find($this->id);
            $model->update($data);
        }
        return $model;
    }

    protected function getValidators($request) {
        return Validator::make($request->all(), []);
    }

//     public static function factoryCreate($id = null){ //make this good factory
}
