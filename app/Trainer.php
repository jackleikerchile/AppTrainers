<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    //ACTUALIZAR LOS CAMPOS DEL AVATAR
    protected $fillable = ['name', 'avatar', 'slug'];
    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
