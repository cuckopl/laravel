<?php

namespace App\Validators;

use Illuminate\Database\Eloquent\Model;

/**
 * Description of InterfaceValidator
 *
 * @author Pawel Cudzilo
 */
interface InterfaceValidator {

    public function validate(Model $model, $val, $col);
}
