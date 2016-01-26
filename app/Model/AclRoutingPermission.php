<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Kodeine\Acl\Models\Eloquent\Permission;

class AclRoutingPermission extends Permission {

    const ROUTE_RULE = 'route';

    public function getSlugAttribute($value) {
        $encoded = json_encode($value);
        if (isset($encoded[self::ROUTE_RULE])) {
            return $encoded[self::ROUTE_RULE];
        }
        return parent::getSlugAttribute($value);
    }

}
