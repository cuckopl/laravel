<?php
/**
 * Created by PhpStorm.
 * User: Pawel
 * Date: 2016-03-16
 * Time: 12:42
 */

namespace App\Model\Subservices;


use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class LeadCounterModel extends Model
{
    /**
     * @var string table name
     */
    protected $table = 'lead_counter';
    /**
     * @var bool
     */

    public $timestamps = false;

    /**
     * @var string database connection name
     */

    protected $connection = 'mysql_sub';


    /*
    * Database Fields Names
    */
    /**
     * @var string names fields from databases
     */

    public static $fieldEmail = 'email';
    /**
     * @var string names fields from databases
     */

    public static $fieldPricesPoint = 'prices_point';

    /*
     * Database Fields End
     */
    /**
     * @param Authenticatable $user
     * @return bool
     */
    public function isUserActive(Authenticatable $user)
    {
        return !(bool)$this->where(self::$fieldEmail, $user->email)->get()->count();
    }

    /**
     * @param Authenticatable $user
     * @return Collection
     */
    public function sumUserPoint(Authenticatable $user)
    {
        return $this->where(self::$fieldEmail, $user->email)->sum(self::$fieldPricesPoint);
    }

    /**
     * @param array $attributes SET UP Standard constructor
     * @return LeadCounterModel
     */
    public static function factory($attributes = array())
    {
        return new Self($attributes);
    }
}