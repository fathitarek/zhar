<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class realState
 * @package App\Models
 * @version April 30, 2019, 9:13 pm UTC
 *
 * @property string city
 * @property string group
 * @property string building
 * @property string flat
 * @property string type
 * @property string view
 * @property string purpose
 * @property string name
 * @property string mobile
 * @property string price
 * @property string state
 * @property date date
 * @property string note
 */
class realState extends Model
{
    use SoftDeletes;

    public $table = 'real_states';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'city',
        'group',
        'building',
        'flat',
        'type',
        'view',
        'purpose',
        'name',
        'mobile',
        'price',
        'state',
        'date',
        'note',
        'area'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'city' => 'string',
        'group' => 'string',
        'building' => 'string',
        'flat' => 'string',
        'type' => 'string',
        'view' => 'string',
        'purpose' => 'string',
        'name' => 'string',
        'mobile' => 'string',
        'price' => 'string',
        'state' => 'string',
        'date' => 'date',
        'note' => 'string',
         'area'=>'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'city' => 'required',
        'group' => 'required',
        'building' => 'required',
        'flat' => 'required',
        'type' => 'required',
        'view' => 'required',
        'purpose' => 'required',
        'name' => 'required',
        'mobile' => 'required',
        'price' => 'required',
        'state' => 'required',
        'date' => 'required',
         'area'=>'required'
    ];

    
}
