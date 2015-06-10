<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {

    protected $dates = ['published_at'];
    protected $fillable = array(
        'title', 'body', 'published_at', 'user_id'
    );

    public function scopePublished($query) {
        $query->where('published_at', '<=', \Carbon\Carbon::now());
    }

    public function scopeUnPublished($query) {
        $query->where('published_at', '>=', \Carbon\Carbon::now());
    }

    //podczas zapisu mozna sobie fajnie zmodyfikować zmienną 
    //nazewnicto metody to set -> nazwa pola -> konczymy attribute
    //camel case zamieniany jest na dolne podkreślenia
    public function getPublishedAtAttribute($date) {
        return new \Carbon\Carbon($date);
    }

    /**
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user() {

        return $this->belongsTo('App\User');
    }

    /**
     *  artice has many comments 
     *  * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments() {
        return $this->hasMany('App\ArticleComments');
    }

    public function multimedia() {
        return $this->hasMany('App\Multimedia');
    }

    public function getImage() {
        $multi = $this->multimedia()->where('article_id', $this->id)->take(1)->first();
        if ($multi == null) {
            return false;
        }
        return $multi->url;
    }

    /*
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function tags() {
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }

    /*
     * get list of tags by article 
     */

    public function getTagListAttribute() {
        return $this->tags->lists('id');
    }

}
