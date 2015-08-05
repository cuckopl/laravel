<?php

namespace App\Validators;
use Illuminate\Database\Eloquent\Model;
/**
 * Description of RowExists
 *
 * @author Pawel
 */
class RowExists implements InterfaceValidator {

    public function validate(Model $model, $val, $col) {
        if ($model->where($col, '=', $val)->exists()) {
            return true;
        }
        return false;
    }

}
