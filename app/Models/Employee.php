<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Employee
 *
 * @property $id
 * @property $service_id
 * @property $ci
 * @property $name
 * @property $paternal_surname
 * @property $maternal_surname
 * @property $address
 * @property $phone
 * @property $created_at
 * @property $updated_at
 *
 * @property Service $service
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Employee extends Model
{
    
    static $rules = [
		'ci' => 'required',
		'name' => 'required',
		'paternal_surname' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['service_id','ci','name','paternal_surname','maternal_surname','address','phone'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function service()
    {
        return $this->hasOne('App\Models\Service', 'id', 'service_id');
    }
    

}
