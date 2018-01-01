<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movement extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'Movements';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['provider','order_ref', 'plan','date_arrived','state','observtion','quantity','category'];

    
}
