<?php

namespace App;

use ErpNET\Models\v1\Contracts\MandanteTrait;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
//    use MandanteTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
        'mandante',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Save a new model and return the instance.
     *
     * @param  array  $attributes
     * @return static
     */
    public static function create(array $attributes = [])
    {
        if (!isset($attributes['mandante'])) $attributes['mandante'] = 'guest';
        $model = new static($attributes);

        $model->save();

        return $model;
    }

    public function isAdmin()
    {
        return true;
        return (array_search($this->email, explode(',', env('ADMIN_EMAILS', 'luciano.bapo@gmail.com')))!==false);
    }
}
