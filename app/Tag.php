<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model {

    protected $fillable = array(
        'name'
    );

    /*
     * get the articles associated wth given tag
     */

    public function articles() {
        return $this->belongsToMany('App\Article');
    }

    public function syncSync($array = null) {
        if (!is_array($array)) {
            $array = array();
        }
        $this->sync($array);
    }

}
